
<?php include 'header2.php'; ?>

<?php
if(!isset($_SESSION['valid'])) {
	header('Location: login.php');
}
?>
<style type="text/css">
	.scrollme {
    overflow-x: auto;
}
</style>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<?php
//including the database connection file
include_once("connection.php");

//fetching data in descending order (lastest entry first)

if($_SESSION['designation'] == 'RM' || $_SESSION['designation'] == 'EX'){
$result = mysqli_query($mysqli, "SELECT daily_reports.*,login.name as empname FROM daily_reports join login on login.id=daily_reports.added_by WHERE added_by=".$_SESSION['id']."  and login.status='inactive' ORDER BY id DESC");
}
else if($_SESSION['designation'] == 'AM'){
	$result = mysqli_query($mysqli, "SELECT daily_reports.*,login.name as empname FROM daily_reports join login on login.id=daily_reports.added_by WHERE report=".$_SESSION['id']."  and login.status='inactive' ORDER BY id DESC");
}
else if($_SESSION['designation'] == 'ABM'){
	$result = mysqli_query($mysqli, "SELECT daily_reports.*,login.name as empname FROM daily_reports join login on login.id=daily_reports.added_by WHERE report in (SELECT id from login WHERE report = ".$_SESSION['id'].") or report=".$_SESSION['id']."  and login.status='inactive' ORDER BY id DESC");
}
else if($_SESSION['designation'] == 'BM'){
	$result = mysqli_query($mysqli, "SELECT daily_reports.*,login.name as empname FROM daily_reports join login on login.id=daily_reports.added_by WHERE report in (SELECT id from login WHERE report in (SELECT id from login WHERE report =  ".$_SESSION['id'].")) OR report =  ".$_SESSION['id']." OR report in (SELECT id FROM login WHERE report= ".$_SESSION['id']." )  and login.status='inactive' ORDER BY id DESC");
}
else{
	$result = mysqli_query($mysqli, "SELECT daily_reports.*,login.name as empname FROM daily_reports join login on login.id=daily_reports.added_by where login.status='inactive' ORDER BY id DESC");
}

?>

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
              
	<h2>Eswari Homes - Daily Report(Inactive Employees) <?php if($_SESSION['role'] == 'superadmin'){ ?>&nbsp;&nbsp;&nbsp;<button id="export" class="btn btn-primary btn-xs">Export</button>&nbsp;&nbsp;&nbsp;<a class="btn btn-primary btn-xs" href="view_dailyreport_by_date.php">Search By Date</a>&nbsp;&nbsp;&nbsp;<a class="btn btn-primary btn-xs" href="view_dailyreport.php">Reports by Active Empoyees</a>	<?php } ?></h2>


	<div class="table-responsive" >
		<div class="table-responsive">
      <table class="table table-hover table-striped table-responsive" id="dtBasicExample">
		 <thead>  
		<tr bgcolor='#101010' style="color: #777;">
			<th>Employee</th>
			<th>Added On</th>
		<!-- 	<th>No of Visits</th>
			<th>No of F2F</th> -->
			<th>Location</th>
			<!-- <th>No of Calls</th> -->
			<th>New Leads</th>
			<th>Sales</th>
			<!-- <th>AM Status</th>
			<th>ABM Status</th>
			<th>BM Status</th> -->
			 <th>Actions</th> 
		</tr>
	</thead>
	<tbody>
		<?php
		while($res = mysqli_fetch_array($result)) {		
			echo "<tr>";
			echo "<td>".$res['empname']."</td>";
			echo "<td>".$res['applied_on']."</td>";
			// echo "<td>".$res['no_of_visits']."</td>";
			// echo "<td>".$res['no_of_ftof']."</td>";
			echo "<td>".$res['location']."</td>";
		//	echo "<td>".$res['no_of_calls']."</td>";	
			echo "<td>".$res['new_leads']."</td>";	
			echo "<td>".$res['sales']."</td>";	
			// echo "<td>".$res['am_verification']."</td>";	
			// echo "<td>".$res['abm_verification']."</td>";	
			// echo "<td>".$res['bm_verification']."</td>";	
			echo "<td><span class='badge badge-warning'><a href=\"view_dailyreport_details.php?daily_reports_id=$res[id]\" style='color:#fff;'>View</a></span></td>";	
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

<script type="text/javascript">
$(document).ready(function () {
  $('#dtBasicExample').DataTable({
"scrollX": true,
});
  $('.dataTables_length').addClass('bs-select');
});
</script>

<?php include 'footer2.php'; ?>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<link rel="stylesheet" href="http://cdn.datatables.net/1.10.2/css/jquery.dataTables.min.css">
<script type="text/javascript" src="http://cdn.datatables.net/1.10.2/js/jquery.dataTables.min.js"></script>
<script src="csvExport.js"></script>
<script>
$( "#export" ).click(function() {
  $('table').csvExport();
});
</script>
