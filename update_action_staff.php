<?php
session_start();

$conn=mysqli_connect("localhost","root","");

mysqli_select_db($conn,'mag_registration');

$NAME=$_REQUEST['name'];

if($NAME=="")
{
    $_SESSION['error'][0]="please enter valid name";
}

$USER=$_REQUEST['username'];

$EMAIL_ID=$_REQUEST['email'];

$CONTACT_NO=$_REQUEST['contact'];

if((strlen($CONTACT_NO)>=11)||(strlen($CONTACT_NO)<10)||($CONTACT_NO==""))
    {
    $_SESSION['error'][1]="Enter correct contact number";
    
  }
    

$pattern="/^[0-9]*$/";
    
  if(!preg_match($pattern,$CONTACT_NO))
      {
      $_SESSION['error'][1]="Enter mobile number only";
      
      }

$DOB=$_REQUEST['dob'];

if($DOB=="")
  {
      $_SESSION['error'][2]="Please enter dob";
      
  }

$STAFF=$_REQUEST['staff_id'];

$filename= $_FILES["uploadfile"]["name"];  /* $_FILES["uploadfile] contain an array this array contaion all the  information about the file like file name,file type,file size etc. using print_r you can easily display the value of an array */

$tempname= $_FILES["uploadfile"]["tmp_name"];



$folder="upload/".$filename;

move_uploaded_file($tempname,$folder);

if(count($_SESSION['error'])>0)
{
    header("location:update.php");
}
else
{
        if($folder=="upload/")
           {    
             $sqli=" update staff_reg set NAME='".$NAME."', USERNAME='".$USER."', EMAIL_ID='".$EMAIL_ID."',CONTACT_NO='".$CONTACT_NO."',DOB='".$DOB."',STAFF_ID='".$STAFF."'  where USERNAME='".$_SESSION['user_name']."' ";
           }

        else
           {
             $sqli=" update staff_reg set NAME='".$NAME."', USERNAME='".$USER."', EMAIL_ID='".$EMAIL_ID."',CONTACT_NO='".$CONTACT_NO."',DOB='".$DOB."',STAFF_ID='".$STAFF."',IMAGE='".$folder."'  where USERNAME='".$_SESSION['user_name']."' ";  
           }
      if(mysqli_query($conn,$sqli))
      {
        header("location:profile.php");
       }
    else
    {
    echo (mysqli_error($conn));
    }
}
   
?>