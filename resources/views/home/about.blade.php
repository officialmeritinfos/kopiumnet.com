@extends('home.base')
@section('content')

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    Start Banner
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <section class="banner-section two inner">
        <div class="banner-element-four two">
            <img src="{{asset('home/images/element/element-5.png')}}" alt="element">
        </div>
        <div class="banner-element-five two">
            <img src="{{asset('home/images/element/element-7.png')}}" alt="element">
        </div>
        <div class="banner-element-nineteen two">
            <img src="{{asset('home/images/element/element-6.png')}}" alt="element">
        </div>
        <div class="banner-element-twenty-two two">
            <img src="{{asset('home/images/element/element-69.png')}}" alt="element">
        </div>
        <div class="banner-element-twenty-three two">
            <img src="{{asset('home/images/element/element-70.png')}}" alt="element">
        </div>
        <div class="container">
            <div class="row justify-content-center align-items-center mb-30-none">
                <div class="col-xl-12 mb-30">
                    <div class="banner-content two">
                        <div class="banner-content-header">
                            <h2 class="title">{{$pageName}}</h2>
                            <div class="breadcrumb-area">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="{{route('home.index')}}">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">{{$pageName}}</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
        End Banner
    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->


    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
        Start Scroll-To-Top
    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <a href="#" class="scrollToTop"><i class="las la-angle-double-up"></i></a>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
        End Scroll-To-Top
    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->


    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
        Start About
    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <section class="about-section ptb-120">
        <div class="about-element-one two">
            <img src="{{asset('home/images/element/element-39.png')}}" alt="element">
        </div>
        <div class="container">
            <div class="row justify-content-center mb-30-none">
                <div class="col-xl-6 col-lg-6 mb-30">
                    <div class="about-content two">
                        <h3 class="title">Who We Are</h3>
                        <p class="para">
                            At Kopium, we are driven by a singular vision: to redefine the landscape of digital innovation. Founded on the principles of creativity, expertise, and client-centricity, we have emerged as a leading force in the world of technology solutions.
                        </p>
                        <p>
                            Our mission is clear: to empower businesses and individuals with transformative digital solutions that drive growth, efficiency, and success. We strive to be at the forefront of innovation, constantly pushing boundaries and challenging conventions to deliver cutting-edge solutions that exceed expectations.
                        </p>
                        <p>
                            At Kopium, we believe that great solutions start with a deep understanding of our clients' needs and objectives. That's why we take a collaborative approach, working closely with each client to develop customized solutions that are tailored to their unique requirements. We believe in transparency, communication, and partnership every step of the way.
                        </p>
                        <div class="about-btn two">
                            <a href="{{route('home.index')}}" class="btn--base">Contact us</a>
                            <span>or Call <a href="tel:{{$web->phone}}">{{$web->phone}}</a></span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 mb-30">
                    <div class="about-thumb two">
                        <img src="{{asset('home/images/element/element-68.png')}}" alt="element">
                        <div class="about-thumb-element-one">
                            <img src="{{asset('home/images/element/element-60.png')}}" alt="element">
                        </div>
                        <div class="about-thumb-element-two">
                            <img src="{{asset('home/images/element/element-60.png')}}" alt="element">
                        </div>
                        <div class="about-thumb-video">
                            <div class="circle">
                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="300px" height="300px" viewBox="0 0 300 300" enable-background="new 0 0 300 300" xml:space="preserve">
                                <defs>
                                    <path id="circlePath" d=" M 150, 150 m -60, 0 a 60,60 0 0,1 120,0 a 60,60 0 0,1 -120,0 "/>
                                </defs>
                                    <circle cx="150" cy="100" r="75" fill="none"/>
                                    <g>
                                        <use xlink:href="#circlePath" fill="none"/>
                                        <text fill="#ffffff">
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
            </div>
        </div>
    </section>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
        End About
    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->


    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
        Start Agency
    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <section class="agency-section ptb-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-12">
                    <div class="agency-content text-center">
                        <div class="agency-logo-text">
                            <span>AGENCY</span>
                        </div>
                        <h2 class="title">
                            With a team of seasoned professionals and experts in various fields of technology, we offer a comprehensive suite of services
                        </h2>
                    </div>
                    <div class="agency-statistics-area">
                        <div class="row justify-content-center mb-30-none">
                            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 mb-30">
                                <div class="statistics-item">
                                    <div class="statistics-content">
                                        <div class="odo-area">
                                            <h3 class="odo-title odometer" data-odometer-final="4">0</h3>
                                            <h3 class="title">+</h3>
                                        </div>
                                        <p>Years of operation</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 mb-30">
                                <div class="statistics-item">
                                    <div class="statistics-content">
                                        <div class="odo-area">
                                            <h3 class="odo-title odometer" data-odometer-final="50">0</h3>
                                            <h3 class="title">+</h3>
                                        </div>
                                        <p>Projects delivered</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 mb-30">
                                <div class="statistics-item">
                                    <div class="statistics-content">
                                        <div class="odo-area">
                                            <h3 class="odo-title odometer" data-odometer-final="25">0</h3>
                                            <h3 class="title">+</h3>
                                        </div>
                                        <p>Team Specialist</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 mb-30">
                                <div class="statistics-item">
                                    <div class="statistics-content">
                                        <div class="odo-area">
                                            <h3 class="odo-title odometer" data-odometer-final="25">0</h3>
                                            <h3 class="title">+</h3>
                                        </div>
                                        <p>Around The World</p>
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
        End Agency
    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->


    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
        Start About
    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <section class="about-section">
        <div class="about-element-one two">
            <img src="{{asset('home/images/element/element-39.png')}}" alt="element">
        </div>
        <div class="container">
            <div class="about-area two">
                <div class="row justify-content-center align-items-center mb-30-none">
                    <div class="col-xl-6 col-lg-6 mb-30">
                        <div class="box-wrapper two">
                            <div class="box3"></div>
                            <div class="box1">
                                <div class="box-element-one">
                                    <img src="{{asset('home/images/element/element-59.png')}}" alt="element">
                                </div>
                                <div class="box-element-two">
                                    <img src="{{asset('home/images/element/element-7.png')}}" alt="element">
                                </div>
                            </div>
                            <div class="box2">
                                <div class="box-element-five">
                                    <img src="{{asset('home/images/element/element-16.png')}}" alt="element">
                                </div>
                                <div class="box-element-six">
                                    <img src="{{asset('home/images/element/element-7.png')}}" alt="element">
                                </div>
                            </div>
                        </div>
                        <div class="about-thumb">
                            <img src="{{asset('home/images/element/element-58.png')}}" alt="element">
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 mb-30">
                        <div class="about-content">
                            <h2 class="title">Have a project in mind? <span class="text--base">Let's connect</span></h2>
                            <p class="para">
                                When you partner with Kopium, you can trust that you're in good hands. We are dedicated to your success, and we will work tirelessly to ensure that your experience with us is nothing short of exceptional. Join us in shaping the future of technology, one solution at a time.
                            </p>
                            <p>
                                Integrity, excellence, and innovation are at the heart of everything we do. We are committed to delivering exceptional quality and value to our clients, while always striving to stay ahead of the curve and embrace emerging technologies.
                            </p>
                            <div class="about-btn">
                                <a href="{{route('home.book')}}" class="btn--base">Book a Quote</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
        End About
    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

@endsection
