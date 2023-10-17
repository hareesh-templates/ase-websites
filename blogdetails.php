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
<!doctype html>
 <meta charset="utf-8">
    <meta name="language" content="english">
    <meta name="viewport" content="width=device-width,  initial-scale=1,  user-scalable=no">
 <meta name="title" content="<?php echo $title; ?>">
<meta name="description" content="<?php echo $meta_desc; ?>">
    <meta content="index,  follow" name="Robots">
    <meta content="index,  follow" name="Googlebot">
    <!--<meta name="keywords" content="Construction companies in india, Construction companies in vizag, Top builders, Top construction companies in India, Construction companies , Construction companies near me, General contractors , Building contractors near me, Home remodelling near me, Remodelling companies, Commercial construction companies quality construction , Building construction in vizag, Infrastructure companies in vizag, Top construction companies in vizag, Top builders in vizag, Building consultants contractors in vizag, Civil works in Visakhapatnam, Top 10 construction companies in andhra pradesh">-->
   
     <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="https://twitter.com/aseInfrastruct2">
    <meta name="twitter:title" content="Construction company in vizag | interior Designers in visakhapatnam">
    <meta name="twitter:description" content="Great Construction plan comes with experienced engineering, that combines quality and standard! Contact us today for budget-friendly home construction!">
    
<meta property="og:title" content="Construction company in vizag | interior Designers in visakhapatnam">
<meta property="og:site_name" content="aseinfra.com">
<meta property="og:url" content="http://aseinfra.com/">
<meta property="og:description" content="">
<meta property="og:type" content="article">
<meta property="og:image" content="http://aseinfra.com/images/aseinfralogo.jpg">
   

<title><?php echo $title; ?></title>    
<link rel="shortcut icon" type="image/x-icon" href="img/ASE-Infra.png">

<link rel="stylesheet" href="css/fontawesome.min.css">

<link rel="stylesheet" href="css/themify-icons.css">

<link rel="stylesheet" href="css/elegant-line-icons.css">

<link rel="stylesheet" href="css/elegant-font-icons.css">

<link rel="stylesheet" href="css/flaticon.css">

<link rel="stylesheet" href="css/animate.min.css">

<link rel="stylesheet" href="css/bootstrap.min.css">

<link rel="stylesheet" href="css/slick.css">

<link rel="stylesheet" href="css/slider.css">

<link rel="stylesheet" href="css/odometer.min.css">

<link rel="stylesheet" href="css/venobox/venobox.css">

<link rel="stylesheet" href="css/owl.carousel.css">

<link rel="stylesheet" href="css/main.css">

<link rel="stylesheet" href="css/responsive.css">
<script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
</head>
<body>
<!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
<div class="site-preloader-wrap">
<div class="spinner"></div>
</div>
<header class="header">
<div class="primary-header">
<div class="container">
<div class="primary-header-inner">
<div class="header-logo">
<a href="#"><img src="img/aseinfralogo.jpg" alt="aseinfra" style="height: 90px; width: 130px;"></a>
</div>
<div class="header-menu-wrap">
<ul class="dl-menu">
<li><a href="index.php">Home</a>
<!-- <ul>
<li><a href="index.html">Home Default</a></li>
<li><a href="index-2.html">Home Modern</a></li>
</ul> -->
</li>
<li><a href="about.php">About</a>
</li>
<li><a href="services.php">Services</a>
</li>
<li><a href="blog.php">Blog</a>
</li>
<li><a href="contact.php">Contact</a></li>
</ul>
</div>
<div class="header-right">
<a class="menu-btn" href="projects.php">Our Projects</a>

<div class="mobile-menu-icon">
<div class="burger-menu">
<div class="line-menu line-half first-line"></div>
<div class="line-menu"></div>
<div class="line-menu line-half last-line"></div>
</div>
</div>
</div>
</div>
</div>
</div>
</header>

<section class="page-header padding">
<div class="container">
<div class="page-content text-center">
<h2>Blog</h2>
<p>Best Builders in Vizag</p>
</div>
</div>
</section>
<section class="blog-section padding">
<div class="container">
<div class="blog-wrap row">
<div class="col-lg-8 padding-15">
<div class="blog-single-wrap">
<div class="blog-thumb">
 <img src="./adminpanel/images/blogs/<?php echo $image; ?>"  height="400px" width="450px">
</div>
<div class="blog-single-content">
<h2><a href="#"><?php echo $title; ?></a></h2>
<ul class="single-post-meta">
<li><i class="fa fa-calendar"></i> <a href="#">Posted On: <?php echo $event_date; ?></a></li>
</ul>

<p><?php echo $content; ?></p>


</div>
</div>
</div>
<div class="col-lg-4 padding-15">
<div class="sidebar-wrap">
 <div class="widget-content">

</div>
<div class="widget-content">
<h4>Important Links</h4>
<ul class="widget-links">
<li><a href="#">About Us</a></li>
<li><a href="#">Services</a></li>
<li><a href="#">Blogs</a></li>
<li><a href="#">Contact Us</a></li>
<li><a href="#">Projects</a></li>
</ul>
</div>

<div class="widget-content">
<h4>Tag Clouds</h4>
<ul class="tags">
<li><a href="#">Architecture</a></li>
<li><a href="#">Interior Design</a></li>
<li><a href="#">Designing</a></li>
<li><a href="#">Construction</a></li>
<li><a href="#">Buildings</a></li>
<li><a href="#">Industrial</a></li>
<li><a href="#">Factory</a></li>
<li><a href="#">Material</a></li>
</ul>
</div>
</div>
</div>
</div>
</div>
</section>
<?php include 'footer.php'; ?>