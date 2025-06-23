@extends('layouts.frontend')
@section('title', 'Interaction sociale')
@section('content')
    <!-- start breadcrumb area -->
    <div class="breadcrumb-bg bg_image notranslate" style="background-image: url({{asset('frontend/assets/images/faq/faq-2.jpeg')}});background-size: 100% 170%;background-position: top;">
        <div class="rts-breadcrumb-area" style="background-color: #0000007d">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-sm-12 col-12 breadcrumb-1">
                    <h1 class="title">Interaction sociale stimulante</h1>
                </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end breadcrumb area -->

    <!-- start service details area -->
    <div class="rts-service-details-area rts-section-gap notranslate">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-12">
                    <!-- service details left area start -->
                    <div class="service-detials-step-1">
                        <p class="disc">
                            <span
                                style="
                            font-weight: 1000;
                            font-style: italic;
                            font-family: cursive;
                            font-size: 18px;
                        ">agapé</span>, est convaincu que lʼaccompagnement ne se limite pas aux gestes techniques. Le lien humain, la communication et la stimulation sont essentiels pour maintenir une qualité de vie, une bonne santé mentale et un sentiment dʼutilité.
                        </p>

                        <p class="disc">
                            La solitude, fréquente chez les personnes âgées ou isolées, peut nuire gravement au moral et au
                            bien-être. Cʼest pourquoi nous plaçons la relation humaine au cœur de nos interventions.
                        </p>

                        <p class="disc">
                            Nos intervenants favorisent un cadre dʼéchange chaleureux et rassurant, propice à la parole, au
                            partage et à lʼécoute. Ils encouragent les sorties, les promenades, les discussions, et
                            accompagnent les personnes à des événements, rendez-vous ou rencontres.
                        </p>

                        <p class="disc">
                            Nous travaillons également avec des associations locales de lien social, afin dʼouvrir des
                            opportunités de rencontres, dʼactivités collectives ou dʼengagement bénévole, selon les envies
                            de la personne.
                        </p>

                        <h4 class="title pink-text"><img src="{{asset('frontend/assets/images/icon/32.png')}}" width="54" alt=""> Mise en place dʼactivités stimulantes</h4>
                        <p class="disc">
                            Pour entretenir la mémoire, la concentration, la motricité ou simplement le plaisir de faire,
                            nos équipes proposent des activités personnalisées et adaptées :
                        <ul>
                            <li>Jeux de société, mots croisés, lecture</li>
                            <li>Activités manuelles : tricot, peinture, dessin</li>
                            <li>Jardinage, cuisine, musique ou chant</li>
                            <li>Sorties culturelles, petites promenades...</li>
                        </ul>
                        Ces moments permettent de stimuler les fonctions cognitives tout en valorisant les talents et les
                        passions de chacun.
                        </p>

                        <h4 class="title pink-text"><img src="{{asset('frontend/assets/images/icon/24.png')}}" width="54" alt=""> Dame de compagnie</h4>
                        <p class="disc">
                            La présence dʼune dame de compagnie est précieuse pour les personnes seules ou en perte
                            dʼautonomie. Elle peut :
                        <ul>
                            <li>Être une oreille attentive et bienveillante</li>
                            <li>Accompagner dans les tâches du quotidien</li>
                            <li>Offrir un véritable soutien moral</li>
                            <li>Aider à maintenir une routine sociale</li>
                        </ul>
                        Ce service contribue à rompre lʼisolement, prévenir la dépression et créer un environnement de vie
                        plus doux, plus humain.
                        </p>

                        <p class="disc">
                            <span
                                style="
                            font-weight: 1000;
                            font-style: italic;
                            font-family: cursive;
                            font-size: 18px;
                        ">agapé</span>, croit que le bien-être passe aussi par le cœur. Cʼest pourquoi nous mettons un point dʼhonneur à préserver, voire renforcer, le lien social des personnes que nous accompagnons. Parce que chaque sourire, chaque mot échangé, est une victoire contre la solitude.
                        </p>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End service details area -->

    <!-- our service area start -->
    <div class="rts-service-area pb--200 notranslate">
        <div class="container">
            <div class="row g-5 service padding-controler">
                <h4 class="title">Autres Services</h4>
                <!-- single service area -->
                <div class="col-md-3 col-sm-12 col-12 pb--140 pb_md--100">
                    <div class="service-two-inner">
                        <a href="{{ route('service_details_1') }}"><img style="height: 202px;width: 415px;"
                                src="{{ asset('frontend/assets/images/service-7.jpeg') }}" alt="Business_image"></a>
                        <div class="body-content w-100">
                            <div class="hidden-area">
                                <h5 class="title">Accompagnement de fin de vie</h5>
                                <a class="rts-read-more-two color-primary" href="{{ route('service_details_1') }}"> En
                                    savoir plus<i class="far fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- single service area end-->
                <!-- single service area -->
                <div class="col-md-3 col-sm-12 col-12 pb--140 pb_md--100">
                    <div class="service-two-inner">
                        <a href="{{ route('service_details_2') }}"><img
                                src="{{ asset('frontend/assets/images/service-2.jpeg') }}" alt="Business_image"></a>
                        <div class="body-content w-100">
                            <div class="hidden-area">
                                <h5 class="title">Actes quotidiens de la vie</h5>
                                <a class="rts-read-more-two color-primary" href="{{ route('service_details_2') }}"> En
                                    savoir plus<i class="far fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- single service area end-->
                <!-- single service area -->
                <div class="col-md-3 col-sm-12 col-12 pb--140 pb_md--100">
                    <div class="service-two-inner">
                        <a href="{{ route('service_details_3') }}"><img
                                src="{{ asset('frontend/assets/images/service-6.jpeg') }}" alt="Business_image"></a>
                        <div class="body-content w-100">
                            <div class="hidden-area">
                                <h5 class="title">Entretien du cadre de vie</h5>
                                <a class="rts-read-more-two color-primary" href="{{ route('service_details_3') }}"> En
                                    savoir plus<i class="far fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- single service area end-->
                <!-- single service area -->
                <div class="col-md-3 col-sm-12 col-12 pb--140 pb_md--60">
                    <div class="service-two-inner">
                        <a href="{{ route('service_details_5') }}"><img
                                src="{{ asset('frontend/assets/images/service-8.jpeg') }}" alt="Business_image"></a>
                        <div class="body-content w-100">
                            <div class="hidden-area">
                                <h5 class="title">Appui administratif personnalisé</h5>
                                <a class="rts-read-more-two color-primary" href="{{ route('service_details_5') }}"> En
                                    savoir plus<i class="far fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- single service area end-->
            </div>
        </div>
    </div>
    <!-- our service area end -->
@endsection
