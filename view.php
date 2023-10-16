<?php include 'header2.php'; ?>
<?php
if(!isset($_SESSION['valid'])) {
  header('Location: login.php');
}
?>

<?php
//including the database connection file
include_once("connection.php");


if($_SESSION['designation'] == 'RM' || $_SESSION['designation'] == 'EX'){
$result = mysqli_query($mysqli, "SELECT products.*,login.name as empname FROM products join login on login.id=products.login_id WHERE login_id=".$_SESSION['id']." ORDER BY id DESC");
}
else if($_SESSION['designation'] == 'AM'){
$result = mysqli_query($mysqli, "SELECT products.*,login.name as empname FROM products join login on login.id=products.login_id WHERE report=".$_SESSION['id']." ORDER BY id DESC");
}
else if($_SESSION['designation'] == 'ABM'){
  $result = mysqli_query($mysqli, "SELECT products.*,login.name as empname FROM products join login on login.id=products.login_id WHERE report in (SELECT id from login WHERE report = ".$_SESSION['id'].")  ORDER BY id DESC");
    }
else if($_SESSION['designation'] == 'BM'){
  $result = mysqli_query($mysqli, "SELECT products.*,login.name as empname FROM products join login on login.id=products.login_id WHERE  report in (SELECT id from login WHERE report in (SELECT id from login WHERE report =  ".$_SESSION['id'].")) OR report =  ".$_SESSION['id']." OR report in (SELECT id FROM login WHERE report= ".$_SESSION['id']." )  ORDER BY id DESC");
    }
  
else{
  $result = mysqli_query($mysqli, "SELECT products.*,login.name as empname FROM products join login on login.id=products.login_id ORDER BY id DESC");
}
?>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

   <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title">ASE Technologies - Tasks</h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <?php if($_SESSION['role'] == ''){ ?>  <li class="breadcrumb-item"><a href="addtask.php">Add New Task</a></li> <?php } ?>
                  <li class="breadcrumb-item"><a href="#" id="export">Export</a> </li>
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
     <th>Employee</th>
      <th>Task</th>
      <th>Upload</th>
      <!-- <td>Quantity</td>
      <td>Price (euro)</td> -->
      <th>Assigned On</th>
      <!--<th>Status</th>-->
      <?php //  if($_SESSION['designation'] != 'HR'){ ?>
      <!--<th>Update</th> -->
      <?php// } ?>
    </tr>
  </thead>
  <tbody>
    <?php
    while($res = mysqli_fetch_array($result)) {   
      echo "<tr>";
      echo "<td>".$res['empname']."</td>";
      echo "<td>".$res['name']."</td>";
      echo "<td>".$res['upload_type']."</td>";
      // echo "<td>".$res['qty']."</td>";
      // echo "<td>".$res['price']."</td>"; 
      echo "<td>".$res['added_date']."</td>"; 
    //  echo "<td>".$res['status']."</td>"; 
    //   if($_SESSION['designation'] != 'HR'){
    //   if($_SESSION['role'] == 'admin' || $_SESSION['role'] == 'superadmin'){
    //     echo "<td><span class='badge badge-danger'><a href=\"delete.php?id=$res[id]\" style='color:#fff;' onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a><pan></td>";
    //   }else{
    //   if($res['status'] == 'Pending'){
    //     echo "<td><span class='badge badge-danger'>Waiting for approval</span></td>";
    //   }else{
    //   echo "<td><span class='badge badge-warning'><a href=\"edit.php?id=$res[id]\" style='color:#fff;'>Edit</a></span> | <span class='badge badge-danger'><a href=\"delete.php?id=$res[id]\" style='color:#fff;' onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a><pan></td>";  
    //   }
    //   } 
    // }
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

