<section id="service">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-12">
                <div class="cat-title">
                    <span>Dịch vụ tại kính mắt Solar</span>
                </div>
            </div>
            <div class="col-md-12 col-sm-12 col-12">
               
            </div>
            <div class="swiper service-swiper">
                <div class="swiper-wrapper">
                    @foreach($serviceCategory as $item)
                    <div class="swiper-slide">
                        <div class="wrap">
                            <div class="service-thumbnail">
                               <a href="{{route('sharedDetail',[$item->id])}}"> <img src="{{$item->thumbnail}}" alt=""></a>
                            </div>
                            <div class="service-content">
                                <a href=""><h3>{{$item->name}}</h3></a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                {{-- <div class="swiper-pagination"></div> --}}
            </div>
        </div>
    </div>

</section>