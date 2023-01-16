<section id="details-product">
    <div class="container">
        <div class="row">
            <div class="col-xl-8 col-lg-8 col-md-8 col-12">
                <div class="galleries">
                    <div class="galleries-thumb">
                       <div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff" class="swiper swiper-thumb-big">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <img src="{{$product->thumbnail}}" />
                                </div>
                            </div>
                        </div>
                        <div thumbsSlider="" class="swiper swiper-thumb-small">
                            <div class="swiper-wrapper">
                                @foreach ($product->colors as $color)
                                    <div class="swiper-slide">
                                        <img src="{{$color->image}}" />
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-4 col-12">
                <div class="info">
                    <h1>{{$product->name}}</h1>
                    <div class="product-code">
                        <p>Mã sản phẩm:{{$product->product_code}}</p>
                    </div>
                    <div class="price">
                        <p class="old-price">
                            <span>{{$product->old_price}} đ</span>
                        </p>
                        <p class="current-price">
                            <span>{{$product->current_price}} đ</span>
                        </p>
                    </div>
                    <div class="description">
                        <div class="des-title">
                            <span class="taps active" onclick="openTap(event, 'tinhtrang')">Tình trạng</span>
                            <span class="taps "onclick="openTap(event, 'chitiet')">Chi tiết sản phẩm</span>
                        </div>
                        <div id="tinhtrang" class="contents content-thumb">
                            <p>
                                <img src="{{asset('assets/images/bh.png')}}" alt="">
                            </p>
                        </div>
                        <div  id="chitiet" class="contents content-info" >
                            {!! $product->seo_description !!}
                        </div>
                    </div>
                    <div class="color">
                        <div class="color-group">
                            <div class="row">
                                <div class="col-md-3">
                                    <strong>Màu sắc :</strong> 
                                </div>
                                <div class="col-md-9">
                                    <ul class=" list row gy-2">
                                        @foreach ($product->colors as $color)
                                        <li class="col-4">
                                            <span class="cl h-100" style="background-color:{{$color->color}};"></span>
                                        </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="detail-order-quantity">
                        <ul class="row ps-0 mb-0">
                            <li class="col-md-3">
                                <label for="quantity" class="">
                                    <strong>Số lượng</strong>
                                </label>
                            </li>
                            <li class="col-md-9">
                                <div class="quantity">
                                    <span class="back">-</span>
                                    <span class="qty">1</span>
                                    <span class="next">+</span>
                                </div>
                            </li>
                        </ul>
                    </div>

                    <div class="order">
                        <div>
                            <div class="add-to-cart">Thêm vào giỏ hàng</div>
                            <div class="add-to-cart buy-now">Mua ngay</div>
                        </div>
                    </div>
                    <div class="farallo-policy">
                        <p>Đặc quyền mua sản phẩm tại SOLAR</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</section>