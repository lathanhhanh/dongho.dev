@extends('layouts.app_master_admin')
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-left">
                        <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Trang chủ</a></li>
                        <li class="breadcrumb-item active">Danh mục</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">
                    <a href="{{ route('admin.category.create') }}" class="btn btn-primary"><i class="fa fa-plus"></i> Thêm mới</a>
                </h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body p-0">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Hình ảnh</th>
                        <th>Tên</th>
                        <th>Trạng thái</th>
                        <th>Hot</th>
                        <th>Hành động</th>
                    </tr>
                    </thead>
                    <tbody>
                    @if($categories)
                        @foreach($categories as $category)
                        <tr>
                            <td>{{ $category->id }}</td>
                            <td>{{ $category->c_name }}</td>
                            <td><img src="ahihih" height="80px" width="80px"></td>
                            <td>
                                @if($category->c_status == 1)
                                    <a href="{{ route('admin.category.active', $category->id) }}" class="badge badge-info">Hiển thị</a>
                                @else
                                    <a href="{{ route('admin.category.active', $category->id) }}" class="badge badge-secondary">Ẩn</a>
                                @endif
                            </td>
                            <td>
                                @if($category->c_hot == 1)
                                    <a href="{{ route('admin.category.hot', $category->id) }}" class="badge badge-info">Hot</a>
                                @else
                                    <a href="{{ route('admin.category.hot', $category->id) }}" class="badge badge-secondary">None</a>
                                @endif
                            </td>
                            <td>
                                <a href="{{ route('admin.category.update', $category->id) }}" class="btn btn-sm btn-success"> <i class="fa fa-pen"></i>Cập nhật</a>
                                <a href="{{ route('admin.category.delete', $category->id) }}" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> Xoá</a>
                            </td>
                        </tr>
                        @endforeach
                    @endif
                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </section>
@stop
