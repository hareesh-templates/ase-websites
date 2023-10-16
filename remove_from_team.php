<?php session_start(); ?>

<?php
if(!isset($_SESSION['valid'])) {
	header('Location: login.php');
}
?>

<?php
include("connection.php");

$id = $_GET['profile_id'];
$result=mysqli_query($mysqli, "UPDATE login SET report=0 WHERE report=$id");
$result=mysqli_query($mysqli, "UPDATE login SET report=0 WHERE id=$id");

header("Location:team.php");
?>

