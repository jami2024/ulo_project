@extends('Layout.backend_master')
@section('content')

<div class="ps-3 pb-4">
    <div class="bg-white rounded-tl-2xl rounded-tr-2xl rounded-bl-0 rounded-br-0 py-3 px-4 shadow flex items-center justify-between pe-12">
        <div class="">
            <a href="" class="flex items-center gap-1">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M9.45969 3.21899L3.42969 9.24899V10.311L9.45969 16.341L10.5217 15.2805L5.71119 10.47H8.53569C12.7552 10.47 15.4432 11.3775 17.0932 13.0635C18.7462 14.751 19.5157 17.379 19.5157 21.195V21.72H21.0157V21.195C21.0157 17.226 20.2252 14.115 18.1657 12.0135C16.1032 9.90749 12.9262 8.96999 8.53569 8.96999H5.83119L10.5217 4.28099L9.45969 3.21899Z" fill="#12633D"/>
                </svg>
                <h1 class="text-[#198754] font-ubontu leading-4 lg:text-12 xl:text-14">পেছনে</h1>
            </a>
        </div>
        
            <h2 class="text-[#12633D] font-ubontu text-24">সংস্থার ক্যাটাগরি/ধরন </h2>

        <a href="{{ route('organization.add') }}" class="cursor-pointer bg-[#12633D] py-3 px-4 border border-white flex items-center gap-2 rounded">
            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M12.1875 0V0.9375L13.125 1.875V14.0625L12.1875 15H2.8125L1.875 14.0625V1.875L2.8125 0.9375V0H3.75V0.9375H5.625V0H6.5625V0.9375H8.4375V0H9.375V0.9375H11.25V0H12.1875ZM2.8125 14.0625H12.1875V1.875H2.8125V14.0625ZM4.6875 3.75H10.3125V4.6875H4.6875V3.75ZM10.3125 7.5H4.6875V8.4375H10.3125V7.5ZM4.6875 11.25H10.3125V12.1875H4.6875V11.25Z" fill="white"/>
              </svg>
            <span class="text-white text-15 font-ubontu leading-4">ক্যাটাগরি যুক্ত করুন </span>
        </a>
        
    </div>
    
    <div class="bg-white w-full mt-1 px-4 pt-5 pb-8 shadow">

    
        <div class="py-4">
            <div class="overflow-x-auto">
                <table class="table table-xs table-pin-rows table-pin-cols">
                  <thead>
                    <tr>
                      <th class="text-center border-r border-gray-400"><span class="text-[#0E1F1C] text-14 font-ubontu">ক্রম নং</span></th> 
                      <td class="text-center border-r border-gray-400"><span class="text-[#0E1F1C] text-14 font-ubontu">সংস্থার ক্যাটাগরি</span></td> 
                      <td class="text-center border-r border-gray-400"><span class="text-[#0E1F1C] text-14 font-ubontu">সংস্থার ধরন</span></td> 
                      
                      <td class="text-center"><span class="text-[#0E1F1C] text-14 font-ubontu">পদক্ষেপ</span></td> 
                      
                       
                    </tr>
                  </thead> 
                  <tbody>
                    
                    <tr>
                        <td class="text-center"><span class="text-[#0E1F1C] text-15 font-ubontu">০১</span></td> 
                        <td class="text-center"><span class="text-[#0E1F1C] text-15 font-ubontu">টেকনোলজি লিমিটেড</span></td> 
                        <td class="text-center"><span class="text-[#0E1F1C] text-15 font-ubontu">পানি উন্নয়ন বোর্ড</span></td> 
                         
                        <td class="text-center">
                            <div class="flex items-center justify-center gap-4">
                                <a href="{{ route('citizen.khotianDetails') }}" class="bg-blue-300 bg-opacity-10 p-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                        <path d="M11.175 10.4694L12.0639 9.58047C12.2028 9.44158 12.4444 9.5388 12.4444 9.7388V13.7777C12.4444 14.5138 11.8472 15.111 11.1111 15.111H1.33333C0.597222 15.111 0 14.5138 0 13.7777V3.99991C0 3.2638 0.597222 2.66658 1.33333 2.66658H8.93056C9.12778 2.66658 9.22778 2.90547 9.08889 3.04714L8.2 3.93602C8.15833 3.97769 8.10278 3.99991 8.04167 3.99991H1.33333V13.7777H11.1111V10.6249C11.1111 10.5666 11.1333 10.511 11.175 10.4694ZM15.525 4.8638L8.23056 12.1582L5.71944 12.436C4.99167 12.5166 4.37222 11.9027 4.45278 11.1694L4.73056 8.65825L12.025 1.3638C12.6611 0.727691 13.6889 0.727691 14.3222 1.3638L15.5222 2.5638C16.1583 3.19991 16.1583 4.23047 15.525 4.8638ZM12.7806 5.72214L11.1667 4.10825L6.00556 9.27214L5.80278 11.086L7.61667 10.8832L12.7806 5.72214ZM14.5806 3.50825L13.3806 2.30825C13.2667 2.19436 13.0806 2.19436 12.9694 2.30825L12.1111 3.16658L13.725 4.78047L14.5833 3.92214C14.6944 3.80547 14.6944 3.62214 14.5806 3.50825Z" fill="#3B8CD7"/>
                                      </svg>
                                </a>
                                <a href="" class="bg-red-300 bg-opacity-10 p-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M10 3H13V4H12V13L11 14H4L3 13V4H2V3H5V2C5 1.73478 5.10536 1.48043 5.29289 1.29289C5.48043 1.10536 5.73478 1 6 1H9C9.26522 1 9.51957 1.10536 9.70711 1.29289C9.89464 1.48043 10 1.73478 10 2V3ZM9 2H6V3H9V2ZM4 13H11V4H4V13ZM6 5H5V12H6V5ZM7 5H8V12H7V5ZM9 5H10V12H9V5Z" fill="#EF0000"/>
                                      </svg>
                                </a>

                               
                            </div>
                        </td> 
                        
                        
                    </tr>
                    <tr>
                        <td class="text-center"><span class="text-[#0E1F1C] text-15 font-ubontu">০১</span></td> 
                        <td class="text-center"><span class="text-[#0E1F1C] text-15 font-ubontu">টেকনোলজি লিমিটেড</span></td> 
                        <td class="text-center"><span class="text-[#0E1F1C] text-15 font-ubontu">পানি উন্নয়ন বোর্ড</span></td> 
                         
                        <td class="text-center">
                            <div class="flex items-center justify-center gap-4">
                                <a href="{{ route('citizen.khotianDetails') }}" class="bg-blue-300 bg-opacity-10 p-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                        <path d="M11.175 10.4694L12.0639 9.58047C12.2028 9.44158 12.4444 9.5388 12.4444 9.7388V13.7777C12.4444 14.5138 11.8472 15.111 11.1111 15.111H1.33333C0.597222 15.111 0 14.5138 0 13.7777V3.99991C0 3.2638 0.597222 2.66658 1.33333 2.66658H8.93056C9.12778 2.66658 9.22778 2.90547 9.08889 3.04714L8.2 3.93602C8.15833 3.97769 8.10278 3.99991 8.04167 3.99991H1.33333V13.7777H11.1111V10.6249C11.1111 10.5666 11.1333 10.511 11.175 10.4694ZM15.525 4.8638L8.23056 12.1582L5.71944 12.436C4.99167 12.5166 4.37222 11.9027 4.45278 11.1694L4.73056 8.65825L12.025 1.3638C12.6611 0.727691 13.6889 0.727691 14.3222 1.3638L15.5222 2.5638C16.1583 3.19991 16.1583 4.23047 15.525 4.8638ZM12.7806 5.72214L11.1667 4.10825L6.00556 9.27214L5.80278 11.086L7.61667 10.8832L12.7806 5.72214ZM14.5806 3.50825L13.3806 2.30825C13.2667 2.19436 13.0806 2.19436 12.9694 2.30825L12.1111 3.16658L13.725 4.78047L14.5833 3.92214C14.6944 3.80547 14.6944 3.62214 14.5806 3.50825Z" fill="#3B8CD7"/>
                                      </svg>
                                </a>
                                <a href="" class="bg-red-300 bg-opacity-10 p-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M10 3H13V4H12V13L11 14H4L3 13V4H2V3H5V2C5 1.73478 5.10536 1.48043 5.29289 1.29289C5.48043 1.10536 5.73478 1 6 1H9C9.26522 1 9.51957 1.10536 9.70711 1.29289C9.89464 1.48043 10 1.73478 10 2V3ZM9 2H6V3H9V2ZM4 13H11V4H4V13ZM6 5H5V12H6V5ZM7 5H8V12H7V5ZM9 5H10V12H9V5Z" fill="#EF0000"/>
                                      </svg>
                                </a>

                               
                            </div>
                        </td> 
                        
                        
                    </tr>
                    <tr>
                        <td class="text-center"><span class="text-[#0E1F1C] text-15 font-ubontu">০১</span></td> 
                        <td class="text-center"><span class="text-[#0E1F1C] text-15 font-ubontu">টেকনোলজি লিমিটেড</span></td> 
                        <td class="text-center"><span class="text-[#0E1F1C] text-15 font-ubontu">পানি উন্নয়ন বোর্ড</span></td> 
                         
                        <td class="text-center">
                            <div class="flex items-center justify-center gap-4">
                                <a href="{{ route('citizen.khotianDetails') }}" class="bg-blue-300 bg-opacity-10 p-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                        <path d="M11.175 10.4694L12.0639 9.58047C12.2028 9.44158 12.4444 9.5388 12.4444 9.7388V13.7777C12.4444 14.5138 11.8472 15.111 11.1111 15.111H1.33333C0.597222 15.111 0 14.5138 0 13.7777V3.99991C0 3.2638 0.597222 2.66658 1.33333 2.66658H8.93056C9.12778 2.66658 9.22778 2.90547 9.08889 3.04714L8.2 3.93602C8.15833 3.97769 8.10278 3.99991 8.04167 3.99991H1.33333V13.7777H11.1111V10.6249C11.1111 10.5666 11.1333 10.511 11.175 10.4694ZM15.525 4.8638L8.23056 12.1582L5.71944 12.436C4.99167 12.5166 4.37222 11.9027 4.45278 11.1694L4.73056 8.65825L12.025 1.3638C12.6611 0.727691 13.6889 0.727691 14.3222 1.3638L15.5222 2.5638C16.1583 3.19991 16.1583 4.23047 15.525 4.8638ZM12.7806 5.72214L11.1667 4.10825L6.00556 9.27214L5.80278 11.086L7.61667 10.8832L12.7806 5.72214ZM14.5806 3.50825L13.3806 2.30825C13.2667 2.19436 13.0806 2.19436 12.9694 2.30825L12.1111 3.16658L13.725 4.78047L14.5833 3.92214C14.6944 3.80547 14.6944 3.62214 14.5806 3.50825Z" fill="#3B8CD7"/>
                                      </svg>
                                </a>
                                <a href="" class="bg-red-300 bg-opacity-10 p-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M10 3H13V4H12V13L11 14H4L3 13V4H2V3H5V2C5 1.73478 5.10536 1.48043 5.29289 1.29289C5.48043 1.10536 5.73478 1 6 1H9C9.26522 1 9.51957 1.10536 9.70711 1.29289C9.89464 1.48043 10 1.73478 10 2V3ZM9 2H6V3H9V2ZM4 13H11V4H4V13ZM6 5H5V12H6V5ZM7 5H8V12H7V5ZM9 5H10V12H9V5Z" fill="#EF0000"/>
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



