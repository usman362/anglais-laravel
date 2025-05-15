<head>

    <!-- META DATA -->
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
    <meta name="description" content="Lorem Ipsum">
    <meta name="author" content="Lorem Ipsum">
    <meta name="keywords" content="Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum" />

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
    <style>
        body{
            top: 0 !important;
        }
        .skiptranslate{
            display: none !important;
        }
        #goog-gt-tt{
            visibility: hidden !important;
        }
    </style>
    @stack('styles')
</head>
