<?php
include("header.php");
?>
<!-- //banner -->
<!-- contact -->
	<div class="contact">
		<div class="container">
			<div class="w3-heading-grid">
			<div class="w3ls-heading">
				<h2>view Review</h2>
				
			</div>
				<div class="agileits-border"> </div>
			</div>

			<table  class="table" style="border:1px solid gray; margin-top:10px;padding:5px;">
				<tr style="background:black; padding:2px">
				
					<td><h3 style="color:white; ">Message</h3 ></td>
					<td><h3 style="color:white; ">Name</h3 ></td>
					<td><h3 style="color:white; ">Date</h1 ></td>
					
					
				</tr>

<?php
$con=mysqli_connect('localhost','root','','hotel');
$q="select r.*,re.name from review r,register re where r.reg_id=re.reg_id";
$rs=mysqli_query($con,$q);

while($rows=mysqli_fetch_array($rs))
{
?>
				<tr>
				
					<td><h4><?php print $rows['msg']?></h4></td>
					<td><h4><?php print $rows['name']?><h4></td>
					<td><h4><?php print $rows['date']?><h4></td>
					
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