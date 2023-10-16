<?php include 'header2.php'; ?>
<?php
//including the database connection file
include_once("connection.php");

if(isset($_POST['Submit'])) {	
	 $subject = $_POST['subject'];
	 $applied_on = $_POST['applied_on'];
	 $content = $_POST['content'];
	 $report_to = $_POST['report_to'];
	 $report_manager_appoval = 'Pending';
	 $hr_approval = 'Pending';
	 $added_on = date(("Y-m-d"));
	  $added_by_name = $_POST['added_by_name'];
	 $added_by_role = $_POST['added_by_role'];
	 $added_by_ofc_mail = $_POST['added_by_ofc_mail'];
	  
	  $added_by = $_SESSION['id']; 
		
	// checking empty fields
	if(empty($content)) {
				
		if(empty($content)) {
			echo "<div class='container'><font color='red'>Content field is empty.</font><br/>";
		}
		
		
		//link to the previous page
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a></div>";
	} else { 
			$sql = "INSERT INTO leaves (subject,added_by,applied_on,content,report_manager_appoval,hr_approval,report_to,added_on) VALUES ('$subject',$added_by,'$applied_on','$content','$report_manager_appoval','$hr_approval',$report_to,'$added_on')";
			

			if ($mysqli->query($sql) === TRUE) {
				 $last_id = $mysqli->insert_id;
				
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
          </div></div>";
			  		 //		 $to = $ofc_email;
    				 $to = "hr@eswarigroup.com,krakeshkumar@eswarigroup.com";
                $subject = "Employee App - $added_by_name - $added_by_role Leave Application";

                $message = "
                <html>
                <head>
                <title>Employee App -" . $added_by_name. "-" . $added_by_role. " Leave Application</title>
                </head>
                <body>
                <p>Employee App -" . $added_by_name. "-" . $added_by_role. " Leave Application</p>
                <table>
                <tr>
                <th>Employee Name</th>
                <td>".$added_by_name."</td>
                </tr>

                  <tr>
                <th>Designation</th>
                <td>".$added_by_role."</td>
                </tr>

                 <th>Email</th>
                <td>".$added_by_ofc_mail."</td>
                </tr>

                  <tr>
                <th>Subject</th>
                <td>".$subject."</td>
                </tr>

                 <tr>
                <th>Date of Leave</th>
                <td>".$applied_on."</td>
                </tr>

                 <tr>
                <th>Applied For</th>
                <td>".$content."</td>
                </tr>

                 <tr>
               
                
                </table>
                </body>
                </html>
                ";

                // Always set content-type when sending HTML email
                $headers = "MIME-Version: 1.0" . "\r\n";
                $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

                // More headers
                $headers .= 'From: <eswarihomes9@gmail.com>' . "\r\n";
                $headers .= 'Cc: eswarihomes9@gmail.com' . "\r\n";

                mail($to,$subject,$message,$headers);

			 
			} else {
			  echo "Error: " . $sql . "<br>" . $mysqli->error;
			}

		
	}
}
?>
<script>
         setTimeout(function(){
            window.location.href = 'view_leaves.php';
         }, 1000);
      </script>
<?php include 'footer2.php'; ?>

