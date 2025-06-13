<!DOCTYPE html>
<html lang="en">
    <!--<< Header Area >>-->
    
<!-- Mirrored from devsaidul.com/ui/prinoz-gsap/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 07 Feb 2025 04:34:23 GMT -->
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
<style>
        .product-image {
    width: 100%; /* Lebar container gambar */
    height: 200px; /* Tinggi container gambar */
    overflow: hidden; /* Memotong bagian gambar yang lebih besar */
    display: flex;
    justify-content: center;
    align-items: center;
}

.product-image img {
    width: 100%;
    height: 100%;
    object-fit: cover; /* Mengisi container dengan proporsi gambar */
    border-radius: 6px; /* Opsional untuk sudut melengkung */
}
</style>
    <body>

        <!-- Preloader Start -->
        @include('users.component.PreloaderStart')

        <!--<< Mouse Cursor Start >>-->  
        @include('users.component.cursor')

        <!-- Offcanvas Area Start -->
       @include('users.component.offcanvas')

       @include('users.layouts.header', ['home'=>true])

        <!-- Search Area Start -->
        <div class="search-wrap">
            <div class="search-inner">
                <i class="fas fa-times search-close" id="search-close"></i>
                <div class="search-cell">
                    <form method="get">
                        <div class="search-field-holder">
                            <input type="search" class="main-search-input" placeholder="Search...">
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Hero Section Start -->
<section class="hero-section hero-1 fix bg-cover" style="background-image: url('{{ asset('assets/img/hero/hero-bg.jpg') }}');">
    <div class="circle-shape">
        <img src="{{ asset('assets/img/hero/circle-2.png') }}" alt="img">
    </div>
    <div class="vector-shape float-bob-x">
        <img src="{{ asset('assets/img/hero/vector.png') }}" alt="img">
    </div>
    <div class="circle-shape-2">
        <img src="{{ asset('assets/img/hero/circle.png') }}" alt="img">
    </div>
    <div class="arrow-shape float-bob-y">
        <img src="{{ asset('assets/img/hero/arrow-up.png') }}" alt="img">
    </div>
    <div id="scrollDown" class="scroll-down">
        <img src="{{ asset('assets/img/Scroll_Down.png') }}" alt="img">
    </div>
    <div class="container">
        <div class="row g-4 align-items-center">
            <div class="col-lg-6">
                <div class="hero-content">
                    <h6 class="wow fadeInUp">Digital printing Service</h6>
                    <h1 class="wow fadeInUp" data-wow-delay=".3s">
                        Produce Printing,
                        <span>Art & Sticker <img src="{{ asset('assets/img/hero/bar.png') }}" alt="img"></span>.
                    </h1>
                    <p class="wow fadeInUp" data-wow-delay=".5s">
                        Beautiful, customizable template, with a ton of web blocks <br>
                        to create an amazing website that looks
                    </p>
                    <ul class="list wow fadeInUp" data-wow-delay=".7s">
                        <li>
                            <i class="fa-sharp fa-solid fa-check"></i>
                             Top quality prints using the latest technology
                        </li>
                        <li>
                            <i class="fa-sharp fa-solid fa-check"></i>
                             Mix and match colors, sizes, and designs
                        </li>
                    </ul>
                    <a href="https://wa.me/6281336589373" class="theme-btn wow fadeInUp" data-wow-delay=".9s">Custom order</a>
                </div>
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay=".4s">
                <div class="hero-thumb">
                    <img src="{{ asset('assets/img/hero/hero-1.png') }}" alt="hero-img">
                    <div class="information-shape float-bob-x">
                        <img src="{{ asset('assets/img/hero/information.png') }}" alt="img">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

        
        <!-- Feature Section Start -->
<section class="feature-section fix section-padding">
    <div class="container">
        <div class="feature-wrapper">
            <div class="row g-4">
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                    <div class="feature-box-items">
                        <div class="icon">
                            <img src="{{ asset('assets/img/feature/tshirt.png') }}" alt="img">
                        </div>
                        <div class="content">
                            <h3>Pick Products</h3>
                            <p>
                                Print on 100% quality cotton for
                                vibrant finish and all-day
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".5s">
                    <div class="feature-box-items">
                        <div class="icon">
                            <img src="{{ asset('assets/img/feature/tshirt-2.png') }}" alt="img">
                        </div>
                        <div class="content">
                            <h3>Custom & review</h3>
                            <p>
                                Print on 100% quality cotton for
                                vibrant finish and all-day
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".7s">
                    <div class="feature-box-items">
                        <div class="icon">
                            <img src="{{ asset('assets/img/feature/return.png') }}" alt="img">
                        </div>
                        <div class="content">
                            <h3>Ready for ship</h3>
                            <p>
                                Print on 100% quality cotton for <br>
                                vibrant finish and all-day
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

        
        <!-- About Section Start -->
