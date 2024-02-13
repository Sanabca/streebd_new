@extends('website.layouts.main')
@section('content')
<!--===============PAGE CONTENT==============-->
<div id="content" class="site-content">
    <!--- slider-->
    <section class="slider style_page_eleven  nav_position_one">
        <div class="banner_carousel owl-carousel owl_nav_block owl_dots_none theme_carousel owl-theme"
            data-options='{"loop": true, "margin": 0, "autoheight":true, "lazyload":true, "nav": true, "dots": true, "autoplay": true, "autoplayTimeout": 3000, "smartSpeed": 1200, "responsive":{ "0" :{ "items": "1" }, "768" :{ "items" : "1" } , "1000":{ "items" : "1" }}}'>

            <div class="slide-item-content">
                <div class="slide-item content_center">
                    <div class="image-layer"
                        style="background-image:url({{ asset('website/assets/images/sliders/slider-1.jpg')}})">
                    </div>
                    <div class="auto-container">
                        <div class="row align-items-center">
                            <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                                <div class="slider_content">
                                    <h1 class="animate_left">Wealth Management </h1>
                                    <p class="description1"> "Elevate Your Wealth, <br>Secure Your Tomorrow."
                                    </p>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slide-item-content">
                <div class="slide-item content_center">
                    <div class="image-layer"
                        style="background-image:url({{ asset('website/assets/images/sliders/slider-2.jpg')}})">
                    </div>
                    <div class="auto-container">
                        <div class="row align-items-center">
                            <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                                <div class="slider_content">
                                    <h1 class="animate_right">
                                        Retirement Plan
                                    </h1>
                                    <p class="description1">"Retire in Confidence -<br> Plan Today, Enjoy
                                        Tomorrow." </p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slide-item-content">
                <div class="slide-item content_center">
                    <div class="image-layer"
                        style="background-image:url({{ asset('website/assets/images/sliders/slider-1-3.jpg')}})">
                    </div>
                    <div class="auto-container">
                        <div class="row align-items-center">
                            <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                                <div class="slider_content">
                                    <h1 class="animate_right">
                                        Children Education
                                    </h1>
                                    <p class="description1">"Investing in Futures - <br>Nurturing Dreams,
                                        Securing Education." </p>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slide-item-content">
                <div class="slide-item content_center">
                    <div class="image-layer"
                        style="background-image:url({{ asset('website/assets/images/sliders/slider-3.jpg')}})">
                    </div>
                    <div class="auto-container">
                        <div class="row align-items-center">
                            <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                                <div class="slider_content">
                                    <h1 class="animate_right">
                                        Portfolio Management
                                    </h1>
                                    <p class="description1">"Crafting Success, <br>One Investment at a Time."
                                    </p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!---slider-end--->


    <!--process-->
    <section class="process-section">
        <!--===============spacing==============-->
        <div class="pd_top_60"></div>
        <!--===============spacing==============-->
        <div class="container">
            <div class="row">
                <div class="col-lg-6 m-auto">
                    <div class="title_all_box style_seven text-center dark_color">
                        <div class="title_sections">
                            <div class="before_title">
                                Way of Working
                            </div>
                            <h3 class="fw-bold">Our Working Progress</h3>
                            <div class="small_text_sub">Way of Working</div>
                        </div>
                        <!--===============spacing==============-->
                        <div class="pd_bottom_40"></div>
                        <!--===============spacing==============-->
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="choose_box type_two">
                        <div class="icon_box">
                            <div class="icon_image">
                                <img src="{{ asset('website/assets/images/24-hours-support.png')}}"
                                    class="img-fluid svg_image" alt="icon png">
                            </div>
                            <span class="icon_bg_rotate"></span>
                        </div>
                        <div class="content_box">
                            <h2>
                                <a href="#">
                                    Defining Success Together
                                </a>
                            </h2>
                            <p>we delve into your financial goals, preferences, and risk tolerance to craft a
                                personalized wealth strategy.</p>
                        </div>
                        <div class="step">
                            <h6 class="step_no">01</h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="choose_box type_two">
                        <div class="icon_box">
                            <div class="icon_image">
                                <img src="{{ asset('website/assets/images/email-marketing.png')}}"
                                    class="img-fluid svg_image" alt="icon png">
                            </div>
                            <span class="icon_bg_rotate"></span>
                        </div>
                        <div class="content_box">
                            <h2>
                                <a href="#" target="&quot;_blank&quot;">
                                    Crafting Your Financial Roadmap </a>
                            </h2>
                            <p>We create a personalized financial plan that aligns with your goals by analyzing market
                                trends and risks.</p>
                        </div>
                        <div class="step">
                            <h6 class="step_no">02</h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="choose_box type_two">
                        <div class="icon_box">
                            <div class="icon_image">
                                <img src="{{ asset('website/assets/images/idea1.png')}}" class="img-fluid svg_image"
                                    alt="icon png">
                            </div>
                            <span class="icon_bg_rotate"></span>
                        </div>
                        <div class="content_box">
                            <h2>
                                <a href="#">
                                    Turning Plans into Actions
                                </a>
                            </h2>
                            <p>We swiftly execute personalized wealth plan, optimized portfolios, manage
                                taxes, and implementation.</p>
                        </div>
                        <div class="step">
                            <h6 class="step_no">03</h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="choose_box type_two">
                        <div class="icon_box">
                            <div class="icon_image">
                                <img src="{{ asset('website/assets/images/world.png')}}" class="img-fluid svg_image"
                                    alt="icon png">
                            </div>
                            <span class="icon_bg_rotate"></span>
                        </div>
                        <div class="content_box">
                            <h2>
                                <a href="#">
                                    Dynamic Solutions for a Dynamic World
                                </a>
                            </h2>
                            <p>Finberg adjusts your portfolio strategies to align with market changes for a responsive
                                financial plan.</p>
                        </div>
                        <div class="step">
                            <h6 class="step_no">04</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--===============spacing==============-->
        <div class="pd_bottom_20"></div>
        <!--===============spacing==============-->
    </section>
    <!---process end-->


    <!---about--->
    <section class="about-section" style="background: #eceff1;">
        <!--===============spacing==============-->
        <div class="pd_bottom_80"></div>
        <!--===============spacing==============-->
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-12 col-md-12 mb-sm-5 mb-md-5 mb-lg-5 mb-xl-0">
                    <div class="image_boxes style_six">
                        <div class="image_box">
                            <img src="{{ asset('website/assets/images/about/about-3.jpg')}}"
                                class="img-fluid height_510px object-fit-cover" alt="about">

                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-10 col-md-12">
                    <div class="title_all_box style_five dark_color">
                        <div class="title_sections five">
                            {{-- <div class="before_title">About</div> --}}
                            <h2>Who We Are..</h2>
                            <div class="description">
                                <p>At Finberg, we are more than financial experts; we are your dedicated partners on the
                                    journey to financial success. With a steadfast commitment to integrity and
                                    transparency, we redefine wealth management by blending experience and innovation.
                                    Our seasoned team of professionals is driven by a shared mission — empowering you to
                                    navigate the complexities of wealth with confidence.<br><br> At Finberg, it's not
                                    just about
                                    managing assets; it's about building lasting relationships and turning aspirations
                                    into achievements. Discover a financial ally that goes beyond numbers — discover
                                    Finberg, where your financial well-being is our top priority.
                                </p>
                            </div>
                        </div>
                    </div>



                    <div class="row gutter_15px">



                        <div class="col-lg-5 col-md-5 col-sm-12 p-0">
                            <div class="button button-2">Learn More</div>
                            <!--===============spacing==============-->
                            <div class="pd_bottom_40"></div>
                            <!--===============spacing==============-->
                        </div>
                        <div class="col-lg-7 col-md-7 col-sm-12">
                            {{-- <div class="extra_content image_with_content dark_color">
                                <div class="simple_image">
                                    <img src="{{ asset('website/assets/images/authour-image.png')}}" alt="img">
                            <h2> Since 1998, Operating <br> in Birmingham.</h2>
                        </div>
                    </div> --}}

                </div>
            </div>
        </div>
