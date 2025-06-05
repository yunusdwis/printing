<!-- Header Section -->
<header class="{{($home ?? false) ? 'header-section' : 'header-section-2'}}">
    <div class="container-fluid">
        <div class="{{($home ?? false) ? 'header-top-wrapper' : 'header-top-wrapper-2'}}">
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
    <div id="header-sticky" class="header-1 {{($home ?? false) ? '' : 'style-2'}}">
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
                                    <li class="has-dropdown active menu-thumb"><a href="{{ url('/home') }}">Home</a></li>
                                    <li><a href="{{ url('/about') }}">About Us</a></li>
                                    <li><a href="{{ url('/shop') }}">Product</a></li>
                                    <li><a href="{{ url('/service') }}">Service</a></li>
                                    <li><a href="{{ url('/blogs') }}">Blog</a></li>
                                    <li><a href="{{ url('/contact') }}">Contact Us</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>

                    <!-- Right Side: Profile + Hotline -->
                    <div class="d-flex justify-content-end align-items-center">
                        <!-- Profile Dropdown -->
                        <div class="dropdown me-3" style="position: relative;">
                            <a href="#" class="dropdown-toggle" aria-expanded="false">
                                <img src="{{ Auth::user()->profile ? asset(Auth::user()->profile) : asset('dist/images/fakers/profile-defult2.jpg') }}"
                                     alt="Foto Profil"
                                     style="width: 35px; height: 35px; border-radius: 50%; object-fit: cover;">
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end"
                                style="min-width: 150px; padding: 0.5rem 0; position: absolute; top: 45px; right: 0; display: none; background: #fff; border: 1px solid #ccc; border-radius: 6px; z-index: 1000; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);">
                                <li>
                                    <a class="dropdown-item d-block text-center py-2" href="{{ url('/profile') }}"
                                       style="text-decoration: none; color: #000;">Profile</a>
                                </li>
                                <li>
                                    <form action="{{ route('logout') }}" method="POST" style="margin: 0;">
                                        @csrf
                                        <button type="submit"
                                                class="dropdown-item d-block text-center py-2"
                                                style="background: none; border: none; width: 100%; text-align: center; color: #000; cursor: pointer;">
                                            Logout
                                        </button>
                                    </form>
                                </li>
                            </ul>
                        </div>

                        <!-- Hotline Content -->
                        <div class="content">
                            <p>HOTLINE</p>
                            <h5><a href="https://wa.me/6281336589373" target="_blank">081336589373</a></h5>
                        </div>


                        <!-- Optional Button Section -->
                        <div class="header-button"></div>

                        <!-- Mobile Hamburger Menu -->
                        <div class="header__hamburger d-xl-none my-auto">
                            <div class="sidebar__toggle">
                                <i class="fas fa-bars"></i>
                            </div>
                        </div>
                    </div>
                    <!-- End Right Side -->
                </div>
            </div>
        </div>
    </div>
</header>

<!-- Dropdown Toggle Script -->
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const toggle = document.querySelector('.dropdown-toggle');
        const menu = document.querySelector('.dropdown-menu');

        toggle.addEventListener('click', function (e) {
            e.preventDefault();
            menu.style.display = (menu.style.display === 'block') ? 'none' : 'block';
        });

        document.addEventListener('click', function (e) {
            if (!toggle.contains(e.target) && !menu.contains(e.target)) {
                menu.style.display = 'none';
            }
        });
    });
</script>
