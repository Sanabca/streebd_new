@extends('website.layouts.main')
@section('content')

<!--content-->
<section class="content-section" style="background-image:url({{ asset('website/assets/images/service/servicesbg.png')}}); background-size: cover;"> 
    <div class="container">
        <!--===============spacing==============-->
        <div class="pd_top_80"></div>
        <!--===============spacing==============-->
        <div class="row align-items-center">
            <div class="col-xl-12 col-lg-12 col-md-12 mb-sm-5 mb-md-5 mb-lg-5 mb-xl-0">
                <div class="title_all_box style_one dark_color text-center">
                    <div class=>
                        <div class="description_box">
                            <h6 class="text-light service-text" >
                                We at Finberg believe
                                that every client has
                                a different investment requirement based on
                                his risk profile and financial goals. To help clients build up a customized portfolio we
                                have a plethora of investment products and services to help our clients in achieving
                                their financial goals comfortably.</h6>
                        </div>
                    </div>
                </div>
                <!--===============spacing==============-->
                <div class="pd_bottom_15"></div>
                <!--===============spacing==============-->



            </div>

        </div>
    </div>
    <!--===============spacing==============-->
    <div class="pd_bottom_80"></div>
    <!--===============spacing==============-->
</section>
<!--content end-->

<!---tab---->
<section class="tab-section bg_light_1">
    <!--===============spacing==============-->
    <div class="pd_top_80"></div>
    <!--===============spacing==============-->
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="title_all_box style_two text-center dark_color">
                    <div class="title_sections two">
                        <h1 style="font-size:44px">Our Products</h1>
                        <p>Our power of choice is untrammelled and when nothing prevents <br> being able to do
                            what
                            we like best every pleasure.</p>
                    </div>
                </div>
            </div>
            <!--===============spacing==============-->
            <div class="mr_bottom_10"></div>
            <!--===============spacing==============-->
        </div>
        <div class="row">
            <div class="tabs_all_box  tabs_all_box_start type_one">
                <div class="tab_over_all_box">
                    <div class="tabs_header clearfix">
                        <ul class="showcase_tabs_btns nav-pills nav   clearfix">
                            <li class="nav-item">
                                <a class="s_tab_btn nav-link active" data-tab="#tabtabone">01. Mutual Funds</a>
                            </li>
                            <li class="nav-item">
                                <a class="s_tab_btn nav-link" data-tab="#tabtabtwo">02. Equity</a>
                            </li>
                            <li class="nav-item">
                                <a class="s_tab_btn nav-link" data-tab="#tabtabthree">03. Fixed Income Instruments</a>
                            </li>
                            <li class="nav-item">
                                <a class="s_tab_btn nav-link" data-tab="#tabtabtfour">04. Portfolio Management
                                    Services</a>
                            </li>
                            <li class="nav-item">
                                <a class="s_tab_btn nav-link" data-tab="#tabtabfive">05. Insurance</a>
                            </li>
                            <li class="nav-item">
                                <a class="s_tab_btn nav-link" data-tab="#tabtabsix">06. Real Estate</a>
                            </li>
                            <li class="nav-item">
                                <a class="s_tab_btn nav-link" data-tab="#tabtabseven">07. Unlisted Shares</a>
                            </li>
                            <li class="nav-item">
                                <a class="s_tab_btn nav-link" data-tab="#tabtabeight">08. AIF (Alternative Investment
                                    Options)</a>
                            </li>
                            <li class="nav-item">
                                <a class="s_tab_btn nav-link" data-tab="#tabtabnine">09.Art Planning & Sculpture</a>
                            </li>
                        </ul>

                    </div>
                    <div class="s_tab_wrapper">
                        <div class="s_tabs_content">
                            <div class="s_tab fade active-tab show" id="tabtabone">
                                <div class="tab_content one ">
                                    <div class="content_image">
                                        <img src="{{ asset('website/assets/images/icons/1.png')}}"
                                            class="img-fluid icon_img" alt="icon png">
                                        <!--===============spacing==============-->
                                        <div class="pd_bottom_20"></div>
                                        <!--===============spacing==============-->
                                        <h2>Mutual Funds</h2>
                                        <p>Mutual funds are one of the most popular investment options in India. This is
                                            due to its advantages like professional management, low risk,
                                            diversification, liquidity, economies of scale, etc. We are AMFI registered
                                            Mutual fund distributors who have an empanelment with all the reputed Asset
                                            Management Co’s offering Mutual fund services. Depending on our client
                                            requirements and through our extensive research, we help our clients in
                                            selecting the best mutual funds across different categories.</p>

                                        <a href="{{route('web.mutual-funds')}}" target="_blank">
                                            <div class="button button-2"> More</div>
                                        </a>
                                        </a>

                                    </div>


                                </div>
                            </div>
                            <div class="s_tab fade" id="tabtabtwo">
                                <div class="tab_content one"
                                    style="background-image:url(assets/images/blog/blog-image-8.jpg)">

                                    <!--===============spacing==============-->
                                    <div class="pd_bottom_20"></div>
                                    <!--===============spacing==============-->
                                    <div class="content_image">
                                        <img src="{{ asset('website/assets/images/icons/10.png')}}"
                                            class="img-fluid icon_img" alt="icon png">
                                        <h2>Equity</h2>
                                        <p>Investing in equities can help you generate inflation-beating returns in the
                                            long run. Investing in equities can appreciate your principal capital by a
                                            significant margin. If you invest in an equity share of a fundamentally
                                            sound company, its price, in all likelihood, will appreciate with time. We
                                            help our clients to invest in direct equity and equity-related investments.
                                            Having a sub-broker ship license from SEBI; we also assist our clients with
                                            the opening of Demat accounts.</p>
                                        <br>


                                        <a href="{{route('web.equity')}}" target="_blank" rel="nofollow">
                                            <div class="button button-2"> More</div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="s_tab fade" id="tabtabthree">
                                <div class="tab_content one"
                                    style="background-image:url(assets/images/about/about-4.jpg)">
                                    <div class="content_image">
                                        <img src="{{ asset('website/assets/images/icons/3.png')}}"
                                            class="img-fluid icon_img" alt="icon png">
                                        <!--===============spacing==============-->
                                        <div class="pd_bottom_20"></div>
                                        <!--===============spacing==============-->
                                        <h2>Fixed Income Instruments</h2>
                                        <p>Fixed income products like Bonds, NCDs, corporate deposits, structure
                                            products, etc. help the client in generating a steady income and also earn
                                            the appreciation in some cases. Fixed Income instrument needs to be
                                            carefully picked up keeping in mind a lot of factors like their ratings,
                                            balance sheet, duration, and a lot of other factors. We at FinBerg hold
                                            expertise in managing the Fixed Income Portfolios for our clients.</p>

                                        <a href="#" target="_blank">
                                            <div class="button button-2"> More</div>
                                        </a>


                                    </div>
                                </div>
                            </div>
                            <div class="s_tab fade" id="tabtabtfour">
                                <div class="tab_content one"
                                    style="background-image:url(assets/images/about/about-2.jpg)">
                                    <div class="content_image">
                                        <img src="{{ asset('website/assets/images/icons/4.png')}}"
                                            class="img-fluid icon_img" alt="icon png">
                                        <!--===============spacing==============-->
                                        <div class="pd_bottom_20"></div>
                                        <!--===============spacing==============-->
                                        <h2>Portfolio Management Services</h2>
                                        <p>Portfolio management services (PMS) is a customized solution for high
                                            net-worth individuals (HNIs), it offers greater flexibility with an
                                            investor's money and higher returns too. We at FinBerg through our extensive
                                            research help in selecting the best PMS plan depending upon the requirement
                                            of our client.</p>
                                            <a href="#" target="_blank">
                                            <div class="button button-2"> More</div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="s_tab fade" id="tabtabfive">
                                <div class="tab_content one"
                                    style="background-image:url(assets/images/about/about-3.jpg)">
                                    <div class="content_image">
                                        <img src="{{ asset('website/assets/images/icons/5.png')}}"
                                            class="img-fluid icon_img" alt="icon png">
                                        <!--===============spacing==============-->
                                        <div class="pd_bottom_20"></div>
                                        <!--===============spacing==============-->
                                        <h2>Insurance</h2>
                                        <p>Insurance is the main pillar of any financial planning. In case of any
                                            unforeseen circumstances insurance takes care of the financial goals.
                                            Choosing the right insurance is always important as it helps in getting the
                                            claims smoothly.
                                            <br>Insurance is broadly divided into 2 categories
                                            <br>a. Life Insurance includes:
                                            <br>i. Term Insurance
                                            <br>ii. ULIP’s
                                            <br>iii. Traditional Plans
                                            <br>b. General Insurance which includes:
                                            <br>i. Health Insurance
                                            <br>ii. Car Insurance
                                            <br>iii. Travel Insurance
                                            <br>iv. Home insurance etc.

                                            <br>We have a tie-up of all the reputed insurance companies offering
                                            insurance policies. This helps us in picking up the most suitable plan for
                                            our clients.
                                        </p>
                                        <a href="#" target="_blank">
                                            <div class="button button-2"> More</div>
                                        </a>

                                    </div>
                                </div>
                            </div>
                            <div class="s_tab fade" id="tabtabsix">
                                <div class="tab_content one"
                                    style="background-image:url(assets/images/about/about-3.jpg)">
                                    <div class="content_image">
                                        <img src="{{ asset('website/assets/images/icons/6.png')}}"
                                            class="img-fluid icon_img" alt="icon png">
                                        <!--===============spacing==============-->
                                        <div class="pd_bottom_20"></div>
                                        <!--===============spacing==============-->
                                        <h2>Real Estate</h2>
                                        <p>We have partnered with a few reputed Real estate advisors to help our clients
                                            in selecting the best properties.
                                            <br>We advise across:
                                            <br>a. Commercial Properties
                                            <br>b. Residential Properties
                                            <br>c. Farmlands
                                            <br>d. Residential plots
                                            <br>e. International Residential Projects and much more
                                        </p>
                                        <a href="#" target="_blank">
                                            <div class="button button-2"> More</div>
                                        </a>

                                    </div>
                                </div>
                            </div>
                            <div class="s_tab fade" id="tabtabseven">
                                <div class="tab_content one"
                                    style="background-image:url(assets/images/about/about-3.jpg)">
                                    <div class="content_image">
                                        <img src="{{ asset('website/assets/images/icons/7.png')}}"
                                            class="img-fluid icon_img" alt="icon png">
                                        <!--===============spacing==============-->
                                        <div class="pd_bottom_20"></div>
                                        <!--===============spacing==============-->
                                        <h2>Unlisted Shares</h2>
                                        <p>An unlisted share is any security or financial instrument which has not been
                                            listed on exchanges. These are instruments available for trade on
                                            over-the-counter markets (bought and sold offline). We help our clients in
                                            selecting unlisted stocks of those companies which are available at a good
                                            valuation. Buying these unlisted shares also helps the investors in avoiding
                                            the uncertainty of not getting the subscription if the company/s chooses to
                                            come for an IPO.
                                        </p>
                                        <a href="#" target="_blank">
                                            <div class="button button-2"> More</div>
                                        </a>

                                    </div>
                                </div>
                            </div>
                            <div class="s_tab fade" id="tabtabeight">
                                <div class="tab_content one"
                                    style="background-image:url(assets/images/about/about-3.jpg)">
                                    <div class="content_image">
                                        <img src="{{ asset('website/assets/images/icons/8.png')}}"
                                            class="img-fluid icon_img" alt="icon png">
                                        <!--===============spacing==============-->
                                        <div class="pd_bottom_20"></div>
                                        <!--===============spacing==============-->
                                        <h2>AIF (Alternative Investment Options)</h2>
                                        <p>AIF is considered as any fund established or incorporated in India which is a
                                            privately pooled investment vehicle that collects funds from sophisticated
                                            investors (whether Indian or foreign), for investing it in accordance with a
                                            defined investment policy for the benefit of its investors. With our
                                            detailed research & analysis we pick the best suited AIF’s for our client
                                            from all the available options in the market.
                                        </p>
                                        <a href="#" target="_blank">
                                            <div class="button button-2"> More</div>
                                        </a>

                                    </div>
                                </div>
                            </div>
                            <div class="s_tab fade" id="tabtabnine">
                                <div class="tab_content one"
                                    style="background-image:url(assets/images/about/about-3.jpg)">
                                    <div class="content_image">
                                        <img src="{{ asset('website/assets/images/icons/9.png')}}"
                                            class="img-fluid icon_img" alt="icon png">
                                        <!--===============spacing==============-->
                                        <div class="pd_bottom_20"></div>
                                        <!--===============spacing==============-->
                                        <h2>Art Planning & Sculpture</h2>
                                        <p>Art as an investment is not much heard in India but in developed Economies it
                                            is one of the popular asset classes which a lot of HNI’s consider. These
                                            could be in form of renowned paintings, artefacts, sculptures etc. We help
                                            our HNI clients to invest in their choice art planning & sculpture only
                                            after having a detailed research done on it.
                                        </p>

                                        <a href="#" target="_blank">
                                            <div class="button button-2"> More</div>
                                        </a>

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
    <div class="pd_bottom_50"></div>
    <!--===============spacing==============-->
