<?php include 'header.php'; ?>
<?php include 'header_menu.php'; ?>
<?php include_once("connection.php"); ?>
  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Blog</h2>
          <ol>
            <li><a href="index.html">Home</a></li>
            <li>Blog</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Blog Section ======= -->
    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">
          <?php
				$result = mysqli_query($mysqli, "SELECT blog.* FROM blog order by id desc");
			?>
        <div class="row">
        <?php
       if (mysqli_num_rows($result) > 0) {
		while($res = mysqli_fetch_array($result)) {		?>
          <div class="col-lg-6 entries">

            <article class="entry">

              <!--<div class="entry-img">-->
              <!-- <img src="./adminpanel/images/blogs/<?php echo $res['image'] ?>" alt="" class="img-fluid">-->
              <!--</div>-->

              <h2 class="entry-title">
                <a href="blogdetails.php?key=<?php echo $res['key_url'] ?>"><?php echo substr($res['title'] ,0,44);?>...</a>
              </h2>

              <div class="entry-meta">
                <ul>
                 
                  <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="blogdetails.php?key=<?php echo $res['key_url'] ?>"><time datetime="2020-01-01"><?php echo $res['event_date'] ?></time></a></li>
                 
                </ul>
              </div>

              <div class="entry-content">
                <!--<p>-->
                <!--  Similique neque nam consequuntur ad non maxime aliquam quas. Quibusdam animi praesentium. Aliquam et laboriosam eius aut nostrum quidem aliquid dicta.-->
                <!--  Et eveniet enim. Qui velit est ea dolorem doloremque deleniti aperiam unde soluta. Est cum et quod quos aut ut et sit sunt. Voluptate porro consequatur assumenda perferendis dolore.-->
                <!--</p>-->
                <div class="read-more">
                  <a href="blogdetails.php?key=<?php echo $res['key_url'] ?>">Read More</a>
                </div>
              </div>

            </article><!-- End blog entry -->
            </div>
            	<?php }}else{
            		echo 'We will update soon.';
            	} ?>
    
        </div>

      </div>
    </section><!-- End Blog Section -->

  </main><!-- End #main -->
<?php include 'footer.php'; ?>