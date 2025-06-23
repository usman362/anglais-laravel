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
                            <img class="img-1" src="{{ asset('frontend/assets/images/photo-auxiliaire.png') }}"
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
                    ">agapé</span>,
                            chaque personne est unique. Notre mission
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
                            ce que votre accompagnement respecte toujours votre dignité et votre autonomie.
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
                            Nous veillons à ce que votre accompagnement respecte toujours
                            votre dignité et votre autonomie. Nous nous adaptons au plus
                            juste à vos besoins pour vous proposer des prestations
                            véritablement personnalisées.
                        </p>
                    </div>
                    <div class="value-box box-3">
                        <img class="icon" src="{{ asset('frontend/assets/images/our_values/4.jpg') }}" alt="icon" />
                        <h5 class="title">Le mieux-être : notre priorité</h5>
                        <p class="description">
                            Maintenir votre bien-être physique, mental et social est au cœur de nos préoccupations. Nous
                            vous aidons à trouver des services adaptés à vos besoins spécifiques pour que vous puissiez vous
                            sentir.
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
                            L'humain est au centre de tout ce que nous faisons. Cela signifie créer un environnement de
                            travail agréable et respectueux pour les intervenants, tout en vous offrant un accompagnement
                            chaleureux et bienveillant.
                        </p>
                    </div>
                    <div class="value-box box-6">
                        <img class="icon" src="{{ asset('frontend/assets/images/our_values/5.jpg') }}"
                            alt="icon" />
                        <h5 class="title">L'autonomie : préserver votre liberté</h5>
                        <p class="description">
                            Notre objectif est de vous aider à recruter des auxiliaires qui vous permettront de conserver un
                            maximum d'autonomiedans votre vie quotidienne. Il s'agit de vous soutenir sans vous déposséder.
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
                            Nous vous proposons des intervenants qualifiés et formés, capables de
                            vous offrir des prestations de haute qualité, parfaitement adaptées à vos besoins spécifiques.
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
                                src="{{ asset('frontend/assets/images/faq/faq-2.jpeg') }}" alt="Business_image"></a>
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
                        <h2 class="title">Ce qui nous distingue</h2>
                    </div>
                    <div class="about-inner">
                        <p class="disc">
                            Une expertise reconnue : Nos intervenants sont le cœur de notre service. Chacune et chacun
                            possède une expérience minimale de 3 ans auprès de personnes âgées, en perte d'autonomie ou en
                            situation de handicap, garantissant un accompagnement professionnel et bienveillant. <br><br>
                            Savoir-faire et savoir-être au service de l'humain : Nous avons spécifiquement adapté leurs
                            compétences et leur savoir-être aux outils de l'éducation populaire. Cette approche unique nous
                            permet d'assurer un service optimal, axé sur le maintien de l'autonomie et le bien-être global
                            de la personne accompagnée. <br><br>
                            Stabilité et confiance : Nous nous engageons à ce que les mêmes personnes accompagnent vos
                            proches. Cette continuité est essentielle pour établir une relation de confiance durable et un
                            accompagnement personnalisé qui répond au plus près des besoins de chacun. <br><br>
                            Collaboration pour un suivi complet : Nos intervenants travaillent en collaboration étroite avec
                            tous les professionnels à domicile (médecins, infirmiers, kinésithérapeutes, etc.) ainsi qu'avec
                            la famille. Cette approche coordonnée garantit un suivi et une prise en charge globale de la
                            personne, assurant une sérénité pour tous.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="rts-faq-section rts-section-gap rts-faq-bg bg_image">
        <div class="container">
            <div class="row align-items-center">
                {{-- <div class="col-lg-5">
                    <div class="thumbnail-faq-four">
                        <img src="{{ asset('frontend/assets/images/faq/faq-1.jpeg') }}" alt="">
                    </div>
                    <div class="thumbnail-faq-four mt-4">
                        <img src="{{ asset('frontend/assets/images/faq/faq-2.jpeg') }}" alt="">
                    </div>
                </div> --}}
                <div class="col-lg-12">
                    <div class="faq-two-inner">
                        <div class="title-area-faq">
                            <h2 class="title">FAQ</h2>
                            <p class="disc">
                                Nous vous offrons un service complet, sans surprise. V oici ce que couvre notre tarif :

                            <ul>
                                <li>
                                    Le salaire de nos auxiliaires de vie : Des personnes dévouées et formées pour vous
                                    accompagner au quotidien.
                                </li>
                                <li>
                                    Les charges sociales : Pour que nos équipes soient bien protégées.
                                </li>
                                <li>
                                    Les frais de déplacement : Quand nos aides se rendent à votre domicile.
                                </li>
                                <li>
                                    L'assurance qualité : Pour un service fiable et sécurisant.
                                </li>
                            </ul>

                            Votre devis gratuit ! Avant de commencer, nous vous préparons un devis clair et précis
                            et ça ne vous engage à rien. <br>
                            N'hésitez pas à nous contacter pour une discussion. Nous sommes là pour vous ! <br>
                            Financer votre accompagnement : les différentes aides disponibles <br>
                            Nous savons que le coût peut être une préoccupation. C'est pourquoi nous vous aidons à utiliser
                            les aides financières et dispositifs existants possibles :
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
                                            1. L'Avance Immédiate de l'Urssaf : payez moins cher tout de suite !
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse"
                                        aria-labelledby="headingOne" data-bs-parent="#accordionExample" style="">
                                        <div class="accordion-body">
                                            C'est un service gratuit et facile à utiliser qui vous permet de déduire
                                            immédiatement votre crédit d'impôt de 50% au moment du paiement de votre
                                            facture. Vous ne payez donc que la moitié du montant !
                                            <h6 class="green-text mt-2">Qui peut en bénéficier ?</h6>
                                            <ul>
                                                <li>
                                                    Vous devez avoir un compte bancaire en France.
                                                </li>
                                                <li>
                                                    Un numéro fiscal doit être associé à votre état civil.
                                                </li>
                                                <li>
                                                    Vous devez avoir déjà fait au moins une déclaration de revenus.
                                                </li>
                                            </ul>
                                            Attention : Ce service n'est pas encore disponible si vous bénéficiez déjà de
                                            l'APA ou de la PCH.
                                            <h6 class="green-text mt-2">
                                                Comment ça fonctionne avec AGAPÉ ?
                                            </h6>
                                            <ul class="number-ul">
                                                <li>
                                                    Nous créons votre compte Urssaf avec votre accord.
                                                </li>
                                                <li>
                                                    Vous recevez un e-mail pour activer votre compte en ligne sur le site de
                                                    l'Urssaf.
                                                </li>
                                                <li>
                                                    Dès l'activation, vous bénéficiez de l'Avance Immédiate.
                                                </li>
                                                <li>
                                                    Vous la validez en ligne sous 48h.
                                                </li>
                                                <li>
                                                    L'Urssaf prélève ensuite le montant réduit sur votre compte et nous
                                                    reverse la totalité. 6. Votre déclaration de revenus est même
                                                    pré-remplie !
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingTwo">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false"
                                            aria-controls="collapseTwo">
                                            2. La réduction ou le crédit d'impôt
                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse"
                                        aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            Lorsque vous faites appel à un service d'aide à la personne comme AGAPÉ, vous
                                            pouvez bénéficier d'une réduction ou d'un crédit d'impôt de 50% des sommes
                                            facturées.

                                            <h6 class="green-text mt-2">
                                                Comment ça marche ?
                                            </h6>
                                            Chaque année, nous vous fournirons une attestation fiscale récapitulant les
                                            sommes dépensées. Vous devrez reporter ce montant sur votre déclaration
                                            d'impôts.
                                            Situation Plafond de dépense annuelles Déduction maximale par foyer fiscal
                                            Situation standard 12 000 € 6 000 €Si vous vivez avec une personne de 65 ans ou
                                            + 13 500 € 6 750 € Si vous avez une carte d'invalidité.
                                            <table class="mt-2">
                                                <thead>
                                                    <th>
                                                        Situation
                                                    </th>
                                                    <th>
                                                        Plafond de dépenses annuelles
                                                    </th>
                                                    <th>
                                                        Déduction maximale par foyer fiscal
                                                    </th>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>Situation standard</td>
                                                        <td>12000€</td>
                                                        <td>6000€</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Si vous vivez avec une personne de 65 ans ou +</td>
                                                        <td>13500€</td>
                                                        <td>6750€</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Si vous avez une carte d'invalidité á 80%</td>
                                                        <td>20000€</td>
                                                        <td>10000€</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false"
                                            aria-controls="collapseThree">
                                            3. L'Allocation Personnalisée d'Autonomie (APA)
                                        </button>
                                    </h2>
                                    <div id="collapseThree" class="accordion-collapse collapse"
                                        aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            L'APA est une aide financière destinée aux personnes âgées de 60 ans et plus en
                                            perte d'autonomie. Elle permet de couvrir une partie des dépenses liées à l'aide
                                            à domicile.
                                            <h6 class="green-text mt-2">
                                                Qui peut en bénéficier ?
                                            </h6>
                                            Pour être éligible à l'APA, vous devez :
                                            <ul>
                                                <li>
                                                    Avoir 60 ans ou plus.
                                                </li>
                                                <li>
                                                    Vivre de manière stable en France (ou avoir un titre de séjour valide si
                                                    vous êtes étranger).
                                                </li>
                                                <li>
                                                    Présenter une perte d'autonomie évaluée par la grille AGGIR.
                                                </li>
                                            </ul>

                                            <h6 class="green-text mt-2">
                                                Comment faire votre demande ?
                                            </h6>
                                            Vous pouvez obtenir un dossier de demande auprès de votre :
                                            <ul>
                                                <li>
                                                    Mairie
                                                </li>
                                                <li>
                                                    Conseil Départemental (site internet ou guichet)
                                                </li>
                                                <li>
                                                    CLIC (Centre Local d'Information et de Coordination)
                                                </li>
                                                <li>
                                                    CCAS (Centre Communal d'Action Sociale)
                                                </li>
                                            </ul>
                                            Votre dossier sera ensuite évalué par une équipe médico-sociale qui déterminera
                                            votre niveau de dépendance (GIR) et élaborera un plan d'aide.

                                            <h6 class="green-text mt-2">
                                                Quel est le montant de l'APA ?
                                            </h6>
                                            Le montant de l'APA varie en fonction de vos revenus, de votre niveau de
                                            dépendance (GIR) et des règles de votre Conseil Départemental. Il peut aller
                                            jusqu'à 1 914,04 € par mois.

                                            <h6 class="green-text mt-2">
                                                Comprendre la grille AGGIR
                                            </h6>
                                            La grille AGGIR est l'outil utilisé pour évaluer votre degré de dépendance. Elle
                                            classe la perte d'autonomie en six niveaux, appelés GIR (Groupes
                                            Iso-Ressources).

                                            <table class="mt-4">
                                                <thead>
                                                    <th>Groupe</th>
                                                    <td>Caractéristiques des personnes</td>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <th>
                                                            GIR 1
                                                        </th>
                                                        <td>
                                                            Personnes clouées au lit ou en fauteuil, dont les fonctions
                                                            intellectuelles sont très altérées, et qui ont besoin d'une aide
                                                            constante.
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th>
                                                            GIR 2
                                                        </th>
                                                        <td>
                                                            Personnes clouées au lit ou en fauteuil, dont les fonctions
                                                            intellectuelles ne sont pas totalement altérées, nécessitant de
                                                            l'aide pour la plupart des activités quotidiennes. Ou personnes
                                                            pouvant se déplacer mais ayant des difficultés mentales pour des
                                                            gestes comme s'habiller ou se laver.
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th>
                                                            GIR 3
                                                        </th>
                                                        <td>
                                                            Personnes ayant encore des capacités de mouvement mais qui ont
                                                            besoin d'aide pour manger, se coucher ou se laver.
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th>
                                                            GIR 4
                                                        </th>
                                                        <td>
                                                            Personnes ayant besoin d'aide pour se lever et se coucher, mais
                                                            pouvant se déplacer seules à l'intérieur. Une aide est parfois
                                                            nécessaire pour la toilette et l'habillage. Ou personnes n'ayant
                                                            pas de problème pour se déplacer mais qui ont besoin d'aide pour
                                                            les activités corporelles et les repas.
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th>
                                                            GIR 5
                                                        </th>
                                                        <td>
                                                            Personnes assez autonomes dans leurs activités, se déplaçant
                                                            seules, mais qui ont besoin d'aides ponctuelles pour la
                                                            toilette, la préparation des repas ou l'entretien du logement.
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th>
                                                            GIR 6
                                                        </th>
                                                        <td>
                                                            Personnes totalement autonomes dans tous les actes de la vie
                                                            courante.
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingFour">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false"
                                            aria-controls="collapseFour">
                                            4. La Prestation de Compensation du Handicap (PCH)
                                        </button>
                                    </h2>
                                    <div id="collapseFour" class="accordion-collapse collapse"
                                        aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            La PCH est une aide financière conçue pour les personnes en situation de
                                            handicap. Elle vise à couvrir les besoins liés à la perte d'autonomie.
                                            <h6 class="green-text mt-2">
                                                Pour quels besoins ?
                                            </h6>
                                            La PCH peut financer :
                                            <ul>
                                                <li>
                                                    Les aides humaines (aide à domicile).
                                                </li>
                                                <li>
                                                    Les aides techniques (fauteuil roulant, lève-personne, etc.).
                                                </li>
                                                <li>
                                                    L'aménagement de votre véhicule ou de votre lieu de vie.
                                                </li>
                                                <li>
                                                    Les aides animalières (comme les chiens guides).
                                                </li>
                                            </ul>

                                            <h6 class="green-text mt-2">
                                                Quelles conditions pour en bénéficier ?
                                            </h6>
                                            Vous devez :
                                            <ul>
                                                <li>
                                                    Vivre de manière stable en France.
                                                </li>
                                                <li>
                                                    Avoir un handicap qui rend difficile la réalisation d'au moins une
                                                    activité essentielle (ou très difficile pour deux activités
                                                    essentielles).
                                                </li>
                                                <li>
                                                    Avoir moins de 60 ans au moment de la demande (des exceptions existent
                                                    si le handicap était présent avant 60 ans).
                                                </li>
                                            </ul>
                                            <h6 class="green-text mt-2">
                                                Comment faire votre demande ?
                                            </h6>
                                            Vous devez déposer votre dossier à la Maison Départementale des Personnes
                                            Handicapées (MDPH) de votre lieu de résidence. C'est la Commission des Droits et
                                            de l'Autonomie des Personnes Handicapées (CDAPH) qui prendra la décision.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingFive">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false"
                                            aria-controls="collapseFive">
                                            5. Les prises en charge par votre assurance, mutuelle ou caisse
                                        </button>
                                    </h2>
                                    <div id="collapseFive" class="accordion-collapse collapse"
                                        aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            De nombreuses assurances, mutuelles ou caisses (de retraite par exemple) peuvent
                                            proposer des prises en charge pour les services d'aide à domicile. <br>
                                            N'hésitez pas à nous contacter ! Nous pourrons vous aider à vérifier si votre
                                            organisme a des conventions avec des services d'aide à la personne et comment
                                            cela pourrait vous aider à financer votre accompagnement.Des questions sur le
                                            financement ? N'hésitez pas à nous contacter chez AGAPÉ. Nous sommes là pour
                                            vous guider et vous aider à trouver la meilleure solution pour votre situation !
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- faq accordion area end -->
                    </div>
                </div>
            </div>
            <a href="{{asset('frontend/assets/TARIF_AGAPEÌ_.pdf')}}" style="top: 36px;position: relative;" class="mt-4 rts-btn btn-primary ml--20 ml_sm--5 header-one-btn quote-btn" target="_blank">Tarifs</a>
        </div>
    </div>
@endsection
