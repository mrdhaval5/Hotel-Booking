<?php
include("header.php");

$con = mysqli_connect('localhost','root','','hotel');
if(isset($_GET['r_id']))
{
	$r_id=$_GET['r_id'];
	$q="delete from room where r_id='$r_id'";
	mysqli_query($con,$q);
}

?>
<!-- //banner -->
<!-- contact -->
	<div class="contact">
		<div class="container">
			<div class="w3-heading-grid" >
			<div class="w3ls-heading">
				<h2>view Room</h2>
			</div>
				<div class="agileits-border"> </div>
			</div>

			<table class="table" style="border:1px solid gray; margin-top:10px; padding:5px;">
				<tr style="background:black; padding:2px">
					<td><h2 style="color:white; ">Photo</h2></td>
					<td><h2 style="color:white; ">Title</h2></td>
					<td><h2 style="color:white; ">Type</h2></td>
					<td><h2 style="color:white; ">Details</h2></td>
					<td><h2 style="color:white; ">Price</h2></td>
					<td><h2 style="color:white; ">Option</h2></td>
					
				</tr>

<?php
				
$q = "select * from room";
$rs = mysqli_query($con,$q);

while($row=mysqli_fetch_array($rs))
{
?>
				<tr>
					<td><h3><?php print $row['title'];?></h3></td>
					<td><img src="<?php print $row['photo'];?>" style="width:200px;height:150px"></td>
					<td><h3><?php print $row['type'];?></h3></td>
					<td><?php print $row['details'];?></td>
					<td><h2><b><?php print $row['rent'];?></b></h2></td>
					<td>
						<h3 style="display:flex; justify-content:space-between; align-items:center;">			
						<a href="edit_room.php?r_id=<?php print $row['r_id']; ?>" style="background-color:green; border-radius:10px;color:white; padding:4px;"> Edit</a>
						<span>/</span> 
						<a href="view_room.php?r_id=<?php print $row['r_id']; ?>" style="background-color:red; color:white;   border-radius:10px;padding:4px;"> Delete</a> 
						</h3>
					</td>
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