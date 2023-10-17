
<?php include 'connection.php';
$key = $_GET['key'];
 ?>
    <?php 
            $result = mysqli_query($mysqli, "SELECT * FROM blog WHERE key_url='$key'");
              while($res = mysqli_fetch_array($result))
                {
                  $key_url = $res['key_url'];
                  $title = $res['title'];
                  $area = $res['area'];
                  $event_date = $res['event_date'];
                  $image = $res['image'];
                  $content = $res['content'];
                  $meta_desc = $res['meta_desc'];
                  
                  
                }
            ?>
            <!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title><?php echo $title; ?></title>
   <meta name="title" content="<?php echo $title; ?>">
  <meta content="<?php echo $meta_desc; ?>" name="description">
  <meta content="" name="keywords">
  <meta name="google-site-verification" content="vPNyCjuKRPEV6EN8DGl-Tq_Qq5tbdT9a8Zqp1pKf5U0" />

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/eclogo2.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Arsha - v4.3.0
  * Template URL: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top " style="background-color: #fff;">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="index.html"><img src="assets/img/eclogo.png" alt="Loans" style="height: 75px;"></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto" href="index.html#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="index.html#about">About</a></li>
          <li><a class="nav-link scrollto" href="index.html#services">Services</a></li>
          <li><a class="nav-link scrollto" href="index.html#team">Team</a></li>
          <li><a class="nav-link scrollto" href="index.html#eligibility">Check eligibility</a></li>
          <li><a class="nav-link scrollto" href="index.html#faq">FAQ</a></li>
          <li><a class="nav-link scrollto active" href="blog.php">Blogs  </a></li>
          <li><a class="nav-link scrollto" href="index.html#contact">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->



             <section id="skills" class="skills" style="margin-top:100px;">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-12 d-flex align-items-center" data-aos="fade-right" data-aos-delay="100">
          </div>
          <div class="col-lg-12 pt-4 pt-lg-0 content" data-aos="fade-left" data-aos-delay="100">
            <h3><?php echo $title; ?></h3>
            <p>Posted On: <?php echo $event_date; ?></p>
                        <img src="./adminpanel/images/blogs/<?php echo $image; ?>"  height="400px" width="450px" alt="Loans">

            <p><?php echo $content; ?></p>

          

          </div>
        </div>

      </div>
    </section>

<?php
include 'footer.php';
?> 