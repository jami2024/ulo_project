@extends('Layout.backend_master')
@section('content')

<div class="ps-3 pb-4">
    <div class="bg-[#198754] py-4 px-3 rounded-tl-2xl rounded-tr-2xl rounded-bl-0 rounded-br-0">
        <h1 class="text-white text-24 leading-6 text-center">অপেক্ষামান হোল্ডিং বিবরণ</h1>
    </div>
    <div class="border border-[#7ECBA1] bg-white rounded shadow px-3 py-2 mt-1">
        <div class="flex items-center justify-between">
            <h3 class="text-[#198754] font-ubontu text-16 leading-4">অপেক্ষামান হোল্ডিং এর বিস্তারিত অনুসন্ধান</h3>
            <a href="#" class="text-[#A5008A] font-ubontu text-16 flex items-center gap-1 underline">বিস্তারিত অনুসন্ধান
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M13.8867 9L8.88669 14H8.17969L3.17969 9L3.88669 8.293L8.03369 12.439V2H9.03369V12.44L13.1797 8.292L13.8867 8.999V9Z" fill="#A5008A"/>
                </svg>
            </a>
        </div>
        <div class="flex flex-wrap items-center lg:gap-4 xl:gap-6 py-3">
            <div class="border border-[#BABABA] rounded relative w-full lg:w-[23%] pe-4 ps-1">
                <label for="mouza" class="text-15 font-ubontu text-[#0E1F1C] leading-4 absolute -top-[12%] left-[5%] bg-white">মৌজা</label>
                <select name="mouza" id="mouza" class="w-full py-3 ps-1  border-none focus:outline-none text-[#BABABA] text-13">
                    <option value="">মৌজা নির্বাচন করুন</option>
                    <option value="mouza1">মৌজা ১</option>
                    <option value="mouza2">মৌজা ২</option>
                    <!-- Add more options as needed -->
                </select>
            </div>
    
            <div class="border border-[#BABABA] rounded relative w-full lg:w-[23%] pe-4 ps-1">
                <label for="holding_type" class="text-15 font-ubontu text-[#0E1F1C] leading-4 absolute -top-[12%] left-[5%] bg-white">হোল্ডিং টাইপ</label>
                <select name="holding_type" id="holding_type" class="w-full py-3 ps-1 pe-5 border-none focus:outline-none text-[#BABABA] text-13">
                    <option value="">হোল্ডিং টাইপ নির্বাচন করুন</option>
                    <option value="type1">টাইপ ১</option>
                    <option value="type2">টাইপ ২</option>
                    <!-- Add more options as needed -->
                </select>
            </div>
    
            <div class="border border-[#BABABA] rounded relative w-full lg:w-[23%] pe-4 ps-1">
                <label for="land_survey_type" class="text-15 font-ubontu text-[#0E1F1C] leading-4 absolute -top-[12%] left-[5%] bg-white">ভূমি জরিপের ধরন</label>
                <select name="land_survey_type" id="land_survey_type" class="w-full py-3 ps-1 pe-5 border-none focus:outline-none text-[#BABABA] text-13">
                    <option value="">নির্বাচন করুন</option>
                    <option value="survey1">জরিপ ১</option>
                    <option value="survey2">জরিপ ২</option>
                    <!-- Add more options as needed -->
                </select>
            </div>
    
            <div class="w-full lg:w-[23%] pe-4 ps-1">
                <button class="bg-[#12633D] flex items-center justify-center gap-2 py-3 px-3 rounded-md cursor-pointer">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="21" viewBox="0 0 20 21" fill="none">
                        <path d="M12.707 0.500001C11.3824 0.499341 10.0858 0.881355 8.97317 1.6001C7.86051 2.31885 6.97918 3.34372 6.43517 4.55146C5.89116 5.75921 5.70763 7.09839 5.90665 8.40797C6.10567 9.71754 6.67877 10.9417 7.55703 11.9333L0.832031 19.5667L1.76536 20.4L8.4737 12.8C9.33659 13.4749 10.3483 13.9339 11.4245 14.1388C12.5006 14.3436 13.6102 14.2883 14.6607 13.9775C15.7112 13.6667 16.6722 13.1093 17.4637 12.3519C18.2552 11.5945 18.8543 10.659 19.211 9.62318C19.5678 8.58738 19.6718 7.48134 19.5146 6.39717C19.3573 5.31301 18.9433 4.28212 18.307 3.39036C17.6706 2.4986 16.8305 1.7718 15.8564 1.27049C14.8823 0.769175 13.8025 0.507869 12.707 0.508334V0.500001ZM12.707 13C11.2152 13 9.78445 12.4074 8.72956 11.3525C7.67466 10.2976 7.08203 8.86684 7.08203 7.375C7.08203 5.88316 7.67466 4.45242 8.72956 3.39753C9.78445 2.34263 11.2152 1.75 12.707 1.75C14.1989 1.75 15.6296 2.34263 16.6845 3.39753C17.7394 4.45242 18.332 5.88316 18.332 7.375C18.332 8.86684 17.7394 10.2976 16.6845 11.3525C15.6296 12.4074 14.1989 13 12.707 13Z" fill="white"/>
                    </svg>
                    <span class="text-white font-ubontu text-16 leading-4">অনুসন্ধান</span>
                </button>
            </div>
        </div>
    </div>
    


        <div class="border border-[#7ECBA1] bg-white rounded shadow px-3 py-2 mt-1">
            <div class="flex items-center justify-between">
                <h3 class="text-[#198754] font-ubontu text-14 leading-4">অপেক্ষামান হোল্ডিং বিবরণ</h3>
                <div class="flex items-center gap-3">
                    <div class="flex items-center gap-1">
                        <p class="bg-[#D0A32E] w-[19px] h-[9px]"></p>
                        <p class="text-[#0E1F1C] text-13 font-ubontu leading-4">দুই বছরের উর্ধে বকেয়া</p>
                    </div>
                    <div class="flex items-center gap-1">
                        <p class="bg-[#EF0000] w-[19px] h-[9px]"></p>
                        <p class="text-[#0E1F1C] text-13 font-ubontu leading-4">তিন বছরের উর্ধে বকেয়া</p>
                    </div>
                </div>
                
            </div>
            <div>
                <div class="py-4">
                    <div class="overflow-x-auto">
                        <table class="table table-xs table-pin-rows table-pin-cols">
                          <thead>
                            <tr>
                              <th class="text-center border-r border-gray-400"><span class="text-[#0E1F1C] text-14 font-ubontu">ক্রম নং</span></th> 
                              <td class="text-center border-r border-gray-400"><span class="text-[#0E1F1C] text-14 font-ubontu">মালিকের নাম</span></td> 
                              <td class="text-center border-r border-gray-400"><span class="text-[#0E1F1C] text-14 font-ubontu">মৌজা</span></td> 
                              <td class="text-center border-r border-gray-400"><span class="text-[#0E1F1C] text-14 font-ubontu">হোল্ডিং নং</span></td> 
                              <td class="text-center border-r border-gray-400"><span class="text-[#0E1F1C] text-14 font-ubontu">খতিয়ান নং</span></td> 
                              <td class="text-center border-r border-gray-400"><span class="text-[#0E1F1C] text-14 font-ubontu">ধরন</span></td> 
                              <td class="text-center"><span class="text-[#0E1F1C] text-14 font-ubontu">পদক্ষেপ</span></td>
                               
                            </tr>
                          </thead> 
                          <tbody>
                            <tr>
                              <td class="text-center"><span class="text-[#0E1F1C] text-13 font-ubontu">০১</span></td> 
                              <td class="text-center"><span class="text-[#0E1F1C] text-13 font-ubontu">মোঃ মেহেদী হাসান ফাহিম</span></td> 
                              <td class="text-center"><span class="text-[#0E1F1C] text-13 font-ubontu">বড়ুরিয়া</span></td> 
                              <td class="text-center"><span class="text-[#0E1F1C] text-13 font-ubontu">১৮৬২</span></td> 
                              <td class="text-center"><span class="text-[#0E1F1C] text-13 font-ubontu">৬২</span></td> 
                              <td class="text-center"><span class="text-[#0E1F1C] text-13 font-ubontu">নাগরিক কতৃক খতিয়ান</span></td> 
                              <td class="text-center">
                                <div class="flex items-center justify-end gap-1">
                                    <a href="" class="flex items-center gap-1 bg-[#A5008A] py-1 px-3 rounded">
                                        <span class="text-[#FFEAEA] text-13 font-ubontu">বিস্তারিত</span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M13.086 7.00044L10.696 4.60244L11.398 3.89844L15 7.50044L11.398 11.1024L10.695 10.3984L13.078 8.01644V8.00044H3V7.00044H13.086ZM1 4.00044H2V11.0004H1V4.00044Z" fill="#FFEAEA"/>
                                        </svg>
                                    </a>
    
                                    <a href=""  class="flex items-center gap-1 bg-[#3B8CD7] py-1 px-3 rounded">
                                        <span class="text-[#FFEAEA] text-13 font-ubontu">সংশোধন</span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                            <path d="M11.175 10.4694L12.0639 9.58047C12.2028 9.44158 12.4444 9.5388 12.4444 9.7388V13.7777C12.4444 14.5138 11.8472 15.111 11.1111 15.111H1.33333C0.597222 15.111 0 14.5138 0 13.7777V3.99991C0 3.2638 0.597222 2.66658 1.33333 2.66658H8.93056C9.12778 2.66658 9.22778 2.90547 9.08889 3.04714L8.2 3.93602C8.15833 3.97769 8.10278 3.99991 8.04167 3.99991H1.33333V13.7777H11.1111V10.6249C11.1111 10.5666 11.1333 10.511 11.175 10.4694ZM15.525 4.8638L8.23056 12.1582L5.71944 12.436C4.99167 12.5166 4.37222 11.9027 4.45278 11.1694L4.73056 8.65825L12.025 1.3638C12.6611 0.727691 13.6889 0.727691 14.3222 1.3638L15.5222 2.5638C16.1583 3.19991 16.1583 4.23047 15.525 4.8638ZM12.7806 5.72214L11.1667 4.10825L6.00556 9.27214L5.80278 11.086L7.61667 10.8832L12.7806 5.72214ZM14.5806 3.50825L13.3806 2.30825C13.2667 2.19436 13.0806 2.19436 12.9694 2.30825L12.1111 3.16658L13.725 4.78047L14.5833 3.92214C14.6944 3.80547 14.6944 3.62214 14.5806 3.50825Z" fill="#FFEAEA"/>
                                          </svg>
                                    </a>
                                </div>
                              </td>
                              
                            </tr>
                            <tr class="bg-[#FFC738]">
                                <td class="text-center"><span class="text-[#0E1F1C] text-13 font-ubontu">০১</span></td> 
                                <td class="text-center"><span class="text-[#0E1F1C] text-13 font-ubontu">মোঃ মেহেদী হাসান ফাহিম</span></td> 
                                <td class="text-center"><span class="text-[#0E1F1C] text-13 font-ubontu">বড়ুরিয়া</span></td> 
                                <td class="text-center"><span class="text-[#0E1F1C] text-13 font-ubontu">১৮৬২</span></td> 
                                <td class="text-center"><span class="text-[#0E1F1C] text-13 font-ubontu">৬২</span></td> 
                                <td class="text-center"><span class="text-[#0E1F1C] text-13 font-ubontu">নাগরিক কতৃক খতিয়ান</span></td> 
                                <td class="text-center">
                                  <div class="flex items-center justify-end gap-1">
                                      <a href="" class="flex items-center gap-1 bg-[#A5008A] py-1 px-3 rounded">
                                          <span class="text-[#FFEAEA] text-13 font-ubontu">বিস্তারিত</span>
                                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                              <path fill-rule="evenodd" clip-rule="evenodd" d="M13.086 7.00044L10.696 4.60244L11.398 3.89844L15 7.50044L11.398 11.1024L10.695 10.3984L13.078 8.01644V8.00044H3V7.00044H13.086ZM1 4.00044H2V11.0004H1V4.00044Z" fill="#FFEAEA"/>
                                          </svg>
                                      </a>
      
                                      <a href="{{ route('holding.registrationOne') }}"  class="flex items-center gap-1 bg-[#3B8CD7] py-1 px-3 rounded">
                                          <span class="text-[#FFEAEA] text-13 font-ubontu">সংশোধন</span>
                                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                              <path d="M11.175 10.4694L12.0639 9.58047C12.2028 9.44158 12.4444 9.5388 12.4444 9.7388V13.7777C12.4444 14.5138 11.8472 15.111 11.1111 15.111H1.33333C0.597222 15.111 0 14.5138 0 13.7777V3.99991C0 3.2638 0.597222 2.66658 1.33333 2.66658H8.93056C9.12778 2.66658 9.22778 2.90547 9.08889 3.04714L8.2 3.93602C8.15833 3.97769 8.10278 3.99991 8.04167 3.99991H1.33333V13.7777H11.1111V10.6249C11.1111 10.5666 11.1333 10.511 11.175 10.4694ZM15.525 4.8638L8.23056 12.1582L5.71944 12.436C4.99167 12.5166 4.37222 11.9027 4.45278 11.1694L4.73056 8.65825L12.025 1.3638C12.6611 0.727691 13.6889 0.727691 14.3222 1.3638L15.5222 2.5638C16.1583 3.19991 16.1583 4.23047 15.525 4.8638ZM12.7806 5.72214L11.1667 4.10825L6.00556 9.27214L5.80278 11.086L7.61667 10.8832L12.7806 5.72214ZM14.5806 3.50825L13.3806 2.30825C13.2667 2.19436 13.0806 2.19436 12.9694 2.30825L12.1111 3.16658L13.725 4.78047L14.5833 3.92214C14.6944 3.80547 14.6944 3.62214 14.5806 3.50825Z" fill="#FFEAEA"/>
                                            </svg>
                                      </a>
                                  </div>
                                </td>
                                
                              </tr>
                              <tr>
                                <td class="text-center"><span class="text-[#0E1F1C] text-13 font-ubontu">০১</span></td> 
                                <td class="text-center"><span class="text-[#0E1F1C] text-13 font-ubontu">মোঃ মেহেদী হাসান ফাহিম</span></td> 
                                <td class="text-center"><span class="text-[#0E1F1C] text-13 font-ubontu">বড়ুরিয়া</span></td> 
                                <td class="text-center"><span class="text-[#0E1F1C] text-13 font-ubontu">১৮৬২</span></td> 
                                <td class="text-center"><span class="text-[#0E1F1C] text-13 font-ubontu">৬২</span></td> 
                                <td class="text-center"><span class="text-[#0E1F1C] text-13 font-ubontu">নাগরিক কতৃক খতিয়ান</span></td> 
                                <td class="text-center">
                                  <div class="flex items-center justify-end gap-1">
                                      <a href="" class="flex items-center gap-1 bg-[#A5008A] py-1 px-3 rounded">
                                          <span class="text-[#FFEAEA] text-13 font-ubontu">বিস্তারিত</span>
                                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                              <path fill-rule="evenodd" clip-rule="evenodd" d="M13.086 7.00044L10.696 4.60244L11.398 3.89844L15 7.50044L11.398 11.1024L10.695 10.3984L13.078 8.01644V8.00044H3V7.00044H13.086ZM1 4.00044H2V11.0004H1V4.00044Z" fill="#FFEAEA"/>
                                          </svg>
                                      </a>
      
                                      <a href="{{ route('holding.registrationOne') }}"  class="flex items-center gap-1 bg-[#3B8CD7] py-1 px-3 rounded">
                                          <span class="text-[#FFEAEA] text-13 font-ubontu">সংশোধন</span>
                                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                              <path d="M11.175 10.4694L12.0639 9.58047C12.2028 9.44158 12.4444 9.5388 12.4444 9.7388V13.7777C12.4444 14.5138 11.8472 15.111 11.1111 15.111H1.33333C0.597222 15.111 0 14.5138 0 13.7777V3.99991C0 3.2638 0.597222 2.66658 1.33333 2.66658H8.93056C9.12778 2.66658 9.22778 2.90547 9.08889 3.04714L8.2 3.93602C8.15833 3.97769 8.10278 3.99991 8.04167 3.99991H1.33333V13.7777H11.1111V10.6249C11.1111 10.5666 11.1333 10.511 11.175 10.4694ZM15.525 4.8638L8.23056 12.1582L5.71944 12.436C4.99167 12.5166 4.37222 11.9027 4.45278 11.1694L4.73056 8.65825L12.025 1.3638C12.6611 0.727691 13.6889 0.727691 14.3222 1.3638L15.5222 2.5638C16.1583 3.19991 16.1583 4.23047 15.525 4.8638ZM12.7806 5.72214L11.1667 4.10825L6.00556 9.27214L5.80278 11.086L7.61667 10.8832L12.7806 5.72214ZM14.5806 3.50825L13.3806 2.30825C13.2667 2.19436 13.0806 2.19436 12.9694 2.30825L12.1111 3.16658L13.725 4.78047L14.5833 3.92214C14.6944 3.80547 14.6944 3.62214 14.5806 3.50825Z" fill="#FFEAEA"/>
                                            </svg>
                                      </a>
                                  </div>
                                </td>
                                
                              </tr>
                              <tr>
                                <td class="text-center"><span class="text-[#0E1F1C] text-13 font-ubontu">০১</span></td> 
                                <td class="text-center"><span class="text-[#0E1F1C] text-13 font-ubontu">মোঃ মেহেদী হাসান ফাহিম</span></td> 
                                <td class="text-center"><span class="text-[#0E1F1C] text-13 font-ubontu">বড়ুরিয়া</span></td> 
                                <td class="text-center"><span class="text-[#0E1F1C] text-13 font-ubontu">১৮৬২</span></td> 
                                <td class="text-center"><span class="text-[#0E1F1C] text-13 font-ubontu">৬২</span></td> 
                                <td class="text-center"><span class="text-[#0E1F1C] text-13 font-ubontu">নাগরিক কতৃক খতিয়ান</span></td> 
                                <td class="text-center">
                                  <div class="flex items-center justify-end gap-1">
                                      <a href="" class="flex items-center gap-1 bg-[#A5008A] py-1 px-3 rounded">
                                          <span class="text-[#FFEAEA] text-13 font-ubontu">বিস্তারিত</span>
                                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                              <path fill-rule="evenodd" clip-rule="evenodd" d="M13.086 7.00044L10.696 4.60244L11.398 3.89844L15 7.50044L11.398 11.1024L10.695 10.3984L13.078 8.01644V8.00044H3V7.00044H13.086ZM1 4.00044H2V11.0004H1V4.00044Z" fill="#FFEAEA"/>
                                          </svg>
                                      </a>
      
                                      <a href="{{ route('holding.registrationOne') }}"  class="flex items-center gap-1 bg-[#3B8CD7] py-1 px-3 rounded">
                                          <span class="text-[#FFEAEA] text-13 font-ubontu">সংশোধন</span>
                                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                              <path d="M11.175 10.4694L12.0639 9.58047C12.2028 9.44158 12.4444 9.5388 12.4444 9.7388V13.7777C12.4444 14.5138 11.8472 15.111 11.1111 15.111H1.33333C0.597222 15.111 0 14.5138 0 13.7777V3.99991C0 3.2638 0.597222 2.66658 1.33333 2.66658H8.93056C9.12778 2.66658 9.22778 2.90547 9.08889 3.04714L8.2 3.93602C8.15833 3.97769 8.10278 3.99991 8.04167 3.99991H1.33333V13.7777H11.1111V10.6249C11.1111 10.5666 11.1333 10.511 11.175 10.4694ZM15.525 4.8638L8.23056 12.1582L5.71944 12.436C4.99167 12.5166 4.37222 11.9027 4.45278 11.1694L4.73056 8.65825L12.025 1.3638C12.6611 0.727691 13.6889 0.727691 14.3222 1.3638L15.5222 2.5638C16.1583 3.19991 16.1583 4.23047 15.525 4.8638ZM12.7806 5.72214L11.1667 4.10825L6.00556 9.27214L5.80278 11.086L7.61667 10.8832L12.7806 5.72214ZM14.5806 3.50825L13.3806 2.30825C13.2667 2.19436 13.0806 2.19436 12.9694 2.30825L12.1111 3.16658L13.725 4.78047L14.5833 3.92214C14.6944 3.80547 14.6944 3.62214 14.5806 3.50825Z" fill="#FFEAEA"/>
                                            </svg>
                                      </a>
                                  </div>
                                </td>
                                
                              </tr>
                              <tr class="bg-[#FFCBCB]">
                                <td class="text-center"><span class="text-[#0E1F1C] text-13 font-ubontu">০১</span></td> 
                                <td class="text-center"><span class="text-[#0E1F1C] text-13 font-ubontu">মোঃ মেহেদী হাসান ফাহিম</span></td> 
                                <td class="text-center"><span class="text-[#0E1F1C] text-13 font-ubontu">বড়ুরিয়া</span></td> 
                                <td class="text-center"><span class="text-[#0E1F1C] text-13 font-ubontu">১৮৬২</span></td> 
                                <td class="text-center"><span class="text-[#0E1F1C] text-13 font-ubontu">৬২</span></td> 
                                <td class="text-center"><span class="text-[#0E1F1C] text-13 font-ubontu">নাগরিক কতৃক খতিয়ান</span></td> 
                                <td class="text-center">
                                  <div class="flex items-center justify-end gap-1">
                                      <a href="" class="flex items-center gap-1 bg-[#A5008A] py-1 px-3 rounded">
                                          <span class="text-[#FFEAEA] text-13 font-ubontu">বিস্তারিত</span>
                                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                              <path fill-rule="evenodd" clip-rule="evenodd" d="M13.086 7.00044L10.696 4.60244L11.398 3.89844L15 7.50044L11.398 11.1024L10.695 10.3984L13.078 8.01644V8.00044H3V7.00044H13.086ZM1 4.00044H2V11.0004H1V4.00044Z" fill="#FFEAEA"/>
                                          </svg>
                                      </a>
      
                                      <a href="{{ route('holding.registrationOne') }}"  class="flex items-center gap-1 bg-[#3B8CD7] py-1 px-3 rounded">
                                          <span class="text-[#FFEAEA] text-13 font-ubontu">সংশোধন</span>
                                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                              <path d="M11.175 10.4694L12.0639 9.58047C12.2028 9.44158 12.4444 9.5388 12.4444 9.7388V13.7777C12.4444 14.5138 11.8472 15.111 11.1111 15.111H1.33333C0.597222 15.111 0 14.5138 0 13.7777V3.99991C0 3.2638 0.597222 2.66658 1.33333 2.66658H8.93056C9.12778 2.66658 9.22778 2.90547 9.08889 3.04714L8.2 3.93602C8.15833 3.97769 8.10278 3.99991 8.04167 3.99991H1.33333V13.7777H11.1111V10.6249C11.1111 10.5666 11.1333 10.511 11.175 10.4694ZM15.525 4.8638L8.23056 12.1582L5.71944 12.436C4.99167 12.5166 4.37222 11.9027 4.45278 11.1694L4.73056 8.65825L12.025 1.3638C12.6611 0.727691 13.6889 0.727691 14.3222 1.3638L15.5222 2.5638C16.1583 3.19991 16.1583 4.23047 15.525 4.8638ZM12.7806 5.72214L11.1667 4.10825L6.00556 9.27214L5.80278 11.086L7.61667 10.8832L12.7806 5.72214ZM14.5806 3.50825L13.3806 2.30825C13.2667 2.19436 13.0806 2.19436 12.9694 2.30825L12.1111 3.16658L13.725 4.78047L14.5833 3.92214C14.6944 3.80547 14.6944 3.62214 14.5806 3.50825Z" fill="#FFEAEA"/>
                                            </svg>
                                      </a>
                                  </div>
                                </td>
                                
                              </tr>
                            
                          </tbody> 
                          
                        </table>
                      </div>
    
                      <div class="flex items-center justify-end pt-2">
                        <div class="flex items-center gap-1">
                            <div class="flex items-center gap-1">
                                <h1 class="text-[#016344] text-14 font-ubontu">সর্বমোট পাতা</h1>
                                <p class="text-[#016344] text-15 font-ubontu">১০</p>
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                    <path d="M4.97407 6.24955L15.0258 6.24955C15.7218 6.24955 16.0704 7.09107 15.5782 7.58322L10.5524 12.6091C10.2473 12.9142 9.75258 12.9142 9.44751 12.6091L4.42165 7.58322C3.92946 7.09107 4.27805 6.24955 4.97407 6.24955Z" fill="#016344"/>
                                </svg>
                            </div>
                            <div>
                                <h1 class="text-[#016344] text-15 font-ubontu">০১-১০ এর  ২৫</h1>
                            </div>
                            <div class="flex items-center gap-1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                    <path d="M13.7524 4.97407V15.0258C13.7524 15.7218 12.9109 16.0704 12.4187 15.5782L7.39287 10.5524C7.08779 10.2473 7.08779 9.75258 7.39287 9.44751L12.4187 4.42165C12.9109 3.92946 13.7524 4.27805 13.7524 4.97407Z" fill="#016344"/>
                                    <path d="M7.42428 4.94966L7.42428 15.0014C7.42428 15.6974 6.58275 16.0459 6.09061 15.5538L1.06475 10.5279C0.759668 10.2229 0.759668 9.72817 1.06475 9.42309L6.09061 4.39723C6.58275 3.90505 7.42428 4.25364 7.42428 4.94966Z" fill="#016344"/>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                    <path d="M13.7485 4.97407V15.0258C13.7485 15.7218 12.907 16.0704 12.4148 15.5782L7.38896 10.5524C7.08389 10.2473 7.08389 9.75258 7.38896 9.44751L12.4148 4.42165C12.907 3.92946 13.7485 4.27805 13.7485 4.97407Z" fill="#016344"/>
                                  </svg>
                                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                    <path d="M6.2515 15.0259L6.2515 4.97421C6.2515 4.2782 7.09303 3.92964 7.58518 4.42179L12.611 9.44765C12.9161 9.75273 12.9161 10.2474 12.611 10.5525L7.58518 15.5784C7.09303 16.0705 6.2515 15.7219 6.2515 15.0259Z" fill="#016344"/>
                                  </svg>
                                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                    <path d="M6.2515 15.0259L6.2515 4.97421C6.2515 4.2782 7.09303 3.92964 7.58518 4.42179L12.611 9.44765C12.9161 9.75273 12.9161 10.2474 12.611 10.5525L7.58518 15.5784C7.09303 16.0705 6.2515 15.7219 6.2515 15.0259Z" fill="#016344"/>
                                    <path d="M12.5796 15.0503V4.99863C12.5796 4.30261 13.4212 3.95406 13.9133 4.4462L18.9392 9.47206C19.2442 9.77714 19.2442 10.2718 18.9392 10.5769L13.9133 15.6028C13.4212 16.095 12.5796 15.7464 12.5796 15.0503Z" fill="#016344"/>
                                  </svg>
                            </div>
                        </div>
                      </div>
                </div>
            </div>
        </div>

    


    
</div>


@endsection



