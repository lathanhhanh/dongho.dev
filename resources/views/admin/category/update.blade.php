@extends('layouts.app_master_admin')
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-left">
                        <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Trang chủ</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('admin.category.index') }}">Danh mục</a></li>
                        <li class="breadcrumb-item active">Cập nhật</li>
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
                <h3 class="card-title">Tạo danh mục mới</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body p-0">
                <div class="card-body">
                    <form action="" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="name">Tên danh mục (<span class="text-danger">*</span>)</label>
                            <input type="text"
                                   class="form-control {{ $errors->first('c_name') ? 'is-invalid' : '' }}"
                                   name="c_name"
                                   value="{{ $category->c_name }}"
                                   placeholder="Name Category">
                            @if($errors->first('c_name'))
                                <span class="text-danger">{{ $errors->first('c_name') }}</span>
                            @endif
                        </div>
                        <div class="col-ms-12">
                            <div class="small-box-footer">
                                <a href="{{ route('admin.category.index') }}" class="btn btn-danger"> <i class="fa fa-arrow-left"></i> Quay lại</a>
                                <button type="submit" class="btn btn-success"> <i class="fa fa-save"></i>Cập nhật</button>
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
