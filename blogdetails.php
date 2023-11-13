<?php //  include 'header.php'; ?>
<?php include_once("connection.php"); $key = $_GET['key'];?>
<?php 
  $result = mysqli_query($mysqli, "SELECT * FROM blog WHERE key_url='$key'");
  while($res = mysqli_fetch_array($result)) {
    $key_url = $res['key_url'];
    $title = $res['title'];
    $area = $res['area'];
    $event_date = $res['event_date'];
    $image = $res['image'];
    $content = $res['content'];
    $meta_title = $res['meta_title'];
    $meta_desc = $res['meta_desc'];
    $meta_keywords = $res['meta_keywords'];
  }
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title><?php echo $meta_title; ?></title>
  <meta name="title" content="<?php echo $meta_title; ?>">
  <meta name="description" content="<?php echo $meta_desc; ?>">
  <meta name="keywords" content="<?php echo $meta_keywords; ?>">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Muli:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Flattern
  * Updated: Jul 27 2023 with Bootstrap v5.3.1
  * Template URL: https://bootstrapmade.com/flattern-multipurpose-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
<?php include 'header_menu.php'; ?>
  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
     <!-- <section id="breadcrumbs" class="breadcrumbs"> -->
     <section id="breadcrumbs">
      <!-- <div class="container"> -->
      <img src="./assets/img/bg/blog.jpeg" alt="" width="100%" height="100%">

        <!-- <div class="d-flex justify-content-between align-items-center">
          <h2>Blog</h2>
          <ol>
            <li><a href="index.html">Home</a></li>
            <li>Blog</li>
          </ol>
        </div>

      </div> -->
    </section><!-- End Breadcrumbs -->

    <!-- ======= Blog Single Section ======= -->
    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-8 entries">

            <article class="entry entry-single">
                
              <div class="entry-img">
                <img src="./adminpanel/images/blogs/<?php echo $image; ?>" alt="<?php echo $title; ?>" class="img-fluid">
              </div>
              <br>

              <h2 class="entry-title">
                <a href="#"><?php echo $title; ?></a>
              </h2>

              <div class="entry-meta">
                <ul>
                  <!--<li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="blog-single.html">John Doe</a></li>-->
                  <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="blog-single.html"><time datetime="2020-01-01"><?php echo $event_date; ?></time></a></li>
                  <!--<li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a href="blog-single.html">12 Comments</a></li>-->
                </ul>
              </div>

              <div class="entry-content">
                  <?php echo $content; ?>
              </div>

             

            </article><!-- End blog entry -->

         

          </div><!-- End blog entries list -->

          <div class="col-lg-4">

            <div class="sidebar">

              <h3 class="sidebar-title">Search</h3>
              <div class="sidebar-item search-form">
                <form action="">
                  <input type="text">
                  <button type="submit"><i class="bi bi-search"></i></button>
                </form>
              </div><!-- End sidebar search formn-->

              <h3 class="sidebar-title">Quick Links</h3>
              <div class="sidebar-item categories">
                <ul>
                   <li><a class="active" href="index.php">Home</a></li>
          <li><a href="about.php">About</a></li>
          <li><a href="portfolio.php">Portfolio</a></li>
          <li><a href="contact.php">Contact</a></li>
          <li><a href="blog.php">Blog</a></li>
                </ul>
              </div><!-- End sidebar categories-->

              <h3 class="sidebar-title">Recent Posts</h3>
              <div class="sidebar-item recent-posts"></div><!-- End sidebar recent posts-->

              <h3 class="sidebar-title">Tags</h3>
              <div class="sidebar-item tags">
                <ul>
                  <li><a href="#">App</a></li>
                  <li><a href="#">IT</a></li>
                  <li><a href="#">Business</a></li>
                  <li><a href="#">Design</a></li>
                  <li><a href="#">Office</a></li>
                  <li><a href="#">Creative</a></li>
                  <li><a href="#">Smart</a></li>
                  <li><a href="#">Tips</a></li>
                  <li><a href="#">Digital Marketing</a></li>
                </ul>
              </div><!-- End sidebar tags-->

            </div><!-- End sidebar -->

          </div><!-- End blog sidebar -->

        </div>

      </div>
    </section><!-- End Blog Single Section -->

  </main><!-- End #main -->

  <?php include 'footer.php'; ?>