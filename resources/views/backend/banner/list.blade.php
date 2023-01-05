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
                                    <th style="width: 10%; text-align: center;">
                                        Trạng thái
                                    </th>
                                    <th style="width: 10%; text-align: right;" >
                                        Tác vụ
                                    </th>
                                </tr>
                                @foreach($banner as $banner)
                                <tr>
                                    <th>{{ $banner->id }}</th>
                                    <th><img src="{{ asset('upload/'.$banner->image) }}" alt="" style="width:100px; height:100px"></th>
                                    <th>{{ $banner->name }}</th>
                                    <td>
                                        {{$banner->created_at}}
                                    </td>
                                    <td class="project_progress">
                                        {{$banner->updated_at}}
                                    </td>
                                    <th>{{ $banner->status }}</th>
                                    <th>
                                        <a href="/banner/deletebanner/{{ $banner->id }}">Delete</a>
                                        <a href="/banner/deletebanner/{{ $banner->id }}">Delete</a>
                                    </th>
                                </tr>
                                @endforeach
                            </thead>
                        </table>

                    </div>
                </div>

</div>
@endsection
