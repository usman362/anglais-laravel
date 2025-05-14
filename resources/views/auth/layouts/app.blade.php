<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>

    <!-- META DATA -->
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
    <meta name="description" content="">
    <meta name="author" content="Spruko Technologies Private Limited">
    <meta name="keywords"
        content="admin dashboard, dashboard ui, backend, admin panel, admin template, dashboard template, admin, bootstrap, laravel, laravel admin panel, php admin panel, php admin dashboard, laravel admin template, laravel dashboard, laravel admin panel" />

    <!-- FAVICON -->
    <link rel="icon" href="{{ asset('frontend/assets/images/SMILEY-AGAPEÌ.png') }}" type="image/x-icon" />

    <!-- TITLE -->
    <title>@yield('title')</title>

    <!-- BOOTSTRAP CSS -->
    <link id="style" href="{{ asset('assets/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" />

    <!-- ICONS CSS -->
    <link href="{{ asset('assets/web-fonts/icons.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/web-fonts/font-awesome/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/web-fonts/plugin.css') }}" rel="stylesheet" />

    <!-- APP CSS & APP SCSS -->
    <link rel="preload" as="style" href="{{ asset('assets/app.67855e29.css') }}" />
    <link rel="preload" as="style" href="{{ asset('assets/app.4b443544.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/app.67855e29.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/app.4b443544.css') }}" />


</head>

<body class="main-body leftmenu ltr light-theme">

    <!--- GLOBAL LOADER -->
    <div id="global-loader">
        <img src="{{asset('assets/img/loader.svg')}}" class="loader-img" alt="loader">
    </div>
    <!--- END GLOBAL LOADER -->

   @yield('content')

    <!-- SCRIPTS -->

    <!-- JQUERY JS -->
    <script src="{{asset('assets/plugins/jquery/jquery.min.js')}}"></script>

    <!-- BOOTSTRAP JS -->
    <script src="{{asset('assets/plugins/bootstrap/js/popper.min.js')}}"></script>
    <script src="{{asset('assets/plugins/bootstrap/js/bootstrap.min.js')}}"></script>

    <!-- PERFECT-SCROLLBAR JS -->
    <script src="{{asset('assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>

    <!-- SELECT2 JS -->
    <script src="{{asset('assets/plugins/select2/js/select2.min.js')}}"></script>


    <!-- BOOTSTRAP SHOW PASSWORD JS -->
    <script src="{{asset('assets/plugins/bootstrap/js/bootstrap-show-password.min.js')}}"></script>

    <!-- GENERATE-OTP JS -->
    <link rel="modulepreload" href="{{asset('assets/generate-otp.e4c72a37.js')}}" />
    <script type="module" src="{{asset('assets/generate-otp.e4c72a37.js')}}"></script>


    <!-- STICKY JS-->
    <script src="{{asset('assets/sticky.js')}}"></script>

    <!-- APP JS -->
    <link rel="modulepreload" href="{{asset('assets/app.7e916841.js')}}" />
    <script type="module" src="{{asset('assets/app.7e916841.js')}}"></script>

    <!-- END SCRIPTS -->

</body>

</html>
