@extends('backend.layout.layout_default')
@section('content')
<section class=" app-content content">
    <!-- Default box -->
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Chỉnh sửa câu hỏi</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right justify-content-end">
                    <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
                    <li class="breadcrumb-item active">{{$breadcrumb}}</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
    @if(session()->has('success'))
        <div class="txt pb-2 pt-2 ps-2 alert alert-success h3">
        {{ session()->get('success') }}
        </div>
    @endif
    <script>
        setTimeout(()=> {
            $('.txt').addClass('d-none')
        },2000)
    </script>
<div class="row">
    <div class="col-md-9">
        <div class="card">
            <div class="card-header">
            </div>
            <div class="card-body p-0">
                
                <form id="cerfitication" action="" method="POST" enctype="multipart/form-data">
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
                                    @foreach ($question as $question)                     
                                    <div class="form-group mt-1 mb-1">
                                        <label for="inputName" class="form-label mb-1">Tên</label>
                                        <input type="text" id="name" name="name" value="{{$question->name}}" class="form-control" placeholder="Nhập tên">
                                        @error('title')
                                        <span class="text-danger mt-1 d-block">{{ $message }}</span>
                                        @enderror
                                    </div>
                            
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="form-group mt-1 mb-1">
                                                <label for="seo_keyword" class="form-label mb-1">Ảnh 1</label>
                                                <input type="hidden" name="image_1"  value="{{$question->image_1}}">
                                                <div class="">
                                                    <div class="card card-app-design">
                                                        <div class="card-body">
                                                            <div id="imgList" 
                                                                style="
                                                                    width: 230px;
                                                                    height: 230px;
                                                                    overflow: hidden;
                                                                    display: flex;
                                                                    justify-content: center;
                                                                    align-items: center;
                                                                    margin: 0 auto;
                                                                    margin-bottom: 20px;
                                                                ">
                                                                <img style="width:100%; height:100%; border-radius:50%; object-fit:cover;" id="thumbnail_prev" src="{{$question->logo}}"  alt="..">
                                                            </div>
                                                            <button class="btn btn-primary btn-toggle-sidebar waves-effect waves-float waves-light" id="popup-1-button">
                                                                <span class="align-middle">Chọn ảnh</span>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                            <div class="form-group mt-1 mb-1">
                                                <label for="inputName" class="form-label mb-1">Câu hỏi 1</label>
                                                <input type="text" id="question_1" name="question_1" value="{{$question->question_1}}" class="form-control" placeholder="Nhập câu hỏi">
                                                @error('title')
                                                <span class="text-danger mt-1 d-block">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group mt-1 mb-1">
                                                <label for="seo_keyword" class="form-label mb-1">Ảnh 2</label>
                                                <input type="hidden" name="image_1"  value="{{$question->image_1}}">
                                                <div class="">
                                                    <div class="card card-app-design">
                                                        <div class="card-body">
                                                            <div id="imgList" 
                                                                style="
                                                                    width: 230px;
                                                                    height: 230px;
                                                                    overflow: hidden;
                                                                    display: flex;
                                                                    justify-content: center;
                                                                    align-items: center;
                                                                    margin: 0 auto;
                                                                    margin-bottom: 20px;
                                                                ">
                                                                <img style="width:100%; height:100%; border-radius:50%; object-fit:cover;" id="thumbnail_prev" src="{{$question->logo}}"  alt="..">
                                                            </div>
                                                            <button class="btn btn-primary btn-toggle-sidebar waves-effect waves-float waves-light" id="popup-1-button">
                                                                <span class="align-middle">Chọn ảnh</span>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                            <div class="form-group mt-1 mb-1">
                                                <label for="inputName" class="form-label mb-1">Câu hỏi 2</label>
                                                <input type="text" id="question_1" name="question_1" value="{{$question->question_1}}" class="form-control" placeholder="Nhập câu hỏi">
                                                @error('title')
                                                <span class="text-danger mt-1 d-block">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group mt-1 mb-1">
                                                <label for="seo_keyword" class="form-label mb-1">Ảnh 3</label>
                                                <input type="hidden" name="image_1"  value="{{$question->image_1}}">
                                                <div class="">
                                                    <div class="card card-app-design">
                                                        <div class="card-body">
                                                            <div id="imgList" 
                                                                style="
                                                                    width: 230px;
                                                                    height: 230px;
                                                                    overflow: hidden;
                                                                    display: flex;
                                                                    justify-content: center;
                                                                    align-items: center;
                                                                    margin: 0 auto;
                                                                    margin-bottom: 20px;
                                                                ">
                                                                <img style="width:100%; height:100%; border-radius:50%; object-fit:cover;" id="thumbnail_prev" src="{{$question->logo}}"  alt="..">
                                                            </div>
                                                            <button class="btn btn-primary btn-toggle-sidebar waves-effect waves-float waves-light" id="popup-1-button">
                                                                <span class="align-middle">Chọn ảnh</span>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                            <div class="form-group mt-1 mb-1">
                                                <label for="inputName" class="form-label mb-1">Câu hỏi 3</label>
                                                <input type="text" id="question_1" name="question_1" value="{{$question->question_1}}" class="form-control" placeholder="Nhập câu hỏi">
                                                @error('title')
                                                <span class="text-danger mt-1 d-block">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group mt-1 mb-1">
                                                <label for="seo_keyword" class="form-label mb-1">Ảnh 4</label>
                                                <input type="hidden" name="image_1"  value="{{$question->image_1}}">
                                                <div class="">
                                                    <div class="card card-app-design">
                                                        <div class="card-body">
                                                            <div id="imgList" 
                                                                style="
                                                                    width: 230px;
                                                                    height: 230px;
                                                                    overflow: hidden;
                                                                    display: flex;
                                                                    justify-content: center;
                                                                    align-items: center;
                                                                    margin: 0 auto;
                                                                    margin-bottom: 20px;
                                                                ">
                                                                <img style="width:100%; height:100%; border-radius:50%; object-fit:cover;" id="thumbnail_prev" src="{{$question->logo}}"  alt="..">
                                                            </div>
                                                            <button class="btn btn-primary btn-toggle-sidebar waves-effect waves-float waves-light" id="popup-1-button">
                                                                <span class="align-middle">Chọn ảnh</span>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                            <div class="form-group mt-1 mb-1">
                                                <label for="inputName" class="form-label mb-1">Câu hỏi 4</label>
                                                <input type="text" id="question_1" name="question_1" value="{{$question->question_1}}" class="form-control" placeholder="Nhập câu hỏi">
                                                @error('title')
                                                <span class="text-danger mt-1 d-block">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <input type="hidden" name="logo"  value="">
                                    @endforeach
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12  ps-5 mb-2">
                            <a href="{{route('admin.showHome')}}" class="btn btn-secondary">Quay lại</a>
                            <input type="submit" value="Chỉnh sửa" class="btn btn-success float-right ms-2">
                        </div>
                    </div>
                </form>
            </div>
            <!-- /.card-body -->
        </div>
    </div>
    <div class="col-lg-3 col-md-3 col-12">
        <div class="card card-app-design">
            <div class="card-body">
                <div id="imgList" 
                    style="
                        width: 230px;
                        height: 230px;
                        overflow: hidden;
                        display: flex;
                        justify-content: center;
                        align-items: center;
                        margin: 0 auto;
                        margin-bottom: 20px;
                    ">
                    <img style="width:100%; height:100%; border-radius:50%; object-fit:cover;" id="thumbnail_prev" src=""  alt="..">
                </div>
                <button class="btn btn-primary btn-toggle-sidebar w-100 waves-effect waves-float waves-light" id="popup-1-button">
                    <span class="align-middle">Chọn ảnh logo</span>
                </button>
            </div>
        </div>
    </div>
</div>


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
                    var thumbnail = file.getUrl();
                    $('input[name="logo"]').val(`{{env('APP_URL')}}${thumbnail}`);
                    img.src = `{{env('APP_URL')}}${thumbnail}`;    
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