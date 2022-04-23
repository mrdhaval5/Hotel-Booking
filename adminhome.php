<?php
include("header.php");
?>
<!-- //banner -->
<!-- contact -->
	<div class="contact">
		<div class="container">
			<div class="w3-heading-grid">
			<div class="w3ls-heading">
				<h2>Home</h2>
			</div>
            <?php

$con=mysqli_connect('localhost','root','','hotel');
?>
            <table class="table ">
                    <tr>
                            <td>Room
                            <br>
                                
                                <?php
                                $qr="select * from room ";
                                $rsr=mysqli_query($con,$qr);
                                $room=mysqli_num_rows($rsr);
                                print "<h4> $room</h4>";
                                ?>

                            </td>
                            <td>
                                Booking<br>
                                
                                <?php
                                $qb="select * from booking ";
                                $rsb=mysqli_query($con,$qb);
                                $booking=mysqli_num_rows($rsb);
                                print "<h4> $booking</h4>";
                                ?>



                            </td>
                            <td>Gallery<br>
                                
                                <?php
                                $qg="select * from gallery ";
                                $rsg=mysqli_query($con,$qg);
                                $gallery=mysqli_num_rows($rsg);
                                print "<h4> $gallery</h4>";
                                ?>
</td>
                    </tr>
</table>
				<div class="agileits-border"> </div>
			</div>


        </div>
	</div>
	<!-- //contact -->

<?php
include("footer.php");
?>