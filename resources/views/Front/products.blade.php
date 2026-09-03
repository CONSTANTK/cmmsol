<!DOCTYPE html>
<html lang="en">
<head>
    <title>Products | C.M.M Solutions Limited</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('apple-touch-icon.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('favicon-32x32.png')}}">
    <link rel="shortcut icon" href="{{asset('favicon.ico')}}">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:200,300,400,500,600,700,800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{asset('itsol/css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('itsol/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('itsol/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('itsol/css/style.css')}}">
</head>
<body>
<div class="wrap">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-12 col-md d-flex align-items-center">
                <p class="mb-0 phone"><span class="mailus">Phone no:</span> <a href="tel:+23320825866">020 825 866</a> / <a href="tel:+233246102372">0246 102 372</a> <span class="mailus">email us:</span> <a href="mailto:cmmsolutionsltd@gmail.com">cmmsolutionsltd@gmail.com</a></p>
            </div>
        </div>
    </div>
</div>

<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="{{route('front.welcome')}}"><img src="{{asset('images/logo.jpg')}}" alt="C.M.M Solutions Limited" class="logo-img"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>
        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a href="{{route('front.welcome')}}" class="nav-link">Home</a></li>
                <li class="nav-item"><a href="{{route('front.about')}}" class="nav-link">About</a></li>
                <li class="nav-item"><a href="{{route('front.services')}}" class="nav-link">Services</a></li>
                <li class="nav-item active"><a href="{{route('front.products')}}" class="nav-link">Products</a></li>
                <li class="nav-item"><a href="{{route('front.contact')}}" class="nav-link">Contact us</a></li>
            </ul>
        </div>
    </div>
</nav>

<section class="hero-wrap hero-wrap-2 breadcrumb-hero" style="background-image: url({{asset('itsol/images/bg_3.jpg')}});" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
            <div class="col-md-9 ftco-animate pb-5 text-center breadcrumb-content">
                <h1 class="mb-3 bread">Our Products</h1>
                <p class="breadcrumbs"><span class="mr-2"><a href="{{route('front.welcome')}}">Home <i class="fa fa-chevron-right"></i></a></span> <span>Products</span></p>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center pb-5">
            <div class="col-md-8 heading-section text-center ftco-animate">
                <h2 class="mb-4">Our digital <span>products</span></h2>
                <p>Explore products built by C.M.M Solutions Limited to help people and organizations learn, connect, and grow.</p>
            </div>
        </div>
        <div class="row products-grid">
            @php
                $products = [
                    ['Koursio', 'A learning platform where users create profiles, discover subjects, and get support for their education journey.', 'work-1.jpg', 'https://koursio.com/'],
                    ['BuzSpace', 'A marketplace that connects space owners with sellers looking for shop space across Ghana.', 'work-2.jpg', 'https://www.buzspace.com/'],
                    ['Novinax', 'A writing and research assistant that verifies sources, supports academic writing, and helps researchers respond to reviews.', 'work-3.jpg', 'https://novinax.com/'],
                    ['School Management Sys', 'An education platform connecting learners with expert teachers and learning support.', 'work-4.jpg', 'https://golden-intels.bitlogictechnology.com/'],
                    ['Placement', 'A school placement platform that helps families and students navigate school placement with convenient mobile wallet payments.', 'work-5.jpg', 'https://www.placement.aveshs.online/'],
                ];
            @endphp
            @foreach ($products as $product)
                <div class="col-sm-6 col-lg-4 d-flex ftco-animate">
                    <div class="project product-card w-100">
                        <div class="img product-card-image"><img src="{{asset('itsol/images/'.$product[2])}}" class="img-fluid" alt="{{ $product[0] }}"></div>
                        <div class="text product-card-content text-center">
                            <h3><a href="{{ $product[3] }}" target="_blank" rel="noopener noreferrer">{{ $product[0] }}</a></h3>
                            <p>{{ $product[1] }}</p>
                            <a class="product-card-link" href="{{ $product[3] }}" target="_blank" rel="noopener noreferrer">Visit product website <i class="fa fa-external-link"></i></a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="row justify-content-center mt-4">
            <div class="col-md-8 text-center">
                <p>Need a solution tailored to your organization? <a href="{{route('front.contact')}}">Contact us</a> to discuss your requirements.</p>
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
                    <p>Secure, user-friendly, and cost-effective digital solutions across Ghana and Africa.</p>
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
                        <li><a href="{{route('front.about')}}" class="py-2 d-block">About us</a></li>
                        <li><a href="{{route('front.contact')}}" class="py-2 d-block">Contact us</a></li>
                        <li><a href="{{route('front.services')}}" class="py-2 d-block">What we do</a></li>
                        <li><a href="{{route('front.products')}}" class="py-2 d-block">Our products</a></li>
                        <li><a href="tel:+23320825866" class="py-2 d-block">Call us</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2">Legal</h2>
                    <ul class="list-unstyled">
                        <li><a href="{{route('front.contact')}}" class="py-2 d-block">Contact</a></li>
                        <li><a href="#" class="py-2 d-block">Privacy &amp; Policy</a></li>
                        <li><a href="#" class="py-2 d-block">Terms &amp; Conditions</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2">Have a question?</h2>
                    <div class="block-23 mb-3">
                        <ul>
                            <li><span class="icon fa fa-map marker"></span><span class="text">16 Anaglate Street, Bankoe-Ho, Ghana</span></li>
                            <li><a href="tel:+23320825866"><span class="icon fa fa-phone"></span><span class="text">020 825 866</span></a></li>
                            <li><a href="tel:+233246102372"><span class="icon fa fa-phone"></span><span class="text">0246 102 372</span></a></li>
                            <li><a href="tel:+23354631004"><span class="icon fa fa-phone"></span><span class="text">054 631 004</span></a></li>
                            <li><a href="tel:+233208258966"><span class="icon fa fa-phone"></span><span class="text">020 825 8966</span></a></li>
                            <li><a href="mailto:cmmsolutionsltd@gmail.com"><span class="icon fa fa-paper-plane pr-4"></span><span class="text">cmmsolutionsltd@gmail.com</span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row"><div class="col-md-12 text-center"><p>Copyright &copy;<script>document.write(new Date().getFullYear());</script> C.M.M Solutions Limited. All rights reserved.</p></div></div>
    </div>
</footer>

<script src="{{asset('itsol/js/jquery.min.js')}}"></script>
<script src="{{asset('itsol/js/jquery-migrate-3.0.1.min.js')}}"></script>
<script src="{{asset('itsol/js/bootstrap.min.js')}}"></script>
<script src="{{asset('itsol/js/jquery.easing.1.3.js')}}"></script>
<script src="{{asset('itsol/js/jquery.waypoints.min.js')}}"></script>
<script src="{{asset('itsol/js/jquery.stellar.min.js')}}"></script>
<script src="{{asset('itsol/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('itsol/js/jquery.animateNumber.min.js')}}"></script>
<script src="{{asset('itsol/js/scrollax.min.js')}}"></script>
<script src="{{asset('itsol/js/main.js')}}"></script>
</body>
</html>
