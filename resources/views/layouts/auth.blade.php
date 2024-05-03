<!DOCTYPE html>
<html lang="en" dir="ltr" class="dark-mode">
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Genius Institute of Information Technology</title>
        <meta name="robots" content="noindex">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700%7CRoboto:400,500%7CExo+2:600&amp;display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link type="text/css" href="{{ asset('vendor/spinkit.css') }}" rel="stylesheet">
        <link type="text/css" href="{{ asset('vendor/perfect-scrollbar.css') }}" rel="stylesheet">
        <link type="text/css" href="{{ asset('css/material-icons.css') }}" rel="stylesheet">
        <link type="text/css" href="{{ asset('css/fontawesome.css') }}" rel="stylesheet">
        <link type="text/css" href="{{ asset('css/preloader.css') }}" rel="stylesheet">
        <link type="text/css" href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link type="text/css" href="{{ asset('css/dark.css') }}" rel="stylesheet">

    </head>

    <body class="layout-app ">

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

                @include('includes.guest_header')

                @yield('content')
            </div>
        </div>

        <script src="{{ asset('vendor/jquery.min.js') }}"></script>
        <script src="{{ asset('vendor/popper.min.js') }}"></script>
        <script src="{{ asset('vendor/bootstrap.min.js') }}"></script>
        <script src="{{ asset('vendor/perfect-scrollbar.min.js') }}"></script>
        <script src="{{ asset('vendor/dom-factory.js') }}"></script>
        <script src="{{ asset('vendor/material-design-kit.js') }}"></script>
        <script src="{{ asset('js/app.js') }}"></script>
        <script src="{{ asset('js/preloader.js') }}"></script>
    </body>
</html>