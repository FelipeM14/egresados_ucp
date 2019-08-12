<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

    <meta charset="UTF-8">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title -->
    <title>@yield('title')</title>

    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="style.css">

</head>
<body>
<!-- ##### Preloader ##### -->
<div id="preloader">
    <i class="circle-preloader"></i>
</div>

<!-- ##### Header Area Start ##### -->
<header class="header-area">

    <!-- Top Header Area -->
    <div class="top-header">
        <div class="container h-100">
            <div class="row h-100">
                <div class="col-12 h-100">
                    <div class="header-content h-100 d-flex align-items-center justify-content-between">
                        <div class="academy-logo">
                            <a href="index.html"><img src="img/core-img/im1logo.png" alt=""></a>
                        </div>
                        <div class="login-content">
                            <a href="{{ route('login') }}">Register / Login</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Navbar Area -->
    <div class="academy-main-menu">
        <div class="classy-nav-container breakpoint-off">
            <div class="container">
                <!-- Menu -->
                <nav class="classy-navbar justify-content-between" id="academyNav">

                    <!-- Navbar Toggler -->
                    <div class="classy-navbar-toggler">
                        <span class="navbarToggler"><span></span><span></span><span></span></span>
                    </div>

                    <!-- Menu -->
                    <div class="classy-menu">

                        <!-- close btn -->
                        <div class="classycloseIcon">
                            <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                        </div>

                        <!-- Nav menu out_page -->
                        @include('layouts.menus.out_page_menu')
                        <!-- Nav End -->
                    </div>

                    <!-- Calling Info -->
                    <div class="calling-info">
                        <div class="call-center">
                            <a href="tel:+57 300 521 3310"><i class="icon-telephone-2"></i> <span>(+57) 300 521 3310</span></a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>
<!-- ##### Header Area End ##### -->

<!-- ##### Hero Area Start ##### -->
<section class="hero-area">
    <div class="hero-slides owl-carousel">

        <!-- Single Hero Slide -->
        <div class="single-hero-slide bg-img" style="background-image: url(img/bg-img/bg-1.jpg);">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-12">
                        <div class="hero-slides-content">
                            <h4 data-animation="fadeInUp" data-delay="100ms">GRADUADOS UCP</h4>
                            <h2 data-animation="fadeInUp" data-delay="400ms">Bienvenido <br></h2>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Single Hero Slide -->
        <div class="single-hero-slide bg-img" style="background-image: url(img/bg-img/bg-2.jpg);">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-12">
                        <div class="hero-slides-content">
                            <h4 data-animation="fadeInUp" data-delay="100ms">GRADUADOS UCP</h4>
                            <h2 data-animation="fadeInUp" data-delay="400ms">Bienvenido  <br></h2>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ##### Hero Area End ##### -->

<!-- ##### Top Feature Area Start ##### -->
<div class="top-features-area wow fadeInUp" data-wow-delay="300ms">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="features-content">
                    <div class="row no-gutters">
                        <!-- Single Top Features -->
                        <div class="col-12 col-md-4">
                            <div class="single-top-features d-flex align-items-center justify-content-center">
                                <i class="icon-agenda-1"></i>
                                <h5>Ayuda para Ti</h5>
                            </div>
                        </div>
                        <!--- Single Top Features -->
                        <div class="col-12 col-md-4">
                            <div class="single-top-features d-flex align-items-center justify-content-center">
                                <i class="icon-assistance"></i>
                                <h5>Informate</h5>
                            </div>
                        </div>
                        <!-- Single Top Features -->
                        <div class="col-12 col-md-4">
                            <div class="single-top-features d-flex align-items-center justify-content-center">
                                <i class="icon-telephone-3"></i>
                                <h5>Comunicate Con Nosotros</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

    <main class="py-4">
        @yield('content')
    </main>


<footer class="footer-area">
    <div class="main-footer-area section-padding-100-0">
        <div class="container">
            <div class="row">
                <!-- Footer Widget Area -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="footer-widget mb-100">
                        <div class="widget-title">
                            <h6>Dirección</h6>
                        </div>
                        <div class="single-contact d-flex mb-30">
                            <i class="icon-placeholder"></i>
                            <p>Carrera 21 No 49-95 Ave.de las Americas, Pereira, Risaralda, Colombia. </p>
                        </div>
                    </div>
                </div>
                <!-- Footer Widget Area -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="footer-widget mb-100">
                        <div class="widget-title">
                            <h6>PBX</h6>
                        </div>
                        <div class="single-contact d-flex mb-30">
                            <i class="icon-telephone-1"></i>
                            <p>PBX (+57) (6) 312 4000
                            </p>
                        </div>
                    </div>
                </div>
                <!-- Footer Widget Area -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="footer-widget mb-100">
                        <div class="widget-title">
                            <h6>Corrreo electrónico</h6>
                        </div>
                        <div class="single-contact d-flex">
                            <i class="icon-contract"></i>
                            <p>office@yourbusiness.com</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bottom-footer-area">
        <div class="container">
            <div class="row">
                <div class="col-12">

                </div>
            </div>
        </div>
    </div>
</footer>


    <script src="js/js_template/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/js_template/bootstrap/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/js_template/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="js/js_template/plugins/plugins.js"></script>
    <!-- Active js -->
    <script src="js/js_template/active.js"></script>

</body>
</html>
