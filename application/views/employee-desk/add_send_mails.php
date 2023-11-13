 <style type="text/css">
   .form-group{
    display: flex;
   }
 </style>
 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Send mail</li>
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
          <!-- left column -->
          <div class="col-md-12">
  <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Send Mail</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="post" action="" enctype="multipart/form-data">
                 <div class="card-body">
                   
            <div class="form-group col-md-12">
              
                <div class="col-sm-6">
                <label for="exampleInputEmail1">Customer Name</label>
                    <input type="text" name="customer_name" class="form-control" placeholder="Enter Customer Email" value="<?php echo !empty($mails['customer_name'])?$mails['customer_name']:''; ?>" >
                    <?php echo form_error('customer_name','<p class="help-block text-danger">','</p>'); ?>
                </div>
                 <div class="col-sm-6">
                <label for="exampleInputEmail1">Customer Email</label>
                    <input type="text" name="customer_email" class="form-control" placeholder="Enter Customer Email" value="<?php echo !empty($mails['customer_email'])?$mails['customer_email']:''; ?>" >
                    <?php echo form_error('customer_email','<p class="help-block text-danger">','</p>'); ?>
                </div>
              </div>
        
                 <div class="form-group">
                    <div class="col-sm-2">
                        <input type="submit" name="postSubmit" class="btn btn-primary" value="Send">
                    </div>
                </div>
                 
              </div>
            </form>
           
       
            </div>

          </div>
        </div>
      </div>
    </section>
  </div>







  
           