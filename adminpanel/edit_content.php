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
	$title = $_POST['title'];
  $content_id = $_POST['content_id'];
	$content = $_POST['content'];
	
	if(empty($title)) {
				
		if(empty($title)) {
			echo "<font color='red'>Tile field is empty.</font><br/>";
		}
		
	} else {	
		$result = mysqli_query($mysqli, "UPDATE aboutus SET title='$title', content='$content' WHERE id=$content_id");
		
		header("Location: aboutus_page.php");
	}
}
?>
<?php
$content_id = $_GET['content_id'];

$result = mysqli_query($mysqli, "SELECT * FROM aboutus WHERE id=$content_id");

while($res = mysqli_fetch_array($result))
{
	$title = $res['title'];
	$content = $res['content'];
	
}
?>
<div class="container">
	<h2>Edit Content</h2>
	
	<form name="myForm" method="post" action="edit_content.php">
	<div class="form-group">
      <label for="email">Title:</label>
      <input type="text" class="form-control" id="name" placeholder="Enter Title" name="title"  value="<?php echo $title;?>" required>
    </div>
    <div class="form-group">
      <label for="email">Content:</label>
      <input type="text" class="form-control" id="name" placeholder="Enter Content" name="content"  value="<?php echo $content;?>"  required>
    </div>
     <input type="hidden" name="content_id" value="<?php echo $content_id; ?>">
    <input type="submit" name="update" value="Update" class="btn btn-success">
		
	</form>
</div>

<?php include 'footer.php'; ?>
</body>
</html>
