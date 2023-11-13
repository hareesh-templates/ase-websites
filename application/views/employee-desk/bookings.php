 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">

        <div class="row mb-2">
          <div class="col-sm-6">
            <h5>Bookings</h5>
          </div>

          <div class="col-sm-6">
           
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
<!--                 <h3 class="card-title">DataTable with default features</h3>
 -->              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Emp Name</th>
                    <th>Emp ID</th>
                    <th>Project Name</th>
                    <th>Location</th>
                    <th>Area</th>
                    <th>Flat</th>
                    <th>Block</th>
                    <th>Floor</th>
                    <th>Added On</th>
                    <th>Status</th>
                    <th>Actions</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($bookings as $bookings) { ?>
                      <tr>
                      <td><?php echo $bookings['name']; ?></td>
                      <td><?php echo $bookings['username']; ?></td>
                      <td><?php echo $bookings['project_name']; ?></td>
                      <td><?php echo $bookings['location']; ?></td>
                      <td><?php echo $bookings['area_sq_yds']; ?></td>
                      <td><?php echo $bookings['flat_plot_no']; ?></td>
                      <td><?php echo $bookings['block']; ?></td>
                      <td><?php echo $bookings['floor']; ?></td>
                      <td><?php echo $bookings['added_on']; ?></td>
                      <td><?php echo $bookings['project_status']; ?></td>
                     
                      <td><a href="<?php echo site_url('employee-desk/property/booking_view/'.$bookings['date_id']); ?>" class="glyphicon glyphicon-eye-open" target="_blank"><i class="fa fa-eye" aria-hidden="true"></i></a><a href="<?php echo site_url('employee-desk/property/deletebooking/'.$bookings['id']); ?>" class="glyphicon glyphicon-eye-open"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
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