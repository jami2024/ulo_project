@extends('Layout.backend_master')
@section('content')

<div class="ps-3 pb-4">
    <div class="bg-white rounded-tl-2xl rounded-tr-2xl rounded-bl-0 rounded-br-0 py-3 px-4 shadow">
            <h2 class="text-[#12633D] font-ubontu text-24 text-center">নাগরিক কতৃক খতিয়ান সমূহের তথ্য অনুসন্ধান</h2>
    </div>
    <div class="bg-white w-full mt-1 px-14 pt-5 pb-40 shadow">

        <div class="bg-white w-full pb-4 border border-[#DDD] rounded-lg">
            <div class="flex items-center gap-2">
                <div class="bg-[#12633D] border border-[#12633D] py-2 px-6 w-[180px] rounded-tl-lg rounded-tr-0 rounded-bl-0 rounded-br-0">
                    <h1 class="text-white font-ubontu text-16 leading-4">জেলা: ঝিনাইদহ</h1>
                </div>
                <div class="bg-[#12633D] border border-[#12633D] py-2 px-6 w-[200px]">
                    <h1 class="text-white font-ubontu text-16 leading-4">উপজেলা: শৈলকুপা</h1>
                </div>
            </div>

            <div class="flex items-center justify-center gap-3 mt-12">
                <div class="border border-[#BABABA] rounded relative w-full lg:w-[35%] pe-4 ps-1">
                    <label for="mouza" class="text-15 font-ubontu text-[#0E1F1C] leading-4 absolute -top-[12%] left-[5%] bg-white">মৌজা</label>
                    <select name="mouza" id="mouza" class="w-full py-3 ps-1 border-none focus:outline-none text-[#BABABA] text-13">
                        <option value="">মৌজা নির্বাচন করুন</option>
                        
                        <option value="mouza1">মৌজা ১</option>
                        <option value="mouza2">মৌজা ২</option>
                    </select>
                </div>
                
                <div class="border border-[#BABABA] rounded relative w-full lg:w-[35%] pe-4 ps-1">
                    <label for="holding_number" class="text-15 font-ubontu text-[#0E1F1C] leading-4 absolute -top-[12%] left-[5%] bg-white">খতিয়ান</label>
                    <input type="text" class="w-full py-3 ps-1 pe-5 border-none focus:outline-none text-black text-13" placeholder="খতিয়ান">
                </div>
            </div>
            <div class="flex items-center justify-center mt-6">
                <a href="{{ route('citizen.khotianList') }}" class="bg-[#198754] text-white font-ubontu text-16 leading-4 py-3 px-6 rounded mt-8 flex items-center gap-1">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                        <path d="M10.168 6.8356e-07C9.10828 -0.000527531 8.071 0.305084 7.18088 0.880081C6.29075 1.45508 5.58569 2.27498 5.15048 3.24117C4.71527 4.20737 4.56844 5.27872 4.72766 6.32638C4.88688 7.37403 5.34536 8.35339 6.04797 9.14667L0.667969 15.2533L1.41464 15.92L6.7813 9.84C7.47161 10.38 8.28095 10.7472 9.14191 10.911C10.0029 11.0749 10.8905 11.0306 11.7309 10.782C12.5713 10.5333 13.3401 10.0875 13.9733 9.48156C14.6065 8.87563 15.0858 8.12718 15.3712 7.29854C15.6565 6.46991 15.7398 5.58507 15.614 4.71774C15.4882 3.85041 15.157 3.02569 14.6479 2.31229C14.1389 1.59888 13.4667 1.01744 12.6874 0.61639C11.9082 0.21534 11.0444 0.0062954 10.168 0.00666735V6.8356e-07ZM10.168 10C8.97449 10 7.8299 9.5259 6.98599 8.68198C6.14207 7.83807 5.66797 6.69348 5.66797 5.5C5.66797 4.30653 6.14207 3.16193 6.98599 2.31802C7.8299 1.47411 8.97449 1 10.168 1C11.3614 1 12.506 1.47411 13.3499 2.31802C14.1939 3.16193 14.668 4.30653 14.668 5.5C14.668 6.69348 14.1939 7.83807 13.3499 8.68198C12.506 9.5259 11.3614 10 10.168 10Z" fill="white"/>
                      </svg>
                    অনুসন্ধান</a>
            </div>
        </div>

    </div>
</div>


@endsection



