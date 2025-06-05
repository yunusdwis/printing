<nav class="side-nav hidden w-[80px] overflow-x-hidden pb-16 pr-5 md:block xl:w-[230px]">
    <a class="flex items-center pt-4 pl-5 intro-x" href="#">
        <img class="w-6" src="dist/images/logo.svg" alt="Midone - Tailwind Admin Dashboard Template">
        <span class="hidden ml-3 text-lg text-white xl:block"> Rubick </span>
    </a>
    <div class="my-6 side-nav__divider"></div>
    <ul>
        <li>
            <a href="{{ url('/rubick-side-menu-dashboard-overview-1-page') }}" 
               class="side-menu {{ Request::is('rubick-side-menu-dashboard-overview-1-page') ? 'side-menu--active' : '' }}">
                <div class="side-menu__icon">
                    <i class="fa-solid fa-house"></i>
                </div>
                <div class="side-menu__title">
                    Dashboard
                </div>
            </a>
        </li>
        <li>
            <a href="{{ url('/rubick-side-menu-users-layout-2-page') }}" 
               class="side-menu {{ Request::is('rubick-side-menu-users-layout-2-page') ? 'side-menu--active' : '' }}">
                <div class="side-menu__icon">
                    <i class="fa-solid fa-wrench"></i>
                </div>
                <div class="side-menu__title">
                    Users
                </div>
            </a>
        </li>
        <li>
            <a href="{{ url('/rubick-side-menu-product-list-page') }}" 
               class="side-menu {{ Request::is('rubick-side-menu-product-list-page') || Request::is('rubick-side-menu-categories-page') ? 'side-menu--active' : '' }}">
                <div class="side-menu__icon">
                    <i class="fa-solid fa-box"></i>
                </div>
                <div class="side-menu__title">
                    Products
                </div>
            </a>
        </li>
        <li>
            <a href="{{ url('/rubick-side-menu-service-list-page') }}" 
               class="side-menu {{ Request::is('rubick-side-menu-service-list-page') ? 'side-menu--active' : '' }}">
                <div class="side-menu__icon">
                    <i class="fa-solid fa-wrench"></i>
                </div>
                <div class="side-menu__title">
                    Services
                </div>
            </a>
        </li>
        <li>
            <a href="{{ url('/rubick-side-menu-blog-layout-2-page') }}" 
               class="side-menu {{ Request::is('rubick-side-menu-blog-layout-2-page') ? 'side-menu--active' : '' }}">
                <div class="side-menu__icon">
                    <i class="fa-solid fa-blog"></i>
                </div>
                <div class="side-menu__title">
                    Blogs
                </div>
            </a>
        </li>
        <li>
            <a href="{{ url('/rubick-side-menu-contact-us-page') }}" 
               class="side-menu {{ Request::is('rubick-side-menu-contact-us-page') ? 'side-menu--active' : '' }}">
                <div class="side-menu__icon">
                    <i class="fa-solid fa-phone"></i>
                </div>
                <div class="side-menu__title">
                    ContactUs
                </div>
            </a>
        </li>
        <li>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="side-menu w-full text-left">
                    <div class="side-menu__icon">
                        <i class="fa-solid fa-right-from-bracket"></i>
                    </div>
                    <div class="side-menu__title">
                        Logout
                    </div>
                </button>
            </form>
        </li>
    </ul>
</nav>