</div>
<!--===============spacing==============-->
<div class="pd_bottom_40"></div>
<!--===============spacing==============-->
<!-- <div class="row">
    <div class="col-xl-6 col-lg-6 mb-5 mb-lg-0 mb-xl-0">
        <div class="link_box_contents style_one">
            <div class="link_content_bx">
                <div class="image_box">
                    <img src="{{ asset('website/assets/images/link-box-2.png')}}" alt="img">
                </div>
                <div class="con_box">
                    <h2>For More Information About Our Services </h2>
                    <a href="{{route('web.service')}}">Know More <i class="icon-right-arrow-long"></i></a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-6 col-lg-6">
        <div class="link_box_contents style_two">
            <div class="link_content_bx">
                <div class="con_box">
                    <h2>Finberg has experience across all industries.</h2>
                    <a href="{{route('web.contact-us')}}">Contact Us <i class="icon-right-arrow-long"></i></a>
                </div>
                <div class="image_box">
                    <img src="{{ asset('website/assets/images/link-box-1.png')}}" alt="img">
                </div>
            </div>
        </div>
    </div>
</div> -->
</div>
<!--===============spacing==============-->
<div class="pd_bottom_80"></div>
<!--===============spacing==============-->
</section>
<!---about end--->




<!---Mission & Vission--->
<section class="service-section" style="background:#eceff1">

    <div class="container">
        <div class="row">


            <div class="col-xl-4 col-lg-6 col-md-12 col-sm-12 col-xs-12">
                <div class="service_box style_two dark_color">
                    <div class="service_content_two  active_ser">
                        <div class="content_inner"
                            style="background-image:url({{ asset('website/assets/images/service/service-image-2.png')}});">

                        </div>



                        <div class="overlay_content">
                            <h2>
                                <img src="{{asset('website/assets/images/our-mission.png')}}" class="img-fluid mb-3"
                                    alt="mission" height="60px" width="60px">

                                <a href="#"> Our Mission </a>
                            </h2>
                            <p>At Finberg, we are dedicated to empowering individuals on their financial journey by
                                delivering expert wealth management solutions that foster prosperity and help our
                                clients achieve their unique financial aspirations.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-12 col-sm-12 col-xs-12">
                <div class="service_box style_two dark_color">
                    <div class="service_content_two  active_ser">
                        <div class="content_inner"
                            style="background-image:url({{ asset('website/assets/images/service/service-image-2.png')}});">

                        </div>

                        <div class="overlay_content">
                            <img src="{{asset('website/assets/images/values.png')}}" class="img-fluid mb-3"
                                alt="mission" height="60px" width="60px">
                            <h2>
                                <a href="#">Our Values</a>
                            </h2>
                            <p>At Finberg, our values form the cornerstone of our business. Integrity, transparency, and
                                client-centricity are not just principles but the bedrock of our culture. We uphold the
                                highest standards of behavior, placing the trust and well-being of our clients at the
                                forefront of everything we do.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-4 col-lg-6 col-md-12 col-sm-12 col-xs-12">
                <div class="service_box style_two dark_color">
                    <div class="service_content_two  active_ser">
                        <div class="content_inner"
                            style="background-image:url({{ asset('website/assets/images/service/service-image-3.png')}});">

                        </div>

                        <div class="overlay_content">
                            <img src="{{asset('website/assets/images/vission.png')}}" class="img-fluid mb-3"
                                alt="mission" height="60px" width="60px">
                            <h2>
                                <a href="#">Our Vission</a>
                            </h2>
                            <p>At Finberg, We Believe in having transparency with our clients and with this our clear
                                vision
                                is to be one of the most trusted brands in the world of Wealth Management.</p>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
    <!--===============spacing==============-->
    <div class="pd_bottom_90"></div>
    <!--===============spacing==============-->
</section>
<!---Mission & Vission--->

