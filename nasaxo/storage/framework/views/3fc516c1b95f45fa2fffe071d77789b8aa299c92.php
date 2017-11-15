<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php $__env->startSection('title'); ?> Nasaxo Shop <?php echo $__env->yieldSection(); ?></title>
  <?php $__env->startSection('link'); ?>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo url('public/css/bootstrap.min.css'); ?>">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo url('public/css/font-awesome.min.css'); ?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo url('public/css/ManageHome/AdminLTE.min.css'); ?>">
  <!-- AdminLTE Skins. Choose a skin from the css/skins folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo url('public/css/ManageHome/_all-skins.min.css'); ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo url('public/css/ManageHome/index.css'); ?>">
  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css?family=Merienda" rel="stylesheet">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  <?php echo $__env->yieldSection(); ?>
</head>
<body class="hold-transition skin-purple sidebar-mini">
  <div class="wrapper">
    <header class="main-header" style="">
      <!-- Logo -->
      <a href="#" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b>NSX</b></span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg">Nasaxo Shop</span>
      </a>
      <!-- Right header user -->
      <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button"></a>
        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">
            <!-- Notifications: style can be found in dropdown.less -->
            <li class="dropdown notifications-menu">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <i class="fa fa-bell-o"></i>
                <span class="label label-warning">10</span>
              </a>
              <ul class="dropdown-menu">
                <li class="header">You have 10 notifications</li>
                <li>
                  <!-- inner menu: contains the actual data -->
                  <ul class="menu">
                    <li>
                      <a href="#">
                        <i class="fa fa-users text-aqua"></i> 5 new members joined today
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="fa fa-warning text-yellow"></i> Very long description here that may not fit into the
                        page and may cause design problems
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="fa fa-users text-red"></i> 5 new members joined
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="fa fa-shopping-cart text-green"></i> 25 sales made
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="fa fa-user text-red"></i> You changed your username
                      </a>
                    </li>
                  </ul>
                </li>
                <li class="footer"><a href="#">View all</a></li>
              </ul>
            </li>
            <!-- User Account: style can be found in dropdown.less -->
            <li class="dropdown user user-menu">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <img src="<?php echo url('public/images/admin.jpg'); ?>" class="user-image" alt="User Image">
                <span class="hidden-xs">Nguyễn Hoàng Nam</span>
              </a>
              <ul class="dropdown-menu">
                <!-- User image -->
                <li class="user-header">
                  <img src="<?php echo url('public/images/admin.jpg'); ?>" class="img-circle" alt="User Image">
                  <p>
                    Nguyễn Hoàng Nam - Web Developer
                  </p>
                </li>
                <!-- Menu Footer-->
                <li class="user-footer">
                  <div class="pull-left">
                    <a href="#" class="btn btn-default btn-flat">Profile</a>
                  </div>
                  <div class="pull-right">
                    <a href="#" class="btn btn-default btn-flat">Sign out</a>
                  </div>
                </li>
              </ul>
            </li>
          </ul>
        </div>
      </nav>
    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
      <!-- sidebar: style can be found in sidebar.less -->
      <section class="sidebar">
        <ul class="sidebar-menu" data-widget="tree">
          <li class="header">DANH MỤC QUẢN LÝ</li>
          <!-- địa chỉ -->
          <li class="treeview">
            <a href="#">
              <i class="fa fa-files-o"></i>
              <span>Địa chỉ</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="#"><i class="fa fa-circle-o"></i>Thành phố</a></li>
              <li><a href="#"><i class="fa fa-circle-o"></i>Quận huyện</a></li>
              <li><a href="#"><i class="fa fa-circle-o"></i>Phường xã</a></li>
            </ul>
          </li>
          <!-- ./ địa chỉ -->
          <!-- khuyến mãi -->
          <li class="treeview">
            <a href="#">
              <i class="fa fa-bomb"></i>
              <span>Khuyến mãi</span>
            </a>
          </li>
          <!-- end khuyến mãi -->
          <!-- Màu sắc -->
          <li class="treeview">
            <a href="#">
              <i class="fa fa-dashboard"></i> <span>Màu sắc</span>
            </a>
          </li>
          <!-- end màu sắc -->
          <!-- size -->
          <li>
            <a href="#">
              <i class="fa fa-th"></i> <span>Kích cở</span>
            </a>
          </li>
          <!-- end size -->
          <!-- thống kê -->
          <li class="treeview">
            <a href="#">
              <i class="fa fa-pie-chart"></i>
              <span>Thống kê</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="#"><i class="fa fa-circle-o"></i>Doanh thu</a></li>
              <li><a href="#"><i class="fa fa-circle-o"></i>Sản phẩm bán chạy</a></li>
              <li><a href="#"><i class="fa fa-circle-o"></i>Sản phẩm Không bán chạy</a></li>
              <li><a href="#"><i class="fa fa-circle-o"></i>Khách hàng mua nhiều</a></li>
            </ul>
          </li>
          <!-- end thống kê -->
          <!-- Khách hàng -->
          <li class="treeview">
            <a href="#">
              <i class="fa fa-users"></i>
              <span>Khách hàng</span>
            </a>
          </li>
          <!-- end khách hàng -->
          <!-- Hóa đơn -->
          <li class="treeview">
            <a href="#">
              <i class="fa fa-calendar"></i>
              <span>Đơn đặt hàng</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="#"><i class="fa fa-circle-o"></i>Đơn đặt hàng chưa xác nhận</a></li>
              <li><a href="#"><i class="fa fa-circle-o"></i>Đơn đặt hàng đã xác nhận</a></li>
            </ul>
          </li>
          <!-- end hóa đơn -->
          <!-- nhóm sản phẩm -->
          <li class="treeview">
            <a href="#">
              <i class="fa fa-bookmark"></i>
              <span>Nhóm sản phẩm</span>
            </a>
          </li>
          <!-- end nhóm sản phẩm -->
          <!-- sản phẩm -->
          <li class="treeview">
            <a href="#">
              <i class="fa fa-rocket"></i>
              <span>Sản phẩm</span>
            </a>
          </li>
          <!-- end sản phẩm -->
        </ul>
      </section>
      <!-- /.sidebar -->
    </aside>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <?php echo $__env->yieldContent('content'); ?>
    </div>
    <!-- /.content-wrapper -->
  </div>
  <!-- ./wrapper -->
  <?php $__env->startSection('script'); ?>
  <!-- jQuery 3 -->
  <script src="<?php echo url('public/js/jquery.min.js'); ?>"></script>
  <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
  <!-- Bootstrap 3.3.7 -->
  <script src="<?php echo url('public/js/bootstrap.min.js'); ?>"></script>
  <!-- AdminLTE App -->
  <script src="<?php echo url('public/js/ManageHome/adminlte.min.js'); ?>"></script>
  <!-- index js -->
  <script type="text/javascript" src="<?php echo url('public/js/ManageHome/index.js'); ?>"></script>
  <?php echo $__env->yieldSection(); ?>
</body>
</html>
