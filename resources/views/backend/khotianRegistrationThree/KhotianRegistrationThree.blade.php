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
    <div class="">
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
                        <p class="border border-[#A8A8A8] p-2 rounded-full w-[28px] h-[28px] flex items-center justify-center">
                            <span class="text-[#A8A8A8] font-semibold font-ubontu leading-4">১</span>
                        </p>
                        
                        <p class="border border-[#A8A8A8] p-2 rounded-full w-[28px] h-[28px] flex items-center justify-center">
                            <span class="text-[#A8A8A8] font-semibold font-ubontu leading-4">২ </span>
                        </p>
                        <svg xmlns="http://www.w3.org/2000/svg" width="11" height="2" viewBox="0 0 11 2" fill="none">
                            <path d="M0 1H11" stroke="#A8A8A8"/>
                        </svg>
                        
                        
                    </div>
                    <div class="flex items-center gap-2">
                        <p class="bg-[#198754] p-2 rounded-full w-[28px] h-[28px] flex items-center justify-center">
                            <span class="text-white font-semibold font-ubontu leading-4">৩</span>
                        </p>
            
                        <h3 class="text-16 lg:text-18 xl:text-24 text-[#12633D] leading-5 font-ubontu">হোল্ডিং ভুক্ত জমির বিবরণ</h3>
                        
                    </div>
                    
                </div>
            </div>
        </div>

        <div class="bg-white pb-48">
            <div class="bg-white mt-1 w-full overflow-x-auto border border-[#7ECBA1]">
                <div class="bg-[#198754] rounded rounded-tl-lg rounded-tr-lg rounded-bl-none rounded-br-none flex">
                    <div class="bg-[#198754] py-6 px-3 w-[35%]">
                        <h1 class="text-white text-center font-ubontu text-16 leading-4">সাধারণ তথ্য</h1>
                    </div>
                    <div class="bg-[#12633D] py-6 px-3 w-[50%]">
                        <h1 class="text-white text-center font-ubontu text-16 leading-4">ব্যবহার ভিত্তিক তথ্য</h1>
                    </div>
                    <div class="bg-[#198754] py-6 px-3 w-[15%]">
                        <h1 class="text-white text-center font-ubontu text-16 leading-4">পুরাতন হোল্ডিং</h1>
                    </div>
        
                </div>
                <div class="bg-[#ECF5E8]  flex">
                    <div class="w-[35%] flex items-center justify-center">
                        <div class="border-r border-gray-400 px-1">
                            <h1 class="text-center text-[#0E1F1C] text-14 font-ubontu">খতিয়ান নং</h1>
                        </div>
                        <div class="border-r border-gray-400 px-1">
                            <h1 class="text-center text-[#0E1F1C] text-14 font-ubontu">দাগ নং</h1>
                        </div>
                        <div class="border-r border-gray-400 px-1">
                            <h1 class="text-center text-[#0E1F1C] text-14 font-ubontu">রেকর্ডীয় শ্রেণী</h1>
                        </div>
                        <div class="border-r border-gray-400 px-1">
                            <h1 class="text-center text-[#0E1F1C] text-14 font-ubontu">দাগে জমির পরিমাণ (শতক)</h1>
                        </div>
                    </div>
                    <div class="py-6 px-2 w-[50%] flex items-center justify-between">
                        <div class="border-r border-gray-400 px-1">
                            <h1 class="text-center text-[#0E1F1C] text-14 font-ubontu">ব্যবহৃত শ্রেণী</h1>
                        </div>
                        <div class="border-r border-gray-400 px-1">
                            <h1 class="text-center text-[#0E1F1C] text-14 font-ubontu">কৃষি জমি ২৫ বিঘার ঊর্ধ্বে</h1>
                        </div>
                        <div class="border-r border-gray-400 px-1">
                            <h1 class="text-center text-[#0E1F1C] text-14 font-ubontu">পরিমান (শতক)</h1>
                        </div>
                        <div class="border-r border-gray-400 px-1">
                            <h1 class="text-center text-[#0E1F1C] text-14 font-ubontu">শুরু সাল</h1>
                        </div>
                        <div class="border-r border-gray-400 px-1">
                            <h1 class="text-center text-[#0E1F1C] text-14 font-ubontu">শেষ সাল</h1>
                        </div>
                        <div class="border-r border-gray-400 px-1">
                            
                        </div>
                    </div>
                    <div class=" py-6 px-3 w-[15%] flex items-center justify-center">
                        <div class="border-r border-gray-400 px-1">
                            <h1 class="text-center text-[#0E1F1C] text-14 font-ubontu">হোল্ডিং নং</h1>
                        </div>
                        <div class="border-r border-gray-400 px-1">
                            <h1 class="text-center text-[#0E1F1C] text-14 font-ubontu">দাগ নং</h1>
                        </div>
                    </div>
        
                </div>
        
                <div class="bg-white w-full  overflow-x-auto" id="mainDiv">
                    <div class="w-full  flex  border-b border-gray-200" >
                        <div class="w-[35%] flex items-center gap-5 px-3 py-2">
                            <div class=" flex items-center justify-center w-[15%]">
                               <input type="text" class="w-full border border-[#DDD] text-14 font-ubontu  py-1 px-2 focus:outline-none">
                            </div>
                            <div class=" flex items-center justify-center w-[15%]">
                                <input type="text" class="w-full border border-[#DDD] text-14 font-ubontu py-1 px-2 focus:outline-none">
                             </div>
                             <div class=" flex items-center justify-center w-[35%]">
                                <select name="" class="w-full border border-[#DDD] text-12 font-ubontu py-2  focus:outline-none" id="">
                                    <option value="">মূল শ্রেণী</option>
                                </select>
                             </div>
                             <div class=" flex items-center justify-center w-[35%]">
                                <input type="text" class="w-full border border-[#DDD] py-1 px-2 text-14 font-ubontu focus:outline-none">
                             </div>
                        </div>
                        <div class="px-3 py-2 w-[50%] items-center gap-5 addSubItemInMainDev">
                            <div class="flex items-center justify-between py-2">
                                <div class="w-[20%]">
                                    <select name="" class="w-full border border-[#DDD] text-12 font-ubontu py-2 focus:outline-none" id="">
                                        <option value="">নির্বাচন </option>
                                    </select>
                                 </div>
                                 <input type="checkbox" class="border border-[#DDD] w-[10%] h-[18px]">
                                 <div class=" flex items-center justify-center w-[20%]">
                                    <input type="text" class="w-full border border-[#DDD] py-1 px-2 text-14 font-ubontu focus:outline-none">
                                 </div>
                                 <div class=" flex items-center justify-center ms-5 w-[20%] ">
                                    <input type="date" class="w-full  border border-[#DDD] py-1 px-2 text-14 font-ubontu focus:outline-none" placeholder="নির্বাচন">
                                 </div>
                                 <div class=" flex items-center justify-center ms-2 w-[20%]">
                                    <input type="date" class="w-full   border border-[#DDD] py-1 px-2 text-14 font-ubontu focus:outline-none">
                                 </div>
            
                                 <span class="cursor-pointer" onclick="handleAddSubItem()">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M2.25 1.5H20.25L21 2.25V20.25L20.25 21H2.25L1.5 20.25V2.25L2.25 1.5ZM3 19.5H19.5V3H3V19.5Z" fill="#198754"/>
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M12 6H10.5V10.5H6V12H10.5V16.5H12V12H16.5V10.5H12V6Z" fill="#198754"/>
                                      </svg>
                                 </span>
                                 
                            </div>
                        </div>
                        <div class="px-3 py-2 w-[15%] flex items-center justify-center">
                            <button class="bg-[#198754] text-white px-3 py-1 font-ubontu text-15 rounded-sm">বিস্তারিত</button>
                        </div>
            
                    </div>
        
                    
                </div>
        
                <div class="flex justify-end py-4 pe-4">
                    <div class="flex items-center gap-9">
                        <h1 class="text-[#12633D] text-15 font-ubontu leading-4">আরও খতিয়ান/দাগ যোগ করতে পাশের "আরও+" বাটনে ক্লিক করুন</h1>
                        <button id="PlusItem" class="flex items-center gap-2 bg-[#A5008A] px-3 py-1 rounded">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                <path d="M13.625 7.0625V8H8V13.625H7.0625V8H1.4375V7.0625H7.0625V1.4375H8V7.0625H13.625Z" fill="white"/>
                              </svg>
                              <span class="font-ubontu text-white text-15 leading-4">আরও</span>
                        </button>
                    </div>
                </div>
                
               
            </div>

            <div class="w-full px-7 py-6">

                <div class="border border-[#BABABA] rounded relative w-full pe-4 ps-1 ">
                    <label for="ownership" class="text-13 font-ubontu text-[#0E1F1C] leading-4 absolute -top-[12%] left-[5%] bg-white">মন্তব্য / পরিবর্তনের সূত্র ও বিবরণ</label>
                    <textarea class="w-full pt-2 pb-9 ps-1 pe-5 border-none focus:outline-none text-13"  placeholder="মন্তব্য / পরিবর্তনের সূত্র ও বিবরণ"></textarea>
                </div>
            </div>
            <div class="px-7 py-6 flex items-center justify-end">
                <div class="flex items-center gap-4">
                    <a href="{{ route('holding.registrationTwo') }}" class="border border-[#A8A8A8] px-4 py-2 flex items-center gap-2 rounded-xl">
                        <svg xmlns="http://www.w3.org/2000/svg" width="17" height="16" viewBox="0 0 17 16" fill="none">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M7.5 13.8872L2.5 8.88718V8.18018L7.5 3.18018L8.207 3.88718L4.061 8.03418H14.5V9.03418H4.06L8.208 13.1802L7.501 13.8872H7.5Z" fill="#A8A8A8"/>
                          </svg>
                          <span class="font-ubontu text-15 text-[#A8A8A8] leading-4">পূর্ববর্তী</span>
                    </a>
                    <a href="{{ route('holding.waiting') }}" class="bg-[#12633D] px-4 py-2 flex items-center gap-2 rounded-xl">
                          <span class="font-ubontu text-15 text-white leading-4">সংরক্ষণ করুন</span>
                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M9 13.8872L14 8.88718V8.18018L9 3.18018L8.293 3.88718L12.439 8.03418H2V9.03418H12.44L8.292 13.1802L8.999 13.8872H9Z" fill="white"/>
                          </svg>
                    </a>
                </div>
            </div>
        </div>
    
        
        
    </div>
