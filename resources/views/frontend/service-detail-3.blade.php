@extends('layouts.frontend')
@section('title', 'Entretien du cadre de vie')
@section('content')
    <!-- start breadcrumb area -->
    <div class="rts-breadcrumb-area breadcrumb-bg bg_image">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 breadcrumb-1">
                    <h1 class="title">Entretien du cadre de vie</h1>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="bread-tag">
                        <a href="{{ route('home') }}">Accueil</a>
                        <span> / </span>
                        <a href="#" class="active">Entretien du cadre de vie</a>
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
                            Vivre chez soi, dans un environnement propre, organisé et sécurisé, est fondamental pour le
                            bien-être et lʼautonomie. Chez Agapé, nous proposons un accompagnement global, à la fois
                            pratique et humain, pour permettre à chacun de vivre sereinement au quotidien, même en situation
                            de fragilité.
                        </p>

                        <h4 class="title">Ménage et entretien du cadre de vie</h4>
                        <p class="disc">
                            Nos aides à domicile assurent lʼentretien régulier du logement selon les besoins et les attentes
                            du bénéficiaire. Cela comprend :
                        <ul>
                            <li>Le dépoussiérage des surfaces</li>
                            <li>Le nettoyage des sols, sanitaires et pièces de vie</li>
                            <li>Le rangement et lʼaération des espaces</li>
                            <li>La désinfection de certaines zones sensibles (plan de travail, poignées, etc.)</li>
                        </ul>
                        Chaque intervention est réalisée avec soin, dans le respect des habitudes de vie de la personne et
                        avec des produits adaptés à son environnement.
                        </p>

                        <h4 class="title">Courses et approvisionnement</h4>
                        <p class="disc">
                            Les courses peuvent représenter une vraie contrainte, notamment pour les personnes âgées ou à
                            mobilité réduite. Nos intervenants peuvent :
                        <ul>
                            <li>Accompagner le bénéficiaire en magasin</li>
                            <li>Réaliser les achats à sa place, selon une liste définie</li>
                            <li>Aider au rangement des produits au domicile</li>
                        </ul>
                        Les choix alimentaires, les préférences, les régimes spécifiques ou les restrictions médicales sont
                        toujours pris en compte.
                        </p>

                        <h4 class="title">Aide à la préparation des repas</h4>
                        <p class="disc">
                            Cuisiner devient parfois difficile, voire impossible. Nos équipes accompagnent les bénéficiaires
                            dans la préparation de repas équilibrés, savoureux et adaptés à leur état de santé. Selon les
                            besoins, cela peut aller dʼune aide ponctuelle à une préparation complète, en veillant à
                            conserver les habitudes alimentaires et les traditions culinaires de chacun.
                        </p>

                        <h4 class="title">Aide à la prise des repas</h4>
                        <p class="disc">
                            Lorsque la personne a besoin dʼaide pour sʼinstaller à table, découper les aliments ou manger,
                            nos intervenants sont présents pour lʼaccompagner en douceur, sans la brusquer ni la rendre
                            dépendante. Ce moment est aussi une opportunité dʼéchange et de convivialité, essentielle pour
                            lutter contre lʼisolement.
                        </p>

                        <h4 class="title">Prise de médicaments selon ordonnance</h4>
                        <p class="disc">
                            La bonne observance dʼun traitement médical est cruciale pour la santé. Nos auxiliaires de vie
                            sʼassurent que les médicaments sont pris aux bons moments, dans le respect strict des
                            prescriptions médicales. Ils peuvent également signaler tout oubli ou effet indésirable à la
                            famille ou aux professionnels de santé.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End service details area -->
@endsection
