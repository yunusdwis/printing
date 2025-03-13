<!DOCTYPE html>
<html lang="en">
    <!--<< Header Area >>-->
    
<!-- Mirrored from devsaidul.com/ui/prinoz-gsap/about.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 07 Feb 2025 04:35:37 GMT -->
<head>
        <!-- ========== Meta Tags ========== -->
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="ui-drops">
        <meta name="description" content="Prinoz - Printing company & Service Html Template">
        <!-- ======== Page title ============ -->
        <title>Prinoz - Printing company & Service Html Template</title>
        <!--<< Favcion >>-->
        <link rel="shortcut icon" href="{{ asset('assets/img/favicon.svg') }}">
<!--<< Bootstrap min.css >>-->
<link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
<!--<< All Min Css >>-->
<link rel="stylesheet" href="{{ asset('assets/css/all.min.css') }}">
<!--<< Animate.css >>-->
<link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">
<!--<< Magnific Popup.css >>-->
<link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">
<!--<< MeanMenu.css >>-->
<link rel="stylesheet" href="{{ asset('assets/css/meanmenu.css') }}">
<!--<< Swiper Bundle.css >>-->
<link rel="stylesheet" href="{{ asset('assets/css/swiper-bundle.min.css') }}">
<!--<< Nice Select.css >>-->
<link rel="stylesheet" href="{{ asset('assets/css/nice-select.css') }}">
<!--<< Color.css >>-->
<link rel="stylesheet" href="{{ asset('assets/css/color.css') }}">
<!--<< Main.css >>-->
<link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">

    </head>
    <body>

        <!-- Preloader Start -->
        <div id="preloader" class="preloader">
        <div class="animation-preloader">
            <div class="spinner">                
            </div>
            <div class="txt-loading">
                <span data-text-preloader="P" class="letters-loading">
                    P
                </span>
                <span data-text-preloader="R" class="letters-loading">
                    R
                </span>
                <span data-text-preloader="I" class="letters-loading">
                    I
                </span>
                <span data-text-preloader="N" class="letters-loading">
                    N
                </span>
                <span data-text-preloader="O" class="letters-loading">
                    O
                </span>
                <span data-text-preloader="Z" class="letters-loading">
                    Z
                </span>
            </div>
            <p class="text-center">Loading</p>
        </div>
        <div class="loader">
            <div class="row">
                <div class="col-3 loader-section section-left">
                    <div class="bg"></div>
                </div>
                <div class="col-3 loader-section section-left">
                    <div class="bg"></div>
                </div>
                <div class="col-3 loader-section section-right">
                    <div class="bg"></div>
                </div>
                <div class="col-3 loader-section section-right">
                    <div class="bg"></div>
                </div>
            </div>
        </div>
        </div>

        <!--<< Mouse Cursor Start >>-->  
        @include('users.component.cursor')

       <!-- Offcanvas Area Start -->
       @include('users.component.offcanvas')

       <!-- Header Section Start -->
       @include('users.layouts.header') 


        <!-- Breadcrumb Wrapper Start -->
        <div class="breadcrumb-section section-bg-2">
            <div class="container-fluid">
                <div class="breadcrumb-wrapper bg-cover" style="background-image: url('assets/img/breadcrumb-bg.jpg');">
                    <div class="flower-shape">
                        <img src="assets/img/flower-shape.png" alt="img">
                    </div>
                    <div class="star-shape">
                        <img src="assets/img/star-shape.png" alt="img">
                    </div>
                    <div class="container">
                        <div class="page-heading center">
                            <h6>Digital printing Service</h6>
                            <h1>About Company</h1>
                        </div>
                    </div>
                </div>
            </div>
            </div>

            <!-- About Section Start -->
            <section class="about-section section-padding">
                <div class="container">
                    <div class="about-wrapper-2">
                        <div class="row g-4">
                            <div class="col-lg-6 wow img-custom-anim-top" data-wow-duration="1.5s" data-wow-delay="0.1s">
                                <div class="about-image-items">
                                    <div class="about-image">
                                        <img src="assets/img/about/t-shirt.png" alt="img">
                                    </div>
                                    <div class="shape-1">
                                        <img src="assets/img/about/shape-1.png" alt="img">
                                    </div>
                                    <div class="shape-2">
                                        <img src="assets/img/about/mug1.png" alt="img">
                                    </div>
                                    <div class="shape-3">
                                        <img src="assets/img/about/color_cycle.png" alt="img">
                                    </div>
                                    <div class="shape-4">
                                        <img src="assets/img/about/sticer.png" alt="img">
                                    </div>
                                    <div class="shape-5">
                                        <img src="assets/img/about/shape-2.png" alt="img">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="about-content">
                                    <div class="section-title">
                                        <h6 class="wow fadeInUp">More about us</h6>
                                        <h2 class="wow fadeInUp" data-wow-delay=".3s">
                                            Create Stunning Print For
                                        <span> Your Business <img src="assets/img/line.png" alt="img"></span>
                                        </h2>
                                    </div>
                                    <p class="mt-3 mt-md-0 wow fadeInUp" data-wow-delay=".5s">
                                        A full administration printing background. Print shirts for yourself
                                        or your online business Beautiful, customizable template,
                                    </p>
                                    <ul class="about-list wow fadeInUp" data-wow-delay=".3s">
                                        <li>
                                            <i class="fa-solid fa-check"></i>
                                            Large paper & stock selection & Unique Print
                                        </li>
                                        <li>
                                            <i class="fa-solid fa-check"></i>
                                            Printing programs tailored to your company ne
                                        </li>
                                        <li>
                                            <i class="fa-solid fa-check"></i>
                                            Customer places their order Connect your store
                                        </li>
                                    </ul>
                                    <div class="about-author">
                                        <a href="about.html" class="theme-btn wow fadeInUp" data-wow-delay=".3s">more about us</a>
                                        <div class="author-image wow fadeInUp" data-wow-delay=".5s">
                                            <img src="assets/img/about/author.png" alt="author-img">
                                            <div class="content">
                                                <span>10m+ Trusted Global clients <img src="assets/img/about/line.png" alt="img"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Marquee Section Start -->
            <div class="marquee-section pb-4 margin-top-20">
                <div class="mycustom-marque">
                    <div class="scrolling-wrap">
                        <div class="comm">
                            <div class="cmn-textslide">web design</div>
                            <div><img src="assets/img/marquee-box.png" alt="img"></div>
                            <div class="cmn-textslide">sitcker print</div>
                            <div class="cmn-textslide color-2">Custom Printing</div>
                            <div><img src="assets/img/marquee-box.png" alt="img"></div>
                            <div class="cmn-textslide">Packageing</div>
                        </div>
                        <div class="comm">
                            <div class="cmn-textslide">web design</div>
                            <div><img src="assets/img/marquee-box.png" alt="img"></div>
                            <div class="cmn-textslide">sitcker print</div>
                            <div class="cmn-textslide color-2">Custom Printing</div>
                            <div><img src="assets/img/marquee-box.png" alt="img"></div>
                            <div class="cmn-textslide">Packageing</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Service Section Start -->
            <section class="service-section bg-cover section-padding" style="background-image: url('assets/img/service/service-bg.jpg');">
                <div class="container">
                    <div class="section-title-area">
                        <div class="section-title">
                            <h6 class="wow fadeInUp">More service us</h6>
                            <h2 class="wow fadeInUp" data-wow-delay=".3s">
                                Create Stunning Print for<br>
                                <span> Your Business <img src="assets/img/line.png" alt="img"></span>
                            </h2>
                        </div>
                        <a href="service.html" class="theme-btn wow fadeInUp" data-wow-delay=".5s">See all Services</a>
                    </div>
                </div>
                <div class="service-wrapper mb-0">
                    <div class="swiper service-slider">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="service-card-items">
                                    <div class="service-cotent">
                                        <h3><a href="service-details.html">t-shirt printing</a></h3>
                                        <p>Take a trivial example which
                                            of us ever…</p>
                                    </div>
                                    <div class="service-image">
                                        <img src="assets/img/service/01.png" alt="img">
                                    </div>
                                    <div class="service-btn">
                                    <a href="service-details.html" class="link-btn">Read Out More <i class="fa-solid fa-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="service-card-items">
                                    <div class="service-cotent">
                                        <h3><a href="service-details.html">Sticker printing</a></h3>
                                        <p>Take a trivial example which
                                            of us ever…</p>
                                    </div>
                                    <div class="service-image">
                                        <img src="assets/img/service/02.png" alt="img">
                                    </div>
                                    <div class="service-btn">
                                    <a href="service-details.html" class="link-btn">Read Out More <i class="fa-solid fa-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="service-card-items">
                                    <div class="service-cotent">
                                        <h3><a href="service-details.html">Digital Scanning</a></h3>
                                        <p>Take a trivial example which
                                            of us ever…</p>
                                    </div>
                                    <div class="service-image">
                                        <img src="assets/img/service/03.png" alt="img">
                                    </div>
                                    <div class="service-btn">
                                    <a href="service-details.html" class="link-btn">Read Out More <i class="fa-solid fa-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="service-card-items">
                                    <div class="service-cotent">
                                        <h3><a href="service-details.html">Gift item printing</a></h3>
                                        <p>Take a trivial example which
                                            of us ever…</p>
                                    </div>
                                    <div class="service-image">
                                        <img src="assets/img/service/04.png" alt="img">
                                    </div>
                                    <div class="service-btn">
                                    <a href="service-details.html" class="link-btn">Read Out More <i class="fa-solid fa-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="service-card-items">
                                    <div class="service-cotent">
                                        <h3><a href="service-details.html">t-shirt printing</a></h3>
                                        <p>Take a trivial example which
                                            of us ever…</p>
                                    </div>
                                    <div class="service-image">
                                        <img src="assets/img/service/01.png" alt="img">
                                    </div>
                                    <div class="service-btn">
                                    <a href="service-details.html" class="link-btn">Read Out More <i class="fa-solid fa-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Counter Section Start -->
            <section class="counter-section fix section-padding">
                <div class="container">
                    <div class="counter-text text-center">
                        <h6 class="wow fadeInUp">Manufacturing software that goes beyondthe benchmark</h6>
                    </div>
                    <div class="row">
                        <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".2s">
                            <div class="counter-items">
                                <div class="counter-title">
                                <h2><span class="count">250</span>+</h2>
                                </div>
                                <p class="text-center">Years Of Experience</p>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".4s">
                            <div class="counter-items">
                                <div class="counter-title bg-2">
                                <h2><span class="count">36</span>k+</h2>
                                </div>
                                <p class="text-center">Project Completed</p>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".6s">
                            <div class="counter-items">
                                <div class="counter-title bg-3">
                                <h2><span class="count">900</span>+</h2>
                                </div>
                                <p class="text-center">Years Of Experience</p>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".8s">
                            <div class="counter-items">
                                <div class="counter-title bg-4">
                                <h2><span class="count">250</span>%</h2>
                                </div>
                                <p class="text-center">Satisfaction Rate</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- About Feature Section Start -->
            <section class="about-feature-section fix section-padding pt-0">
                <div class="container">
                    <div class="about-feature-wrapper style-2">
                        <div class="row g-4">
                            <div class="col-lg-6">
                                <div class="about-image-items">
                                    <div class="about-feature-image">
                                        <img src="assets/img/about/04.jpg" alt="img" class="wow img-custom-anim-top" data-wow-duration="1.5s" data-wow-delay="0.1s">
                                        <div class="about-feature-image reveal image-anime">
                                            <img src="assets/img/about/05.jpg" alt="img">
                                        </div>
                                        <div class="stickers-shape">
                                            <img src="assets/img/feature/StickersV30.png" alt="img">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="about-feature-content">
                                    <div class="section-title">
                                        <h6 class="wow fadeInUp">More about us</h6>
                                        <h2 class="wow fadeInUp" data-wow-delay=".3s">
                                            How Print-On-Demand
                                            <span><img src="assets/img/line.png" alt="img">Drop Shipping</span> Works
                                        </h2>
                                    </div>
                                    <div class="box-items-area mt-3 mt-md-0">
                                        <div class="box-item wow fadeInUp" data-wow-delay=".3s">
                                            <h5>Competitive & flexible product pricing</h5>
                                            <p>
                                                Everyone’s local printer, we partner with more than 50 print
                                                on demand suppliers in over 10  we partner with more
                                            </p>
                                        </div>
                                        <div class="box-item active wow fadeInUp" data-wow-delay=".3s">
                                            <h5>Catalog of 350+ products</h5>
                                            <p>
                                                Everyone’s local printer, we partner with more than 50 print
                                                on demand suppliers in over 10  we partner with more
                                            </p>
                                        </div>
                                        <div class="box-item wow fadeInUp" data-wow-delay=".3s">
                                            <h5>Competitive & flexible product pricing</h5>
                                            <p>
                                                Everyone’s local printer, we partner with more than 50 print
                                                on demand suppliers in over 10  we partner with more
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Cta Video Section Start -->
            <div class="cta-video-section">
                <div class="mycustom-marque style-about">
                    <div class="scrolling-wrap">
                        <div class="comm">
                            <div class="cmn-textslide">business </div>
                            <div class="cmn-textslide">Consulting</div>
                        </div>
                        <div class="comm">
                            <div class="cmn-textslide">business </div>
                            <div class="cmn-textslide">Consulting</div>
                        </div>
                        <div class="comm">
                            <div class="cmn-textslide">business </div>
                            <div class="cmn-textslide">Consulting</div>
                        </div>
                        <div class="comm">
                            <div class="cmn-textslide">business </div>
                            <div class="cmn-textslide">Consulting</div>
                        </div>
                        <div class="comm">
                            <div class="cmn-textslide">business </div>
                            <div class="cmn-textslide">Consulting</div>
                        </div>
                    </div>
                </div>
                <div class="container-fluid">
                    <div class="cta-video-wrapper bg-cover wow fadeInUp" data-wow-delay=".3s" style="background-image: url('assets/img/cta-video.jpg');">
                        <a href="https://www.youtube.com/watch?v=Cn4G2lZ_g2I" class="video-btn ripple video-popup">
                            <i class="fas fa-play"></i>
                        </a>
                    </div>
                </div>
                <div class="brand-wrapper-4 bg-cover" style="background-image: url('assets/img/brand/bg.jpg');">
                    <div class="container">
                        <h4 class="text-center wow fadeInUp">We are blessed to work with leading brands <span>brands</span></h4>
                        <div class="brand-items">
                            <div class="brand-logo wow fadeInUp" data-wow-delay=".2s">
                                <img src="assets/img/brand/brand-logo-11.png" alt="img">
                            </div>
                            <div class="brand-logo wow fadeInUp" data-wow-delay=".4s">
                                <img src="assets/img/brand/brand-logo-12.png" alt="img">
                            </div>
                            <div class="brand-logo wow fadeInUp" data-wow-delay=".6s">
                                <img src="assets/img/brand/brand-logo-13.png" alt="img">
                            </div>
                            <div class="brand-logo wow fadeInUp" data-wow-delay=".8s">
                                <img src="assets/img/brand/brand-logo-14.png" alt="img">
                            </div>
                            <div class="brand-logo wow fadeInUp" data-wow-delay=".9s">
                                <img src="assets/img/brand/brand-logo-15.png" alt="img">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Work Process Section Start -->
            <section class="work-process-section section-padding fix">
                <div class="container">
                    <div class="section-title text-center">
                        <h6 class="bg-2 wow fadeInUp">Digital printing Service</h6>
                        <h2 class="wow fadeInUp" data-wow-delay=".3s">
                            How We Works & Process <br>
                            It For Customers
                        </h2>
                    </div>
                    <div class="work-process-wrapper">
                        <div class="row">
                            <div class="col-xl-4 col-lg-6 col-ms-6 wow fadeInUp" data-wow-delay=".3s">
                                <div class="work-process-box-items">
                                    <div class="thumb">
                                        <img src="assets/img/work-process/01.jpg" alt="img">
                                    </div>
                                    <div class="content">
                                        <h3>Pick a Product</h3>
                                        <p>
                                            full administration printing backgrou
                                            or your online business Beautiful
                                        </p>
                                    </div>
                                    <div class="number">
                                        01
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-ms-6 wow fadeInUp" data-wow-delay=".5s">
                                <div class="work-process-box-items active">
                                    <div class="thumb">
                                        <img src="assets/img/work-process/02.jpg" alt="img">
                                    </div>
                                    <div class="content">
                                        <h3>Custom artwork &review</h3>
                                        <p>
                                            full administration printing backgrou
                                            or your online business Beautiful
                                        </p>
                                    </div>
                                    <div class="number">
                                        02
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-ms-6 wow fadeInUp" data-wow-delay=".7s">
                                <div class="work-process-box-items">
                                    <div class="thumb">
                                        <img src="assets/img/work-process/03.jpg" alt="img">
                                    </div>
                                    <div class="content">
                                        <h3>Set up shipping</h3>
                                        <p>
                                            full administration printing backgrou
                                            or your online business Beautiful
                                        </p>
                                    </div>
                                    <div class="number">
                                        03
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Testimonial Section Start -->
            <section class="testimonial-section-3 section-padding fix bg-cover" style="background-image: url('assets/img/testimonial/testimonial-bg-2.jpg');">
                <div class="container">
                    <div class="section-title text-center">
                        <h6 class="bg-3 wow fadeInUp">Digital printing Service</h6>
                        <h2 class="wow fadeInUp" data-wow-delay=".3s">
                            Why People Say About Our <br>
                            Business Services
                        </h2>
                    </div>
                </div>
                <div class="swiper testimonial-slider-3">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="testimonial-box-items-2">
                                <div class="clinet-info-items">
                                    <div class="content">
                                        <h4>william camel</h4>
                                        <span>Head of Design at Zazoo</span>
                                    </div>
                                    <div class="star">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star color-2"></i>
                                    </div>
                                </div>
                                <h3>
                                    I had a great experience <br>
                                    with printSpace!
                                </h3>
                                <p>
                                    Good Time is very good in what they're doing and
                                    more than happy to challenge and push you to
                                    think about your decisions both from usabil
                                </p>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testimonial-box-items-2">
                                <div class="clinet-info-items">
                                    <div class="content">
                                        <h4>Shikhon Islam</h4>
                                        <span>Web Developer</span>
                                    </div>
                                    <div class="star">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star color-2"></i>
                                    </div>
                                </div>
                                <h3>
                                    I had a great experience <br>
                                    with printSpace!
                                </h3>
                                <p>
                                    Good Time is very good in what they're doing and
                                    more than happy to challenge and push you to
                                    think about your decisions both from usabil
                                </p>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testimonial-box-items-2">
                                <div class="clinet-info-items">
                                    <div class="content">
                                        <h4>Kawser Ahmed</h4>
                                        <span>Web development</span>
                                    </div>
                                    <div class="star">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star color-2"></i>
                                    </div>
                                </div>
                                <h3>
                                    I had a great experience <br>
                                    with printSpace!
                                </h3>
                                <p>
                                    Good Time is very good in what they're doing and
                                    more than happy to challenge and push you to
                                    think about your decisions both from usabil
                                </p>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testimonial-box-items-2">
                                <div class="clinet-info-items">
                                    <div class="content">
                                        <h4>william camel</h4>
                                        <span>Head of Design at Zazoo</span>
                                    </div>
                                    <div class="star">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star color-2"></i>
                                    </div>
                                </div>
                                <h3>
                                    I had a great experience <br>
                                    with printSpace!
                                </h3>
                                <p>
                                    Good Time is very good in what they're doing and
                                    more than happy to challenge and push you to
                                    think about your decisions both from usabil
                                </p>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testimonial-box-items-2">
                                <div class="clinet-info-items">
                                    <div class="content">
                                        <h4>Shikhon Islam</h4>
                                        <span>Web Developer</span>
                                    </div>
                                    <div class="star">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star color-2"></i>
                                    </div>
                                </div>
                                <h3>
                                    I had a great experience <br>
                                    with printSpace!
                                </h3>
                                <p>
                                    Good Time is very good in what they're doing and
                                    more than happy to challenge and push you to
                                    think about your decisions both from usabil
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-dot-2 text-center pt-5">
                        <div class="dot"></div>
                    </div>
                </div>
            </section>

            <!-- Cta Section Start -->
            <section class="cta-section-3 section-bg-2">
                <div class="mycustom-marque style-3">
                    <div class="scrolling-wrap">
                        <div class="comm cmn-style-2">
                            <div class="cmn-textslide">Design.</div>
                            <div class="cmn-textslide"> Brand.</div>
                            <div class="cmn-textslide color-3">Quality</div>
                            <div><img src="assets/img/marquee-box-3.png" alt="img"></div>
                        </div>
                        <div class="comm cmn-style-2">
                            <div class="cmn-textslide">Design.</div>
                            <div class="cmn-textslide"> Brand.</div>
                            <div class="cmn-textslide color-3">Quality</div>
                            <div><img src="assets/img/marquee-box-3.png" alt="img"></div>
                        </div>
                        <div class="comm cmn-style-2">
                            <div class="cmn-textslide">Design.</div>
                            <div class="cmn-textslide"> Brand.</div>
                            <div class="cmn-textslide color-3">Quality</div>
                            <div><img src="assets/img/marquee-box-3.png" alt="img"></div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="cta-wrapper-2 bg-cover" style="background-image: url('assets/img/cta-bg-2.jpg');">
                        <div class="prite-box float-bob-y">
                            <img src="assets/img/print-box.png" alt="img">
                        </div>
                        <div class="hand-bag float-bob-x">
                            <img src="assets/img/hand-bag.png" alt="img">
                        </div>
                        <div class="cta-sticker float-bob-y">
                            <img src="assets/img/cta-sticker.png" alt="img">
                        </div>
                        <div class="cta-content">
                            <div class="section-title">
                                <h6 class="bg-white wow fadeInUp">printing Service</h6>
                                <h2 class="text-white split-text right">
                                    Ready To Create Some <br>
                                    Custom Products?
                                </h2>
                            </div>
                            <div class="cta-btn mt-3 mt-md-0 wow fadeInUp" data-wow-delay=".5s">
                                <a href="about.html" class="theme-btn">more about us</a>
                            </div>
                        </div>
                        <div class="cta-image">
                            <img src="assets/img/cta-t-shirt.png" alt="img">
                        </div>
                    </div>
                </div>
            </section>

            <!-- Footer Section Start -->
            <footer class="footer-section style-2 bg-cover" style="background-image: url('assets/img/footer/footer-bg-2.jpg');">
                <div class="line-shape float-bob-y">
                    <img src="assets/img/footer/line-shape.png" alt="img">
                </div>
                <div class="star-shape float-bob-y">
                    <img src="assets/img/footer/star.png" alt="img">
                </div>
                <div class="container">
                    <div class="footer-newsletter-wrapper style-2">
                        <div class="newsletter-items wow fadeInUp" data-wow-delay=".3s">
                            <div class="icon">
                                <img src="assets/img/mail.png" alt="img">
                            </div>
                            <h2>
                                Get Our Latest's News <br>
                                & Updates
                            </h2>
                        </div>
                        <div class="newsletter-input wow fadeInUp" data-wow-delay=".5s">
                            <input type="email" id="email22" placeholder="Business email adress">
                            <button class="newsletter-btn" type="submit">
                                <i class="fa-solid fa-arrow-right"></i>
                            </button>
                        </div>
                    </div>
                    <div class="footer-widgets-wrapper style-2">
                        <div class="row">
                            <div class="col-xl-3 col-sm-6 col-md-6 col-lg-4 wow fadeInUp" data-wow-delay=".2s">
                                <div class="single-footer-widget">
                                    <div class="widget-head">
                                        <a href="index-2.html">
                                            <img src="assets/img/logo/white-logo.svg" alt="logo-img">
                                        </a>
                                    </div>
                                    <div class="footer-content">
                                        <p class="text-white">
                                            A new way to make the payments easy,
                                            reliable and 100% secure. claritatem itamconse quat. Exerci tation ullamcorper.
                                        </p>
                                        <div class="social-icon d-flex align-items-center">
                                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                                            <a href="#"><i class="fab fa-twitter"></i></a>
                                            <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                                            <a href="#"><i class="fa-brands fa-youtube"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 ps-lg-5 col-sm-6 col-md-6 col-lg-4 wow fadeInUp" data-wow-delay=".4s">
                                <div class="single-footer-widget">
                                    <div class="widget-head">
                                        <h3>Usefull Links</h3>
                                    </div>
                                    <ul class="list-items">
                                        <li>
                                            <a href="contact.html">
                                                Contact us
                                            </a>
                                        </li>
                                        <li>
                                            <a href="service-details.html">
                                                How it Works
                                            </a>
                                        </li>
                                        <li>
                                            <a href="service-details.html">
                                                Create
                                            </a>
                                        </li>
                                        <li>
                                            <a href="service-details.html">
                                                Explore
                                            </a>
                                        </li>
                                        <li>
                                            <a href="contact.html">
                                                Terms & Services
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-xl-3 ps-lg-4 col-sm-6 col-md-6 col-lg-4 wow fadeInUp" data-wow-delay=".6s">
                                <div class="single-footer-widget">
                                    <div class="widget-head">
                                        <h3>Community</h3>
                                    </div>
                                    <ul class="list-items">
                                        <li>
                                            <a href="contact.html">
                                                Help Center
                                            </a>
                                        </li>
                                        <li>
                                            <a href="contact.html">
                                                Partners
                                            </a>
                                        </li>
                                        <li>
                                            <a href="contact.html">
                                                Suggestions
                                            </a>
                                        </li>
                                        <li>
                                            <a href="news.html">
                                                Blog
                                            </a>
                                        </li>
                                        <li>
                                            <a href="contact.html">
                                                Newsletters
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-xl-3 col-sm-6 col-md-6 col-lg-4 wow fadeInUp" data-wow-delay=".8s">
                                <div class="single-footer-widget">
                                    <div class="widget-head">
                                        <h3>Get In Touch</h3>
                                    </div>
                                    <div class="footer-content">
                                        <p class="text-white">
                                            2972 Westheimer Rd. Santa Ana, <br>
                                            Illinois 85486
                                        </p>
                                        <ul class="contact-list">
                                            <li>
                                                <a href="mailto:contact@info.com" class="link">contact@info.com</a>
                                            </li>
                                            <li>
                                                <a href="tel:+8060008899">+806 (000) 88 99</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="footer-bottom style-2">
                        <a href="#" id="scrollUp" class="scroll-icon">
                            <i class="fa-solid fa-chevrons-up"></i>
                        </a>
                        <div class="footer-wrapper d-flex align-items-center justify-content-between">
                            <p class="wow fadeInLeft" data-wow-delay=".3s">
                                Copyright <span>@2024</span> <a href="index-2.html">Ui-drops</a> All Rights Reserved
                            </p>
                            <ul class="footer-menu wow fadeInRight" data-wow-delay=".5s">
                                <li>
                                    <a href="faq.html">
                                        Faqs
                                    </a>
                                </li>
                                <li>
                                    <a href="contact.html">
                                        Setting
                                    </a>
                                </li>
                                <li>
                                    <a href="contact.html">
                                        Privacy
                                    </a>
                                </li>
                                <li>
                                    <a href="contact.html">
                                        Contact
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </footer>

       
       
        <!--<< All JS Plugins >>-->
