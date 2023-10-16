<?php session_start(); ?>
<?php
  if(isset($_SESSION['valid'])) {     
    include("connection.php");          
  //  $result = mysqli_query($mysqli, "SELECT * FROM login");
    $result = mysqli_query($mysqli, "SELECT login.* FROM login where id = ".$_SESSION['id']." ORDER BY id DESC");
    while($res = mysqli_fetch_array($result))
    {
      
      $name = $res['name'];
      $email = $res['email'];
      $username = $res['username'];
      $phonenumber = $res['phonenumber'];
      $adharnumber = $res['adharnumber'];
      $pannumber = $res['pannumber'];
      $designation = $res['designation'];
      $anternate_number = $res['anternate_number'];
      $present_address = $res['present_address'];
      $permanent_address = $res['permanent_address'];
      $joining_date = $res['joining_date'];
      $branch = $res['branch'];
      $adhar_image = $res['adhar_image'];
      $pan_image = $res['pan_image'];
      $about_previous_company = $res['about_previous_company'];
      $bank_account_number = $res['bank_account_number'];
      $ifsc = $res['ifsc'];
      $dob = $res['dob'];
      $ofc_email = $res['ofc_email'];
      $bank_holder_name = $res['bank_holder_name'];
       if($res['company'] == 'eh'){
          $company = 'Eswari Homes';
        }
        if($res['company'] == 'ec'){
          $company = 'Eswari Capital';
        }
        if($res['company'] == 'at'){
          $company = 'ASE Technologies';
        }
        if($res['company'] == 'eg'){
          $company = 'Eswari Group';
        }
     
    }
  ?>
  <?php 
  } else {
    header('Location: login.php');
  }
  ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Eswari Group</title>
    <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css" />
    <link rel="stylesheet" href="assets/vendors/flag-icon-css/css/flag-icon.min.css" />
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css" />
    <link rel="stylesheet" href="assets/vendors/font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" href="assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css" />
    <link rel="stylesheet" href="assets/css/style.css" />
    <link rel="shortcut icon" href="assets/images/E.png" />
  </head>
  <body>
    <div class="container-scroller">
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <div class="text-center sidebar-brand-wrapper d-flex align-items-center">
          <?php
  if(isset($_SESSION['valid'])) {     
    include("connection.php");          
    $result = mysqli_query($mysqli, "SELECT * FROM login");
  ?>
      <?php if($_SESSION['company'] == 'at'){ ?>
       <a class="sidebar-brand brand-logo" href="index.html"><img src="images/logo3.png" style="    width: 87px; margin-top: -30px;"></a>
      <?php } ?>

      <?php  if($_SESSION['company'] == 'eh'){ ?>
       <a class="sidebar-brand brand-logo" href="index.html"><img src="images/logo2.png" style="height: 30px;"></a>
      <?php } ?>

      <?php  if($_SESSION['company'] == 'ec'){ ?>
       <a class="sidebar-brand brand-logo" href="index.html">Eswari capital</a>
      <?php } ?>

       <?php  if($_SESSION['company'] == 'eg'){ ?>
       <a class="sidebar-brand brand-logo" href="index.html"><img src="images/eglogo.png" style="height: 30px;"></a>
      <?php } ?>

<?php }else{ ?>
        <!-- <a class="navbar-brand" href="index.php"><img src="images/eglogo.png" style="height: 30px;"></a> -->
    <?php } ?>
  
