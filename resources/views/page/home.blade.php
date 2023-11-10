@extends('page.index')
@section('main')
<main class="main">
    <div class="container">
        <div class="home-slider-container">
            <div class="home-slider owl-carousel owl-theme owl-theme-light nav-outer show-nav-hover slide-animate" data-owl-options="{
                    'navText': [ '<i class=icon-left-open-big>', '<i class=icon-right-open-big>' ]
                    }">
                <div class="home-slide">
                    <figure style="background-color: #d7b697;">
                        <img class="slide-bg" src="user/images/demoes/demo8/slider/slide-1.jpg" width="1180" height="569" alt="Home Banner" />
                    </figure>
                    <!-- End .slide-bg -->
                    <div class="home-slide-content sale-banner">
                        <div class="row no-gutter bg-primary appear-animate" data-animation-name="fadeInLeftShorter">
                            <div class="col-auto col-md-6 d-flex flex-column justify-content-center col-1">
                                <h4 class="align-left text-uppercase mb-0 appear-animate" data-animation-name="slideInRight" data-animation-delay="400">Furniture &amp; Garden</h4>
                                <h3 class="text-white mb-0 align-left text-uppercase appear-animate" data-animation-name="slideInRight" data-animation-delay="400">Huge Sale
                                </h3>
                            </div>

                            <div class="col-auto col-md-6 col-2 appear-animate" data-animation-name="slideInLeft" data-animation-delay="400">
                                <h2 class="text-white mb-0 position-relative align-left">
                                    50<small>%<ins>OFF</ins></small>
                                </h2>
                            </div>
                        </div>
                        <div class="mb-0 text-right">
                            <a href="demo8-shop.html" class="btn btn-lg btn-dark appear-animate" data-animation-name="fadeInUpShorter" data-animation-delay="600">Mua Ngay!</a>
                        </div>
                    </div>
                </div>
                <!-- End .home-slide -->

                <div class="home-slide home-slide-left">
                    <figure style="background-color: #ceb49d;">
                        <img class="slide-bg" src="user/images/demoes/demo8/slider/slide-2.jpg" width="1180" height="550" alt="Home Banner" />
                    </figure>
                    <!-- End .slide-bg -->
                    <div class="home-slide-content slide-content-dark sale-banner">
                        <div class="row no-gutter bg-secondary appear-animate" data-animation-name="fadeInRightShorter">
                            <div class="col-auto col-md-6 d-flex flex-column justify-content-center col-1">
                                <h4 class="align-left text-uppercase mb-0 appear-animate" data-animation-name="slideInRight" data-animation-delay="300">Home office sale
                                </h4>
                                <h3 class="text-white mb-0 align-left text-uppercase appear-animate" data-animation-name="slideInRight" data-animation-delay="300">mega off
                                </h3>
                            </div>

                            <div class="col-auto col-md-6 col-2 appear-animate" data-animation-name="slideInLeft" data-animation-delay="300">
                                <h2 class="text-white mb-0 position-relative align-left">
                                    50<small>%<ins>OFF</ins></small>
                                </h2>
                            </div>
                        </div>
                        <div class="mb-0">
                            <a href="demo8-shop.html" class="btn btn-lg btn-primary appear-animate" data-animation-name="fadeInUpShorter" data-animation-delay="600">Mua Ngay!</a>
                        </div>
                    </div>
                    <!-- End .home-slide-content -->
                </div>
                <!-- End .home-slide -->
            </div>
            <!-- End .home-slider -->
        </div>
        <!-- End .home-slider-container -->
    </div>
    <!-- End .container -->

    <div class="container banner-container">
        <div class="row justify-content-center">
            <div class="col-md-4 col-sm-6 mt-3 mt-md-0 appear-animate" data-animation-name="fadeInRightShorter" data-y="200">
                <h3 class="subtitle">PHÒNG KHÁCH</h3>
                <div class="heading-spacer"></div>
                <div class="banner banner-image">
                    <a href="#">
                        <img src="user/images/demoes/demo8/banners/banner-living.jpg" style="background-color: #e4ddd7;" width="360" height="270" alt="banner" />
                    </a>
                    <div class="banner-meta">
                        <a href="#">Phòng Khách </a>
                    </div>
                    <!-- End .banner-meta -->
                </div>
                <!-- End .banner -->
            </div>
            <!-- End .col-md-4 -->

            <div class="col-md-4 col-sm-6 mt-3 mt-md-0 appear-animate" data-animation-duration="1500">
                <h3 class="subtitle">PHÒNG ĂN</h3>
                <div class="heading-spacer"></div>
                <div class="banner banner-image">
                    <a href="#">
                        <img src="user/images/demoes/demo8/banners/banner-dining.jpg" style="background-color: #e4ddd7;" alt="banner" width="360" height="270" />
                    </a>
                    <div class="banner-meta">
                        <a href="#" class="white-nowrap"> Phòng Ăn </a>
                    </div>
                    <!-- End .banner-meta -->
                </div>
                <!-- End .banner -->
            </div>
            <!-- End .col-md-4 -->

            <div class="col-md-4 col-sm-6 mt-3 mt-md-0 appear-animate" data-animation-name="fadeInLeftShorter">
                <h3 class="subtitle">PHÒNG NGỦ</h3>
                <div class="heading-spacer"></div>
                <div class="banner banner-image">
                    <a href="#">
                        <img src="user/images/demoes/demo8/banners/banner-bedroom.jpg" style="background-color: #e4ddd7;" alt="banner" width="360" height="270" />
                    </a>
                    <div class="banner-meta">
                        <a href="#">Phòng Ngủ</a>
                    </div>
                    <!-- End .banner-meta -->
                </div>
                <!-- End .banner -->

            <!-- End .col-md-4 -->
        </div>
        <!-- End .row -->
    </div>
    <!-- End .container -->

    <div class="mb-6"></div>
    <!-- margin -->

    <div class="container feature-container">
        <h2 class="subtitle text-center">Sản Phẩm Nổi Bật</h2>
        <div class="heading-spacer"></div>
        <div class="row">
            <div class="col-6 col-sm-4  owl-stage-outer" data-animation-delay="100" data-animation-duration="1500">
                @foreach ( $featuredProducts  as $item )
                <div class="product-default inner-quickview inner-icon">
                    <figure>
                        <a href="{{route('detail',$item->slug)}}">
                            <img src="{{ asset('uploads') }}/{{ $item->image }}" alt="product" width="300" height="300" />
                        </a>
                        <a href="{{route('detail',$item->slug)}}" class="btn-quickview" title="Quick View">Quick
                            View</a>
                    </figure>
                    <div class="product-details">
                        <div class="category-wrap">
                            <div class="category-list">
                                <a href="" class="product-category">{{$item->parentCategory->name}}</a>

                            </div>
                            <a href="" title="Wishlist" class="btn-icon-wish"><i
                                    class="icon-heart"></i></a>
                        </div>
                        <h3 class="product-title">
                            <a href="{{route('detail',$item->slug)}}">{{$item->name}}</a>
                        </h3>

                        <!-- End .product-container -->
                        <div class="price-box">
                            <del class="old-price">{{number_format($item->price) }} VND </del>
                            <span class="product-price">{{number_format($item->sale_price)}} VND</span>
                        </div>
                        <!-- End .price-box -->
                    </div>
                    <!-- End .product-details -->
                </div>

                @endforeach
            </div>

            <div class="col-6 col-sm-4 col-md-3 appear-animate" data-animation-delay="100" data-animation-duration="1500">
                <div class="product-default inner-quickview inner-icon">
                    <figure>
                        <a href="demo8-product.html">
                            <img src="user/images/demoes/demo8/products/product-24.jpg" alt="product" width="300" height="300" />
                            <img src="user/images/demoes/demo8/products/product-18.jpg" alt="product" width="300" height="300" />
                        </a>
                        <div class="btn-icon-group">
                            <a href="demo8-product.html" class="btn-icon btn-add-cart"><i
                                    class="fa fa-arrow-right"></i>
                            </a>
                        </div>
                        <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View">Quick
                            View</a>
                    </figure>
                    <div class="product-details">
                        <div class="category-wrap">
                            <a href="wishlist.html" title="Wishlist" class="btn-icon-wish"><i
                                    class="icon-heart"></i></a>
                        </div>
                        <h3 class="product-title">
                            <a href="demo8-product.html">Ghế đơn </a>
                        </h3>
                        <div class="ratings-container">
                            <div class="product-ratings">
                                <span class="ratings" style="width:0%"></span>
                                <!-- End .ratings -->
                                <span class="tooltiptext tooltip-top"></span>
                            </div>
                            <!-- End .product-ratings -->
                        </div>
                        <!-- End .product-container -->
                        <div class="price-box">
                            <span class="product-price">888888 VND</span>
                        </div>
                        <!-- End .price-box -->
                    </div>
                    <!-- End .product-details -->
                </div>
            </div>
        </div>

    </div>
    <!-- End .container -->

    <div class="sale-banner banner appear-animate" data-animation-delay="100" data-animation-duration="1500">
        <div class="container banner-content">
            <div class="row no-gutter bg-secondary">
                <div class="col-auto col-md-4 d-flex flex-column justify-content-center col-1">
                    <h4 class="align-left text-uppercase mb-0">Furniture &amp; Garden</h4>
                    <h3 class="text-white mb-0 align-left text-uppercase">Huge Sale</h3>
                </div>
                <div class="col-auto col-md-4 col-2">
                    <h5 class="text-white mb-0 position-relative align-left">50<small>%<ins>OFF</ins></small>
                    </h5>
                </div>
                <div class="mb-0 col-md-4 col-3 col-auto">
                    <a href="demo8-shop.html" class="btn btn-lg btn-primary">Mua Ngay!</a>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="product-widgets row pt-1">
            <div class="col-md-4 col-sm-6 pb-5 appear-animate" data-animation-name="fadeInRightShorter">
                <h4 class="subtitle text-left text-uppercase">Top Sản Phẩm</h4>
                <div class="heading-spacer"></div>
                <div class="product-default left-details product-widget mr-3">
                    <figure>
                        <a href="demo8-product.html">
                            <img src="user/images/demoes/demo8/products/product-8.jpg" width="175" height="175" alt="product" />
                            <img src="user/images/demoes/demo8/products/product-1.jpg" width="175" height="175" alt="product" />
                        </a>
                    </figure>
                    <div class="product-details">
                        <div class="category-list">
                            <a href="demo8-shop.html" class="product-category">caps</a>,
                            <a href="demo8-shop.html" class="product-category">fashion</a>,
                            <a href="demo8-shop.html" class="product-category">t-shirts</a>
                        </div>
                        <h3 class="product-title"> <a href="demo8-product.html">Ghế ARM </a> </h3>
                        <div class="ratings-container">
                            <div class="product-ratings">
                                <span class="ratings" style="width:100%"></span>
                                <!-- End .ratings -->
                                <span class="tooltiptext tooltip-top"></span>
                            </div>
                            <!-- End .product-ratings -->
                        </div>
                        <!-- End .product-container -->
                        <div class="price-box">
                            <span class="product-price">888888 VND</span>
                        </div>
                        <!-- End .price-box -->
                    </div>
                    <!-- End .product-details -->
                </div>
                <div class="product-default left-details product-widget mr-3">
                    <figure>
                        <a href="demo8-product.html">
                            <img src="user/images/demoes/demo8/products/product-21.jpg" width="175" height="175" alt="product" />
                            <img src="user/images/demoes/demo8/products/product-6.jpg" width="175" height="175" alt="product" />
                        </a>
                    </figure>
                    <div class="product-details">
                        <div class="category-list">
                            <a href="demo8-shop.html" class="product-category">Fashion</a>,
                            <a href="demo8-shop.html" class="product-category">Shoes</a>,
                            <a href="demo8-shop.html" class="product-category">Toys</a>
                        </div>

                        <div class="ratings-container">
                            <div class="product-ratings">
                                <span class="ratings" style="width:80%"></span>
                                <!-- End .ratings -->
                                <span class="tooltiptext tooltip-top">4.00</span>
                            </div>
                            <!-- End .product-ratings -->
                        </div>
                        <!-- End .product-container -->
                        <div class="price-box">
                            <span class="product-price">999999 VND – 999999 VND</span>
                        </div>
                        <!-- End .price-box -->
                    </div>
                    <!-- End .product-details -->
                </div>
                <div class="product-default left-details product-widget mr-3">
                    <figure>
                        <a href="demo8-product.html">
                            <img src="user/images/demoes/demo8/products/product-13.jpg" width="175" height="175" alt="product" />
                            <img src="user/images/demoes/demo8/products/product-23.jpg" width="175" height="175" alt="product" />
                        </a>
                    </figure>
                    <div class="product-details">
                        <div class="category-list">
                            <a href="demo8-shop.html" class="product-category">Accessories</a>,
                            <a href="demo8-shop.html" class="product-category">Caps</a>,
                            <a href="demo8-shop.html" class="product-category">Dress</a>,
                            <a href="demo8-shop.html" class="product-category">Electronics</a>
                        </div>
                        <h3 class="product-title"> <a href="demo8-product.html">Red Chair</a> </h3>
                        <div class="ratings-container">
                            <div class="product-ratings">
                                <span class="ratings" style="width:0%"></span>
                                <!-- End .ratings -->
                                <span class="tooltiptext tooltip-top"></span>
                            </div>
                            <!-- End .product-ratings -->
                        </div>
                        <!-- End .product-container -->
                        <div class="price-box">
                            <span class="product-price">888888 VND</span>
                        </div>
                        <!-- End .price-box -->
                    </div>
                    <!-- End .product-details -->
                </div>
            </div>
            <div class="col-md-4 col-sm-6 pb-5 appear-animate" data-animation-delay="100" data-animation-duration="1500">
                <h4 class="subtitle text-left text-uppercase">Sản Phẩm Bán Chạy</h4>
                <div class="heading-spacer"></div>
                <div class="product-default left-details product-widget mb-2">
                    <figure>
                        <a href="demo8-product.html">
                            <img src="user/images/demoes/demo8/products/product-19.jpg" width="175" height="175" alt="product" />
                            <img src="user/images/demoes/demo8/products/product-9.jpg" width="175" height="175" alt="product" />
                        </a>
                    </figure>
                    <div class="product-details">
                        <div class="category-list">
                            <a href="demo8-shop.html" class="product-category">Fashion</a>
                        </div>
                        <h3 class="product-title"> <a href="demo8-product.html">Brown Leather Sofa</a> </h3>
                        <div class="ratings-container">
                            <div class="product-ratings">
                                <span class="ratings" style="width:0%"></span>
                                <!-- End .ratings -->
                                <span class="tooltiptext tooltip-top"></span>
                            </div>
                            <!-- End .product-ratings -->
                        </div>
                        <!-- End .product-container -->
                        <div class="price-box">
                            <span class="product-price">888888 VND – 888888 VND</span>
                        </div>
                        <!-- End .price-box -->
                    </div>
                    <!-- End .product-details -->
                </div>
                <div class="product-default left-details product-widget mb-2">
                    <figure>
                        <a href="demo8-product.html">
                            <img src="user/images/demoes/demo8/products/product-11.jpg" width="175" height="175" alt="product" />
                            <img src="user/images/demoes/demo8/products/product-11.jpg" width="175" height="175" alt="product" />
                        </a>
                    </figure>
                    <div class="product-details">
                        <div class="category-list">
                            <a href="demo8-shop.html" class="product-category">Accessories</a>,
                            <a href="demo8-shop.html" class="product-category">Caps</a>,
                            <a href="demo8-shop.html" class="product-category">Dress</a>,
                            <a href="demo8-shop.html" class="product-category">Electronics</a>
                        </div>
                        <h3 class="product-title"> <a href="demo8-product.html">Product Extended</a> </h3>
                        <div class="ratings-container">
                            <div class="product-ratings">
                                <span class="ratings" style="width:0%"></span>
                                <!-- End .ratings -->
                                <span class="tooltiptext tooltip-top"></span>
                            </div>
                            <!-- End .product-ratings -->
                        </div>
                        <!-- End .product-container -->
                        <div class="price-box">
                            <span class="product-price">VND105.00</span>
                        </div>
                        <!-- End .price-box -->
                    </div>
                    <!-- End .product-details -->
                </div>
                <div class="product-default left-details product-widget mb-2">
                    <figure>
                        <a href="demo8-product.html">
                            <img src="user/images/demoes/demo8/products/product-9.jpg" width="175" height="175" alt="product" />
                            <img src="user/images/demoes/demo8/products/product-24.jpg" width="175" height="175" alt="product" />
                        </a>
                    </figure>
                    <div class="product-details">
                        <div class="category-list">
                            <a href="demo8-shop.html" class="product-category">T-shirts</a>,
                            <a href="demo8-shop.html" class="product-category">Toys</a>,
                            <a href="demo8-shop.html" class="product-category">Trousers</a>
                        </div>
                        <h3 class="product-title"> <a href="demo8-product.html">Porto Sports Shoes</a> </h3>
                        <div class="ratings-container">
                            <div class="product-ratings">
                                <span class="ratings" style="width:0%"></span>
                                <!-- End .ratings -->
                                <span class="tooltiptext tooltip-top"></span>
                            </div>
                            <!-- End .product-ratings -->
                        </div>
                        <!-- End .product-container -->
                        <div class="price-box">
                            <span class="product-price">999999 VND – 999999 VND</span>
                        </div>
                        <!-- End .price-box -->
                    </div>
                    <!-- End .product-details -->
                </div>
            </div>
            <div class="col-md-4 col-sm-6 pb-5 appear-animate" data-animation-name="fadeInLeftShorter">
                <h4 class="subtitle text-left text-uppercase">Sản phẩm mới nhất</h4>
                <div class="heading-spacer"></div>
                @foreach ( $newProducts as $item )

                <div class="product-default left-details product-widget mb-2">
                    <figure>
                        <a href="demo8-product.html">
                            <img src="{{ asset('uploads') }}/{{ $item->image }}" width="175" height="175" alt="banner" />

                        </a>
                    </figure>
                    <div class="product-details">
                        <div class="category-list">
                            <a href="demo8-shop.html" class="product-category">{{$item->parentCategory->name}}</a>,

                        </div>
                        <h3 class="product-title"> <a href="demo8-product.html"></a>>{{$item->name}} </h3>
                        <div class="ratings-container">
                            <div class="product-ratings">
                                <span class="ratings" style="width:0%"></span>
                                <!-- End .ratings -->
                                <span class="tooltiptext tooltip-top"></span>
                            </div>
                            <!-- End .product-ratings -->
                        </div>
                        <!-- End .product-container -->
                        <div class="price-box">
                            <del class="old-price">{{number_format($item->price) }} VND </del>
                            <span class="product-price">{{number_format($item->sale_price)}} VND</span>
                        </div>
                        <!-- End .price-box -->
                    </div>
                    <!-- End .product-details -->
                </div>

                @endforeach

            </div>
        </div>
        <!-- End .product-widgets -->
    </div>
    <div class="facebook-section appear-animate">
        <h3 class="subtitle text-uppercase">Follow Me</h3>
        <div class="heading-spacer"></div>
        <div class="owl-carousel owl-theme instagram-feed-carousel facebook-feed-list">
            <a href="https://www.facebook.com/xuonggo.thainguyen.9"><img src="user/images/demoes/demo8/instagram/1.jpg" width="197" height="150" alt="Feed"></a>
            <a href="#"><img src="user/images/demoes/demo8/instagram/2.jpg" width="197" height="150" alt="Feed"></a>
            <a href="#"><img src="user/images/demoes/demo8/instagram/3.jpg" width="197" height="150" alt="Feed"></a>
            <a href="#"><img src="user/images/demoes/demo8/instagram/4.jpg" width="197" height="150" alt="Feed"></a>
            <a href="#"><img src="user/images/demoes/demo8/instagram/5.jpg" width="197" height="150" alt="Feed"></a>
            <a href="#"><img src="user/images/demoes/demo8/instagram/6.jpg" width="197" height="150" alt="Feed"></a>
            <a href="#"><img src="user/images/demoes/demo8/instagram/7.jpg" width="197" height="150" alt="Feed"></a>
            <a href="#"><img src="user/images/demoes/demo8/instagram/8.jpg" width="197" height="150" alt="Feed"></a>
            <a href="#"><img src="user/images/demoes/demo8/instagram/9.jpg" width="197" height="150" alt="Feed"></a>
            <a href="#"><img src="user/images/demoes/demo8/instagram/10.jpg" width="197" height="150" alt="Feed"></a>
        </div>
        <!-- End .instagram-feed-carousel -->
    </div>
    <!-- End .instagram-section -->
</main>
@endsection

