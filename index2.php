<?php include 'header2.php'; ?>
<style type="text/css">
  .badge-danger{
    background-color: #fff;
    color: #00cccd!important;
    border: 0px;
  }
  .badge-warning{
    background-color: #fff;
    color: #ffab2d!important;
    border: 0px;
  }
  .badge-info{
    background-color: #fff;
    color: #198ae3!important;
    border: 0px;
  }
  .badge-success{
     background-color: #fff;
    color: #00cccd!important;
    border: 0px;
  }
</style>
	<div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title">My Profile</h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="edit_profile_details.php?profile_id=<?php echo $_SESSION['id']; ?>">Edit Profile</a></li>
                </ol>
              </nav>
            </div>
            <div class="row">
              
              <div class="col-lg-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    
                    <div class="table-responsive">
                      <table class="table table-hover">
                        <thead>
                          <tr>
                            <td>Name</td>
                             <td>
                              <label class="badge badge-danger"> <?php echo $name ?></label>
                            </td>
                          </tr>
                        </thead>
                        <tbody>
                          
                          <tr>
                            <td>Email</td>
                            <td>
                              <label class="badge badge-warning"><?php echo $email ?></label>
                            </td>
                          </tr>
                          <tr>
                            <td>Username</td>
                            <td>
                              <label class="badge badge-info"><?php echo $username ?></label>
                            </td>
                          </tr>
                          <tr>
                            <td>Phone</td>
                            <td>
                              <label class="badge badge-success"><?php echo $phonenumber?></label>
                            </td>
                          </tr>
                          <tr>
                            <td>Alternate Number</td>
                            <td>
                              <label class="badge badge-success"><?php echo $anternate_number ?></label>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>

               <div class="col-lg-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    
                    <div class="table-responsive">
                      <table class="table table-hover">
                        <thead>
                        	 <tr>
                            <td>Adhar Number</td>
                            <td>
                              <label class="badge badge-warning"><?php echo $adharnumber ?></label>
                            </td>
                          </tr>
                          <tr>
                            <td>PAN Number</td>
                             <td>
                              <label class="badge badge-danger"> <?php echo $pannumber ?></label>
                            </td>
                          </tr>
                           <tr>
                            <td>DOB(yyyy-mm-dd)</td>
                            <td>
                              <label class="badge badge-info"><?php echo $dob ?></label>
                            </td>
                          </tr>
                        </thead>
                        <tbody>
                          
                        
                         
                        
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>

               <div class="col-lg-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    
                    <div class="table-responsive">
                      <table class="table table-hover">
                        
                        <tbody>
                            <tr>
                            <td>Company</td>
                            <td>
                              <label class="badge badge-warning"> <?php echo $company; ?></label>
                            </td>
                          </tr>
                          <tr>
                            <td>Designation</td>
                            <td>
                              <label class="badge badge-info"><?php echo $designation ?></label>
                            </td>
                          </tr>
                          <tr>
                            <td>Joining date</td>
                            <td>
                              <label class="badge badge-warning"><?php echo $joining_date ?></label>
                            </td>
                          </tr>
                         
                          <tr>
                            <td>Office Email</td>
                            <td>
                              <label class="badge badge-success"><?php echo $ofc_email ?></label>
                            </td>
                          </tr>
                          <tr>
                            <td>Branch</td>
                            <td>
                              <label class="badge badge-warning"> <?php echo $branch ?></label>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>


               <div class="col-lg-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    
                    <div class="table-responsive">
                      <table class="table table-hover">
                        <thead>
                          <tr>
                            <td>About Previous Company</td>
                             <td>
                              <label class="badge badge-danger"> <?php echo $about_previous_company ?></label>
                            </td>
                          </tr>
                        </thead>
                        <tbody>
                          
                          <tr>
                            <td>Bank Account Number</td>
                            <td>
                              <label class="badge badge-warning"><?php echo $bank_account_number ?></label>
                            </td>
                          </tr>
                          <tr>
                            <td>IFSC</td>
                            <td>
                              <label class="badge badge-info"><?php echo $ifsc ?></label>
                            </td>
                          </tr>
                          <tr>
                            <td>Bank Holder Name</td>
                            <td>
                              <label class="badge badge-success"><?php echo $bank_holder_name ?></label>
                            </td>
                          </tr>
                         
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-lg-6 grid-margin stretch-card">
                <div class="card">
                	             
                  <div class="card-body">
                  	 <h4 class="card-title">Adhar image</h4>
                    <img src="images/adhar/<?php echo $adhar_image ?>" height='250px' width='300px'>
                    
                  </div>
                </div>
              </div>
               <div class="col-lg-6 grid-margin stretch-card">
               
                <div class="card">
                  <div class="card-body">
                  	 <h4 class="card-title">PAN image</h4>

                    <img src="images/pan/<?php echo $pan_image ?>" height='250px' width='300px'>
                    
                  </div>
                </div>
              </div>
              
             
            </div>

              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    
                    <div class="table-responsive">
                      <table class="table table-hover">
                        <thead>
                          <tr>
                            <td>Permanent Address</td>
                             <td>
                              <label class="badge badge-danger"> <?php echo $permanent_address ?></label>
                            </td>
                          </tr>
                        </thead>
                        <tbody>
                          
                           <tr>
                            <td>Present Address</td>
                            <td>
                              <label class="badge badge-warning"><?php echo $present_address ?></label>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
          </div>
         

<?php include 'footer2.php'; ?>