<?php include 'header.php'; ?>

<?php
if(!isset($_SESSION['valid'])) {
	header('Location: login.php');
}
?>
<?php
include_once("connection.php");
$sale_id = $_GET['sale_id'];

$result = mysqli_query($mysqli, "SELECT sales.* FROM sales where id = ".$sale_id." ORDER BY id DESC");
while($res = mysqli_fetch_array($result))
{
	$customer_name = $res['customer_name'];
	$mobile = $res['mobile'];
  $email = $res['email'];
  $property_name = $res['property_name'];
  $location = $res['location'];
	$status = $res['status'];
  $sqft = $res['sqft'];
  $flatno = $res['flatno'];
  $aadhar = $res['aadhar'];
  $pan = $res['pan'];
	$added_on = $res['added_on'];
}

if(isset($_POST['change_status'])){
  $update_status = $_POST['status'];
  $result2 = mysqli_query($mysqli, "UPDATE sales SET status='$update_status' WHERE id=$sale_id");
    header("Location: view_sales.php");
}

?>
<div class="container">
	<h2>Sale Details</h2>
	
    <div class="form-group">
      <label for="email">Customer Name:</label>
      <input type="text" class="form-control" id="name"  value="<?php echo $customer_name;?>" readonly>
    </div>
    <div class="form-group">
      <label for="email">Mobile:</label>
      <input type="text" class="form-control" id="name"  value="<?php echo $mobile;?>" readonly>
    </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="text" class="form-control" id="name"  value="<?php echo $email;?>" readonly>
    </div>
    <div class="form-group">
      <label for="email">Property Name:</label>
      <input type="text" class="form-control" id="name"  value="<?php echo $property_name;?>" readonly>
    </div>
     <div class="form-group">
      <label for="email">Location:</label>
      <input type="text" class="form-control" id="name"  value="<?php echo $location;?>" readonly>
    </div>
    <div class="form-group">
      <label for="email">Sqft:</label>
      <input type="text" class="form-control" id="name"  value="<?php echo $sqft;?>" readonly>
    </div>
     <div class="form-group">
      <label for="email">Flat No:</label>
      <input type="text" class="form-control" id="name"  value="<?php echo $flatno;?>" readonly>
    </div>
    <div class="form-group">
      <label for="email">Status:</label>
<!--       <input type="text" class="form-control" id="name"  value="<?php echo $status;?>">
 -->      
 <form action="#" method="post">
     <select name="status" class="form-control" required="">
        <option value="<?php echo $status;?>"><?php echo $status;?></option>
        <option value="Approved">Approved</option>
        <option value="Pending">Pending</option>
        <option value="Process">Process</option>
      </select><br>
      <input type="submit" name="change_status" class="btn btn-danger" value="Change Status">
    </div>
  </form>
    
     <div class="form-group">
      <label for="email">Added On:</label>
      <input type="text" class="form-control" id="name"  value="<?php echo $added_on;?>" readonly>
    </div>
     <div class="form-group">
     <!--  <label for="email">Aadhar:</label> -->
     <img src="images/sales/aadhar/<?php echo $aadhar;?>" style='height: 300px; width: 300px;'>
    </div>
      <div class="form-group">
     <!--  <label for="email">PAN:</label> -->
     <img src="images/sales/pan/<?php echo $pan;?>" style='height: 300px; width: 300px;'>
    </div>

</div>
<?php include 'footer.php'; ?>
</body>
</html>