@extends('layouts.frontend')
@section('title', 'Accueil')
@section('content')

<style>
    .value-box .title {
    padding-bottom: 20px !important;
}
</style>

    <!-- banner blank space area -->
    <div class="rts-banner-area rts-banner-one">
        <div class="swiper mySwiper banner-one">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div style="background: #0707074d;">
                        <!-- banner single content -->
                        <div class="banner-one-inner text-start">
                            <h4 class="title">
                                <span style="font-size: 50px;-webkit-text-stroke: 1pt #fff37f47;">
                                    L’aide à domicile, une présence qui réconforte
                                </span>
                            </h4>
                            <img class="shape-img one" src="{{ asset('frontend/assets/images/banner/shape/01.png') }}"
                                alt="banner_business">
                        </div>
                        <!-- banner single content end -->
                    </div>
                </div>
                <div class="swiper-slide two">
                    <div style="background: #0707074d;">
                        <!-- banner single content -->
                        <div class="banner-one-inner text-start">
                            <h4 class="title">
                                <span style="font-size: 50px;-webkit-text-stroke: 1pt #fff37f47;">
                                    Un soutien qui respecte
                                </span>
                            </h4>
                            <img class="shape-img one" src="{{ asset('frontend/assets/images/banner/shape/01.png') }}"
                                alt="banner_business">
                        </div>
                        <!-- banner single content end -->
                    </div>
                </div>
                <div class="swiper-slide three">
                    <div style="background: #0707074d;">
                        <!-- banner single content -->
                        <div class="banner-one-inner text-start">
                            <h4 class="title">
                                <span style="font-size: 50px;-webkit-text-stroke: 1pt #fff37f47;">
                                    Des gestes simples
                                </span>
                            </h4>
                            <img class="shape-img one" src="{{ asset('frontend/assets/images/banner/shape/01.png') }}"
                                alt="banner_business">
                        </div>
                        <!-- banner single content end -->
                    </div>
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


    <!-- rts about us section start -->
    <div class="rts-about-area rts-section-gap bg-about-sm-shape">
        <div class="container">
            <div class="row g-5 align-items-center">
                <!-- about us -->
                <div class="col-md-6 col-sm-12 col-12">
                    <div class="about-image-v-inner">
                        <div class="image-area">
                            <img class="img-1" src="{{ asset('frontend/assets/images/sommes-nous.jpeg') }}"
                                alt="BUsiness_image">
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 col-12 mt_md--50 mt_sm--50">
                    <div class="rts-title-area">
                        <h2 class="title">Qui sommes-nous</h2>
                    </div>
                    <div class="about-inner">
                        <p class="disc">
                            Chez <span
                                style="
                            font-weight: 1000;
                            font-style: italic;
                            font-family: cursive;
                            font-size: 18px;
                        ">agapé</span>,
                            notre nom n'est pas un hasard. Il est tiré du grec ancien et incarne un amour vrai,
                            inconditionnel, patient, dépourvu de désintéressement. C'est cette philosophie qui a donné
                            naissance à notre entreprise, ici même en Loire-Atlantique.
                        </p>

                        <p class="disc">
                            L'histoire de notre création est très personnelle. Travailler comme aide à domicile m’a permis
                            de comprendre qu'il fallait changer la façon dont on accompagne les personnes chez elles. Le but
                            est de repenser complètement l'aide à domicile, pour qu'elle mène à une vraie interaction
                            sociale.
                        </p>

                        <p class="disc">
                            Ce service est destiné aux personnes âgées, en situation de handicap de tout genre, et toute
                            personne ayant besoin d'une aide au quotidien.
                        </p>

                        <p class="disc">
                            Nous croyons en un accompagnement qui va bien plus loin que les gestes du quotidien. Notre
                            objectif principal est simple : vous aider rester chez vous le plus longtemps possible, dans les
                            meilleures conditions et entouré de ce qui compte le plus pour vous.
                        </p>

                        <p class="disc">
                            Nous nous engageons à vous offrir un soutien chaleureux, personnalisé et respectueux, en mettant
                            toujours votre dignité au premier plan. Chez <span
                            style="
                        font-weight: 1000;
                        font-style: italic;
                        font-family: cursive;
                        font-size: 18px;
                    ">agapé</span>, chaque personne est unique. Notre mission
                            est de vous permettre de vivre pleinement, chez vous, et en toute tranquillité.
                        </p>
                    </div>
                </div>
                <!-- about us -->
            </div>
        </div>
    </div>

    <!-- our services -->

    <section class="values-section py-5">
        <div class="container">
            <div class="row justify-content-center align-items-stretch">
                <div class="col-lg-12 col-md-12 col-sm-12 gap-4">
                    <div class="top">
                        <h1 class="title">Nos Valeurs</h1>
                        <p class="description">
                            Chez AGAPÉ, nous sommes convaincus que l'aide à domicile est avant tout une question de
                            confiance et de respect. C'est pourquoi nos valeurs guident chacune de nos actions, pour vous
                            offrir un accompagnement de qualité.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container text-center">
            <!-- Top Center Box -->
            <div class="row justify-content-center align-items-stretch text-center">
                <div class="col-lg-4 col-md-12 col-sm-12 gap-4">
                    <div class="value-box box-1">
                        <img class="icon" src="{{ asset('frontend/assets/images/our_values/2.jpg') }}" alt="icon" />
                        <h5 class="title">La bienveillance AGAPÉ : une écoute attentive</h5>
                        <p class="description">
                            Avec votre collaboration et celle de nos intervenants, nous veillons à