</div>
@endsection
@section('script')
    
<script>
// add full item in js 
    function handlePlusItem(event) {
    event.preventDefault();
    const mainDiv = document.getElementById('mainDiv');
    mainDiv.innerHTML += `<div class="w-full  flex  border-b border-gray-200">
        <div class="w-[35%] flex items-center gap-5 px-3 py-2">
                    <div class=" flex items-center justify-center w-[15%]">
                       <input type="text" class="w-full border border-[#DDD] text-14 font-ubontu  py-1 px-2 focus:outline-none">
                    </div>
                    <div class=" flex items-center justify-center w-[15%]">
                        <input type="text" class="w-full border border-[#DDD] text-14 font-ubontu py-1 px-2 focus:outline-none">
                     </div>
                     <div class=" flex items-center justify-center w-[35%]">
                        <select name="" class="w-full border border-[#DDD] text-12 font-ubontu py-2  focus:outline-none" id="">
                            <option value="">মূল শ্রেণী</option>
                        </select>
                     </div>
                     <div class=" flex items-center justify-center w-[35%]">
                        <input type="text" class="w-full border border-[#DDD] py-1 px-2 text-14 font-ubontu focus:outline-none">
                     </div>
                </div>
                <div id="addItemIner" class="px-3 py-2 w-[50%] items-center gap-5 addSubItemInMainDev">
                    <div class="flex items-center justify-between py-2">
                        <div class="w-[20%]">
                            <select name="" class="w-full border border-[#DDD] text-12 font-ubontu py-2 focus:outline-none" id="">
                                <option value="">নির্বাচন </option>
                            </select>
                         </div>
                         <input type="checkbox" class="border border-[#DDD] w-[10%] h-[18px]">
                         <div class=" flex items-center justify-center w-[20%]">
                            <input type="text" class="w-full border border-[#DDD] py-1 px-2 text-14 font-ubontu focus:outline-none">
                         </div>
                         <div class=" flex items-center justify-center ms-5 w-[20%] ">
                            <input type="date" class="w-full  border border-[#DDD] py-1 px-2 text-14 font-ubontu focus:outline-none" placeholder="নির্বাচন">
                         </div>
                         <div class=" flex items-center justify-center ms-2 w-[20%]">
                            <input type="date" class="w-full   border border-[#DDD] py-1 px-2 text-14 font-ubontu focus:outline-none">
                         </div>
    
                         <span class="cursor-pointer" onclick="handleAddSubItemInner(this)">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M2.25 1.5H20.25L21 2.25V20.25L20.25 21H2.25L1.5 20.25V2.25L2.25 1.5ZM3 19.5H19.5V3H3V19.5Z" fill="#198754"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M12 6H10.5V10.5H6V12H10.5V16.5H12V12H16.5V10.5H12V6Z" fill="#198754"/>
                              </svg>
                         </span>
                         
                    </div>
                </div>            
                <div class="px-3 py-2 w-[15%] flex flex-col items-center gap-4">
                    <button class="bg-[#198754] text-white px-3 py-1 font-ubontu text-15 rounded-sm">বিস্তারিত</button>
                    <button onclick="handleRemove(this)"  class="flex items-center gap-2">
                        <span class="text-[#EF0000] font-ubontu text-10">মুছে ফেলুন</span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M10 3H13V4H12V13L11 14H4L3 13V4H2V3H5V2C5 1.73478 5.10536 1.48043 5.29289 1.29289C5.48043 1.10536 5.73478 1 6 1H9C9.26522 1 9.51957 1.10536 9.70711 1.29289C9.89464 1.48043 10 1.73478 10 2V3ZM9 2H6V3H9V2ZM4 13H11V4H4V13ZM6 5H5V12H6V5ZM7 5H8V12H7V5ZM9 5H10V12H9V5Z" fill="#EF0000"/>
                          </svg>
                    </button>
                </div>
    
            </div>`;
        

    }


