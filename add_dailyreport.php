<?php include 'header2.php'; ?>
<?php
//including the database connection file
include_once("connection.php");

if(isset($_POST['Submit'])) {	
	 $no_of_visits = $_POST['no_of_visits'];
	 $no_of_ftof = $_POST['no_of_ftof'];
	 $new_leads = $_POST['new_leads'];
	 $no_of_calls = $_POST['no_of_calls'];
	 $sales = $_POST['sales'];
	 $location = $_POST['location'];
	 $meeting_points = $_POST['meeting_points'];
	 $applied_on = date("Y-m-d");
	 //echo $applied_on; die();
	  if(isset($_POST['customer_name'])){
	 	 $customer_name = $_POST['customer_name'];
		}
	  $customer_name_f = $_POST['customer_name_f'];

	  if(isset($_POST['customer_name_c1'])){
		  $customer_name_c1 = $_POST['customer_name_c1'];
		  $customer_number_c1 = $_POST['customer_number_c1'];
		  $interest_details1 = $_POST['interest_details1'];
		  $lead1 = $_POST['lead1'];
		}
	 if(isset($_POST['customer_name_c2'])){
		  $customer_name_c2 = $_POST['customer_name_c2'];
		  $customer_number_c2 = $_POST['customer_number_c2'];
		  $interest_details2 = $_POST['interest_details2'];
		  $lead2 = $_POST['lead2'];
		}
		 if(isset($_POST['customer_name_c3'])){
		  $customer_name_c3 = $_POST['customer_name_c3'];
		  $customer_number_c3 = $_POST['customer_number_c3'];
		  $interest_details3 = $_POST['interest_details3'];
		  $lead3 = $_POST['lead3'];
		}
		if(isset($_POST['customer_name_c4'])){
		  $customer_name_c4 = $_POST['customer_name_c4'];
		  $customer_number_c4 = $_POST['customer_number_c4'];
		  $interest_details4 = $_POST['interest_details4'];
		  $lead4 = $_POST['lead4'];
		}
		if(isset($_POST['customer_name_c5'])){
		  $customer_name_c5 = $_POST['customer_name_c5'];
		  $customer_number_c5 = $_POST['customer_number_c5'];
		  $interest_details5 = $_POST['interest_details5'];
		  $lead5 = $_POST['lead5'];
		}
		if(isset($_POST['customer_name_c6'])){
		  $customer_name_c6 = $_POST['customer_name_c6'];
		  $customer_number_c6 = $_POST['customer_number_c6'];
		  $interest_details6 = $_POST['interest_details6'];
		  $lead6 = $_POST['lead6'];
		}
		if(isset($_POST['customer_name_c7'])){
		  $customer_name_c7 = $_POST['customer_name_c7'];
		  $customer_number_c7 = $_POST['customer_number_c7'];
		  $interest_details7 = $_POST['interest_details7'];
		  $lead7 = $_POST['lead7'];
		}
		if(isset($_POST['customer_name_c8'])){
		  $customer_name_c8 = $_POST['customer_name_c8'];
		  $customer_number_c8 = $_POST['customer_number_c8'];
		  $interest_details8 = $_POST['interest_details8'];
		  $lead8 = $_POST['lead8'];
		}
		if(isset($_POST['customer_name_c9'])){
		  $customer_name_c9 = $_POST['customer_name_c9'];
		  $customer_number_c9 = $_POST['customer_number_c9'];
		  $interest_details9 = $_POST['interest_details9'];
		  $lead9 = $_POST['lead9'];
		}
		if(isset($_POST['customer_name_c10'])){
		  $customer_name_c10 = $_POST['customer_name_c10'];
		  $customer_number_c10 = $_POST['customer_number_c10'];
		  $interest_details10 = $_POST['interest_details10'];
		  $lead10 = $_POST['lead10'];
		}

		if(isset($_POST['customer_name_c11'])){
		  $customer_name_c11 = $_POST['customer_name_c11'];
		  $customer_number_c11 = $_POST['customer_number_c11'];
		  $interest_details11 = $_POST['interest_details11'];
		  $lead11 = $_POST['lead11'];
		}
	 if(isset($_POST['customer_name_c12'])){
		  $customer_name_c12 = $_POST['customer_name_c12'];
		  $customer_number_c12 = $_POST['customer_number_c12'];
		  $interest_details12 = $_POST['interest_details12'];
		  $lead12 = $_POST['lead12'];
		}
		 if(isset($_POST['customer_name_c13'])){
		  $customer_name_c13 = $_POST['customer_name_c13'];
		  $customer_number_c13 = $_POST['customer_number_c13'];
		  $interest_details13 = $_POST['interest_details13'];
		  $lead13 = $_POST['lead13'];
		}
		if(isset($_POST['customer_name_c14'])){
		  $customer_name_c14 = $_POST['customer_name_c14'];
		  $customer_number_c14 = $_POST['customer_number_c14'];
		  $interest_details14 = $_POST['interest_details14'];
		  $lead14 = $_POST['lead14'];
		}
		if(isset($_POST['customer_name_c15'])){
		  $customer_name_c15 = $_POST['customer_name_c15'];
		  $customer_number_c15 = $_POST['customer_number_c15'];
		  $interest_details15 = $_POST['interest_details15'];
		  $lead15 = $_POST['lead15'];
		}
		if(isset($_POST['customer_name_c16'])){
		  $customer_name_c16 = $_POST['customer_name_c16'];
		  $customer_number_c16 = $_POST['customer_number_c16'];
		  $interest_details16 = $_POST['interest_details16'];
		  $lead16 = $_POST['lead16'];
		}
		if(isset($_POST['customer_name_c17'])){
		  $customer_name_c17 = $_POST['customer_name_c17'];
		  $customer_number_c17 = $_POST['customer_number_c17'];
		  $interest_details17 = $_POST['interest_details17'];
		  $lead17 = $_POST['lead17'];
		}
		if(isset($_POST['customer_name_c18'])){
		  $customer_name_c18 = $_POST['customer_name_c18'];
		  $customer_number_c18 = $_POST['customer_number_c18'];
		  $interest_details18 = $_POST['interest_details18'];
		  $lead18 = $_POST['lead18'];
		}
		if(isset($_POST['customer_name_c19'])){
		  $customer_name_c19 = $_POST['customer_name_c19'];
		  $customer_number_c19 = $_POST['customer_number_c19'];
		  $interest_details19 = $_POST['interest_details19'];
		  $lead19 = $_POST['lead19'];
		}
		if(isset($_POST['customer_name_c20'])){
		  $customer_name_c20 = $_POST['customer_name_c20'];
		  $customer_number_c20 = $_POST['customer_number_c20'];
		  $interest_details20 = $_POST['interest_details20'];
		  $lead20 = $_POST['lead20'];
		}

		if(isset($_POST['customer_namec1'])){
		  $customer_namec1 = $_POST['customer_namec1'];
		  $customer_numberc1 = $_POST['customer_numberc1'];
		  $interest_details21 = $_POST['interest_details21'];
		  $lead21 = $_POST['lead21'];
		}
	 if(isset($_POST['customer_namec2'])){
		  $customer_namec2 = $_POST['customer_namec2'];
		  $customer_numberc2 = $_POST['customer_numberc2'];
		  $interest_details22 = $_POST['interest_details22'];
		  $lead22 = $_POST['lead22'];
		}
		 if(isset($_POST['customer_namec3'])){
		  $customer_namec3 = $_POST['customer_namec3'];
		  $customer_numberc3 = $_POST['customer_numberc3'];
		  $interest_details23 = $_POST['interest_details23'];
		  $lead23 = $_POST['lead23'];
		}
		if(isset($_POST['customer_namec4'])){
		  $customer_namec4 = $_POST['customer_namec4'];
		  $customer_numberc4 = $_POST['customer_numberc4'];
		  $interest_details24 = $_POST['interest_details24'];
		  $lead24 = $_POST['lead24'];
		}
		if(isset($_POST['customer_namec5'])){
		  $customer_namec5 = $_POST['customer_namec5'];
		  $customer_numberc5 = $_POST['customer_numberc5'];
		  $interest_details25 = $_POST['interest_details25'];
		  $lead25 = $_POST['lead25'];
		}
		if(isset($_POST['customer_namec6'])){
		  $customer_namec6 = $_POST['customer_namec6'];
		  $customer_numberc6 = $_POST['customer_numberc6'];
		  $interest_details26 = $_POST['interest_details26'];
		  $lead26 = $_POST['lead26'];
		}
		if(isset($_POST['customer_namec7'])){
		  $customer_namec7 = $_POST['customer_namec7'];
		  $customer_numberc7 = $_POST['customer_numberc7'];
		  $interest_details27 = $_POST['interest_details27'];
		  $lead27 = $_POST['lead27'];
		}
		if(isset($_POST['customer_namec8'])){
		  $customer_namec8 = $_POST['customer_namec8'];
		  $customer_numberc8 = $_POST['customer_numberc8'];
		  $interest_details28 = $_POST['interest_details28'];
		  $lead28 = $_POST['lead28'];
		}
		if(isset($_POST['customer_namec9'])){
		  $customer_namec9 = $_POST['customer_namec9'];
		  $customer_numberc9 = $_POST['customer_numberc9'];
		  $interest_details29 = $_POST['interest_details29'];
		  $lead29 = $_POST['lead29'];
		}
		if(isset($_POST['customer_namec30'])){
		  $customer_namec30 = $_POST['customer_namec30'];
		  $customer_numberc30 = $_POST['customer_numberc30'];
		  $interest_details30 = $_POST['interest_details30'];
		  $lead30 = $_POST['lead30'];
		}
		if(isset($_POST['cname31'])){
		  $cname31 = $_POST['cname31'];
		  $cnumber31 = $_POST['cnumber31'];
		  $interest_details31 = $_POST['interest_details31'];
		  $lead31 = $_POST['lead31'];
		}
		if(isset($_POST['cname32'])){
		  $cname32 = $_POST['cname32'];
		  $cnumber32 = $_POST['cnumber32'];
		  $interest_details32 = $_POST['interest_details32'];
		  $lead32 = $_POST['lead32'];
		}
		if(isset($_POST['cname33'])){
		  $cname33 = $_POST['cname33'];
		  $cnumber33 = $_POST['cnumber33'];
		  $interest_details33 = $_POST['interest_details33'];
		  $lead33 = $_POST['lead33'];
		}
		if(isset($_POST['cname34'])){
		  $cname34 = $_POST['cname34'];
		  $cnumber34 = $_POST['cnumber34'];
		  $interest_details34 = $_POST['interest_details34'];
		  $lead34 = $_POST['lead34'];
		}
		if(isset($_POST['cname35'])){
		  $cname35 = $_POST['cname35'];
		  $cnumber35 = $_POST['cnumber35'];
		  $interest_details35 = $_POST['interest_details35'];
		  $lead35 = $_POST['lead35'];
		}
		if(isset($_POST['cname36'])){
		  $cname36 = $_POST['cname36'];
		  $cnumber36 = $_POST['cnumber36'];
		  $interest_details36 = $_POST['interest_details36'];
		  $lead36 = $_POST['lead36'];
		}
		if(isset($_POST['cname37'])){
		  $cname37 = $_POST['cname37'];
		  $cnumber37 = $_POST['cnumber37'];
		  $interest_details37 = $_POST['interest_details37'];
		  $lead37 = $_POST['lead37'];
		}
		if(isset($_POST['cname38'])){
		  $cname38 = $_POST['cname38'];
		  $cnumber38 = $_POST['cnumber38'];
		  $interest_details38 = $_POST['interest_details38'];
		  $lead38 = $_POST['lead38'];
		}
		if(isset($_POST['cname39'])){
		  $cname39 = $_POST['cname39'];
		  $cnumber39 = $_POST['cnumber39'];
		  $interest_details39 = $_POST['interest_details39'];
		  $lead39 = $_POST['lead39'];
		}
		if(isset($_POST['cname40'])){
		  $cname40 = $_POST['cname40'];
		  $cnumber40 = $_POST['cnumber40'];
		  $interest_details40 = $_POST['interest_details40'];
		  $lead40 = $_POST['lead40'];
		}
		if(isset($_POST['cname41'])){
		  $cname41 = $_POST['cname41'];
		  $cnumber41 = $_POST['cnumber41'];
		  $interest_details41 = $_POST['interest_details41'];
		  $lead41 = $_POST['lead41'];
		}
		if(isset($_POST['cname42'])){
		  $cname42 = $_POST['cname42'];
		  $cnumber42 = $_POST['cnumber42'];
		  $interest_details42 = $_POST['interest_details42'];
		  $lead42 = $_POST['lead42'];
		}
		if(isset($_POST['cname43'])){
		  $cname43 = $_POST['cname43'];
		  $cnumber43 = $_POST['cnumber43'];
		  $interest_details43 = $_POST['interest_details43'];
		  $lead43 = $_POST['lead43'];
		}
		if(isset($_POST['cname44'])){
		  $cname44 = $_POST['cname44'];
		  $cnumber44 = $_POST['cnumber44'];
		  $interest_details44 = $_POST['interest_details44'];
		  $lead44 = $_POST['lead44'];
		}
		if(isset($_POST['cname45'])){
		  $cname45 = $_POST['cname45'];
		  $cnumber45 = $_POST['cnumber45'];
		  $interest_details45 = $_POST['interest_details45'];
		  $lead45 = $_POST['lead45'];
		}
		if(isset($_POST['cname46'])){
		  $cname46 = $_POST['cname46'];
		  $cnumber46 = $_POST['cnumber46'];
		  $interest_details46 = $_POST['interest_details46'];
		  $lead46 = $_POST['lead46'];
		}
		if(isset($_POST['cname47'])){
		  $cname47 = $_POST['cname47'];
		  $cnumber47 = $_POST['cnumber47'];
		  $interest_details47 = $_POST['interest_details47'];
		  $lead47 = $_POST['lead47'];
		}
		if(isset($_POST['cname48'])){
		  $cname48 = $_POST['cname48'];
		  $cnumber48 = $_POST['cnumber48'];
		  $interest_details48 = $_POST['interest_details48'];
		  $lead48 = $_POST['lead48'];
		}
		if(isset($_POST['cname49'])){
		  $cname49 = $_POST['cname49'];
		  $cnumber49 = $_POST['cnumber49'];
		  $interest_details49 = $_POST['interest_details49'];
		  $lead49 = $_POST['lead49'];
		}
		if(isset($_POST['cname50'])){
		  $cname50 = $_POST['cname50'];
		  $cnumber50 = $_POST['cnumber50'];
		  $interest_details50 = $_POST['interest_details50'];
		  $lead50 = $_POST['lead50'];
		}
	  
	  $loginId = $_SESSION['id']; 
		
	// checking empty fields
	if(empty($no_of_ftof)) {
				
		if(empty($no_of_ftof)) {
			echo "<div class='container'><font color='red'>No of f to f field is empty.</font><br/>";
		}
		
		
		//link to the previous page
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a></div>";
	} else { 
			$sql = "INSERT INTO daily_reports (no_of_visits,no_of_ftof,new_leads,sales,no_of_calls,added_by,applied_on,location,meeting_points) VALUES ($no_of_visits,$no_of_ftof,$new_leads,$sales,$no_of_calls,$loginId,'$applied_on','$location','$meeting_points')";
			

			if ($mysqli->query($sql) === TRUE) {
				 $last_id = $mysqli->insert_id;
				
				 if($_POST['no_of_visits'] > 0){
				foreach ($customer_name as $customer_name) {
					 $sql2 = "INSERT INTO daily_reports_customerdetails (daily_reports_id,customer_name) VALUES ($last_id,'$customer_name')";
					 	if ($mysqli->query($sql2) === TRUE) {
					 		$last_id2 = $mysqli->insert_id;
						}
				}
				}
				foreach ($customer_name_f as $customer_name_f) {
					 $sql3 = "INSERT INTO daily_reports_customerdetails_f (daily_reports_id,customer_name_f) VALUES ($last_id,'$customer_name_f')";
					 	if ($mysqli->query($sql3) === TRUE) {
					 		$last_id2 = $mysqli->insert_id;
						}
				}
				
		$sql4 = "INSERT INTO no_of_calls (daily_reports_id,customer_name_c,customer_number_c,interest_details,lead) VALUES ($last_id,'$customer_name_c1','$customer_number_c1','$interest_details1','$lead1')";
		$sql5 = "INSERT INTO no_of_calls (daily_reports_id,customer_name_c,customer_number_c,interest_details,lead) VALUES ($last_id,'$customer_name_c2','$customer_number_c2','$interest_details2','$lead2')";
		$sql6 = "INSERT INTO no_of_calls (daily_reports_id,customer_name_c,customer_number_c,interest_details,lead) VALUES ($last_id,'$customer_name_c3','$customer_number_c3','$interest_details3','$lead3')";
		$sql7 = "INSERT INTO no_of_calls (daily_reports_id,customer_name_c,customer_number_c,interest_details,lead) VALUES ($last_id,'$customer_name_c4','$customer_number_c4','$interest_details4','$lead4')";
		$sql8 = "INSERT INTO no_of_calls (daily_reports_id,customer_name_c,customer_number_c,interest_details,lead) VALUES ($last_id,'$customer_name_c5','$customer_number_c5','$interest_details5','$lead5')";
		$sql9 = "INSERT INTO no_of_calls (daily_reports_id,customer_name_c,customer_number_c,interest_details,lead) VALUES ($last_id,'$customer_name_c6','$customer_number_c6','$interest_details6','$lead6')";
		$sql10 = "INSERT INTO no_of_calls (daily_reports_id,customer_name_c,customer_number_c,interest_details,lead) VALUES ($last_id,'$customer_name_c7','$customer_number_c7','$interest_details7','$lead7')";
		$sql11 = "INSERT INTO no_of_calls (daily_reports_id,customer_name_c,customer_number_c,interest_details,lead) VALUES ($last_id,'$customer_name_c8','$customer_number_c8','$interest_details8','$lead8')";
		$sql12 = "INSERT INTO no_of_calls (daily_reports_id,customer_name_c,customer_number_c,interest_details,lead) VALUES ($last_id,'$customer_name_c9','$customer_number_c9','$interest_details9','$lead9')";
		$sql13 = "INSERT INTO no_of_calls (daily_reports_id,customer_name_c,customer_number_c,interest_details,lead) VALUES ($last_id,'$customer_name_c10','$customer_number_c10','$interest_details10','$lead10')";
		$sql14 = "INSERT INTO no_of_calls (daily_reports_id,customer_name_c,customer_number_c,interest_details,lead) VALUES ($last_id,'$customer_name_c11','$customer_number_c11','$interest_details11','$lead11')";
		$sql15 = "INSERT INTO no_of_calls (daily_reports_id,customer_name_c,customer_number_c,interest_details,lead) VALUES ($last_id,'$customer_name_c12','$customer_number_c12','$interest_details12','$lead12')";
		$sql16 = "INSERT INTO no_of_calls (daily_reports_id,customer_name_c,customer_number_c,interest_details,lead) VALUES ($last_id,'$customer_name_c13','$customer_number_c13','$interest_details13','$lead13')";
		$sql17 = "INSERT INTO no_of_calls (daily_reports_id,customer_name_c,customer_number_c,interest_details,lead) VALUES ($last_id,'$customer_name_c14','$customer_number_c14','$interest_details14','$lead14')";
		$sql18 = "INSERT INTO no_of_calls (daily_reports_id,customer_name_c,customer_number_c,interest_details,lead) VALUES ($last_id,'$customer_name_c15','$customer_number_c15','$interest_details15','$lead15')";
		$sql19 = "INSERT INTO no_of_calls (daily_reports_id,customer_name_c,customer_number_c,interest_details,lead) VALUES ($last_id,'$customer_name_c16','$customer_number_c16','$interest_details16','$lead16')";
		$sql20 = "INSERT INTO no_of_calls (daily_reports_id,customer_name_c,customer_number_c,interest_details,lead) VALUES ($last_id,'$customer_name_c17','$customer_number_c17','$interest_details17','$lead17')";
		$sql21 = "INSERT INTO no_of_calls (daily_reports_id,customer_name_c,customer_number_c,interest_details,lead) VALUES ($last_id,'$customer_name_c18','$customer_number_c18','$interest_details18','$lead18')";
		$sql22 = "INSERT INTO no_of_calls (daily_reports_id,customer_name_c,customer_number_c,interest_details,lead) VALUES ($last_id,'$customer_name_c19','$customer_number_c19','$interest_details19','$lead19')";
		$sql23 = "INSERT INTO no_of_calls (daily_reports_id,customer_name_c,customer_number_c,interest_details,lead) VALUES ($last_id,'$customer_name_c20','$customer_number_c20','$interest_details20','$lead20')";

		if(isset($_POST['customer_namec1'])){
			$sql24 = "INSERT INTO no_of_calls (daily_reports_id,customer_name_c,customer_number_c,interest_details,lead) VALUES ($last_id,'$customer_namec1','$customer_numberc1','$interest_details21','$lead21')";
			if ($mysqli->query($sql24) === TRUE) {
					 		
						}
		}
		if(isset($_POST['customer_namec2'])){
				$sql25 = "INSERT INTO no_of_calls (daily_reports_id,customer_name_c,customer_number_c,interest_details,lead) VALUES ($last_id,'$customer_namec2','$customer_numberc2','$interest_details22','$lead22')";
				if ($mysqli->query($sql25) === TRUE) {
					 		
						}
		}
		if(isset($_POST['customer_namec3'])){
			$sql26 = "INSERT INTO no_of_calls (daily_reports_id,customer_name_c,customer_number_c,interest_details,lead) VALUES ($last_id,'$customer_namec3','$customer_numberc3','$interest_details23','$lead23')";
			if ($mysqli->query($sql26) === TRUE) {
					 		
						}
		}
		if(isset($_POST['customer_namec4'])){
			$sql27 = "INSERT INTO no_of_calls (daily_reports_id,customer_name_c,customer_number_c,interest_details,lead) VALUES ($last_id,'$customer_namec4','$customer_numberc4','$interest_details24','$lead24')";
			if ($mysqli->query($sql27) === TRUE) {
					 		
						}
		}
		if(isset($_POST['customer_namec5'])){
			$sql28 = "INSERT INTO no_of_calls (daily_reports_id,customer_name_c,customer_number_c,interest_details,lead) VALUES ($last_id,'$customer_namec5','$customer_numberc5','$interest_details25','$lead25')";
			if ($mysqli->query($sql28) === TRUE) {
					 		
						}
		}
		if(isset($_POST['customer_namec6'])){
			$sql29 = "INSERT INTO no_of_calls (daily_reports_id,customer_name_c,customer_number_c,interest_details,lead) VALUES ($last_id,'$customer_namec6','$customer_numberc6','$interest_details26','$lead26')";
			if ($mysqli->query($sql29) === TRUE) {
					 		
						}
		}
		if(isset($_POST['customer_namec7'])){
			$sql30 = "INSERT INTO no_of_calls (daily_reports_id,customer_name_c,customer_number_c,interest_details,lead) VALUES ($last_id,'$customer_namec7','$customer_numberc7','$interest_details27','$lead27')";
			if ($mysqli->query($sql30) === TRUE) {
					 		
						}
		}
		if(isset($_POST['customer_namec8'])){
			$sql31 = "INSERT INTO no_of_calls (daily_reports_id,customer_name_c,customer_number_c,interest_details,lead) VALUES ($last_id,'$customer_namec8','$customer_numberc8','$interest_details28','$lead28')";
			if ($mysqli->query($sql31) === TRUE) {
					 		
						}
		}
		if(isset($_POST['customer_namec9'])){
			$sql32 = "INSERT INTO no_of_calls (daily_reports_id,customer_name_c,customer_number_c,interest_details,lead) VALUES ($last_id,'$customer_namec9','$customer_numberc9','$interest_details29','$lead29')";
			if ($mysqli->query($sql32) === TRUE) {
					 		
						}
		}
		if(isset($_POST['customer_namec30'])){
			$sql33 = "INSERT INTO no_of_calls (daily_reports_id,customer_name_c,customer_number_c,interest_details,lead) VALUES ($last_id,'$customer_namec30','$customer_numberc30','$interest_details30','$lead30')";
			if ($mysqli->query($sql33) === TRUE) {
					 		
						}
		}

		if(isset($_POST['cname31'])){
			$sql41 = "INSERT INTO no_of_calls (daily_reports_id,customer_name_c,customer_number_c,interest_details,lead) VALUES ($last_id,'$cname31','$cnumber31','$interest_details31','$lead31')";
			if ($mysqli->query($sql41) === TRUE) {
					 		
						}
		}

		if(isset($_POST['cname32'])){
			$sql42 = "INSERT INTO no_of_calls (daily_reports_id,customer_name_c,customer_number_c,interest_details,lead) VALUES ($last_id,'$cname32','$cnumber32','$interest_details32','$lead32')";
			if ($mysqli->query($sql42) === TRUE) {
					 		
						}
		}

		if(isset($_POST['cname33'])){
			$sql43 = "INSERT INTO no_of_calls (daily_reports_id,customer_name_c,customer_number_c,interest_details,lead) VALUES ($last_id,'$cname33','$cnumber33','$interest_details33','$lead33')";
			if ($mysqli->query($sql43) === TRUE) {
					 		
						}
		}

		if(isset($_POST['cname34'])){
			$sql44 = "INSERT INTO no_of_calls (daily_reports_id,customer_name_c,customer_number_c,interest_details,lead) VALUES ($last_id,'$cname34','$cnumber34','$interest_details34','$lead34')";
			if ($mysqli->query($sql44) === TRUE) {
					 		
						}
		}

		if(isset($_POST['cname35'])){
			$sql45 = "INSERT INTO no_of_calls (daily_reports_id,customer_name_c,customer_number_c,interest_details,lead) VALUES ($last_id,'$cname35','$cnumber35','$interest_details35','$lead35')";
			if ($mysqli->query($sql45) === TRUE) {
					 		
						}
		}

		if(isset($_POST['cname36'])){
			$sql46 = "INSERT INTO no_of_calls (daily_reports_id,customer_name_c,customer_number_c,interest_details,lead) VALUES ($last_id,'$cname36','$cnumber36','$interest_details36','$lead36')";
			if ($mysqli->query($sql46) === TRUE) {
					 		
						}
		}

		if(isset($_POST['cname37'])){
			$sql47 = "INSERT INTO no_of_calls (daily_reports_id,customer_name_c,customer_number_c,interest_details,lead) VALUES ($last_id,'$cname37','$cnumber37','$interest_details37','$lead37')";
			if ($mysqli->query($sql47) === TRUE) {
					 		
						}
		}

		if(isset($_POST['cname38'])){
			$sql48 = "INSERT INTO no_of_calls (daily_reports_id,customer_name_c,customer_number_c,interest_details,lead) VALUES ($last_id,'$cname38','$cnumber38','$interest_details38','$lead38')";
			if ($mysqli->query($sql48) === TRUE) {
					 		
						}
		}

		if(isset($_POST['cname39'])){
			$sql49 = "INSERT INTO no_of_calls (daily_reports_id,customer_name_c,customer_number_c,interest_details,lead) VALUES ($last_id,'$cname39','$cnumber39','$interest_details39','$lead39')";
			if ($mysqli->query($sql49) === TRUE) {
					 		
						}
		}

		if(isset($_POST['cname40'])){
			$sql50 = "INSERT INTO no_of_calls (daily_reports_id,customer_name_c,customer_number_c,interest_details,lead) VALUES ($last_id,'$cname40','$cnumber40','$interest_details40','$lead40')";
			if ($mysqli->query($sql50) === TRUE) {
					 		
						}
		}


		if(isset($_POST['cname41'])){
			$sql51 = "INSERT INTO no_of_calls (daily_reports_id,customer_name_c,customer_number_c,interest_details,lead) VALUES ($last_id,'$cname41','$cnumber41','$interest_details41','$lead41')";
			if ($mysqli->query($sql51) === TRUE) {
					 		
						}
		}
		if(isset($_POST['cname42'])){
			$sql52 = "INSERT INTO no_of_calls (daily_reports_id,customer_name_c,customer_number_c,interest_details,lead) VALUES ($last_id,'$cname42','$cnumber42','$interest_details42','$lead42')";
			if ($mysqli->query($sql52) === TRUE) {
					 		
						}
		}
		if(isset($_POST['cname43'])){
			$sql53 = "INSERT INTO no_of_calls (daily_reports_id,customer_name_c,customer_number_c,interest_details,lead) VALUES ($last_id,'$cname43','$cnumber43','$interest_details43','$lead43')";
			if ($mysqli->query($sql53) === TRUE) {
					 		
						}
		}
		if(isset($_POST['cname44'])){
			$sql54 = "INSERT INTO no_of_calls (daily_reports_id,customer_name_c,customer_number_c,interest_details,lead) VALUES ($last_id,'$cname44','$cnumber44','$interest_details44','$lead44')";
			if ($mysqli->query($sql54) === TRUE) {
					 		
						}
		}
		if(isset($_POST['cname45'])){
			$sql55 = "INSERT INTO no_of_calls (daily_reports_id,customer_name_c,customer_number_c,interest_details,lead) VALUES ($last_id,'$cname45','$cnumber45','$interest_details45','$lead45')";
			if ($mysqli->query($sql55) === TRUE) {
					 		
						}
		}
		if(isset($_POST['cname46'])){
			$sql56 = "INSERT INTO no_of_calls (daily_reports_id,customer_name_c,customer_number_c,interest_details,lead) VALUES ($last_id,'$cname46','$cnumber46','$interest_details46','$lead46')";
			if ($mysqli->query($sql56) === TRUE) {
					 		
						}
		}
		if(isset($_POST['cname47'])){
			$sql57 = "INSERT INTO no_of_calls (daily_reports_id,customer_name_c,customer_number_c,interest_details,lead) VALUES ($last_id,'$cname47','$cnumber47','$interest_details47','$lead47')";
			if ($mysqli->query($sql57) === TRUE) {
					 		
						}
		}
		if(isset($_POST['cname48'])){
			$sql58 = "INSERT INTO no_of_calls (daily_reports_id,customer_name_c,customer_number_c,interest_details,lead) VALUES ($last_id,'$cname48','$cnumber48','$interest_details48','$lead48')";
			if ($mysqli->query($sql58) === TRUE) {
					 		
						}
		}
		if(isset($_POST['cname49'])){
			$sql59 = "INSERT INTO no_of_calls (daily_reports_id,customer_name_c,customer_number_c,interest_details,lead) VALUES ($last_id,'$cname49','$cnumber49','$interest_details49','$lead49')";
			if ($mysqli->query($sql59) === TRUE) {
					 		
						}
		}

		if(isset($_POST['cname50'])){
			$sql60 = "INSERT INTO no_of_calls (daily_reports_id,customer_name_c,customer_number_c,interest_details,lead) VALUES ($last_id,'$cname50','$cnumber50','$interest_details50','$lead50')";
			if ($mysqli->query($sql60) === TRUE) {
					 		
						}
		}
					 	if ($mysqli->query($sql4) === TRUE) {
					 		
						}
						if ($mysqli->query($sql5) === TRUE) {
					 		
						}
						if ($mysqli->query($sql6) === TRUE) {
					 		
						}
						if ($mysqli->query($sql7) === TRUE) {
					 		
						}
						if ($mysqli->query($sql8) === TRUE) {
					 		
						}
						if ($mysqli->query($sql9) === TRUE) {
					 		
						}
						if ($mysqli->query($sql10) === TRUE) {
					 		
						}
						if ($mysqli->query($sql11) === TRUE) {
					 		
						}
						if ($mysqli->query($sql12) === TRUE) {
					 		
						}
						if ($mysqli->query($sql13) === TRUE) {
					 		
						}
						if ($mysqli->query($sql14) === TRUE) {
					 		
						}
						if ($mysqli->query($sql15) === TRUE) {
					 		
						}
						if ($mysqli->query($sql16) === TRUE) {
					 		
						}
						if ($mysqli->query($sql17) === TRUE) {
					 		
						}
						if ($mysqli->query($sql18) === TRUE) {
					 		
						}
						if ($mysqli->query($sql19) === TRUE) {
					 		
						}
						if ($mysqli->query($sql20) === TRUE) {
					 		
						}
						if ($mysqli->query($sql21) === TRUE) {
					 		
						}
						if ($mysqli->query($sql22) === TRUE) {
					 		
						}
						if ($mysqli->query($sql23) === TRUE) {
					 		
						}
							
						



			  		echo " <div class='main-panel'>
          <div class='content-wrapper'>
            <div class='page-header'>
            <nav aria-label='breadcrumb'>
                <ol class='breadcrumb'>
                </ol>
              </nav>
            </div>
            <div class='row'>
             
              <div class='col-lg-12 grid-margin stretch-card'>
                <div class='card'>
                  <div class='card-body'>
                   <div class='alert alert-success'><font color='green'>Data added successfully. </div><div class='alert alert-danger'><font color='red'>Please don't refresh this page</div>
                  </div>
                </div>
              </div>
              
         
            </div>
          </div>";
			 
			} else {
			  echo "Error: " . $sql . "<br>" . $mysqli->error;
			}

		
	}
}
?>
<script>
         setTimeout(function(){
            window.location.href = 'view_dailyreport.php';
         }, 5000);
      </script>
<?php include 'footer2.php'; ?>

