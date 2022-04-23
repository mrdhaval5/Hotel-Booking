<?php

session_start();

$con=mysqli_connect('localhost','root','','hotel');
$r_id=$_POST['r_id'];
$checkin=$_POST['checkin'];
$checkout=$_POST['checkout'];
$idproof="idproof/".$_FILES['idproof']['name'];
move_uploaded_file($_FILES['idproof']['tmp_name'],$idproof);
$date=date("y-m-d");
$reg_id=$_SESSION['reg_id'];

$q="insert into booking(r_id,checkin,checkout,id_proof,booking_date,reg_id) values('$r_id','$checkin','$checkout','$idproof','$date','$reg_id')";
mysqli_query($con,$q);

header("location:vbooking.php?mgs=y");
?>