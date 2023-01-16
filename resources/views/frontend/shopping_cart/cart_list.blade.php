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
                                    <th scope="col"></th>
                                    <th class="thumnail" scope="col">Số lượng</th>
                                    <th scope="col">Giá</th>
                                    <th scope="col">Tổng tiền</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="tt">
                                        <div class="images">
                                            <a href="#">
                                                <img src="{{asset('assets/images/item.jpeg')}}" alt="">
                                            </a>
                                        </div>
                                        <div class="item-details">
                                            <div class="item-name">
                                                <a href="#">Kính nhựa SOLAR</a>
                                            </div>
                                            <div class="item-color">
                                                <span>Màu sắc : </span>
                                                <span class="cl"></span>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="clear">
                                        <div class="delete">
                                            <a href="#">
                                                <span>Xoá</span>
                                            </a>
                                        </div>
                                    </td>
                                    <td class="input">
                                        <div class="item-box">
                                            <div class="item-option">
                                                <button name="prev"></button>
                                                <input type="email" value="1">
                                                <button name="next"></button>
                                            </div>
                        
                                        </div>
                                    </td>
                                    <td class="price-wrap">
                                        <div class="item-price">
                                            <span class="price">629.000 ₫</span>
                                        </div>
                                    </td>
                                    <td class="total-wrap">
                                        <div class="total">
                                            <span>629.000 ₫</span>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="tt">
                                        <div class="images">
                                            <a href="#">
                                                <img src="{{asset('assets/images/item.jpeg')}}" alt="">
                                            </a>
                                        </div>
                                        <div class="item-details">
                                            <div class="item-name">
                                                <a href="#">Kính mắt SOLAR</a>
                                            </div>
                                            <div class="item-color">
                                                <span>Màu sắc : </span>
                                                <span class="cl"></span>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="clear">
                                        <div class="delete">
                                            <a href="#">
                                                <span>Xoá</span>
                                            </a>
                                        </div>
                                    </td>
                                    <td class="input">
                                        <div class="item-box">
                                            <div class="item-option">
                                                <button name="prev"></button>
                                                <input type="email" value="1">
                                                <button name="next"></button>
                                            </div>
                        
                                        </div>
                                    </td>
                                    <td class="price-wrap">
                                        <div class="item-price">
                                            <span class="price">629.000 ₫</span>
                                        </div>
                                    </td>
                                    <td class="total-wrap">
                                        <div class="total">
                                            <span>629.000 ₫</span>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    
                </div>

                <div class="total-product">
                    <div class="wrap">
                        <div class="tt-prct">
                            <span>Tổng sản phẩm:</span>
                            <span class="quality">1</span>
                        </div>
                        <div class="provisional">
                            <span class="pr">Tạm tính:</span>
                            <span class="price-provisional">629.000 ₫</span>
                        </div>
                    </div>
                </div>


                <div class="btn-order">
                    <div class="wrap-btn">
                        <div class="resrum">
                            <a href="">Tiếp tục mua hàng</a>
                        </div>
                        <div class="order">
                            <a href="{{route('showFormPayment')}}">Đặt hàng</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>