document.getElementById('PlusItem').addEventListener('click', handlePlusItem);

// remove full item in js
function handleRemove(element) {
    const mainDiv = document.getElementById('mainDiv');
    mainDiv.removeChild(element.parentElement.parentElement);
}

// add sub item in js

function handleAddSubItem(){
    let addSubItemInMainDev = document.querySelector('.addSubItemInMainDev');
    addSubItemInMainDev.innerHTML +=`
    <div class="flex items-center justify-between py-2">
                        <div class="w-[20%]">
                            <select name="" class="w-full border border-[#DDD] text-12 font-ubontu py-2 focus:outline-none" id="">
                                <option value="">নির্বাচন </option>
                            </select>
                         </div>
                         <input type="checkbox" class="border border-[#DDD] w-[10%] h-[18px]">
                         <div class=" flex items-center justify-center w-[20%]">
                            <input type="text" class="w-full border border-[#DDD] py-1 px-2 text-14 font-ubontu focus:outline-none">
                         </div>
                         <div class=" flex items-center justify-center ms-5 w-[20%] ">
                            <input type="date" class="w-full  border border-[#DDD] py-1 px-2 text-14 font-ubontu focus:outline-none" placeholder="নির্বাচন">
                         </div>
                         <div class=" flex items-center justify-center ms-2 w-[20%]">
                            <input type="date" class="w-full   border border-[#DDD] py-1 px-2 text-14 font-ubontu focus:outline-none">
                         </div>
    
                         <span onclick="handleSubItemRemove(this)" class="cursor-pointer">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M8.00666 9.00018L2.87891 14.1279L3.87341 15.1224L9.00116 9.99468L14.1289 15.1224L15.1234 14.1279L9.99566 9.00018L15.1234 3.87243L14.1289 2.87793L9.00116 8.00568L3.87341 2.87793L2.87891 3.87243L8.00666 9.00018Z" fill="#EF0000"/>
                              </svg>
                         </span>
                         
                    </div>
    `;
}


