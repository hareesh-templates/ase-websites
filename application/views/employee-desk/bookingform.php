<!DOCTYPE html>
<html lang="en">
<head>
  <title>Eswari Homes - Booking Form</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style type="text/css">
    .the-legend {
    background-color: greenyellow;
    border-style: none;
    border-width: 0;
    font-size: 14px;
    line-height: 20px;
    margin-bottom: 0;
    width: auto;
    padding: 0 10px;
    border: 1px solid #e0e0e0;
}
.the-fieldset {
    border: 1px solid maroon;
    border-radius: 10px;
    padding: 10px;
}
.mainheading{
      text-align: center;
    width: 50%;
    padding: 0px;
    border-radius: 10px;
    margin-left: 25%;
  }
  .mainheadingspan{
    background-color: greenyellow;
    text-align: center;
    padding: 10px;
    border-radius: 10px;
    /*margin-left: 20px;*/
    font-weight: 600;
    font-size: 20px;
  }
  </style>

</head>
<body>

<div class="container">
   <!-- <h2 class="mainheading"> <img src="<?php echo base_url(); ?>assets/images/new_logo.png" style="width: 200px;"></h2> -->
  <!-- <h2 class="mainheading"> <span class="mainheadingspan">Booking Form</span></h2> -->
   <?php if(!empty($success_msg)){ ?>
    <div class="col-xs-12">
        <div class="alert alert-success"  style=" float: right;
    width: 85%; margin-top:20px;"><?php echo $success_msg; ?></div>
    </div>
    <?php }elseif(!empty($error_msg)){ ?>
    <div class="col-xs-12">
        <div class="alert alert-danger"  style=" float: right;
    width: 85%; margin-top:20px;"><?php echo $error_msg; ?></div>
    </div>
    <?php } ?>
  <form class="form-horizontal" action="" method="post" enctype="multipart/form-data" style=" float: right;
    width: 85%; margin-top:20px;">
  <fieldset class="the-fieldset">
  <legend class="the-legend"><b>PROJECT DETAILS:</b></legend>
  <div class="row col-sm-12">
    <div class="form-group col-sm-6">
      <label class="control-label col-sm-6" for="email">Project Name:</label>
      <div class="col-sm-9">
        <input type="text" class="form-control" id="email" placeholder="Enter Project Name" name="project_name" value="<?php echo $property['title'] ;?>" readonly>
      </div>
    </div>
    <div class="form-group col-sm-6">
      <label class="control-label col-sm-6" for="email">Location:</label>
      <div class="col-sm-9">
        <input type="text" class="form-control" id="email" placeholder="Enter Location" name="location" value="<?php echo $property['location'] ;?>" readonly>
      </div>
    </div>
  </div>
  <div class="row col-sm-12">
    <div class="form-group col-sm-6">
      <label class="control-label col-sm-6" for="email">Flat/Plot No:</label>
      <div class="col-sm-9">
        <input type="text" class="form-control" id="email" placeholder="Enter Flat/Plot No" name="flat_plot_no" value="<?php echo $property['flatno'] ;?>" readonly>
      </div>
    </div>
    <div class="form-group col-sm-6">
      <label class="control-label col-sm-6" for="email">Block:</label>
      <div class="col-sm-9">
        <input type="text" class="form-control" id="email" placeholder="Enter Block" name="block" value="<?php echo $property['block'] ;?>" readonly>
      </div>
    </div>
  </div>
  <div class="row col-sm-12">
    <div class="form-group col-sm-6">
      <label class="control-label col-sm-6" for="email">Floor:</label>
      <div class="col-sm-9">
        <input type="text" class="form-control" id="email" placeholder="Enter Floor" name="floor" value="<?php echo $property['floor'] ;?>" readonly>
      </div>
    </div>
    <div class="form-group col-sm-6">
      <label class="control-label col-sm-6" for="email">Area(Sq.ft/Sq.yds):</label>
      <div class="col-sm-9">
        <input type="text" class="form-control" id="email" placeholder="Enter Area(Sq.ft/Sq.yds)" name="area_sq_yds" value="<?php echo $property['area'] ;?>" readonly>
      </div>
    </div>
  </div>
   <div class="row col-sm-12">
    <div class="form-group col-sm-6">
      <label class="control-label col-sm-6" for="email">Total Sq.ft/Sq.yrd:</label>
      <div class="col-sm-9">
        <input type="text" class="form-control" id="email" placeholder="Enter Total Sq.ft/Sq.yrd" name="total_sq_yards" value="<?php echo $property['total_sqft'] ;?>" readonly>
      </div>
    </div>
    <div class="form-group col-sm-6">
      <label class="control-label col-sm-6" for="email">Price per Sq.ft/Sq.yrd:</label>
      <div class="col-sm-9">
        <input type="text" class="form-control" id="email" placeholder="Enter Price per Sq.ft/Sq.yrd" name="price_per_sq_yards" value="<?php echo $property['price_sqft'] ;?>" readonly>
      </div>
    </div>
  </div>
  <div class="row col-sm-12">
    <div class="form-group col-sm-6">
      <label class="control-label col-sm-6" for="email">Floor Rise Charges(if applicable) Rs.:</label>
      <div class="col-sm-9">
        <input type="text" class="form-control" id="email" placeholder="Enter Floor Rise Charges(if applicable) Rs" name="floor_rise_charges" value="<?php echo $property['floor_rise_charges'] ;?>" readonly>
      </div>
    </div>
    <div class="form-group col-sm-6">
      <label class="control-label col-sm-6" for="email">Amenities Charges:</label>
      <div class="col-sm-9">
        <input type="text" class="form-control" id="email" placeholder="Enter Amenities Charges" name="amentities_charges" value="<?php echo $property['amentities_charges'] ;?>" readonly>
      </div>
    </div>
  </div>
  <div class="row col-sm-12">
    <div class="form-group col-sm-6">
      <label class="control-label col-sm-6" for="email">Project Description:</label>
      <div class="col-sm-9">
        <textarea class="form-control" id="email"  name="project_description" value="<?php echo $property['project_description'] ;?>" readonly><?php echo $property['project_description'] ;?></textarea>
      </div>
    </div>
   
  </div>
   
    </fieldset><br>


    <fieldset class="the-fieldset">
  <legend class="the-legend"><b>SOLE/FIRST APPLICANT:</b></legend>
  <div class="row col-sm-12">
    <div class="form-group col-sm-6">
      <label class="control-label col-sm-6" for="email">Mr./Mrs./Ms.:</label>
      <div class="col-sm-9">
        <input type="text" class="form-control" id="email" placeholder="Enter Name" name="first_applicant_name" value="<?php echo $property['first_applicant_name'] ;?>">
      </div>
    </div>
    <div class="form-group col-sm-6">
      <label class="control-label col-sm-6" for="email">S/W/D/of:</label>
      <div class="col-sm-9">
        <input type="text" class="form-control" id="email" placeholder="Enter S/W/D/of" name="first_applicant_relationship">
      </div>
    </div>
  </div>
  <div class="row col-sm-12">
    <div class="form-group col-sm-6">
      <label class="control-label col-sm-6" for="email">Nationality:</label>
      <div class="col-sm-9">
        <input type="text" class="form-control" id="email" placeholder="Enter Nationality" name="first_applicant_nationality">
      </div>
    </div>
    <div class="form-group col-sm-6">
      <label class="control-label col-sm-6" for="email">DOB:</label>
      <div class="col-sm-9">
        <input type="text" class="form-control" id="email" placeholder="Enter DOB" name="first_applicant_dob">
      </div>
    </div>
  </div>
  <div class="row col-sm-12">
    <div class="form-group col-sm-6">
      <label class="control-label col-sm-6" for="email">Age:</label>
      <div class="col-sm-9">
        <input type="text" class="form-control" id="email" placeholder="Enter Age" name="age">
      </div>
    </div>
    <div class="form-group col-sm-6">
      <label class="control-label col-sm-6" for="email">PAN Card Number:</label>
      <div class="col-sm-9">
        <input type="text" class="form-control" id="email" placeholder="Enter PAN Card Number" name="first_applicant_pannum">
      </div>
    </div>
  </div>

  <div class="row col-sm-12">
    <div class="form-group col-sm-6">
      <label class="control-label col-sm-6" for="email">Adhar Number:</label>
      <div class="col-sm-9">
        <input type="text" class="form-control" id="email" placeholder="Enter Adhar Number" name="first_applicant_adharnum">
      </div>
    </div>
    <div class="form-group col-sm-6">
      <label class="control-label col-sm-6" for="email">Phone Number:</label>
      <div class="col-sm-9">
        <input type="text" class="form-control" id="email" placeholder="Enter Phone Number" name="first_applicant_phone_num">
      </div>
    </div>
  </div>
  <div class="row col-sm-12">
    <div class="form-group col-sm-6">
      <label class="control-label col-sm-6" for="email">Permanent Address:</label>
      <div class="col-sm-9">
        <textarea class="form-control" id="email" placeholder="Enter Permanent Address" name="first_applicant_permanent_address"></textarea>
      </div>
    </div>
    <div class="form-group col-sm-6">
      <label class="control-label col-sm-6" for="email">Communication Address:</label>
      <div class="col-sm-9">
       <textarea class="form-control" id="email" placeholder="Enter Communication Address" name="first_applicant_communication_address"></textarea>
      </div>
    </div>
  </div>
  <div class="row col-sm-12">
    <div class="form-group col-sm-6">
      <label class="control-label col-sm-6" for="email">Mobile:</label>
      <div class="col-sm-9">
        <input type="text" class="form-control" id="email" placeholder="Enter Mobile" name="first_applicant_mobile_num" value="<?php echo $property['first_applicant_mobile_num'] ;?>">
      </div>
    </div>
    <div class="form-group col-sm-6">
      <label class="control-label col-sm-6" for="email">Email:</label>
      <div class="col-sm-9">
        <input type="text" class="form-control" id="email" placeholder="Enter Email" name="first_applicant_email" value="<?php echo $property['first_applicant_email'] ;?>">
      </div>
    </div>
  </div>
  <div class="row col-sm-12">
    <div class="form-group col-sm-6">
      <label class="control-label col-sm-6" for="email">Occupation:</label>
      <div class="col-sm-9">
        <input type="text" class="form-control" id="email" placeholder="Enter Occupation" name="first_applicant_occupation">
      </div>
    </div>
    <div class="form-group col-sm-6">
      <label class="control-label col-sm-6" for="email">Annual Income:</label>
      <div class="col-sm-9">
        <input type="text" class="form-control" id="email" placeholder="Enter Annual Income" name="first_applicant_annual_income">
      </div>
    </div>
  </div>
  <div class="row col-sm-12">
    <div class="form-group col-sm-6">
      <label class="control-label col-sm-6" for="email">Company Name:</label>
      <div class="col-sm-9">
        <input type="text" class="form-control" id="email" placeholder="Enter Company Name" name="first_applicant_company_name">
      </div>
    </div>
    <div class="form-group col-sm-6">
      <label class="control-label col-sm-6" for="email">Designation:</label>
      <div class="col-sm-9">
        <input type="text" class="form-control" id="email" placeholder="Enter Designation" name="first_applicant_designation">
      </div>
    </div>
  </div>
   
    </fieldset><br>

     <fieldset class="the-fieldset">
  <legend class="the-legend"><b>CO-APPLICANT (IF APPLICABLE):</b></legend>
  <div class="row col-sm-12">
    <div class="form-group col-sm-6">
      <label class="control-label col-sm-6" for="email">Mr./Mrs./Ms.:</label>
      <div class="col-sm-9">
        <input type="text" class="form-control" id="email" placeholder="Enter Name" name="second_applicant_name" value="<?php echo $property['second_applicant_name'] ;?>">
      </div>
    </div>
    <div class="form-group col-sm-6">
      <label class="control-label col-sm-6" for="email">S/W/D/of:</label>
      <div class="col-sm-9">
        <input type="text" class="form-control" id="email" placeholder="Enter S/W/D/of" name="second_applicant_relationship">
      </div>
    </div>
  </div>
  <div class="row col-sm-12">
    <div class="form-group col-sm-6">
      <label class="control-label col-sm-6" for="email">Nationality:</label>
      <div class="col-sm-9">
        <input type="text" class="form-control" id="email" placeholder="Enter Nationality" name="second_applicant_nationality">
      </div>
    </div>
    <div class="form-group col-sm-6">
      <label class="control-label col-sm-6" for="email">DOB:</label>
      <div class="col-sm-9">
        <input type="text" class="form-control" id="email" placeholder="Enter DOB" name="second_applicant_dob">
      </div>
    </div>
  </div>
  <div class="row col-sm-12">
    <div class="form-group col-sm-6">
      <label class="control-label col-sm-6" for="email">Age:</label>
      <div class="col-sm-9">
        <input type="text" class="form-control" id="email" placeholder="Enter Age" name="second_applicant_age">
      </div>
    </div>
    <div class="form-group col-sm-6">
      <label class="control-label col-sm-6" for="email">PAN Card Number:</label>
      <div class="col-sm-9">
        <input type="text" class="form-control" id="email" placeholder="Enter PAN Card Number" name="second_applicant_pannum">
      </div>
    </div>
  </div>

  <div class="row col-sm-12">
    <div class="form-group col-sm-6">
      <label class="control-label col-sm-6" for="email">Adhar Number:</label>
      <div class="col-sm-9">
        <input type="text" class="form-control" id="email" placeholder="Enter Adhar Number" name="second_applicant_adharnum">
      </div>
    </div>
    <div class="form-group col-sm-6">
      <label class="control-label col-sm-6" for="email">Phone Number:</label>
      <div class="col-sm-9">
        <input type="text" class="form-control" id="email" placeholder="Enter Phone Number" name="second_applicant_phone_num">
      </div>
    </div>
  </div>
  <div class="row col-sm-12">
    <div class="form-group col-sm-6">
      <label class="control-label col-sm-6" for="email">Permanent Address:</label>
      <div class="col-sm-9">
        <textarea class="form-control" id="email" placeholder="Enter Permanent Address" name="second_applicant_permanent_address"></textarea>
      </div>
    </div>
    <div class="form-group col-sm-6">
      <label class="control-label col-sm-6" for="email">Communication Address:</label>
      <div class="col-sm-9">
       <textarea class="form-control" id="email" placeholder="Enter Communication Address" name="second_applicant_communication_address"></textarea>
      </div>
    </div>
  </div>
  <div class="row col-sm-12">
    <div class="form-group col-sm-6">
      <label class="control-label col-sm-6" for="email">Mobile:</label>
      <div class="col-sm-9">
        <input type="text" class="form-control" id="email" placeholder="Enter Mobile" name="second_applicant_mobile_num" value="<?php echo $property['second_applicant_mobile_num'] ;?>">
      </div>
    </div>
    <div class="form-group col-sm-6">
      <label class="control-label col-sm-6" for="email">Email:</label>
      <div class="col-sm-9">
        <input type="text" class="form-control" id="email" placeholder="Enter Email" name="second_applicant_email" value="<?php echo $property['second_applicant_email'] ;?>">
      </div>
    </div>
  </div>
  <div class="row col-sm-12">
    <div class="form-group col-sm-6">
      <label class="control-label col-sm-6" for="email">Occupation:</label>
      <div class="col-sm-9">
        <input type="text" class="form-control" id="email" placeholder="Enter Occupation" name="second_applicant_occupation">
      </div>
    </div>
    <div class="form-group col-sm-6">
      <label class="control-label col-sm-6" for="email">Annual Income:</label>
      <div class="col-sm-9">
        <input type="text" class="form-control" id="email" placeholder="Enter Annual Income" name="second_applicant_annual_income">
      </div>
    </div>
  </div>
  <div class="row col-sm-12">
    <div class="form-group col-sm-6">
      <label class="control-label col-sm-6" for="email">Company Name:</label>
      <div class="col-sm-9">
        <input type="text" class="form-control" id="email" placeholder="Enter Company Name" name="second_applicant_company">
      </div>
    </div>
    <div class="form-group col-sm-6">
      <label class="control-label col-sm-6" for="email">Designation:</label>
      <div class="col-sm-9">
        <input type="text" class="form-control" id="email" placeholder="Enter Designation" name="second_applicant_designation">
      </div>
    </div>
  </div>
   
    </fieldset><br>

      <fieldset class="the-fieldset" style="display:none;">
  <div class="row col-sm-12">
    <div class="form-group col-sm-4">
      <label class="control-label col-sm-6" for="email">RM/RMD:</label>
      <div class="col-sm-9">
        <input type="text" class="form-control" id="email" placeholder="Enter RM/RMD" name="rm" value="<?php echo $property['rm'] ;?>" readonly>
      </div>
    </div>
    <div class="form-group col-sm-4">
      <label class="control-label col-sm-6" for="email">AAM/AM:</label>
      <div class="col-sm-9">
        <input type="text" class="form-control" id="email" placeholder="Enter AAM/AM" name="am" value="<?php echo $property['am'] ;?>" readonly>
      </div>
    </div>
    <div class="form-group col-sm-4">
      <label class="control-label col-sm-6" for="email">ABM:</label>
      <div class="col-sm-9">
        <input type="text" class="form-control" id="email" placeholder="Enter Manager" name="manager" value="<?php echo $property['manager'] ;?>" readonly>
      </div>
    </div>
     <div class="form-group col-sm-4">
      <label class="control-label col-sm-6" for="email">BM:</label>
      <div class="col-sm-9">
        <input type="text" class="form-control" id="email" placeholder="Enter Manager" name="bm" value="<?php echo $property['bm'] ;?>" readonly>
      </div>
    </div>
  </div>