<section class="process-section" style="  background: #f6faff;">
    <!--===============spacing==============-->
    <div class="pd_top_40"></div>
    <!--===============spacing==============-->
    <div class="container">
        <div class="row">
            <div class="col-lg-2"></div>
            <div class="col-lg-8">
                <div class="title_all_box style_one text-center dark_color">
                    <div class="title_sections">
                        <div class="before_title"> Tailored Solutions for Your Unique Financial Journey
                        </div>
                        <h2> Wide range of investment products!</h2>
                        <p>We at Finberg belive that every client has a different investment requirement based on
                            his riskprofile and financial goals. To help clients build up a customized portfolio we
                            have Plethora of investment products and services to help our clients in achieving their
                            financial goals comfotably.</p>
                    </div>



                    <a href="{{route('web.service')}}">
                        <div class="button button-2">Read More</div>
                    </a>

                    <!--===============spacing==============-->
                    <div class="pd_bottom_20"></div>
                    <!--===============spacing==============-->
                </div>
            </div>
            <div class="col-lg-2"></div>
        </div>


    </div>
    <!--===============spacing==============-->
    <div class="pd_bottom_40"></div>
    <!--===============spacing==============-->
</section>


<!---tab---->
<section class="tab-section bg_op_1" style="background-image:url({{ asset('website/assets/images/tab-sec-bg.jpg')}});">
    <!--===============spacing==============-->
    <div class="pd_top_100"></div>
    <!--===============spacing==============-->
    <div class="container">
        <div class="row">
            <div class="tabs_all_box  tabs_all_box_start type_one">
                <div class="tab_over_all_box">
                    <div class="tabs_header clearfix">
                        <ul class="showcase_tabs_btns nav-pills nav   clearfix">
                            <li class="nav-item">
                                <a class="s_tab_btn nav-link active" data-tab="#tabtabone">01. Affordable</a>
                            </li>
                            <li class="nav-item">
                                <a class="s_tab_btn nav-link" data-tab="#tabtabtwo">02. Knowledge</a>
                            </li>
                            <li class="nav-item">
                                <a class="s_tab_btn nav-link" data-tab="#tabtabthree">03. Saves Time</a>
                            </li>
                            <li class="nav-item">
                                <a class="s_tab_btn nav-link" data-tab="#tabtabtfour">04. Fast &amp; Quality</a>
                            </li>
                            <li class="nav-item">
                                <a class="s_tab_btn nav-link" data-tab="#tabtabfive">05. Experienced</a>
                            </li>
                        </ul>
                        <div class="toll_free">
                            <a href="{{route('web.contact-us')}}"> <i class="icon-phone-call"></i>Call Now For
                                Consultation</a>
                        </div>
                    </div>
                    <div class="s_tab_wrapper">
                        <div class="s_tabs_content">
                            <div class="s_tab fade active-tab show" id="tabtabone">
                                <div class="tab_content one"
                                    style="background-image:url({{ asset('website/assets/images/tab-image.jpg')}})">
                                    <div class="content_image">


                                        <h2>Affordable &amp; Flexible</h2>

                                        <p>At Finberg, we hold the conviction that superior wealth management services
                                            should be accessible to everyone without imposing an undue financial burden.
                                            Our services are carefully crafted to remain affordable while maintaining
                                            the highest standards of quality. With our expert financial guidance,
                                            clients can rest assured that their financial goals and aspirations will be
                                            met with utmost professionalism and proficiency.</p>


                                    </div>
                                </div>
                            </div>
                            <div class="s_tab fade" id="tabtabtwo">
                                <div class="tab_content one"
                                    style="background-image:url({{ asset('website/assets/images/blog/blog-image-8.jpg')}})">
                                    <div class="content_image">


                                        <h2>Knowledge</h2>

                                        <p>Our team at Finberg boasts years of experience in the finance sector, which
                                            has provided us with a profound understanding of the industry. We remain
                                            up-to-date on the latest market trends, investment strategies, and
                                            regulatory changes to provide you with the most informed advice tailored to
                                            your specific needs. Our expertise and knowledge enable us to deliver
                                            customized solutions that meet your financial objectives and help you
                                            achieve your goals.</p>


                                    </div>
                                </div>
                            </div>
                            <div class="s_tab fade" id="tabtabthree">
                                <div class="tab_content one"
                                    style="background-image:url({{ asset('website/assets/images/about/about-4.jpg')}})">
                                    <div class="content_image">


                                        <h2>Saves Time</h2>

                                        <p>We acknowledge that your time is a precious resource. Therefore, we at
                                            Finberg streamline the wealth management process, thereby saving you
                                            valuable time and effort. Our services cover initial consultations to
                                            portfolio management, allowing you to focus on what matters most to you
                                            while we handle the complexities of wealth management.</p>


                                    </div>
                                </div>
                            </div>
                            <div class="s_tab fade" id="tabtabtfour">
                                <div class="tab_content one"
                                    style="background-image:url({{ asset('website/assets/images/about/about-2.jpg')}})">
                                    <div class="content_image">


                                        <h2>Fast and Quality</h2>

                                        <p>At Finberg, we take great pride in providing our clients with exceptional
                                            financial services that are both fast and of the highest quality. Our
                                            streamlined processes ensure that we meet your financial needs promptly
                                            without compromising the quality of our advice or solutions. Our team of
                                            experienced professionals is dedicated to helping you achieve your financial
                                            goals through personalized and reliable guidance that is tailored to your
                                            unique situation. With Finberg, you can rest assured that your financial
                                            well-being is in good hands.</p>


                                    </div>
                                </div>
                            </div>
                            <div class="s_tab fade" id="tabtabfive">
                                <div class="tab_content one"
                                    style="background-image:url({{ asset('website/assets/images/about/about-3.jpg')}})">
                                    <div class="content_image">


                                        <h2>Experienced</h2>

                                        <p>At Finberg, we are proud to have a team of highly experienced professionals
                                            who have been working in the finance industry for years. They possess a
                                            wealth of expertise and have helped numerous clients achieve their financial
                                            goals by navigating various market conditions successfully. You can rely on
                                            our seasoned professionals to provide you with experienced guidance you can
                                            trust. So, choose Finberg for unparalleled financial expertise and guidance.
                                        </p>


                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--===============spacing==============-->
    <div class="pd_bottom_90"></div>
    <!--===============spacing==============-->
