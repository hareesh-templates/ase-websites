
 
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  


<div class="container" style="margin-top: 30px;">
  <a href="<?php echo  base_url(); ?>manage_property/add" class="btn btn-primary pull-right" >Add Property</a>
  <div class="panel-group" style="margin-top: 50px;">
    <div class="panel panel-primary">
      <div class="panel-heading">My Properties </div>
      <div class="panel-body">

          <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th  width="10%"></th>
                    <th>Property</th>
                    <th>Area</th>
                    <th>Satus</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                     <?php if(!empty($property)){ $i=0;  
                    foreach($property as $row){ $i++; 
                        $defaultImage = !empty($row['default_image'])?'<img src="'.base_url().'uploads/images/'.$row['default_image'].'" alt="" />':''; 
                        $statusLink = ($row['status'] == 1)?site_url('manage_gallery/block/'.$row['id']):site_url('manage_gallery/unblock/'.$row['id']);  
                        $statusTooltip = ($row['status'] == 1)?'Click to Inactive':'Click to Active';  
                ?>
                  <tr>
                    <td><?php echo  $defaultImage; ?></td>
                    <td><?php echo $row['title'] ; ?></td>
                    <td><?php echo ucfirst($row['area']); ?></td>
                    <td><?php
                        if($row['status'] == 0){
                            echo 'Pending';
                        }else{
                            echo 'Active';
                        }?>
                    <td> <a href="#"><span class="label label-info">View</span></a></a>
                        <a href="<?php echo base_url('manage_property/edit/'.$row['id']); ?>"><span class="label label-default">Edit</span></a>
                        <a href="<?php echo base_url('manage_property/delete/'.$row['id']); ?>"  onclick="return confirm('Are you sure to delete data?')?true:false;" ><span class="label label-danger">Delete</span></a></td>
                  </tr>
                   <?php } }else{ ?>
                <tr><td colspan="6">No properties found...</td></tr>
                <?php } ?>
                  
                  </tbody>
                  
                </table>
             
      </div>
    </div>
</div>
</div>


<script src="<?php echo base_url(); ?>assets/admin/plugins/jquery/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>assets/admin/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url(); ?>assets/admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>

<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true,
      "autoWidth": false,
    });
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
    