</fieldset><br>


     <table class="table table-bordered">
    <thead style="background-color: greenyellow;">
      <tr>
        <th>Flot/Plot Cost</th>
        <th>Amount</th>
        <th>Regiteration Expenses</th>
        <th>Amount</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Flat/Plot Cost(base price)</td>
        <td><input type="text" name="flat_plot_cost" class="form-control" value="<?php echo $property['flat_plot_cost'] ;?>"  <?php if($property['project_status'] == 'Booking'){ ?>readonly <?php } ?>></td>
        <td>Stamp Duty</td>
        <td><input type="text" name="stamp_duty" class="form-control" value="<?php echo $property['stamp_duty'] ;?>"  <?php if($property['project_status'] == 'Booking'){ ?> readonly <?php } ?>></td>
      </tr>
       <tr>
        <td>Amenities</td>
        <td><input type="text" name="amentities" class="form-control" value="<?php echo $property['amentities'] ;?>"  <?php if($property['project_status'] == 'Booking'){ ?> readonly <?php } ?>></td>
        <td>GST</td>
        <td><input type="text" name="gst" class="form-control" value="<?php echo $property['gst'] ;?>"  <?php if($property['project_status'] == 'Booking'){ ?> readonly <?php } ?>></td>
      </tr>
       <tr>
        <td>Corpus Fund</td>
        <td><input type="text" name="corpus_fund" class="form-control" value="<?php echo $property['corpus_fund'] ;?>"  <?php if($property['project_status'] == 'Booking'){ ?> readonly <?php } ?>></td>
        <td>Documentation & Legal Charges</td>
        <td><input type="text" name="documentation_legal_charges" class="form-control" value="<?php echo $property['documentation_legal_charges'] ;?>"  <?php if($property['project_status'] == 'Booking'){ ?> readonly <?php } ?>></td>
      </tr>
       <tr>
        <td>Maintenance Charges(if applicable)</td>
        <td><input type="text" name="maintenance_charges" class="form-control" value="<?php echo $property['maintenance_charges'] ;?>"  <?php if($property['project_status'] == 'Booking'){ ?> readonly <?php } ?>></td>
        <td>Reg.Mic.Charges</td>
        <td><input type="text" name="reg_misc_charges" class="form-control" value="<?php echo $property['reg_misc_charges'] ;?>"  <?php if($property['project_status'] == 'Booking'){ ?> readonly <?php } ?>></td>
      </tr>
       <tr>
        <th>Total</th>
        <th><input type="text" name="flat_plot_cost_total" class="form-control" value="<?php echo $property['flat_plot_cost_total'] ;?>"  <?php if($property['project_status'] == 'Booking'){ ?> readonly <?php } ?>></th>
        <th>Total</th>
        <th><input type="text" name="reg_expenses_total" class="form-control" value="<?php echo $property['reg_expenses_total'] ;?>"  <?php if($property['project_status'] == 'Booking'){ ?> readonly <?php } ?>></th>
      </tr>
    </tbody>
  </table><br>
  <p><b>Declaimer: </b>
    <ol>
      <li>Please note that the above total consideration not inclusive of MOD Charges</li>
      <li>Stamp Duty and registeration charges are indicative and the actual amounts will be as per the guideline Value and rates prevailing at the time of regesteration. All taxes leveis payble to Govt. Agencies have been calculated at prevailing rates and any change in the same shall be charged or waived of at actuals.</li>
    </ol>
  </p><br>

  <fieldset class="the-fieldset">
  <legend class="the-legend"><b>PAYMENT SCHEDULE:</b></legend>
  <div class="row col-sm-12">
    <div class="form-group col-sm-12">
      <label class="control-label col-sm-4" for="email">Flat/Plot Blocking Amount:</label>
      <div class="col-sm-8">
        <input type="text" class="form-control" id="email" placeholder="" name="flat_plot_blocking_amount_total">
      </div>
    </div>
  </div>
   <div class="row col-sm-12">
    <div class="form-group col-sm-12">
      <label class="control-label col-sm-4" for="email">At the time of Agreement-15 Day from Booking:</label>
      <div class="col-sm-8">
        <input type="text" class="form-control" id="email" placeholder="" name="agreement_fiveteendays_total">
      </div>
    </div>
  </div>
  <div class="row col-sm-12">
    <div class="form-group col-sm-12">
      <label class="control-label col-sm-4" for="email">At the time of Registeration-30 day from agreement:</label>
      <div class="col-sm-8">
        <input type="text" class="form-control" id="email" placeholder="" name="agreemnt_thirtydays_total">
      </div>
    </div>
  </div>
   <div class="row col-sm-12">
    <div class="form-group col-sm-12">
      <label class="control-label col-sm-5" for="email">At the time of Registeration-Amenities+GST+SD+Misc.Exp.</label>
      <div class="col-sm-6">
        
      </div>
    </div>
  </div>
   
    </fieldset><br>

   
    <p><b>TERMS & CONDITIONS: </b>
      <ul>
        <li>
    In case of cancellation Intiated by the applicant (s) before signing of the agreement, the company reserves the right to cancel the booking and forfeit a sum of 50,000/- (Excluding service Tax).</li><li> If Additional agreement has issued for loan purposethe GST or Income Tax as per the norms should be paid by the customer.  </li>
    </ul>
  </p><br>
  <p><b>DECLARATION: </b>
      <ul>
        <li>
    I/We, the applicant(s), have hereby attahed th self attested photocopy of the PAN Card and ID Card as proof of your reference. I/We have read and understood all the terms and conditions contained herein and hereby agree to abide by the said terms and evidence by me/our signature(s) herein. </li>
    </ul>
  </p><br>

  <fieldset class="the-fieldset">
  <div class="row col-sm-12">
    <div class="form-group col-sm-4">
      <label class="control-label col-sm-6" for="email">Date:</label>
      <div class="col-sm-9">
        <input type="text" class="form-control" id="email" placeholder="Enter Date" name="date">
      </div>
    </div>
    <div class="form-group col-sm-4">
      <label class="control-label col-sm-6" for="email">Place:</label>
      <div class="col-sm-9">
        <input type="text" class="form-control" id="email" placeholder="Enter Place" name="place">
      </div>
    </div>
    <div class="form-group col-sm-4">
      <label class="control-label col-sm-6" for="email">Project Status:</label>
      <div class="col-sm-9">
        <input type="text" class="form-control" id="email" name="project_status" value="<?php echo $property['project_status']; ?>" readonly>
      </div>
    </div>
  </div>
  <div class="row col-sm-12"   <?php if($property['project_status'] == 'Booking'){ ?> style="display: none;" <?php } ?>>
    <div class="form-group col-sm-6">
      <label class="control-label col-sm-6" for="email">Sole/First Applicant:</label>
      <div class="col-sm-9">
        <input type="file" class="form-control" id="email" name="first_applicant_sign">
      </div>
    </div>
    <div class="form-group col-sm-6">
      <label class="control-label col-sm-6" for="email">Co-Applicant:</label>
      <div class="col-sm-9">
        <input type="file" class="form-control" id="email" name="second_applicant_sign">
      </div>
    </div>
  </div>
   
    </fieldset><br>
    <input type="submit" name="btn_bookingform" value="Submit Booking Form" class="btn btn-primary" style="background-color: greenyellow;color: #000; border: 0px;font-weight: 600;" <?php // if($user['designation']=='AM' || $user['designation']=='EX' || $user['designation']=='RM'){ echo 'disabled';} ?>><br><br>
  </form>
</div>
<script>
if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
}
</script>
</body>
</html>
