<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin | QUẢN TRỊ HỆ THỐNG</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('root/plugins/fontawesome-free/css/all.min.css')}}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- pace-progress -->
    <link rel="stylesheet" href="{{asset('root/plugins/pace-progress/themes/black/pace-theme-flat-top.css')}}">
    <!-- adminlte-->
    <link rel="stylesheet" href="{{asset('root/css/adminlte.min.css')}}">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="sidebar-mini pace-primary pace-done sidebar-collapse">
<!-- Site wrapper -->
<div class="wrapper">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="../../index3.html" class="nav-link">Home</a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="#" class="nav-link">Contact</a>
            </li>
        </ul>

        <!-- SEARCH FORM -->
        <form class="form-inline ml-3">
            <div class="input-group input-group-sm">
                <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-navbar" type="submit">
                        <i class="fas fa-search"></i>
                    </button>
                </div>
            </div>
        </form>

        <!-- Right navbar links -->
        <ul class="navbar-nav ml-auto">
            <!-- Messages Dropdown Menu -->
            <li class="nav-item dropdown">
                <a class="nav-link" data-toggle="dropdown" href="#">
                    <i class="far fa-comments"></i>
                    <span class="badge badge-danger navbar-badge">3</span>
                </a>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                    <a href="#" class="dropdown-item">
                        <!-- Message Start -->
                        <div class="media">
                            <img src="{{asset('root/img/user1-128x128.jpg')}}" alt="User Avatar" class="img-size-50 mr-3 img-circle">
                            <div class="media-body">
                                <h3 class="dropdown-item-title">
                                    Brad Diesel
                                    <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                                </h3>
                                <p class="text-sm">Call me whenever you can...</p>
                                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                            </div>
                        </div>
                        <!-- Message End -->
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <!-- Message Start -->
                        <div class="media">
                            <img src="{{asset('root/img/user8-128x128.jpg')}}" alt="User Avatar" class="img-size-50 img-circle mr-3">
                            <div class="media-body">
                                <h3 class="dropdown-item-title">
                                    John Pierce
                                    <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                                </h3>
                                <p class="text-sm">I got your message bro</p>
                                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                            </div>
                        </div>
                        <!-- Message End -->
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <!-- Message Start -->
                        <div class="media">
                            <img src="{{asset('root/img/user3-128x128.jpg')}}" alt="User Avatar" class="img-size-50 img-circle mr-3">
                            <div class="media-body">
                                <h3 class="dropdown-item-title">
                                    Nora Silvester
                                    <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                                </h3>
                                <p class="text-sm">The subject goes here</p>
                                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                            </div>
                        </div>
                        <!-- Message End -->
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
                </div>
            </li>
            <!-- Notifications Dropdown Menu -->
            <li class="nav-item dropdown">
                <a class="nav-link" data-toggle="dropdown" href="#">
                    <i class="far fa-bell"></i>
                    <span class="badge badge-warning navbar-badge">15</span>
                </a>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                    <span class="dropdown-item dropdown-header">15 Notifications</span>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <i class="fas fa-envelope mr-2"></i> 4 new messages
                        <span class="float-right text-muted text-sm">3 mins</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <i class="fas fa-users mr-2"></i> 8 friend requests
                        <span class="float-right text-muted text-sm">12 hours</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <i class="fas fa-file mr-2"></i> 3 new reports
                        <span class="float-right text-muted text-sm">2 days</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#">
                    <i class="fas fa-th-large"></i>
                </a>
            </li>
        </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="{{ route('admin.index') }}" class="brand-link">
            <img src="{{asset('root/img/AdminLTELogo.png')}}"
                 alt="AdminLTE Logo"
                 class="brand-image img-circle elevation-3"
                 style="opacity: .8">
            <span class="brand-text font-weight-light">AdminLTE 3</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
            <!-- Sidebar user (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                    <img src="https://scontent-hkg3-2.xx.fbcdn.net/v/t1.0-9/82881993_2531032927153352_2689820468524875776_n.jpg?_nc_cat=111&_nc_ohc=fc3mkkPsA1UAX_EIzMe&_nc_ht=scontent-hkg3-2.xx&oh=00b494e941448c3a891c7f221c754331&oe=5EB5AFBB" class="img-circle elevation-2" alt="User Image">
                </div>
                <div class="info">
                    <a href="#" class="d-block">Anh Gấuu</a>
                </div>
            </div>

            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
                         with font-awesome or any other icon font library -->
                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>
                                Dashboard
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="../../index.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Dashboard v1</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="../../index2.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Dashboard v2</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="../../index3.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Dashboard v3</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('admin.category.index') }}" class="nav-link">
                            <i class="nav-icon fas fa-th-list"></i>
                            <p>
                                Danh mục
                                <span class="right badge badge-danger">New</span>
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('admin.keyword.index') }}" class="nav-link">
                            <i class="nav-icon fas fa-key"></i>
                            <p>Từ khoá</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('admin.attribute.index') }}" class="nav-link">
                            <i class="nav-icon fas fa-key"></i>
                            <p>Attribute</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('admin.product.index') }}" class="nav-link">
                            <i class="nav-icon fas fa-shopping-bag"></i>
                            <p>Sản phẩm</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('admin.product.index') }}" class="nav-link">
                            <i class="nav-icon fas fa-user"></i>
                            <p>Người dùng</p>
                        </a>
                    </li>
                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-copy"></i>
                            <p>
                                Layout Options
                                <i class="fas fa-angle-left right"></i>
                                <span class="badge badge-info right">6</span>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="../layout/top-nav.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Top Navigation</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="../layout/top-nav-sidebar.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Top Navigation + Sidebar</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="../layout/boxed.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Boxed</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="../layout/fixed-sidebar.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Fixed Sidebar</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        @yield('content')
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <footer class="main-footer">
        <div class="float-right d-none d-sm-block">
            <b>Version</b> 3.0.2
        </div>
        <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong> All rights
        reserved.
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{asset('root/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('root/js/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- pace-progress -->
<script src="{{asset('root/plugins/pace-progress/pace.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('root/js/adminlte.min.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('root/js/demo.js')}}"></script>
<script type="text/javascript">
    $(document).ajaxStart(function () {
        Pace.restart()
    })
    $('.ajax').click(function () {
        $.ajax({
            url:'#', success:function (result) {
                $('.ajax-content').html('<hr>Ajax Request Completed!')
            }
        })
    })
    $(function () {
        $('.js-upload').change(function () {
            let $this = $(this);
            if(this.files && this.files[0]){
                var reader = new FileReader();
                reader.onload = function (e) {
                    $this.parents('.block-images').find('img').attr('src', e.target.result);
                };
                reader.readAsDataURL(this.files[0]);
            }
        })
    })
</script>
</body>
</html>
