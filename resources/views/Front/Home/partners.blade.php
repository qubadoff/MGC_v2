@extends('Front.Layouts.app')
@section('pageTitle', isset($pageTitle) ? $pageTitle : __("Our Partners"))
@section('content')
    <!-- Main Body - Start
      ================================================== -->
    <main class="page_content">

        <!-- Page Section - Start
        ================================================== -->
        <section class="page_banner text-center">
            <div class="container decoration_wrap">
                <h1 class="page_title">{{__("Our Partners")}}</h1>
                <ul class="breadcrumb_nav unordered_list_center">
                    <li><a href="{{route("index")}}">{{__("Home")}}</a></li>
                    <li>{{__("Our Partners")}}</li>
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
                <div class="blog_grouped row">
                    @forelse($partners as $item)
                        <div class="col col-lg-4 col-md-6">
                            <div class="blog_item">
                                <a class="item_image" href="{{ $item->url }}" target="_blank" data-cursor-text="VIEW">
                                    <img src="{{ url('/') }}/storage/{{ $item->image }}" alt="Paradox Blog Image">
                                </a>
                                <div class="item_content">
                                    <div class="flex_wrap">
                                        <ul class="category_list unordered_list">
                                            <li><a href="#!">Partner</a></li>
                                        </ul>
                                        <span class="post_date">24 OCT, 2023</span>
                                    </div>
                                    <h3 class="item_title">
                                        <a href="{{ $item->url }}" target="_blank">
                                            {{ $item->name }}
                                        </a>
                                    </h3>
                                </div>
                            </div>
                        </div>
                    @empty
                        No data !
                    @endforelse
                </div>

                <div class="pagination_wrap">
                    <ul class="pagination_nav unordered_list_center">
                        {{ $partners->links() }}
                    </ul>
                </div>
            </div>
        </section>
        <!-- Blog Section - End
        ================================================== -->

    </main>
    <!-- Main Body - End
    ================================================== -->
@endsection
