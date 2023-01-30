@extends('frontend.components.master')

@section('css')
<link rel="stylesheet" href="{{asset('assets/css/product/product.css')}}">
@endsection

@section('content')
@include('frontend.components.category_child')
@include('frontend.components.breadcrumb', ['name'=>'Danh sách sản phẩm'])
@include('frontend.product_childs.product_list')
@include('frontend.components.form_link')
@endsection

@section('script')
@endsection
