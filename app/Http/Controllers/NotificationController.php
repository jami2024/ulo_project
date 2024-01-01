<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Citizen;
use App\Models\MoujaList;
use App\Models\GroupList;
use App\Models\RecipientList;
use App\Models\NotificationList;
use App\Models\RecipientGroupList;
use App\Models\NotificationFormatList;
use App\Models\NotificationRecipientList;
use App\Models\GroupNotificationFormatList;

use Illuminate\Support\Facades\DB;
use Yajra\DataTables\DataTables;

class NotificationController extends Controller
{
    /**
     * Write code on Method
     *
     * @return response()
     */

    public function index(){
    }

    public function create(){

        $notification = NotificationList::latest()->take(10)->get();
        $variables = $this->notificationVariable();
        return view('notification.notificationCreate', ['notifications' => $notification, 'variables' => $variables]);
    }

    public function notification_history_view(){

        $recipient    = RecipientList::where('id','')->first();
        $notification = NotificationRecipientList::orderBy('id','desc')->get();
        return view('notification.notificationHistory', ['notifications' => $notification]);
    }

    public function recipient_list_view(Request $request){

        $recipient = Citizen::select('citizen.id', 'citizen.name', 'citizen.address', 'citizen.phone','ldtax_holding_owners.ldtax_holding_id')
                    ->leftJoin('ldtax_holding_owners', 'citizen.id', '=', 'ldtax_holding_owners.citizen_id')
                    ->where('citizen.name', 'like', '%' . $request->input('query') . '%')
                    ->where('ldtax_holding_owners.mouja_id', $request->input('mouja_id'))->get();

        return array(
            "total_count"=> 1,
            "items"=> $recipient
        );
    }

    public function mouja_list(Request $request){

        try {
            $moujas = MoujaList::where('name_bd', 'like', '%' . $request->input('query') . '%')->where('office_id', '327')->get();
            return array(
                "total_count"=> 1,
                "items"=> $moujas
            );
        } catch(\Illuminate\Database\QueryException $ex){ 
            return array(
                "total_count"=> 0,
                "message"=> $ex->getMessage()
            );
        }
    }

    public function format_new(){
        
        return view('notification.notificationFormatCreate');
    }

    public function recipient_group_manage(Request $request){

        $group_data = GroupList::select('id','type')->where('id', $request->id)->first();

        if(\request()->ajax()){
            if($group_data['type']=='customized'){

                $data = Citizen::select('citizen.name','citizen.address','phone','citizen.email','ldtax_holding_owners.ldtax_holding_id', DB::raw("'N/A' as third_year_due_demand"))
                                ->leftJoin('ldtax_holding_owners', 'citizen.id', '=', 'ldtax_holding_owners.citizen_id')
                                ->leftJoin('recipient_group_list', 'citizen.id', '=', 'recipient_group_list.recipient_id')
                                ->where('recipient_group_list.group_id', $request->id)
                                ->get();

            }else if($group_data['type']=='defined'){

                if($group_data['id']==1){

                    $data = Citizen::select('citizen.name','citizen.address','phone','citizen.email','ldtax_holding_owners.ldtax_holding_id','ldtax_holding_usable_information_tax.third_year_due_demand')
                                ->leftJoin('ldtax_holding_owners', 'citizen.id', '=', 'ldtax_holding_owners.citizen_id')
                                ->leftJoin('ldtax_holding_usable_information_tax', 'ldtax_holding_owners.ldtax_holding_id', '=', 'ldtax_holding_usable_information_tax.ldtax_holding_id')
                                ->where('ldtax_holding_usable_information_tax.third_year_due_demand', '>' ,'0')
                                ->get();
                }else if($group_data['id']==6){

                    $data = Citizen::select('citizen.name','citizen.address','phone','citizen.email','ldtax_holding_owners.ldtax_holding_id','ldtax_holding_usable_information_tax.second_year_due_demand as third_year_due_demand')
                                ->leftJoin('ldtax_holding_owners', 'citizen.id', '=', 'ldtax_holding_owners.citizen_id')
                                ->leftJoin('ldtax_holding_usable_information_tax', 'ldtax_holding_owners.ldtax_holding_id', '=', 'ldtax_holding_usable_information_tax.ldtax_holding_id')
                                ->where('ldtax_holding_usable_information_tax.second_year_due_demand', '>' ,'0')
                                ->get();
                }

                
            }
            
            return DataTables::of($data)
                ->addIndexColumn()
                // ->addColumn('action', function($row){
                //     $actionBtn = '<a href="javascript:void(0)" class="edit btn btn-success btn-sm">Edit</a> <a href="javascript:void(0)" class="delete btn btn-danger btn-sm">Delete</a>';
                //     return $actionBtn;
                // })
                ->rawColumns(['action'])
                ->make(true);
        }
    }

