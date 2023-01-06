@extends('backend.layout.layout_default')

@section('content')
<div class="app-content content ">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>{{$title}}</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right justify-content-end">
                    <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
                    <li class="breadcrumb-item active">{{$title}}</li>
                </ol>
            </div>
        </div>
    </div>
    <div class="card">
                    <div class="card-body border-bottom d-flex justify-content-between align-items-center">
                        <h4 class="card-title">Danh sách</h4>
                        <a href="{{route('banner.create')}}"><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                           Thêm mới
                        </button></a>
                    </div>
                    <div class="card-datatable table-responsive pt-0">
                        <table class="user-list-table table">
                            <thead class="table-light">
                                <tr>
                                    <th style="width: 1%; text-align: center;">
                                        Id
                                    </th>
                                    <th style="width: 15%">
                                        Ảnh
                                    </th>
                                    <th style="width: 5%">
                                        Tên
                                    </th>
                                    <th style="width: 10%">
                                        Ngày tạo
                                    </th>
                                    <th style="width: 10%">
                                        Ngày cập nhật
                                    </th>
                                    <th style="width: 10%; text-align: right;" >
                                        Tác vụ
                                    </th>
                                </tr>
                                @foreach($banner as $banner)
                                <tr>
                                    <th style="text-align: center;">{{ $banner->id }}</th>
                                    <th><img src="{{$banner->image}}" alt="" style="width:100px; height:50px"></th>
                                    <th>{{ $banner->name }}</th>
                                    <th>
                                        {{$banner->created_at}}
                                    </th>
                                    <th>
                                        {{$banner->updated_at}}
                                    </th>
                                    <th style="text-align: right;">
                                        <a href="/admin/banner/deletebanner/{{ $banner->id }}" class="btn btn-info btn-sm">Sửa</a>
                                        <a type="button" class="btn btn-danger btn-sm confirm-color" data-id="{{$banner->id}}">Xóa</a>
                                        <!-- <a href="/admin/banner/deletebanner/{{ $banner->id }}" type="button" class="btn btn-danger btn-sm waves-effect">Xóa</a> -->
                                    </th>
                                </tr>
                                @endforeach
                            </thead>
                        </table>
                    </div>
                </div>

</div>
@endsection
