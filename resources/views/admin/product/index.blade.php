@extends('layouts.app_master_admin')
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-left">
                        <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Home</a></li>
                        <li class="breadcrumb-item active">Product</li>
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
                    <a href="{{ route('admin.product.create') }}" class="btn btn-primary"><i class="fa fa-plus"></i> Thêm mới</a>
                </h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body p-0">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Giá</th>
                        <th >Description</th>
                        <th>Hot</th>
                        <th>Status</th>
                        <th>Time</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @if(isset($products))
                        @foreach($products as $product)
                        <tr>
                            <td>{{ $product->id }}</td>
                            <td>{{ $product->pro_name }}</td>
                            <td>{{ $product->pro_price }}</td>
                            <td><img src="{{ pare_url_file($product->pro_avatar) }}" height="100px" width="100px"></td>
                            <td>
                                @if($product->pro_hot == 1)
                                    <a href="{{ route('admin.product.hot', $product->id) }}" class="badge badge-info">Hot</a>
                                @else
                                    <a href="{{ route('admin.product.hot', $product->id) }}" class="badge badge-secondary">None</a>
                                @endif
                            </td>
                            <td>
                                @if($product->pro_active == 1)
                                    <a href="{{ route('admin.product.active', $product->id) }}" class="badge badge-info">Active</a>
                                @else
                                    <a href="{{ route('admin.product.active', $product->id) }}" class="badge badge-secondary">None</a>
                                @endif
                            </td>
                            <td>{{ $product->created_at }}</td>
                            <td>
                                <a href="{{ route('admin.product.update', $product->id) }}" class="btn btn-sm btn-success"> <i class="fa fa-pen"></i> Edit</a>
                                <a href="{{ route('admin.product.delete', $product->id) }}" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> Delete</a>
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
