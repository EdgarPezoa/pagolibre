<!DOCTYPE html>
<!--[if IE 9]>         <html class="ie9 no-focus"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-focus"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">

        <title>@yield('title') | PagoLibre</title>

        <meta name="description" content="Edgar Leonardo Pezoa Soto">
        <meta name="author" content="Edgar Leonardo Pezoa Soto">
        <meta name="robots" content="noindex, nofollow">
        <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1.0">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        
        <!-- Icons -->
        <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
        <!-- <link rel="shortcut icon" href="assets/img/favicons/favicon.png">

        <link rel="icon" type="image/png" href="assets/img/favicons/favicon-16x16.png" sizes="16x16">
        <link rel="icon" type="image/png" href="assets/img/favicons/favicon-32x32.png" sizes="32x32">
        <link rel="icon" type="image/png" href="assets/img/favicons/favicon-96x96.png" sizes="96x96">
        <link rel="icon" type="image/png" href="assets/img/favicons/favicon-160x160.png" sizes="160x160">
        <link rel="icon" type="image/png" href="assets/img/favicons/favicon-192x192.png" sizes="192x192">

        <link rel="apple-touch-icon" sizes="57x57" href="assets/img/favicons/apple-touch-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="assets/img/favicons/apple-touch-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="assets/img/favicons/apple-touch-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="assets/img/favicons/apple-touch-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="assets/img/favicons/apple-touch-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="assets/img/favicons/apple-touch-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="assets/img/favicons/apple-touch-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="assets/img/favicons/apple-touch-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicons/apple-touch-icon-180x180.png"> -->
        <!-- END Icons -->
        
        <!-- <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400italic,600,700%7COpen+Sans:300,400,400italic,600,700">         -->
        <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
        @yield('cssPage')
        <link rel="stylesheet" id="css-main" href="{{ asset('css/oneui.css') }}">                
        
    </head>
    <body>
        <div id="page-container" class="sidebar-l sidebar-o side-scroll header-navbar-fixed">
        @include('layouts.pago_libre.backend.header')  
        <main id="main-container">            
            @yield('pageHeader')
            <div class="content content-narrow">
                @yield('content')
            </div>

        </main>
        @include('layouts.pago_libre.backend.footer')  
        </div>        
        
        <script src="{{ asset('js/core/jquery.min.js') }}"></script>
        <script src="{{ asset('js/core/bootstrap.min.js') }}"></script>
        <script src="{{ asset('js/core/jquery.slimscroll.min.js') }}"></script>
        <script src="{{ asset('js/core/jquery.scrollLock.min.js') }}"></script>
        <script src="{{ asset('js/core/jquery.appear.min.js') }}"></script>
        <script src="{{ asset('js/core/jquery.countTo.min.js') }}"></script>
        <script src="{{ asset('js/core/jquery.placeholder.min.js') }}"></script>
        <script src="{{ asset('js/core/js.cookie.min.js') }}"></script>
        <script src="{{ asset('js/appTheme.js') }}"></script>
        <script src="{{ asset('pagolibre/main.js') }}"></script>

        @yield('scriptsPage')
    </body>
</html>