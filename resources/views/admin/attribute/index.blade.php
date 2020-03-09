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
                    <a href="{{ route('admin.attribute.create') }}" class="btn btn-primary"><i class="fa fa-plus"></i> Thêm mới thuộc tính </a>
                </h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body p-0">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Tên thuộc tính</th>
                        <th>Group</th>
                        <th>Danh mục</th>
                        <th>Thời gian</th>
                        <th>Hành động</th>
                    </tr>
                    </thead>
                    <tbody>
                    @if($attributes)
                        @foreach($attributes as $atb)
                            <tr>
                                <td>{{ $atb->id }}</td>
                                <td>{{ $atb->atb_name }}</td>
                                <td>
                                    <span class="{{ $atb->getType($atb->atb_type)['class'] }}">{{ $atb->getType($atb->atb_type)['name'] }}</span>
                                </td>
                                <td>
                                    <span class="badge badge-info">{{ $atb->category->c_name ?? "[N/A]" }}</span>
                                </td>
                                <td>{{ $atb->created_at }}</td>
                                <td>
                                    <a href="{{ route('admin.attribute.update', $atb->id) }}" class="btn btn-sm btn-success"> <i class="fa fa-pen"></i>Cập nhật</a>
                                    <a href="{{ route('admin.attribute.delete', $atb->id) }}" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> Xoá</a>
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
