<?php

session_start();
$conn=mysqli_connect("localhost","root","");

mysqli_select_db($conn,'admin');

$NAME=$_REQUEST['name'];

$USER=$_REQUEST['username'];

$PASSWORD=$_REQUEST['pass'];

$EMAIL_ID=$_REQUEST['email'];

$INFO=$_REQUEST['info'];


 $sqli=" update admin_table set name='".$NAME."', password='".$PASSWORD."',email='".$EMAIL_ID."',info='".$INFO."' where uname='".$_SESSION['username']."' ";
         

if(mysqli_query($conn,$sqli))
{
    header("location:superadmin.php");
    unset($_SESSION['uname']);
}
else
{
    echo (mysqli_error($conn));
}

?>