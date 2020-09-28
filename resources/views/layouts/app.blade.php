<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta name="description" content="Nathaniel David Medrano Development">
    <meta name="keywords" content="Portfolio, Personal, Creatiev, Nathaniel Medrano, Html Template, Portfolio Template">
    <meta name="author" content="ixTheme">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="csrf-token" content="{{ csrf_token() }}"/>

    <!-- Title -->
    <title>Nathaniel-David Web Development</title>
    <!-- Favicon -->
    <link href="img/favicon.png" type="image/png" rel="icon">

    <!-- All CSS -->
    <link href="{{ URL::asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ URL::asset('css/ionicons.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ URL::asset('css/mobiriseicons.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ URL::asset('css/owl.carousel.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ URL::asset('css/splitting.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ URL::asset('css/magnific-popup.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ URL::asset('css/main.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ URL::asset('css/responsive.css') }}" rel="stylesheet" type="text/css">
</head>

<body id="top" data-spy="scroll" data-target="#menu_items">
    <!--[if lte IE 9]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
    <![endif]-->

    <!--  start page loader  -->
    <div id="preloader">
        <div class="scroll-static"></div>
    </div>
    <!--  end page loader  -->

    <!-- start landing wrapper  -->
    <div id="particles-js" class="landing_wrapper no-bg-img">
        <!-- start header  -->
        <header>
            <div class="container">
                <div class="row">
                    <div class="col-md-5 col-8">
                        <div class="logo">
                            <a href="/">Nathaniel-David Web Development</a>
                        </div>
                    </div>
                    <div class="col-md-7 col-4">
                        <ul id="menu_items" class="menu_items">
                            <li class="nav-item">
                                <a href="/apps" class="active menu_item nav-link slide-horizontal appsBtn" data-splitting>Apps</a>
                            </li>
                            <li class="nav-item">
                                <a href="#service" class="menu_item nav-link slide-horizontal" data-splitting>Services</a>
                            </li>
                            <li class="nav-item">
                                <a href="#works" class="menu_item nav-link slide-horizontal" data-splitting>Portfolio</a>
                            </li>
                            <li class="nav-item">
                                <a href="#testimonial" class="menu_item nav-link slide-horizontal" data-splitting>Testimonials</a>
                            </li>
                            <li class="nav-item">
                                <a href="#contact" class="menu_item nav-link slide-horizontal" data-splitting>Contact</a>
                            </li>
                        </ul>
                        <!-- responsive menu btn -->
                        <div class="nav-btn">
                            <span class="ion-android-menu"></span>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- end header  -->
          @yield('content')

                <!-- end contact wrapper -->
                <!-- start footer wrapper -->
                <footer>
                    <a href="#top" class="go_top">
                        <i class="ion-ios-arrow-thin-up"></i>
                    </a>
                    <!-- start social links -->
                    <ul class="social_links">
                        <li><a href="https://www.instagram.com/_nathanieldavid_/"><span class="ion-social-instagram-outline"></span></a></li>
                        <li><a href="https://www.facebook.com/nathaniel.david.medrano"><span class="ion-social-facebook"></span></a></li>
                        <li><a href="https://www.linkedin.com/in/nathanielmedrano/"><span class="ion-social-linkedin"></span></a></li>
                    </ul>
                    <p class="copyright">&copy; 2019 <span>Zuman</span>. All Rights Reserved.</p>
                    <p>Created by <span>ixTheme</span></p>
                </footer>
                <!-- end footer wrapper -->
            </div>
        </div>
    </div>


    <!-- ========  All JS Here ========  -->
    <script src="{{ URL::asset('js/vendor/jquery-1.12.4.min.js') }}"></script>
    <script src="{{ URL::asset('js/custom.js') }}"></script>
    <script src="{{ URL::asset('js/ajax-mail.js') }}"></script>
    <script src="{{ URL::asset('js/plugins.js') }}"></script>
    <!-- particles.min.js (only for index-2.html page) -->
    <script src="{{ URL::asset('js/particles.min.js') }}"></script>
    <script src="{{ URL::asset('js/main.js') }}"></script>
  @yield('js')
</body>

</html>
