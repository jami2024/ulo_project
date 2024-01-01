@extends('Layout.backend_master')
@section('content')

<div class="ps-3 pb-4">
    <div class=" bg-white rounded-md  w-full shadow-sm">
       <div class="py-3 ps-4 space-y-2">
        <p class="font-ubontu !text-[#0E1F1C] text-24 leading-6">গৃহীত আপত্তি ও অভিযোগ সমূহ</p>
        <p class="font-ubontu !text-red-900 text-14 leading-3">ভূমি উন্নয়ন কর সংক্রান্ত গৃহীত আপত্তি ও অভিযোগ দাখিল</p>
       </div>
        <div class="py-4">
            <div class="overflow-x-auto">
                <table class="table table-xs table-pin-rows table-pin-cols">
                  <thead>
                    <tr class="bg-[#12633D] py-3 px-1">
                      <td class="text-center border-r border-gray-400 py-3"><span class="text-white text-14 font-ubontu">ক্রম নং</span></td> 
                      <td class="text-center border-r border-gray-400 py-3"><span class="text-white text-14 font-ubontu">মৌজা</span></td> 
                      <td class="text-center border-r border-gray-400 py-3"><span class="text-white text-14 font-ubontu">হোল্ডিং নং</span></td> 
                      <td class="text-center border-r border-gray-400 py-3"><span class="text-white text-14 font-ubontu">অভিযোগের তারিখ</span></td> 
                      <td class="text-center border-r border-gray-400 py-3"><span class="text-white text-14 font-ubontu">নাম</span></td> 
                      <td class="text-center border-r border-gray-400 py-3"><span class="text-white text-14 font-ubontu">মোবাইল নং</span></td> 
                      <td class="text-center border-r border-gray-400 py-3"><span class="text-white text-14 font-ubontu">অভিযোগেরবিষয়</span></td> 
                      <td class="text-center border-r border-gray-400 py-3"><span class="text-white text-14 font-ubontu">সংযুক্তি</span></td> 
                      <td class="text-center"><span class="text-white text-14 font-ubontu">অভিযোগের বিস্তারিত</span></td> 
                    </tr>
                  </thead> 
                  <tbody>
                    <tr>
                        <td class="text-center"><span class="text-[#0E1F1C] text-13 font-ubontu">০১</span></td> 
                        <td class="text-center"><span class="text-[#0E1F1C] text-13 font-ubontu">গোবিন্দপুর</span></td> 
                        <td class="text-center"><span class="text-[#0E1F1C] text-13 font-ubontu">২১৩</span></td> 
                        <td class="text-center"><span class="text-[#0E1F1C] text-13 font-ubontu"> ৮/৭/৯</span></td> 
                        <td class="text-center"><span class="text-[#0E1F1C] text-13 font-ubontu"> মোঃ বাবলুর রহমান</span></td> 
                        <td class="text-center"><span class="text-[#0E1F1C] text-13 font-ubontu"> 01745234234</span></td> 
                        <td class="text-center"><span class="text-[#0E1F1C] text-13 font-ubontu"> ১১৭৫ নং দাগে জমির পরিমাণ ভুল</span></td> 
                        <td class="text-center"><span class="text-[#0E1F1C] text-13 font-ubontu"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M17.3125 5.55L13.2125 1.425L12.775 1.25H3.125L2.5 1.875V8.75H3.75V2.5H11.25V6.875L11.875 7.5H16.25V8.75H17.5V6L17.3125 5.55ZM12.5 6.25V2.5L16.25 6.25H12.5ZM3.125 10L2.5 10.625V18.125L3.125 18.75H16.875L17.5 18.125V10.625L16.875 10H3.125ZM16.25 16.25V17.5H3.75V11.25H16.25V16.25ZM6.25 15H5.85V16.25H5V12.5H6.325C7.2625 12.5 7.7375 12.95 7.7375 13.75C7.73992 13.92 7.70541 14.0885 7.63635 14.2439C7.56729 14.3993 7.46532 14.5379 7.3375 14.65C7.02772 14.8915 6.64246 15.0155 6.25 15ZM6.175 13.1875H5.85V14.35H6.175C6.625 14.35 6.85 14.15 6.85 13.7625C6.85 13.375 6.625 13.1875 6.175 13.1875ZM11.25 15.725C11.4346 15.5432 11.579 15.3246 11.6737 15.0834C11.7685 14.8422 11.8115 14.5839 11.8 14.325C11.8 13.075 11.1375 12.5 9.8 12.5H8.475V16.25H9.8C10.0644 16.2628 10.3287 16.223 10.5776 16.1329C10.8265 16.0428 11.0551 15.9041 11.25 15.725ZM9.3125 15.5625V13.1875H9.725C9.88443 13.1774 10.0443 13.1999 10.1947 13.2536C10.3451 13.3073 10.4831 13.3912 10.6 13.5C10.7059 13.6113 10.7883 13.7428 10.842 13.8868C10.8957 14.0307 10.9197 14.184 10.9125 14.3375C10.9312 14.667 10.8189 14.9905 10.6 15.2375C10.4856 15.347 10.3502 15.4322 10.2019 15.4881C10.0537 15.544 9.89575 15.5693 9.7375 15.5625H9.3125ZM14.875 14.8H13.6625V16.25H12.8125V12.5H14.9875V13.1875H13.6625V14.1125H14.875V14.8Z" fill="#A5008A"/>
                          </svg></span></td> 
                        <td class="text-center">
                            <div class="flex items-center justify-center">
                                <a href="{{ route('holding.registrationOne') }}" class="flex items-center gap-1 bg-[#2AB752] py-1 px-3 rounded">
                                    <span class="text-[#FFEAEA] text-13 font-ubontu">বিস্তারিত</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M13.086 6.99995L10.696 4.60195L11.398 3.89795L15 7.49995L11.398 11.1019L10.695 10.3979L13.078 8.01595V7.99995H3V6.99995H13.086ZM1 3.99995H2V10.9999H1V3.99995Z" fill="white"/>
                                      </svg>
                                </a>
                            </div>
                        </td> 
                        
                        
                      </tr>
                     
                    
                  </tbody> 
                  
                </table>
            </div>
              <div class="flex items-center justify-end pt-2 px-3">
                <div class="flex items-center gap-1">
                    <div class="flex items-center gap-1">
                        <h1 class="text-[#016344] text-14 font-ubontu">সর্বমোট পাতা</h1>
                        <select name="" id="" class="w-10 border-none rounded-sm focus:outline-none text-green-700 font-ubontu text-15">
                          <option value="10">10</option>
                      </select>
                    </div>
                    <div>
                        <h1 class="text-[#016344] text-15 font-ubontu">০১-১০ এর  ২৫</h1>
                    </div>
                    <div class="flex items-center gap-1">
                        <svg class="cursor-pointer" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                            <path d="M13.7524 4.97407V15.0258C13.7524 15.7218 12.9109 16.0704 12.4187 15.5782L7.39287 10.5524C7.08779 10.2473 7.08779 9.75258 7.39287 9.44751L12.4187 4.42165C12.9109 3.92946 13.7524 4.27805 13.7524 4.97407Z" fill="#016344"/>
                            <path d="M7.42428 4.94966L7.42428 15.0014C7.42428 15.6974 6.58275 16.0459 6.09061 15.5538L1.06475 10.5279C0.759668 10.2229 0.759668 9.72817 1.06475 9.42309L6.09061 4.39723C6.58275 3.90505 7.42428 4.25364 7.42428 4.94966Z" fill="#016344"/>
                        </svg>
                        <svg class="cursor-pointer" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                            <path d="M13.7485 4.97407V15.0258C13.7485 15.7218 12.907 16.0704 12.4148 15.5782L7.38896 10.5524C7.08389 10.2473 7.08389 9.75258 7.38896 9.44751L12.4148 4.42165C12.907 3.92946 13.7485 4.27805 13.7485 4.97407Z" fill="#016344"/>
                          </svg>
                          <svg class="cursor-pointer" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                            <path d="M6.2515 15.0259L6.2515 4.97421C6.2515 4.2782 7.09303 3.92964 7.58518 4.42179L12.611 9.44765C12.9161 9.75273 12.9161 10.2474 12.611 10.5525L7.58518 15.5784C7.09303 16.0705 6.2515 15.7219 6.2515 15.0259Z" fill="#016344"/>
                          </svg>
                          <svg class="cursor-pointer" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                            <path d="M6.2515 15.0259L6.2515 4.97421C6.2515 4.2782 7.09303 3.92964 7.58518 4.42179L12.611 9.44765C12.9161 9.75273 12.9161 10.2474 12.611 10.5525L7.58518 15.5784C7.09303 16.0705 6.2515 15.7219 6.2515 15.0259Z" fill="#016344"/>
                            <path d="M12.5796 15.0503V4.99863C12.5796 4.30261 13.4212 3.95406 13.9133 4.4462L18.9392 9.47206C19.2442 9.77714 19.2442 10.2718 18.9392 10.5769L13.9133 15.6028C13.4212 16.095 12.5796 15.7464 12.5796 15.0503Z" fill="#016344"/>
                          </svg>
                    </div>
                </div>
              </div>
        </div>
    </div>
</div>


@endsection



