<?php include 'header2.php'; ?>

<?php
if(!isset($_SESSION['valid'])) {
	header('Location: login.php');
}
?>
<?php
include_once("connection.php");
$ftof_id = $_GET['ftof_id'];

$result = mysqli_query($mysqli, "SELECT f2f.* FROM f2f where id = ".$ftof_id." ORDER BY id DESC");
while($res = mysqli_fetch_array($result))
{
	$sno = $res['sno'];
	$customer_name = $res['customer_name'];
	$mobile = $res['mobile'];
  $address = $res['address'];
  $place_of_presentation = $res['place_of_presentation'];
  $project_interested = $res['project_interested'];
	$status = $res['status'];
  $image = $res['image'];
	$added_on = $res['added_on'];
  $google_review = $res['google_review'];
}

?>
 <div class='main-panel'>
          <div class='content-wrapper'>
            <div class='page-header'>
            <nav aria-label='breadcrumb'>
                <ol class='breadcrumb'>
                </ol>
              </nav>
            </div>
            <div class='row'>
             
              <div class='col-lg-12 grid-margin stretch-card'>
                <div class='card'>
                  <div class='card-body'>
<div class="container">
	<h2>F2F Details</h2>
	<div class="form-group">
      <label for="email">S.No:</label>
      <input type="text" class="form-control" id="name"  value="<?php echo $sno;?>" readonly>
    </div>
    <div class="form-group">
      <label for="email">Customer Name:</label>
      <input type="text" class="form-control" id="name"  value="<?php echo $customer_name;?>" readonly>
    </div>
    <div class="form-group">
      <label for="email">Mobile:</label>
      <input type="text" class="form-control" id="name"  value="<?php echo $mobile;?>" readonly>
    </div>
    <div class="form-group">
      <label for="email">Adderss:</label>
      <input type="text" class="form-control" id="name"  value="<?php echo $address;?>" readonly>
    </div>
    <div class="form-group">
      <label for="email">Place of presentation:</label>
      <input type="text" class="form-control" id="name"  value="<?php echo $place_of_presentation;?>" readonly>
    </div>
     <div class="form-group">
      <label for="email">Project interested:</label>
      <input type="text" class="form-control" id="name"  value="<?php echo $project_interested;?>" readonly>
    </div>
    <div class="form-group">
      <label for="email">Status:</label>
      <input type="text" class="form-control" id="name"  value="<?php echo $status;?>" readonly>
    </div>
    
     <div class="form-group">
      <label for="email">Added On:</label>
      <input type="text" class="form-control" id="name"  value="<?php echo $added_on;?>" readonly>
    </div>
     <div class="form-group">
      <label for="email">Image:</label><br>
     <img src="images/ftof/<?php echo $image;?>" style='height: 300px; width: 300px;'>
    </div>
    <div class="form-group">
      <label for="email">Google Review:</label>
     <input type="text" class="form-control" value="<?php echo $google_review;?>" readonly>
    </div>

</div>

                </div>
              </div>
              
         
            </div>
          </div>
<?php include 'footer2.php'; ?>
