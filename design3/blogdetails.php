<?php include 'header.php'; ?>
<?php include 'header_menu.php'; ?>
<?php include_once("connection.php"); $key = $_GET['key'];?>
  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Blog</h2>
          <ol>
            <li><a href="index.html">Home</a></li>
            <li><a href="blog.html">Blog</a></li>
            <!--<li>Blog Single</li>-->
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Blog Single Section ======= -->
    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-8 entries">

            <article class="entry entry-single">
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
								}
						?>
              <div class="entry-img">
                <img src="./adminpanel/images/blogs/<?php echo $image; ?>" alt="" class="img-fluid">
              </div>

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