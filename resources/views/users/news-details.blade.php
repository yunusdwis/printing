<!DOCTYPE html>
<html lang="en">
    <!--<< Header Area >>-->
    
<!-- Mirrored from devsaidul.com/ui/prinoz-gsap/news-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 07 Feb 2025 04:35:47 GMT -->
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
    .blog-item {
    margin-bottom: 40px; 
}

.recent-thumb img {
    width: 100px;
    height: 100px;
    object-fit: cover;
    border-radius: 5px;
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
                        <h1>Blog Details</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- News Section Start -->
    <section class="news-section-3 section-padding section-bg-2">
        <div class="container">
            <div class="news-details-wrapper">
                <div class="row g-5">
                    <div class="col-12 col-lg-8">
                        <div class="single-news-post">
                            <div class="details-image">
                            <img src="{{ asset('storage/' . $blog->gambar) }}" alt="{{ $blog->judul }}">
                            </div>
                            <div class="details-content">
                                <div class="post-meta">
                                    
                                    <span><i class="fal fa-calendar-alt"></i>{{ $blog->created_at->format('dS F Y') }}</span>
                                </div>
                                <h3 class="wow fadeInUp" data-wow-delay=".3s">
                                {{ $blog->judul }}
                                </h3>
                                
                                <p class="mb-4" style="margin-bottom: 2rem;">
    {!! $blog->isi_blog !!}
</p>

<h4 class="wow fadeInUp" data-wow-delay=".3s" style="margin-top: 5rem;">Let Our Investment Management Team</h4>

                                <div class="row g-4 mt-2 justify-content-between align-items-center">
                                    <div class="col-xl-6 col-lg-6">
                                    <ul class="details-list">
                                            <li>
                                                <i class="fa-regular fa-circle-check"></i>
                                                Lorem Ipsum generators on the tend to repeat.
                                            </li>
                                            <li>
                                                <i class="fa-regular fa-circle-check"></i>
                                                If you are going to use a passage.
                                            </li>
                                            <li>
                                                <i class="fa-regular fa-circle-check"></i>
                                                Lorem Ipsum generators on the tend to repeat.
                                            </li>
                                            <li>
                                                <i class="fa-regular fa-circle-check"></i>
                                                Lorem Ipsum generators on the tend to repeat.
                                            </li>
                                            <li>
                                                <i class="fa-regular fa-circle-check"></i>
                                                If you are going to use a passage.
                                            </li>
                                    </ul>
                                    </div>
                                    <div class="col-xl-5 col-lg-6">
    <div class="post-thumb">
        <img src="{{ asset('assets/img/news/post-5.jpg') }}" alt="img">
    </div>
</div>
</div>
<div class="row g-4 mt-4 mb-4">
    <div class="col-lg-6">
        <div class="post-thumb">
            <img src="{{ asset('assets/img/news/post-6.jpg') }}" alt="img">
        </div>
    </div>
    <div class="col-lg-6">
        <div class="post-thumb">
            <img src="{{ asset('assets/img/news/post-7.jpg') }}" alt="img">
        </div>
    </div>
</div>

                                <p class="pt-2">
                                    We have covered many special events such as fireworks, fairs, parades, races, walks, awards
                                    ceremonies, fashion shows, sporting events, and even a memorial service.Lorem ipsum dolor
                                    sit amet, consectetur adipiscing elit. vestibulum rhoncus, dolor eget viverra pretium, dolor
                                    ellus aliquet nunc,
                                </p>
                            </div>
                        </div>
                        <div class="row tag-share-wrap mt-4 mb-5">
                            <div class="col-lg-8 col-12">
                            <div class="tagcloud">
    <span>Tags:</span>
    @if (!empty($tags))
        @foreach ($tags as $tag)
            <a href="{{ url('blog?tag=' . urlencode($tag)) }}">{{ $tag }}</a>
        @endforeach
    @else
        <span>No tags available</span>
    @endif
</div>

                            </div>
                            <div class="col-lg-4 col-12 mt-3 mt-lg-0 text-lg-end">
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4">
                        <div class="main-sidebar">
                            
                            <div class="single-sidebar-widget">
                                <div class="wid-title">
                                    <h5>search here</h5>
                                </div>
                                <div class="search_widget">
                                    <form action="#">
                                        <input type="text" placeholder="Search here...">
                                        <button type="submit"><i class="fal fa-search"></i></button>
                                    </form>
                                </div>
                            </div>
                            <div class="single-sidebar-widget">
                                <div class="wid-title">
                                    <h5>Recent Post</h5>
                                </div>
                                <div class="recent-post-area">
    @foreach ($recentBlogs as $recent)
        <div class="recent-items">
            <div class="recent-thumb">
                <img src="{{ asset('storage/' . $recent->gambar) }}" alt="{{ $recent->judul }}">
            </div>
            <div class="recent-content">
                <ul>
                    <li>
                        <i class="fa-solid fa-calendar-days"></i>
                        {{ $recent->created_at->format('d/m/Y') }}
                    </li>
                </ul>
                <h6>
                    <a href="{{ route('blog.detail', $recent->id) }}">
                        {{ Str::limit($recent->judul, 50) }}
                    </a>
                </h6>
            </div>
        </div>
    @endforeach
</div>

                            </div>
                            
                            <div class="single-sidebar-widget">
                                <div class="wid-title">
                                    <h5>Populer Tags</h5>
                                </div>
                                <div class="tagcloud">
                                    <a href="news-details.html">symphony</a>     
                                    <a href="news-details.html">nokia</a>
                                    <a href="news-details.html">nokia</a>
                                    <a href="news-details.html">Samsung</a>
                                    <a href="news-details.html">Alcatel</a>
                                    <a href="news-details.html">Oppos</a>
                                    <a href="news-details.html">landing</a>
                                    <a href="news-details.html">Oppos</a>
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

<!-- Mirrored from devsaidul.com/ui/prinoz-gsap/news-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 07 Feb 2025 04:35:49 GMT -->
</html>