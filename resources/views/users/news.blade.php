<!DOCTYPE html>
<html lang="en">
    <!--<< Header Area >>-->
    
<!-- Mirrored from devsaidul.com/ui/prinoz-gsap/news.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 07 Feb 2025 04:35:41 GMT -->
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
                        <h1>Blog Page</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- News Section Start -->
<section class="news-section-3 section-padding section-bg-2">
        <div class="container">
            <div class="news-standard-wrapper">
                <div class="row g-5">
                    <div class="col-12 col-lg-8">
                    <div class="news-standard-items">
    @if ($tag)
        <h4>Blogs with tag: <strong>{{ $tag }}</strong></h4>
    @endif

    @if ($blogs->isNotEmpty())
        @foreach($blogs as $blog)
            <div class="blog-item mb-6">
                <div class="news-thumb">
                    <img src="{{ asset('storage/' . $blog->gambar) }}" alt="img">
                    <div class="post-cat">
                        {{ $blog->created_at->format('d') }} <br>
                        {{ $blog->created_at->format('M') }}
                    </div>
                </div>
                <div class="news-content">
                    <div class="post-meta">
                        <span><i class="fal fa-calendar-alt"></i>{{ $blog->created_at->format('dS F Y') }}</span>
                    </div>
                    <h3 class="wow fadeInUp" data-wow-delay=".3s">
                        <a href="{{ route('blog.detail', $blog->id) }}">{{ $blog->judul }}</a>
                    </h3>
                    <p>
                        {!! \Illuminate\Support\Str::limit($blog->isi_blog, 150, '...') !!}
                    </p>
                    <a href="{{ route('blog.detail', $blog->id) }}" class="link-btns">
                        Read More <i class="fa-sharp fa-regular fa-arrow-right-long"></i>
                    </a>
                </div>
            </div>
        @endforeach
    @else
        <div class="no-results">
            <p>No blogs found matching your search criteria.</p>
        </div>
    @endif
</div>


<!-- Pagination -->
<div class="page-nav-wrap mt-5 text-center">
    <ul>
        @if ($blogs->onFirstPage())
            <li><span class="page-numbers disabled"><i class="fa-solid fa-chevrons-left"></i></span></li>
        @else
            <li><a class="page-numbers" href="{{ $blogs->previousPageUrl() }}"><i class="fa-solid fa-chevrons-left"></i></a></li>
        @endif

        @foreach ($blogs->getUrlRange(1, $blogs->lastPage()) as $page => $url)
            <li>
                <a class="page-numbers {{ $blogs->currentPage() === $page ? 'active' : '' }}" href="{{ $url }}">{{ $page }}</a>
            </li>
        @endforeach

        @if ($blogs->hasMorePages())
            <li><a class="page-numbers" href="{{ $blogs->nextPageUrl() }}"><i class="fa-solid fa-chevrons-right"></i></a></li>
        @else
            <li><span class="page-numbers disabled"><i class="fa-solid fa-chevrons-right"></i></span></li>
        @endif
    </ul>
</div>

                    </div>
                    <div class="col-12 col-lg-4">
                        <div class="main-sidebar">
                            
<div class="single-sidebar-widget">
    <div class="wid-title">
        <h5>Search Here</h5>
    </div>
    <div class="search_widget">
        <form action="{{ url('blogs') }}" method="GET">
            <input 
                type="text" 
                name="q" 
                placeholder="Search here..." 
                value="{{ request('q') }}" 
            />
            <button type="submit"><i class="fal fa-search"></i></button>
        </form>
    </div>
</div>

                            <div class="single-sidebar-widget">
    <div class="wid-title">
        <h5>Recent Post</h5>
    </div>
    <div class="recent-post-area">
        @foreach($recentPosts as $post)
            <div class="recent-items">
                <div class="recent-thumb">
                    <!-- Pastikan ukuran gambar lebih kecil -->
                    <img src="{{ asset('storage/' . $post->gambar) }}" alt="{{ $post->judul }}" style="width: 80px; height: 80px; object-fit: cover; border-radius: 5px;">
                </div>
                <div class="recent-content">
                    <ul>
                        <li>
                            <i class="fa-solid fa-calendar-days"></i>
                            {{ $post->created_at->format('d/m/Y') }}
                        </li>
                    </ul>
                    <h6>
                        <a href="news-details.html">
                            {{ $post->judul }}
                        </a>
                    </h6>
                </div>
            </div>
        @endforeach
    </div>
</div>

                            
<div class="single-sidebar-widget">
    <div class="wid-title">
        <h5>Popular Tags</h5>
    </div>
    <div class="tagcloud">
        @if($popularTags && $popularTags->isNotEmpty())
            @foreach($popularTags as $tagData)
                <a href="{{ route('blogs.index', ['tag' => $tagData['tag']]) }}">
                    {{ $tagData['tag'] }}
                </a>
            @endforeach
        @else
            <p>No tags available</p>
        @endif
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

<!-- Mirrored from devsaidul.com/ui/prinoz-gsap/news.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 07 Feb 2025 04:35:42 GMT -->
</html>