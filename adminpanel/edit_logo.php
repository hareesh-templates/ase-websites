<?php include 'header.php'; ?>

<?php
if(!isset($_SESSION['valid'])) {
	header('Location: login.php');
}
?>

<?php
include_once("connection.php");

if(isset($_POST['update']))
{	
	$file = rand(1000,100000)."-".$_FILES['file']['name'];
    $file_loc = $_FILES['file']['tmp_name'];
 $file_size = $_FILES['file']['size'];
 $file_type = $_FILES['file']['type'];
 $folder="../assets/img/";
 
 $new_size = $file_size/1024;  
 
 $new_file_name = strtolower($file);
 
 $final_file=str_replace(' ','-',$new_file_name);
 if(move_uploaded_file($file_loc,$folder.$final_file))
 {
		$result = mysqli_query($mysqli, "UPDATE contact SET content='$final_file' WHERE title='logo'");
		
		header("Location: edit_logo.php");
	}
	
}
?>
<?php

$result = mysqli_query($mysqli, "SELECT * FROM contact WHERE title='logo'");

while($res = mysqli_fetch_array($result))
{
	$heading = $res['heading'];
	$content = $res['content'];
	
}
?>
<div class="container">
	<h2>Edit Logo</h2>
	
	<form name="myForm" method="post" action="edit_logo.php" enctype="multipart/form-data">
	
    <div class="form-group">
      <label for="email">Logo:</label>
      <img src="../assets/img/<?php echo $content; ?>" height="100px;">
      <input type="file" class="form-control" id="name" name="file"  required>
    </div>
    <input type="submit" name="update" value="Update" class="btn btn-success">
		
	</form>
</div>

<?php include 'footer.php'; ?>
</body>
</html>
