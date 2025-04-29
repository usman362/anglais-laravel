@extends('layouts.frontend')
@section('content')

<!-- banner blank space area -->
<div class="rts-banner-area rts-banner-one">
    <div class="swiper mySwiper banner-one">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <!-- banner single content -->
                <div class="banner-one-inner text-start">
                    <p class="pre-title">
                        <span>Welcome!</span> Start Growing Your Business Today
                    </p>
                    <h1 class="title ">Make <span>Business Unique </span> <br>
                        With Great Ideas</h1>
                    <p class="disc banner-para">
                        Porttitor ornare fermentum aliquam pharetra facilisis gravida risus suscipit <br> Dui
                        feugiat
                        fusce conubia ridiculus tristique parturient
                    </p>
                    <a href="#" class="rts-btn btn-primary color-h-black">Get Consultant</a>
                    <img class="shape-img one" src="{{asset('frontend/assets/images/banner/shape/01.png')}}" alt="banner_business">
                </div>
                <!-- banner single content end -->
            </div>
            <div class="swiper-slide two">
                <!-- banner single content -->
                <div class="banner-one-inner text-start">
                    <p class="pre-title">
                        <span>Welcome!</span> Start Growing Your Business Today
                    </p>
                    <h1 class="title ">Launch <span>Ultra Modern</span> <br> Effective Business</h1>
                    <p class="disc banner-para">
                        Porttitor ornare fermentum aliquam pharetra facilisis gravida risus suscipit <br> Dui
                        feugiat
                        fusce conubia ridiculus tristique parturient
                    </p>
                    <a href="#" class="rts-btn btn-primary color-h-black">Get Consultant</a>
                    <img class="shape-img one" src="{{asset('frontend/assets/images/banner/shape/01.png')}}" alt="banner_business">
                </div>
                <!-- banner single content end -->
            </div>
            <div class="swiper-slide three">
                <!-- banner single content -->
                <div class="banner-one-inner text-start">
                    <p class="pre-title">
                        <span>Welcome!</span> Start Growing Your Business Today
                    </p>
                    <h1 class="title ">Make <span>Business Growth</span> <br> With Next Level</h1>
                    <p class="disc banner-para">
                        Porttitor ornare fermentum aliquam pharetra facilisis gravida risus suscipit <br> Dui
                        feugiat
                        fusce conubia ridiculus tristique parturient
                    </p>
                    <a href="#" class="rts-btn btn-primary color-h-black">Get Consultant</a>
                    <img class="shape-img one" src="{{asset('frontend/assets/images/banner/shape/01.png')}}" alt="banner_business">
                </div>
                <!-- banner single content end -->
            </div>
        </div>
        <div class="swiper-pagination"></div>
    </div>
    <div class="animation-img">
        <img class="shape-img two" src="{{asset('frontend/assets/images/banner/shape/02.png')}}" alt="banner_business">
        <img class="shape-img three" src="{{asset('frontend/assets/images/banner/shape/03.png')}}" alt="banner_business">
    </div>
</div>
<!-- banner blank space area end -->

