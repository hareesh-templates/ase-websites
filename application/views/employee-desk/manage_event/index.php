 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">

        <div class="row mb-2">
          <div class="col-sm-6">
            <h5><?php echo $status; ?> Events</h5>
          </div>

          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <a href="<?php echo  base_url(); ?>adminpanel/manage_event/add" class="btn btn-primary">Post Event</a>
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
                    <th  width="10%"></th>
                    <th>Event Title</th>
                    <th>Area</th>
                    <th>Content</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                     <?php if(!empty($property)){ $i=0;  
                    foreach($property as $row){ $i++; 
                        $defaultImage = !empty($row['default_image'])?'<img src="'.base_url().'uploads/events/'.$row['default_image'].'" alt="" height="100px" width="100px"/>':''; 
                        $statusLink = ($row['status'] == 1)?site_url('manage_event/block/'.$row['id']):site_url('manage_event/unblock/'.$row['id']);  
                        $statusTooltip = ($row['status'] == 1)?'Click to Inactive':'Click to Active';  
                ?>
                  <tr>
                    <td><?php echo  $defaultImage; ?></td>
                    <td><?php echo $row['title'] ; ?></td>
                    <td><?php echo ucfirst($row['area']); ?></td>
                   <td><?php echo ucfirst($row['content']); ?></td>
                    <td> 
                        <a href="<?php echo base_url('adminpanel/manage_event/edit/'.$row['id']); ?>"><span class="label label-default">Edit</span></a>
                        <a href="<?php echo base_url('adminpanel/manage_event/delete/'.$row['id']); ?>"  onclick="return confirm('Are you sure to delete data?')?true:false;" ><span class="label label-danger">Delete</span></a></td>
                  </tr>
                   <?php } }else{ ?>
                <tr><td colspan="6">No events found...</td></tr>
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