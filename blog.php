<?php include 'header.php'; ?>
<?php include_once("connection.php"); ?>
<section class="page-header padding">
<div class="container">
<div class="page-content text-center">
<h2>Blogs</h2>
<p>Best Builders in Vizag</p>
</div>
</div>
</section>
<section class="blog-section padding">
<div class="container">
<div class="blog-wrap row">
<div class="col-lg-12 sm-padding">
<div class="row">
    <?php
            $result = mysqli_query($mysqli, "SELECT blog.* FROM blog order by id desc");
          ?>
          <?php
                if (mysqli_num_rows($result) > 0) {
                  while($res = mysqli_fetch_array($result)) {   ?>
<div class="col-sm-4 padding-15">
<div class="blog-item box-shadow">
<div class="blog-thumb">
<img src="./adminpanel/images/blogs/<?php echo $res['image'] ?>" >
<span class="category"><a href="#">Posted On : <?php echo $res['event_date']; ?></a></span>
</div>
<div class="blog-content">
<h3><a href="blogdetails.php?key=<?php echo $res['key_url'] ?>"><?php echo $res['title'];?></a></h3>
<a href="blogdetails.php?key=<?php echo $res['key_url'] ?>" class="read-more">Read More</a>
</div>
</div>
</div>
<?php }}else{
                echo '<span style="text-align:center;"><b>We will update soon..</b></span>';
              } ?>

</div>

</div>

</div>
</div>
</section>

<?php include 'footer.php'; ?>