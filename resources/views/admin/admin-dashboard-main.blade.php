<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Admin</title>
 
    <link rel="stylesheet" href="{{ asset('admin_end/assets/vendors/mdi/css/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin_end/assets/vendors/css/vendor.bundle.base.css') }}">
    
    <link rel="stylesheet" href="{{ asset('admin_end/assets/vendors/jvectormap/jquery-jvectormap.css') }}">
    <link rel="stylesheet" href="{{ asset('admin_end/assets/vendors/flag-icon-css/css/flag-icon.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin_end/assets/vendors/owl-carousel-2/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin_end/assets/vendors/owl-carousel-2/owl.theme.default.min.css') }}">
    
    <link rel="stylesheet" href="{{ asset('admin_end/assets/css/style.css') }}">
 
    <link rel="shortcut icon" href="{{ asset('admin_end/assets/images/favicon.png') }}" />
  </head>
  <body>
    
    <div class="container-scroller">
        
      @include('admin.admin-navbar')

      <div class="container-fluid page-body-wrapper"> 
          
        <div class="main-panel"> 
            
          <div class="mt-4 px-3">
              @include('success-error-msg')
          </div>

          <div class="content-wrapper">
              
              @yield('content') 
              
          </div>
          </div>
        </div>
      </div>
    <script src="{{ asset('admin_end/assets/vendors/js/vendor.bundle.base.js') }}"></script>
    
    <script src="{{ asset('admin_end/assets/vendors/chart.js/Chart.min.js') }}"></script>
    <script src="{{ asset('admin_end/assets/vendors/progressbar.js/progressbar.min.js') }}"></script>
    <script src="{{ asset('admin_end/assets/vendors/jvectormap/jquery-jvectormap.min.js') }}"></script>
    <script src="{{ asset('admin_end/assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
    <script src="{{ asset('admin_end/assets/vendors/owl-carousel-2/owl.carousel.min.js') }}"></script>
 
    <script src="{{ asset('admin_end/assets/js/off-canvas.js') }}"></script>
    <script src="{{ asset('admin_end/assets/js/hoverable-collapse.js') }}"></script>
    <script src="{{ asset('admin_end/assets/js/misc.js') }}"></script>
    <script src="{{ asset('admin_end/assets/js/settings.js') }}"></script>
    <script src="{{ asset('admin_end/assets/js/todolist.js') }}"></script>
 
    <script src="{{ asset('admin_end/assets/js/dashboard.js') }}"></script>

    @stack('scripts')
    
  </body>
</html>