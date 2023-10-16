
<?php include 'header.php'; ?>

<?php
if(!isset($_SESSION['valid'])) {
	header('Location: login.php');
}
?>

<?php
//including the database connection file
include_once("connection.php");

	$result = mysqli_query($mysqli, "SELECT sales_transactions.* FROM sales_transactions ORDER BY id ASC");


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
	<h3>Sales</h3>
<a class="pull-right" href="addsale.php" class="">Add New Sale</a>
	
	<h2 class=""><?php if($_SESSION['role'] == 'superadmin'){ ?><button id="export" class="btn btn-primary btn-xs">Export</button><?php } ?></h2>	
	<div class="table-responsive">
	<table id="myTable" class="display table" width="100%">
		 <thead>  
		<tr bgcolor='#101010' style="color: #777;">
			<th>S No</th>
			<th>Customer Name</th>
			<th>Mobile No</th>
			<th>Project</th>
			<th>Date</th>
			<th>Remark</th>
			<th>Amount	</th>
			<th>Employee	</th>
			<th>Manager	</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
		<?php
		$i = 1;
		while($res = mysqli_fetch_array($result)) {		
			
			echo "<tr>";
			echo "<td>".$i."</td>";
			echo "<td>".$res['customer_name']."</td>";
			echo "<td>".$res['mobile_number']."</td>";
			echo "<td>".$res['project']."</td>";
			echo "<td>".$res['sales_date']."</td>";	
			echo "<td>".$res['remark']."</td>";	
			echo "<td>".$res['amount']."</td>";	
			echo "<td>".$res['employee']."</td>";	
			echo "<td>".$res['manager']."</td>";	
			echo "<td><span class='badge badge-warning'><a href=\"view_sales_transaction_details.php?sale_id=$res[id]\" style='color:#fff;'>View</a></span> </td>";	
			 $i++;	
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
<?php include 'footer.php'; ?>
</body>
</html>
