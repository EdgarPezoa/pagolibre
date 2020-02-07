<!DOCTYPE html>
<!--[if IE 9]>         <html class="ie9 no-focus"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-focus"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">

        <title>KIO</title>

        <meta name="description" content="OneUI - Admin Dashboard Template & UI Framework created by pixelcave and published on Themeforest">
        <meta name="author" content="pixelcave">
        <meta name="robots" content="noindex, nofollow">
        <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1.0">

        <!-- Icons -->        
        <!-- <link rel="shortcut icon" href="assets/img/favicons/favicon.png"> -->                
        <!-- END Icons -->        
        <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
        @yield('cssPage')
        <link rel="stylesheet" id="css-main" href="{{ asset('css/oneui.css') }}">                        
    </head>
    <body>
        <div class="content overflow-hidden">
            @yield('content')
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

        @yield('scriptsPage')                            
    </body>
</html>