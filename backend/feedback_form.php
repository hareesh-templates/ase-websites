<?php // include('../backend/connection.php'); ?>

<?php
// if (isset($_POST['submit'])) {

//     $name = $_POST['name'];
//     $email = $_POST['email'];

//     $mobile = $_POST['mobile'];
//     $message = $_POST['message'];


//     var_dump($name, $email, $mobile);


    // if(empty($name) || empty($email) || empty($mobile)) {
    //     echo '
    //     <div class="alert alert-danger alert-dismissible fade show" role="alert">
    //     <strong>Oops!</strong> Please fill all frequired field bellow.
    //     <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    //     </div>
    //     ';
    // }
    // else{
    //     $sql = "INSERT INTO contact_frm(name, email, mobile, message) VALUES ('".addslashes($name)."', '".addslashes($email)."', '".addslashes($mobile)."', '".addslashes($message)."')";
    //     if (mysqli_query($con, $sql)) {
    //         echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
    //             <strong>Thank you!</strong> You you have sent message successfullly we will get back to you soon...
    //             <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    //             </div>';
    //     }
    //     else{
    //         echo "something went wrong!..".$message;
    //     }
    // }
// }

?>

<?php
include("../backend/connection.php");
if (isset($_POST['submit'])) {
	// $s_no = $_POST['s_no'];
	$customer_name = $_POST["customer_name"];
	$manager_name = $_POST["manager_name"];
	$service_rating = $_POST["service_rating"];
	$presentation_rating = $_POST["presentation_rating"];
	$response_rating = $_POST["response_rating"];
	$comments = $_POST["comments"];

	// var_dump($service_rating);
	
	$to = 'hareesh@asetechnologies.in';
	$subject = 'Eswari Group - New Feedback Form Submission';
	$body = "Eswari Group - New Feedback Form Submission\n
	           Customer Name: $customer_name\n
	           Manager Name: $manager_name\n
	           Service Rating: $service_rating\n
	           Presentation Rating: $presentation_rating\n
	           Manager Response Rating: $response_rating\n
	           Message: $comments
	       ";
	// $header = "From: $email\r\nReply-To: $email\r\n";
	mail($to, $subject, $body);

}
$sql = "INSERT INTO feedback_form(customer_name, manager_name, service_rating, presentation_rating, response_rating, comments) VALUES (?,?,?,?,?,?)";
$stmt = $conn->prepare($sql);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$data = array($customer_name, $manager_name, $service_rating, $presentation_rating, $response_rating, $comments);
// var_dump($data);
$stmt->execute($data);

if ($stmt != null) {
	echo "
		<div style='margin: 50px 50px'>
			<font color='green'>Thanks for your valuable feedback!! </font>
		</div>
	";
}

?>

<script>
	setTimeout(function() {
		window.location.href = '../index.php';
	}, 1500);
</script>