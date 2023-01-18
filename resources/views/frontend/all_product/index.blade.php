@extends('frontend.components.master')

@section('css')
<link rel="stylesheet" href="{{asset('assets/css/product/product.css')}}">
@endsection

@section('content')
@include('frontend.home.banner')
@include('frontend.components.breadcrumb', ['name'=>'danh sách sản phẩm'])
@include('frontend.all_product.product')
@include('frontend.components.form_link')
@endsection

@section('script')
<script>
    var swiper = new Swiper(".banner-slide", {
        slidesPerView: 1,
        spaceBetween: 30,
        loop: true,
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
        // autoplay: 
        //     {
        //     delay: 2400,
        //     },
      });
    var feedbackSwiper = new Swiper(".feedbackSwiper", {
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
         breakpoints: {
          // when window width is >= 320px
            320: {
              slidesPerView: 1,
              spaceBetween: 10
            },
            // when window width is >= 480px
            480: {
              slidesPerView: 2,
              spaceBetween: 20
            },
            // when window width is >= 640px
            640: {
              slidesPerView: 2,
              spaceBetween: 30
            },
            1023: {
              slidesPerView: 4,
              spaceBetween: 30
            },
          }

    });
    var serviceSwiper = new Swiper(".service-swiper", {
        spaceBetween: 0,
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
        breakpoints: {
          // when window width is >= 320px
            320: {
              slidesPerView: 1,
              spaceBetween: 10
            },
            // when window width is >= 480px
            480: {
              slidesPerView: 2,
              spaceBetween: 20
            },
            // when window width is >= 640px
            640: {
              slidesPerView: 2,
              spaceBetween: 30
            },
            1023: {
              slidesPerView: 4,
              spaceBetween: 30
            },
          }
    });
    var sharedCorner = new Swiper(".shared-corner", {
        spaceBetween: 20,
        scrollbar: {
          el: ".swiper-scrollbar",
          hide: true,
        },
        breakpoints: {
          // when window width is >= 320px
            320: {
              slidesPerView: 1,
              spaceBetween: 10
            },
            // when window width is >= 480px
            480: {
              slidesPerView: 2,
              spaceBetween: 20
            },
            // when window width is >= 640px
            640: {
              slidesPerView: 2,
              spaceBetween: 20
            },
            1023: {
               slidesPerView: 4,
              spaceBetween: 30
            }
          }
    });
</script>
@endsection
