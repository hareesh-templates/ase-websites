<?php include 'header.php'; ?>
<?php
//including the database connection file
include_once("connection.php");

if(isset($_POST['Submit'])) {	
	
	$term_amount = $_POST['term_amount'];
	$payment_date = $_POST['payment_date'];
	$payment_remark = $_POST['payment_remark'];
	$sale_id = $_POST['sale_id'];
	$crdr = $_POST['crdr'];
	$payment_mode = $_POST['payment_mode'];
		
	if(empty($term_amount)) {
				
		if(empty($term_amount)) {
			echo "<div class='container'><font color='red'>Please Enter customer name.</font><br/>";
		}
		
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a></div>";
	} else { 

		$result3 = mysqli_query($mysqli, "SELECT sales_total_balance.* FROM sales_total_balance where id = 1");
 		 while($res3 = mysqli_fetch_array($result3))
		    {
		      if($crdr == 'CR'){
		      	$sales_total_balance = $res3['sales_total_balance'] + $term_amount;
		      }else{
		      	$sales_total_balance = $res3['sales_total_balance'] - $term_amount;
		      }
		      
		    }

		    $result5 = mysqli_query($mysqli, "SELECT SUM(sales_payments.term_amount) as creditamount FROM sales_payments where crdr = 'CR' and sale_id=".$sale_id."");
 		 while($res5= mysqli_fetch_array($result5))
		    {
		      	$creditamount = $res5['creditamount'];
		     
		    }
		    $result6 = mysqli_query($mysqli, "SELECT SUM(sales_payments.term_amount) as debitamount FROM sales_payments where crdr = 'DR' and sale_id=".$sale_id."");
 		 while($res6 = mysqli_fetch_array($result6))
		    {
		      	$debitamount = $res6['debitamount'];
		     
		    }


		    $result7 = mysqli_query($mysqli, "SELECT SUM(sales_payments.term_amount) as creditamount FROM sales_payments where crdr = 'CR'");
 		 while($res7= mysqli_fetch_array($result7))
		    {
		      	$all_creditamount = $res7['creditamount'];
		     
		    }
		    $result8 = mysqli_query($mysqli, "SELECT SUM(sales_payments.term_amount) as debitamount FROM sales_payments where crdr = 'DR'");
 		 while($res8 = mysqli_fetch_array($result8))
		    {
		      	$all_debitamount = $res8['debitamount'];
		     
		    }

		    
		    $balance = $creditamount - $debitamount;
		    $all_balance = $all_creditamount - $all_debitamount;

		    if($balance == 0){
		    	$remaining_balance = $term_amount;
		    }
		    if($crdr == 'CR'){
		    	$remaining_balance = $balance + $term_amount;
		    }else{
		    	$remaining_balance = $balance - $term_amount;
		    }

		    if($all_balance == 0){
		    	$all_remaining_balance = $term_amount;
		    }
		    if($crdr == 'CR'){
		    	$all_remaining_balance = $all_balance + $term_amount;
		    }else{
		    	$all_remaining_balance = $all_balance - $term_amount;
		    }
		 //   echo $remaining_balance; die();
		$result = mysqli_query($mysqli, "INSERT INTO sales_payments(term_amount, payment_date, payment_remark, sale_id, sales_total_balance, crdr, all_remaining_balance, payment_mode) VALUES('$term_amount', '$payment_date', '$payment_remark', '$sale_id', '$remaining_balance', '$crdr', '$all_remaining_balance', '$payment_mode')");
		$result2 = mysqli_query($mysqli, "SELECT sales_total_balance.* FROM sales_total_balance where id = 1");
 		 while($res2 = mysqli_fetch_array($result2))
		    {
		      
		      $total_balance = $res2['sales_total_balance'];
		    }
		     $new_total_balance = 0;
		    if($crdr == 'CR'){
		    	 $new_total_balance = $total_balance + $term_amount;
		    }
		    else{
		    	 $new_total_balance = $total_balance - $term_amount;
		    }
		    $sql3 = mysqli_query($mysqli,"UPDATE sales_total_balance SET sales_total_balance='$new_total_balance' WHERE id=1");
		
			
		
		//display success message
		echo "<div class='container'><font color='green'>Data added successfully. </div><div class='container'><font color='red'>Please don't refresh this page</div>";	
		   
	}
}
?>
<script>
         setTimeout(function(){
            window.location.href = 'view_sales_transaction_details.php?sale_id=<?php echo $sale_id; ?>';
         }, 5000);
      </script>
<?php include 'footer.php'; ?>
</body>
</html>

