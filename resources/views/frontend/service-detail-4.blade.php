@extends('layouts.frontend')
@section('title', 'Interaction sociale')
@section('content')
    <!-- start breadcrumb area -->
    <div class="rts-breadcrumb-area breadcrumb-bg bg_image">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 breadcrumb-1">
                    <h1 class="title">Interaction sociale</h1>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="bread-tag">
                        <a href="{{ route('home') }}">Home</a>
                        <span> / </span>
                        <a href="#" class="active">Interaction sociale</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end breadcrumb area -->

    <!-- start service details area -->
    <div class="rts-service-details-area rts-section-gap">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-12">
                    <!-- service details left area start -->
                    <div class="service-detials-step-1">
                        <p class="disc">
                            Chez Agapé, nous sommes convaincus que lʼaccompagnement ne se limite pas aux gestes techniques.
                            Le lien humain, la communication et la
                            stimulation sont essentiels pour maintenir une qualité de vie, une bonne santé mentale et un
                            sentiment dʼutilité.
                        </p>

                        <p class="disc">
                            La solitude, fréquente chez les personnes âgées ou isolées, peut nuire gravement au moral et au
                            bien-être. Cʼest pourquoi nous plaçons la relation humaine au cœur de nos interventions.
                        </p>

                        <p class="disc">
                            Nos intervenants favorisent un cadre dʼéchange chaleureux et rassurant, propice à la parole, au
                            partage et à lʼécoute. Ils encouragent les sorties, les promenades, les discussions, et
                            accompagnent les personnes à des événements, rendez-vous ou rencontres.
                        </p>

                        <p class="disc">
                            Nous travaillons également avec des associations locales de lien social, afin dʼouvrir des
                            opportunités de rencontres, dʼactivités collectives ou dʼengagement bénévole, selon les envies
                            de la personne.
                        </p>

                        <h4 class="title">Mise en place dʼactivités stimulantes</h4>
                        <p class="disc">
                            Pour entretenir la mémoire, la concentration, la motricité ou simplement le plaisir de faire,
                            nos équipes proposent des activités personnalisées et adaptées :
                        <ul>
                            <li>Jeux de société, mots croisés, lecture</li>
                            <li>Activités manuelles : tricot, peinture, dessin</li>
                            <li>Jardinage, cuisine, musique ou chant</li>
                            <li>Sorties culturelles, petites promenades...</li>
                        </ul>
                        Ces moments permettent de stimuler les fonctions cognitives tout en valorisant les talents et les
                        passions de chacun.
                        </p>

                        <h4 class="title">Dame de compagnie</h4>
                        <p class="disc">
                            La présence dʼune dame de compagnie est précieuse pour les personnes seules ou en perte
                            dʼautonomie. Elle peut :
                        <ul>
                            <li>Être une oreille attentive et bienveillante</li>
                            <li>Accompagner dans les tâches du quotidien</li>
                            <li>Offrir un véritable soutien moral</li>
                            <li>Aider à maintenir une routine sociale</li>
                        </ul>
                        Ce service contribue à rompre lʼisolement, prévenir la dépression et créer un environnement de vie
                        plus doux, plus humain.
                        </p>

                        <p class="disc">
                            Chez Agapé, nous croyons que le bien-être passe aussi par le cœur. Cʼest pourquoi nous mettons
                            un point dʼhonneur à préserver, voire renforcer, le lien social des personnes que nous
                            accompagnons. Parce que chaque sourire, chaque mot échangé, est une victoire contre la solitude
                        </p>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End service details area -->
@endsection
