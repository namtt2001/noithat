@extends('page.index')
@section('main')
<main class="main main-test">
    <div class="container checkout-container">
        <ul class="checkout-progress-bar d-flex justify-content-center flex-wrap">

            <li class="active">
                <h1 href="checkout.html">Đặt Hàng</h1>
            </li>

        </ul>





        <div class="row">
            <div class="col-lg-7">
                <ul class="checkout-steps">
                    <li>
                        <h3 class="step-title">Thông tin người nhận </h3>
                        <form action="{{route('order')}}" method="post">
                        <tbody>
                            <form action="#" id="checkout-form">
                            <div class="form-group">
                                <label>Họ tên
                                    <abbr class="required" title="required">*</abbr></label>
                                <input type="text" class="form-control" name = "name" placeholder="Họ Và Tên người nhận ..." required />
                            </div>
                            <div class="form-group">
                                <label>Tỉnh / Thành Phố
                                    <abbr class="required" title="required">*</abbr></label>
                                <input type="text" class="form-control"  required />

                            </div>
                            <div class="form-group">
                                <label>Huyện / Quận
                                    <abbr class="required" title="required">*</abbr></label>
                                <input type="text" class="form-control" required />
                            </div>

                            <div class="select-custom">
                                <label>Xã / Thị Trấn <abbr class="required" title="required">*</abbr></label>
                                <select name="orderby" class="form-control">
                                    <option value="" selected="selected">NY</option>
                                    <option value="1">Brunei</option>
                                    <option value="2">Bulgaria</option>
                                    <option value="3">Burkina Faso</option>
                                    <option value="4">Burundi</option>
                                    <option value="5">Cameroon</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Địa chỉ chi tiết
                                    <abbr class="required" title="required">*</abbr></label>
                                <input type="text" class="form-control" required />
                            </div>

                            <div class="form-group">
                                <label>Số điện thoại <abbr class="required" title="required">*</abbr></label>
                                <input type="tel" class="form-control" required />
                            </div>

                            <div class="form-group">
                                <label>Email
                                    <abbr class="required" title="required">*</abbr></label>
                                <input type="email" class="form-control" required />
                            </div>



                            <div class="form-group">
                                <label class="order-comments">Order notes (optional)</label>
                                <textarea class="form-control" placeholder="Notes about your order, e.g. special notes for delivery." required></textarea>
                            </div>
                        </form>
                        </tbody>
                        </form>


                    </li>
                </ul>
            </div>
            <!-- End .col-lg-8 -->

            <div class="col-lg-5">
                <div class="order-summary">
                    <h3>Bạn đã đặt </h3>

                    <table class="table table-mini-cart">
                        <thead>
                            <tr>
                                <th colspan="2">Product</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($cart as $item)
                                    <tr>
                                        <td class="cart_product">
                                            <a href=""><img src="{{ asset('uploads/' . $item->product->image) }}" height="80" width="80"></a>
                                        </td>
                                        <td class="cart_description">
                                            <h4><a href="">{{$item->product->name}}</a></h4>
                                        </td>
                                        <td class="cart_price">
                                            <p>{{$item->product->price}}</p>
                                        </td>
                                        <td class="cart_quantity">
                                            <div class="cart_quantity_button">

                                                <input class="cart_quantity_input" type="text" name="quantity" value="{{$item ->quantity}}" autocomplete="off" size="2">

                                            </div>
                                        </td>
                                        <td class="cart_total">
                                            <p class="cart_total_price">{{$item->product->price * $item ->quantity}}</p>
                                        </td>

                                        <td class="cart_delete">
                                            <form action="{{ route('cart.delete',$item->id)}}" method="POST" >
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="fa fa-trash"></button>

                                            </form>
                                        </td>

                                    </tr>
                            @endforeach
                        </tbody>
                        <tfoot>

                            <tr class="order-shipping">
                                <td class="text-left" colspan="2">
                                    <h4 class="m-b-sm">Giao hàng</h4>

                                    <div class="form-group form-group-custom-control">
                                        <div class="custom-control custom-radio d-flex">
                                            <input type="radio" class="custom-control-input" name="radio" checked />
                                            <label class="custom-control-label">Local Pickup</label>
                                        </div>
                                        <!-- End .custom-checkbox -->
                                    </div>
                                    <!-- End .form-group -->

                                    <div class="form-group form-group-custom-control mb-0">
                                        <div class="custom-control custom-radio d-flex mb-0">
                                            <input type="radio" name="radio" class="custom-control-input">
                                            <label class="custom-control-label">Flat Rate</label>
                                        </div>
                                        <!-- End .custom-checkbox -->
                                    </div>
                                    <!-- End .form-group -->
                                </td>

                            </tr>

                            <tr class="order-total">
                                <td>
                                    <h4>Tổng Tiền : </h4>


                                    <b class="total-price"><span>{{number_format($sum2)}} VND</span></b>
                                </td>
                            </tr>
                        </tfoot>
                    </table>

                    <div class="payment-methods">
                        <h4 class="">Phương Thức Thanh Toán</h4>
                        <div class="info-box with-icon p-0">
                            <p>
                                Xin lỗi, có vẻ như không có phương thức thanh toán có sẵn
                            </p>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-dark btn-place-order" form="checkout-form">
                        Đặt hàng
                    </button>
                </div>
                <!-- End .cart-summary -->
            </div>
            <!-- End .col-lg-4 -->
        </div>
        <!-- End .row -->
    </div>
    <!-- End .container -->
</main>
@endsection

