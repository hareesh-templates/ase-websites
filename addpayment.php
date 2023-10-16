<?php include 'header.php'; ?>
  <?php $sale_id = $_GET['sale_id'];?>

 <script src= 
"https://code.jquery.com/jquery-1.12.4.min.js"> 
    </script> 
   <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<div class="container">
<h2>Add Payment</h2>
	<form action="add_payment.php" method="post" name="myForm"  onsubmit="return validateForm()"  enctype = "multipart/form-data">
     <div class="form-group">
      <label for="email">Transaction Type:</label> 
      <select name="crdr" class="form-control" required>
          <option value="">Select Transaction Type</option>
            <option  value="CR"> Credit </option>
            <option  value="DR"> Debit </option>
           </select>
    </div>
    <div class="form-group">
      <label for="email">Payment Mode:</label> 
      <select name="payment_mode" class="form-control" required>
          <option value="">Select Transaction Type</option>
            <option  value="Cash"> Cash </option>
            <option  value="Cheque"> Cheque </option>
            <option  value="Online"> Online </option>
           </select>
    </div>
	<div class="form-group">
       <label for="email">Amount (INR):</label> 
      <input type="number" class="form-control" id="name" placeholder="Enter Amount Here" name="term_amount" required autocomplete="off">
    </div>
   
   
    <div class="form-group">
       <label for="email">Payment Date:</label> 
      <input type="text" class="form-control" id="datepicker"  name="payment_date" requiredautocomplete="off">
    </div>
    <div class="form-group">
      <label for="email">Remarks:</label> 
       <textarea name="payment_remark" class="form-control" placeholder="Enter Comments"></textarea>
    </div>
    <input type="hidden" name="sale_id" value="<?php echo $sale_id; ?>">
    <input type="submit" name="Submit" value="Add" class="btn btn-success">
		
	</form>
</div>
<script>
   $(function() {  
        $( "#datepicker" ).datepicker({
            dateFormat: 'dd-mm-yy',
          changeMonth: true,
          changeYear: true
        });
      });
</script>

<?php include 'footer.php'; ?>
</body>
</html>

