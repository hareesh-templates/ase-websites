<?php include 'header2.php'; ?>
<?php
if(!isset($_SESSION['valid'])) {
	header('Location: login.php');
}
?>
<style type="text/css">
	.hide {
     display: none;
}
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
 
<div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                 <?php if($_SESSION['role'] == ''){ ?> <li class="breadcrumb-item"><a href="addvisit.php">Add New Vists</a></li>	<?php } ?>
                </ol>
              </nav>
            </div>
            <div class="row">
             
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                  	<h4 class="card-title">Search Reports</h4>
                    
                    <form class="form-inline">
                        <div class="form-group">
                            <div class="form-check">
                              <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios1" value="" onclick="show1();" /> Branch </label>
                            </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                             <div class="form-check">
                              <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios1" value="" onclick="show2();" /> Designation </label>
                            </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            
                           
                           
                          </div>
                          
                    </form>
                    <form class="form-inline" method="post">
                     	<div  id="branch_radio" class="hide">
                     <div class="form-group">
                     	 <div class="form-check">
                            <select class="form-control" style="background-color:1px solid;" name="dropdown_branch" required>
                            	<option value="">Select Branch</option>
                            	<option value="C-OFFICE">C-OFFICE</option>
                              <option value="GAJUWAKA">GAJUWAKA</option>
                              <option value="HYDERABAD">HYDERABAD</option>
                              <option value="Rajahmundry">Rajahmundry</option>
                            	<option value="VIJAYAWADA">VIJAYAWADA</option>
                            	<option value="Vizag">Vizag</option>
                            </select>
                           </div>
                           </div>
                           <div class="form-group"><input type="submit" name="btn_serachby_branch" class="btn btn-primary" value="Search"></div>
                          </div>
                      </form>
                     
                     <form class="form-inline">
                     	<div  id="designation_radio" class="hide">
                     <div class="form-group">
                            <div class="form-check">
                              <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="optionsRadio" id="optionsRadios1" value=""  onclick="show4();" /> BM </label>
                            </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                             <div class="form-check">
                              <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="optionsRadio" id="optionsRadios1" value="" onclick="show5();"/> ABM </label>
                            </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                             <div class="form-check">
                              <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="optionsRadio" id="optionsRadios1" value="" onclick="show6();"/> AM </label>
                            </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                             <div class="form-check">
                              <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="optionsRadio" id="optionsRadios1" value="" onclick="show7();"/> RM </label>
                            </div>
                           
                           </div>
                          </div>
                      </form>
                      <form class="form-inline" method="post">
                     	<div  id="bm_radio" class="hide">
                     <div class="form-group">
                     	 <div class="form-check">
                            <select class="form-control" style="background-color:1px solid;" required name="dropdown_bm">
                              <option value="">Select BM</option>
                              <?php $result2 = mysqli_query($mysqli, "SELECT login.* FROM login where id > 40 and status != 'inactive' and designation='BM'"); 
                                while($res2 = mysqli_fetch_array($result2)) {
                              ?>
                            	<option value="<?php echo $res2['id']?>"><?php echo $res2['name']?></option>
                            <?php } ?>
                            </select>
                           </div>
                           </div>
                            <div class="form-group"><input type="submit" name="btn_serachby_bm" class="btn btn-primary" value="Search"></div>
                          </div>
                      </form>
                       <form class="form-inline" method="post">
                     	<div  id="abm_radio" class="hide">
                     <div class="form-group">
                     	 <div class="form-check">
                            <select class="form-control" style="background-color:1px solid;" required name="dropdown_abm">
                            	 <option value="">Select ABM</option>
                              <?php $result3 = mysqli_query($mysqli, "SELECT login.* FROM login where id > 40 and status != 'inactive' and designation='ABM'"); 
                                while($res3 = mysqli_fetch_array($result3)) {
                              ?>
                              <option value="<?php echo $res3['id']?>"><?php echo $res3['name']?></option>
                            <?php } ?>
                            </select>
                           </div>
                           </div>
                           <div class="form-group"><input type="submit" name="btn_serachby_abm" class="btn btn-primary" value="Search"></div>
                          </div>
                      </form>
                       <form class="form-inline" method="post">
                     	<div  id="am_radio" class="hide">
                     <div class="form-group">
                     	 <div class="form-check">
                            <select class="form-control" style="background-color:1px solid;" required name="dropdown_am">
                            	 <option value="">Select AM</option>
                              <?php $result4 = mysqli_query($mysqli, "SELECT login.* FROM login where id > 40 and status != 'inactive' and designation='AM'"); 
                                while($res4 = mysqli_fetch_array($result4)) {
                              ?>
                              <option value="<?php echo $res4['id']?>"><?php echo $res4['name']?></option>
                            <?php } ?>
                            </select>
                           </div>
                           </div>
                           <div class="form-group"><input type="submit" name="btn_serachby_am" class="btn btn-primary" value="Search"></div>
                          </div>
                      </form>
                       <form class="form-inline" method="post">
                     	<div  id="rm_radio" class="hide">
                     <div class="form-group">
                     	 <div class="form-check">
                            <select class="form-control" style="background-color:1px solid;" required name="dropdown_rm">
                            	 <option value="">Select RM</option>
                              <?php $result5 = mysqli_query($mysqli, "SELECT login.* FROM login where id > 40 and status != 'inactive' and company='eh' and (designation='RM' or designation='EX')"); 
                                while($res5 = mysqli_fetch_array($result5)) {
                              ?>
                              <option value="<?php echo $res5['id']?>"><?php echo $res5['name']?></option>
                            <?php } ?>
                            </select>
                           </div>
                           </div>
                           <div class="form-group"><input type="submit" name="btn_serachby_rm" class="btn btn-primary" value="Search"></div>
                          </div>
                      </form>
                      <?php 
      if(isset($_POST['btn_serachby_branch'])){
          $dropdown_branch = $_POST['dropdown_branch'];
          $result = mysqli_query($mysqli, "SELECT daily_reports.*,login.name as empname FROM daily_reports join login on login.id=daily_reports.added_by where login.status='active' AND login.branch='$dropdown_branch' ORDER BY id DESC;");
      echo "<h3>Search by Branch:  $dropdown_branch</h3>";
    }

    else if(isset($_POST['btn_serachby_bm'])){
     $dropdown_bm = $_POST['dropdown_bm']; 
     $result_name = mysqli_query($mysqli, "SELECT login.* FROM login where id = ".$dropdown_bm." ORDER BY id DESC");
        while($res_name = mysqli_fetch_array($result_name))
          {
            $empname = $res_name['name'];
          }
     $result = mysqli_query($mysqli, "SELECT daily_reports.*,login.name as empname FROM daily_reports join login on login.id=daily_reports.added_by WHERE report in (SELECT id from login WHERE report in (SELECT id from login WHERE report =  ".$_SESSION['id'].")) OR report =  ".$dropdown_bm." OR report in (SELECT id FROM login WHERE report= ".$dropdown_bm." )  and login.status='active' ORDER BY id DESC");
      echo "<h3>Search by BM:  $empname</h3>";
   }

   else if(isset($_POST['btn_serachby_abm'])){
      $dropdown_abm = $_POST['dropdown_abm'];
      $result_name = mysqli_query($mysqli, "SELECT login.* FROM login where id = ".$dropdown_abm." ORDER BY id DESC");
        while($res_name = mysqli_fetch_array($result_name))
          {
            $empname = $res_name['name'];
          }
      $result = mysqli_query($mysqli, "SELECT daily_reports.*,login.name as empname FROM daily_reports join login on login.id=daily_reports.added_by WHERE report in (SELECT id from login WHERE report = ".$dropdown_abm.") or report=".$dropdown_abm."  and login.status='active' ORDER BY id DESC");
       echo "<h3>Search by ABM:  $empname</h3>";
    }

    else if(isset($_POST['btn_serachby_am'])){
      $dropdown_am = $_POST['dropdown_am']; 
      $result_name = mysqli_query($mysqli, "SELECT login.* FROM login where id = ".$dropdown_am." ORDER BY id DESC");
        while($res_name = mysqli_fetch_array($result_name))
          {
            $empname = $res_name['name'];
          }
      $result = mysqli_query($mysqli, "SELECT daily_reports.*,login.name as empname FROM daily_reports join login on login.id=daily_reports.added_by WHERE report=".$dropdown_am."  and login.status='active' ORDER BY id DESC");
       echo "<h3>Search by AM:  $empname</h3>";
    }

    else if(isset($_POST['btn_serachby_rm'])){
      $dropdown_rm = $_POST['dropdown_rm'];
      $result_name = mysqli_query($mysqli, "SELECT login.* FROM login where id = ".$dropdown_rm." ORDER BY id DESC");
        while($res_name = mysqli_fetch_array($result_name))
          {
            $empname = $res_name['name'];
          }
      $result = mysqli_query($mysqli, "SELECT daily_reports.*,login.name as empname FROM daily_reports join login on login.id=daily_reports.added_by WHERE added_by=".$dropdown_rm."  and login.status='active' ORDER BY id DESC");
       echo "<h3>Search by RM:  $empname</h3>";
    }
 ?>
 <?php if(isset($_POST['btn_serachby_branch']) || isset($_POST['btn_serachby_bm']) || isset($_POST['btn_serachby_abm']) || isset($_POST['btn_serachby_am']) || isset($_POST['btn_serachby_rm'])){ ?>
    <div class="table-responsive"> 
      <table class="table table-hover table-striped table-responsive" id="dtBasicExample">
     <thead>  
    <tr bgcolor='#101010' style="color: #777;">
      <th>Employee</th>
      <th>Added On</th>
      <th>Location</th>
      <th>New Leads</th>
      <th>Sales</th>
      <th>AM Status</th>
      <th>ABM Status</th>
      <th>BM Status</th>
       <th>Actions</th> 
    </tr>
  </thead>
  <tbody>
    <?php
    while($res = mysqli_fetch_array($result)) {   
      echo "<tr>";
      echo "<td>".$res['empname']."</td>";
      echo "<td>".$res['applied_on']."</td>";
      echo "<td>".$res['location']."</td>";
      echo "<td>".$res['new_leads']."</td>";  
      echo "<td>".$res['sales']."</td>";  
      echo "<td>".$res['am_verification']."</td>";  
      echo "<td>".$res['abm_verification']."</td>"; 
      echo "<td>".$res['bm_verification']."</td>";  
      echo "<td><span class='badge badge-warning'><a href=\"view_dailyreport_details.php?daily_reports_id=$res[id]\" style='color:#fff;'>View</a></span></td>"; 
    }
    ?>
  </tbody>
  </table>
</div>
<?php } ?>



                  </div>
              </div>
          </div>
      </div>
  </div>
