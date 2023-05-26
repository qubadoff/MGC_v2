@extends('Front.Layouts.app')
@section('pageTitle', isset($pageTitle) ? $pageTitle : $singleBlog->title)
@section('content')
<!-- Main Body - Start
      ================================================== -->
<main class="page_content">

    <!-- Page Section - Start
    ================================================== -->
    <section class="page_banner text-center">
        <div class="container decoration_wrap">
            <h1 class="page_title">{{ $singleBlog->title }}</h1>
            <ul class="breadcrumb_nav unordered_list_center">
                <li><a href="{{ route("index") }}">{{__("Home")}}</a></li>
                <li>{{ $singleBlog->title }}</li>
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

    <!-- Details Section - Start
    ================================================== -->
    <section class="details_section blog_details section_space_lg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col col-lg-8">
                    <div class="details_image">
                        <img src="{{ url('/') }}/storage/{{ $singleBlog->image }}" alt="Paradox Blog Details Image">
                    </div>

                    <div class="details_content">
                        <div class="blog_post_meta">
                            <span class="post_date">{{ date('d-M-y', strtotime($singleBlog->created_at)) }}</span>
                        </div>
                        <h1 class="details_item_title">
                            {{ $singleBlog->excerpt }}
                        </h1>
                        <p>
                            {!! $singleBlog->body !!}
                        </p>
                        <div class="social_actions">
                            <ul class="social_icon unordered_list_end">
                                <li><a href="#!"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#!"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#!"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="#!"><i class="fab fa-linkedin"></i></a></li>
                                <li><a href="#!"><i class="fab fa-tiktok"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col col-lg-4">
                    <aside class="sidebar">
                        <div class="sidebar_widget">
                            <h3 class="widget_title">
                                {{__("Recent Posts")}}
                            </h3>
                            <ul class="recent_post_list unordered_list_block">
                                @forelse($recentPosts as $post)
                                    <li>
                                        <div class="recent_post_item">
                                            <a class="item_image" href="blog_details.html">
                                                <img src="{{ url('/') }}/storage/{{ $post->image }}" alt="Paradox Blog Image">
                                            </a>
                                            <div class="item_content">
                                                <ul class="meta_list unordered_list">
                                                    <li><a href="#!">Blog</a></li>
                                                    <li><span>{{ date('d-M-y', strtotime($post->created_at)) }}</span></li>
                                                </ul>
                                                <h3 class="item_title">
                                                    <a href="{{ route('singleBlog', ['slug' => $post->slug]) }}">
                                                        {{ $post->title }}
                                                    </a>
                                                </h3>
                                            </div>
                                        </div>
                                    </li>
                                @empty
                                    No data !
                                @endforelse
                            </ul>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </section>
    <!-- Details Section - End
    ================================================== -->

</main>
<!-- Main Body - End
================================================== -->
@endsection
