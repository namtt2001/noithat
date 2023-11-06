<header class="header">
    <div class="pre-header">

    </div>

    <div class="header-top">
        <div class="header-row container">
            <div class="header-left">
                <div class="header-dropdown">
                    <a href="#" class="pl-0">USD</a>
                    <div class="header-menu">
                        <ul>
                            <li><a href="#">EUR</a></li>
                            <li><a href="#">USD</a></li>
                        </ul>
                    </div>
                    <!-- End .header-menu -->
                </div>

                <div class="header-dropdown mr-auto mr-sm-3 mr-md-0">
                    <a href="#"><i class="flag-us flag"></i>ENG</a>
                    <div class="header-menu">
                        <ul>
                            <li><a href="#"><i class="flag-us flag mr-2"></i>ENG</a>
                            </li>
                            <li><a href="#"><i class="flag-fr flag mr-2"></i>FRA</a></li>
                        </ul>
                    </div>
                    <!-- End .header-menu -->
                </div>
            </div>
            <div class="header-right">
                <div class="wel-msg text-uppercase d-none d-lg-block"> Welcome
                </div>
                <span class="separator d-none d-xl-block"></span>
                <ul class="top-links mega-menu show-arrow d-none d-sm-inline-block">
                    <li class="item-menu narrow"><a href="dashboard.html">My Account</a></li>
                    <li class="item-menu narrow"><a href="demo8-about.html">About Us</a></li>
                    <li class="item-menu narrow"><a href="blog.html">Blog</a></li>
                    <li class="item-menu narrow"><a href="cart.html">Cart</a></li>
                    <li class="item-menu">
                        <a class="login" href="{{route('login')}}">Log In</a>
                    </li>
                    <li class="item-menu">
                        <a class="login" href="{{route('logout')}}">Logout</a>
                    </li>
                </ul>
                <span class="separator d-none d-xl-block"></span>
                <div class="share-links d-none d-xl-block">
                    <a target="_blank" rel="nofollow" class="share-facebook icon-facebook" href="#" title="Facebook"></a>
                    <a target="_blank" rel="nofollow" class="share-twitter icon-twitter" href="#" title="Twitter"></a>
                    <a target="_blank" rel="nofollow" class="share-instagram icon-instagram" href="#" title="Instagram"></a>
                </div>
            </div>
        </div>
    </div>

    <div class="header-middle sticky-header" data-sticky-options="{'mobile': true}">
        <div class="container">
            <div class="header-left d-lg-block d-none">
                <div class="header-contact d-none d-lg-flex align-items-center pl-1 mr-lg-5 pr-xl-2">
                    <i class="icon-phone-2"></i>
                    <h6>Hotline<a href="tel:#" class="text-dark font1">+123 5678 899</a></h6>
                </div>
            </div>
            <!-- End .header-left -->

            <div class="header-center">
                <button class="mobile-menu-toggler" type="button">
                    <i class="fas fa-bars"></i>
                </button>
                <a href="{{route('index')}}" class="logo">
                    <img src="user/images/products/logo.png"  width="104" height="65" />
                </a>
            </div>
            <!-- End .headeer-center -->


            <div class="header-right">
                <a href="{{route('login')}}" class="header-icon header-icon-user"><i class="icon-user-2"></i></a>
                <a href="{{route('login')}}" class="header-icon"><i class="icon-wishlist-2"></i></a>
                <div class="header-search header-search-popup header-search-category d-none d-sm-block">
                    <a href="#" class="search-toggle" role="button"><i class="icon-magnifier"></i></a>
                    <form action="#" method="get">
                        <div class="header-search-wrapper">
                            <input type="search" class="form-control" name="q" id="q" placeholder="I'm searching for..." required="">
                            <div class="select-custom">
                                <select id="cat" name="cat">
                                    <option value="">DANH MỤC</option>

                                    <option value="33">- Parts &amp; Accessories</option>
                                    <option value="34">- Boats</option>
                                    <option value="57">- Auto Tools &amp; Supplies</option>
                                </select>
                            </div>
                            <!-- End .select-custom -->
                            <button class="btn icon-search-3" type="submit"></button>
                        </div>
                        <!-- End .header-search-wrapper -->
                    </form>
                </div>

                <div class="dropdown cart-dropdown">
                    <a href="#" title="Cart" class="dropdown-toggle dropdown-arrow cart-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
                        <i class="minicart-icon"></i>
                        <span class="cart-count badge-circle">3</span>
                    </a>

                    <div class="cart-overlay"></div>

                    <div class="dropdown-menu mobile-cart">
                        <a href="#" title="Close (Esc)" class="btn-close">×</a>

                        <div class="dropdownmenu-wrapper custom-scrollbar">
                            <div class="dropdown-cart-header">Giỏ hàng</div>
                            <!-- End .dropdown-cart-header -->


                            <!-- End .cart-product -->

                            <div class="dropdown-cart-total">
                                <span>Tổng phụ:</span>

                                <span class="cart-total-price float-right">0 VND</span>
                            </div>
                            <!-- End .dropdown-cart-total -->

                            <div class="dropdown-cart-action">

                                <a href="checkout.html" class="btn btn-dark btn-block">Checkout</a>
                            </div>
                            <!-- End .dropdown-cart-total -->
                        </div>
                        <!-- End .dropdownmenu-wrapper -->
                    </div>
                    <!-- End .dropdown-menu -->
                </div>
            </div>
            <!-- End .header-right -->
        </div>
        <!-- End .container -->
    </div>
    <!-- End .header-middle -->

    <div class="header-bottom sticky-header d-none d-lg-flex" data-sticky-options="{'mobile': false}">
        <div class="container">
            <nav class="main-nav w-100">
                <ul class="menu w-100">
                    <li class="active">
                        <a href="demo8.html">Home</a>
                    </li>
                    <li>
                        <a href="demo8-shop.html">Danh mục</a>
                        <div class="megamenu megamenu-fixed-width megamenu-3cols">
                            <div class="row">
                                <div class="col-lg-4">
                                    <a href="" class="nolink"> thể loại  </a>
                                    <ul class="submenu">
                                        <li><a href="">Phòng Khách</a></li>
                                        <li><a href="">Phòng Ngủ</a></li>
                                        <li><a href="">Phòng Ăn</a></li>


                                    </ul>
                                </div>
                                <div class="col-lg-4 p-0">
                                    <div class="menu-banner menu-banner-2">
                                        <figure>
                                            <img src="user/image nt/product/1_10_2.jpg" alt="Menu banner" class="product-promo">
                                        </figure>
                                        <i>OFF</i>
                                        <div class="banner-content">
                                            <h4>
                                                <span class="">Sale</span><br />
                                                <b class="">50%</b>
                                            </h4>
                                        </div>
                                        <a href="category.html" class="btn btn-sm btn-dark">Mua ngay</a>
                                    </div>
                                </div>


                            </div>
                        </div>
                        <!-- End .megamenu -->
                    </li>
                    <li>
                        <a href="demo8-product.html">Các loại sản phẩm </a>
                        <div class="megamenu megamenu-fixed-width">
                            <div class="row">
                                <div class="col-lg-4">
                                    <a href="#" class="nolink"></a>
                                    <ul class="submenu">
                                        <li><a href="product.html">Bàn ăn</a></li>
                                        <li><a href="product-variable.html">Tủ Rượu</a></li>
                                        <li><a href="product.html">Ghế sofa </a></li>
                                        <li><a href="product.html"></a></li>
                                        <li><a href="product-custom-tab.html"></a></li>
                                        <li><a href="product-sidebar-left.html"></a></li>
                                        <li><a href="product-sidebar-right.html"></a></li>
                                        <li><a href="product-addcart-sticky.html"></a></li>
                                    </ul>
                                </div>
                                <!-- End .col-lg-4 -->

                                <div class="col-lg-4">
                                    <a href="#" class="nolink"></a>
                                    <ul class="submenu">
                                        <li><a href="product-extended-layout.html"></a></li>

                                        <li><a href="product-full-width.html"></a></li>
                                        <li><a href="product-sticky-info.html"></a></li>
                                        <li><a href="product-sticky-both.html"></a></li>
                                        <li><a href="product-transparent-image.html"></a></li>
                                        <li><a href="product-center-vertical.html"></a></li>
                                        <li><a href="#">BUILD YOUR OWN</a></li>
                                    </ul>
                                </div>
                                <!-- End .col-lg-4 -->

                                <div class="col-lg-4 p-0">
                                    <div class="menu-banner menu-banner-2">
                                        <figure>
                                            <img src="user/image nt/product/1_10_2.jpg" alt="Menu banner" class="product-promo">
                                        </figure>
                                        <i>OFF</i>
                                        <div class="banner-content">
                                            <h4>
                                                <span class="">Sell</span><br />
                                                <b class="">50%</b>
                                            </h4>
                                        </div>
                                        <a href="category.html" class="btn btn-sm btn-dark">Buy NOW</a>
                                    </div>
                                </div>
                                <!-- End .col-lg-4 -->
                            </div>
                            <!-- End .row -->
                        </div>
                        <!-- End .megamenu -->
                    </li>

                    <li><a href="https://www.facebook.com/xuonggo.thainguyen.9">Blog</a></li>
                    <li><a href="https://www.facebook.com/xuonggo.thainguyen.9">Liên Hệ</a></li>
                    <li class="float-right"><a href="https://www.facebook.com/xuonggo.thainguyen.9" class="pl-5 m-0 pr-0" target="_blank"></a></li>
                    <li class="float-right"><a href="" class="pl-5">@if(auth()->check())
                        <p>Xin chào {{ auth()->user()->name }}</p>
                        <p>Chúc bạn một ngày vui vẻ </p>
         <!-- Các thông tin khác bạn muốn hiển thị -->
                         @else
                        <p>Bạn chưa đăng nhập.</p>
                         @endif</a></li>


                </ul>
            </nav>
        </div>
        <!-- End .container -->
    </div>
    <!-- End .header-bottom -->
</header>
