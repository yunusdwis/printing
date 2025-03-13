<header class="{{($home??false) ? 'header-section':'header-section-2'}}">
    <div class="container-fluid">
        <div class="{{($home??false) ? 'header-top-wrapper':'header-top-wrapper-2'}}">
            <div class="coming-soon">
                <ul>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                </ul>
            </div>
           
        </div>
    </div>
    <!-- Sticky Header -->
    <div id="header-sticky" class="header-1 {{($home??false) ? '':'style-2'}}">
        <div class="container-fluid">
            <div class="mega-menu-wrapper">
                <div class="header-main">
                    <div class="header-left">
                        <div class="logo">
                            <a href="{{ url('/home') }}" class="header-logo">
                                <img src="{{ asset('assets/img/logo/black-logo.svg') }}" alt="logo-img">
                            </a>
                        </div>
                    </div>
                    <div class="mean__menu-wrapper">
                        <div class="main-menu">
                            <nav id="mobile-menu">
                                <ul>
                                    <li class="has-dropdown active menu-thumb">
                                        <a href="{{ url('/') }}">Home</a>
                                    </li>
                                    <li><a href="{{ url('/about') }}">About Us</a></li>
                                    <li> <a href="{{ url('/shop') }}">Product</a></li>
                                    <li> <a href="{{ url('/service') }}">Service</a></li>
                                            <li><a href="{{ url('/blogs') }}">Blog</a></li>
                                    <li><a href="{{ url('/contact') }}">Contact Us</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="d-flex justify-content-end align-items-center">

                        <div class="content">
                            <p>HOTLINE</p>
                            <h5><a href="tel:00190081889">00190081889</a></h5>
                        </div>
                        <div class="header-button">
                           
                        </div>
                        <div class="header__hamburger d-xl-none my-auto">
                            <div class="sidebar__toggle">
                                <i class="fas fa-bars"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- Header Section End -->
