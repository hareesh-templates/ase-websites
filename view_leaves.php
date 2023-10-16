
<?php include 'header2.php'; ?>

<?php
if(!isset($_SESSION['valid'])) {
	header('Location: login.php');
}
?>

<?php
//including the database connection file
include_once("connection.php");

//fetching data in descending order (lastest entry first)

if($_SESSION['designation'] == 'RM' || $_SESSION['designation'] == 'EX'){
$result = mysqli_query($mysqli, "SELECT leaves.*,login.name as empname,login.company as company,login.designation as designation FROM leaves join login on login.id=leaves.added_by WHERE added_by=".$_SESSION['id']." ORDER BY id DESC");
}
else if($_SESSION['designation'] == 'AM' || $_SESSION['designation'] == 'Front Office Executive' || $_SESSION['designation'] == 'IT Admin'){
	$result = mysqli_query($mysqli, "SELECT leaves.*,login.name as empname,login.company as company,login.designation as designation FROM leaves join login on login.id=leaves.added_by WHERE report=".$_SESSION['id']." OR added_by=".$_SESSION['id']." ORDER BY id DESC");
}
else if($_SESSION['designation'] == 'ABM'){
	$result = mysqli_query($mysqli, "SELECT leaves.*,login.name as empname,login.company as company,login.designation as designation FROM leaves join login on login.id=leaves.added_by WHERE report in (SELECT id from login WHERE report = ".$_SESSION['id'].") or report=".$_SESSION['id']." OR added_by=".$_SESSION['id']." ORDER BY id DESC");
}
else if($_SESSION['designation'] == 'BM'){
	$result = mysqli_query($mysqli, "SELECT leaves.*,login.name as empname,login.company as company,login.designation as designation FROM leaves join login on login.id=leaves.added_by WHERE report in (SELECT id from login WHERE report in (SELECT id from login WHERE report =  ".$_SESSION['id'].")) OR report =  ".$_SESSION['id']." OR report in (SELECT id FROM login WHERE report= ".$_SESSION['id']." ) OR added_by=".$_SESSION['id']." ORDER BY id DESC");
}
else{
	$result = mysqli_query($mysqli, "SELECT leaves.*,login.name as empname,login.company as company,login.designation as designation FROM leaves join login on login.id=leaves.added_by ORDER BY id DESC");
}

?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                 <?php if($_SESSION['role'] != 'superadmin'){ ?><li><a href="addleave.php" class="btn btn-success">Apply Leave</a></li><?php } ?>
                </ol>
              </nav>
            </div>
            <div class="row">
             
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">	
	<h2>Leaves</h2>	


	<div class="table-responsive">
		<table class="table table-hover table-striped table-responsive" id="dtBasicExample">
		 <thead>  
		<tr bgcolor='#101010' style="color: #777;">
			<th>Employee</th>
			<!-- <th>Company</th> -->
			<th>Designation</th>
			<th>Date of Leave</th>
			<!-- <th>Subject</th> -->
			<th>Added On</th>
			<th>Manager Approval</th>
			<th>HR Approval</th>
			 <th>Actions</th> 
		</tr>
	</thead>
	<tbody>
		<?php
		while($res = mysqli_fetch_array($result)) {	
			if($res['report_to'] == 0){
				$report_manager_appoval = '-';
			}else{
				$report_manager_appoval = $res['report_manager_appoval'];
			}
			// if($res['company'] = 'at'){
			// 	$res['company'] = 'ASE Technologies';
			// }if($res['company'] = 'eh'){
			// 	$res['company'] = 'Eswari Homes';
			// }
			echo "<tr>";
			echo "<td>".$res['empname']."</td>";
			//echo "<td>".$res['company']."</td>";
			echo "<td>".$res['designation']."</td>";
			echo "<td>".$res['applied_on']."</td>";
		//	echo "<td>".$res['subject']."</td>";
			echo "<td>".$res['added_on']."</td>";
			echo "<td>".$report_manager_appoval."</td>";	
			echo "<td>".$res['hr_approval']."</td>";	
			echo "<td><span class='badge badge-warning'><a href=\"view_leave_details.php?leave_id=$res[id]\" style='color:#fff;'>View</a></span></td>";	
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

<script type="text/javascript">
$(document).ready(function () {
  $('#dtBasicExample').DataTable();
  $('.dataTables_length').addClass('bs-select');
});
</script>

<?php include 'footer2.php'; ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.2/css/jquery.dataTables.min.css">
<script type="text/javascript" src="https://cdn.datatables.net/1.10.2/js/jquery.dataTables.min.js"></script>
<script src="csvExport.js"></script>
<script>
$( "#export" ).click(function() {
  $('table').csvExport();
});
</script>
