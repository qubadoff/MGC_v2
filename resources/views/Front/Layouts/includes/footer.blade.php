<!-- Site Footer - Start
    ================================================== -->
<footer class="site_footer style_4">
    <div class="calltoaction_section style_5">
        <div class="container">
            <div class="content_box bg_primary decoration_wrap">
                <div class="row align-items-center">
                    <div class="col col-xxl-5 col-xl-6 col-lg-6 order-last">
                        <div class="cta_image">
                            <img src="{{ url('/') }}/assets/images/calltoaction/cta_image_5.png" alt="Paradox Call To Action Image">
                        </div>
                    </div>
                    <div class="col col-xxl-7 col-xl-6 col-lg-6">
                        <div class="wrapper_box mb-4 mb-lg-0">
                            <div class="section_heading text-white">
                                <h2 class="heading_title mb-0">
                                    Let’s Create Something Amazing Together.
                                </h2>
                            </div>
                            <a href="{{ route("contact") }}" class="bd-btn-link btn_warning">
                      <span class="bd-button-content-wrapper">
                         <span class="bd-button-icon">
                          <i class="fa-light fa-arrow-right-long"></i>
                         </span>
                         <span class="pd-animation-flip">
                            <span class="bd-btn-anim-wrapp">
                               <span class="bd-button-text">{{__("Get Started")}}</span>
                               <span class="bd-button-text">{{__("Get Started")}}</span>
                            </span>
                         </span>
                      </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="deco_item shape_1">
                    <img class="wow fadeInUp" data-wow-delay=".2s" src="{{ url('/') }}/assets/images/shapes/shape_4.svg" alt="Paradox Illustration Image">
                </div>
            </div>
        </div>
    </div>
    <div class="footer_widget_area">
        <div class="container">
            <div class="row">
                <div class="col col-lg-3 col-md-6">
                    <div class="site_logo">
                        <a class="site_link" href="index-2.html">
                            <img src="{{ url('/') }}/assets/images/logo/site_logo_dark.svg" alt="Site Logo - Paradox - Agency Template">
                        </a>
                    </div>
                </div>
                <div class="col col-lg-3 col-md-6">
                    <div class="footer_widget">
                        <h3 class="footer_widget_title">Contact Us</h3>
                        <div class="icon_list_widget">
                            <ul class="icon_list unordered_list_block">
                                <li>
                          <span class="list_item_text">
                            <span class="__cf_email__">{{ setting('site.office_phone') }}</span><br/>
                            <span class="__cf_email__">{{ setting('site.office_email') }}</span>
                          </span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col col-lg-3 col-md-6">
                    <div class="footer_widget">
                        <h3 class="footer_widget_title">{{__("Office location")}}</h3>
                        <div class="icon_list_widget">
                            <ul class="icon_list unordered_list_block">
                                <li>
                                <span class="list_item_text">
                                    {{setting('site.location')}}
                                </span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col col-lg-3 col-md-6">
                    <div class="footer_widget">
                        <h3 class="footer_widget_title">Newsletter</h3>
                        <form action="#">
                            <div class="small_newsletter_form">
                                <input type="email" placeholder="Email Adreess">
                                <button type="submit">
                                    <i class="far fa-arrow-right"></i>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer_bottom">
        <div class="container">
            <div class="footer_bottom_grid">
                <div class="copyright_widget">
                    Copyright © 2023 MG Consulting
                </div>
                <div class="backtotop style_1">
                    <a href="#" class="scroll">
                        <i class="fal fa-chevron-up"></i>
                    </a>
                </div>
                <div class="footer_social">
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

</footer>
<!-- Site Footer - End
================================================== -->
