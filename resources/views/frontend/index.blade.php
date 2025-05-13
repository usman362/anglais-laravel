@extends('layouts.frontend')
@section('title', 'Home')
@section('content')
    <!-- banner blank space area -->
    <div class="rts-banner-area rts-banner-one">
        <div class="swiper mySwiper banner-one">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <!-- banner single content -->
                    <div class="banner-one-inner text-start">
                        <p class="pre-title">
                            <span>Welcome!</span> Start Growing Your Business Today
                        </p>
                        <h1 class="title ">Make <span>Business Unique </span> <br>
                            With Great Ideas</h1>
                        <p class="disc banner-para">
                            Porttitor ornare fermentum aliquam pharetra facilisis gravida risus suscipit <br> Dui
                            feugiat
                            fusce conubia ridiculus tristique parturient
                        </p>
                        <a href="#" class="rts-btn btn-primary color-h-black">Get Consultant</a>
                        <img class="shape-img one" src="{{ asset('frontend/assets/images/banner/shape/01.png') }}"
                            alt="banner_business">
                    </div>
                    <!-- banner single content end -->
                </div>
                <div class="swiper-slide two">
                    <!-- banner single content -->
                    <div class="banner-one-inner text-start">
                        <p class="pre-title">
                            <span>Welcome!</span> Start Growing Your Business Today
                        </p>
                        <h1 class="title ">Launch <span>Ultra Modern</span> <br> Effective Business</h1>
                        <p class="disc banner-para">
                            Porttitor ornare fermentum aliquam pharetra facilisis gravida risus suscipit <br> Dui
                            feugiat
                            fusce conubia ridiculus tristique parturient
                        </p>
                        <a href="#" class="rts-btn btn-primary color-h-black">Get Consultant</a>
                        <img class="shape-img one" src="{{ asset('frontend/assets/images/banner/shape/01.png') }}"
                            alt="banner_business">
                    </div>
                    <!-- banner single content end -->
                </div>
                <div class="swiper-slide three">
                    <!-- banner single content -->
                    <div class="banner-one-inner text-start">
                        <p class="pre-title">
                            <span>Welcome!</span> Start Growing Your Business Today
                        </p>
                        <h1 class="title ">Make <span>Business Growth</span> <br> With Next Level</h1>
                        <p class="disc banner-para">
                            Porttitor ornare fermentum aliquam pharetra facilisis gravida risus suscipit <br> Dui
                            feugiat
                            fusce conubia ridiculus tristique parturient
                        </p>
                        <a href="#" class="rts-btn btn-primary color-h-black">Get Consultant</a>
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

    <!-- rts about us section start -->
    <div class="rts-about-area rts-section-gap bg-about-sm-shape">
        <div class="container">
            <div class="row g-5 align-items-center">
                <!-- about us -->
                <div
                    class="col-lg-12 col-md-12 col-sm-12 col-12 order-lg-1 order-md-2 order-sm-2 order-2 mt_md--50 mt_sm--50">
                    <div class="rts-title-area">
                        <p class="pre-title">
                            Qui sommes-nous
                        </p>
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
                <!-- our values -->
                <div
                    class="col-lg-12 col-md-12 col-sm-12 col-12 order-lg-1 order-md-2 order-sm-2 order-2 mt_md--50 mt_sm--50">
                    <div class="rts-title-area">
                        <p class="pre-title">
                            Nos valeurs
                        </p>
                        <h2 class="title">Nos valeurs</h2>
                    </div>
                    <div class="about-inner">
                        <p class="disc">
                            Nous assurons grâce à nos valeurs la fourniture et la qualité des prestations en sʼadaptant
                            à lʼunicité de chacun de vos besoins.
                        </p>

                        <p class="disc">
                            Les deux règles de base :
                        <ul>
                            <li>
                                Ne jamais prendre des engagements que lʼon ne peut tenir.
                            </li>
                            <li>
                                Ne jamais mentir aux clients.
                            </li>
                        </ul>
                        </p>

                        <p class="disc">
                            <b>La bien-traitance</b> Avec votre aide et lʼensemble des professionnels nous vous
                            proposons un accompagnement dans le respect de la dignité, de lʼautonomie et dans
                            lʼadaptation la plus juste à vos besoins des prestations personnalisées.
                        </p>
                        <p class="disc">

                            <b>La bienveillance</b> Agapé sʼengage à traiter avec une écoute attentive, une attitude
                            positive pour assurer votre accompagnement.
                        </p>
                        <p class="disc">
                            <b>Le mieux-être</b> Le maintien de votre bien-être physique, mental et social, que nous
                            favorisons en offrant des services adaptés à chaque individu.
                        </p>
                        <p class="disc">
                            <b>L'autonomie</b> Lʼobjectif est de vous permettre de conserver le maximum d'autonomie
                            possible dans votre vie quotidienne.
                        </p>
                        <p class="disc">
                            <b>L'humanité</b> Chez nous, lʼhumain est au cœur de nos préoccupations. Cela signifie créer
                            un environnement de travail agréable pour les intervenants·e·s et vous offrir un
                            accompagnement chaleureux.
                        </p>
                        <p class="disc">
                            <b>Le professionalisme</b> Les intervenants doivent être qualifiés et formés pour assurer
                            des prestations de qualité et adaptées aux besoins de chacun.
                        </p>
                    </div>
                </div>
                <!-- our values -->
            </div>
        </div>
    </div>



    <!-- our services -->

    <!-- our service area start -->
    <div class="rts-service-area rts-section-gapTop pb--200 service-two-bg bg_image">
        <div class="container">
            <div class="row g-5 service padding-controler">
                <div class="rts-title-area">
                    <p class="pre-title">
                        Nos prestations
                    </p>
                    <h2 class="title">Nos prestations</h2>
                </div>
                <!-- single service area -->
                <div class="col-xl-4 col-md-6 col-sm-12 col-12 pb--140 pb_md--100">
                    <div class="service-two-inner">
                        <a href="{{ route('service_details_1') }}" class="thumbnail"><img
                                src="{{ asset('frontend/assets/images/service/01.jpg') }}" alt="Business_image"></a>
                        <div class="body-content w-100">
                            <div class="hidden-area">
                                <h5 class="title">Accompagnement de fin de vie</h5>
                                <a class="rts-read-more-two color-primary" href="{{ route('service_details_1') }}">Read
                                    More<i class="far fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- single service area end-->
                <!-- single service area -->
                <div class="col-xl-4 col-md-6 col-sm-12 col-12 pb--140 pb_md--100">
                    <div class="service-two-inner">
                        <a href="{{ route('service_details_2') }}" class="thumbnail two"><img
                                src="{{ asset('frontend/assets/images/service/01.jpg') }}" alt="Business_image"></a>
                        <div class="body-content w-100">
                            <div class="hidden-area">
                                <h5 class="title">Actes quotidiens de la vie</h5>
                                <a class="rts-read-more-two color-primary" href="{{ route('service_details_2') }}">Read
                                    More<i class="far fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- single service area end-->
                <!-- single service area -->
                <div class="col-xl-4 col-md-6 col-sm-12 col-12 pb--140 pb_md--100">
                    <div class="service-two-inner">
                        <a href="{{ route('service_details_3') }}" class="thumbnail three"><img
                                src="{{ asset('frontend/assets/images/service/01.jpg') }}" alt="Business_image"></a>
                        <div class="body-content w-100">
                            <div class="hidden-area">
                                <h5 class="title">Entretien du cadre de vie</h5>
                                <a class="rts-read-more-two color-primary" href="{{ route('service_details_3') }}">Read
                                    More<i class="far fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- single service area end-->
                <!-- single service area -->
                <div class="col-xl-4 col-md-6 col-sm-12 col-12 pb--140 pb_md--100">
                    <div class="service-two-inner">
                        <a href="{{ route('service_details_4') }}" class="thumbnail four"><img
                                src="{{ asset('frontend/assets/images/service/01.jpg') }}" alt="Business_image"></a>
                        <div class="body-content w-100">
                            <div class="hidden-area">
                                <h5 class="title">Interaction sociale</h5>
                                <a class="rts-read-more-two color-primary" href="{{ route('service_details_4') }}">Read
                                    More<i class="far fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- single service area end-->
                <!-- single service area -->
                <div class="col-xl-4 col-md-6 col-sm-12 col-12 pb--140 pb_md--60">
                    <div class="service-two-inner">
                        <a href="{{ route('service_details_5') }}" class="thumbnail five"><img
                                src="{{ asset('frontend/assets/images/service/01.jpg') }}" alt="Business_image"></a>
                        <div class="body-content w-100">
                            <div class="hidden-area">
                                <h5 class="title">Appui administratif personnalisé</h5>
                                <a class="rts-read-more-two color-primary" href="{{ route('service_details_5') }}">Read
                                    More<i class="far fa-arrow-right"></i></a>
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
                <div
                    class="col-lg-12 col-md-12 col-sm-12 col-12 order-lg-1 order-md-2 order-sm-2 order-2 mt_md--50 mt_sm--50">
                    <div class="rts-title-area">
                        <p class="pre-title">
                            Ce qui fait notre différence
                        </p>
                        <h2 class="title">Ce qui fait notre différence</h2>
                    </div>
                    <div class="about-inner">
                        <h4>Reconnaissance et revalorisation dʼun métier en tension</h4>
                        <p class="disc">
                            Chez nous, chaque parcours compte. Nous offrons des formations pour grandir ensemble, tout en
                            reconnaissant lʼimportance précieuse de l'expérience acquise.
                        </p>

                        <h4>Partenariats</h4>
                        <p class="disc">
                            Comme des maillons dʼune même chaîne, nous unissons nos forces avec lʼassociation Projet
                            Solidaire dans la Cité, Green Act et Julie Viau, pour tisser un réseau d'entraide et
                            d'accompagnement chaleureux.
                        </p>

                        <h4>Vision holistique</h4>
                        <p class="disc">
                            Conscients que la qualité de nos services repose sur le bien-être de nos équipes, nous avons mis
                            en place un programme de fidélisation complet. Celui- ci comprend des séances de sophrologie et
                            de socio-esthétique pour favoriser la détente et lʼestime de soi, des groupes de parole pour un
                            soutien psychologique et des avantages pour reconnaître leur engagement.
                        </p>


                        <h4>Offre personnalisée</h4>
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
                            <span class="sub">FAQ</span>
                            <h2 class="title">FAQ</h2>
                        </div>
                        <!-- faq accordion area -->
                        <div class="faq-accordion-area">
                            <div class="accordion" id="accordionExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseOne" aria-expanded="true"
                                            aria-controls="collapseOne">
                                            <span>01. </span> Comment sont financées nos prestations ?
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse show"
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
                                            <span>02. </span> Comment intervenons nous ?
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




    {{-- Legal Pages --}}

    <!-- Legal 1 -->
    <div class="rts-about-area rts-section-gap bg-about-sm-shape">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div
                    class="col-lg-12 col-md-12 col-sm-12 col-12 order-lg-1 order-md-2 order-sm-2 order-2 mt_md--50 mt_sm--50">
                    <div class="rts-title-area">
                        <p class="pre-title">
                            Informations légales
                        </p>
                        <h2 class="title">Mentions légales</h2>
                    </div>
                    <!-- inner start -->
                    <div class="about-inner">
                        <p class="disc">
                            Conformément à lʼarticle 6 III1 et 19 de la loi n°2004575 du 21 juin 2004 pour la
                            confiance dans lʼéconomie numérique LCEN, il est précisé aux utilisateurs du site
                            agape-nantes.fr lʼidentité des différents intervenants dans le cadre de sa réalisation et de
                            son suivi.
                        </p>


                        <h4 class="title">1. Éditeur du site</h4>
                        <p class="disc">
                            Le présent site est la propriété de : SARL AGAPÉ au capital de 4 000 € - Immatriculée au
                            R.C.S. de Nantes sous le numéro 938 848 264
                            Siège social : 10 bis rue de la Basinerie, 44300 Nantes, France
                            Numéro dʼagrément SAP : (en attente de délivrance) Directrice de la publication : Ramziath
                            Arlène SALOU <br>
                            Téléphone : 06 12 10 98 22 <br>
                            E-mail : contact@agape-nantes.fr <br>
                            Site internet : www.agape-nantes.fr
                        </p>

                        <h4 class="title">2. Hébergeur</h4>
                        <p class="disc">
                            Le site est hébergé par : <br>
                            Infomaniak Network SA <br>
                            Rue Eugène-Marziano 25, 1227 Genève, Suisse <br> Site : https://www.infomaniak.com <br>
                            Téléphone : +41 22 820 35 44

                        </p>

                        <h4 class="title">3. Propriété intellectuelle</h4>
                        <p class="disc">
                            Lʼensemble des contenus présents sur ce site (textes, images, graphismes, logo, icônes,
                            etc.) est la propriété exclusive dʼAgapé, sauf mention contraire. <br>
                            Toute reproduction, distribution, modification, adaptation, retransmission ou publication,
                            même partielle, de ces éléments est strictement interdite sans l'accord écrit d'Agapé.
                        </p>

                        <h4 class="title">4. Responsabilité</h4>
                        <p class="disc">
                            Agapé met tout en œuvre pour fournir des informations précises et à jour sur son site.
                            Toutefois, elle ne saurait être tenue responsable des erreurs ou omissions, ni de
                            lʼutilisation ou de lʼinterprétation de ces informations.
                        </p>

                        <h4 class="title">5. Données personnelles</h4>
                        <p class="disc">
                            Les données personnelles collectées via le site sont destinées exclusivement à Agapé et sont
                            traitées conformément au Règlement Général sur la Protection des Données (RGPD). <br>
                            Pour toute demande dʼaccès, de rectification ou de suppression de vos données personnelles,
                            vous pouvez nous contacter à contact@agape- nantes.fr.
                        </p>

                        <h4 class="title">6. Crédit dʼimpôt & financement</h4>
                        <p class="disc">
                            Conformément à l'arrêté du 17 mars 2015, les consommateurs sont informés que les prestations
                            proposées par Agapé sont éligibles au crédit dʼimpôt pour lʼemploi dʼun salarié à domicile
                            (selon conditions en vigueur).
                            <br>
                            Des aides peuvent également être mobilisées  APA, PCH, mutuelles, aides
                            sociales, etc.
                        </p>

                    </div>
                    <!-- end -->


                </div>
            </div>
        </div>
    </div>

