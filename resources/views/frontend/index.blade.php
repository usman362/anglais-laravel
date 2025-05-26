@extends('layouts.frontend')
@section('title', 'Accueil')
@section('content')


    <!-- banner blank space area -->
    <div class="rts-banner-area rts-banner-one">
        <div class="swiper mySwiper banner-one">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <!-- banner single content -->
                    <div class="banner-one-inner text-start">

                        <h4 class="title">
                            <span>
                                <br>
                                <br>
                                Un sourire est une clef secrète qui ouvre bien des cœurs.
                                <br>
                                <br>

                            </span>
                        </h4>
                        <img class="shape-img one" src="{{ asset('frontend/assets/images/banner/shape/01.png') }}"
                            alt="banner_business">
                    </div>
                    <!-- banner single content end -->
                </div>
                <div class="swiper-slide two">
                    <!-- banner single content -->
                    <div class="banner-one-inner text-start">
                        <h4 class="title">
                            <span>
                                Je connais un moyen
                                de ne pas vieillir : c’est d’accueillir les années comme elles viennent et avec le
                                sourire... un sourire, c'est toujours jeune.
                            </span>
                        </h4>
                        <img class="shape-img one" src="{{ asset('frontend/assets/images/banner/shape/01.png') }}"
                            alt="banner_business">
                    </div>
                    <!-- banner single content end -->
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
        <div class="animation-img">
            <img class="shape-img two" src="{{ asset('frontend/assets/images/banner/shape/02.png') }}"
                alt="banner_business">
            <img class="shape-img three" src="{{ asset('frontend/assets/images/banner/shape/03.png') }}"
                alt="banner_business">
        </div>
    </div>
    <!-- banner blank space area end -->

    <div class="rts-service-area background-service rts-section-gapTop">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="rts-title-area text-ledt">
                        <h2 class="title">Our valeurs</h2>
                    </div>
                    <p class="disc">
                        Nous contrôlons grâce à nos valeurs la fourniture et la qualité des prestations en sʼadaptant à
                        lʼunicité de chacun de vos besoins.
                    </p>
                    <p class="disc">
                        Les deux règles de base :
                    <ul>
                        <li>Ne jamais prendre des engagements que lʼon ne peut tenir.
                        </li>
                        <li>Ne jamais parler aux clients.
                        </li>
                    </ul>
                    </p>
                </div>
            </div>
        </div>
        <div class="container-fluid service-main plr--120-service mt--50 plr_md--0 pl_sm--0 pr_sm--0">
            <div class=" row">
                <!-- start single Service -->
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="service-one-inner one">
                        <div class="thumbnail">
                            <img src="{{ asset('frontend/assets/images/service/icon/01.svg') }}" alt="finbiz_service">
                        </div>
                        <div class="service-details">
                            <p class="disc">
                                <b>La bien-traitance</b> Avec votre aide et lʼensemble des professionnels nous vous
                                proposons un accompagnement dans le respect de la dignité, de lʼautonomie et dans
                                lʼadaptation la plus juste à vos besoins de prestations personnalisées.
                            </p>
                        </div>
                    </div>
                </div>
                <!-- end single Services -->
                <!-- start single Service -->
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="service-one-inner two">
                        <div class="thumbnail">
                            <img src="{{ asset('frontend/assets/images/service/icon/02.svg') }}" alt="finbiz_service">
                        </div>
                        <div class="service-details">
                            <p class="disc">
                                <b>La bienveillance</b> Agapé sʼengage à traiter avec une écoute attentive, une attitude
                                positive pour assurer votre accompagnement.
                            </p>
                        </div>
                    </div>
                </div>
                <!-- end single Services -->
                <!-- start single Service -->
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="service-one-inner three">
                        <div class="thumbnail">
                            <img src="{{ asset('frontend/assets/images/service/icon/03.svg') }}" alt="finbiz_service">
                        </div>
                        <div class="service-details">
                            <p class="disc">
                                <b>Le mieux-être</b> Le maintien de votre bien-être physique, mental et social, que nous
                                favorisons en offrant des services adaptés à chaque individu.
                            </p>
                        </div>
                    </div>
                </div>
                <!-- end single Services -->
                <!-- start single Service -->
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="service-one-inner four">
                        <div class="thumbnail">
                            <img src="{{ asset('frontend/assets/images/service/icon/04.svg') }}" alt="finbiz_service">
                        </div>
                        <div class="service-details">
                            <p class="disc">
                                <b>L'autonomie</b> Lʼobjectif est de vous permettre de conserver le maximum d'autonomie
                                possible dans votre vie quotidienne.
                            </p>
                        </div>
                    </div>
                </div>
                <!-- end single Services -->
                <!-- start single Service -->
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="service-one-inner five">
                        <div class="thumbnail">
                            <img src="{{ asset('frontend/assets/images/service/icon/05.svg') }}" alt="finbiz_service">
                        </div>
                        <div class="service-details">
                            <p class="disc">
                                <b>L'humanité</b> Chez nous, l'humain est au cœur de nos préoccupations. Cela signifie créer
                                un environnement de travail agréable pour les intervenants·e·s et vous offrir un
                                accompagnement chaleureux.
                            </p>
                        </div>
                    </div>
                </div>
                <!-- end single Services -->
                <!-- start single Service -->
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="service-one-inner six">
                        <div class="thumbnail">
                            <img src="{{ asset('frontend/assets/images/service/icon/06.svg') }}" alt="finbiz_service">
                        </div>
                        <div class="service-details">
                            <p class="disc">
                                <b>Le professionnalisme</b> Les intervenants doivent être qualifiés et formés pour assurer
                                des prestations de qualité et adaptées aux besoins de chacun.
                            </p>
                        </div>
                    </div>
                </div>
                <!-- end single Services -->
            </div>
        </div>
    </div>


    <!-- rts about us section start -->
    <div class="rts-about-area rts-section-gap bg-about-sm-shape">
        <div class="container">
            <div class="row g-5 align-items-center">
                <!-- about us -->
                <div class="col-md-6 col-sm-12 col-12">
                    <div class="about-image-v-inner">
                        <div class="image-area">
                            <img class="mt--110 img-1" src="{{ asset('frontend/assets/images/about/main/about-03.jpg') }}"
                                alt="BUsiness_image">
                            <img class="img-over" src="{{ asset('frontend/assets/images/about/main/about-04.jpg') }}"
                                alt="BUsiness_image">
                            <div class="goal-button-wrapper">
                                <div class="vedio-icone">
                                    <a id="play-video" class="video-play-button" href="#" aria-label="Play Video">
                                        <span></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 col-12 mt_md--50 mt_sm--50">
                    <div class="rts-title-area">
                        <h2 class="title">Qui sommes-nous</h2>
                    </div>
                    <div class="about-inner">
                        <p class="disc">
                            Agapé, est une jeune entreprise dʼautonomie à domicile (SAD) dʼÉconomie sociale et solidaire
                            (ESS) dans le département de Loire-Atlantique. Nous avons décidé de repenser lʼaide à
                            domicile, de lʼaccompagnement à domicile jusquʼà lʼinclusion.
                        </p>

                        <p class="disc">
                            Notre particularité réside dans lʼinclusion d'outils dʼéducation populaire, qui rend l'offre
                            de service stimulante, riche, optimale, beaucoup plus centrée sur le mieux-être, la dignité,
                            et le
                            confort en favorisant le maintien à domicile. Quant aux intervenants·e·s recruté·e·s sur
                            leurs qualifications leurs valeurs humaines et lʼaltruisme, des formations spécifiques avec
                            promotion à lʼinterne et un pack de fidélisation leur sont proposé.e.s. Le tout dans une
                            ambiance de valeur d'entreprise familiale et de développement durable où le NOUS est au
                            centre du développement.
                        </p>

                        <p class="disc">
                            Ainsi, Agapé créer une belle relation de confiance intervenants·e·s et client·e·s et de
                            bénéficier dʼun accompagnement serein, global (social, technique,administratif etc.) au sein
                            de son
                            environnement. Mais également de répondre à la pénurie de main-d'œuvre, du manque de
                            qualification, de revalorisation du métier, du manque de formation et de l'absence de
                            carrière à long terme dans les SAAD en employant des personnes des quartiers prioritaires de
                            la ville (QPV) éloignées de l'emploi et des personnes d'association Insertion par l'activité
                            économique (IAE) avec un pack de fidélisation, d'accès à une formation continue et de stage.
                            Les bureaux dʼAgapé se trouvent dans un quartier prioritaire de la ville de Nantes. Les QPV
                            sont des quartiers définis, par la loi de programmation pour la ville et la cohésion urbaine
                            du 21 février 2014. Ce choix est incité par la principale cible de recrutement : des
                            personnes des quartiers prioritaires, lʼenvie de redynamiser ces quartiers et permettre un
                            fort maillage et ancrage territorial. En parallèle Agapé prévoit sur le long terme avoir un
                            partenariat avec des associations dʼinsertion par lʼactivité économique pour permettre le
                            recrutement et la formation de travailleur·euses handicapées sur des missions adaptées.
                        </p>
                    </div>
                </div>
                <!-- about us -->
            </div>
        </div>
    </div>

    <!-- our services -->

    <!-- our service area start -->
    <div class="rts-service-area rts-section-gapTop pb--200 service-two-bg bg_image">
        <div class="container">
            <div class="row g-5 service padding-controler">
                <div class="rts-title-area">
                    <h2 class="title">Nos services</h2>
                </div>
                <!-- single service area -->
                <div class="col-xl-4 col-md-6 col-sm-12 col-12 pb--140 pb_md--100">
                    <div class="service-two-inner">
                        <a href="{{ route('service_details_1') }}"><img style="height: 276px;width: 415px;"
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
                <div class="col-xl-4 col-md-6 col-sm-12 col-12 pb--140 pb_md--100">
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
                <div class="col-xl-4 col-md-6 col-sm-12 col-12 pb--140 pb_md--100">
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
                <div class="col-xl-4 col-md-6 col-sm-12 col-12 pb--140 pb_md--100">
                    <div class="service-two-inner">
                        <a href="{{ route('service_details_4') }}"><img style="height: 276px;width: 415px;"
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
                <div class="col-xl-4 col-md-6 col-sm-12 col-12 pb--140 pb_md--60">
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
    <!-- our services -->


    <!-- why us -->
    <div class="rts-about-area rts-section-gap bg-about-sm-shape">
        <div class="container">
            <div class="row g-5 align-items-center">

                <div class="col-md-6 col-sm-12 col-12">
                    <div class="rts-test-one-image-inner">
                        <img src="{{ asset('frontend/assets/images/SMILEY-AGAPEÌ.png') }}" alt="business_testimobials">
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 col-12 mt_md--50 mt_sm--50">
                    <div class="rts-title-area">
                        <h2 class="title">Ce qui fait notre différence</h2>
                    </div>
                    <div class="about-inner">
                        <h5>Reconnaissance et revalorisation dʼun métier en tension</h5>
                        <p class="disc">
                            Chez nous, chaque parcours compte. Nous offrons des formations pour grandir ensemble, tout en
                            reconnaissant lʼimportance précieuse de l'expérience acquise.
                        </p>

                        <h5>Partenariats</h5>
                        <p class="disc">
                            Comme des maillons dʼune même chaîne, nous unissons nos forces avec lʼassociation Projet
                            Solidaire dans la Cité, Green Act et Julie Viau, pour tisser un réseau d'entraide et
                            d'accompagnement chaleureux.
                        </p>

                        <h5>Vision holistique</h5>
                        <p class="disc">
                            Conscients que la qualité de nos services repose sur le bien-être de nos équipes, nous avons mis
                            en place un programme de fidélisation complet. Celui- ci comprend des séances de sophrologie et
                            de socio-esthétique pour favoriser la détente et lʼestime de soi, des groupes de parole pour un
                            soutien psychologique et des avantages pour reconnaître leur engagement.
                        </p>


                        <h5>Offre personnalisée</h5>
                        <p class="disc">
                            Parce que nous sommes tous différents, nous proposons aux bénéficiaires de nos prestations une
                            offre singulière en coordination avec tout les professionnels intervenant à domicile.
                            <br>
                            Unique <br> Individuelle <br> Personnalisée
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="rts-faq-section rts-section-gap rts-faq-bg bg_image">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="thumbnail-faq-four">
                        <img src="{{ asset('frontend/assets/images/faq/02.png') }}" alt="">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="faq-two-inner">
                        <div class="title-area-faq">
                            <h2 class="title">FAQ</h2>
                        </div>
                        <!-- faq accordion area -->
                        <div class="faq-accordion-area">
                            <div class="accordion" id="accordionExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false"
                                            aria-controls="collapseOne">
                                            Comment sont financées nos prestations ?
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse"
                                        aria-labelledby="headingOne" data-bs-parent="#accordionExample" style="">
                                        <div class="accordion-body">
                                            Nos prestations relèvent des services à la personne à domicile (article L.7231-1
                                            du Code du travail) et ouvrent droit, selon les conditions en vigueur, à un
                                            <b>crédit dʼimpôt égal à 50 % des dépenses engagées</b>, conformément à
                                            lʼarticle 199
                                            sexdecies du CGI. <br>
                                            Les personnes âgées peuvent bénéficier de lʼAPA 1, tandis que les personnes
                                            handicapées peuvent solliciter la PCH 2. Lʼaide sociale peut également
                                            intervenir pour les personnes les plus démunies. Des compléments santé et des
                                            avantages fiscaux sont aussi possibles. Ces aides viennent en déduction du
                                            montant total. <br>
                                            Nous vous aidons gratuitement à étudier les possibilités de financement, et à
                                            établir les dossiers de prise en charge (CARSAT 3 , CAF 4 , CPAM 5, MSA 6,
                                            Mutuelles,...) en mettant à votre disposition les coordonnées du CLIC 7 de
                                            référence qui vous orientera. <br>
                                            Vous pouvez bénéficier dʼun crédit dʼimpôt <b>immédiatement déduit du montant
                                                dû</b> si
                                            vous engagez des dépenses avec Agapé, et ce <b>quelle</b> que soit votre
                                            situation
                                            professionnelle (en activité, sans activité, retraité), selon les conditions
                                            requises. Vous ne réglez que 50 % des sommes à payer (salaires et charges
                                            sociales), retenues dans la limite dʼun plafond annuel qui dépend de votre
                                            situation et qui peut être éventuellement majoré dans certains cas. <br>
                                            Depuis 2022, il vous est possible dʼactiver lʼavance immédiate des aides
                                            fiscales et sociales au titre des services à la personne, même pour financer
                                            leur service hors PCH et APA.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingTwo">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false"
                                            aria-controls="collapseTwo">
                                            Comment intervenons nous ?
                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse"
                                        aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            Un contrat de mandat vous lie à <b>Agapé</b>. Vous <b>nous sollicitez</b> pour
                                            sélectionner et
                                            <b>recruter votre intervenant·e</b> à domicile, ainsi que pour gérer les
                                            formalités
                                            administratives (<b>contrat, bulletin de paie, déclarations sociales et
                                                patronales</b> auprès des organismes dédiés).<br>
                                            <b>Vous, accompagné·e par notre équipe, endossez</b> la totalité des tâches et
                                            responsabilités liées à votre statut. <b>Vous êtes lʼunique employeur direct</b>
                                            de
                                            votre intervenant·e, qui travaille sous votre autorité.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- faq accordion area end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
