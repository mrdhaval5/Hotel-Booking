<?php
include('vheader.php');
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
        <form action="#" method="post">
          <div class="form-group">
            <label for="checkin">Check In Date:</label>
            <input type="text" class="form-control" id="checkin" placeholder="Enter Check In Date" name="checkin">
          </div>

          <div class="form-group">
            <label for="checkout">Check Out Date:</label>
            <input type="text" class="form-control" id="checkout" placeholder="Enter Check out Date" name="checkout">
          </div>
        
        <div class="form-group">
            <label for="idproof">ID Proof:</label>
            <input type="file" class="form-control" id="idproof" placeholder="id proof" name="idproof">
          </div>
                  
        <button type="submit" class="btn btn-primary">BOOK</button>
        </form>
   	</div>
</div>
	<!-- //contact -->

<?php
include('vfooter.php');
?>