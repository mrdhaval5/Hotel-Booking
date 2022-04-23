<?php
$title=$_POST['title'];
$photo="gallery/".$_FILES['photo']['name'];
move_uploaded_file($_FILES['photo']['tmp_name'],$photo);


$con=mysqli_connect('localhost','root','','hotel');

$q="insert into gallery(title,photo) values('$title','$photo')";
mysqli_query($con,$q);
print "Record inserted";
header("location:view_gallery.php");
?>
<br/>
