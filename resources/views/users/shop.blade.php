<!DOCTYPE html>
<html lang="en">
    <!--<< Header Area >>-->
    
<!-- Mirrored from devsaidul.com/ui/prinoz-gsap/shop.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 07 Feb 2025 04:35:45 GMT -->
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
                        <h1>Shop Page</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>


<!-- Shop Page Section Start -->
<section class="shop-page-section fix section-padding section-bg-2">
    <div class="container">
        <div class="row g-4">
            <div class="col-xl-3 col-lg-4 order-2 order-md-1">
            @include('users.component.sidebar', ['categories' => $categories, 'totalProducts' => $totalProducts])
            </div>
            <div class="col-xl-9 col-lg-8 order-1 order-md-2">
              @include('users.component.sorting', ['products' => $products, 'totalProducts' => $totalProducts, 'sortOption' => $sortOption])

                <div class="row">
                    @if($products->isEmpty())
                        <div class="col-12">
                            @if(request('keyword'))
                                <p>No products found for keyword "{{ request('keyword') }}" in the selected category.</p>
                            @else
                                <p>No products available in this category.</p>
                            @endif
                        </div>
                    @else
                    @foreach ($products as $product)
<div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".2s">
    <div class="product-box-items">
        <div class="product-image">
            <img src="{{ asset('storage/' . $product->photo) }}" alt="{{ $product->product_name }}">
            <ul class="product-icon d-grid align-items-center">
                <li>
                    <a href="{{ route('shop-details', ['id' => $product->id]) }}"><i class="fa-sharp fa-regular fa-eye"></i></a>
                </li>
            </ul>
        </div>
        <div class="product-content">
            <h6>
                <a href="{{ route('shop-details', ['id' => $product->id]) }}">
                    {{ $product->product_name }}
                </a>
            </h6>
            <span>${{ number_format($product->price, 2) }}</span>
        </div>
    </div>
</div>
@endforeach

                    @endif
                </div>
                @include('users.component.paginationshop', ['products' => $products])
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

<!-- Mirrored from devsaidul.com/ui/prinoz-gsap/shop.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 07 Feb 2025 04:35:46 GMT -->
</html>