ce que votre accompagnement respecte toujours votre dignité et votre autonomie. Nous nous adaptons au plus juste à vos besoins pour vous proposer des prestations véritablement personnalisées.
                        </p>
                    </div>
                </div>
            </div>
            <!-- Middle Row -->
            <div class="row justify-content-center align-items-stretch text-center">
                <!-- Left Column -->
                <div class="col-lg-4 col-md-12 col-sm-12 d-flex flex-column justify-content-between gap-4">
                    <div class="value-box box-2">
                        <img class="icon" src="{{ asset('frontend/assets/images/our_values/1.jpg') }}" alt="icon" />
                        <h5 class="title">La bien-traitance : un accompagnement sur mesure</h5>
                        <p class="description">
                            Avec votre collaboration et celle de nos intervenants, nous veillons à
ce que votre accompagnement respecte toujours votre dignité et votre autonomie. Nous nous adaptons au plus juste à vos besoins pour vous proposer des prestations véritablement personnalisées.
                        </p>
                    </div>
                    <div class="value-box box-3">
                        <img class="icon" src="{{ asset('frontend/assets/images/our_values/4.jpg') }}" alt="icon" />
                        <h5 class="title">Le mieux-être : notre priorité</h5>
                        <p class="description">
                            Maintenir votre bien-être physique, mental et social est au cœur de nos préoccupations. Nous vous aidons à trouver des services adaptés à vos besoins spécifiques pour que vous puissiez vous sentir bien
                            chez vous.
                        </p>
                    </div>
                </div>
                <!-- Center Box -->
                <div class="col-lg-4 col-md-12 col-sm-12 d-flex justify-content-center align-items-center">
                    <div class="center-box position-relative">
                        <div class="value">2</div>
                        <div class="value-box box-4">
                            <h5 class="title">Les deux règles de base</h5>
                            <img class="icon" src="{{ asset('frontend/assets/images/our_values/7.jpg') }}"
                                alt="icon" />
                            <p class="description">
                                Ne jamais prendre des engagements que l’on ne peut tenir.
                            </p>
                            <img class="icon" src="{{ asset('frontend/assets/images/our_values/7.jpg') }}"
                                alt="icon" />
                            <p class="description">Ne jamais mentir aux clients.</p>
                        </div>
                    </div>
                </div>
                <!-- Right Column -->
                <div class="col-lg-4 col-md-12 col-sm-12 d-flex flex-column justify-content-between gap-4">
                    <div class="value-box box-5">
                        <img class="icon" src="{{ asset('frontend/assets/images/our_values/3.jpg') }}"
                            alt="icon" />
                        <h5 class="title">L'humanité : le respect de chacun</h5>
                        <p class="description">
                            L'humain est au centre de tout ce que nous faisons. Cela signifie créer un environnement de travail agréable et respectueux pour les
