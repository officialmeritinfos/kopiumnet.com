<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1.0, user-scalable=no" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$siteName}} | {{$pageName}}</title>

    <meta name="og:title" content="{{$siteName}} -{{$pageName}} "/>
    <meta name="og:type" content="company"/>
    <meta name="og:url" content="/"/>
    <meta name="og:image" content="{{asset($web->favicon)}}"/>
    <meta name="og:site_name" content="{{$siteName}}"/>
    <meta name="og:description" content="{{$web->description}}"/>
    <meta name="description" content="{{$web->description}}"/>
    <meta name="keywords" content="{{$web->keywords}}">
    <meta name="author" content="{{$web->name}}">
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
    <!-- fontawesome css link -->
    <link rel="stylesheet" href="{{asset('home/css/fontawesome-all.min.css')}}">
    <!-- bootstrap css link -->
    <link rel="stylesheet" href="{{asset('home/css/bootstrap.min.css')}}">
    <!-- favicon -->
    <link rel="shortcut icon" href="{{asset('home/'.$web->favicon)}}" type="image/x-icon">
    <!-- swipper css link -->
    <link rel="stylesheet" href="{{asset('home/css/swiper.min.css')}}">
    <!-- lightcase css links -->
    <link rel="stylesheet" href="{{asset('home/css/lightcase.css')}}">
    <!-- odometer css link -->
    <link rel="stylesheet" href="{{asset('home/css/odometer.css')}}">
    <!-- line-awesome-icon css -->
    <link rel="stylesheet" href="{{asset('home/css/icomoon.css')}}">
    <!-- line-awesome-icon css -->
    <link rel="stylesheet" href="{{asset('home/css/line-awesome.min.css')}}">
    <!-- animate.css')}} -->
    <link rel="stylesheet" href="{{asset('home/css/animate.css')}}">
    <!-- aos.css')}} -->
    <link rel="stylesheet" href="{{asset('home/css/aos.css')}}">
    <!-- nice select css -->
    <link rel="stylesheet" href="{{asset('home/css/nice-select.css')}}">
    <!-- main style css link -->
    <link rel="stylesheet" href="{{asset('home/css/style.css')}}">
    <!-- Responsive Css -->
    <link rel="stylesheet" href="{{asset('home/css/responsive.css')}}">
    @stack('css')
</head>
<body>



<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    Start Preloader
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
<div class="preloader">
    <div class="drawing" id="loading">
        <div class="loading-dot"></div>
    </div>
</div>
<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    End Preloader
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->


<div class="cursor"></div>
<div class="cursor-follower"></div>


<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    Start Header
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
<header class="header-section home-three">
    <div class="header">
        <div class="header-bottom-area home-three">
            <div class="container custom-container-three">
                <div class="header-menu-content">
                    <nav class="navbar home-three navbar-expand-xl p-0">
                        <a class="site-logo site-title home-three-logo" href="{{route('home.index')}}">
                            <img src="{{asset('home/'.$web->logo)}}" alt="site-logo">
                        </a>
                        <button class="navbar-toggler home-three d-block d-xl-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="toggle-bar"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <div class="header-right">
                                <button class="menu-toggler style-01 home-three ml-auto">
                                    <span class="toggle-bar home-three"></span>
                                </button>

                                <div class="menu-toggler-wrapper home-three d-block d-xl-none">
                                    <ul class="navbar-nav main-menu style-01">
                                        <li><a href="{{route('home.index')}}">Home</a></li>
                                        <li><a href="{{route('home.about')}}">About</a></li>
                                        <li><a href="{{$web->blog}}">Blog</a></li>
                                        <li><a href="{{route('home.teams')}}">Team</a></li>
                                        <li><a href="{{route('home.services')}}">Services</a></li>
                                        <li><a href="{{route('home.book')}}">Book A Quote</a></li>
                                        <li><a href="{{route('home.contact')}}">Contact</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="logo-wrapper">
                            <a class="site-title" href="{{route('home.index')}}">
                                <img src="{{asset('home/'.$web->logo)}}" alt="site-logo"
                                style="width: 100px;">
                            </a>
                        </div>
                        <div class="touch">
                            <a href="{{route('home.book')}}"><span>Book a Quote</span></a>
                            <div class="icon">
                                <i class="las la-arrow-right"></i>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>
<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    End Header
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    Start Desktop Creative Menu
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

