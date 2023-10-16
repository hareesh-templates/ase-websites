<?php include 'header.php'; ?>

<?php
if(!isset($_SESSION['valid'])) {
	header('Location: login.php');
}
?>

<?php
// including the database connection file
include_once("connection.php");

if(isset($_POST['update']))
{	
	$id = $_POST['id'];
	
	$name = $_POST['name'];
	// $qty = $_POST['qty'];
	// $price = $_POST['price'];	
	$status = $_POST['status'];	
	
	// checking empty fields
	if(empty($name) || empty($status)) {
				
		if(empty($name)) {
			echo "<font color='red'>Name field is empty.</font><br/>";
		}
		
		// if(empty($qty)) {
		// 	echo "<font color='red'>Quantity field is empty.</font><br/>";
		// }
		
		// if(empty($price)) {
		// 	echo "<font color='red'>Price field is empty.</font><br/>";
		// }		
	} else {	
		//updating the table
		$result = mysqli_query($mysqli, "UPDATE products SET name='$name', status='$status' WHERE id=$id");
		
		//redirectig to the display page. In our case, it is view.php
		header("Location: view.php");
	}
}
?>
<?php
//getting id from url
$id = $_GET['id'];

//selecting data associated with this particular id
$result = mysqli_query($mysqli, "SELECT * FROM products WHERE id=$id");

while($res = mysqli_fetch_array($result))
{
	$name = $res['name'];
	$added_date = $res['added_date'];
	$upload_type = $res['upload_type'];
	$upload_file = $res['upload_file'];
	$status = $res['status'];
}
?>
<div class="container">
	<h2>Edit Task</h2>
	
	<form name="myForm"  onsubmit="return validateForm()" method="post" action="edit.php">
	<div class="form-group">
      <label for="email">Task:</label>
      <input type="text" class="form-control" id="name" placeholder="Enter Task Name" name="name"  value="<?php echo $name;?>" readonly>
    </div>
    <div class="form-group">
      <label for="email">Date:</label>
      <input type="text" class="form-control"   value="<?php echo $added_date;?>" readonly>
    </div>
     <div class="form-group">
      <label for="email">Upload Type:</label>
      <input type="text" class="form-control"   value="<?php echo $upload_type;?>" readonly>
    </div>
     <div class="form-group">
      <label for="email">Uploads:</label>
      
      <?php 

      if($upload_type == 'Image'){  ?>
      	<img src="tasks/images/<?php echo $upload_file; ?>" width="320" height="240">
       <?php }?>

	     <?php if($upload_type == 'Video'){ ?>
	      	<video width="320" height="240" controls>
			  <source src="tasks/videos/<?php echo $upload_file; ?>" type="video/mp4">
			</video> 
	     <?php   }?>

       <?php if($upload_type == 'URL'){ ?>
      	<a href="<?php echo $upload_file; ?>" target="_blank"><?php echo $upload_file; ?></a>
       <?php } ?>

       <?php if($upload_type == 'Content'){ ?>
      	<textarea readonly class="form-control"><?php echo $upload_file; ?></textarea>
       <?php }?> 
       <?php if($upload_type == 'None'){
       	echo "None";
      }
       ?>
    </div>
    <div class="form-group">
      <label for="email">Status:</label>
      <select  name="status" class="form-control">
      	<option value="<?php echo $status;?>"><?php echo $status;?></option>
						<option value="Pending">Pending</option>
						<option value="Ongoing">Ongoing</option>
						<option value="Completed">Completed</option>
      </select>
     
    </div>
    <input type="hidden" name="id" value=<?php echo $_GET['id'];?>>
    <input type="submit" name="update" value="Update" class="btn btn-success">
		
	</form>
</div>
<script>
function validateForm() {
  var a = document.forms["myForm"]["name"].value;
  if (a == "") {
    alert("Task Name must be filled out");
    return false;
  }
 
  }
</script>
<?php include 'footer.php'; ?>
</body>
</html>
