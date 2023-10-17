<?php
include_once("connection.php"); 
include 'header.php';
?> 
  <section id="" class="team section-bg" style="margin-top: 80px;">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Blogs</h2>
          
        </div>

        <div class="row">
        	 <?php
            $result = mysqli_query($mysqli, "SELECT blog.* FROM blog order by id desc");
          ?>
          <?php
                if (mysqli_num_rows($result) > 0) {
                  while($res = mysqli_fetch_array($result)) {   ?>
          <div class="col-lg-6" style="margin-top: 20px;">
            <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="100">
              <img src="./adminpanel/images/blogs/<?php echo $res['image'] ?>" alt="Loans" style="height: 100px; width: 100px;">
              <div class="member-info">
                <h4><?php echo substr($res['title'] ,0,50);?>..</h4>
               <h6> <span class="label label-default"><a href="blogdetails.php?key=<?php echo $res['key_url'] ?>">Continue Reading...</a></span></h6>
               
              </div>
            </div>
          </div>
           <?php }}else{
                echo '<span style="text-align:center;"><b>We will update soon..</b></span>';
              } ?>
       


        </div>

      </div>
    </section>
<?php
include 'footer.php';
?> 