<section class="about-section section-padding pt-0">
    <div class="dot-shape">
        <img src="{{ asset('assets/img/about/dot-1.png') }}" alt="img">
    </div>
    <div class="dot-shape-2">
        <img src="{{ asset('assets/img/about/dot-2.png') }}" alt="img">
    </div>
    <div class="container">
        <div class="about-wrapper">
            <div class="row g-4">
                <div class="col-lg-6">
                    <div class="about-image-items">
                        <div class="circle-shape float-bob-y">
                            <img src="{{ asset('assets/img/about/circle.png') }}" alt="img">
                        </div>
                        <div class="cap-shape float-bob-x">
                            <img src="{{ asset('assets/img/about/cap.png') }}" alt="img">
                        </div>
                        <div class="shape-img">
                            <img src="{{ asset('assets/img/about/shape.png') }}" alt="img">
                        </div>
                        <div class="about-image-1 wow fadeInUp">
                            <img src="{{ asset('assets/img/about/01.jpg') }}" alt="img">
                        </div>
                        <div class="about-image-2">
                            <img src="{{ asset('assets/img/about/02.jpg') }}" alt="img">
                        </div>
                        <div class="about-image-3">
                            <img src="{{ asset('assets/img/about/03.jpg') }}" alt="img">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-content">
                        <div class="section-title">
                            <h6 class="wow fadeInUp">More about us</h6>
                            <h2 class="wow fadeInUp" data-wow-delay=".3s">
                                Create Stunning Print For
                                <span>Your Business <img src="{{ asset('assets/img/line.png') }}" alt="img"></span>
                            </h2>
                        </div>
                        <p class="mt-3 mt-md-0 wow fadeInUp" data-wow-delay=".5s">
                            A full administration printing background. Print shirts for yourself
                            or your online business Beautiful, customizable template,
                        </p>
                        <div class="row g-4">
                            <div class="col-xl-6 col-md-6 col-lg-12 wow fadeInUp" data-wow-delay=".3s">
                                <div class="icon-box-items active">
                                    <div class="icon-items">
                                        <div class="icon">
                                            <img src="{{ asset('assets/img/icon/01.svg') }}" alt="img">
                                        </div>
                                        <h6>Smooth Automation</h6>
                                    </div>
                                    <span>
                                        No matter how much you know
                                        about a particular medical
                                    </span>
                                </div>
                            </div>
                            <div class="col-xl-6 col-md-6 col-lg-12 wow fadeInUp" data-wow-delay=".5s">
                                <div class="icon-box-items">
                                    <div class="icon-items">
                                        <div class="icon bg-2">
                                            <img src="{{ asset('assets/img/icon/02.svg') }}" alt="img">
                                        </div>
                                        <h6>Custom Branding Tools</h6>
                                    </div>
                                    <span>
                                        No matter how much you know
                                        about a particular medical
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="about-author">
                            <a href="about.html" class="theme-btn wow fadeInUp" data-wow-delay=".3s">more about us</a>
                            <div class="author-image wow fadeInUp" data-wow-delay=".5s">
                                <img src="{{ asset('assets/img/about/author.png') }}" alt="author-img">
                                <div class="content">
                                    <span>10m+ Trusted Global clients <img src="{{ asset('assets/img/about/line.png') }}" alt="img"></span>
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
        <div class="marquee-section margin-top-8 mb-80">
            <div class="mycustom-marque">
                <div class="scrolling-wrap">
                    <div class="comm">
                        <div class="cmn-textslide">web design</div>
                        <div><img src="assets/img/marquee-box.png" alt="img"></div>
                        <div class="cmn-textslide">sitcker print</div>
                        <div><img src="assets/img/marquee-box.png" alt="img"></div>
                        <div class="cmn-textslide color-2">Custom Printing</div>
                        <div><img src="assets/img/marquee-box.png" alt="img"></div>
                        <div class="cmn-textslide">Packageing</div>
                        <div><img src="assets/img/marquee-box.png" alt="img"></div>
                    </div>
                    <div class="comm">
                        <div class="cmn-textslide">web design</div>
                        <div><img src="assets/img/marquee-box.png" alt="img"></div>
                        <div class="cmn-textslide">sitcker print</div>
                        <div><img src="assets/img/marquee-box.png" alt="img"></div>
                        <div class="cmn-textslide color-2">Custom Printing</div>
                        <div><img src="assets/img/marquee-box.png" alt="img"></div>
                        <div class="cmn-textslide">Packageing</div>
                        <div><img src="assets/img/marquee-box.png" alt="img"></div>
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
                        <img src="{{ asset('storage/' . $service->main_image) }}" alt="{{ $service->name_service }}"  style="width: 100px; height: 100px; object-fit: cover;">
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



        <!-- Feature Section Start -->
