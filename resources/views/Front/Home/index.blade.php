@extends('Front.Layouts.app')
@section('pageTitle', isset($pageTitle) ? $pageTitle : __("MG Consulting LLC"))
@section('content')
    <!-- Main Body - Start
    ================================================== -->
    <main class="page_content">

        <!-- Hero Banner Section - Start
        ================================================== -->
        <section class="hero_banner_section style_5 bg_light_3 decoration_wrap">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col col-lg-6">
                        <div class="banner_comntent_5 mt-5 mb-4 mb-lg-0 mt-lg-0">
                            <h1 class="hero_banner_heading">
                                <span class="d-block">
                                    {{__("Maximum Quality, Great Expertise")}}
                                </span>
                            </h1>
                            <ul class="btns_group unordered_list">
                                <li>
                                    <a href="{{ route("contact") }}" class="bd-btn-link btn_primary">
                        <span class="bd-button-content-wrapper">
                           <span class="bd-button-icon">
                            <i class="fa-light fa-arrow-right-long"></i>
                           </span>
                           <span class="pd-animation-flip">
                              <span class="bd-btn-anim-wrapp">
                                 <span class="bd-button-text">Start Cooperation</span>
                                 <span class="bd-button-text">Start Cooperation</span>
                              </span>
                           </span>
                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a class="video_play_btn popup_video" href="https://www.youtube.com/watch?v=7e90gBu4pas" data-cursor="-exclusion -lg" data-cursor-stick="#intro_vbtn">
                        <span id="intro_vbtn" class="icon_wrap">
                          <i class="fas fa-play"></i>
                        </span>
                                        <span class="btn_text"><small class="d-block">Watch Our</small> Video</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col col-lg-6">
                        <div class="hero_banner_image decoration_wrap">
                            <div class="man_image">
                                <img class="wow fadeInRight" data-wow-delay=".2s" src="assets/images/banner/hero_banner_image_5.png" alt="Paradox Illustration Image">
                            </div>
                            <div class="deco_item shape_1">
                                <img class="wow fadeInLeft" data-wow-delay=".6s" src="assets/images/shapes/shape_5.svg" alt="Paradox Illustration Image">
                            </div>
                            <div class="deco_item shape_2">
                                <img class="wow fadeInRight" data-wow-delay=".7s" src="assets/images/shapes/shape_4.svg" alt="Paradox Illustration Image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="deco_item color_shadow_1">
                <img src="{{ url('/') }}/assets/images/shapes/shape_circle_2.svg" alt="Paradox Illustration Image">
            </div>
            <div class="deco_item color_shadow_2">
                <img src="{{ url('/') }}/assets/images/shapes/shape_circle_2.svg" alt="Paradox Illustration Image">
            </div>
            <div class="deco_item color_shadow_3">
                <img src="{{ url('/') }}/assets/images/shapes/shape_circle_3.svg" alt="Paradox Illustration Image">
            </div>
        </section>
        <!-- Hero Banner Section - End
        ================================================== -->


        <!-- Service Section - Start