<!-- rts about us section start -->
<div class="rts-about-area rts-section-gap bg-about-sm-shape">
    <div class="container">
        <div class="row g-5 align-items-center">
            <!-- about left -->
            <div class="col-lg-6 col-md-12 col-sm-12 col-12 order-lg-1 order-md-2 order-sm-2 order-2 mt_md--50 mt_sm--50">
                <div class="rts-title-area">
                    <p class="pre-title">
                        More About Us
                    </p>
                    <h2 class="title">We Provide Best Business
                        Solution in Town</h2>
                </div>
                <div class="about-inner">
                    <p class="disc">
                        Porttitor ornare fermentum aliquam pharetra ut facilisis gravida risus suscipit. dui feugiat
                        fusce conubia ridiculus tristique parturient natoque vulputate risu
                        business solution ceter 24/7 great support
                    </p>
                    <!-- start about success area -->
                    <div class="row about-success-wrapper">
                        <!-- left wrapper start -->
                        <div class="col-lg-6 col-md-6">
                            <div class="single">
                                <i class="far fa-check"></i>
                                <p class="details">24/7 Call Services Avilable</p>
                            </div>
                            <div class="single">
                                <i class="far fa-check"></i>
                                <p class="details">Great Skilled Consultant</p>
                            </div>
                            <div class="single">
                                <i class="far fa-check"></i>
                                <p class="details">Expert Team Members</p>
                            </div>
                        </div>
                        <!-- left wrapper end -->
                        <div class="col-lg-6 col-md-6">
                            <div class="single">
                                <i class="far fa-check"></i>
                                <p class="details">How to improve business
                                </p>
                            </div>
                            <div class="single">
                                <i class="far fa-check"></i>
                                <p class="details">Business is the best plan</p>
                            </div>
                            <div class="single">
                                <i class="far fa-check"></i>
                                <p class="details">Services we provide</p>
                            </div>
                        </div>
                    </div>
                    <!-- start about success area -->

                    <!-- about founder & get in touch start -->
                    <div class="row about-founder-wrapper align-items-center mt--40">
                        <!-- left area start -->
                        <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                            <div class="author-inner">
                                <a class="thumbnail" href="#"><img src="{{asset('frontend/assets/images/about/sm-01.png')}}" alt="finbiz_founder"></a>
                                <div class="founder-details">
                                    <a href="team-details.html">
                                        <h6 class="title">Adrew David</h6>
                                    </a>
                                    <span>CEO & Founder</span>
                                </div>
                            </div>
                        </div>
                        <!-- left area end -->
                        <!-- right founder area -->
                        <div class="col-lg-6 col-md-6 col-sm-6 col-12 mt_sm--20">
                            <div class="author-call-option">
                                <img class="authore-call" src="{{asset('frontend/assets/images/about/call.svg')}}" alt="call_founder">
                                <div class="call-details">
                                    <span>Call us anytime</span>
                                    <a href="tel:+18475555555">
                                        <h6 class="title">+256 21458.2146</h6>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- left founder area -->
                    </div>
                    <!-- about founder & get in touch end -->
                </div>
            </div>
            <!-- about right -->

            <!-- about-right Start-->
            <div class="col-lg-6 col-md-12 col-sm-12 col-12 order-lg-2 order-md-1 order-sm-1 order-1">
                <div class="about-one-thumbnail">
                    <img src="{{asset('frontend/assets/images/about/main/about-01.png')}}" alt="about-finbiz">
                    <img class="small-img" src="{{asset('frontend/assets/images/about/main/about-02.png')}}" alt="finbiz-small">
                    <div class="experience">
                        <div class="left single">
                            <h2 class="title">25+</h2>
                            <p class="time">Years</p>
                        </div>
                        <div class="right single">
                            <p class="disc">
                                Of experience
                                in consulting
                                service
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- about-right end -->
        </div>
    </div>
</div>
<!-- rts about us section end -->



<!-- business goal area -->
<div class="rts-business-goal mt--0 rts-section-gapBottom">
    <div class="container">
        <div class="row">
            <!-- business goal left -->
            <div class="col-lg-6">
                <div class="business-goal-one">
                    <img src="{{asset('frontend/assets/images/business-goal/01.jpg')}}" alt="Business_Goal">
                    <img class="small" src="{{asset('frontend/assets/images/business-goal/sm-01.jpg')}}" alt="Business_Goal">
                </div>
            </div>
            <!-- business goal right -->

            <!-- right area business -->
            <div class="col-lg-6 mt--35 mt_md--70 mt_sm--70">
                <div class="business-goal-right">
                    <div class="rts-title-area business text-start pl--30">
                        <p class="pre-title">
                            JUST A CONSULTANCY
                        </p>
                        <h2 class="title">We know how to manage
                            business globally</h2>
                    </div>
                    <div class="rts-business-goal pl--30">
                        <div class="single-goal">
                            <img src="{{asset('frontend/assets/images/business-goal/icon/01.svg')}}" alt="business_Icone" class="thumb">
                            <div class="goal-wrapper">
                                <h6 class="title">Best Business Consulting</h6>
                                <p class="disc">Fusce condimentum mattis placerat odio donec lacus porta torquent,
                                    mauris gravida rutrum</p>
                            </div>
                        </div>
                        <div class="single-goal">
                            <img src="{{asset('frontend/assets/images/business-goal/icon/02.svg')}}" alt="business_Icone" class="thumb">
                            <div class="goal-wrapper">
                                <h6 class="title">24/7 Customer Support</h6>
                                <p class="disc">Fusce condimentum mattis placerat odio donec lacus porta torquent,
                                    mauris gravida rutrum</p>
                            </div>
                        </div>
                        <div class="goal-button-wrapper mt--70">
                            <a href="{{route('contact_us')}}" class="rts-btn btn-primary color-h-black">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- right area business ENd -->
        </div>
    </div>