<section class="feature-section section-padding pt-0">
    <div class="container custom-container">
        <div class="feature-wrapper-2">
            <div class="row g-4">
                <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".2s">
                    <div class="feature-box-items-2 text-center">
                        <div class="icon">
                            <img src="{{ asset('assets/img/feature/fulfillment.png') }}" alt="img">
                        </div>
                        <div class="content">
                            <h3>Local fulfillment</h3>
                            <p>
                                Connect your store to Printes, added
                                products, and set your own retail
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".4s">
                    <div class="feature-box-items-2 text-center">
                        <div class="icon bg-2">
                            <img src="{{ asset('assets/img/feature/medal.png') }}" alt="img">
                        </div>
                        <div class="content">
                            <h3>Reliable quality</h3>
                            <p>
                                Connect your store to Printes, added
                                products, and set your own retail
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".6s">
                    <div class="feature-box-items-2 text-center">
                        <div class="icon bg-3">
                            <img src="{{ asset('assets/img/feature/agile.png') }}" alt="img">
                        </div>
                        <div class="content">
                            <h3>Smooth automation</h3>
                            <p>
                                Connect your store to Printes, added
                                products, and set your own retail
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".8s">
                    <div class="feature-box-items-2 text-center">
                        <div class="icon bg-4">
                            <img src="{{ asset('assets/img/feature/order.png') }}" alt="img">
                        </div>
                        <div class="content">
                            <h3>No order minimums</h3>
                            <p>
                                Connect your store to Printes, added
                                products, and set your own retail
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


        <!-- Product Section Start -->
        <section class="product-section section-padding pt-0">
            <div class="shape-image">
                <img src="assets/img/product/shape-1.png" alt="img">
            </div>
            <div class="container">
                <div class="section-title text-center">
                    <h6 class="wow fadeInUp">Digital printing Service</h6>
                    <h2 class="wow fadeInUp" data-wow-delay=".3s">Explore Features Product</h2>
                </div>
                <div class="product-header mt-4 mt-md-0">
                    <ul class="nav">
        @foreach($categories as $index => $category)
            <li class="nav-item wow fadeInUp" data-wow-delay=".{{ 2 + $index * 2 }}s">
                <a href="#{{ Str::slug($category->category_name) }}" 
                   data-bs-toggle="tab" 
                   class="nav-link {{ $index == 0 ? 'active' : '' }}">
                    {{ $category->category_name }}
                </a>
            </li>
        @endforeach
    </ul>
                </div>
                <div class="tab-content">
    @foreach($categories as $index => $category)
        <div id="{{ Str::slug($category->category_name) }}" class="tab-pane fade {{ $index == 0 ? 'show active' : '' }}">
            <div class="row">
                @foreach($category->products as $product)
                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".2s">
                        <div class="product-box-items">
                            <div class="product-image">
                                <img src="{{ asset('storage/' . $product->photo) }}" alt="{{ $product->product_name }}">
                                <ul class="product-icon d-grid align-items-center">
                                    <li>
                                        <a ><i class="fa-sharp fa-regular fa-eye"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="product-content">
                                
                                <h6><a>{{ $product->product_name }}</a></h6>
                                <span>${{ number_format($product->price, 2) }}</span>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    @endforeach
</div>

                <div class="shop-button text-center mt-5 wow fadeInUp" data-wow-delay=".4s">
                    <a href="{{ url('/shop') }}" class="theme-btn">View all Product</a>
                </div>
            </div>
        </section>

        <!-- Portfolio Section Start -->
