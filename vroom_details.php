<!--
author: W3layouts
author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
include('vheader.php');
$con=mysqli_connect('localhost','root','','hotel');
$r_id=$_GET['r_id'];
$q="Select * from room where r_id='$r_id'";
$rs=mysqli_query($con,$q);
$row=mysqli_fetch_array($rs);

?>
</div>
	</div>
<!-- //banner -->
<!-- about -->
<!-- courses -->
	<div class="courses">
		<div class="container"> 
			<div class="w3ls-heading">
				<h2>About Us</h2>
			</div>
			<div class="agileits_w3layouts_team_grids w3ls_courses_grids">
				<div class="col-md-6 w3ls_banner_bottom_left w3ls_courses_left">
					<div class="w3ls_courses_left_grids">
						<div class="w3ls_courses_left_grid">
							<h3><?php print $row['title'];?></h3>
							<p>
                                <?php print nl2br($row['details']);?>
                            </p>
						</div>
		
                    </div>
				</div>
				<div class="col-md-6 agileits_courses_right">
					<img src="<?php print $row['photo'];?>" alt=" " class="img-responsive" />
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<div class="container" style="margin-bottom:10px" > 
<form action="vbooking.php" method="post">
<a href="vbooking.php?r_id=<?php print $row['r_id'];?>">
<center><h3 class="btn btn-primary ">Book Now</h3></center>
</form>
</div>
<!-- //courses -->

<!-- //about -->
<?php
include('vfooter.php');
?>
</body>
</html>

