<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="csrf" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title','Newsportal Admin Panel')</title>
    <link rel="stylesheet" href="{{ asset('contents/admin') }}/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="{{ asset('contents/admin') }}/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="{{ asset('contents/admin') }}/vendors/jvectormap/jquery-jvectormap.css">
    <link rel="stylesheet" href="{{ asset('contents/admin') }}/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="{{ asset('contents/admin') }}/vendors/owl-carousel-2/owl.carousel.min.css">
    <link rel="stylesheet" href="{{ asset('contents/admin') }}/vendors/owl-carousel-2/owl.theme.default.min.css">
    <link rel="stylesheet" href="{{ asset('contents/admin') }}/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css">

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>

    <link rel="shortcut icon" href="{{ asset('contents/admin') }}/images/favicon.png" />
  </head>
  <body>
    <div class="container-scroller">
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
          <a class="sidebar-brand brand-logo" href="index.html"><img src="{{ asset('contents/admin') }}/images/logo.svg" alt="logo" /></a>
          <a class="sidebar-brand brand-logo-mini" href="index.html"><img src="{{ asset('contents/admin') }}/images/logo-mini.svg" alt="logo" /></a>
        </div>

          @include('admin.includes.sidebar')
        
      </nav>
      <div class="container-fluid page-body-wrapper">
       @include('admin.includes.topbar')
        <div class="main-panel">
          @yield('content')
        </div>
      </div>
    </div>

    <script src="{{ asset('contents/admin') }}/vendors/js/vendor.bundle.base.js"></script>
    <script src="{{ asset('contents/admin') }}/vendors/chart.js/Chart.min.js"></script>
    <script src="{{ asset('contents/admin') }}/vendors/progressbar.js/progressbar.min.js"></script>
    <script src="{{ asset('contents/admin') }}/vendors/jvectormap/jquery-jvectormap.min.js"></script>
    <script src="{{ asset('contents/admin') }}/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="{{ asset('contents/admin') }}/vendors/owl-carousel-2/owl.carousel.min.js"></script>
    <script src="{{ asset('contents/admin') }}/js/off-canvas.js"></script>
    <script src="{{ asset('contents/admin') }}/js/hoverable-collapse.js"></script>
    <script src="{{ asset('contents/admin') }}/js/misc.js"></script>
    <script src="{{ asset('contents/admin') }}/js/settings.js"></script>
    <script src="{{ asset('contents/admin') }}/js/todolist.js"></script>
    <script src="{{ asset('contents/admin') }}/js/dashboard.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script>
      @if(Session::has('message'))
        var type = "{{ Session::get('alert-type','info') }}"
        switch(type){
          case 'info':
          toastr.info(" {{ Session::get('message') }} ");
          break;

          case 'success':
          toastr.success(" {{ Session::get('message') }} ");
          break;

          case 'warning':
          toastr.warning(" {{ Session::get('message') }} ");
          break;

          case 'error':
          toastr.error(" {{ Session::get('message') }} ");
          break;
        }
      @endif
</script>

<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
<script type="text/javascript">
    $('#summernote').summernote({
        height: 150
    });
    $('#summernote1').summernote({
        height: 150
    });
</script>


  </body>
</html>