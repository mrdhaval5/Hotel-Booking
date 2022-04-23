<?php
include("header.php");
?>
<!-- //banner -->
<!-- contact -->
	<div class="contact">
		<div class="container">
			<div class="w3-heading-grid">
			<div class="w3ls-heading">
				<h2>view Booking</h2>
				
			</div>
				<div class="agileits-border"> </div>
			</div>

			<table  class="table" style="border:1px solid gray; margin-top:10px;padding:5px;">
				<tr style="background:black;">
					<td><h3 style="color:white; ">Check in Date</h3></td>
					<td><h3 style="color:white; ">Check Out Date</h3></td>
					<td><h3 style="color:white; ">Room</h3></td>
					<td><h3 style="color:white; ">Reg_id</h3></td>
					<td><h3 style="color:white; ">Id proof</h3></td>
					<td><h3 style="color:white; ">Booking date</h3></td>
					
				</tr>
<?php

$con=mysqli_connect('localhost','root','','hotel');
$q="select r.*,b.*,re.* from booking b ,room r , register re where b.r_id=r.r_id and b.reg_id=re.reg_id";
$rs=mysqli_query($con,$q);

while($rows=mysqli_fetch_array($rs))
{
?>
					

				<tr>
					<td><?php print $rows['checkin'] ?></td>
					<td><?php print $rows['checkout'] ?></td>
					<td><?php print $rows['title'] ?></td>
					<td>
						<?php print $rows['name'] ?><Br>
						<?php print $rows['contact'];?>
					</td>
					<td><a href="<?php print $rows['id_proof'] ?>" style="background:blue; padding:3px; color:white;" download>Download</a></td>
					<td><?php print $rows['booking_date'] ?></td>
				</tr>
<?php
}
?>
			</table>

		</div>
	</div>
	<!-- //contact -->

<?php
include("footer.php");
?>