@extends('frontend.components.master')

@section('css')
    <link rel="stylesheet" href="{{asset('assets/css/home/home.css')}}">
@endsection

@section('content')
    @include('frontend.home.banner')

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
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
        autoplay: true,
        loop:true,
      });
</script>
@endsection
