@extends('website.layouts.main')
@section('content')

<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"> -->
<!----blog---->
<section class="blog-section">
    <!--===============spacing==============-->
    <div class="pd_top_80"></div>
    <!--===============spacing==============-->
    <div class="container">
        <div class="row gutter_35px">
            <div class="col-lg-12">
                <div class="title_all_box style_one text-center dark_color">
                    <div class="title_sections">
                        <div class="before_title">Find Out Our</div>
                        <h2>Insights &amp; Intelligence</h2>
                    </div>
                    <!--===============spacing==============-->
                    <div class="pd_bottom_20"></div>
                    <!--===============spacing==============-->
                </div>
            </div>


            <div class="wrapper">
            <div class="icon"><i id="left" class="fa fa-arrow-left"></i></div>
                <ul class="tabs-box">
                    <li class="tab">Coding</li>
                    <li class="tab active">JavaScript</li>
                    <li class="tab">Podcasts</li>
                    <li class="tab">Databases</li>
                    <li class="tab">Web Development</li>
                    <li class="tab">Unboxing</li>
                    <li class="tab">History</li>
                    <li class="tab">Programming</li>
                    <li class="tab">Gadgets</li>
                    <li class="tab">Algorithms</li>
                    <li class="tab">Comedy</li>
                    <li class="tab">Gaming</li>
                    <li class="tab">Share Market</li>
                    <li class="tab">Smartphones</li>
                    <li class="tab">Data Structure</li>
                </ul>
                <div class="icon"><i id="right" class="fa fa-arrow-right"></i></div>
            </div>

            <div class="col-lg-12 mt-2">
                <div class="blog_post_section three_column news_wrapper_grid style_eight">
                    <div class="col-lg-12">
                        <p>37 POSTS
                        </p>
                    </div>
                    <div class="grid_show_case grid_layout clearfix">

                        <div class="grid_box _card">
                            <div class="news_box style_eight">
                                <div class="image_box ">
                                    <img width="750" height="420"
                                        src="{{ asset('website/assets/images/blog/blog-image-2.jpg')}}"
                                        class="img-fluid" alt="img" loading="lazy">
                                </div>
                                <div class="content_box">
                                    <div class="category">
                                        <a href="#" class="categories">Engineering</a>
                                    </div>
                                    <div class="category">
                                        <a href="#" class="categories">Code quality and design</a>
                                    </div>
                                    <div class="category">
                                        <a href="#" class="categories">Coaching</a>
                                    </div>


                                    <h2 class="title"><a href="#" rel="bookmark">Policies &amp;
                                            Procedures for Startups</a></h2>
                                  
                                    <a href="#" class="link__go">Read More<i
                                            class="icon-right-arrow-long"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="grid_box _card">
                            <div class="news_box style_eight">
                                <div class="image_box ">
                                    <img width="750" height="420"
                                        src="{{ asset('website/assets/images/blog/blog-image-11.jpg')}}"
                                        class="img-fluid" alt="img" loading="lazy">
                                </div>
                                <div class="content_box">
                                    <div class="category">
                                        <a href="#" class="categories">Code quality and design</a>
                                    </div>
                                    <div class="category">
                                        <a href="#" class="categories">Coaching</a>
                                    </div>

                                    <div class="category">
                                        <a href="#" class="categories">Engineering</a>
                                    </div>
                                    <h2 class="title"><a href="#" rel="bookmark">Workplace problems in
                                            your business?</a></h2>
                                 
                                    <a href="#" class="link__go">Read More<i
                                            class="icon-right-arrow-long"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="grid_box _card">
                            <div class="news_box style_eight">
                                <div class="image_box ">
                                    <img width="750" height="420"
                                        src="{{ asset('website/assets/images/blog/blog-image-4.jpg')}}"
                                        class="img-fluid" alt="img" loading="lazy">
                                </div>
                                <div class="content_box">
                                    <div class="category">
                                        <a href="#" class="categories">Coaching</a>
                                    </div>
                                    <div class="category">
                                        <a href="#" class="categories">Code quality and design</a>
                                    </div>
                                    <div class="category">
                                        <a href="#" class="categories">Engineering</a>
                                    </div>
                                    <h2 class="title"><a href="#" rel="bookmark">How to Handle Your Good
                                            Employee</a></h2>
                                  
                                    <a href="#" class="link__go">Read More<i
                                            class="icon-right-arrow-long"></i></a>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="grid_show_case grid_layout clearfix">

                        <div class="grid_box _card">
                            <div class="news_box style_eight">
                                <div class="image_box ">
                                    <img width="750" height="420"
                                        src="{{ asset('website/assets/images/blog/blog-image-7.jpg')}}"
                                        class="img-fluid" alt="img" loading="lazy">
                                </div>
                                <div class="content_box">
                                    <div class="category">
                                        <a href="#" class="categories">Engineering</a>
                                    </div>
                                    <div class="category">
                                        <a href="#" class="categories">Code quality and design</a>
                                    </div>
                                    <div class="category">
                                        <a href="#" class="categories">Coaching</a>
                                    </div>


                                    <h2 class="title"><a href="#" rel="bookmark">Policies &amp;
                                            Procedures for Startups</a></h2>
                                  
                                    <a href="#" class="link__go">Read More<i
                                            class="icon-right-arrow-long"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="grid_box _card">
                            <div class="news_box style_eight">
                                <div class="image_box ">
                                    <img width="750" height="420"
                                        src="{{ asset('website/assets/images/blog/blog-image-8.jpg')}}"
                                        class="img-fluid" alt="img" loading="lazy">
                                </div>
                                <div class="content_box">
                                    <div class="category">
                                        <a href="#" class="categories">Code quality and design</a>
                                    </div>
                                    <div class="category">
                                        <a href="#" class="categories">Coaching</a>
                                    </div>

                                    <div class="category">
                                        <a href="#" class="categories">Engineering</a>
                                    </div>
                                    <h2 class="title"><a href="#" rel="bookmark">Workplace problems in
                                            your business?</a></h2>
                                 
                                    <a href="#" class="link__go">Read More<i
                                            class="icon-right-arrow-long"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="grid_box _card">
                            <div class="news_box style_eight">
                                <div class="image_box ">
                                    <img width="750" height="420"
                                        src="{{ asset('website/assets/images/blog/blog-image-9.jpg')}}"
                                        class="img-fluid" alt="img" loading="lazy">
                                </div>
                                <div class="content_box">
                                    <div class="category">
                                        <a href="#" class="categories">Coaching</a>
                                    </div>
                                    <div class="category">
                                        <a href="#" class="categories">Code quality and design</a>
                                    </div>
                                    <div class="category">
                                        <a href="#" class="categories">Engineering</a>
                                    </div>
                                    <h2 class="title"><a href="#" rel="bookmark">How to Handle Your Good
                                            Employee</a></h2>
                                  
                                    <a href="#" class="link__go">Read More<i
                                            class="icon-right-arrow-long"></i></a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="col-md-12 text-center">
                <div class="button button-2 ">Load More</div>
            </div>
        </div>
    </div>
    <!--===============spacing==============-->
    <div class="pd_top_50"></div>
    <!--===============spacing==============-->
</section>
<!----blog end---->



@endsection