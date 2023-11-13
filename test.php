<?php include_once("connection.php"); ?>
<!DOCTYPE HTML>
<html>

<head>
    <meta charset="utf-8" />
    <title>Blog Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>

<body>
    <?php
    $result = mysqli_query($mysqli, "SELECT blog.* FROM blog order by id desc");
    ?>

    <div class="container">
        <div class="row">
            <?php
            if (mysqli_num_rows($result) > 0) {
                while ($res = mysqli_fetch_array($result)) {
            ?>
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
                                    <button type="button" name="add_review" id="add_review_<?php echo $res['id']; ?>" data-blogid="<?php echo $res['id']; ?>" data-content='<?php echo $res["content"]; ?>' class="btn btn-primary">Review</button>
                                    <a href="#" id="now" name="now">Apply now</a>
                                </div>
                            </div>
                        </article>
                    </div>
                <?php
                }
                ?>

            <?php
            } else {
                echo 'We will update soon.';
            }
            ?>
        </div>
    </div>

</body>


<!-- Review Modal -->
<div id="review_modal" class="modal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Submit Review</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" id="blogData">
                <!-- Your review form can be added here -->
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        $('button[name="add_review"]').click(function() {
            var blogId = $(this).data("blogid");
            var title = $(this).data("title");
            var content = $(this).data("content");
            // You can populate the review modal content based on the selected blog using AJAX or other methods
            // Example: Fetch review form content for the selected blog and populate it in the modal
            // $('#review_modal .modal-body').html('Your review form content here');
            $('#blogData').html(content);
            $('#review_modal').modal('show');
        });
    });
</script>

</html>






                                            <!-- data-jobDescription="<?php echo $res['content']; ?>"  -->
                                            <!-- data-jobTitle="<?php echo $res['title']; ?>"  -->
