@extends('layouts.frontend')
@section('title', 'Appui administratif personnalisé')
@section('content')
    <!-- start breadcrumb area -->
    <div class="rts-breadcrumb-area breadcrumb-bg bg_image notranslate">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 breadcrumb-1">
                    <h1 class="title">Appui administratif personnalisé</h1>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="bread-tag">
                        <a href="{{ route('home') }}">Accueil</a>
                        <span> / </span>
                        <a href="#" class="active">Appui administratif personnalisé</a>
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
                            Gérer ses papiers, comprendre des démarches ou rédiger un courrier peut devenir un véritable casse-tête, surtout face à des procédures de plus en plus dématérialisées. Chez Agapé, nous savons que lʼautonomie passe aussi par la maîtrise de lʼadministratif. Cʼest pourquoi nous proposons un accompagnement humain, patient et adapté à chaque situation.
                        </p>

                        <h4 class="title">Mise en place dʼactivités stimulantes</h4>
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

                        <h4 class="title">Rédaction de courriers et courriels</h4>
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
@endsection
