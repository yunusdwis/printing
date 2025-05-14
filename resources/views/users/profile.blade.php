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
                        <h1>Profile Page</h1>
                    </div>
                </div>
            </div>
        </div>
</div>

<!-- Profile Form Section Start -->
<section class="contact-section section-padding">
    <div class="container">
        <div class="section-title center">
            <h2>Informasi Profil</h2>
            <p>Perbarui data pribadi Anda di bawah ini</p>
        </div>

        <div class="row justify-content-center mb-4">
            <div class="col-lg-4 text-center">
                <label for="profile_picture" style="cursor: pointer;">
                <img id="preview_image"
     src="{{ $user->profile ? asset('storage/' . $user->profile) : asset('dist/images/fakers/profile-defult2.jpg') }}"
     alt="Foto Profil"
     style="width: 150px; height: 150px; border-radius: 50%; object-fit: cover; border: 3px solid #306EE8;">

                </label>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-8">
                <form action="{{ route('profile.update') }}" method="POST" class="contact-form" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-12 mb-3">
                            <input type="file" name="profile_picture" id="profile_picture" style="display: none;" accept="image/*">
                        </div>

                        <div class="col-md-12 mb-3">
                            <label for="username">Username</label>
                            <input type="text" id="username" name="username" class="form-control" placeholder="Username" value="{{ old('username', $user->name) }}" required>
                        </div>

                        <div class="col-md-12 mb-3">
                            <label for="email">Email</label>
                            <input type="email" id="email" name="email" class="form-control" placeholder="Email" value="{{ old('email', $user->email) }}" required>
                        </div>

                        <div class="col-md-12 mb-3">
                            <label for="password">Password Baru</label>
                            <div class="input-group">
                                <input type="text" class="form-control" id="password" value="**********" readonly>
                                <div class="input-group-append">
                                    <a href="{{ route('password.request') }}" class="btn btn-outline-primary" style="border-color: #306EE8; color: #306EE8;">
                                        Ubah Password
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12 text-center">
                            <button type="submit" class="theme-btn">Simpan Perubahan</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- Profile Form Section End -->




    

    

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
document.getElementById('profile_picture').addEventListener('change', function (event) {
    const file = event.target.files[0];
    const preview = document.getElementById('preview_image');

    if (file && file.type.startsWith('image/')) {
        const reader = new FileReader();
        reader.onload = function (e) {
            preview.src = e.target.result;
        };
        reader.readAsDataURL(file);
    }
});
</script>




    </body>

<!-- Mirrored from devsaidul.com/ui/prinoz-gsap/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 07 Feb 2025 04:35:05 GMT -->
</html>