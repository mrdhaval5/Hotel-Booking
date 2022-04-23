<?php
session_start();

$email=$_POST['email'];
$password= $_POST['password'];
$con=mysqli_connect('localhost','root','','hotel');

$q = "select * from register where email='$email' and password='$password'";
$rs = mysqli_query($con,$q);

if($row=mysqli_fetch_array($rs))
{
    $_SESSION['reg_id']=$row['reg_id'];
    header("location:vroom.php");
}
else
{
    header("location:user_login.php");
}

?>