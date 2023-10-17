<?php
include 'header.php';
?>

<?php
include './backend/connection.php';
$key = $_GET['key'];

$sql = "SELECT * FROM blog WHERE key_url='$key'";
$result = $conn->query($sql);
while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
    $key_url = $row['key_url'];
    $title = $row['title'];
    $description = $row['description'];
    $event_date = $row['date'];
    $image = $row['image'];
    $content = $row['content'];
    $key_words = $row['key_words'];
}

$relatedBlogSql = "select * from blog";
$relatedBlogResult = $conn->query($relatedBlogSql);

?>

<style>
    .titleClass {
        min-height: 70px;
    }

    .text-wrapper {
        display: -webkit-box;
        -webkit-box-orient: vertical;
        -webkit-line-clamp: 3;
        overflow: hidden;
        text-overflow: ellipsis;
        min-height: 70px;
        margin-bottom: 2rem;
    }
</style>

<!-- Detail Start -->
<div class="container mt-5">
    <div class="row">
        <div class="col-lg-2"></div>
        <div class="col-lg-8">
            <div class="d-flex flex-column text-left mb-4">
                <h6 class="text-primary font-weight-normal text-uppercase mb-3">Blog Detail Page</h6>
                <h1 class="mb-4 section-title mt-3"><?php echo $title ?></h1>
                <div class="d-index-flex mb-2"></div>
            </div>

            <div class="mb-5">
                <div class="text-center mb-3">
                    <img class="img-fluid w-50 w-md-75" src="./adminPanel/images/blogImgs/<?php echo $image; ?>" alt="<?php echo $image; ?>">
                </div>
                <div class="text-justify">
                    <?php echo $description ?>
                    <br><br>
                    <?php echo $content ?>
                </div>
            </div>
        </div>

        <div class="mb-5 mx-n3">

            <h3 class="mb-4 ml-3 section-title">Related Post</h3>
            <section class="ftco-section">
                <div class="row">
                    <div class="col-md-12">
                        <div class="featured-carousel owl-carousel">

                            <?php
                            $relatedBlogCount = $relatedBlogResult->rowCount();
                            if ($relatedBlogCount > 0) {
                                while ($row = $relatedBlogResult->fetch(PDO::FETCH_ASSOC)) {
                                    $date = date('M j, Y', strtotime($row['date']));

                                    echo '
                                    <div class="item">
                                        <a href="./blogDetails.php?key=' . $row['key_url'] . '">
                                            <article class="blog-sub shadow">
                                                <div class="blog-content">
                                                    <img src="./adminPanel/images/blogImgs/' . $row['image'] . '" alt="' . $row['image'] . '" style="width: 350px; height: 240px;">
                                                </div>
                                                <div class="blog-content-section">
                                                    <div class="blo-content-title">
                                                        <h4 class="titleClass my-3">' . $row['title'] . '</h4>
                                                        <p class="text-wrapper">' . $row['description'] . '</p>
                                                    </div>
                                                    <div class="blog-admin">
                                                        <ol class="d-flex justify-content-between">
                                                            <li><i class="far fa-user"></i> By Admin</li>
                                                            <li><i class="far fa-calendar-alt"></i>&nbsp ' . $date . '</li>
                                                        </ol>
                                                    </div>
                                                </div>
                                            </article>
                                        </a>
                                    </div>
                                ';
                                }
                            } else {
                                echo '<p class="errors">No data found</p>';
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </section>

        </div>
    </div>
</div>

<!-- Comment form -->
<div class="container">
    <div class="bg-light p-5 mb-2">
        <h3 class="mb-4 section-title">Leave a comment</h3>
        <form action="./php/contact_form.php" method="post">
            <div class="form-group">
                <label for="name">Name *</label>
                <input type="text" name="name" class="form-control" id="name" required>
            </div>
            <div class="form-group">
                <label for="email">Email *</label>
                <input type="email" name="email" class="form-control" id="email" required>
            </div>
            <div class="form-group">
                <label for="mobile">Mobile *</label>
                <input type="text" name="mobile" class="form-control" id="mobile" required>
            </div>

            <div class="form-group">
                <label for="message">Message *</label>
                <textarea id="message" cols="30" name="message" rows="5" class="form-control" required></textarea>
            </div>
            <div class="form-group mb-0">
                <input type="submit" value="Leave a message" name="submit" class="btn btn-primary px-3">
            </div>
        </form>
    </div>
</div>
</div>
<!-- Detail End -->

<?php include 'whatsapp.php' ?>
<?php include 'footer.php'; ?>