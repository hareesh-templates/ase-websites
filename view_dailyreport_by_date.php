
<?php include 'header2.php'; ?>

<?php
if(!isset($_SESSION['valid'])) {
	header('Location: login.php');
}
?>

<?php
//including the database connection file
include_once("connection.php");

//fetching data in descending order (lastest entry first)

if(isset($_POST['btn_report_date'])){
	$report_date = $_POST['report_date'];



if($_SESSION['designation'] == 'RM' || $_SESSION['designation'] == 'EX'){
$result = mysqli_query($mysqli, "SELECT daily_reports.*,login.name as empname FROM daily_reports join login on login.id=daily_reports.added_by WHERE applied_on = ".$report_date." and added_by=".$_SESSION['id']." ORDER BY id DESC");
}
else if($_SESSION['designation'] == 'AM'){
	$result = mysqli_query($mysqli, "SELECT daily_reports.*,login.name as empname FROM daily_reports join login on login.id=daily_reports.added_by WHERE applied_on = ".$report_date." and   report=".$_SESSION['id']." ORDER BY id DESC");
}
else if($_SESSION['designation'] == 'ABM'){
	$result = mysqli_query($mysqli, "SELECT daily_reports.*,login.name as empname FROM daily_reports join login on login.id=daily_reports.added_by WHERE applied_on = ".$report_date." and  report in (SELECT id from login WHERE report = ".$_SESSION['id'].") or report=".$_SESSION['id']." ORDER BY id DESC");
}
else if($_SESSION['designation'] == 'BM'){
	$result = mysqli_query($mysqli, "SELECT daily_reports.*,login.name as empname FROM daily_reports join login on login.id=daily_reports.added_by WHERE applied_on = ".$report_date." and  report in (SELECT id from login WHERE report in (SELECT id from login WHERE report =  ".$_SESSION['id'].")) OR report =  ".$_SESSION['id']." OR report in (SELECT id FROM login WHERE report= ".$_SESSION['id']." ) ORDER BY id DESC");
}
else{
	 $result = mysqli_query($mysqli, "SELECT daily_reports.*,login.name as empname FROM daily_reports join login on login.id=daily_reports.added_by where applied_on = '".$report_date."'  ORDER BY id DESC"); 
}
}

?>
<div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                
                </ol>
              </nav>
            </div>
            <div class="row">
             
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                  	<h2>Eswari Homes - Daily Report by Date</h2>
<!-- <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">    -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<link rel="stylesheet" 

href="http://cdn.datatables.net/1.10.2/css/jquery.dataTables.min.css">
<script type="text/javascript" 

src="http://cdn.datatables.net/1.10.2/js/jquery.dataTables.min.js"></script>
<!-- <script type="text/javascript" 

src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script> -->
<div class="container">

	<form class="form-inline" action="view_dailyreport_by_date2.php" method="post">
			<input type="text" name="report_date" class="form-control" id="datepicker" placeholder="Date">
			<input type="submit" name="btn_report_date" class="btn btn-success">
		</form><br><br>
	


	<div class="table-responsive">
	
    </div>
	</div>	
	<script>
$(document).ready(function(){
    $('#myTable').dataTable();
});
</script>

<script src="csvExport.js"></script>
<script>
$( "#export" ).click(function() {
  $('table').csvExport();
});
</script>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
 <link rel="stylesheet" href="//code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
  <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>
<script>
  $( function() {
     $("#datepicker").datepicker({ dateFormat: "yy-mm-dd" }).val()
  } );
  </script>

