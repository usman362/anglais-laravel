@extends('layouts.frontend')
@section('title', 'Accueil')
@section('content')


    <style>
        .value-box .title {
            padding-bottom: 20px !important;
        }

        .rts-section-gap {
            border-top: 1px solid #35353568;
            border-bottom: 1px solid #35353568;
        }
    </style>
    <!-- banner blank space area -->
    <div class="rts-banner-area rts-banner-one">
        <div class="swiper mySwiper banner-one">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="inner-swiper-side">
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
                    <div class="inner-swiper-side">
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
                <div class="swiper-slide three">
                    <div class="inner-swiper-side">
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
<!-- rts about us section start -->
<div class="rts-about-area rts-section-gap" style="margin-top: 150px; border-top: none;">

    <div class="container">
        <div class="row g-5 align-items-center">

            <!-- Image à gauche -->
            <div class="col-md-6 col-sm-12 col-12">
                <div class="about-image-v-inner">
                    <div class="image-area">
                        <img class="img-1"
                             src="{{ asset('frontend/assets/images/equipeagapelarge.png') }}"
                             alt="Equipe Agape"
                             style="display: block; border-top: none !important;">
                    </div>
                </div>
            </div>


                <!-- Texte à droite -->
                <div class="col-md-6 col-sm-12 col-12 mt_md--50 mt_sm--50">
                    <div class="rts-title-area">
                        <div class="top">
                            <h2 class="title">Qui sommes-nous</h2>
                        </div>
                        <div class="about-inner">
                            <p class="disc">
                                Chez <span
                                    style="font-weight: 1000; font-style: italic; font-family: cursive; font-size: 18px;">agapé</span>,
                                notre nom n'est pas un hasard. Il est tiré du grec ancien et incarne un amour vrai,
                                inconditionnel, patient, dépourvu de désintéressement. C'est cette philosophie qui a donné
                                naissance à notre entreprise, ici même en Loire-Atlantique.
                            </p>

                            <p class="disc">
                                L'histoire de notre création est très personnelle. Travailler comme aide à domicile m’a
                                permis
                                de comprendre qu'il fallait changer la façon dont on accompagne les personnes chez elles.
                                Le but est de repenser complètement l'aide à domicile, pour qu'elle mène à une <strong>
                                    vraie
                                    interaction
                                    sociale </strong>.
                            </p>

                            <p class="disc">
                                <strong> Ce service est destiné aux personnes âgées, en situation de handicap de tout genre,
                                    et à toute personne ayant besoin d'une aide au quotidien. </strong>
                            </p>

                            <p class="disc">
                                Nous croyons en un accompagnement qui va bien plus loin que les gestes du quotidien.
                                Notre objectif principal est simple : vous aider à <strong>rester chez vous le plus
                                    longtemps
                                    possible, </strong>
                                dans les meilleures conditions et entouré de ce qui compte le plus pour vous.
                            </p>

                            <p class="disc">
                                Nous nous engageons à vous offrir un <strong>soutien chaleureux, personnalisé et
                                    respectueux, </strong>
                                en mettant toujours votre dignité au premier plan.
                                Chez <span
                                    style="font-weight: 1000; font-style: italic; font-family: cursive; font-size: 18px;">agapé</span>,
                                <strong> chaque personne est unique. </strong> Notre mission est de vous permettre de vivre
                                pleinement,
                                chez vous, et en toute tranquillité.
                            </p>
                        </div>
                    </div>
                </div>
                <!-- Texte à droite fin -->
            </div>
        </div>
    </div>
    <!-- rts about us section end -->
    <!-- our services -->
    <section class="values-section py-5">
        <style>
            .values-section .description {
                text-align: justify;
            }
        </style>
        <div class="container">
            <div class="row justify-content-center align-items-stretch">
                <div class="col-lg-12 col-md-12 col-sm-12 gap-4">
                    <div class="top">
                        <h1 class="title">Nos Valeurs</h1>
                        <p class="description">
                            Chez <span
                                style="font-weight: 1000; font-style: italic; font-family: cursive; font-size: 18px;">agapé</span>,
                            nous sommes convaincus que l'aide à domicile est avant tout une question de
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
                        <h5 class="title">La bienveillance <span
                                style="font-weight: 1000; font-style: italic; font-family: cursive; font-size: 18px;">agapé</span>
                            : une écoute attentive</h5>
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
                            sentir bien.
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
                            <p class="description" style="text-align: center;">
                                Ne jamais prendre des engagements que l’on ne peut tenir.
                            </p>


                            <img class="icon" src="{{ asset('frontend/assets/images/our_values/7.jpg') }}"
                                alt="icon" />
                            <div style="display: flex; justify-content: center;">
                                <div style="width: 100%; text-align: center;">
                                    <p class="description" style="text-align: center;">
                                        Ne jamais mentir aux <br> clients.
                                    </p>
                                </div>

                            </div>

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
                            maximum d'autonomie dans votre vie quotidienne. Il s'agit de vous soutenir sans vous déposséder.
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

    <style>
        .rts-about-area.rts-section-gap {
            padding-top: 40px !important;
        }
    </style>

    <!-- our service area start -->
    <div class="rts-service-area pb--80 service-two-bg bg_image">
        <div class="container">
            <div class="row g-5 service padding-controler">
                <div class="rts-title-area">
                    <h2 class="title" style="color: #006144; font-weight: 800;">Nos services</h2>
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
                <div class="col-xl-4 col-md-6 col-sm-12 col-12 pb--140 pb_md--100">
                    <!-- single service area -->
                    <div class="service-two-inner">
                        <a href="{{ route('service_details_2') }}"><img
                                src="{{ asset('frontend/assets/images/service-sommes.png') }}" alt="Business_image"></a>
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
                                <h5 class="title">Aide à domicile</h5>
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
                                <h5 class="title">Interaction sociale stimulante </h5>
                                <a class="rts-read-more-two color-primary" href="{{ route('service_details_4') }}"> En
                                    savoir plus<i class="far fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div id="tarifs"></div>
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
    <style>
        .rts-about-area.rts-section-gap {
            padding-top: 40px !important;
        }
    </style>


    <!-- SECTION FAQ TARIFS & AIDES -->
    <div class="rts-faq-section rts-faq-bg" id="tarifs-mob" style="background-color: #ffffff;">
        <style>
            .faq-two-inner .title-area-faq h1.title {
                text-transform: none;
                font-size: 42px;
                margin-bottom: 0px !important;
            }

            .faq-two-inner .disc {
                text-align: justify;
            }

            /* Supprimer le fond par défaut si une image était appliquée */
            .rts-faq-bg {
                background-image: none !important;
                background-color: #ffffff !important;
            }
        </style>
        <style>
            .value-box .title {
                padding-bottom: -100px !important;
            }
        </style>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="faq-two-inner">
                        <div class="title-area-faq">  <div class="top">
                        <h1 class="title">Tout est compris !</h1>
                            <p class="disc">

                                Nous vous offrons un service complet, sans surprise. Voici ce que couvre notre tarif :<br>
                            </p>
                            <ul>
                                <li><strong>Le salaire de nos auxiliaires de vie </strong> : Des personnes dévouées et
                                    formées pour vous
                                    accompagner au quotidien.</li>
                                <li><strong>Les charges sociales </strong>: Pour que nos équipes soient bien protégées.</li>
                                <li><strong>Les frais de déplacement </strong>: Quand nos aides se rendent à votre domicile.
                                </li>
                                <li><strong>L'assurance qualité </strong>: Pour un service fiable et sécurisant.</li>
                            </ul>

                            <br>
                            <p class="disc">
                                <strong> Votre devis gratuit ! </strong>Avant de commencer, nous vous préparons un devis
                                clair et précis – sans
                                engagement.
                            </p>

                            <p class="disc">
                               
                            </p>
                            <h3> Financer votre accompagnement : les différentes aides disponibles </h3>

                            <p> Nous savons que le coût peut être une préoccupation. C'est pourquoi nous vous aidons à
                                utiliser les aides financières et dispositifs existants possibles. </p>
                        </div>


                        <div class="faq-accordion-area">
                            <div class="accordion" id="accordionExample2">
                                <!-- Question 1 -->
                                <div class="accordion-item"
                                    style="background-color: #ffeced !important;border: var(--bs-accordion-border-width) solid #ffeced;">
                                    <h2 class="accordion-header" id="headingOne2">
                                        <button class="accordion-button collapsed" type="button"
                                            style="background: #ec66a2;border: #ffeced;color: #ffffff;"
                                            data-bs-toggle="collapse" data-bs-target="#collapseOne2"
                                            aria-expanded="false" aria-controls="collapseOne2">
                                            1. L'Avance Immédiate de l'Urssaf : payez moins cher tout de suite !
                                        </button>
                                    </h2>
                                    <div id="collapseOne2" class="accordion-collapse collapse"
                                        aria-labelledby="headingOne2" data-bs-parent="#accordionExample2">
                                        <div class="accordion-body"
                                            style="text-align: justify; font-size: 15px; color: #333;">
                                            <p>
                                                C'est un service <strong>gratuit</strong> et <strong>facile à
                                                    utiliser</strong> qui vous permet de déduire
                                                immédiatement votre crédit d'impôt de 50 % au moment du paiement de votre
                                                facture. Vous ne payez donc que la moitié du montant !
                                            </p>

                                            <h6><strong>Qui peut en bénéficier ?</strong></h6>
                                            <ul>
                                                <li>Vous devez avoir un compte bancaire en France.</li>
                                                <li>Un numéro fiscal doit être associé à votre état civil.</li>
                                                <li>Vous devez avoir déjà fait au moins une déclaration de revenus.</li>
                                            </ul>

                                            <p><strong>Attention :</strong> ce service n'est pas encore disponible si vous
                                                bénéficiez déjà de l'APA ou de la PCH.</p>

                                            <h6 class="mt-4"><strong>Comment ça fonctionne avec <span
                                                        style="font-weight: 1000; font-style: italic; font-family: cursive; font-size: 18px;">agapé</span>
                                                    ?</strong></h6>
                                            <ol>
                                                <li><strong>Nous créons votre compte Urssaf</strong> avec votre accord.</li>
                                                <li>Vous recevez un e-mail pour <strong>activer votre compte en ligne
                                                    </strong> sur le site de l'Urssaf.</li>
                                                <li>Dès l'activation, vous bénéficiez de l'Avance Immédiate.</li>
                                                <li>Chaque mois, l'Urssaf vous notifie la demande de paiement. Vous la
                                                    validez.</li>
                                                <li>L'Urssaf prélève le montant réduit et nous reverse la totalité.</li>
                                                <li><strong>Votre déclaration de revenus est pré-remplie !</strong></li>
                                            </ol>
                                        </div>
                                    </div>
                                </div>
                                <!-- Question 2 -->
                                <div class="accordion-item"
                                    style="background-color: #ffeced !important;border: var(--bs-accordion-border-width) solid #ffeced;">
                                    <h2 class="accordion-header" id="headingTwo2">
                                        <button class="accordion-button collapsed" type="button"
                                            style="background: #ec66a2;border: #ffeced;color: #ffffff;"
                                            data-bs-toggle="collapse" data-bs-target="#collapseTwo2"
                                            aria-expanded="false" aria-controls="collapseTwo2">
                                            2. La réduction ou le crédit d'impôt
                                        </button>
                                    </h2>
                                    <div id="collapseTwo2" class="accordion-collapse collapse"
                                        aria-labelledby="headingTwo2" data-bs-parent="#accordionExample2">
                                        <div class="accordion-body" style="font-size: 15px; color: #333;">
                                            <p>
                                                Lorsque vous faites appel à un service d'aide à la personne comme
                                                <span
                                                    style="font-weight: 1000; font-style: italic; font-family: cursive; font-size: 18px;">agapé</span>,
                                                vous pouvez bénéficier
                                                d'une <strong>réduction ou d'un crédit d'impôt de <strong>50
                                                        %</strong></strong> des sommes
                                                facturées.
                                            </p>

                                            <h6><strong>Comment ça marche ?</strong></h6>
                                            <p>
                                                Chaque année, nous vous fournirons une <strong>attestation fiscale</strong>
                                                récapitulant les
                                                montants facturés.
                                                Il vous suffira de reporter le montant sur votre déclaration d'impôts pour
                                                bénéficier de la déduction.
                                            </p>

                                            <h6><strong>Exemples de plafonds annuels :</strong></h6>
                                            <table class="mt-2 table table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th><strong>Situation</strong></th>
                                                        <th><strong>Plafond de dépenses annuelles</strong></th>
                                                        <th><strong>Déduction maximale par foyer fiscal</strong></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <th>Situation standard</th>
                                                        <th>12 000 €</th>
                                                        <th>6 000 €</th>
                                                    </tr>
                                                    <tr>
                                                        <th>Avec une personne de 65 ans ou plus</th>
                                                        <th>13 500 €</th>
                                                        <th>6 750 €</th>
                                                    </tr>
                                                    <tr>
                                                        <th>Avec carte d'invalidité à 80%</th>
                                                        <th>20 000 €</th>
                                                        <th>10 000 €</th>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>

                                <!-- Question 3 -->
                                <div class="accordion-item"
                                    style="background-color: #ffeced !important;border: var(--bs-accordion-border-width) solid #ffeced;">
                                    <h2 class="accordion-header" id="headingThree2">
                                        <button class="accordion-button collapsed" type="button"
                                            style="background: #ec66a2;border: #ffeced;color: #ffffff;"
                                            data-bs-toggle="collapse" data-bs-target="#collapseThree2"
                                            aria-expanded="false" aria-controls="collapseThree2">
                                            3. L'Allocation Personnalisée d'Autonomie (APA)
                                        </button>
                                    </h2>
                                    <div id="collapseThree2" class="accordion-collapse collapse"
                                        aria-labelledby="headingThree2" data-bs-parent="#accordionExample2">
                                        <div class="accordion-body" style="font-size: 15px; color: #333;">
                                            <p>
                                                L'APA est une aide financière destinée aux <strong> personnes âgées de 60
                                                    ans et plus
                                                    en perte d'autonomie. </strong>
                                                elle permet de couvrir une partie des dépenses liées à l’aide à domicile.
                                            </p>

                                            <h6><strong>Qui peut en bénéficier ?</strong></h6>
                                            <ul>
                                                <li>être âgé(e) de <strong>60 ans ou plus </strong></li>
                                                <li>vivre en france de manière stable (ou avoir un titre de séjour valide)
                                                </li>
                                                <li>présenter une perte d’autonomie évaluée par la <strong>grille AGGIR.
                                                    </strong></li>
                                            </ul>

                                            <h6><strong>Comment faire votre demande ?</strong></h6>
                                            <p>Vous pouvez retirer un dossier auprès de votre :</p>
                                            <ul>
                                                <li> <strong>Mairie </strong></li>
                                                <li> <strong>CLIC </strong> (Centre Local d’Information et de Coordination)
                                                </li>
                                                <li> <strong>CCAS </strong> (Centre Communal d’Action Sociale)</li>
                                                <li> <strong>Conseil départemental </strong>(en ligne ou guichet)</li>
                                            </ul>

                                            <p>Votre dossier sera ensuite évalué par une équipe médico-sociale qui
                                                déterminera votre niveau de dépendance (GIR) et élaborera un plan d'aide.
                                            </p>

                                            <h6><strong>Quel est le montant de l’APA ?</strong></h6>
                                            <p>Il peut aller jusqu’à <strong>1 914,04 € par mois</strong>, selon vos
                                                ressources, votre GIR et votre département.</p>

                                            <h6><strong>Comprendre la grille aggir</strong></h6>
                                            <p>La grille AGGIR évalue la perte d'autonomie en 6 niveaux appelés
                                                <strong>GIR (Groupe Iso-Ressources).</strong> :
                                            </p>

                                            <div class="table-responsive">
                                                <table class="table w-100"
                                                    style="border: 1px solid #ccc; border-collapse: collapse;">
                                                    <thead style="background-color: #f8f9fa;">
                                                        <tr>
                                                            <th style="border: 1px solid #ccc; padding: 10px; ">
                                                                <strong>GROUPE </strong>
                                                            </th>
                                                            <th style="border: 1px solid #ccc; padding: 10px; ">
                                                                <strong> CARACTÉRISITQUES DES PERSONNES </strong>
                                                            </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td style="border: 1px solid #ccc; padding: 10px;"><strong>GIR
                                                                    1</strong></td>
                                                            <td style="border: 1px solid #ccc; padding: 10px;">Personnes
                                                                clouées au lit ou en fauteuil, dont les fonctions
                                                                intellectuelles sont très altérées, et qui ont besoin d'une
                                                                aide constante.</td>
                                                        </tr>
                                                        <tr>
                                                            <td style="border: 1px solid #ccc; padding: 10px;"><strong>GIR
                                                                    2</strong></td>
                                                            <td style="border: 1px solid #ccc; padding: 10px;">Personnes
                                                                clouées au lit ou en fauteuil, dont les fonctions
                                                                intellectuelles ne sont
                                                                pas totalement altérées, nécessitant de l'aide pour la
                                                                plupart des activités
                                                                quotidiennes. Ou personnes pouvant se déplacer mais ayant
                                                                des
                                                                difficultés mentales pour des gestes comme s'habiller ou se
                                                                laver.</td>
                                                        </tr>
                                                        <tr>
                                                            <td style="border: 1px solid #ccc; padding: 10px;"><strong>GIR
                                                                    3</strong></td>
                                                            <td style="border: 1px solid #ccc; padding: 10px;">Personnes
                                                                ayant encore des capacités de mouvement mais qui ont besoin
                                                                d'aide
                                                                pour manger, se coucher ou se laver.</td>
                                                        </tr>
                                                        <tr>
                                                            <td style="border: 1px solid #ccc; padding: 10px;"><strong>GIR
                                                                    4</strong></td>
                                                            <td style="border: 1px solid #ccc; padding: 10px;">Personnes
                                                                ayant besoin d'aide pour se lever et se coucher, mais
                                                                pouvant se
                                                                déplacer seules à l'intérieur. Une aide est parfois
                                                                nécessaire pour la toilette et
                                                                l'habillage. Ou personnes n'ayant pas de problème pour se
                                                                déplacer mais
                                                                qui ont besoin d'aide pour les activités corporelles et les
                                                                repas.</td>
                                                        </tr>
                                                        <tr>
                                                            <td style="border: 1px solid #ccc; padding: 10px;"><strong>GIR
                                                                    5</strong></td>
                                                            <td style="border: 1px solid #ccc; padding: 10px;">Personnes
                                                                assez autonomes dans leurs activités, se déplaçant seules,
                                                                mais qui ont
                                                                besoin d'aides ponctuelles pour la toilette, la préparation
                                                                des repas ou l'entretien
                                                                du logement.</td>
                                                        </tr>
                                                        <tr>
                                                            <td style="border: 1px solid #ccc; padding: 10px;"><strong>GIR
                                                                    6</strong></td>
                                                            <td style="border: 1px solid #ccc; padding: 10px;">Personnes
                                                                totalement autonomes dans tous les actes de la vie courante.
                                                            </td>
                                                        </tr>

                                                    </tbody>

                                                </table>
                                                <p><strong>Important :</strong> Seuls les GIR 1 à 4 peuvent bénéficier de
                                                    l'APA. Les GIR 5 et 6 peuvent parfois
                                                    prétendre à d'autres aides (aide ménagère via la retraite ou l'aide
                                                    sociale départementale).
                                                </p>

                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <!-- Question 4 -->
                                <div class="accordion-item"
                                    style="background-color: #ffeced !important;border: var(--bs-accordion-border-width) solid #ffeced;">
                                    <h2 class="accordion-header" id="headingEight2">
                                        <button class="accordion-button collapsed" type="button"
                                            style="background: #ec66a2;border: #ffeced;color: #ffffff;"
                                            data-bs-toggle="collapse" data-bs-target="#collapseEight2"
                                            aria-expanded="false" aria-controls="collapseEight2">
                                            4. La Prestation de Compensation du Handicap (PCH)
                                        </button>
                                    </h2>
                                    <div id="collapseEight2" class="accordion-collapse collapse"
                                        aria-labelledby="headingEight2" data-bs-parent="#accordionExample2">
                                        <div class="accordion-body" style="font-size: 15px; color: #333;">
                                            <p>
                                                La <strong>PCH</strong> est une aide financière conçue pour les
                                                <strong>personnes en
                                                    situation de handicap.</strong>
                                                Elle vise à couvrir les besoins liés à la perte d'autonomie.
                                            </p>

                                            <h6><strong>Pour quels besoins ?</strong></h6>
                                            <p>La PCH peut financer :</p>
                                            <ul>
                                                <li>Les <strong> aides humaines </strong> (ex. : aide à domicile).</li>
                                                <li>Les <strong> aides techniques </strong>(fauteuil roulant, lève-personne,
                                                    etc.).</li>
                                                <li>L'<strong>aménagement de votre véhicule </strong> ou de votre<strong>
                                                        lieu de vie </strong>.</li>
                                                <li>Les <strong> aides animalières</strong> (ex. : chiens guides).</li>
                                            </ul>

                                            <h6><strong>Quelles conditions pour en bénéficier ?</strong></h6>
                                            <ul>
                                                <li>Vivre de manière stable en France.</li>
                                                <li>Avoir un handicap rendant difficile au moins une activité essentielle,
                                                    ou très difficile deux activités essentielles.</li>
                                                <li>Être âgé(e) de <strong>moins de 60 ans </strong>au moment de la demande
                                                    (des exceptions
                                                    existent si le handicap est antérieur à 60 ans).</li>
                                            </ul>

                                            <h6><strong>Comment faire votre demande ?</strong></h6>
                                            <p>
                                                Le dossier doit être déposé auprès de la <strong>Maison Départementale des
                                                    Personnes Handicapées (MDPH)</strong>
                                                de votre lieu de résidence. La décision est ensuite prise par la
                                                <strong>Commission des Droits et de l'Autonomie des Personnes Handicapées
                                                    (CDAPH)</strong>.
                                            </p>
                                        </div>
                                    </div>
                                </div>


                                <!-- Question 5 -->
                                <div class="accordion-item"
                                    style="background-color: #ffeced !important;border: var(--bs-accordion-border-width) solid #ffeced;">
                                    <h2 class="accordion-header" id="headingNine2">
                                        <button class="accordion-button collapsed" type="button"
                                            style="background: #ec66a2;border: #ffeced;color: #ffffff;"
                                            data-bs-toggle="collapse" data-bs-target="#collapseNine2"
                                            aria-expanded="false" aria-controls="collapseNine2">
                                            5. Les prises en charge par votre assurance, mutuelle ou caisse
                                        </button>
                                    </h2>
                                    <div id="collapseNine2" class="accordion-collapse collapse"
                                        aria-labelledby="headingNine2" data-bs-parent="#accordionExample2">
                                        <div class="accordion-body" style="font-size: 15px; color: #333;">
                                            <p>
                                                De nombreuses <strong>assurances</strong>, <strong>mutuelles</strong> ou
                                                <strong>caisses de retraite</strong>
                                                peuvent proposer une participation financière aux services d'aide à
                                                domicile. <br> <br>

                                                Certaines d’entre elles ont signé des conventions avec des prestataires ou
                                                proposent des forfaits dédiés
                                                aux bénéficiaires en perte d’autonomie. <br> <br>

                                                <strong>N’hésitez pas à nous contacter !</strong> Nous pourrons vous
                                                accompagner pour vérifier si votre
                                                organisme propose ce type d’aide et vous guider dans les démarches. <br>
                                                <br>
                                                Une question sur le financement ? <span
                                                    style="font-weight: 1000; font-style: italic; font-family: cursive; font-size: 18px;">agapé</span>
                                                est à vos côtés pour vous aider à
                                                trouver la solution
                                                la mieux adaptée à votre situation.
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div style="text-align: center; margin: 40px 0;">
                                    <a href="{{ asset('frontend/assets/TARIF_AGAPEÌ_.pdf') }}" target="_blank"
                                        style="
           background-color: #006144;
           color: white;
           font-weight: bold;
           font-size: 18px;
           padding: 12px 30px;
           border-radius: 8px;
           text-decoration: none;
           display: inline-block;
           transition: background-color 0.3s ease;
       "
                                        onmouseover="this.style.backgroundColor='#004d36';"
                                        onmouseout="this.style.backgroundColor='#006144';">
                                        Nos tarifs
                                    </a>
                                </div>



                            </div>

                        </div> <!-- .accordion -->
                    </div> <!-- .faq-accordion-area -->

                </div>
            </div>
        </div>
    </div>
    </div>





