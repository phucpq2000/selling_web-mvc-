<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   
    @include('includes.head')

  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->

        @include('includes.sidebar')

      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->

        @include('includes.nav')

       
        <!-- partial -->
        <div class="main-panel">


          @include('components.alert')
            @yield('content')

          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          <footer class="footer">
           
            @include('includes.foot')

          </footer>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src={{ asset('assets/vendors/js/vendor.bundle.base.js') }}></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src={{ asset('assets/vendors/chart.js/Chart.min.js') }}></script>
    <script src={{ asset('assets/vendors/progressbar.js/progressbar.min.js') }}></script>
    <script src={{ asset('assets/vendors/jvectormap/jquery-jvectormap.min.js') }}></script>
    <script src={{ asset('assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js') }}></script>
    <script src={{ asset('assets/vendors/owl-carousel-2/owl.carousel.min.js') }}></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src={{ asset('assets/js/off-canvas.js') }}></script>
    <script src={{ asset('assets/js/hoverable-collapse.js') }}></script>
    <script src={{ asset('assets/js/misc.js') }}></script>
    <script src={{ asset('assets/js/settings.js') }}></script>
    <script src={{ asset('assets/js/todolist.js') }}></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src={{ asset('assets/js/dashboard.js') }}></script>
    <!-- End custom js for this page -->
  </body>
</html>