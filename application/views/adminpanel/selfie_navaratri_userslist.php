 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">

        <div class="row mb-2">
          <div class="col-sm-6">
            <h5>Contest Selfie Users List</h5>
          </div>

          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
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
<!--                 <h3 class="card-title">DataTable with default features</h3>
 -->              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Pic</th>
                    <th>Name</th>
                    <th>Mobile</th>
                    <th>Email</th>
                    <th>Customer Type</th>
                    <th>Added On</th>
                    <th>Contest</th>
                    <th>Actions</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($users as $users) {
                      if($users['customer_type'] == 1){
                        $users['customer_type'] == 'Existing customer';
                      }
                       if($users['customer_type'] == 2){
                        $users['customer_type'] == 'New customer';
                      }

                     ?>
                      <tr>
                      <td><img src="<?php echo base_url() ?>uploads/selfie_pic/<?php echo $users['pic']; ?>" width="50px" height="50px"></td>
                      <td><?php echo $users['name']; ?></td>
                      <td><?php echo $users['mobile']; ?></td>
                      <td><?php echo $users['email']; ?></td>
                      <td><?php echo $users['customer_type']; ?></td>
                      <td><?php echo $users['added_on']; ?></td>
                      <td><?php echo $users['contest']; ?></td>
                       <td><a href="<?php echo site_url('adminpanel/users/selfie_navaatri_user_details/'.$users['id']); ?>" class="glyphicon glyphicon-eye-open"><i class="fa fa-eye" aria-hidden="true"></i></a></td>
                     
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