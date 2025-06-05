<!DOCTYPE html>
<html lang="en">
    <!--<< Header Area >>-->
    
<!-- Mirrored from devsaidul.com/ui/prinoz-gsap/shop-cart.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 07 Feb 2025 04:35:47 GMT -->
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
        <link rel="shortcut icon" href="assets/img/favicon.svg">
        <!--<< Bootstrap min.css >>-->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <!--<< All Min Css >>-->
        <link rel="stylesheet" href="assets/css/all.min.css">
        <!--<< Animate.css >>-->
        <link rel="stylesheet" href="assets/css/animate.css">
        <!--<< Magnific Popup.css >>-->
        <link rel="stylesheet" href="assets/css/magnific-popup.css">
        <!--<< MeanMenu.css >>-->
        <link rel="stylesheet" href="assets/css/meanmenu.css">
        <!--<< Swiper Bundle.css >>-->
        <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">
        <!--<< Nice Select.css >>-->
        <link rel="stylesheet" href="assets/css/nice-select.css">
        <!--<< Color.css >>-->
        <link rel="stylesheet" href="assets/css/color.css">
        <!--<< Main.css >>-->
        <link rel="stylesheet" href="assets/css/main.css">
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
                        <h1>shop cart</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Shop Cart Section Start -->
    <section class="cart-section section-padding section-bg-2">
        <div class="container">
            <div class="main-cart-wrapper">
                <div class="row">
                    <div class="col-12">
                        <div class="cart-wrapper">
                            <div class="cart-items-wrapper">
                                <table>
                                    <thead>
                                        <tr>
                                            <th>Product</th>
                                            <th>Price</th>
                                            <th>Quantity</th>
                                            <th>Subtotal</th>
                                            <th>Remove</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="cart-item">
                                            <td class="cart-item-info">
                                                <img src="assets/img/product/cart.jpg" alt="Image">
                                            </td>
                                            <td class="cart-item-price">
                                                $ <span class="base-price">325.00</span>
                                            </td>
                                            <td>
                                                <div class="cart-item-quantity">
                                                    <span class="cart-item-quantity-amount"></span>
                                                    <div class="cart-item-quantity-controller">
                                                        <a href="#0" class="cart-increment">
                                                        <i class="far fa-caret-up"></i>
                                                        </a>
                                                        <a href="#0" class="cart-decrement">
                                                        <i class="far fa-caret-down"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="cart-item-price">
                                                $ <span class="total-price"></span>
                                            </td>
                                            <td class="cart-item-remove">
                                                <a href="#0">
                                                <i class="fas fa-times"></i>
                                            </a>
                                            </td>
                                        </tr>
                                        
                                    </tbody>
                                </table>
                            </div>
                            <div class="cart-wrapper-footer">
                                <form action="https://devsaidul.com/ui/prinoz-gsap/shop-cart.html">
                                    <input type="text" name="promo-code" id="promoCode" placeholder="Promo code">
                                    <button type="submit" class="theme-btn">
                                        <span>Apply Code</span>
                                    </button>
                                </form>
                                <a href="shop-cart.html" class="theme-btn">
                                    <span>Update Cart</span>
                                </a>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6"></div>
                    <div class="col-xl-6">
                        <div class="cart-pragh-box">
                            <div class="cart-graph">
                                <h4>Cart Total</h4>
                                <ul>
                                    <li>
                                        <span>Subtotal</span>
                                        <span>$510.00</span>
                                    </li>
                                    <li>
                                        <span>Shipping</span>
                                        <span>$10</span>
                                    </li>
                                    <li>
                                        <span>Total</span>
                                        <span>$510.00</span>
                                    </li>
                                </ul>
                                <div class="chck">
                                    <a href="checkout.html" class="theme-btn">
                                        <span>Checkout</span>
                                    </a>
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
       <script src="assets/js/jquery-3.7.1.min.js"></script>
       <!--<< Viewport Js >>-->
       <script src="assets/js/viewport.jquery.js"></script>
       <!--<< Bootstrap Js >>-->
       <script src="assets/js/bootstrap.bundle.min.js"></script>
       <!--<< Gsap Js >>-->
       <script src="assets/js/gsap/gsap.js"></script>
       <!--<< Gsap Scroll To Pluging Js >>-->
       <script src="assets/js/gsap/gsap-scroll-to-plugin.js"></script>
       <!--<< Gsap Scroll Smoother Js >>-->
       <script src="assets/js/gsap/gsap-scroll-smoother.js"></script>
       <!--<< Gsap Scroll Trigger Js >>-->
       <script src="assets/js/gsap/gsap-scroll-trigger.js"></script>
       <!--<< Gsap Split Text Js >>-->
       <script src="assets/js/gsap/gsap-split-text.js"></script>
       <!--<< Nice Select Js >>-->
       <script src="assets/js/jquery.nice-select.min.js"></script>
       <!--<< Waypoints Js >>-->
       <script src="assets/js/jquery.waypoints.js"></script>
       <!--<< Counterup Js >>-->
       <script src="assets/js/jquery.counterup.min.js"></script>
       <!--<< CustomCountdown Js >>-->
       <script src="assets/js/countdowncustom.js"></script>
       <!--<< Swiper Slider Js >>-->
       <script src="assets/js/swiper-bundle.min.js"></script>
       <!--<< MeanMenu Js >>-->
       <script src="assets/js/jquery.meanmenu.min.js"></script>
       <!--<< Magnific Popup Js >>-->
       <script src="assets/js/jquery.magnific-popup.min.js"></script>
       <!--<< Wow Animation Js >>-->
       <script src="assets/js/wow.min.js"></script>
       <!--<< Main.js >>-->
       <script src="assets/js/main.js"></script>
    </body>

<!-- Mirrored from devsaidul.com/ui/prinoz-gsap/shop-cart.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 07 Feb 2025 04:35:47 GMT -->
</html>