<!DOCTYPE html>
<html lang="en">
    <!--<< Header Area >>-->
    
<!-- Mirrored from devsaidul.com/ui/prinoz-gsap/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 07 Feb 2025 04:35:02 GMT -->
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
        <!--<< Favcion >>-->
        <link rel="shortcut icon" href="{{ asset('assets/img/favicon.svg') }}">
<!--<< Bootstrap min.css >>-->
<link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
<!-- Leaflet CSS -->
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
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
                        <h1>Contact Page</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--<< Contact Info Section Start >>-->
    <section class="contact-info-section fix section-padding section-bg-2">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                    <div class="contact-info-items text-center">
                        <div class="icon">
                            <img src="assets/img/icon/location.png" alt="icon-img">
                        </div>
                        <div class="content">
                            <h3>address line</h3>
                            <p>
                                Bowery St, New York, 37 USA <br>
                                NY 10013,USA 
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".5s">
                    <div class="contact-info-items active text-center">
                        <div class="icon">
                            <img src="assets/img/icon/12.svg" alt="icon-img">
                        </div>
                        <div class="content">
                            <h3>Phone Number</h3>
                            <p>
                                +1255 - 568 - 6523 4374-221 <br>
                                +1255 - 568 - 6523
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".7s">
                    <div class="contact-info-items text-center">
                        <div class="icon">
                            <img src="assets/img/icon/13.svg" alt="icon-img">
                        </div>
                        <div class="content">
                            <h3>Mail Adress</h3>
                            <p>
                                email@example.com <br>
                                info@yourdomain.com
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--<< Contact Section Start >>-->
    <section class="contact-section section-padding pt-0 section-bg-2">
        <div class="container">
            <div class="contact-area">
                <div class="row justify-content-between">
                    <div class="col-xl-6 col-lg-6">
                        <div class="map-content-area">
                            <h3 class="wow fadeInUp" data-wow-delay=".3s"> Get In Touch</h3>
                            <p class="wow fadeInUp" data-wow-delay=".5s">
                                Lorem ipsum dolor sit amet consectetur adipiscing elit mattis <br>
                                faucibus odio feugiat arc dolor.
                            </p>
                            <div class="google-map wow fadeInUp" data-wow-delay=".7s">
    <div id="map" style="height: 400px; width: 100%;"></div>
</div>

                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-5 mt-5 mt-lg-0">
                        <div class="contact-form-items">
                            <div class="contact-title">
                                <h3 class="wow fadeInUp" data-wow-delay=".3s">Fill Up The Form</h3>
                                <p class="wow fadeInUp" data-wow-delay=".5s">Your email address will not be published. Required fields are marked *</p>
                            </div>
                            <form action="{{ route('contacts.store') }}" id="contact-form" method="POST">
    @csrf
    <div class="row g-4">
        <div class="col-lg-12 wow fadeInUp" data-wow-delay=".3s">
            <div class="form-clt">
            <input type="text" name="name" id="name" placeholder="Your Name*" 
            value="{{ Auth::check() ? Auth::user()->name : '' }}" required readonly>
                <div class="icon">
                    <i class="fal fa-user"></i>
                </div>
            </div>
        </div>
        <div class="col-lg-12 wow fadeInUp" data-wow-delay=".5s">
            <div class="form-clt">
            <input type="email" name="email" id="email" placeholder="Email Address*" 
            value="{{ Auth::check() ? Auth::user()->email : '' }}" required readonly>
                <div class="icon">
                    <i class="fal fa-envelope"></i>
                </div>
            </div>
        </div>
        <div class="col-lg-12 wow fadeInUp" data-wow-delay=".7s">
            <div class="form-clt-big form-clt">
                <textarea name="message" id="message" placeholder="Enter Your Message here" required></textarea>
                <div class="icon">
                    <i class="fal fa-edit"></i>
                </div>
            </div>
        </div>
        <!-- Hidden input untuk lokasi -->
        <input type="hidden" name="location" id="location">
        <div class="col-lg-6 wow fadeInUp" data-wow-delay=".8s">
            <button type="submit" class="theme-btn">
                <i class="fal fa-paper-plane"></i> Get In Touch
            </button>
        </div>
    </div>
</form>


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
<!-- Leaflet JavaScript -->
<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
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

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const locationInput = document.getElementById('location');

        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(
                function (position) {
                    const latitude = position.coords.latitude;
                    const longitude = position.coords.longitude;

                    // Simpan lokasi dalam format "latitude,longitude" ke input hidden
                    locationInput.value = `${latitude},${longitude}`;

                    // Inisialisasi peta
                    const map = L.map('map').setView([latitude, longitude], 13);

                    // Tambahkan layer peta OpenStreetMap
                    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
                    }).addTo(map);

                    // Tambahkan marker pada lokasi pengguna
                    L.marker([latitude, longitude]).addTo(map)
                        .bindPopup('You are here.')
                        .openPopup();
                },
                function (error) {
                    console.error('Error obtaining location:', error);
                    alert('Could not get your location. Please enable location services.');
                }
            );
        } else {
            alert('Geolocation is not supported by this browser.');
        }
    });
</script>






    </body>

<!-- Mirrored from devsaidul.com/ui/prinoz-gsap/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 07 Feb 2025 04:35:05 GMT -->
</html>