</div>

<script type="text/javascript">
	function show1(){
	  document.getElementById('branch_radio').style.display ='block';
	  document.getElementById('designation_radio').style.display ='none';
	  document.getElementById('employee_radio').style.display ='none';
	  document.getElementById('bm_radio').style.display ='none';
	  document.getElementById('abm_radio').style.display ='none';
	  document.getElementById('am_radio').style.display ='none';
	  document.getElementById('rm_radio').style.display ='none';
	}
	function show2(){
	  document.getElementById('branch_radio').style.display ='none';
	  document.getElementById('designation_radio').style.display = 'block';
	  document.getElementById('employee_radio').style.display ='none';
	  document.getElementById('bm_radio').style.display ='none';
	  document.getElementById('abm_radio').style.display ='none';
	  document.getElementById('am_radio').style.display ='none';
	  document.getElementById('rm_radio').style.display ='none';
	}
	// function show3(){
	//   document.getElementById('branch_radio').style.display ='none';
	//   document.getElementById('designation_radio').style.display ='none';
	//   document.getElementById('employee_radio').style.display ='block';
	//   document.getElementById('bm_radio').style.display ='none';
	//   document.getElementById('abm_radio').style.display ='none';
	//   document.getElementById('am_radio').style.display ='none';
	//   document.getElementById('rm_radio').style.display ='none';
	// }

	function show4(){
	  document.getElementById('bm_radio').style.display ='block';
	  document.getElementById('abm_radio').style.display ='none';
	  document.getElementById('am_radio').style.display ='none';
	  document.getElementById('rm_radio').style.display ='none';
	}
	function show5(){
	  document.getElementById('bm_radio').style.display ='none';
	  document.getElementById('abm_radio').style.display ='block';
	  document.getElementById('am_radio').style.display ='none';
	  document.getElementById('rm_radio').style.display ='none';
	}
	function show6(){
	   document.getElementById('bm_radio').style.display ='none';
	  document.getElementById('abm_radio').style.display ='none';
	  document.getElementById('am_radio').style.display ='block';
	  document.getElementById('rm_radio').style.display ='none';
	}
	function show7(){
	   document.getElementById('bm_radio').style.display ='none';
	  document.getElementById('abm_radio').style.display ='none';
	  document.getElementById('am_radio').style.display ='none';
	  document.getElementById('rm_radio').style.display ='block';
	}
</script>
<?php include 'footer2.php'; ?>

<script type="text/javascript">
$(document).ready(function () {
  $('#dtBasicExample').DataTable({
"scrollX": true,
});
  $('.dataTables_length').addClass('bs-select');
});
</script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.2/css/jquery.dataTables.min.css">
<script type="text/javascript" src="https://cdn.datatables.net/1.10.2/js/jquery.dataTables.min.js"></script>
<script src="csvExport.js"></script>
<script>
$( "#export" ).click(function() {
  $('table').csvExport();
});
if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
}
</script>
