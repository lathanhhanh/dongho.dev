@extends('layouts.app_master_admin')
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-left">
                        <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Trang chủ</a></li>
                        <li class="breadcrumb-item active">Sản phẩm</li>
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
                        <th >Hình ảnh</th>
                        <th>Tên sản phẩm</th>
                        <th>Danh mục</th>
                        <th>Giá</th>
                        <th>Hot</th>
                        <th>Trạng thái</th>
                        <th>Thời gian</th>
                        <th>Hành động</th>
                    </tr>
                    </thead>
                    <tbody>
                    @if(isset($products))
                        @foreach($products as $product)
                        <tr>
                            <td>{{ $product->id }}</td>
                            <td><img src="{{ pare_url_file($product->pro_avatar) }}" height="100px" width="100px"></td>
                            <td>{{ $product->pro_name }}</td>
                            <td>
                                <span class="badge badge-success">{{ $product->category->c_name ?? "[N/A]" }}</span>
                            </td>
                            <td>
                                @if ($product->pro_sale)
                                    <span class="text-danger" style="text-decoration: line-through">{{ number_format($product->pro_price, 0, ',', '.') }} vnđ</span></br>
                                    @php
                                        $price = ((100 - $product->pro_sale) * $product->pro_price) /100;
                                    @endphp
                                    <span class="text-success">{{ number_format($price, 0, ',', '.') }} vnđ</span></br>
                                @else
                                    <span class="text-success">{{ number_format($product->pro_price, 0, ',', '.') }} vnđ</span></br>
                                @endif
                            </td>
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
