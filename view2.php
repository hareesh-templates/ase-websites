<?php include 'header2.php'; ?>
<?php
if(!isset($_SESSION['valid'])) {
  header('Location: login.php');
}
?>


   <div class='main-panel'>
          <div class='content-wrapper'>
            <div class='page-header'>
            <nav aria-label='breadcrumb'>
                <ol class='breadcrumb'>
                </ol>
              </nav>
            </div>
            <div class='row'>
             
              <div class='col-lg-12 grid-margin stretch-card'>
                <div class='card'>
                  <div class='card-body'>
                   <div class='alert alert-success'><font color='green'>Data added successfully. </div><div class='alert alert-danger'><font color='red'>Please don't refresh this page</div>
                  </div>
                </div>
              </div>
              
         
            </div>
          </div>


<?php include 'footer2.php'; ?>

