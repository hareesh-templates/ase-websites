<?php include 'include/header.php'; ?>
<?php $header_images = $conn->query("SELECT * FROM header_images where id='10' ");
$header_images_row = $header_images->fetch(PDO::FETCH_ASSOC); ?>
<!--Page Title-->
<section class="page-title" style="background-image: url(uploads/<?php echo $header_images_row['image']; ?>);">
    <div class="auto-container">
        <div class="title-outer">
            <h1><?php echo $header_images_row['title']; ?></h1>
            <!--<ul class="page-breadcrumb">
                    <li><a href="index">Home</a></li>
                    <li><?php echo $header_images_row['title']; ?></li>
                </ul>-->
        </div>
    </div>
</section>
<!--End Page Title-->

<!-- Services Section -->
<section class="services-section-two">
    <div class="auto-container">

        <div class="carousel-outer">
            <div class="row">
                <?php $blog = $conn->query("SELECT * FROM  blog");
                while ($blogDetail = $blog->fetch(PDO::FETCH_ASSOC)) { ?>
                    <!-- service Block -->
                    <div class="service-block-two col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><img src="uploads/blog/<?php echo $blogDetail['image']; ?>" alt=""></figure>
                            </div>
                            <div class="lower-content">
                                <div class="title-box">
                                    <h4><a href="blog-detail.php?key=<?php echo $blogDetail['key_url'] ?>"><?php echo $blogDetail['title']; ?></a></h4>
                                </div>
                                <div class="text"><?php echo $blogDetail['description']; ?></div>
                                <span class="icon-right flaticon-heart-2"></span>
                            </div>
                        </div>
                    </div>

                <?php } ?>

            </div>
        </div>
    </div>
</section>
<!-- End service Section -->
<?php include 'include/footer.php'; ?>