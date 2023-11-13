 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">

        <div class="row mb-2">
          <div class="col-sm-6">
            <h5> Projects</h5>
          </div>

          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <?php if($user['designation'] == 'AM'){ ?>
           <a href="<?php echo  base_url(); ?>employee-desk/property/addbookingproject" class="btn btn-primary">Post Booking Project Details</a><?php } ?>
         </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
      
    </section>
   
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                  <?php if(!empty($success_msg)){ ?>
                  <div class="col-xs-12">
                      <div class="alert alert-success"><?php echo $success_msg; ?></div>
                  </div>
                  <?php }elseif(!empty($error_msg)){ ?>
                  <div class="col-xs-12">
                      <div class="alert alert-danger"><?php echo $error_msg; ?></div>
                  </div>
                  <?php } ?>
             </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Emp Name</th>
                    <th>Emp ID</th>
                    <th>Project Name</th>
                    <th>Area</th>
                    <th>Flat</th>
                    <th>Block</th>
                    <th>Floor</th>
                    <th>Status</th>
                    <th>Actions</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($bookings as $bookings) { ?>
                      <tr>
                      <td><?php echo $bookings['name']; ?></td>
                      <td><?php echo $bookings['username']; ?></td>
                      <td><?php echo $bookings['title']; ?></td>
                      <td><?php echo $bookings['location']; ?></td>
                      <td><?php echo $bookings['flatno']; ?></td>
                      <td><?php echo $bookings['block']; ?></td>
                      <td><?php echo $bookings['floor']; ?></td>
                      <td><?php echo $bookings['project_status']; ?></td>
                     
                      <td><?php if($bookings['verification'] == 'Verified'){ ?><a target="_blank" href="<?php echo site_url('employee-desk/property/bookingform/'.$bookings['date_id']); ?>" class="glyphicon glyphicon-eye-open" target="_blank"><i class="fa fa-eye" aria-hidden="true"></i></a>&nbsp;<?php } ?><a href="<?php echo site_url('employee-desk/property/editbookingproject/'.$bookings['date_id']); ?>" class="glyphicon glyphicon-eye-open"><i class="fa fa-edit" aria-hidden="true"></i></a>&nbsp;<a href="<?php echo site_url('employee-desk/property/deleteproject/'.$bookings['id']); ?>" class="glyphicon glyphicon-eye-open"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
                  </tr>
                    <?php   } ?>
                 
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>