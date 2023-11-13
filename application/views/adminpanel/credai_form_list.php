
<link rel="shortcut icon" href="https://eswarihomes.com//assets/images/E.png" type="image/x-icon">
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">

        <div class="row mb-2">
          <div class="col-sm-6">
            <h5>CREDAI Form Users List</h5>
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
                    <th>Name</th>
                    <th>Mobile</th>
                    <th>Property</th>
                    <th>Location</th>
                    <th>Budget</th>
                    <th>Team</th>
                    <th>Employee</th>
                    <th>Added On</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($users as $users) {
                     ?>
                      <tr>
                      <td><?php echo $users['name']; ?></td>
                      <td><?php echo $users['mobile']; ?></td>
                      <td><?php echo $users['property']; ?></td>
                      <td><?php echo $users['location']; ?></td>
                      <td><?php echo $users['budget']; ?></td>
                      <td><?php echo $users['team']; ?></td>
                      <td><?php echo $users['employee']; ?></td>
                      <td><?php echo $users['added_on']; ?></td>
                     
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