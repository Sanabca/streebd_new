<!DOCTYPE html>
<html lang="en-US">


<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <title>Finberg &#8211; Your Wealth Management and Investment Advisory</title>
    <!-- Fav Icon -->
    <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
    <!-- Fav Icon -->
    <!-- Google Fonts -->
    <meta http-equiv="content-language" content="en">
    @yield('meta')
    <meta name="audience" content="Everyone">
    <meta name="robots" content="index, follow">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lexend:wght@100;200;300;400;500;600;700;800&display=swap" rel="stylesheet">
    <!-- Style -->
    <link rel='stylesheet' href="{{ asset('website/assets/css/bootstrap.min.css') }}" type='text/css' media='all' />
    <link rel='stylesheet' href="{{ asset('website/assets/css/owl.css') }}" type='text/css' media='all' />
    <link rel='stylesheet' href="{{ asset('website/assets/css/swiper.min.css') }}" type='text/css' media='all' />
    <link rel='stylesheet' href="{{ asset('website/assets/css/jquery.fancybox.min.css') }}" type='text/css'
        media='all' />
    <link rel='stylesheet' href="{{ asset('website/assets/css/icomoon.css') }}" type='text/css' media='all' />
    <link rel='stylesheet' href="{{ asset('website/assets/css/flexslider.css') }}" type='text/css' media='all' />
    <link rel='stylesheet' href="{{ asset('website/assets/css/font-awesome.min.css') }}" type='text/css' media='all' />
    <link rel='stylesheet' href="{{ asset('website/assets/css/style.css') }}" type='text/css' media='all' />
    <link rel='stylesheet' href="{{ asset('website/assets/css/scss/elements/theme-css.css') }}" type='text/css'>
    <link rel='stylesheet' href="{{ asset('website/assets/css/drag.css') }}" type='text/css' media='all' />
    <link rel='stylesheet' id="creote-color-switcher-css" href="{{ asset('website/assets/css/scss/elements/color-switcher/color.css') }}" type='text/css' media='all' />
    <!-- Style-->
    <!----woocommerce---->
    <link rel='stylesheet' href="{{ asset('website/assets/css/woocommerce-layout.css') }}" type='text/css'
        media='all' />
    <link rel='stylesheet' href="{{ asset('website/assets/css/woocommerce.css') }}" type='text/css' media='all' />
    <!----woocommerce---->
</head>

<body class="theme-creote woocommerce-checkout woocommerce">
    <div id="page" class="page_wapper hfeed site">

        <!---============== wrapper_full =================-->
        <div id="wrapper_full" class="content_all_warpper">



            <!----header----->
            <div class="header_area" id="header_contents">
                <header class="header header_default style_one get_sticky_header">
                    <div class="auto-container">
                        <div class="row align-items-center">
                            <div class="col-lg-2 col-md-9 col-sm-9 col-xs-9 logo_column">
                                <div class="header_logo_box">
                                    <a href="{{route('web.home')}}" class="logo navbar-brand">
                                        <img src="{{ asset('website/assets/images/finberg_logo.png')}}"
                                            alt="Creote Elementor" class="logo_default">
                                        <img src="{{ asset('website/assets/images/finberg_logo.png')}}"
                                            alt="Creote Elementor" class="logo__sticky">
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-10 col-md-3 col-sm-3 col-xs-3 menu_column">
                                <div class="navbar_togglers hamburger_menu">
                                    <span class="line"></span>
                                    <span class="line"></span>
                                    <span class="line"></span>
                                </div>
                                <div class="header_content_collapse">
                                    <div class="header_menu_box">
                                        <div class="navigation_menu">
                                            <ul id="myNavbar" class="navbar_nav">
                                                <li class="menu-item  nav-item">
                                                    <a href="{{route('web.home')}}"
                                                        class="nav-link"><span>Home</span></a>
                                                </li>
                                                <li class="menu-item  nav-item">
                                                    <a href="{{route('web.about-us')}}" class="nav-link"><span>About
                                                            Us</span></a>
                                                </li>
                                                <li class="menu-item  nav-item">
                                                    <a href="{{route('web.service')}}" class="nav-link"><span>Services</span></a>
                                                </li>

                                                <!-- <li class="menu-item menu-item-has-children dropdown nav-item">
                                                    <a href="{{route('web.service')}}" class="dropdown-toggle nav-link">
                                                        <span>Services</span>
                                                    </a>
                                                    <ul class="dropdown-menu">
                                                        <li class="menu-item nav-item">
                                                            <a href="#" class="dropdown-item nav-link">
                                                                <span>Dematerialization
                                                            of Physical Shares</span>
                                                            </a>
                                                        </li>
                                                        <li class="menu-item nav-item">
                                                            <a href="#" class="dropdown-item nav-link">
                                                                <span>Estate
                                                                    Planning</span>
                                                            </a>
                                                        </li>
                                                        <li class="menu-item  nav-item">
                                                            <a href="blog-modern.html" class="dropdown-item nav-link">
                                                                <span>Tax Planning
                                                                    and Filing</span>
                                                            </a>
                                                        </li>

                                                    </ul>
                                                </li> -->



                                                <!-- <li class="menu-item  nav-item">
                                                    <a href="{{route('web.blog')}}"
                                                        class="nav-link"><span>Blog</span></a>
                                                </li> -->

                                                <li class="menu-item  nav-item">
                                                    <a href="{{route('web.bloogs')}}"
                                                        class="nav-link"><span>Blog</span></a>
                                                </li>
                                                <li class="menu-item  nav-item">
                                                    <a href="{{route('web.partners')}}"
                                                        class="nav-link"><span>Our Partners</span></a>
                                                </li>

                                                <li class="menu-item  nav-item">
                                                    <a href="{{route('web.contact-us')}}" class="nav-link"><span>Contact
                                                            Us</span></a>
                                                </li>


                                            </ul>
                                        </div>
                                    </div>
                                    <div class="header_right_content">
                                        <ul>

                                            <li class="header-button">
                                            <a href="https://clients.finberg.in/login" target="_blank"><div class="button button-2 login-btn">Login</div></a>

                                                
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </header>
            </div>
            <!----header end----->