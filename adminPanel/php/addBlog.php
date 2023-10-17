<?php
session_start();
if (!$_SESSION["admin"]) {
	header("Location: ../index.php");
} else {
?>
	<?php
	include_once("../php/connection.php");

	if (isset($_POST['Submit'])) {
		$title = $_POST['title'];
		$description = $_POST['description'];
		$content = $_POST['content'];
		$key_url = $_POST['key_url'];
		$key_words = $_POST['key_words'];

		$errors = array();
		$file_name = $_FILES['image']['name'];
		$file_size = $_FILES['image']['size'];
		$file_tmp = $_FILES['image']['tmp_name'];
		$file_type = $_FILES['image']['type'];

		// move_uploaded_file($file_tmp, "../images/blogIMgs/" . $file_name);
		$fileName = str_replace(" ", "", $file_name);
		move_uploaded_file($file_tmp, "../images/blogImgs/" . $fileName);


		$result = "INSERT INTO blog (title,description,content,key_url,image,key_words) VALUES ('$title','$description','$content','$key_url','$fileName','$key_words')";
		// var_dump($result);
		$res = $conn->query($result);
		// var_dump($res);
		if ($res != null) {
			echo "
				<div style='margin: 50px 50px'>
					<font color='green'>Blog data added successfully.</font>
					<br>
					<font color='red'>Please don't refresh this page</font>
				</div>";
		}
	}
	?>

	<script>
		setTimeout(function() {
			window.location.href = '../adminPage/index.php';
		}, 3000);
	</script>

<?php
}
?>