</div>
<!-- business goal area End -->

<!-- rts-counter up area start -->
<div class="rts-counter-up-area rts-section-gap counter-bg">
    <div class="container">
        <div class="row">
            <!-- counter up area -->
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                <div class="single-counter">
                    <img src="{{asset('frontend/assets/images/counterup/icon/01.svg')}}" alt="Business_counter">
                    <div class="counter-details">
                        <h2 class="title"><span class="counter animated fadeInDownBig">858</span></h2>
                        <p class="disc">Successful Projects</p>
                    </div>
                </div>
            </div>
            <!-- counter up area -->
            <!-- counter up area -->
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                <div class="single-counter pl--10 justify-content-center two pl--30">
                    <img src="{{asset('frontend/assets/images/counterup/icon/02.svg')}}" alt="Business_counter">
                    <div class="counter-details">
                        <h2 class="title"><span class="counter animated fadeInDownBig">650</span></h2>
                        <p class="disc">Media Activities</p>
                    </div>
                </div>
            </div>
            <!-- counter up area -->
            <!-- counter up area -->
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                <div class="single-counter pl--10 justify-content-center three pl--50">
                    <img src="{{asset('frontend/assets/images/counterup/icon/03.svg')}}" alt="Business_counter">
                    <div class="counter-details">
                        <h2 class="title"><span class="counter animated fadeInDownBig">567</span></h2>
                        <p class="disc">Skilled Experts</p>
                    </div>
                </div>
            </div>
            <!-- counter up area -->
            <!-- counter up area -->
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                <div class="single-counter pl--10 justify-content-end four">
                    <img src="{{asset('frontend/assets/images/counterup/icon/04.svg')}}" alt="Business_counter">
                    <div class="counter-details">
                        <h2 class="title happy"><span class="counter animated fadeInDownBig">28</span></h2>
                        <p class="disc">Happy Clients</p>
                    </div>
                </div>
            </div>
            <!-- counter up area -->
        </div>
    </div>
</div>
<!-- rts-counter up area end -->

<!-- start team section -->
<div class="rts-team-area rts-section-gap style-3 bg-team">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="rts-title-area team text-center">
                    <p class="pre-title">
                        Professionals Team
                    </p>
                    <h2 class="title">Professionals Team</h2>
                </div>
            </div>
        </div>
        <div class="row g-5 mt--0">

            <div class="swiper mySwiperh1_team">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="team-inner-two inner">
                            <div class="thumbnail">
                                <a href="team-details.html"><img src="{{asset('frontend/assets/images/team/tm/06.jpg')}}" alt=""></a>
                                <div class="social">
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                            <!-- Acquaintance area -->
                            <div class="inner-content">
                                <div class="header">
                                    <h5 class="title">Beckett Hayden</h5>
                                    <span>UX DESIGNER</span>
                                </div>
                            </div>
                            <!-- Acquaintance area -->
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="team-inner-two inner">
                            <div class="thumbnail">
                                <a href="team-details.html"><img src="{{asset('frontend/assets/images/team/tm/07.jpg')}}" alt=""></a>
                                <div class="social">
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                            <!-- Acquaintance area -->
                            <div class="inner-content">
                                <div class="header">
                                    <h5 class="title">Julian Wyat</h5>
                                    <span>MANAGER</span>
                                </div>
                            </div>
                            <!-- Acquaintance area -->
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="team-inner-two inner">
                            <div class="thumbnail">
                                <a href="team-details.html"><img src="{{asset('frontend/assets/images/team/tm/08.jpg')}}" alt=""></a>
                                <div class="social">
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                            <!-- Acquaintance area -->
                            <div class="inner-content">
                                <div class="header">
                                    <h5 class="title">Hake Mowana</h5>
                                    <span>FOUNDER</span>
                                </div>
                            </div>
                            <!-- Acquaintance area -->
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="team-inner-two inner">
                            <div class="thumbnail">
                                <a href="team-details.html"><img src="{{asset('frontend/assets/images/team/tm/09.jpg')}}" alt=""></a>
                                <div class="social">
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                            <!-- Acquaintance area -->
                            <div class="inner-content">
                                <div class="header">
                                    <h5 class="title">Oulian Miyako</h5>
                                    <span>FINANCE MANAGER</span>
                                </div>
                            </div>
                            <!-- Acquaintance area -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end team section -->

