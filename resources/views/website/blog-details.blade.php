@extends('website.layouts.main')
@section('meta')
    <meta name="title" content="{{$blog->meta_title}}">
    <meta name="keywords" content="{{$blog->meta_keywords}}">
    <meta name="description" content="{{$blog->meta_description}}">
    <meta name="page-topic" content="{{ $blog->category?->category_name }}">
    <meta name="page-type" content="Blogging">
@endsection
@section('content')

    <!----header end----->
    <div class="page_header_default style_one ">
        <div class="parallax_cover">
            <div class="simpleParallax"><img src="{{ asset('website/assets/images/page-header-default.jpg') }}" alt="bg_image"
                    class="cover-parallax"></div>
        </div>
        <div class="page_header_content">
            <div class="auto-container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="banner_title_inner">
                            <div class="title_page">
                                {{ $blog->title }}
                            </div>
                        </div>
                    </div>
                    {{-- <div class="col-lg-12">
                    <div class="breadcrumbs creote">
                        <ul class="breadcrumb m-auto">
                            <li><a href="index.html">Home</a></li>
                            <li class="active">Blog Details</li>
                        </ul>
                    </div>
                </div> --}}
                </div>
            </div>
        </div>
    </div>
    <!----header----->


    <div class="auto-container">
        <div class="row default_row">
            <div id="primary" class="content-area service col-lg-8 col-md-12 col-sm-12 col-xs-12">
                <main id="main" class="site-main" role="main">
                    <!--===============spacing==============-->
                    <div class="pd_top_90"></div>
                    <!--===============spacing==============-->
                    <section class="blog_single_details_outer">
                        <div class="single_content_upper">
                           <div>
                              <h1>{{ $blog->title }}</h1>
                           </div>
                            <div class="blog_feature_image">
                                <img src="{{ $blog->getFirstMediaUrl('blog_image', 'thumb') }}" class="wp-post-image"
                                    alt="img">
                            </div>
                            <!--===============spacing==============-->
                            <div class="pd_bottom_20"></div>
                            <!--===============spacing==============-->
                            <div class="post_single_content">
                               
                                <!--===============spacing==============-->
                                <div class="pd_bottom_15"></div>
                                <!--===============spacing==============-->
                                <div class="description_box">
                                    {!! $blog->description !!}
                                </div>

                            </div>
                        </div>
                        <div class="single_content_lower">
                            <div class="tags_and_share">
                                <div class="d-flex">
                                    <div class="tags_content left_one">
                                        <div class="box_tags_psot">
                                            <div class="title">Tags</div>
                                            @if (@$blog && $blog->tags)
                                                @php
                                                    $tags = json_decode($blog->tags);
                                                @endphp
                                                @foreach ($tags as $tag)
                                                    <a class="btn" href="#">#{{ $tag }}</a>
                                                @endforeach
                                            @endif
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                            
                        </div>
                        <div class="related_post">

                            <div class="title_sections_inner">
                                <h2>Related Posts</h2>
                            </div>
                            <!-- Swiper -->

                            <div class="swiper-container"
                                data-swiper='{
                                       "loop": true,
                                       "autoplay": {
                                         "delay": 5000
                                       },
                                       "speed": 1000,
                                       "centeredSlides": false,
                                       "slidesPerView": 2,
                                       "spaceBetween": 30,
                                       "pagination": {
                                         "el": ".swiper-pagination",
                                         "clickable": true
                                       },
                                       "navigation": {
                                         "nextEl": ".related-button-next",
                                         "prevEl": ".related-button-prev"
                                       },
                                       "breakpoints": {
                                          "1200": {
                                             "slidesPerView": 2 
                                            },
                                          "1024": {
                                           "slidesPerView": 2 
                                          },
                                         "768": {
                                           "slidesPerView": 2 
                                         },
                                         "576": {
                                           "slidesPerView": 1 
                                         }
                                       }
                                     }'>
                                <div class="swiper-wrapper">
                                    @foreach ($relatedBlogs as $relatedBlog)
                                        <div class="swiper-slide">
                                            <div class="news_box default_style list_view normal_view clearfix has_images">
                                                <div class="image img_hover-1">
                                                    <img src="{{ $relatedBlog->getFirstMediaUrl('blog_image', 'thumb') }}"
                                                        class="img-fluid" alt="img">
                                                    <a href="#" class="categories">
                                                        <i
                                                            class="icon-folder"></i>{{ $relatedBlog->category?->category_name }}
                                                    </a>
                                                </div>
                                                <div class="content_box">
                                                    <div class="date">
                                                        <span
                                                            class="date_in_number">{{ date('d M, Y', strtotime($relatedBlog->created_at)) }}
                                                        </span>
                                                    </div>
                                                    <div class="source">
                                                        <h2 class="title"><a
                                                                href="{{ route('web.blog-details', [$relatedBlog->slug]) }}"
                                                                rel="bookmark">{{ $relatedBlog->title }}</a></h2>
                                                       
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>

                            </div>
                            <div class="arrow_related">
                                <div class="related-button-prev">
                                    <i class="fa fa-angle-left"></i>
                                </div>
                                <div class="related-button-next">
                                    <i class="fa fa-angle-right"></i>
                                </div>
                            </div>

                        </div>
                    </section>
                    <!--===============spacing==============-->
                    <div class="pd_bottom_70"></div>
                    <!--===============spacing==============-->
                </main>
            </div>
            <aside id="secondary" class="widget-area all_side_bar col-lg-4 col-md-12 col-sm-12">
                <div class="side_bar">
                    <!--===============spacing==============-->
                    <div class="pd_top_90"></div>
                    <!--===============spacing==============-->
                    <div class="widgets_grid_box">
                        
                    </div>

                    <div class="widgets_grid_box">
                        <h2 class="widget-title">Post Categories</h2>
                        <ul class="wp-block-categories">
                            @foreach ($categories as $category)
                                <li><a href="#">{{ $category->category_name }}</a> ({{ $category->blog_count }})
                                </li>
                            @endforeach

                        </ul>
                    </div>
                    <div class="widgets_grid_box">
                        <h2 class="widget-title">Recent Posts</h2>
                        <div class="widget_post_box">
                            @foreach ($recentBlogs as $key => $recentBlog)
                                <div class="blog_in clearfix image_in">
                                    <div class="image">
                                        <img decoding="async"
                                            src="{{ $recentBlog->getFirstMediaUrl('blog_image', 'thumb') }}"
                                            alt="img">
                                    </div>
                                    <div class="content_inner">
                                        <p class="post-date"><span
                                                class="icon-calendar"></span>{{ date('d M Y', strtotime($recentBlog->created_at)) }}
                                        </p>
                                        <h3><a
                                                href="{{ route('web.blog-details', [$recentBlog->slug]) }}">{{ $recentBlog->title }}</a>
                                        </h3>
                                    </div>
                                </div>
                            @endforeach

                           

                        </div>
                    </div>
                    <div class="widgets_grid_box">
                        <h2 class="widget-title">Tag Clouds</h2>
                        <div class="wp-block-tag-cloud">
                            @foreach ($allTags as $tags)
                                @php
                                    $tagsA = json_decode($tags);
                                @endphp
                                @if (!empty($tagsA))
                                    @foreach ($tagsA as $tag)
                                        <a href="#" class="tag-link-9 tag-link-4">{{ $tag }}</a>
                                    @endforeach
                                @endif
                            @endforeach

                           
                        </div>
                    </div>
                    <!--===============spacing==============-->
                    <div class="pd_bottom_70"></div>
                    <!--===============spacing==============-->
                </div>
            </aside>
        </div>
    </div>

@endsection
