@extends('layouts.frontend')
@section('content')
    <!-- start breadcrumb area -->
    <div class="rts-breadcrumb-area breadcrumb-bg bg_image">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 breadcrumb-1">
                    <h1 class="title">Contact Us</h1>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="bread-tag">
                        <a href="{{ route('home') }}">Home</a>
                        <span> / </span>
                        <a href="#" class="active">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end breadcrumb area -->


    <!-- contact single area start -->
    <div class="rts-contact-area rts-section-gap">
        <div class="container">
            <div class="row g-5">
                <!-- single contact area -->
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="single-contact-one-inner">
                        <div class="content">
                            <div class="icone">
                                <img src="{{ asset('frontend/assets/images/contact/shape/01.svg') }}" alt="">
                            </div>
                            <div class="info">
                                <span>Call Us 24/7</span>
                                <a href="tel:+012345698701">
                                    <h5>+012345698701</h5>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- single contact area end -->
                <!-- single contact area -->
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="single-contact-one-inner">
                        <div class="content">
                            <div class="icone">
                                <img src="{{ asset('frontend/assets/images/contact/shape/02.svg') }}" alt="">
                            </div>
                            <div class="info">
                                <span>MAke A Quote</span>
                                <a href="mailto:info@example.com">
                                    <h5>info@example.com</h5>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- single contact area end -->
                <!-- single contact area -->
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="single-contact-one-inner">
                        <div class="content">
                            <div class="icone">
                                <img src="{{ asset('frontend/assets/images/contact/shape/03.svg') }}" alt="">
                            </div>
                            <div class="info">
                                <span>Service Station</span>
                                <a href="#">
                                    <h5>Lorem Ipsum Street.</h5>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- single contact area end -->
            </div>
        </div>
    </div>
    <!-- conact single area end -->

    <!-- bizup map area start -->
    <div class="rts-contact-map-area">
        <div class="contaciner-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="contact-map-area-fluid">
                        <iframe class="contact-map"
                            src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d14602.288851207937!2d90.47855065!3d23.798243149999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1663151706353!5m2!1sen!2sbd"
                            style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                        <img class="location" src="{{ asset('frontend/assets/images/contact/shape/location.svg') }}"
                            alt="Business_map">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- bizup map area end -->

    <!-- conact us form fluid start -->
    <div class="rts-contact-form-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="rts-contact-fluid rts-section-gap">
                        <div class="rts-title-area contact-fluid text-center mb--50">
                            <p class="pre-title">
                                Get In Touch
                            </p>
                            <h2 class="title">Needs Help? Let’s Get in Touch</h2>
                        </div>
                        <div class="form-wrapper">
                            <div id="form-messages"></div>
                            <form action="{{ route('store_contact_us') }}" method="post">
                                @csrf
                                <div class="name-email">
                                    <input type="text" name="name" placeholder="Your Name" required>
                                    <input type="email" name="email" placeholder="Email Address" required>
                                </div>
                                <input type="text" name="subject" placeholder="Your Subject">
                                <textarea placeholder="Type Your Message" name="message"></textarea>
                                <button type="submit" class="rts-btn btn-primary">Send Message</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- conact us form fluid end -->
@endsection