</section>
<!---tab-end--->
<!----service---->
<section class="services">
    <div class="row">
        <!--===============spacing==============-->
        <div class="pd_top_45"></div>
        <!--===============spacing==============-->
        <div class="col-lg-12">
            <div class="title_all_box style_one text-center dark_color">
                <div class="title_sections">
                    <div class="before_title">Services</div>
                    <h2>Our Services</h2>
                    <p>We work with your company to identify position requirements, implement
                        recruitment programs, and <br> initiate employee assessments that maximize
                        recruitment efforts</p>
                </div>
            </div>
        </div>
    </div>
    <section class="content-section bg_dark_1 container p-0 bg-services">
        <div class="row">
            <div class="col-xxl-1 hidden-xl hidden-lg col-lg-1"></div>
            <div class="col-xxl-5 col-xl-8 col-lg-12">
                <div class="video-wrapper">
                    <!--===============spacing==============-->
                    <div class="pd_top_80"></div>
                    <!--===============spacing==============-->
                    <div class="title_all_box style_one light_color">
                        <div class="title_sections">
                            <h2 class="title mb-3">Dematerialization of Physical Shares</h2>
                            <p class="text-white">This is the process where there is a conversion of physical shares
                                into
                                electronic form and
                                further gets transferred into the Demat accounts. To trade for shares, equity,
                                debentures,
                                derivatives, ETFs, IPOs, an investor needs to have a Demat account. We at FinBerg make
                                sure
                                that we execute the entire process effortlessly satisfying the needs of our clients and
                                delivering them the best experience of the trading world.</p>
                        </div>
                    </div>

                    <!--===============spacing==============-->
                    <div class="pd_bottom_30"></div>
                    <!--===============spacing==============-->


                </div>
            </div>
            <div class="col-xxl-1 hidden-xl hidden-lg"></div>
            <div class="col-xxl-5 col-xl-4 col-lg-12 bg_op_1 text-center"
                style="background-image:url({{ asset('website/assets/images/service/service-image-6.jpg')}})">

            </div>
        </div>
    </section>

    <section class="content-section container p-0 bg-services">
        <div class="row">
            <div class="col-xxl-5 col-xl-4 col-lg-12 bg_op_1 text-center"
                style="background-image:url({{ asset('website/assets/images/service/service-image-5.jpg')}})">

            </div>
            <div class="col-xxl-1 hidden-xl hidden-lg col-lg-1"></div>
            <div class="col-xxl-5 col-xl-8 col-lg-12">
                <div class="video-wrapper">
                    <!--===============spacing==============-->
                    <div class="pd_top_80"></div>
                    <!--===============spacing==============-->
                    <div class="title_all_box style_one light_color">
                        <div class="title_sections">
                            <h2 class="title mb-3 text-dark">Estate Planning</h2>
                            <p class="text-dark">We deliver an in-depth consultancy to our prospective clients in Estate
                                Planning as well. Here we assist our clients with the transfer of their estate after
                                their
                                death or if they are incapacitated and unable to handle things on their own. Here we
                                assist
                                our clients with the transfer of their estate after their death or if they are
                                incapacitated
                                and unable to handle things on their own. The transfer is either done using a will,
                                trust,
                                insurance policies, and/or other devices. Estate Planning has been around for many
                                years,
                                but it’s becoming increasingly more and more common.</p>
                        </div>
                    </div>

                    <!--===============spacing==============-->
                    <div class="pd_bottom_30"></div>
                    <!--===============spacing==============-->


                </div>
            </div>
            <div class="col-xxl-1 hidden-xl hidden-lg"></div>

        </div>
    </section>


    <section class="content-section bg_dark_1 container p-0 bg-services">
        <div class="row">
            <div class="col-xxl-1 hidden-xl hidden-lg col-lg-1"></div>
            <div class="col-xxl-5 col-xl-8 col-lg-12">
                <div class="video-wrapper">
                    <!--===============spacing==============-->
                    <div class="pd_top_80"></div>
                    <!--===============spacing==============-->
                    <div class="title_all_box style_one light_color">
                        <div class="title_sections">
                            <h2 class="title mb-3">Tax Planning and Filing</h2>
                            <p class="text-white">Both the business person and individuals are liable towards
                                compliances of
                                the income tax which requires in-depth knowledge. The process has also turned towards
                                the
                                digital platforms where the IT returns are filed online which again requires an expert
                                helps
                                who is technically sound with the updates. We have associated with CA firms that assist
                                our
                                client with tax planning, and present it to the authorities for the tax filing process
                                and
                                henceforth, fulfilling all the tax liabilities of the client.</p>
                        </div>
                    </div>

                    <!--===============spacing==============-->
                    <div class="pd_bottom_30"></div>
                    <!--===============spacing==============-->


                </div>
            </div>
            <div class="col-xxl-1 hidden-xl hidden-lg"></div>
            <div class="col-xxl-5 col-xl-4 col-lg-12 bg_op_1 text-center"
                style="background-image:url({{ asset('website/assets/images/service/service-image-4.jpg')}})">

            </div>
        </div>
    </section>
    <!--===============spacing==============-->
    <div class="pd_bottom_45"></div>
    <!--===============spacing==============-->
