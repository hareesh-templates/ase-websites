
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Booking Details</h1>
          </div>
          
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Booking Details</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-6">

            <!-- Profile Image -->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
              

                <h3 class="profile-username text-center"><?php echo $property['project_name'] ;?></h3>

                <p class="text-muted text-center"><?php echo $property['location']; ?></p>

                <ul class="list-group list-group-unbordered mb-3">
                  <li class="list-group-item">
                    <b>Area</b> <a class="float-right"><?php echo $property['area']; ?></a>
                  </li>
                  <li class="list-group-item">
                    <b>Flatno</b> <a class="float-right"><?php echo $property['flatno']; ?></a>
                  </li>
                   <li class="list-group-item">
                    <b>Block</b> <a class="float-right"><?php echo $property['block']; ?></a>
                  </li>
                   <li class="list-group-item">
                    <b>Floor</b> <a class="float-right"><?php echo $property['floor']; ?></a>
                  </li>
                   <li class="list-group-item">
                    <b>Total sqft</b> <a class="float-right"><?php echo $property['total_sqft']; ?></a>
                  </li>
                   <li class="list-group-item">
                    <b>Price sqft</b> <a class="float-right"><?php echo $property['price_sqft']; ?></a>
                  </li>
                   <li class="list-group-item">
                    <b>Floor rise charges</b> <a class="float-right"><?php echo $property['floor_rise_charges']; ?></a>
                  </li>
                  <li class="list-group-item">
                    <b>Amentities charges</b> <a class="float-right"><?php echo $property['amentities_charges']; ?></a>
                  </li>
                   <li class="list-group-item">
                    <b>Project Details</b> <a class="float-right"><?php echo $property['project_description']; ?></a>
                  </li>
                    <li class="list-group-item">
                    <b>Bookingform Link</b> <a class="float-right"><?php echo base_url() . 'employee-desk/property/bookingform/' . $property['id']; ?></a>
                  </li>
                  
                </ul>
             
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            
            <!-- /.card -->
          </div>
          <div class="col-md-2"></div>
          
        
        </div>
        <!-- /.row -->


      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
 