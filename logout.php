<?php
session_start();
if(isset($_SESSION['reg_id']))
{
    session_unset();
    session_destroy();
    header("location:user_login.php");
}
else
{   
    session_unset();
    session_destroy();
    header("location:admin_login.php");
}
?>