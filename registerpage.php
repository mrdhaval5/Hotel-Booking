<?php
include('vheader.php');
?>
<!-- //banner -->
<!-- contact -->
<div class="contact">
		<div class="container">
			<div class="w3-heading-grid">
			<div class="w3ls-heading">
				<h2> Register Page</h2>
			</div>
				<div class="agileits-border"> </div>
			</div>
        <form action="registerpage_code.php" method="post">
          <?php
          if(isset($_GET['mgs']))
          {
            print "<h3> Password And Confirm Password Not Match";
          }
          ?>
          <div class="form-group">
            <label for="title">Name:</label>
            <input type="text" class="form-control" id="" placeholder="Enter Name" name="name" pattern="[a-zA-Z ]*$" required>
          </div>
        
        <div class="form-group">
            <label for="photo2">Email:</label>
            <input type="text" class="form-control" id="" placeholder="Enter Email" name="email" required pattern="[^@]+@[^@]+\.[a-zA-Z]{2,6}">
          </div> 
          
          <div class="form-group">
            <label for="price">Password:</label>
            <input type="text" class="form-control" id="" placeholder="Enter Password" name="password" required>
          </div>
          <div class="form-group">
            <label for="price">Confirm Password:</label>
            <input type="text" class="form-control" id="" placeholder="Enter again Password" name="cpassword" required>
          </div>
          <div class="form-group">
          <label for="price">Contact:</label>
            <input type="text" class="form-control" id="" placeholder="Enter phone no" name="contact" required >
          </div>
            
          <div class="form-group">
            <label for="address">address:</label>
            <textarea class="form-control" id="details" placeholder="Enter address" name="address"  pattern="[a-zA-Z0-9]*$" required ></textarea>
          </div>
         
        
        <button type="submit" class="btn btn-primary">Submit</button>
        </form>
   	</div>
</div>
	<!-- //contact -->
<?php
include('vfooter.php');
?>
