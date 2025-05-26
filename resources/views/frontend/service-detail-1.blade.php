@extends('layouts.frontend')
@section('title', 'Accompagnement de fin de vie')
@section('content')
    <!-- start breadcrumb area -->
    <div class="breadcrumb-bg bg_image notranslate" style="background-image: url({{asset('frontend/assets/images/service-7.jpeg')}})">
        <div class="rts-breadcrumb-area" style="background-color: #0000007d">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 breadcrumb-1">
                        <h1 class="title">Accompagnement de fin de vie</h1>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                        <div class="bread-tag">
                            <a href="{{ route('home') }}">Accueil</a>
                            <span> / </span>
                            <a href="#" class="active">Accompagnement de fin de vie</a>
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
                            Chez Agapé, nous considérons que chaque fin de vie mérite dʼêtre vécue avec dignité, sérénité et
                            humanité. Lʼaccompagnement que nous proposons sʼinscrit dans une approche profondément humaine,
                            attentive et respectueuse des volontés de la personne en fin de vie, ainsi que de sa famille.
                        </p>
                        <p class="disc">
                            Nos intervenants offrent une présence rassurante et bienveillante, un soutien émotionnel
                            personnalisé, ainsi quʼun espace dʼécoute libre pour que chacun puisse exprimer ses peurs, ses
                            douleurs, ses souhaits, ou simplement le besoin dʼêtre entouré.
                        </p>
                        <p class="disc">
                            Nous veillons à respecter les croyances spirituelles, les choix philosophiques, et les attaches
                            culturelles de chaque individu, dans une atmosphère de tolérance, de douceur et de paix. Notre
                            mission est aussi de soulager lʼisolement, dʼapporter du réconfort au quotidien et dʼaccompagner
                            les familles avec compassion.
                        </p>
                        <p class="disc">
                            Cet accompagnement peut inclure :
                        <ul>
                            <li>Une présence régulière ou ponctuelle auprès du bénéficiaire Des temps dʼéchange, de lecture,
                                ou</li>
                            <li>de silence partagé</li>
                            <li>Le relais avec les professionnels de santé si nécessaire</li>
                            <li>Le respect absolu des volontés et du rythme de la personne</li>
                        </ul>
                        </p>
                        <p class="disc">
                            Parce quʼaccompagner la fin de vie, cʼest aussi honorer la vie elle- même, Agapé sʼengage à être
                            un soutien solide et respectueux, dans les moments les plus sensibles.
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
