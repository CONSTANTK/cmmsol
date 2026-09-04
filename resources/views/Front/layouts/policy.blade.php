<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title', 'CMM Solutions Limited')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="@yield('meta_description', 'C.M.M Solutions Limited - technology and software development company in Ghana.')">

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('apple-touch-icon.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('favicon-16x16.png')}}">
    <link rel="shortcut icon" href="{{asset('favicon.ico')}}">
    <link rel="manifest" href="{{asset('site.webmanifest')}}">

    <link href="https://fonts.googleapis.com/css?family=Montserrat:200,300,400,500,600,700,800&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="{{asset('itsol/css/animate.css')}}">

    <link rel="stylesheet" href="{{asset('itsol/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('itsol/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('itsol/css/magnific-popup.css')}}">


    <link rel="stylesheet" href="{{asset('itsol/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('itsol/css/style.css')}}">

    <style>
        .policy-section { padding: 4em 0; }
        .policy-content { line-height: 1.8; color: #4d4d4d; }
        .policy-content h2 { font-size: 24px; margin-top: 1.6em; margin-bottom: .6em; color: #2f2f2f; }
        .policy-content h3 { font-size: 19px; margin-top: 1.2em; margin-bottom: .5em; color: #2f2f2f; }
        .policy-content p, .policy-content li { font-size: 16px; }
        .policy-content ul { margin-bottom: 1.2em; padding-left: 1.2em; }
        .policy-content .last-updated { font-style: italic; color: #7a7a7a; margin-bottom: 2em; }
        .policy-content a { color: #F96D00; }
    </style>
</head>
<body>
<div class="wrap">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-12 col-md d-flex align-items-center">
                <p class="mb-0 phone"><span class="mailus">Phone no:</span> <a href="tel:+23320825866">020 825 866</a> / <a href="tel:+233246102372">0246 102 372</a> <span class="mailus">email us:</span> <a href="mailto:cmmsolutionsltd@gmail.com">cmmsolutionsltd@gmail.com</a></p>
            </div>
            <div class="col-12 col-md d-flex justify-content-md-end">
                <div class="social-media">
                    <p class="mb-0 d-flex">
                        <a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-facebook"><i class="sr-only">Facebook</i></span></a>
                        <a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-twitter"><i class="sr-only">Twitter</i></span></a>
                        <a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-instagram"><i class="sr-only">Instagram</i></span></a>
                        <a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-dribbble"><i class="sr-only">Dribbble</i></span></a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="{{route('front.welcome')}}"><img src="{{asset('images/logo.jpg')}}" alt="CMM Solutions Limited" class="logo-img"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a href="{{route('front.welcome')}}" class="nav-link">Home</a></li>
                <li class="nav-item"><a href="{{route('front.about')}}" class="nav-link">About</a></li>
                <li class="nav-item"><a href="{{route('front.services')}}" class="nav-link">Services</a></li>
                <li class="nav-item"><a href="{{route('front.products')}}" class="nav-link">Products</a></li>
                <li class="nav-item"><a href="{{route('front.faq')}}" class="nav-link">FAQ</a></li>
                <li class="nav-item"><a href="{{route('front.contact')}}" class="nav-link">Contact us</a></li>
            </ul>
        </div>
    </div>
</nav>
<!-- END nav -->

<section class="hero-wrap hero-wrap-2 breadcrumb-hero" style="background-image: url({{asset('itsol/images/bg_3.jpg')}});" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
            <div class="col-md-9 ftco-animate pb-5 text-center breadcrumb-content">
                <h1 class="mb-3 bread">@yield('page_heading')</h1>
                <p class="breadcrumbs"><span class="mr-2"><a href="{{route('front.welcome')}}">Home <i class="fa fa-chevron-right"></i></a></span> <span>@yield('page_heading')</span></p>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section policy-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-9 policy-content ftco-animate">
                @yield('content')
            </div>
        </div>
    </div>
</section>

@include('Front.layouts.footer')

<!-- loader -->
<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>

<script src="{{asset('itsol/js/jquery.min.js')}}"></script>
<script src="{{asset('itsol/js/jquery-migrate-3.0.1.min.js')}}"></script>
<script src="{{asset('itsol/js/popper.min.js')}}"></script>
<script src="{{asset('itsol/js/bootstrap.min.js')}}"></script>
<script src="{{asset('itsol/js/jquery.easing.1.3.js')}}"></script>
<script src="{{asset('itsol/js/jquery.waypoints.min.js')}}"></script>
<script src="{{asset('itsol/js/jquery.stellar.min.js')}}"></script>
<script src="{{asset('itsol/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('itsol/js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('itsol/js/jquery.animateNumber.min.js')}}"></script>
<script src="{{asset('itsol/js/scrollax.min.js')}}"></script>
<script src="{{asset('itsol/js/main.js')}}"></script>

</body>
</html>
