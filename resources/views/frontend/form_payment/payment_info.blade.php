<section id="page-payment">
    <div class="container">
        @if(session()->has('success'))
            <div class="txt pb-2 pt-2 ps-2 alert alert-success h3">
            {{ session()->get('success') }}
            </div>
        @endif
        <div class="row">
            <div class="col-md-12 col-12">
                <div class="payment-top">
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-12">
                            <form action="{{route('sendRequest')}}" class="payment-main" method="post">
                                @csrf
                                <div class="row">
                                    <div class="col-xl-7 col-lg-7 col-md-7 col-12">
                                        <div class="list-payment-item">
                                            <div class="main">
                                                <div class="item-info">
                                                    <h2>Thông tin khách hàng</h2>
                                                    <div class="content">
                                                        <div class="item">
                                                            <div class="row">
                                                                <div class="col-xl-3 col-lg-3 col-md-3 col-12">
                                                                    Họ và tên 
                                                                    <span class="required">*</span>
                                                                </div>
                                                                <div class="col-xl-9 col-lg-9 col-md-9 col-12">
                                                                    <input id="name" class="form-control" name="name"  value="">
                                                                     @error('name')
                                                                        <span class="text-danger mt-1 d-block">{{ $message }}</span>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="item">
                                                            <div class="row">
                                                                <div class="col-xl-3 col-lg-3 col-md-3 col-12">
                                                                    Số điện thoại 
                                                                    <span class="required">*</span>
                                                                </div>
                                                                <div class="col-xl-9 col-lg-9 col-md-9 col-12">
                                                                    <input type='number' id="phone" class="form-control" name="phoneNumber" autocomplete="off" pattern="^[0-9-+()._ ]*$" value="">
                                                                    @error('phoneNumber')
                                                                        <span class="text-danger mt-1 d-block">{{ $message }}</span>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                         <div class="list-payment-item">
                                            <div class="main">
                                                <div class="item-info">
                                                    <h2>Địa chỉ giao hàng</h2>
                                                    <div class="content">
                                                        <div class="item">
                                                            <div class="row">
                                                                <div class="col-xl-3 col-lg-3 col-md-3 col-12">
                                                                    Tỉnh / Thành phố
                                                                    <span class="required">*</span>
                                                                </div>
                                                                <div class="col-xl-9 col-lg-9 col-md-9 col-12">
                                                                    <input id="province" class="form-control" name="province" value="">
                                                                    @error('province')
                                                                        <span class="text-danger mt-1 d-block">{{ $message }}</span>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="item">
                                                            <div class="row">
                                                                <div class="col-xl-3 col-lg-3 col-md-3 col-12">
                                                                    Quận / Huyện
                                                                    <span class="required">*</span>
                                                                </div>
                                                                <div class="col-xl-9 col-lg-9 col-md-9 col-12">
                                                                    <input id="district" class="form-control" name="district"  value="">
                                                                    @error('district')
                                                                        <span class="text-danger mt-1 d-block">{{ $message }}</span>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="item">
                                                            <div class="row">
                                                                <div class="col-xl-3 col-lg-3 col-md-3 col-12">
                                                                    Phường / Xã <span class="required">*</span>
                                                                </div>
                                                                <div class="col-xl-9 col-lg-9 col-md-9 col-12">
                                                                    <input id="ward" class="form-control" name="ward"  value="">
                                                                    @error('ward')
                                                                        <span class="text-danger mt-1 d-block">{{ $message }}</span>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                        </div>
                                                         <div class="item">
                                                            <div class="row">
                                                                <div class="col-xl-3 col-lg-3 col-md-3 col-12">
                                                                    Địa chỉ <span class="required">*</span>
                                                                </div>
                                                                <div class="col-xl-9 col-lg-9 col-md-9 col-12">
                                                                    <input id="address" class="form-control" name="address"  value="">
                                                                    @error('address')
                                                                        <span class="text-danger mt-1 d-block">{{ $message }}</span>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                        </div>
                                                         <div class="item">
                                                            <div class="row">
                                                                <div class="col-xl-3 col-lg-3 col-md-3 col-12">
                                                                    Ghi chú <span class="required">*</span>
                                                                </div>
                                                                <div class="col-xl-9 col-lg-9 col-md-9 col-12">
                                                                    <textarea id="note" class="form-control" name="note" value=""></textarea>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-5 col-lg-5 col-md-5 col-12">
                                        <div class="payment-sum item-info">
                                            <div class="title">Đơn hàng</div>
                                            <div class="content">
                                                <div class="main-content">
                                                    <div class="list-product">
                                                        <div class="sum-title">{{Cart::count()}} sản phẩm</div>
                                                        <div class="item-product">
                                                            @foreach ($productCart as $product)
                                                            <div class="row pb-2">
                                                                <div class="col-xl-6 col-lg-6 col-md-6 col-6">
                                                                    <p class="name">{{$product->name}}</p>
                                                                </div>
                                                                <div class="col-xl-2 col-lg-2 col-md-2 col-2">
                                                                    <p class="quantity">x{{$product->qty}}</p>
                                                                </div>
                                                                <div class="col-xl-4 col-lg-4 col-md-4 col-4">
                                                                    <p class="price">{{$product->price * $product->qty}} đ</p>
                                                                </div>
                                                            </div>
                                                            @endforeach
                                                        </div>
                                                    </div>
                                                    <div class="item">
                                                        <div class="row">
                                                            <div class="col-xl-6 col-lg-6 col-md-6 col-6">Đơn hàng</div>
                                                            <div class="col-xl-6 col-lg-6 col-md-6 col-6 text-end">{{Cart::subtotal()}} đ</div>
                                                        </div>
                                                    </div>
                                                    <div class="item none-border">
                                                        <div class="row">
                                                            <div class="col-xl-6 col-lg-6 col-md-6 col-6">Ship</div>
                                                            <div class="col-xl-6 col-lg-6 col-md-6 col-6 text-end">30.000 đ</div>
                                                        </div>
                                                    </div>
                                                    <div class="total">
                                                        <div class="row">
                                                            <div class="col-xl-6 col-lg-6 col-md-6 col-6">
                                                                <span>Tổng đơn</span>
                                                            </div>
                                                            <div class="col-xl-6 col-lg-6 col-md-6 col-6 text-end">
                                                                <strong>{{Cart::subtotal()}}đ</strong>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <button type="submit" class="payment-now">Đặt hàng</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-7 col-lg-7 col-md-7 col-12">
                                        <div class="item-info">
                                            <h2>Phương thức thanh toán</h2>
                                            <div class="content">
                                                <div class="item">
                                                    <label class="radio-cm-round">
                                                        <input type="radio" name="id_payment_method" id="dola" class="dola" value="11" checked>
                                                        <span class="checkmark"></span>
                                                         Thanh toán trực tiếp khi nhận hàng
                                                    </label>
                                                </div>
                                                <div class="item">
                                                    <label class="radio-cm-round">
                                                        <input type="radio" name="id_payment_method" id="bankking" class="dola" value="13">
                                                        <span class="checkmark"></span>
                                                            Thanh toán bằng Internet Banking
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-5 col-lg-5 col-md-5 col-12">
                                        <div class="item-info">
                                            <h2>Tài khoản nhận thanh toán</h2>
                                            <div class="content">
                                                <p>Người nhận: Công Ty TNHH Thương Mại Và Dịch Vụ SOLAR Group Việt Nam</p>
                                                <p>Số tài khoản: </p>
                                                <p>Tại: Ngân hàng Thương Mại Cổ Phần Kỹ Thương Việt Nam (TCB) - Chi nhánh Thanh Xuân</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <input type="hidden" name="product_rowId[]" value="{{Cart::content()}}">
                                <input type="hidden" name="total" value="{{Cart::subtotal()}}">
                                <input type="hidden" name="qty" value="{{Cart::count()}}">
                                <input type="hidden" name="status" value="1">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>