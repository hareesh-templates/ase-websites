
<?php include 'header.php'; ?>

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

button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}



button:hover, a:hover {
  opacity: 0.7;
}
</style>
<div class="container">
    <h2 style="text-align:center">Best Employee(s) of the Month - March</h2>
    <div class="row">
  <?php
	if(isset($_SESSION['valid'])) {			
		include("connection.php");					
	 $result1 = mysqli_query($mysqli, "SELECT COUNT(*) as maxcount from sales GROUP by added_by ORDER by maxcount desc limit 1");
   $maxcount = '';
    while($res1 = mysqli_fetch_array($result1))
    {
      
      $maxcount = $res1['maxcount'];
    }
    $month = date('m');
    if($maxcount != ''){
    $result = mysqli_query($mysqli, "select login.name,login.company,login.email,login.phonenumber,added_by, COUNT(*) as count FROM sales join login ON sales.added_by=login.id WHERE MONTH(added_on) = $month GROUP BY added_by HAVING count = $maxcount");
   while($res = mysqli_fetch_array($result)) {  ?>
      
    <div class="card col-md-4">
  <img src="images/emp.png" alt="emp" style="width:100%">
  <h3><?php echo $res['name']; ?></h3>
  <p class="title"><?php 
     if($res['company'] == 'eh'){
          $company = 'Eswari Homes';
        }
        if($res['company'] == 'ec'){
          $company = 'Eswari Capital';
        }
        if($res['company'] == 'at'){
          $company = 'ASE Technologies';
        }
        if($res['company'] == 'eg'){
          $company = 'Eswari Group';
        }
   echo $company; ?></p>
  <p><?php echo $res['phonenumber'] ?></p>
  <p><?php echo $res['email'] ?></p>
</div> 
     
   <?php }
    }else{
      echo 'No Best Employee of this month';
    }


	?>
	


		
	<?php	
	} else {
		header('Location: login.php');
	}
	?>
</div>
</div>

	
	<?php include 'footer.php'; ?>
	
</body>
</html>
