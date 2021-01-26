<?php

session_start();
$conn=mysqli_connect("localhost","root","");

mysqli_select_db($conn,'admin');

$NAME=$_REQUEST['name'];

$USER=$_REQUEST['username'];

$PASSWORD=$_REQUEST['pass'];

$EMAIL_ID=$_REQUEST['email'];

$INFO=$_REQUEST['info'];

 $sqli=" update admin_table set name='".$NAME."', uname='".$USER."', password='".$PASSWORD."',email='".$EMAIL_ID."',info='".$INFO."'  where id='".$_SESSION['id']."' ";
         

if(mysqli_query($conn,$sqli))
{
    header("location:subadmin_data.php");
    unset($_SESSION['id']);
}
else
{
    echo (mysqli_error($conn));
}

?>