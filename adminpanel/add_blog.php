<?php include 'header.php'; ?>
<?php
include_once("connection.php");

if(isset($_POST['Submit'])) {	
	$title = $_POST['title'];
	$area = $_POST['area'];
	$content = $_POST['content'];
	$event_date = $_POST['event_date'];
	$key_url = $_POST['key_url'];
	$meta_desc = $_POST['meta_desc'];

	 $errors= array();
      $file_name = $_FILES['image']['name'];
      $file_size = $_FILES['image']['size'];
      $file_tmp = $_FILES['image']['tmp_name'];
      $file_type = $_FILES['image']['type'];
      
      $extensions= array("jpeg","jpg","png");
      
    
       move_uploaded_file($file_tmp,"images/blogs/".$file_name);
      

		
		$result = "INSERT INTO blog (title,area,content,event_date,key_url,image,meta_desc) VALUES ('$title','$area','$content','$event_date','$key_url','$file_name','$meta_desc')";
			
		if ($mysqli->query($result) === TRUE) {
		echo "<div class='container'><font color='green'>Data added successfully. </div><div class='container'><font color='red'>Please don't refresh this page</div>";
		}
	
}
?>
<script>
         setTimeout(function(){
            window.location.href = 'blogs.php';
         }, 5000);
      </script>
<?php include 'footer.php'; ?>
</body>
</html>
