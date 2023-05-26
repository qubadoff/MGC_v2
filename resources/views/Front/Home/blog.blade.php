@extends('Front.Layouts.app')
@section('pageTitle', isset($pageTitle) ? $pageTitle : __("Our Blog"))
@section('content')
    <!-- Main Body - Start
      ================================================== -->
    <main class="page_content">

        <!-- Page Section - Start
        ================================================== -->
        <section class="page_banner text-center">
            <div class="container decoration_wrap">
                <h1 class="page_title">{{__("Our Blog")}}</h1>
                <ul class="breadcrumb_nav unordered_list_center">
                    <li><a href="{{ route("blog") }}">{{__("Home")}}</a></li>
                    <li>{{__("Our Blog")}}</li>
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

        <!-- Blog Section - Start
        ================================================== -->
        <section class="blog_section section_space_lg">
            <div class="container">
                <div class="blog_classic_grouped row justify-content-center">
                    <div class="col col-lg-8">
                        @forelse($blogPosts as $post)
                            <div class="blog_item">
                                <a class="item_image" href="{{ route("singleBlog", ['slug' => $post->slug]) }}" data-cursor-text="VIEW">
                                    <img src="{{ url('/') }}/storage/{{ $post->image }}" alt="Paradox Blog Image">
                                </a>
                                <div class="item_content">
                                    <div class="flex_wrap">
                                        <ul class="category_list unordered_list">
                                            <li><a href="#!">Blog</a></li>
                                        </ul>
                                        <span class="post_date">{{ date('d-M-y', strtotime($post->created_at)) }}</span>
                                    </div>
                                    <h3 class="item_title">
                                        <a href="{{ route("singleBlog", ['slug' => $post->slug]) }}">
                                            {{ $post->title }}
                                        </a>
                                    </h3>
                                    <p>
                                        {!! $post->excerpt !!}
                                    </p>
                                    <a class="btn-link" href="blog_details.html">
                                        <span class="btn_text">Read More</span>
                                        <span class="btn_icon">
                        <img src="{{ url('/') }}/assets/images/icons/icon_arrow_down_right.svg" alt="Paradox - Icon Arrow Down Right">
                        <img src="{{ url('/') }}/assets/images/icons/icon_arrow_down_right_primary.svg" alt="Paradox - Icon Arrow Down Right">
                      </span>
                                    </a>
                                </div>
                            </div>
                        @empty
                            No Data !
                        @endforelse
                        <div class="pagination_wrap p-0">
                            <ul class="pagination_nav unordered_list">
                                {{ $blogPosts->links() }}
                            </ul>
                        </div>
                    </div>

                    <div class="col col-lg-4">
                        <aside class="sidebar">
                            <div class="sidebar_widget">
                                <h3 class="widget_title">
                                    Search
                                </h3>
                                <div class="form-group kyeword_search_form mb-0">
                                    <input class="form-control" type="search" name="search" placeholder="Enter Kyeword">
                                    <button type="submit">
                                        <img src="{{ url('/') }}/assets/images/icons/icon_search_white.svg" alt="Paradox Search Icon">
                                    </button>
                                </div>
                            </div>

                            <div class="sidebar_widget">
                                <h3 class="widget_title">
                                    Categories
                                </h3>
                                <ul class="icon_list unordered_list_block">
                                    <li>
                                        <a href="#!">Marketing (03)</a>
                                    </li>
                                    <li>
                                        <a href="#!">Digital Agency (04)</a>
                                    </li>
                                    <li>
                                        <a href="#!">Creative Agency (06)</a>
                                    </li>
                                    <li>
                                        <a href="#!">Business Consulting (03)</a>
                                    </li>
                                    <li>
                                        <a href="#!">IT Solution (02)</a>
                                    </li>
                                </ul>
                            </div>

                            <div class="sidebar_widget">
                                <h3 class="widget_title">
                                    {{__("Recent Posts")}}
                                </h3>
                                <ul class="recent_post_list unordered_list_block">
                                    @forelse($recentPosts as $post)
                                        <li>
                                            <div class="recent_post_item">
                                                <a class="item_image" href="{{ route("singleBlog", ['slug' => $post->slug]) }}">
                                                    <img src="{{ url('/') }}/storage/{{ $post->image }}" alt="Paradox Blog Image">
                                                </a>
                                                <div class="item_content">
                                                    <ul class="meta_list unordered_list">
                                                        <li><a href="#">Blog</a></li>
                                                        <li><span>{{ date('d-M-y', strtotime($post->created_at)) }}</span></li>
                                                    </ul>
                                                    <h3 class="item_title">
                                                        <a href="{{ route("singleBlog", ['slug' => $post->slug]) }}">
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

                            <div class="sidebar_widget">
                                <h3 class="widget_title">
                                    Tags List
                                </h3>
                                <ul class="tags_list unordered_list">
                                    <li><a href="#!">Business</a></li>
                                    <li><a href="#!">UI/UX</a></li>
                                    <li><a href="#!">Development</a></li>
                                    <li><a href="#!">Design</a></li>
                                    <li><a href="#!">Programing</a></li>
                                    <li><a href="#!">Social</a></li>
                                </ul>
                            </div>
                        </aside>
                    </div>
                </div>
            </div>
        </section>
        <!-- Blog Section - End
        ================================================== -->
    </main>
    <!-- Main Body - End
    ================================================== -->
@endsection
