<?php
include_once "./backend/connection.php";
$sql = "select * from testimonials";
$result = $conn->query($sql);
?>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="./assets/css/testimonial.css">

<h2>Google Reviews</h2>
<div id="myCarousel" class="carousel slide container" data-ride="carousel">
    <!-- Wrapper for carousel items -->
    <div class="carousel-inner">

        <?php
        $count = $result->rowCount();

        while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
            if ($row["id"] == 1) {
                echo '<div class="carousel-item active">';
            } else {
                echo '<div class="carousel-item">';
            }

            echo '
                <p class="overview">
                    <b>' . $row['name'] . '</b>
                    <!-- Designation at <a href="#">Location</a>. -->
                </p>
                <div class="star-rating">
                    <ul class="list-inline">';
            for ($i = 0; $i < $row['rating']; $i++) {
                echo '<li class="list-inline-item"><i class="fa fa-star"></i></li>';
            }
            for ($j = $row['rating']; $j < 5; $j++) {
                echo '<li class="list-inline-item"><i class="fa fa-star-o"></i></li>';
            }
            echo '</ul>
                    </div>
                        <p class="testimonial">' . $row['content'] . '</p>
                    </div>
                ';
        }
        ?>
        <a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
            <i class="fa fa-angle-left"></i>
        </a>
        <a class="carousel-control-next" href="#myCarousel" data-slide="next">
            <i class="fa fa-angle-right"></i>
        </a>
    </div>
</div>