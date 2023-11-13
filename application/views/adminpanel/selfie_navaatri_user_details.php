
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Selfie Pic</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Selfie Pic</li>
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
                

                <h3 class="profile-username text-center"><?php echo $user['name'] ;?></h3>

                <p class="text-muted text-center"><?php echo $user['customer_type']; ?></p>

                <ul class="list-group list-group-unbordered mb-3">
                  <li class="list-group-item">
                    <b>Email</b> <a class="float-right"><?php echo $user['email']; ?></a>
                  </li>
                  <li class="list-group-item">
                    <b>Mobile</b> <a class="float-right"><?php echo $user['mobile']; ?></a>
                  </li>
                  <li class="list-group-item">
                    <b>Project Name</b> <a class="float-right"><?php echo $user['project_name']; ?></a>
                  </li>
                   <li class="list-group-item">
                    <b>Flat Number</b> <a class="float-right"><?php echo $user['flat_number']; ?></a>
                  </li>
                   <li class="list-group-item">
                    <b>Wish to buy a property</b> <a class="float-right"><?php echo $user['wish_to_buy_a_property']; ?></a>
                  </li>
                   <li class="list-group-item">
                    <b>Area</b> <a class="float-right"><?php echo $user['area']; ?></a>
                  </li>
                   <li class="list-group-item">
                    <b>Flat</b> <a class="float-right"><?php echo $user['flat']; ?></a>
                  </li>
                   <li class="list-group-item">
                    <b>Budget</b> <a class="float-right"><?php echo $user['budget']; ?></a>
                  </li>
                   <li class="list-group-item">
                    <b>Added on</b> <a class="float-right"><?php echo $user['added_on']; ?></a>
                  </li>
                   <li class="list-group-item">
                    <b>Contest</b> <a class="float-right"><?php echo $user['contest']; ?></a>
                  </li>
                  <div class="text-center">
                  <img src="<?php echo base_url() ?>uploads/selfie_pic/<?php echo $user['pic']; ?>" width="auto" height="500px">
                </div>
                </ul>
              
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
 