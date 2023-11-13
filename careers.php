<?php include 'header.php'; ?>
<?php include 'header_menu.php'; ?>
<?php include_once("connection.php"); ?>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script> -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <!-- <section id="breadcrumbs" class="breadcrumbs"> -->
    <section id="breadcrumbs">
        <!-- <div class="container"> -->
        <img src="./assets/img/bg/blog.jpeg" alt="" width="100%" height="100%">

        <!-- <div class="d-flex justify-content-between align-items-center">
          <h2>Blog</h2>
          <ol>
            <li><a href="index.html">Home</a></li>
            <li>Blog</li>
          </ol>
        </div>

      </div> -->
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
                    while ($res = mysqli_fetch_array($result)) {        ?>
                        <div class="col-md-6 col-lg-4 entries">

                            <article class="entry">
                                <h2 class="entry-title">
                                    <a href="blogdetails.php?key=<?php echo $res['key_url']; ?>">
                                        <?php echo substr($res['title'], 0, 44); ?>...
                                    </a>
                                </h2>
                                <div class="entry-meta">
                                    <ul>
                                        <li class="d-flex align-items-center">
                                            <i class="bi bi-geo-alt"></i>
                                            <time datetime="2020-01-01"><?php echo $res['event_date']; ?></time>
                                        </li>
                                    </ul>
                                </div>
                                <div class="entry-content">
                                    <div class="read-more" style="justify-content: space-between;">
                                        <button type="button" 
                                            name="viewDetails" 
                                            id="viewDetails_<?php echo $res['id']; ?>" 
                                            data-careerID="<?php echo $res['id']; ?>" 
                                            data-title="<?php echo $res['title']; ?>" 
                                            data-content='<?php echo $res["content"]; ?>' 
                                            class="btn btn-primary">
                                            Read more
                                        </button>                                        
                                        <!-- <button type="button"> -->
                                            <a href="registration.php" class="applyNow">Apply Now</a>
                                        <!-- </button> -->
                                        <!-- <input type="button" value="Apply now"> -->
                                    </div>
                                </div>
                            </article><!-- End blog entry -->
                        </div>
                <?php }
                } else {
                    echo 'We will update soon.';
                } ?>
            </div>

        </div>
    </section><!-- End Career Section -->

</main><!-- End #main -->
<?php include 'footer.php'; ?>

<div id="review_modal" class="modal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Job Description</h5>
                <!-- <button type="button" class="close" data-dismiss='modal' aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button> -->
            </div>
            <div class="modal-body">
                <!-- Your review form can be added here -->
                <div><b>Title:</b> <span id="jobTitle"></span></div>
                <div><b>Description:</b> <span id="content"></span></div>
            </div>
            <div style="text-align: end; padding: 20px;">
                <a href="registration.php" style="background: #f03c02; text-align-last: right; color: #fff; padding: 6px 20px; transition: 0.3s; font-size: 14px; border-radius: 4px; margin: 20px">Apply Now</a>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        $('button[name="viewDetails"]').click(function() {
            var careerID = $(this).data("careerID");
            var jobTitle = $(this).data("title");
            var content = $(this).data("content");
            // You can populate the review modal content based on the selected blog using AJAX or other methods
            // Example: Fetch review form content for the selected blog and populate it in the modal
            // $('#review_modal .modal-body').html('Your review form content here');
            $('#jobTitle').text(jobTitle);
            $('#content').html(content);
            $('#review_modal').modal('show');
        });
    });
</script>