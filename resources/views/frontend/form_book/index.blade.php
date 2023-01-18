@extends('frontend.components.master')

@section('css')
    <link rel="stylesheet" href="{{asset('assets/css/book_form/book_form.css')}}">
@endsection

@section('content')
    @include('frontend.components.breadcrumb',['name'=>'Đặt lịch khám'])
    @if(session()->has('success'))
    <div class="txt pb-2 pt-2 ps-2 alert alert-success h3">
        {{ session()->get('success') }}
    </div>
    @endif
    <script>
        setTimeout(()=> {
            $('.txt').addClass('d-none')
        },3000)
    </script>
    @include('frontend.components.book')
    @include('frontend.components.form_link')
@endsection

@section('script')
 <script>
     
</script>
@endsection