<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Employee | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin/plugins/summernote/summernote-bs4.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link">Home</a>
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
      <li class="nav-item d-none d-sm-inline-block">
           <a href="<?php echo base_url('employee-desk/home/logout'); ?>" class="nav-link">Logout</a>
      </li>
   
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
     <!--  <img src="<?php echo base_url(); ?>assets/images/logo2.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8"> -->
      <span class="brand-text font-weight-light"><b><?php echo $user['name']; ?></b></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?php echo base_url(); ?>assets/admin/dist/img/123.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?php echo $user['designation']; ?></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview">
                <a href="<?php echo base_url(); ?>employee-desk/home" class="nav-link">
           
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          
          <?php if($user['designation'] == 'AM' || $user['designation'] == 'ABM' || $user['designation'] == 'BM' ||  $user['role'] == 'superadmin') {?>
           <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Bookings
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                <a href="<?php echo base_url(); ?>employee-desk/property/bookingproject" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Project Details</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url(); ?>employee-desk/property/bookings" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Bookings</p>
                </a>
              </li>
            </ul>
          </li>
        <?php } ?>
          <li class="nav-item has-treeview">
               <!--  <a href="https://eswarihomes.com/assets/emp-desk/Advisory-Note-for-Your-Booking.pdf" class="nav-link"> -->
           <a href="<?php echo base_url(); ?>employee-desk/property/advisorynote" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Advisory Note
              </p>
            </a>
          </li>

          <?php if($user['id'] > 20){ ?> 
            <li class="nav-item has-treeview">
                <a href="<?php echo base_url(); ?>employee-desk/property/incentives" class="nav-link">
           
              <i class="nav-icon fas fa-table"></i>
              <p>
                Incentives
              </p>
            </a>
          </li>
        <?php }else{ ?>
           <li class="nav-item has-treeview">
                <a href="<?php echo base_url(); ?>employee-desk/property/incentives_employees_list" class="nav-link">
           
              <i class="nav-icon fas fa-table"></i>
              <p>
                Incentives
              </p>
            </a>
          </li>

       <?php } ?>
          <?php if($user['designation'] == 'BM' || $user['designation'] == 'ABM' || $user['role'] == 'superadmin'){ ?>
           <li class="nav-item has-treeview">
                <a href="<?php echo base_url(); ?>employee-desk/property/sent_mails" class="nav-link">
           
              <i class="fas fa-circle nav-icon"></i>
              <p>
                Sent Mails to Customers
              </p>
            </a>
          </li>
        <?php } ?>
           <li class="nav-item has-treeview">
                <a href="<?php echo base_url(); ?>employee-desk/home/logout" class="nav-link">
           
              <i class="fas fa-circle nav-icon"></i>
              <p>
                Logout
              </p>
            </a>
          </li>


        
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>