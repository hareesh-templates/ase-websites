 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">

        <div class="row mb-2">
          <div class="col-sm-6">
            <h5><?php echo $status; ?> Feedback User</h5>
          </div>

          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <a href="<?php echo  base_url(); ?>adminpanel/manage_feedback/add" class="btn btn-primary">Post Feedback User</a>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
      
    </section>
    <?php  
        if(!empty($success_msg)){ 
            echo '<p class="status-msg success">'.$success_msg.'</p>'; 

        }elseif(!empty($error_msg)){ 
            echo '<p class="status-msg error">'.$error_msg.'</p>'; 
        } 
    ?>
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
                    <th>Mobile</th>
                    <th>Ans1</th>
                    <th>Ans2</th>
                    <th>Ans3</th>
                    <th>Ans4</th>
                    <th>Ans5</th>
                    <th>Ans6</th>
                  </tr>
                  </thead>
                  <tbody>
                     <?php if(!empty($property)){ $i=0;  
                    foreach($property as $row){ $i++; 
                      
                ?>
                  <tr>
                    <td><?php echo $row['name'] ; ?></td>
                    <td><?php echo $row['email']; ?></td>
                   <td><?php echo  $row['mobile']; ?></td>
                   <td><?php echo  $row['ans1']; ?></td>
                   <td><?php echo  $row['ans2']; ?></td>
                   <td><?php echo  $row['ans3']; ?></td>
                   <td><?php echo  $row['ans4']; ?></td>
                   <td><?php echo  $row['ans5']; ?></td>
                   <td><?php echo  $row['ans6']; ?></td>
                   
                  </tr>
                   <?php } }else{ ?>
                <tr><td colspan="6">No feddbacks found...</td></tr>
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