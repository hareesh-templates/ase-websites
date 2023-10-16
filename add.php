<?php include 'header.php'; ?>
<?php
//including the database connection file
include_once("connection.php");

if(isset($_POST['Submit'])) {	
	$name = $_POST['name'];
	$upload_type = $_POST['colorRadio'];
	$comments = $_POST['comments'];
	$added_date = $_POST['added_date'];
	$loginId = $_SESSION['id'];
	if($_POST['colorRadio'] == 'Image'){
		  $file_name = $_FILES['upload_image']['name'];
	      $file_size = $_FILES['upload_image']['size'];
	      $file_tmp = $_FILES['upload_image']['tmp_name'];
	      $file_type = $_FILES['upload_image']['type'];
	      $extensions= array("jpeg","jpg","png");
          move_uploaded_file($file_tmp,"tasks/images/".$file_name);
      }
      else if($_POST['colorRadio'] == 'Video'){
      	 $file_name = $_FILES['upload_video']['name'];
	      $file_size = $_FILES['upload_video']['size'];
	      $file_tmp = $_FILES['upload_video']['tmp_name'];
	      $file_type = $_FILES['upload_video']['type'];
	      $extensions= array("mp4");
          move_uploaded_file($file_tmp,"tasks/videos/".$file_name);
      }
       else if($_POST['colorRadio'] == 'URL'){
      	 $file_name = $_POST['upload_url'];
      }
      else if($_POST['colorRadio'] == 'Content'){
      	 $file_name = $_POST['upload_content'];
      }
      else{
      	$file_name = '-';
      }
      
		
	if(empty($name)) {
				
		if(empty($name)) {
			echo "<div class='container'><font color='red'>Task field is empty.</font><br/>";
		}
		
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a></div>";
	} else { 
		
		$result = mysqli_query($mysqli, "INSERT INTO products(name, added_date, login_id, upload_type, comments, upload_file) VALUES('$name', '$added_date', '$loginId', '$upload_type', '$comments', '$file_name')");
		
		//display success message
		echo "<div class='container'><font color='green'>Data added successfully. </div><div class='container'><font color='red'>Please don't refresh this page</div>";
		//echo "<br/><a href='view.php'>View Tasks</a></div>";
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
