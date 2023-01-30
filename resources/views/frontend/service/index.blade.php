@extends('frontend.components.master')

@section('css')
<link rel="stylesheet" href="{{asset('assets/css/product/product.css')}}">
@endsection

@section('content')
@include('frontend.components.breadcrumb', ['name'=>$service_detail->name])
<div class="container"> 
        {!! $service_detail->seo_description !!}
</div>
@endsection

@section('script')
@endsection