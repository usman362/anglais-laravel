@extends('layouts.frontend')
@section('title', 'Aide à domicile')
@section('content')
    <!-- start breadcrumb area -->
    <div class="breadcrumb-bg bg_image notranslate" style="background-image: url({{asset('frontend/assets/images/service-6.jpeg')}});background-size: 100% 170%;background-position: top;">
        <div class="rts-breadcrumb-area" style="background-color: #0000007d">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-sm-12 col-12 breadcrumb-1">
                    <h1 class="title">Aide à domicile</h1>
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
                           Vivre chez soi, dans un environnement propre, organisé et sécurisé, est fondamental pour le bien-être et lʼautonomie. <span
                                style="
                            font-weight: 1000;
                            font-style: italic;
                            font-family: cursive;
                            font-size: 18px;
                        ">agapé</span> propose un accompagnement global, à la fois pratique et humain, pour permettre à chacun de vivre sereinement au quotidien, même en situation de fragilité.
                        </p>

                        <h4 class="title pink-text"><img src="{{asset('frontend/assets/images/icon/42.png')}}" width="40" alt=""> Ménage et entretien du cadre de vie</h4>
                        <p class="disc">
                            Nos aides à domicile assurent lʼentretien régulier du logement selon les besoins et les attentes
                            du bénéficiaire. Cela comprend :
                        <ul>
                            <li>Le dépoussiérage des surfaces</li>
                            <li>Le nettoyage des sols, sanitaires et pièces de vie</li>
                            <li>Le rangement et lʼaération des espaces</li>
                            <li>La désinfection de certaines zones sensibles (plan de travail, poignées, etc.)</li>
                        </ul>
                        Chaque intervention est réalisée avec soin, dans le respect des habitudes de vie de la personne et
                        avec des produits adaptés à son environnement.
                        </p>

                        <h4 class="title pink-text"><img src="{{asset('frontend/assets/images/icon/23.png')}}" width="54" alt=""> Courses et approvisionnement</h4>
                        <p class="disc">
                            Les courses peuvent représenter une vraie contrainte, notamment pour les personnes âgées ou à
                            mobilité réduite. Nos intervenants peuvent :
                        <ul>
                            <li>Accompagner le bénéficiaire en magasin</li>
                            <li>Réaliser les achats à sa place, selon une liste définie</li>
                            <li>Aider au rangement des produits au domicile</li>
                        </ul>
                        Les choix alimentaires, les préférences, les régimes spécifiques ou les restrictions médicales sont
                        toujours pris en compte.
                        </p>

                        <h4 class="title pink-text"><img src="{{asset('frontend/assets/images/icon/25.png')}}" width="54" alt=""> Aide à la préparation des repas</h4>
                        <p class="disc">
                            Cuisiner devient parfois difficile, voire impossible. Nos équipes accompagnent les bénéficiaires
                            dans la préparation de repas équilibrés, savoureux et adaptés à leur état de santé. Selon les
                            besoins, cela peut aller dʼune aide ponctuelle à une préparation complète, en veillant à
                            conserver les habitudes alimentaires et les traditions culinaires de chacun.
                        </p>

                        <h4 class="title pink-text"><img src="{{asset('frontend/assets/images/icon/22.png')}}" width="54" alt=""> Aide à la prise des repas</h4>
                        <p class="disc">
                            Lorsque la personne a besoin dʼaide pour sʼinstaller à table, découper les aliments ou manger,
                            nos intervenants sont présents pour lʼaccompagner en douceur, sans la brusquer ni la rendre
                            dépendante. Ce moment est aussi une opportunité dʼéchange et de convivialité, essentielle pour
                            lutter contre lʼisolement.
                        </p>

                        <h4 class="title pink-text"><img src="{{asset('frontend/assets/images/icon/26.png')}}" width="54" alt=""> Aide à la prise de médicament selon ordonnance</h4>
                        <p class="disc">
                            La bonne observance dʼun traitement médical est cruciale pour la santé. Nos auxiliaires de vie
                            sʼassurent que les médicaments sont pris aux bons moments, dans le respect strict des
                            prescriptions médicales. Ils peuvent également signaler tout oubli ou effet indésirable à la
                            famille ou aux professionnels de santé.
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
                        <a href="{{ route('service_details_4') }}"><img style="height: 190px;width: 415px;"
                                src="{{ asset('frontend/assets/images/service-4.jpeg') }}" alt="Business_image"></a>
                        <div class="body-content w-100">
                            <div class="hidden-area">
                                <h5 class="title">Interaction sociale stimulante</h5>
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
                                <h5 class="title">Appui administratif personnalisé </h5>
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
