<!doctype html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>
        @yield('pageTitle')
    </title>
    <link rel="shortcut icon" href="{{ url('/') }}/assets/images/logo/favourite_icon.svg">

    <!-- Fraimwork - CSS Include -->
    <link rel="stylesheet" type="text/css" href="{{ url('/') }}/assets/css/bootstrap.min.css">

    <!-- Icon Font - CSS Include -->
    <link rel="stylesheet" type="text/css" href="{{ url('/') }}/assets/css/fontawesome-pro.css">

    <!-- Animation - CSS Include -->
    <link rel="stylesheet" type="text/css" href="{{ url('/') }}/assets/css/animate.css">

    <!-- Meanmenu - CSS Include -->
    <link rel="stylesheet" type="text/css" href="{{ url('/') }}/assets/css/meanmenu.min.css">

    <!-- Cursor - CSS Include -->
    <link rel="stylesheet" type="text/css" href="{{ url('/') }}/assets/css/cursor.css">

    <!-- Carousel - CSS Include -->
    <link rel="stylesheet" type="text/css" href="{{ url('/') }}/assets/css/slick.css">
    <link rel="stylesheet" type="text/css" href="{{ url('/') }}/assets/css/slick-theme.css">

    <!-- Video & Image Popup - CSS Include -->
    <link rel="stylesheet" type="text/css" href="{{ url('/') }}/assets/css/magnific-popup.css">

    <!-- Select - CSS Include -->
    <link rel="stylesheet" type="text/css" href="{{ url('/') }}/assets/css/nice-select.css">

    <!-- Counter - CSS Include -->
    <link rel="stylesheet" type="text/css" href="{{ url('/') }}/assets/css/odometer.css">

    <!-- Custom - CSS Include -->
    <link rel="stylesheet" type="text/css" href="{{ url('/') }}/assets/css/style.css">
    {!! RecaptchaV3::initJs() !!}

</head>


<body>

<!-- Body Wrap - Start -->
<div class="page_wrapper">

    <!-- Preloder start -->
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <!-- Preloder start -->

    <!-- Offcanvas area start -->
    <div class="fix">
        <div class="offcanvas__info">
            <div class="offcanvas__wrapper">
                <div class="offcanvas__content">
                    <div class="offcanvas__top mb-4 d-flex justify-content-between align-items-center">
                        <div class="offcanvas__logo">
                            <a href="{{ route("index") }}">
                                <img src="{{ url('/') }}/assets/images/logo/site_logo_white.svg" alt="logo not found">
                            </a>
                        </div>
                        <div class="offcanvas__close">
                            <svg class="menu-close-btn" xmlns="http://www.w3.org/2000/svg" width="33.666" height="33.666" viewBox="0 0 33.666 33.666"><path d="m1.414 1.414 30.83763383 30.83763383"></path><path d="M1.414 32.252 32.25163383 1.41436617"></path></svg>
                        </div>
                    </div>
                    <div class="mobile-menu fix mb-4"></div>
                    <div class="offcanvas__contact text-center">
                        <h4 class="offcanvas__title">{{__("Contact")}}</h4>
                        <div class="offcanvas__contact-text mb-2">
                            <p><a href="https://html.bdevs.net/cdn-cgi/l/email-protection#c7b7a6b5a6a3a8bf87a2bfa6aab7aba2" target="_blank">
                                    <span class="__cf_email__">
                                        {{ setting("site.office_email") }}
                                    </span></a></p>
                            <span><a href="tel:{{ setting("site.office_phone") }}">
                                    {{ setting("site.office_phone") }}
                                </a></span>
                        </div>
                        <div class="offcanvas__contact-text">
                            <p>
                                <a target="_blank" href="https://www.google.com/maps/place/Caspian+Plaza/@40.3853403,49.8286822,15z/data=!4m5!3m4!1s0x0:0xd7852fa710c6b11a!8m2!3d40.3853403!4d49.8286822">
                                   {{ setting("site.location") }}
                                </a>
                            </p>
                        </div>
                    </div>
                    <div class="offcanvas__devider"></div>
                    <div class="offcanvas__social">
                        <ul class="social_icon unordered_list_end">
                            <li><a href="{{setting('site.facebook')}}"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="{{setting('site.instagram')}}"><i class="fab fa-instagram"></i></a></li>
                            <li><a href="{{setting('site.linkedin')}}"><i class="fab fa-linkedin"></i></a></li>
                            <li><a href="{{setting('site.twitter')}}"><i class="fab fa-twitter"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="offcanvas__overlay"></div>
    <div class="offcanvas__overlay-white"></div>
    <!-- Offcanvas area start -->

    @include('Front.Layouts.includes.header')
    @yield('content')
    @include('Front.Layouts.includes.footer')

</div>
<!-- Body Wrap - End -->

<!-- Fraimwork - Jquery Include -->
<script src="{{ url('/') }}/assets/js/jquery.min.js"></script>
<script src="{{ url('/') }}/assets/js/bootstrap.bundle.min.js"></script>
<script src="{{ url('/') }}/assets/js/bootstrap-dropdown-ml-hack.js"></script>

<!-- animation - jquery include -->
<script src="{{ url('/') }}/assets/js/cursor.js"></script>
<script src="{{ url('/') }}/assets/js/wow.min.js"></script>
<script src="{{ url('/') }}/assets/js/tilt.min.js"></script>
<script src="{{ url('/') }}/assets/js/parallax.min.js"></script>
<script src="{{ url('/') }}/assets/js/parallax-scroll.js"></script>

<!-- Carousel - Jquery Include -->
<script src="{{ url('/') }}/assets/js/slick.min.js"></script>

<!-- Video & Image Popup - Jquery Include -->
<script src="{{ url('/') }}/assets/js/magnific-popup.min.js"></script>

<!-- Select - Jquery Include -->
<script src="{{ url('/') }}/assets/js/nice-select.min.js"></script>

<!-- Counter - Jquery Include -->
<script src="{{ url('/') }}/assets/js/appear.js"></script>
<script src="{{ url('/') }}/assets/js/odometer.min.js"></script>

<!-- Isotope Filter - Jquery Include -->
<script src="assets/js/isotope.pkgd.min.js"></script>

<!-- Meanmenu Filter - Jquery Include -->
<script src="{{ url('/') }}/assets/js/meanmenu.min.js"></script>

<!-- Masonry - Jquery Include -->
<script src="{{ url('/') }}/assets/js/masonry.pkgd.min.js"></script>
<script src="{{ url('/') }}/assets/js/imagesloaded.pkgd.min.js"></script>

<!-- Countdown Timer - jquery include -->
<script src="{{ url('/') }}/assets/js/countdown.js"></script>

<!-- Type - jquery include -->
<script src="{{ url('/') }}/assets/js/type.js"></script>

<!-- Setting - jquery include -->
<script src="{{ url('/') }}/assets/js/setting.js"></script>

<!-- Custom - Jquery Include -->
<script src="{{ url('/') }}/assets/js/main.js"></script>

</body>
</html>
