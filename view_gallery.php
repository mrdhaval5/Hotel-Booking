<?php
include("header.php");

$con=mysqli_connect('localhost','root','','hotel');
if(isset($_GET['g_id']))
{
	$g_id=$_GET['g_id'];
	$q="delete from gallery where g_id='$g_id'";
	mysqli_query($con,$q);
}
?>
<!-- //banner -->
<!-- contact -->
	<div class="contact">
		<div class="container">
			<div class="w3-heading-grid">
			<div class="w3ls-heading">
				<h2>View Gallery</h2><br>
			</div>
				<div class="agileits-border"> </div>
			</div>

			<table class="table" style="border:1px solid gray; padding:5px;">
				<tr style="background:black; padding:2px">
					<td><h2  style="color:white; ">Title</h2></td>
					<td><h2  style="color:white; ">Photo</h2></td>
					<td><h2  style="color:white; ">Option</h2></td>
				</tr>

<?php
$q="select * from gallery";
$rs=mysqli_query($con,$q);

while($rows=mysqli_fetch_array($rs))
{
?>
				<tr>
					<td><h2><?php print $rows['title'] ?></h2></td>
					<td><img src="<?php print $rows['photo']?>" style="width:300px;height:150px;"> </td>
					<td>
						<h3 style="display:flex; justify-content:left; margin:0px 4px;align-items:center;">
						<a href="edit_gallery.php?g_id=<?php print $rows['g_id']; ?>" style="background-color:green; border-radius:10px;color:white; padding:4px;"> Edit </a> <span>/</span>
						<a href="view_gallery.php?g_id=<?php print $rows['g_id']; ?>" style="background-color:red; color:white;   border-radius:10px;padding:4px;"> Delete</a>
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