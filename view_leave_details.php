<?php include 'header2.php'; ?>
<style type="text/css">
	.panel-heading{
		    background-color: #000000;
    height: 35px;
    padding: 6px;
	}
	.panel{
		margin-bottom: 50px;
	}
</style>
<?php
if(!isset($_SESSION['valid'])) {
	header('Location: login.php');
}
?>
<?php
include_once("connection.php");
$leave_id = $_GET['leave_id'];

?>
<div class='main-panel'>
          <div class='content-wrapper'>
            <div class='page-header'>
            <nav aria-label='breadcrumb'>
                <ol class='breadcrumb'>
                </ol>
              </nav>
            </div>
            <div class='row'>
             
              <div class='col-lg-12 grid-margin stretch-card'>
                <div class='card'>
                  <div class='card-body'>
<div class="container">


	<?php 
	 $result4 = mysqli_query($mysqli, "SELECT leaves.* FROM leaves where id = ".$leave_id." ORDER BY id DESC");
    while($res4 = mysqli_fetch_array($result4))
    {
      $subject = $res4['subject'];
      $content = $res4['content'];
      $applied_on = $res4['applied_on'];
      $hr_approval = $res4['hr_approval'];
      $report_to = $res4['report_to'];
      if($report_to == 0){
      	$report_manager_appoval = 'No Reporting Manager';
      }else{
      	 $report_manager_appoval = $res4['report_manager_appoval'];
      }


  	}?>
  	<div class="container">
	<h2>Leave Details</h2>
	
    <div class="form-group">
      <label for="email">Subject:</label>
      <input type="text" class="form-control" id="name"  value="<?php echo $subject;?>" readonly>
    </div>
    <div class="form-group">
      <label for="email">Date of Leave:</label>
      <input type="text" class="form-control" id="name"  value="<?php echo $applied_on;?>" readonly>
    </div>
    <div class="form-group">
      <label for="email">Content:</label>
      <textarea class="form-control" id="name"  value="<?php echo $content;?>" readonly><?php echo $content;?></textarea>
    </div>
    <div class="form-group">
      <label for="email">Reporting Manager Aappoval:</label>
      <span class="badge badge-success"><?php echo $report_manager_appoval;?></span>
    </div>
    <div class="form-group">
      <label for="email">HR Approval:</label>
      <span class="badge badge-success"><?php echo $hr_approval;?></span>
    </div>

    </div>

  	<?php

	 if($_SESSION['id'] == $report_to){ ?>
	<div class="panel panel-primary">
      <div class="panel-heading" style="background-color: #101010;">Reporting Manager Appoval</div>
      <div class="panel-body">
      	<form action="" method="post">
      	<label>Status: </label>
      	<select class="form-control" name="leave_status" required>
      		<option value="<?php echo $report_manager_appoval; ?>"><?php echo $report_manager_appoval; ?></option>
      		<option value="Pending">Pending</option>
      		<option value="Approved">Aprroved</option>
      		<option value="Rejected">Rejected</option>
      	</select><br>
      	<input type="submit" name="verify_btn" class="btn btn-primary" style="background-color: #101010;">
      </form>
      </div>
    </div>
	<?php }

	if(isset($_POST['verify_btn'])){
		$status = $_POST['leave_status'];
		$qry = "UPDATE leaves SET report_manager_appoval='".$status."' WHERE id=".$leave_id."";
		if ($mysqli->query($qry) === TRUE) {
		   echo "
		  <script>
         setTimeout(function(){
            window.location.href = 'view_leaves.php';
         }, 1000);
      </script>";
		} else {
		  echo "Something error occured.";
		}
	}
	

	 ?>


	<?php

	 if($_SESSION['designation'] == 'HR' || $_SESSION['role'] == 'superadmin'){ ?>
	<div class="panel panel-primary">
      <div class="panel-heading" style="background-color: #101010;">HR Manager Appoval</div>
      <div class="panel-body">
      	<form action="" method="post">
      	<label>Status: </label>
      	<select class="form-control" name="hr_leave_status" required>
      		<option value="<?php echo $hr_approval; ?>"><?php echo $hr_approval; ?></option>
      		<option value="Pending">Pending</option>
      		<option value="Approved">Aprroved</option>
      		<option value="Rejected">Rejected</option>
      	</select><br>
      	<input type="submit" name="hr_verify_btn" class="btn btn-primary" style="background-color: #101010;">
      </form>
      </div>
    </div>
	<?php }

	if(isset($_POST['hr_verify_btn'])){
		//print_r($_POST);
		$hr_leave_status = $_POST['hr_leave_status'];
		$qry2 = "UPDATE leaves SET hr_approval='".$hr_leave_status."' WHERE id=".$leave_id."";
		if ($mysqli->query($qry2) === TRUE) {
		  echo "
		  <script>
         setTimeout(function(){
            window.location.href = 'view_leaves.php';
         }, 1000);
      </script>";
		} else {
		  echo "Something error occured.";
		}
	}
	

	 ?>


	



</div>

</div>
              </div>
              
         
            </div>
          </div>
<?php include 'footer2.php'; ?>