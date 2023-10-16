
<?php include 'header.php'; ?>

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
$result = mysqli_query($mysqli, "SELECT sales.*,login.name as empname FROM sales join login on login.id=sales.added_by WHERE added_by=".$_SESSION['id']." ORDER BY id DESC");
}
else if($_SESSION['designation'] == 'AM'){
	$result = mysqli_query($mysqli, "SELECT sales.*,login.name as empname FROM sales join login on login.id=sales.added_by WHERE report=".$_SESSION['id']." ORDER BY id DESC");
	}
	else if($_SESSION['designation'] == 'ABM'){
	 $result = mysqli_query($mysqli, "SELECT sales.*,login.name as empname FROM sales join login on login.id=sales.added_by WHERE report in (SELECT id from login WHERE report = ".$_SESSION['id'].") ORDER BY id DESC");
	}
	else if($_SESSION['designation'] == 'BM'){
	 $result = mysqli_query($mysqli, "SELECT sales.*,login.name as empname FROM sales join login on login.id=sales.added_by WHERE report in (SELECT id from login WHERE report in (SELECT id from login WHERE report =  ".$_SESSION['id'].")) OR report =  ".$_SESSION['id']." OR report in (SELECT id FROM login WHERE report= ".$_SESSION['id']." ) ORDER BY id DESC");
	}

	else{
		$result = mysqli_query($mysqli, "SELECT sales.*,login.name as empname FROM sales join login on login.id=sales.added_by ORDER BY id DESC");
	}
?>
<style type="text/css">
	.badge-warning{
		    background-color: #5cb85c!important;
	}
	.badge-danger{
		background-color: #red!important;
	}
</style>
<link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">   
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<link rel="stylesheet" 

href="http://cdn.datatables.net/1.10.2/css/jquery.dataTables.min.css">
<script type="text/javascript" 

src="http://cdn.datatables.net/1.10.2/js/jquery.dataTables.min.js"></script>
<!-- <script type="text/javascript" 

src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script> -->
<div class="container">
	<?php if($_SESSION['role'] == ''){ ?>
	<a href="addsale.php" class="btn btn-success">Add New Sale</a>
	<?php } ?>
	<br/><br/>
	<h2>Eswari Homes - Sales<?php if($_SESSION['role'] == 'superadmin'){ ?>&nbsp;&nbsp;&nbsp;<button id="export" class="btn btn-primary btn-xs">Export</button><?php } ?></h2>
	<div class="table-responsive">
	<table id="myTable" class="display table" width="100%">
		 <thead>  
		<tr bgcolor='#101010' style="color: #777;">
			<th>Employee</th>
			<th>Customer</th>
			<th>Mobile</th>
			<th>Email</th>
			<th>Property Name</th>
			<th>Location</th>
			<th>Sqft</th>
			<th>Flat No</th>
			<!-- <th>Aadhar</th>
			<th>PAN</th> -->
			<th>Added On</th>
			<th>Status</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
		<?php
		while($res = mysqli_fetch_array($result)) {		
			echo "<tr>";
			echo "<td>".$res['empname']."</td>";
			echo "<td>".$res['customer_name']."</td>";
			echo "<td>".$res['mobile']."</td>";
			echo "<td>".$res['email']."</td>";
			echo "<td>".$res['property_name']."</td>";
			echo "<td>".$res['location']."</td>";
			echo "<td>".$res['sqft']."</td>";
			echo "<td>".$res['flatno']."</td>";	
			// echo "<td>".$res['aadhar']."</td>";	
			// echo "<td>".$res['pan']."</td>";	
			echo "<td>".$res['added_on']."</td>";	
			echo "<td>".$res['status']."</td>";	
			
				echo "<td><span class='badge badge-warning'><a href=\"view_sale_details.php?sale_id=$res[id]\" style='color:#fff;'>View Deatils</a></span> </td>";
				
		}
		?>
	</tbody>
	</table>
    </div>
	</div>	
	<script>
$(document).ready(function(){
    $('#myTable').dataTable();
});
</script>
<script src="csvExport.js"></script>
<script>
$( "#export" ).click(function() {
  $('table').csvExport();
});
</script>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
<?php include 'footer.php'; ?>
</body>
</html>
