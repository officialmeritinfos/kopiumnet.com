@extends('home.base')
@section('content')
    @push('css')
        <style>
            /* Style to make the iframe cover the entire width and height of the viewport */
            iframe {
                top: 0;
                left: 0;
                width: 100%;
                border: none; /* Remove border */
            }
        </style>
    @endpush
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
    Start Contact
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <div class="contact-section ptb-120">
            <div class="contact-element-one">
                <img src="{{asset('home/images/element/element-73.png')}}" alt="element">
            </div>
            <div class="contact-element-two">
                <img src="{{asset('home/images/element/element-74.png')}}" alt="element">
            </div>
            <div class="container">
                <iframe src="https://docs.google.com/forms/d/e/1FAIpQLScpHNKdtfmdHpR_8N-S5grmPFn860n1dDQOgUtY4qWUd2xRkQ/viewform?embedded=true" width="640" height="2026" frameborder="0" marginheight="0" marginwidth="0">Loading…</iframe>
            </div>
        </div>
        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
            End Contact
        ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->


@endsection
