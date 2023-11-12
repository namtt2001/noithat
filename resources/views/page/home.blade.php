@extends('page.index')
@section('main')
<main class="main">
    <div class="home-slider slide-animate owl-carousel owl-theme show-nav-hover nav-big mb-2 text-uppercase" data-owl-options="{
        'loop': false}">

        <div class="home-slide home-slide1 banner">
            <img class="slide-bg" src="{{asset('fe-asset')}}/image nt/product_type/anh1.jpg" width="1903" height="499" alt="slider image">
            <div class="container d-flex align-items-center">
                <!-- End .banner-layer -->
            </div>
        </div>
        <div class="home-slide home-slide2 banner banner-md-vw">
            <img class="slide-bg" style="background-color: #bdb6b6;" width="1903" height="399" src="{{asset('fe-asset')}}/image nt/product_type/anh2.jpg" alt="slider image">
            <div class="container d-flex align-items-center">
                <div class="banner-layer d-flex justify-content-center appear-animate" data-animation-name="fadeInUpShorter">
                    <div class="mx-auto">
                        <h4 class="m-b-1">Extra</h4>
                        <h3 class="m-b-2">20% off</h3>
                        <h3 class="mb-2 heading-border">Accessories</h3>
                        <h2 class="text-transform-none m-b-4">Summer Sale</h2>

                    </div>
                </div>
                <!-- End .banner-layer -->
            </div>
        </div>
        <!-- End .home-slide -->
    </div>
    <!-- End .home-slider -->

    <div class="container">
        <div class="info-boxes-slider owl-carousel owl-theme mb-2" data-owl-options="{
            'dots': false,
            'loop': false,
            'responsive': {
                '576': {
                    'items': 2
                },
                '992': {
                    'items': 3
                }
            }
        }">
            <div class="info-box info-box-icon-left">
                <i class="icon-shipping"></i>

                <div class="info-box-content">
                    <h4>MIỄN PHÍ VẬN CHUYỂN </h4>
                    <p class="text-body">Giao hàng miễn phí trên tất cả các đơn đặt hàng trong tỉnh</p>
                </div>
                <!-- End .info-box-content -->
            </div>
            <!-- End .info-box -->

            <div class="info-box info-box-icon-left">
                <i class="icon-money"></i>

                <div class="info-box-content">
                    <h4>MONEY BACK GUARANTEE</h4>
                    <p class="text-body">100% money back guarantee</p>
                </div>
                <!-- End .info-box-content -->
            </div>
            <!-- End .info-box -->

            <div class="info-box info-box-icon-left">
                <i class="icon-support"></i>

                <div class="info-box-content">
                    <h4>ONLINE SUPPORT 24/7</h4>
                    <p class="text-body">Lorem ipsum dolor sit amet.</p>
                </div>
                <!-- End .info-box-content -->
            </div>
            <!-- End .info-box -->
        </div>
        <!-- End .info-boxes-slider -->

        <div class="banners-container mb-2">
            <div class="banners-slider owl-carousel owl-theme" data-owl-options="{
                'dots': false
            }">
                <div class="banner banner1 banner-sm-vw d-flex align-items-center appear-animate" style="background-color: #ccc;" data-animation-name="fadeInLeftShorter" data-animation-delay="400">
                    <figure class="w-100">
                        <img src="{{asset('fe-asset')}}/images/demoes/demo4/banners/banner.jpg" alt="banner" width="380" height="100" />
                    </figure>
                    <div class="banner-layer">
                        <h3 class="m-b-2">Phòng Khách </h3>
                        <a href="category.html" class="btn btn-sm btn-dark">Mua ngay</a>
                    </div>
                </div>
                <!-- End .banner -->
                <div class="banner banner1 banner-sm-vw d-flex align-items-center appear-animate" style="background-color: #ccc;" data-animation-name="fadeInLeftShorter" data-animation-delay="500">
                    <figure class="w-100">
                        <img src="{{asset('fe-asset')}}/images/demoes/demo4/banners/banner2.jpg" alt="banner" width="380" height="175" />
                    </figure>
                    <div class="banner-layer">
                        <h3 class="m-b-2">Phòng Ăn </h3>
                        <a href="category.html" class="btn btn-sm btn-dark">Mua ngay</a>
                    </div>
                </div>
                <!-- End .banner -->
                <div class="banner banner1 banner-sm-vw d-flex align-items-center appear-animate" style="background-color: #ccc;" data-animation-name="fadeInLeftShorter" data-animation-delay="500">
                    <figure class="w-100">
                        <img src="{{asset('fe-asset')}}/images/demoes/demo4/banners/banner4.jpg" alt="banner" width="380" height="175" />
                    </figure>
                    <style>
                        .banner-layer h3 {
                          color: rgb(126, 7, 47); /* Thiết lập màu trắng cho văn bản trong phần tử h3 */
                        }
                      </style>
                    <div class="banner-layer">
                        <h3 class="m-b-2">Phòng Ngủ </h3>
                        <a href="category.html" class="btn btn-sm btn-dark">Mua ngay</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End .container -->

    <section class="featured-products-section">
        <div class="container">
            <h2 class="section-title heading-border ls-20 border-0">SẢN PHẨM NỔI BẬT</h2>

            <div class="products-slider custom-products owl-carousel owl-theme nav-outer show-nav-hover nav-image-center" data-owl-options="{
                'dots': false,
                'nav': true}">
                @foreach ($featuredProducts as $item )
                <div class="product-default appear-animate" data-animation-name="fadeInRightShorter">

                    <figure>
                        <a href="{{route('detail',$item->slug)}}">
                            <img src="{{ asset('uploads') }}/{{ $item->image }}" width="280" height="280" alt="product">
                            

                        </a>
                        <div class="label-group">
                            <div class="product-label label-hot">HOT</div>
                            <div class="product-label label-sale">-20%</div>
                        </div>
                    </figure>
                    <div class="product-details">
                        <div class="category-list">
                            <a href="" class="product-category">{{$item->parentCategory->name}}</a>
                        </div>
                        <h3 class="product-title">
                            <a href="{{route('detail',$item->slug)}}">{{$item->name}}</a>
                        </h3>
                        <div class="ratings-container">
                            <div class="product-ratings">
                                <span class="ratings" style="width:80%"></span>
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
                        <div class="product-action">
                            <a href="wishlist.html" class="btn-icon-wish" title="wishlist"><i
                                    class="icon-heart"></i></a>
                            <a href="product.html" class="btn-icon btn-add-cart"><i
                                    class="fa fa-arrow-right"></i><span>Mua Ngay</span></a>
                            <a href="{{route('detail',$item->slug)}}" class="btn-quickview" title="Xem chi tiết"><i
                                    class="fas fa-external-link-alt"></i></a>
                        </div>
                    </div>
                    <!-- End .product-details -->
                </div>

                @endforeach

            </div>
            <!-- End .featured-proucts -->
        </div>
    </section>

    <section class="new-products-section">
        <div class="container">
            <h2 class="section-title heading-border ls-20 border-0">New Arrivals</h2>

            <div class="products-slider custom-products owl-carousel owl-theme nav-outer show-nav-hover nav-image-center mb-2" data-owl-options="{
                'dots': false,
                'nav': true,
                'responsive': {
                    '992': {
                        'items': 4
                    },
                    '1000': {
                        'items': 5
                    }
                }
             }">
                <div class="product-default appear-animate" data-animation-name="fadeInRightShorter">
                    <figure>
                        <a href="product.html">
                            <img src="{{asset('fe-asset')}}/images/products/product-6.jpg" width="220" height="150" alt="product">

                        <div class="label-group">
                            <div class="product-label label-hot">HOT</div>
                        </div>
                    </figure>
                    <div class="product-details">
                        <div class="category-list">
                            <a href="category.html" class="product-category">Category</a>
                        </div>
                        <h3 class="product-title">
                            <a href="product.html">Men Black Gentle Belt</a>
                        </h3>
                        <div class="ratings-container">
                            <div class="product-ratings">
                                <span class="ratings" style="width:80%"></span>
                                <!-- End .ratings -->
                                <span class="tooltiptext tooltip-top"></span>
                            </div>
                            <!-- End .product-ratings -->
                        </div>
                        <!-- End .product-container -->
                        <div class="price-box">
                            <del class="old-price">$59.00</del>
                            <span class="product-price">$49.00</span>
                        </div>
                        <!-- End .price-box -->
                        <div class="product-action">
                            <a href="wishlist.html" class="btn-icon-wish" title="wishlist"><i
                                    class="icon-heart"></i></a>
                            <a href="#" class="btn-icon btn-add-cart product-type-simple"><i
                                    class="icon-shopping-cart"></i><span>ADD TO CART</span></a>
                            <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View"><i
                                    class="fas fa-external-link-alt"></i></a>
                        </div>
                    </div>
                    <!-- End .product-details -->
                </div>
                <div class="product-default appear-animate" data-animation-name="fadeInRightShorter">
                    <figure>
                        <a href="product.html">
                            <img src="{{asset('fe-asset')}}/images/products/product-7.jpg" width="220" height="220" alt="product">
                            <img src="{{asset('fe-asset')}}/images/products/product-7-2.jpg" width="220" height="220" alt="product">
                        </a>
                        <div class="label-group">
                            <div class="product-label label-hot">HOT</div>
                        </div>
                    </figure>
                    <div class="product-details">
                        <div class="category-list">
                            <a href="category.html" class="product-category">Category</a>
                        </div>
                        <h3 class="product-title">
                            <a href="product.html">Brown-Black Men Casual Glasses</a>
                        </h3>
                        <div class="ratings-container">
                            <div class="product-ratings">
                                <span class="ratings" style="width:80%"></span>
                                <!-- End .ratings -->
                                <span class="tooltiptext tooltip-top"></span>
                            </div>
                            <!-- End .product-ratings -->
                        </div>
                        <!-- End .product-container -->
                        <div class="price-box">
                            <del class="old-price">$59.00</del>
                            <span class="product-price">$49.00</span>
                        </div>
                        <!-- End .price-box -->
                        <div class="product-action">
                            <a href="wishlist.html" class="btn-icon-wish" title="wishlist"><i
                                    class="icon-heart"></i></a>
                            <a href="#" class="btn-icon btn-add-cart product-type-simple"><i
                                    class="icon-shopping-cart"></i><span>ADD TO CART</span></a>
                            <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View"><i
                                    class="fas fa-external-link-alt"></i></a>
                        </div>
                    </div>
                    <!-- End .product-details -->
                </div>
                <div class="product-default appear-animate" data-animation-name="fadeInRightShorter">
                    <figure>
                        <a href="product.html">
                            <img src="{{asset('fe-asset')}}/images/products/product-8.jpg" width="220" height="220" alt="product">
                            <img src="{{asset('fe-asset')}}/images/products/product-8-2.jpg" width="220" height="220" alt="product">
                        </a>
                        <div class="label-group">
                            <div class="product-label label-sale">-20%</div>
                        </div>
                    </figure>
                    <div class="product-details">
                        <div class="category-list">
                            <a href="category.html" class="product-category">Category</a>
                        </div>
                        <h3 class="product-title">
                            <a href="product.html">Brown-Black Men Casual Glasses</a>
                        </h3>
                        <div class="ratings-container">
                            <div class="product-ratings">
                                <span class="ratings" style="width:80%"></span>
                                <!-- End .ratings -->
                                <span class="tooltiptext tooltip-top"></span>
                            </div>
                            <!-- End .product-ratings -->
                        </div>
                        <!-- End .product-container -->
                        <div class="price-box">
                            <del class="old-price">$59.00</del>
                            <span class="product-price">$49.00</span>
                        </div>
                        <!-- End .price-box -->
                        <div class="product-action">
                            <a href="wishlist.html" class="btn-icon-wish" title="wishlist"><i
                                    class="icon-heart"></i></a>
                            <a href="#" class="btn-icon btn-add-cart product-type-simple"><i
                                    class="icon-shopping-cart"></i><span>ADD TO CART</span></a>
                            <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View"><i
                                    class="fas fa-external-link-alt"></i></a>
                        </div>
                    </div>
                    <!-- End .product-details -->
                </div>
                <div class="product-default appear-animate" data-animation-name="fadeInRightShorter">
                    <figure>
                        <a href="product.html">
                            <img src="{{asset('fe-asset')}}/images/products/product-9.jpg" width="220" height="220" alt="product">
                            <img src="{{asset('fe-asset')}}/images/products/product-9-2.jpg" width="220" height="220" alt="product">
                        </a>
                        <div class="label-group">
                            <div class="product-label label-sale">-30%</div>
                        </div>
                    </figure>
                    <div class="product-details">
                        <div class="category-list">
                            <a href="category.html" class="product-category">Category</a>
                        </div>
                        <h3 class="product-title">
                            <a href="product.html">Black Men Casual Glasses</a>
                        </h3>
                        <div class="ratings-container">
                            <div class="product-ratings">
                                <span class="ratings" style="width:80%"></span>
                                <!-- End .ratings -->
                                <span class="tooltiptext tooltip-top"></span>
                            </div>
                            <!-- End .product-ratings -->
                        </div>
                        <!-- End .product-container -->
                        <div class="price-box">
                            <del class="old-price">$59.00</del>
                            <span class="product-price">$49.00</span>
                        </div>
                        <!-- End .price-box -->
                        <div class="product-action">
                            <a href="wishlist.html" class="btn-icon-wish" title="wishlist"><i
                                    class="icon-heart"></i></a>
                            <a href="product.html" class="btn-icon btn-add-cart"><i
                                    class="fa fa-arrow-right"></i><span>SELECT
                                    OPTIONS</span></a>
                            <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View"><i
                                    class="fas fa-external-link-alt"></i></a>
                        </div>
                    </div>
                    <!-- End .product-details -->
                </div>
                <div class="product-default appear-animate" data-animation-name="fadeInRightShorter">
                    <figure>
                        <a href="product.html">
                            <img src="{{asset('fe-asset')}}/images/products/product-10.jpg" width="220" height="220" alt="product">
                            <img src="{{asset('fe-asset')}}/images/products/product-10-2.jpg" width="220" height="220" alt="product">
                        </a>
                        <div class="label-group">
                            <div class="product-label label-hot">HOT</div>
                        </div>
                    </figure>
                    <div class="product-details">
                        <div class="category-list">
                            <a href="category.html" class="product-category">Category</a>
                        </div>
                        <h3 class="product-title">
                            <a href="product.html">Basketball Sports Blue Shoes</a>
                        </h3>
                        <div class="ratings-container">
                            <div class="product-ratings">
                                <span class="ratings" style="width:80%"></span>
                                <!-- End .ratings -->
                                <span class="tooltiptext tooltip-top"></span>
                            </div>
                            <!-- End .product-ratings -->
                        </div>
                        <!-- End .product-container -->
                        <div class="price-box">
                            <del class="old-price">$59.00</del>
                            <span class="product-price">$49.00</span>
                        </div>
                        <!-- End .price-box -->
                        <div class="product-action">
                            <a href="wishlist.html" class="btn-icon-wish" title="wishlist"><i
                                    class="icon-heart"></i></a>
                            <a href="#" class="btn-icon btn-add-cart product-type-simple"><i
                                    class="icon-shopping-cart"></i><span>ADD TO CART</span></a>
                            <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View"><i
                                    class="fas fa-external-link-alt"></i></a>
                        </div>
                    </div>
                    <!-- End .product-details -->
                </div>
                <div class="product-default appear-animate" data-animation-name="fadeInRightShorter">
                    <figure>
                        <a href="product.html">
                            <img src="{{asset('fe-asset')}}/images/products/product-11.jpg" width="220" height="220" alt="product">
                            <img src="{{asset('fe-asset')}}/images/products/product-11-2.jpg" width="220" height="220" alt="product">
                        </a>
                        <div class="label-group">
                            <div class="product-label label-sale">-20%</div>
                        </div>
                    </figure>
                    <div class="product-details">
                        <div class="category-list">
                            <a href="category.html" class="product-category">Category</a>
                        </div>
                        <h3 class="product-title">
                            <a href="product.html">Men Sports Travel Bag</a>
                        </h3>
                        <div class="ratings-container">
                            <div class="product-ratings">
                                <span class="ratings" style="width:80%"></span>
                                <!-- End .ratings -->
                                <span class="tooltiptext tooltip-top"></span>
                            </div>
                            <!-- End .product-ratings -->
                        </div>
                        <!-- End .product-container -->
                        <div class="price-box">
                            <del class="old-price">$59.00</del>
                            <span class="product-price">$49.00</span>
                        </div>
                        <!-- End .price-box -->
                        <div class="product-action">
                            <a href="wishlist.html" class="btn-icon-wish" title="wishlist"><i
                                    class="icon-heart"></i></a>
                            <a href="product.html" class="btn-icon btn-add-cart"><i
                                    class="fa fa-arrow-right"></i><span>SELECT
                                    OPTIONS</span></a>
                            <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View"><i
                                    class="fas fa-external-link-alt"></i></a>
                        </div>
                    </div>
                    <!-- End .product-details -->
                </div>
            </div>
            <!-- End .featured-proucts -->
        </div>
    </section>
    <!-- End .feature-boxes-container -->
    <section class="blog-section pb-0">
        <div class="container">
            <h2 class="section-title heading-border border-0 appear-animate" data-animation-name="fadeInUp">
                Latest News</h2>

            <div class="owl-carousel owl-theme appear-animate" data-animation-name="fadeIn" data-owl-options="{
                'loop': false,
                'margin': 20,
                'autoHeight': true,
                'autoplay': false,
                'dots': false,
                'items': 2,
                'responsive': {
                    '0': {
                        'items': 1
                    },
                    '480': {
                        'items': 2
                    },
                    '576': {
                        'items': 3
                    },
                    '768': {
                        'items': 4
                    }
                }
            }">
                <article class="post">
                    <div class="post-media">
                        <a href="single.html">
                            <img src="{{asset('fe-asset')}}/images/blog/home/post-1.jpg" alt="Post" width="225" height="280">
                        </a>
                        <div class="post-date">
                            <span class="day">26</span>
                            <span class="month">Feb</span>
                        </div>
                    </div>
                    <!-- End .post-media -->

                    <div class="post-body">
                        <h2 class="post-title">
                            <a href="single.html">Top New Collection</a>
                        </h2>
                        <div class="post-content">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras non placerat mi. Etiam non tellus sem. Aenean...</p>
                        </div>
                        <!-- End .post-content -->
                        <a href="single.html" class="post-comment">0 Comments</a>
                    </div>
                    <!-- End .post-body -->
                </article>
                <!-- End .post -->

                <article class="post">
                    <div class="post-media">
                        <a href="single.html">
                            <img src="{{asset('fe-asset')}}/images/blog/home/post-2.jpg" alt="Post" width="225" height="280">
                        </a>
                        <div class="post-date">
                            <span class="day">26</span>
                            <span class="month">Feb</span>
                        </div>
                    </div>
                    <!-- End .post-media -->

                    <div class="post-body">
                        <h2 class="post-title">
                            <a href="single.html">Fashion Trends</a>
                        </h2>
                        <div class="post-content">
                            <p>Leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of...</p>
                        </div>
                        <!-- End .post-content -->
                        <a href="single.html" class="post-comment">0 Comments</a>
                    </div>
                    <!-- End .post-body -->
                </article>
                <!-- End .post -->

                <article class="post">
                    <div class="post-media">
                        <a href="single.html">
                            <img src="{{asset('fe-asset')}}/images/blog/home/post-3.jpg" alt="Post" width="225" height="280">
                        </a>
                        <div class="post-date">
                            <span class="day">26</span>
                            <span class="month">Feb</span>
                        </div>
                    </div>
                    <!-- End .post-media -->

                    <div class="post-body">
                        <h2 class="post-title">
                            <a href="single.html">Right Choices</a>
                        </h2>
                        <div class="post-content">
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the...</p>
                        </div>
                        <!-- End .post-content -->
                        <a href="single.html" class="post-comment">0 Comments</a>
                    </div>
                    <!-- End .post-body -->
                </article>
                <!-- End .post -->

                <article class="post">
                    <div class="post-media">
                        <a href="single.html">
                            <img src="{{asset('fe-asset')}}/images/blog/home/post-4.jpg" alt="Post" width="225" height="280">
                        </a>
                        <div class="post-date">
                            <span class="day">26</span>
                            <span class="month">Feb</span>
                        </div>
                    </div>
                    <!-- End .post-media -->

                    <div class="post-body">
                        <h2 class="post-title">
                            <a href="single.html">Perfect Accessories</a>
                        </h2>
                        <div class="post-content">
                            <p>Leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of...</p>
                        </div>
                        <!-- End .post-content -->
                        <a href="single.html" class="post-comment">0 Comments</a>
                    </div>
                    <!-- End .post-body -->
                </article>
                <!-- End .post -->
            </div>

            <hr class="mt-0 m-b-5">

            <div class="brands-slider owl-carousel owl-theme images-center appear-animate" data-animation-name="fadeIn" data-animation-duration="500" data-owl-options="{
            'margin': 0}">
                <img src="{{asset('fe-asset')}}/images/brands/brand1.png" width="130" height="56" alt="brand">
                <img src="{{asset('fe-asset')}}/images/brands/brand2.png" width="130" height="56" alt="brand">
                <img src="{{asset('fe-asset')}}/images/brands/brand3.png" width="130" height="56" alt="brand">
                <img src="{{asset('fe-asset')}}/images/brands/brand4.png" width="130" height="56" alt="brand">
                <img src="{{asset('fe-asset')}}/images/brands/brand5.png" width="130" height="56" alt="brand">
                <img src="{{asset('fe-asset')}}/images/brands/brand6.png" width="130" height="56" alt="brand">
            </div>
            <!-- End .brands-slider -->

            <hr class="mt-4 m-b-5">

            <div class="product-widgets-container row pb-2">
                <div class="col-lg-3 col-sm-6 pb-5 pb-md-0 appear-animate" data-animation-name="fadeInLeftShorter" data-animation-delay="200">
                    <h4 class="section-sub-title">SẢN PHẨM NỔI BẬT</h4>
                    @foreach ($featuredProducts as $item)
                    <div class="product-default left-details product-widget">
                        <figure>
                            <a href="{{route('detail',$item->slug)}}">
                                <img src="{{ asset('uploads') }}/{{ $item->image }}" width="84" height="84" alt="product">

                            </a>
                        </figure>

                        <div class="product-details">
                            <h3 class="product-title"> <a href="product.html">{{$item->name}}</a>
                            </h3>

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
                                <span class="product-price">{{number_format($item->sale_price)}} VND</span>
                            </div>
                            <!-- End .price-box -->
                        </div>
                        <!-- End .product-details -->
                    </div>

                    @endforeach


                </div>

                <div class="col-lg-3 col-sm-6 pb-5 pb-md-0 appear-animate" data-animation-name="fadeInLeftShorter" data-animation-delay="500">
                    <h4 class="section-sub-title">Best Selling Products</h4>
                    <div class="product-default left-details product-widget">
                        <figure>
                            <a href="product.html">
                                <img src="{{asset('fe-asset')}}/images/products/small/product-4.jpg" width="84" height="84" alt="product">
                                <img src="{{asset('fe-asset')}}/images/products/small/product-4-2.jpg" width="84" height="84" alt="product">
                            </a>
                        </figure>

                        <div class="product-details">
                            <h3 class="product-title"> <a href="product.html">Blue Backpack for the Young -
                                    S</a> </h3>

                            <div class="ratings-container">
                                <div class="product-ratings">
                                    <span class="ratings" style="width:100%"></span>
                                    <!-- End .ratings -->
                                    <span class="tooltiptext tooltip-top">5.00</span>
                                </div>
                                <!-- End .product-ratings -->
                            </div>
                            <!-- End .product-container -->

                            <div class="price-box">
                                <span class="product-price">$49.00</span>
                            </div>
                            <!-- End .price-box -->
                        </div>
                        <!-- End .product-details -->
                    </div>

                    <div class="product-default left-details product-widget">
                        <figure>
                            <a href="product.html">
                                <img src="{{asset('fe-asset')}}/images/products/small/product-5.jpg" width="84" height="84" alt="product">
                                <img src="{{asset('fe-asset')}}/images/products/small/product-5-2.jpg" width="84" height="84" alt="product">
                            </a>
                        </figure>

                        <div class="product-details">
                            <h3 class="product-title"> <a href="product.html">Casual Spring Blue Shoes</a> </h3>

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
                                <span class="product-price">$49.00</span>
                            </div>
                            <!-- End .price-box -->
                        </div>
                        <!-- End .product-details -->
                    </div>

                    <div class="product-default left-details product-widget">
                        <figure>
                            <a href="product.html">
                                <img src="{{asset('fe-asset')}}/images/products/small/product-6.jpg" width="84" height="84" alt="product">
                                <img src="{{asset('fe-asset')}}/images/products/small/product-6-2.jpg" width="84" height="84" alt="product">
                            </a>
                        </figure>

                        <div class="product-details">
                            <h3 class="product-title"> <a href="product.html">Men Black Gentle Belt</a> </h3>

                            <div class="ratings-container">
                                <div class="product-ratings">
                                    <span class="ratings" style="width:100%"></span>
                                    <!-- End .ratings -->
                                    <span class="tooltiptext tooltip-top">5.00</span>
                                </div>
                                <!-- End .product-ratings -->
                            </div>
                            <!-- End .product-container -->

                            <div class="price-box">
                                <span class="product-price">$49.00</span>
                            </div>
                            <!-- End .price-box -->
                        </div>
                        <!-- End .product-details -->
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6 pb-5 pb-md-0 appear-animate" data-animation-name="fadeInLeftShorter" data-animation-delay="800">
                    <h4 class="section-sub-title">SẢN PHẨM MỚI NHẤT</h4>
                    @foreach ($newProducts as $item)
                    <div class="product-default left-details product-widget">
                        <figure>
                            <a href="{{route('detail',$item->slug)}}">
                                <img src="{{ asset('uploads') }}/{{ $item->image }}" width="84" height="84" alt="product">

                            </a>
                        </figure>

                        <div class="product-details">
                            <h3 class="product-title"> <a href="product.html">{{$item->name}}</a>
                            </h3>

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
                                <span class="product-price">{{number_format($item->sale_price)}} VND</span>
                            </div>
                            <!-- End .price-box -->
                        </div>

                    </div>

                    @endforeach


                </div>

                <div class="col-lg-3 col-sm-6 pb-5 pb-md-0 appear-animate" data-animation-name="fadeInLeftShorter" data-animation-delay="1100">
                    <h4 class="section-sub-title">Top Rated Products</h4>
                    <div class="product-default left-details product-widget">
                        <figure>
                            <a href="product.html">
                                <img src="{{asset('fe-asset')}}/images/products/small/product-10.jpg" width="84" height="84" alt="product">
                                <img src="{{asset('fe-asset')}}/images/products/small/product-10-2.jpg" width="84" height="84" alt="product">
                            </a>
                        </figure>

                        <div class="product-details">
                            <h3 class="product-title"> <a href="product.html">Basketball Sports Blue Shoes</a>
                            </h3>

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
                                <span class="product-price">$49.00</span>
                            </div>
                            <!-- End .price-box -->
                        </div>
                        <!-- End .product-details -->
                    </div>

                    <div class="product-default left-details product-widget">
                        <figure>
                            <a href="product.html">
                                <img src="{{asset('fe-asset')}}/images/products/small/product-11.jpg" width="84" height="84" alt="product">
                                <img src="{{asset('fe-asset')}}/images/products/small/product-11-2.jpg" width="84" height="84" alt="product">
                            </a>
                        </figure>

                        <div class="product-details">
                            <h3 class="product-title"> <a href="product.html">Men Sports Travel Bag</a> </h3>

                            <div class="ratings-container">
                                <div class="product-ratings">
                                    <span class="ratings" style="width:100%"></span>
                                    <!-- End .ratings -->
                                    <span class="tooltiptext tooltip-top">5.00</span>
                                </div>
                                <!-- End .product-ratings -->
                            </div>
                            <!-- End .product-container -->

                            <div class="price-box">
                                <span class="product-price">$49.00</span>
                            </div>
                            <!-- End .price-box -->
                        </div>
                        <!-- End .product-details -->
                    </div>

                    <div class="product-default left-details product-widget">
                        <figure>
                            <a href="product.html">
                                <img src="{{asset('fe-asset')}}/images/products/small/product-12.jpg" width="84" height="84" alt="product">
                                <img src="{{asset('fe-asset')}}/images/products/small/product-12-2.jpg" width="84" height="84" alt="product">
                            </a>
                        </figure>

                        <div class="product-details">
                            <h3 class="product-title"> <a href="product.html">Brown HandBag</a> </h3>

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
                                <span class="product-price">$49.00</span>
                            </div>
                            <!-- End .price-box -->
                        </div>
                        <!-- End .product-details -->
                    </div>
                </div>
            </div>
            <!-- End .row -->
        </div>
    </section>
</main>

@endsection
