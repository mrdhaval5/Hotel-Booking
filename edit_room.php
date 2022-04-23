<?php
include('header.php');
$con = mysqli_connect('localhost','root','','hotel');
$r_id=$_GET['r_id'];
$q="select * from room where r_id=$r_id";
$rs=mysqli_query($con,$q);
$row=mysqli_fetch_array($rs);

?>
<!-- //banner -->
<!-- contact -->
<div class="contact">
		<div class="container">
			<div class="w3-heading-grid">
			<div class="w3ls-heading">
				<h2> Edit Room</h2>
			</div>
				<div class="agileits-border"> </div>
			</div>
        <form action="edit_room_code.php" enctype="multipart/form-data" method="post">
          <div class="form-group">
          <input type="hidden" name="r_id" value="<?php print $r_id;?>">
            <label for="title">Title:</label>
            <input type="text" value="<?php print $row['title'];?>" class="form-control" id="title" placeholder="Enter title" name="title" pattern="[a-zA-Z ]*$" required >
          </div>
        
        <div class="form-group">
            <label for="photo2">Photo:</label>
            <input type="file" class="form-control" id="photo2" placeholder="Enter image" name="photo" required>
          </div>

        <div class="form-group">
            <label for="select">Type:</label>
            <Select class="form-control" id="select" placeholder="select" name="type" required>
            <option value="AC">AC</option>
              <option value="Non AC">Non AC</option>
            </select>	  
          </div>
          <div class="form-group">
            <label for="price">Price:</label>
            <input type="text" value="<?php print $row['rent'];?>" class="form-control" id="price" placeholder="Enter title" name="rent" required pattern="(\+?\d[- .]*){3,4}">
          </div>
          <div class="form-group">
            <label for="address">details:</label>
            <textarea class="form-control" id="details" placeholder="Enter address" name="details" pattern="[a-zA-Z0-9]*$" required><?php print $row['details']?></textarea>
          </div>
         
        
        <button type="submit" class="btn btn-primary">Submit</button>
        </form>
   	</div>
</div>
	<!-- //contact -->
<?php
include('footer.php');
?>
