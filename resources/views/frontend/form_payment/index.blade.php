@extends('frontend.components.master')

@section('css')
    <link rel="stylesheet" href="{{asset('assets/css/payment/payment.css')}}">
@endsection

@section('content')
    @include('frontend.components.breadcrumb', ['name'=>'thanh-toan'])
    @include('frontend.form_payment.payment_info')
    @include('frontend.components.form_link')
@endsection

@section('script')
 <script>
     
</script>
@endsection