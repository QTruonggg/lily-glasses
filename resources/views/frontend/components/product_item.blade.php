    <div class="item-product pt-0">
        <div class="view-img">
            <a href="{{route('showDetailsProduct', [$product->id,Str::slug($product->name)])}}" class="d-flex justify-content-center" style="max-height:260px; min-height:260px; ">
                <img class="thumb" src="{{$product->thumbnail}}">
            </a>
        </div>
        <div class="info">
            <div class="name">
                <a href="{{route('showDetailsProduct', [$product->id,Str::slug($product->name)])}}">{{$product->name}}</a>
            </div>
            <div class="price">
                <div class="detail-p">
                    <p class="d-flex flex-column">
                        <span class="regular-price">{{$product->old_price}}đ</span>
                        <span class="discount-price">{{$product->current_price}} đ</span>
                    </p>
                </div>
            </div>
            <div class="list-color">
                <ul>
                     @foreach ($product->colors as $color)
                     <li class="color" onclick="replaceImage()" style="background-color:{{$color->color}};">
                        <input type="hidden" name="{{$color->image}}">
                     </li>
                     @endforeach
                </ul>
            </div>
        </div>
    </div>
    @pushonce('component-css')
        <style> 
            .item-product {
                padding:0 0 30px 0;
                margin-bottom: 10px;
            }
            .item-product:hover {
                box-shadow: 0 4px 8px rgb(0 0 0 / 25%);
            }
            .info {
                padding: 0 8px 8px 8px;
            }
            .info .name a{
                text-align: left;
                display: inline-block;
                padding: 10px 0;
                text-transform: uppercase;
                color: #262626;
                font-weight: 600;
                margin-bottom: 5px;
                margin-top: 5px;
                text-decoration: none;
            }
            .info .price .detail-p .regular-price {
                text-decoration: line-through;
                color: #afaaaa;
                font-size: 13px;
            }
            .info .price .detail-p .discount-price {
                font-weight: 700;
                font-size: 16px;
                text-align: left;
                letter-spacing: .08em;
                color: #606060;
            }
            .info .list-color ul {
                margin-bottom: 0;
                padding-left: 0;

            }
            .info .list-color ul li {
                display: inline-block;
                width: 20px;
                height: 20px;
                border-radius: 50%;
                margin-right: 5px;
                cursor: pointer;
                border: 1px solid #f3f5f7;
                background-origin: border-box;
            }
        </style>
    @endpushonce

    <script>
        
        function replaceImage() {
            var name = $('input[type="hidden"]').attr('name')
            $('.thumb').attr('src', name)
        }
    </script>