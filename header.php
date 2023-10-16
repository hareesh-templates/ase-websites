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
        <!-- <a class="navbar-brand" href="dashboard.php"><img src="images/eglogo.png" style="height: 30px;"></a> -->
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
   <?php if($_SESSION['id'] == 1 ){ ?>
      
       
    <?php } ?>
 
   <li><a href="view.php"><span class="glyphicon glyphicon-log-out"></span>Transactions</a></li>
   <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Sales<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="view_sales_transaction.php">Sales</a></li>
          <li><a href="view_all_sales_transactions.php">Sales Transaction</a></li>
        </ul>
      </li>
   <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span>Logout</a></li>
	 <?php }?>
      

      </ul>
    </div>
  </div>
</nav>
  