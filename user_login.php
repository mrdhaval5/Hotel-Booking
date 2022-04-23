<?php
include("vheader.php");
?>
<!-- //banner -->
<!-- contact -->
	<div class="contact">
		<div class="container">
			<div class="w3-heading-grid">
			<div class="w3ls-heading">
				<h2>User Login</h2>
			</div>
				<div class="agileits-border"> </div>
			</div>

				<form action="user_login_code.php" method="post">
    				<div class="form-group">
					<label for="email">Email:</label>
					<input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required pattern="[^@]+@[^@]+\.[a-zA-Z]{2,6}">
					</div>
					<div class="form-group">
					<label for="pwd">Password:</label>
					<input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password" required>
					</div>
					<button type="submit" class="btn btn-primary">Submit</button>
				</form>
		</div>
	</div>
	<!-- //contact -->

<?php
include("vfooter.php");
?>