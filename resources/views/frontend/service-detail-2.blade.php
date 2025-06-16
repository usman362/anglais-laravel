@extends('layouts.frontend')
@section('title', 'Actes quotidiens de la vie')
@section('content')
    <!-- start breadcrumb area -->
    <div class="breadcrumb-bg bg_image notranslate" style="background-image: url({{asset('frontend/assets/images/service-2.jpeg')}})">
        <div class="rts-breadcrumb-area" style="background-color: #0000007d">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 col-12 breadcrumb-1">
                    <h1 class="title">Actes quotidiens de la vie</h1>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
                    <div class="bread-tag">
                        <a href="{{ route('home') }}">Accueil</a>
                        <span> / </span>
                        <a href="#" class="active">Actes quotidiens de la vie</a>
                    </div>
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
                            Au cœur de notre mission chez Agapé, lʼaccompagnement dans les gestes essentiels du quotidien est une priorité. Ces actes, souvent simples en apparence, peuvent devenir complexes et éprouvants pour les personnes âgées, dépendantes ou en situation de handicap. Notre objectif : leur permettre de vivre chez elles en toute sécurité, dans le respect de leur autonomie et de leur dignité.
                        </p>

                        <h4 class="title pink-text"><img src="{{asset('frontend/assets/images/icon/13.png')}}" width="54" alt=""> Aide au lever et au coucher</h4>
                        <p class="disc">
                            Commencer et finir la journée dans de bonnes conditions est fondamental pour le bien-être physique et moral. Nos auxiliaires de vie assistent les bénéficiaires lors du passage du lit au fauteuil ou inversement, en veillant à leur confort et à leur sécurité. Chaque intervention est adaptée au rythme et aux habitudes de vie de la personne.
                        </p>

                        <h4 class="title pink-text"><img src="{{asset('frontend/assets/images/icon/14.png')}}" width="54" alt=""> Toilette et douche</h4>
                        <p class="disc">
                            Nous apportons une aide à la toilette dans le respect de lʼintimité et des préférences de chacun. Que ce soit une toilette au lit ou en salle de bain, une douche complète ou une simple aide partielle, nos intervenants assurent ces gestes essentiels avec délicatesse et attention. Lʼobjectif : maintenir une bonne hygiène corporelle, prévenir les risques dʼinfections et préserver lʼestime de soi.
                        </p>

                        <h4 class="title pink-text"><img src="{{asset('frontend/assets/images/icon/15.png')}}" width="54" alt=""> Élimination</h4>
                        <p class="disc">
                            Lʼassistance à lʼélimination inclut lʼaide à lʼutilisation des toilettes, le changement de protections ou encore la gestion de dispositifs médicaux spécifiques. Nos équipes interviennent avec discrétion et bienveillance, dans le respect total de la pudeur de la personne accompagnée. Ces gestes, aussi sensibles soient-ils, sont indispensables pour garantir la dignité et le confort au quotidien.
                        </p>

                        <h4 class="title pink-text"><img src="{{asset('frontend/assets/images/icon/17.png')}}" width="54" alt=""> Habillage</h4>
                        <p class="disc">
                            Sʼhabiller est un acte dʼexpression de soi, mais il peut devenir difficile avec lʼâge ou la maladie. Nous aidons les bénéficiaires à choisir leurs vêtements, à sʼhabiller et se déshabiller, toujours dans le respect de leurs goûts, de leurs habitudes et de leur confort. Cet accompagnement permet à chacun de conserver son autonomie et sa confiance en soi.
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
                <h4 class="title">Autre Sevices</h4>
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
