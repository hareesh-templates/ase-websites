
<?php 
	include 'header2.php';
	include_once("connection.php");
	if(!isset($_SESSION['valid'])) {
		header('Location: login.php');
	}
?>
<style type="text/css">
	.panel-heading{
		background-color: #fff;
		height: 30px;
	}
</style>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


<div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                
                </ol>
              </nav>
            </div>
            <div class="row">
             
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
	<?php if($_SESSION['designation'] == 'AM'){ ?>
	<?php
	 $result2 = mysqli_query($mysqli, "SELECT login.* FROM login where (designation = 'RM' or designation = 'EX') and report=0 and company = '".$_SESSION["company"]."'");?>
	  <div class="panel panel-primary" style=" border-color: #222222!important;">
      <div class="panel-heading">Add RM/Executive in Team</div>
      <div class="panel-body">
      	 <form action="" method="post">
	 	<div class="form-group">
		<select name="emp" class="form-control" required>
			<option value="">Select RM/EXECUTIVE</option>
			<?php
			while($res2 = mysqli_fetch_array($result2)) {	?>
			<option value="<?php echo $res2['id']; ?>"><?php echo $res2['username'].'-'.$res2['name'] ?></option>
			<?php } ?>
		</select>
		</div>
		<input type="submit" name="add_emp_team" class="btn btn-success" value="Add">
	</form>
      </div>
    </div>
	
<?php } ?>




<?php if($_SESSION['designation'] == 'ABM'){ ?>
	<?php
	 $result3 = mysqli_query($mysqli, "SELECT login.* FROM login where designation = 'AM' and report=0 and company = '".$_SESSION["company"]."'");?>
	  <div class="panel panel-primary" style=" border-color: #222222!important;">
      <div class="panel-heading" style="background-color: #222222!important;">Add AM in Team</div>
      <div class="panel-body">
	      

      	 <form action="" method="post">
	 	<div class="form-group">
		<select name="emp" class="form-control" required>
			<option value="">Select AM</option>
			<?php
			while($res3 = mysqli_fetch_array($result3)) {	?>
			<option value="<?php echo $res3['id']; ?>"><?php echo $res3['username'].'-'.$res3['name'] ?></option>
			<?php } ?>
		</select>
		</div>
		<input type="submit" name="add_emp_team" class="btn btn-success" value="Add">
	</form>
      </div>
    </div>
	
<?php } ?>

<?php if($_SESSION['designation'] == 'BM'){ ?>
	<?php
	 $result3 = mysqli_query($mysqli, "SELECT login.* FROM login where designation = 'ABM' and report=0 and company = '".$_SESSION["company"]."'");?>
	  <div class="panel panel-primary" style=" border-color: #222222!important;">
      <div class="panel-heading" style="background-color: #222222!important;">Add ABM in Team</div>
      <div class="panel-body">
	      

      	 <form action="" method="post">
	 	<div class="form-group">
		<select name="emp" class="form-control" required>
			<option value="">Select ABM</option>
			<?php
			while($res3 = mysqli_fetch_array($result3)) {	?>
			<option value="<?php echo $res3['id']; ?>"><?php echo $res3['username'].'-'.$res3['name'] ?></option>
			<?php } ?>
		</select>
		</div>
		<input type="submit" name="add_emp_team" class="btn btn-success" value="Add">
	</form>
      </div>
    </div>
	
<?php } ?>


<?php
	if(isset($_POST['add_emp_team'])){
		$empid = $_POST['emp'];
		$update1 = "UPDATE login SET report=".$_SESSION['id']." WHERE id=".$empid."";
		if ($mysqli->query($update1) === TRUE) {
		  echo "Added in team successfully";
		} else {
		  echo "Some problem occured. Please try later.";
		}

	}
 ?>
	<br/><br/>



	<?php
	if($_SESSION['designation'] == 'AM'){
		$result = mysqli_query($mysqli, "SELECT login.* FROM login where report =".$_SESSION['id']." ");
	}
	 else if($_SESSION['designation'] == 'ABM'){
		
		$result = mysqli_query($mysqli, "SELECT * FROM `login` where report in (SELECT id from login WHERE report = ".$_SESSION['id'].") or report=".$_SESSION['id']." ");
	}

	 else if($_SESSION['designation'] == 'BM'){
		
		$result = mysqli_query($mysqli, "SELECT * FROM `login` where report in (SELECT id from login WHERE report in (SELECT id from login WHERE report = ".$_SESSION['id'].")) OR report = ".$_SESSION['id']." OR report in (SELECT id FROM login WHERE report=".$_SESSION['id']." )
 ");
	}

	?>
	<div class="table-responsive">
	<table id="myTable" class="display table" width="100%">
		 <thead>  
		<tr bgcolor='#101010' style="color: #777;">
			<th>Employee ID</th>
			<th>Employee Name</th>
			<th>Designation</th>
			<th>Status</th>
			<th>Remove form Team</th>
			<th>Action</th>
			
		</tr>
	</thead>
	<tbody>
		<?php
		while($res = mysqli_fetch_array($result)) {		
			echo "<tr>";
			echo "<td>".$res['username']."</td>";
			echo "<td>".$res['name']."</td>";
			echo "<td>".$res['designation']."</td>";
			echo "<td>".$res['status']."</td>";
			
			echo "<td><span class='badge badge-warning'><a href=\"remove_from_team.php?profile_id=$res[id]\" style='color:#fff;'>Remove From Team</a></span></td>";
			echo "<td><span class='badge badge-warning'><a href=\"view_profile_details.php?profile_id=$res[id]\" style='color:#fff;'>View Profile</a></span></td>";	
		}
		?>
	</tbody>
	</table>
	  </div>
                  </div>
                </div>
              </div>
    </div>
	</div>	
	<script>
$(document).ready(function(){
    $('#myTable').dataTable();
});
</script>
<?php include 'footer2.php'; ?>

