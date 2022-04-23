<?php include("vheader.php");?>
<!-- header -->
	<!-- //banner -->
<!-- contact -->
	<div class="contact">
		<div class="container">
			<div class="w3-heading-grid">
			<div class="w3ls-heading">
				<h2>Review</h2>
			</div>
				<div class="agileits-border"> </div>
			</div>

				<form action="vreview_code.php" method="post">
                <?php
          if(isset($_GET['mgs']))
          {
            print "<h3> Thank You For Your Review";
          }
          ?>
    				<div class="form-group">
					<label for="email">Message:</label>
					<textarea class="form-control" id="email" placeholder="Enter Message" name="msg" required ></textarea>
					</div>
			
                    <button type="submit" class="btn btn-primary">Submit</button>
				</form>
		</div>
	</div>
	<!-- //contact -->

<?php
include("footer.php");
?>