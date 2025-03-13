<!DOCTYPE html>
<html lang="en">
    <!--<< Header Area >>-->
    
<!-- Mirrored from devsaidul.com/ui/prinoz-gsap/service.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 07 Feb 2025 04:35:40 GMT -->
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
        @include('users.component.PreloaderStart')

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
                        <h1>Service Page</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>

        <!-- Service Section Start -->
        <section class="service-section section-padding section-bg-2 fix">
    <div class="container">
        <div class="section-title-area">
            <div class="section-title">
                <h6 class="wow fadeInUp">More service us</h6>
                <h2 class="wow fadeInUp" data-wow-delay=".3s">
                    Create Stunning Print For<br>
                    <span> Your Business <img src="assets/img/line.png" alt="img"></span>
                </h2>
            </div>
            <a href="{{ route('service.index') }}" class="theme-btn wow fadeInUp" data-wow-delay=".5s">See all Services</a>
        </div>
        <div class="service-wrapper style-2">
        <div class="swiper service-slider">
    <div class="swiper-wrapper">
        @foreach ($services as $service)
            <div class="swiper-slide">
                <div class="service-card-items">
                    <div class="service-content">
                        <h3>
                            <a href="{{ route('service.details', $service->id) }}">
                                {{ $service->name_service }}
                            </a>
                        </h3>
                        <p>{{ Str::limit($service->description, 10, '...') }}</p>
                    </div>
                    <div class="service-image">
                        <img src="{{ asset('storage/' . $service->main_image) }}" alt="{{ $service->name_service }}">
                    </div>
                    <div class="service-btn">
                        <a href="{{ route('service.details', $service->id) }}" class="link-btn">
                            Read Out More <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    </div>
        </div>
    </div>
</section>


        <!-- Counter Section Start -->
        <section class="counter-section fix section-padding pt-0 section-bg-2">
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

        <!-- Service Section Start -->
        <section class="service-section fix section-padding bg-cover" style="background-image: url('assets/img/service/service-bg.jpg');">
            <div class="container">
                <div class="section-title-area">
                    <div class="section-title">
                        <h6 class="wow fadeInUp">More service us</h6>
                        <h2 class="wow fadeInUp" data-wow-delay=".3s">
                            Create Stunning Print For<br>
                            <span> Your Business <img src="assets/img/line.png" alt="img"></span>
                        </h2>
                    </div>
                    <a href="service.html" class="theme-btn wow fadeInUp" data-wow-delay=".5s">See all Services</a>
                </div>
            </div>
            <div class="services-wrapper-3">
                <div class="swiper service-slider-3">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="service-box-items-3">
                                <div class="service-thumb">
                                    <img src="assets/img/service/s1.jpg" alt="img">
                                    <div class="icon">
                                        <img src="assets/img/icon/14.svg" alt="img">
                                    </div>
                                    <div class="service-content">
                                        <h4>01</h4>
                                        <h3><a href="service-details.html">Digital Scanning</a></h3>
                                        <p>
                                            Sed ut perspiciatis unde is <br>
                                            voluptatem accusant
                                        </p>
                                        <a href="service-details.html" class="arrow-icon"><i class="far fa-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="service-box-items-3">
                                <div class="service-thumb">
                                    <img src="assets/img/service/s2.jpg" alt="img">
                                    <div class="icon">
                                        <img src="assets/img/icon/14.svg" alt="img">
                                    </div>
                                    <div class="service-content">
                                        <h4>02</h4>
                                        <h3><a href="service-details.html">Gift item printing</a></h3>
                                        <p>
                                            Sed ut perspiciatis unde is <br>
                                            voluptatem accusant
                                        </p>
                                        <a href="service-details.html" class="arrow-icon"><i class="far fa-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="service-box-items-3">
                                <div class="service-thumb">
                                    <img src="assets/img/service/s3.jpg" alt="img">
                                    <div class="icon">
                                        <img src="assets/img/icon/15.svg" alt="img">
                                    </div>
                                    <div class="service-content">
                                        <h4>03</h4>
                                        <h3><a href="service-details.html">Digital Scanning</a></h3>
                                        <p>
                                            Sed ut perspiciatis unde is <br>
                                            voluptatem accusant
                                        </p>
                                        <a href="service-details.html" class="arrow-icon"><i class="far fa-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- About Feature Section Start -->
        <section class="about-feature-sections fix section-padding section-bg-2 pb-0">
            <div class="container">
                <div class="about-feature-wrapper">
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

    <!-- Cta Section Start -->
    @include('users.layouts.ctasection')

    <!-- Footer Section Start -->
    @include('users.layouts.footer')

        
        <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
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
<script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const swiper = new Swiper('.swiper.service-slider', {
            loop: false,
            slidesPerView: 1,
            spaceBetween: 10,
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        });
    });
</script>

    </body>

<!-- Mirrored from devsaidul.com/ui/prinoz-gsap/service.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 07 Feb 2025 04:35:41 GMT -->
</html>