<!-- why us -->
<div class="rts-about-area rts-section-gap bg-about-sm-shape" style="border-bottom: none !important;">
    <div class="container">
        <div class="row g-5 align-items-center">

            <div class="col-md-6 col-sm-12 col-12">
                <div class="rts-test-one-image-inner">
                    <img src="{{ asset('frontend/assets/images/SMILEY-AGAPEÌ.png') }}" alt="business_testimobials">
                </div>
            </div>

            <div class="col-md-6 col-sm-12 col-12 mt_md--50 mt_sm--50">
                <div class="rts-title-area">
                    <h2 class="title" style="color: #006144; font-weight: 800;">Ce qui nous distingue</h2>
                </div>
                <div class="about-inner" style="color: #000000;">
                    <ul style="padding-left: 20px;">
                        <li><strong>Une expertise reconnue :</strong> Nos intervenants sont le cœur de notre service. Chacune et chacun possède une <strong>expérience minimale de 3 ans</strong> auprès de personnes âgées, en perte d'autonomie ou en situation de handicap, garantissant un accompagnement professionnel et bienveillant.</li><br>
                        
                        <li><strong>Savoir-faire et savoir-être au service de l'humain :</strong> Nous avons spécifiquement adapté leurs compétences et leur savoir-être <strong>aux outils de l'éducation populaire.</strong> Cette approche unique nous permet d'assurer un service optimal, axé sur le maintien de l'autonomie et le bien-être global de la personne accompagnée.</li><br>
                        
                        <li><strong>Stabilité et confiance :</strong> Nous nous engageons à ce que les <strong>mêmes personnes</strong> accompagnent vos proches. Cette continuité est essentielle pour établir une relation de confiance durable et un accompagnement personnalisé qui répond au plus près des besoins de chacun.</li><br>
                        
                        <li><strong>Collaboration pour un suivi complet :</strong> Nos intervenants travaillent en <strong>collaboration étroite avec tous les professionnels à domicile</strong> (médecins, infirmiers, kinésithérapeutes, etc.) ainsi qu'avec la <strong>famille.</strong> Cette approche coordonnée garantit un suivi et une prise en charge globale de la personne, assurant une sérénité pour tous.</li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
