@extends('Layout.backend_master')
@section('content')

<div class="ps-3 pb-4">
    <div class="bg-white px-4 py-3 rounded-tl-2xl rounded-tr-2xl lg:rounded-bl-0 lg:rounded-br-0">
        <div class="flex items-center gap-5 lg:gap-10 xl:gap-40">
            <div>
               <a href="" class="flex items-center gap-1">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M9.45969 3.21899L3.42969 9.24899V10.311L9.45969 16.341L10.5217 15.2805L5.71119 10.47H8.53569C12.7552 10.47 15.4432 11.3775 17.0932 13.0635C18.7462 14.751 19.5157 17.379 19.5157 21.195V21.72H21.0157V21.195C21.0157 17.226 20.2252 14.115 18.1657 12.0135C16.1032 9.90749 12.9262 8.96999 8.53569 8.96999H5.83119L10.5217 4.28099L9.45969 3.21899Z" fill="#12633D"/>
                  </svg>
                  <h1 class="text-[#198754] font-ubontu leading-4 lg:text-12 xl:text-14">পেছনে</h1>
               </a>
            </div>
            <div class="lg:flex items-center gap-3">
                <div class="flex items-center gap-2">
                    <p class="bg-[#198754] p-2 rounded-full w-[28px] h-[28px] flex items-center justify-center">
                        <span class="text-white font-semibold font-ubontu leading-4">১</span>
                    </p>
        
                    <h3 class="text-16 lg:text-18 xl:text-24 text-[#12633D] leading-5 font-ubontu">ধাপ / অঞ্চল এবং দাগ </h3>
                </div>
                <div class="flex items-center gap-2">

                    <svg xmlns="http://www.w3.org/2000/svg" width="11" height="2" viewBox="0 0 11 2" fill="none">
                        <path d="M0 1H11" stroke="#A8A8A8"/>
                    </svg>
                    <p class="border border-[#A8A8A8] p-2 rounded-full w-[28px] h-[28px] flex items-center justify-center">
                        <span class="text-[#A8A8A8] font-semibold font-ubontu leading-4">২</span>
                    </p>
                    
                   
                </div>
            </div>
        </div>
    </div>
    <div class="bg-white px-5 pt-10 pb-28 mt-1 rounded">

        <div class="flex items-center gap-4 justify-end">
            <button class="flex items-center gap-2 border border-[#12633D] rounded py-2 px-4">
                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M7.14916 1.0193L7.67255 1.01562L13.3827 4.80036L13.3794 5.58399L7.66923 9.29925L7.15249 9.29565L1.61271 5.58039L1.60938 4.80403L7.14916 1.0193ZM7.41755 1.97134L2.71002 5.18748L7.4175 8.34457L12.2698 5.18745L7.41755 1.97134ZM1.67932 7.96883L7.15247 11.6394L7.6692 11.643L13.3163 7.96883H11.5972L7.41747 10.6883L3.36248 7.96883H1.67932ZM7.15247 13.9832L1.67932 10.3126H3.36248L7.41747 13.0321L11.5972 10.3126H13.3163L7.6692 13.9867L7.15247 13.9832Z" fill="#12633D"/>
                  </svg>
                  <span class="text-[#12633D] text-15 font-ubontu">ধাপ এবং দাগ তালিকা</span>
            </button>

            <button class="flex items-center gap-2 bg-[#12633D] rounded py-2 px-4">
                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M4.6875 2.34375L5.15625 1.875H7.03125L7.5 2.34375V12.6562L7.03125 13.125H5.15625L4.6875 12.6562V2.34375ZM5.625 2.8125V12.1875H6.5625V2.8125H5.625ZM8.59781 3.13594L8.87813 2.535L10.6406 1.89375L11.2406 2.17406L14.7675 11.8641L14.4872 12.465L12.7256 13.1062L12.1256 12.8259L8.59781 3.13594ZM9.63844 3.25594L12.8447 12.0647L13.7259 11.745L10.5197 2.93531L9.63844 3.25594ZM0.9375 2.34375L1.40625 1.875H3.28125L3.75 2.34375V12.6562L3.28125 13.125H1.40625L0.9375 12.6562V2.34375ZM1.875 2.8125V12.1875H2.8125V2.8125H1.875Z" fill="white"/>
                  </svg>
                  <span class="text-white text-15 font-ubontu">প্রজ্ঞাপন ভিত্তিক তথ্যাবলী</span>
            </button>
        </div>
        <div class="flex flex-wrap items-center lg:gap-6 xl:gap-8 mt-5">
            <div class="border border-[#BABABA] rounded relative w-full lg:w-[30%] pe-4 ps-1">
                <label for="" class="text-15 font-ubontu text-[#0E1F1C] leading-4 absolute -top-[12%] left-[5%] bg-white">মৌজা</label>
                <select name="" id="" class="w-full py-3 ps-1  border-none focus:outline-none text-[#BABABA] text-13">
                    <option value="">মৌজা নির্বাচন করুন</option>
                </select>
            </div>
            <div class="border border-[#BABABA] rounded relative w-full lg:w-[30%] pe-4 ps-1">
                <label for="holding_number" class="text-15 font-ubontu text-[#0E1F1C] leading-4 absolute -top-[12%] left-[5%] bg-white">দাগ নম্বর শুরু</label>
                <input type="text" class="w-full py-3 ps-1 pe-5 border-none focus:outline-none text-[#BABABA] text-13" placeholder="দাগ নম্বর শুরু">
            </div>

            <div class="border border-[#BABABA] rounded relative w-full lg:w-[30%] pe-4 ps-1">
                <label for="holding_number" class="text-15 font-ubontu text-[#0E1F1C] leading-4 absolute -top-[12%] left-[5%] bg-white">দাগ নম্বর শেষ</label>
                <input type="text" class="w-full py-3 ps-1 pe-5 border-none focus:outline-none text-[#BABABA] text-13" placeholder="দাগ নম্বর শেষ">
            </div>
            
            
        </div>
        <div class="pt-10 flex items-center gap-3">
            <h1 class="text-[#2AB752] font-ubontu lg:text-13 xl:text-14 leading-4">বিঃ দ্রঃ- একসাথে সর্বোচ্চ ৫০ টি দাগ এন্ট্রি দিতে পারবেন।</h1>
            
        </div>
        

        <div class="flex justify-center pt-8">
            <a href="{{ route('dag.settingsList') }}">
                <button class="bg-[#12633D] text-white font-ubontu text-16 leading-4 px-10 py-2 rounded shadow-md flex items-center gap-2">পরবর্তী
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="21" viewBox="0 0 20 21" fill="none">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M11.25 17.8587L17.5 11.6087V10.725L11.25 4.47498L10.3663 5.35873L15.5487 10.5425H2.5V11.7925H15.55L10.365 16.975L11.2487 17.8587H11.25Z" fill="white"/>
                      </svg>
                </button>
            </a>
        </div>
    </div>
</div>

@endsection
