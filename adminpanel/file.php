<?php
include_once("connection.php");

// Downloads files
if (isset($_GET['file_id'])) {
    $id = $_GET['file_id'];

    // fetch file to download from database
    $sql = "SELECT * FROM registration WHERE sno=$id";
    $result = mysqli_query($mysqli, $sql);

    $file = mysqli_fetch_assoc($result);
    $filepath = '../resume/' . $file['cv'];
    // var_dump($filepath);
    if (file_exists($filepath)) {
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename=' . basename($filepath));
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize('../resume/' . $file['cv']));
        readfile('../resume/' . $file['cv']);

        // Now update downloads count
        $newCount = $file['cv'];
        $updateQuery = "UPDATE registration SET cv=$newCount WHERE id=$id";
        mysqli_query($mysqli, $updateQuery);
        exit;
    }

}