// add subItem in inner js
function handleAddSubItemInner(element){
    
    let addItemIner = element.closest('#addItemIner');
    addItemIner.innerHTML+=`
                    <div class="flex items-center justify-between py-2">
                        <div class="w-[20%]">
                            <select name="" class="w-full border border-[#DDD] text-12 font-ubontu py-2 focus:outline-none" id="">
                                <option value="">নির্বাচন </option>
                            </select>
                         </div>
                         <input type="checkbox" class="border border-[#DDD] w-[10%] h-[18px]">
                         <div class=" flex items-center justify-center w-[20%]">
                            <input type="text" class="w-full border border-[#DDD] py-1 px-2 text-14 font-ubontu focus:outline-none">
                         </div>
                         <div class=" flex items-center justify-center ms-5 w-[20%] ">
                            <input type="date" class="w-full  border border-[#DDD] py-1 px-2 text-14 font-ubontu focus:outline-none" placeholder="নির্বাচন">
                         </div>
                         <div class=" flex items-center justify-center ms-2 w-[20%]">
                            <input type="date" class="w-full   border border-[#DDD] py-1 px-2 text-14 font-ubontu focus:outline-none">
                         </div>
    
                         <span class="cursor-pointer" onclick="handleSubItemRemove(this,'addItemIner'
                         )">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M8.00666 9.00018L2.87891 14.1279L3.87341 15.1224L9.00116 9.99468L14.1289 15.1224L15.1234 14.1279L9.99566 9.00018L15.1234 3.87243L14.1289 2.87793L9.00116 8.00568L3.87341 2.87793L2.87891 3.87243L8.00666 9.00018Z" fill="#EF0000"/>
                              </svg>
                         </span>
                         
                    </div>

    `
  

}

//remove subItem in js
function handleSubItemRemove(element,id=null){
    
    if(id){
        let addItemIner = element.closest('#addItemIner')
        
        // let addItemIner = document.getElementById(id);
        // console.log(element.parentElement);
         addItemIner.removeChild(element.parentElement);
    }else{
        let addSubItemInMainDev = document.querySelector('.addSubItemInMainDev');
    addSubItemInMainDev.removeChild(element.parentElement);
    }
    
}


</script>

@endsection
