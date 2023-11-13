<?php

include "../connection.php";

$name       = $_POST["name"];
$email      = $_POST["email"];
$mobile     = $_POST["mobile"];
$graduation = $_POST["graduation"];
$yop        = $_POST["yop"];
$dob        = $_POST["dob"];
$enumber    = $_POST["enumber"];
$address    = $_POST["address"];

$tmp_name   = $_FILES['cv']['tmp_name'];
$fName       = $_FILES['cv']['name'];
$fSize       = $_FILES['cv']['size'];
$fType       = $_FILES['cv']['type'];
$error      = $_FILES['cv']['error'];

if ($error > 0) {
    die('Upload error or No files uploaded');
}

$fileName = str_replace(" ", "", $fName);
$destination = '../resume/' . $fileName;

$handle = fopen($tmp_name, "r");
$content = fread($handle, $fSize);
fclose($handle);

$encoded_content = chunk_split(base64_encode($content));
$boundary = md5("random");

if (move_uploaded_file($tmp_name, $destination)) {
    try {
        $sql = "insert into `registration` (`name`,`mobile`,`email`,`graduation`,`yop`,`dob`,`enumber`,`address`,`cv`) values('$name', '$mobile', '$email', '$graduation', '$yop', '$dob', '$enumber', '$address', '$fileName')";
        $stmt = $mysqli->prepare($sql);
        $data = array($name, $mobile, $email, $graduation, $yop, $dob, $enumber, $address, $fileName);
        $stmt->execute();
    } catch (mysqli_sql_exception $error) {
        var_dump($error);
        echo "hii";
    }
}

if (isset($_POST['submit']) && isset($_FILES['cv'])) {
    $from_email         = $_POST['email'];
    $recipient_email    = 'careers@asetechnologies.in';
    $reply_to_email     = $_POST['email'];

    $subject    = $_POST['name'];

    $message    = "ASE Technologies New Candidate Registration Details.
                    Candidate Name              : $name ,
                    Candidate Email ID          : $email ,
                    Candidate Mobile Number     : $mobile ,
                    Highest Graduation          : $graduation ,
                    Year of Passing             : $yop ,
                    Date of Birth               : $dob ,
                    Emergency Contact Number    : $enumber ,
                    Residential Address         : $address 
                ";

    $headers = "MIME-Version: 1.0\r\n";
    $headers .= "From:" . $from_email . "\r\n";
    $headers .= "Reply-To: " . $reply_to_email . "\r\n";
    $headers .= "Content-Type: multipart/mixed;";
    $headers .= "boundary = $boundary\r\n";
    $headers .= "Bcc: [email]m.hari2504@gmail.com[/email]";

    $body = "--$boundary\r\n";
    $body .= "Content-Type: text/plain; charset=ISO-8859-1\r\n";
    $body .= "Content-Transfer-Encoding: base64\r\n\r\n";
    $body .= chunk_split(base64_encode($message));

    $body .= "--$boundary\r\n";
    $body .= "Content-Type: $fType; name=" . $fileName . "\r\n";
    $body .= "Content-Disposition: attachment; filename=" . $fileName . "\r\n";
    $body .= "Content-Transfer-Encoding: base64\r\n";
    $body .= "X-Attachment-Id: " . rand(1000, 99999) . "\r\n\r\n";
    $body .= $encoded_content;

    // $sentMailResult = mail($recipient_email, $subject, $body, $headers);

    // if ($sentMailResult) {
    //     echo "
    // 		<div style='margin: 50px 50px'>
    // 			<font color='green'>Dear Candidate, your data added successfully. </font>
    // 			<font>We will reach you shortly</font>
    // 			<br>
    // 			<font color='red'>Please don't refresh this page</font>
    // 		</div>
    //     ";
    // } else {
    //     die("Sorry, the email could not be sent. Please go back and try again!");
    // }
} else {
};

?>

<script>
    setTimeout(function() {
        window.location.href = '../';
    }, 1000);
</script>