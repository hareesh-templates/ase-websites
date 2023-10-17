
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
	<h2>Blogs	<a href="addblog.php" class="btn btn-default pull-right">Add Blog</a>
</h2>
	<?php
		$result = mysqli_query($mysqli, "SELECT blog.* FROM blog");
	?>
	<div class="table-responsive">
	<table id="myTable" class="display table" width="100%">
		 <thead>  
		<tr bgcolor='#101010' style="color: #777;">
			
			<th>Title</th>
			<th>Date</th>
			<th>Action</th>
			
		</tr>
	</thead>
	<tbody>
		<?php
		while($res = mysqli_fetch_array($result)) {		
			

			echo "<tr>";
			echo "<td>".$res['title']."</td>";
			echo "<td>".$res['event_date']."</td>";
			echo "<td><span class='badge badge-danger'><a href=\"delete_blog.php?profile_id=$res[id]\" style='color:#fff;' onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a><span></td>";	
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
