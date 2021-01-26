<?php
session_start();
if(!isset($_SESSION['IS_LOGIN']))
{
   header("location:login.php");
}

$conn=mysqli_connect("localhost","root","");

mysqli_select_db($conn,'mag_registration');

$sql=" update staff_reg set status=0 where ID='".$_REQUEST['ID']."' ";

if($run=mysqli_query($conn,$sql))
{
    header("location:staff_data.php");
}
else
{
    echo(mysqli_error($conn));
}

?>
