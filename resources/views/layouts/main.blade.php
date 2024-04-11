<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="wpOceans">
    <link rel="shortcut icon" type="image/png" href="{{ asset('template') }}/images/favicon.png">
    <title>Wedding Karunia & Putri - @yield('title')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@icon/themify-icons@1.0.1-alpha.3/themify-icons.min.css">
    <link href="{{ asset('template') }}/css/font-awesome.min.css" rel="stylesheet">
    <link href="{{ asset('template') }}/css/flaticon.css" rel="stylesheet">
    <link href="{{ asset('template') }}/css/magnific-popup.css" rel="stylesheet">
    <link href="{{ asset('template') }}/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('template') }}/css/animate.css" rel="stylesheet">
    <link href="{{ asset('template') }}/css/owl.carousel.css" rel="stylesheet">
    <link href="{{ asset('template') }}/css/owl.theme.css" rel="stylesheet">
    <link href="{{ asset('template') }}/css/slick.css" rel="stylesheet">
    <link href="{{ asset('template') }}/css/slick-theme.css" rel="stylesheet">
    <link href="{{ asset('template') }}/css/swiper.min.css" rel="stylesheet">
    <link href="{{ asset('template') }}/css/nice-select.css" rel="stylesheet">
    <link href="{{ asset('template') }}/css/owl.transitions.css" rel="stylesheet">
    <link href="{{ asset('template') }}/css/jquery.fancybox.css" rel="stylesheet">
    <link href="{{ asset('template') }}/css/odometer-theme-default.css" rel="stylesheet">
    <link href="{{ asset('template') }}/css/jquery-ui.css" rel="stylesheet">
    <link href="{{ asset('template') }}/sass/style.css" rel="stylesheet">
</head>

<body>

