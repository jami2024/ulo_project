@extends('Layout.backend_master')
@section('content')

<div class="ps-3 pb-4">
    <div class="bg-white rounded-tl-2xl rounded-tr-2xl rounded-bl-0 rounded-br-0 py-3 px-4 shadow flex items-center justify-between pe-12">
        <div class="">
            <a href="{{ route('organization.categoryList') }}" class="flex items-center gap-1">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M9.45969 3.21899L3.42969 9.24899V10.311L9.45969 16.341L10.5217 15.2805L5.71119 10.47H8.53569C12.7552 10.47 15.4432 11.3775 17.0932 13.0635C18.7462 14.751 19.5157 17.379 19.5157 21.195V21.72H21.0157V21.195C21.0157 17.226 20.2252 14.115 18.1657 12.0135C16.1032 9.90749 12.9262 8.96999 8.53569 8.96999H5.83119L10.5217 4.28099L9.45969 3.21899Z" fill="#12633D"/>
                </svg>
                <h1 class="text-[#198754] font-ubontu leading-4 lg:text-12 xl:text-14">পেছনে</h1>
            </a>
        </div>
        
            <h2 class="text-[#12633D] font-ubontu text-24 leading-5">নতুন সংস্থার ক্যাটাগরি/ধরন যুক্ত করুন</h2>

        <a href="{{ route('organization.categoryList') }}" class="cursor-pointer bg-[#12633D] py-3 px-4 border border-white flex items-center gap-2 rounded">
            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M12.1875 0V0.9375L13.125 1.875V14.0625L12.1875 15H2.8125L1.875 14.0625V1.875L2.8125 0.9375V0H3.75V0.9375H5.625V0H6.5625V0.9375H8.4375V0H9.375V0.9375H11.25V0H12.1875ZM2.8125 14.0625H12.1875V1.875H2.8125V14.0625ZM4.6875 3.75H10.3125V4.6875H4.6875V3.75ZM10.3125 7.5H4.6875V8.4375H10.3125V7.5ZM4.6875 11.25H10.3125V12.1875H4.6875V11.25Z" fill="white"/>
              </svg>
            <span class="text-white text-15 font-ubontu leading-4">ক্যাটাগরি তালিকা</span>
        </a>
        
    </div>
    
    <div class="bg-white px-5 pt-16 pb-72 mt-1 rounded">
        <form action="">

            <div class="flex flex-wrap items-center justify-center lg:gap-6 xl:gap-8">
                <div class="border border-[#BABABA] rounded relative w-full lg:w-[30%] pe-4 ps-1">
                    <label for="" class="text-15 font-ubontu text-[#0E1F1C] leading-4 absolute -top-[12%] left-[5%] bg-white">সংস্থার ক্যাটাগরি</label>
                    <select name="" id="" class="w-full py-3 ps-1  border-none focus:outline-none text-[#BABABA] text-13">
                        <option value="">সংস্থার ক্যাটাগরি</option>
                    </select>
                </div>
                <div class="border border-[#BABABA] rounded relative w-full lg:w-[30%] pe-4 ps-1">
                    <label for="holding_number" class="text-15 font-ubontu text-[#0E1F1C] leading-4 absolute -top-[12%] left-[5%] bg-white">সংস্থার ধরন</label>
                    <input type="text" class="w-full py-3 ps-1 pe-5 border-none focus:outline-none text-black text-13" placeholder="সংস্থার ধরন">
                </div>
                
                
                
            </div>
            
            
    
            <div class="flex justify-center pt-8">
                <a href="">
                    <button class="bg-[#12633D] text-white font-ubontu text-16 leading-4 px-6 py-3 rounded shadow-md flex items-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                            <path d="M17.5 8.75V10H10V17.5H8.75V10H1.25V8.75H8.75V1.25H10V8.75H17.5Z" fill="white"/>
                          </svg>
    
                          যুক্ত করুন
                    </button>
                </a>
            </div>
        </form>
    </div>
</div>


@endsection



