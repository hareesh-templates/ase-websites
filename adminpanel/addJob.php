<?php include 'header.php'; ?>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<script src="https://cdn.ckeditor.com/4.5.11/standard/ckeditor.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<div class="container">
      <h2>Add Job details</h2>
      <form action="uploadJob.php" method="post" name="myForm" enctype="multipart/form-data">


            <div class="form-group">
                  <div class="">
                        <input type="text" name="JobTitle" class="form-control" placeholder="Enter title" required>
                  </div>
            </div>
            
            <div class="form-group">
                  <div class="">
                        <textarea class="form-control" placeholder="Content" name="JobDescription" id="editor1"></textarea>
                        <script>
                              CKEDITOR.replace('editor1');
                        </script>
                  </div>
            </div>
            
            <button type="submit" name="Submit" class="btn btn-success" style="width: 25%; float: right">Add</button>

      </form>
</div>

<?php include 'footer.php'; ?>
</body>

</html>