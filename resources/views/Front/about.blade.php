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
                <h1 class="mb-3 bread">About Us</h1>
                <p class="breadcrumbs"><span class="mr-2"><a href="{{route('front.welcome')}}">Home <i class="fa fa-chevron-right"></i></a></span> <span>About us</span></p>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section about-intro-section">
    <div class="container">
        <div class="row justify-content-center pb-5">
            <div class="col-lg-6 heading-section text-center ftco-animate">
                <h2 class="mb-4">Building practical technology solutions <span>since 2022</span></h2>
                <p>C.M.M Solutions Limited is a Ghanaian technology and software development company focused on improving efficiency, security, service delivery, and decision-making.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="services-2 about-feature-card text-center">
                    <div class="icon">
                        <span class="flaticon-web-programming"></span>
                    </div>
                    <div class="text">
                        <h3>Modern technology</h3>
                        <p>We combine information technology, software engineering, data management, and emerging technologies.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="about-feature-image">
                    <img src="{{asset('itsol/images/about-1.jpg')}}" class="img-fluid" alt="African team collaborating on digital solutions">
                    <span class="about-feature-badge">Since 2022</span>
                </div>
            </div>
            <div class="col-md-4">
                <div class="services-2 about-feature-card text-center">
                    <div class="icon">
                        <span class="flaticon-secure"></span>
                    </div>
                    <div class="text">
                        <h3>Client-focused delivery</h3>
                        <p>Our solutions are designed around real operational needs and supported through implementation and beyond.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-counter ftco-section ftco-no-pt img about-vision-section" id="section-counter">
    <div class="container">
        <div class="row no-gutters d-flex">
            <div class="col-md-6 d-flex">
                <div class="img d-flex align-self-stretch" style="background-image:url({{asset('itsol/images/about.jpg')}});"></div>
            </div>
            <div class="col-md-6 p-3 pl-md-5 py-5 bg-primary about-vision-panel">
                <div class="row justify-content-start pb-3">
                    <div class="col-md-12 heading-section heading-section-white ftco-animate">
                        <h2 class="mb-4">Our vision is <span>thinking ahead</span></h2>
                        <p>To become a leading technology solutions provider in Ghana and Africa by delivering innovative, reliable, and accessible digital solutions.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 justify-content-center counter-wrap ftco-animate">
                        <div class="block-18 mb-4">
                            <div class="text">
                                <strong class="number" data-number="750">0</strong>
                                <span>Project Complete</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 justify-content-center counter-wrap ftco-animate">
                        <div class="block-18 mb-4">
                            <div class="text">
                                <strong class="number" data-number="568">0</strong>
                                <span>Happy Clients</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 justify-content-center counter-wrap ftco-animate">
                        <div class="block-18 mb-4">
                            <div class="text">
                                <strong class="number" data-number="478">0</strong>
                                <span>Business Partners</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 justify-content-center counter-wrap ftco-animate">
                        <div class="block-18 mb-4">
                            <div class="text">
                                <strong class="number" data-number="780">0</strong>
                                <span>IT Consultant</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="ftco-section ftco-no-pb testimony-section" style="background-image: url({{asset('itsol/images/bg_1.jpg')}});">
    <div class="overlay-1"></div>
    <div class="container-fluid">
        <div class="row justify-content-center mb-5 pb-3">
            <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
                <h2 class="mb-4">Our insights &amp; creative ideas</h2>
            </div>
        </div>
        <div class="row ftco-animate">
            <div class="col-md-12 testimonial">
                <div class="carousel-testimony owl-carousel ftco-owl">
                    <div class="item">
                        <div class="testimony-wrap d-flex align-items-stretch" style="background-image: url({{asset('itsol/images/person_1.jpg')}});">
                            <div class="overlay"></div>
                            <div class="text">
                                <div class="line"></div>
                                <p class="mb-4">We build practical systems that help organizations improve service delivery and decision-making.</p>
                                <p class="name">Ama Mensah</p>
                                <span class="position">Marketing Manager</span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimony-wrap d-flex align-items-stretch" style="background-image: url({{asset('itsol/images/person_2.jpg')}});">
                            <div class="overlay"></div>
                            <div class="text">
                                <div class="line"></div>
                                <p class="mb-4">Our team combines software engineering, data management, and emerging technologies.</p>
                                <p class="name">Kwame Asante</p>
                                <span class="position">Interface Designer</span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimony-wrap d-flex align-items-stretch" style="background-image: url({{asset('itsol/images/person_3.jpg')}});">
                            <div class="overlay"></div>
                            <div class="text">
                                <div class="line"></div>
                                <p class="mb-4">We deliver secure and user-friendly solutions tailored to each client's operational needs.</p>
                                <p class="name">Akosua Boateng</p>
                                <span class="position">UI Designer</span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimony-wrap d-flex align-items-stretch" style="background-image: url({{asset('itsol/images/person_4.jpg')}});">
                            <div class="overlay"></div>
                            <div class="text">
                                <div class="line"></div>
                                <p class="mb-4">Our support continues through implementation and the day-to-day use of your system.</p>
                                <p class="name">Kofi Owusu</p>
                                <span class="position">Web Developer</span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimony-wrap d-flex align-items-stretch" style="background-image: url({{asset('itsol/images/person_1.jpg')}});">
                            <div class="overlay"></div>
                            <div class="text">
                                <div class="line"></div>
                                <p class="mb-4">We are based in Accra and serve organizations looking to move forward with technology.</p>
                                <p class="name">Yaw Ofori</p>
                                <span class="position">System Analyst</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section bg-light ftco-faqs about-faq-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 order-md-last about-gallery">
                <div class="img img-video d-flex align-self-stretch align-items-center justify-content-center justify-content-md-center mb-4 mb-sm-0" style="background-image:url({{asset('itsol/images/about.jpg')}});">
                </div>
                <div class="d-flex mt-3">
                    <div class="img img-2 mr-md-2 w-100" style="background-image:url({{asset('itsol/images/about-1.jpg')}});"></div>
                    <div class="img img-2 ml-md-2 w-100" style="background-image:url({{asset('itsol/images/about-2.jpg')}});"></div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="heading-section mb-5 mt-5 mt-lg-0">
                    <span class="subheading">How we work</span>
                    <h2 class="mb-3">Answers to common questions</h2>
                </div>
                <div id="accordion" class="myaccordion w-100" aria-multiselectable="true">
                    <div class="card">
                        <div class="card-header p-0" id="headingOne">
                            <h2 class="mb-0">
                                <button href="#collapseOne" class="d-flex py-3 px-4 align-items-center justify-content-between btn btn-link" data-parent="#accordion" data-toggle="collapse" aria-expanded="true" aria-controls="collapseOne">
                                    <p class="mb-0">What digital solutions does C.M.M Solutions provide?</p>
                                    <i class="fa" aria-hidden="true"></i>
                                </button>
                            </h2>
                        </div>
                        <div class="collapse show" id="collapseOne" role="tabpanel" aria-labelledby="headingOne">
                            <div class="card-body py-3 px-0">
                                <p>We provide customized software development, database and data management, IT implementation, technical support, and secure digital systems for businesses, schools, institutions, and organizations.</p>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header p-0" id="headingTwo" role="tab">
                            <h2 class="mb-0">
                                <button href="#collapseTwo" class="d-flex py-3 px-4 align-items-center justify-content-between btn btn-link" data-parent="#accordion" data-toggle="collapse" aria-expanded="false" aria-controls="collapseTwo">
                                    <p class="mb-0">How do you start a new project?</p>
                                    <i class="fa" aria-hidden="true"></i>
                                </button>
                            </h2>
                        </div>
                        <div class="collapse" id="collapseTwo" role="tabpanel" aria-labelledby="headingTwo">
                            <div class="card-body py-3 px-0">
                                <p>We first understand your goals, users, workflow, and technical needs. We then recommend a practical solution, agree on the scope, and guide the project through development, implementation, and support.</p>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header p-0" id="headingThree" role="tab">
                            <h2 class="mb-0">
                                <button href="#collapseThree" class="d-flex py-3 px-4 align-items-center justify-content-between btn btn-link" data-parent="#accordion" data-toggle="collapse" aria-expanded="false" aria-controls="collapseThree">
                                    <p class="mb-0">How do you support clients after launch?</p>
                                    <i class="fa" aria-hidden="true"></i>
                                </button>
                            </h2>
                        </div>
                        <div class="collapse" id="collapseThree" role="tabpanel" aria-labelledby="headingTwo">
                            <div class="card-body py-3 px-0">
                                <p>We provide implementation guidance, maintenance, troubleshooting, and technical support so your team can use the solution confidently as your needs evolve.</p>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header p-0" id="headingFour" role="tab">
                            <h2 class="mb-0">
                                <button href="#collapseFour" class="d-flex py-3 px-4 align-items-center justify-content-between btn btn-link" data-parent="#accordion" data-toggle="collapse" aria-expanded="false" aria-controls="collapseFour">
                                    <p class="mb-0">Who does C.M.M Solutions work with?</p>
                                    <i class="fa" aria-hidden="true"></i>
                                </button>
                            </h2>
                        </div>
                        <div class="collapse" id="collapseFour" role="tabpanel" aria-labelledby="headingTwo">
                            <div class="card-body py-3 px-0">
                                <p>We work with businesses, schools, institutions, and organizations in Ghana and across Africa that want secure, practical, and user-friendly technology.</p>
                            </div>
                        </div>
                    </div>
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
                        <li><a href="#" class="py-2 d-block">About</a></li>
                        <li><a href="#" class="py-2 d-block">Contact</a></li>
                        <li><a href="#" class="py-2 d-block">What We Do</a></li>
                        <li><a href="#" class="py-2 d-block">Plans &amp; Pricing</a></li>
                        <li><a href="#" class="py-2 d-block">Refund Policy</a></li>
                        <li><a href="#" class="py-2 d-block">Call Us</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2">Legal</h2>
                    <ul class="list-unstyled">
                        <li><a href="#" class="py-2 d-block">Join Us</a></li>
                        <li><a href="#" class="py-2 d-block">Privacy &amp; Policy</a></li>
                        <li><a href="#" class="py-2 d-block">Terms &amp; Conditions</a></li>
                        <li><a href="#" class="py-2 d-block">Careers</a></li>
                        <li><a href="#" class="py-2 d-block">Contact</a></li>
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
