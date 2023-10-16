<?php include 'header.php'; ?>
<?php
//including the database connection file
include_once("connection.php");

if(isset($_POST['Submit'])) {	
	$crdr = $_POST['crdr'];
	$transaction_amount = $_POST['transaction_amount'];
	$transaction_date = $_POST['transaction_date'];
	$remarks = $_POST['remarks'];
	$added_by = $_POST['added_by'];
	
		
	if(empty($crdr)) {
				
		if(empty($crdr)) {
			echo "<div class='container'><font color='red'>Please select Credit or Debit.</font><br/>";
		}
		
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a></div>";
	} else { 


		$result3 = mysqli_query($mysqli, "SELECT total_balance.* FROM total_balance where id = 1");
 		 while($res3 = mysqli_fetch_array($result3))
		    {
		      if($crdr == 'CR'){
		      	$total_amount = $res3['total_balance'] + $transaction_amount;
		      }else{
		      	$total_amount = $res3['total_balance'] - $transaction_amount;
		      }
		      
		    }



		
		$result = mysqli_query($mysqli, "INSERT INTO transactions(crdr, transaction_amount, transaction_date, remarks, added_by, total_amount) VALUES('$crdr', '$transaction_amount', '$transaction_date', '$remarks', '$added_by', '$total_amount')");
			$result2 = mysqli_query($mysqli, "SELECT total_balance.* FROM total_balance where id = 1");
 		 while($res2 = mysqli_fetch_array($result2))
		    {
		      
		      $total_balance = $res2['total_balance'];
		    }
		     $new_total_balance = 0;
		    if($crdr == 'CR'){
		    	 $new_total_balance = $total_balance + $transaction_amount;
		    }
		    else{
		    	 $new_total_balance = $total_balance - $transaction_amount;
		    }
		    $sql3 = mysqli_query($mysqli,"UPDATE total_balance SET total_balance='$new_total_balance' WHERE id=1");
		
		//display success message
		echo "<div class='container'><font color='green'>Data added successfully. </div><div class='container'><font color='red'>Please don't refresh this page</div>";
 
 		
		   
	}
}
?>
<script>
         setTimeout(function(){
            window.location.href = 'view.php';
         }, 5000);
      </script>
<?php include 'footer.php'; ?>
</body>
</html>
