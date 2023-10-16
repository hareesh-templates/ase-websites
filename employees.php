<?php include 'header2.php'; ?>
<?php
if(!isset($_SESSION['valid'])) {
  header('Location: login.php');
}
?>

<?php
    $result = mysqli_query($mysqli, "SELECT login.* FROM login where id > 40 and status != 'inactive'");
  ?>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

   <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title">Employees</h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="inactive_employees.php">Click here for Inactive Employees</a></li>
                </ol>
              </nav>
            </div>
            <div class="row">
             
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                   
                    <div class="table-responsive">
                      <table class="table table-hover table-striped" id="dtBasicExample">
                        <thead>
    <tr>
     <tr bgcolor='#101010' style="color: #777;">
      <th>S.No</th>
      <th>Employee ID</th>
      <th>Employee Name</th>
      <th>Status</th>
      <th>Company</th>
      <th>Branch</th>
      <th>Designation</th>
      <?php  if($_SESSION['designation'] != 'HR'){ ?><th>Action</th><?php } ?>
      
    </tr>
    </tr>
  </thead>
  <tbody>
   <?php
   $i=0;
    while($res = mysqli_fetch_array($result)) {   
        $i++;
      if($res['company'] == 'eh'){
        $company = 'Eswari Homes';
      }
      else if($res['company'] == 'at'){
        $company = 'ASE Technologies';
      }
      else if($res['company'] == 'ec'){
        $company = 'Esawri Capital';
      }
      else if($res['company'] == 'ec'){
        $company = 'Esawri Capital';
      }
      else if($res['company'] == 'ai'){
        $company = 'ASE Infra';
      }
      else{
        $company = 'Eswari Group';
      }

      echo "<tr>";
      echo "<td>".$i."</td>";
      echo "<td>".$res['username']."</td>";
      echo "<td>".$res['name']."</td>";
      echo "<td>".$res['status']."</td>";
      echo "<td>".$company."</td>";
      echo "<td>".$res['branch']."</td>";
      echo "<td>".$res['designation']."</td>";
      if($_SESSION['designation'] != 'HR'){ echo "<td><span class='badge badge-warning'><a href=\"view_profile_details.php?profile_id=$res[id]\" style='color:#fff;'>View Profile</a></span>| <span class='badge badge-danger'><a href=\"delete_profile.php?profile_id=$res[id]\" style='color:#fff;' onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a><pan></td>"; }
    }
    ?>
  </tbody>
  
</table>
                    </div>
                  </div>
                </div>
              </div>
              
         
            </div>
          </div>

<script type="text/javascript">
$(document).ready(function () {
  $('#dtBasicExample').DataTable();
  $('.dataTables_length').addClass('bs-select');
});
</script>

<?php include 'footer2.php'; ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.2/css/jquery.dataTables.min.css">
<script type="text/javascript" src="https://cdn.datatables.net/1.10.2/js/jquery.dataTables.min.js"></script>
<script src="csvExport.js"></script>
<script>
$( "#export" ).click(function() {
  $('table').csvExport();
});
</script>

