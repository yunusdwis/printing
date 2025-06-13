<!DOCTYPE html>
<html lang="en">
    <!--<< Header Area >>-->
    
<!-- Mirrored from devsaidul.com/ui/prinoz-gsap/shop-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 07 Feb 2025 04:35:46 GMT -->
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
                        <h1>Product Details</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Product Details Section Start -->
    <section class="product-details-section section-padding section-bg-2">
        <div class="container">
            <div class="product-details-wrapper">
                <div class="row g-5">
                    <div class="col-lg-6">
                        <div class="product-image-items">
                            <div class="tab-content" id="nav-tab-Content">
                                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                                    <div class="product-image">
                                    <img src="{{ asset('storage/' . $product->photo) }}" alt="{{ $product->product_name }}">
                                        <a href="assets/img/product/details-1.jpg" class="icon img-popup">
                                            <i class="far fa-search"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                                    <div class="product-image">
                                    <img src="{{ asset('assets/img/product/details-1.jpg') }}" alt="img">
                                        <a href="assets/img/product/details-1.jpg" class="icon img-popup">
                                            <i class="far fa-search"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                                    <div class="product-image">
                                    <img src="{{ asset('assets/img/product/details-1.jpg') }}" alt="Product Details">
                                        <a href="assets/img/product/details-1.jpg" class="icon img-popup">
                                            <i class="far fa-search"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="nav-contact2" role="tabpanel" aria-labelledby="nav-contact-tab2">
                                    <div class="product-image">
                                    <img src="{{ asset('assets/img/product/details-1.jpg') }}" alt="Product Details">
                                        <a href="assets/img/product/details-1.jpg" class="icon img-popup">
                                            <i class="far fa-search"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="product-details-content">
                            <div class="star pb-4">
                                
                            </div>
                            <h3 class="pb-4 split-text right">{{ $product->product_name }}</h3>
                            <p class="mb-4">
                                There are many variations of passages of Lorem Ipsum available, but majority <br>
                                have suffered teration in some form, by injected humour, or randomised
                            </p>
                            <div class="price-list d-flex align-items-center">
                            <span>${{ number_format($product->price, 2) }}</span>
                                
                            </div>
                            <div class="cart-wrp">
                                
                               
                            </div>
            
                            <h6 class="details-info"><span></span> <a href="shop-details.html"></a></h6>
                            <h6 class="details-info"><span>Categories:</span> <a href="shop-details.html">{{ $product->category->category_name }}</a></h6>
                            <h6 class="details-info"><span>Tags:</span>@if ($product->tag)
                @foreach (explode(',', $product->tag) as $tag)
                    <a href="shop-details.html">{{ $tag }}</a>@if (!$loop->last), @endif
                @endforeach
            @else
                <span>No tags</span>
            @endif</h6>
                        </div>
                    </div>
                </div>
                <div class="single-tab">
                    <ul class="nav mb-4">
                        <li class="nav-item">
                            <a href="#description" data-bs-toggle="tab" class="nav-link active">
                            Description
                            </a>
                        </li>
                        
                    </ul>
                    <div class="tab-content">
                        <div id="description" class="tab-pane fade show active">
                            <div class="description-items">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="description-content">
                                            <h3 class="wow fadeInUp" data-wow-delay=".3s">Description dari {{ $product->product_name }}</h3>
                                            <p>
    {{ $product->description ?? 'Deskripsi tidak tersedia.' }}
