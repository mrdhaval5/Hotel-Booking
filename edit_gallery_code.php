<?php
$con = mysqli_connect('localhost','root','','hotel');
$g_id=$_POST['g_id'];
$title=$_POST['title'];
$photo="gallery/".$_FILES['photo']['name'];
move_uploaded_file($_FILES['photo']['tmp_name'],$photo);

$q="update gallery set title='$title', photo='$photo' where g_id=$g_id";
mysqli_query($con,$q);

header("location:view_gallery.php");
?>