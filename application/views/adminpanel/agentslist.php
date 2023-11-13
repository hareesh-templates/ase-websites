 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">

        <div class="row mb-2">
          <div class="col-sm-6">
            <h5>Agents</h5>
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
                    <th>Agent Name</th>
                    <th>Area</th>
                    <th>District</th>
                    <th>Mobile</th>
                    <th>Email</th>
                    <th>Actions</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($adminusers as $users) { ?>
                      <tr>
                      <td><?php echo $users['admin_firstname'] .' '. $users['admin_lastname']; ?></td>
                      <td><?php echo $users['admin_area']; ?></td>
                      <td><?php echo $users['admin_district']; ?></td>
                      <td> <?php echo $users['admin_mobile']; ?></td>
                      <td><?php echo $users['admin_email']; ?></td>
                      <td><i class="fa fa-eye" aria-hidden="true"></i><i class="fa fa-edit" aria-hidden="true"></i><i class="fa fa-trash" aria-hidden="true"></i></td>
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