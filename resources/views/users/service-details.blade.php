<!DOCTYPE html>
<html lang="en">
    <!--<< Header Area >>-->
    
<!-- Mirrored from devsaidul.com/ui/prinoz-gsap/service-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 07 Feb 2025 04:35:38 GMT -->
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
            <div class="breadcrumb-wrapper bg-cover" style="background-image: url('{{ asset('assets/img/breadcrumb-bg.jpg') }}');">
                <div class="flower-shape">
                <img src="{{ asset('assets/img/flower-shape.png') }}" alt="Flower Shape">
                </div>
                <div class="star-shape">
                <img src="{{ asset('assets/img/star-shape.png') }}" alt="Star Shape">
                </div>
                <div class="container">
                    <div class="page-heading center">
                        <h6>Digital printing Service</h6>
                        <h1>Service Details</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>

        <!-- service Section Start -->
        <section class="service-details-section fix section-padding section-bg-2">
            <div class="container">
            <div class="service-details-wrapper">
                <div class="row g-5">
                    <div class="col-lg-4 order-2 order-md-1">
                            <div class="service-sidebar">
                                <div class="service-widget-categories">
                                    <ul>
                                        <li><a href="service-details.html">Custom Printing Designing </a> <span><i class="fa-regular fa-arrow-right-long"></i></span></li>
                                        <li><a href="service-details.html">T - shirt Printing Design</a> <span><i class="fa-regular fa-arrow-right-long"></i></span></li>
                                        <li class="active"><a href="service-details.html">Gift item Printing design</a><span><i class="fa-regular fa-arrow-right-long"></i></span></li>
                                        <li><a href="service-details.html">Sticker Printing Designing</a> <span><i class="fa-regular fa-arrow-right-long"></i></span></li>
                                        <li><a href="service-details.html">Package Crafting Desgin </a> <span><i class="fa-regular fa-arrow-right-long"></i></span></li>
                                        <li><a href="service-details.html">Priority Transportation </a> <span><i class="fa-regular fa-arrow-right-long"></i></span></li>
                                    </ul>
                                </div>
                                <div class="contact-bg text-center bg-cover" style="background-image: url('{{ asset('assets/img/service/service-contact.jpg') }}');">
                                    <div class="icon">
                                        <i class="fa-light fa-phone-volume"></i>
                                    </div>
                                    <h3>
                                        Looking for <br>
                                        printing service <br>
                                        Provider?
                                    </h3>
                                    <p>Call anytime</p>
                                    <a href="tel:+2871382023" class="theme-btn w-100">
                                        +(2) 871 382 023
                                    </a>
                                </div>
                            </div>
                    </div>
                    <div class="col-lg-8 order-1 order-md-2">
                        <div class="service-details-image">
                        <img src="{{ Storage::url($service->main_image) }}" alt="Service Image">


                        </div>
                        <div class="service-details-content">
                        <h3 class="wow fadeInUp" data-wow-delay=".3s">{{ $service->name_service }}</h3>
                        <p class="mt-3">{{ $service->description }}</p>
                                <h3 class="mt-5 split-text right">Sed Ut Perspiciatis Unde Omnis Iste Natus Et</h3>
                                <p class="mt-3">
                                    Need something changed or is there something not quite working the way you envisaged? Is your van a
                                    little old and tired and need refreshing? Lorem Ipsum is simply dummy text of the printing and typesetting
                                    industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an
                                    unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not
                                    only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                                </p>
                                <div class="service-details-video">
                                    <div class="row g-4 align-items-center">
                                        <div class="col-lg-6">
                                            <div class="video-image">
                                            <img src="{{ asset('assets/img/service/details-2.jpg') }}" alt="img">
                                                <div class="video-box">
                                                    <a href="https://www.youtube.com/watch?v=Cn4G2lZ_g2I" class="video-btn ripple video-popup">
                                                        <i class="fas fa-play"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="details-video-content">
                                                <h3 class="mb-3 split-text right">Why Marketing Important ?</h3>
                                                <p>
                                                    Lorem ipsum dolor sit amet, consectetur adipisici
                                                    sed do eiusmod tempor incididunt ut labore et 
                                                </p>
                                                <ul>
                                                    <li>
                                                        <i class="fa-solid fa-circle-check"></i>
                                                        Research beyond the business plan
                                                    </li>
                                                    <li>
                                                        <i class="fa-solid fa-circle-check"></i>
                                                        Marketing options and rates
                                                    </li>
                                                    <li>
                                                        <i class="fa-solid fa-circle-check"></i>
                                                        The ability to turnaround consulting
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <p>
                                    There are many variations of passages of lorem ipsum is simply free text available in the market, but the
                                    majority time you put aside to be in our office. Lorem ipsum dolor sit amet, consectetLorem ipsum dolor sit
                                    amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                                    dolore magna aliqua.
                                </p>
                                <div class="highlight-text">
                                    <h5>
                                        Business is the activity of making one's living or making money by produ The NDIS <br>
                                        Cing or buying and selling products akes a lifetime</h5>
                                </div>
                                <div class="service-image-item">
                                    <div class="row g-4">
                                            <h3 class="wow fadeInUp" data-wow-delay=".3s">Eligibility Checklist :</h3>
                                            <div class="col-lg-7">
                                                <div class="service-box-image">
                                                <img src="{{ asset('assets/img/service/details-3.jpg') }}" alt="img">
                                                </div>
                                            </div>
                                            <div class="col-lg-5">
                                                <div class="service-box-image">
                                                <img src="{{ asset('assets/img/service/details-4.jpg') }}" alt="img">
                                                </div>
                                            </div>
                                            <div class="col-lg-5">
                                                <div class="service-box-image">
                                                <img src="{{ asset('assets/img/service/details-5.jpg') }}" alt="img">
                                                </div>
                                            </div>
                                            <div class="col-lg-7">
                                                <div class="service-box-image">
                                                <img src="{{ asset('assets/img/service/details-6.jpg') }}" alt="img">
                                                </div>
                                            </div>
                                    </div>
                                </div>
                                <div class="faq-wrapper style-2">
                                    <div class="faq-content">
                                        <div class="faq-accordion">
                                            <div class="accordion" id="accordion">
                                                <div class="accordion-item wow fadeInUp" data-wow-delay=".3s">
                                                    <h4 class="accordion-header">
                                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq1" aria-expanded="false" aria-controls="faq1">
                                                            How to learn digital marketing?
                                                        </button>
                                                    </h4>
                                                    <div id="faq1" class="accordion-collapse collapse" data-bs-parent="#accordion">
                                                        <div class="accordion-body">
                                                            Ne summo dictas pertinacia nam. Illum cetero vocent ei vim, case regione signifer
                                                            umque vim te. Ex mea quem munere lobortis. Duis aute irure dolor in reprehenderit
                                                            in voluptate velit esse cillum.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="accordion-item wow fadeInUp" data-wow-delay=".5s">
                                                    <h4 class="accordion-header">
                                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq2" aria-expanded="false" aria-controls="faq2">
                                                            Can I use the demos made by Ewebot?
                                                        </button>
                                                    </h4>
                                                    <div id="faq2" class="accordion-collapse show" data-bs-parent="#accordion">
                                                        <div class="accordion-body">
                                                            Ne summo dictas pertinacia nam. Illum cetero vocent ei vim, case regione signifer
                                                            umque vim te. Ex mea quem munere lobortis. Duis aute irure dolor in reprehenderit
                                                            in voluptate velit esse cillum.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="accordion-item wow fadeInUp" data-wow-delay=".7s">
                                                    <h4 class="accordion-header">
                                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3" aria-expanded="false" aria-controls="faq3">
                                                            Why didn’t you showcase my submission?
                                                        </button>
                                                    </h4>
                                                    <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#accordion">
                                                        <div class="accordion-body">
                                                            Ne summo dictas pertinacia nam. Illum cetero vocent ei vim, case regione signifer
                                                            umque vim te. Ex mea quem munere lobortis. Duis aute irure dolor in reprehenderit
                                                            in voluptate velit esse cillum.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="accordion-item wow fadeInUp" data-wow-delay=".9s">
                                                    <h4 class="accordion-header">
                                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq4" aria-expanded="false" aria-controls="faq4">
                                                            What everybody ought to know about digital marketing?
                                                        </button>
                                                    </h4>
                                                    <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#accordion">
                                                        <div class="accordion-body">
                                                            Ne summo dictas pertinacia nam. Illum cetero vocent ei vim, case regione signifer
                                                            umque vim te. Ex mea quem munere lobortis. Duis aute irure dolor in reprehenderit
                                                            in voluptate velit esse cillum.
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
            </div>
            </div>
        </section>
    
     <!-- Cta Section Start -->
     @include('users.layouts.ctasection')

<!-- Footer Section Start -->
@include('users.layouts.footer')

     
       
       <!--<< All JS Plugins >>-->
<script src="{{ asset('assets/js/jquery-3.7.1.min.js') }}"></script>
<!--<< Viewport Js >>-->
<script src="{{ asset('assets/js/viewport.jquery.js') }}"></script>
<!--<< Bootstrap Js >>-->
<script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
<!--<< Gsap Js >>-->
<script src="{{ asset('assets/js/gsap/gsap.js') }}"></script>
<!--<< Gsap Scroll To Plugin Js >>-->
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

<!-- Mirrored from devsaidul.com/ui/prinoz-gsap/service-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 07 Feb 2025 04:35:40 GMT -->
</html>