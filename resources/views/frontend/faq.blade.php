@extends('layouts.frontend')
@section('title', 'FAQ')
@section('content')
    <!-- start breadcrumb area -->
    <div class="rts-breadcrumb-area breadcrumb-bg bg_image">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-sm-12 col-12 breadcrumb-1">
                    <h1 class="title">FAQ</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- end breadcrumb area -->

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
                            <span class="sub">ACCORDION</span>
                            <h2 class="title">Accordion Style One</h2>
                        </div>
                        <!-- faq accordion area -->
                        <div class="faq-accordion-area">
                            <div class="accordion" id="accordionExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            <span>01. </span> Que font les aides à domicile ? Quels services peuvent-elles offrir?
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
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            <span>02. </span> Comment intervenons nous ?
                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                        data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            Un contrat de mandat vous lie à <b>Agapé</b>. Vous <b>nous sollicitez</b> pour sélectionner et
                                            <b>recruter votre intervenant·e</b> à domicile, ainsi que pour gérer les formalités
                                            administratives (<b>contrat, bulletin de paie, déclarations sociales et
                                            patronales</b> auprès des organismes dédiés).<br>
                                            <b>Vous, accompagné·e par notre équipe, endossez</b> la totalité des tâches et
                                            responsabilités liées à votre statut. <b>Vous êtes lʼunique employeur direct</b> de
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
@endsection
