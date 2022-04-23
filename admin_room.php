<?php
include('header.php')
?>
<!-- //banner -->
<!-- contact -->
<div class="contact">
		<div class="container">
			<div class="w3-heading-grid">
			<div class="w3ls-heading">
				<h2>Add Room</h2>
			</div>
				<div class="agileits-border"> </div>
			</div>
        <form action="admin_room_code.php" enctype="multipart/form-data" method="post">
          <div class="form-group">
            <label for="title">Title:</label>
            <input type="text" class="form-control" id="title" placeholder="Enter title" name="title"  pattern="[a-zA-Z ]*$" required>
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
            <input type="text" class="form-control" id="price" placeholder="Enter Price" name="rent" required pattern="(\+?\d[- .]*){3,4}" >
        </div>
        <div class="form-group">
            <label for="address">Address:</label>
            <textarea class="form-control" id="details" placeholder="Enter address" name="details" pattern="[a-zA-Z0-9]*$" required ></textarea>
        </div>
          
        
        <button type="submit" class="btn btn-primary">Submit</button>
        </form>
   	</div>
</div>
	<!-- //contact -->
<?php
include('footer.php');
?>