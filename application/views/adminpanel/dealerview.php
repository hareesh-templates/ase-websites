
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Profile</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">User Profile</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3">

            <!-- Profile Image -->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
               <!--  <div class="text-center">
                  <img class="profile-user-img img-fluid img-circle"
                       src="../../dist/img/user4-128x128.jpg"
                       alt="User profile picture">
                </div> -->

                <h3 class="profile-username text-center"><?php echo $dealer['admin_firstname'] .' '.$dealer['admin_lastname'] ;?></h3>

                <p class="text-muted text-center"><?php echo $dealer['admin_type']; ?></p>

                <ul class="list-group list-group-unbordered mb-3">
                  <li class="list-group-item">
                    <b>Email</b> <a class="float-right"><?php echo $dealer['admin_email']; ?></a>
                  </li>
                  <li class="list-group-item">
                    <b>Mobile</b> <a class="float-right"><?php echo $dealer['admin_mobile']; ?></a>
                  </li>
                  <li class="list-group-item">
                    <b>Area</b> <a class="float-right"><?php echo $dealer['admin_area']; ?></a>
                  </li>
                   <li class="list-group-item">
                    <b>City</b> <a class="float-right"><?php echo $dealer['admin_city']; ?></a>
                  </li>
                   <li class="list-group-item">
                    <b>District</b> <a class="float-right"><?php echo $dealer['admin_district']; ?></a>
                  </li>
                   <li class="list-group-item">
                    <b>State</b> <a class="float-right"><?php echo $dealer['admin_state']; ?></a>
                  </li>
                   <li class="list-group-item">
                    <b>Pincode</b> <a class="float-right"><?php echo $dealer['admin_pincode']; ?></a>
                  </li>
                   <li class="list-group-item">
                    <b>Company</b> <a class="float-right"><?php echo $dealer['admin_company']; ?></a>
                  </li>
                  <li class="list-group-item">
                    <b>Approval Status</b> <a class="float-right"><?php  if($dealer['status'] == 0){ ?>
                      <span class="right badge badge-danger">Pending</span>
                  <?php  }else{  ?>
                    <span class="right badge badge-success">Approved</span>
                 <?php  }
                    ; ?></a>
                  </li>
                </ul>
                <?php if($dealer['status'] == 0 && $dealer['admin_type'] == 'dealer'){ ?>
                <a href="<?php echo site_url('adminpanel/users/approvedealer/'.$dealer['id']); ?>" class="btn btn-primary btn-block"><b>Approve</b></a>
                <?php } ?>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            
            <!-- /.card -->
          </div>
        
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
 