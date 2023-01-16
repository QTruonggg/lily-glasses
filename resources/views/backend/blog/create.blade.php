@extends('backend.layout.layout_default')

@section('content')
<div class="app-content content">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Thêm Blog</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right justify-content-end">
                    <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
                    <li class="breadcrumb-item active">{{$title}}</li>
                </ol>
            </div>
        </div>
    </div>
    @if(session()->has('success'))
        <div class="txt pb-2 pt-2 ps-2 alert alert-success h3">
        {{ session()->get('success') }}
        </div>
    @endif
    @if(session()->has('error'))
        <div class="txt pb-2 pt-2 ps-2 alert alert-danger h3">
        {{ session()->get('error') }}
        </div>
    @endif
    <script>
        setTimeout(()=> {
            $('.txt').addClass('d-none')
        },3000)
    </script>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                </div>
                <div class="card-body p-0">
                    
                    <form action="/admin/banner/create" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card card-primary">
                                    <div class="card-header">
                                        <h3 class="card-title">Thông tin</h3>

                                        <div class="card-tools">
                                            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                                                <i class="fas fa-minus"></i></button>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="form-group mt-1 mb-1">
                                            <label for="inputName" class="form-label mb-1">Tên:</label>
                                            <input type="text" id="name" name="name" value="" class="form-control" placeholder="Nhập tên">
                                            @error('name')
                                            <span class="text-danger mt-1 d-block">{{ $message }}</span>
                                            @enderror
                                        </div> 
                                        <div class="form-group mt-1 mb-1">
                                            <label for="seo_description" class="form-label mb-1">Mô tả</label>
                                            <textarea class="form-control" id="summary-ckeditor" name="seo_description"></textarea>
                                             @error('seo_description')
                                            <span class="text-danger mt-1 d-block">{{ $message }}</span>
                                            @enderror
                                        </div>                                        
                                    </div>                               
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12  ps-5 mb-2">
                                <a href="{{route('blog.list')}}" class="btn btn-secondary">Quay lại</a>
                                <input type="submit" value="Thêm" class="btn btn-success float-right ms-2">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>




<script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
<script>
CKEDITOR.replace( 'summary-ckeditor' );
</script>
@endsection

@section('script')
<script src="{{asset('ckeditor/ckeditor.js')}}"></script>
<script src="{{asset('ckfinder/ckfinder.js')}}" ></script>
@endsection