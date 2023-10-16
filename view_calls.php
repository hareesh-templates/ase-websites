
<?php include 'header2.php'; ?>

<?php
if(!isset($_SESSION['valid'])) {
	header('Location: login.php');
}
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<?php
//including the database connection file
include_once("connection.php");

//fetching data in descending order (lastest entry first)

if($_SESSION['designation'] == 'RM' || $_SESSION['designation'] == 'EX'){
$result = mysqli_query($mysqli, "SELECT no_of_calls.daily_reports_id,no_of_calls.customer_name_c, no_of_calls.lead, no_of_calls.interest_details,  no_of_calls.customer_number_c, daily_reports.applied_on, daily_reports.added_by, login.name as empname FROM no_of_calls JOIN daily_reports ON daily_reports.id=no_of_calls.daily_reports_id JOIN login ON login.id=daily_reports.added_by WHERE daily_reports.added_by=".$_SESSION['id']." ORDER BY no_of_calls.id DESC");
}
else if($_SESSION['designation'] == 'AM'){
	$result = mysqli_query($mysqli, "SELECT no_of_calls.daily_reports_id,no_of_calls.customer_name_c, no_of_calls.lead, no_of_calls.interest_details,  no_of_calls.customer_number_c, daily_reports.applied_on, daily_reports.added_by, login.name as empname FROM no_of_calls JOIN daily_reports ON daily_reports.id=no_of_calls.daily_reports_id JOIN login ON login.id=daily_reports.added_by WHERE login.report=".$_SESSION['id']." ORDER BY no_of_calls.id DESC");
}
else if($_SESSION['designation'] == 'ABM'){
	$result = mysqli_query($mysqli, "SELECT no_of_calls.daily_reports_id,no_of_calls.customer_name_c, no_of_calls.lead, no_of_calls.interest_details,  no_of_calls.customer_number_c, daily_reports.applied_on, daily_reports.added_by, login.name as empname FROM no_of_calls JOIN daily_reports ON daily_reports.id=no_of_calls.daily_reports_id JOIN login ON login.id=daily_reports.added_by WHERE login.report in (SELECT login.id from login WHERE login.report = ".$_SESSION['id'].") or login.report=".$_SESSION['id']." ORDER BY no_of_calls.id DESC");
}
else if($_SESSION['designation'] == 'BM'){
	$result = mysqli_query($mysqli, "SELECT no_of_calls.daily_reports_id,no_of_calls.customer_name_c, no_of_calls.lead, no_of_calls.interest_details,  no_of_calls.customer_number_c, daily_reports.applied_on, daily_reports.added_by, login.name as empname FROM no_of_calls JOIN daily_reports ON daily_reports.id=no_of_calls.daily_reports_id JOIN login ON login.id=daily_reports.added_by WHERE login.report in (SELECT login.id from login WHERE login.report in (SELECT login.id from login WHERE login.report =  ".$_SESSION['id'].")) OR login.report =  ".$_SESSION['id']." OR login.report in (SELECT id FROM login WHERE login.report= ".$_SESSION['id']." ) ORDER BY no_of_calls.id DESC");
}
else{
	$result = mysqli_query($mysqli, "SELECT no_of_calls.daily_reports_id,no_of_calls.customer_name_c, no_of_calls.lead, no_of_calls.interest_details,  no_of_calls.customer_number_c, daily_reports.applied_on, daily_reports.added_by, login.name as empname FROM no_of_calls JOIN daily_reports ON daily_reports.id=no_of_calls.daily_reports_id JOIN login ON login.id=daily_reports.added_by ORDER BY no_of_calls.id DESC");
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
	
	<h2>Eswari Homes - Daily Report - Calls <?php if($_SESSION['role'] == 'superadmin'){ ?>&nbsp;&nbsp;&nbsp;<button id="export" class="btn btn-primary btn-xs">Export</button><?php } ?></h2>	


	<div class="table-responsive">
	<table class="table table-hover table-striped table-responsive" id="dtBasicExample">
		 <thead>  
		<tr bgcolor='#101010' style="color: #777;">
			<th>Employee</th>
			<th>Added On</th>
			<th>Customer Name</th>
			<th>Customer Mobile</th>
			<th>Leads</th>
			<th>Interest</th>
		</tr>
	</thead>
	<tbody>
		<?php
		while($res = mysqli_fetch_array($result)) {		
			echo "<tr>";
			echo "<td>".$res['empname']."</td>";
			echo "<td>".$res['applied_on']."</td>";
			echo "<td>".$res['customer_name_c']."</td>";
			echo "<td>".$res['customer_number_c']."</td>";
			echo "<td>".$res['lead']."</td>";
			echo "<td>".$res['interest_details']."</td>";
			
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

