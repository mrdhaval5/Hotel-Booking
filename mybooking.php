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
            <table class="table" style="border:1px solid gray; margin-top:10px;padding:5px;">
				<tr style="background:black;">
					<td style="color:white; ">Check in Date</td>
					<td style="color:white; ">Check Out Date</td>
					<td style="color:white; ">Room</td>
					<td style="color:white; ">Id proof</td>
					<td style="color:white; ">Booking date</td>

					</tr>
<?php
$reg_id=$_SESSION['reg_id'];
$con=mysqli_connect('localhost','root','','hotel');
$q="select r.*,b.* from booking b ,room r where b.r_id=r.r_id and b.reg_id='$reg_id'";
$rs=mysqli_query($con,$q);

while($rows=mysqli_fetch_array($rs))
{
?>
					

				<tr>
					<td><?php print $rows['checkin'] ?></td>
					<td><?php print $rows['checkout'] ?></td>
					<td><?php print $rows['title'] ?></td>
					<td><a href="<?php print $rows['id_proof'] ?>" download>Download</a></td>
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
include('vfooter.php');
?>