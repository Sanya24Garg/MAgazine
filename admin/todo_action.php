<?php
session_start();
$conn=mysqli_connect("localhost","root","");
mysqli_select_db($conn,'admin');

$user=$_SESSION['username'];
$password=$_SESSION['password'];
$content=$_REQUEST['data'];
if($content=="")
{
    $_SESSION['error'][0]="PLEASE ENTER YOUR TASK";
}

$length=strlen($content);
if($length>20)
{
    $_SESSION['error'][0]="ENTER UPTO 20 CHARACTER";
}

if(count($_SESSION['error'])>0)
{
    header("location:todo.php");
}
else
{
$sql="insert into todo(`uname`,`password`,`list`)values('".$user."','".$password."','".$content."')";
}
if(mysqli_query($conn,$sql))
      header("location:todo.php");
else
    echo (mysqli_error($conn));
?>

