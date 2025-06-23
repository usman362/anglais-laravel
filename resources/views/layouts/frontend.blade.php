<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('frontend/assets/images/SMILEY-AGAPEÌ_-2.png') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/plugins/swiper.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/plugins/fontawesome-5.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/plugins/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/plugins/unicons.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/vendor/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/our_values.css') }}">
    <style>
        @media(max-width: 786px) {
            .rts-title-area {
                margin-top: 36px;
            }

            .about-inner img {
                margin-bottom: 12px;
            }
        }
        .skiptranslate{
            display: none !important;
        }
        body{
            top: 0 !important;
        }
        #goog-gt-tt{
            visibility: hidden !important;
        }
    </style>
</head>

<body>

    <!-- start header area -->
    <!-- start header area -->
    <header class="header--sticky header-one ">
        <div class="header-top header-top-one bg-1">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 d-xl-block d-none">
                        <div class="left">

                        </div>
                    </div>
                    <div class="col-lg-6 d-xl-block d-none">
                        <div class="right left">
                            <div class="mail">
                                <a href="mailto:contact@agape-nantes.fr"><i class="fal fa-envelope"></i>
                                    contact@agape-nantes.fr</a>
                            </div>
                            <div class="working-time">
                                <p><i class="fal fa-map-marker-alt"></i> 10 bis rue de la Basinerie 44300 Nantes</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-main-one bg-white">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-lg-4 col-md-4 col-sm-4 col-4">
                        <div class="thumbnail">
                            <a href="{{ route('home') }}" aria-label="Go to Home">
                                <img src="{{ asset('frontend/assets/images/logo/agape-gif.gif') }}" alt="">
                            </a>
                        </div>
                    </div>
                    <div class=" col-xl-9 col-lg-8 col-md-8 col-sm-8 col-8">
                        <div class="main-header">
                            <nav class="nav-main mainmenu-nav d-none d-xl-block">
                                <ul class="mainmenu">
                                    <li class="#" style="list-style: none">
                                        <a href="{{ route('home') }}">Accueil</a>
                                    </li>
                                    <li class="#" style="list-style: none">
                                        <a href="{{ route('services') }}">Nos prestations</a>
                                    </li>
                                    <li class="#" style="list-style: none">
                                        <a href="{{ asset('frontend/assets/TARIF_AGAPEÌ_.pdf') }}" target="_blank">Tarifs</a>
                                    </li>
                                    {{-- <li><a href="{{ route('who_we_are') }}">Qui sommes-nous</a></li>
                                    <li class="#">
                                        <a href="{{ route('our_values') }}">Nos valeurs</a>
                                    </li> --}}
                                    {{-- <li class="#">
                                        <a href="{{ route('blog_list') }}">Blogs</a>
                                    </li> --}}
                                    {{-- <li class="#">
                                        <a href="{{ route('career') }}">Nous recrutons</a>
                                    </li> --}}
                                    <li class="#" style="list-style: none">
                                        <a href="{{ route('contact_us') }}">Contactez-nous</a>
                                    </li>
                                    {{-- <li class="has-droupdown">
                                        <a class="nav-link" href="#">Informations légales</a>
                                        <ul class="submenu">
                                            <li><a href="{{route('legal_1')}}">Mentions légales</a></li>
                                            <li><a href="{{route('legal_2')}}">Conditions Générales dʼUtilisation (CGU)</a></li>
                                            <li><a href="{{route('legal_3')}}">Conditions Générales de Vente (CGV)</a></li>
                                            <li><a href="{{route('legal_4')}}">Politique de confidentialité</a></li>
                                        </ul>
                                    </li> --}}
                                </ul>
                            </nav>
                            <div class="button-area">
                                @auth
                                    <a href="{{ url('dashboard') }}"
                                        class="rts-btn btn-primary ml--20 ml_sm--5 header-one-btn quote-btn">Tableau de bord</a>
                                @else
                                    <a href="{{ route('client-login') }}"
                                        class="rts-btn btn-primary ml--20 ml_sm--5 header-one-btn quote-btn">Votre espace client</a>
                                @endauth

                                <button id="menu-btn" class="menu rts-btn btn-primary-alta ml--20 ml_sm--5">
                                    <img class="menu-dark" src="{{ asset('frontend/assets/images/icon/menu.png') }}"
                                        alt="Menu-icon">
                                    <img class="menu-light"
                                        src="{{ asset('frontend/assets/images/icon/menu-light.png') }}"
                                        alt="Menu-icon">
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- End header area -->

    <div id="side-bar" class="side-bar">
        <button class="close-icon-menu" aria-label="Close"><i class="far fa-times"></i></button>
        <!-- inner menu area desktop start -->
        <div class="rts-sidebar-menu-desktop">
            <a class="logo-1" href="{{ route('home') }}" aria-label="Go to Home"><img
                    src="{{ asset('frontend/assets/images/LOGO-AGAPEÌ-purple.png') }}" alt=""></a>
            <a class="logo-2" href="{{ route('home') }}" aria-label="Go to Home"><img
                    src="{{ asset('frontend/assets/images/LOGO-AGAPEÌ-purple.png') }}" alt=""></a>
            <a class="logo-3" href="{{ route('home') }}" aria-label="Go to Home"><img
                    src="{{ asset('frontend/assets/images/LOGO-AGAPEÌ-purple.png') }}" alt=""></a>
            <div class="body d-none d-xl-block">
                <p class="disc">
                    N’attendez pas d’être heureux pour sourire. Souriez plutôt afin d’être heureux
                </p>
                <div class="get-in-touch">
                    <!-- title -->
                    <div class="h6 title">Contactez nous</div>
                    <!-- title End -->
                    <div class="wrapper">
                        <!-- single -->
                        <div class="single">
                            <i class="fas fa-phone-alt"></i>
                            <a href="#">06 71 67 31 68</a>
                        </div>
                        <!-- single ENd -->
                        <!-- single -->
                        <div class="single">
                            <i class="fas fa-envelope"></i>
                            <a href="#">contact@agape-nantes.fr</a>
                        </div>
                        <!-- single ENd -->
                        <!-- single -->
                        <div class="single">
                            <i class="fas fa-globe"></i>
                            <a href="https://agape-nantes.fr/" target="_blank">www.agape-nantes.fr</a>
                        </div>
                        <!-- single ENd -->
                        <!-- single -->
                        <div class="single">
                            <i class="fas fa-map-marker-alt"></i>
                            <a href="#">10 bis rue de la Basinerie 44300 Nantes</a>
                        </div>
                        <!-- single ENd -->
                    </div>
                </div>
            </div>
            <div class="body-mobile d-block d-xl-none">
                <nav class="nav-main mainmenu-nav">
                    <ul class="mainmenu">
                        <li class="#" style="list-style: none">
                            <a href="{{ route('home') }}">Accueil</a>
                        </li>
                        <li class="#" style="list-style: none">
                            <a href="{{ route('services') }}">Nos prestations</a>
                        </li>
                        <li class="#" style="list-style: none">
                            <a href="{{ asset('frontend/assets/TARIF_AGAPEÌ_.pdf') }}" target="_blank">Tarifs</a>
                        </li>
                        {{--
                        <li><a href="{{ route('who_we_are') }}">Qui sommes-nous</a></li>
                        <li class="#">
                            <a href="{{ route('our_values') }}">Nos valeurs</a>
                        </li> --}}
                        {{-- <li class="#">
                            <a href="{{ route('blog_list') }}">Blogs</a>
                        </li> --}}
                        {{-- <li class="#">
                            <a href="{{ route('career') }}">Nous recrutons</a>
                        </li> --}}
                        <li class="#" style="list-style: none">
                            <a href="{{ route('contact_us') }}">Contactez-nous</a>
                        </li>
                        {{-- <li class="has-droupdown">
                            <a class="nav-link" href="#">Informations légales</a>
                            <ul class="submenu">
                                <li><a href="{{route('legal_1')}}">Mentions légales</a></li>
                                <li><a href="{{route('legal_2')}}">Conditions Générales dʼUtilisation (CGU)</a></li>
                                <li><a href="{{route('legal_3')}}">Conditions Générales de Vente (CGV)</a></li>
                                <li><a href="{{route('legal_4')}}">Politique de confidentialité</a></li>
                            </ul>
                        </li> --}}
                    </ul>
                </nav>

                @auth
                    <a href="{{ url('dashboard') }}"
                        class="rts-btn btn-primary ml--20 ml_sm--5 header-one-btn quote-btnmenu">Dashboard</a>
                @else
                    <a href="{{ route('login') }}"
                        class="rts-btn btn-primary ml--20 ml_sm--5 header-one-btn quote-btnmenu">Votre espace client</a>
                @endauth

            </div>
        </div>
        <!-- inner menu area desktop End -->

    </div>

    <div id="anywhere-home"></div>
    <!-- ENd Header Area -->

    @yield('content')


    <!-- start header area -->

    {{-- <a href="{{asset('frontend/assets/TARIF_AGAPEÌ_.pdf')}}" target="_blank">
        <div class="tarif-section">
                Tarifs
        </div>
    </a> --}}
    <!-- rts footer area start -->
    <div class="rts-footer-area footer-one rts-section-gapTop bg-footer-one">
        <div class="container bg-shape-f1">
            <!-- rts footer area -->
            <div class="row">
                <div class="col-xl-4 col-md-6 col-sm-12 col-12">
                    <div class="footer-two-single-wized left pt--50">
                        <img src="{{ asset('frontend/assets/images/logo/agape-gif.gif') }}" alt="">
                    </div>
                </div>
                <!-- footer mid area -->

                <div class="col-xl-5 col-md-6 col-sm-12 col-12">
                    <div class="footer-one-single-wized mid-bg" style="background: none">
                        <div class="wized-title">
                            <h5 class="title">Informations légales</h5>
                            <img src="{{ asset('frontend/assets/images/footer/under-title.png') }}"
                                alt="finbiz_footer">
                        </div>
                        <div class="opening-time-inner">
                            <div class="single-opening">
                                <p class="day"><a style="color:#fff" href="{{ route('legal_1') }}">Mentions
                                        légales</a></p>
                            </div>
                            <div class="single-opening">
                                <p class="day"><a style="color:#fff" href="{{ route('legal_2') }}">Conditions
                                        Générales dʼUtilisation (CGU)</a></p>
                            </div>
                            <div class="single-opening">
                                <p class="day"><a style="color:#fff" href="{{ route('legal_3') }}">Conditions
                                        Générales de Vente (CGV)</a></p>
                            </div>
                            <div class="single-opening">
                                <p class="day"><a style="color:#fff" href="{{ route('legal_4') }}">Politique de
                                        confidentialité</a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- footer mid area end -->

                <div class="col-xl-3 col-md-6 col-sm-12 col-12 footer-third-section">
                    <div class="footer-two-single-wized left">
                        <h3 class="title animated fadeIn">
                            Vous avez <br>
                            des questions ?
                        </h3>
                        <p class="disc">
                            <img style="width: 36px;" src="{{asset('frontend/assets/images/SMILEY-AGAPEÌ_-2.png')}}" alt=""> Un sourire est souvent l’essentiel.
                        </p>
                    </div>

                    <div class="footer-one-single-wized mt-4">
                        <div class="opening-time-inner">
                            <div class="single-opening">
                                <p class="day"><a style="color:#fff" href="{{ route('contact_us') }}">Contactez-nous</a></p>
                            </div>
                            {{-- <div class="single-opening">
                                <p class="day"><a style="color:#fff" href="{{ route('career') }}">Nous
                                        recrutons</a></p>
                            </div> --}}
                            <div class="single-opening">
                                <p class="day"><a style="color:#fff" href="{{ route('employee-login') }}">Espace
                                        collaborateurs</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- rts footer area End -->
        </div>
        <!-- copyright area start -->
        <div class="rts-copyright-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="text-center">
                            <p class="mb-2">Copyright 2025 Tous droits réservés - <a href="https://digitalwebcreative.fr/" target="_blank">Développement Digital Web Creation</a></p>
                            <p>Philippien 4 : 13 Je puis tout par celui qui me fortifie</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- copyright area end -->
    </div>
    <!-- rts footer area end -->
    <!-- ENd Header Area -->


    <!-- progress Back to top -->
    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>
    <!-- progress Back to top End -->

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

    <script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit">
    </script> --}}

    <!-- scripts start form hear -->
    <script src="{{ asset('frontend/assets/js/vendor/jquery.min.js') }}"></script>
    {{-- <script src="{{ asset('frontend/assets/js/vendor/jqueryui.js') }}"></script> --}}
    <script src="{{ asset('frontend/assets/js/vendor/waypoint.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/plugins/swiper.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/plugins/counterup.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/plugins/sal.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/vendor/bootstrap.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/plugins/contact.form.js') }}"></script>
    <!-- main Js -->
    <script src="{{ asset('frontend/assets/js/main.js') }}"></script>
    <!-- scripts end form hear -->
</body>

</html>
