<?php include 'header.php'; ?>
<?php
include('connection.php');
$careerStatusUpdate = "select * from careers where JobID= " . $_GET['keyId'];
// $careerStatusUpdateResult = $mysqli->query($careerStatusUpdate);
// var_dump($careerStatusUpdateResult); 
// session_start();
if (!$_SESSION["admin"]) {
    header("Location: ../index.php");
} else {
    $result = mysqli_query($mysqli, $careerStatusUpdate);
    $careerStatusUpdateRow = mysqli_fetch_assoc($result);
    $careerStatusID = $careerStatusUpdateRow['JobID'];
?>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://cdn.ckeditor.com/4.5.11/standard/ckeditor.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <div class="row">
        <div class="form-holder">
            <div class="container form-content">
                <div class="form-items bg-dark">
                    <h3 class="text-primary text-uppercase font-weight-normal mb-md-3">Career Status Update Form</h3>

                    <form action="careerStatusUpdate.php?keyId=<?php echo $careerStatusUpdateRow['JobID'] ?>" method="post" class="requires-validation container" novalidate>
                        <!--                         
                        <div class="col-md-12">
                            <input class="form-control" type="text" name="name" placeholder="Full Name" value="<?php echo $careerStatusUpdateRow['JobTitle'] ?>" readonly>
                        </div>

                        <div class="col-md-12">
                            <input class="form-control" type="text" name="mobile" placeholder="Mobile Number" value="<?php echo $careerStatusUpdateRow['JobDescription'] ?>" readonly>
                        </div>

                        <div class="col-md-12">
                            <select type="text" id="careerStatus_type" name="jobStatus" class="form-control">
                                <option value="Open">Open</option>
                                <option value="Close">Close</option>
                            </select>
                        </div>

                        <div class="form-button mx-3 mt-3">
                            <button id="submit" type="submit" class="btn btn-primary rounded" name="update">Update</button>
                        </div>
                         -->
                        
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Job Title</label>
                            <input type="text" name="jobTitle" class="form-control" id="exampleFormControlInput1" placeholder="Job Title" value="<?php echo $careerStatusUpdateRow['JobTitle'] ?>" readonly>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Job Description</label>
                            <textarea name="jobDescription" class="form-control" id="exampleFormControlTextarea1" rows="3" value="<?php echo $careerStatusUpdateRow['JobDescription'] ?>" readonly></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Opening Status</label>
                            <select class="form-control" name="jobStatus" id="exampleFormControlSelect1">
                                <option value="Open">Open</option>
                                <option value="Close">Close</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <button type="submit" value="update" name="update" class="btn btn-primary rounded" style="width: 25%; float: right">Update</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
    </div>

    <?php include 'footer.php'; ?>

    </body>

    </html>

<?php
}
?>