<br> <br> <br>
    <!-- Legal 2 -->
    <div class="rts-about-area bg-about-sm-shape">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div
                    class="col-lg-12 col-md-12 col-sm-12 col-12 order-lg-1 order-md-2 order-sm-2 order-2 mt_md--50 mt_sm--50">
                    <div class="rts-title-area">
                        <p class="pre-title">
                            Informations légales
                        </p>
                        <h2 class="title">Conditions Générales dʼUtilisation (CGU)</h2>
                    </div>

                    <!-- inner start -->
                    <div class="about-inner">
                        <p class="disc">
                            Dernière mise à jour  5 mai 2025 <br>
                            Bienvenue sur le site agape-nantes.fr, édité par la société AGAPÉ, SARL au capital de 4 000
                            €, immatriculée au R.C.S. de Nantes sous le numéro 938 848 264, dont le siège social est
                            situé au 10 bis rue de la Basinerie, 44300 Nantes - France.
                        </p>


                        <h4 class="title">1. Objet des CGU</h4>
                        <p class="disc">
                            Les présentes CGU ont pour objet de définir les modalités dʼaccès et dʼutilisation du site
                            internet https://agape-nantes.fr(ci-après « le Site ») ainsi que les droits et obligations
                            des utilisateurs et de lʼéditeur dans ce cadre. <br>
                            Lʼutilisation du Site implique lʼacceptation pleine et entière des présentes conditions
                            dʼutilisation.
                        </p>

                        <h4 class="title">2. Informations légales</h4>
                        <p class="disc">
                            Éditeur : AGAPÉ <br>
                            Directrice de la publication : Ramziath Arlène SALOU <br>
                            Adresse : 10 bis rue de la Basinerie, 44300 Nantes <br>
                            Téléphone : 06 12 10 98 22 <br>
                            Email : contact@agape-nantes.fr <br>
                            Site web : https://agape-nantes.fr <br>
                            SIREN : 938 848 264 <br>
                            Hébergeur : Infomaniak Network SA <br>
                            Rue Eugène-Marziano 25, 1227 Genève, Suisse <br>
                            https://www.infomaniak.com

                        </p>

                        <h4 class="title">3. Services proposés</h4>
                        <p class="disc">
                            Le site présente les prestations de services à la personne proposées par AGAPÉ, notamment :
                            aide à domicile, assistance administrative, accompagnement des personnes âgées ou en
                            situation de handicap. Ces services sont éligibles, selon conditions, aux avantages fiscaux
                            prévus par lʼarticle 199 sexdecies du Code général des impôts.
                        </p>

                        <h4 class="title">4. Accès au site</h4>
                        <p class="disc">
                            Le Site est accessible 24h/24 et 7j/7, sauf interruption programmée ou non, pour des besoins
                            de maintenance ou en cas de force majeure. AGAPÉ ne saurait être tenue responsable dʼun
                            quelconque dommage résultant dʼune indisponibilité du Site.
                        </p>

                        <h4 class="title">5. Propriété intellectuelle</h4>
                        <p class="disc">
                            Lʼensemble du Site relève de la législation française et internationale sur le droit
                            dʼauteur et la propriété intellectuelle. Toute reproduction, représentation, modification,
                            publication, adaptation, de tout ou partie des éléments du Site est interdite, sauf
                            autorisation écrite préalable de AGAPÉ.
                        </p>

                        <h4 class="title">6. Données personnelles</h4>
                        <p class="disc">
                            Conformément au Règlement Général sur la Protection des Données RGPD, AGAPÉ collecte des
                            données personnelles uniquement pour répondre aux demandes des utilisateurs et améliorer
                            lʼexpérience client. <br>
                            Pour plus de détails, consultez notre Politique de confidentialité. <br>
                            Droits des utilisateurs : droit dʼaccès, de rectification, dʼopposition, de suppression.
                            Pour toute demande, contactez : contact@agape-nantes.fr
                        </p>

                        <h4 class="title">7. Cookies</h4>
                        <p class="disc">
                            CLe Site utilise des cookies pour améliorer la navigation. Vous pouvez configurer votre
                            navigateur pour les refuser ou gérer vos préférences via le bandeau de consentement affiché
                            lors de votre première visite. <br>
                            Une page dédiée aux cookies vous informe de leur usage et de la durée de conservation.
                        </p>

                        <h4 class="title">8. Responsabilités</h4>
                        <p class="disc">
                            AGAPÉ ne saurait être tenue responsable :
                        <ul>
                            <li>En cas de mauvaise utilisation du site</li>
                            <li>De lʼimpossibilité dʼaccès ou de dysfonctionnements techniques</li>
                            <li>Des contenus externes vers lesquels le Site renvoie par des liens hypertextes</li>
                        </ul>
                        L'utilisateur est seul responsable de lʼusage quʼil fait des services et informations
                        disponibles sur le Site.
                        </p>


                        <h4 class="title">9. Modification des CGU</h4>
                        <p class="disc">
                            AGAPÉ se réserve le droit de modifier à tout moment les présentes CGU. La version applicable
                            est celle publiée sur le Site à la date de la navigation.
                        </p>


                        <h4 class="title">10. Droit applicable</h4>
                        <p class="disc">
                            Les présentes CGU sont régies par le droit français. En cas de litige, les tribunaux de
                            Nantes seront compétents.
                        </p>

                    </div>
                    <!-- end -->
                </div>
            </div>
        </div>
    </div>