    public function group_list_view(){
        return view('notification.notificationGroup');
    }

    public function group_list(){

        $notificationRecipient = GroupList::orderBy('id', 'DESC')->get();

        return array(
            'message' => 'Successfully recipient list fetch', 
            'recipient_list' => $notificationRecipient
        );
    }

    public function format_list(Request $request){

        if($request->recipient_group_id=='0'){
            $notificationFormats = NotificationFormatList::orderBy('id', 'ASC')->get();
        }else{
            GroupNotificationFormatList::select('notification_format_id')->where('group_id', $request->recipient_group_id)->get();
            $notificationFormats = NotificationFormatList::whereIn('id', GroupNotificationFormatList::select('notification_format_id')->where('group_id', $request->recipient_group_id)->get())->orderBy('id', 'ASC')->get();
        }

        return array(
            'message' => 'Successfully format list fetch', 
            'format_list' => $notificationFormats,
            'group_id' => $request->recipient_group_id
        );
    }

    /**
     * Write code on Method
     *
     * @return response()
     */

    public function store(Request $request){

        $this->validate($request, 
            [
                'title'                 => ['required', 'max:128'],
                'body'                  => 'required_without:msg_body',
                'msg_body'              => 'required_without:body',
                'recipient_group_id'    => 'required',
                'type'                  => 'required'
            ],
            [
                'title.required'                => 'অনুগ্রহপূর্বক নোটিফিকেশান শিরোনাম প্রবেশ করান',
                'body.required'                 => 'অনুগ্রহপূর্বক নোটিফিকেশান বিবরণী লিখুন',
                'recipient_group_id.required'   => 'অনুগ্রহপূর্বক প্রাপক গ্রুপ উল্লেখ করুন',
                'type.required'                 => 'অনুগ্রহপূর্বক নোটিফিকেশান ধরন উল্লেখ করুন'
            ]
        );

        $body = '';
        if($request->type=='panel_email_notification'){$body=$request->body;}
        else{$body=$request->msg_body;}

        $notification = NotificationList::create([
            'title' => $request->title,
            'body' => $body,
            'type' => $request->type
        ]);

        $group_data = GroupList::where('id',$request->recipient_group_id)->get();

        if($group_data['type']=='customized'){

            $data = Citizen::select('citizen.name','citizen.address','phone','citizen.email','ldtax_holding_owners.ldtax_holding_id', DB::raw("'N/A' as third_year_due_demand"))
                            ->leftJoin('ldtax_holding_owners', 'citizen.id', '=', 'ldtax_holding_owners.citizen_id')
                            ->leftJoin('recipient_group_list', 'citizen.id', '=', 'recipient_group_list.recipient_id')
                            ->where('recipient_group_list.group_id', $request->id)
                            ->get();
                            
            $recipients = RecipientGroupList::where('group_id',$request->recipient_group_id)->get();

        }else if($group_data['type']=='defined'){

            if($group_data['id']==1){

                $data = Citizen::select('citizen.name','citizen.address','phone','citizen.email','ldtax_holding_owners.ldtax_holding_id','ldtax_holding_usable_information_tax.third_year_due_demand')
                            ->leftJoin('ldtax_holding_owners', 'citizen.id', '=', 'ldtax_holding_owners.citizen_id')
                            ->leftJoin('ldtax_holding_usable_information_tax', 'ldtax_holding_owners.ldtax_holding_id', '=', 'ldtax_holding_usable_information_tax.ldtax_holding_id')
                            ->where('ldtax_holding_usable_information_tax.third_year_due_demand', '>' ,'0')
                            ->get();
            }else if($group_data['id']==6){

                $data = Citizen::select('citizen.name','citizen.address','phone','citizen.email','ldtax_holding_owners.ldtax_holding_id','ldtax_holding_usable_information_tax.second_year_due_demand as third_year_due_demand')
                            ->leftJoin('ldtax_holding_owners', 'citizen.id', '=', 'ldtax_holding_owners.citizen_id')
                            ->leftJoin('ldtax_holding_usable_information_tax', 'ldtax_holding_owners.ldtax_holding_id', '=', 'ldtax_holding_usable_information_tax.ldtax_holding_id')
                            ->where('ldtax_holding_usable_information_tax.second_year_due_demand', '>' ,'0')
                            ->get();
            }

            
        }


        $notificationRecipientData = [];
        $text = $body;
        $pattern = '/@([a-zA-Z0-9_]+)/';

        foreach ($recipients as $recipient) {

            $recipient_info = Citizen::where('id',$recipient->recipient_id)->first();
            
            $replacementValues = [
                'holding_no' => $recipient_info->address,
                'owner_name' => $recipient_info->name,
                'due_amount' => $recipient_info->due_amount,
                'due_year'   => $recipient_info->due_year
            ];
    
            $updatedText = preg_replace_callback($pattern, function ($matches) use ($replacementValues) {
                $username = $matches[1];
                return isset($replacementValues[$username]) ? $replacementValues[$username] : $matches[0];
            }, $text);

            $notificationRecipientData[] = [
                'recipient_id' => $recipient->recipient_id,
                'notification_id' => $notification->id,
                'content' => $updatedText,
                'status' => 'pending',
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }

        NotificationRecipientList::insert($notificationRecipientData);

        return redirect()->route('notifications.create');

    }

    public function format_create(Request $request){

        $this->validate($request, 
            [
                'title'     => ['required', 'max:128'],
                'body'      => 'required_without:msg_body',
                'msg_body'  => 'required_without:body',
                'type'      => 'required'
            ],
            [
                'title.required' => 'অনুগ্রহপূর্বক নোটিফিকেশান শিরোনাম প্রবেশ করান',
                'body.required'  => 'অনুগ্রহপূর্বক নোটিফিকেশান বিবরণী লিখুন',
                'type.required'  => 'অনুগ্রহপূর্বক নোটিফিকেশান ধরন উল্লেখ করুন'
            ]
        );

        $body = '';
        if( $request->type == 'panel_email_notification' ){ $body=$request->body; }
        else{ $body = $request->msg_body;}

        $notification = NotificationFormatList::create([
            'title' => $request->title,
            'body' => $body,
            'type' => $request->type
        ]);

       return redirect()->route('notifications.format_new');

    }

    public function group_recipient_store(Request $request){


        $notification = RecipientGroupList::create([
            'group_id' => $request->group_id,
            'recipient_id' => $request->recipient_id
        ]);

        if($notification){
            
            return array(
                'message' => $request->group_name.' গ্রুপ সংরক্ষণ করা হল', 
                'success' => true
            );
        }

    }

    public function store_group(Request $request){

        $this->validate($request, [
             'group_name' => 'required'
        ]);

        $notification = GroupList::create([
            'group_name' => $request->group_name,
            'type' => 'customized'
        ]);

        return array(
            'message' => $request->group_name.' গ্রুপ সংরক্ষণ করা হল', 
            'success' => true
        );

    }

    public function update(Request $request){

        $this->validate($request, [
             'titleEdit' => 'required',
             'bodyEdit' => 'required',
             'projectNameEdit' => 'required'
        ]);

        NotificationList::whereId($request->notificationID)
                    ->update([
                        'title' => $request->titleEdit,
                        'body' => $request->bodyEdit,
                        'project_name' => $request->projectNameEdit
                    ]);

    //    return redirect()->route('notifications.create');

        
        return array(
            'message' => 'Notification data updated sucessfully', 
            'success' => true
        );
    }

    public function notificationVariable(){

        return array(
            [
                'title' => '@holding_no', 
                'description' => 'বাসা নং / সিটি কর্পোরেশন প্রদত্ত হোল্ডিং নং'
            ],[
                'title' => '@owner_name', 
                'description' => 'বাড়ির মালিকের নাম'
            ],[
                'title' => '@due_amount', 
                'description' => 'বকেয়া টাকার পরিমাণ'
            ],[
                'title' => '@due_year', 
                'description' => 'বকেয়া বছরের সংখ্যা'
            ]
        );
       
        
    }
}
