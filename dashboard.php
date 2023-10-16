
<?php include 'header.php';

  if(isset($_SESSION['valid'])) {     
    include("connection.php");      
 ?>

<style>
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 300px;
  margin: auto;
  text-align: center;
  font-family: arial;
}

.title {
  color: grey;
  font-size: 18px;
}


</style>
<div class="container">
    <h2 style="text-align:center">Employee of the year - 2020</h2>
 
      
    <div class="card">
  <img src="images/emp1.jpeg" alt="emp" style="width:100%">
  <img src="images/congrats2.gif" alt="emp" style="width:100%">

  
  <h3>Chandra Sekhar</h3>
  <p class="title">Eswari Homes</p>
  <!-- <p>9951870422</p>
  <p>chandrasekhar.vizag@gmail.com</p> -->
</div> 
     
   
	


		
	<?php	
	} else {
		header('Location: login.php');
	}
	?>
</div>

	
	<?php include 'footer.php'; ?>
	
</body>
</html>
