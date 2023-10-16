<?php include 'header2.php'; ?>
<?php
include_once("connection.php");

if(isset($_POST['Submit'])) {	
	$sno = $_POST['sno'];
	$customer_name = $_POST['customer_name'];
	$mobile = $_POST['mobile'];
	$no_of_projects = $_POST['no_of_projects'];
	$status = $_POST['status'];
	$interest_details = $_POST['interest_details'];
	$project_name = $_POST['project_name'];
	 $added_on = date("Y-m-d");
	$loginId = $_SESSION['id'];


	 $errors= array();
      $file_name = $_FILES['image']['name'];
      $file_size = $_FILES['image']['size'];
      $file_tmp = $_FILES['image']['tmp_name'];
      $file_type = $_FILES['image']['type'];
      
      $extensions= array("jpeg","jpg","png");
      move_uploaded_file($file_tmp,"images/visits/".$file_name);

          $review_file_name = $_FILES['review_image']['name'];
	      $review_file_size = $_FILES['review_image']['size'];
	      $review_file_tmp = $_FILES['review_image']['tmp_name'];
	      $review_file_type = $_FILES['review_image']['type'];
	      
	      $extensions= array("jpeg","jpg","png");
	       move_uploaded_file($review_file_tmp,"images/ftof_google_review/".$review_file_name);
      

		
	if(empty($sno)) {
				
		if(empty($sno)) {
			echo "<div class='container'><font color='red'>S.No field is empty.</font><br/>";
		}
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a></div>";
	} else { 
		
		$result = "INSERT INTO visits (sno,customer_name,mobile,no_of_projects,status,interest_details,added_by,image,added_on,review_file_name) VALUES ($sno,'$customer_name','$mobile','$no_of_projects','$status','$interest_details',$loginId,'$file_name','$added_on','$review_file_name')";
			
			if ($mysqli->query($result) === TRUE) {
				 $last_id = $mysqli->insert_id;

				 foreach ($project_name as $project_name) {
					 $sql2 = "INSERT INTO visits_project_names (visit_id,project_name) VALUES ($last_id,'$project_name')";
					 	if ($mysqli->query($sql2) === TRUE) {
					 		$last_id2 = $mysqli->insert_id;
						}
				}

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
            window.location.href = 'view_visits.php';
         }, 5000);
      </script>
<?php include 'footer2.php'; ?>
</body>
</html>
