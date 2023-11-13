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
<!--                 <h3 class="card-title">DataTable with default features</h3>
 -->              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Project Name</th>
                    <th>Area</th>
                    <th>Actions</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($bookings as $bookings) { ?>
                      <tr>
                      <td><?php echo $bookings['project_name']; ?></td>
                      <td><?php echo $bookings['location']; ?></td>
                     
                      <td><a href="<?php echo site_url('adminpanel/property/booking_view/'.$bookings['id']); ?>" class="glyphicon glyphicon-eye-open" target="_blank"><i class="fa fa-eye" aria-hidden="true"></i></a></td>
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