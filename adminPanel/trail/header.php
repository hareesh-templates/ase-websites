<?php
include('../php/connection.php');
$sql = "select * from gallery";
$result = $conn->query($sql);
$user = "select * from registration";
$userResult = $conn->query($user);

session_start();
// if (!$_SESSION["admin"]) {
//     header("Location: ../index.php");
// } else {
    $userRow = $userResult->fetch(PDO::FETCH_ASSOC);
    $userName = $userRow['name'];

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>PARIMI'S DENTAL CARE || Admin Panel</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@400;500&display=swap">
    <!-- <link rel="stylesheet" href="../../assets/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="../../assets/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="../../assets/css/style.css" />
    <link rel="stylesheet" href="../css/index.css">
    <link rel="stylesheet" href="../css/style.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

</head>

<body>
    <div class="container-fluid position-relative nav-bar p-0">
            <div class="container-fluid position-relative p-0" style="z-index: 9;">
                <nav class="navbar navbar-expand-lg bg-secondary navbar-dark py-3 py-lg-0 pl-3 pl-lg-5">
    <header class=" fixed-top">
        <div class="head-row ">
            <div class="row d-flex">
                <div class="col-md-3 logocol">
                    <!-- <img src="assets/images/logo/parimi_logo.png" alt="" style="margin-top: -10px;height: auto;width: 300px;" class="d-md-none h-auto"> -->
                    <img src="../../assets/images/logo/parimi_logo.png" alt="">
                    <!-- <img src="./assets/images/logo/Untitled-1.jpg" alt="" class="d-md-none h-auto"> -->
                    <a class="navbar-toggler d-block d-md-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="bi bi-list"></i>
                    </a>
                </div>
                <div id="navbarNav" class="col-md-9 mr-1 d-none d-md-block infocol">
                    <div class="row d-none d-sm-block float-end info-row mt-3">
                        <p>Admin Name : <?php echo $userName ?></p>
                    </div>
                    <div class="nav-row ">
                        <ul>
                            <li><a href="index.php">Home</a></li>
                            <li><a href="aboutus.php">About Us</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown">Services</a>
                                <div class="dropdown-menu m-0">
                                    <!-- <div class="navbar-nav ml-auto py-0"> -->
                                    <a href="addNewBlog.php" class="nav-item nav-link">Blog</a>
                                    <a href="addNewTestimonial.php" class="nav-item nav-link">Testimonial</a>
                                    <a href="addNewGalleryImg.php" class="nav-item nav-link">Gallery</a>
                                    <a href="../php/logout.php" class="nav-item nav-link ">Logout</a>
                                    <!-- </div> -->

                                    <a href="general-dentistry.php" class="dropdown-item">General Dentistry</a>
                                    <a href="preventive-dental-services.php" class="dropdown-item">Preventive Dental Services</a>
                                    <a href="root-canal-treatment.php" class="dropdown-item">Root canal treatment </a>
                                    <a href="crown-and-bridge.php" class="dropdown-item">Crown and Bridge</a>
                                    <a href="dental-braces.php" class="dropdown-item">Dental Braces</a>
                                    <a href="invisible-braces-invisalign.php" class="dropdown-item">Invisible braces Invisalign</a>
                                    <a href="surgical-care.php" class="dropdown-item">Surgical care</a>
                                    <a href="dental-implants.php" class="dropdown-item">Dental implants</a>
                                    <a href="cosmetic-dentistry.php" class="dropdown-item">Cosmetic Dentistry</a>
                                    <a href="pediatric-dentistry.php" class="dropdown-item">Pediatric Dentistry</a>
                                    <a href="dentures.php" class="dropdown-item">Dentures</a>
                                </div>
                            </li>
                            <li><a href="gallery.php">Gallery</a></li>
                            <li><a href="blog.php">Blog</a></li>
                            <li><a href="contactus.php">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <script src="../../assets/js/bootstrap.bundle.min.js"></script>
    
    <?php
    include "../footer.php";
    ?>
</body>
</html>