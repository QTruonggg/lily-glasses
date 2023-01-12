<div class="swiper banner-slide">
    <div class="swiper-wrapper">
        @foreach($banner as $banner)
        <div class="swiper-slide">
            <a href="#">
                <img src="{{$banner->image}}" alt="">
            </a>
        </div>
        @endforeach
    </div>
    <div class="swiper-pagination"></div>
    <!-- navigation -->
    <!-- pagination ???? -->
        <!-- content ? -->
        <!-- end pagination -->
</div>
<div class="banner-content">
    <div>Chọn kính thời trang - Nhớ tới ROLAR</div>
</div>

@pushonce('component-css')
<style>
    .banner-slide{
        width: 100%;
        height: 100%;
    }
    .swiper-slide img{
        max-width: 100%;
        vertical-align: middle;
        object-fit: cover;
    } 
    .banner-content{
        display: block;
    }
    .banner-content div{
        text-align: center;
        font-weight: bold;
        height: 40px;
        line-height: 40px;
        background-color: rgb(246, 246, 247);
        color: rgb(193, 194, 196);
        font-size: 18px;
    }

    .swiper-pagination span{
        background-color: #ffe29e;
    }
</style>
@endpushonce
