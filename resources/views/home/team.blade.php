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
    Start Team
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <section class="team-section three ptb-120">
        <div class="container">
            <div class="row justify-content-center mb-65-none">

                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 mb-60">
                    <div class="team-item">
                        <div class="team-thumb">
                            <img src="{{asset('home/team/ceo.jpeg')}}" alt="team">
                            <div class="team-social-area">
                                <ul class="team-social">
                                    <li><a href="#0"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#0"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#0"><i class="fab fa-google-plus-g"></i></a></li>
                                    <li><a href="#0"><i class="fab fa-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="team-content">
                            <h3 class="title"><a href="#">Michael Erastus</a></h3>
                            <span class="sub-title">Founder & CEO</span>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 mb-60">
                    <div class="team-item">
                        <div class="team-thumb">
                            <img src="{{asset('home/team/chijiokeemmanuel.jpeg')}}" alt="team">
                            <div class="team-social-area">
                                <ul class="team-social">
                                    <li><a href="#0"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#0"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#0"><i class="fab fa-google-plus-g"></i></a></li>
                                    <li><a href="#0"><i class="fab fa-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="team-content">
                            <h3 class="title"><a href="#">Chijioke Emmanuel</a></h3>
                            <span class="sub-title">Co-Founder & CAO</span>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 mb-60">
                    <div class="team-item">
                        <div class="team-thumb">
                            <img src="{{asset('home/team/cfo.jpeg')}}" alt="team">
                            <div class="team-social-area">
                                <ul class="team-social">
                                    <li><a href="#0"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#0"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#0"><i class="fab fa-google-plus-g"></i></a></li>
                                    <li><a href="#0"><i class="fab fa-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="team-content">
                            <h3 class="title"><a href="#">Ohaeri lilian</a></h3>
                            <span class="sub-title">CFO</span>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 mb-60">
                    <div class="team-item">
                        <div class="team-thumb">
                            <img src="{{asset('home/team/rabbiu.jpg')}}" alt="team">
                            <div class="team-social-area">
                                <ul class="team-social">
                                    <li><a href="#0"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#0"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#0"><i class="fab fa-google-plus-g"></i></a></li>
                                    <li><a href="#0"><i class="fab fa-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="team-content">
                            <h3 class="title"><a href="#">Abubakar Rabbiu</a></h3>
                            <span class="sub-title">CIO</span>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 mb-60">
                    <div class="team-item">
                        <div class="team-thumb">
                            <img src="{{asset('home/team/aniprecious.jpg')}}" alt="team">
                            <div class="team-social-area">
                                <ul class="team-social">
                                    <li><a href="#0"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#0"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#0"><i class="fab fa-google-plus-g"></i></a></li>
                                    <li><a href="#0"><i class="fab fa-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="team-content">
                            <h3 class="title"><a href="#">Ani Precious</a></h3>
                            <span class="sub-title">CTO</span>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 mb-60">
                    <div class="team-item">
                        <div class="team-thumb">
                            <img src="{{asset('home/team/uchez.png')}}" alt="team">
                            <div class="team-social-area">
                                <ul class="team-social">
                                    <li><a href="#0"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#0"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#0"><i class="fab fa-google-plus-g"></i></a></li>
                                    <li><a href="#0"><i class="fab fa-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="team-content">
                            <h3 class="title"><a href="#">Uchenna</a></h3>
                            <span class="sub-title">CMO</span>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 mb-60">
                    <div class="team-item">
                        <div class="team-thumb">
                            <img src="{{asset('home/team/coo.jpeg')}}" alt="team">
                            <div class="team-social-area">
                                <ul class="team-social">
                                    <li><a href="#0"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#0"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#0"><i class="fab fa-google-plus-g"></i></a></li>
                                    <li><a href="#0"><i class="fab fa-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="team-content">
                            <h3 class="title"><a href="#">Stanley</a></h3>
                            <span class="sub-title">COO</span>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 mb-60">
                    <div class="team-item">
                        <div class="team-thumb">
                            <img src="{{asset('home/team/blossom.jpg')}}" alt="team">
                            <div class="team-social-area">
                                <ul class="team-social">
                                    <li><a href="#0"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#0"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#0"><i class="fab fa-google-plus-g"></i></a></li>
                                    <li><a href="#0"><i class="fab fa-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="team-content">
                            <h3 class="title"><a href="#">Chikezie Blossom</a></h3>
                            <span class="sub-title">Frontend Engineer</span>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 mb-60">
                    <div class="team-item">
                        <div class="team-thumb">
                            <img src="{{asset('home/team/jona.jpeg')}}" alt="team">
                            <div class="team-social-area">
                                <ul class="team-social">
                                    <li><a href="#0"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#0"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#0"><i class="fab fa-google-plus-g"></i></a></li>
                                    <li><a href="#0"><i class="fab fa-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="team-content">
                            <h3 class="title"><a href="#">Enyidede Jonathan</a></h3>
                            <span class="sub-title">UI Designer</span>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 mb-60">
                    <div class="team-item">
                        <div class="team-thumb">
                            <img src="{{asset('home/team/eddy.jpeg')}}" alt="team">
                            <div class="team-social-area">
                                <ul class="team-social">
                                    <li><a href="#0"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#0"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#0"><i class="fab fa-google-plus-g"></i></a></li>
                                    <li><a href="#0"><i class="fab fa-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="team-content">
                            <h3 class="title"><a href="#">Igwebuike Edwin</a></h3>
                            <span class="sub-title">UI Designer</span>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 mb-60">
                    <div class="team-item">
                        <div class="team-thumb">
                            <img src="{{asset('home/team/Nina.jpeg')}}" alt="team">
                            <div class="team-social-area">
                                <ul class="team-social">
                                    <li><a href="#0"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#0"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#0"><i class="fab fa-google-plus-g"></i></a></li>
                                    <li><a href="#0"><i class="fab fa-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="team-content">
                            <h3 class="title"><a href="#">Nina Erica</a></h3>
                            <span class="sub-title">Content Writer</span>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 mb-60">
                    <div class="team-item">
                        <div class="team-thumb">
                            <img src="{{asset('home/team/Juliet.jpeg')}}" alt="team">
                            <div class="team-social-area">
                                <ul class="team-social">
                                    <li><a href="#0"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#0"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#0"><i class="fab fa-google-plus-g"></i></a></li>
                                    <li><a href="#0"><i class="fab fa-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="team-content">
                            <h3 class="title"><a href="#">Agaba Juliet</a></h3>
                            <span class="sub-title">Marketer</span>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>


@endsection
