<?php include 'header.php'; ?>
<?php
include_once("connection.php");

if(isset($_POST['Submit'])) {	
	$customer_name = $_POST['customer_name'];
	$mobile = $_POST['mobile'];
	$email = $_POST['email'];
	$status = $_POST['status'];
	$property_name = $_POST['property_name'];
	$location = $_POST['location'];
	$sqft = $_POST['sqft'];
	$flatno = $_POST['flatno'];
	$added_on = date("Y-m-d");
	$loginId = $_SESSION['id'];
	$report_to = $_POST['report_to'];

	$errors= array();
      $file_name = $_FILES['image']['name'];
      $file_size = $_FILES['image']['size'];
      $file_tmp = $_FILES['image']['tmp_name'];
      $file_type = $_FILES['image']['type'];
      
      $extensions= array("jpeg","jpg","png");
      
    
       move_uploaded_file($file_tmp,"images/sales/aadhar/".$file_name);


      $pan_file_name = $_FILES['panimage']['name'];
      $pan_file_size = $_FILES['panimage']['size'];
      $pan_file_tmp = $_FILES['panimage']['tmp_name'];
      $pan_file_type = $_FILES['panimage']['type'];
      
      $extensions= array("jpeg","jpg","png");
      
    
       move_uploaded_file($pan_file_tmp,"images/sales/pan/".$pan_file_name);
		
	if(empty($customer_name)) {
				
		if(empty($customer_name)) {
			echo "<div class='container'><font color='red'>customer name field is empty.</font><br/>";
		}
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a></div>";
	} else { 
		
		$result = "INSERT INTO sales (customer_name,mobile,email,status,property_name,location,sqft,flatno,added_by,aadhar,pan,added_on,report_to) VALUES ('$customer_name','$mobile','$email','$status','$property_name','$location','$sqft','$flatno',$loginId,'$file_name','$pan_file_name','$added_on','$report_to')";
			
			if ($mysqli->query($result) === TRUE) {
				 $last_id = $mysqli->insert_id;

				}
		
			echo "<div class='container'><font color='green'>Data added successfully. </div><div class='container'><font color='red'>Please don't refresh this page</div>";
	}
}
?>
<script>
         setTimeout(function(){
            window.location.href = 'view_sales.php';
         }, 5000);
      </script>
<?php include 'footer.php'; ?>
</body>
</html>
