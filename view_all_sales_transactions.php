
<?php include 'header.php'; ?>

<?php
if(!isset($_SESSION['valid'])) {
	header('Location: login.php');
}
?>

<?php
//including the database connection file
include_once("connection.php");

	$result = mysqli_query($mysqli, "SELECT sales_payments.*,sales_transactions.project FROM sales_payments join sales_transactions on sales_transactions.id=sales_payments.sale_id  ORDER BY sales_payments.id ASC");
	$result2 = mysqli_query($mysqli, "SELECT sales_total_balance.* FROM sales_total_balance where id = 1");
 		 while($res2 = mysqli_fetch_array($result2))
		    {
		      
		      $total_balance = $res2['sales_total_balance'];
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
	<br/><br/>
	
	 <div class="panel panel-info">
      <div class="panel-heading"><b>Sales Balance Details as on <?php echo date("d-m-Y") ?></b>	
</div>
      <div class="panel-body"><b>Available Sales Balance:</b><span>INR <?php echo $total_balance; ?></span></div>
    </div>
	<h2 class=""><?php if($_SESSION['role'] == 'superadmin'){ ?><button id="export" class="btn btn-primary btn-xs">Export</button><?php } ?></h2>	
	<div class="table-responsive">
	<table id="myTable" class="display table" width="100%">
		 <thead>  
		<tr bgcolor='#101010' style="color: #777;">
			<th>S No</th>
			<th>Project</th>
			<th>Transaction Date</th>
			<th>Payment Mode</th>
			<th>Transaction Remark</th>
			<th>CR/DR	</th>
			<th>Withdrawal Amount (INR)</th>
			<th>Deposit Amount (INR)</th>
			<th>Balance (INR)</th>
		</tr>
	</thead>
	<tbody>
		<?php
		$i = 1;
		while($res = mysqli_fetch_array($result)) {		
			if($res['crdr'] == 'DR'){
				$withdrawal = $res['term_amount'];
				$deposit = '';
			}else{
				$withdrawal = '';
				$deposit = $res['term_amount'];
			}
			echo "<tr>";
			echo "<td>".$i."</td>";
			echo "<td>".$res['project']."</td>";
			echo "<td>".$res['payment_date']."</td>";
			echo "<td>".$res['payment_mode']."</td>";
			echo "<td>".$res['payment_remark']."</td>";
			echo "<td>".$res['crdr']."</td>";
			echo "<td>".$withdrawal."</td>";	
			echo "<td>".$deposit."</td>";	
			echo "<td>".$res['all_remaining_balance']."</td>";	
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
