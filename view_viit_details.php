<?php include 'header2.php'; ?>

<?php
if(!isset($_SESSION['valid'])) {
	header('Location: login.php');
}
?>
<?php
include_once("connection.php");
$visit_id = $_GET['visit_id'];

$result = mysqli_query($mysqli, "SELECT visits.* FROM visits where id = ".$visit_id." ORDER BY id DESC");
while($res = mysqli_fetch_array($result))
{
	$sno = $res['sno'];
	$customer_name = $res['customer_name'];
	$mobile = $res['mobile'];
	$no_of_projects = $res['no_of_projects'];
	$status = $res['status'];
	$interest_details = $res['interest_details'];
	$mobile = $res['mobile'];
  $image = $res['image'];
	$added_on = $res['added_on'];
	 $review_file_name = $res['review_file_name'];
}

$result1 = mysqli_query($mysqli, "SELECT visits_project_names.* FROM visits_project_names where visit_id = ".$visit_id." ORDER BY id ASC");



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
	<h2>Visit Details</h2>
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
      <label for="email">No of Projects:</label>
      <input type="text" class="form-control" id="name"  value="<?php echo $no_of_projects;?>" readonly>
    </div>
    <div class="form-group">
    	 <label for="email">Projects:</label>
    	<?php
		while($res = mysqli_fetch_array($result1)) {		
			echo "<span  class='badge badge-warning'>".$res['project_name']."</span>";
		}
		?>
    </div>
    <div class="form-group">
      <label for="email">Status:</label>
      <input type="text" class="form-control" id="name"  value="<?php echo $status;?>" readonly>
    </div>
    <div class="form-group">
      <label for="email">Interest Details:</label>
      <input type="text" class="form-control" id="name"  value="<?php echo $interest_details;?>" readonly>
    </div>
     <div class="form-group">
      <label for="email">Added On:</label>
      <input type="text" class="form-control" id="name"  value="<?php echo $added_on;?>" readonly>
    </div>
    <div class="form-group">
      <label for="email">Image:</label><br>
     <img src="images/visits/<?php echo $image;?>" style='height: 300px; width: 300px;'>
    </div>
       <div class="form-group">
      <label for="email">Google Review Image:</label><br>
     <img src="images/ftof_google_review/<?php echo $review_file_name;?>" style='height: 300px; width: 300px;'>
    </div>

</div>

                </div>
              </div>
              
         
            </div>
          </div>
<?php include 'footer2.php'; ?>
