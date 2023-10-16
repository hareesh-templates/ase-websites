
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
$result = mysqli_query($mysqli, "SELECT f2f.*,login.name as empname FROM f2f join login on login.id=f2f.added_by WHERE added_by=".$_SESSION['id']." and login.status='active' ORDER BY id DESC");
}
else if($_SESSION['designation'] == 'AM'){
	$result = mysqli_query($mysqli, "SELECT f2f.*,login.name as empname FROM f2f join login on login.id=f2f.added_by WHERE report=".$_SESSION['id']." and login.status='active' ORDER BY id DESC");
	}
	else if($_SESSION['designation'] == 'ABM'){
	 $result = mysqli_query($mysqli, "SELECT f2f.*,login.name as empname FROM f2f join login on login.id=f2f.added_by WHERE report in (SELECT id from login WHERE report = ".$_SESSION['id'].") and login.status='active'  ORDER BY id DESC");
	}
	else if($_SESSION['designation'] == 'BM'){
	 $result = mysqli_query($mysqli, "SELECT f2f.*,login.name as empname FROM f2f join login on login.id=f2f.added_by WHERE report in (SELECT id from login WHERE report in (SELECT id from login WHERE report =  ".$_SESSION['id'].")) OR report =  ".$_SESSION['id']." OR report in (SELECT id FROM login WHERE report= ".$_SESSION['id']." ) and login.status='active'  ORDER BY id DESC");
	}

	else{
		$result = mysqli_query($mysqli, "SELECT f2f.*,login.name as empname FROM f2f join login on login.id=f2f.added_by and login.status='active'  ORDER BY id DESC");
	}
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                 <?php if($_SESSION['role'] == 'superadmin'){ ?><li><button id="export" class="btn btn-primary btn-xs">Export</button></li><li class="pull-right" style="padding-left: 20px;"><a href="view_ftof_inactive.php" class="">Inactive Employees F2F</a></li><?php } ?><?php if($_SESSION['role'] == ''){ ?>
	<a href="addftof.php" class="btn btn-success">Add New F2F</a>
	<?php } ?>
                </ol>
              </nav>
            </div>
            <div class="row">
             
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
	
	<h2>Eswari Homes - F2F</h2>
	<div class="table-responsive" >
		<div class="table-responsive">
      <table class="table table-hover table-striped table-responsive" id="dtBasicExample">
		 <thead>  
		<tr bgcolor='#101010' style="color: #777;">
			<th>Employee</th>
			<!-- <th>S.No</th> -->
			<th>Customer</th>
			<th>Mobile</th>
		<!-- 	<th>Address</th> -->
			<th>Place of Presentation</th>
		<!-- 	<th>Project Interest</th> -->
			<!-- <th>Status</th> -->
			<th>Google Review</th>
			<th>Assigned On</th>
			<th>Actions</th>
		</tr>
	</thead>
	<tbody>
		<?php
		while($res = mysqli_fetch_array($result)) {		
			echo "<tr>";
			echo "<td>".$res['empname']."</td>";
		//	echo "<td>".$res['sno']."</td>";
			echo "<td>".$res['customer_name']."</td>";
			echo "<td>".$res['mobile']."</td>";
		//	echo "<td>".$res['address']."</td>";
			echo "<td>".$res['place_of_presentation']."</td>";
		//	echo "<td>".$res['project_interested']."</td>";
		//	echo "<td>".$res['status']."</td>";
			echo "<td>".$res['google_review']."</td>";
			echo "<td>".$res['added_on']."</td>";	
			
				echo "<td><span class='badge badge-warning'><a href=\"view_ftof_details.php?ftof_id=$res[id]\" style='color:#fff;'>View Deatils</a></span> </td>";
				
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.2/css/jquery.dataTables.min.css">
<script type="text/javascript" src="https://cdn.datatables.net/1.10.2/js/jquery.dataTables.min.js"></script>
<script src="csvExport.js"></script>
<script>
$( "#export" ).click(function() {
  $('table').csvExport();
});
</script>
