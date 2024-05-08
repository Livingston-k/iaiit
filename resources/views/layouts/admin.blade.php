<!DOCTYPE html>
<html lang="en" dir="ltr" class="dark-mode">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta  name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <title>Genius Institute of Information Technology</title>

  <meta name="robots" content="noindex" />

  <link href="https://fonts.googleapis.com/css?family=Lato:400,700%7CRoboto:400,500%7CExo+2:600&amp;display=swap" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link type="text/css" href="{{ asset('vendor/spinkit.css')}}" rel="stylesheet" />
  <link type="text/css" href="{{ asset('vendor/perfect-scrollbar.css')}}" rel="stylesheet" />
  <link type="text/css" href="{{ asset('css/material-icons.css')}}" rel="stylesheet" />
  <link type="text/css" href="{{ asset('css/fontawesome.css')}}" rel="stylesheet" />
  <link type="text/css" href="{{ asset('css/preloader.css')}}" rel="stylesheet" />
  <link type="text/css" href="{{ asset('css/app.css')}}" rel="stylesheet" />
  <link type="text/css" href="{{ asset('css/dark.css')}}" rel="stylesheet" />
  <link type="text/css" href="{{ asset('css/quill.css')}}" rel="stylesheet">
  <link type="text/css" href="{{ asset('vendor/select2/select2.min.css')}}" rel="stylesheet">
  <link type="text/css" href="{{ asset('css/select2.css')}}" rel="stylesheet">
  <link type="text/css" href="{{ asset('css/flatpickr.css')}}" rel="stylesheet">
  <link type="text/css" href="{{ asset('css/flatpickr-airbnb.css')}}" rel="stylesheet">

  <style>
    .hideall {
      display: none !important;
    }
  </style>
</head>

<body id="layout-app">

  <div class="preloader">
    <div class="sk-chase">
      <div class="sk-chase-dot"></div>
      <div class="sk-chase-dot"></div>
      <div class="sk-chase-dot"></div>
      <div class="sk-chase-dot"></div>
      <div class="sk-chase-dot"></div>
      <div class="sk-chase-dot"></div>
    </div>
  </div>

  <div class="mdk-drawer-layout js-mdk-drawer-layout" data-push data-responsive-width="992px">
    <div class="mdk-drawer-layout__content page-content">
      @include('includes.header')

      @yield('content')
      
      @include('includes.footer')
    </div>
    @include('includes.admin_sidebar')
  </div>



  <script src="{{ asset('vendor/jquery.min.js')}}"></script>
  <script src="{{ asset('vendor/popper.min.js')}}"></script>
  <script src="{{ asset('vendor/bootstrap.min.js')}}"></script>
  <script src="{{ asset('vendor/perfect-scrollbar.min.js')}}"></script>
  <script src="{{ asset('vendor/dom-factory.js')}}"></script>
  <script src="{{ asset('vendor/material-design-kit.js')}}"></script>
  <script src="{{ asset('js/app.js')}}"></script>
  <script src="{{ asset('js/preloader.js')}}"></script>
  <script src="{{ asset('js/settings.js')}}"></script>
  <script src="{{ asset('vendor/moment.min.js')}}"></script>
  <script src="{{ asset('vendor/moment-range.js')}}"></script>
  <script src="{{ asset('vendor/Chart.min.js')}}"></script>
  <script src="{{ asset('js/chartjs-rounded-bar.js')}}"></script>
  <script src="{{ asset('js/chartjs.js')}}"></script>
  <script src="{{ asset('vendor/quill.min.js')}}"></script>
  <script src="{{ asset('js/quill.js')}}"></script>
  <script src="{{ asset('vendor/select2/select2.min.js')}}"></script>
  <script src="{{ asset('js/select2.js')}}"></script>
  <script src="{{ asset('js/page.instructor-dashboard.js')}}"></script>
  <script src="{{ asset('vendor/flatpickr/flatpickr.min.js')}}"></script>
  <script src="{{ asset('js/flatpickr.js')}}"></script>
  <script src="{{ asset('js/page.instructor-earnings.js')}}"></script>
  <script src="{{ asset('vendor/list.min.js')}}"></script>
  <script src="{{ asset('js/list.js')}}"></script>
</body>

</html>