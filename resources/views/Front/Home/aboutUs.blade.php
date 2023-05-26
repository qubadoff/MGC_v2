@extends('Front.Layouts.app')
@section('pageTitle', isset($pageTitle) ? $pageTitle : __("About Us"))
@section('content')
    <!-- Main Body - Start
      ================================================== -->
    <main class="page_content">

        <!-- Page Section - Start
        ================================================== -->
        <section class="page_banner text-center">
            <div class="container decoration_wrap">
                <h1 class="page_title">{{__("About Us")}}</h1>
                <ul class="breadcrumb_nav unordered_list_center">
                    <li><a href="{{route("index")}}">{{__("Home")}}</a></li>
                    <li>{{__("About Us")}}</li>
                </ul>

                <div class="deco_item shape_1 wow fadeInUp" data-wow-delay=".1s">
                    <img src="{{url('/')}}/assets/images/shapes/shape_circle_1.svg" data-parallax='{"y" : -140, "smoothness": 10}' alt="Paradox - Shape Image">
                </div>
                <div class="deco_item shape_2 wow rotateInDownRight" data-wow-delay=".1s">
                    <img src="{{url('/')}}/assets/images/shapes/shape_circle_half_1.svg" data-parallax='{"y" : 200, "smoothness": 10}' alt="Paradox - Shape Image">
                </div>
                <div class="deco_item shape_3 wow fadeInDown">
                    <img src="{{url('/')}}/assets/images/shapes/shape_1.svg" data-parallax='{"x" : -200, "smoothness": 10}' alt="Paradox - Shape Image">
                </div>
            </div>
        </section>
        <!-- Page Section - End
        ================================================== -->

        <!-- About Section - Start
        ================================================== -->
        <section class="about_section section_space_lg pb-0 decoration_wrap">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col col-lg-6">
                        <div class="about_image decoration_wrap mb-4 mb-lg-0 text-center">
                            <img class="wow fadeInLeft" data-wow-delay=".1s" src="{{url('/')}}/assets/images/about/about_image_1.png" alt="Paradox - About Image">
                            <div class="deco_item shape_1">
                                <img class="wow zoomIn" data-wow-delay=".1s" src="{{url('/')}}/assets/images/shapes/shape_circle_2.svg" alt="Paradox - Shape Image">
                            </div>
                        </div>
                    </div>
                    <div class="col col-lg-6">
                        <div class="about_content">
                            <div class="section_heading mb-0">
                                <h2 class="heading_subtitle text-uppercase">
                      <span class="double_icon">
                        <i class="fas fa-sharp fa-square-full"></i>
                        <i class="fas fa-sharp fa-square-full"></i>
                      </span>
                                    <span>About US</span>
                                </h2>
                                <h3 class="heading_title">
                                    Best for your Start-up Creative Agency
                                </h3>
                                <p class="heading_description">
                                    Our action plan is focused and planned. We are result oriented organization and are committed to invest in initiatives for newer expanded customer relationship. We always strive to enhance productivity and improve
                                </p>
                                <p class="heading_description mb-0">
                                    A software development company that provides solutions for maximizing profits and converting clients ideas into reality.
                                </p>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col col-md-6">
                                    <ul class="icon_list unordered_list_block">
                                        <li>
                          <span class="list_item_icon">
                            <i class="fas fa-check"></i>
                          </span>
                                            <span class="list_item_text">Comprehensive Analysis</span>
                                        </li>
                                        <li>
                          <span class="list_item_icon">
                            <i class="fas fa-check"></i>
                          </span>
                                            <span class="list_item_text">Mobile Friendly Web app</span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col col-md-6">
                                    <ul class="icon_list unordered_list_block">
                                        <li>
                          <span class="list_item_icon">
                            <i class="fas fa-check"></i>
                          </span>
                                            <span class="list_item_text">Well Designed Web App</span>
                                        </li>
                                        <li>
                          <span class="list_item_icon">
                            <i class="fas fa-check"></i>
                          </span>
                                            <span class="list_item_text">High Performance & Speed</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="btn_wrap">
                                <a href="service.html" class="bd-btn-link btn_primary">
                      <span class="bd-button-content-wrapper">
                         <span class="bd-button-icon">
                          <i class="fa-light fa-arrow-right-long"></i>
                         </span>
                         <span class="pd-animation-flip">
                            <span class="bd-btn-anim-wrapp">
                               <span class="bd-button-text">Get a Quotes</span>
                               <span class="bd-button-text">Get a Quotes</span>
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
        <!-- About Section - End
        ================================================== -->

        <!-- Counter Section - Start
        ================================================== -->
        <section class="counter_section section_space_lg decoration_wrap">
            <div class="container">
                <div class="row">
                    <div class="col col-lg-4 col-md-6" data-parallax='{"y" : 30, "smoothness": 10}'>
                        <div class="counter_item mb-5 mb-lg-0">
                            <div class="counter_value">
                                <span class="odometer" data-count="2400">0</span>
                                <sup>+</sup>
                            </div>
                            <h3 class="counter_title mb-0">Worldwide Happy Client</h3>
                        </div>
                    </div>
                    <div class="col col-lg-4 col-md-6">
                        <div class="counter_item mb-4 mb-lg-0">
                            <div class="counter_value">
                                <span class="odometer" data-count="1690">0</span>
                                <sup>+</sup>
                            </div>
                            <h3 class="counter_title mb-0">Completed Project</h3>
                        </div>
                    </div>
                    <div class="col col-lg-4 col-md-6" data-parallax='{"y" : -30, "smoothness": 10}'>
                        <div class="counter_item">
                            <div class="counter_value">
                                <span class="odometer" data-count="100">0</span>
                                <sup>%</sup>
                            </div>
                            <h3 class="counter_title mb-0">Client Satisfaction</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="deco_item shape_1">
                <img src="{{url('/')}}/assets/images/shapes/shape_line_flow.svg" alt="Paradox Shapes Image Line Flow">
            </div>
            <div class="deco_item shape_2">
                <img src="{{url('/')}}/assets/images/shapes/shape_circle_2.svg" alt="Paradox Shapes Circle">
            </div>
        </section>
        <!-- Counter Section - End
        ================================================== -->

        <!-- About Section 2 - Start
        ================================================== -->
        <section class="about_section_2">
            <div class="video_widget rounded-0">
                <img src="{{url('/')}}/assets/images/video/video_poster_image_1.jpg" alt="Paradox Video Poster Image">
                <a class="video_play_icon popup_video" href="https://www.youtube.com/watch?v=7e90gBu4pas">
              <span class="icon_wrap" data-magnetic>
                <i class="fas fa-play"></i>
              </span>
                </a>
            </div>
            <div class="container">
                <div class="row align-items-center m-0">
                    <div class="col col-xl-7 col-lg-7 p-0">
                        <div class="about_content">
                            <div class="section_heading text-white">
                                <h2 class="heading_subtitle text-uppercase">
                      <span class="double_icon">
                        <i class="fas fa-sharp fa-square-full"></i>
                        <i class="fas fa-sharp fa-square-full"></i>
                      </span>
                                    <span>Who we Are</span>
                                </h2>
                                <h3 class="heading_title">
                                    We Can do Every Single IT Solution together
                                </h3>
                                <p class="heading_description mb-0">
                                    A software development company that provides solutions for maximizing profits and converting clients ideas into reality.
                                </p>
                            </div>
                            <div class="mission_vision row">
                                <div class="col col-md-6">
                                    <div class="iconbox_item text-white">
                                        <div class="item_icon">
                                            <img src="{{url('/')}}/assets/images/icons/icon_eye_white.svg" alt="Paradox Icon Eye White">
                                        </div>
                                        <div class="item_content">
                                            <h3 class="item_title">Our Vision</h3>
                                            <p class="mb-0">
                                                We are help  generate positive the cash floinvest
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col col-md-6">
                                    <div class="iconbox_item text-white">
                                        <div class="item_icon">
                                            <img src="{{url('/')}}/assets/images/icons/icon_dart_board_white.svg" alt="Paradox Icon Eye White">
                                        </div>
                                        <div class="item_content">
                                            <h3 class="item_title">Our Mission</h3>
                                            <p class="mb-0">
                                                We are help  generate positive the cash floinvest
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="total_review_info text-white pt-4">
                                <div class="review_stars">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <div class="review_text">
                                    <span class="odometer" data-count="200">0</span>
                                    <span>+ Client Review</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About Section 2 - End
        ================================================== -->

        <!-- History Section - Start
        ================================================== -->
        <section class="history_section section_space_lg">
            <div class="container">
                <div class="section_heading text-center">
                    <h2 class="heading_subtitle text-uppercase">
                <span class="double_icon">
                  <i class="fas fa-sharp fa-square-full"></i>
                  <i class="fas fa-sharp fa-square-full"></i>
                </span>
                        <span>Our History</span>
                    </h2>
                    <h3 class="heading_title mb-0">
                        Journey of Paradox
                    </h3>
                </div>
            </div>
            <div class="history_carousel_wrap">
                <div class="history_carousel">
                    <div class="carousel_item">
                        <div class="content_wrap">
                            <div class="iconbox_item">
                                <div class="item_content">
                                    <h3 class="item_title">We were thinking for Paradox</h3>
                                    <p class="mb-0">
                                        We are help  generate positive the cash floinvest
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="content_wrap">
                            <h4 class="year_text m-0 text-center"><span>2002</span></h4>
                        </div>
                    </div>
                    <div class="carousel_item">
                        <div class="content_wrap">
                            <div class="iconbox_item">
                                <div class="item_content">
                                    <h3 class="item_title">We were thinking for Paradox</h3>
                                    <p class="mb-0">
                                        We are help  generate positive the cash floinvest
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="content_wrap">
                            <h4 class="year_text m-0 text-center"><span>2004</span></h4>
                        </div>
                    </div>
                    <div class="carousel_item">
                        <div class="content_wrap">
                            <div class="iconbox_item">
                                <div class="item_content">
                                    <h3 class="item_title">We were thinking for Paradox</h3>
                                    <p class="mb-0">
                                        We are help  generate positive the cash floinvest
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="content_wrap">
                            <h4 class="year_text m-0 text-center"><span>2010</span></h4>
                        </div>
                    </div>
                    <div class="carousel_item">
                        <div class="content_wrap">
                            <div class="iconbox_item">
                                <div class="item_content">
                                    <h3 class="item_title">We were thinking for Paradox</h3>
                                    <p class="mb-0">
                                        We are help  generate positive the cash floinvest
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="content_wrap">
                            <h4 class="year_text m-0 text-center"><span>2014</span></h4>
                        </div>
                    </div>
                    <div class="carousel_item">
                        <div class="content_wrap">
                            <div class="iconbox_item">
                                <div class="item_content">
                                    <h3 class="item_title">We were thinking for Paradox</h3>
                                    <p class="mb-0">
                                        We are help  generate positive the cash floinvest
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="content_wrap">
                            <h4 class="year_text m-0 text-center"><span>2019</span></h4>
                        </div>
                    </div>
                    <div class="carousel_item">
                        <div class="content_wrap">
                            <div class="iconbox_item">
                                <div class="item_content">
                                    <h3 class="item_title">We were thinking for Paradox</h3>
                                    <p class="mb-0">
                                        We are help  generate positive the cash floinvest
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="content_wrap">
                            <h4 class="year_text m-0 text-center"><span>2023</span></h4>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- History Section - End
        ================================================== -->

        <!-- Starter Steps Section - Start
        ================================================== -->
        <section class="starter_steps_section section_space_lg">
            <div class="deco_item shado">
                <img src="{{url('/')}}/assets/images/shapes/shape_circle_2.svg" alt="Paradox Shape">
            </div>
            <div class="container decoration_wrap">
                <div class="row align-items-center">
                    <div class="col col-lg-6">
                        <div class="starter_steps_group decoration_wrap mb-4 mg-lg-0">
                            <ul class="unordered_list">
                                <li>
                                    <div class="content_wrap wow bounceIn" data-wow-delay=".1s">
                                        <div class="item_icon">
                                            <img src="{{url('/')}}/assets/images/icons/icon_team_white.svg" alt="Paradox Icon Team">
                                        </div>
                                        <h3 class="item_title m-0">World-class Team</h3>
                                    </div>
                                </li>
                                <li>
                                    <div class="content_wrap wow bounceIn" data-wow-delay=".2s">
                                        <div class="item_icon">
                                            <img src="{{url('/')}}/assets/images/icons/icon_comment_white.svg" alt="Paradox Icon Comment">
                                        </div>
                                        <h3 class="item_title m-0">Quickly Response</h3>
                                    </div>
                                </li>
                                <li>
                                    <div class="content_wrap wow bounceIn" data-wow-delay=".3s">
                                        <div class="item_icon">
                                            <img src="{{url('/')}}/assets/images/icons/icon_medal_white.svg" alt="Paradox Icon Medal">
                                        </div>
                                        <h3 class="item_title m-0">Satisfaction Guarantee</h3>
                                    </div>
                                </li>
                            </ul>
                            <div class="deco_item shape_1">
                                <img src="{{url('/')}}/assets/images/shapes/shape_circle_dashed_1.svg" alt="Paradox Shape">
                            </div>
                            <div class="deco_item shape_2">
                                <img src="{{url('/')}}/assets/images/shapes/shape_circle_2.svg" alt="Paradox Shape">
                            </div>
                        </div>
                    </div>
                    <div class="col col-lg-6">
                        <div class="steps_content_wrapper">
                            <div class="section_heading mb-5">
                                <h2 class="heading_subtitle text-uppercase">
                      <span class="double_icon">
                        <i class="fas fa-sharp fa-square-full"></i>
                        <i class="fas fa-sharp fa-square-full"></i>
                      </span>
                                    <span>Why Chose Us</span>
                                </h2>
                                <h3 class="heading_title">
                                    Revolutionary Step for your Business
                                </h3>
                                <p class="heading_description mb-0">
                                    Our action plan is focused and planned. We are result oriented organization and are committed to invest in initiatives for newer expanded customer relationship. We always strive to enhance productivity and improve
                                </p>
                            </div>
                            <ul class="btns_group unordered_list">
                                <li>
                                    <a href="service.html" class="bd-btn-link btn_primary">
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
                </div>
                <div class="deco_item shape_3 wow fadeInUp" data-wow-delay=".1s">
                    <img src="{{url('/')}}/assets/images/shapes/shape_circle_1.svg" data-parallax='{"y" : -140, "smoothness": 10}' alt="Paradox Shape Circle">
                </div>
                <div class="deco_item shape_4 wow fadeInDown" data-wow-delay=".1s">
                    <img src="{{url('/')}}/assets/images/shapes/shape_close_icon.png" data-parallax='{"y" : 140, "smoothness": 10}' alt="Paradox Shape Close">
                </div>
            </div>
        </section>
        <!-- Starter Steps Section - End
        ================================================== -->

        <!-- Team Section - Start
        ================================================== -->
        <section class="team_section section_space_lg">
            <div class="container">
                <div class="section_heading text-center">
                    <h2 class="heading_subtitle text-uppercase">
                <span class="double_icon">
                  <i class="fas fa-sharp fa-square-full"></i>
                  <i class="fas fa-sharp fa-square-full"></i>
                </span>
                        <span>Our Team</span>
                    </h2>
                    <h3 class="heading_title mb-0">
                        Our Team Members
                    </h3>
                </div>

                <div class="row justify-content-center">
                    <div class="col col-xl-3 col-lg-6 col-md-6">
                        <div class="team_item style_1 tilt">
                            <div class="admin_thumbnail">
                                <div class="thumbnail_wrap">
                                    <img src="{{url('/')}}/assets/images/team/team_admin_image_1.png" alt="Paradox Team Admin Image">
                                </div>
                            </div>
                            <div class="admin_info_content">
                                <h3 class="admin_name">Gary M. Martin</h3>
                                <p class="admin_designation mb-0">Sr. Product Manager</p>
                                <ul class="admin_social unordered_list">
                                    <li><a href="#!"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#!"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#!"><i class="fab fa-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col col-xl-3 col-lg-6 col-md-6">
                        <div class="team_item style_1 tilt">
                            <div class="admin_thumbnail">
                                <div class="thumbnail_wrap">
                                    <img src="{{url('/')}}/assets/images/team/team_admin_image_2.png" alt="Paradox Team Admin Image">
                                </div>
                            </div>
                            <div class="admin_info_content">
                                <h3 class="admin_name">Karen L. Head</h3>
                                <p class="admin_designation mb-0">Sr. Digital Marketer</p>
                                <ul class="admin_social unordered_list">
                                    <li><a href="#!"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#!"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#!"><i class="fab fa-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col col-xl-3 col-lg-6 col-md-6">
                        <div class="team_item style_1 tilt">
                            <div class="admin_thumbnail">
                                <div class="thumbnail_wrap">
                                    <img src="{{url('/')}}/assets/images/team/team_admin_image_3.png" alt="Paradox Team Admin Image">
                                </div>
                            </div>
                            <div class="admin_info_content">
                                <h3 class="admin_name">Daniel S. Anson</h3>
                                <p class="admin_designation mb-0">Sr. UI/UX Designer</p>
                                <ul class="admin_social unordered_list">
                                    <li><a href="#!"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#!"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#!"><i class="fab fa-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col col-xl-3 col-lg-6 col-md-6">
                        <div class="team_item style_1 tilt">
                            <div class="admin_thumbnail">
                                <div class="thumbnail_wrap">
                                    <img src="{{url('/')}}/assets/images/team/team_admin_image_4.png" alt="Paradox Team Admin Image">
                                </div>
                            </div>
                            <div class="admin_info_content">
                                <h3 class="admin_name">William P. Robinson</h3>
                                <p class="admin_designation mb-0">Sr. Developer</p>
                                <ul class="admin_social unordered_list">
                                    <li><a href="#!"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#!"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#!"><i class="fab fa-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="btn_wrap pb-0 text-center">
                    <a href="team.html" class="bd-btn-link btn_primary">
                <span class="bd-button-content-wrapper">
                   <span class="bd-button-icon">
                    <i class="fa-light fa-arrow-right-long"></i>
                   </span>
                   <span class="pd-animation-flip">
                      <span class="bd-btn-anim-wrapp">
                         <span class="bd-button-text">View All Member</span>
                         <span class="bd-button-text">View All Member</span>
                      </span>
                   </span>
                </span>
                    </a>
                </div>
            </div>
        </section>
        <!-- Team Section - End
        ================================================== -->


    </main>
    <!-- Main Body - End
    ================================================== -->
@endsection
