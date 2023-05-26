<!-- Site Header - Start
    ================================================== -->
<header class="site_header site_header_1">
    <div class="container">
        <div class="header_wrapper">
            <div class="site_logo">
                <a class="site_link" href="{{ route("index") }}">
                    <img src="{{ url('/') }}/assets/images/logo/site_logo_dark.svg" alt="Site Logo - Paradox - Agency Template">
                </a>
            </div>
            <div class="mean__menu-wrapper d-none d-lg-block">
                <div class="main-menu">
                    <nav id="mobile-menu">
                        <ul>
                            <li>
                                <a href="{{ route("index") }}">{{__("Home")}}</a>
                            </li>
                            <li>
                                <a href="{{ route("aboutUs") }}">{{__("About Us")}}</a>
                            </li>
                            <li>
                                <a href="{{ route("publications") }}">{{__("Publications")}}</a>
                            </li>
                            <li>
                                <a href="{{ route("blog") }}">{{__("Blog")}}</a>
                            </li>
                            <li>
                                <a href="{{ route("partners") }}">{{__("Our Partners")}}</a>
                            </li>

                            <li>
                                <a href="{{ route("contact") }}">{{__("Contact")}}</a>
                            </li>

                        </ul>
                    </nav>
                    <!-- for wp -->
                    <div class="header__hamburger ml-50 d-none">
                        <button type="button" class="hamburger-btn offcanvas-open-btn">
                            <span>01</span>
                            <span>01</span>
                            <span>01</span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="header_right">
                <ul class="header_btns_group unordered_list_end d-none d-md-flex">
                    <li>
                        <div class="select_option m-0">
                            <div class="icon_wrap">
                                <img src="{{ url('/') }}/assets/images/icons/icon_globe.svg" alt="Globe Icon">
                            </div>
                            <select>
                                @foreach(config('app.available_locales') as $locale)
                                    <option value="{{ route(\Illuminate\Support\Facades\Route::currentRouteName(), ['locale' => $locale]) }}">{{ strtoupper($locale) }}</option>
                                @endforeach
                            </select>
                        </div>
                    </li>
                    <li>
                        <a href="{{ route("login") }}" class="bd-btn-link btn_dark">
                    <span class="bd-button-content-wrapper">
                       <span class="pd-animation-flip">
                          <span class="bd-btn-anim-wrapp">
                             <span class="bd-button-text">Dashboard</span>
                             <span class="bd-button-text">Dashboard</span>
                          </span>
                       </span>
                    </span>
                        </a>
                    </li>
                </ul>
                <div class="offcanvas-toggle d-lg-none">
                    <a class="bar-icon" href="javascript:void(0)">
                        <span></span>
                        <span>
                  <small></small>
                 </span>
                        <span></span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- Site Header - End
================================================== -->
