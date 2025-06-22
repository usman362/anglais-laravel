@extends('layouts.frontend')
@section('title', 'Appui administratif personnalisé')
@section('content')
    <!-- start breadcrumb area -->
    <div class="breadcrumb-bg bg_image notranslate" style="background-image: url({{asset('frontend/assets/images/service-8.jpeg')}})">
        <div class="rts-breadcrumb-area" style="background-color: #0000007d">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-sm-12 col-12 breadcrumb-1">
                    <h1 class="title">Aide administratif</h1>
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
                            Gérer ses papiers, comprendre des démarches ou rédiger un courrier peut devenir un véritable casse-tête, surtout face à des procédures de plus en plus dématérialisées. Lʼautonomie passeaussi par la maîtrise de lʼadministratif, cʼest pourquoi nous proposons un accompagnement humain, patient et adapté à chaque situation.
                        </p>

                        <h4 class="title pink-text"><img src="{{asset('frontend/assets/images/icon/27.png')}}" width="54" alt=""> Aide aux démarches administratives</h4>
                        <p class="disc">
                            Nous assistons les bénéficiaires dans une grande variété de démarches, notamment :
                        <ul>
                            <li>Constitution et suivi de dossiers (APA, retraite, CAF, sécurité sociale...)</li>
                            <li>Prise de rendez-vous (médecins, administrations, services sociaux...)</li>
                            <li>Aide à la compréhension des courriers officiels ou factures</li>
                            <li>Mise à jour de documents administratifs (changement dʼadresse, renouvellement de pièces, etc.)</li>
                        </ul>
                        Nos intervenants prennent le temps dʼexpliquer chaque étape, de rassurer et de guider, dans le respect des choix et de la confidentialité.
                        </p>

                        <h4 class="title pink-text"><img src="{{asset('frontend/assets/images/icon/28.png')}}" width="54" alt=""> Rédaction de courriers et courriels</h4>
                        <p class="disc">
                            Nous proposons également une aide à la rédaction de lettres, courriels ou formulaires, quʼil sʼagisse :
                        <ul>
                            <li>Dʼune réclamation</li>
                            <li>Dʼun courrier de demande ou dʼannulation</li>
                            <li>Dʼune lettre administrative</li>
                            <li>Dʼun message personnel à envoyer par voie électronique</li>
                        </ul>
                        Nos équipes sʼadaptent aux besoins et au niveau de familiarité avec lʼécrit ou lʼoutil numérique. Dans certains cas, nous pouvons aussi accompagner dans lʼutilisation de lʼordinateur, du téléphone ou de la messagerie en ligne.
                        </p>

                        <p class="disc">
                            Chez Agapé, lʼappui administratif est plus quʼun simple service : cʼest
un soutien concret à lʼautonomie et à la tranquillité dʼesprit, pour que chacun puisse faire valoir ses droits, rester informé et conserver le contrôle de ses démarches, sans stress ni confusion.
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
                <div class="col-md-3 col-sm-12 col-12 pb--140 pb_md--100">
                    <div class="service-two-inner">
                        <a href="{{ route('service_details_4') }}"><img style="height: 190px;width: 415px;"
                                src="{{ asset('frontend/assets/images/service-4.jpeg') }}" alt="Business_image"></a>
                        <div class="body-content w-100">
                            <div class="hidden-area">
                                <h5 class="title">Interaction sociale</h5>
                                <a class="rts-read-more-two color-primary" href="{{ route('service_details_4') }}"> En
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
