<?php

session_start();
if (!$_SESSION["admin"]) {
    header("Location: ./login.php");
} else {
    header("Location: ./display/galleryTitle.php");
}
?>
 