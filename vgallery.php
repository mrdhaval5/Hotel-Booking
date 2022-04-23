<?php
include('vheader.php');
$cn=mysqli_connect('localhost','root','','hotel');
?>
		</div>
	</div>
<!-- //banner -->

<!-- gallery -->
	<div class="gallery">
		<div class="container">
			<div class="w3ls-heading">
				<h2>Gallery</h2>
			</div>
			<div class="gallery-grids">
					<?php
					$q="Select * from gallery";
					$rs=mysqli_query($cn,$q);
					while($row=mysqli_fetch_array($rs))
					{
						?>
					<div class="col-md-4 gallery-grid">
						<div class="grid">
							<figure class="effect-apollo">
								<a class="example-image-link" href="images/4.jpg" data-lightbox="example-set" data-title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ut sem ac lectus mattis sagittis. Donec pulvinar quam sit amet est vestibulum volutpat. Phasellus sed nibh odio. Phasellus posuere at purus sit amet porttitor. Cras euismod egestas enim eget molestie. Aenean ornare condimentum odio, in lacinia felis finibus non. Nam faucibus libero et lectus finibus, sed porttitor velit pellentesque.">
									<img src="<?php print $row['photo'];?>" alt="" style="height:250px;width:450px" />
									<figcaption>
										<p><?php print $row['title'];?></p>
									</figcaption>	
								</a>
							</figure>
						</div>
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


