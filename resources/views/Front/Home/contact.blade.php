@extends('Front.Layouts.app')
@section('pageTitle', isset($pageTitle) ? $pageTitle : __("Contact Us"))
@section('content')
    <!-- Main Body - Start
      ================================================== -->
    <main class="page_content">

        <!-- Page Section - Start
        ================================================== -->
        <section class="page_banner text-center">
            <div class="container decoration_wrap">
                <h1 class="page_title">{{__("Contact Us")}}</h1>
                <ul class="breadcrumb_nav unordered_list_center">
                    <li><a href="{{ route("index") }}">{{__("Home")}}</a></li>
                    <li>
                        {{__("Contact Us")}}
                    </li>
                </ul>

                <div class="deco_item shape_1 wow fadeInUp" data-wow-delay=".1s">
                    <img src="{{ url('/') }}/assets/images/shapes/shape_circle_1.svg" data-parallax='{"y" : -140, "smoothness": 10}' alt="Paradox - Shape Image">
                </div>
                <div class="deco_item shape_2 wow rotateInDownRight" data-wow-delay=".1s">
                    <img src="{{ url('/') }}/assets/images/shapes/shape_circle_half_1.svg" data-parallax='{"y" : 200, "smoothness": 10}' alt="Paradox - Shape Image">
                </div>
                <div class="deco_item shape_3 wow fadeInDown">
                    <img src="{{ url('/') }}/assets/images/shapes/shape_1.svg" data-parallax='{"x" : -200, "smoothness": 10}' alt="Paradox - Shape Image">
                </div>
            </div>
        </section>
        <!-- Page Section - End
        ================================================== -->

        <!-- Contact Section - Start
        ================================================== -->
        <section class="contact_section section_space_lg">
            <div class="container">
                <div class="section_heading">
                    <h2 class="heading_subtitle text-uppercase">
                <span class="double_icon">
                  <i class="fas fa-sharp fa-square-full"></i>
                  <i class="fas fa-sharp fa-square-full"></i>
                </span>
                        <span>Contact Us</span>
                    </h2>
                    <h3 class="heading_title mb-0">
                        Feel Free Contact Us
                    </h3>
                </div>

                <div class="row">
                    <div class="col col-lg-6">
                        <div class="contact_form">
                            @if(Session::has('success'))
                                <div class="alert alert-success">
                                    {{Session::get('success')}}
                                </div>
                            @endif
                            <form action="{{ route("contactSend") }}" method="POST">
                                @csrf
                                @method("POST")
                                <div class="row">
                                    <div class="col col-md-6">
                                        <div class="form-group m-0">
                                            <input class="form-control" type="text" name="name" placeholder="First Name" required>
                                        </div>
                                    </div>
                                    <div class="col col-md-6">
                                        <div class="form-group m-0">
                                            <input class="form-control" type="text" name="surname" placeholder="Last Name" required>
                                        </div>
                                    </div>
                                    <div class="col col-md-6">
                                        <div class="form-group m-0">
                                            <input class="form-control" type="email" name="email" placeholder="Email Address" required>
                                        </div>
                                    </div>
                                    <div class="col col-md-6">
                                        <div class="form-group m-0">
                                            <input class="form-control" type="text" name="phone" placeholder="Phone Number" required>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group">
                                            <textarea class="form-control" name="body" placeholder="Write your Message" required></textarea>
                                        </div>
                                        {!! RecaptchaV3::field('register') !!}
                                        @if ($errors->has('g-recaptcha-response'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('g-recaptcha-response') }}</strong>
                                    </span>
                                        @endif
                                        <button type="submit" class="bd-btn-link">
                                          <span class="bd-button-content-wrapper">
                                            <span class="bd-button-icon">
                                             <i class="fa-light fa-arrow-right-long"></i>
                                            </span>
                                            <span class="pd-animation-flip">
                                               <span class="bd-btn-anim-wrapp">
                                                  <span class="bd-button-text">Send Now</span>
                                                  <span class="bd-button-text">Send Now</span>
                                               </span>
                                            </span>
                                         </span>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col col-lg-6">
                        <ul class="contact_info_list style_2 ps-lg-4 unordered_list_block">
                            <li>
                                <strong>{{__("Location")}}:</strong>
                                <span>
                                    {{ setting("site.location") }}
                                </span>
                            </li>
                            <li>
                                <strong>{{__("Phone")}}:</strong>
                                <span>
                                    {{ setting("site.office_phone") }}
                                </span>
                            </li>
                            <li>
                                <strong>{{__("Email")}}:</strong>
                                <span>
                                    {{ setting("site.office_email") }}
                                </span>
                            </li>
                            <li>
                                <strong>{{__("Opening")}}:</strong>
                                <span>09 am - 6 pm, Saturday and Sunday are Close</span>
                            </li>
                            <li>
                                <strong>Follow Us:</strong>
                                <ul class="social_icon unordered_list">
                                    <li><a href="{{ setting("site.facebook") }}"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="{{ setting("site.twitter") }}"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="{{ setting("site.linkedin") }}"><i class="fab fa-linkedin"></i></a></li>
                                    <li><a href="{{ setting("site.instagram") }}"><i class="fab fa-instagram"></i></a></li>
                                    <li><a href="{{ setting("site.tiktok") }}"><i class="fab fa-tiktok"></i></a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- Contact Section - End
        ================================================== -->

    </main>
    <!-- Main Body - End
    ================================================== -->
@endsection
