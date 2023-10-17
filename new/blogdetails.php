<?php include 'blogheader.php'; 
 include_once("connection.php");
$key = $_GET['key'];
	?>
	<div id="about" class="section wb">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="section-title text-center">
						<?php 
						$result = mysqli_query($mysqli, "SELECT * FROM blog WHERE key_url='$key'");
							while($res = mysqli_fetch_array($result))
								{
									$key_url = $res['key_url'];
									$title = $res['title'];
									$area = $res['area'];
									$event_date = $res['event_date'];
									$image = $res['image'];
									$content = $res['content'];
									
									
								}
						?>
						<h3><?php echo $title; ?></h3>

						<p style="text-align: center;">Posted On: <?php echo $event_date; ?></p>
						<img src="./adminpanel/images/blogs/<?php echo $image; ?>" height="300px" width="300px" alt="Digital marketing">
						<p><?php echo $content; ?></p>
					</div><!-- end title -->
				</div>
			</div>
			
			
		
			
		</div>
	</div>
	
   

   <?php include 'footer.php'; ?>