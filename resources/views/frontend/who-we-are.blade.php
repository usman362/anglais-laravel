@extends('layouts.frontend')
@section('title', 'Qui sommes-nous')
@section('content')
    <!-- start breadcrumb area -->
    <div class="rts-breadcrumb-area breadcrumb-bg bg_image">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 breadcrumb-1">
                    <h1 class="title">Qui sommes-nous</h1>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="bread-tag">
                        <a href="{{ route('home') }}">Accueil</a>
                        <span> / </span>
                        <a href="#" class="active">Qui sommes-nous</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end breadcrumb area -->

    <!-- rts about us section start -->
    <div class="rts-about-area rts-section-gap">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-12">
                    <div class="about-progress-inner">
                        <!-- inner start -->
                        <div class="inner">
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
                        <!-- end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- rts about us section end -->
@endsection
