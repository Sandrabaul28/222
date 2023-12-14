
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>{{ $title }}</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset('myassets/vendors/mdi/css/materialdesignicons.min.css')}}">
    <link rel="stylesheet" href="{{ asset('myassets/vendors/css/vendor.bundle.base.css')}}">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="{{ asset('myassets/vendors/jvectormap/jquery-jvectormap.css')}}">
    <link rel="stylesheet" href="{{ asset('myassets/vendors/flag-icon-css/css/flag-icon.min.css')}}">
    <link rel="stylesheet" href="{{ asset('myassets/vendors/owl-carousel-2/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{ asset('myassets/vendors/owl-carousel-2/owl.theme.default.min.css')}}">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{ asset('myassets/css/style.css')}}">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="{{ asset('myassets/images/favicon.png')}}">
    <style>
      
      input[type='date']{
        color: black;
      }
      input[type='text']:focus{
        color: black;
      }
    </style>
  </head>
  <body>
    <div class="container-scroller">
    
      <!-- partial:partials/_sidebar.html -->
      @include('layouts._defaultsidenav')
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->
        @include('layouts._defaulttopnav')
        <!-- partial -->
        <div class="main-panel">
            @yield('content')
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="{{ asset('myassets/vendors/js/vendor.bundle.base.js')}}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="{{ asset('myassets/vendors/chart.js/Chart.min.js')}}"></script>
    <script src="{{ asset('myassets/vendors/progressbar.js/progressbar.min.js')}}"></script>
    <script src="{{ asset('myassets/vendors/jvectormap/jquery-jvectormap.min.js')}}"></script>
    <script src="{{ asset('myassets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
    <script src="{{ asset('myassets/vendors/owl-carousel-2/owl.carousel.min.js')}}"></script>
    <script src="{{ asset('myassets/js/jquery.cookie.js" type="text/javascript')}}"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{ asset('myassets/js/off-canvas.js')}}"></script>
    <script src="{{ asset('myassets/js/hoverable-collapse.js')}}"></script>
    <script src="{{ asset('myassets/js/misc.js')}}"></script>
    <script src="{{ asset('myassets/js/settings.js')}}"></script>
    <script src="{{ asset('myassets/js/todolist.js')}}"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="{{ asset('myassets/js/dashboard.js')}}"></script>
    <!-- End custom js for this page -->
  </body>
</html>