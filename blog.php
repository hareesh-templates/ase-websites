<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Eswari Group / Interiors - Blog || Best interior design in Visakhapatnam & Vijayawada</title>
    <link rel="icon" href="./img/egTitleIcon.png">

    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <!-- SEO meta tags -->
    <meta name="title" content="Eswari Group | Best interior design in Visakhapatnam & Vijayawada">
    <meta name="description" content=" Carefully designed just for you and your family, residential interior design in Visakhapatnam, 
        commercial interior design in Hyderabad and office interior design in Vijayawada.">
    <meta name="keywords" content="Interior design, Interior designers near me, Modern interior designers, Bad room interior in Vizag, 
        Kitchen interior designers near me, Best interior designers in Visakhapatnam, Top interior designers in Visakhapatnam, 
        Home interior designers, House interior designers, Living room interior designers, Best interior design in Vijayawada, 
        Home interior design in Vijayawada, Best interior design in Hyderabad, Top interiors design in Hyderabad, 
        Interior design company in Visakhapatnam, Luxury interior design services in Visakhapatnam.">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Oswald:wght@400;500;600&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Flaticon Font -->
    <link href="lib/flaticon/font/flaticon.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>

    <!-- Navbar Start -->
    <div class="container-fluid position-relative nav-bar p-0">
        <div class="container-fluid position-relative p-0" style="z-index: 9;">
            <nav class="navbar navbar-expand-lg bg-secondary navbar-dark py-3 py-lg-0 pl-3 pl-lg-5">
                <a href="" class="navbar-brand">
                    <img src="img/EG_Logo-side.png" alt="Eswari Group / Interiors" width="125px">
                </a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between px-3" id="navbarCollapse">
                    <div class="navbar-nav ml-auto py-0">
                        <a href="index.php" class="nav-item nav-link ">Home</a>
                        <a href="about.php" class="nav-item nav-link ">About</a>
                        <a href="service.php" class="nav-item nav-link ">Service</a>
                        <a href="project.php" class="nav-item nav-link ">Project</a>
                        <a href="blog.php" class="nav-item nav-link active">Blog</a>
                        <a href="contact.php" class="nav-item nav-link">Contact</a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->

    <!-- Blog Start -->
    <?php
    include('./php/connection.php');
    $sql = "select * from blog order by id desc";
    $result = $conn->query($sql);
    ?>

    <div class="container-fluid bg-light ">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-8 col text-center mb-4">
                    <h5 class="text-primary font-weight-normal text-uppercase mb-3">Our Blog</h5>
                    <h1 class="mb-4">Read The Latest News & Articles From Our Blog</h1>
                </div>
            </div>
            <?php
            $count = $result->rowCount();
            if ($count > 0) {
                echo '
            <div class="row pb-3">
            ';
                while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
                    // var_dump($row);
                    echo '
                <div class="col-md-4 mb-4">
                    <div class="card border-0 mb-2" style="height: 520px;">
                        <img class="card-img-top" src="./adminpanel/images/imgs/' . $row['image'] . '" alt="' . $row['image'] . '" height="300px">
                        <div class="card-body bg-white p-4">
                            <div class="d-flex align-items-center mb-3">
                                <a class="btn btn-primary" href="./single.php?key=' . $row['key_url'] . '"><i class="fa fa-link"></i></a>
                                <h5 class="m-0 ml-3 text-truncate">' . $row['title'] . '</h5>
                            </div>
                            <p>' . $row['key_url'] . '</p>
                        </div>
                        <div class="d-flex mb-3 ml-4">
                            <small class="mr-3"><a href="http://eswarigroup.com/"><i class="fa fa-user text-primary"></i> Admin</a></small>
                            <small class="mr-3"><a href="https://asetechnologies.in/"><i class="fa fa-folder text-primary"></i> Web Design</a></small>
                            <small class="mr-3" style="color: #DFB163"><i class="fa fa-calendar text-primary"></i> ' . date('M j, Y', strtotime($row['date'])) .'</a></small>
                        </div>
                    </div>
                </div>
                    ';
                }
                echo '
            </div>';
            } else {
                echo '
            <p class="errors">No data found</p>
                ';
            }
            ?>
        </div>
    </div>
    <!-- Blog End -->

    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-white py-3 px-sm-3 px-md-5">
        <div class="row pt-3">
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="text-primary mb-4">Get In Touch</h4>
                <p><i class="fa fa-map-marker-alt mr-2"></i>50-96-8/4.MIG 22, Seethammadara, VSKP, AP-530013</p>
                <p><i class="fa fa-phone-alt mr-2"></i>+91 96666 96889</p>
                <p><i class="fa fa-envelope mr-2"></i>eswarigroup9@gmail.com</p>

                <div class="d-flex justify-content-start mt-4">
                    <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 38px; height: 38px;" href="https://mobile.twitter.com/eswari_group" target="_blank">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 38px; height: 38px;" href="https://www.facebook.com/asetechnologiesofficial" target="_blank">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 38px; height: 38px;" href="https://in.linkedin.com/company/eswarigroup" target="_blank">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 38px; height: 38px;" href="https://www.instagram.com/eswarigroup/" target="_blank">
                        <i class="fab fa-instagram"></i>
                    </a>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="text-primary mb-4">Quick Links</h4>
                <div class="d-flex flex-column justify-content-start">
                    <a class="text-white mb-2" href="index.php"><i class="fa fa-angle-right mr-2"></i>Home</a>
                    <a class="text-white mb-2" href="about.php"><i class="fa fa-angle-right mr-2"></i>About Us</a>
                    <a class="text-white mb-2" href="service.php"><i class="fa fa-angle-right mr-2"></i>Our
                        Services</a>
                    <a class="text-white mb-2" href="project.php"><i class="fa fa-angle-right mr-2"></i>Our
                        Projects</a>
                    <a class="text-white" href="contact.php"><i class="fa fa-angle-right mr-2"></i>Contact Us</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5"></div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="text-primary mb-4">Newsletter</h4>
                <form action="./php/newsletter.php" method="post">
                    <div class="form-group">
                        <input type="text" name="name" class="form-control border-0" placeholder="Your Name" required="required" />
                    </div>
                    <div class="form-group">
                        <input type="email" name="email" class="form-control border-0" placeholder="Your Email" required="required" />
                    </div>
                    <div>
                        <button name="submit" class="btn btn-lg btn-primary btn-block border-0" type="submit">Submit Now</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="container border-top border-secondary pt-5">
            <p class="m-0 text-center text-white">
                &copy;
                <a class="text-white font-weight-bold" href="https://eswarigroup.com/interiors/">Eswari Group / Interior</a>.
                All Rights Reserved. Designed by
                <a class="text-white font-weight-bold" target="_blank" href="https://asetechnologies.in/">
                    ASE Technologies
                </a>
            </p>
        </div>
    </div>
    <!-- Footer End -->
    
    <?php
        include "./whatsapp.php";
    ?>

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/isotope/isotope.pkgd.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>
</html>