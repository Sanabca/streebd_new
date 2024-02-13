@extends('website.layouts.main')
@section('content')

<!----header end----->
<div class="page_header_default style_one ">
    <div class="parallax_cover">
        <div class="simpleParallax"><img src="{{ asset('website/assets/images/page-header-default.jpg')}}"
                alt="bg_image" class="cover-parallax"></div>
    </div>
    <div class="page_header_content">
        <div class="auto-container">
            <div class="row">
                <div class="col-md-12">
                    <div class="banner_title_inner">
                        <div class="title_page">
                            Blog
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="breadcrumbs creote">
                        <ul class="breadcrumb m-auto">
                            <li><a href="index.html">Home</a></li>
                            <li class="active">Blog</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!----header----->
<section>
    <div class="row">
    <div class="pd_top_20"></div>
        <div class="col-md-12">
        <div class="title_all_box style_seven text-center dark_color">
        <div class="title_sections">
            <div class="before_title">
                Blog
            </div>
            {{-- <h3 class="fw-bold">Blog  Categories</h3> --}}
            <div class="small_text_sub">Blog</div>
        </div>
        <!--===============spacing==============-->
        <div class="pd_bottom_20"></div>
        <!--===============spacing==============-->
    </div>
        </div>

    </div>
  
</section>

<div class="slider-one">
    <div class="slide-track">
        <div class="slide"> 
            <a href="{{route('web.blog')}}"><p class="text-black fw-medium">All</p></a>
        </div>
        @foreach ($categories as $key => $category )
        <div class="slide"> 
            <a href="{{route('web.blog-category',[$category->slug])}}"><p class="text-black fw-medium">{{$category->category_name}}</p></a>
        </div>
        @endforeach
    </div>
</div>
<section class="blog_post_section two_column  style_three">

    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="grid_show_case grid_layout clearfix">
                    @foreach ($blogs as $key => $blog)
                    <div class="news_box style_two grid_box _card has_images">
                        <div class="content_box">
                            <div class="overlay"> </div>
                            <img src="{{$blog->getFirstMediaUrl('blog_image', 'thumb')}}" class="img-fluid"
                                alt="img">
                            <div class="category">
                                <a href="{{route('web.blog-category',[$blog->category?->slug])}}" class="categories"><i class="icon-folder"></i>{{$blog->category?->category_name}}</a>
                            </div>
                            <div class="content_mid">
                                <span class="date_in_number">{{$blog->created_at->diffForHumans()}}</span>
                                <h2 class="title"><a href="{{route('web.blog-details',[$blog->slug])}}" rel="bookmark">{{$blog->title}}</a></h2>
                            </div>
                        </div>
                    </div>
                    @endforeach
                   
                   
                </div>
            </div>
        </div>
    </div>
    <!--===============spacing==============-->
    <div class="pd_top_70"></div>
    <!--===============spacing==============-->

</section>

@endsection