</p>
                                            <h3 class="mb-0 mt-5 split-text right">More Details</h3>
                                            <div class="description-list-items d-flex">
                                                <ul class="description-list">
                                                    <li>
                                                        <i class="fal fa-check"></i>
                                                        <span>Lorem Ipsum is simply dummy text of the printing and typesetting industry</span>
                                                    </li>
                                                    <li>
                                                        <i class="fal fa-check"></i>
                                                        <span>Lorem Ipsum has been the ‘s standard dummy text. Lorem Ipsumum is simply dummy text.</span>
                                                    </li>
                                                    <li>
                                                        <i class="fal fa-check"></i>
                                                        <span>type here your detail one by one li more add</span>
                                                    </li>
                                                    <li>
                                                        <i class="fal fa-check"></i>
                                                        <span>has been the industry’s standard dummy text ever since. Lorem Ips</span>
                                                    </li>
                                                </ul>
                                                <ul class="description-list">
                                                    <li>
                                                        <i class="fal fa-check"></i>
                                                        <span>Lorem Ipsum generators on the tend to repeat.</span>
                                                    </li>
                                                    <li>
                                                        <i class="fal fa-check"></i>
                                                        <span> If you are going to use a passage.</span>
                                                    </li>
                                                    <li>
                                                        <i class="fal fa-check"></i>
                                                        <span> Lorem Ipsum generators on the tend to repeat.</span>
                                                    </li>
                                                    <li>
                                                        <i class="fal fa-check"></i>
                                                        <span> Lorem Ipsum generators on the tend to repeat.</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="additional" class="tab-pane fade">
                            <div class="table-responsive">
                                
                            </div>
                        </div>
                        <div id="review" class="tab-pane fade">
                            <div class="review-items">
                                <div class="admin-items d-flex flex-wrap flex-md-nowrap align-items-center pb-4">
                                    <div class="admin-img pb-4 pb-md-0 me-4">
                                    <img src="{{ asset('assets/img/review/01.jpg') }}" alt="Review Image">
                                    </div>
                                    <div class="content p-4">
                                        <div class="head-content pb-1 d-flex flex-wrap justify-content-between">
                                            <h5>miklos salsa<span>27June 2024 at 5.44pm</span></h5>
                                            <div class="star">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                        </div>
                                        <p>
                                            Lorem ipsum dolor sit amet consectetur adipiscing elit. Curabitur vulputate vestibulum Phasellus rhoncus dolor eget viverra pretium.Curabitur vulputate vestibulum Phasellus rhoncus dolor eget viverra pretium.
                                        </p>
                                    </div>
                                </div>
                                <div class="admin-items d-flex flex-wrap flex-md-nowrap align-items-center pb-4">
                                    <div class="admin-img pb-4 pb-md-0 me-4">
                                    <img src="{{ asset('assets/img/review/02.jpg') }}" alt="Review Image">
                                    </div>
                                    <div class="content p-4">
                                        <div class="head-content pb-1 d-flex flex-wrap justify-content-between">
                                            <h5>Ethan Turner <span>27June 2024 at 5.44pm</span></h5>
                                            <div class="star">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                        </div>
                                        <p>
                                            Lorem ipsum dolor sit amet consectetur adipiscing elit. Curabitur vulputate vestibulum Phasellus rhoncus dolor eget viverra pretium.Curabitur vulputate vestibulum Phasellus rhoncus dolor eget viverra pretium.
                                        </p>
                                    </div>
                                </div>
                                <div class="admin-items d-flex flex-wrap flex-md-nowrap align-items-center pb-4">
                                    <div class="admin-img pb-4 pb-md-0 me-4">
                                    <img src="{{ asset('assets/img/review/01.jpg') }}" alt="Review Image">
                                    </div>
                                    <div class="content p-4">
                                        <div class="head-content pb-1 d-flex flex-wrap justify-content-between">
                                            <h5>miklos salsa<span>27June 2024 at 5.44pm</span></h5>
                                            <div class="star">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                        </div>
                                        <p>
                                            Lorem ipsum dolor sit amet consectetur adipiscing elit. Curabitur vulputate vestibulum Phasellus rhoncus dolor eget viverra pretium.Curabitur vulputate vestibulum Phasellus rhoncus dolor eget viverra pretium.
                                        </p>
                                    </div>
                                </div>
                                <div class="admin-items d-flex flex-wrap flex-md-nowrap align-items-center pb-4">
                                    <div class="admin-img pb-4 pb-md-0 me-4">
                                    <img src="{{ asset('assets/img/review/02.jpg') }}" alt="Review Image">
                                    </div>
                                    <div class="content p-4">
                                        <div class="head-content pb-1 d-flex flex-wrap justify-content-between">
                                            <h5>Ethan Turner <span>27June 2024 at 5.44pm</span></h5>
                                            <div class="star">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                        </div>
                                        <p>
                                            Lorem ipsum dolor sit amet consectetur adipiscing elit. Curabitur vulputate vestibulum Phasellus rhoncus dolor eget viverra pretium.Curabitur vulputate vestibulum Phasellus rhoncus dolor eget viverra pretium.
                                        </p>
                                    </div>
                                </div>
                                <div class="review-title mt-5 py-15 mb-30">
                                    <h4>add a review</h4>
                                    <div class="rate-now d-flex align-items-center">
                                        <p>Rate this product? *</p>
                                        <div class="star">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="review-form">
                                    <form action="#" id="contact-form" method="POST">
                                        <div class="row g-4">
                                            <div class="col-lg-6">
                                                <div class="form-clt">
                                                    <input type="text" name="name" id="name" placeholder="Full Name">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-clt">
                                                    <input type="text" name="email" id="email" placeholder="email addres">
                                                </div>
                                            </div>
                                            <div class="col-lg-12 wow fadeInUp" data-wow-delay=".8">
                                                <div class="form-clt-big form-clt">
                                                    <textarea name="message" id="message" placeholder="message"></textarea> 
                                                </div>
                                            </div>
                                            <div class="col-lg-6 wow fadeInUp" data-wow-delay=".9">
                                                <button type="submit" class="theme-btn">
                                                post Submit
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Product Section Start -->
    <section class="feature-product-section-3 section-padding section-bg-2 pt-0 margin-top-5 fix">
        <div class="right-shape">
        <img src="{{ asset('assets/img/feature-product/stickers.png') }}" alt="Stickers">
        </div>
        <div class="container">
            <div class="section-title-area">
                <div class="section-title">
                    <h6 class="bg-4 wow fadeInUp">Digital printing Service</h6>
                    <h2 class="wow fadeInUp" data-wow-delay=".3s">Featured Products</h2>
                </div>
                <div class="product-header style-2">
                    <ul class="nav">
                        <li class="nav-item wow fadeInUp" data-wow-delay=".2s">
                            <a href="#Seller" data-bs-toggle="tab" class="nav-link">
                                Best Seller 
                            </a>
                        </li>
                        <li class="nav-item wow fadeInUp" data-wow-delay=".4s">
                            <a href="#Top" data-bs-toggle="tab" class="nav-link">
                                Top
                            </a>
                        </li>
                        <li class="nav-item wow fadeInUp" data-wow-delay=".5s">
                            <a href="#Arrivals" data-bs-toggle="tab" class="nav-link active">
                                New Arrivals
                            </a>
                        </li>
                        <li class="nav-item wow fadeInUp" data-wow-delay=".6s">
                            <a href="#rating" data-bs-toggle="tab" class="nav-link">
                                top rating
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="tab-content">
                <div id="Seller" class="tab-pane fade">
                    <div class="row">
                        <div class="col-xl-3 col-lg-4 col-md-6">
                            <div class="feature-product-items-2">
                                <div class="product-image">
                                <img src="{{ asset('assets/img/feature-product/01.jpg') }}" alt="Feature Product">
                                    <ul class="product-icon d-grid align-items-center">
                                        <li>
                                            <a href="shop-cart.html"><i class="fa-sharp fa-regular fa-eye"></i></a>
                                        </li>
                                        <li>
                                            <a href="shop-cart.html">
                                                <i class="fa-regular fa-star"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="shop-details.html"><i class="fa-regular fa-arrow-up-arrow-down"></i></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="product-content">
                                    <ul class="price-list">
                                        <li>
                                            <span>-5%</span>
                                        </li>
                                        <li>$30.52</li>
                                        <li>$28.52</li>
                                    </ul>
                                    <h4><a href="shop-details.html">ruti with beef slice</a></h4>
                                    <ul class="dot-list">
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6">
                            <div class="feature-product-items-2">
                                <div class="product-image">
                                <img src="{{ asset('assets/img/feature-product/02.jpg') }}" alt="Feature Product">
                                    <ul class="product-icon d-grid align-items-center">
                                        <li>
                                            <a href="shop-cart.html"><i class="fa-sharp fa-regular fa-eye"></i></a>
                                        </li>
                                        <li>
                                            <a href="shop-cart.html">
                                                <i class="fa-regular fa-star"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="shop-details.html"><i class="fa-regular fa-arrow-up-arrow-down"></i></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="product-content">
                                    <ul class="price-list">
                                        <li>
                                            <span>-5%</span>
                                        </li>
                                        <li>$30.52</li>
                                        <li>$28.52</li>
                                    </ul>
                                    <h4><a href="shop-details.html">ruti with beef slice</a></h4>
                                    <ul class="dot-list">
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6">
                            <div class="feature-product-items-2">
                                <div class="product-image">
                                <img src="{{ asset('assets/img/feature-product/03.jpg') }}" alt="Feature Product">
                                    <ul class="product-icon d-grid align-items-center">
                                        <li>
                                            <a href="shop-cart.html"><i class="fa-sharp fa-regular fa-eye"></i></a>
                                        </li>
                                        <li>
                                            <a href="shop-cart.html">
                                                <i class="fa-regular fa-star"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="shop-details.html"><i class="fa-regular fa-arrow-up-arrow-down"></i></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="product-content">
                                    <ul class="price-list">
                                        <li>
                                            <span>-5%</span>
                                        </li>
                                        <li>$30.52</li>
                                        <li>$28.52</li>
                                    </ul>
                                    <h4><a href="shop-details.html">ruti with beef slice</a></h4>
                                    <ul class="dot-list">
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6">
                            <div class="feature-product-items-2">
                                <div class="product-image">
                                <img src="{{ asset('assets/img/feature-product/04.jpg') }}" alt="Feature Product">
                                    <ul class="product-icon d-grid align-items-center">
                                        <li>
                                            <a href="shop-cart.html"><i class="fa-sharp fa-regular fa-eye"></i></a>
                                        </li>
                                        <li>
                                            <a href="shop-cart.html">
                                                <i class="fa-regular fa-star"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="shop-details.html"><i class="fa-regular fa-arrow-up-arrow-down"></i></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="product-content">
                                    <ul class="price-list">
                                        <li>
                                            <span>-5%</span>
                                        </li>
                                        <li>$30.52</li>
                                        <li>$28.52</li>
                                    </ul>
                                    <h4><a href="shop-details.html">ruti with beef slice</a></h4>
                                    <ul class="dot-list">
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="Top" class="tab-pane fade">
                    <div class="row">
                        <div class="col-xl-3 col-lg-4 col-md-6">
                            <div class="feature-product-items-2">
                                <div class="product-image">
                                <img src="{{ asset('assets/img/feature-product/01.jpg') }}" alt="Feature Product">
                                    <ul class="product-icon d-grid align-items-center">
                                        <li>
                                            <a href="shop-cart.html"><i class="fa-sharp fa-regular fa-eye"></i></a>
                                        </li>
                                        <li>
                                            <a href="shop-cart.html">
                                                <i class="fa-regular fa-star"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="shop-details.html"><i class="fa-regular fa-arrow-up-arrow-down"></i></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="product-content">
                                    <ul class="price-list">
                                        <li>
                                            <span>-5%</span>
                                        </li>
                                        <li>$30.52</li>
                                        <li>$28.52</li>
                                    </ul>
                                    <h4><a href="shop-details.html">ruti with beef slice</a></h4>
                                    <ul class="dot-list">
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6">
                            <div class="feature-product-items-2">
                                <div class="product-image">
                                <img src="{{ asset('assets/img/feature-product/02.jpg') }}" alt="Feature Product">
                                    <ul class="product-icon d-grid align-items-center">
                                        <li>
                                            <a href="shop-cart.html"><i class="fa-sharp fa-regular fa-eye"></i></a>
                                        </li>
                                        <li>
                                            <a href="shop-cart.html">
                                                <i class="fa-regular fa-star"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="shop-details.html"><i class="fa-regular fa-arrow-up-arrow-down"></i></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="product-content">
                                    <ul class="price-list">
                                        <li>
                                            <span>-5%</span>
                                        </li>
                                        <li>$30.52</li>
                                        <li>$28.52</li>
                                    </ul>
                                    <h4><a href="shop-details.html">ruti with beef slice</a></h4>
                                    <ul class="dot-list">
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6">
                            <div class="feature-product-items-2">
                                <div class="product-image">
                                <img src="{{ asset('assets/img/feature-product/03.jpg') }}" alt="Feature Product">
                                    <ul class="product-icon d-grid align-items-center">
                                        <li>
                                            <a href="shop-cart.html"><i class="fa-sharp fa-regular fa-eye"></i></a>
                                        </li>
                                        <li>
                                            <a href="shop-cart.html">
                                                <i class="fa-regular fa-star"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="shop-details.html"><i class="fa-regular fa-arrow-up-arrow-down"></i></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="product-content">
                                    <ul class="price-list">
                                        <li>
                                            <span>-5%</span>
                                        </li>
                                        <li>$30.52</li>
                                        <li>$28.52</li>
                                    </ul>
                                    <h4><a href="shop-details.html">ruti with beef slice</a></h4>
                                    <ul class="dot-list">
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6">
                            <div class="feature-product-items-2">
                                <div class="product-image">
                                <img src="{{ asset('assets/img/feature-product/04.jpg') }}" alt="Feature Product">
                                    <ul class="product-icon d-grid align-items-center">
                                        <li>
                                            <a href="shop-cart.html"><i class="fa-sharp fa-regular fa-eye"></i></a>
                                        </li>
                                        <li>
                                            <a href="shop-cart.html">
                                                <i class="fa-regular fa-star"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="shop-details.html"><i class="fa-regular fa-arrow-up-arrow-down"></i></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="product-content">
                                    <ul class="price-list">
                                        <li>
                                            <span>-5%</span>
                                        </li>
                                        <li>$30.52</li>
                                        <li>$28.52</li>
                                    </ul>
                                    <h4><a href="shop-details.html">ruti with beef slice</a></h4>
                                    <ul class="dot-list">
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="Arrivals" class="tab-pane fade show active">
                    <div class="row">
                        <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".2s">
                            <div class="feature-product-items-2">
                                <div class="product-image">
                                <img src="{{ asset('assets/img/feature-product/01.jpg') }}" alt="Feature Product">
                                    <ul class="product-icon d-grid align-items-center">
                                        <li>
                                            <a href="shop-cart.html"><i class="fa-sharp fa-regular fa-eye"></i></a>
                                        </li>
                                        <li>
                                            <a href="shop-cart.html">
                                                <i class="fa-regular fa-star"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="shop-details.html"><i class="fa-regular fa-arrow-up-arrow-down"></i></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="product-content">
                                    <ul class="price-list">
                                        <li>
                                            <span>-5%</span>
                                        </li>
                                        <li>$30.52</li>
                                        <li>$28.52</li>
                                    </ul>
                                    <h4><a href="shop-details.html">ruti with beef slice</a></h4>
                                    <ul class="dot-list">
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".4s">
                            <div class="feature-product-items-2">
                                <div class="product-image">
                                <img src="{{ asset('assets/img/feature-product/02.jpg') }}" alt="Feature Product">
                                    <ul class="product-icon d-grid align-items-center">
                                        <li>
                                            <a href="shop-cart.html"><i class="fa-sharp fa-regular fa-eye"></i></a>
                                        </li>
                                        <li>
                                            <a href="shop-cart.html">
                                                <i class="fa-regular fa-star"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="shop-details.html"><i class="fa-regular fa-arrow-up-arrow-down"></i></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="product-content">
                                    <ul class="price-list">
                                        <li>
                                            <span>-5%</span>
                                        </li>
                                        <li>$30.52</li>
                                        <li>$28.52</li>
                                    </ul>
                                    <h4><a href="shop-details.html">ruti with beef slice</a></h4>
                                    <ul class="dot-list">
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".6s">
                            <div class="feature-product-items-2">
                                <div class="product-image">
                                <img src="{{ asset('assets/img/feature-product/03.jpg') }}" alt="Feature Product">
                                    <ul class="product-icon d-grid align-items-center">
                                        <li>
                                            <a href="shop-cart.html"><i class="fa-sharp fa-regular fa-eye"></i></a>
                                        </li>
                                        <li>
                                            <a href="shop-cart.html">
                                                <i class="fa-regular fa-star"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="shop-details.html"><i class="fa-regular fa-arrow-up-arrow-down"></i></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="product-content">
                                    <ul class="price-list">
                                        <li>
                                            <span>-5%</span>
                                        </li>
                                        <li>$30.52</li>
                                        <li>$28.52</li>
                                    </ul>
                                    <h4><a href="shop-details.html">ruti with beef slice</a></h4>
                                    <ul class="dot-list">
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".8s">
                            <div class="feature-product-items-2">
                                <div class="product-image">
                                <img src="{{ asset('assets/img/feature-product/04.jpg') }}" alt="Feature Product">
                                    <ul class="product-icon d-grid align-items-center">
                                        <li>
                                            <a href="shop-cart.html"><i class="fa-sharp fa-regular fa-eye"></i></a>
                                        </li>
                                        <li>
                                            <a href="shop-cart.html">
                                                <i class="fa-regular fa-star"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="shop-details.html"><i class="fa-regular fa-arrow-up-arrow-down"></i></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="product-content">
                                    <ul class="price-list">
                                        <li>
                                            <span>-5%</span>
                                        </li>
                                        <li>$30.52</li>
                                        <li>$28.52</li>
                                    </ul>
                                    <h4><a href="shop-details.html">ruti with beef slice</a></h4>
                                    <ul class="dot-list">
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="rating" class="tab-pane fade">
                    <div class="row">
                        <div class="col-xl-3 col-lg-4 col-md-6">
                            <div class="feature-product-items-2">
                                <div class="product-image">
                                <img src="{{ asset('assets/img/feature-product/01.jpg') }}" alt="Feature Product">
                                    <ul class="product-icon d-grid align-items-center">
                                        <li>
                                            <a href="shop-cart.html"><i class="fa-sharp fa-regular fa-eye"></i></a>
                                        </li>
                                        <li>
                                            <a href="shop-cart.html">
                                                <i class="fa-regular fa-star"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="shop-details.html"><i class="fa-regular fa-arrow-up-arrow-down"></i></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="product-content">
                                    <ul class="price-list">
                                        <li>
                                            <span>-5%</span>
                                        </li>
                                        <li>$30.52</li>
                                        <li>$28.52</li>
                                    </ul>
                                    <h4><a href="shop-details.html">ruti with beef slice</a></h4>
                                    <ul class="dot-list">
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6">
                            <div class="feature-product-items-2">
                                <div class="product-image">
                                <img src="{{ asset('assets/img/feature-product/02.jpg') }}" alt="Feature Product">
                                    <ul class="product-icon d-grid align-items-center">
                                        <li>
                                            <a href="shop-cart.html"><i class="fa-sharp fa-regular fa-eye"></i></a>
                                        </li>
                                        <li>
                                            <a href="shop-cart.html">
                                                <i class="fa-regular fa-star"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="shop-details.html"><i class="fa-regular fa-arrow-up-arrow-down"></i></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="product-content">
                                    <ul class="price-list">
                                        <li>
                                            <span>-5%</span>
                                        </li>
                                        <li>$30.52</li>
                                        <li>$28.52</li>
                                    </ul>
                                    <h4><a href="shop-details.html">ruti with beef slice</a></h4>
                                    <ul class="dot-list">
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6">
                            <div class="feature-product-items-2">
                                <div class="product-image">
                                <img src="{{ asset('assets/img/feature-product/03.jpg') }}" alt="Feature Product">
                                    <ul class="product-icon d-grid align-items-center">
                                        <li>
                                            <a href="shop-cart.html"><i class="fa-sharp fa-regular fa-eye"></i></a>
                                        </li>
                                        <li>
                                            <a href="shop-cart.html">
                                                <i class="fa-regular fa-star"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="shop-details.html"><i class="fa-regular fa-arrow-up-arrow-down"></i></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="product-content">
                                    <ul class="price-list">
                                        <li>
                                            <span>-5%</span>
                                        </li>
                                        <li>$30.52</li>
                                        <li>$28.52</li>
                                    </ul>
                                    <h4><a href="shop-details.html">ruti with beef slice</a></h4>
                                    <ul class="dot-list">
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6">
                            <div class="feature-product-items-2">
                                <div class="product-image">
                                <img src="{{ asset('assets/img/feature-product/04.jpg') }}" alt="Feature Product">
                                    <ul class="product-icon d-grid align-items-center">
                                        <li>
                                            <a href="shop-cart.html"><i class="fa-sharp fa-regular fa-eye"></i></a>
                                        </li>
                                        <li>
                                            <a href="shop-cart.html">
                                                <i class="fa-regular fa-star"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="shop-details.html"><i class="fa-regular fa-arrow-up-arrow-down"></i></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="product-content">
                                    <ul class="price-list">
                                        <li>
                                            <span>-5%</span>
                                        </li>
                                        <li>$30.52</li>
                                        <li>$28.52</li>
                                    </ul>
                                    <h4><a href="shop-details.html">ruti with beef slice</a></h4>
                                    <ul class="dot-list">
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                    </ul>
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

<!-- Mirrored from devsaidul.com/ui/prinoz-gsap/shop-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 07 Feb 2025 04:35:47 GMT -->
</html>