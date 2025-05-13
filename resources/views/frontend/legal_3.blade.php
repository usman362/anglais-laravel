@extends('layouts.frontend')
@section('title', 'Conditions Générales de Vente (CGV)')
@section('content')
    <!-- start breadcrumb area -->
    <div class="rts-breadcrumb-area breadcrumb-bg bg_image">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 breadcrumb-1">
                    <h1 class="title">Conditions Générales de Vente (CGV)</h1>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="bread-tag">
                        <a href="{{ route('home') }}">Accueil</a>
                        <span> / </span>
                        <a href="#" class="active">Conditions Générales de Vente (CGV)</a>
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
    </div>
    <!-- rts about us section end -->
@endsection
