<?php

$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];
$cpassword=$_POST['cpassword'];
$contact=$_POST['contact'];
$address=$_POST['address'];

if($password == $cpassword)
{

    $con=mysqli_connect('localhost','root','','hotel');
    
    $q="insert into register(name,email,password,contact,address) values('$name','$email','$password','$contact','$address')";
    mysqli_query($con,$q);
    print "Record inserted";
    header("location:user_login.php");
}
else
{
    header("location:registerpage.php?mgs=y");
}



?>