<script src="{{ asset('assets/js/jquery-3.7.1.min.js') }}"></script>
<!--<< Viewport Js >>-->
<script src="{{ asset('assets/js/viewport.jquery.js') }}"></script>
<!--<< Bootstrap Js >>-->
<script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
<!--<< Gsap Js >>-->
<script src="{{ asset('assets/js/gsap/gsap.js') }}"></script>
<!--<< Gsap Scroll To Pluging Js >>-->
<script src="{{ asset('assets/js/gsap/gsap-scroll-to-plugin.js') }}"></script>
<!--<< Gsap Scroll Smoother Js >>-->
<script src="{{ asset('assets/js/gsap/gsap-scroll-smoother.js') }}"></script>
<!--<< Gsap Scroll Trigger Js >>-->
<script src="{{ asset('assets/js/gsap/gsap-scroll-trigger.js') }}"></script>
<!--<< Gsap Split Text Js >>-->
<script src="{{ asset('assets/js/gsap/gsap-split-text.js') }}"></script>
<!--<< Nice Select Js >>-->
<script src="{{ asset('assets/js/jquery.nice-select.min.js') }}"></script>
<!--<< Waypoints Js >>-->
<script src="{{ asset('assets/js/jquery.waypoints.js') }}"></script>
<!--<< Counterup Js >>-->
<script src="{{ asset('assets/js/jquery.counterup.min.js') }}"></script>
<!--<< CustomCountdown Js >>-->
<script src="{{ asset('assets/js/countdowncustom.js') }}"></script>
<!--<< Swiper Slider Js >>-->
<script src="{{ asset('assets/js/swiper-bundle.min.js') }}"></script>
<!--<< MeanMenu Js >>-->
<script src="{{ asset('assets/js/jquery.meanmenu.min.js') }}"></script>
<!--<< Magnific Popup Js >>-->
<script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
<!--<< Wow Animation Js >>-->
<script src="{{ asset('assets/js/wow.min.js') }}"></script>
<!--<< Main.js >>-->
<script src="{{ asset('assets/js/main.js') }}"></script>
    </body>

<!-- Mirrored from devsaidul.com/ui/prinoz-gsap/about.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 07 Feb 2025 04:35:38 GMT -->
</html>