<br> <br> <br>
    <!-- Legal 3 -->
    <div class="rts-about-area bg-about-sm-shape">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div
                    class="col-lg-12 col-md-12 col-sm-12 col-12 order-lg-1 order-md-2 order-sm-2 order-2 mt_md--50 mt_sm--50">
                    <div class="rts-title-area">
                        <p class="pre-title">
                            Informations légales
                        </p>
                        <h2 class="title">Conditions Générales de Vente (CGV)</h2>
                    </div>

                    <!-- inner start -->
                    <div class="about-inner">
                        <h4 class="title">Objet</h4>
                        <p class="disc">
                            Les présentes CGV sʼappliquent à toutes les prestations de services fournies par Agapé, dans le cadre des services à la personne.
                        </p>


                        <h4 class="title">Commande et contrat</h4>
                        <p class="disc">
                            Toute demande de prestation fait lʼobjet dʼun contrat de mandat entre le client et Agapé. Ce contrat précise les modalités, la nature des prestations et les tarifs. La signature du contrat vaut acceptation des présentes CGV.

                        </p>

                        <h4 class="title">Tarifs et facturation</h4>
                        <p class="disc">
                            Les tarifs sont indiqués sur devis personnalisé. Ils incluent les charges sociales et salaires des intervenants. Une facture est émise mensuellement. Le client bénéficie dʼun crédit dʼimpôt de 50 % selon la réglementation en vigueur.

                        </p>

                        <h4 class="title">Paiement</h4>
                        <p class="disc">
                            Le paiement s'effectue par prélèvement automatique ou virement bancaire sous 7 jours à réception de la facture. En cas de retard de paiement, des pénalités pourront être appliquées.
                        </p>

                        <h4 class="title">Droit de rétractation</h4>
                        <p class="disc">
                            Conformément à lʼarticle L22118 du Code de la consommation, le client particulier dispose dʼun délai de 14 jours à compter de la signature du contrat pour exercer son droit de rétractation sans avoir à motiver sa décision ni à supporter dʼautres coûts que ceux prévus par la loi. <br>
                            Cependant, conformément à lʼarticle L22125 du Code de la consommation, si le client souhaite que lʼexécution de la prestation commence avant la fin du délai de rétractation, il devra en faire la demande expresse par écrit (papier ou numérique). <br>
                            En cas dʼexercice du droit de rétractation après le début de lʼexécution de la prestation, les prestations effectivement réalisées seront dues au prorata du service fourni jusquʼà la date de réception de la demande de rétractation. Si la prestation a été entièrement réalisée, aucun remboursement ne pourra être exigé.
                        </p>

                        <h4 class="title">Résiliation</h4>
                        <p class="disc">
                            Le contrat peut être résilié à tout moment par lʼune ou lʼautre des parties, sous réserve de respecter un préavis de 15 jours. La résiliation doit se faire par écrit.
                        </p>

                        <h4 class="title">Litiges</h4>
                        <p class="disc">
                            En cas de litige, les parties tenteront de trouver une solution amiable. À défaut, le litige sera soumis aux tribunaux compétents du ressort de Nantes.
                            <br><br>
                            Pour toute question : contact@agape-nantes.fr
                        </p>

                    </div>
                    <!-- end -->
                </div>
            </div>
        </div>
    </div>

