<?php
include('../backend/connection.php');
$key = $_GET['title'];
$sql = "SELECT * FROM activity_images WHERE title='$key'";
$result = $conn->query($sql);

$count = $result->rowCount();


$titleRow = $result->fetch(PDO::FETCH_ASSOC);
?>

<?php include("headLinks.php"); ?>

<title>Activities</title>
    <?php include("gtag.php"); ?>

<style>
    .box {
        justify-content: center;
        height: 100%;
        display: flex;
        align-items: center;
    }
    .box img {
        max-width: 100%;
    }
</style>
</head>

<body>


    <!-- navbar start -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container-fluid">
            <?php include "logo.php" ?>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main_nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="main_nav">
                <ul class="navbar-nav fs-5">
                    <li class="nav-item"> <a class="nav-link" href="../">Home </a> </li>
                    <li class="nav-item"><a class="nav-link" href="./about.php"> About Us</a></li>
                    <li class="nav-item"><a href="https://eswarihomes.com/property/propertylist" class="nav-link">Projects</a></li>
                    <li class="nav-item"><a class="nav-link active" href="activities.php"> Activities </a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link  dropdown-toggle" href="services.php">Services</a>
                        <ul class="dropdown-menu">
                            <li><a href="services.php#constructions" class="dropdown-item">Construction(s)</a></li>
                            <li><a href="services.php#landDevelopments" class="dropdown-item">Land Development(s)</a></li>
                            <li><a href="services.php#residential" class="dropdown-item">Residential</a></li>
                            <li><a href="services.php#commercial" class="dropdown-item">Commercial </a></li>
                            <li><a href="services.php#villas" class="dropdown-item">Villa(s)</a></li>
                            <li><a href="services.php#apartments" class="dropdown-item">Apartment(s)</a></li>
                            <li><a href="services.php#interiors" class="dropdown-item">Interiors</a></li>
                            <li><a href="services.php#homeLoans" class="dropdown-item">Home Loan(s)</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link  dropdown-toggle" href="companies.php" data-bs-toggle="dropdown">Companies</a>
                        <ul class="dropdown-menu">
                            <li><a href="https://eswarihomes.com/" class="dropdown-item">Eswari Homes</a></li>
                            <li><a href="https://aseinfra.com/" class="dropdown-item">ASE Infrastructures</a></li>
                            <li><a href="https://eswarigroup.com/interiors/" class="dropdown-item">Interiors</a></li>
                            <li><a href="https://eswaricapital.com/" class="dropdown-item">Eswari Capital</a></li>
                            <li><a href="https://asetechnologies.in/" class="dropdown-item">ASE Technologies</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="contact.php"> Contact Us </a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- navbar end -->

    <!-- Activities Start -->
    <div class="container">
        <div class="container-fluid mt-5 pt-3">
            <div class="text-center my-3 pt-5 text-warning mb-5">            
                <h1 >Our Activities Gallery</h1>
                <h4 class="text-dark"><?php echo $titleRow['title'] ?></h4>
            </div>
        </div>
    </div>

    <?php
    if ($count != null) {
    ?>
    <section class="gallery mt-5 mt-lg-0">
        <div class="box-container container-fluid row ml-2">
            <?php
                while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
                    $activityName = str_replace(' ', '', $row['title']);
            ?>
                <div class="col-6 col-lg-3 mb-3">
                    <div class='box shadow'>
                        <img src="../imgs/activities/<?php echo $activityName."/".$row['image']; ?>" alt="<?php echo $activityName."/".$row['image']; ?>">
                    </div>
                </div>
            <?php
                }
            ?>
        </div>
    </section>
    <?php
    }
    ?>
            

    <!-- Activities End -->
    <?php 
        include("whatsapp.php");
        include("footer.php"); 
    ?>