</section>
<!---tab-end--->

<!--feature-->
<section class="feature-section">
    <!--===============spacing==============-->
    <div class="pd_top_90"></div>
    <!--===============spacing==============-->
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="title_all_box style_seven text-center dark_color">
                    <div class="title_sections">
                        <div class="before_title">
                            Organisation
                        </div>
                        <div class="small_text_sub">Organisation</div>
                        <h3 class="fw-bold"> Our Organizational Values</h3>
                        <p class="description_text">
                            We can help you create positive and permanent changes in your life.<br>
                            Let’s Create Something new and awesome Togeather.
                        </p>
                    </div>
                    <!--===============spacing==============-->
                    <div class="pd_bottom_30"></div>
                    <!--===============spacing==============-->
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                <div class="icon_box_new_box type_two ">
                    <span class="borders"></span>
                    <div class="icon_box">
                        <img src="{{ asset('website/assets/images/trust.png')}}" class="img-fluid svg_image"
                            alt="icon png">
                        <span class="icon_bg_rotate"></span>
                    </div>
                    <div class="content">
                        <h2>
                            <a href="#">TRUST</a>
                        </h2>
                        <p>We at FinBerg believe that when it comes to investing for your dreams, one seeks someone
                            to put their extreme trust on. The first and foremost step we take while acquiring the
                            client is to be building a relationship of trust with them.</p>

                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                <div class="icon_box_new_box type_two ">
                    <span class="borders"></span>
                    <div class="icon_box">
                        <img src="{{ asset('website/assets/images/dedication.png')}}" class="img-fluid svg_image"
                            alt="icon png">
                        <span class="icon_bg_rotate"></span>
                    </div>
                    <div class="content">
                        <h2>
                            <a href="#">DEDICATION</a>
                        </h2>
                        <p>At FinBerg, every client is equally valued. Our goal is to provide exceptional client
                            satisfaction by dedicating all our resources and energy.</p>

                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                <div class="icon_box_new_box type_two ">
                    <span class="borders"></span>
                    <div class="icon_box">
                        <img src="{{ asset('website/assets/images/transparancy.png')}}" class="img-fluid svg_image"
                            alt="icon png">
                        <span class="icon_bg_rotate"></span>
                    </div>
                    <div class="content">
                        <h2>
                            <a href="#">TRANSPARENCY</a>
                        </h2>
                        <p>The key to building a strong client-advisor relationship is maintaining transparency at
                            every stage of financial planning. Transparency is of utmost importance for us because
                            it gives clients confidence in us and the investments they make.</p>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--===============spacing==============-->
    <div class="pd_bottom_20"></div>
    <!--===============spacing==============-->
</section>
<!---feature end-->


<!--service-->
<section class="service-section bg_dark_1 position-relative">
    <!--===============spacing==============-->
    <div class="pd_top_80"></div>
    <!--===============spacing==============-->
    <div class="auto-container">
        <div class="row">
            <div class="col-lg-8 m-auto">
                <div class="title_all_box style_seven text-center light_color">
                    <div class="title_sections">
                        <div class="before_title">

                            Our Blog
                        </div>
                        <h3 style="font-weight:200"> Explore insights, tips, and trends in finance with Finberg's blog.
                        </h3>
                        <div class="small_text_sub">Our Blog</div>
                    </div>
                    <!--===============spacing==============-->
                    <div class="pd_bottom_30"></div>
                    <!--===============spacing==============-->
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="service_all_styles carousel owl_new_one">
                    <div class="owl_nav_block owl_dots_none owl_type_one theme_carousel owl-theme owl-carousel"
                        data-options='{"loop": true, "margin": 30, "autoheight":true, "lazyload":true, "nav": true, "dots": true, "autoplay": true, "autoplayTimeout": 2000, "smartSpeed": 1000, "responsive":{ "0" :{ "items": "1" }, "768" :{ "items" : "3" } , "1000":{ "items" : "3" }}}'>
                        <div class="grid_box _card">
                            <div class="service_post style_five">
                                <div class="image_box">
                                    <img loading="lazy" width="500" height="500"
                                        src="{{ asset('website/assets/images/service/service-image-6.jpg')}}" alt="img">
                                    <div class="gradient"></div>
                                </div>
                                <div class="content_box">
                                    <h2 class="title_service"><a><a
                                                href="index.html/service/talent-management/index.html"
                                                rel="bookmark">Talent Management</a></h2>
                                    <p class="short_desc">add the products(equity, AIF etc.) overview here.


                                    </p>
                                    <a class="read_more" href="index.html/service/talent-management/index.html"> <i
                                            class="icon-right-arrow-long"></i>Read More</a>
                                </div>
                                <div class="icon_box">
                                    <span class="icon icon-thumbs-up icons"></span>
                                </div>
                            </div>
                        </div>
                        <div class="grid_box _card">
                            <div class="service_post style_five">
                                <div class="image_box">
                                    <img width="500" height="500"
                                        src="{{ asset('website/assets/images/service/service-image-5.jpg')}}" alt="img"
                                        loading="lazy">
                                    <div class="gradient"></div>
                                </div>
                                <div class="content_box">
                                    <h2 class="title_service"><a><a
                                                href="index.html/service/health-care-benefits/index.html"
                                                rel="bookmark">Health Care Benefits</a></h2>
                                    <p class="short_desc">Workplace conflict can become a costly and time-consuming
                                        process .</p>
                                    <a class="read_more" href="index.html/service/health-care-benefits/index.html"> <i
                                            class="icon-right-arrow-long"></i>Read More</a>
                                </div>
                                <div class="icon_box">
                                    <span class="icon icon-thumbs-up icons"></span>
                                </div>
                            </div>
                        </div>
                        <div class="grid_box _card">
                            <div class="service_post style_five">
                                <div class="image_box">
                                    <img width="500" height="500"
                                        src="{{ asset('website/assets/images/service/service-image-4.jpg')}}" alt="img"
                                        loading="lazy">
                                    <div class="gradient"></div>
                                </div>
                                <div class="content_box">
                                    <h2 class="title_service"><a><a href="index.html/service/risk-management/index.html"
                                                rel="bookmark">Risk Management</a></h2>
                                    <p class="short_desc">Mitigate workplace issues before they escalate ,Shared Time
                                        Human.</p>
                                    <a class="read_more" href="index.html/service/risk-management/index.html"> <i
                                            class="icon-right-arrow-long"></i>Read More</a>
                                </div>
                                <div class="icon_box">
                                    <span class="icon icon-thumbs-up icons"></span>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--===============spacing==============-->
    <div class="pd_bottom_50"></div>
    <!--===============spacing==============-->

