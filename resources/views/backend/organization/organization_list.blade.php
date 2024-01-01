@extends('Layout.backend_master')
@section('content')

<div class="ps-3 pb-4">
    <div class="bg-white rounded-tl-2xl rounded-tr-2xl rounded-bl-0 rounded-br-0 py-3 px-4 shadow flex items-center gap-64">
        <div class="">
            <a href="" class="flex items-center gap-1">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M9.45969 3.21899L3.42969 9.24899V10.311L9.45969 16.341L10.5217 15.2805L5.71119 10.47H8.53569C12.7552 10.47 15.4432 11.3775 17.0932 13.0635C18.7462 14.751 19.5157 17.379 19.5157 21.195V21.72H21.0157V21.195C21.0157 17.226 20.2252 14.115 18.1657 12.0135C16.1032 9.90749 12.9262 8.96999 8.53569 8.96999H5.83119L10.5217 4.28099L9.45969 3.21899Z" fill="#12633D"/>
                </svg>
                <h1 class="text-[#198754] font-ubontu leading-4 lg:text-12 xl:text-14">পেছনে</h1>
            </a>
        </div>
        
            <h2 class="text-[#12633D] font-ubontu text-24">সংস্থার তালিকা</h2>
        
    </div>
    
    <div class="bg-white w-full mt-1 px-4 pt-5 pb-40 shadow">

        <div class="mt-7 px-5">
            <div class="flex flex-wrap items-center lg:gap-6 xl:gap-8">
                <div class="border border-[#BABABA] rounded relative w-full lg:w-[30%] pe-4 ps-1">
                    <label for="" class="text-15 font-ubontu text-[#0E1F1C] leading-4 absolute -top-[12%] left-[5%] bg-white">সংস্থার ধরন</label>
                    <select name="" id="" class="w-full py-3 ps-1  border-none focus:outline-none text-[#BABABA] text-15">
                        <option value="">সংস্থার ধরন নির্বাচন করুন</option>
                    </select>
                </div>
                <div class="border border-[#BABABA] rounded relative w-full lg:w-[30%] pe-4 ps-1">
                    <label for="holding_number" class="text-15 font-ubontu text-[#0E1F1C] leading-4 absolute -top-[12%] left-[5%] bg-white">সংস্থার মোবাইল নম্বর</label>
                    <input type="text" class="w-full py-3 ps-1 pe-5 border-none focus:outline-none text-black text-15" placeholder="সংস্থার মোবাইল নম্বর">
                </div>
                <div class="border border-[#BABABA] rounded relative w-full lg:w-[30%] pe-4 ps-1">
                    <label for="holding_number" class="text-15 font-ubontu text-[#0E1F1C] leading-4 absolute -top-[12%] left-[5%] bg-white">সংস্থার ইমেইল</label>
                    <input type="text" class="w-full py-3 ps-1 pe-5 border-none focus:outline-none text-black text-15" placeholder="সংস্থার ইমেইল">
                </div>
                
                
            </div>
            
            
    
            <div class="flex justify-center pt-8">
                <a href="{{ route('holding.registrationTwo') }}">
                    <button class="bg-[#12633D] text-white font-ubontu text-16 leading-4 px-6 py-3 rounded shadow-md flex items-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                            <path d="M10.168 6.8356e-07C9.10828 -0.000527531 8.071 0.305084 7.18088 0.880081C6.29075 1.45508 5.58569 2.27498 5.15048 3.24117C4.71527 4.20737 4.56844 5.27872 4.72766 6.32638C4.88688 7.37403 5.34536 8.35339 6.04797 9.14667L0.667969 15.2533L1.41464 15.92L6.7813 9.84C7.47161 10.38 8.28095 10.7472 9.14191 10.911C10.0029 11.0749 10.8905 11.0306 11.7309 10.782C12.5713 10.5333 13.3401 10.0875 13.9733 9.48156C14.6065 8.87563 15.0858 8.12718 15.3712 7.29854C15.6565 6.46991 15.7398 5.58507 15.614 4.71774C15.4882 3.85041 15.157 3.02569 14.6479 2.31229C14.1389 1.59888 13.4667 1.01744 12.6874 0.61639C11.9082 0.21534 11.0444 0.0062954 10.168 0.00666735V6.8356e-07ZM10.168 10C8.97449 10 7.8299 9.5259 6.98599 8.68198C6.14207 7.83807 5.66797 6.69348 5.66797 5.5C5.66797 4.30653 6.14207 3.16193 6.98599 2.31802C7.8299 1.47411 8.97449 1 10.168 1C11.3614 1 12.506 1.47411 13.3499 2.31802C14.1939 3.16193 14.668 4.30653 14.668 5.5C14.668 6.69348 14.1939 7.83807 13.3499 8.68198C12.506 9.5259 11.3614 10 10.168 10Z" fill="white"/>
                          </svg>
    
                          অনুসন্ধান
                    </button>
                </a>
            </div>
        </div>
        <div class="py-4">
            <div class="overflow-x-auto">
                <table class="table table-xs table-pin-rows table-pin-cols">
                  <thead>
                    <tr>
                      <th class="text-center border-r border-gray-400"><span class="text-[#0E1F1C] text-14 font-ubontu">ক্রম নং</span></th> 
                      <td class="text-center border-r border-gray-400"><span class="text-[#0E1F1C] text-14 font-ubontu">সংস্থার নাম</span></td> 
                      <td class="text-center border-r border-gray-400"><span class="text-[#0E1F1C] text-14 font-ubontu">সংস্থার ধরন</span></td> 
                      <td class="text-center border-r border-gray-400"><span class="text-[#0E1F1C] text-14 font-ubontu">অফিসিয়াল মোবাইল</span></td> 
                      <td class="text-center border-r border-gray-400"><span class="text-[#0E1F1C] text-14 font-ubontu">ইমেইল (অফিসিয়াল)</span></td> 
                      <td class="text-center"><span class="text-[#0E1F1C] text-14 font-ubontu">পদক্ষেপ</span></td> 
                    </tr>
                  </thead> 
                  <tbody>
                    
                    <tr >
                        <td class="text-center"><span class="text-[#0E1F1C] text-15 font-ubontu">০১</span></td> 
                        <td class="text-center"><span class="text-[#0E1F1C] text-15 font-ubontu">টেকনোলজি লিমিটেড</span></td> 
                        <td class="text-center"><span class="text-[#0E1F1C] text-15 font-ubontu">পানি উন্নয়ন বোর্ড</span></td> 
                        <td class="text-center"><span class="text-[#0E1F1C] text-15 font-ubontu">01841499442</span></td> 
                        <td class="text-center"><span class="text-[#0E1F1C] text-15 font-ubontu">imtiaz mysoftheaven@gmail.com</span></td> 
                        <td class="text-center">
                            <div class="flex items-center justify-center">
                                <a href="{{ route('citizen.khotianDetails') }}" class="flex items-center gap-1 bg-[#2AB752] py-1 px-3 rounded">
                                    <span class="text-[#FFEAEA] text-15 font-ubontu">হোল্ডিং বিস্তারিত</span>
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



