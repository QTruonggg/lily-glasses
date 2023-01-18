<section id="feedback">
   <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-12">
                <div class="cat-title">
                    <span>Đánh giá của khách hàng</span>
                </div>
            </div>
            <div class="list-feedback">
                <div class="swiper feedbackSwiper">
                    <div class="swiper-wrapper">
                        @foreach ($feedback as $item)
                        <div class="swiper-slide">
                            <div class="avatar">
                                <img src="{{$item->avatar}}" alt="">
                            </div>
                            <div class="content">
                                <div class="rate">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                </div>
                                <div class="comment-feedback">
                                    <p>{{$item->comment}}</p>
                                </div>
                                <div class="name-client">
                                    <p><strong>{{$item->name}}</strong> - Khách hàng</p>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>
   </div>
</section>

