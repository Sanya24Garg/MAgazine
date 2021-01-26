<?php

session_start();
$conn=mysqli_connect("localhost","root","");

mysqli_select_db($conn,'mag_registration');

$NAME=$_REQUEST['name'];

$USER=$_REQUEST['username'];

$PASSWORD=$_REQUEST['pass'];

$CONTACT_NO=$_REQUEST['contact'];

$EMAIL_ID=$_REQUEST['email'];

$DOB=$_REQUEST['dob'];



 $sqli=" update outsider_reg set NAME='".$NAME."', USERNAME='".$USER."', PASSWORD='".$PASSWORD."',CONTACT_NO='".$CONTACT_NO."',EMAIL_ID='".$EMAIL_ID."',DOB='".$DOB."'  where ID='".$_SESSION['ID']."' ";
         

if(mysqli_query($conn,$sqli))
{
    header("location:outsider_data.php");
    unset($_SESSION['ID']);
}
else
{
    echo (mysqli_error($conn));
}

?>