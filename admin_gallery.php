<?php
include("header.php");
?>
<!-- //banner -->
<!-- contact -->
	<div class="contact">
		<div class="container">
			<div class="w3-heading-grid">
			<div class="w3ls-heading">
				<h2>Add Gallery</h2>
			</div>
				<div class="agileits-border"> </div>
			</div>

				<form action="admin_gallery_code.php" enctype="multipart/form-data" method="post">
    				<div class="form-group">
					<label for="title">Title:</label>
					<input type="text" class="form-control" id="title" placeholder="Enter title" name="title" pattern="[a-zA-Z ]*$" required>
					</div>
					<div class="form-group">
					<label for="photo">Photo:</label>
					<input type="file" class="form-control" id="photo" placeholder="Enter password" name="photo" required>
					</div>
					<button type="submit" class="btn btn-primary">Submit</button>
				</form>
		</div>
	</div>
	<!-- //contact -->

<?php
include("footer.php");
?>