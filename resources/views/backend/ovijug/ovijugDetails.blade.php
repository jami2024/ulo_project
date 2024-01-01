@extends('Layout.backend_master')
@section('content')

<div class="ps-3 pb-4">
    <div class="bg-white rounded-tl-2xl rounded-tr-2xl rounded-bl-0 rounded-br-0 py-3 px-4 shadow flex items-center lg:gap-28 xl:gap-52 pe-12">
        <div class="">
            <a href="{{ route('organization.categoryList') }}" class="flex items-center gap-1">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M9.45969 3.21899L3.42969 9.24899V10.311L9.45969 16.341L10.5217 15.2805L5.71119 10.47H8.53569C12.7552 10.47 15.4432 11.3775 17.0932 13.0635C18.7462 14.751 19.5157 17.379 19.5157 21.195V21.72H21.0157V21.195C21.0157 17.226 20.2252 14.115 18.1657 12.0135C16.1032 9.90749 12.9262 8.96999 8.53569 8.96999H5.83119L10.5217 4.28099L9.45969 3.21899Z" fill="#12633D"/>
                </svg>
                <h1 class="text-[#198754] font-ubontu leading-4 lg:text-12 xl:text-14">পেছনে</h1>
            </a>
        </div>
        
            <h2 class="text-[#12633D] font-ubontu lg:text-18 xl:text-24 leading-5">গৃহীত আপত্তি ও অভিযোগ সমূহ</h2>
 
    </div>
    <div class="bg-white w-full mt-1 px-14 pt-5 pb-40 shadow rounded-tl-2xl rounded-tr-2xl rounded-bl-0 rounded-br-0">
        <h1 class="text-[#0E1F1C] font-ubontu text-20 leading-5 pb-3">ইউজার গৃহীত আপত্তি ও অভিযোগ </h1>
        <div class="bg-white w-full pb-4 border border-[#DDD] rounded-lg">
            
            <div class="flex items-center justify-between">
                <div class="bg-[#12633D] border border-[#12633D] py-2 text-center w-[19%] rounded-tl-lg rounded-tr-0 rounded-bl-0 rounded-br-0">
                    <h1 class="text-white font-ubontu lg:text-14 xl:text-16 leading-4">বিভাগ: রাজশাহী</h1>
                </div>
                <div class="bg-[#12633D] border border-[#12633D] py-2 text-center w-[19%]">
                    <h1 class="text-white font-ubontu lg:text-14 xl:text-16 leading-4">জেলা: ঝিনাইদহ</h1>
                </div>
                <div class="bg-[#12633D] border border-[#12633D] py-2 text-center w-[19%]">
                    <h1 class="text-white font-ubontu lg:text-14 xl:text-16 leading-4">উপজেলা: শৈলকুপা</h1>
                </div>
                <div class="bg-[#12633D] border border-[#12633D] py-2 text-center w-[19%]">
                    <h1 class="text-white font-ubontu lg:text-14 xl:text-16 leading-4">মৌজা: নাদপাড়া</h1>
                </div>
                <div class="bg-[#12633D] border border-[#12633D] py-2 text-center w-[19%] rounded-tl-0 rounded-tr-lg rounded-bl-0 rounded-br-0">
                    <h1 class="text-white font-ubontu lg:text-14 xl:text-16 leading-4">হোল্ডিং নম্বর : ৩৪৫</h1>
                </div>
            </div>
            <div class="flex items-center gap-3 px-4 pt-3 pb-6">
                <div class="w-[70%] h-full">
                    <table>
                        <tr>
                            <td class="py-2">
                                <h1 class="text-[#0E1F1C] font-ubontu text-16 leading-4">নাম</h1>
                            </td>
                            <td class="ps-6">
                                <h1 class="text-[#0E1F1C] font-ubontu text-16 leading-4">মোঃ বাবলুর রহমান</h1>
                            </td>
                        </tr>
                        <tr class="py-2">
                            <td class="py-2">
                                <h1 class="text-[#0E1F1C] font-ubontu text-16 leading-4">মোবাইল নং</h1>
                            </td>
                            <td class="ps-6">
                                <h1 class="text-[#0E1F1C] font-ubontu text-16 leading-4">01537303291</h1>
                            </td>
                        </tr>
                        <tr>
                            <td class="py-2">
                                <h1 class="text-[#0E1F1C] font-ubontu text-16 leading-4">বিষয়</h1>
                            </td>
                            <td class="ps-6">
                                <h1 class="text-[#0E1F1C] font-ubontu text-16 leading-4">বিষয়১১৭৫ নং দাগে জমির পরিমাণ ভুল</h1>
                            </td>
                        </tr>
                        <tr>
                            <td class="py-2">
                                <h1 class="text-[#0E1F1C] font-ubontu text-16 leading-4">বিষয় বিস্তারিত</h1>
                            </td>
                            <td class="ps-6">
                                <h1 class="text-[#0E1F1C] font-ubontu text-16 leading-4">১১৭৫ নং দাগে জমির পরিমাণ ৮ শতকের স্থলে ৮০ শতক হয়েছে।</h1>
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="w-[25%] h-auto">
                    <div>
                        <h1 class="text-[#0E1F1C] font-ubontu text-16 leading-4">ছবি</h1>
                    </div>
                </div>
            </div>
            
        </div>
        <div class="flex items-center justify-between py-2">
            <h1 class="text-[#0E1F1C] font-ubontu text-20 leading-5">আপত্তি ও অভিযোগ প্রতিক্রিয়া </h1>

            <a href="" class="bg-[#2AB752] py-2 px-3 rounded flex items-center gap-2">
                <span class="text-white font-ubontu text-15">প্রতিক্রিয়া</span>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M13.086 6.99995L10.696 4.60195L11.398 3.89795L15 7.49995L11.398 11.1019L10.695 10.3979L13.078 8.01595V7.99995H3V6.99995H13.086ZM1 3.99995H2V10.9999H1V3.99995Z" fill="white"/>
                  </svg>
            </a>
        </div>

        <div class="py-4">
            <div class="overflow-x-auto">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-[#12633D] text-white rounded">
                      <tr class="py-3 px-1">
                        <th scope="col" class=" py-3 ps-5 pe-24"><span class="text-14 font-ubontu">তারিখ</span></th>
                        <th scope="col" class=" py-3"><span class="text-14 font-ubontu">ইউজার</span></th>
                        <th scope="col" class=" py-3"><span class="text-14 font-ubontu">প্রতিক্রিয়া</span></th>
                        <th scope="col" class="text-center py-3 ps-64"></th>
                        
                      </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200">
                      <tr>
                        <td class=" py-3"><span class="text-[#0E1F1C] text-13 font-ubontu">২১-১০-১৭ ১২:৫৫:১৫</span></td>
                        <td class=" py-3"><span class="text-[#0E1F1C] text-13 font-ubontu">মো: কামরুল ইসলাম, ইউনিয়ন ভূমি উপ-সহকারী কর্মকতা</span></td>
                        <td class=" py-3"><span class="text-[#0E1F1C] text-13 font-ubontu">সংশোধন করা হয়েছে। ধন্যবাদ</span></td>
                      </tr>
                      <!-- Other rows can be added similarly -->
                    </tbody>
                  </table>
                  
            </div>
              
        </div>

    </div>
</div>
@endsection



