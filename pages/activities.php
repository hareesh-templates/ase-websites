<?php
include('../backend/connection.php');
$sql = "select * from activities";
$result = $conn->query($sql);
?>

<?php include("headLinks.php"); ?>

<title>Eswari Group - Our Activities | Top builders in Kakinada | Vizag</title>

<meta name="title" content="Our activities at Eswarigroup | Top builders in Kakinada | Vizag">
<meta name="description" content=" Real estate companies in Kakinada: Every time, the Eswarigroup family organizes events and enthusiastically takes part in them.">
<meta name="keywords" content="Top builders in Kakinada, Top 10 real estate developers in Visakhapatnam, Luxury flats for sale in Kakinada, Best real estate companies in Visakhapatnam, Realestate projects in Kakinada, Quality builders in Visakhapatnam, 2BHK flats for sale in Kakinada, Real estate company in Kakinada, properties in Visakhapatnam, Luxury flats for sale in Visakhapatnam,">
<meta name="robots" content="index, follow">
    <?php include("gtag.php"); ?>

<style>
    .box {
        text-align: center;
        background-repeat: no-repeat;
        background-position: center;
        height: 250px;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
        margin-bottom: 1rem;
    }

    .cover {
        opacity: 0;
        background-color: #ffc107;
        color: #fff;
    }

    .box:hover .cover {
        opacity: 1;
    }
</style>
</head>

<body>

    <!-- navbar start -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top shadow">
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
            <div class="h1 text-center my-3 pt-5 text-warning">
                Our Activities
            </div>
        </div>
    </div>

    <?php
    $count = $result->rowCount();
    if ($count > 0) {
    ?>
        <section class="gallery mt-5 mt-lg-0">
            <div class="box-container container-fluid row ml-2">

                <?php
                while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
                    $activityName = str_replace(' ', '', $row['title']);
                ?>

                    <div class="col-6 col-lg-3">
                        <div class='box d-flex flex-column shadow rounded' style='background-image:url(../imgs/activities/<?php echo $activityName . "/" . $row['image']; ?>); background-size: auto 100%;'>
                            <div class='cover mt-auto'>
                                <h4 class="name">
                                    <a href="./gallery.php?title=<?php echo (urlencode($row['title'])) ?>" class="nav-link text-white"><?php echo ($row['title']) ?></a>
                                </h4>
                                <h6 class="title"><?php echo $row['sub_title'] ?></h6>
                            </div>
                        </div>
                    </div>
            <?php
                }
                echo "
            </div>
        </section>";
            }
            ?>
            <!-- <img src="../imgs/activities/Activities & Visits/IMG-20221219-WA0017.jpg" alt="Activities & Visits"> -->
            <!-- <div class="col-6 col-lg-3">
                <div class='box d-flex flex-column' style='background-image:url(../imgs/galery/Activities&Vistis/IMG-20221218-WA0000.jpg)'>
                    <div class='cover mt-auto'>
                        <h3 class="name">Alan Harris</h3>
                        <span class="title">Manager</span>
                    </div>
                </div>
            </div>


            <div class="col-6 col-lg-3">
                <div class='box d-flex flex-column' style='background-image:url(../imgs/galery/Activities&Vistis/IMG-20221218-WA0000.jpg)'>
                    <div class='cover mt-auto'>
                        <h3 class="name">Alan Harris</h3>
                        <span class="title">Manager</span>
                    </div>
                </div>
            </div>

            <div class="col-6 col-lg-3">
                <div class='box d-flex flex-column' style='background-image:url(../imgs/galery/Activities&Vistis/IMG-20221218-WA0000.jpg)'>
                    <div class='cover mt-auto'>
                        <h3 class="name">Alan Harris</h3>
                        <span class="title">Manager</span>
                    </div>
                </div>
            </div>

            <div class="col-6 col-lg-3">
                <div class='box d-flex flex-column' style='background-image:url(../imgs/galery/Activities&Vistis/IMG-20221218-WA0000.jpg);'>
                    <div class='cover mt-auto'>
                        <h3 class="name">Alan Harris</h3>
                        <span class="title">Manager</span>
                    </div>
                </div>
            </div>

            <div class="col-6 col-lg-3">
                <div class='box d-flex flex-column' style='background-image:url(../imgs/galery/Activities&Vistis/IMG-20221218-WA0000.jpg)'>
                    <div class='cover mt-auto'>
                        <h3 class="name">Alan Harris</h3>
                        <span class="title">Manager</span>
                    </div>
                </div>
            </div>


            <div class="col-6 col-lg-3">
                <div class='box d-flex flex-column' style='background-image:url(../imgs/galery/Activities&Vistis/IMG-20221218-WA0000.jpg)'>
                    <div class='cover mt-auto'>
                        <h3 class="name">Alan Harris</h3>
                        <span class="title">Manager</span>
                    </div>
                </div>
            </div>

            <div class="col-6 col-lg-3">
                <div class='box d-flex flex-column' style='background-image:url(../imgs/galery/Activities&Vistis/IMG-20221218-WA0000.jpg)'>
                    <div class='cover mt-auto'>
                        <h3 class="name">Alan Harris</h3>
                        <span class="title">Manager</span>
                    </div>
                </div>
            </div>
        </div>
    </section> -->

            <!-- Activities End -->
            <?php
            include("whatsapp.php");
            include("footer.php"); 
            ?>