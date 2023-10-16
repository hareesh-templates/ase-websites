<?php include 'header.php'; ?>
<?php
//including the database connection file
include_once("connection.php");

if(isset($_POST['Submit'])) {	
	$no_of_calls = $_POST['no_of_calls'];
	$comments = $_POST['comments'];
	$added_date = $_POST['added_date'];
	$loginId = $_SESSION['id'];
	
      	 $file_name = $_FILES['upload_file']['name'];
	      $file_size = $_FILES['upload_file']['size'];
	      $file_tmp = $_FILES['upload_file']['tmp_name'];
	      $file_type = $_FILES['upload_file']['type'];
	      $extensions= array("csv", "xlsx", "pdf", "doc", "docx");
          move_uploaded_file($file_tmp,"calls/".$file_name);
      
		
	if(empty($no_of_calls)) {
				
		if(empty($no_of_calls)) {
			echo "<div class='container'><font color='red'>No.of calls field is empty.</font><br/>";
		}
		
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a></div>";
	} else { 
		
		$result = mysqli_query($mysqli, "INSERT INTO calls(no_of_calls, added_date, login_id, comments, file_name) VALUES('$no_of_calls', '$added_date', '$loginId', '$comments', '$file_name')");
		
		//display success message
		echo "<div class='container'><font color='green'>Data added successfully. </div><div class='container'><font color='red'>Please don't refresh this page</div>";
	
}
}
?>
<script>
         setTimeout(function(){
            window.location.href = 'calls.php';
         }, 5000);
      </script>
<?php include 'footer.php'; ?>
</body>
</html>
