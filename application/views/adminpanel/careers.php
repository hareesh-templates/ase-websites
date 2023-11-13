 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">

        <div class="row mb-2">
          <div class="col-sm-6">
            <h5><?php echo $status; ?> Resumes</h5>
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
                    <th>Name</th>
                    <th>Email</th>
                    <th>Ph No</th>
                    <th>Content</th>
                    <th>Applied On</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                     <?php if(!empty($property)){ $i=0;  
                    foreach($property as $row){ $i++; 
                ?>
                  <tr>
                    <td><?php echo $row['name'] ; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['phno']; ?></td>
                   <td><?php echo $row['content']; ?></td>
                   <td><?php echo $row['applied_on']; ?></td>
                    <td> 
                        <a target="_blank" href="<?php echo base_url('uploads/resumes/'.$row['resume']); ?>"><span class="label label-default">View Resume</span></a>
                       </td>
                  </tr>
                   <?php } }else{ ?>
                <tr><td colspan="6">No Resumes found...</td></tr>
                <?php } ?>
                  
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