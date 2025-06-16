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

        {{-- <div id="google_translate_element"></div>

        <script type="text/javascript">
       function googleTranslateElementInit() {
        new google.translate.TranslateElement({
            pageLanguage: 'en',
            includedLanguages: 'fr',
        }, 'google_translate_element');
    }

    // Wait for the widget to be ready, then auto-select 'fr'
    function autoSelectFrench() {
        const interval = setInterval(function () {
            const select = document.querySelector('.goog-te-combo');
            if (select) {
                select.value = 'fr';
                select.dispatchEvent(new Event('change')); // trigger change
                clearInterval(interval);
            }
        }, 500);
    }

    window.addEventListener('load', function () {
        autoSelectFrench();
    });
        </script>

        <script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script> --}}


    </div>
    <!-- END PAGE-->

    @include('includes.scripts')

    @stack('scripts')

</body>

</html>
