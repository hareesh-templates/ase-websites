<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Eswari Group</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body >

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button> 
        <?php
  if(isset($_SESSION['valid'])) {     
    include("connection.php");          
    $result = mysqli_query($mysqli, "SELECT * FROM login");
  ?>
      <?php if($_SESSION['company'] == 'at'){ ?>
      <a class="navbar-brand" href="dashboard.php"><img src="images/logo3.png" style="    width: 87px; margin-top: -30px;"></a>
      <?php } ?>

      <?php  if($_SESSION['company'] == 'eh'){ ?>
      <a class="navbar-brand" href="dashboard.php"><img src="images/logo2.png" style="height: 30px;"></a>
      <?php } ?>

      <?php  if($_SESSION['company'] == 'ec'){ ?>
      <a class="navbar-brand" href="dashboard.php">Eswari capital</a>
      <?php } ?>

       <?php  if($_SESSION['company'] == 'eg'){ ?>
      <a class="navbar-brand" href="dashboard.php"><img src="images/eglogo.png" style="height: 30px;"></a>
      <?php } ?>

<?php }else{ ?>
        <!-- <a class="navbar-brand" href="index.php"><img src="images/eglogo.png" style="height: 30px;"></a> -->
    <?php } ?>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      
      <ul class="nav navbar-nav navbar-right">
        <?php
  if(isset($_SESSION['valid'])) {     
    include("connection.php");          
    $result = mysqli_query($mysqli, "SELECT * FROM login");
  ?>
   <li><a href="index.php"><span class="glyphicon glyphicon-user"></span><?php echo $_SESSION['name'] ?></a></li>
   <?php if($_SESSION['id'] == 1 || $_SESSION['designation'] == 'HR' || $_SESSION['role'] == 'superadmin'){ ?>
      <li><a href="employees.php"><span class="glyphicon glyphicon-user"></span>Employees</a></li>
       <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">ASE Technologies <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="view.php">Tasks</a></li>
        </ul>
      </li>
       <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Eswari Homes<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="view_dailyreport.php">Daily Reports</a></li>
          <li><a href="view_visits.php">Visits</a></li>
          <li><a href="view_ftof.php">F2F</a></li>
          <!--<li><a href="view_sales.php">Sales</a></li>-->
          <li><a href="https://eswarihomes.com/employee-desk/home" target="_blank">Sales</a></li>
          <li><a href="view_calls.php">Calls</a></li>
        </ul>
      </li>
    <?php } ?>
   <?php if($_SESSION['company'] == 'at' && ($_SESSION['designation'] != 'Self' || $_SESSION['designation'] != 'Admin' || $_SESSION['designation'] != 'IT Admin' || $_SESSION['designation'] != 'Front Office Executive')){ ?>
    <?php if($_SESSION['designation'] != 'RM' && $_SESSION['designation'] != 'EX'){ ?>
      <li><a href="team.php"><span class="glyphicon glyphicon-list-alt"></span>Team</a></li>
      <?php } ?>
      <li><a href="view.php"><span class="glyphicon glyphicon-list-alt"></span>Tasks</a></li>
   <?php } ?>
   <?php if($_SESSION['company'] == 'eh' && ($_SESSION['designation'] != 'Self' && $_SESSION['designation'] != 'Admin' && $_SESSION['designation'] != 'IT Admin' && $_SESSION['designation'] != 'Front Office Executive' && $_SESSION['designation'] != 'Telecaller')){ ?>
      <?php if($_SESSION['designation'] != 'RM' && $_SESSION['designation'] != 'EX'){ ?>
      <li><a href="team.php"><span class="glyphicon glyphicon-list-alt"></span>Team</a></li>
      <?php } ?>
      <li><a href="view_dailyreport.php"><span class="glyphicon glyphicon-list-alt"></span>Daily Reports</a></li>
      <li><a href="view_visits.php"><span class="glyphicon glyphicon-list-alt"></span>Visits</a></li>
      <li><a href="view_ftof.php"><span class="glyphicon glyphicon-list-alt"></span>F to F</a></li>
      <!--<li><a href="view_sales.php"><span class="glyphicon glyphicon-list-alt"></span>Sales</a></li>-->
       <li><a href="https://eswarihomes.com/employee-desk/home" target="_blank"><span class="glyphicon glyphicon-list-alt"></span>Sales</a></li>
      <li><a href="view_calls.php"><span class="glyphicon glyphicon-list-alt"></span>Calls List</a></li>
   <?php } ?>
    <?php if($_SESSION['role'] == 'superadmin' || $_SESSION['id'] == 106){?> 
      <li><a href="calls.php"><span class="glyphicon glyphicon-list-alt"></span>Calls</a></li>
    <?php } ?>
    <?php if($_SESSION['designation'] == 'Telecaller'){?> 
      <li><a href="calls.php"><span class="glyphicon glyphicon-list-alt"></span>Calls</a></li>
    <?php } ?>
    <li><a href="view_leaves.php"><span class="glyphicon glyphicon-log-out"></span>Leaves</a></li>
   <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span>Logout</a></li>
   <?php }else{?>
       <!--  <li><a href="register.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li> -->
        <!-- <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li> -->
    <?php } ?>

      </ul>
    </div>
  </div>
</nav>
  