<!-- rts features area start -->
<div class="rts-feature-area rts-section-gap">
    <div class="container-fluid padding-controler plr--120">
        <div class="row bg-white-feature  pt--120 pb--120">
            <div class="col-xl-6 col-lg-12">
                <div class="feature-left-area">
                    <img src="{{asset('frontend/assets/images/feature/01.png')}}" alt="">
                </div>
            </div>
            <div class="col-xl-6 col-lg-12">
                <div class="rts-title-area feature text-start pl--30 pl_sm--0">
                    <p class="pre-title">
                        Boost Your Business Today
                    </p>
                    <h2 class="title feature-title">Most Reliable Efficient <br>
                        Consulting Agency</h2>
                    <p>Porttitor ornare fermentum aliquam pharetra ut facilisis gravida risus suscipit feugiat fusce
                        conubia ridiculus tristique solving parturient natoque vulputate risu hasellus quam
                        tincidunt posuere aliquam accumsan</p>

                </div>

                <div class="feature-one-wrapper pl--30 mt--40 pl_sm--0">
                    <div class="single-feature-one">
                        <i class="fal fa-check"></i>
                        <p>Fast Growing Sells</p>
                    </div>
                    <div class="single-feature-one">
                        <i class="fal fa-check"></i>
                        <p>24/7 Quality Services</p>
                    </div>
                    <div class="single-feature-one">
                        <i class="fal fa-check"></i>
                        <p>Expert Members</p>
                    </div>
                    <div class="single-feature-one">
                        <i class="fal fa-check"></i>
                        <p>Best Quality Services</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- rts features area end -->

