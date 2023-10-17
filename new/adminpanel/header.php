<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>ase</title>
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
      <a class="navbar-brand" href="index.php"><img src="../assets/img/aselogo.jpeg" alt="" class="img-fluid" style="    margin-top: -30px;width: 60px;"></a>


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
   <?php if($_SESSION['id'] == 1){ ?>
    <li><a href="blogs.php">Blogs</a></li>
    <li><a href="registration.php">New Registrations</a></li>
      <li><a href="enquiry_form.php">Enquiries</a></li>
       
    <?php } ?>
  
  
	 <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span>Logout</a></li>
	 <?php }else{?>
       <!--  <li><a href="register.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li> -->
        <!-- <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li> -->
    <?php } ?>

      </ul>
    </div>
  </div>
</nav>
  