@extends('backend.layout.layout_default')

@section('content')
<section class=" app-content content">
    <!-- Default box -->
    
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Chi tiết đơn hàng</h1>
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
                        <h3 class="fw-bolder mb-75"></h3>
                        <span>Tổng só mặt hàng : </span>
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
   <div class="row">
        <div class="col-8">
             <div class="card">
                <div class="card-body p-0">
                <h2 class="ps-2 pb-2 pt-2">Thông tin địa chỉ</h2>
                    <ul>
                        @foreach ($data_details as $info_order)
                            <li class="pb-1">Tên khách hàng : {{$info_order->name}}</li>
                            <li class="pb-1">Địa chỉ email : {{$info_order->email}}</li>
                            <li class="pb-1">Số điện thoại : {{$info_order->phoneNumber}}</li>
                            <li class="pb-1">Tỉnh / Thành phố : {{$info_order->province}}</li>
                            <li class="pb-1">Quận / Huyện : {{$info_order->district}}</li>
                            <li class="pb-1">Phường / Xã : {{$info_order->ward}}</li>
                            <li class="pb-1">Địa chỉ : {{$info_order->address}}</li>
                            <li class="pb-1">Ghi chú : {{$info_order->note}}</li>
                        @endforeach
                    </ul>
                    <div class="table-responsive-xl">
                        <table class="table table-striped projects">
                            <thead>
                                <tr class="text-center">
                                    <th style="width: 10%">
                                        Hình ảnh
                                    </th>
                                    <th style="width: 1%">
                                        Sl
                                    </th>
                                    <th style="width: 15%">
                                        Màu sắc
                                    </th>
                                    <th style="width: 15%">
                                        Giá cũ
                                    </th>
                                    <th style="width: 15%">
                                        Tổng
                                    </th>
                                    <th style="width: 15%" class="text-right">
                                        Tổng tiền
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($product_cart as $item)
                                <tr id="row" class="text-center">
                                    <td >
                                        <div style="max-width:90px; min-width:80px; max-height:80px; overflow:hidden; display:flex;">
                                            <img style="width:100%;" src="{{$item->options->thumbnail}}" alt="{{$item->name}}">
                                        </div>
                                    </td>
                                    <td style="max-width:90px;"> 
                                        <a style="word-wrap: break-word;white-space: normal;overflow: hidden;display: -webkit-box;text-overflow: ellipsis;-webkit-box-orient: vertical;-webkit-line-clamp: 2; ">
                                            {{$item->qty}}
                                        </a>
                                    </td>
                                    <td style="max-width:90px; padding:0 45px;"> 
                                        <a style="display:block;padding:20px 10px;border-radius:50%; background-color:{{$item->options->color}};">
                                        </a>
                                    </td>
                                    <td style="max-width:90px; padding:0 10px;"> 
                                        <a style="display:-webkit-box;word-wrap: break-word;white-space: normal;overflow: hidden;display: -webkit-box;text-overflow: ellipsis;-webkit-box-orient: vertical;-webkit-line-clamp: 2; ">
                                            {{$item->options->old_price}} đ
                                        </a>
                                    </td>
                                    <td style="max-width:90px; padding:0 10px;"> 
                                        <a style="display:-webkit-box;word-wrap: break-word;white-space: normal;overflow: hidden;display: -webkit-box;text-overflow: ellipsis;-webkit-box-orient: vertical;-webkit-line-clamp: 2; ">
                                            {{$item->price}} đ
                                        </a>
                                    </td>
                                    <td class=""  style="max-width:90px; padding:0 10px;">
                                        <a style="display:-webkit-box;word-wrap: break-word;white-space: normal;overflow: hidden;display: -webkit-box;text-overflow: ellipsis;-webkit-box-orient: vertical;-webkit-line-clamp: 2; ">
                                            {{$item->price * $item->qty}} đ
                                        </a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="total d-flex flex-column align-items-end pt-1 pb-1 pe-2">
                        <span class="pt-1 pb-1">Số lượng : </span>
                        <span >Tổng tiền : {{Cart::priceTotal()}} đ</span>
                    </div>
                    <br>
                </div>
            <div>
        </div>
   </div>
   <a href="{{route('showListOrder')}}" class="btn btn-secondary waves-effect waves-float waves-light">Quay lại</a>
</div>
<!-- /.card -->
</section>
@endsection