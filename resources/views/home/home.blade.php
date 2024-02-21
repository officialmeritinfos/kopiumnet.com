@extends('home.base')
@section('content')

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    Start Banner
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <section class="banner-section home-three">
        <div class="banner-three-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="container custom-container-three">
                        <div class="home-three-banner">
                            <img src="{{asset('home/images/home-three/Ellipse.png')}}" class="banner-shape" alt="">
                            <div class="row align-items-end mb-30-none">
                                <div class="col-xl-5 col-lg-6">
                                    <div class="banner-content-two" data-aos="fade-right" data-aos-duration="1800">
                                        <h1 class="title">Innovative Solutions for Success</h1>
                                        <span></span>
                                        <p>
                                            We specialize in custom <br/>software solutions for businesses
                                        </p>
                                    </div>
                                </div>
                                <div class="banner-image">
                                    <img src="{{asset('home/images/home-three/home-three-banner.png')}}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="container custom-container-three">
                        <div class="home-three-banner">
                            <img src="{{asset('home/images/home-three/Ellipse.png')}}" class="banner-shape" alt="">
                            <div class="row align-items-end mb-30-none">
                                <div class="col-xl-5 col-lg-6">
                                    <div class="banner-content-two" data-aos="fade-right" data-aos-duration="1800">
                                        <h1 class="title">Accelerating Digitality</h1>
                                        <span></span>
                                        <p>We develop software <br> for you to succeed in a <br> digital world.</p>
                                    </div>
                                </div>
                                <div class="banner-image">
                                    <img src="{{asset('home/images/home-three/home-three-banner-02.jpg')}}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="container custom-container-three">
                        <div class="home-three-banner">
                            <img src="{{asset('home/images/home-three/Ellipse.png')}}" class="banner-shape" alt="">
                            <div class="row align-items-end mb-30-none">
                                <div class="col-xl-5 col-lg-6">
                                    <div class="banner-content-two" data-aos="fade-right" data-aos-duration="1800">
                                        <h1 class="title">Accelerating Digitality</h1>
                                        <span></span>
                                        <p>We develop softwares <br> for you to succeed in a <br> digital world.</p>
                                    </div>
                                </div>
                                <div class="banner-image">
                                    <img src="{{asset('home/images/home-three/home-three-banner-03.jpg')}}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="custom-navigation next-text">NEXT</div>
            <div class="custom-navigation prev-text">PREV</div>
            <div class="custom-pagination"></div>
        </div>
    </section>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
        End Banner
    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
        Start Experience Section
    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <section class="experience-secction">
        <div class="container custom-container-four">
            <div class="row">
                <div class="col-xl-6 col-lg-6 mb-30">
                    <div class="experience-content">
                        <h4 class="title">
                            We are a progressive and dynamic IT service company that has creatively operated within the
                            market of Web & Mobile development since 2020.
                        </h4>
                        <ul class="plan-list">
                            <li>Bringing your IT solutions to the market</li>
                            <li>Building a customized digital experience for your business</li>
                            <li>Our company have 30 IT senior professionals.</li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 mb-30">
                    <div class="statistics-item-area">
                        <p>{{$siteName}}, a leading provider of web development services, helps you to build customized, enterprise-grade and result-driven web solutions for your business.</p>
                        <div class="row mb-30-none">
                            <div class="col-xl-6 col-lg-6 col-md-6 mb-30">
                                <div class="icon-box-items">
                                    <div class="content">
                                        <div class="odo-area">
                                            <h3 class="odo-title odometer" data-odometer-final="4">0</h3>
                                            <h3 class="title">Years</h3>
                                        </div>
                                        <p>of Experience</p>
                                    </div>
                                    <div class="icon">
                                        <img src="{{asset('home/images/home-three/customer-review.png')}}" alt="icon">
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 mb-30">
                                <div class="icon-box-items style-01">
                                    <div class="content">
                                        <div class="odo-area">
                                            <h3 class="odo-title odometer" data-odometer-final="30">0</h3>
                                            <h3 class="title">+</h3>
                                        </div>
                                        <p>Employees</p>
                                    </div>
                                    <div class="icon">
                                        <img src="{{asset('home/images/home-three/employee.png')}}" alt="icon">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
        End Experience Section
    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
        Start Development Section
    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <section class="development-section" style="background-image: url({{asset('home/images/home-three/dev-bg.png')}});">
        <div class="container">
            <img src="{{asset('home/images/home-three/grid.png')}}" class="shape-01" alt="">
            <img src="{{asset('home/images/home-three/grid.png')}}" class="shape-02" alt="">
            <div class="row">
                <div class="col-xl-6 col-lg-6 mb-30">
                    <div class="thumbnail">
                        <img src="{{asset('home/images/home-three/develop.png')}}" alt="">
                        <div class="about-thumb-video">
                            <div class="circle">
                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="300px" height="300px" viewBox="0 0 300 300" enable-background="new 0 0 300 300" xml:space="preserve">
                                <defs>
                                    <path id="circlePath" d=" M 150, 150 m -60, 0 a 60,60 0 0,1 120,0 a 60,60 0 0,1 -120,0 "></path>
                                </defs>
                                    <circle cx="150" cy="100" r="75" fill="none"></circle>
                                    <g>
                                        <use xlink:href="#circlePath" fill="none"></use>
                                        <text fill="#606F92">
                                            <textPath xlink:href="#circlePath">{{$siteName}} {{$siteName}} {{$siteName}} {{$siteName}} {{$siteName}} {{$siteName}}</textPath>
                                        </text>
                                    </g>
                            </svg>
                            </div>
                            <div class="video-main">
                                <a class="video-icon video" data-rel="lightcase:myCollection" href="https://www.youtube.com/embed/LRhrNC-OC0Y">
                                    <i class="fas fa-play"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 mb-30">
                    <div class="content">
                        <div class="title">Meet Kopium: Innovators in Digital Solutions</div>
                        <p>
                            Kopium is a dynamic software development company driven by a passion for innovation and excellence.
                            Our team specializes in creating bespoke digital solutions tailored to the unique needs of businesses
                            and individuals. With a focus on cutting-edge technology and user-centric design, we strive to exceed
                            expectations and deliver tangible results. From websites and mobile apps to blockchain applications
                            and custom software, we're here to elevate your digital presence and drive success. Explore our
                            expertise and discover how Kopium can transform your digital landscape
                        </p>
                        <div class="more-btn">
                            <a href="{{route('home.about')}}"><span>Know More</span></a>
                            <div class="icon">
                                <i class="las la-arrow-right"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
        End Development Section
    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

    @if($services->count()>0)
        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    Start Customer Service Section
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <section class="customer-service-section">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-7 col-lg-8 text-center">
                        <div class="section-header">
                            <h2 class="section-title">Our Services</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    @foreach($services as $service)
                        <div class="col-xl-4 col-lg-4 mb-30">
                            <div class="service-single-item">
                                <div class="icon">
                                    <img src="{{asset('home/images/'.$service->image)}}" alt="">
                                </div>
                                <div class="content">
                                    <a href="{{route('home.service.detail',['slug'=>$service->slug])}}"><h6 class="title">{{$service->title}}</h6></a>
                                    <div class="more-btn">
                                        <a href="{{route('home.service.detail',['slug'=>$service->slug])}}"><span>Service Details</span></a>
                                        <div class="icons">
                                            <i class="las la-arrow-right"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
            End Customer Service Section
        ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    @endif

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    Start Case Study Section
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <section class="case-study-section">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section-header-wrapper">
                        <div class="section-header">
                            <h2 class="section-title">Our Recent Products</h2>
                            <p>Some of our products which are being built to help businesses operate seamlessly</p>
                        </div>
                        <ul class="nav nav-pills mb-3">
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="pill" href="#all">All</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active"data-toggle="pill" href="#blockchain">Blockchain</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="pill" href="#ecom">e-Commerce</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade" id="all">
                <div class="container-fluid">
                    <div class="row mb-10-none">
                        <div class="col-xl-10 offset-xl-2">
                            <div class="case-study-slider-wrapper">
                                <div class="case-study-slider oh">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="case-study-single-item">
                                                <div class="thumbnail">
                                                    <img src="{{asset('home/images/nextrobuy.png')}}" alt="">
                                                </div>
                                                <div class="content">
                                                    <h5 class="title">Nextrobuy</h5>
                                                    <p>
                                                        All in one Cryptocurrency trading platform that allows you to buy and sell cryptocurrency and digital assets
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="case-study-single-item">
                                                <div class="thumbnail">
                                                    <img src="{{asset('home/images/nextropay.png')}}" alt="">
                                                </div>
                                                <div class="content">
                                                    <h5 class="title">Nextropay</h5>
                                                    <p>Cryptocurrency Wallet Infrastructure and Payment processing for cross-border payments.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="case-study-single-item">
                                                <div class="thumbnail">
                                                    <img src="{{asset('home/images/karyopay.png')}}" alt="">
                                                </div>
                                                <div class="content">
                                                    <h5 class="title">Karyopay</h5>
                                                    <p>Own your online store without having to pay a web developer. Build it by seamless customization and launch</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="next-text">Next</div>
                                    <div class="prev-text">Prev</div>
                                    <div class="swiper-pagination"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade show active" id="blockchain">
                <div class="container-fluid">
                    <div class="row mb-10-none">
                        <div class="col-xl-10 offset-xl-2">
                            <div class="case-study-slider-wrapper">
                                <div class="case-study-slider oh">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="case-study-single-item">
                                                <div class="thumbnail">
                                                    <img src="{{asset('home/images/nextrobuy.png')}}" alt="">
                                                </div>
                                                <div class="content">
                                                    <h5 class="title">Nextrobuy</h5>
                                                    <p>
                                                        All in one Cryptocurrency trading platform that allows you to buy and sell cryptocurrency and digital assets
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="case-study-single-item">
                                                <div class="thumbnail">
                                                    <img src="{{asset('home/images/nextropay.png')}}" alt="">
                                                </div>
                                                <div class="content">
                                                    <h5 class="title">Nextropay</h5>
                                                    <p>Cryptocurrency Wallet Infrastructure and Payment processing for cross-border payments.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="next-text">Next</div>
                                    <div class="prev-text">Prev</div>
                                    <div class="swiper-pagination"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="ecom">
                <div class="container-fluid">
                    <div class="row mb-10-none">
                        <div class="col-xl-10 offset-xl-2">
                            <div class="case-study-slider-wrapper">
                                <div class="case-study-slider oh">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="case-study-single-item">
                                                <div class="thumbnail">
                                                    <img src="{{asset('home/images/karyopay.png')}}" alt="">
                                                </div>
                                                <div class="content">
                                                    <h5 class="title">Karyopay</h5>
                                                    <p>Own your online store without having to pay a web developer. Build it by seamless customization and launch</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="next-text">Next</div>
                                    <div class="prev-text">Prev</div>
                                    <div class="swiper-pagination"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
        End Case Study Section
    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
        Start Scroll-To-Top
    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <a href="#" class="scrollToTop"><i class="las la-angle-double-up"></i></a>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
        End Scroll-To-Top
    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
        Start Call to action
    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <section class="call-to-action-section">
        <div class="call-to-action-element" data-aos="fade-left" data-aos-duration="1200">
            <img src="{{asset('home/images/element/element-33.png')}}" alt="element">
        </div>
        <div class="wrapper demo-text">
            <div class="marquee">
            <span>
                STARTUP SOLUTIONS STARTUP SOLUTIONS STARTUP SOLUTIONS STARTUP SOLUTIONS STARTUP SOLUTIONS STARTUP SOLUTIONS STARTUP SOLUTIONS STARTUP SOLUTIONS
            </span>
            </div>
        </div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-9">
                    <div class="call-to-action-wrapper">
                        <div class="call-to-action-content">
                            <h3 class="title">Have a project in mind and need experts to help you build it?</h3>
                            <h3 class="inner-title">this is the right place for you</h3>
                        </div>
                        <div class="call-to-action-btn">
                            <a href="{{route('home.book')}}" class="btn--base">Get a booking</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
        End Call to action
    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
        Start Team Hero Sction
    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <section class="team-hero-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4">
                    <div class="hero-single-item">
                        <div class="content">
                            <h6 class="title-main">We are {{$siteName}}</h6>
                            <div class="thumbnail">
                                <img src="{{asset('home/images/home-three/team-hero.png')}}" alt="">
                            </div>
                            <div class="counter-single-items">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-6 mb-30">
                                        <div class="content">
                                            <div class="odo-area">
                                                <h3 class="odo-title odometer" data-odometer-final="2020">0</h3>
                                            </div>
                                            <p>Founded</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-6 mb-30">
                                        <div class="content">
                                            <div class="odo-area">
                                                <h3 class="odo-title odometer" data-odometer-final="25">0</h3>
                                                <h3 class="title">+</h3>
                                            </div>
                                            <p>Experts</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-6 mb-30">
                                        <div class="content">
                                            <div class="odo-area">
                                                <h3 class="odo-title odometer" data-odometer-final="50">0</h3>
                                            </div>
                                            <p>Projects Handled</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-md-6">
                            <div class="team-thumbnail mb-30">
                                <img src="{{asset('home/team/ceo.jpeg')}}" alt="">
                            </div>
                            <div class="team-thumbnail mb-30">
                                <img src="{{asset('home/team/aniprecious.jpg')}}" alt="">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="team-thumbnail mb-30">
                                <img src="{{asset('home/team/chijiokeemmanuel.jpeg')}}" alt="">
                            </div>
                            <div class="team-thumbnail mb-30">
                                <img src="{{asset('home/team/cfo.jpeg')}}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
        End Team Hero Section
    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

@endsection
