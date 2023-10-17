<?php

include "./connection.php";

//Load POST data from HTML form
$name       = $_POST["name"]; //sender name
$email      = $_POST["email"]; //subject for the email
$mobile     = $_POST["mobile"]; //body of the email
$graduation = $_POST["graduation"];
$yop        = $_POST["yop"];
$dob        = $_POST["dob"];
$enumber    = $_POST["enumber"];
$address    = $_POST["address"];

//Get uploaded file data using $_FILES array
$tmp_name   = $_FILES['cv']['tmp_name']; // get the temporary file name of the file on the server
$fName       = $_FILES['cv']['name']; // get the name of the file
$fSize       = $_FILES['cv']['size']; // get size of the file for size validation
$fType       = $_FILES['cv']['type']; // get type of the file
$error      = $_FILES['cv']['error']; // get the error (if any)

//validate form field for attaching the file
if ($error > 0) {
    die('Upload error or No files uploaded');
}

$fileName = str_replace(" ", "", $fName);
$destination = 'resume/' . $fileName;

//read from the uploaded file & base64_encode content
$handle = fopen($tmp_name, "r"); // set the file handle only for reading the file
$content = fread($handle, $fSize); // reading the file
fclose($handle);                 // close upon completion

$encoded_content = chunk_split(base64_encode($content));
$boundary = md5("random"); // define boundary with a md5 hashed value

//sent to database
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
    $from_email         = $_POST['email']; //from mail, sender email address
    $recipient_email    = 'hareesh@asetechnologies.in'; //recipient email address
    $reply_to_email     = $_POST['email'];

    $subject    = $_POST['name'];

    $message    = "ASE Technologies New Candidate Registration Details.
                    Candidate Name              : $name ,
                    Candidate Email ID          : $email ,
                    Candidate Mobile Number     : $mobile ,
                    Highest Graduation         : $graduation ,
                    Year of Passing             : $yop ,
                    Date of Birth               : $dob ,
                    Emergency Contact Number    : $enumber ,
                    Residential Address         : $address 
                ";

    //header
    $headers = "MIME-Version: 1.0\r\n"; // Defining the MIME version
    $headers .= "From:" . $from_email . "\r\n"; // Sender Email
    $headers .= "Reply-To: " . $reply_to_email . "\r\n"; // Email address to reach back
    $headers .= "Content-Type: multipart/mixed;"; // Defining Content-Type
    $headers .= "boundary = $boundary\r\n"; //Defining the Boundary
    $headers .= "Bcc: [email]m.hari2504@gmail.com[/email]";

    //body
    //plain text
    $body = "--$boundary\r\n";
    $body .= "Content-Type: text/plain; charset=ISO-8859-1\r\n";
    $body .= "Content-Transfer-Encoding: base64\r\n\r\n";
    $body .= chunk_split(base64_encode($message));

    //attachment
    $body .= "--$boundary\r\n";
    $body .= "Content-Type: $fType; name=" . $fileName . "\r\n";
    $body .= "Content-Disposition: attachment; filename=" . $fileName . "\r\n";
    $body .= "Content-Transfer-Encoding: base64\r\n";
    $body .= "X-Attachment-Id: " . rand(1000, 99999) . "\r\n\r\n";
    $body .= $encoded_content; // Attaching the encoded file with email

    $sentMailResult = mail($recipient_email, $subject, $body, $headers);

    if ($sentMailResult) {
        echo "
    		<div style='margin: 50px 50px'>
    			<font color='green'>Dear Candidate, your data added successfully. </font>
    			<font>We will reach you shortly</font>
    			<br>
    			<font color='red'>Please don't refresh this page</font>
    		</div>
        ";
        // unlink($name); // delete the file after attachment sent.
    } else {
        die("Sorry, the email could not be sent. Please go back and try again!");
    }
} else {
};

// var_dump($body);

?>

<script>
    setTimeout(function() {
        window.location.href = './';
    }, 1000);
</script>