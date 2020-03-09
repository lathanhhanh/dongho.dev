@extends('layouts.app_master_admin')
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-left">
                        <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Trang chủ</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('admin.attribute.index') }}">Attribute</a></li>
                        <li class="breadcrumb-item active">Tạo thuộc tính</li>
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
                <h3 class="card-title">Tạo thuộc tính mới</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body p-0">
                <div class="card-body">
                    <form action="" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="name">Tên thuộc tính (<span class="text-danger">*</span>)</label>
                            <input type="text" class="form-control {{ $errors->first('atb_name') ? 'is-invalid' : '' }}" name="atb_name" placeholder="Tên thuộc tính">
                            @if($errors->first('atb_name'))
                                <span class="text-danger">{{ $errors->first('atb_name') }}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="name"> Group <span class="text-danger">(*)</span></label>
                            <select class="form-control" name="atb_type">
                                <option value="1">Đôi</option>
                                <option value="1">Năng lượng</option>
                                <option value="1">Loại dây</option>
                                <option value="1">Loại vỏ</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="name"> Category <span class="text-danger">(*)</span></label>
                            <select class="form-control" name="atb_category_id">
                                @foreach($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->c_name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-ms-12">
                            <div class="small-box-footer">
                                <a href="{{ route('admin.category.index') }}" class="btn btn-danger"> <i class="fa fa-arrow-left"></i>Quay lại</a>
                                <button type="submit" class="btn btn-success"> <i class="fa fa-save"></i>Thêm</button>
                            </div>
                        </div>
                    </form>
                </div>
                </form>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </section>
@stop