<!-- start client feed back section -->
<div class="rts-client-feedback">
    <div class="container">
        <div class="row">
            <!-- start testimonials area -->
            <div class="col-lg-7">
                <div class="rts-title-area reviews text-start pl--30 pt--70">
                    <p class="pre-title">
                        Our Testimonials
                    </p>
                    <h2 class="title">Client’s Feedbacks</h2>

                    <!-- swiper area start -->
                    <div class="swiper mySwipertestimonial">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="testimonial-inner">
                                    <p class="disc text-start">
                                        “Consectetur adipiscing elit velit porta sapien purus erat nec, a ornare
                                        laoreet sem gravida accumsan in commodo aliquet nascetur maecenas. Sem
                                        tempus hendrerit diam mauris leo magna sociosqu viverra, accumsan massa
                                        tristique egestas cum sodales hac lacinia feugiat scelerisque porttitor”
                                    </p>
                                    <div class="testimonial-bottom-one">
                                        <div class="thumbnail">
                                            <img src="{{asset('frontend/assets/images/testimonials/02.png')}}" alt="business-testimonials">
                                        </div>
                                        <div class="details">
                                            <a href="#">
                                                <h5 class="title">David Smith</h5>
                                            </a>
                                            <span>JHKL Owner</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testimonial-inner">
                                    <p class="disc text-start">
                                        “Consectetur adipiscing elit velit porta sapien purus erat nec, a ornare
                                        laoreet sem gravida accumsan in commodo aliquet nascetur maecenas. Sem
                                        tempus hendrerit diam mauris leo magna sociosqu viverra, accumsan massa
                                        tristique egestas cum sodales hac lacinia feugiat scelerisque porttitor”
                                    </p>
                                    <div class="testimonial-bottom-one">
                                        <div class="thumbnail">
                                            <img src="{{asset('frontend/assets/images/testimonials/02.png')}}" alt="business-testimonials">
                                        </div>
                                        <div class="details">
                                            <a href="#">
                                                <h5 class="title">David Smith</h5>
                                            </a>
                                            <span>JHKL Owner</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testimonial-inner">
                                    <p class="disc text-start">
                                        “Consectetur adipiscing elit velit porta sapien purus erat nec, a ornare
                                        laoreet sem gravida accumsan in commodo aliquet nascetur maecenas. Sem
                                        tempus hendrerit diam mauris leo magna sociosqu viverra, accumsan massa
                                        tristique egestas cum sodales hac lacinia feugiat scelerisque porttitor”
                                    </p>
                                    <div class="testimonial-bottom-one">
                                        <div class="thumbnail">
                                            <img src="{{asset('frontend/assets/images/testimonials/02.png')}}" alt="business-testimonials">
                                        </div>
                                        <div class="details">
                                            <a href="#">
                                                <h5 class="title">David Smith</h5>
                                            </a>
                                            <span>JHKL Owner</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                    </div>
                    <!-- swiper area end -->
                </div>
            </div>
            <!-- end testimonials are -->
            <!-- images area -->
            <div class="col-lg-5">
                <div class="rts-test-one-image-inner">
                    <img src="{{asset('frontend/assets/images/testimonials/01.png')}}" alt="business_testimobials">
                </div>
            </div>
            <!-- image area end -->
        </div>
    </div>
</div>
<!-- start client feed back section End -->

<!-- blog area start -->
<div class="rts-blog-area rts-section-gap bg-secondary">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="title-area text-center">
                    <span>Blog Posts</span>
                    <h2 class="title">News & Updates</h2>
                </div>
            </div>
        </div>
        <div class="g-5 mt--20">
            <div class="swiper mySwiperh1_blog">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="single-blog-one-wrapper">
                            <div class="thumbnail">
                                <img src="{{asset('frontend/assets/images/blog/01.jpg')}}" alt="business_Blog">
                                <div class="blog-badge">
                                    <span>25.05.2023</span>
                                </div>
                            </div>
                            <div class="blog-content">
                                <p><span>Business Solution </span>/ by David Dolean</p>
                                <a href="blog-details.html">
                                    <h5 class="title">The quick settle tips of the new
                                        ages exist </h5>
                                </a>
                                <a class="rts-read-more btn-primary" href="blog-details.html"><i
                                        class="far fa-arrow-right"></i>Read
                                    More</a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="single-blog-one-wrapper">
                            <div class="thumbnail">
                                <img src="{{asset('frontend/assets/images/blog/02.jpg')}}" alt="business_Blog">
                                <div class="blog-badge">
                                    <span>25.05.2023</span>
                                </div>
                            </div>
                            <div class="blog-content">
                                <p><span>Business Solution </span>/ by David Dolean</p>
                                <a href="blog-details.html">
                                    <h5 class="title">Old generation settle tips of the new
                                        ages upps ! </h5>
                                </a>
                                <a class="rts-read-more btn-primary" href="blog-details.html"><i
                                        class="far fa-arrow-right"></i>Read
                                    More</a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="single-blog-one-wrapper">
                            <div class="thumbnail">
                                <img src="{{asset('frontend/assets/images/blog/03.jpg')}}" alt="business_Blog">
                                <div class="blog-badge">
                                    <span>25.05.2023</span>
                                </div>
                            </div>
                            <div class="blog-content">
                                <p><span>Business Solution </span>/ by David Dolean</p>
                                <a href="blog-details.html">
                                    <h5 class="title">Monkey Form settle tips of the new
                                        ages end </h5>
                                </a>
                                <a class="rts-read-more btn-primary" href="blog-details.html"><i
                                        class="far fa-arrow-right"></i>Read
                                    More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- blog area end -->


@endsection