</section>



<!---about section end--->
<section class="project-section bg_dark_3">
    <!--===============spacing==============-->
    <div class="pd_top_85"></div>
    <!--===============spacing==============-->
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8 col-md-8 col-sm-12 mb-sm-5 mb-md-0 mb-lg-0 mb-xl-0">
                <div class="title_all_box style_three light_color">
                    <div class="title_sections three left">
                        <h2>How We Work at FinBerg</h2>
                        <p>For us, at FinBerg our clients are the most valuable assets. To assist them with the best
                            investment solutions, we have listed a pre-defined process.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4">
                {{-- <div class="theme_btn_all color_one text-md-end">
                    <a href="#" target="_blank" rel="nofollow" class="theme-btn five">View More <i
                            class="icon-right-arrow"></i></a>
                </div> --}}
            </div>
            <!--===============spacing==============-->
            <div class="pd_bottom_35"></div>
            <!--===============spacing==============-->
        </div>
    </div>
    <div class="container-fluid pd_zero">
        <div class="row">
            <div class="col-lg-12">
                <div class="project_caro_section  style_two light_color">
                    <div class="swiper-container" data-swiper='{
                                 "autoplay": {
                                   "delay": 1000
                                 },
                                 "freeMode": true,
                                 "loop": true,
                                 "speed": 900,
                                 "centeredSlides": true,
                                 "slidesPerView": 0,
                                 "spaceBetween": 10,
                                 "pagination": {
                                   "el": ".swiper-pagination",
                                   "clickable": true
                                 },
                                  
                                 "breakpoints": {
                                    "1200": {
                                       "slidesPerView": 4
                                       
                                    },
                                    "1024": {
                                     "slidesPerView": 3 
                                    },
                                   "768": {
                                     "slidesPerView": 2 
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
                                <div class="project_post style_seven">
                                    <div class="image_box">
                                        <img src="{{ asset('website/assets/images/projects/project-3-img.jpg')}}"
                                            class="img-fluid" alt="img">
                                    </div>
                                    <div class="content_box ">
                                        <h2 class="title_pro"><a href="#" rel="bookmark">Client Acquisition</a></h2>


                                    </div>
                                    <div class="overlay ">
                                        <div class="text ">

                                            <p class="short_desc">We at FinBerg acquire our prospective clients by
                                                building a relationship of trust by sharing transparent information
                                                regarding all the products & services we offer. When we meet our
                                                prospects we educate them with the right Information about Investment
                                                Products.</p>

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="project_post style_seven">
                                    <div class="image_box">
                                        <img src="{{ asset('website/assets/images/projects/project-2-img.jpg')}}"
                                            class="img-fluid" alt="img">
                                    </div>
                                    <div class="content_box ">
                                        <h2 class="title_pro"><a href="#" rel="bookmark">Financial Goal Analysis</a>
                                        </h2>


                                    </div>
                                    <div class="overlay ">
                                        <div class="text ">

                                            <p class="short_desc">Once our prospect client gets on board at FinBerg, we
                                                then comprehend their expectations carefully. We then analyze their
                                                expectations and help them set a fair financial goal which includes
                                                short, intermediate, long term goals. This is the interactive session
                                                where we have the best planning experience with our clients.</p>

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="project_post style_seven">
                                    <div class="image_box">
                                        <img src="{{ asset('website/assets/images/projects/project-6-img.jpg')}}"
                                            class="img-fluid" alt="img">
                                    </div>
                                    <div class="content_box ">
                                        <h2 class="title_pro"><a href="#" rel="bookmark">Client Risk Profiling</a>
                                        </h2>


                                    </div>
                                    <div class="overlay ">
                                        <div class="text ">

                                            <p class="short_desc">During this session, we evaluate client’s willingness
                                                and ability to take risks. This evaluation plays important role by which
                                                we further determine proper investment asset allocation for our client’s
                                                portfolio. Our ability to access the correct risk profiling for our
                                                clients helps us in avoiding any unnecessary risk.</p>

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="project_post style_seven">
                                    <div class="image_box">
                                        <img src="{{ asset('website/assets/images/projects/project-5-img.jpg')}}"
                                            class="img-fluid" alt="img">
                                    </div>
                                    <div class="content_box ">
                                        <h2 class="title_pro"><a href="#" rel="bookmark">Preparing Suitable Investment
                                                Plan</a>
                                        </h2>


                                    </div>
                                    <div class="overlay ">
                                        <div class="text ">

                                            <p class="short_desc">Here, we create an investment framework for our
                                                clients to guide them for future investment decisions. While creating
                                                the framework we consider their time horizon (the time until when the
                                                client wants to hold their investment), their risk profile etc.</p>

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="project_post style_seven">
                                    <div class="image_box">
                                        <img src="{{ asset('website/assets/images/projects/project-4-img.jpg')}}"
                                            class="img-fluid" alt="img">
                                    </div>
                                    <div class="content_box ">
                                        <h2 class="title_pro"><a href="#" rel="bookmark">Executing Investment Plan
                                                Plan</a>
                                        </h2>


                                    </div>
                                    <div class="overlay ">
                                        <div class="text ">

                                            <p class="short_desc">Once the client agrees on the investment plan, we help
                                                them in executing their investment through online/offline methods.</p>

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="project_post style_seven">
                                    <div class="image_box">
                                        <img src="{{ asset('website/assets/images/projects/project-2-img.jpg')}}"
                                            class="img-fluid" alt="img">
                                    </div>
                                    <div class="content_box ">
                                        <h2 class="title_pro"><a href="#" rel="bookmark">Reviewing & Re-balancing
                                                Portfolio</a>
                                        </h2>


                                    </div>
                                    <div class="overlay ">
                                        <div class="text ">

                                            <p class="short_desc">As <strong>wealth management company,</strong> this
                                                turns out to be ongoing process for us until client successfully achieve
                                                their financial goals. This is phase where we constantly track progress,
                                                review regular intervals, do necessary adjustments wherever required to
                                                make sure our client’s investments stay on track.</p>

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="project_post style_seven">
                                    <div class="image_box">
                                        <img src="{{ asset('website/assets/images/projects/project-3-img.jpg')}}"
                                            class="img-fluid" alt="img">
                                    </div>
                                    <div class="content_box ">
                                        <h2 class="title_pro"><a href="#" rel="bookmark">Client Acquisition</a></h2>


                                    </div>
                                    <div class="overlay ">
                                        <div class="text ">

                                            <p class="short_desc">We at FinBerg acquire our prospective clients by
                                                building a relationship of trust by sharing transparent information
                                                regarding all the products & services we offer. When we meet our
                                                prospects we educate them with the right Information about Investment
                                                Products.</p>

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="project_post style_seven">
                                    <div class="image_box">
                                        <img src="{{ asset('website/assets/images/projects/project-2-img.jpg')}}"
                                            class="img-fluid" alt="img">
                                    </div>
                                    <div class="content_box ">
                                        <h2 class="title_pro"><a href="#" rel="bookmark">Financial Goal Analysis</a>
                                        </h2>


                                    </div>
                                    <div class="overlay ">
                                        <div class="text ">

                                            <p class="short_desc">Once our prospect client gets on board at FinBerg, we
                                                then comprehend their expectations carefully. We then analyze their
                                                expectations and help them set a fair financial goal which includes
                                                short, intermediate, long term goals. This is the interactive session
                                                where we have the best planning experience with our clients.</p>

                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>



</section>


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
                    <a href="tel:9096178196">
                        <div class="button button-2 text-center">Get In Touch</div>
                    </a>
                </div>

            </div>
        </div>
    </div>
    <!--===============spacing==============-->
    <div class="pd_bottom_30"></div>
    <!--===============spacing==============-->
</section>

@endsection