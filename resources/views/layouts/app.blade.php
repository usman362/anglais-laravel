<!DOCTYPE html>
<html lang="en" dir="ltr">

@include('includes.head')

<body class="main-body leftmenu ltr light-theme dark-menu">


    <!--- GLOBAL LOADER -->
    <div id="global-loader">
        <img src="{{ asset('assets/img/loader.svg') }}" class="loader-img" alt="loader">
    </div>
    <!--- END GLOBAL LOADER -->

    <!-- PAGE -->
    <div class="page">

        @include('includes.navbar')

        @include('includes.sidebar')

        @yield('content')

        {{-- <div id="google_translate_element" style="z-index: 999"></div>

        <script type="text/javascript">
        function googleTranslateElementInit() {
        new google.translate.TranslateElement({pageLanguage: 'en',includedLanguages:'fr'}, 'google_translate_element');
        }
        </script>

        <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script> --}}


    </div>
    <!-- END PAGE-->

    @include('includes.scripts')

    @stack('scripts')

</body>

</html>
