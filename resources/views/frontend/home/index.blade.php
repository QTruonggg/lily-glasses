@extends('frontend.components.master')

@section('css')
    <link rel="stylesheet" href="{{asset('assets/css/home/home.css')}}">
@endsection

@section('content')
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
    @include('frontend.home.banner')
    @include('frontend.home.category_product')
    @include('frontend.home.service')
    @include('frontend.home.module_category')
    @include('frontend.home.question')
    @include('frontend.components.book')
    @include('frontend.home.shared_corner')
    @include('frontend.home.feedback')
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
