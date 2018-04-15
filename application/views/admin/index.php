<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Store|Admin</title>
  <!-- Tell the browser to be responsive to screen width -->
  <link rel="icon" type="image/png" href="<?php echo base_url(); ?>./assets/font_end_assets/images/icons/favicon.ico"/>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="<?php echo base_url(); ?>./assets/back_end_assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>./assets/back_end_assets/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>./assets/back_end_assets/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>./assets/back_end_assets/dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>./assets/back_end_assets/dist/css/skins/skin-blue.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  <link rel="stylesheet" href="<?php echo base_url(); ?>./assets/back_end_assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>./assets/back_end_assets/dist/css/style.css">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <!-- Main Header -->
  <header class="main-header">

    <!-- Logo -->
    <a href="<?php echo base_url(); ?>" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>SHOP</b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Kamal</b>&nbsp;Shop</span>
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- User Account Menu -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?php echo base_url(); ?>./assets/back_end_assets/images/logo.jpg" class="user-image" alt="User Image">
              <span class="hidden-xs"><?php echo $this->session->name; ?></span>
            </a>
            <ul class="dropdown-menu">
              <li class="user-header">
                <img src="<?php echo base_url(); ?>./assets/back_end_assets/images/logo.jpg" class="img-circle" alt="User Image">

                <p>
                  <?php echo $this->session->name; ?>
                  <small>Member since Nov. 2018</small>
                </p>
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                    <a href="<?php echo base_url('sign-out'); ?>" class="btn btn-default btn-flat">Sign out</a>
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

      <!-- Sidebar user panel (optional) -->
      <div class="user-panel">
        <div class="pull-left image">
            <img src="<?php echo base_url(); ?>./assets/back_end_assets/images/logo.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $this->session->name; ?></p>
          <!-- Status -->
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">Store Manage</li>
        <li class="treeview">
          <a href="#"><i class="fa fa-address-card"></i> <span>Dashboard</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
              <li><a href="<?php echo base_url(); ?>">Home</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#"><i class="fa fa-adn"></i> <span>Category</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
              <li><a href="<?php echo base_url('Category-Add') ?>">Category</a></li>
            <li><a href="<?php echo base_url('Category-Management') ?>">Category management</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#"><i class="fa fa-address-card"></i> <span>Product</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
              <li><a href="<?php echo base_url('Product-add'); ?>">Product</a></li>
            <li><a href="<?php echo base_url('Product-Management'); ?>">Product Management</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#"><i class="fa fa-address-book"></i> <span>Store</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url('Store-add'); ?>">Store</a></li>
            <li><a href="<?php echo base_url('Store-Management'); ?>">Store Management</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#"><i class="fa fa-adn"></i> <span>Reports</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
              <li><a href="<?php echo base_url('Product-Report') ?>">Product Reports</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#"><i class="fa fa-adjust"></i> <span>Customer</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url('Customer-add'); ?>">Customer</a></li>
            <li><a href="<?php echo base_url('Customer-Management'); ?>">Customer Management</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#"><i class="fa fa-subway"></i> <span>Employees</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url('Employee-add'); ?>">Employee</a></li>
            <li><a href="<?php echo base_url('Employee-Management'); ?>">Employee Management</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#"><i class="fa fa-user"></i> <span>All Profiles</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url('User-add'); ?>">User</a></li>
            <li><a href="<?php echo base_url('User-Management'); ?>">User Management</a></li>
          </ul>
        </li>
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

      <!--my code-->
      <?php echo $main_contant; ?>

  </div>
  <!-- /.content-wrapper -->

  <div class="control-sidebar-bg"></div>

</div>
<!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->
<!-- jQuery 3 -->
<script src="<?php echo base_url(); ?>./assets/back_end_assets/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url(); ?>./assets/back_end_assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url(); ?>./assets/back_end_assets/dist/js/adminlte.min.js"></script>
<!-- DataTables -->
<script src="<?php echo base_url(); ?>./assets/back_end_assets/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url(); ?>./assets/back_end_assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- page script -->
<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>

<script type="text/JavaScript">

function confirmDelete(){
var agree = confirm("Are you sure you want to delete?");
if (agree == true){
    return true;
}
else if(agree == false) {
    return false;
}

}
</script>
<script src='http://cdnjs.cloudflare.com/ajax/libs/d3/3.5.5/d3.min.js'></script>
<script  src="<?php echo base_url(); ?>./assets/back_end_assets/dist/js/index.js"></script>
<!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. -->
</body>
</html>