
<?php 
	include 'header.php';
	include_once("connection.php");
	if(!isset($_SESSION['valid'])) {
		header('Location: login.php');
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




<div class="container">
	<h2>Enquiry form details
</h2>
	<?php
		$result = mysqli_query($mysqli, "SELECT enquiry_form.* FROM enquiry_form");
	?>
	<div class="table-responsive">
	<table id="myTable" class="display table" width="100%">
		 <thead>  
		<tr bgcolor='#101010' style="color: #777;">
			
			<th>First Name</th>
			<th>Last Name</th>
			<th>Email</th>
			<th>Phone</th>
			<th>Comments</th>
			<th>Business</th>
			<th>Nature</th>
			<th>Requirement</th>
			<th>Added On</th>
			
		</tr>
	</thead>
	<tbody>
		<?php
		while($res = mysqli_fetch_array($result)) {		
			

			echo "<tr>";
			echo "<td>".$res['first_name']."</td>";
			echo "<td>".$res['last_name']."</td>";
			echo "<td>".$res['email']."</td>";
			echo "<td>".$res['phone']."</td>";
			echo "<td>".$res['comments']."</td>";
			echo "<td>".$res['business_name']."</td>";
			echo "<td>".$res['business_category']."</td>";
			echo "<td>".$res['requirement']."</td>";
			echo "<td>".$res['added_on']."</td>";
			
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
<?php include 'footer.php'; ?>
</body>
</html>
