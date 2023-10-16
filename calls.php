
<?php include 'header2.php'; ?>

<?php
if(!isset($_SESSION['valid'])) {
	header('Location: login.php');
}
?>

<?php
//including the database connection file
include_once("connection.php");


if($_SESSION['designation'] == 'Telacaller'){
$result = mysqli_query($mysqli, "SELECT calls.*,login.name as empname FROM calls join login on login.id=calls.login_id WHERE login_id=".$_SESSION['id']." ORDER BY id DESC");
}
else{
	$result = mysqli_query($mysqli, "SELECT calls.*,login.name as empname FROM calls join login on login.id=calls.login_id ORDER BY id DESC");
}
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                 <?php if($_SESSION['role'] == 'superadmin'){ ?><li><button id="export" class="btn btn-primary btn-xs">Export</button></li><?php } ?><?php if($_SESSION['role'] == ''){ ?>
	<a href="addcalllist.php" class="btn btn-success">Add New Call list</a>
	<?php } ?>
                </ol>
              </nav>
            </div>
            <div class="row">
             
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
	<h2>Calls</h2>	
	<div class="table-responsive">
	<table class="table table-hover table-striped table-responsive" id="dtBasicExample">
		 <thead>  
		<tr bgcolor='#101010' style="color: #777;">
			<th>Employee</th>
			<th>No.Of calls</th>
			<th>Assigned On</th>
			<th>Comments</th>
			<th>View List</th> 
		</tr>
	</thead>
	<tbody>
		<?php
		while($res = mysqli_fetch_array($result)) {		
			echo "<tr>";
			echo "<td>".$res['empname']."</td>";
			echo "<td>".$res['no_of_calls']."</td>";
			echo "<td>".$res['added_date']."</td>";	
			echo "<td>".$res['comments']."</td>";	
			echo "<td><span class='badge badge-warning'><a href=\"calls/$res[file_name]\" style='color:#fff;'>View</a></span> | <span class='badge badge-danger'><a href=\"deletecall_list.php?call_id=$res[id]\" style='color:#fff;' onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a><pan></td>";
			
			
		
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

