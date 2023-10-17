<?php
include 'header.php';
include_once './backend/connection.php';
$sql = "select * from blog";
$result = $conn->query($sql);
?>


<style>
    .titleClass {
        min-height: 50px;
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


<!--  ************************* Page Title Starts Here ************************** -->

<!--    Services Starts Here   -->
<section class="bg-06">
    <div class="container pt-lg-5">
        <div class="row mt-xxl-5 mt-5 mt-lg-0">
            <div class="session-title pt-md-5 ">
                <h1>Our Blog</h1>
            </div>

            <?php
            $count = $result->rowCount();
            if ($count > 0) {
                // echo '<div class="row">';
                while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
                    $date = date('M j, Y', strtotime($row['date']));
                    echo '
                        <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                            <a href="./blogDetails.php?key=' . $row['key_url'] . '">
                                <article class="blog-sub shadow">
                                    <div class="blog-content">
                                        <img src="./adminPanel/images/blogImgs/' . $row['image'] . '" alt="' . $row['image'] . '" style="width: 365px; height: 240px;">
                                    </div>
                                    <div class="blog-content-section">
                                        <div class="blo-content-title">
                                            <h4 class="titleClass my-2">' . $row['title'] . '</h4>
                                            <p class="text-wrapper">' . $row['description'] . '</p>
                                        </div>
                                        <div class="blog-admin">
                                            <ol class="d-flex justify-content-between">
                                                <li><i class="far fa-user"></i> By Admin</li>
                                                <li><i class="far fa-calendar-alt"></i>' . $date . '</li>
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
            <!-- <img src="./adminPanel/images/blogImgs/'.$row['avatar'].'" alt="'.$row['avatar'].'" width="100px" height="100px" class="rounded rounded-circle" />
            <img src="./adminPanel/images/blogImgs/'.$row['image'].'" alt="'.$row['image'].'"> -->


            <!-- <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                <a href="./blogDetails.php">
                    <article class="blog-sub">
                        <div class="blog-content">
                            <img src="./adminPanel/images/blogImgs/9A283CD7-7DCA-40EA-A514-2E0F9934E6C9.JPEG">
                        </div>
                        <div class="blog-content-section">
                            <div class="blo-content-title">
                                <h4>The National Minimum Wage Is An Important Part</h4>
                                <p>
                                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Neque at numquam, asperiores aut praesentium
                                    facilis ratione! Voluptatibus neque dignissimos ipsa atque veniam sint omnis in blanditiis, nemo fugit
                                    animi assumenda.
                                </p>
                            </div>
                            <div class="blog-admin">
                                <ol class="d-flex justify-content-between">
                                    <li><i class="far fa-user"></i> By Admin</li>
                                    <li><i class="far fa-calendar-alt"></i> jan 28, 2023</li>
                                </ol>
                            </div>
                        </div>
                    </article>
                </a>
            </div> -->


            <!-- <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                <a href="./blogDetails.php">
                    <article class="blog-sub">
                        <div class="blog-content">
                            <img src="assets/images/blog/b1.jpg">
                        </div>
                        <div class="blog-content-section">
                            <div class="blo-content-title">
                                <h4>The National Minimum Wage Is An Important Part</h4>
                                <p>
                                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Neque at numquam, asperiores aut praesentium
                                    facilis ratione! Voluptatibus neque dignissimos ipsa atque veniam sint omnis in blanditiis, nemo fugit
                                    animi assumenda.
                                </p>
                            </div>
                            <div class="blog-admin">
                                <ol class="d-flex justify-content-between">
                                    <li><i class="far fa-user"></i> By Admin</li>
                                    <li><i class="far fa-calendar-alt"></i> jan 28, 2023</li>
                                </ol>
                            </div>
                        </div>
                    </article>
                </a>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                <a href="./blogDetails.php">
                    <article class="blog-sub">
                        <div class="blog-content">
                            <img src="assets/images/blog/b2.jpg">
                        </div>
                        <div class="blog-content-section">
                            <div class="blo-content-title">
                                <h4>The National Minimum Wage Is An Important Part</h4>
                                <p>
                                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Neque at numquam, asperiores aut praesentium
                                    facilis ratione! Voluptatibus neque dignissimos ipsa atque veniam sint omnis in blanditiis, nemo fugit
                                    animi assumenda.
                                </p>
                            </div>
                            <div class="blog-admin">
                                <ol class="d-flex justify-content-between">
                                    <li><i class="far fa-user"></i> By Admin</li>
                                    <li><i class="far fa-calendar-alt"></i> july 28, 2020</li>
                                </ol>
                            </div>
                        </div>
                    </article>
                </a>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                <a href="./blogDetails.php">
                    <article class="blog-sub">
                        <div class="blog-content">
                            <img src="assets/images/blog/b3.jpg">
                        </div>
                        <div class="blog-content-section">
                            <div class="blo-content-title">
                                <h4>The National Minimum Wage Is An Important Part</h4>
                                <p>
                                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Neque at numquam, asperiores aut praesentium
                                    facilis ratione! Voluptatibus neque dignissimos ipsa atque veniam sint omnis in blanditiis, nemo fugit
                                    animi assumenda.
                                </p>
                            </div>
                            <div class="blog-admin">
                                <ol class="d-flex justify-content-between">
                                    <li><i class="far fa-user"></i> By Admin</li>
                                    <li><i class="far fa-calendar-alt"></i> july 28, 2020</li>
                                </ol>
                            </div>
                        </div>
                    </article>
                </a>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                <a href="./blogDetails.php">
                    <article class="blog-sub">
                        <div class="blog-content">
                            <img src="assets/images/blog/b4.jpg">
                        </div>
                        <div class="blog-content-section">
                            <div class="blo-content-title">
                                <h4>The National Minimum Wage Is An Important Part</h4>
                                <p>
                                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Neque at numquam, asperiores aut praesentium
                                    facilis ratione! Voluptatibus neque dignissimos ipsa atque veniam sint omnis in blanditiis, nemo fugit
                                    animi assumenda.
                                </p>
                            </div>
                            <div class="blog-admin">
                                <ol class="d-flex justify-content-between">
                                    <li><i class="far fa-user"></i> By Admin</li>
                                    <li><i class="far fa-calendar-alt"></i> july 28, 2020</li>
                                </ol>
                            </div>
                        </div>
                    </article>
                </a>
            </div> -->

        </div>
    </div>
</section>

<?php include 'whatsapp.php' ?>
<?php include 'footer.php'; ?>