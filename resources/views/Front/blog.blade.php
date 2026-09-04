<!DOCTYPE html>
<html lang="en">
<head>
    <title>CMM Solutions Limited</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

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
</head>
<body>
<div class="wrap">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-12 col-md d-flex align-items-center">
                <p class="mb-0 phone"><span class="mailus">Phone no:</span> <a href="tel:+233246102372">0246 102 372</a> / <a href="tel:+233246623172">0246 623 172</a> <span class="mailus">email us:</span> <a href="mailto:cmmsolutionsltd@gmail.com">cmmsolutionsltd@gmail.com</a></p>
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
                <li class="nav-item active"><a href="{{route('front.about')}}" class="nav-link">About</a></li>
                <li class="nav-item"><a href="{{route('front.services')}}" class="nav-link">Services</a></li>
                <li class="nav-item"><a href="{{route('front.products')}}" class="nav-link">Products</a></li>
                <li class="nav-item"><a href="{{route('front.faq')}}" class="nav-link">FAQ</a></li>
                <li class="nav-item"><a href="{{route('front.contact')}}" class="nav-link">Contact us</a></li>

            </ul>
        </div>
    </div>
</nav>
<!-- END nav -->

<section class="hero-wrap hero-wrap-2" style="background-image: url({{asset('itsol/images/bg_3.jpg')}});" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
            <div class="col-md-9 ftco-animate pb-5 text-center">
                <h1 class="mb-3 bread">Read our blog</h1>
                <p class="breadcrumbs"><span class="mr-2"><a href="{{route('front.welcome')}}">Home <i class="fa fa-chevron-right"></i></a></span> <span>Blog <i class="fa fa-chevron-right"></i></span></p>
            </div>
        </div>
    </div>
</section>


