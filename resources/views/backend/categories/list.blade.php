@extends('backend.layout.layout_default')

@section('content')
<section class=" app-content content">
    <!-- Default box -->
    
    <div class="container-fluid">
        
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Quản lý danh mục</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right justify-content-end">
                    <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
                    <li class="breadcrumb-item active">{{$breadcrumb}}</li>
                </ol>
            </div>
        </div>
    </div>
    <div class="row">
            <div class="col-lg-4 col-sm-6">
                <div class="card">
                    <div class="card-body d-flex align-items-center justify-content-between">
                        <div>
                            <h3 class="fw-bolder mb-75">{{$dataLenght}}</h3>
                            <span>Tổng số danh mục</span>
                        </div>
                        <div class="avatar bg-light-primary p-50">
                            <span class="avatar-content">
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user font-medium-4"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!-- /.container-fluid -->
    @if(session()->has('mess'))
        <div class="txt pb-2 pt-2 ps-2 alert alert-success h3">
        {{ session()->get('mess') }}
        </div>
    @endif
    <script>
        setTimeout(()=> {
            $('.txt').addClass('d-none')
        },2000)
    </script>
<div class="card">
    <div class="card-header">
        <div class="btn-group">
            <table>
                <tbody>
                <tr>
                    <form method="get" action="" enctype="multipart/form-data"></form>
                    <td>
                        <input class="form-control" name="category_name" placeholder="Nhập tên sản phẩm" value="">

                    </td>
                    <td>
                        <button type="submit" class="btn btn-secondary">Tìm kiếm</button>
                    </td>
                </tr>
            </tbody>
        </table>
        </div>
        <div class="dt-buttons btn-group">
            <a href="{{route('admin.postCategoriesList')}}" class="btn btn-secondary action-item" tabindex="0" aria-controls="table-categories">
                <span>
                    <span data-action="create">
                    <i class="fa fa-plus"></i>
                        Thêm mới
                    </span>
                </span>
            </a>
        </div>
    </div>
    <div class="card-body p-0">
        <div class="table-responsive-xl">
            <table class="table table-striped projects">
                <thead>
                    <tr class="text-center">
                        <th style="width: 1%">
                            Id
                        </th>
                        <th style="width: 10%">
                            Ảnh
                        </th>
                        <th style="width: 15%">
                            Tên
                        </th>
                        <th style="width: 10%">
                            parent id
                        </th>
                        <th style="width: 10%">
                            Tiêu đề
                        </th>
                        <th style="width: 10%">
                            Từ khóa
                        </th>
                        <th style="width: 15%" class="text-right">
                            Tác vụ
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $item)
                    <tr id="row" class="text-center">
                        <td>
                            {{$item->id}}
                        </td>
                        <td >
                            <div style="max-width:110px; min-width:150px; max-height:80px; overflow:hidden; display:flex;">
                                <img style="width:100%;" src="{{asset('upload_thumbnail/empty_img.png')}}" alt="">
                            </div>
                        </td>
                        <td style="max-width:110px;"> 
                            <a style="word-wrap: break-word;white-space: normal;overflow: hidden;display: -webkit-box;text-overflow: ellipsis;-webkit-box-orient: vertical;-webkit-line-clamp: 2; ">
                                {{$item->name}}
                            </a>
                        </td>
                        <td class="project_progress" style="">
                            {{$item->parent_id}}
                        </td>
                        <td style="max-width:110px;"> 
                            <a style="display:-webkit-box;word-wrap: break-word;white-space: normal;overflow: hidden;display: -webkit-box;text-overflow: ellipsis;-webkit-box-orient: vertical;-webkit-line-clamp: 2; ">
                                {{$item->seo_title}}
                            </a>
                        </td>
                        <td class=""  style="max-width:150px;">
                            <a style="display:-webkit-box;word-wrap: break-word;white-space: normal;overflow: hidden;display: -webkit-box;text-overflow: ellipsis;-webkit-box-orient: vertical;-webkit-line-clamp: 2; ">
                                {!! $item->seo_keyword !!}
                            </a>
                        </td>
                        <td class="project-actions text-right">
                            <a class="btn btn-info btn-sm" href="list/update/{{$item->id}}">Sửa</a>
                            <a href="list/delete/{{$item->id}}" type="button" class="btn btn-danger btn-sm waves-effect" id="confirm-text"> Xóa</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <br>
            
    </div>
    <!-- /.card-body -->
</div>
<!-- /.card -->
</section>
@endsection