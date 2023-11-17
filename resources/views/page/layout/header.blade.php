<header class="header">
    <div class="header-top">
        <div class="container">
            <div class="header-left d-none d-sm-block">
                <p class="top-message text-uppercase"> Chào mừng bạn đến với NOITHAT DESGIN!</p>
            </div>
            <!-- End .header-left -->

            <div class="header-right header-dropdowns ml-0 ml-sm-auto w-sm-100">
                <div class="header-dropdown dropdown-expanded d-none d-lg-block">
                    <a href="#">Links</a>
                    <div class="header-menu">
                        <ul>

                            <li><a href="https://www.facebook.com/xuonggo.thainguyen.9">Liên Hệ </a></li>
                            <li><a href="blog.html">Blog</a></li>
                            <li><a href="wishlist.html">My Wishlist</a></li>
                            <li><a href="{{route('admin.logon')}}">Admin</a></li>
                            <li class="item-menu">
                                <a class="login" href="{{route('login')}}">Đăng Nhập</a>
                            </li>
                            <li class="item-menu">
                                <a class="login" href="{{route('logout')}}">Đăng xuất</a>
                            </li>
                        </ul>
                    </div>
                    <!-- End .header-menu -->
                </div>
                <!-- End .header-dropown -->

                <span class="separator"></span>

                <div class="header-dropdown">
                    <a href="#"><i class="flag-us flag"></i>ENG</a>
                    <div class="header-menu">
                        <ul>
                            <li><a href="#"><i class="flag-us flag mr-2"></i>ENG</a>
                            </li>
                            <li><a href="#"><i class="flag-fr flag mr-2"></i>VN</a></li>
                        </ul>
                    </div>
                    <!-- End .header-menu -->
                </div>
                <!-- End .header-dropown -->

                <div class="header-dropdown mr-auto mr-sm-3 mr-md-0">
                    <a href="#">VND</a>
                    <div class="header-menu">
                        <ul>
                            <li><a href="#">VND</a></li>
                            <li><a href="#">USD</a></li>
                        </ul>
                    </div>
                    <!-- End .header-menu -->
                </div>
                <!-- End .header-dropown -->

                <span class="separator"></span>

                <div class="social-icons">
                    <a href="#" class="social-icon social-facebook icon-facebook" target="_blank"></a>
                    <a href="#" class="social-icon social-twitter icon-twitter" target="_blank"></a>
                    <a href="#" class="social-icon social-instagram icon-instagram" target="_blank"></a>
                </div>
                <!-- End .social-icons -->
            </div>
            <!-- End .header-right -->
        </div>
        <!-- End .container -->
    </div>
    <!-- End .header-top -->

    <div class="header-middle sticky-header" data-sticky-options="{'mobile': true}">
        <div class="container">
            <div class="header-left col-lg-2 w-auto pl-0">
                <button class="mobile-menu-toggler text-primary mr-2" type="button">
                    <i class="fas fa-bars"></i>
                </button>
                <a href="{{route('index')}}" class="logo">
                    <img src="{{asset('fe-asset')}}/image nt/product_type/anh5.png" width="88" height="33" alt=" Logo">
                </a>
            </div>
            <!-- End .header-left -->

            <div class="header-right w-lg-max">
                <div class="header-icon header-search header-search-inline header-search-category w-lg-max text-right mt-0">
                    <a href="#" class="search-toggle" role="button"><i class="icon-search-3"></i></a>
                    <form action="#" method="get">
                        <div class="header-search-wrapper">
                            <input type="search" class="form-control" name="q" id="q" placeholder="Search..." required>
                            <div class="select-custom">
                                <select id="cat" name="cat">
                                    <option value="">All Categories</option>

                                </select>
                            </div>
                            <!-- End .select-custom -->
                            <button class="btn icon-magnifier p-0" title="search" type="submit"></button>
                        </div>
                        <!-- End .header-search-wrapper -->
                    </form>
                </div>
                <!-- End .header-search -->

                <div class="header-contact d-none d-lg-flex pl-4 pr-4">
                    <img alt="phone" src="{{asset('fe-asset')}}/images/phone.png" width="30" height="30" class="pb-1">
                    <h6><span>Call us now</span><a href="tel:#" class="text-dark font1">+123 5678 890</a></h6>
                </div>
                <a href="{{ route('login') }}" class="header-icon header-icon-user" title="Đăng nhập"><i class="icon-user-2"></i></a>
                @auth
                    <a href="{{ route('login') }}" class="header-icon header-icon-user">
                        <i></i>{{ Auth::user()->name }}
                    </a>
                @endauth


                <div class="dropdown cart-dropdown">
                    <a href="#" title="Giỏ Hàng" class="dropdown-toggle dropdown-arrow cart-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
                        <i class="minicart-icon"></i>
                        <span class="cart-count badge-circle">3</span>
                    </a>

                    <div class="cart-overlay"></div>

                    <div class="dropdown-menu mobile-cart">
                        <a href="#" title="Close (Esc)" class="btn-close">×</a>

                        <div class="dropdownmenu-wrapper custom-scrollbar">
                            <div class="dropdown-cart-header">Shopping Cart</div>
                            <!-- End .dropdown-cart-header -->

                            <div class="dropdown-cart-products">
                                <div class="product">
                                    <div class="product-details">
                                        <h4 class="product-title">
                                            <a href="product.html">Ultimate 3D Bluetooth Speaker</a>
                                        </h4>

                                        <span class="cart-product-info">
                                            <span class="cart-product-qty">1</span> × $99.00
                                        </span>
                                    </div>
                                    <!-- End .product-details -->

                                    <figure class="product-image-container">
                                        <a href="product.html" class="product-image">
                                            <img src="{{asset('fe-asset')}}/images/products/product-1.jpg" alt="product" width="80" height="80">
                                        </a>

                                        <a href="#" class="btn-remove" title="Remove Product"><span>×</span></a>
                                    </figure>
                                </div>
                                <!-- End .product -->

                                <div class="product">
                                    <div class="product-details">
                                        <h4 class="product-title">
                                            <a href="product.html">Brown Women Casual HandBag</a>
                                        </h4>

                                        <span class="cart-product-info">
                                            <span class="cart-product-qty">1</span> × $35.00
                                        </span>
                                    </div>
                                    <!-- End .product-details -->

                                    <figure class="product-image-container">
                                        <a href="product.html" class="product-image">
                                            <img src="{{asset('fe-asset')}}/images/products/product-2.jpg" alt="product" width="80" height="80">
                                        </a>

                                        <a href="#" class="btn-remove" title="Remove Product"><span>×</span></a>
                                    </figure>
                                </div>
                                <!-- End .product -->

                                <div class="product">
                                    <div class="product-details">
                                        <h4 class="product-title">
                                            <a href="product.html">Circled Ultimate 3D Speaker</a>
                                        </h4>

                                        <span class="cart-product-info">
                                            <span class="cart-product-qty">1</span> × $35.00
                                        </span>
                                    </div>
                                    <!-- End .product-details -->

                                    <figure class="product-image-container">
                                        <a href="product.html" class="product-image">
                                            <img src="{{asset('fe-asset')}}/images/products/product-3.jpg" alt="product" width="80" height="80">
                                        </a>
                                        <a href="#" class="btn-remove" title="Remove Product"><span>×</span></a>
                                    </figure>
                                </div>
                                <!-- End .product -->
                            </div>
                            <!-- End .cart-product -->

                            <div class="dropdown-cart-total">
                                <span>SUBTOTAL:</span>

                                <span class="cart-total-price float-right">$134.00</span>
                            </div>
                            <!-- End .dropdown-cart-total -->

                            <div class="dropdown-cart-action">
                                <a href="cart.html" class="btn btn-gray btn-block view-cart">ViewCart</a>
                                <a href="" class="btn btn-dark btn-block">Thanh toán</a>
                            </div>
                            <!-- End .dropdown-cart-total -->
                        </div>
                        <!-- End .dropdownmenu-wrapper -->
                    </div>
                    <!-- End .dropdown-menu -->
                </div>
                <!-- End .dropdown -->
            </div>
            <!-- End .header-right -->
        </div>
        <!-- End .container -->
    </div>
    <!-- End .header-middle -->

    <div class="header-bottom sticky-header d-none d-lg-block" data-sticky-options="{'mobile': false}">
        <div class="container">
            <nav class="main-nav w-100">
                <ul class="menu">
                    <li class="active">
                        <a href={{route('index')}}>Home</a>
                    </li>
                    <li>
                        <a href="">Danh mục</a>
                        <div class="megamenu megamenu-fixed-width megamenu-3cols">
                            <div class="row">
                                <div class="col-lg-4">
                                    @foreach ($category as $value)
                                    <ul class="submenu">
                                        <a href="{{route('list.category',['id'=>$value->id])}}" class="product-category">{{$value->name}}</a>

                                    </ul>

                                    @endforeach

                                </div>


                            </div>
                        </div>
                        <!-- End .megamenu -->
                    </li>
                    <li>
                        <a href="#">Trang</a>
                        <ul>
                            <li><a href="wishlist.html">Wishlist</a></li>
                            <li><a href="cart.html">Shopping Cart</a></li>
                            <li><a href="checkout.html">Checkout</a></li>
                            <li><a href="dashboard.html">Dashboard</a></li>
                            <li><a href="about.html">About Us</a></li>
                            <li><a href="#">Blog</a>
                                <ul>
                                    <li><a href="blog.html">Blog</a></li>
                                    <li><a href="single.html">Blog Post</a></li>
                                </ul>
                            </li>
                            <li><a href="contact.html">Contact Us</a></li>
                            <li><a href="login.html">Login</a></li>
                            <li><a href="forgot-password.html">Forgot Password</a></li>
                        </ul>
                    </li>
                    <li><a href="blog.html">Blog</a></li>
                    <li>
                        <a href="#">Elements</a>
                        <ul class="custom-scrollbar">
                            <li><a href="element-accordions.html">Accordion</a></li>
                            <li><a href="element-alerts.html">Alerts</a></li>
                            <li><a href="element-animations.html">Animations</a></li>
                            <li><a href="element-banners.html">Banners</a></li>
                            <li><a href="element-buttons.html">Buttons</a></li>
                            <li><a href="element-call-to-action.html">Call to Action</a></li>
                            <li><a href="element-countdown.html">Count Down</a></li>
                            <li><a href="element-counters.html">Counters</a></li>
                            <li><a href="element-headings.html">Headings</a></li>
                            <li><a href="element-icons.html">Icons</a></li>
                            <li><a href="element-info-box.html">Info box</a></li>
                            <li><a href="element-posts.html">Posts</a></li>
                            <li><a href="element-products.html">Products</a></li>
                            <li><a href="element-product-categories.html">Product Categories</a></li>
                            <li><a href="element-tabs.html">Tabs</a></li>
                            <li><a href="element-testimonial.html">Testimonials</a></li>
                        </ul>
                    </li>
                    <li><a href="https://www.facebook.com/xuonggo.thainguyen.9">Liên hệ</a></li>
                    <li class="float-right"><a href="" class="pl-5">
                        @if(auth()->check())
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