</div>

    <div class="rts-faq-section rts-section-gap rts-faq-bg bg_image"
        style="background-color: rgb(255, 255, 255) !important;">
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
                                Chez <span
                                    style="font-weight: 1000; font-style: italic; font-family: cursive; font-size: 18px;">agapé</span>,
                                nous savons qu'il est normal d'avoir des questions lorsque l'on envisage une
                                aide à domicile, surtout en mode mandataire. Voici les réponses aux interrogations les plus
                                fréquentes pour vous éclairer.
                            </p>
                        </div>

                        <!-- faq accordion area -->
                        <div class="faq-accordion-area" style="scroll-margin-top: 100px;">
                            <div class="accordion" id="accordionExample">
							  
							      <!-- Question 1 -->
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseOne"
                                            aria-expanded="false" aria-controls="collapseOne">
                                            1. Qu’est-ce que le mode mandataire chez agapé ?
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse"
                                        aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            En mode mandataire, vous êtes l'employeur direct de votre auxiliaire de vie.
                                            <span
                                                style="font-weight: 1000; font-style: italic; font-family: cursive; font-size: 18px;">agapé</span>
                                            vous accompagne dans toutes les démarches administratives et de gestion : aide
                                            au recrutement, élaboration du contrat de travail, gestion des salaires et des
                                            déclarations Urssaf. Ce mode vous offre plus de flexibilité et un lien direct
                                            avec votre intervenant, tout en bénéficiant de notre expertise et de notre
                                            soutien.




                                        </div>
                                    </div>
                                </div>


                                <!-- QUESTION 2 -->
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
                                            sont toujours <strong>personnalisées </strong> selon vos besoins. Elles peuvent
                                            inclure :
                                            <ul>
                                                <li><strong>Aide à la personne : </strong> toilette, habillage, mobilité,
                                                    repas.</li>
                                                <li><strong>Aide à domicile : </strong> ménage, repassage, linge.</li>
                                                <li><strong>Préparation des repas : </strong> menus équilibrés, aide à la
                                                    prise.</li>
                                                <li><strong>Accompagnement :</strong> courses, rendez-vous, activités
                                                    sociales.</li>
                                                <li><strong>Soutien moral :</strong> présence, lutte contre l’isolement.
                                                </li>
                                                <li><strong>Aide administrative :</strong> documents, démarches simples.
                                                </li>
                                            </ul>
                                            Chaque plan d’aide est unique et défini avec vous.
                                        </div>
                                    </div>
                                </div>

							  
							   <!-- Question 3 -->
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false"
                                            aria-controls="collapseThree">
                                            3. Quels sont les délais pour mettre en place une aide à domicile ?
                                        </button>
                                    </h2>
                                    <div id="collapseThree" class="accordion-collapse collapse"
                                        aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            Nous nous efforçons d'être les plus réactifs possible. Une fois que nous avons
                                            bien compris vos besoins, la mise en place d'une aide à domicile peut
                                            généralement se faire dans un délai de <strong> quelques jours à une semaine.
                                            </strong> Ce délai dépendra de la disponibilité de l'intervenant idéal
                                            correspondant à votre profil et de la rapidité des démarches administratives
                                            (signature de contrat, etc.). Pour les situations urgentes, nous mettons tout en
                                            œuvre pour accélérer le processus.
                                        </div>
                                    </div>
                                </div>
							  
                                <!-- Répéter la même structure pour les autres questions -->
                                <!-- Question 4 -->
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingFour">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseFour"
                                            aria-expanded="false" aria-controls="collapseFour">
                                            4. Est-il possible de changer d’auxiliaire de vie en cours de prestation ?
                                        </button>
                                    </h2>
                                    <div id="collapseFour" class="accordion-collapse collapse"
                                        aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <strong> Oui, absolument. </strong> Votre confort et votre satisfaction sont nos
                                            priorités. Si, pour quelque raison que ce soit, le courant ne passe pas avec
                                            l'auxiliaire de vie choisi ou si vos besoins évoluent, il est tout à fait
                                            possible de demander un changement. Nous sommes là pour vous aider à trouver une
                                            nouvelle personne qui correspondra mieux à vos attentes et à votre personnalité.
                                            C'est l'un des avantages de notre approche personnalisée.
                                        </div>
                                    </div>
                                </div>

                                <!-- Question 5 -->
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingFive">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseFive"
                                            aria-expanded="false" aria-controls="collapseFive">
                                            4. Comment la continuité des services est-elle assurée (vacances, maladie) ?
                                        </button>
                                    </h2>
                                    <div id="collapseFive" class="accordion-collapse collapse"
                                        aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            En mode mandataire, puisque vous êtes l'employeur, nous vous aidons à anticiper
                                            les absences (vacances, maladie) de votre auxiliaire. Nous pouvons vous
                                            accompagner dans la recherche d'un <strong> remplaçant </strong> temporaire si
                                            votre intervenant habituel est absent, afin d'assurer une continuité des
                                            services. Nous vous conseillons sur les meilleures pratiques pour gérer ces
                                            situations.
                                        </div>
                                    </div>
                                </div>

                  

                                        </div>
                                    </div>
                                </div>

                                <!-- Question 6 -->
                                {{-- <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingSix">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false"
                                            aria-controls="collapseSix">
                                            6. Comment la qualité des intervenants est-elle garantie en mode mandataire ?
                                        </button>
                                    </h2>
                                    <div id="collapseSix" class="accordion-collapse collapse"
                                        aria-labelledby="headingSix" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                         Bien que vous soyez l'employeur,   <span
                                                style="font-weight: 1000; font-style: italic; font-family: cursive; font-size: 18px;">agapé</span> vous aide à recruter des intervenants qualifiés et expérimentés. Nous vous accompagnons dans la vérification de leurs compétences, de leurs références, et vous proposons des profils qui correspondent à vos besoins et à nos valeurs de bienveillance et de professionnalisme. Nous mettons à votre disposition des outils et des conseils pour vous aider à faire le meilleur choix.

                                        </div>
                                    </div>
                                </div> --}}
                                <p class="disc">
                                    Vous avez d'autres questions ? N'hésitez pas à nous contacter directement. Nous sommes
                                    là pour vous accompagner !


                                </p>
                            </div>
                        </div>
                        <!-- faq accordion area end -->

                    </div>
                </div>
            </div>
            {{-- <a href="{{asset('frontend/assets/TARIF_AGAPEÌ_.pdf')}}" style="top: 36px;position: relative;" class="mt-4 rts-btn btn-primary ml--20 ml_sm--5 header-one-btn quote-btn" target="_blank">Tarifs</a> --}}
        </div>
    </div>

@endsection
