<?php include 'header.php'; ?>
<?php
//including the database connection file
include_once("connection.php");

if(isset($_POST['Submit'])) {	
	$customer_name = $_POST['customer_name'];
	$mobile_number = $_POST['mobile_number'];
	$project = $_POST['project'];
	$amount = $_POST['amount'];
	$sales_date = $_POST['sales_date'];
	$remark = $_POST['remark'];
	$added_by = $_POST['added_by'];
	$employee = $_POST['employee'];
	$manager = $_POST['manager'];
	
		
	if(empty($customer_name)) {
				
		if(empty($customer_name)) {
			echo "<div class='container'><font color='red'>Please Enter customer name.</font><br/>";
		}
		
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a></div>";
	} else { 

		$result = mysqli_query($mysqli, "INSERT INTO sales_transactions(customer_name, mobile_number, project, sales_date, remark, amount, added_by, employee, manager) VALUES('$customer_name', '$mobile_number', '$project', '$sales_date', '$remark', '$amount', '$added_by', '$employee', '$manager')");
			
		
		//display success message
		echo "<div class='container'><font color='green'>Data added successfully. </div><div class='container'><font color='red'>Please don't refresh this page</div>";	
		   
	}
}
?>
<script>
         setTimeout(function(){
            window.location.href = 'view_sales_transaction.php';
         }, 5000);
      </script>
<?php include 'footer.php'; ?>
</body>
</html>

