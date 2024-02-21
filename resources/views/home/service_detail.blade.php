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
    Start Service
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <section class="service-section two ptb-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-12">
                    <div class="service-item three details">
                        <div class="service-thumb">
                            <img src="{{asset('home/images/'.$service->image)}}" alt="service">
                        </div>
                        <div class="service-content">

                            <div class="service-bottom-content">
                                {!! $service->content !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
        End Service
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
