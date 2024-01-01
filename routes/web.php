<?php

use App\Http\Controllers\dagSettingsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HoldingController;
use App\Http\Controllers\khotianController;
use App\Http\Controllers\nagorikController;
use App\Http\Controllers\organizationController;
use App\Http\Controllers\returnController;
use App\Http\Controllers\paySlipController;
use App\Http\Controllers\ovijugController;
use App\Http\Controllers\NotificationController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});



Route::get('/login/dashboard', [DashboardController::class, 'loginDashboard']);

//holding registration start
Route::get('holding/registrationOne', [HoldingController::class, 'holdingRegistrationOne'])->name('holding.registrationOne');
Route::get('holding/registrationTwo', [HoldingController::class, 'holdingRegistrationTwo'])->name('holding.registrationTwo');
Route::get('holding/registrationThree', [HoldingController::class, 'holdingRegistrationThree'])->name('holding.registrationThree');
//holding registration end

//holding waiting start
Route::get('holding/waiting', [HoldingController::class, 'holdingWaiting'])->name('holding.waiting');
Route::get('holding/waiting/two', [HoldingController::class, 'holdingWaitingTwo'])->name('holding.waitingTwo');

//holding waiting end

Route::get('holding/acceptedList', [HoldingController::class, 'holdingAcceptedList'])->name('holding.acceptedList');
Route::get('holding/acceptedList/two', [HoldingController::class, 'holdingAcceptedListTwo'])->name('holding.acceptedListTwo');
Route::get('holding/acchive/list', [HoldingController::class, 'holdingAcchiveList'])->name('holding.acchiveList');
Route::get('holding/acchive/list/two', [HoldingController::class, 'holdingAcchiveListTwo'])->name('holding.acchiveListTwo');



//khotian route start
Route::get("/khotian/emutation", [khotianController::class, 'emutation'])->name("khotian.emutation");
Route::get("/khotian/emutation/search", [khotianController::class, 'emutationSearch'])->name("khotian.emutationSearch");
Route::get('/citizen/khotian', [khotianController::class, 'citizenKhotian'])->name('citizen.khotian');
Route::get('/citizen/khotian/list', [khotianController::class, 'citizenKhotianList'])->name('citizen.khotianList');
Route::get('/citizen/khotian/details', [khotianController::class, 'citizenKhotianDetails'])->name('citizen.khotianDetails');


// dag settings route start
Route::get('/dag/settings', [dagSettingsController::class, 'dagSettings'])->name('dag.settings');
Route::get('/dag/settings/list', [dagSettingsController::class, 'dagSettingsList'])->name('dag.settingsList');


// nagorik route start
Route::get('/nagorik/info', [nagorikController::class, 'nagorikInfo'])->name('nagorik.info');


// organization route start
Route::get('/organization/list', [organizationController::class, 'organizationlist'])->name('organization.list');
Route::get('/organization/category/list', [organizationController::class, 'organizationCategoryList'])->name('organization.categoryList');

Route::get('/organization/add', [organizationController::class, 'organizationAdd'])->name('organization.add');

// return route start
Route::get('/return/three/list', [returnController::class, 'returnList'])->name('return.list');

// pay slip route start
Route::get('/pay/slip', [paySlipController::class, 'paySlip'])->name('pay.slip');

// ovijug route start
Route::get('/ovijug/list', [ovijugController::class, 'ovijugList'])->name('ovijug.list');
Route::get('/ovijug/list/details', [ovijugController::class, 'ovijugListDetails'])->name('ovijug.ListDetails');

// notification route start
Route::get('notification/create',[NotificationController::class,'create'])->name('notifications.create');
Route::get('notification/recipient/group/list',[NotificationController::class,'group_list'])->name('notifications.group_list');
Route::get('notification/format/list/{recipient_group_id}',[NotificationController::class,'format_list'])->name('notifications.format_list');
Route::get('notification/format/add',[NotificationController::class,'format_new'])->name('notifications.format_new');
Route::get('notification/recipient/group/view',[NotificationController::class,'group_list_view'])->name('notifications.group_list_view');
Route::get('notification/mouja/list',[NotificationController::class,'mouja_list'])->name('notifications.mouja_list');
Route::get('notification/recipient/list',[NotificationController::class,'recipient_list_view'])->name('notifications.recipient_list_view');
Route::get('notification/recipient/group/manage/{id}',[NotificationController::class,'recipient_group_manage'])->name('notifications.recipient_group_manage');
Route::get('notification/hitory/show',[NotificationController::class,'notification_history_view'])->name('notifications.notification_history_view');

Route::post('notification/update',[NotificationController::class,'update'])->name('notifications.update');
Route::post('notification/store',[NotificationController::class,'store'])->name('notifications.store');
Route::post('notification/group/recipient/store',[NotificationController::class,'group_recipient_store'])->name('notifications.group_recipient_store');
Route::post('notification/recipient/add',[NotificationController::class,'store_group'])->name('notifications.store_group');
Route::post('notification/format/create',[NotificationController::class,'format_create'])->name('notifications.format_create');