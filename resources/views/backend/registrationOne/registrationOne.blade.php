@extends('Layout.backend_master')
@section('content')

<div class="ps-3 pb-4">
    <div class="bg-white px-4 py-3 rounded-tl-2xl rounded-tr-2xl lg:rounded-bl-0 lg:rounded-br-0">
        <div class="flex items-center gap-5 lg:gap-10 xl:gap-40">
            <div>
               <a href="{{ url('/') }}" class="flex items-center gap-1">
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
        
                    <h3 class="text-16 lg:text-18 xl:text-24 text-[#12633D] leading-5 font-ubontu">নিবন্ধন বই নং ২- জমির তথ্য</h3>
                </div>
                <div class="flex items-center gap-2">
                    <p class="border border-[#A8A8A8] p-2 rounded-full w-[28px] h-[28px] flex items-center justify-center">
                        <span class="text-[#A8A8A8] font-semibold font-ubontu leading-4">২</span>
                    </p>
                    <svg xmlns="http://www.w3.org/2000/svg" width="11" height="2" viewBox="0 0 11 2" fill="none">
                        <path d="M0 1H11" stroke="#A8A8A8"/>
                    </svg>
                    <p class="border border-[#A8A8A8] p-2 rounded-full w-[28px] h-[28px] flex items-center justify-center">
                        <span class="text-[#A8A8A8] font-semibold font-ubontu leading-4">৩</span>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-white px-5 py-10 mt-1 rounded">
        <div class="flex flex-wrap items-center lg:gap-6 xl:gap-8">
            <div class="border border-[#BABABA] rounded relative w-full lg:w-[30%] pe-4 ps-1">
                <label for="" class="text-15 font-ubontu text-[#0E1F1C] leading-4 absolute -top-[12%] left-[5%] bg-white">মৌজা</label>
                <select name="" id="" class="w-full py-3 ps-1  border-none focus:outline-none text-[#BABABA] text-13">
                    <option value="">মৌজা নির্বাচন করুন</option>
                </select>
            </div>
            <div class="border border-[#BABABA] rounded relative w-full lg:w-[30%] pe-4 ps-1">
                <label for="" class="text-15 font-ubontu text-[#0E1F1C] leading-4 absolute -top-[12%] left-[5%] bg-white">ভূমি জরিপের ধরন</label>
                <select name="" id="" class="w-full py-3 ps-1 pe-5 border-none focus:outline-none text-[#BABABA] text-13">
                    <option value="">ভূমি জরিপের ধরন</option>
                </select>
            </div>
            <div class="border border-[#BABABA] rounded relative w-full lg:w-[30%] pe-4 ps-1">
                <label for="" class="text-15 font-ubontu text-[#0E1F1C] leading-4 absolute -top-[12%] left-[5%] bg-white">বর্তমান হোল্ডিং নং</label>
                <select name="" id="" class="w-full py-3 ps-1 pe-5 border-none focus:outline-none text-[#BABABA] text-13">
                    <option value="">হোল্ডিং নং </option>
                </select>
            </div>
            <div class="border border-[#BABABA] rounded relative w-full lg:w-[30%] pe-4 ps-1">
                <label for="" class="text-15 font-ubontu text-[#0E1F1C] leading-4 absolute -top-[12%] left-[5%] bg-white">হোল্ডিং টাইপ</label>
                <select name="" id="" class="w-full py-3 ps-1 pe-5 border-none focus:outline-none text-[#BABABA] text-13">
                    <option value="">হোল্ডিং টাইপ নির্বাচন করুন</option>
                </select>
            </div>
            <div class="border border-[#BABABA] rounded relative w-full lg:w-[30%] pe-4 ps-1">
                <label for="" class="text-15 font-ubontu text-[#0E1F1C] leading-4 absolute -top-[12%] left-[5%] bg-white">সর্বশেষ কর পরিশোধের সাল</label>
                <select name="" id="" class="w-full py-3 ps-1 pe-5 border-none focus:outline-none text-[#BABABA] text-13">
                    <option value="">নির্বাচন করুন</option>
                </select>
            </div>
            
        </div>
        <div class="py-10 flex items-center gap-3">
            <h1 class="text-[#0E1F1C] font-ubontu lg:text-14 xl:text-16 leading-4">আবাসন প্রকল্প হলে বক্সে টিক দিন?</h1>
            <input type="checkbox" class="w-[24px] h-[24px] shadow-md" onclick="handleCheck('event')">
        </div>
        <div id="checkShow" class="hidden">
            <div class="flex items-center lg:gap-6 xl:gap-8">
                <div class="border border-[#BABABA] rounded relative w-full lg:w-[30%] pe-4 ps-1">
                    <label for="" class="text-15 font-ubontu text-[#0E1F1C] leading-4 absolute -top-[12%] left-[5%] bg-white">আবাসন প্রকল্পের নাম</label>
                    <select name="" id="" class="w-full py-3 ps-1 pe-5 border-none focus:outline-none text-[#BABABA] text-13">
                        <option value="">নির্বাচন করুন</option>
                    </select>
                </div>
                <div class="border border-[#BABABA] rounded relative w-full lg:w-[30%] pe-4 ps-1">
                    <label for="" class="text-15 font-ubontu text-[#0E1F1C] leading-4 absolute -top-[12%] left-[5%] bg-white">সেক্টর/সেকশন</label>
                    <select name="" id="" class="w-full py-3 ps-1 pe-5 border-none focus:outline-none text-[#BABABA] text-13">
                        <option value="">নির্বাচন করুন</option>
                    </select>
                </div>
                <div class="border border-[#BABABA] rounded relative w-full lg:w-[30%] pe-4 ps-1">
                    <label for="" class="text-15 font-ubontu text-[#0E1F1C] leading-4 absolute -top-[12%] left-[5%] bg-white">ব্লক</label>
                    <select name="" id="" class="w-full py-3 ps-1 pe-5 border-none focus:outline-none text-[#BABABA] text-13">
                        <option value="">নির্বাচন করুন</option>
                    </select>
                </div>
            </div>
            <div class="py-9">
                <div class="border border-[#BABABA] rounded relative w-full lg:w-[62%] pe-4 ps-1">
                    <label for="" class="text-15 font-ubontu text-[#0E1F1C] leading-4 absolute -top-[12%] left-[5%] bg-white">এভিনিউ / রোড / লেন</label>
                    <select name="" id="" class="w-full py-3 ps-1 pe-5 border-none focus:outline-none text-[#BABABA] text-13">
                        <option value="">এভিনিউ / রোড / লেন লিখুন</option>
                    </select>
                </div>
            </div>
        </div>

        <div class="flex justify-end pt-8">
            <a href="{{ route('holding.registrationTwo') }}">
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
@section('script')

<script>
    function handleCheck (e){
       let checkShow = document.getElementById('checkShow');
         if(e == 'event'){
              checkShow.classList.toggle('hidden');
         }
         
       
    }
</script>

@endsection