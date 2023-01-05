@extends('backend.layout.layout_default')
@section('content')

<!-- BEGIN: Content-->
<div class="app-content content ">
    <h1 class="pb-2" >Bảng điều khiển</h1>
    <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="row">
            <div class="col-lg-4 col-sm-6">
                <div class="card">
                    <div class="card-body d-flex align-items-center justify-content-between">
                        <div>
                            <h3 class="fw-bolder mb-75">2</h3>
                            <span>Đang chờ</span>
                        </div>
                        <div class="avatar bg-light-primary p-50">
                            <span class="avatar-content">
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user font-medium-4"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="card">
                    <div class="card-body d-flex align-items-center justify-content-between">
                        <div>
                            <h3 class="fw-bolder mb-75">4</h3>
                            <span>đã xác nhận</span>
                        </div>
                        <div class="avatar bg-light-danger p-50">
                            <span class="avatar-content">
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user-plus font-medium-4"><path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="8.5" cy="7" r="4"></circle><line x1="20" y1="8" x2="20" y2="14"></line><line x1="23" y1="11" x2="17" y2="11"></line></svg>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="card">
                    <div class="card-body d-flex align-items-center justify-content-between">
                        <div>
                            <h3 class="fw-bolder mb-75">1</h3>
                            <span>đã hoàn thành</span>
                        </div>
                        <div class="avatar bg-light-success p-50">
                            <span class="avatar-content">
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user-check font-medium-4"><path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="8.5" cy="7" r="4"></circle><polyline points="17 11 19 13 23 9"></polyline></svg>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!--  -->
        <div class="row">
            <div class="col-12">
                <div class="invoice-list-wrapper">
                    <div class="card-datatable table-responsive">
                       <div class="card">
                        <div class="card-header border-transparent">
                            <h3 class="card-title">Đơn hàng mới</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table class="table m-0">
                                    <thead>
                                        <tr>
                                            <th>Mã đơn hàng</th>
                                            <th>Tên</th>
                                            <th>Status</th>
                                            <th>Ngày tạo</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1665644543
                                            </td>
                                            <td>
                                                dfg
                                            </td>
                                            <td>
                                                2
                                            </td>
                                            <td>
                                                2022-10-13 07:02:23
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>1665643761
                                            </td>
                                            <td>
                                                adminweb
                                            </td>
                                            <td>
                                                1
                                            </td>
                                            <td>
                                                2022-10-13 06:49:21
                                            </td>
                                        </tr>
                                        
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer clearfix">
                            <div class="float-left">
                                
                            </div>
                            <a href="http://127.0.0.1:8001/admin/order/list" class="btn btn-secondary waves-effect waves-float waves-light float-left">Xem
                                tất cả</a>
                        </div>
                        <!-- /.card-footer -->
                    </div>
                </div>
            </div>
        </div>
        <!--  -->
    </div>
    <!-- END: Content-->
 <div class="sidenav-overlay"></div>
<div class="drag-target"></div>
@endsection