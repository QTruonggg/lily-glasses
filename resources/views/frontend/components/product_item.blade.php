    <div class="col-md-3 col-6">
        <div class="item-product">
            <div class="view-img">
                <a href="" class="d-block">
                    <img src="https://cdn.kinhmatlily.com/lily01/2023/1/m2769-trang-1667562308000-1668583615000-1671611095000-1672917663000-1673317847000.jpeg">
                </a>
            </div>
            <div class="info">
                <div class="name">
                    <a href="/kinh-nhua-lily-m2769-p964">Kính Nhựa Lily M2769</a>
                </div>
                <div class="price">
                    <div class="detail-p">
                        <p class="d-flex flex-column">
                            <span class="regular-price">370.000 đ</span>
                            <span class="discount-price">351.500 đ</span>
                        </p>
                    </div>
                </div>
                <div class="list-color">
                    <ul>
                        <li class="" style="background-color:#000;">
                        </li>
                        <li class="" style="background-color:#000;">
                        </li>
                        <li class="" style="background-color:#000;">
                        </li>
                        <li class="" style="background-color:#000;">
                        </li>
                        <li class="" style="background-color:#000;">
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    @pushonce('component-css')
        <style>
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