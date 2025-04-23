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


    </div>
    <!-- END PAGE-->

    @include('includes.scripts')

    @stack('scripts')

</body>

</html>