================================================== -->
        <section class="service_section section_space_lg">
            <div class="container">
                <div class="row">
                    <div class="col col-lg-4 col-md-6 col-sm-6">
                        <div class="service_item style_3">
                            <div class="item_icon">
                                <i class="far fa-gavel"></i>
                            </div>
                            <div class="item_content">
                                <h3 class="item_title">
                                    Legal Services
                                </h3>
                                <p class="item_description">
                                    Elevate your legal pursuits with our comprehensive suite of expert legal services, delivering steadfast support.
                                </p>
                            </div>
                            <a class="btn-link" href="service_details.html">
                                <span class="btn_text">View Details</span>
                                <span class="btn_icon">
                      <img src="{{ url('/') }}/assets/images/icons/icon_arrow_down_right_dark.svg" alt="Paradox icons">
                      <img src="{{ url('/') }}/assets/images/icons/icon_arrow_down_right_primary.svg" alt="Paradox icons">
                    </span>
                            </a>
                        </div>
                    </div>
                    <div class="col col-lg-4 col-md-6 col-sm-6">
                        <div class="service_item style_3">
                            <div class="item_icon">
                                <i class="far fa-line-chart"></i>
                            </div>
                            <div class="item_content">
                                <h3 class="item_title">
                                    Finance and Accounting
                                </h3>
                                <p class="item_description">
                                    Transform your finances with our expert accounting solutions, navigating complexities for lasting financial success.
                                </p>
                            </div>
                            <a class="btn-link" href="service_details.html">
                                <span class="btn_text">View Details</span>
                                <span class="btn_icon">
                      <img src="{{ url('/') }}/assets/images/icons/icon_arrow_down_right_dark.svg" alt="Paradox icons">
                      <img src="{{ url('/') }}/assets/images/icons/icon_arrow_down_right_primary.svg" alt="Paradox icons">
                    </span>
                            </a>
                        </div>
                    </div>
                    <div class="col col-lg-4 col-md-6 col-sm-6">
                        <div class="service_item style_3">
                            <div class="item_icon">
                                <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect x="1.25" y="1.85645" width="11.1084" height="11.1084" rx="1.75" stroke="#5355DF" stroke-width="2.5"/>
                                    <rect x="17.6406" y="1.85645" width="11.1084" height="11.1084" rx="1.75" stroke="#5355DF" stroke-width="2.5"/>
                                    <rect x="1.25" y="17.5127" width="11.1084" height="11.1084" rx="1.75" stroke="#5355DF" stroke-width="2.5"/>
                                    <rect x="17.6406" y="17.5127" width="11.1084" height="11.1084" rx="1.75" stroke="#5355DF" stroke-width="2.5"/>
                                </svg>
                            </div>
                            <div class="item_content">
                                <h3 class="item_title">
                                    Project managment
                                </h3>
                                <p class="item_description">
                                    Effortless project success achieved through meticulous management and unwavering expertise.
                                </p>
                            </div>
                            <a class="btn-link" href="service_details.html">
                                <span class="btn_text">View Details</span>
                                <span class="btn_icon">
                      <img src="{{ url('/') }}/assets/images/icons/icon_arrow_down_right_dark.svg" alt="Paradox icons">
                      <img src="{{ url('/') }}/assets/images/icons/icon_arrow_down_right_primary.svg" alt="Paradox icons">
                    </span>
                            </a>
                        </div>
                    </div>
                    <div class="col col-lg-4 col-md-6 col-sm-6">
                        <div class="service_item style_3">
                            <div class="item_icon">
                                <i class="far fa-video"></i>
                            </div>
                            <div class="item_content">
                                <h3 class="item_title">
                                    Marketing
                                </h3>
                                <p class="item_description">
                                    Unlock the full potential of your brand with our innovative marketing solutions that captivate, engage, and drive results.
                                </p>
                            </div>
                            <a class="btn-link" href="service_details.html">
                                <span class="btn_text">View Details</span>
                                <span class="btn_icon">
                      <img src="{{ url('/') }}/assets/images/icons/icon_arrow_down_right_dark.svg" alt="Paradox icons">
                      <img src="{{ url('/') }}/assets/images/icons/icon_arrow_down_right_primary.svg" alt="Paradox icons">
                    </span>
                            </a>
                        </div>
                    </div>
                    <div class="col col-lg-4 col-md-6 col-sm-6">
                        <div class="service_item style_3">
                            <div class="item_icon">
                                <svg width="31" height="31" viewBox="0 0 31 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <mask id="mask0_843_3754" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="0" y="0" width="31" height="31">
                                        <path d="M0.324219 0.0918007H30.3242V30.0918H0.324219V0.0918007Z" fill="white"/>
                                    </mask>
                                    <g mask="url(#mask0_843_3754)">
                                        <path d="M10.7148 28.9199C8.1691 28.9199 6.10543 26.8562 6.10543 24.3105V23.0755C6.10543 19.7819 4.34838 16.7385 1.49609 15.0918C4.34838 13.4451 6.10543 10.4017 6.10543 7.10811V5.87307C6.10543 3.32741 8.1691 1.26368 10.7148 1.26368" stroke="#5355DF" stroke-width="3" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M19.9336 1.26368C22.4793 1.26368 24.5429 3.32741 24.5429 5.87307V7.10811C24.5429 10.4017 26.3 13.4451 29.1523 15.0918C26.3 16.7385 24.5429 19.7819 24.5429 23.0755V24.3105C24.5429 26.8562 22.4793 28.9199 19.9336 28.9199" stroke="#5355DF" stroke-width="3" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                    </g>
                                </svg>
                            </div>
                            <div class="item_content">
                                <h3 class="item_title">
                                    Programming & Tech
                                </h3>
                                <p class="item_description">
                                    Empower your digital presence with our coding virtuosos, crafting innovative solutions that redefine technology.
                                </p>
                            </div>
                            <a class="btn-link" href="service_details.html">
                                <span class="btn_text">View Details</span>
                                <span class="btn_icon">
                      <img src="{{ url('/') }}/assets/images/icons/icon_arrow_down_right_dark.svg" alt="Paradox icons">
                      <img src="{{ url('/') }}/assets/images/icons/icon_arrow_down_right_primary.svg" alt="Paradox icons">
                    </span>
                            </a>
                        </div>
                    </div>
                    <div class="col col-lg-4 col-md-6 col-sm-6">
                        <div class="service_item style_3">
                            <div class="item_icon">
                                <svg width="29" height="33" viewBox="0 0 29 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M14.6895 1.0293V2.08298" stroke="#5355DF" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M24.3256 4.84375L23.541 5.62837" stroke="#5355DF" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M27.9697 14.4805H26.916" stroke="#5355DF" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M1.41016 14.4805H2.46384" stroke="#5355DF" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M5.05469 4.84375L5.83931 5.62837" stroke="#5355DF" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M16.6786 31.1548H12.7041C11.846 31.1548 11.1504 30.4592 11.1504 29.6011V26.5303H18.2323V29.6011C18.2324 30.4592 17.5368 31.1548 16.6786 31.1548Z" stroke="#5355DF" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M14.6914 26.1838V15.7305" stroke="#5355DF" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M12.5195 14.3613C13.5524 15.9118 15.8305 15.9118 16.8633 14.3613" stroke="#5355DF" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M23.4806 14.544C23.4806 9.68941 19.5451 5.75391 14.6905 5.75391C9.83589 5.75391 5.90039 9.68941 5.90039 14.544C5.90039 17.6044 7.4647 20.299 9.83702 21.8732L9.86002 25.9102C9.86283 26.2533 10.1418 26.53 10.485 26.53H18.9303C19.2755 26.53 19.5553 26.2502 19.5553 25.905V21.8657C21.9213 20.2906 23.4806 17.5996 23.4806 14.544Z" stroke="#5355DF" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </div>
                            <div class="item_content">
                                <h3 class="item_title">
                                    Business Consulting
                                </h3>
                                <p class="item_description">
                                    Elevate your business to new heights with our strategic consulting expertise, unlocking growth opportunities.
                                </p>
                            </div>
                            <a class="btn-link" href="service_details.html">
                                <span class="btn_text">View Details</span>
                                <span class="btn_icon">
                      <img src="{{ url('/') }}/assets/images/icons/icon_arrow_down_right_dark.svg" alt="Paradox icons">
                      <img src="{{ url('/') }}/assets/images/icons/icon_arrow_down_right_primary.svg" alt="Paradox icons">
                    </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Service Section - End
        ================================================== -->

        <!-- About Section - Start
        ================================================== -->
        <section class="about_section section_space_lg decoration_wrap bg_light_3">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col col-lg-6">
                        <div class="about_image_2 decoration_wrap">
                            <div class="image_wrap">
                                <img src="{{ url('/') }}/assets/images/about/about_image_5.jpg" alt="Paradox - About Image">
                            </div>
                            <div class="deco_item bg_image">
                                <img src="{{ url('/') }}/assets/images/about/about_image_6.jpg" alt="Paradox - Shape Image">
                            </div>
                            <div class="deco_item shape_3">
                                <img data-parallax='{"y" : 100, "smoothness": 20}' src="{{ url('/') }}/assets/images/shapes/shape_4.svg" alt="Paradox - Shape Image">
                            </div>
                            <div class="experience_year wow fadeInUp" data-wow-delay=".2s" style="background-image: url('{{ url('/') }}/assets/images/about/about_image_7.jpg');">
                                <h3 class="experience_value">
                                    <span>9</span>
                                    <sup>+</sup>
                                </h3>
                                <p class="mb-0">
                                    Years Experience In Business Consultancy
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col col-lg-6">
                        <div class="about_content">
                            <div class="section_heading style_3">
                                <h2 class="heading_subtitle">
                                    <span>About Us</span>
                                </h2>
                                <h3 class="heading_title">
                                    Unlocking Possibilities, Maximizing Success.

                                </h3>
                                <p class="heading_description mb-0">
                                    we are a dynamic team of professionals dedicated to providing integrated solutions in legal services, project management, financial advisory, and tech services. With our expertise and personalized approach, we strive to exceed your expectations and help you achieve your goals with confidence.
                                </p>
                            </div>
                            <div class="btn_wrap pb-0">
                                <a href="{{ route("aboutUs") }}" class="bd-btn-link btn_primary">
                      <span class="bd-button-content-wrapper">
                         <span class="bd-button-icon">
                          <i class="fa-light fa-arrow-right-long"></i>
                         </span>
                         <span class="pd-animation-flip">
                            <span class="bd-btn-anim-wrapp">
                               <span class="bd-button-text">Know More</span>
                               <span class="bd-button-text">Know More</span>
                            </span>
                         </span>
                      </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="deco_item shape_4">
                <img src="{{ url('/') }}/assets/images/shapes/shape_circle_2.svg" alt="Paradox - Shape Image">
            </div>
            <div class="deco_item shape_5">
                <img src="{{ url('/') }}/assets/images/shapes/shape_circle_3.svg" alt="Paradox - Shape Image">
            </div>
            <div class="deco_dot"></div>
        </section>
        <!-- About Section - End
        ================================================== -->

        <!-- Our Value Section - Start
        ================================================== -->
        <section class="our_value_section section_space_lg pb-0">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col col-lg-6 order-lg-last">
                        <div class="our_value_image decoration_wrap mb-5 mb-lg-0">
                            <div class="image_wrap">
                                <img src="{{ url('/') }}/assets/images/about/about_image_9.jpg" alt="Paradox - About Image">
                            </div>
                            <div class="deco_item bg_image">
                                <img src="{{ url('/') }}/assets/images/about/about_image_6.jpg" alt="Paradox - Shape Image">
                            </div>
                            <div class="deco_item shape_1">
                                <img data-parallax='{"y" : 100, "smoothness": 20}' src="{{ url('/') }}/assets/images/shapes/shape_6.svg" alt="Paradox - Shape Image">
                            </div>
                            <div class="deco_item shape_2">
                                <img data-parallax='{"y" : -150, "smoothness": 20}' src="{{ url('/') }}/assets/images/shapes/shape_circle_7.svg" alt="Paradox - Shape Image">
                            </div>
                            <div class="deco_item shape_3">
                                <img src="{{ url('/') }}/assets/images/shapes/shape_circle_2.svg" alt="Paradox - Shape Image">
                            </div>
                            <div class="deco_item chart_image">
                                <img src="{{ url('/') }}/assets/images/about/about_image_10.jpg" alt="Paradox - Shape Image">
                            </div>
                        </div>
                    </div>
                    <div class="col col-lg-6">
                        <div class="content_wrap">
                            <div class="section_heading style_3">
                                <h3 class="heading_title mb-0">
                                    Unlocking Possibilities, Maximizing Success
                                </h3>
                            </div>
                            <div class="our_value_iconbox row">
                                <div class="col col-md-6">
                                    <div class="iconbox_item pe-lg-3 pe-xl-5">
                                        <div class="item_icon">
                                            <img src="{{ url('/') }}/assets/images/icons/icon_users.svg" alt="Paradox Icon Users">
                                        </div>
                                        <div class="item_content">
                                            <h3 class="item_title">User Friendly</h3>
                                            <p class="mb-0">
                                                Simplifying Complexity, Empowering You
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col col-md-6">
                                    <div class="iconbox_item pe-lg-3 pe-xl-5">
                                        <div class="item_icon">
                                            <img src="{{ url('/') }}/assets/images/icons/icon_love_handshake.svg" alt="Paradox Icon Handshake">
                                        </div>
                                        <div class="item_content">
                                            <h3 class="item_title">Best Support</h3>
                                            <p class="mb-0">
                                                Your Success is Our Priority - Exceptional Support, Every Step of the Way
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="btn_wrap pb-0">
                                <a href="{{ route("aboutUs") }}" class="bd-btn-link btn_primary">
                      <span class="bd-button-content-wrapper">
                         <span class="bd-button-icon">
                          <i class="fa-light fa-arrow-right-long"></i>
                         </span>
                         <span class="pd-animation-flip">
                            <span class="bd-btn-anim-wrapp">
                               <span class="bd-button-text">Know More</span>
                               <span class="bd-button-text">Know More</span>
                            </span>
                         </span>
                      </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Our Value Section - End
        ================================================== -->

        <!-- Blog Section - Start
        ================================================== -->
        <section class="blog_section section_space_lg">
            <div class="container">
                <div class="section_heading style_3 text-center">
                    <h3 class="heading_title mb-0">
                        {{__("Latest Blogs")}}
                    </h3>
                </div>

                <div class="blog_grouped row justify-content-center">
                    @forelse($latestBlog as $blog)
                        <div class="col col-lg-4">
                            <div class="blog_item">
                                <a class="item_image" href="{{ route("singleBlog", ['slug' => $blog->slug]) }}" data-cursor-text="VIEW">
                                    <img src="{{ url('/') }}/storage/{{ $blog->image }}" alt="Paradox Blog Image">
                                </a>
                                <div class="item_content">
                                    <div class="flex_wrap">
                                        <ul class="category_list unordered_list">
                                            <li><a href="#!"> Blog </a></li>
                                        </ul>
                                        <span class="post_date">
                                            {{ date('d-M-y', strtotime($blog->created_at)) }}
                                        </span>
                                    </div>
                                    <h3 class="item_title">
                                        <a href="{{ route("singleBlog", ['slug' => $blog->slug]) }}">
                                            {{ $blog->title }}
                                        </a>
                                    </h3>
                                    <a class="btn-link" href="#">
                                        <span class="btn_text">{{__("Read more")}}</span>
                                        <span class="btn_icon">
                        <img src="{{ url('/') }}/assets/images/icons/icon_arrow_down_right.svg" alt="Paradox - Icon Arrow Down Right">
                        <img src="{{ url('/') }}/assets/images/icons/icon_arrow_down_right_primary.svg" alt="Paradox - Icon Arrow Down Right">
                      </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    @empty
                        No data !
                    @endforelse
                </div>

                <div class="btn_wrap pb-0 text-center">
                    <a href="{{ route("blog") }}" class="bd-btn-link btn_primary">
                <span class="bd-button-content-wrapper">
                   <span class="bd-button-icon">
                    <i class="fa-light fa-arrow-right-long"></i>
                   </span>
                   <span class="pd-animation-flip">
                      <span class="bd-btn-anim-wrapp">
                         <span class="bd-button-text">View All BLogs</span>
                         <span class="bd-button-text">View All BLogs</span>
                      </span>
                   </span>
                </span>
                    </a>
                </div>
            </div>
        </section>
        <!-- Blog Section - End
        ================================================== -->

    </main>
    <!-- Main Body - End
    ================================================== -->
@endsection
