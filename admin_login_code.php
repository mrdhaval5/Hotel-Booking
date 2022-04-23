<?php
session_start();

$email=$_POST['email'];
$password= $_POST['password'];
$con=mysqli_connect('localhost','root','','hotel');

$q = "select * from admin where email='$email' and password='$password'";
$rs = mysqli_query($con,$q);

if($row=mysqli_fetch_array($rs))
{
    $_SESSION['a_id']=$row['a_id'];
    header("location:view_room.php");
}
else
{
    header("location:admin_login.php");
}
?>
