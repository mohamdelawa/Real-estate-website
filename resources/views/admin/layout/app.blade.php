<!DOCTYPE html>
<html lang="en">
@include('admin.layout.head')
<body>
<div class="container-scroller">
    @include('admin.layout.navbar')
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
       @include('admin.layout.sidebar')
       <!-- partial -->
       <div class="main-panel">
          @yield('page padding')
          <!-- content-wrapper ends -->
          @include('admin.layout.footer')
       </div>
           <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->
<!-- plugins:js -->
<script src="{{asset('asset/admin/assets/vendors/js/vendor.bundle.base.js')}}"></script>
<!-- endinject -->
<!-- Plugin js for this page -->
<script src="{{asset('asset/admin/assets/vendors/chart.js/Chart.min.js')}}"></script>
<!-- End plugin js for this page -->
<!-- inject:js -->
<script src="{{asset('asset/admin/assets/js/off-canvas.js')}}"></script>
<script src="{{asset('asset/admin/assets/js/hoverable-collapse.js')}}"></script>
<script src="{{asset('asset/admin/assets/js/misc.js')}}"></script>
<!-- endinject -->
<!-- Custom js for this page -->
<script src="{{asset('asset/admin/assets/js/dashboard.js')}}"></script>
<script src="{{asset('asset/admin/assets/js/todolist.js')}}"></script>
<script src="{{asset('asset/admin/search.js')}}"></script>
<!-- End custom js for this page -->
</body>
</html>