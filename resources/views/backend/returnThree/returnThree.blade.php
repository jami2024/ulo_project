@extends('Layout.backend_master')
@section('content')
<div class="ps-3 pb-4">
    <div class="">
        <div class="bg-white px-4 py-3 rounded-tl-2xl rounded-tr-2xl lg:rounded-bl-0 lg:rounded-br-0 border border-[#7ECBA1]">
            <h1 class="text-[#198754] font-ubontu text-16 leading-4">হোল্ডিং এর অনুসন্ধান</h1>
            <div class="flex items-center  gap-4 pt-4  px-6">
                <div class="border border-[#BABABA] rounded relative w-full lg:w-[35%] pe-4 ps-1">
                    <label for="mouza" class="text-15 font-ubontu text-[#0E1F1C] leading-4 absolute -top-[12%] left-[5%] bg-white">মৌজা</label>
                    <select name="mouza" id="mouza" class="w-full py-3 ps-1 border-none focus:outline-none text-[#BABABA] text-13">
                        <option value="">মৌজা নির্বাচন করুন</option>
                        
                        <option value="mouza1">মৌজা ১</option>
                        <option value="mouza2">মৌজা ২</option>
                    </select>
                </div>
                <div class="border border-[#BABABA] rounded relative w-full lg:w-[35%] pe-4 ps-1">
                    <label for="holding_number" class="text-15 font-ubontu text-[#0E1F1C] leading-4 absolute -top-[12%] left-[5%] bg-white">হোল্ডিং </label>
                    <input type="text" class="w-full py-3 ps-1 pe-5 border-none focus:outline-none text-[#BABABA] text-13" placeholder="হোল্ডিং লিখুন ">
                </div>
                <div class="border border-[#BABABA] rounded relative w-full lg:w-[35%] pe-4 ps-1">
                    <label for="mouza" class="text-15 font-ubontu text-[#0E1F1C] leading-4 absolute -top-[12%] left-[5%] bg-white">হোল্ডিং টাইপ </label>
                    <select name="mouza" id="mouza" class="w-full py-3 ps-1 border-none focus:outline-none text-[#BABABA] text-13">
                        <option value="">মৌজা নির্বাচন করুন</option>
                        
                        <option value="mouza1">মৌজা ১</option>
                        <option value="mouza2">মৌজা ২</option>
                    </select>
                </div>
                
                
    
                <a href="" class="cursor-pointer flex items-center gap-1 border border-[#12633D] bg-[#12633D] py-2 px-5 rounded text-white font-ubontu text-15">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="21" viewBox="0 0 20 21" fill="none">
                        <path d="M12.707 0.500001C11.3824 0.499341 10.0858 0.881355 8.97317 1.6001C7.86051 2.31885 6.97918 3.34372 6.43517 4.55146C5.89116 5.75921 5.70763 7.09839 5.90665 8.40797C6.10567 9.71754 6.67877 10.9417 7.55703 11.9333L0.832031 19.5667L1.76536 20.4L8.4737 12.8C9.33659 13.4749 10.3483 13.9339 11.4245 14.1388C12.5006 14.3436 13.6102 14.2883 14.6607 13.9775C15.7112 13.6667 16.6722 13.1093 17.4637 12.3519C18.2552 11.5945 18.8543 10.659 19.211 9.62318C19.5678 8.58738 19.6718 7.48134 19.5146 6.39717C19.3573 5.31301 18.9433 4.28212 18.307 3.39036C17.6706 2.4986 16.8305 1.7718 15.8564 1.27049C14.8823 0.769175 13.8025 0.507869 12.707 0.508334V0.500001ZM12.707 13C11.2152 13 9.78445 12.4074 8.72956 11.3525C7.67466 10.2976 7.08203 8.86684 7.08203 7.375C7.08203 5.88316 7.67466 4.45242 8.72956 3.39753C9.78445 2.34263 11.2152 1.75 12.707 1.75C14.1989 1.75 15.6296 2.34263 16.6845 3.39753C17.7394 4.45242 18.332 5.88316 18.332 7.375C18.332 8.86684 17.7394 10.2976 16.6845 11.3525C15.6296 12.4074 14.1989 13 12.707 13Z" fill="white"/>
                      </svg>
                      অনুসন্ধান
                    </a>
                
                
                
            </div>
        </div>

        <div class="bg-white pb-48">
            <div class="bg-white mt-1 w-full overflow-x-auto border border-[#7ECBA1] rounded rounded-tl-lg rounded-tr-lg rounded-bl-none rounded-br-none">
                <div class="bg-[#198754] rounded rounded-tl-lg rounded-tr-lg rounded-bl-none rounded-br-none flex">
                    <div class=" py-6 px-3 w-[30%]">
                        <h1 class="text-white text-center font-ubontu text-16 leading-4">সাধারণ তথ্য</h1>
                    </div>
                    <div class="bg-[#12633D] py-6 px-3 w-[45%]">
                        <h1 class="text-white text-center font-ubontu text-16 leading-4">অনাদায়ী ভূমি উন্নয়ন কর</h1>
                    </div>
                    <div class="py-6 px-3 w-[25%]">
                        
                    </div>
        
                </div>
                <div class="bg-[#ECF5E8]  flex">
                    <div class="w-[30%] flex items-center justify-center">
                        <div class="border-r border-gray-400 px-1">
                            <h1 class="text-center text-[#0E1F1C] text-14 font-ubontu">ক্রমিক নং</h1>
                        </div>
                        <div class="border-r border-gray-400 px-1">
                            <h1 class="text-center text-[#0E1F1C] text-14 font-ubontu">মালিকের নাম / সংস্থার নাম</h1>
                        </div>
                        <div class="border-r border-gray-400 px-1">
                            <h1 class="text-center text-[#0E1F1C] text-14 font-ubontu">রেজিস্টার ২/৬
                                ক্রমিক নং</h1>
                        </div>
                        
                    </div>
                    <div class="py-6 px-2 w-[45%] flex items-center justify-center gap-3">
                        <div class="border-r border-gray-400 px-1">
                            <h1 class="text-center text-[#0E1F1C] text-14 font-ubontu">৩য় বৎসরের ঊর্ধ্বে</h1>
                        </div>
                        <div class="border-r border-gray-400 px-1">
                            <h1 class="text-center text-[#0E1F1C] text-14 font-ubontu">৩য় বৎসরের</h1>
                        </div>
                        <div class="border-r border-gray-400 px-1">
                            <h1 class="text-center text-[#0E1F1C] text-14 font-ubontu">২য় বৎসরের</h1>
                        </div>
                        <div class="border-r border-gray-400 px-1">
                            <h1 class="text-center text-[#0E1F1C] text-14 font-ubontu">গত বৎসরের</h1>
                        </div>
                        <div class="border-r border-gray-400 px-1">
                            <h1 class="text-center text-[#0E1F1C] text-14 font-ubontu">সুদ</h1>
                        </div>
                        <div class="">
                            <h1 class="text-center text-[#0E1F1C] text-14 font-ubontu">হাল</h1>
                        </div>
                    </div>
                    <div class=" py-6 px-3 w-[25%] flex items-center justify-center">
                        
                    </div>
        
                </div>
        
                <div class="bg-white w-full  overflow-x-auto">
                    <div class="w-full  flex  border-b border-gray-200" >
                        <div class="lg:w-[35%] xl:w-[30%] flex items-center gap-5 px-3 py-2">
                            <div class=" flex items-center justify-center w-[25%]">
                               <h1 class="font-ubontu text-14 text-[#0E1F1C]">০১</h1>
                            </div>
                            <div class=" flex  w-[45%]">
                                <h1 class="font-ubontu text-14 text-[#0E1F1C]">মোঃ মেহেদী হাসান ফাহিম</h1>
                             </div>
                             <div class=" flex items-center justify-center w-[25%]">
                                <h1 class="font-ubontu text-14 text-[#0E1F1C]">১৮৬২</h1>
                             </div>
                            
                        </div>
                        <div class="px-3 py-2 lg:w-[50%] xl:w-[45%] items-center gap-5 addSubItemInMainDev">
                            <div class="flex items-center justify-between py-2">
                                <div class="w-[25%]">
                                    <h1 class="font-ubontu text-14 text-[#0E1F1C]">১৮৬২</h1>
                                 </div>
                                <div class="w-[25%]">
                                    <h1 class="font-ubontu text-14 text-[#0E1F1C]">৬২</h1>
                                 </div>
                                 
                                 <div class="  w-[20%]">
                                    <h1 class="font-ubontu text-14 text-[#0E1F1C]">৬২</h1>
                                 </div>
                                 <div class="  ms-5 w-[10%] ">
                                    <h1 class="font-ubontu text-14 text-[#0E1F1C]">৬২</h1>
                                 </div>
                                 <div class="  ms-2 w-[10%]">
                                    <h1 class="font-ubontu text-14 text-[#0E1F1C]">৬২</h1>
                                 </div>
                                 <div class=" ms-2 w-[10%]">
                                    <h1 class="font-ubontu text-14 text-[#0E1F1C]">৬২</h1>
                                 </div>
                                 
            
                                 
                                 
                            </div>
                        </div>
                        <div class="px-3 py-2 lg:w-[15%] xl:w-[25%] flex items-center justify-center">
                            
                        </div>
            
                    </div>
                    <div class="w-full  flex  border-b border-gray-200" >
                        <div class="lg:w-[35%] xl:w-[30%] flex items-center gap-5 px-3 py-2">
                            <div class=" flex items-center justify-center w-[25%]">
                               <h1 class="font-ubontu text-14 text-[#0E1F1C]">০১</h1>
                            </div>
                            <div class=" flex  w-[45%]">
                                <h1 class="font-ubontu text-14 text-[#0E1F1C]">মোঃ মেহেদী হাসান ফাহিম</h1>
                             </div>
                             <div class=" flex items-center justify-center w-[25%]">
                                <h1 class="font-ubontu text-14 text-[#0E1F1C]">১৮৬২</h1>
                             </div>
                            
                        </div>
                        <div class="px-3 py-2 lg:w-[50%] xl:w-[45%] items-center gap-5 addSubItemInMainDev">
                            <div class="flex items-center justify-between py-2">
                                <div class="w-[25%]">
                                    <h1 class="font-ubontu text-14 text-[#0E1F1C]">১৮৬২</h1>
                                 </div>
                                <div class="w-[25%]">
                                    <h1 class="font-ubontu text-14 text-[#0E1F1C]">৬২</h1>
                                 </div>
                                 
                                 <div class="  w-[20%]">
                                    <h1 class="font-ubontu text-14 text-[#0E1F1C]">৬২</h1>
                                 </div>
                                 <div class="  ms-5 w-[10%] ">
                                    <h1 class="font-ubontu text-14 text-[#0E1F1C]">৬২</h1>
                                 </div>
                                 <div class="  ms-2 w-[10%]">
                                    <h1 class="font-ubontu text-14 text-[#0E1F1C]">৬২</h1>
                                 </div>
                                 <div class=" ms-2 w-[10%]">
                                    <h1 class="font-ubontu text-14 text-[#0E1F1C]">৬২</h1>
                                 </div>
                                 
            
                                 
                                 
                            </div>
                        </div>
                        <div class="px-3 py-2 lg:w-[15%] xl:w-[25%] flex items-center justify-center">
                            
                        </div>
            
                    </div>

                    <div class="w-full  flex  border-b border-gray-200" >
                        <div class="lg:w-[35%] xl:w-[30%] flex items-center gap-5 px-3 py-2">
                            <div class=" flex items-center justify-center w-[25%]">
                               <h1 class="font-ubontu text-14 text-[#0E1F1C]">০১</h1>
                            </div>
                            <div class=" flex  w-[45%]">
                                <h1 class="font-ubontu text-14 text-[#0E1F1C]">মোঃ মেহেদী হাসান ফাহিম</h1>
                             </div>
                             <div class=" flex items-center justify-center w-[25%]">
                                <h1 class="font-ubontu text-14 text-[#0E1F1C]">১৮৬২</h1>
                             </div>
                            
                        </div>
                        <div class="px-3 py-2 lg:w-[50%] xl:w-[45%] items-center gap-5 addSubItemInMainDev">
                            <div class="flex items-center justify-between py-2">
                                <div class="w-[25%]">
                                    <h1 class="font-ubontu text-14 text-[#0E1F1C]">১৮৬২</h1>
                                 </div>
                                <div class="w-[25%]">
                                    <h1 class="font-ubontu text-14 text-[#0E1F1C]">৬২</h1>
                                 </div>
                                 
                                 <div class="  w-[20%]">
                                    <h1 class="font-ubontu text-14 text-[#0E1F1C]">৬২</h1>
                                 </div>
                                 <div class="  ms-5 w-[10%] ">
                                    <h1 class="font-ubontu text-14 text-[#0E1F1C]">৬২</h1>
                                 </div>
                                 <div class="  ms-2 w-[10%]">
                                    <h1 class="font-ubontu text-14 text-[#0E1F1C]">৬২</h1>
                                 </div>
                                 <div class=" ms-2 w-[10%]">
                                    <h1 class="font-ubontu text-14 text-[#0E1F1C]">৬২</h1>
                                 </div>
                                 
            
                                 
                                 
                            </div>
                        </div>
                        <div class="px-3 py-2 lg:w-[15%] xl:w-[25%] flex items-center justify-center">
                            
                        </div>
            
                    </div>

                    <div class="w-full  flex  border-b border-gray-200" >
                        <div class="lg:w-[35%] xl:w-[30%] flex items-center gap-5 px-3 py-2">
                            <div class=" flex items-center justify-center w-[25%]">
                               <h1 class="font-ubontu text-14 text-[#0E1F1C]">০১</h1>
                            </div>
                            <div class=" flex  w-[45%]">
                                <h1 class="font-ubontu text-14 text-[#0E1F1C]">মোঃ মেহেদী হাসান ফাহিম</h1>
                             </div>
                             <div class=" flex items-center justify-center w-[25%]">
                                <h1 class="font-ubontu text-14 text-[#0E1F1C]">১৮৬২</h1>
                             </div>
                            
                        </div>
                        <div class="px-3 py-2 lg:w-[50%] xl:w-[45%] items-center gap-5 addSubItemInMainDev">
                            <div class="flex items-center justify-between py-2">
                                <div class="w-[25%]">
                                    <h1 class="font-ubontu text-14 text-[#0E1F1C]">১৮৬২</h1>
                                 </div>
                                <div class="w-[25%]">
                                    <h1 class="font-ubontu text-14 text-[#0E1F1C]">৬২</h1>
                                 </div>
                                 
                                 <div class="  w-[20%]">
                                    <h1 class="font-ubontu text-14 text-[#0E1F1C]">৬২</h1>
                                 </div>
                                 <div class="  ms-5 w-[10%] ">
                                    <h1 class="font-ubontu text-14 text-[#0E1F1C]">৬২</h1>
                                 </div>
                                 <div class="  ms-2 w-[10%]">
                                    <h1 class="font-ubontu text-14 text-[#0E1F1C]">৬২</h1>
                                 </div>
                                 <div class=" ms-2 w-[10%]">
                                    <h1 class="font-ubontu text-14 text-[#0E1F1C]">৬২</h1>
                                 </div>
                                 
            
                                 
                                 
                            </div>
                        </div>
                        <div class="px-3 py-2 lg:w-[15%] xl:w-[25%] flex items-center justify-center">
                            
                        </div>
            
                    </div>


        
                    
                </div>


                

                {{-- <div class="py-4">
                    <div class="overflow-x-auto">
                        <table class="table table-xs table-pin-rows table-pin-cols">
                          <thead>
                            <tr>
                              <td class="text-center border-r border-gray-400 w-[5%]"><span class="text-[#0E1F1C] text-14 font-ubontu">ক্রমিক নং</span></td> 
                              <td class="text-center border-r border-gray-400"><span class="text-[#0E1F1C] text-14 font-ubontu">মালিকের নাম / সংস্থার নাম</span></td> 
                              <td class="text-center border-r border-gray-400"><span class="text-[#0E1F1C] text-14 font-ubontu">রেজিস্টার ২/৬
                                ক্রমিক নং</span></td> 
                              <td class="text-center border-r border-gray-400"><span class="text-[#0E1F1C] text-14 font-ubontu">৩য় বৎসরের ঊর্ধ্বে</span></td> 
                              <td class="text-center border-r border-gray-400"><span class="text-[#0E1F1C] text-14 font-ubontu">৩য় বৎসরের</span></td> 
                              <td class="text-center border-r border-gray-400"><span class="text-[#0E1F1C] text-14 font-ubontu">২য় বৎসরের</span></td> 
                              <td class="text-center border-r border-gray-400"><span class="text-[#0E1F1C] text-14 font-ubontu">গত বৎসরের</span></td> 
                              <td class="text-center border-r border-gray-400"><span class="text-[#0E1F1C] text-14 font-ubontu">সুদ</span></td> 
                              <td class="text-center border-r border-gray-400"><span class="text-[#0E1F1C] text-14 font-ubontu">হাল</span></td> 
                              <td class="text-center border-r border-gray-400"><span class="text-[#0E1F1C] text-14 font-ubontu">সার্টিফিকেট দায়ের করা হইয়াছে কিনা</span></td> 
                              <td class="text-center border-r border-gray-400"><span class="text-[#0E1F1C] text-14 font-ubontu">সহকারী কমিশনার বা কালেক্টরের আদেশ</span></td> 
                                
                                
                              <td class="text-center"><span class="text-[#0E1F1C] text-14 font-ubontu">মন্তব্য</span></td> 
                              
                               
                            </tr>
                          </thead> 
                          <tbody>
                            
                            <tr >
                                <td class="text-center"><span class="text-[#0E1F1C] text-13 font-ubontu">০১</span></td> 
                                <td class="text-center"><span class="text-[#0E1F1C] text-13 font-ubontu">বড়ুরিয়া</span></td> 
                                <td class="text-center"><span class="text-[#0E1F1C] text-13 font-ubontu">১৮৬২</span></td> 
                                <td class="text-center"><span class="text-[#0E1F1C] text-13 font-ubontu">৬২</span></td> 
                                <td class="text-center"><span class="text-[#0E1F1C] text-13 font-ubontu">২০২৩/০৩/০৪</span></td> 
                                <td class="text-center">
                                    <div class="flex items-center justify-center">
                                        <a href="{{ route('holding.registrationOne') }}" class="flex items-center gap-1 bg-[#2AB752] py-1 px-3 rounded">
                                            <span class="text-[#FFEAEA] text-13 font-ubontu">হোল্ডিং এন্ট্রি</span>
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
                                <p class="text-[#016344] text-15 font-ubontu">১০</p>
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                    <path d="M4.97407 6.24955L15.0258 6.24955C15.7218 6.24955 16.0704 7.09107 15.5782 7.58322L10.5524 12.6091C10.2473 12.9142 9.75258 12.9142 9.44751 12.6091L4.42165 7.58322C3.92946 7.09107 4.27805 6.24955 4.97407 6.24955Z" fill="#016344"/>
                                </svg>
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
                </div> --}}
               
                
               
            </div>

            
            <div class="flex items-center justify-center mt-7">
                <a href="" class="bg-[#3B8CD7] text-white flex items-center gap-2 rounded py-2 px-4">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="21" viewBox="0 0 20 21" fill="none">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M16.6912 1.9325L18.5662 3.8075L18.75 4.25V18.625L18.125 19.25H1.875L1.25 18.625V2.375L1.875 1.75H16.25L16.6912 1.9325ZM2.5 3V18H17.5V4.51L15.9913 3H13.75V8H5V3H2.5ZM10 3V6.75H12.5V3H10Z" fill="white"/>
                      </svg>
                      <span class="font-ubontu text-15">প্রিন্ট করুন</span>
                </a>
            </div>
        </div>
    
        
        
    </div>
</div>

@endsection
