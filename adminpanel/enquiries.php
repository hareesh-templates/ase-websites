
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
	<h2>Enquiries</h2>

	<?php
		$result = mysqli_query($mysqli, "SELECT enqform.* FROM enqform");
	?>
	<div class="table-responsive">
	<table id="myTable" class="display table" width="100%">
		 <thead>  
		<tr bgcolor='#101010' style="color: #777;">
			
			<th>Full Name</th>
			<th>Email</th>
			<th>Mobile</th>
			<th>Country</th>
			<th>Comment</th>
			<th>Resume</th>
			<th>Action</th>
			
		</tr>
	</thead>
	<tbody>
		<?php
		while($res = mysqli_fetch_array($result)) {		
			

			echo "<tr>";
			echo "<td>".$res['fullname']."</td>";
			echo "<td>".$res['email']."</td>";
			echo "<td>".$res['mobile']."</td>";
			echo "<td>".$res['country']."</td>";
			echo "<td>".$res['comments']."</td>";
			echo "<td><a target='_blank' href=../upload/".$res['file'].">".'Click Here'."</a></td>";
			echo "<td><span class='badge badge-danger'><a href=\"delete_enquiry.php?profile_id=$res[id]\" style='color:#fff;' onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a><pan></td>";	
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
