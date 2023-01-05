@extends('backend.layout.layout_default')

@section('content')
<section class=" app-content content">
    <!-- Default box -->
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Thêm danh mục</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right justify-content-end">
                    <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
                    <li class="breadcrumb-item active">{{$breadcrumb}}</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
<div class="card">
    <div class="card-header">
    </div>
    <div class="card-body p-0">
        <div id="message" class="alert alert-danger print-error-msg" style="display:none">
            @if(Session::has('success'))
                <div class="alert alert-success">
                    {{ Session::get('success') }}
                    @php
                        Session::forget('success');
                    @endphp
                </div>
            @endif
        </div>
        <form id="cerfitication" action="create" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-8">
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
                                <label for="inputName" class="form-label mb-1">Tên</label>
                                <input type="text" id="name" name="name" value="" class="form-control" placeholder="Nhập tên">
                                @error('name')
                                 <span class="text-danger mt-1 d-block">{{ $message }}</span>
                                 @enderror

                            </div>
                            <div class="form-group mt-1 mb-1">
                                <label for="status" class="form-label mb-1">Trạng thái</label>
                                <select class="form-control custom-select" name="status" id="status" placeholder="">
                                    <option value="1">Hiển thị</option>
                                    <option value="0">Ẩn</option>
                                </select>
                            </div>
                            <div class="form-group mt-1 mb-1">
                                <label for="seo_title" class="form-label mb-1"> Tiêu đề</label>
                                <input type="text" id="seo_title" name="seo_title" value="" class="form-control" placeholder="Nhập tiêu đề">
                                @if ($errors->has('seo_title'))
                                    <span class="text-danger d-block mt-1">{{ $errors->first('seo_title') }}</span>
                                @endif
                            </div>
                            <div class="form-group mt-1 mb-1">
                                <label for="description" class="form-label mb-1">Description</label>
                                <textarea class="form-control" id="summary-ckeditor" name="description"></textarea>
                                @if ($errors->has('description'))
                                    <span class="text-danger d-block mt-1">{{ $errors->first('description') }}</span>
                                @endif
                            </div>
                            <div class="form-group mt-1 mb-1">
                                <label for="keyword" class="form-label mb-1">Từ khóa</label>
                                <input type="text" id="keyword" name="keyword" value="" class="form-control">
                                @if ($errors->has('keyword'))
                                    <span class="text-danger d-block mt-1">{{ $errors->first('keyword') }}</span>
                                @endif
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
            <div class="row">
                <div class="col-12  ps-5 mb-2">
                    <a href="{{route('admin.showCategoriesList')}}" class="btn btn-secondary">Quay lại</a>
                    <input type="submit" value="Thêm" class="btn btn-success float-right ms-2">
                </div>
            </div>
        </form>
    </div>
    <!-- /.card-body -->
</div>
<!-- /.card -->
</section>
  <script>
    var button = document.getElementById( 'popup-1-button' );
    function selectFileWithCKFinder() {
        CKFinder.modal( {
            chooseFiles: true,
            width: 800,
            height: 600,
            onInit: function( finder ) {
                finder.on( 'files:choose', function( evt ) {
                    var file = evt.data.files.first();
                    var img = document.getElementById('thumbnail_prev')
                    $('input[name="image"]').val(file.attributes.name);
                    img.src = file.getUrl();
                } );
            }
        } );
    }
    button.onclick =() => {
        selectFileWithCKFinder( 'ckfinder-input-1' );
    }
</script>
<script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
<script>
CKEDITOR.replace( 'summary-ckeditor' );
</script>
@endsection

@section('script')
<script src="{{asset('ckeditor/ckeditor.js')}}"></script>
<script src="{{asset('ckfinder/ckfinder.js')}}" ></script>
@endsection