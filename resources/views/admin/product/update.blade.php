@extends('layouts.app_master_admin')
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-left">
                        <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Trang chủ</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('admin.product.index') }}">Sản phẩm</a></li>
                        <li class="breadcrumb-item active">Cập nhật</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <form role="form" action="" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <!-- left column -->
                    <div class="col-md-8">
                        <!-- general form elements -->
                        <div class="card card-dark">
                            <div class="card-header">
                                <h3 class="card-title">Thông tin cơ bản</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="pro_name">Tên sản phẩm (<span class="text-danger">*</span>)</label>
                                    <input type="text" class="form-control {{ $errors->first('pro_name') ? 'is-invalid' : '' }}" value="{{ $product->pro_name }}" name="pro_name" placeholder="Name...">
                                    @if($errors->first('pro_name'))
                                        <span class="text-danger">{{ $errors->first('pro_name') }}</span>
                                    @endif
                                </div>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label for="pro_price">Giá bán</label>
                                            <input type="number"  value="{{ $product->pro_price }}" class="form-control {{ $errors->first('pro_price') ? 'is-invalid' : '' }} " name="pro_price" placeholder="15000000 vnd">
                                            @if($errors->first('pro_price'))
                                                <span class="text-danger">{{ $errors->first('pro_price') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-sm-9">
                                        <div class="form-group">
                                            <label for="pro_sale">Giảm giá</label>
                                            <input type="number"  value="{{ $product->pro_sale }}" class="form-control" name="pro_sale" value="0" min="0" max="100">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="pro_description">Mô tả</label>
                                    <textarea name="pro_description" class="form-control {{ $errors->first('pro_description') ? 'is-invalid' : '' }}" placeholder="Mô tả sản phẩm...">{{ $product->pro_description }}</textarea>
                                    @if($errors->first('pro_description'))
                                        <span class="text-danger">{{ $errors->first('pro_description') }}</span>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label for="tag">Danh mục (<span class="text-danger">*</span>)</label>
                                    <select name="pro_category_id" class="form-control" >
                                        @foreach($categories as $c)
                                            @if($product->pro_category_id == $c->id)
                                                <option value="{{ $c->id }}" selected="selected">{{ $c->c_name }}</option>
                                            @else
                                                <option value="{{ $c->id }}">{{ $c->c_name }}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->

                        <div class="card card-dark">
                            <div class="card-header">
                                <h3 class="card-title">Thông số khác</h3>
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="content">Thuộc tính</label><hr>
                                    <div class="row">
                                        @foreach($attributes as $key => $attribute)
                                            <div class="form-group col-sm-3">
                                                <h4>{{ $key }}</h4><hr>
                                                @foreach($attribute as $item)
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input type="checkbox" class="form-check-input" name="attribute[]" {{ in_array($item['id'], $attributeOld) ? "checked" : '' }} value="{{ $item['id'] }}"> {{ $item['atb_name'] }}
                                                        </label>
                                                    </div>
                                                @endforeach
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="form-group col-sm-3">
                                        <label for="content">Xuất xứ</label>
                                        <select name="pro_country" class="form-control" >
                                            <option value="1" {{ ($product->pro_country ?? '' ) == 1 ? "selected='selected'" : "" }}>Anh</option>
                                            <option value="2" {{ ($product->pro_country ?? '' ) == 2 ? "selected='selected'" : "" }}>Mỹ</option>
                                            <option value="3" {{ ($product->pro_country ?? '' ) == 3 ? "selected='selected'" : "" }}>Thuỵ Sỹ</option>
                                            <option value="4" {{ ($product->pro_country ?? '' ) == 4 ? "selected='selected'" : "" }}>Trung Quốc</option>
                                        </select>
                                        @if($errors->first('pro_country'))
                                            <span class="text-danger">{{ $errors->first('pro_country') }}</span>
                                        @endif
                                    </div>
                                    <div class="form-group col-sm-3">
                                        <label for="content">Năng lượng</label>
                                        <input type="text" name="pro_energy" class="form-control" value="{{ $product->pro_energy }}">
                                    </div>
                                    <div class="form-group col-sm-3">
                                        <label for="content">Độ chịu nước</label>
                                        <input type="text" name="pro_resistant" class="form-control" value="{{ $product->pro_resistant }}">
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-body -->
                        </div>

                        <div class="card card-dark">
                            <div class="card-header">
                                <h3 class="card-title">Nội dung</h3>
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="content">Content</label>
                                    <textarea class="form-control  {{ $errors->first('pro_description') ? 'is-invalid' : '' }}" name="pro_content" placeholder="Nội dung..">{{ $product->pro_content }}</textarea>
                                    @if($errors->first('pro_content'))
                                        <span class="text-danger">{{ $errors->first('pro_content') }}</span>
                                    @endif
                                </div>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->

                    </div>
                    <!--/.col (left) -->
                    <!-- right column -->
                    <div class="col-md-4">
                        <!-- general form elements disabled -->
                        <div class="card card-dark">
                            <div class="card-header">
                                <h3 class="card-title">Ảnh sản phẩm</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body block-images">
                                <img src="https://scontent-hkg3-2.xx.fbcdn.net/v/t1.0-9/82881993_2531032927153352_2689820468524875776_n.jpg?_nc_cat=111&_nc_ohc=fc3mkkPsA1UAX_EIzMe&_nc_ht=scontent-hkg3-2.xx&oh=00b494e941448c3a891c7f221c754331&oe=5EB5AFBB" style="height: 200px; width: 200px;" alt="" class="img-thumbnail">
                                <div class="form-group mt-3">
                                    <a style="position: relative" class="btn btn-dark" href="javascript:;">Chọn ảnh..
                                        <input style="position: absolute;z-index: 2;top: 0;left: 0;filter: alpha(opacity=0);-ms-filter: &quot;progid:DXImageTransform.Microsoft.Alpha(Opacity=0)&quot;;opacity: 0;background-color: transparent;color: transparent;" type="file" class="js-upload" name="pro_avatar">
                                    </a> <span class="badge badge-info" id="upload-file-info"></span>
                                </div>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!--/.col (right) -->
                </div>
                <div class="col-ms-12 card p-3">
                    <div class="small-box-footer text-center">
                        <a href="{{ route('admin.product.index') }}" class="btn btn-danger"> <i class="fa fa-arrow-left"></i> Quay lại</a>
                        <button type="submit" class="btn btn-success"> <i class="fa fa-save"></i> Cập nhật</button>
                    </div>
                </div>
            </form>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@stop
