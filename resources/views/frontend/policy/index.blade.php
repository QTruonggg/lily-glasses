@extends('frontend.components.master')

@section('css')
<link rel="stylesheet" href="{{asset('assets/css/product/product.css')}}">
@endsection

@section('content')
<div class="container"> 
        {!! $policy_detail->seo_description !!}
</div>
@endsection

@section('script')
@endsection