<section class="portfolio-section section-padding pt-0">
    <div class="portfolio-wrapper">
        <div class="cap-shape float-bob-x">
            <img src="{{ asset('assets/img/portfolio/cap.png') }}" alt="img">
        </div>
        <div class="shape-2 float-bob-y">
            <img src="{{ asset('assets/img/portfolio/shape-2.png') }}" alt="img">
        </div>
        <div class="shape-3">
            <img src="{{ asset('assets/img/portfolio/shape-3.png') }}" alt="img">
        </div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6">
                    <div class="portfolio-content">
                        <div class="section-title">
                            <h6 class="wow fadeInUp">company portfolio</h6>
                            <h2 class="wow fadeInUp" data-wow-delay=".3s">
                                Have A Look Some
                                Exciting Projects
                                Business
                            </h2>
                        </div>
                        <ul class="list-items mt-3 mt-md-0 wow fadeInUp" data-wow-delay=".5s">
                            <li>
                                <i class="fa-regular fa-check"></i>
                                Large paper & stock selection & Unique Print
                            </li>
                            <li>
                                <i class="fa-regular fa-check"></i>
                                Printing programs tailored to your company ne
                            </li>
                            <li>
                                <i class="fa-regular fa-check"></i>
                                Large paper & stock selection & Unique Print
                            </li>
                        </ul>
                        <a href="{{ asset('shop-details.html') }}" class="theme-btn wow fadeInUp" data-wow-delay=".3s">Custom order</a>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="portfolio-image-items">
                        <div class="row g-0">
                            <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".2s">
                                <div class="portfolio-image">
                                    <img src="{{ asset('assets/img/portfolio/01.jpg') }}" alt="img">
                                    <a href="{{ asset('project-details.html') }}" class="icon">
                                        <i class="fa-solid fa-arrow-right"></i>
                                    </a>
                                    <div class="portfolio-content">
                                        <h3><a href="{{ asset('project-details.html') }}">3d Generated Cat</a></h3>
                                        <h4>AI</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".4s">
                                <div class="portfolio-image">
                                    <img src="{{ asset('assets/img/portfolio/02.jpg') }}" alt="img">
                                    <a href="{{ asset('project-details.html') }}" class="icon">
                                        <i class="fa-solid fa-arrow-right"></i>
                                    </a>
                                    <div class="portfolio-content">
                                        <h3><a href="{{ asset('project-details.html') }}">3d Generated Cat</a></h3>
                                        <h4>AI</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".6s">
                                <div class="portfolio-image">
                                    <img src="{{ asset('assets/img/portfolio/03.jpg') }}" alt="img">
                                    <a href="{{ asset('project-details.html') }}" class="icon">
                                        <i class="fa-solid fa-arrow-right"></i>
                                    </a>
                                    <div class="portfolio-content">
                                        <h3><a href="{{ asset('project-details.html') }}">3d Generated Cat</a></h3>
                                        <h4>AI</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".8s">
                                <div class="portfolio-image">
                                    <img src="{{ asset('assets/img/portfolio/04.jpg') }}" alt="img">
                                    <a href="{{ asset('project-details.html') }}" class="icon">
                                        <i class="fa-solid fa-arrow-right"></i>
                                    </a>
                                    <div class="portfolio-content">
                                        <h3><a href="{{ asset('project-details.html') }}">3d Generated Cat</a></h3>
                                        <h4>AI</h4>
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


        <!-- Counter Section Start -->
        <section class="counter-section fix section-padding pt-0">
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
        <section class="about-feature-section fix section-padding pt-0 bg-cover" style="background-image: url('assets/img/feature/bg.png');">
            <div class="product-shape float-bob-x">
                <img src="{{ asset('assets/img/about/product-shape.png') }}" alt="img">
            </div>
            <div class="container">
                <div class="about-feature-wrapper">
                    <div class="row g-4">
                        <div class="col-lg-6">
                            <div class="about-image-items">
                                <div class="about-feature-image">
                                    <img src="{{ asset('assets/img/about/04.jpg') }}" alt="img" class="wow img-custom-anim-top" data-wow-duration="1.5s" data-wow-delay="0.1s">
                                    <div class="about-feature-image reveal image-anime">
                                        <img src="{{ asset('assets/img/about/05.jpg') }}" alt="img">
                                    </div>
                                    <div class="stickers-shape">
                                        <img src="{{ asset('assets/img/feature/StickersV30.png') }}" alt="img">
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
                                        <span><img src="{{ asset('assets/img/line.png') }}" alt="img">Drop Shipping</span> Works
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

        <!-- Feature Section Start -->
        <section class="feature-section-3 section-padding pt-0">
            <div class="container custom-container-2">
            <div class="fearure-wrapper-3">
                    <div class="line-shape">
                        <img src="assets/img/feature/line-shape.png" alt="img">
                    </div>
                <div class="feature-item wow fadeInUp" data-wow-delay=".2s">
                    <div class="feature-icon">
                        <img src="assets/img/feature/natural.png" alt="img">
                    </div>
                    <div class="feature-content">
                        <h5>
                            Certified Print Shop<br>
                            100% Authentic
                            </h5>
                    </div>
                </div>
                <div class="feature-item wow fadeInUp" data-wow-delay=".4s">
                    <div class="feature-icon">
                        <img src="assets/img/feature/Group.png" alt="img">
                    </div>
                    <div class="feature-content">
                        <h5>
                            Fast Delivery From 10<br>
                            Working Days
                            </h5>
                    </div>
                </div>
                <div class="feature-item wow fadeInUp" data-wow-delay=".6s">
                    <div class="feature-icon">
                        <img src="assets/img/feature/printing1.png" alt="img">
                    </div>
                    <div class="feature-content">
                        <h5>
                                Well- Founded Print<br>
                                Top - Service
                            </h5>
                    </div>
                </div>
                <div class="feature-item wow fadeInUp" data-wow-delay=".7s">
                    <div class="feature-icon">
                        <img src="assets/img/feature/Group2.png" alt="img">
                    </div>
                    <div class="feature-content">
                        <h5>
                            Flexible Orders<br>
                            Module
                            </h5>
                    </div>
                </div>
                <div class="feature-item wow fadeInUp" data-wow-delay=".8s">
                    <div class="feature-icon">
                        <img src="assets/img/feature/growth1.png" alt="img">
                    </div>
                    <div class="feature-content">
                        <h5>
                            Simple & Digital<br>
                            Process
                            </h5>
                    </div>
                </div>
            </div>
            </div>
        </section>

        <!-- Pricing Section Start -->
            <section class="pricing-section section-padding pt-0">
        <div class="shape-image float-bob-y">
            <img src="{{ asset('assets/img/pricing-shape.png') }}" alt="img">
        </div>
        <div class="shape-image-2">
            <img src="{{ asset('assets/img/pricing-line.png') }}" alt="img">
        </div>
        <div class="circle-shape">
            <img src="{{ asset('assets/img/circle.png') }}" alt="img">
        </div>
            </section>


        <!-- Testimonial Section Start -->
        

        <!-- Blog Section Start -->
        <section class="blog-section section-padding pt-0 bg-cover" style="background-image: url('assets/img/news/bg.png');">
            <div class="container">
            <div class="section-title text-center">
                <h6 class="bg-5 wow fadeInUp">Digital printing Service</h6>
                <h2 class="wow fadeInUp" data-wow-delay=".3s">
                        Get Update News & Blogs<br>
                        By Company
                    </h2>
            </div>
            <div class="blog-wrapper">
                    <div class="row">
    @foreach ($blogs as $blog)
        <div class="col-xl-4 col-lg-6 col-md-6 wow img-custom-anim-top" data-wow-duration="1.5s" data-wow-delay="0.1s">
            <div class="blog-box-items">
                <div class="blog-image">
    <img src="{{ asset('storage/' . $blog->gambar) }}" alt="img" style="width: 100%; height: 250px; object-fit: cover; display: block;">
    <img src="{{ asset('storage/' . $blog->gambar) }}" alt="img" style="width: 100%; height: 250px; object-fit: cover; display: block;">
</div>

                <div class="blog-content">
                    <span>{{ $blog->judul }}</span>
                    <h3>
                        <a href="{{ route('blog.detail', $blog->id) }}"> <!-- Ganti "#" dengan route detail blog jika sudah ada -->
                           {!! \Illuminate\Support\Str::limit($blog->isi_blog, 150, '...') !!}
                        </a>
                    </h3>
                    <ul class="blog-meta">
                        <li>
                            <i class="fa-regular fa-user"></i>
                            {{ $blog->created_at->format('d M Y') }}
                        </li>
                        <li>
                            <i class="fa-regular fa-comment"></i>
                            Views ({{ $blog->view }})
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    @endforeach
</div>

                    <div class="news-button text-center mt-5 wow fadeInUp" data-wow-delay=".3s">
                        <a href="{{ url('/blogs') }}" class="theme-btn">See all News</a>
                    </div>
            </div>
            </div>
        </section>

    <!-- Cta Section Start -->
    @include('users.layouts.ctasection')

    <!-- Footer Section Start -->
    @include('users.layouts.footer')

    @include('users.component.chatbot')
       
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

<!-- Mirrored from devsaidul.com/ui/prinoz-gsap/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 07 Feb 2025 04:34:56 GMT -->
</html>