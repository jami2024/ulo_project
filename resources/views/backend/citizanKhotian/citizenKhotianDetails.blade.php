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
        
            <h2 class="text-[#12633D] font-ubontu text-24">নাগরিক কতৃক খতিয়ান</h2>
        
    </div>
    
    <div class="bg-white w-full mt-1 px-4 pt-5 pb-40 shadow">

        <div class="text-center space-y-3">
            <h1 class="text-[#0E1F1C] text-24 font-ubontu leading-5">সারুটিয়া ইউনিয়ন ভূমি অফিস , শৈলকুপা, ঝিনাইদহ</h1>
            
            <div class="flex items-center justify-center gap-7">
                <h1 class="text-16 font-ubontu text-black">মৌজা- সারুটিয়া</h1>
                <h1 class="text-16 font-ubontu text-black">খতিয়ান নং-812</h1>
            </div>
        </div>

        <div class="flex items-center gap-7 mt-9">

            <div class="w-[50%]">
                <div class="border border-[#12633D] bg-[#12633D] rounded-tl-2xl rounded-tr-2xl rounded-bl-0 rounded-br-0 py-2">
                    <h2 class="text-white font-ubontu text-14 text-center leading-4">খতিয়ানের নির্বাচিত মালিক</h2>
                </div>
                <div>
                    <div class="overflow-x-auto">
                        <table class="table table-xs table-pin-rows table-pin-cols">
                          <thead >
                            <tr class="bg-[#F1F1F1]">
                              <td class="text-center border-r border-gray-400"><span class="text-[#0E1F1C] text-14 font-ubontu">খতিয়ানের নির্বাচিত মালিক</span></td> 
                              <td class="text-center border-r border-gray-400"><span class="text-[#0E1F1C] text-14 font-ubontu">হোল্ডিং</span></td> 
                              <td class="text-center"><span class="text-[#0E1F1C] text-14 font-ubontu">সংযুক্তি (খতিয়ান অথবা দাখিলা)</span></td> 
                            </tr>
                          </thead> 
                          <tbody>
                            <tr>
                                <td class="text-center">
                                    <span class="text-[#0E1F1C] text-13 font-ubontu">মোঃ মনোয়ার হোসেন</span>
                                </td> 
                                <td class="text-center">
                                    <span class="text-[#0E1F1C] text-13 font-ubontu">বড়ুরিয়া</span>
                                </td> 
                                <td class="text-center">
                                    <div class="flex items-center justify-center">
                                        <a onclick="handleShowModal('modalCitizenKhotianDetails')" class="flex items-center gap-1 bg-[#2AB752] py-1 px-3 rounded cursor-pointer">
                                            <span class="text-[#FFEAEA] text-13 font-ubontu">সংযুক্তি </span>
                                            
                                        </a>
                                    </div>
                                </td> 
                            </tr>
                          </tbody> 
                          
                        </table>
                    </div>
                </div>

            </div>

            <div class="w-[50%]">
                <div class="border border-[#12633D] bg-[#12633D] rounded-tl-2xl rounded-tr-2xl rounded-bl-0 rounded-br-0 py-2">
                    <h2 class="text-white font-ubontu text-14 text-center leading-4">সংশ্লিষ্ট হোল্ডিং</h2>
                </div>
                <div>
                    <div class="overflow-x-auto">
                        <table class="table table-xs table-pin-rows table-pin-cols">
                          <thead >
                            <tr class="bg-[#F1F1F1]">
                              <td class="text-center border-r border-gray-400"><span class="text-[#0E1F1C] text-14 font-ubontu">মালিকের নাম</span></td> 
                              <td class="text-center border-r border-gray-400"><span class="text-[#0E1F1C] text-14 font-ubontu">হোল্ডিং</span></td> 
                              <td class="text-center"><span class="text-[#0E1F1C] text-14 font-ubontu">পদক্ষেপ</span></td> 
                            </tr>
                          </thead> 
                          <tbody>
                            <tr>
                                <td class="text-center">
                                    <span class="text-[#0E1F1C] text-13 font-ubontu">মোঃ মনোয়ার হোসেন</span>
                                </td> 
                                <td class="text-center">
                                    <span class="text-[#0E1F1C] text-13 font-ubontu">বড়ুরিয়া</span>
                                </td> 
                                <td class="text-center">
                                    <div class="flex items-center justify-center">
                                        <a href="" class="flex items-center gap-1 bg-[#3B8CD7] py-1 px-3 rounded">
                                            <span class="text-[#FFEAEA] text-13 font-ubontu">সমন্বয় করুন </span>
                                            
                                        </a>
                                    </div>
                                </td> 
                            </tr>
                          </tbody> 
                          
                        </table>
                    </div>
                </div>

            </div>
        </div>

        <div class="mt-12 flex items-center justify-center">
            <a href="{{ route('holding.registrationOne') }}" class="bg-[#198754] text-12 font-ubontu text-white leading-3 rounded-2xl px-4 py-3">
                হোল্ডিং এন্ট্রি করুন
            </a>
        </div>

        <div class="mt-14">
            <h3 class="text-16 font-ubontu text-black leading-4">নির্দেশনাঃ</h3>
        </div>
        
    </div>
</div>


@endsection



