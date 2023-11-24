@extends('page.index')
@section('main')
<main class="main">
    <div class="container">
        <ul class="checkout-progress-bar d-flex justify-content-center flex-wrap">
            <li class="active">
                <a href="cart.html">Shopping Cart</a>
            </li>

        </ul>

        <div class="row">
            <div class="col-lg-8">
                <div class="cart-table-container">
                    <table class="table table-cart">
                        <thead>
                            <tr>
                                <th class="thumbnail-col"></th>
                                <th class="product-col">Sản Phẩm</th>
                                <th class="price-col">Giá </th>
                                <th class="qty-col">Số Lượng</th>
                                <th class="text-right">Tổng</th>
                                <th class="text-right"></th>

                            </tr>
                        </thead>
                        <tbody>
                            @if (isset($cart))
                            @foreach ($cart as $item)
                            <tr class="product-row">
                                <td>
                                    <figure class="product-image-container">
                                        <img src="{{ asset('uploads')}}/{{ $item->product->image }}"height="80" width="80">
                                        <form action="{{ route('cart.delete',$item->id)}}" method="POST" >
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="fa fa-trash"></button>

                                        </form>

                                    </figure>
                                </td>
                                <td class="product-col">
                                    <h5 class="product-title">
                                        <a href="product.html">{{ $item->product->name }}</a>
                                    </h5>
                                </td>
                                <td>{{number_format( $item->product->price) }}</td>
                                <td>
                                    <div class="product-single-qty">
                                        <input class="horizontal-quantity form-control" type="text" name="quantity" value="{{$item ->quantity}}" autocomplete="off" size="2">
                                    </div><!-- End .product-single-qty -->
                                </td>
                                <td class="text-right"><span class="subtotal-price">{{number_format($item->product->price * $item ->quantity)}} VND</span></td>
                            </tr>
                            @endforeach
                            @endif


                        </tbody>


                        <tfoot>
                            <tr>
                                <td colspan="5" class="clearfix">


                                    <div class="float-right">
                                        <button type="submit" class="btn btn-shop btn-update-cart">
                                            Update Cart
                                        </button>
                                    </div><!-- End .float-right -->
                                </td>
                            </tr>
                        </tfoot>
                    </table>
                </div><!-- End .cart-table-container -->
            </div><!-- End .col-lg-8 -->

            <div class="col-md-3">
                <div class="cart-summary">
                    <h3>Thông tin giỏ hàng</h3>

                    <table class="table table-totals">
                        <ul>
							<li>Số lượng sản phẩm :    <span>{{$sum}}</span></li>
						</ul>
                        <tfoot>
                            <tr>
                                <li>Tổng Tiền :     <span>{{number_format($sum2)}} VND</span></li>
                            </tr>
                        </tfoot>
                    </table>

                    <div class="checkout-methods">
                        <a href="{{route('checkout')}}" class="btn btn-block btn-red"> Đặt hàng <i class="fa fa-arrow-right"></i></a>
                    </div>
                </div><!-- End .cart-summary -->
            </div><!-- End .col-lg-4 -->
        </div><!-- End .row -->
    </div><!-- End .container -->

    <div class="mb-6"></div><!-- margin -->
</main>
    @endsection



