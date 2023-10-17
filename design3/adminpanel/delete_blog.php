<?php session_start(); ?>

<?php
if(!isset($_SESSION['valid'])) {
	header('Location: login.php');
}
?>

<?php
include("connection.php");

$id = $_GET['profile_id'];

$result=mysqli_query($mysqli, "DELETE FROM blog WHERE id=$id");
header("Location:blogs.php");
?>

