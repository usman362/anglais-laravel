<head>

    <!-- META DATA -->
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
    <meta name="description" content="Lorem Ipsum">
    <meta name="author" content="Lorem Ipsum">
    <meta name="keywords" content="Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum" />

    <!-- FAVICON -->
    <link rel="icon" href="{{ asset('frontend/assets/images/SMILEY-AGAPEÌ_-2.png') }}" type="image/x-icon" />

    <!-- TITLE -->
    <title>@yield('title')</title>

    <!-- BOOTSTRAP CSS -->
    <link id="style" href="{{ asset('assets/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" />

    <!-- ICONS CSS -->
    <link href="{{ asset('assets/web-fonts/icons.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/web-fonts/font-awesome/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/web-fonts/plugin.css') }}" rel="stylesheet" />

    <!-- APP CSS & APP SCSS -->
    {{-- <link rel="preload" as="style" href="{{ asset('assets/app.67855e29.css') }}" />
    <link rel="preload" as="style" href="{{ asset('assets/app.4b443544.css') }}" /> --}}
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
        button.close {
            padding: 0;
            background-color: transparent;
            border: 0;
            -webkit-appearance: none;
        }
        .close {
            float: right;
            font-size: 1.5rem;
            font-weight: 700;
            line-height: 1;
            color: #000;
            text-shadow: 0 1px 0 #fff;
            opacity: .5;
        }
    </style>
    @stack('styles')

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
