<?php
$con=mysqli_connect('localhost','root','','hotel');
$msg=$_POST['msg'];
session_start();
$reg_id=$_SESSION['reg_id'];
$date=date("Y-m-d");
$q="insert into review (msg,reg_id,date) values('$msg','$reg_id','$date')";
mysqli_query($con,$q);
print $q;
header("location:vreview.php?mgs=y");
?>