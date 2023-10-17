<?php
include 'header.php';
include_once("connection.php");
include 'file.php';
if(!isset($_SESSION['valid'])) {
	header('Location: login.php');
}
?>
<style type="text/css">
    .badge-warning {
        background-color: #5cb85c !important;
    }

    .badge-danger {
        background-color: #f51907 !important;
    }
</style>
<link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<link rel="stylesheet" href="http://cdn.datatables.net/1.10.2/css/jquery.dataTables.min.css">
<script type="text/javascript" src="http://cdn.datatables.net/1.10.2/js/jquery.dataTables.min.js"></script>

<div class="container">
    <h2>New Registrations</h2>

    <?php
    $result = mysqli_query($mysqli, "SELECT * FROM registration");
    ?>
    <div class="table-responsive">
        <table id="myTable" class="display table" width="100%">
            <thead>
                <tr bgcolor='#101010' style="color: #777;">

                    <th>Name</th>
                    <th>Email</th>
                    <th>Mobile</th>
                    <th>Graduation</th>
                    <th>Year of Passing</th>
                    <th>Date of Birth</th>
                    <th>Emergency Contact Number</th>
                    <th>Address</th>
                    <th>Resume</th>

                </tr>
            </thead>
            <tbody>
                <?php
                while ($res = mysqli_fetch_array($result)) {

                    echo "<tr>";
                    echo "<td>" . $res['name'] . "</td>";
                    echo "<td>" . $res['mobile'] . "</td>";
                    echo "<td>" . $res['mobile'] . "</td>";
                    echo "<td>" . $res['mobile'] . "</td>";
                    echo "<td>" . $res['mobile'] . "</td>";
                    echo "<td>" . $res['mobile'] . "</td>";
                    echo "<td>" . $res['mobile'] . "</td>";
                    echo "<td>" . $res['mobile'] . "</td>";
                    echo "<td><a href='registration.php?file_id=". $res['sno']. "' >Download</a></td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</div>

<script>
    $(document).ready(function() {
        $('#myTable').dataTable();
    });
</script>
<?php include 'footer.php'; ?>
</body>

</html>