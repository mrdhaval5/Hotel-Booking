<?php
include("header.php");
?>
<!-- //banner -->
<!-- contact -->
	<div class="contact">
		<div class="container">
			<div class="w3-heading-grid">
			<div class="w3ls-heading">
				<h2>Hotel Booking System</h2>
			</div>
				<div class="agileits-border"> </div>
			</div>

				<form action="/action_page.php">
    <div class="form-group">
      <label for="name">Name:</label>
      <input type="text" class="form-control" id="name" placeholder="Enter email" name="name">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd">
    </div>
	<div class="form-group">
      <label for="photo">Photo:</label>
      <input type="file" class="form-control" id="photo" placeholder="Enter image" name="image">
    </div>
	<div class="form-group">
      <label for="select">Select:</label>
      <Selet class="form-control" id="select" placeholder="select" name="select">
		  <option value="1">abc</option>
</select>	  
    </div>
	<div class="form-group">
      <label for="address">Address:</label>
      <textarea class="form-control" id="address" placeholder="Enter address" name="address"></textarea>
    </div>
	<button type="submit" class="btn btn-primary">Submit</button>
  </form>
		</div>
	</div>
	<!-- //contact -->

<?php
include("footer.php");
?>