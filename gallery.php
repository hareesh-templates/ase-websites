<?php
include 'header.php';
include_once './backend/connection.php';
$sql = "select * from gallery";
$result = $conn->query($sql);
?>
<link rel="stylesheet" href="./assets/css/gallery.css">

<div class="container galleryRow mb-3">
  <!-- <h1>Our Gallery</h1> -->

  <?php
  $count = $result->rowCount();
  if ($count > 0) {
    echo '<div class="row">';
    while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
      echo "
        <div class='item col-12 col-sm-6 col-md-4 col-lg-3'>
          <div class='box' style='background-image:url(./adminPanel/images/galleryImgs/" . $row["image"] . ")'>
            <div class='cover'>
              <h3 class='name'>" . $row["title"] . "</h3>
              <p class='title'>Parimi's Dental Care</p>
            </div>
          </div>
        </div>
      ";
    }
    echo '</div>';
  } else {
    echo '<p class="errors">No data found</p>';
  }

  ?>
</div>


<?php include 'whatsapp.php' ?>
<?php include 'footer.php'; ?>