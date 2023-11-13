<!DOCTYPE html>
<html lang="en">
<head>
  <title>Eswari Homes - Booking Form</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  

</head>
<body>
<div class="container">
            
  <table class="table  table-striped" id="tab" style="margin-top: 50px;">
    
    <tbody>
       <tr><td><td>
      <img src="<?php echo base_url(); ?>assets/images/new_logo.png" style="width: 200px;"></td>
       <td colspan="2"> <h2  style="margin-top: 3%;" class="mainheading"> </<span class="mainheadingspan">Booking Form</span></h2></td></tr>
      </tr>
       <tr><td colspan="4"><h3>Project Details:</h3></td></tr>
      <tr>
        <td><b>Project name</b></td>
        <td><?php echo !empty($booking['project_name'])?$booking['project_name']:''; ?></td>
        <td><b style="margin-left: 10%;">Location</b></td>
        <td><?php echo !empty($booking['location'])?$booking['location']:''; ?></td>
      </tr>
       <tr>
        <td><b>Flat/Plot No</b></td>
        <td><?php echo !empty($booking['flat_plot_no'])?$booking['flat_plot_no']:''; ?></td>
        <td><b style="margin-left: 10%;">Block</b></td>
        <td><?php echo !empty($booking['block'])?$booking['block']:''; ?></td>
      </tr>
      <tr>
        <td><b>Floor</b></td>
        <td><?php echo !empty($booking['floor'])?$booking['floor']:''; ?></td>
        <td><b style="margin-left: 10%;">Area(Sq.ft/Sq.yds)</b></td>
        <td><?php echo !empty($booking['area_sq_yds'])?$booking['area_sq_yds']:''; ?></td>
      </tr>
      <tr>
        <td><b>Project Description</b></td>
        <td colspan="3"><?php echo !empty($booking['project_description'])?$booking['project_description']:''; ?></td>
      </tr>
      <tr><td colspan="4"><h3>First Applicant:</h3></td></tr>
      <tr>
        <td><b>Mr./Mrs./Ms.</b></td>
        <td><?php echo !empty($booking['first_applicant_name'])?$booking['first_applicant_name']:''; ?></td>
        <td><b style="margin-left: 10%;">/W/D/of</b></td>
        <td><?php echo !empty($booking['first_applicant_relationship'])?$booking['first_applicant_relationship']:''; ?></td>
      </tr>
      <tr>
        <td><b>Nationality</b></td>
        <td><?php echo !empty($booking['first_applicant_nationality'])?$booking['first_applicant_nationality']:''; ?></td>
        <td><b style="margin-left: 10%;">DOB</b></td>
        <td><?php echo !empty($booking['first_applicant_dob'])?$booking['first_applicant_dob']:''; ?></td>
      </tr>
      <tr>
        <td><b>Age</b></td>
        <td><?php echo !empty($booking['age'])?$booking['age']:''; ?></td>
        <td><b style="margin-left: 10%;">Designation</b></td>
        <td><?php echo !empty($booking['first_applicant_designation'])?$booking['first_applicant_designation']:''; ?></td>
      </tr>
      <tr>
        <td><b>PAN Card Nuber</b></td>
        <td><?php echo !empty($booking['first_applicant_pannum'])?$booking['first_applicant_pannum']:''; ?></td>
        <td><b style="margin-left: 10%;">Adharcard Number</b></td>
        <td><?php echo !empty($booking['first_applicant_adharnum'])?$booking['first_applicant_adharnum']:''; ?></td>
      </tr>
      <tr>
        <td><b>Permanent Address</b></td>
        <td><?php echo !empty($booking['first_applicant_permanent_address'])?$booking['first_applicant_permanent_address']:''; ?></td>
        <td><b style="margin-left: 10%;">Comm.Address</b></td>
        <td><?php echo !empty($booking['first_applicant_communication_address'])?$booking['first_applicant_communication_address']:''; ?></td>
      </tr>
      <tr>
        <td><b>Phone</b></td>
        <td><?php echo !empty($booking['first_applicant_phone_num'])?$booking['first_applicant_phone_num']:''; ?></td>
        <td><b style="margin-left: 10%;">Mobile</b></td>
        <td><?php echo !empty($booking['first_applicant_mobile_num'])?$booking['first_applicant_mobile_num']:''; ?></td>
      </tr>
      <tr>
        <td><b>Email</b></td>
        <td><?php echo !empty($booking['first_applicant_email'])?$booking['first_applicant_email']:''; ?></td>
        <td><b style="margin-left: 10%;">Occupation</b></td>
        <td><?php echo !empty($booking['first_applicant_occupation'])?$booking['first_applicant_occupation']:''; ?></td>
      </tr>
      <tr>
        <td><b>Annual Income</b></td>
        <td><?php echo !empty($booking['first_applicant_annual_income'])?$booking['first_applicant_annual_income']:''; ?></td>
        <td><b style="margin-left: 10%;">Company Name</b></td>
        <td><?php echo !empty($booking['first_applicant_company_name'])?$booking['first_applicant_company_name']:''; ?></td>
      </tr>
      <tr><td colspan="4"><h3>Co-Applicant:</h3></td></tr>
      <tr>
        <td><b>Mr./Mrs./Ms.</b></td>
        <td><?php echo !empty($booking['second_applicant_name'])?$booking['second_applicant_name']:''; ?></td>
        <td><b style="margin-left: 10%;">S/W/D/of</b></td>
        <td><?php echo !empty($booking['second_applicant_relationship'])?$booking['second_applicant_relationship']:''; ?></td>
      </tr>
      <tr>
        <td><b>Nationality</b></td>
        <td><?php echo !empty($booking['second_applicant_nationality'])?$booking['second_applicant_nationality']:''; ?></td>
        <td><b style="margin-left: 10%;">DOB</b></td>
        <td><?php echo !empty($booking['second_applicant_dob'])?$booking['second_applicant_dob']:''; ?></td>
      </tr>
      <tr>
        <td><b>Age</b></td>
        <td><?php echo !empty($booking['second_applicant_age'])?$booking['second_applicant_age']:''; ?></td>
        <td><b style="margin-left: 10%;">PAN Card Number</b></td>
        <td><?php echo !empty($booking['second_applicant_pannum'])?$booking['second_applicant_pannum']:''; ?></td>
      </tr>
      <tr>
        <td><b>Adharcard Number</b></td>
        <td><?php echo !empty($booking['second_applicant_adharnum'])?$booking['second_applicant_adharnum']:''; ?></td>
        <td><b style="margin-left: 10%;">Phone</b></td>
        <td><?php echo !empty($booking['second_applicant_phone_num'])?$booking['second_applicant_phone_num']:''; ?></td>
      
      </tr>
      <tr>
          <td><b>Permanent Address</b></td>
        <td><?php echo !empty($booking['second_applicant_permanent_address'])?$booking['second_applicant_permanent_address']:''; ?></td>
        <td><b style="margin-left: 10%;">Comm.Address</b></td>
        <td><?php echo !empty($booking['second_applicant_communication_address'])?$booking['second_applicant_communication_address']:''; ?></td>
        
      </tr>
      <tr>
        <td><b>Mobile</b></td>
        <td><?php echo !empty($booking['second_applicant_mobile_num'])?$booking['second_applicant_mobile_num']:''; ?></td>
        <td><b style="margin-left: 10%;">Email</b></td>
        <td><?php echo !empty($booking['second_applicant_email'])?$booking['second_applicant_email']:''; ?></td>
      </tr>
      <tr>
        <td><b>Occupation</b></td>
        <td><?php echo !empty($booking['second_applicant_occupation'])?$booking['second_applicant_occupation']:''; ?></td>
        <td><b style="margin-left: 10%;">Annual Income</b></td>
        <td><?php echo !empty($booking['second_applicant_annual_income'])?$booking['second_applicant_annual_income']:''; ?></td>
      </tr>
      <tr>
        <td><b>Company</b></td>
        <td><?php echo !empty($booking['second_applicant_company'])?$booking['second_applicant_company']:''; ?></td>
        <td><b style="margin-left: 10%;">Designation</b></td>
        <td><?php echo !empty($booking['second_applicant_designation'])?$booking['second_applicant_designation']:''; ?></td>
      </tr>
      <!-- <tr><td colspan="4"><h3>Managers:</h3></td></tr>
      <tr>
        <td><b>AM</b></td>
        <td><?php echo !empty($booking['am'])?$booking['am']:''; ?></td>
        <td><b style="margin-left: 10%;">RM</b></td>
        <td><?php echo !empty($booking['rm'])?$booking['rm']:''; ?></td>
      </tr>
      <tr>
        <td><b>Manager</b></td>
        <td><?php echo !empty($booking['manager'])?$booking['manager']:''; ?></td>
        <td></td>
        <td></td>
      </tr> -->
      <tr><td colspan="4"><h3>Cost Sheet:</h3></td></tr>
      <tr>
        <td><b>Total Sq.ft/Sq.yrd</b></td>
        <td><?php echo !empty($booking['total_sq_yards'])?$booking['total_sq_yards']:''; ?></td>
        <td><b style="margin-left: 10%;">Price per Sq.ft/Sq.yrd</b></td>
        <td><?php echo !empty($booking['price_per_sq_yards'])?$booking['price_per_sq_yards']:''; ?></td>
      </tr>
      <tr>
        <td><b>Floor Rise Charges</b></td>
        <td><?php echo !empty($booking['floor_rise_charges'])?$booking['floor_rise_charges']:''; ?></td>
        <td><b style="margin-left: 10%;">Amenties Charges</b></td>
        <td><?php echo !empty($booking['amentities_charges'])?$booking['amentities_charges']:''; ?></td>
      </tr>
      <tr>
        <td><b>Flat/Plot Cost(base price)</b></td>
        <td><?php echo !empty($booking['flat_plot_cost'])?$booking['flat_plot_cost']:''; ?></td>
        <td><b style="margin-left: 10%;">Amenties</b></td>
        <td><?php echo !empty($booking['amentities'])?$booking['amentities']:''; ?></td>
      </tr>
      <tr>
        <td><b>Corpus Fund</b></td>
        <td><?php echo !empty($booking['corpus_fund'])?$booking['corpus_fund']:''; ?></td>
        <td><b style="margin-left: 10%;">Maintenance Charges</b></td>
        <td><?php echo !empty($booking['maintenance_charges'])?$booking['maintenance_charges']:''; ?></td>
      </tr>
      <tr>
        <td><b>Stamp Duty</b></td>
        <td><?php echo !empty($booking['stamp_duty'])?$booking['stamp_duty']:''; ?></td>
        <td><b style="margin-left: 10%;">GST</b></td>
        <td><?php echo !empty($booking['gst'])?$booking['gst']:''; ?></td>
      </tr>
      <tr>
        <td><b>Documentation Legal Charges</b></td>
        <td><?php echo !empty($booking['documentation_legal_charges'])?$booking['documentation_legal_charges']:''; ?></td>
        <td><b style="margin-left: 10%;">Reg.Misc.Charges</b></td>
        <td><?php echo !empty($booking['reg_misc_charges'])?$booking['reg_misc_charges']:''; ?></td>
      </tr>
      <tr>
        <td><b>Flat/Plot Cost Total</b></td>
        <td><?php echo !empty($booking['flat_plot_cost_total'])?$booking['flat_plot_cost_total']:''; ?></td>
        <td><b style="margin-left: 10%;">Regsteration Expenses Total</b></td>
        <td><?php echo !empty($booking['reg_expenses_total'])?$booking['reg_expenses_total']:''; ?></td>
      </tr>
      <tr>
        <td><b>Flat/Plot Blocking Amount</b></td>
        <td><?php echo !empty($booking['flat_plot_blocking_amount_total'])?$booking['flat_plot_blocking_amount_total']:''; ?></td>
        <td><b style="margin-left: 10%;">At the Time of Agreement-15 day from Booking</b></td>
        <td><?php echo !empty($booking['agreement_fiveteendays_total'])?$booking['agreement_fiveteendays_total']:''; ?></td>
      </tr>
      <tr>
        <td><b>At the time of registeration-30 day from Agreement</b></td>
        <td><?php echo !empty($booking['agreemnt_thirtydays_total'])?$booking['agreemnt_thirtydays_total']:''; ?></td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td><b>Date</b></td>
        <td><?php echo !empty($booking['date'])?$booking['date']:''; ?></td>
        <td><b style="margin-left: 10%;">Place</b></td>
        <td><?php echo !empty($booking['place'])?$booking['place']:''; ?></td>
      </tr>
       <tr  <?php if($booking['project_status'] == 'Booking'){ ?> style="display: none;" <?php } ?>>
        <td><b>First Applicant</b></td>
        <td><img src="<?php echo base_url(); ?>assets/images/bookingform/first/<?php echo $booking['first_applicant_sign']; ?>" style="width: 140px;height: 75px;"></td>
        <td><b style="margin-left: 10%;">Co-Applicant</b></td>
        <td><img src="<?php echo base_url(); ?>assets/images/bookingform/second/<?php echo $booking['second_applicant_sign']; ?>" style="width: 140px;height: 75px;"></td>
      </tr>
      
    </tbody>
  </table>
   <button class="btn btn-success"  style="background-color: greenyellow;color: #000; border: 0px;font-weight: 600;" onclick="myApp.printTable()" >Download</button>
</div>





<script>
    var myApp = new function () {
        this.printTable = function () {
            var tab = document.getElementById("tab");
            var win = window.open("", "", "height=700,width=700");
            win.document.write(tab.outerHTML);
            win.document.close();
            win.print();
        }
    }
</script>
</body>
</html>
