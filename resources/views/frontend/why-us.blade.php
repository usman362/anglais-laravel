@extends('layouts.frontend')
@section('title', 'Nos valeurs')
@section('content')
    <!-- start breadcrumb area -->
    <div class="rts-breadcrumb-area breadcrumb-bg bg_image notranslate">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 breadcrumb-1">
                    <h1 class="title">Nos valeurs</h1>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="bread-tag">
                        <a href="{{ route('home') }}">Accueil</a>
                        <span> / </span>
                        <a href="#" class="active">Nos valeurs</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end breadcrumb area -->

    <!-- rts about us section start -->
    <div class="rts-about-area rts-section-gap notranslate">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-12">
                    <div class="about-progress-inner">
                        <!-- inner start -->
                        <div class="inner">
                            <h4>Reconnaissance et revalorisation dʼun métier en tension</h4>
                            <p class="disc">
                                Chez nous, chaque parcours compte. Nous offrons des formations pour grandir ensemble, tout en reconnaissant lʼimportance précieuse de l'expérience acquise.
                            </p>

                            <h4>Partenariats</h4>
                            <p class="disc">
                                Comme des maillons dʼune même chaîne, nous unissons nos forces avec lʼassociation Projet Solidaire dans la Cité, Green Act et Julie Viau, pour tisser un réseau d'entraide et d'accompagnement chaleureux.
                            </p>

                            <h4>Vision holistique</h4>
                            <p class="disc">
                                Conscients que la qualité de nos services repose sur le bien-être de nos équipes, nous avons mis en place un programme de fidélisation complet. Celui- ci comprend des séances de sophrologie et de socio-esthétique pour favoriser la détente et lʼestime de soi, des groupes de parole pour un soutien psychologique et des avantages pour reconnaître leur engagement.
                            </p>


                            <h4>Offre personnalisée</h4>
                            <p class="disc">
                                Parce que nous sommes tous différents, nous proposons aux bénéficiaires de nos prestations une offre singulière en coordination avec tout les professionnels intervenant à domicile.
                                <br>
                                Unique <br> Individuelle <br> Personnalisée
                            </p>


                        </div>
                        <!-- end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- rts about us section end -->
@endsection
