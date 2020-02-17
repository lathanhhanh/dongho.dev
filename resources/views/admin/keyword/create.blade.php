@extends('layouts.app_master_admin')
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-left">
                        <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('admin.keyword.index') }}">Keyword</a></li>
                        <li class="breadcrumb-item active">Create</li>
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
                <h3 class="card-title">New Keyword</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body p-0">
                    <div class="card-body">
                        <form action="" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="name">Keyword (<span class="text-danger">*</span>)</label>
                                <input type="text" class="form-control {{ $errors->first('k_name') ? 'is-invalid' : '' }}" name="k_name" placeholder="Keyword...">
                                @if($errors->first('k_name'))
                                    <span class="text-danger">{{ $errors->first('k_name') }}</span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="name">Description </label>
                                <textarea type="text" class="form-control {{ $errors->first('k_description') ? 'is-invalid' : '' }}" name="k_description" placeholder="Description..."></textarea>
                                @if($errors->first('k_description'))
                                    <span class="text-danger">{{ $errors->first('k_description') }}</span>
                                @endif
                            </div>
                            <div class="col-ms-12">
                                <div class="small-box-footer">
                                    <a href="{{ route('admin.keyword.index') }}" class="btn btn-danger"> <i class="fa fa-arrow-left"></i>  Back</a>
                                    <button type="submit" class="btn btn-success"> <i class="fa fa-save"></i>Save</button>
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
