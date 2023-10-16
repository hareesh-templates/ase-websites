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
<h2>Add Sale</h2>
	<form action="add_sale.php" method="post" name="myForm"  onsubmit="return validateForm()"  enctype = "multipart/form-data">
   
  <div class="form-group">
       <label for="email">Customer Name:</label> 
      <input type="text" class="form-control" id="name" placeholder="Enter Customer Name Here" name="customer_name" required autocomplete="off">
    </div>
    <div class="form-group">
       <label for="email">Mobile:</label> 
      <input type="text" class="form-control" id="name" placeholder="Enter Mobile No Here" name="mobile_number" required autocomplete="off">
    </div>
    <div class="form-group">
       <label for="email">Project:</label> 
      <input type="text" class="form-control" id="name" placeholder="Enter Project Here" name="project" required autocomplete="off">
    </div>
	<div class="form-group">
       <label for="email">Amount (INR):</label> 
      <input type="number" class="form-control" id="name" placeholder="Enter Amount Here" name="amount" required autocomplete="off">
    </div>
   
   
    <div class="form-group">
       <label for="email">Sale Date:</label> 
      <input type="text" class="form-control" id="datepicker"  name="sales_date" requiredautocomplete="off">
    </div>
     <div class="form-group">
       <label for="email">Employee:</label> 
      <input type="text" class="form-control"   name="employee" requiredautocomplete="off">
    </div>
    <div class="form-group">
       <label for="email">Manager:</label> 
      <input type="text" class="form-control"   name="manager" requiredautocomplete="off">
    </div>
    <div class="form-group">
      <label for="email">Remarks:</label> 
       <textarea name="remark" class="form-control" placeholder="Enter Comments"></textarea>
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

