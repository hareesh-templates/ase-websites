<?php
session_start();
if (!$_SESSION["blogAdminPanel"]) {
	header("Location: ../index.php");
} else {
?>
	<?php
	include_once("../php/connection.php");

	if (isset($_POST['Submit'])) {
		$title = $_POST['title'];
		$key_words = $_POST['key_words'];
		$content = $_POST['content'];
		$key_url = $_POST['key_url'];
		$meta_desc = $_POST['meta_desc'];

		$errors = array();
		$file_name = $_FILES['image']['name'];
		$file_size = $_FILES['image']['size'];
		$file_tmp = $_FILES['image']['tmp_name'];
		$file_type = $_FILES['image']['type'];

		move_uploaded_file($file_tmp, "../images/imgs/".$file_name);
		
		// $file_dir = "../images/imgs/";
        // if(is_dir($file_dir)) {
        //  echo ("$file_dir is a directory");
        // } else {
        //  echo ("$file_dir is not a directory");
        // }
        
		$result = "INSERT INTO blog (title,key_words,content,key_url,image,meta_desc) VALUES ('$title','$key_words','$content','$key_url','$file_name','$meta_desc')";
		// var_dump($result);
		$res = $conn->query($result);
		// var_dump($res);
		if ($res != null) {
			echo "
				<div style='margin: 50px 50px'>
					<font color='green'>Data added successfully.</font>
					<br>
					<font color='red'>Please don't refresh this page</font>
				</div>";
		}
	}
	?>

	<script>
		setTimeout(function() {
			window.location.href = '../blogAdmin/index.php';
		}, 3000);
	</script>

<?php
}
?>