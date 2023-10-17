<?php
session_start();
if (!$_SESSION["admin"]) {
	header("Location: ../index.php");
} else {
?>
	<?php
	include_once("../php/connection.php");

	if (isset($_POST['Submit'])) {
		$name = $_POST['name'];
		$rating = $_POST['rating'];
		$content = $_POST['content'];

		// $errors = array();
		// $file_name = $_FILES['avatar']['name'];
		// $file_size = $_FILES['avatar']['size'];
		// $file_tmp = $_FILES['avatar']['tmp_name'];
		// $file_type = $_FILES['avatar']['type'];

		// $fileName = str_replace(" ", "", $file_name);
		// move_uploaded_file($file_tmp, "../images/testimonialImgs/" . $fileName);

		// $result = "INSERT INTO testimonials (name,avatar,content) VALUES ('$name','$fileName','$content')";
		$result = "INSERT INTO testimonials (name,rating,content) VALUES ('$name','$rating','$content')";
		// var_dump($result);
		$res = $conn->query($result);
		// var_dump($res);
		if ($res != null) {
			echo "
				<div style='margin: 50px 50px'>
					<font color='green'>Testimonial data added successfully.</font>
					<br>
					<font color='red'>Please don't refresh this page</font>
				</div>";
		}
	}
	?>

	<script>
		setTimeout(function() {
			window.location.href = '../adminPage/testimonials.php';
		}, 3000);
	</script>

<?php
}
?>