<br> <br> <br>
    <!-- Legal 4 -->
    <div class="rts-about-area bg-about-sm-shape">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div
                    class="col-lg-12 col-md-12 col-sm-12 col-12 order-lg-1 order-md-2 order-sm-2 order-2 mt_md--50 mt_sm--50">
                    <div class="rts-title-area">
                        <p class="pre-title">
                            Informations légales
                        </p>
                        <h2 class="title">Politique de confidentialité</h2>
                    </div>

                    <!-- inner start -->
                    <div class="about-inner">
                        <p class="disc">
                            La présente politique de confidentialité vise à informer les utilisateurs du
                            site https://agape-nantes.fr (ci-après « le Site »), édité par la société AGAPÉ, sur la
                            collecte et le traitement de leurs données personnelles conformément au Règlement Général
                            sur la Protection des Données (RGPD) et à la loi Informatique et Libertés.
                        </p>


                        <h4 class="title">1. Responsable du traitement</h4>
                        <p class="disc">
                            Le responsable du traitement est la société AGAPÉ
                        </p>

                        <h4 class="title">2. Données collectées</h4>
                        <p class="disc">

                            Lors de votre navigation sur le Site ou via les formulaires de contact, nous collectons les
                            données suivantes :
                        <ul>
                            <li>Nom et prénom</li>
                            <li>Adresse e-mail</li>
                            <li>Numéro de téléphone</li>
                            <li>Message / Demande</li>
                            <li>Données de navigation (cookies, adresse IP, type de navigateur...)</li>
                        </ul>
                        Aucune donnée sensible nʼest collectée sans consentement explicite.

                        </p>

                        <h4 class="title">3. Finalités du traitement</h4>
                        <p class="disc">
                            Les données personnelles sont utilisées pour :
                        <ul>
                            <li>Répondre à vos demandes via le formulaire de contact</li>
                            <li>Gérer la relation client et la prestation de service</li>
                            <li>Vous envoyer des informations ou devis personnalisés</li>
                            <li>Respecter les obligations légales et réglementaires</li>
                            <li>Améliorer la navigation sur le site</li>
                        </ul>
                        </p>

                        <h4 class="title">4. Base légale du traitement</h4>
                        <p class="disc">
                            Les traitements réalisés par AGAPÉ sont fondés sur :
                        <ul>
                            <li>Votre consentement (formulaire de contact, cookies)</li>
                            <li>Lʼexécution dʼun contrat ou de mesures précontractuelles</li>
                            <li>Le respect dʼune obligation légale (facturation, fiscalité)</li>
                            <li>Lʼintérêt légitime dʼAGAPÉ pour la sécurité du site et la gestion commerciale</li>
                        </ul>
                        </p>

                        <h4 class="title">5. Destinataires des données</h4>
                        <p class="disc">
                            Les données sont destinées exclusivement à AGAPÉ. <br>
                            Elles peuvent être communiquées à des prestataires techniques (hébergeur, solution de
                            messagerie) agissant pour le compte de AGAPÉ et soumis à une obligation de confidentialité.
                        </p>

                        <h4 class="title">6. Durée de conservation</h4>
                        <p class="disc">
                            Les données sont conservées :
                        <ul>
                            <li>3 ans pour les contacts inactifs (prospection)</li>
                            <li>5 à 10 ans pour les clients, conformément aux obligations comptables</li>
                            <li>13 mois maximum pour les cookies</li>
                        </ul>
                        </p>

                        <h4 class="title">7. Vos droits</h4>
                        <p class="disc">
                            Conformément à la réglementation, vous disposez des droits suivants :
                        <ul>
                            <li>Droit dʼaccès</li>
                            <li>Droit de rectification</li>
                            <li>Droit à lʼeffacement</li>
                            <li>Droit à la limitation du traitement</li>
                            <li>Droit dʼopposition</li>
                            <li>Droit à la portabilité</li>
                            <li>Droit de retirer votre consentement à tout moment</li>
                        </ul>
                        Pour exercer vos droits, écrivez à : contact@agape-nantes.fr <br>
                        Vous pouvez également déposer une réclamation auprès de la CNIL : www.cnil.fr
                        </p>

                        <h4 class="title">8. Sécurité</h4>
                        <p class="disc">
                            AGAPÉ met en œuvre des mesures techniques et organisationnelles appropriées pour garantir la
                            sécurité, la confidentialité et lʼintégrité de vos données.
                        </p>

                        <h4 class="title">9. Cookies</h4>
                        <p class="disc">
                            Le Site utilise des cookies pour améliorer lʼexpérience utilisateur. Pour en savoir plus ou
                            configurer vos préférences, consultez la Politique de cookies.
                        </p>

                    </div>
                    <!-- end -->
                </div>
            </div>
        </div>
    </div>
@endsection