<div class="home-three-menu">
    <div class="menu-open">
        <div class="close-btn">
            <div class="logo">
                <a class="site-logo site-title home-three-logo" href="{{route('home.index')}}">
                    <img src="{{asset('home/'.$web->logo)}}" alt="site-logo" style="width:150px;"></a>
            </div>
            <div class="cross-btn">
                <a href="javascript:void(0)">
                    <i class="las la-times"></i>
                </a>
            </div>
        </div>
        <div class="nav-wrapper">
            <span class="menu-text">Menu</span>
            <ul class="navigation-three">
                <li><a href="{{route('home.index')}}">Home</a></li>
                <li><a href="{{route('home.about')}}">About</a></li>
                <li><a href="{{$web->blog}}">Blog</a></li>
                <li><a href="{{route('home.teams')}}">Team</a></li>
                <li><a href="{{route('home.services')}}">Services</a></li>
                <li><a href="{{route('home.book')}}">Book A Quote</a></li>
                <li><a href="{{route('home.contact')}}">Contact</a></li>
            </ul>
            <div class="address-wrapper">
                <div class="address">
                    <h6 class="title">Address</h6>
                    <p>{!! $web->address !!}</p>
                </div>
                <div class="contact">
                    <h6 class="title">Contact</h6>
                    <p><a href="tel:{{$web->phone}}">{{$web->phone}}</a></p>
                    <p><a href="mailto:{{$web->email}}">
                            {{$web->email}}
                        </a></p>
                </div>
                <ul class="footer-social">
                    <h6 class="title">Follow Us</h6>
                    <li><a href="https://facebook.com/kopiumnet" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="https://twitter.com/kopiumNet" target="_blank"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="https://www.linkedin.com/company/kopiumnet" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                    <li><a href="https://instagram.com/kopiumnet" target="_blank"><i class="fab fa-instagram"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</div>

<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    End Desktop Creative Menu
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

@yield('content')

@inject('option','App\Custom\Regular')
<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    Start Footer
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
<footer class="footer-section three pt-120">
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12">
                <div class="footer-contact">
                    <div class="content">
                        <h4 class="title">Start Your Projects Today</h4>
                    </div>
                    <div class="contact">
                        <i class="fas fa-phone-alt"></i>
                        <p><a href="tel:{{$web->phone}}">{{$web->phone}}</a></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mb-30-none">
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 mb-30 col-12">
                <div class="footer-widget">
                    <h5 class="title style-01">About us</h5>
                    <p>
                        Kopium is a leading provider of innovative digital solutions, specializing in software development,
                        web design, and mobile app development. With a focus on excellence and customer satisfaction, we're
                        committed to delivering top-tier services tailored to your needs. Join us in shaping the future of technology.
                    </p>
                    <ul class="footer-social style-01">
                        <li><a href="https://facebook.com/kopiumnet" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="https://twitter.com/kopiumNet" target="_blank"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="https://www.linkedin.com/company/kopiumnet" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                        <li><a href="https://instagram.com/kopiumnet" target="_blank"><i class="fab fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 mb-30 col-6">
                <div class="footer-widget">
                    <h5 class="title style-01">Company</h5>
                    <ul class="footer-list style-01">
                        <li><a href="{{route('home.about')}}"><i class="fas fa-angle-right"></i>About Us</a></li>
                        <li><a href="{{route('home.book')}}"><i class="fas fa-angle-right"></i>Get Quote</a></li>
                        <li><a href="{{route('home.faqs')}}"><i class="fas fa-angle-right"></i>FAQs</a></li>
                        <li><a href="{{route('home.about')}}#certification"><i class="fas fa-angle-right"></i>Certificaton</a></li>
                        <li><a href="{{route('home.contact')}}"><i class="fas fa-angle-right"></i>Contact Us</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 mb-30 col-6 ">
                <div class="footer-widget">
                    <h4 class="title style-01">Services</h4>
                    <ul class="footer-list style-01">
                        @foreach($option->fetchServices() as $service)
                            <li><a href="{{route('home.service.detail',['slug'=>$service->slug])}}"><i class="fas fa-angle-right"></i>{{$service->title}}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright-wrapper three">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-12 text-center">
                    <div class="copyright-area style-01">
                        <div class="logo">
                            <img src="{{asset('home/'.$web->logo)}}" alt="" style="width: 150px;">
                        </div>
                        <p> © 2022 - {{date('Y')}} <a href="{{route('home.index')}}">{{$siteName}}.</a> All rights reserved.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    End Footer
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

<!-- jquery -->
<script src="{{asset('home/js/jquery-3.6.0.min.js')}}"></script>
<!-- bootstrap js -->
<script src="{{asset('home/js/bootstrap.min.js')}}"></script>
<!-- swipper js -->
<script src="{{asset('home/js/swiper.min.js')}}"></script>
<!-- lightcase js-->
<script src="{{asset('home/js/lightcase.js')}}"></script>
<!-- odometer js -->
<script src="{{asset('home/js/odometer.min.js')}}"></script>
<!-- viewport js -->
<script src="{{asset('home/js/viewport.jquery.js')}}"></script>
<!-- aos js file -->
<script src="{{asset('home/js/aos.js')}}"></script>
<!-- nice select js -->
<script src="{{asset('home/js/jquery.nice-select.js')}}"></script>
<!-- isotope js -->
<script src="{{asset('home/js/isotope.pkgd.min.js')}}"></script>
<!-- tweenMax js -->
<script src="{{asset('home/js/TweenMax.min.js')}}"></script>
<!-- main -->
<script src="{{asset('home/js/main.js')}}"></script>

<!--Start of Tawk.to Script-->
<script type="text/javascript">
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
        var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
        s1.async=true;
        s1.src='https://embed.tawk.to/65d5427e8d261e1b5f62e6f8/1hn4gng32';
        s1.charset='UTF-8';
        s1.setAttribute('crossorigin','*');
        s0.parentNode.insertBefore(s1,s0);
    })();
</script>
<!--End of Tawk.to Script-->
</body>
</html>
