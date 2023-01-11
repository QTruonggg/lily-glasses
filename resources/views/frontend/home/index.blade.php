@extends('frontend.components.master')

@section('css')
    <link rel="stylesheet" href="{{asset('assets/css/home/home.css')}}">
@endsection

@section('content')
    @include('frontend.home.banner')
    @include('frontend.home.bestseller')
    @include('frontend.home.module_category')
    @include('frontend.home.question')
    @include('frontend.home.book')

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
</script>
@endsection
