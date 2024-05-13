<!DOCTYPE html>
<html lang="en">

@include('admin.partials._head')

<body>

  <!-- ======= Header ======= -->
  @include('admin.partials._header')  
  <!-- End Header -->

  <!-- ======= Sidebar ======= -->
    @include('admin.partials._sidebar')
  <!-- End Sidebar-->

  <main id="main" class="main">

    @yield('content')

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  @include('admin.partials._footer')
  <!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  @include('admin.partials._script')

</body>

</html>