intervenant(e)s que vous employez, tout en vous offrant un
accompagnement chaleureux et bienveillant.
                        </p>
                    </div>
                    <div class="value-box box-6">
                        <img class="icon" src="{{ asset('frontend/assets/images/our_values/5.jpg') }}"
                            alt="icon" />
                        <h5 class="title">L'autonomie : préserver votre liberté</h5>
                        <p class="description">
                            Notre objectif est de vous aider à recruter des auxiliaires qui vous permettront de conserver un maximum d'autonomiedans votre vie quotidienne. Il s'agit de vous soutenir sans vous déposséder.
                        </p>
                    </div>
                </div>
            </div>
            <!-- Bottom Center Box -->
            <div class="row justify-content-center align-items-stretch text-center">
                <div class="col-lg-4 col-md-12 col-sm-12 gap-4">
                    <div class="value-box box-7">
                        <img class="icon" src="{{ asset('frontend/assets/images/our_values/6.jpg') }}"
                            alt="icon" />
                        <h5 class="title">Le professionnalisme : des services de qualité</h5>
                        <p class="description">
                            Nous vous aidons à trouver des intervenants qualifiés et formés, capables de vous offrir des prestations de haute qualité, parfaitement adaptées à vos besoins spécifiques.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>



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
                        <img src="{{ asset('frontend/assets/images/faq/faq-1.jpeg') }}" alt="">
                    </div>
                    <div class="thumbnail-faq-four mt-4">
                        <img src="{{ asset('frontend/assets/images/faq/faq-2.jpeg') }}" alt="">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="faq-two-inner">
                        <div class="title-area-faq">
                            <h2 class="title">FAQ</h2>
                            <p class="disc">
                                Chez AGAPÉ, nous savons qu'il est normal d'avoir des questions lorsque l'on envisage une
                                aide à domicile, surtout en mode mandataire. Voici les réponses aux interrogations les plus
                                fréquentes pour vous éclairer.
                            </p>
                        </div>
                        <!-- faq accordion area -->
                        <div class="faq-accordion-area">
                            <div class="accordion" id="accordionExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false"
                                            aria-controls="collapseOne">
                                            1. Qu'est-ce que le mode mandataire chez AGAPÉ ?
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse"
                                        aria-labelledby="headingOne" data-bs-parent="#accordionExample" style="">
                                        <div class="accordion-body">
                                            En mode mandataire, vous êtes l'employeur direct de votre auxiliaire de vie.
                                            AGAPÉ vous accompagne dans toutes les démarches administratives et de gestion :
                                            aide au recrutement, élaboration du contrat de travail, gestion des salaires et
                                            des déclarations Urssaf. Ce mode vous offre plus de flexibilité et un lien
                                            direct avec votre intervenant, tout en bénéficiant de notre expertise et de
                                            notre soutien.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingTwo">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false"
                                            aria-controls="collapseTwo">
                                            2. Que font les aides à domicile ? Quels services peuvent-elles offrir ?
                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse"
                                        aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            Les aides à domicile sont là pour vous accompagner dans votre quotidien et vous
                                            aider à maintenir votre autonomie. Leurs missions peuvent être très variées et
                                            sont toujours personnalisées selon vos besoins. Elles peuvent inclure :
                                            <ul>
                                                <li style="list-style: circle;color:#000">
                                                    Aide à la personne : aide à la toilette, à l'habillage, à la mobilité
                                                    (lever, coucher, transferts), aide à la prise de repas.
                                                </li>
                                                <li style="list-style: circle;color:#000">
                                                    Entretien du cadre de vie : ménage courant, repassage, entretien du
                                                    linge.
                                                </li>
                                                <li style="list-style: circle;color:#000">
                                                    Préparation des repas : élaboration de menus équilibrés, préparation des
                                                    repas et aide à la prise.
                                                </li>
                                                <li style="list-style: circle;color:#000">
                                                    Accompagnement extérieur : courses, rendez-vous médicaux, promenades,
                                                    activités sociales.
                                                </li>
                                                <li style="list-style: circle;color:#000">
                                                    Soutien moral et social : présence attentive, conversation, lutte contre
                                                    l'isolement.
                                                </li>
                                                <li style="list-style: circle;color:#000">
                                                    Aide administrative : classement de documents, aide aux démarches
                                                    simples.
                                                </li>
                                            </ul>
                                            Chaque plan d'aide est unique et défini avec vous.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingTwo">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false"
                                            aria-controls="collapseTwo">
                                            3. Quels sont les délais pour mettre en place une aide à domicile ?
                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse"
                                        aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            Nous nous efforçons d'être les plus réactifs possible. Une fois que nous avons bien compris vos besoins, la mise en place d'une aide à domicile peut généralement se faire dans un délai de quelques jours à une semaine. Ce délai dépendra de la disponibilité de l'intervenant idéal correspondant à votre profil et de la rapidité des démarches administratives (signature de contrat, etc.). Pour les situations urgentes, nous mettons tout en œuvre pour accélérer le processus.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingTwo">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false"
                                            aria-controls="collapseTwo">
                                            4. Est-il possible de changer d'auxiliaire de vie en cours de prestation ?
                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse"
                                        aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            Oui, absolument. Votre confort et votre satisfaction sont nos priorités. Si, pour quelque raison que ce soit, le courant ne passe pas avec l'auxiliaire de vie choisi ou si vos besoins évoluent, il est tout à fait possible de demander un changement. Nous sommes là pour vous aider à trouver une nouvelle personne qui correspondra mieux à vos attentes et à votre personnalité. C'est l'un des avantages de notre approche personnalisée.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingTwo">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false"
                                            aria-controls="collapseTwo">
                                            5. Comment la continuité des services est-elle assurée (vacances, maladie) ?
                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse"
                                        aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            En mode mandataire, puisque vous êtes l'employeur, nous vous aidons à anticiper les absences (vacances, maladie) de votre auxiliaire. Nous pouvons vous accompagner dans la recherche d'un remplaçant temporaire si votre intervenant habituel est absent, afin d'assurer une continuité des services. Nous vous conseillons sur les meilleures pratiques pour gérer ces situations.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingTwo">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false"
                                            aria-controls="collapseTwo">
                                            6. Puis-je bénéficier d'aides financières pour l'aide à domicile ?
                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse"
                                        aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            Oui, tout à fait ! Plusieurs dispositifs existent pour vous aider à financer les services d'aide à domicile. Les principaux sont:
                                            <ul>
                                                <li style="list-style: circle;color:#000">
                                                    L'Allocation Personnalisée d'Autonomie (APA) pour les personnes âgées en perte d'autonomie.
                                                </li>
                                                <li style="list-style: circle;color:#000">
                                                    La Prestation de Compensation du Handicap (PCH) pour les personnes en situation de handicap.
                                                </li>
                                                <li style="list-style: circle;color:#000">
                                                    La réduction ou le crédit d'impôt de 50%.
                                                </li>
                                                <li style="list-style: circle;color:#000">
                                                    Le service Avance Immédiate de l'Urssaf qui vous permet de déduire votre crédit d'impôt en temps réel.
                                                </li>
                                                <li style="list-style: circle;color:#000">
                                                    Certaines mutuelles, assurances ou caisses de retraite peuvent aussi proposer des prises en charge.
                                                </li>
                                            </ul>
                                            Nous pouvons vous conseiller et vous orienter vers les organismes adaptés à votre situation.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingTwo">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false"
                                            aria-controls="collapseTwo">
                                            7. Comment la qualité des intervenants est-elle garantie en mode mandataire ?
                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse"
                                        aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            Bien que vous soyez l'employeur, AGAPÉ vous aide à recruter des intervenants qualifiés et expérimentés. Nous vous accompagnons dans la vérification de leurs compétences, de leurs références, et vous proposons des profils qui correspondent à vos besoins et à nos valeurs de bienveillance et de professionnalisme. Nous mettons à votre disposition des outils et des conseils pour vous aider à faire le meilleur choix.
                                            <br>
                                            Vous avez d'autres questions ? N'hésitez pas à nous contacter directement. Nous sommes là pour vous accompagner !
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
