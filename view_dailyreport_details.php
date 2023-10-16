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
$daily_reports_id = $_GET['daily_reports_id'];
if($_SESSION['id'] == 1){
	$result = mysqli_query($mysqli, "SELECT daily_reports_customerdetails.* FROM daily_reports_customerdetails where daily_reports_id = ".$daily_reports_id." ORDER BY id DESC");
}else{
$result = mysqli_query($mysqli, "SELECT daily_reports_customerdetails.* FROM daily_reports_customerdetails where daily_reports_id = ".$daily_reports_id." ORDER BY id DESC");
}

if($_SESSION['id'] == 1){
	$result2 = mysqli_query($mysqli, "SELECT daily_reports_customerdetails_f.* FROM daily_reports_customerdetails_f where daily_reports_id = ".$daily_reports_id." ORDER BY id DESC");
}else{
$result2 = mysqli_query($mysqli, "SELECT daily_reports_customerdetails_f.* FROM daily_reports_customerdetails_f where daily_reports_id = ".$daily_reports_id." ORDER BY id DESC");
}

if($_SESSION['id'] == 1){
	$result3 = mysqli_query($mysqli, "SELECT no_of_calls.* FROM no_of_calls where daily_reports_id = ".$daily_reports_id." ORDER BY id DESC");
}else{
$result3 = mysqli_query($mysqli, "SELECT no_of_calls.* FROM no_of_calls where daily_reports_id = ".$daily_reports_id." ORDER BY id DESC");
}
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


	<?php 
	if($_SESSION['designation'] == 'AM'|| $_SESSION['designation'] == 'ABM'){
	 $result4 = mysqli_query($mysqli, "SELECT daily_reports.* FROM daily_reports where id = ".$daily_reports_id." ORDER BY id DESC");
    while($res4 = mysqli_fetch_array($result4))
    {
      $am_verification = $res4['am_verification'];
  	}

	 if($am_verification != 'Verified'){ ?>
	<div class="panel panel-primary">
      <div class="panel-heading" style="background-color: #101010;">AM Verification</div>
      <div class="panel-body">
      	<form action="" method="post">
      	<label>Status: </label>
      	<select class="form-control" name="am_verify" required>
      		<option value="Pending">Pending</option>
      		<option value="Verified">Verified</option>
      		<option value="Not Verified">Not Verified</option>
      	</select><br>
      	<input type="submit" name="am_verify_btn" class="btn btn-primary" style="background-color: #101010;">
      </form>
      </div>
    </div>
	<?php }

	if(isset($_POST['am_verify_btn'])){
		$status = $_POST['am_verify'];
		$qry = "UPDATE daily_reports SET am_verification='".$status."', am_verification_by=".$_SESSION['id']." WHERE id=".$daily_reports_id."";
		if ($mysqli->query($qry) === TRUE) {
		  echo "<div class='alert alert-success'>Status updated successfully</div>";
		   // header('Location: view_dailyreport.php');
		} else {
		  echo "Something error occured.";
		}
	}
	}

	 ?>


	 <?php 
	 if($_SESSION['designation'] == 'ABM' ){
	 $result5 = mysqli_query($mysqli, "SELECT daily_reports.* FROM daily_reports where id = ".$daily_reports_id." ORDER BY id DESC");
    while($res5 = mysqli_fetch_array($result5))
    {
      $abm_verification = $res5['abm_verification'];
  	}

	 if($abm_verification != 'Verified'){ ?>
	<div class="panel panel-primary">
      <div class="panel-heading" style="background-color: #101010;">ABM Verification</div>
      <div class="panel-body">
      	<form action="" method="post">
      	<label>ABM Status: </label>
      	<select class="form-control" name="abm_verify" required>
      		<option value="Pending">Pending</option>
      		<option value="Verified">Verified</option>
      		<option value="Not Verified">Not Verified</option>
      	</select><br>
      	<input type="submit" name="abm_verify_btn" class="btn btn-primary" style="background-color: #101010;">
      </form>
      </div>
    </div>
	<?php }

	if(isset($_POST['abm_verify_btn'])){
		$status = $_POST['abm_verify'];
		$qry = "UPDATE daily_reports SET abm_verification='".$status."', abm_verification_by=".$_SESSION['id']." WHERE id=".$daily_reports_id."";
		if ($mysqli->query($qry) === TRUE) {
		  echo "<div class='alert alert-success'>Status updated successfully</div>";
		//  header('Location: view_dailyreport.php');
		} else {
		  echo "Something error occured.";
		}
	}
	}
	 ?>


	 <?php 
	 if($_SESSION['designation'] == 'BM' ){
	 $result6 = mysqli_query($mysqli, "SELECT daily_reports.* FROM daily_reports where id = ".$daily_reports_id." ORDER BY id DESC");
    while($res6 = mysqli_fetch_array($result6))
    {
      $bm_verification = $res6['bm_verification'];
  	}

	 if($bm_verification != 'Verified'){ ?>
	<div class="panel panel-primary">
      <div class="panel-heading" style="background-color: #101010;">BM Verification</div>
      <div class="panel-body">
      	<form action="" method="post">
      	<label>Status: </label>
      	<select class="form-control" name="bm_verify" required>
      		<option value="Pending">Pending</option>
      		<option value="Verified">Verified</option>
      		<option value="Not Verified">Not Verified</option>
      	</select><br>
      	<input type="submit" name="bm_verify_btn" class="btn btn-primary" style="background-color: #101010;">
      </form>
      </div>
    </div>
	<?php }

	if(isset($_POST['bm_verify_btn'])){
		$status = $_POST['bm_verify'];
		$qry = "UPDATE daily_reports SET bm_verification='".$status."', bm_verification_by=".$_SESSION['id']." WHERE id=".$daily_reports_id."";
		if ($mysqli->query($qry) === TRUE) {
		  echo "<div class='alert alert-success'>Status updated successfully</div>";
		 //   header('Location: view_dailyreport.php');
		} else {
		  echo "Something error occured.";
		}
	}
	}
	 ?>


  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home" class="btn btn-danger btn-rounded btn-fw">Visits</a></li>
    <li><a data-toggle="tab" href="#menu1" class="btn btn-warning btn-rounded btn-fw">F2F</a></li>
    <li><a data-toggle="tab" href="#menu2" class="btn btn-info btn-rounded btn-fw">Calls</a></li>
    
  </ul>

  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
      <h3>Visits-Customers</h3>
      <div class="table-responsive">
	<table id="myTable" class="display table" width="100%">
		 <thead>  
		<tr bgcolor='#101010' style="color: #777;">
			<th>Customers</th>
			
		</tr>
	</thead>
	<tbody>
		<?php
		while($res = mysqli_fetch_array($result)) {		
			echo "<tr>";
			echo "<td>".$res['customer_name']."</td>";
			
		}
		?>
	</tbody>
	</table>
    </div>
    </div>
    <div id="menu1" class="tab-pane fade">
     <h3>F2F-Customers</h3>
      <div class="table-responsive">
	<table id="myTable" class="display table" width="100%">
		 <thead>  
		<tr bgcolor='#101010' style="color: #777;">
			<th>Customers</th>
			
		</tr>
	</thead>
	<tbody>
		<?php
		while($res = mysqli_fetch_array($result2)) {		
			echo "<tr>";
			echo "<td>".$res['customer_name_f']."</td>";
			
		}
		?>
	</tbody>
	</table>
    </div>
    </div>
    <div id="menu2" class="tab-pane fade">
     <h3>Calls-Customers</h3>
      <div class="table-responsive">
	<table id="myTable" class="display table" width="100%">
		 <thead>  
		<tr bgcolor='#101010' style="color: #777;">
			<th>Customers</th>
			<th>Mobile</th>
			<th>Interest Details</th>
			<th>Lead</th>
			
		</tr>
	</thead>
	<tbody>
		<?php
		while($res = mysqli_fetch_array($result3)) {		
			echo "<tr>";
			echo "<td>".$res['customer_name_c']."</td>";
			echo "<td>".$res['customer_number_c']."</td>";
			echo "<td>".$res['interest_details']."</td>";
			echo "<td>".$res['lead']."</td>";
			
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
              </div>
              
         
            </div>
          </div>
<?php include 'footer2.php'; ?>
