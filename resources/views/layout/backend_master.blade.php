<!doctype html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  @vite('resources/css/app.css')
  <title>Ulo</title>
  <link rel="icon" type="image/x-icon" href="{{ asset('assets/backend/img/logo.png') }}">

  <link rel="stylesheet" href="{{ asset('assets/backend/font/Ubuntu-Regular.ttf') }}">
  <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>
  <link rel="stylesheet" href="//cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css"/>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css"/>

  <!-- Vendor CSS Files -->
  <link rel="stylesheet" href="{{ asset('assets-2/vendor/bootstrap/css/bootstrap.min.css') }}">
  {{-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> --}}
  <link rel="stylesheet" href="{{ asset('assets-2/vendor/bootstrap-icons/bootstrap-icons.css') }}">
  <link rel="stylesheet" href="{{ asset('assets-2/vendor/boxicons/css/boxicons.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets-2/vendor/quill/quill.snow.css') }}">
  <link rel="stylesheet" href="{{ asset('assets-2/vendor/quill/quill.bubble.css') }}">
  <link rel="stylesheet" href="{{ asset('assets-2/vendor/remixicon/remixicon.css') }}">

  <!-- Template Main CSS File -->
  <link href="{{ asset('assets-2/css/style_copy.css') }}" rel="stylesheet">
</head>
<style>

  /* mobile view responsive style start */
  #hideShowHeader {
  position: fixed;
  top: 70px;
  right: -300px;
  display: none; 
  height: 100%;
  transition: left 0.3s ease; 
}
/* mobile view responsive style end */

/* sidebar onclick set style start */
.click-bg.active {
    background-color: #198754;
}

.click-bg.active svg path {
    fill: #FFFFFF;
}

.click-bg.active h3 {
    color: #FFFFFF;
}
/* sidebar onclick set style end */

/* sidebar show hide style start */
.sidebar-main {
    transition: width 0.3s ease-in-out;
}

.sidebar {
    transition: opacity 0.3s ease-in-out;
}

.main-content {
    transition: margin 0.3s ease-in-out, width 0.3s ease-in-out;
}


.sidebar-collapsed {
    width: 3%;
    transition: width 0.3s ease-in-out;
}

.main-expanded {
    margin-left: 0;
    margin-right: 0;
    width: 100%;
    transition: margin 0.3s ease-in-out, width 0.3s ease-in-out;
}
/* sidebar show hide style end */

</style>

  <body >

    <div class="bg-[#EFF9F2] 2xl:container mx-auto ">
      <div class="w-full h-auto lg:px-5">
        @include('backend.header.header')
        @include('backend.sidebar.responsive_sidebar')

        <div class="w-full h-auto mt-3 flex">
          <div class="hidden lg:inline-block lg:w-[25%] min-h-screen sidebar-main">
              @include('backend.sidebar.sidebar')
          </div>
          <div class="w-full lg:w-[75%] h-full main-content">
              @yield('content')
          </div>
        </div>
      </div>
      <div>
        {{-- all modal will be here --}}
        <div>
          @include('backend.modal.modalcitizenKhotiandetailes')          
          @include('backend.modal.modal_format_list')          
          @include('backend.modal.recipient_type_add')          
        </div>
        @include('backend.footer.footer')
      </div>
    </div>

      {{-- header section start --}}
      {{-- <script src="{{ asset('assets/backend/js/jquery.min.js') }}"></script> --}}
      <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
      <script src="{{ asset('assets-2/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
      {{-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> --}}
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/js/select2.min.js" defer></script>
      <script src="{{ asset('assets-2/js/main.js') }}"></script>
      <script src="{{ asset('assets-2/js/user_main.js') }}"></script>
      <script src="{{ asset('assets/backend/js/app.js') }}"></script>
      <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/4.9.2/tinymce.min.js" referrerpolicy="origin"></script>
      <script src="//cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
      @yield('script')

      <script>

        var APP_URL = '{{ env('APP_URL') }}';

        function selectChoice(choice) { 
            var choices = document.querySelectorAll('.choice');
            choices.forEach(function (element) {
            element.classList.remove('selected');
            });
            choice.classList.add('selected');
            document.getElementById('recipient_group_id').value = choice.id;
        }               

        tinymce.init({
            selector: 'textarea.tinymce-editor',
            branding: false,
            height: 300,
            menubar: false,
            plugins: [
                'advlist autolink lists link image charmap print preview anchor table',
                'searchreplace visualblocks code fullscreen',
                'insertdatetime media table paste code wordcount', 'image'
            ],
            toolbar: 'undo redo | formatselect | ' +
                'bold italic backcolor | alignleft aligncenter ' +
                'alignright alignjustify | bullist numlist outdent indent | ' +
                'removeformat | help',
            content_css: '//www.tiny.cloud/css/codepen.min.css'
        });

        //mobile responsive sidebar start
        let hamber = true;
        function openDrawer() {
          if(hamber){
            $("#hideShowHeader").css("display", "block").animate({
              right: "0px"
            }, 300);
          }else{
            closeDrawer();
          }
          hamber =!hamber;
        }

        function closeDrawer() {
            console.log("Close Drawer");
            $("#hideShowHeader").animate({
                right: "-300px"
            }, 300, function() {
                $(this).css("display", "none");
            });
        }
        //mobile responsive sidebar end


        // sidebar collapse and expand logic start
        let sidebarShowHide = true;

      function handleSidebar() {
      
          if (sidebarShowHide) {
              $('.sidebar-main').addClass('sidebar-collapsed');
              $('.sidebar').addClass('hidden');
              $('.main-content').addClass('main-expanded');
              $('.sidebarHambar').addClass('rotate-180')
              
          } else {
              $('.sidebar-main').removeClass('sidebar-collapsed');
              $('.sidebar').removeClass('hidden');
              $('.main-content').removeClass('main-expanded');
              $('.sidebarHambar').removeClass('rotate-180')
          }
          sidebarShowHide = !sidebarShowHide;
      }
      // sidebar collapse and expand logic end
      
      </script>
  </body>
</html>