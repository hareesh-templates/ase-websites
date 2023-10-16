<?php 
 $forgotemail = $_GET['forgotemail'];
?>

<?php 
include("connection.php");				
	include 'header.php';
?>
<div class="container">
	 <h2 style="text-align: center;"><img src="images/eglogo2.png" height="100px" width="100px"></h2>
 <div class="panel panel-primary">
      <div class="panel-heading" style="background-color: #222">Reset Password</div>
      <div class="panel-body">
      	<form action="" method="post">
      	<div class="form-group">
      		<input type="email" name="forgotemail" class="form-control" value="<?php echo $forgotemail; ?>" required readonly>
      	</div>
      	<div class="form-group">
      		<input type="text" name="empid" class="form-control"  required placeholder="Enter your Employee ID">
      	</div>
      	<div class="form-group">
      		<input type="text" name="newpwd" class="form-control"  required placeholder="Enter New Password">
      	</div>
      	<input type="submit" name="resetpwd" class="btn btn-primary"  style="background-color: #222">
      	</form>
      </div>
    </div>
</div>
<?php
if(isset($_POST['resetpwd'])){
	$forgotemail = $_POST['forgotemail'];
	$empid = $_POST['empid'];
	$newpwd = $_POST['newpwd'];


	$sql = "SELECT * FROM login where username = '".$empid."' and email = '".$forgotemail."'";
	$result = $mysqli->query($sql);

	if($result){
	  if ($result->num_rows> 0) { 
	    	 $update = "UPDATE login SET password='".$newpwd."'  where username = '".$empid."' and email = '".$forgotemail."'";
			if ($mysqli->query($update) === TRUE) {
			  echo "<div class='container'>Password Reset successfully</div>";
			} else {
			  echo "<div class='container'>Error occured</div> ";
			}
	  }else{
	      echo "<div class='container'>No record found</div>";
	  }
	}else{
	  echo "<div class='container'>Error</div>";
	}
}
?>

<?php 
	include 'footer.php';
?>