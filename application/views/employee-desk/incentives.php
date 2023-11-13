 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">

        <div class="row mb-2">
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
                 <h3>Incentives </h3>
                  <form class="form-inline" method="post" action="">
                   <select name="date_month" class="form-control col-md-6" required>
                    <option value="">Select a month</option>
                     <option value="01-2022">Jan, 2022</option>
                     <option value="02-2022">Feb, 2022</option>
                     <option value="03-2022">March, 2022</option>
                     <option value="04-2022">Apr, 2022</option>
                     <option value="05-2022">May, 2022</option>
                     <option value="06-2022">Jun, 2022</option>
                     <option value="07-2022">Jul, 2022</option>
                     <option value="08-2022">Aug, 2022</option>
                     <option value="09-2022">Sep, 2022</option>
                     <option value="10-2022">Oct, 2022</option>
                     <option value="11-2022">Nov, 2022</option>
                     <option value="12-2022">Dec, 2022</option>
                     <option value="01-2023">Jan, 2023</option>
                     <option value="02-2023">Feb, 2023</option>
                     <option value="03-2023">March, 2023</option>
                     <option value="04-2023">Apr, 2023</option>
                     <option value="05-2023">May, 2023</option>
                   </select>
                   <input type="submit" name="btn_search_by_month" class="btn btn-primary" value="Search">
                 </form>
             </div>
              <!-- /.card-header -->
              <div class="card-body">
                <?php 
                  
                  if($rm['rm_total_sq_yards'] >= 1 && $rm['rm_total_sq_yards'] <= 1500){
                    $rm_incentive = $rm['rm_total_sq_yards'] * 30;
                    $rm_allowence = 0;
                    $rm_hra = 0;
                  }elseif($rm['rm_total_sq_yards'] >= 1501 && $rm['rm_total_sq_yards'] <= 3000){
                    $rm_incentive = $rm['rm_total_sq_yards'] * 35;
                     $rm_allowence = 0;
                    $rm_hra = 0;
                  }elseif($rm['rm_total_sq_yards'] >= 2501 && $rm['rm_total_sq_yards'] <= 4100){
                    $rm_incentive = $rm['rm_total_sq_yards'] * 40;
                    $rm_allowence = 5000;
                    $rm_hra = 0;
                  }elseif($rm['rm_total_sq_yards'] >= 4101 && $rm['rm_total_sq_yards'] <= 5000){
                    $rm_incentive = $rm['rm_total_sq_yards'] * 45;
                     $rm_allowence = 7500;
                    $rm_hra = 0;
                  } elseif($rm['rm_total_sq_yards'] >= 5001){
                    $rm_incentive = $rm['rm_total_sq_yards'] * 45;
                     $rm_allowence = 7500;
                    $rm_hra = 7500;
                  }else{
                    $rm_incentive = 0;
                     $rm_allowence = 0;
                    $rm_hra = 0;
                  }
                ?>
                 <?php 
                  if($am['am_total_sq_yards'] >= 0 && $am['am_total_sq_yards'] <= 3000){
                    $am_incentive = $am['am_total_sq_yards'] * 0;
                    $am_allowence = 0;
                    $am_hra = 0;
                  }elseif($am['am_total_sq_yards'] >= 3001 && $am['am_total_sq_yards'] <= 5000){
                    $am_incentive = $am['am_total_sq_yards'] * 12;
                     $am_allowence = 0;
                    $am_hra = 0;
                  }elseif($am['am_total_sq_yards'] >= 5001 && $am['am_total_sq_yards'] <= 8100){
                    $am_incentive = $am['am_total_sq_yards'] * 13;
                     $am_allowence = 5000;
                    $am_hra = 0;
                  }elseif($am['am_total_sq_yards'] >= 8101){
                    $am_incentive = $am['am_total_sq_yards'] * 13;
                     $am_allowence = 5000;
                    $am_hra = 15000;
                  }else{
                    $am_incentive = 0;
                     $am_allowence = 0;
                    $am_hra = 0;
                  }
                ?>
                 <?php 
                  if($abm['abm_total_sq_yards'] >= 0 && $abm['abm_total_sq_yards'] <= 4500){
                    $abm_incentive = 0;
                    $abm_allowence = 0;
                    $abm_hra = 0;
                  }elseif($abm['abm_total_sq_yards'] >= 4501 && $abm['abm_total_sq_yards'] <= 8100){
                    $abm_incentive = $abm['abm_total_sq_yards'] * 10;
                    $abm_allowence = 0;
                    $abm_hra = 0;
                  }elseif($abm['abm_total_sq_yards'] >= 8101 && $abm['abm_total_sq_yards'] <= 10000){
                    $abm_incentive = $abm['abm_total_sq_yards'] * 12;
                    $abm_allowence = 5000;
                    $abm_hra = 0;
                  }elseif($abm['abm_total_sq_yards'] >= 10001){
                    $abm_incentive = $abm['abm_total_sq_yards'] * 12;
                    $abm_allowence = 5000;
                    $abm_hra = 20000;
                  }else{
                    $abm_incentive = 0;
                    $abm_allowence = 0;
                    $abm_hra = 0;
                  }
                ?>
                 <?php 
                  if($bm['bm_total_sq_yards'] >= 0 && $bm['bm_total_sq_yards'] <= 8000){
                    $bm_incentive = 0;
                    $bm_allowence = 0;
                    $bm_hra = 0;
                  }elseif($bm['bm_total_sq_yards'] >= 8001 && $bm['bm_total_sq_yards'] <= 12000){
                    $bm_incentive = $bm['bm_total_sq_yards'] * 8;
                    $bm_allowence = 0;
                    $bm_hra = 0;
                  }elseif($bm['bm_total_sq_yards'] >= 12001 && $bm['bm_total_sq_yards'] <= 20000){
                    $bm_incentive = $bm['abm_total_sq_yards'] * 10;
                    $bm_allowence = 5000;
                    $bm_hra = 0;
                  }elseif($bm['bm_total_sq_yards'] >= 20001){
                    $bm_incentive = $bm['bm_total_sq_yards'] * 10;
                    $bm_allowence = 5000;
                    $bm_hra = 20000;
                  }else{
                    $bm_incentive = 0;
                    $bm_allowence = 0;
                    $bm_hra = 0;
                  }
                ?>
                <table id="example1" class="table table-bordered table-striped">
                  <tr><th></th><th>Incentive</th><th>Allowence</th><th>HRA</th></tr>
                  <tr><th>as RM</th><td>Rs. <?php echo $rm_incentive; ?> </td><td>Rs. <?php echo $rm_allowence; ?> </td><td> Rs. <?php echo $rm_hra; ?></td></tr>
                  <tr><th>as AM</th><td>Rs. <?php echo $am_incentive; ?></td><td>Rs. <?php echo $am_allowence; ?></td><td>Rs. <?php echo $am_hra; ?></td></tr>
                  <tr><th>as ABM</th><td>Rs. <?php echo $abm_incentive; ?></td><td>Rs. <?php echo $abm_allowence; ?></td><td>Rs. <?php echo $abm_hra; ?></td></tr>
                  <tr><th>as BM</th><td>Rs. <?php echo $bm_incentive; ?></td><td>Rs. <?php echo $bm_allowence; ?></td><td>Rs. <?php echo $bm_hra; ?></td></tr>

                </table>

              </div>
            </div>
              <div class="card">
              <div class="card-header">
                 <h3>Total Sqft sales</h3>
             </div>
              <!-- /.card-header -->
              <div class="card-body">
                 <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Total Sq.fts Sales as RM</th>
                    <th>Total Sq.fts Sales as AM</th>
                    <th>Total Sq.fts Sales as ABM</th>
                    <th>Total Sq.fts Sales as BM</th>
                  </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td><?php echo !empty($rm['rm_total_sq_yards'])?$rm['rm_total_sq_yards']:'0'; ?></td>
                      <td><?php echo !empty($am['am_total_sq_yards'])?$am['am_total_sq_yards']:'0'; ?></td>
                      <td><?php echo !empty($abm['abm_total_sq_yards'])?$abm['abm_total_sq_yards']:'0'; ?></td>
                      <td><?php echo !empty($bm['bm_total_sq_yards'])?$bm['bm_total_sq_yards']:'0'; ?></td>
                     
                    </tr>
                    
                  </tbody>
                </table>
              </div>
            </div>

            <div class="card">
              <div class="card-header">
                 <h3>Sales involved as RM</h3>
             </div>
              <!-- /.card-header -->
              <div class="card-body">
                
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                  
                    <th>Project Name</th>
                    <th>Area</th>
                    <th>Flat</th>
                    <th>Block</th>
                    <th>Floor</th>
                    <th>Sqft</th>
                    <th>Added On</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($sales_rm as $sales_rm) { ?>
                      <tr>
                      
                      <td><?php echo $sales_rm['project_name']; ?></td>
                      <td><?php echo $sales_rm['location']; ?></td>
                      <td><?php echo $sales_rm['flat_plot_no']; ?></td>
                      <td><?php echo $sales_rm['block']; ?></td>
                      <td><?php echo $sales_rm['floor']; ?></td>
                      <td><?php echo $sales_rm['total_sq_yards']; ?></td>
                      <td><?php echo $sales_rm['added_on']; ?></td>
                    
                  </tr>
                    <?php   } ?>
                 
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>



            <div class="card">
              <div class="card-header">
                  <h3>Sales involved as AM</h3>
             </div>
              <!-- /.card-header -->
              <div class="card-body">
               
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                  
                    <th>Project Name</th>
                    <th>Area</th>
                    <th>Flat</th>
                    <th>Block</th>
                    <th>Floor</th>
                     <th>Sqft</th>
                    <th>Added On</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($sales_am as $sales_am) { ?>
                      <tr>
                      
                      <td><?php echo $sales_am['project_name']; ?></td>
                      <td><?php echo $sales_am['location']; ?></td>
                      <td><?php echo $sales_am['flat_plot_no']; ?></td>
                      <td><?php echo $sales_am['block']; ?></td>
                      <td><?php echo $sales_am['floor']; ?></td>
                      <td><?php echo $sales_am['total_sq_yards']; ?></td>
                      <td><?php echo $sales_am['added_on']; ?></td>
                    
                  </tr>
                    <?php   } ?>
                 
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>





            <div class="card">
              <div class="card-header">
                 <h3>Sales involved as ABM</h3>
             </div>
              <!-- /.card-header -->
              <div class="card-body">
                
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                  
                    <th>Project Name</th>
                    <th>Area</th>
                    <th>Flat</th>
                    <th>Block</th>
                    <th>Floor</th>
                     <th>Sqft</th>
                    <th>Added On</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($sales_abm as $sales_abm) { ?>
                      <tr>
                      
                      <td><?php echo $sales_abm['project_name']; ?></td>
                      <td><?php echo $sales_abm['location']; ?></td>
                      <td><?php echo $sales_abm['flat_plot_no']; ?></td>
                      <td><?php echo $sales_abm['block']; ?></td>
                      <td><?php echo $sales_abm['floor']; ?></td>
                      <td><?php echo $sales_abm['total_sq_yards']; ?></td>
                      <td><?php echo $sales_abm['added_on']; ?></td>
                    
                  </tr>
                    <?php   } ?>
                 
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>


            <div class="card">
              <div class="card-header">
                 <h3>Sales involved as BM</h3>
             </div>
              <!-- /.card-header -->
              <div class="card-body">
                
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                  
                    <th>Project Name</th>
                    <th>Area</th>
                    <th>Flat</th>
                    <th>Block</th>
                    <th>Floor</th>
                     <th>Sqft</th>
                    <th>Added On</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($sales_bm as $sales_bm) { ?>
                      <tr>
                      
                      <td><?php echo $sales_bm['project_name']; ?></td>
                      <td><?php echo $sales_bm['location']; ?></td>
                      <td><?php echo $sales_bm['flat_plot_no']; ?></td>
                      <td><?php echo $sales_bm['block']; ?></td>
                      <td><?php echo $sales_bm['floor']; ?></td>
                      <td><?php echo $sales_bm['total_sq_yards']; ?></td>
                      <td><?php echo $sales_bm['added_on']; ?></td>
                    
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