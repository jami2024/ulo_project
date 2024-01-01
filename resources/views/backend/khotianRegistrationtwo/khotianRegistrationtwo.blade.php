@extends('Layout.backend_master')
@section('content')
<style>
    .toggle-btn{
        padding: 4px 20px;
        border: 2px solid #A5008A;
        display: flex;
        align-items: center;
        gap: 8px;
        border-radius: 20px;
    }
   
    .active {
        background-color: #A5008A;
    }

    .active svg path {
        fill: #FFFFFF;
    }

    .active span {
        color: #FFFFFF !important;
    }
</style>

<div class="ps-3 pb-4">
    <div class="bg-white px-4 py-3 rounded-tl-2xl rounded-tr-2xl lg:rounded-bl-0 lg:rounded-br-0">
        <div class="flex items-center gap-5 lg:gap-10 xl:gap-40">
            <div>
               <a href="{{ route('holding.registrationOne') }}" class="flex items-center gap-1">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M9.45969 3.21899L3.42969 9.24899V10.311L9.45969 16.341L10.5217 15.2805L5.71119 10.47H8.53569C12.7552 10.47 15.4432 11.3775 17.0932 13.0635C18.7462 14.751 19.5157 17.379 19.5157 21.195V21.72H21.0157V21.195C21.0157 17.226 20.2252 14.115 18.1657 12.0135C16.1032 9.90749 12.9262 8.96999 8.53569 8.96999H5.83119L10.5217 4.28099L9.45969 3.21899Z" fill="#12633D"/>
                  </svg>
                  <h1 class="text-[#198754] font-ubontu leading-4 lg:text-12 xl:text-14">পেছনে</h1>
               </a>
            </div>
            <div class="lg:flex items-center gap-3">
                <div class="flex items-center gap-2">
                    <p class="border border-[#A8A8A8] p-2 rounded-full w-[28px] h-[28px] flex items-center justify-center">
                        <span class="text-[#A8A8A8] font-semibold font-ubontu leading-4">১</span>
                    </p>
                    <svg xmlns="http://www.w3.org/2000/svg" width="11" height="2" viewBox="0 0 11 2" fill="none">
                        <path d="M0 1H11" stroke="#A8A8A8"/>
                    </svg>
                    <p class="bg-[#198754] p-2 rounded-full w-[28px] h-[28px] flex items-center justify-center">
                        <span class="text-white font-semibold font-ubontu leading-4">২</span>
                    </p>
                    
                </div>
                <div class="flex items-center gap-2">
                    
        
                    <h3 class="text-16 lg:text-18 xl:text-24 text-[#12633D] leading-5 font-ubontu">মালিকের বিবরণ</h3>
                    <p class="border border-[#A8A8A8] p-2 rounded-full w-[28px] h-[28px] flex items-center justify-center">
                        <span class="text-[#A8A8A8] font-semibold font-ubontu leading-4">৩</span>
                    </p>
                </div>
                
            </div>
        </div>
    </div>
    <div class="bg-white px-5 pt-6 mt-1 rounded">
        <div class="flex items-center justify-center gap-3">
            <button onclick="handleToogleBtn('default')" class="toggle-btn click-btn active">
                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="24" viewBox="0 0 25 24" fill="none">
                    <path d="M12 16C13.1935 16 14.3381 15.5259 15.182 14.682C16.0259 13.8381 16.5 12.6935 16.5 11.5C16.5 10.3065 16.0259 9.16193 15.182 8.31802C14.3381 7.47411 13.1935 7 12 7C10.8065 7 9.66193 7.47411 8.81802 8.31802C7.97411 9.16193 7.5 10.3065 7.5 11.5C7.5 12.6935 7.97411 13.8381 8.81802 14.682C9.66193 15.5259 10.8065 16 12 16Z" fill="#A5008A"/>
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M12.9302 1.02242C15.3302 1.17192 17.5802 2.36787 19.2302 4.0123C21.1802 6.10521 22.2302 8.6466 22.2302 11.6365C22.2302 14.0284 21.3302 16.2708 19.8302 18.2142C18.3302 20.0081 16.2302 21.3536 13.8302 21.802C11.4302 22.2505 9.03021 21.9515 6.93021 20.7556C4.83021 19.5596 3.18021 17.7657 2.28021 15.5233C1.38021 13.2809 1.23021 10.7395 1.98021 8.49711C2.73021 6.10521 4.08021 4.16179 6.18021 2.81635C8.13021 1.47091 10.5302 0.87293 12.9302 1.02242ZM13.6802 20.3071C15.6302 19.8586 17.4302 18.8122 18.7802 17.1677C19.9802 15.5233 20.7302 13.5799 20.5802 11.487C20.5802 9.09508 19.6802 6.70318 18.0302 5.05875C16.5302 3.56382 14.7302 2.66685 12.6302 2.51736C10.6802 2.36787 8.58021 2.81635 6.93021 4.0123C5.28021 5.20825 4.08021 6.85268 3.48021 8.94559C2.88021 10.889 2.88021 12.9819 3.78021 14.9253C4.68021 16.8688 6.03021 18.3637 7.83021 19.4101C9.63021 20.4566 11.7302 20.7556 13.6802 20.3071Z" fill="#A5008A"/>
                </svg>
                <span class="text-15 font-ubontu !text-[#A5008A] leading-4">মালিকের পরিচয় অনুসন্ধান</span>
            </button>
            <button onclick="handleToogleBtn('toogle')" class="toggle-btn click-btn">
                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="24" viewBox="0 0 25 24" fill="none">
                    <path d="M12 16C13.1935 16 14.3381 15.5259 15.182 14.682C16.0259 13.8381 16.5 12.6935 16.5 11.5C16.5 10.3065 16.0259 9.16193 15.182 8.31802C14.3381 7.47411 13.1935 7 12 7C10.8065 7 9.66193 7.47411 8.81802 8.31802C7.97411 9.16193 7.5 10.3065 7.5 11.5C7.5 12.6935 7.97411 13.8381 8.81802 14.682C9.66193 15.5259 10.8065 16 12 16Z" fill="#A5008A"/>
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M12.9302 1.02242C15.3302 1.17192 17.5802 2.36787 19.2302 4.0123C21.1802 6.10521 22.2302 8.6466 22.2302 11.6365C22.2302 14.0284 21.3302 16.2708 19.8302 18.2142C18.3302 20.0081 16.2302 21.3536 13.8302 21.802C11.4302 22.2505 9.03021 21.9515 6.93021 20.7556C4.83021 19.5596 3.18021 17.7657 2.28021 15.5233C1.38021 13.2809 1.23021 10.7395 1.98021 8.49711C2.73021 6.10521 4.08021 4.16179 6.18021 2.81635C8.13021 1.47091 10.5302 0.87293 12.9302 1.02242ZM13.6802 20.3071C15.6302 19.8586 17.4302 18.8122 18.7802 17.1677C19.9802 15.5233 20.7302 13.5799 20.5802 11.487C20.5802 9.09508 19.6802 6.70318 18.0302 5.05875C16.5302 3.56382 14.7302 2.66685 12.6302 2.51736C10.6802 2.36787 8.58021 2.81635 6.93021 4.0123C5.28021 5.20825 4.08021 6.85268 3.48021 8.94559C2.88021 10.889 2.88021 12.9819 3.78021 14.9253C4.68021 16.8688 6.03021 18.3637 7.83021 19.4101C9.63021 20.4566 11.7302 20.7556 13.6802 20.3071Z" fill="#A5008A"/>
                </svg>
                <span class="text-15 font-ubontu text-[#A5008A] leading-4">মালিকের পরিচয় লিখে এন্ট্রি করুন</span>
            </button>
        </div>

        <div id="serchSectionKhotianReg" class="pt-7 pb-3">
            <div class="flex items-center lg:gap-6 xl:gap-8">
                <div class="border border-[#BABABA] rounded relative w-full lg:w-[30%] pe-4 ps-1">
                    <label for="" class="text-13 font-ubontu text-[#0E1F1C] leading-4 absolute -top-[12%] left-[5%] bg-white">পরিচয় পত্র </label>
                    <select name="" id="" class="w-full py-3 ps-1 pe-5 border-none focus:outline-none text-[#BABABA] text-13">
                        <option value="">নির্বাচন করুন</option>
                    </select>
                </div>
                <div class="border border-[#BABABA] rounded relative w-full lg:w-[30%] pe-4 ps-1">
                    <label for="" class="text-13 font-ubontu text-[#0E1F1C] leading-4 absolute -top-[12%] left-[5%] bg-white">পরিচয় পত্র/ জন্ম নিবন্ধন/ পাসপোর্ট নম্বর</label>
                    <input type="text" name="" class="w-full py-3 ps-1 pe-5 border-none focus:outline-none text-black text-13" id="" placeholder="নম্বর">
                </div>
                <div class="border border-[#BABABA] rounded relative w-full lg:w-[30%] pe-4 ps-1">
                    <label for="" class="text-13 font-ubontu text-[#0E1F1C] leading-4 absolute -top-[12%] left-[5%] bg-white">মোবাইল নম্বর</label>
                    <input type="text" name="" class="w-full py-3 ps-1 pe-5 border-none focus:outline-none text-black text-13" id="" placeholder="মোবাইল নম্বর">
                </div>
                
            </div>


            <div class="flex items-center justify-center pt-5 ">
                
                <button class="bg-[#12633D] rounded py-2 px-4 flex items-center gap-3">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="21" viewBox="0 0 20 21" fill="none">
                        <path d="M12.707 0.500001C11.3824 0.499341 10.0858 0.881355 8.97317 1.6001C7.86051 2.31885 6.97918 3.34372 6.43517 4.55146C5.89116 5.75921 5.70763 7.09839 5.90665 8.40797C6.10567 9.71754 6.67877 10.9417 7.55703 11.9333L0.832031 19.5667L1.76536 20.4L8.4737 12.8C9.33659 13.4749 10.3483 13.9339 11.4245 14.1388C12.5006 14.3436 13.6102 14.2883 14.6607 13.9775C15.7112 13.6667 16.6722 13.1093 17.4637 12.3519C18.2552 11.5945 18.8543 10.659 19.211 9.62318C19.5678 8.58738 19.6718 7.48134 19.5146 6.39717C19.3573 5.31301 18.9433 4.28212 18.307 3.39036C17.6706 2.4986 16.8305 1.7718 15.8564 1.27049C14.8823 0.769175 13.8025 0.507869 12.707 0.508334V0.500001ZM12.707 13C11.2152 13 9.78445 12.4074 8.72956 11.3525C7.67466 10.2976 7.08203 8.86684 7.08203 7.375C7.08203 5.88316 7.67466 4.45242 8.72956 3.39753C9.78445 2.34263 11.2152 1.75 12.707 1.75C14.1989 1.75 15.6296 2.34263 16.6845 3.39753C17.7394 4.45242 18.332 5.88316 18.332 7.375C18.332 8.86684 17.7394 10.2976 16.6845 11.3525C15.6296 12.4074 14.1989 13 12.707 13Z" fill="white"/>
                      </svg>
                      <span>অনুসন্ধান</span>
                </button>
            </div>
            
        </div>


        <div id="entriSectionKhotianReg" class="pt-7 pb-3 hidden">
            <div class="flex items-center lg:gap-3 xl:gap-6">
                <div class="border border-[#BABABA] rounded relative w-full  pe-4 ps-1">
                    <label for="" class="text-13 font-ubontu text-[#0E1F1C] leading-4 absolute -top-[12%] left-[5%] bg-white">পরিচয় পত্র </label>
                    <select name="" id="" class="w-full py-3 ps-1 pe-5 border-none focus:outline-none text-[#BABABA] text-13">
                        <option value="">নির্বাচন করুন</option>
                    </select>
                </div>
                <div class="border border-[#BABABA] rounded relative w-full pe-4 ps-1">
                    <label for="" class="text-13 font-ubontu text-[#0E1F1C] leading-4 absolute -top-[12%] left-[5%] bg-white">NID/জন্ম নিবন্ধন/পাসপোর্ট নম্বরর</label>
                    <input type="text" name="" class="w-full py-3 ps-1 pe-5 border-none focus:outline-none text-black text-13" id="" placeholder="নম্বর লিখুন">
                </div>
                <div class="border border-[#BABABA] rounded relative w-full pe-2 ps-1">
                    <label for="" class="text-13 font-ubontu text-[#0E1F1C] leading-4 absolute -top-[12%] left-[5%] bg-white">জন্ম তারিখ</label>
                    <input type="date" name="" class="w-full py-3 ps-1 pe-2 border-none focus:outline-none text-black text-13" id="" placeholder="জন্ম তারিখ নির্বাচন">
                </div>
                <div class="border border-[#BABABA] rounded relative w-full  pe-4 ps-1">
                    <label for="" class="text-13 font-ubontu text-[#0E1F1C] leading-4 absolute -top-[12%] left-[5%] bg-white">মোবাইল নং</label>
                    <input type="text" name="" class="w-full py-3 ps-1 pe-5 border-none focus:outline-none text-black text-13" id="" placeholder="নম্বর লিখুন">
                </div>
                
            </div>
            <div class="flex items-center lg:gap-3 xl:gap-6 py-5">
                <div class="border border-[#BABABA] rounded relative w-full pe-4 ps-1">
                    <label for="" class="text-13 font-ubontu text-[#0E1F1C] leading-4 absolute -top-[12%] left-[5%] bg-white">মালিকের নাম</label>
                    <input type="text" name="" class="w-full py-3 ps-1 pe-5 border-none focus:outline-none text-black text-13" id="" placeholder="মালিকের নাম লিখুন">
                </div>
                <div class="border border-[#BABABA] rounded relative w-full pe-4 ps-1">
                    <label for="" class="text-13 font-ubontu text-[#0E1F1C] leading-4 absolute -top-[12%] left-[5%] bg-white">পিতার নাম/ স্বামীর নাম</label>
                    <input type="text" name="" class="w-full py-3 ps-1 pe-5 border-none focus:outline-none text-black text-13" id="" placeholder="পিতার নাম/ স্বামীর নাম">
                </div>
                <div class="border border-[#BABABA] rounded relative w-full pe-4 ps-1">
                    <label for="" class="text-13 font-ubontu text-[#0E1F1C] leading-4 absolute -top-[12%] left-[5%] bg-white">পাসপোর্ট সাইজের ছবি</label>
                    <input type="text" name="" class="w-full py-3 ps-1 pe-5 border-none focus:outline-none text-black text-13" id="imageInput" placeholder="ছবি">
                    <button onclick="handleChoiceFile()" class="bg-[#198754] text-white text-10 font-ubontu py-1 px-2 rounded-md absolute right-2 top-2">upload</button>
                    <input type="file" onchange="displayFileName(this)" hidden id="hiddenChoiceFile">
                </div>
                
                <div class="border border-[#BABABA] rounded relative w-full  pe-4 ps-1">
                    <label for="" class="text-13 font-ubontu text-[#0E1F1C] leading-4 absolute -top-[12%] left-[5%] bg-white">ই-মেইল </label>
                    <input type="text" name="" class="w-full py-3 ps-1 pe-5 border-none focus:outline-none text-black text-13" id="" placeholder="ই-মেইল লিখুন">
                </div>
                
            </div>



            <div class="flex items-center justify-center pt-5 gap-7">
                <p class="font-ubontu text-15 text-[#EF0000] leading-4">মালিকের পরিচয় পত্র অনুযায়ী সঠিক তথ্য প্রদান করুন </p>
                <button class="bg-[#12633D] rounded py-2 px-4 flex items-center gap-3">
                    
                      <span>এন্ট্রি করুন</span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M8.9375 13.5193L13.625 8.83176V8.16895L8.9375 3.48145L8.27469 4.14426L12.1616 8.03207H2.375V8.96957H12.1625L8.27375 12.8564L8.93656 13.5193H8.9375Z" fill="white"/>
                          </svg>
                </button>
            </div>
            
        </div>
        
    </div>
    <div class="bg-white rounded shadow-md mt-1 p-4">

        <div id="KhotianResTwoInfo">
            <div class="py-2">
                <div class="flex items-center justify-between">
                    <div class="flex items-center gap-3">
                        <button class="bg-[#12633D] py-1 px-3 rounded-2xl text-white text-12 font-ubontu">মালিকের পরিচয়- ০১</button>
                        <div class="flex items-center gap-2">
                            <h3 class="text-[#A5008A] text-15 font-ubontu leading-4">জাতীয় পরিচয় পত্র:</h3>
                            <span>৬৭৪৬৭৫৬৬৮৫৬৭৫</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                <path d="M11.8125 6C11.8125 9.21016 9.21016 11.8125 6 11.8125C2.78984 11.8125 0.1875 9.21016 0.1875 6C0.1875 2.78984 2.78984 0.1875 6 0.1875C9.21016 0.1875 11.8125 2.78984 11.8125 6ZM5.32767 9.07767L9.64017 4.76517C9.78661 4.61873 9.78661 4.38129 9.64017 4.23485L9.10985 3.70453C8.96341 3.55807 8.72597 3.55807 8.57951 3.70453L5.0625 7.22152L3.42049 5.57951C3.27405 5.43307 3.03661 5.43307 2.89015 5.57951L2.35983 6.10983C2.21339 6.25627 2.21339 6.49371 2.35983 6.64015L4.79733 9.07765C4.94379 9.22411 5.18121 9.22411 5.32767 9.07767Z" fill="#2AB752"/>
                            </svg>
                        </div>
                    </div>
        
                    <a onclick="handleRemoveItem(this)" class="flex items-center gap-1 cursor-pointer">
                        <span class="text-[#EF0000] text-12 font-ubontu">মুছে ফেলুন</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M9.375 2.8125H12.1875V3.75H11.25V12.1875L10.3125 13.125H3.75L2.8125 12.1875V3.75H1.875V2.8125H4.6875V1.875C4.6875 1.62636 4.78627 1.3879 4.96209 1.21209C5.1379 1.03627 5.37636 0.9375 5.625 0.9375H8.4375C8.68614 0.9375 8.9246 1.03627 9.10041 1.21209C9.27623 1.3879 9.375 1.62636 9.375 1.875V2.8125ZM8.4375 1.875H5.625V2.8125H8.4375V1.875ZM3.75 12.1875H10.3125V3.75H3.75V12.1875ZM5.625 4.6875H4.6875V11.25H5.625V4.6875ZM6.5625 4.6875H7.5V11.25H6.5625V4.6875ZM8.4375 4.6875H9.375V11.25H8.4375V4.6875Z" fill="#EF0000"/>
                          </svg>
                    </a>
                </div>
    
                <div class="flex gap-2 py-2">
                    <div class="w-[45%] border border-[#DDD] shadow-lg ps-3 py-2">
    
                        <div class="flex items-center gap-7">
                            <img class="w-[90px]" src="{{ asset('assets/backend/img/user1.png') }}" alt="">
    
                            <table>
                                <tr>
                                    <td><span class="text-[#12633D] text-13 font-ubontu leading-3">নাম:</span></td>
                                    <td><span class="text-[#0E1F1C] text-13 font-ubontu leading-4 ms-2">মোঃ খোরশেদ আলম</span></td>
                                    
                                </tr>
                                <tr>
                                    <td><span class="text-[#12633D] text-13 font-ubontu leading-3">পিতা:</span></td>
                                    <td><span class="text-[#0E1F1C] text-13 font-ubontu leading-4 ms-2">মোঃ কালু মিয়া</span></td>
                                    
                                </tr>
                                <tr>
                                    <td><span class="text-[#12633D] text-13 font-ubontu leading-3">জন্ম:</span></td>
                                    <td><span class="text-[#0E1F1C] text-13 font-ubontu leading-4 ms-2">৩০/০৬/৯১</span></td>
                                    
                                </tr>
                                <tr>
                                    <td><span class="text-[#12633D] text-13 font-ubontu leading-3">মোবাইল :</span></td>
                                    <td><span class="text-[#0E1F1C] text-13 font-ubontu leading-4 ms-2">৯১৯১৯১৯১৯১৯১</span></td>
                                    
                                </tr>
                                <tr>
                                    <td><span class="text-[#12633D] text-13 font-ubontu leading-3">মেইল:</span></td>
                                    <td><span class="text-[#0E1F1C] text-13 font-ubontu leading-4 ms-2">demo@gmail.com</span></td>
                                    
                                </tr>
    
                                
                            </table>
                        </div>
    
                    </div>
                    <div class="w-[55%] border border-[#DDD] shadow-lg p-4">
    
                        <div class="flex gap-2">
                            <div class="border border-[#BABABA] rounded relative pe-4 ps-1 w-[65%]">
                                <label for="address" class="text-13 font-ubontu text-[#0E1F1C] leading-4 absolute -top-[12%] left-[5%] bg-white">মালিকের ঠিকানা</label>
                                <textarea class="w-full pt-2 pb-9 ps-1 pe-5 border-none focus:outline-none text-13"  placeholder="ঠিকানা লিখুন"></textarea>
                            </div>
                            <div class="border border-[#BABABA] rounded relative w-[35%] pe-4 ps-1 ">
                                <label for="ownership" class="text-13 font-ubontu text-[#0E1F1C] leading-4 absolute -top-[12%] left-[5%] bg-white">মালিকের অংশ</label>
                                <textarea class="w-full pt-2 pb-9 ps-1 pe-5 border-none focus:outline-none text-13"  placeholder="অংশ লিখুন"></textarea>
                            </div>
                            
                        </div>
    
                    </div>
                </div>
            </div>
    
            <div class="py-2">
                <div class="flex items-center justify-between">
                    <div class="flex items-center gap-3">
                        <button class="bg-[#12633D] py-1 px-3 rounded-2xl text-white text-12 font-ubontu">মালিকের পরিচয়- ০১</button>
                        <div class="flex items-center gap-2">
                            <h3 class="text-[#A5008A] text-15 font-ubontu leading-4">জাতীয় পরিচয় পত্র:</h3>
                            <span>৬৭৪৬৭৫৬৬৮৫৬৭৫</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                <path d="M11.8125 6C11.8125 9.21016 9.21016 11.8125 6 11.8125C2.78984 11.8125 0.1875 9.21016 0.1875 6C0.1875 2.78984 2.78984 0.1875 6 0.1875C9.21016 0.1875 11.8125 2.78984 11.8125 6ZM5.32767 9.07767L9.64017 4.76517C9.78661 4.61873 9.78661 4.38129 9.64017 4.23485L9.10985 3.70453C8.96341 3.55807 8.72597 3.55807 8.57951 3.70453L5.0625 7.22152L3.42049 5.57951C3.27405 5.43307 3.03661 5.43307 2.89015 5.57951L2.35983 6.10983C2.21339 6.25627 2.21339 6.49371 2.35983 6.64015L4.79733 9.07765C4.94379 9.22411 5.18121 9.22411 5.32767 9.07767Z" fill="#2AB752"/>
                            </svg>
                        </div>
                    </div>
        
                    <a onclick="handleRemoveItem(this)" class="flex items-center gap-1 cursor-pointer">
                        <span class="text-[#EF0000] text-12 font-ubontu">মুছে ফেলুন</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M9.375 2.8125H12.1875V3.75H11.25V12.1875L10.3125 13.125H3.75L2.8125 12.1875V3.75H1.875V2.8125H4.6875V1.875C4.6875 1.62636 4.78627 1.3879 4.96209 1.21209C5.1379 1.03627 5.37636 0.9375 5.625 0.9375H8.4375C8.68614 0.9375 8.9246 1.03627 9.10041 1.21209C9.27623 1.3879 9.375 1.62636 9.375 1.875V2.8125ZM8.4375 1.875H5.625V2.8125H8.4375V1.875ZM3.75 12.1875H10.3125V3.75H3.75V12.1875ZM5.625 4.6875H4.6875V11.25H5.625V4.6875ZM6.5625 4.6875H7.5V11.25H6.5625V4.6875ZM8.4375 4.6875H9.375V11.25H8.4375V4.6875Z" fill="#EF0000"/>
                          </svg>
                    </a>
                </div>
    
                <div class="flex gap-2 py-2">
                    <div class="w-[45%] border border-[#DDD] shadow-lg ps-3 py-2">
    
                        <div class="flex items-center gap-7">
                            <img class="w-[90px]" src="{{ asset('assets/backend/img/user1.png') }}" alt="">
    
                            <table>
                                <tr>
                                    <td><span class="text-[#12633D] text-13 font-ubontu leading-3">নাম:</span></td>
                                    <td><span class="text-[#0E1F1C] text-13 font-ubontu leading-4 ms-2">মোঃ খোরশেদ আলম</span></td>
                                    
                                </tr>
                                <tr>
                                    <td><span class="text-[#12633D] text-13 font-ubontu leading-3">পিতা:</span></td>
                                    <td><span class="text-[#0E1F1C] text-13 font-ubontu leading-4 ms-2">মোঃ কালু মিয়া</span></td>
                                    
                                </tr>
                                <tr>
                                    <td><span class="text-[#12633D] text-13 font-ubontu leading-3">জন্ম:</span></td>
                                    <td><span class="text-[#0E1F1C] text-13 font-ubontu leading-4 ms-2">৩০/০৬/৯১</span></td>
                                    
                                </tr>
                                <tr>
                                    <td><span class="text-[#12633D] text-13 font-ubontu leading-3">মোবাইল :</span></td>
                                    <td><span class="text-[#0E1F1C] text-13 font-ubontu leading-4 ms-2">৯১৯১৯১৯১৯১৯১</span></td>
                                    
                                </tr>
                                <tr>
                                    <td><span class="text-[#12633D] text-13 font-ubontu leading-3">মেইল:</span></td>
                                    <td><span class="text-[#0E1F1C] text-13 font-ubontu leading-4 ms-2">demo@gmail.com</span></td>
                                    
                                </tr>
    
                                
                            </table>
                        </div>
    
                    </div>
                    <div class="w-[55%] border border-[#DDD] shadow-lg p-4">
    
                        <div class="flex gap-2">
                            <div class="border border-[#BABABA] rounded relative pe-4 ps-1 w-[65%]">
                                <label for="address" class="text-13 font-ubontu text-[#0E1F1C] leading-4 absolute -top-[12%] left-[5%] bg-white">মালিকের ঠিকানা</label>
                                <textarea class="w-full pt-2 pb-9 ps-1 pe-5 border-none focus:outline-none text-13"  placeholder="ঠিকানা লিখুন"></textarea>
                            </div>
                            <div class="border border-[#BABABA] rounded relative w-[35%] pe-4 ps-1 ">
                                <label for="ownership" class="text-13 font-ubontu text-[#0E1F1C] leading-4 absolute -top-[12%] left-[5%] bg-white">মালিকের অংশ</label>
                                <textarea class="w-full pt-2 pb-9 ps-1 pe-5 border-none focus:outline-none text-13"  placeholder="অংশ লিখুন"></textarea>
                            </div>
                            
                        </div>
    
                    </div>
                </div>
            </div>
    
    
            <div class="py-2">
                <div class="flex items-center justify-between">
                    <div class="flex items-center gap-3">
                        <button class="bg-[#12633D] py-1 px-3 rounded-2xl text-white text-12 font-ubontu">মালিকের পরিচয়- ০১</button>
                        <div class="flex items-center gap-2">
                            <h3 class="text-[#A5008A] text-15 font-ubontu leading-4">জাতীয় পরিচয় পত্র:</h3>
                            <span>৬৭৪৬৭৫৬৬৮৫৬৭৫</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                <path d="M11.8125 6C11.8125 9.21016 9.21016 11.8125 6 11.8125C2.78984 11.8125 0.1875 9.21016 0.1875 6C0.1875 2.78984 2.78984 0.1875 6 0.1875C9.21016 0.1875 11.8125 2.78984 11.8125 6ZM5.32767 9.07767L9.64017 4.76517C9.78661 4.61873 9.78661 4.38129 9.64017 4.23485L9.10985 3.70453C8.96341 3.55807 8.72597 3.55807 8.57951 3.70453L5.0625 7.22152L3.42049 5.57951C3.27405 5.43307 3.03661 5.43307 2.89015 5.57951L2.35983 6.10983C2.21339 6.25627 2.21339 6.49371 2.35983 6.64015L4.79733 9.07765C4.94379 9.22411 5.18121 9.22411 5.32767 9.07767Z" fill="#2AB752"/>
                            </svg>
                        </div>
                    </div>
        
                    <a onclick="handleRemoveItem(this)" class="flex items-center gap-1 cursor-pointer">
                        <span class="text-[#EF0000] text-12 font-ubontu">মুছে ফেলুন</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M9.375 2.8125H12.1875V3.75H11.25V12.1875L10.3125 13.125H3.75L2.8125 12.1875V3.75H1.875V2.8125H4.6875V1.875C4.6875 1.62636 4.78627 1.3879 4.96209 1.21209C5.1379 1.03627 5.37636 0.9375 5.625 0.9375H8.4375C8.68614 0.9375 8.9246 1.03627 9.10041 1.21209C9.27623 1.3879 9.375 1.62636 9.375 1.875V2.8125ZM8.4375 1.875H5.625V2.8125H8.4375V1.875ZM3.75 12.1875H10.3125V3.75H3.75V12.1875ZM5.625 4.6875H4.6875V11.25H5.625V4.6875ZM6.5625 4.6875H7.5V11.25H6.5625V4.6875ZM8.4375 4.6875H9.375V11.25H8.4375V4.6875Z" fill="#EF0000"/>
                          </svg>
                    </a>
                </div>
    
                <div class="flex gap-2 py-2">
                    <div class="w-[45%] border border-[#DDD] shadow-lg ps-3 py-2">
    
                        <div class="flex items-center gap-7">
                            <img class="w-[90px]" src="{{ asset('assets/backend/img/user1.png') }}" alt="">
    
                            <table>
                                <tr>
                                    <td><span class="text-[#12633D] text-13 font-ubontu leading-3">নাম:</span></td>
                                    <td><span class="text-[#0E1F1C] text-13 font-ubontu leading-4 ms-2">মোঃ খোরশেদ আলম</span></td>
                                    
                                </tr>
                                <tr>
                                    <td><span class="text-[#12633D] text-13 font-ubontu leading-3">পিতা:</span></td>
                                    <td><span class="text-[#0E1F1C] text-13 font-ubontu leading-4 ms-2">মোঃ কালু মিয়া</span></td>
                                    
                                </tr>
                                <tr>
                                    <td><span class="text-[#12633D] text-13 font-ubontu leading-3">জন্ম:</span></td>
                                    <td><span class="text-[#0E1F1C] text-13 font-ubontu leading-4 ms-2">৩০/০৬/৯১</span></td>
                                    
                                </tr>
                                <tr>
                                    <td><span class="text-[#12633D] text-13 font-ubontu leading-3">মোবাইল :</span></td>
                                    <td><span class="text-[#0E1F1C] text-13 font-ubontu leading-4 ms-2">৯১৯১৯১৯১৯১৯১</span></td>
                                    
                                </tr>
                                <tr>
                                    <td><span class="text-[#12633D] text-13 font-ubontu leading-3">মেইল:</span></td>
                                    <td><span class="text-[#0E1F1C] text-13 font-ubontu leading-4 ms-2">demo@gmail.com</span></td>
                                    
                                </tr>
    
                                
                            </table>
                        </div>
    
                    </div>
                    <div class="w-[55%] border border-[#DDD] shadow-lg p-4">
    
                        <div class="flex gap-2">
                            <div class="border border-[#BABABA] rounded relative pe-4 ps-1 w-[65%]">
                                <label for="address" class="text-13 font-ubontu text-[#0E1F1C] leading-4 absolute -top-[12%] left-[5%] bg-white">মালিকের ঠিকানা</label>
                                <textarea class="w-full pt-2 pb-9 ps-1 pe-5 border-none focus:outline-none text-13"  placeholder="ঠিকানা লিখুন"></textarea>
                            </div>
                            <div class="border border-[#BABABA] rounded relative w-[35%] pe-4 ps-1 ">
                                <label for="ownership" class="text-13 font-ubontu text-[#0E1F1C] leading-4 absolute -top-[12%] left-[5%] bg-white">মালিকের অংশ</label>
                                <textarea class="w-full pt-2 pb-9 ps-1 pe-5 border-none focus:outline-none text-13"  placeholder="অংশ লিখুন"></textarea>
                            </div>
                            
                        </div>
    
                    </div>
                </div>
            </div>
        </div>


        <div class="flex items-center justify-between">
            <div>
                <p class="text-[#EF0000] text-16 font-ubontu leading-4">মোট মালিকের অংশ - ০১ হতে ০.৫ অংশ বাকি আছে  </p>
            </div>
            <div class="flex items-center gap-4">
                <a href="{{ route('holding.registrationOne') }}" class="border border-[#A8A8A8] px-4 py-2 flex items-center gap-2 rounded-xl">
                    <svg xmlns="http://www.w3.org/2000/svg" width="17" height="16" viewBox="0 0 17 16" fill="none">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M7.5 13.8872L2.5 8.88718V8.18018L7.5 3.18018L8.207 3.88718L4.061 8.03418H14.5V9.03418H4.06L8.208 13.1802L7.501 13.8872H7.5Z" fill="#A8A8A8"/>
                      </svg>
                      <span class="font-ubontu text-15 text-[#A8A8A8] leading-4">পূর্ববর্তী</span>
                </a>
                <a href="{{ route('holding.registrationThree') }}" class="bg-[#12633D] px-4 py-2 flex items-center gap-2 rounded-xl">
                      <span class="font-ubontu text-15 text-white leading-4">সংরক্ষণ করুন</span>
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M9 13.8872L14 8.88718V8.18018L9 3.18018L8.293 3.88718L12.439 8.03418H2V9.03418H12.44L8.292 13.1802L8.999 13.8872H9Z" fill="white"/>
                      </svg>
                </a>
            </div>
        </div>

    </div>
</div>
@endsection
@section('script')

<script>
    $(document).ready(function() {
        $(".toggle-btn").click(function() {
            // Toggle the 'active' class to change styles
            $(".toggle-btn").removeClass("active");
            $(this).toggleClass("active");

        });
    });

    function handleToogleBtn(value){
        if(value == 'default'){
            document.getElementById('serchSectionKhotianReg').classList.remove('hidden');
            document.getElementById('entriSectionKhotianReg').classList.add('hidden');
        }else{
            document.getElementById('serchSectionKhotianReg').classList.add('hidden');
            document.getElementById('entriSectionKhotianReg').classList.remove('hidden');
        }
    }

    function handleChoiceFile() {
    // console.log("ok vai");
    document.getElementById('hiddenChoiceFile').click();
}

function displayFileName(input) {
    const fileName = input.files[0].name;
    // console.log(fileName);
    const imageInput = document.getElementById('imageInput');
    if (fileName) {
        imageInput.placeholder = fileName;
    } else {
        imageInput.placeholder = 'ছবি';
    }
}




// remove item in js

    function handleRemoveItem(element){
        let kotianSection = document.getElementById('KhotianResTwoInfo');
        kotianSection.removeChild(element.parentElement.parentElement);
    }
</script>

@endsection
