
<!-- Your Modal HTML -->

<div id="modal-format-list" class="hidden relative z-10" aria-labelledby="modal-title" role="dialog" aria-modal="true">
    
  <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"></div>

  <div class="fixed inset-0 z-10 w-screen overflow-y-auto">
  <div class="flex min-h-full items-end justify-center p-4 text-center sm:items-center sm:p-0">
  
      <div class="relative transform overflow-hidden rounded-lg bg-white text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-lg">
      <div class="bg-white px-4 pb-4 pt-5 sm:p-6 sm:pb-4">
              <h3 class="text-base font-semibold leading-6 text-gray-900" id="modal-title">সংরক্ষিত তালিকা থেকে নির্বাচন করুন</h3>
              
              <p class="text-sm text-gray-500"></p>
              <form id="recipientNameForm" onsubmit="return false;">
                  @csrf
                  <div class="mb-3">
                      <div class="row" id="notification_format_section"></div>
                  </div>
              </form>
              
      </div>
      <div class="bg-gray-50 px-4 py-3 sm:flex sm:flex-row-reverse sm:px-6">
          {{-- <button type="button" class="inline-flex w-full justify-center rounded-md bg-red-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-red-500 sm:ml-3 sm:w-auto">Deactivate</button> --}}
          <button type="button" id="modal-format-button-close" class="mt-3 modal-button-close inline-flex w-full justify-center rounded-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50 sm:mt-0 sm:w-auto">বাতিল</button>
      </div>
      </div>
  </div>
  </div>
</div>
                                    
                                  