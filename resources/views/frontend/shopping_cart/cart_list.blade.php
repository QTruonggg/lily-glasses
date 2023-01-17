  <div id="cart_list">
        <div class="container-fluid">
            <div class="form-wrap">
                <div class="headding">
                    <h3>GIỎ HÀNG</h3>
                </div>
                <div class="form">
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th class="product" scope="col">Sản phẩm</th>
                                    <th class="thumnail" scope="col">Số lượng</th>
                                    <th scope="col">Giá</th>
                                    <th scope="col">Tổng tiền</th>
                                    <th scope="col">Thao tác</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if (Cart::count() != 0)
                                    @foreach ($productCart as $product)
                                        <tr>
                                            <td class="tt">
                                                <div class="images">
                                                    <a href="{{route('showhome')}}">
                                                        <img src="{{$product->options->thumbnail}}" alt="">
                                                    </a>
                                                </div>
                                                <div class="item-details">
                                                    <div class="item-name">
                                                        <a href="#">{{$product->name}}</a>
                                                    </div>
                                                    <div class="item-code">
                                                        <span > mã sản phẩm: {{$product->options->product_code}}</span>
                                                    </div>
                                                    <div class="item-color">
                                                        <span>Màu sắc: </span>
                                                        <span class="cl" style="background-color:{{$product->options->color}} ;"></span>
                                                    </div>
                                                </div>
                                            </td>
                                            
                                            <td class="input">
                                                <div class="item-box">
                                                    <div class="item-option">
                                                        <input type="text"  value="{{$product->qty}}">
                                                    </div>
                                
                                                </div>
                                            </td>
                                            <td class="price-wrap">
                                                <div class="item-price">
                                                    <span class="old_price d-block pb-1" style="text-decoration:line-through; color:#999;">{{$product->options->old_price}} đ</span>
                                                    <span class="price">{{$product->price}} ₫</span>
                                                </div>
                                            </td>
                                            <td class="total-wrap">
                                                <div class="total">
                                                    <span>{{$product->price * $product->qty}} ₫</span>
                                                </div>
                                            </td>
                                            <td class="clear">
                                                <div class="delete">
                                                    <a href="{{route('deleteCart', $product->rowId)}}">
                                                        <span>Xoá</span>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                @else 
                                    <h2 style="text-align:center; padding: 60px 10px 110px; color:#999; font-weight:600;">Giỏ hàng trống</h2>
                                @endif
                            </tbody>
                        </table>
                    </div>
                    
                </div>

                <div class="total-product">
                    <div class="wrap">
                        <div class="tt-prct">
                            <span>Tổng sản phẩm:</span>
                            <span class="quality">{{Cart::count()}}</span>
                        </div>
                        <div class="provisional">
                            <span class="pr">Tạm tính:</span>
                            <span class="price-provisional">{{Cart::subtotal()}} ₫</span>
                        </div>
                    </div>
                </div>


                <div class="btn-order">
                    <div class="wrap-btn">
                        <div class="resrum">
                            <a href="{{route('showhome')}}">Tiếp tục mua hàng</a>
                        </div>
                        <div class="order">
                            <a href="{{route('showFormPayment')}}">Đặt hàng</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>