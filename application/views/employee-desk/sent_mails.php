 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">

        <div class="row mb-2">
          <div class="col-sm-6">
            <h5> Sent Mails</h5>
          </div>

          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <?php if($user['designation'] == 'BM' || $user['designation'] == 'ABM' || $user['designation'] == 'AM'){ ?>
           <a href="<?php echo  base_url(); ?>employee-desk/property/add_send_mail" class="btn btn-primary">Send Mail to Customer</a><?php } ?>
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
                    <th>Employee Name</th>
                    <th>Employee ID</th>
                    <th>Customer Name</th>
                    <th>Email</th>
                    <th>Sent On</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($bookings as $bookings) { ?>
                      <tr>
                      <td><?php echo $bookings['name']; ?></td>
                      <td><?php echo $bookings['username']; ?></td>
                      <td><?php echo $bookings['customer_name']; ?></td>
                      <td><?php echo $bookings['customer_email']; ?></td>
                      <td><?php echo $bookings['sent_on']; ?></td>
                                          
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