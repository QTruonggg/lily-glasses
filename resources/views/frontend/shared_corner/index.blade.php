@extends('frontend.components.master')

@section('css')
<link rel="stylesheet" href="{{asset('assets/css/product/product.css')}}">
@endsection

@section('content')
@include('frontend.components.breadcrumb', ['name'=>$shared_detail->name])

<div class="container"> 
        {!! $shared_detail->seo_description !!}
</div>
@endsection

@section('script')
@endsection