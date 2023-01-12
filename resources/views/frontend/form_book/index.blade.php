@extends('frontend.components.master')

@section('css')
    <link rel="stylesheet" href="{{asset('assets/css/book_form/book_form.css')}}">
@endsection

@section('content')
    @include('frontend.components.breadcrumb',['name'=>'Đặt lịch khám'])
    @include('frontend.components.book')
    @include('frontend.components.form_link')
@endsection

@section('script')
 <script>
     
</script>
@endsection