@extends('page.index')
@section('main')
<main class="main">
    <div class="container">
        <nav aria-label="breadcrumb" class="breadcrumb-nav">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="demo8.html"><i class="icon-home"></i></a></li>
                <li class="breadcrumb-item"><a href="#">Products</a></li>
            </ol>
        </nav>
        <div class="product-single-container product-single-default">
            <div class="cart-message d-none">
                <strong class="single-cart-notice">“Men Black Sports Shoes”</strong>
                <span>has been added to your cart.</span>
            </div>

            <div class="row">
                <div class="col-lg-5 col-md-6 product-single-gallery">
                    <div class="product-slider-container">
                        <div class="label-group">
                            <div class="product-label label-hot">HOT</div>
                            <!---->
                            <div class="product-label label-sale">
                                -16%
                            </div>
                        </div>

                        <div class="product-single-carousel owl-carousel owl-theme show-nav-hover">
                            <div class="product-item">
                                <img class="product-single-image" src="{{asset('uploads')}}/{{$detail->image}}" data-zoom-image="{{asset('uploads')}}/{{$detail->image}}" width="468" height="468" alt="product" />
                            </div>
                            @foreach ($detail->images as $item)
                            <div class="product-item">
                                <img class="product-single-image" src="{{asset('uploads')}}/{{$item->image}}" data-zoom-image="{{asset('uploads')}}/{{$detail->image}}" width="468" height="468" alt="product" />
                            </div>
                            @endforeach
                        </div>
                        <!-- End .product-single-carousel -->
                        <span class="prod-full-screen">
                            <i class="icon-plus"></i>
                        </span>
                    </div>

                    <div class="prod-thumbnail owl-dots">
                        <div class="owl-dot">
                            <img src="{{asset('uploads')}}/{{$detail->image}}" width="110" height="110" alt="product-thumbnail" />
                        </div>
                        @foreach ($detail->images as $item)
                            <div class="product-item">
                                <img class="product-single-image" src="{{asset('product_photos')}}/{{$item->image}}" data-zoom-image="
                                " width="468" height="468" alt="product" />
                            </div>
                         @endforeach

                    </div>
                </div>
                <!-- End .product-single-gallery -->
                <div class="col-lg-7 col-md-6 product-single-details">
                    <h1 class="product-title">{{$detail->name}}</h1>

                    <div class="product-nav">
                        <div class="product-prev">
                            <a href="#">
                                <span class="product-link"></span>

                                <span class="product-popup">
                                    <span class="box-content">
                                        <img alt="product" width="150" height="150"
                                            src="{{asset('fe-asset')}}/images/products/product-3.jpg"
                                            style="padding-top: 0px;">

                                        <span>Circled Ultimate 3D Speaker</span>
                                </span>
                                </span>
                            </a>
                        </div>

                        <div class="product-next">
                            <a href="#">
                                <span class="product-link"></span>

                                <span class="product-popup">
                                    <span class="box-content">
                                        <img alt="product" width="150" height="150"
                                            src="{{asset('fe-asset')}}/images/products/product-4.jpg"
                                            style="padding-top: 0px;">

                                        <span>Blue Backpack for the Young</span>
                                </span>
                                </span>
                            </a>
                        </div>
                    </div>

                    <div class="ratings-container">
                        <div class="product-ratings">
                            <span class="ratings" style="width:60%"></span>
                            <!-- End .ratings -->
                            <span class="tooltiptext tooltip-top"></span>
                        </div>
                        <!-- End .product-ratings -->

                        <a href="#" class="rating-link">( 6 Reviews )</a>
                    </div>
                    <!-- End .ratings-container -->



                    <div class="price-box">
                        <del class="old-price">{{number_format($detail->price) }} VND </del>
                        <span class="product-price">{{number_format($detail->sale_price)}} VND</span>
                    </div>
                    <!-- End .price-box -->


                    <!-- End .product-desc -->

                    <ul class="single-info-list">

                        <li>
                            Danh Mục: <strong><a href="#" class="product-category">{{$detail->parentCategory->name}}</a></strong>
                        </li>


                    </ul>
                    <div class="product-filters-container">
                        <div class="product-single-filter select-custom">
                            <label>Màu Sắc:</label>
                            <select name="orderby" class="form-control">
                                <option value="" selected="selected">Chọn một cái
                                </option>
                                <option value="1">Đen</option>
                                <option value="2">Xanh</option>
                                <option value="5">Đỏ</option>
                            </select>
                        </div>

                        <div class="product-single-filter select-custom">
                            <label>KÍCH CỠ:</label>
                            <select name="orderby" class="form-control">
                                <option value="" selected="selected">Chọn một cái
                                </option>
                                <option value="1">Cực lớn</option>
                                <option value="2">Lớn </option>
                                <option value="3">Trung Bình</option>
                                <option value="4">Nhỏ</option>
                            </select>
                        </div>

                        <div class="product-single-filter">
                            <label></label>
                            <a class="font1 text-uppercase clear-btn" href="#">Clear</a>
                        </div>
                        <!---->
                    </div>

                    <div class="product-action">
                        <div class="price-box product-filtered-price">
                            <del class="old-price">{{number_format($detail->price) }} VND </del>
                            <span class="product-price">{{number_format($detail->sale_price)}} VND</span>
                        </div>
                        <form action="{{route('cart.create')}}" method="POST" >
                        <div class="product-single-qty">
                            <input class="horizontal-quantity form-control" type="text"value="1"name ="quantity" >
                        </div>
                            @csrf
                            <input type="hidden" class="form-control" id="" name="product_id" value="{{$detail->id}}">
                            <button class="btn btn-dark  mr-2" title="Thêm giỏ hàng">Thêm giỏ hàng</button>

                        </form>

                        <a href="{{route('cart.index')}}" class="btn btn-gray view-cart d-none">View cart</a>
                    </div>
                    <!-- End .product-action -->

                    <hr class="divider mb-0 mt-0">
                    <!-- End .product single-share -->
                </div>
                <!-- End .product-single-details -->
            </div>
            <!-- End .row -->
        </div>
        <!-- End .product-single-container -->

        <div class="product-single-tabs">
            <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="product-tab-desc" data-toggle="tab" href="#product-desc-content" role="tab" aria-controls="product-desc-content" aria-selected="true">Description</a>
                </li>
            </ul>

            <div class="tab-content">
                <div class="tab-pane fade show active" id="product-desc-content" role="tabpanel" aria-labelledby="product-tab-desc">
                    <div class="product-desc-content">
                        <a> {{$detail->description}}</a>
                    </div>
                    <!-- End .product-desc-content -->
                </div>
                <!-- End .tab-pane -->


                <!-- End .tab-pane -->


                <!-- End .tab-pane -->

                <!-- End .tab-pane -->
            </div>
            <!-- End .tab-content -->
        </div>
        <!-- End .product-single-tabs -->

        <div class="products-section pt-0">
            <h2 class="section-title pb-3">Sản Phẩm Liên Quan</h2>

            <div class="products-slider owl-carousel owl-theme dots-top dots-small">
                @foreach ($related as $item)
                 <div class="product-default inner-quickview inner-icon">
                    <figure>
                        <a href="{{route('detail',$item->slug)}}">
                            <img src="{{asset('uploads')}}/{{$item->image}}" alt="product" width="300" height="300" />

                        </a>
                        <div class="btn-icon-group">
                            <a href="#" class="btn-icon btn-add-cart product-type-simple"><i
                                    class="icon-shopping-cart"></i></a>
                        </div>
                        <a href="{{route('detail',$item->slug)}}" class="btn-quickview" title="Quick View">Quick
                            View</a>
                    </figure>
                    <div class="product-details">
                        <div class="category-wrap">
                            <div class="category-list">
                                <a href="demo8-shop.html" class="product-category">{{$item->parentCategory->name}}</a>,

                            </div>
                            <a href="wishlist.html" title="Wishlist" class="btn-icon-wish"><i
                                    class="icon-heart"></i></a>
                        </div>
                        <h3 class="product-title">
                            <a href="demo8-product.html">{{$item->name}}</a>
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
                            <del class="old-price">{{number_format($item->price) }} VND </del>
                            <span class="product-price">{{number_format($item->sale_price)}} VND</span>
                        </div>
                        <!-- End .price-box -->
                    </div>
                    <!-- End .product-details -->
                </div>

                @endforeach


            </div>
            <!-- End .products-slider -->
        </div>
        <!-- End .products-section -->

        <hr class="mt-0 m-b-5" />
        <!-- End .row -->
    </div>
    <!-- End .container -->
</main>
@endsection
