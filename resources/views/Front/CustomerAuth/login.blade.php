<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>
        {{__("Sign in")}}
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

    <div class="offcanvas__overlay"></div>
    <div class="offcanvas__overlay-white"></div>
    <!-- Offcanvas area start -->

    <!-- Main Body - Start
    ================================================== -->
    <main class="page_content">

        <!-- Register Section - Start
        ================================================== -->
        <section class="register_section">
            <div class="column decoration_wrap">
                <div class="inner"></div>
                <img class="tilt" src="{{ url('/') }}/assets/images/banner/register_banner_image_1.png" alt="Paradox Iillustration Image">
                <div class="deco_item shape_1 wow fadeInDown" data-wow-delay=".1s">
                    <img src="{{ url('/') }}/assets/images/shapes/shape_circle_dashed_2.png" alt="Paradox - Shape Image">
                </div>
                <div class="deco_item shape_2 wow fadeInUp" data-wow-delay=".1s">
                    <img src="{{ url('/') }}/assets/images/shapes/shape_circle_half_1.svg" alt="Paradox - Shape Image">
                </div>
            </div>
            <div class="column decoration_wrap">
                <div class="register_form_wrap ms-lg-0">
                    <div class="site_logo">
                        <a class="site_link" href="{{ route('index') }}">
                            <img src="{{ url('/') }}/assets/images/logo/site_logo_dark.svg" alt="Site Logo - Paradox - Agency Template">
                        </a>
                    </div>
                    <h2 class="form_title">Welcome Back!</h2>
                    <p>Enter the information below to signin your account</p>
                    <form action="#">
                        <div class="form-group">
                            <label for="input_email" class="form-label">Email Address<sup class="form_required_indicator">*</sup></label>
                            <input id="input_email" class="form-control" type="email" name="email" placeholder="Your Address" required>
                        </div>
                        <div class="form-group">
                            <label for="input_pass" class="form-label">Enter Password<sup class="form_required_indicator">*</sup></label>
                            <input id="input_pass" class="form-control" type="text" name="password" placeholder="Enter Password" required>
                        </div>
                        <div class="d-flex align-items-center justify-content-between mb-4">
                            <div class="form-check mb-0">
                                <input type="checkbox" id="check_remember_me">
                                <label for="check_remember_me">Remember me</label>
                            </div>
                            <a class="link_forgot_pass" href="#!">Forgot Password?</a>
                        </div>
                        <button type="submit" class="bd-btn-link">
                  <span class="bd-button-content-wrapper">
                    <span class="bd-button-icon">
                     <i class="fa-light fa-arrow-right-long"></i>
                    </span>
                    <span class="pd-animation-flip">
                       <span class="bd-btn-anim-wrapp">
                          <span class="bd-button-text">Sign In</span>
                          <span class="bd-button-text">Sign In</span>
                       </span>
                    </span>
                 </span>
                        </button>

                    </form>
                    <p class="mb-0">Don’t have an Account? <a href="{{ route('register') }}">Sign Up</a></p>
                </div>

                <div class="deco_item shape_3 wow fadeInRight" data-wow-delay=".1s">
                    <img src="{{ url('/') }}/assets/images/shapes/shape_1.svg" alt="Paradox - Shape Image">
                </div>
                <div class="deco_item shape_4 wow zoomIn" data-wow-delay=".1s">
                    <img src="{{ url('/') }}/assets/images/shapes/shape_circle_2.svg" alt="Paradox - Shape Image">
                </div>
            </div>
        </section>
        <!-- Register Section - End
        ================================================== -->

    </main>
    <!-- Main Body - End
    ================================================== -->

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
<script src="{{ url('/') }}/assets/js/isotope.pkgd.min.js"></script>

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
