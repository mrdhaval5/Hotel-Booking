<?php
$title=$_POST['title'];
$photo="room/".$_FILES['photo']['name'];
move_uploaded_file($_FILES['photo']['tmp_name'],$photo);
$type=$_POST['type'];
$rent=$_POST['rent'];
$details=$_POST['details'];

$con=mysqli_connect('localhost','root','','hotel');

$q="insert into room(title,photo,type,rent,details) values('$title','$photo','$type','$rent','$details')";
mysqli_query($con,$q);
print "Record inserted";
header("location:view_room.php");
?>

