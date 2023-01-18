<section id="share_corner">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-12">
                <div class="news-title">
                    <span>Góc chia sẻ</span>
                </div>
            </div>
            <div class="col-md-12 col-sm-12 col-12">
                <div class="swiper shared-corner">
                    <div class="swiper-wrapper">
                        @foreach ($shared as $item)
                        <div class="swiper-slide">
                            <div class="main-item">
                                <div class="item-new">
                                    <div class="img">
                                        <a href="{{route('sharedDetail',[$item->id])}}">
                                            <img src="{{$item->thumbnail}}">
                                        </a>
                                    </div>
                                    <div class="content">
                                        <h2>
                                            <a href="{{route('sharedDetail',[$item->id])}}">{{$item->name}}</a>
                                        </h2>
                                        <p class="date">{{$item->created_at}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <div class="swiper-scrollbar"></div>
                </div>
            </div>
        </div>
    </div>
</section>