</section>
<!--service end-->






<!----team---->
<section class="team-section">
    <div class="container">
        <!--===============spacing==============-->
        <div class="pd_top_40"></div>
        <!--===============spacing==============-->
        <div class="row">
            <div class="col-lg-12">

                <div class="title_all_box style_three text-center dark_color">
                    <div class="title_sections three">
                        <h2>Our Experts</h2>
                    </div>
                    <!--===============spacing==============-->
                    <div class="mr_bottom_30"></div>
                    <!--===============spacing==============-->
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                <div class="team_box style_two">
                    <div class="team_box_outer">
                        <div class="image_box ">

                            <img src="{{ asset('website/assets/images/team/moiz-ali-sethji-wala.png')}}"
                                alt="team image">
                            <div class="overlay ">

                                {{-- <ul>
                                    <li><a href="#"> <i class="fa fa-facebook"> </i> </a></li>

                                    <li><a href="#"> <i class="fa fa-skype"> </i> </a></li>
                                    <li><a href="#"> <i class="fa fa-instagram"> </i> </a></li>
                                </ul> --}}
                            </div>
                        </div>
                        <div class="content_box ">
                            <h2> <a href="#" target="_blank" rel="nofollow">
                                    Moiz Ali Sethji Wala</a>
                            </h2>
                            {{-- <p class="job_details">Founder </p> --}}

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                <div class="team_box style_two">
                    <div class="team_box_outer">
                        <div class="image_box ">
                            <img src="{{ asset('website/assets/images/team/busaina-ali-sethji-wala.png')}}"
                                alt="team image">
                            <div class="overlay ">

                                {{-- <ul>
                                    <li><a href="#"> <i class="fa fa-facebook"> </i> </a></li>

                                    <li><a href="#"> <i class="fa fa-skype"> </i> </a></li>
                                    <li><a href="#"> <i class="fa fa-instagram"> </i> </a></li>
                                </ul> --}}
                            </div>
                        </div>
                        <div class="content_box ">
                            <h2> <a href="#" target="_blank" rel="nofollow">
                                    Busaina Sethji Wala</a>
                            </h2>
                            {{-- <p class="job_details">Team Leader </p> --}}

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                <div class="team_box style_two">
                    <div class="team_box_outer">
                        <div class="image_box ">
                            <img src="{{ asset('website/assets/images/team/yaqub-ali-sethji-wala.png')}}"
                                alt="team image">
                            <div class="overlay ">

                                {{-- <ul>
                                    <li><a href="#"> <i class="fa fa-facebook"> </i> </a></li>

                                    <li><a href="#"> <i class="fa fa-skype"> </i> </a></li>
                                    <li><a href="#"> <i class="fa fa-instagram"> </i> </a></li>
                                </ul> --}}
                            </div>
                        </div>
                        <div class="content_box ">
                            <h2> <a href="#" target="_blank" rel="nofollow">
                                    Yaqub Ali Sethji Wala</a>
                            </h2>
                            {{-- <p class="job_details">Manager </p> --}}

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--===============spacing==============-->
    <div class="pd_bottom_40"></div>
    <!--===============spacing==============-->
</section>
<!----team-end---->


