@extends('layouts.frontend')
@section('content')
    <!-- start breadcrumb area -->
    <div class="rts-breadcrumb-area breadcrumb-bg bg_image">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 breadcrumb-1">
                    <h1 class="title">Service Details</h1>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="bread-tag">
                        <a href="{{ route('home') }}">Home</a>
                        <span> / </span>
                        <a href="#" class="active">Service Details</a>
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
                        <div class="thumbnail">
                            <img src="{{ asset('frontend/assets/images/service/01.jpg') }}" alt="business-area">
                        </div>
                        <h4 class="title">Business Growth Mangment</h4>
                        <p class="disc">
                            Continually myocardinate holistic mindshare with client-based web services. Assertively
                            e-enable catalysts for change before tested markets. Phosfluorescently maintain wireless
                            scenarios after intermandated applications. Conveniently predominate revolutionary quality
                            vectors through future-proof manufactured products. Enthusiastically transform distinctive
                            collaboration.

                        </p>
                        <p class="disc">
                            Intrinsicly coordinate multifunctional functionalities reliable potentialities. Objectively
                            envisioneer high in convergence through collaborative networks. Interactively generate B2C
                            e-tailers for business data restore fully researched relationships through resource
                            maximizing results.
                        </p>
                        <div class="row g-5 mt--30 mb--40">
                            <div class="col-lg-6">
                                <!-- single service details card -->
                                <div class="service-details-card">
                                    <div class="thumbnail">
                                        <img src="{{ asset('frontend/assets/images/service/icon/09.svg') }}" alt=""
                                            class="icon">
                                    </div>
                                    <div class="details">
                                        <h6 class="title">Instant Business Growth</h6>
                                        <p class="disc">Maintain wireless scerios after sure quality vectors future</p>
                                    </div>
                                </div>
                                <!-- single service details card End -->
                            </div>
                            <div class="col-lg-6">
                                <!-- single service details card -->
                                <div class="service-details-card">
                                    <div class="thumbnail">
                                        <img src="{{ asset('frontend/assets/images/service/icon/10.svg') }}" alt=""
                                            class="icon">
                                    </div>
                                    <div class="details">
                                        <h6 class="title">24/7 Quality Service</h6>
                                        <p class="disc">Maintain wireless scerios after sure quality vectors future</p>
                                    </div>
                                </div>
                                <!-- single service details card End -->
                            </div>
                            <div class="col-lg-6">
                                <!-- single service details card -->
                                <div class="service-details-card">
                                    <div class="thumbnail">
                                        <img src="{{ asset('frontend/assets/images/service/icon/11.svg') }}" alt=""
                                            class="icon">
                                    </div>
                                    <div class="details">
                                        <h6 class="title">Easy Customer Service</h6>
                                        <p class="disc">Maintain wireless scerios after sure quality vectors future</p>
                                    </div>
                                </div>
                                <!-- single service details card End -->
                            </div>
                            <div class="col-lg-6">
                                <!-- single service details card -->
                                <div class="service-details-card">
                                    <div class="thumbnail">
                                        <img src="{{ asset('frontend/assets/images/service/icon/12.svg') }}" alt=""
                                            class="icon">
                                    </div>
                                    <div class="details">
                                        <h6 class="title">Quality Cost Service</h6>
                                        <p class="disc">Maintain wireless scerios after sure quality vectors future</p>
                                    </div>
                                </div>
                                <!-- single service details card End -->
                            </div>
                        </div>
                        <p class="disc">
                            Phosfluorescently maintain wireless scenarios after intermandated applications. Conveniently
                            unique predominate revolutionary quality vectors through future-proof manufactured products.
                            Objectively envisioneer high solution convergence through collaborative networks.
                            Interactively generate B2C e-tailers for business data restore fully researched
                            relationships through resource maximizing results.
                        </p>
                    </div>
                    <div class="service-detials-step-2 mt--40">
                        <h4 class="title">3 Simple Steps to Process</h4>
                        <p class="disc mb--25">
                            Assertively e-enable catalysts for change before fully tested markets. Phosfluo rescently is
                            maintain solve wireless scenarios after intermandated applications. Conveniently predominate
                            busin revolutionary quality vectors through future-proof manufactured products.
                            Enthusiastically transform distinctive collaboration.
                        </p>
                        <p class="disc">
                            Phosfluorescently maintain wireless scenarios after intermandated applications. Conveniently
                            predominate misslat revolutionary quality vectors through future-proof manufactured
                            products.
                        </p>
                        <!-- stem-area start -->
                        <div class="row  mb--40 g-5 mb_md--20 mb_sm--20">
                            <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                                <div class="single-service-step text-center">
                                    <p class="step">01</p>
                                    <h6 class="title">
                                        STEP ONE
                                    </h6>
                                    <p class="disc">
                                        Tactical services through market web services
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                                <div class="single-service-step text-center">
                                    <p class="step">02</p>
                                    <h6 class="title">
                                        STEP TWO
                                    </h6>
                                    <p class="disc">
                                        Tactical services through market web services
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                                <div class="single-service-step text-center">
                                    <p class="step">03</p>
                                    <h6 class="title">
                                        STEP THREE
                                    </h6>
                                    <p class="disc">
                                        Tactical services through market web services
                                    </p>
                                </div>
                            </div>
                        </div>
                        <p class="disc">
                            Conveniently predominate revolutionary quality vectors through future-proof manufactured
                            products. Objectively envisioneer high in convergence through collaborative networks.
                            Interactively generate B2C tailers for business data restore fully researched relationships
                            through
                        </p>
                        <!-- stem-area End -->
                    </div>
                    <!-- service details left area end -->
                    <div class="service-detials-step-3 mt--70 mt_md--50">
                        <div class="row g-5 align-items-center">
                            <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="thumbnail sm-thumb-service">
                                    <img src="{{ asset('frontend/assets/images/service/sm-01.jpg') }}" alt="Service">
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12 mb_md--20 mb_sm--20">
                                <h4 class="title">Customer Benefits</h4>
                                <p class="disc">Catalysts for change before fully tested markets are maintain wireless
                                    scenarios after intermandated applications predominate revolutionary.</p>
                                <div class="single-banifits">
                                    <i class="far fa-check-circle"></i>
                                    <span>We use the latest diagnostic equipment</span>
                                </div>
                                <div class="single-banifits">
                                    <i class="far fa-check-circle"></i>
                                    <span>We are a member of Professional Service</span>
                                </div>
                                <div class="single-banifits">
                                    <i class="far fa-check-circle"></i>
                                    <span>Automotive service our clients receive</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End service details area -->
@endsection
