@extends('frontend.components.master')

@section('css')
<link rel="stylesheet" href="{{asset('assets/css/product/product.css')}}">
@endsection

@section('content')
@include('frontend.components.category_child')
@include('frontend.components.breadcrumb', ['name'=>'danh sách sản phẩm'])
@include('frontend.product.product_list')
@include('frontend.components.form_link')
@endsection

@section('script')
@endsection
