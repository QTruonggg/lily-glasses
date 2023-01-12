@extends('frontend.components.master')

@section('css')
    <link rel="stylesheet" href="{{asset('assets/css/shopping_cart/shopping_cart.css')}}">
@endsection

@section('content')
    @include('frontend.components.breadcrumb',['name'=>'Giỏ hàng'])
    @include('frontend.shopping_cart.cart_list')
    @include('frontend.components.form_link')
@endsection

@section('script')
 <script>
     
</script>
@endsection