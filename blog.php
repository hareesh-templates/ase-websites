<?php include 'blogheader.php'; ?>
<?php include_once("connection.php"); ?>
    <div id="features" class="section lb">
        <div class="container">
            <div class="section-title text-center">
                <h3>Latest Blogs</h3>
               <!--  <p class="lead">Ase Technologies defining the routes in the virtual space with our artistic works of digital marketing in the following ways.</p> -->
            </div><!-- end title -->
            <?php
				$result = mysqli_query($mysqli, "SELECT blog.* FROM blog order by id desc");
			?>
            <div class="row">
            		<?php
            		if (mysqli_num_rows($result) > 0) {
		while($res = mysqli_fetch_array($result)) {		?>
				<div class="col-md-4">
                    <div class="services-inner-box">
						<img src="./adminpanel/images/blogs/<?php echo $res['image'] ?>" width="100%" height="200px" alt="Digital marketing">
						<h2><?php echo substr($res['title'] ,0,44);?> </h2>
						<p class="pull-right"><a href="blogdetails.php?key=<?php echo $res['key_url'] ?>" class="btn btn-danger">Continue Reading...</a></p>
					</div>
                </div><!-- end col -->
            	<?php }}else{
            		echo 'We will update soon.';
            	} ?>
              
			
				
            </div>
			
        </div><!-- end container -->
    </div><!-- end section -->

<?php 
include 'whatsapp.php';
include 'footer.php'; 
?>