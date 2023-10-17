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
	$session_id = $_SESSION['id'];
	$heading = $_POST['heading'];
  $content_id = $_POST['content_id'];
	$content = $_POST['content'];
	
	if(empty($heading)) {
				
		if(empty($heading)) {
			echo "<font color='red'>Heading field is empty.</font><br/>";
		}
		
	} else {	
		$result = mysqli_query($mysqli, "UPDATE contact SET heading='$heading', content='$content' WHERE id=$content_id");
		
		header("Location: contact.php");
	}
}
?>
<?php
$content_id = $_GET['content_id'];

$result = mysqli_query($mysqli, "SELECT * FROM contact WHERE id=$content_id");

while($res = mysqli_fetch_array($result))
{
	$heading = $res['heading'];
	$content = $res['content'];
	
}
?>
<div class="container">
	<h2>Edit Info</h2>
	
	<form name="myForm" method="post" action="edit_contact.php">
	<div class="form-group">
      <label for="email">Heading:</label>
      <input type="text" class="form-control" id="name" placeholder="Enter Name" name="heading"  value="<?php echo $heading;?>" readonly>
    </div>
    <div class="form-group">
      <label for="email">Content:</label>
      <input type="text" class="form-control" id="name" placeholder="Enter Email" name="content"  value="<?php echo $content;?>"  required>
    </div>
     <input type="hidden" name="content_id" value="<?php echo $content_id; ?>">
    <input type="submit" name="update" value="Update" class="btn btn-success">
		
	</form>
</div>

<?php include 'footer.php'; ?>
</body>
</html>
