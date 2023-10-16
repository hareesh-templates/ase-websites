<?php include 'header.php'; ?>
<?php
if(!isset($_SESSION['valid'])) {
  header('Location: login.php');
}
?>
 <script src= 
"https://code.jquery.com/jquery-1.12.4.min.js"> 
    </script> 
   <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<div class="container">
<h2>Add Transaction</h2>
	<form action="add.php" method="post" name="myForm"  onsubmit="return validateForm()"  enctype = "multipart/form-data">
     <div class="form-group">
      <label for="email">Transaction Type:</label> 
      <select name="crdr" class="form-control" required>
          <option value="">Select Transaction Type</option>
            <option  value="CR"> Credit </option>
            <option  value="DR"> Debit </option>
           </select>
    </div>
  
	<div class="form-group">
       <label for="email">Transaction Amount (INR):</label> 
      <input type="number" class="form-control" id="name" placeholder="Enter Transaction Amount Here" name="transaction_amount" required autocomplete="off">
    </div>
   
   
    <div class="form-group">
       <label for="email">Transaction Date:</label> 
      <input type="text" class="form-control" id="datepicker"  name="transaction_date" requiredautocomplete="off">
    </div>
    <div class="form-group">
      <label for="email">Remarks:</label> 
       <textarea name="remarks" class="form-control" placeholder="Enter Comments"></textarea>
    </div>
    <input type="hidden" name="added_by" value="<?php echo $_SESSION['name']; ?>">
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

