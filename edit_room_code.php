<?php
$con = mysqli_connect('localhost','root','','hotel');
$r_id=$_POST['r_id'];
$title=$_POST['title'];

$photo="room/".$_FILES['photo']['name'];
move_uploaded_file($_FILES['photo']['tmp_name'],$photo);$type=$_POST['type'];
$rent=$_POST['rent'];
$details=$_POST['details'];

$q = "update room set title='$title', photo='$photo', type='$type' , details='$details' , rent='$rent' where r_id = $r_id";
mysqli_query($con,$q);

header("location:view_room.php");
?>
