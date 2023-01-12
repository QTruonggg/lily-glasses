@extends('frontend.components.master')

@section('css')
    <link rel="stylesheet" href="{{asset('assets/css/details_product/details_product.css')}}">
@endsection

@section('content')
    @include('frontend.components.breadcrumb',['name'=>'Chi tiết sản phẩm'])
    @include('frontend.details_product.details')
    @include('frontend.details_product.size')
    @include('frontend.details_product.info_img')
    @include('frontend.details_product.care_product')
    @include('frontend.details_product.form_link')
@endsection

@section('script')
 <script>
      var swiper = new Swiper(".swiper-thumb-small", {
        spaceBetween: 10,
        slidesPerView: 5,
        freeMode: true,
        watchSlidesProgress: true,
      });
      var swiper2 = new Swiper(".swiper-thumb-big", {
        spaceBetween: 10,
        effect: "fade",
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
        thumbs: {
          swiper: swiper,
        },
      });

      function openTap(evt, tapName) {
            var i,contents, taps;
            contents = document.getElementsByClassName("contents");
            for (i = 0; i < contents.length; i++) {
                contents[i].style.display = "none";
            }
            taps = document.getElementsByClassName("taps");
            for (i = 0; i < taps.length; i++) { 
                taps[i].className = taps[i].className.replace(" active", "");
            }
            document.getElementById(tapName).style.display = "block";
            evt.currentTarget.className += " active";
        }
x

    function activeColor(params) {
        var cls = document.getElementsByClassName("cl");
        for (let i = 0; i < cls.length; i++) {
            cls.classList.remove('active')
        }
        console.log(params);
    }
</script>
@endsection