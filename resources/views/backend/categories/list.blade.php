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
    </div><!-- /.container-fluid -->
<div class="card">
    <div class="card-header">
        <div class="btn-group">
            <table>
                <tbody><tr>
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
    
                        <th style="width: 20%">
                            Tên
                        </th>
                        <th style="width: 10%">
                            Ngày tạo
                        </th>
                        <th style="width: 10%">
                            Ngày cập nhật
                        </th>
                        <th style="width: 10%">
                            keyword
                        </th>
                        <th style="width: 10%">
                            Miêu tả
                        </th>
                        <th style="width: 8%" class="text-center">
                            Trạng thái
                        </th>
                        <th style="width: 10%" class="text-right">
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
    
                        <td style="max-width:200px;"> 
                            <a style="display:-webkit-box;word-wrap: break-word;white-space: normal;overflow: hidden;display: -webkit-box;text-overflow: ellipsis;-webkit-box-orient: vertical;-webkit-line-clamp: 2; ">
                                {{$item->name}}
                            </a>
                        </td>
                        <td>
                            {{$item->created_at}}
                        </td>
                        <td class="project_progress">
                            {{$item->updated_at}}
                        </td>
                        <td style="max-width:200px;"> 
                            <a style="display:-webkit-box;word-wrap: break-word;white-space: normal;overflow: hidden;display: -webkit-box;text-overflow: ellipsis;-webkit-box-orient: vertical;-webkit-line-clamp: 2; ">
                                {{$item->keyword}}
                            </a>
                        </td>
                        <td style="max-width:200px;"> 
                            <a style="display:-webkit-box;word-wrap: break-word;white-space: normal;overflow: hidden;display: -webkit-box;text-overflow: ellipsis;-webkit-box-orient: vertical;-webkit-line-clamp: 2; ">
                                {!! $item->description !!}
                            </a>
                        </td>
                        <td class="project-state">
                            {{$item->status}}
                        </td>
                        <td class="project-actions text-right">
                            <a class="btn btn-info btn-sm" href="">
                                <i class="fas fa-pencil-alt">
                                </i>
                                Sửa
                            </a>
                            <a href="#" type="button" class="btn btn-danger btn-sm waves-effect" id="confirm-text"> Xóa</a>
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