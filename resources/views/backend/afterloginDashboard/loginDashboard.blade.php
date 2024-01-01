@extends('layout.backend_master')
@section('content')
<style>
    .bg-shadow-img{
        background-image: url("{{ asset('assets/backend/img/shadow_montaloy.png') }}");
        width: 40%;
        height: 100%;
        background-position: center;
        background-repeat: no-repeat;
    }
</style>
<div class="ps-3 pb-4">
    <div class="bg-white px-4 rounded-tl-2xl rounded-tr-2xl lg:rounded-bl-0 lg:rounded-br-0 py-4" >
       <div class="flex items-center justify-between">
            <div class="space-y-3">
            <h4 class="text-[#0E1F1C] font-ubontu lg:text-15 xl:text-18 leading-5" >ডিজিটাল ভূমি উন্নয়ন কর সেবা</h4>
            <h3 class="text-[#12633D] font-ubontu lg:text-22 xl:text-32 leading-8" >আপনাকে স্বাগতম !</h3>
           </div>
    
           <div class="w-full h-full bg-no-repeat bg-shadow-img"  >
               <div class="flex justify-end">
                <img src="{{ asset('assets/backend/img/big_montolalo.png') }}" alt="">
               </div>
           </div>
       </div>
            
    </div>
    <div class="mt-1 flex gap-3">
        <div class="w-[75%] bg-white shadow-lg rounded-sm pt-8 pb-5">
            <div class="flex items-center justify-center">
                <div>
                    <a href="" class="flex items-center justify-center gap-2 ms-2">
                        <h3 class="text-[#12633D] lg:text-24 xl:text-28 font-ubontu">ড্যাশবোর্ড</h3>
                        <svg xmlns="http://www.w3.org/2000/svg" width="55" height="55" viewBox="0 0 55 55" fill="none">
                            <path d="M29.7 17.1875L38.2938 25.7812V28.1875L29.7 36.7812L27.2594 34.375L32.8969 28.7031H13.75V25.2656H32.8969L27.225 19.5937L29.7 17.1875Z" fill="#12633D"/>
                          </svg>
                    </a>
                    
                    <p class="text-[#12633D] font-ubontu lg:text-16  xl:text-18 text-center !py-4">জরুরী প্রয়োজনে কল বা ইমেইল করুন</p>

                    <div class="border border-[#198754] py-4 ps-4 pe-7 rounded-md shadow-lg">
                        <table>
                            <tr>
                                <td><span class="text-[#12633D] font-ubontu text-14 leading-4">মোবাইল নম্বর:</span></td>
                                <td>
                                    <div class="flex items-center gap-2 ms-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15" fill="none">
                                            <path d="M14.7165 10.5998L11.4353 9.19352C11.2951 9.13378 11.1393 9.12119 10.9914 9.15765C10.8434 9.19411 10.7113 9.27764 10.6149 9.39567L9.16182 11.1711C6.88127 10.0958 5.04596 8.26049 3.9707 5.97995L5.74609 4.52682C5.86436 4.43063 5.94806 4.29853 5.98454 4.15052C6.02101 4.0025 6.00827 3.84663 5.94824 3.70651L4.54199 0.425259C4.47611 0.274207 4.35958 0.150878 4.21251 0.0765382C4.06543 0.00219829 3.89702 -0.0184928 3.73633 0.0180327L0.689453 0.721158C0.534522 0.756934 0.396293 0.844169 0.297325 0.968624C0.198357 1.09308 0.144496 1.2474 0.144531 1.40641C0.144531 8.92106 6.23535 15.0002 13.7383 15.0002C13.8973 15.0003 14.0517 14.9464 14.1762 14.8475C14.3008 14.7485 14.388 14.6102 14.4238 14.4552L15.127 11.4084C15.1632 11.2469 15.1421 11.0778 15.0672 10.9302C14.9923 10.7826 14.8683 10.6658 14.7165 10.5998Z" fill="#12633D"/>
                                          </svg>
                                          <span class="text-[#0E1F1C] font-ubontu text-14 leading-4">  16122</span>
                                         
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span class="text-[#12633D] font-ubontu text-14 leading-4">ইমেইল:</span>
                                    </td>
                                <td>
                                    <div class="flex items-center gap-2 ms-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15" fill="none">
                                            <path d="M4.3112 12.5C3.64453 12.5 2.97786 11.9167 2.64453 11.6667C0.977865 10.5 0.477865 10.0833 0.144531 9.83334V13.3333C0.144531 13.7935 0.517708 14.1667 0.977865 14.1667H7.64453C8.10469 14.1667 8.47786 13.7935 8.47786 13.3333V9.83334C8.14453 10.0833 7.64453 10.5 5.97786 11.6667C5.64453 11.9167 4.97786 12.5 4.3112 12.5ZM7.64453 7.50001H0.977865C0.517708 7.50001 0.144531 7.87319 0.144531 8.33334V8.75001C0.811198 9.25001 0.727864 9.25001 3.14453 11C3.39453 11.1667 3.89453 11.6667 4.3112 11.6667C4.72786 11.6667 5.22786 11.1667 5.47786 11.0833C7.89453 9.33334 7.8112 9.33334 8.47786 8.83334V8.33334C8.47786 7.87319 8.10469 7.50001 7.64453 7.50001ZM14.3112 5.00001H5.97786C5.51771 5.00001 5.14453 5.37319 5.14453 5.83334V6.66668H7.64453C8.50937 6.66668 9.22239 7.32866 9.30365 8.17241L9.3112 8.16668V11.6667H14.3112C14.7714 11.6667 15.1445 11.2935 15.1445 10.8333V5.83334C15.1445 5.37319 14.7714 5.00001 14.3112 5.00001ZM13.4779 8.33334H11.8112V6.66668H13.4779V8.33334ZM4.3112 5.83334C4.3112 4.91433 5.05885 4.16668 5.97786 4.16668H11.8112V1.66668C11.8112 1.20652 11.438 0.833344 10.9779 0.833344H2.64453C2.18438 0.833344 1.8112 1.20652 1.8112 1.66668V6.66668H4.3112V5.83334Z" fill="#12633D"/>
                                          </svg>
                                          <span class="text-[#0E1F1C] font-ubontu text-14 leading-4">land.mysoftheaven@gmail.com</span>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span class="text-[#12633D] font-ubontu text-14 leading-4">হোয়াটসঅ্যাপ:</span>
                                    </td>
                                <td>
                                    <div class="flex items-center gap-2 ms-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15" fill="none">
                                            <rect width="15" height="15" transform="translate(0.144531)" fill="white"/>
                                            <path d="M7.64453 3.59766C5.51465 3.59766 3.7832 5.3291 3.78027 7.45898C3.78027 8.18848 3.98535 8.90039 4.37207 9.5127L4.46289 9.65918L4.07324 11.083L5.53516 10.6992L5.67578 10.7842C6.26758 11.1357 6.94727 11.3232 7.6416 11.3232H7.64453C9.77148 11.3232 11.5498 9.5918 11.5498 7.46191C11.5498 6.43066 11.1045 5.46094 10.375 4.73145C9.64258 3.99902 8.67578 3.59766 7.64453 3.59766ZM9.91504 9.11719C9.81836 9.38965 9.35547 9.63574 9.13281 9.66797C8.76367 9.72363 8.47656 9.69434 7.74121 9.37793C6.57812 8.87402 5.81641 7.70215 5.75781 7.62598C5.69922 7.5498 5.2832 6.99609 5.2832 6.4248C5.2832 5.85352 5.58203 5.57227 5.69043 5.45508C5.7959 5.33789 5.92188 5.30859 6.00098 5.30859C6.07715 5.30859 6.15625 5.30859 6.22363 5.31152C6.29395 5.31445 6.39062 5.28516 6.48438 5.51074C6.58105 5.74219 6.8125 6.31348 6.8418 6.37207C6.87109 6.43066 6.8916 6.49805 6.85059 6.57422C6.62793 7.01953 6.39062 7.00195 6.51074 7.20703C6.95898 7.97754 7.40723 8.24414 8.08984 8.58691C8.20703 8.64551 8.27441 8.63672 8.3418 8.55762C8.40918 8.48145 8.63184 8.21777 8.70801 8.10352C8.78418 7.98633 8.86328 8.00684 8.96875 8.04492C9.07422 8.08301 9.64551 8.36426 9.7627 8.42285C9.87988 8.48145 9.95605 8.51074 9.98535 8.55762C10.0117 8.61328 10.0117 8.84766 9.91504 9.11719ZM12.8008 0.9375H2.48828C1.71191 0.9375 1.08203 1.56738 1.08203 2.34375V12.6562C1.08203 13.4326 1.71191 14.0625 2.48828 14.0625H12.8008C13.5771 14.0625 14.207 13.4326 14.207 12.6562V2.34375C14.207 1.56738 13.5771 0.9375 12.8008 0.9375ZM7.6416 12.1055C6.8623 12.1055 6.09766 11.9092 5.4209 11.54L2.95703 12.1875L3.61621 9.7793C3.20898 9.07617 2.99512 8.27637 2.99512 7.45605C2.99805 4.89551 5.08105 2.8125 7.6416 2.8125C8.88379 2.8125 10.0498 3.2959 10.9287 4.1748C11.8047 5.05371 12.332 6.21973 12.332 7.46191C12.332 10.0225 10.2021 12.1055 7.6416 12.1055Z" fill="#12633D"/>
                                          </svg>
                                          <span class="text-[#0E1F1C] font-ubontu text-14 leading-4"> +8801970776607</span>
                                         
                                    </div>
                                </td>
                            </tr>
                        </table>
                    </div>
                    <div class="py-6">
                        <div class="flex items-center justify-center">
                            <a href="" class="bg-[#017F28] px-4 py-2 rounded-lg text-white font-ubontu text-16">সামাজিক যোগাযোগ </a>
                        </div>
                        <div class="flex items-center gap-3 py-6">
                            <a href="">
                                <img src="{{ asset('assets/backend/img/social/fecbook.jpg') }}" alt="">
                            </a>
                            <a href="">
                                <img src="{{ asset('assets/backend/img/social/whatapp.jpg') }}" alt="">
                            </a>
                            <a href="">
                                <img src="{{ asset('assets/backend/img/social/instragram.jpg') }}" alt="">
                            </a>
                            <a href="">
                                <img src="{{ asset('assets/backend/img/social/twitter.jpg') }}" alt="">
                            </a>
                            <a href="">
                                <img src="{{ asset('assets/backend/img/social/youtube.jpg') }}" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="w-[25%] bg-white shadow-lg rounded-sm">
            <div class="px-3 py-4">
                <h3 class="text-[#0E1F1C] font-ubontu lg:text-16 xl:text-20 leading-4 py-3">ভূমি উন্নয়ন কর ব্যবহার</h3>
                <h1 class="text-[#12633D] font-ubontu lg:text-20 xl:text-28 leading-8 py-3">নির্দেশিকা</h1>
            </div>

            <div class="flex items-center justify-center mt-20">
                <div class="bg-[#C2E3D94A] w-[90px] h-[90px] rounded-full flex items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="55" height="55" viewBox="0 0 55 55" fill="none">
                        <path d="M29.7 17.1875L38.2938 25.7812V28.1875L29.7 36.7812L27.2594 34.375L32.8969 28.7031H13.75V25.2656H32.8969L27.225 19.5937L29.7 17.1875Z" fill="#12633D"/>
                      </svg>
                </div>
            </div>
        </div>
    </div>
   
</div>

@endsection