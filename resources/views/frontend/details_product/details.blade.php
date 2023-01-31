
@if(session()->has('success'))
  <div class="txt pb-2 pt-2 ps-2 alert alert-success h3">
    {{ session()->get('success') }}
  </div>
@endif
<script>
    setTimeout(()=> {
        $('.txt').addClass('d-none')
    },3000)
</script>
<section id="details-product">
    <div class="container">
        <div class="row">
            <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12">
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
                                        {{-- <img src="{{$color->image}}" /> --}}
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
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
                            <span class="taps active" onclick="openTap(event, 'process')">Tình trạng</span>
                            <span class="taps "onclick="openTap(event, 'detail')">Chi tiết sản phẩm</span>
                        </div>
                        <div id="process" class="contents content-thumb">
                            <p>
                                <img src="{{asset('assets/images/bh.png')}}" alt="">
                            </p>
                        </div>
                        <div  id="detail" class="contents content-info" >
                            {!! $product->seo_description !!}
                        </div>
                    </div>
                    <div class="color">
                        <div class="color-group">
                            <div class="row">
                                <div class="col-md-4 col-sm-3">
                                    <strong>Màu sắc :</strong> 
                                </div>
                                <div class="col-md-8 col-sm-9">
                                    <ul class=" list row gy-2">
                                        @foreach ($product->colors as $color)
                                        <li class="col-2 items">
                                            <span class="cl h-100 rounded-circle" data-color="{{$color->color}}" style="background-color:{{$color->color}};"></span>
                                        </li>
                                        @endforeach
                                        @error('color')
                                            <span class="text-danger mt-1 d-block">{{ $message }}</span>
                                        @enderror
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="detail-order-quantity">
                        <ul class="row ps-0 mb-0">
                            <li class="col-md-4">
                                <label for="quantity" class="">
                                    <strong>Số lượng</strong>
                                </label>
                            </li>
                            <li class="col-md-8">
                                <div class="quantity">
                                    <span class="back">-</span>
                                    <input id="qty" value="1" name="quantity" style ="width:50px;text-align:center;border:none;outline:none;" ></input>
                                    <span class="next" style="border-left: 1px solid rgb(221, 221, 221);">+</span>
                                </div>
                            </li>
                        </ul>
                    </div>

                    <div class="order">
                        <div>
                            <form action="{{route('addProduct', $product->id)}}">
                                <input type="hidden" class="input-qty" id="quantity" name="qty" value="1" >
                                <input type="hidden" class="input-color" name="color" value="">
                                @if ($product->status == '1')
                                <button type="submit" class="add-to-cart d-block">Thêm vào giỏ hàng</button>
                                @else
                                <button type="submit" class="add-to-cart d-block disabled" disabled >Tạm hết hàng</button>
                                @endif
                            </form>
                            @if ($product->status == '1')
                             <a href="{{route('showFormPayment', [Str::slug($product->name), $product->id])}}" class="add-to-cart buy-now">Mua ngay</a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</section>



<script>
var up = document.querySelector('.next')
var down = document.querySelector('.back')
var next = () => {
    var input = document.getElementById('qty').value
    var parseInput = parseInt(input)
    var newInput  = parseInput + 1
    document.getElementById('qty').value = newInput
    document.getElementById('quantity').value = newInput
}
var prev = () => {
    var input = document.getElementById('qty').value
    var parseInput = parseInt(input)
    var newInput = parseInput - 1
    document.getElementById('qty').value = newInput
    document.getElementById('quantity').value = newInput
    if (input <= 1) {
        document.getElementById('qty').value = 1
        document.getElementById('quantity').value = 1
    }
}
up.addEventListener('click', function() {
    next()
})
down.addEventListener('click', function() {
    prev()
})
</script>