<!--           <a class="sidebar-brand brand-logo" href="index.html"><img src="images/eglogo.png" alt="logo" /></a>
 -->          <a class="sidebar-brand brand-logo-mini pl-4 pt-3" href="index.html"><img src="images/eglogo2.png" alt="logo" /></a>
        </div>
        <ul class="nav">
           <?php
  if(isset($_SESSION['valid'])) {     
    include("connection.php");          
    $result = mysqli_query($mysqli, "SELECT * FROM login");
  ?>
          <li class="nav-item nav-profile">
            <a href="index2.php" class="nav-link">
              <div class="nav-profile-image">
                <img src="assets/images/faces/icon.png" alt="profile" />
                <span class="login-status online"></span>
                <!--change to offline or busy as needed-->
              </div>
              <div class="nav-profile-text d-flex flex-column pr-3">
                <span class="font-weight-medium mb-2"><?php echo $_SESSION['name'] ?></span>
                <span class="font-weight-normal"><?php echo $_SESSION['designation'] ?></span>
              </div>
<!--               <span class="badge badge-danger text-white ml-3 rounded">3</span>
 -->            </a>
          </li>
          <?php if($_SESSION['id'] == 1 || $_SESSION['designation'] == 'HR' || $_SESSION['role'] == 'superadmin'){ ?>
            <li class="nav-item">
            <a class="nav-link" href="dashboard.php">
              <i class="mdi mdi-home menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="employees.php">
              <i class="mdi mdi-contacts menu-icon"></i>
              <span class="menu-title">Employees</span>
            </a>
          </li>
            <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic1" aria-expanded="false" aria-controls="ui-basic">
              <i class="mdi mdi-crosshairs-gps menu-icon"></i>
              <span class="menu-title">ASE Technologies</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic1">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item">
                  <a class="nav-link" href="view.php">Tasks</a>
                </li>
                 <li class="nav-item">
                  <a class="nav-link" href="employee_list.php">Employee List</a>
                </li>
               
              </ul>
            </div>
          </li>
           <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic2" aria-expanded="false" aria-controls="ui-basic">
              <i class="mdi mdi-crosshairs-gps menu-icon"></i>
              <span class="menu-title">Eswari Homes</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic2">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"><a class="nav-link" href="view_dailyreport.php">Daily Reports</a></li>
                <li class="nav-item"><a class="nav-link" href="view_visits.php">Visits</a></li>
                <li class="nav-item"><a class="nav-link" href="view_ftof.php">F2F</a></li>
                <!--<li><a href="view_sales.php">Sales</a></li>-->
                <li class="nav-item"><a class="nav-link" href="https://eswarihomes.com/employee-desk/home" target="_blank">Sales</a></li>
                <li class="nav-item"><a class="nav-link" href="view_calls.php">Calls</a></li>
                <li class="nav-item">
                  <a class="nav-link" href="employee_list2.php">Employee List</a>
                </li>
                 <li class="nav-item">
                  <a class="nav-link" href="search.php">Search</a>
                </li>
              </ul>
            </div>
          </li>
          
          <?php } ?>
          
   <?php if($_SESSION['company'] == 'at' && ($_SESSION['designation'] != 'Self' || $_SESSION['designation'] != 'Admin' || $_SESSION['designation'] != 'IT Admin' || $_SESSION['designation'] != 'Front Office Executive')){ ?>
    <?php if($_SESSION['designation'] != 'RM' && $_SESSION['designation'] != 'EX'){ ?>
      <li class="nav-item"><a class="nav-link" href="team.php"><i class="mdi mdi-format-list-bulleted menu-icon"></i><span class="menu-title">Team</span></a></li>
      <?php } ?>
      <li class="nav-item"><a class="nav-link" href="view.php"><i class="mdi mdi-format-list-bulleted menu-icon"></i><span class="menu-title">Tasks</span></a></li>
   <?php } ?>
   <?php if($_SESSION['company'] == 'eh' && ($_SESSION['designation'] != 'Self' && $_SESSION['designation'] != 'Admin' && $_SESSION['designation'] != 'IT Admin' && $_SESSION['designation'] != 'Front Office Executive' && $_SESSION['designation'] != 'Telecaller')){ ?>
      <?php if($_SESSION['designation'] != 'RM' && $_SESSION['designation'] != 'EX'){ ?>
      <li class="nav-item"><a class="nav-link" href="team.php"><i class="mdi mdi-format-list-bulleted menu-icon"></i><span class="menu-title">Team</span></a></li>
      <?php } ?>
      <li class="nav-item"><a class="nav-link" href="view_dailyreport.php"><i class="mdi mdi-format-list-bulleted menu-icon"></i><span class="menu-title">Daily Reports</span></a></li>
      <li class="nav-item"><a class="nav-link" href="view_visits.php"><i class="mdi mdi-format-list-bulleted menu-icon"></i><span class="menu-title">Visits</span></a></li>
      <li class="nav-item"><a class="nav-link" href="view_ftof.php"><i class="mdi mdi-format-list-bulleted menu-icon"></i><span class="menu-title">F to F</span></a></li>
      <!--<li><a href="view_sales.php"><span class="glyphicon glyphicon-list-alt"></span>Sales</a></li>-->
       <li class="nav-item"><a class="nav-link" href="https://eswarihomes.com/employee-desk/home" target="_blank"><i class="mdi mdi-format-list-bulleted menu-icon"></i><span class="menu-title">Sales</span></a></li>
      <li class="nav-item"><a class="nav-link" href="view_calls.php"><i class="mdi mdi-format-list-bulleted menu-icon"></i><span class="menu-title">Calls List</span></a></li>
   <?php } ?>
    <?php if($_SESSION['role'] == 'superadmin' || $_SESSION['id'] == 106){?> 
      <li class="nav-item"><a class="nav-link" href="calls.php"><i class="mdi mdi-format-list-bulleted menu-icon"></i><span class="menu-title">Calls</span></a></li>
    <?php } ?>
    <?php if($_SESSION['designation'] == 'Telecaller'){?> 
      <li class="nav-item"><a class="nav-link" href="calls.php"><i class="mdi mdi-format-list-bulleted menu-icon"></i><span class="menu-title">Calls</span></a></li>
    <?php } ?>
    <li class="nav-item"><a class="nav-link" href="view_leaves.php"><i class="mdi mdi-format-list-bulleted menu-icon"></i><span class="menu-title">Leaves</span></a></li>

          <li class="nav-item">
            <span class="nav-link" href="#">
              <span class="menu-title">Docs</span>
            </span>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"></i>
              <span class="menu-title">Documentation</span>
            </a>
          </li>
          <li class="nav-item sidebar-actions">
            <div class="nav-link">
              <div class="mt-4">
                <div class="border-none">
                  <p class="text-black">Notification</p>
                </div>
                <ul class="mt-4 pl-0">
                  <li> <a class="nav-link" href="logout.php"></i>Sign Out</a></li>
                </ul>
              </div>
            </div>
          </li>
        </ul>
      <?php } ?>
      </nav>
      <div class="container-fluid page-body-wrapper">
        <div id="theme-settings" class="settings-panel">
          <i class="settings-close mdi mdi-close"></i>
          <p class="settings-heading">SIDEBAR SKINS</p>
          <div class="sidebar-bg-options selected" id="sidebar-default-theme">
            <div class="img-ss rounded-circle bg-light border mr-3"></div> Default
          </div>
          <div class="sidebar-bg-options" id="sidebar-dark-theme">
            <div class="img-ss rounded-circle bg-dark border mr-3"></div> Dark
          </div>
          <p class="settings-heading mt-2">HEADER SKINS</p>
          <div class="color-tiles mx-0 px-4">
            <div class="tiles light"></div>
            <div class="tiles dark"></div>
          </div>
        </div>
        <nav class="navbar col-lg-12 col-12 p-lg-0 fixed-top d-flex flex-row">
          <div class="navbar-menu-wrapper d-flex align-items-stretch justify-content-between">
            <a class="navbar-brand brand-logo-mini align-self-center d-lg-none" href="index.html"><img src="images/eglogo2.png" alt="logo" height="75px" /></a>
            <button class="navbar-toggler navbar-toggler align-self-center mr-2" type="button" data-toggle="minimize">
              <i class="mdi mdi-menu"></i>
            </button>
            <ul class="navbar-nav">
              <li class="nav-item dropdown">
                <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-toggle="dropdown">
                  <i class="mdi mdi-bell-outline"></i>
                 <!--  <span class="count count-varient1"></span> -->
                </a>
                <!-- <div class="dropdown-menu navbar-dropdown navbar-dropdown-large preview-list" aria-labelledby="notificationDropdown">
                  <h6 class="p-3 mb-0">Notifications</h6>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <img src="assets/images/faces/face4.jpg" alt="" class="profile-pic" />
                    </div>
                    <div class="preview-item-content">
                      <p class="mb-0"> Dany Miles <span class="text-small text-muted">commented on your photo</span>
                      </p>
                    </div>
                  </a>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <img src="assets/images/faces/face3.jpg" alt="" class="profile-pic" />
                    </div>
                    <div class="preview-item-content">
                      <p class="mb-0"> James <span class="text-small text-muted">posted a photo on your wall</span>
                      </p>
                    </div>
                  </a>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <img src="assets/images/faces/face2.jpg" alt="" class="profile-pic" />
                    </div>
                    <div class="preview-item-content">
                      <p class="mb-0"> Alex <span class="text-small text-muted">just mentioned you in his post</span>
                      </p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <p class="p-3 mb-0">View all activities</p>
                </div> -->
              </li>
              <li class="nav-item dropdown d-none d-sm-flex">
                <a class="nav-link count-indicator dropdown-toggle" id="messageDropdown" href="#" data-toggle="dropdown">
                  <i class="mdi mdi-email-outline"></i>
                  <!-- <span class="count count-varient2">5</span> -->
                </a>
               <!--  <div class="dropdown-menu navbar-dropdown navbar-dropdown-large preview-list" aria-labelledby="messageDropdown">
                  <h6 class="p-3 mb-0">Messages</h6>
                  <a class="dropdown-item preview-item">
                    <div class="preview-item-content flex-grow">
                      <span class="badge badge-pill badge-success">Request</span>
                      <p class="text-small text-muted ellipsis mb-0"> Suport needed for user123 </p>
                    </div>
                    <p class="text-small text-muted align-self-start"> 4:10 PM </p>
                  </a>
                  <a class="dropdown-item preview-item">
                    <div class="preview-item-content flex-grow">
                      <span class="badge badge-pill badge-warning">Invoices</span>
                      <p class="text-small text-muted ellipsis mb-0"> Invoice for order is mailed </p>
                    </div>
                    <p class="text-small text-muted align-self-start"> 4:10 PM </p>
                  </a>
                  <a class="dropdown-item preview-item">
                    <div class="preview-item-content flex-grow">
                      <span class="badge badge-pill badge-danger">Projects</span>
                      <p class="text-small text-muted ellipsis mb-0"> New project will start tomorrow </p>
                    </div>
                    <p class="text-small text-muted align-self-start"> 4:10 PM </p>
                  </a>
                  <h6 class="p-3 mb-0">See all activity</h6>
                </div> -->
              </li>
              <li class="nav-item nav-search border-0 ml-1 ml-md-3 ml-lg-5 d-none d-md-flex">
                <form class="nav-link form-inline mt-2 mt-md-0">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search" />
                    <div class="input-group-append">
                      <span class="input-group-text">
                        <i class="mdi mdi-magnify"></i>
                      </span>
                    </div>
                  </div>
                </form>
              </li>
            </ul>
            <ul class="navbar-nav navbar-nav-right ml-lg-auto">
              <li class="nav-item dropdown d-none d-xl-flex border-0">
                <a class="nav-link dropdown-toggle" id="languageDropdown" href="#" data-toggle="dropdown">
                  <i class="mdi mdi-earth"></i> English </a>
                <div class="dropdown-menu navbar-dropdown" aria-labelledby="languageDropdown">
                  <a class="dropdown-item" href="#"> English </a>
                </div>
              </li>
              <li class="nav-item nav-profile dropdown border-0">
                <a class="nav-link dropdown-toggle" id="profileDropdown" href="#" data-toggle="dropdown">
                  <img class="nav-profile-img mr-2" alt="" src="assets/images/faces/icon.png" />
                  <span class="profile-name"><?php echo $_SESSION['name'] ?></span>
                </a>
                <div class="dropdown-menu navbar-dropdown w-100" aria-labelledby="profileDropdown">
                 
                  <a class="dropdown-item" href="logout.php">
                    <i class="mdi mdi-logout mr-2 text-primary"></i> Signout </a>
                </div>
              </li>
            </ul>
            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
              <span class="mdi mdi-menu"></span>
            </button>
          </div>
        </nav>