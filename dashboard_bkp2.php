
<?php include 'header2.php';
    include("connection.php");      
 ?>

 <?php
$result = mysqli_query($mysqli, "SELECT (SELECT COUNT(*) FROM daily_reports) AS daily_reports_count, (SELECT COUNT(*) FROM visits) AS visits_count, (SELECT COUNT(*) FROM f2f) AS f2f_count, (SELECT SUM(no_of_calls) FROM calls) AS calls_count");
while($res = mysqli_fetch_array($result))
{
  $daily_reports_count = $res['daily_reports_count'];
  $visits_count = $res['visits_count'];
  $f2f_count = $res['f2f_count'];
  $calls_count = $res['calls_count'];
}
 ?>

 <div class="main-panel">
          <div class="content-wrapper pb-0">
            <div class="page-header flex-wrap">
              <!--<h3 class="mb-0"> Hi, welcome back! -->
              <!--</h3>-->
             <!--  <div class="d-flex">
                <button type="button" class="btn btn-sm bg-white btn-icon-text border">
                  <i class="mdi mdi-email btn-icon-prepend"></i> Email </button>
                <button type="button" class="btn btn-sm bg-white btn-icon-text border ml-3">
                  <i class="mdi mdi-printer btn-icon-prepend"></i> Print </button>
                <button type="button" class="btn btn-sm ml-3 btn-success"> Add User </button>
              </div> -->
            </div>
            <div class="row">
              <div class="col-xl-9 stretch-card grid-margin">
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-sm-7">
                        <!--<h5>Tomorrow (13-August) Birthday</h5>-->
                       
                      </div>
                      <div class="col-sm-5 text-md-right">
                        
                      </div>
                    </div>
                    <div class="row">
                      
                      <div class="col-sm-6">
                        <div class="card mb-3 mb-sm-0">
                          <div class="card-body py-3 px-4">
                            <div class="d-flex justify-content-between align-items-end flot-bar-wrapper">
                              <div>
                                  <img src="images/rakesh.jpeg" alt="emp" width="100%" height="auto">
                                <img src="images/birthday1.gif" alt="emp"width="100%" height="auto">
                                <h3 class="m-0 survey-value" style="text-align:center;">Rakesh Sir</h3>
                                <!--<h3 class="m-0 survey-value" style="text-align:center;">Vizag Branch</h3>-->
                                <!--<h3 class="m-0 survey-value" style="text-align:center;">8978222816</h3>-->
                                <p class="text-success m-0" style="text-align:center;">Wish you many more happy returns of the day Sir. We wish you to Celebrate a lot of special Days with all of success and happiness throughout the Year.</p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                     
                     
                     
                    </div>
                  
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-lg-12 stretch-card grid-margin">
                <div class="row">
                  <div class="col-xl-12 col-md-6 stretch-card grid-margin grid-margin-sm-0 pb-sm-3">
                    <div class="card bg-warning">
                      <div class="card-body px-3 py-4">
                        <div class="d-flex justify-content-between align-items-start">
                          <div class="color-card">
                            <p class="mb-0 color-card-head">Daily Reports</p>
                            <h2 class="text-white"> <?php echo $daily_reports_count; ?>
                            </h2>
                          </div>
                          <i class="card-icon-indicator mdi mdi-basket bg-inverse-icon-warning"></i>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-12 col-md-6 stretch-card grid-margin grid-margin-sm-0 pb-sm-3">
                    <div class="card bg-danger">
                      <div class="card-body px-3 py-4">
                        <div class="d-flex justify-content-between align-items-start">
                          <div class="color-card">
                            <p class="mb-0 color-card-head">Visits</p>
                            <h2 class="text-white"> <?php echo $visits_count; ?>
                            </h2>
                          </div>
                          <i class="card-icon-indicator mdi mdi-cube-outline bg-inverse-icon-danger"></i>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-12 col-md-6 stretch-card grid-margin grid-margin-sm-0 pb-sm-3 pb-lg-0 pb-xl-3">
                    <div class="card bg-primary">
                      <div class="card-body px-3 py-4">
                        <div class="d-flex justify-content-between align-items-start">
                          <div class="color-card">
                            <p class="mb-0 color-card-head">F to F</p>
                            <h2 class="text-white"> <?php echo $f2f_count; ?>
                            </h2>
                          </div>
                          <i class="card-icon-indicator mdi mdi-briefcase-outline bg-inverse-icon-primary"></i>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-12 col-md-6 stretch-card pb-sm-3 pb-lg-0">
                    <div class="card bg-success">
                      <div class="card-body px-3 py-4">
                        <div class="d-flex justify-content-between align-items-start">
                          <div class="color-card">
                            <p class="mb-0 color-card-head">Calls</p>
                            <h2 class="text-white"><?php echo $calls_count; ?></h2>
                          </div>
                          <i class="card-icon-indicator mdi mdi-account-circle bg-inverse-icon-success"></i>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              
            </div>
           
          </div>

	
	<?php include 'footer2.php'; ?>