<!--content-->
<section class="content-section bg_light_1">
    <!--===============spacing==============-->
    <div class="pd_top_90"></div>
    <!--===============spacing==============-->
    <div class="container">
        <div class="row gutter_15px">
            <div class="col-xl-6 col-lg-12 mb-5 mb-lg-5 mb-xl-0">
                <div class="creote-image-box image-box-overlap">
                    <div class="image_boxes style_eight">
                        <img src="{{ asset('website/assets/images/banner-four-bg.jpg')}}"
                            class="img-fluid image_fit height_500px pd_right_30" alt="img">
                        <div class="row no-space">
                            <div class="col-lg-5"></div>
                            {{-- <div class="col-lg-7 bg-green mr_top_minus_150 pd_top_50  pd_left_40 pd_right_50 pd_bottom_20 bg_op_1"
                                style="background-image:url({{ asset('website/assets/images/pannern-n3.png')}})!important;">
                            <div class="title_all_box style_one light_color">
                                <div class="title_sections left">
                                    <div class="before_title color_white">831,435+</div>
                                    <p class="color_white">Trusted, Happy &amp; Satisfied Businesses</p>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-6 col-lg-12 pd_left_35">
            <div class="title_all_box style_one  dark_color">
                <div class="title_sections">
                    <div class="before_title">Leading</div>
                    <h2 class="title"> Probability of success
                    </h2>
                    <p>Having a thorough understanding of finance and wealth management is crucial for making
                        informed decisions. At Finberg, we use advanced analytics to assess the potential success of
                        various strategies. Our data-driven approach allows us to accurately determine the
                        likelihood of success, providing you with a comprehensive understanding of potential
                        outcomes. By conducting meticulous analysis and scenario planning, we equip you with
                        insights that go beyond mere probabilities, ensuring a strategic and well-calculated
                        approach to wealth management. Rely on Finberg for a clearer path to financial success,
                        where informed decisions are supported by the predictive power of advanced financial
                        analytics.
                    </p>
                </div>
            </div>

            <!--===============spacing==============-->
            <div class="pd_bottom_20"></div>
            <!--===============spacing==============-->
            <div class="button button-2">Contact Us</div>

        </div>
    </div>
    </div>
    <!--===============spacing==============-->
    <div class="pd_bottom_90"></div>
    <!--===============spacing==============-->
</section>
<!--content-->


<!--service-->
<section class="service-section bg-blue">
    <!--===============spacing==============-->
    <div class="pd_top_70"></div>
    <!--===============spacing==============-->


    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="title_all_box style_seven text-center light_color">
                    <div class="title_sections">
                        <div class="before_title">

                            Our Products
                        </div>
                        <h3 class="title fw-lighter">Our power of choice is untrammelled and when nothing prevents
                            being able to do what we like best every pleasure.
                        </h3>
                        <div class="small_text_sub">Our Products</div>
                    </div>
                    <!--===============spacing==============-->
                    <div class="pd_bottom_30"></div>
                    <!--===============spacing==============-->
                </div>

            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="service_section grid_all three_column dark_color">
                <div class="row">
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-xs-12 p-2">
                        <div class="service_post style_three">

                            <div class="text_box">
                                <div class="text_box_inner">
                                    <img src="{{ asset('website/assets/images/icons/1.png')}}"
                                        class="img-fluid icon_img-one" alt="icon png">
                                    <h2 class="title_service"><a>Mutual Funds </a></h2>
                                    <p class="short_desc">Mutual funds are one of the most popular investment options in
                                        India.</p>
                                    <div class="theme_btn_all color_one">
                                        <a href="#" rel="nofollow" class="theme-btn four">Read More <i
                                                class="icon-right-arrow"></i></a>
                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-xs-12 p-2">
                        <div class="service_post style_three">

                            <div class="text_box">
                                <div class="text_box_inner">
                                    <img src="{{ asset('website/assets/images/icons/10.png')}}"
                                        class="img-fluid icon_img-one" alt="icon png">
                                    <h2 class="title_service"><a>Equity</a></h2>
                                    <p class="short_desc">Investing in equities can help you generate inflation-beating
                                        returns...</p>

                                    <div class="theme_btn_all color_one">
                                        <a href="#" rel="nofollow" class="theme-btn four">Read More <i
                                                class="icon-right-arrow"></i></a>
                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-xs-12 p-2">
                        <div class="service_post style_three">

                            <div class="text_box">
                                <div class="text_box_inner">
                                    <img src="{{ asset('website/assets/images/icons/3.png')}}"
                                        class="img-fluid icon_img-one" alt="icon png">
                                    <h2 class="title_service"><a>Fixed Income Instruments
                                        </a></h2>
                                    <p class="short_desc">Fixed income products like Bonds, NCDs...</p>
                                    <div class="theme_btn_all color_one">
                                        <a href="#" rel="nofollow" class="theme-btn four">Read More <i
                                                class="icon-right-arrow"></i></a>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-xs-12 p-2">
                        <div class="service_post style_three">

                            <div class="text_box">
                                <div class="text_box_inner">
                                    <img src="{{ asset('website/assets/images/icons/4.png')}}"
                                        class="img-fluid icon_img-one" alt="icon png">
                                    <h2 class="title_service"><a>Portfolio Management
                                        </a></h2>
                                    <p class="short_desc"> (PMS) is a customized solution for high net-worth individuals
                                        (HNIs)...</p>

                                    <div class="theme_btn_all color_one">
                                        <a href="#" rel="nofollow" class="theme-btn four">Read More <i
                                                class="icon-right-arrow"></i></a>
                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-xs-12 p-2">
                        <div class="service_post style_three">

                            <div class="text_box">
                                <div class="text_box_inner">
                                    <img src="{{ asset('website/assets/images/icons/5.png')}}"
                                        class="img-fluid icon_img-one" alt="icon png">
                                    <h2 class="title_service"><a>Insurance</a></h2>
                                    <p class="short_desc">Insurance is the main pillar of any financial planning. In
                                        case of any unforeseen... </p>

                                    <div class="theme_btn_all color_one">
                                        <a href="#" rel="nofollow" class="theme-btn four">Read More <i
                                                class="icon-right-arrow"></i></a>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-xs-12 p-2">
                        <div class="service_post style_three">

                            <div class="text_box">
                                <div class="text_box_inner">
                                    <img src="{{ asset('website/assets/images/icons/6.png')}}"
                                        class="img-fluid icon_img-one" alt="icon png">
                                    <h2 class="title_service"><a>Real Estate
                                        </a></h2>
                                    <p class="short_desc">We have partnered with a few reputed Real estate advisors to
                                        help our...</p>
                                    <div class="theme_btn_all color_one">
                                        <a href="#" rel="nofollow" class="theme-btn four">Read More <i
                                                class="icon-right-arrow"></i></a>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-xs-12 p-2">
                        <div class="service_post style_three">

                            <div class="text_box">
                                <div class="text_box_inner">
                                    <img src="{{ asset('website/assets/images/icons/7.png')}}"
                                        class="img-fluid icon_img-one" alt="icon png">
                                    <h2 class="title_service"><a>Unlisted Shares

                                        </a></h2>
                                    <p class="short_desc">An unlisted share is any security or financial instrument
                                        which has...</p>

                                    <div class="theme_btn_all color_one">
                                        <a href="#" rel="nofollow" class="theme-btn four">Read More
                                            <i class="icon-right-arrow"></i></a>

                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-xs-12 p-2">
                        <div class="service_post style_three">

                            <div class="text_box">
                                <div class="text_box_inner">
                                    <img src="{{ asset('website/assets/images/icons/8.png')}}"
                                        class="img-fluid icon_img-one" alt="icon png">
                                    <h2 class="title_service"><a>AIF

                                        </a></h2>
                                    <p class="short_desc">AIF is considered as any fund established or incorporated
                                        in
                                        India...</p>

                                    <div class="theme_btn_all color_one">
                                        <a href="#" rel="nofollow" class="theme-btn four">Read More
                                            <i class="icon-right-arrow"></i></a>

                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>

                    <div class="col-md-12 p-0 text-center">
                        <a href="{{route('web.mutual-funds')}}">
                            <div class="button-light button-3 text-center">Know More</div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--===============spacing==============-->
    <div class="pd_bottom_60"></div>
    <!--===============spacing==============-->

</section>
<!--service end-->




<!---testimonial--->
<section class="testimonial bg_light_1">
    <div class="row align-items-center">

        <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-12 ">
            <!--===============spacing==============-->
            <div class="pd_top_70"></div>
            <!--===============spacing==============-->
            <div class="testimonial_sec_wrapper pd_left_70">
                <div class="title_all_box style_one light_color">


                </div>
                <div class="testimonial_sec light_color style_one">

                    <div class="swiper-container" data-swiper='{
                           "loop": true,
                           "autoplay": {
                             "delay": 7000
                           },
                           "speed": 1000,
                           "centeredSlides": false,
                           "slidesPerView": 1,
                           "spaceBetween": 30,
                           "navigation": {
                             "nextEl": ".next-single-one",
                             "prevEl": ".prev-single-one"
                           },
                           "pagination": {
                             "el": ".number-pagination",
                             "type": "fraction"
                           },
                           "breakpoints": {
                             "1200": {
                               "slidesPerView": 1 
                             },
                             "1024": {
                               "slidesPerView": 1 
                             },
                             "768": {
                               "slidesPerView": 1 
                             },
                             "576": {
                               "slidesPerView": 1 
                             },
                             "0": {
                               "slidesPerView": 1 
                             }
                           }
                         }'>
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="testimonial_box">
                                    <div class="authour_details ">
                                        <div class="details">
                                            <h4>FINANCIAL SOLUTIONS </h2>
                                                <h1>Support </h1>
                                        </div>
                                    </div>
                                    <div class="comment">
                                        While running an early stage startup everything feels
                                        hard, that’s why it’s been so nice to have our accounting
                                        feel easy. We recommed Qetus.
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testimonial_box">

                                    <div class="authour_details ">

                                        <div class="details">
                                            <h4>FINANCIAL SOLUTIONS </h2>
                                                <h1>We save money </h1>
                                        </div>
                                    </div>
                                    <div class="comment">
                                        While running an early stage startup everything feels
                                        hard, that’s why it’s been so nice to have our accounting
                                        feel easy. We recommed Qetus.
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testimonial_box">

                                    <div class="authour_details ">

                                        <div class="details">
                                            <h4>FINANCIAL SOLUTIONS </h2>
                                                <h1>Advice </h1>
                                        </div>
                                    </div>
                                    <div class="comment">
                                        While running an early stage startup everything feels
                                        hard, that’s why it’s been so nice to have our accounting
                                        feel easy. We recommed Qetus.
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="arrows">
                            <div class="prev-single-one"></div>
                            <div class="next-single-one"></div>
                        </div>
                        <div class="num_pagination">
                            <div class="number-pagination">

                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!--===============spacing==============-->
            <div class="pd_bottom_70"></div>
            <!--===============spacing==============-->
        </div>
        <div class="col-xxl-7 col-xl-7 col-lg-7 col-md-12 pd_zero">
            <div class="image">
                <img src="https://opportunity.qodeinteractive.com/wp-content/uploads/2016/11/home-1-single-image-1.jpg')}}"
                    class="simp_img img-fluid" alt="image" />
            </div>
        </div>

    </div>
</section>
<!---testimonial-end--->


<section class="about-section  position-relative" style="background:#eceff1;">
    <div class="default-container">
        <!--===============spacing==============-->
        <div class="pd_top_50"></div>
        <!--===============spacing==============-->
        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-12">
                <div class="slider-partner">
                    <div class="slide-track">
                        <div class="slide">
                            <img src="{{ asset('website/assets/images/clients/Adita-Birla-Capital.jpg')}}"
                                style="max-width: 220px; max-height: 220px" alt="" title="Aditya-Birla-Capital" />
                        </div>

                        <div class="slide">
                            <img decoding="async" class="lgx-logo-img skip-lazy"
                                src="{{ asset('website/assets/images/clients/Aditya_Birla.jpg')}}"
                                style="max-width: 220px; max-height: 220px;" alt="" title="Aditya_Birla" />
                        </div>

                        <div class="slide">
                            <img decoding="async" class="lgx-logo-img skip-lazy"
                                src="{{ asset('website/assets/images/clients/Axis-mutual-fund.jpg')}}"
                                style="max-width: 220px; max-height: 220px;" alt="" title="Axis-mutual-fund" />
                        </div>

                        <div class="slide">
                            <img decoding="async" class="lgx-logo-img skip-lazy"
                                src="{{ asset('website/assets/images/clients/Canara-Robeco.jpg')}}"
                                style="max-width: 220px;max-height: 220px;" alt="" title="Canara-Robeco" />
                        </div>

                        <div class="slide">
                            <img decoding="async" class="lgx-logo-img skip-lazy"
                                src="{{ asset('website/assets/images/clients/DSP-Mutual.jpg')}}"
                                style="max-width: 220px;max-height: 220px;" alt="" title="DSP-Mutual" />
                        </div>

                        <div class="slide">
                            <img decoding="async" class="lgx-logo-img skip-lazy"
                                src="{{ asset('website/assets/images/clients/Franklin.jpg')}}"
                                style="max-width: 220px;max-height: 220px;" alt="" title="Franklin" />
                        </div>

                        <div class="slide">
                            <img decoding="async" class="lgx-logo-img skip-lazy"
                                src="{{ asset('website/assets/images/clients/HDFC-Life.jpg')}}"
                                style="max-width: 220px;max-height: 220px;" alt="" title="HDFC-Life" />
                        </div>

                        <div class="slide">
                            <img decoding="async" class="lgx-logo-img skip-lazy"
                                src="{{ asset('website/assets/images/clients/HDFC-Mutual.jpg')}}"
                                style="max-width: 220px;max-height: 220px;" alt="" title="HDFC-Mutual" />
                        </div>

                        <div class="slide">
                            <img decoding="async" class="lgx-logo-img skip-lazy"
                                src="{{ asset('website/assets/images/clients/ICICI_Lombard.jpg')}}"
                                style="max-width: 220px;max-height: 220px;" alt="" title="ICICI_Lombard-Insurance" />
                        </div>

                        <div class="slide">
                            <img decoding="async" class="lgx-logo-img skip-lazy"
                                src="{{ asset('website/assets/images/clients/ICICI-lombard.jpg')}}"
                                style="max-width: 220px;max-height: 220px;" alt="" title="ICICI-lombard" />
                        </div>

                        <div class="slide">
                            <img decoding="async" class="lgx-logo-img skip-lazy"
                                src="{{ asset('website/assets/images/clients/ICICI-prodential.jpg')}}"
                                style="max-width: 220px;max-height: 220px;" alt="" title="ICICI-prodential_Mutual" />
                        </div>

                        <div class="slide">
                            <img decoding="async" class="lgx-logo-img skip-lazy"
                                src="{{ asset('website/assets/images/clients/ICICI-prudential.jpg')}}"
                                style="max-width: 220px;max-height: 220px;" alt="" title="ICICI-prudential" />
                        </div>

                        <div class="slide">
                            <img decoding="async" class="lgx-logo-img skip-lazy"
                                src="{{ asset('website/assets/images/clients/IIFL-securities.jpg')}}"
                                style="max-width: 220px;max-height: 220px;" alt="" title="IIFL-securities" />
                        </div>
                    </div>
                </div>


                <div class="slider-partner">
                    <div class="slide-tracks">
                        <div class="slide">
                            <img decoding="async" class="lgx-logo-img skip-lazy"
                                src="{{ asset('website/assets/images/clients/IIFL-securities.jpg')}}"
                                style="max-width: 220px;max-height: 220px;" alt="" title="IIFL-securities" />
                        </div>

                        <div class="slide">
                            <img decoding="async" class="lgx-logo-img skip-lazy"
                                src="{{ asset('website/assets/images/clients/Kotak.jpg')}}"
                                style="max-width: 220px;max-height: 220px;" alt="" title="Kotak" />
                        </div>

                        <div class="slide">
                            <img decoding="async" class="lgx-logo-img skip-lazy"
                                src="{{ asset('website/assets/images/clients/Lombard-general.jpg')}}"
                                style="max-width: 220px;max-height: 220px;" alt="" title="Lombard-general" />
                        </div>

                        <div class="slide">
                            <img decoding="async" class="lgx-logo-img skip-lazy"
                                src="{{ asset('website/assets/images/clients/Mirae.jpg')}}"
                                style="max-width: 220px;max-height: 220px;" alt="" title="Mirae" />
                        </div>

                        <div class="slide">
                            <img decoding="async" class="lgx-logo-img skip-lazy"
                                src="{{ asset('website/assets/images/clients/Motilal-oswal.jpg')}}"
                                style="max-width: 220px;max-height: 220px;" alt="" title="Motilal-oswal" />
                        </div>

                        <div class="slide">
                            <img decoding="async" class="lgx-logo-img skip-lazy"
                                src="{{ asset('website/assets/images/clients/Nipon-india.jpg')}}"
                                style="max-width: 220px;max-height: 220px;" alt="" title="nippon" />
                        </div>

                        <div class="slide">
                            <img decoding="async" class="lgx-logo-img skip-lazy"
                                src="{{ asset('website/assets/images/clients/PPFAS.jpg')}}"
                                style="max-width: 220px;max-height: 220px;" alt="" title="PPFAS" />
                        </div>

                        <div class="slide">
                            <img decoding="async" class="lgx-logo-img skip-lazy"
                                src="{{ asset('website/assets/images/clients/SBI-Mutual.jpg')}}"
                                style="max-width: 220px;max-height: 220px;" alt="" title="SBI-Mutual" />
                        </div>

                        <div class="slide">
                            <img decoding="async" class="lgx-logo-img skip-lazy"
                                src="{{ asset('website/assets/images/clients/Sundaram.jpg')}}"
                                style="max-width: 220px;max-height: 220px;" alt="" title="Sundaram" />
                        </div>

                        <div class="slide">
                            <img decoding="async" class="lgx-logo-img skip-lazy"
                                src="{{ asset('website/assets/images/clients/TATA_AIG.jpg')}}"
                                style="max-width: 220px;max-height: 220px;" alt="" title="TATA_AIG" />
                        </div>

                        <div class="slide">
                            <img decoding="async" class="lgx-logo-img skip-lazy"
                                src="{{ asset('website/assets/images/clients/TATA-AIA.jpg')}}"
                                style="max-width: 220px;max-height: 220px;" alt="" title="TATA-AIA" />
                        </div>

                        <div class="slide">
                            <img decoding="async" class="lgx-logo-img skip-lazy"
                                src="{{ asset('website/assets/images/clients/TATA-Mutual-Funds.jpg')}}"
                                style="max-width: 220px;max-height: 220px;" alt="" title="Company" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 partner" style="display:flex;align-items: center;">
                <div class="title_all_box style_one  dark_color">
                    <div class="title_sections left">
                        <div class="title"> Our Partners</div>

                    </div>
                    <div class="col-md-12 p-0">
                        <a href="{{route('web.partners')}}">
                            <div class="button button-2 ">Know More</div>
                        </a>
                    </div>

                </div>

            </div>
        </div>
    </div>
    <!--===============spacing==============-->
    <div class="pd_bottom_50"></div>
    <!--===============spacing==============-->
</section>


<section class="contact-section bg_op_1"
    style="background-image:url({{ asset('website/assets/images/home-11-footer-bg.jpg')}});">
    <!--===============spacing==============-->
    <div class="pd_top_40"></div>
    <!--===============spacing==============-->
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-10 col-lg-9 col-md-12 col-sm-12 col-xs-12 mb-sm-5 mb-md-5 mb-lg-0 mb-xl-0">
                <div class="title_all_box style_one light_color">
                    <div class="title_sections">
                        <div class="title">Connect for your wealth management and investment solutions today!
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-xl-2 col-lg-3 col-md-12 col-sm-12 col-xs-12">
                <div class="col-md-12 text-center">
                    <div class="button button-2 text-center">Get In Touch</div>
                </div>

            </div>
        </div>
    </div>
    <!--===============spacing==============-->
    <div class="pd_bottom_30"></div>
    <!--===============spacing==============-->
</section>

</div>
<!--===============PAGE CONTENT END==============-->

</div>
@endsection