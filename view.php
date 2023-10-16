
<?php include 'header.php'; ?>
<style type="text/css">
	.hideDiv {
    display: none
}
#export{
	float: right;
}
</style>
<?php
if(!isset($_SESSION['valid'])) {
	header('Location: login.php');
}
?>

<?php
//including the database connection file
include_once("connection.php");
	if(isset($_POST['date_search_btn'])){
		$transaction_date_from = $_POST['transaction_date_from'];
		$transaction_date_to = $_POST['transaction_date_to'];
		$from_date = date('Y-m-d', strtotime($transaction_date_from));
		$to_date = date('Y-m-d', strtotime($transaction_date_to));
		$result = mysqli_query($mysqli, "SELECT * FROM `transactions` WHERE STR_TO_DATE(transaction_date, '%d-%m-%Y') BETWEEN '$from_date' AND '$to_date' ORDER BY id ASC");
	}else{
		$result = mysqli_query($mysqli, "SELECT transactions.* FROM transactions ORDER BY id ASC");
	}
	$result2 = mysqli_query($mysqli, "SELECT total_balance.* FROM total_balance where id = 1");
 		 while($res2 = mysqli_fetch_array($result2))
		    {
		      
		      $total_balance = $res2['total_balance'];
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
 <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

<div class="container">
<a class="pull-right" href="addtransaction.php" class="">Add New Transaction</a>
	<br/><br/>
	
	 <div class="panel panel-info">
      <div class="panel-heading"><b>Balance Details as on <?php echo date("d-m-Y") ?></b>	
</div>
      <div class="panel-body"><b>Available Balance:</b><span>INR <?php echo $total_balance; ?></span></div>
    </div>

	<?php if($_SESSION['role'] == 'superadmin'){ ?><button id="export" class="btn btn-primary btn-xs">Export</button><?php } ?>	    <label class="checkbox-inline"><input type="checkbox" id="search" onClick="toggle('search')"/> <b>Detailed Statement</b></label>
	 <br/><div class="panel panel-info hideDiv"  id="searchDiv" >
      <div class="panel-heading"><b>Search</b>	
      </div>
      <div class="panel-body">
      	<form class="form-inline" method="post">
		    <div class="form-group">
		      <label for="email">Transaction Date Form:</label>
		       <input type="text" class="form-control" id="datepicker"  name="transaction_date_from" required autocomplete="off">
		    </div>
		    <div class="form-group">
		      <label for="pwd">to:</label>
		      <input type="text" class="form-control" id="datepicker2" name="transaction_date_to" required autocomplete="off">
		    </div>
		    
		    <input type="submit" class="btn btn-danger" value="Search" name="date_search_btn">
		  </form>
      </div>
    </div>
 <br>
	<div class="table-responsive">
	<table id="myTable" class="display table" width="100%">
		 <thead>  
		<tr bgcolor='#101010' style="color: #777;">
			<th>S No</th>
			<th>Transaction Date</th>
			<th>Transaction Remark</th>
			<th>CR/DR	</th>
			<th>Deposit Amount (INR)</th>
			<th>Withdrawal Amount (INR)</th>
			<th>Balance (INR)</th>
			<th>Added By</th>
		</tr>
	</thead>
	<tbody>
		<?php
		$i = 1;
		while($res = mysqli_fetch_array($result)) {		
			if($res['crdr'] == 'CR'){
				$withdrawal = $res['transaction_amount'];
				$deposit = '';
			}else{
				$withdrawal = '';
				$deposit = $res['transaction_amount'];
			}
			echo "<tr>";
			echo "<td>".$i."</td>";
			echo "<td>".$res['transaction_date']."</td>";
			echo "<td>".$res['remarks']."</td>";
			echo "<td>".$res['crdr']."</td>";
			echo "<td>".$withdrawal."</td>";	
			echo "<td>".$deposit."</td>";	
			echo "<td>".$res['total_amount']."</td>";	
			echo "<td>".$res['added_by']."</td>";	
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
<script>
   $(function() {  
        $( "#datepicker" ).datepicker({
            dateFormat: 'dd-mm-yy',
          changeMonth: true,
          changeYear: true
        });
      });
   $(function() {  
        $( "#datepicker2" ).datepicker({
            dateFormat: 'dd-mm-yy',
          changeMonth: true,
          changeYear: true
        });
      });
   function toggle(flavor) {
  const checkbox = document.getElementById(flavor);
  const textarea = document.getElementById(flavor+"Div");
  textarea.style.display = checkbox.checked ? "block" : "none";
}
</script>
<?php include 'footer.php'; ?>
</body>
</html>
