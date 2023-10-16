<?php include 'header.php'; ?>

<link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">   
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<link rel="stylesheet" 

href="http://cdn.datatables.net/1.10.2/css/jquery.dataTables.min.css">
<script type="text/javascript" 

src="http://cdn.datatables.net/1.10.2/js/jquery.dataTables.min.js"></script>
<?php
if(!isset($_SESSION['valid'])) {
	header('Location: login.php');
}
?>
<?php
include_once("connection.php");
$sale_id = $_GET['sale_id'];

$result = mysqli_query($mysqli, "SELECT sales_transactions
.* FROM sales_transactions
 where id = ".$sale_id."");
while($res = mysqli_fetch_array($result))
{
  $customer_name = $res['customer_name'];
	$mobile_number = $res['mobile_number'];
  $project = $res['project'];
  $sales_date = $res['sales_date'];
  $remark = $res['remark'];
	$amount = $res['amount'];
  $added_by = $res['added_by'];
  $employee = $res['employee'];
  $manager = $res['manager'];
}
$result3 = mysqli_query($mysqli, "SELECT SUM(term_amount) as paid_amount FROM `sales_payments` WHERE sale_id = ".$sale_id." and crdr = 'CR'");
while($res3 = mysqli_fetch_array($result3))
{
  $paid_amount = $res3['paid_amount'];
  if($paid_amount == NULL){
    $paid_amount = 0;
  }
  $pending_amount = $amount - $paid_amount;
}

?>
<div class="container">
	
  <div class="panel-group">

    <div class="panel panel-info">
      <div class="panel-heading">Sale Details
        <a href="addpayment.php?sale_id=<?php echo $sale_id; ?>" class="pull-right"><span class="label label-default">Add Payment</span></a>
      </div>
      <div class="panel-body">
        <div class="form-group col-md-4">
      <label for="email">Customer Name:</label>
      <input type="text" class="form-control" id="name"  value="<?php echo $customer_name;?>" readonly>
    </div>
    <div class="form-group col-md-4">
      <label for="email">Mobile:</label>
      <input type="text" class="form-control" id="name"  value="<?php echo $mobile_number;?>" readonly>
    </div>
    <div class="form-group col-md-4">
      <label for="email">Project:</label>
      <input type="text" class="form-control" id="name"  value="<?php echo $project;?>" readonly>
    </div>
    <div class="form-group col-md-4">
      <label for="email">Sales Date:</label>
      <input type="text" class="form-control" id="name"  value="<?php echo $sales_date;?>" readonly>
    </div>
     <div class="form-group col-md-4">
      <label for="email">Remark:</label>
      <input type="text" class="form-control" id="name"  value="<?php echo $remark;?>" readonly>
    </div>
    <div class="form-group col-md-4">
      <label for="email">Added By:</label>
      <input type="text" class="form-control" id="name"  value="<?php echo $added_by;?>" readonly>
    </div>
    <div class="form-group col-md-4">
      <label for="email">Total Amount:</label>
      <input type="text" class="form-control" id="name"  value="<?php echo $amount;?>" readonly>
    </div>
    <div class="form-group col-md-4">
      <label for="email">Paid Amount:</label>
      <input type="text" class="form-control" id="name"  value="<?php echo $paid_amount;?>" readonly>
    </div>
    <div class="form-group col-md-4">
      <label for="email">Pending Amount:</label>
      <input type="text" class="form-control" id="name"  value="<?php echo $pending_amount;?>" readonly>
    </div>
    <div class="form-group col-md-4">
      <label for="email">Employee:</label>
      <input type="text" class="form-control" id="name"  value="<?php echo $employee;?>" readonly>
    </div>
    <div class="form-group col-md-4">
      <label for="email">Manager:</label>
      <input type="text" class="form-control" id="name"  value="<?php echo $manager;?>" readonly>
    </div>
  
    
      </div>
    </div>

  </div>


</div>

<?php 
$result2 = mysqli_query($mysqli, "SELECT sales_payments.* FROM sales_payments where sale_id = $sale_id ORDER BY id ASC");
?>
<div class="container">
  <br/><br/>
<h3>Payments</h3>  
  <h2 class=""><?php if($_SESSION['role'] == 'superadmin'){ ?><button id="export" class="btn btn-primary btn-xs">Export</button><?php } ?></h2> 
  <div class="table-responsive">
  <table id="myTable" class="display table" width="100%">
     <thead>  
    <tr bgcolor='#101010' style="color: #777;">
     <th>S No</th>
      <th>Transaction Date</th>
      <th>Payment Mode</th>
      <th>Transaction Remark</th>
      <th>CR/DR </th>
      <th>Withdrawal Amount (INR)</th>
      <th>Deposit Amount (INR)</th>
      <th>Balance (INR)</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $i = 1;
    while($res2 = mysqli_fetch_array($result2)) {   
      
    if($res2['crdr'] == 'DR'){
        $withdrawal = $res2['term_amount'];
        $deposit = '';
      }else{
        $withdrawal = '';
        $deposit = $res2['term_amount'];
      }
      echo "<tr>";
      echo "<td>".$i."</td>";
      echo "<td>".$res2['payment_date']."</td>";
      echo "<td>".$res2['payment_mode']."</td>";
      echo "<td>".$res2['payment_remark']."</td>";
      echo "<td>".$res2['crdr']."</td>";
      echo "<td>".$withdrawal."</td>";  
      echo "<td>".$deposit."</td>"; 
      echo "<td>".$res2['sales_total_balance']."</td>"; 
     
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