<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from portotheme.com/html/porto_ecommerce/demo8.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 19 Oct 2023 04:31:23 GMT -->
@include('page.layout.head')

<body>
    <div class="page-wrapper">
 @include('page.layout.header')
        <!-- End .header -->
   @yield('main')
        <!-- End .main -->
@include('page.layout.footer')
        <!-- End .footer -->
    </div>


    <div class="sticky-navbar">
        <div class="sticky-info">
            <a href="demo8.html">
                <i class="icon-home"></i>Home
            </a>
        </div>
        <div class="sticky-info">
            <a href="demo8-shop.html" class="">
                <i class="icon-bars"></i>Categories
            </a>
        </div>
        <div class="sticky-info">
            <a href="wishlist.html" class="">
                <i class="icon-wishlist-2"></i>Wishlist
            </a>
        </div>
        <div class="sticky-info">
            <a href="login.html" class="">
                <i class="icon-user-2"></i>Account
            </a>
        </div>
        <div class="sticky-info">
            <a href="cart.html" class="">
                <i class="icon-shopping-cart position-relative">
                    <span class="cart-count badge-circle">3</span>
                </i>Cart
            </a>
        </div>
    </div>


    </div>
    <!-- End .newsletter-popup -->


@include('page.layout.script')
<!-- Mirrored from portotheme.com/html/porto_ecommerce/demo8.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 19 Oct 2023 04:32:07 GMT -->
</html>
