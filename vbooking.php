<?php
include('vheader.php');
if(!isset($_SESSION['reg_id']))
{
  header("location:user_login.php");
}
$r_id=$_GET['r_id'];
?>

<!-- contact -->
<div class="contact">
		<div class="container">
			<div class="w3-heading-grid">
			<div class="w3ls-heading">
				<h2>Book Your Room</h2>
			</div>
				<div class="agileits-border"> </div>
			</div>
        <form action="vbooking_code.php" method="post" enctype="multipart/form-data">
        <?php
          if(isset($_GET['mgs']))
          {
            print "<h3> Thank You For Booking";
          }
          ?>
        <input type="hidden" name="r_id" value="<?php print $r_id;?>">
          <div class="form-group">
            <label for="checkin">Check In Date:</label>
            <input type="date" class="form-control" id="checkin" placeholder="Enter Check In Date" name="checkin" required>
          </div>

          <div class="form-group">
            <label for="checkout">Check Out Date:</label>
            <input type="date" class="form-control" id="checkout" placeholder="Enter Check out Date" name="checkout" required>
          </div>
        
        <div class="form-group">
            <label for="idproof">ID Proof:</label>
            <input type="file" class="form-control" id="idproof" placeholder="id proof" name="idproof" required>
          </div>
                  
        <button type="submit" class="btn btn-primary">BOOK</button>
        </form>
   	</div>
</div>
	<!-- //contact -->

<?php
include('vfooter.php');
?>