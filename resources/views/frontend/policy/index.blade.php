@extends('frontend.components.master')

@section('css')
<link rel="stylesheet" href="{{asset('assets/css/product/product.css')}}">
@endsection

@section('content')
@php
    dd($policy_detail)
@endphp
@include('frontend.components.breadcrumb', ['name'=>$policy_detail->name])
<div class="container"> 
        {!! $policy_detail->seo_description !!}
</div>
@endsection

@section('script')
@endsection