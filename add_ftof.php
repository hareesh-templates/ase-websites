<?php include 'header2.php'; ?>
<?php
include_once("connection.php");

if(isset($_POST['Submit'])) {	
	$sno = $_POST['sno'];
	$customer_name = $_POST['customer_name'];
	$mobile = $_POST['mobile'];
	$address = $_POST['address'];
	$status = $_POST['status'];
	$place_of_presentation = $_POST['place_of_presentation'];
	$project_interested = $_POST['project_interested'];
	$google_review = $_POST['google_review'];
	$added_on = date("Y-m-d");
	$loginId = $_SESSION['id'];

	$errors= array();
      $file_name = $_FILES['image']['name'];
      $file_size = $_FILES['image']['size'];
      $file_tmp = $_FILES['image']['tmp_name'];
      $file_type = $_FILES['image']['type'];
      
      $extensions= array("jpeg","jpg","png");
      
    
       move_uploaded_file($file_tmp,"images/ftof/".$file_name);
		
	if(empty($sno)) {
				
		if(empty($sno)) {
			echo "<div class='container'><font color='red'>S.No field is empty.</font><br/>";
		}
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a></div>";
	} else { 
		
		$result = "INSERT INTO f2f (sno,customer_name,mobile,address,status,place_of_presentation,project_interested,added_by,image,added_on,google_review) VALUES ($sno,'$customer_name','$mobile','$address','$status','$place_of_presentation','$project_interested',$loginId,'$file_name','$added_on','$google_review')";
			
			if ($mysqli->query($result) === TRUE) {
				 $last_id = $mysqli->insert_id;

				}
		
			echo "<div class='main-panel'>
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
                   <div class='alert alert-success'><font color='green'>Data added successfully. </div><div class='alert alert-danger'><font color='red'>Please don't refresh this page</div>
                  </div>
                </div>
              </div>
              
         
            </div>
          </div>";
	}
}
?>
<script>
         setTimeout(function(){
            window.location.href = 'view_ftof.php';
         }, 5000);
      </script>
<?php include 'footer2.php'; ?>

