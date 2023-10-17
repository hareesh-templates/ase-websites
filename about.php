<?php include 'header.php'; ?>
<?php include 'connection.php'; ?>
<section class="page-header padding">
<div class="container">
<div class="page-content text-center">
<h2>About us</h2>
<p>Best Builders in Vizag</p>
</div>
</div>
</section>
<section class="about-section padding">
<div class="container">
<div class="row about-wrap">
<div class="col-lg-6 sm-padding">
<div class="about-content wow fadeInLeft">
    <?php
        $result1 = mysqli_query($mysqli, "SELECT * FROM aboutus WHERE id=1");
        while($res1 = mysqli_fetch_array($result1))
        {
            $title1 = $res1['title'];
            $content1 = $res1['content'];
        }

         $result2 = mysqli_query($mysqli, "SELECT * FROM aboutus WHERE id=2");
        while($res2 = mysqli_fetch_array($result2))
        {
            $title2 = $res2['title'];
            $content2 = $res2['content'];
        }

         $result3 = mysqli_query($mysqli, "SELECT * FROM aboutus WHERE id=3");
        while($res3 = mysqli_fetch_array($result3))
        {
            $title3 = $res3['title'];
            $content3 = $res3['content'];
        }

         $result4 = mysqli_query($mysqli, "SELECT * FROM aboutus WHERE id=4");
        while($res4 = mysqli_fetch_array($result4))
        {
            $title4 = $res4['title'];
            $content4 = $res4['content'];
        }

         $result5 = mysqli_query($mysqli, "SELECT * FROM aboutus WHERE id=5");
        while($res5 = mysqli_fetch_array($result5))
        {
            $title5 = $res5['title'];
            $content5 = $res5['content'];
        }
    ?>
<h2><?php echo $title1; ?></h2>
<p><?php echo $content1; ?> </p>
</div>
</div>
<div class="col-lg-6 sm-padding">
<ul class="about-promo">
<li class="about-promo-item wow fadeInUp">
<i class="flaticon-factory"></i>
<div>
<h3><?php echo $title2; ?></h3>
<p><?php echo $content2; ?></p>
</div>
</li>
<li class="about-promo-item wow fadeInUp" data-wow-delay="300ms">
<i class="flaticon-worker"></i>
<div>
<h3><?php echo $title3; ?></h3>
<p><?php echo $content3; ?></p>
</div>
</li>
<li class="about-promo-item wow fadeInUp" data-wow-delay="500ms">
<i class="flaticon-gear"></i>
<div>
<h3><?php echo $title4; ?></h3>
<p><?php echo $content4; ?> </p>
</div>
</li>
</ul>
 </div>
</div>
</div>
</section>
<section class="work-pro-section padding">
<div class="container">
<div class="row">
<div class="col-lg-3 col-sm-6 sm-padding">
<div class="work-pro-item text-center">
<span class="number">1</span>
<div class="number-line"></div>
<h3>Planning & Research</h3>
<p>Our projects are an output of proper planning and intricate research. </p>
</div>
</div>
<div class="col-lg-3 col-sm-6 sm-padding">
<div class="work-pro-item text-center">
<span class="number">2</span>
<div class="number-line"></div>
<h3>Design & Ideas</h3>
<p>Your delineations, matched with our ideas, lead to eccentric and sensational end product.</p>
</div>
</div>
<div class="col-lg-3 col-sm-6 sm-padding">
<div class="work-pro-item text-center">
<span class="number">3</span>
<div class="number-line"></div>
<h3>Specialized Projects</h3>
<p>Quirky projects are key to outstanding and unexpected results.</p>
</div>
</div>
<div class="col-lg-3 col-sm-6 sm-padding">
<div class="work-pro-item text-center">
<span class="number">4</span>
<h3>Final Outputs</h3>
<p>Surprising outputs to leave our clients in awe.</p>
</div>
</div>
</div>
</div>
</section>
<section class="content-section padding">
<div class="container">
<div class="row content-wrap">
<div class="col-lg-6 sm-padding wow fadeInLeft" data-wow-delay="100ms">
<img class="box-shadow" src="img/content-1.jpg" alt="img">
</div>
<div class="col-lg-6 sm-padding">
<div class="content-info wow fadeInRight" data-wow-delay="300ms">
<span>Explore The Features</span>
<h2><?php echo $title5; ?></h2>
<p><?php echo $content5; ?> </p>
</div>
</div>
</div>
</div>
</section>

<?php include 'footer.php'; ?>