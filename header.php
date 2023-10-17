
<?php
    if (basename($_SERVER['PHP_SELF']) == 'blogDetails.php') {
        include "./blogMeta.php";
    } else {
        include "./meta.php";
    }
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <title> PARIMI'S DENTAL CARE<?php echo $page_title ?></title>
    <meta name="title" content="PARIMI'S DENTAL CARE<?php echo $page_title ?>">
    <meta name="description" content="<?php echo $meta_description; ?>">
    <meta name="keywords" content="<?php echo $meta_keywords; ?>">

    <!--google-site-verification-->
    <meta name="google-site-verification" content="wQ8G7pP9RXeR_cmhCsoi83STbfMPFuEijqCB0pqzI8c" />

    <link rel="icon" href="./assets/images/logo/Parimi_Logo6.png">
    <link rel="shortcut icon" href="assets/images/fav.png" type="image/x-icon">
    <link rel="shortcut icon" href="assets/images/fav.jpg">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@400;500&display=swap">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="assets/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css" />
    <link rel="stylesheet" href="./assets/css/servicesStyle.css">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>
    <header class=" fixed-top">
        <div class="head-row ">
            <div class="row">
                <div class="col-md-3 logocol">
                    <img src="./assets/images/logo/parimi_logo.png" alt="">
                    <a class="navbar-toggler d-block d-md-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="bi bi-list"></i>
                    </a>
                </div>
                <div id="navbarNav" class="col-md-9 col-lg-7 d-none d-md-block infocol">
                    <div class="row d-none d-sm-block float-end info-row">
                        <ul>
                            <li>
                                <a href="mailto: parimidentalcare.18@gmail.com">
                                    <i class="far fa-envelope"></i> parimidentalcare.18@gmail.com
                                </a>
                            </li>
                            <li class="d-none d-md-block d-lg-none">
                                <a href="tel:+919381190676">
                                    <i class="fas fa-mobile-alt"></i> +91 9381190676
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="nav-row ">
                        <ul>
                            <li><a href="./">Home</a></li>
                            <li><a href="aboutus.php">About Us</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown">Services</a>
                                <div class="dropdown-menu m-0">
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
                        <div class="col-md-10 p-auto m-auto d-md-none">
                            <a href="tel:++91 9381190676">
                                <button class="bg-success text-center text-white btn-lg w-100">Call</button>
                            </a>
                        </div>

                    </div>
                </div>
                <div class="col-lg-2 d-flex d-none d-lg-block p-auto m-auto">
                    <div class="col-md-10 p-auto m-auto">
                        <a href="tel:++91 9381190676">
                            <button class="bg-success text-center text-white btn-lg w-100">Call</button>
                        </a>
                    </div>
                    <!-- <div class="col-md-6 p-auto m-auto">
                        <a href="mailto:parimidentalcare.18@gmail.com">
                            <button class="bg-success text-center text-white btn-lg w-100">Email</button>
                        </a>
                    </div> -->
                </div>
            </div>
        </div>
    </header>