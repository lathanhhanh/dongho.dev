@extends('layouts.app_master_admin')
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-left">
                        <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Trang chủ</a></li>
                        <li class="breadcrumb-item active">Từ khoá</li>
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
                    <a href="{{ route('admin.keyword.create') }}" class="btn btn-primary"><i class="fa fa-plus"></i> Thêm mới</a>
                </h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body p-0">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Từ khoá</th>
                        <th>Mô tả</th>
                        <th>Hot</th>
                        <th>Trạng thái</th>
                        <th>Hành động</th>
                    </tr>
                    </thead>
                    <tbody>
                    @if(isset($keywords))
                        @foreach($keywords as $keyword)
                        <tr>
                            <td>{{ $keyword->id }}</td>
                            <td>{{ $keyword->k_name }}</td>
                            <td>{{ $keyword->k_description }}</td>
                            <td>
                                @if($keyword->k_hot == 1)
                                    <a href="{{ route('admin.keyword.hot', $keyword->id) }}" class="badge badge-info">Hot</a>
                                @else
                                    <a href="{{ route('admin.keyword.hot', $keyword->id) }}" class="badge badge-secondary">None</a>
                                @endif
                            </td>
                            <td>{{ $keyword->created_at }}</td>
                            <td>
                                <a href="{{ route('admin.keyword.update', $keyword->id) }}" class="btn btn-sm btn-success"> <i class="fa fa-pen"></i>Cập nhật</a>
                                <a href="{{ route('admin.keyword.delete', $keyword->id) }}" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i>Xoá</a>
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
