<?php
include("header.php");
$con = mysqli_connect('localhost','root','','hotel');
$g_id=$_GET['g_id'];
$q="select * from gallery where g_id= $g_id";
$rs=mysqli_query($con,$q);
$row=mysqli_fetch_array($rs);
?>
<!-- //banner -->
<!-- contact -->
	<div class="contact">
		<div class="container">
			<div class="w3-heading-grid">
			<div class="w3ls-heading">
				<h2>Edit Gallery</h2>
			</div>
				<div class="agileits-border"> </div>
			</div>

				<form action="edit_gallery_code.php" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="g_id" value="<?php print $g_id;?>">
     				<div class="form-group">
					<label for="title">Title:</label>
					<input type="text" value="<?php print $row['title'];?>" class="form-control" id="title" placeholder="Enter title" name="title" pattern="[a-zA-Z ]*$" required >
					</div>
					<div class="form-group">
					<label for="photo">Photo:</label>
					<input type="file" value="<?php print $row['title'];?>" class="form-control" id="photo" placeholder="Enter password" name="photo" required>
					</div>
					<button type="submit" class="btn btn-primary">Submit</button>
				</form>
		</div>
	</div>
	<!-- //contact -->

<?php
include("footer.php");
?>