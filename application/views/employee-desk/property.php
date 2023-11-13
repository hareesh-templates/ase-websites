 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">

        <div class="row mb-2">
          <div class="col-sm-6">
            <h5><?php echo $status; ?> Properties</h5>
          </div>

          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <a href="<?php echo base_url(); ?>adminpanel/property/addproperty" class="btn btn-primary">Post Property</a>
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
                    <th>Property</th>
                    <th>Area</th>
                    <th>City</th>
                    <th>District</th>
                    <th>Status</th>
                    <th>Actions</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($property as $property) { ?>
                      <tr>
                      <td><?php echo $property['title']; ?></td>
                      <td><?php echo $property['area']; ?></td>
                      <td><?php echo $property['city']; ?></td>
                      <td><?php echo $property['district']; ?></td>
                      <td> <?php if($property['status'] == 0){ echo 'Pending'; } else{ echo 'Active'; }  ?></td>
                      <td><a href="<?php echo site_url('adminpanel/property/propertyview/'.$property['status'].'/'.$property['id']); ?>" class="glyphicon glyphicon-eye-open"><i class="fa fa-eye" aria-hidden="true"></i></a><i class="fa fa-edit" aria-hidden="true"></i><i class="fa fa-trash" aria-hidden="true"></i></td>
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