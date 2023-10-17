<?php
include_once("connection.php");
$key = $_GET['key'];
?>
<?php
$result2 = mysqli_query($mysqli, "SELECT * FROM blog WHERE key_url='$key'");
while ($res2 = mysqli_fetch_array($result2)) {
  $title2 = $res2['title'];
  $meta_desc = $res2['meta_desc'];
}
?>
<!DOCTYPE html>
<html lang="en">

<!-- Basic -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">

<!-- Mobile Metas -->
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- Site Metas -->
<title><?php echo $title2; ?></title>
<meta name="title" content="<?php echo $title2; ?>">
<meta name="description" content="<?php echo $meta_desc; ?>">
<!--<meta name="keywords" content="software companies in hyderabad,top software companies in hyderabad,top software development companies in hyderabad,Software companies in gachibowli,best software company in hyderabad,software development company in bangalore,Top Custom Software Development Companies in Bangalore,Software Development Services in Bangalore,Best Software Development Company in Bangalore,list of software development companies in bangalore,best software development company in bangalore,top software development companies in bangalore,software development company in vizag,best software development company in vizag,top software development company in vizag,top 10 software companies in Hyderabad,software development companies in Visakhapatnam,best software development company  in Visakhapatnam,top software development company in Visakhapatnam">-->
<meta property="og:title" content="Best Software Company in Visakhapatnam & Hyderabad & Vijayawada | Web Design & Development | Digital Marketing | App Development | ase technologies">
<meta property="og:site_name" content="asetechnologies">
<meta property="og:url" content="http://asetechnologies.in/">
<meta property="og:description" content=" Ase technologies one of the Best Software Company in Hyderabad we are expertise in providing SEO, SEM, SMM & Website Design & Development one stop solution services, for More Services Call Now: 9703011553, 8374631133
 ">
<meta property="og:type" content="business.business">
<meta property="og:image" content="http://asetechnologies.in/images/logos/logo2.png">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:site" content="@AseTechnologies">
<meta name="twitter:description" content=" Ase technologies one of the Best Software Company in Hyderabad we are expertise in providing SEO, SEM, SMM & Website Design & Development one stop solution services, for More Services Call Now: 9703011553, 8374631133">
<meta name="twitter:title" content="Best Software Company in Visakhapatnam & Hyderabad & Vijayawada | Web Design & Development | Digital Marketing | App Development | ase technologies">
<meta name="twitter:image" content="https://twitter.com/AseTechnologies/photo">


<!-- Site Icons -->
<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon" />
<link rel="apple-touch-icon" href="images/apple-touch-icon.png">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="css/bootstrap.min.css">
<!-- Site CSS -->
<link rel="stylesheet" href="style.css">
<!-- Responsive CSS -->
<link rel="stylesheet" href="css/responsive.css">
<!-- Custom CSS -->
<link rel="stylesheet" href="css/custom.css">

<style type="text/css">
  .dropbtn {

    padding: 16px;
    font-size: 16px;
    border: none;
  }

  .dropdown {
    position: relative;
    display: inline-block;
  }

  .dropdown-content {
    display: none;
    position: absolute;
    background-color: #f1f1f1;
    min-width: 250px;
    box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
    z-index: 1;
  }

  .dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
  }

  .dropdown-content a:hover {
    background-color: #ddd;
  }

  .dropdown:hover .dropdown-content {
    display: block;
  }
</style>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-FBBVK3FQDG"></script>
<script>
  window.dataLayer = window.dataLayer || [];

  function gtag() {
    dataLayer.push(arguments);
  }
  gtag('js', new Date());

  gtag('config', 'G-FBBVK3FQDG');
</script>
<meta name="google-site-verification" content="USnvHcwSLtrHiUPJCKE-9hpIRCoZoaquXYHhNxIwg4E" />
</head>

<body class="app_version" data-spy="scroll" data-target="#navbarApp" data-offset="98">

  <!-- END LOADER -->
  <header class="header header_style_01">
    <nav class="navbar header-nav navbar-expand-lg">
      <div class="container">
        <a class="navbar-brand" href="index.php"><img src="images/logos/logo2.png" alt="image" width="100px" height="95px"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarApp" aria-controls="navbarApp" aria-expanded="false" aria-label="Toggle navigation">
          <span></span>
          <span></span>
          <span></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarApp">
          <ul class="navbar-nav">
            <li><a class="nav-link " href="index.php">Home</a></li>
            <li><a class="nav-link " href="aboutus.php">About Us</a></li>
            <div class="dropdown">
              <li><a class="nav-link dropbtn">Services</a></li>
              <div class="dropdown-content">
                <a href="webDesign.php">Web Designing</a>
                <a href="webDevelopment.php">Web Development</a>
                <a href="mobileAppDevelopment.php">Mobile App Development</a>
                <a href="iotBasedAppDevelopment.php">IOT Based App Development</a>
                <a href="digitalMarketing.php">Digital Marketing</a>
              </div>
            </div>
            <li><a class="nav-link" href="portfolio.php">Portfolio</a></li>
            <li><a href="careers.php" class="nav-link">Careers</a></li>
            <!-- <li><a class="nav-link" href="clients.php">Clients</a></li> -->
            <!-- <li><a class="nav-link" href="faq.php">FAQs</a></li> -->
            <li><a class="nav-link" href="contactus.php">Contact</a></li>
            <li><a class="nav-link active" href="blog.php">Blog</a></li>
            <!-- <li><a class="nav-link" href="registration.php">Registration</a></li> -->
          </ul>
        </div>
      </div>
    </nav>
  </header>