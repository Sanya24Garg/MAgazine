<?php
session_start();
if(!isset($_SESSION['IS_LOGIN']))
{
   header("location:login.php");
}

$conn=mysqli_connect("localhost","root","");

mysqli_select_db($conn,'admin');

$sql=" update admin_table set status=0 where id='".$_REQUEST['id']."' ";

if($run=mysqli_query($conn,$sql))
{
    header("location:subadmin_data.php");
}
else
{
    echo(mysqli_error($conn));
}

?>

