@extends('layouts.frontend')
@section('title', 'Actes quotidiens de la vie')
@section('content')
    <!-- start breadcrumb area -->
    <div class="rts-breadcrumb-area breadcrumb-bg bg_image notranslate">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 breadcrumb-1">
                    <h1 class="title">Actes quotidiens de la vie</h1>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="bread-tag">
                        <a href="{{ route('home') }}">Accueil</a>
                        <span> / </span>
                        <a href="#" class="active">Actes quotidiens de la vie</a>
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

                        <h4 class="title">Aide au lever et au coucher</h4>
                        <p class="disc">
                            Commencer et finir la journée dans de bonnes conditions est fondamental pour le bien-être physique et moral. Nos auxiliaires de vie assistent les bénéficiaires lors du passage du lit au fauteuil ou inversement, en veillant à leur confort et à leur sécurité. Chaque intervention est adaptée au rythme et aux habitudes de vie de la personne.
                        </p>

                        <h4 class="title">Toilette et douche</h4>
                        <p class="disc">
                            Nous apportons une aide à la toilette dans le respect de lʼintimité et des préférences de chacun. Que ce soit une toilette au lit ou en salle de bain, une douche complète ou une simple aide partielle, nos intervenants assurent ces gestes essentiels avec délicatesse et attention. Lʼobjectif : maintenir une bonne hygiène corporelle, prévenir les risques dʼinfections et préserver lʼestime de soi.
                        </p>

                        <h4 class="title">Élimination</h4>
                        <p class="disc">
                            Lʼassistance à lʼélimination inclut lʼaide à lʼutilisation des toilettes, le changement de protections ou encore la gestion de dispositifs médicaux spécifiques. Nos équipes interviennent avec discrétion et bienveillance, dans le respect total de la pudeur de la personne accompagnée. Ces gestes, aussi sensibles soient-ils, sont indispensables pour garantir la dignité et le confort au quotidien.
                        </p>

                        <h4 class="title">Habillage</h4>
                        <p class="disc">
                            Sʼhabiller est un acte dʼexpression de soi, mais il peut devenir difficile avec lʼâge ou la maladie. Nous aidons les bénéficiaires à choisir leurs vêtements, à sʼhabiller et se déshabiller, toujours dans le respect de leurs goûts, de leurs habitudes et de leur confort. Cet accompagnement permet à chacun de conserver son autonomie et sa confiance en soi.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End service details area -->
@endsection
