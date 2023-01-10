<div class="swiper banner-slide">
    <div class="swiper-wrapper">
        <div class="swiper-slide">
            <img src="{{asset('assets/images/logo.png')}}" alt="">
        </div>
        @foreach($banner as $banner)
        <div class="swiper-slide">
            <img src="{{$banner->image}}" alt="">
        </div>
        @endforeach
    </div>
    <!-- navigation -->
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
    <!-- pagination ???? -->
        <!-- content ? -->
    <!-- end pagination -->
</div>