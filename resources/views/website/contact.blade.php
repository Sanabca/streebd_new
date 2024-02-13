@extends('website.layouts.main')
@section('content')
<!----header end----->
<div class="page_header_default style_one "
    style="background-image:url({{ asset('website/assets/images/contact/contact-bg.jpg')}}); background-size: cover;"> >
    <div class="parallax_cover">
        <!-- <div class="simpleParallax"><img src="{{ asset('website/assets/images/page-header-default.jpg')}}"
                alt="bg_image" class="cover-parallax">
        </div> -->
    </div>
    <div class="page_header_content">
        <div class="auto-container">
            <div class="row">
                <div class="col-md-12">
                    <div class="banner_title_inner">
                        <div class="title_page">
                            Contact us
                        </div>
                    </div>
                </div>
                {{-- <div class="col-lg-12">
                    <div class="breadcrumbs creote">
                        <ul class="breadcrumb m-auto">
                            <li><a href="index.html">Home</a></li>
                            <li class="active">Contact</li>
                        </ul>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>
</div>
<!----header----->
<section class="contact-section">
    <!--===============spacing==============-->
    <div class="pd_top_40"></div>
    <!--===============spacing==============-->
    <div class="container">
        <div class="row ">
            <div class="col-xl-6 col-lg-6 mb-5 mb-lg-5 mb-xl-0">
                <div class="contact_form_box_all type_one">
                    <div class="contact_form_box_inner">
                        <div class="contact_form_shortcode">
                            <form id="contact-form" method="post" action="contact.php" role="form">
                                <div class="messages"></div>
                                <div class="controls">
                                    <h5>Elevate Your Wealth, Secure Your Tomorrow. Begin Your Journey to Financial
                                        Excellence.</h5>
                                    <div class="row">
                                        <div class="col-sm-6 p-0">
                                            <div class="form-group">
                                                {{-- <label> Your Name<br /></label> --}}
                                                <input type="text" name="name" placeholder="First Name *"
                                                    required="required" data-error="Enter Your Name">
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 p-0">
                                            <div class="form-group">
                                                {{-- <label> Your Name<br /></label> --}}
                                                <input type="text" name="name" placeholder="Last Name *"
                                                    required="required" data-error="Enter Your Name">
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>
                                        <div class="col-sm-12 p-0">
                                            <div class="form-group">
                                                {{-- <label> Your Email<br /></label> --}}
                                                <input type="text" name="email" required="required"
                                                    placeholder="Email *" data-error="Enter Your Email Id">
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>
                                        <div class="col-sm-12 p-0">
                                            <div class="form-group">
                                                {{-- <label> Phone Number<br /></label> --}}
                                                <input type="text" name="phone_number" required="required"
                                                    placeholder="Phone Number">
                                            </div>
                                        </div>


                                        <div class="col-sm-12 p-0">
                                            <div class="form-group">
                                                {{-- <label> Your Message<br /></label> --}}
                                                <textarea name="message"
                                                    placeholder="Additional Information... (Optional) " rows="1"
                                                    required="required"
                                                    data-error="Please, leave us a message."></textarea>
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>

                                        <div class="col-sm-12 p-0">
                                            <div class="form-group mg_top apbtn">
                                                <div class="button button-2"> SUBMIT</div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>



                        </div>
                    </div>
                </div>

            </div>
            <div class="col-xl-6 col-lg-6 pd_left_30 mt-5">


                <div class="title_all_box style_one dark_color">
                    <div class="title_sections left">
                        <div class="before_title">Contact Info</div>
                        <!-- <p>Send a message through given form, If your enquiry is time sensitive please use below
                                contact details.</p> -->
                    </div>
                </div>

                <div class="contact_box_content style_one">
                    <div class="contact_box_inner icon_yes">
                        <div class="icon_bx">
                            <span class=" icon-placeholder"></span>
                        </div>
                        <div class="contnet">
                            <h3> Post Address </h3>
                            <p>
                                Shop No. 4A/4B, mantra Alaska, Mohammadwadi, Pune-411060
                            </p>
                        </div>
                    </div>
                </div>
                <!--===============spacing==============-->
                <div class="pd_bottom_15"></div>
                <!--===============spacing==============-->
                <div class="contact_box_content style_one">
                    <div class="contact_box_inner icon_yes">
                        <div class="icon_bx">
                            <span class="icon-phone-call"></span>
                        </div>
                        <div class="contnet">
                            <h3> General Enquires </h3>
                            <p>
                                Phone: +91 90961 78196
                            </p>
                        </div>
                    </div>
                </div>
                <!--===============spacing==============-->
                <div class="pd_bottom_15"></div>
                <!--===============spacing==============-->
                <div class="contact_box_content style_one">
                    <div class="contact_box_inner icon_yes">
                        <div class="icon_bx">
                            <span class="fa fa-envelope"></span>
                        </div>
                        <div class="contnet">
                            <h3> Email </h3>
                            <p>

                                moizali.sethjiwala@finberg.in
                            </p>
                        </div>
                    </div>
                </div>
                <!--===============spacing==============-->
                <div class="pd_bottom_40"></div>
                <!--===============spacing==============-->
                <div class="social_media_v_one style_two">
                    <ul>
                        <li>
                            <a href="#"> <span class="fa fa-facebook"></span>
                                <small>facebook</small>
                            </a>
                        </li>
                        <li>
                            <a href="#"> <span class="fa fa-twitter"></span>
                                <small>twitter</small>
                            </a>
                        </li>
                        <li>
                            <a href="#"> <span class="fa fa-skype"></span>
                                <small>skype</small>
                            </a>
                        </li>
                        <li>
                            <a href="#"> <span class="fa fa-instagram"></span>
                                <small>instagram</small>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <!--===============spacing==============-->
            <div class="pd_bottom_20"></div>
            <!--===============spacing==============-->
            <div class="col-md-12">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15136.635569388629!2d73.9245927!3d18.4764606!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x5fc1439b9b4f8348!2sAlkasa!5e0!3m2!1sen!2sin!4v1638385986734!5m2!1sen!2sin"
                    width="100%" height="500" style="border: 0px; pointer-events: none;" allowfullscreen=""
                    loading="lazy"></iframe>


            </div>
        </div>
    </div>
    <!--===============spacing==============-->
    <div class="pd_top_70"></div>
    <!--===============spacing==============-->
</section>
@endsection