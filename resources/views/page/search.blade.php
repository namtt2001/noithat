@extends('page.index')
@section('main')
<section>

    <div class="container">
        <h2 class="section-title heading-border ls-20 border-0">Tìm kiếm</h2>
            <div class="beta-products-details">
                <p class="pull-left">Tìm thấy {{count($product)}} sản phẩm</p>
                <div class="clearfix"></div>
            </div>

        <div class="products-slider custom-products owl-carousel owl-theme nav-outer show-nav-hover nav-image-center" data-owl-options="{
            'dots': false,
            'nav': true}">
            @foreach ($product as $item )
            <div class="product-default appear-animate" data-animation-name="fadeInRightShorter">

                <figure>
                    <a href="{{route('detail',$item->slug)}}">
                        <img src="{{ asset('uploads') }}/{{ $item->image }}" width="280" height="280" alt="product">


                    </a>

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


@endsection