<!-- start page-wrapper -->
<div class="page-wrapper">
    <!-- start preloader -->
    <div class="preloader">
        <div class="vertical-centered-box">
            <div class="content">
                <div class="loader-circle"></div>
                <div class="loader-line-mask">
                    <div class="loader-line"></div>
                </div>
                <img src="{{ asset('template') }}/images/preloader.gif" alt="">
            </div>
        </div>
    </div>
    <!-- end preloader -->
    <!-- Start header -->
    <header id="header">
        <div class="wpo-site-header wpo-header-style-3">
            <nav class="navigation navbar navbar-expand-lg navbar-light">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col-lg-3 col-md-3 col-3 d-lg-none dl-block">
                            <div class="mobail-menu">
                                <button type="button" class="navbar-toggler open-btn">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar first-angle"></span>
                                    <span class="icon-bar middle-angle"></span>
                                    <span class="icon-bar last-angle"></span>
                                </button>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-6 col-6">
                            <div class="navbar-header">
                                <a class="navbar-brand" href="index.html">Karunia & Putri</a>
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-1 col-1">
                            <div id="navbar" class="collapse navbar-collapse navigation-holder">
                                <button class="menu-close"><i class="ti-close"></i></button>
                                <ul class="nav navbar-nav mb-2 mb-lg-0">
                                    <li class="menu-item-has-children">
                                        <a class="active" href="#">Home</a>
                                        <ul class="sub-menu">
                                            <li><a href="index.html">Wedding Home 1</a></li>
                                            <li><a href="index-2.html">Wedding Home 2</a></li>
                                            <li><a class="active" href="index-3.html">Announcement Home 1</a></li>
                                            <li><a href="index-4.html">Announcement Home 2</a></li>
                                            <li><a href="index-5.html">Muslim Wedding Home</a></li>
                                            <li><a href="index-6.html">Asian Wedding Home</a></li>
                                            <li><a href="index-rtl.html">Muslim Wedding Home(RTL)</a></li>
                                            <li><a href="invitation-1.html">Wedding Invitation 1</a></li>
                                            <li><a href="invitation-2.html">Wedding Invitation 2</a></li>
                                            <li class="menu-item-has-children">
                                                <a href="#">Event Planner Homes</a>
                                                <ul class="sub-menu">
                                                    <li><a href="index-7.html">Wedding Planner 1</a></li>
                                                    <li><a href="index-8.html">Wedding Planner 2</a></li>
                                                    <li><a href="index-9.html">Wedding Planner 3</a></li>
                                                </ul>
                                            </li>
                                            <li class="menu-item-has-children">
                                                <a href="#">Wedding Shop Homes</a>
                                                <ul class="sub-menu">
                                                    <li><a href="shop-home.html">Bridal Shop</a></li>
                                                    <li><a href="shop-home-2.html">Wedding Bouquet Shop</a></li>
                                                    <li><a href="shop-home-video-bg.html">Bouquet Shop Video Bg</a>
                                                    </li>
                                                    <li><a href="shop-home-3.html">Wedding Cake Shop</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="#">Pages</a>
                                        <ul class="sub-menu">
                                            <li><a href="about.html">About</a></li>
                                            <li class="menu-item-has-children">
                                                <a href="story.html">Our Story</a>
                                                <ul class="sub-menu">
                                                    <li><a href="story.html">Our Story Style 1</a></li>
                                                    <li><a href="story-2.html">Our Story Style 2</a></li>
                                                    <li><a href="story-3.html">Our Story Style 3</a></li>
                                                    <li><a href="story-4.html">Our Story Style 4</a></li>
                                                    <li><a href="story-5.html">Our Story Style 5</a></li>
                                                    <li><a href="story-6.html">Our Story Style 6</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="accomodation.html">Accomodation</a></li>
                                            <li class="menu-item-has-children">
                                                <a href="rsvp.html">RSVP</a>
                                                <ul class="sub-menu">
                                                    <li><a href="rsvp.html">RSVP Style 1</a></li>
                                                    <li><a href="rsvp-2.html">RSVP Style 2</a></li>
                                                    <li><a href="rsvp-3.html">RSVP Style 3</a></li>
                                                    <li><a href="rsvp-4.html">RSVP Style 4</a></li>
                                                    <li><a href="rsvp-5.html">RSVP Style 5</a></li>
                                                    <li><a href="rsvp-6.html">RSVP Style 6</a></li>
                                                    <li><a href="rsvp-7.html">RSVP Style 7</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="gallery.html">Gallery</a></li>
                                            <li><a href="planner.html">Planners</a></li>
                                            <li><a href="team-single.html">Planner Single</a></li>
                                            <li><a href="groom-bride.html">Brides & Grooms</a></li>
                                            <li class="menu-item-has-children">
                                                <a href="service.html">Serevice</a>
                                                <ul class="sub-menu">
                                                    <li><a href="service.html">Serevice</a></li>
                                                    <li><a href="service-s2.html">Serevice S2</a></li>
                                                    <li><a href="service-s3.html">Serevice S3</a></li>
                                                    <li><a href="service-single.html">Serevice Single</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="pricing.html">Pricing</a></li>
                                            <li class="menu-item-has-children">
                                                <a href="#">Auth Pages</a>
                                                <ul class="sub-menu">
                                                    <li><a href="login.html">Login</a>
                                                    </li>
                                                    <li><a href="register.html">Register</a></li>
                                                    <li><a href="forgot.html">Forgot Password</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="coming.html">Coming Soon</a></li>
                                            <li><a href="404.html">404 Error</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="portfolio-grid.html">Portfolio</a>
                                        <ul class="sub-menu">
                                            <li><a href="portfolio-grid.html">Portfolio Grid</a></li>
                                            <li><a href="portfolio-masonary.html">Portfolio Masonary</a></li>
                                            <li><a href="portfolio-masonary-s2.html">Portfolio Masonary S2</a></li>
                                            <li><a href="portfolio-masonary-s3.html">Portfolio Masonary S3</a></li>
                                            <li><a href="portfolio-single.html">Portfolio Single</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="shop.html">Shop</a>
                                        <ul class="sub-menu">
                                            <li><a href="shop.html">Shop</a></li>
                                            <li><a href="shop-single.html">Shop Single</a></li>
                                            <li><a href="cart.html">Cart</a></li>
                                            <li><a href="wishlist.html">Wishlist</a></li>
                                            <li><a href="checkout.html">Checkout</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="contact.html">Contact</a></li>
                                    <li class="menu-item-has-children">
                                        <a href="blog.html">Blog</a>
                                        <ul class="sub-menu">
                                            <li><a href="blog.html">Blog right sidebar</a></li>
                                            <li><a href="blog-left-sidebar.html">Blog left sidebar</a></li>
                                            <li><a href="blog-fullwidth.html">Blog fullwidth</a></li>
                                            <li class="menu-item-has-children">
                                                <a href="#">Blog details</a>
                                                <ul class="sub-menu">
                                                    <li><a href="blog-single.html">Blog details right sidebar</a>
                                                    </li>
                                                    <li><a href="blog-single-left-sidebar.html">Blog details left
                                                            sidebar</a></li>
                                                    <li><a href="blog-single-fullwidth.html">Blog details
                                                            fullwidth</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>

                            </div><!-- end of nav-collapse -->
                        </div>
                    </div>
                </div><!-- end of container -->
            </nav>
        </div>
    </header>
    <!-- end of header -->
    <!-- start of hero -->

    @yield('content')

    <!-- start of wpo-site-footer-section -->
    <footer class="wpo-site-footer-s2">
        <div class="wpo-upper-footer">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="widget about-widget">
                            <div class="logo widget-title">
                                <a class="logo" href="">Karunia & Putri</a>
                            </div>
                            <p>Kami sangat menantikan pertemuan dengan semua teman dan kerabat di pernikahan kami.</p>
                        </div>
                    </div>
                </div>
            </div> <!-- end container -->
        </div>
        <div class="wpo-lower-footer">
            <div class="container">
                <div class="row">
                    <div class="col col-xs-12">
                        <p class="copyright"> &copy; Copyright {{ date('Y')  }} | <a href="{{ route('/')  }}">Habibi</a>
                            | All right
                            reserved.</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- end of wpo-site-footer-section -->
</div>
<!-- end of page-wrapper -->

<!-- All JavaScript files
================================================== -->
<script src="{{ asset('template') }}/js/jquery.min.js"></script>
<script src="{{ asset('template') }}/js/bootstrap.bundle.min.js"></script>
<!-- Plugins for this template -->
<script src="{{ asset('template') }}/js/modernizr.custom.js"></script>
<script src="{{ asset('template') }}/js/jquery-plugin-collection.js"></script>
<!-- Custom script for this template -->
<script src="{{ asset('template') }}/js/script.js"></script>
</body>

</html>
