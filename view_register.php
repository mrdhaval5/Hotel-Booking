<?php
include("header.php");
?>
<!-- //banner -->
<!-- contact -->
	<div class="contact">
		<div class="container">
			<div class="w3-heading-grid">
			<div class="w3ls-heading">
				<h2>view Register</h2>
			</div>
				<div class="agileits-border"> </div>
			</div>

			<table class="table">
				<tr>
					<td>Name</td>
					<td>Email</td>
					<td>Contact</td>
					<td>Gender</td>
					<td>Address</td>

				</tr>
<?php

$con=mysqli_connect('localhost','root','','hotel');
$q="select * from register";
$rs=mysqli_query($con,$q);

while($rows=mysqli_fetch_array($rs))
{

?>
					

				<tr>
					<td><?php print $rows['name'] ?></td>
					<td><?php print $rows['email'] ?></td>
					<td><?php print $rows['contact'] ?></td>
					<td><?php print $rows['gender'] ?></td>
					<td><?php print $rows['address'] ?></td>
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