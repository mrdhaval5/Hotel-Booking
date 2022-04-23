<?php
include('vheader.php');
$cn=mysqli_connect('localhost','root','','hotel');

?>
		</div>
	</div>
<!-- //banner -->

<!-- contact -->


<!-- gallery -->
	<div class="gallery">
		<div class="container">
			<div class="w3ls-heading">
				<h2>Room</h2>
			</div>
			<div class="gallery-grids">
					<?php
					$q="Select * from room";
					$rs=mysqli_query($cn,$q);
					while($row=mysqli_fetch_array($rs))
					{
					?>
					<div class="col-md-4 gallery-grid">
						<div class="grid">
							<figure class="effect-apollo">
								<a class="example-image-link" href="vroom_details.php" data-lightbox="example-set" data-title="<?php print $row['title'];?>">
									<img src="<?php print $row['photo']?> " style="height:250px;width:450px" alt="" />
									<figcaption>
										<p><?php print $row['title'];?></p>
									</figcaption>	
								</a>
							</figure>
						</div>
					<a href="vroom_details.php?r_id=<?php print $row['r_id'];?>">
						<center><h3 class="btn btn-primary ">View Details</h3></center>
					</a>
					</div>
					<?php
					}
					?>
			
			
					
					
					
					<div class="clearfix"> </div>
					<script src="js/lightbox-plus-jquery.min.js"> </script>
			</div>
		</div>
	</div>
	<!-- //gallery -->
<?php
include('vfooter.php');
?>
</body>
</html>


