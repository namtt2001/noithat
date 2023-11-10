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
                                <img class="product-single-image" src="user/images/demoes/demo8/products/zoom/product-1-big.jpg" data-zoom-image="user/images/demoes/demo8/products/zoom/product-1-big.jpg" width="468" height="468" alt="product" />
                            </div>

                            <div class="product-item">
                                <img class="product-single-image" src="user/images/demoes/demo8/products/zoom/product-5-big.jpg" data-zoom-image="user/images/demoes/demo8/products/zoom/product-5-big.jpg" width="468" height="468" alt="product" />
                            </div>
                        </div>
                        <!-- End .product-single-carousel -->
                        <span class="prod-full-screen">
                            <i class="icon-plus"></i>
                        </span>
                    </div>

                    <div class="prod-thumbnail owl-dots">
                        <div class="owl-dot">
                            <img src="user/images/demoes/demo8/products/zoom/product-1.jpg" width="110" height="110" alt="product-thumbnail" />
                        </div>
                        <div class="owl-dot">
                            <img src="user/images/demoes/demo8/products/zoom/product-2.jpg" width="110" height="110" alt="product-thumbnail" />
                        </div>
                        <div class="owl-dot">
                            <img src="user/images/demoes/demo8/products/zoom/product-3.jpg" width="110" height="110" alt="product-thumbnail" />
                        </div>
                        <div class="owl-dot">
                            <img src="user/images/demoes/demo8/products/zoom/product-4.jpg" width="110" height="110" alt="product-thumbnail" />
                        </div>
                        <div class="owl-dot">
                            <img src="user/images/demoes/demo8/products/zoom/product-5.jpg" width="110" height="110" alt="product-thumbnail" />
                        </div>
                    </div>
                </div>
                <!-- End .product-single-gallery -->

                <div class="col-lg-7 col-md-6 product-single-details">
                    <h1 class="product-title">
                        Sofa da màu nâu</h1>

                    <div class="product-nav">
                        <div class="product-prev">
                            <a href="#">
                                <span class="product-link"></span>

                                <span class="product-popup">
                                    <span class="box-content">
                                        <img alt="product" width="150" height="150"
                                            src="user/images/products/product-3.jpg"
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
                                            src="user/images/products/product-4.jpg"
                                            style="padding-top: 0px;">

                                        <span>Blue Backpack for the Young</span>
                                </span>
                                </span>
                            </a>
                        </div>
                    </div>


                    <!-- End .ratings-container -->

                    <hr class="short-divider">

                    <div class="price-box">

                    </div>
                    <div class="product-desc">
                        <p>
                            Ghế sofa thư giãn bằng da 178 x 70 x 40cm ( màu nâu ) - 3 chế độ ghế phòng khách phòng ngủ- ghế lười nằm. Khung thân chắc chắn, bền bỉ và linh hoạt. Kích thước và công năng phù hợp cho mọi lứa tuổi. Thiết kế thẩm mỹ mang đến tính.
                        </p>
                    </div>
                    <ul class="single-info-list">
                        <li>
                            CATEGORY: <strong><a href="#" class="product-category">Fashion</a></strong>
                        </li>
                    </ul>

                    <div class="product-filters-container">
                        <div class="product-single-filter select-custom">
                            <label>COLOR:</label>
                            <select name="orderby" class="form-control">
                                <option value="" selected="selected">CHOOSE AN OPTION
                                </option>
                                <option value="1">BLACK</option>
                                <option value="2">BLUE</option>
                                <option value="3">INDEGO</option>
                                <option value="4">RIGHT-BLUE</option>
                                <option value="5">RED</option>
                            </select>
                        </div>

                        <div class="product-single-filter select-custom">
                            <label>SIZE:</label>
                            <select name="orderby" class="form-control">
                                <option value="" selected="selected">CHOOSE AN OPTION
                                </option>
                                <option value="1">EXTRA LARGE</option>
                                <option value="2">LARGE</option>
                                <option value="3">MEDIUM</option>
                                <option value="4">SMALL</option>
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
                            <del class="old-price"><span>$286.00</span></del>
                            <span class="product-price">$245.00</span>
                        </div>

                        <div class="product-single-qty">
                            <input class="horizontal-quantity form-control" type="text">
                        </div>
                        <!-- End .product-single-qty -->

                        <a href="javascript:;" class="btn btn-dark add-cart mr-2" title="Add to Cart">Add to
                            Cart</a>

                        <a href="cart.html" class="btn btn-gray view-cart d-none">View cart</a>
                    </div>
                    <!-- End .product-action -->

                    <hr class="divider mb-0 mt-0">

                    <div class="product-single-share mb-2 mb-md-0">
                        <label class="sr-only">Share:</label>

                        <div class="social-icons mr-2">
                            <a href="#" class="social-icon social-facebook icon-facebook" target="_blank" title="Facebook"></a>
                            <a href="#" class="social-icon social-twitter icon-twitter" target="_blank" title="Twitter"></a>
                            <a href="#" class="social-icon social-linkedin fab fa-linkedin-in" target="_blank" title="Linkedin"></a>
                            <a href="#" class="social-icon social-gplus fab fa-google-plus-g" target="_blank" title="Google +"></a>
                            <a href="#" class="social-icon social-mail icon-mail-alt" target="_blank" title="Mail"></a>
                        </div>
                        <!-- End .social-icons -->

                        <a href="wishlist.html" class="btn-icon-wish add-wishlist" title="Add to Wishlist"><i
                                class="icon-wishlist-2"></i><span>Add to
                                Wishlist</span></a>
                    </div>
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

                <li class="nav-item">
                    <a class="nav-link" id="product-tab-size" data-toggle="tab" href="#product-size-content" role="tab" aria-controls="product-size-content" aria-selected="true">Size Guide</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" id="product-tab-tags" data-toggle="tab" href="#product-tags-content" role="tab" aria-controls="product-tags-content" aria-selected="false">Additional
                        Information</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" id="product-tab-reviews" data-toggle="tab" href="#product-reviews-content" role="tab" aria-controls="product-reviews-content" aria-selected="false">Reviews (1)</a>
                </li>
            </ul>

            <div class="tab-content">
                <div class="tab-pane fade show active" id="product-desc-content" role="tabpanel" aria-labelledby="product-tab-desc">
                    <div class="product-desc-content">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, nostrud ipsum consectetur sed do, quis nostrud exercitation ullamco laboris
                            nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat.</p>
                        <ul>
                            <li>Any Product types that You want - Simple, Configurable
                            </li>
                            <li>Downloadable/Digital Products, Virtual Products
                            </li>
                            <li>Inventory Management with Backordered items
                            </li>
                        </ul>
                        <p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                    </div>
                    <!-- End .product-desc-content -->
                </div>
                <!-- End .tab-pane -->

                <div class="tab-pane fade" id="product-size-content" role="tabpanel" aria-labelledby="product-tab-size">
                    <div class="product-size-content">
                        <div class="row">
                            <div class="col-md-4">
                                <img src="user/images/products/single/body-shape.png" alt="body shape" width="217" height="398">
                            </div>
                            <!-- End .col-md-4 -->


                        </div>
                        <!-- End .row -->
                    </div>
                    <!-- End .product-size-content -->
                </div>
                <!-- End .tab-pane -->
            </div>
            <!-- End .tab-content -->
        </div>
        <!-- End .product-single-tabs -->




        <!-- End .row -->
    </div>
    <!-- End .container -->
</main>
@endsection
