 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">

        <div class="row mb-2">
          <div class="col-sm-6">
            <h5>Employees List</h5>
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
                    <th>Designation</th>
                    <th>Incentives</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($emp_list as $emp_list) { ?>
                      <tr>
                      <td><?php echo $emp_list['name']; ?></td>
                      <td><?php echo $emp_list['username']; ?></td>
                      <td><?php echo $emp_list['designation']; ?></td>                     
                      <td><a href="<?php echo site_url('employee-desk/property/incentives/'.$emp_list['id']); ?>" class="glyphicon glyphicon-eye-open" target="_blank"><i class="fa fa-eye" aria-hidden="true"></i></a></td>
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