<section class="ftco-section bg-light">
    <div class="container">
        <div class="row d-flex">
            <div class="col-md-4 d-flex ftco-animate">
                <div class="blog-entry justify-content-end">
                    <a href="{{asset('itsol/blog-single.html')}}" class="block-20" style="background-image: url({{asset('itsol/images/image_1.jpg')}});">
                    </a>
                    <div class="text mt-3 float-right d-block">
                        <div class="d-flex align-items-center pt-2 mb-4 topp">
                            <div class="one">
                                <span class="day">29</span>
                            </div>
                            <div class="two pl-1">
                                <span class="yr">2020</span>
                                <span class="mos">June</span>
                            </div>
                        </div>
                        <h3 class="heading"><a href="#">How digital systems improve organizational efficiency</a></h3>
                    </div>
                </div>
            </div>
            <div class="col-md-4 d-flex ftco-animate">
                <div class="blog-entry justify-content-end">
                    <a href="{{asset('itsol/blog-single.html')}}" class="block-20" style="background-image: url({{asset('itsol/images/image_2.jpg')}});">
                    </a>
                    <div class="text mt-3 float-right d-block">
                        <div class="d-flex align-items-center pt-2 mb-4 topp">
                            <div class="one">
                                <span class="day">29</span>
                            </div>
                            <div class="two pl-1">
                                <span class="yr">2020</span>
                                <span class="mos">June</span>
                            </div>
                        </div>
                        <h3 class="heading"><a href="#">Choosing the right school management solution</a></h3>
                    </div>
                </div>
            </div>
            <div class="col-md-4 d-flex ftco-animate">
                <div class="blog-entry">
                    <a href="{{asset('itsol/blog-single.html')}}" class="block-20" style="background-image: url({{asset('itsol/images/image_3.jpg')}});">
                    </a>
                    <div class="text mt-3 float-right d-block">
                        <div class="d-flex align-items-center pt-2 mb-4 topp">
                            <div class="one">
                                <span class="day">29</span>
                            </div>
                            <div class="two pl-1">
                                <span class="yr">2020</span>
                                <span class="mos">June</span>
                            </div>
                        </div>
                        <h3 class="heading"><a href="#">Why secure data management matters</a></h3>
                    </div>
                </div>
            </div>
            <div class="col-md-4 d-flex ftco-animate">
                <div class="blog-entry justify-content-end">
                    <a href="{{asset('itsol/blog-single.html')}}" class="block-20" style="background-image: url({{asset('itsol/images/image_4.jpg')}});">
                    </a>
                    <div class="text mt-3 float-right d-block">
                        <div class="d-flex align-items-center pt-2 mb-4 topp">
                            <div class="one">
                                <span class="day">29</span>
                            </div>
                            <div class="two pl-1">
                                <span class="yr">2020</span>
                                <span class="mos">June</span>
                            </div>
                        </div>
                        <h3 class="heading"><a href="#">Digitizing welfare contributions and benefits</a></h3>
                    </div>
                </div>
            </div>
            <div class="col-md-4 d-flex ftco-animate">
                <div class="blog-entry justify-content-end">
                    <a href="{{asset('itsol/blog-single.html')}}" class="block-20" style="background-image: url({{asset('itsol/images/image_5.jpg')}});">
                    </a>
                    <div class="text mt-3 float-right d-block">
                        <div class="d-flex align-items-center pt-2 mb-4 topp">
                            <div class="one">
                                <span class="day">29</span>
                            </div>
                            <div class="two pl-1">
                                <span class="yr">2020</span>
                                <span class="mos">June</span>
                            </div>
                        </div>
                        <h3 class="heading"><a href="#">Using AI to support learning and assessment</a></h3>
                    </div>
                </div>
            </div>
            <div class="col-md-4 d-flex ftco-animate">
                <div class="blog-entry">
                    <a href="{{asset('itsol/blog-single.html')}}" class="block-20" style="background-image: url({{asset('itsol/images/image_6.jpg')}});">
                    </a>
                    <div class="text mt-3 float-right d-block">
                        <div class="d-flex align-items-center pt-2 mb-4 topp">
                            <div class="one">
                                <span class="day">29</span>
                            </div>
                            <div class="two pl-1">
                                <span class="yr">2020</span>
                                <span class="mos">June</span>
                            </div>
                        </div>
                        <h3 class="heading"><a href="#">Smarter inventory, sales, and payroll operations</a></h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col text-center">
                <div class="block-27">
                    <ul>
                        <li><a href="#">&lt;</a></li>
                        <li class="active"><span>1</span></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li><a href="#">&gt;</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<footer class="ftco-footer ftco-footer-2 ftco-section">
    <div class="container">
        <div class="row mb-5">
            <div class="col-md">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-footer-logo"><a href="{{route('front.welcome')}}"><img src="{{asset('images/logo.jpg')}}" alt="CMM Solutions Limited" class="footer-logo-img"></a></h2>
                    <p>C.M.M Solutions Limited delivers secure, user-friendly, and cost-effective digital solutions across Ghana and Africa.</p>
                    <ul class="ftco-footer-social list-unstyled mt-2">
                        <li class="ftco-animate"><a href="#"><span class="fa fa-twitter"></span></a></li>
                        <li class="ftco-animate"><a href="#"><span class="fa fa-facebook"></span></a></li>
                        <li class="ftco-animate"><a href="#"><span class="fa fa-instagram"></span></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md">
                <div class="ftco-footer-widget mb-4 ml-md-5">
                    <h2 class="ftco-heading-2">Explore</h2>
                    <ul class="list-unstyled">
                        <li><a href="{{route('front.about')}}" class="py-2 d-block">About</a></li>
                        <li><a href="{{route('front.contact')}}" class="py-2 d-block">Contact</a></li>
                        <li><a href="{{route('front.services')}}" class="py-2 d-block">What We Do</a></li>
                        <li><a href="{{route('front.products')}}" class="py-2 d-block">Products</a></li>
                        <li><a href="{{route('front.faq')}}" class="py-2 d-block">FAQ</a></li>
                        <li><a href="tel:+23320825866" class="py-2 d-block">Call Us</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2">Legal</h2>
                    <ul class="list-unstyled">
                        <li><a href="{{route('front.privacy')}}" class="py-2 d-block">Privacy Policy</a></li>
                        <li><a href="{{route('front.terms')}}" class="py-2 d-block">Terms &amp; Conditions</a></li>
                        <li><a href="{{route('front.delivery')}}" class="py-2 d-block">Delivery &amp; Refund Policy</a></li>
                        <li><a href="{{route('front.faq')}}" class="py-2 d-block">FAQ</a></li>
                        <li><a href="{{route('front.contact')}}" class="py-2 d-block">Contact</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2">Have a Questions?</h2>
                    <div class="block-23 mb-3">
                        <ul>
                            <li><span class="icon fa fa-map marker"></span><span class="text">Volta Place, Airport Residential Area, Accra, Ghana</span></li>
                            <li><a href="tel:+233246102372"><span class="icon fa fa-phone"></span><span class="text">0246 102 372 / 0246 623 172</span></a></li>
                            <li><a href="mailto:cmmsolutionsltd@gmail.com"><span class="icon fa fa-paper-plane pr-4"></span><span class="text">cmmsolutionsltd@gmail.com</span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 text-center">

                <p>Copyright &copy;<script>document.write(new Date().getFullYear());</script> C.M.M Solutions Limited. All rights reserved.</p>
            </div>
        </div>
    </div>
</footer>



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
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
<script src="{{asset('itsol/js/google-map.js')}}"></script>
<script src="{{asset('itsol/js/main.js')}}"></script>

</body>
</html>
