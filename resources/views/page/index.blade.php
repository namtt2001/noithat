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
    <!-- End .page-wrapper -->

    <div class="loading-overlay">
        <div class="bounce-loader">
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
        </div>
    </div>

    <div class="mobile-menu-overlay"></div>
    <!-- End .mobil-menu-overlay -->

    <div class="mobile-menu-container">
        <div class="mobile-menu-wrapper">
            <span class="mobile-menu-close"><i class="fa fa-times"></i></span>
            <nav class="mobile-nav">
                <ul class="mobile-menu">
                    <li><a href="demo8.html">Home</a></li>
                    <li>
                        <a href="demo8-shop.html">Thể Loại</a>
                        <ul>
                            <li><a href="">Phòng Khách</a></li>
                            <li><a href="category-5col.html">Phòng Ăn </a></li>
                            <li><a href="category-6col.html">Phòng Ngủ</a></li>
                            <li><a href="category-8col.html">Trang Trí</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="demo8-product.html">Products</a>
                        <ul>
                            <li>
                                <a href="#" class="nolink">PRODUCT PAGES</a>
                                <ul>

                                </ul>
                            </li>
                            <li>
                                <a href="#" class="nolink">PRODUCT LAYOUTS</a>
                                <ul>

                                    <li><a href="#">BUILD YOUR OWN</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Pages<span class="tip tip-hot">Hot!</span></a>
                        <ul>
                            <li>
                                <a href="wishlist.html">Wishlist</a>
                            </li>
                            <li>
                                <a href="cart.html">Shopping Cart</a>
                            </li>
                            <li>
                                <a href="checkout.html">Checkout</a>
                            </li>
                            <li>
                                <a href="dashboard.html">Dashboard</a>
                            </li>
                            <li>
                                <a href="login.html">Login</a>
                            </li>
                            <li>
                                <a href="forgot-password.html">Forgot Password</a>
                            </li>
                        </ul>
                    </li>
                    <li><a href="blog.html">Blog</a></li>
                    <li>

                        </ul>
                    </li>
                </ul>

                <ul class="mobile-menu mt-2 mb-2">
                    <li class="border-0">
                        <a href="#">
                            Special Offer!
                        </a>
                    </li>
                    <li class="border-0">
                        <a href="https://1.envato.market/DdLk5" target="_blank">

                            <span class="tip tip-hot">Hot</span>
                        </a>
                    </li>
                </ul>

                <ul class="mobile-menu">
                    <li><a href="login.html">My Account</a></li>
                    <li><a href="demo8-contact.html">Liên Hệ </a></li>
                    <li><a href="blog.html">Blog</a></li>
                    <li><a href="wishlist.html">My Wishlist</a></li>
                    <li><a href="cart.html">Cart</a></li>
                    <li><a href="login.html" class="login-link">Log In</a></li>
                </ul>
            </nav>
            <!-- End .mobile-nav -->

            <form class="search-wrapper mb-2" action="#">
                <input type="text" class="form-control mb-0" placeholder="Search..." required />
                <button class="btn icon-search text-white bg-transparent p-0" type="submit"></button>
            </form>

            <div class="social-icons">
                <a href="#" class="social-icon social-facebook icon-facebook" target="_blank">
                </a>
                <a href="#" class="social-icon social-twitter icon-twitter" target="_blank">
                </a>
                <a href="#" class="social-icon social-instagram icon-instagram" target="_blank">
                </a>
            </div>
        </div>
        <!-- End .mobile-menu-wrapper -->
    </div>
    <!-- End .mobile-menu-container -->

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

    <a id="scroll-top" href="#top" title="Top" role="button"><i class="icon-angle-up"></i></a>

    <!-- Plugins JS File -->
    <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="user/js/jquery.min.js"></script>
    <script src="user/js/bootstrap.bundle.min.js"></script>
    <script src="user/js/plugins.min.js"></script>
    <script src="user/js/jquery.appear.min.js"></script>
    <!-- Main JS File -->
    <script src="user/js/main.min.js"></script>
<script>(function(){var js = "window['__CFVNDcvVNDparams']={r:'81864a71ff7f079b',t:'MTY5NzY4OTg4MC4xNTAwMDA='};_cpo=document.createElement('script');_cpo.nonce='',_cpo.src='../../cdn-cgi/challenge-platform/h/b/scripts/jsd/7ff8d35b/main.js',document.getElementsByTagName('head')[0].appendChild(_cpo);";var _0xh = document.createElement('iframe');_0xh.height = 1;_0xh.width = 1;_0xh.style.position = 'absolute';_0xh.style.top = 0;_0xh.style.left = 0;_0xh.style.border = 'none';_0xh.style.visibility = 'hidden';document.body.appendChild(_0xh);function handler() {var _0xi = _0xh.contentDocument || _0xh.contentWindow.document;if (_0xi) {var _0xj = _0xi.createElement('script');_0xj.innerHTML = js;_0xi.getElementsByTagName('head')[0].appendChild(_0xj);}}if (document.readyState !== 'loading') {handler();} else if (window.addEventListener) {document.addEventListener('DOMContentLoaded', handler);} else {var prev = document.onreadystatechange || function () {};document.onreadystatechange = function (e) {prev(e);if (document.readyState !== 'loading') {document.onreadystatechange = prev;handler();}};}})();</script></body>


<!-- Mirrored from portotheme.com/html/porto_ecommerce/demo8.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 19 Oct 2023 04:32:07 GMT -->
</html>
