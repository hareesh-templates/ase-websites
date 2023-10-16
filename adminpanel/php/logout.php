<?php
    session_start();
    // unset($_SESSION["id"]);
    unset($_SESSION["admin"]);
    unset($_SESSION["blogAdminPanel"]);
    header("Location:../index.php");
?>