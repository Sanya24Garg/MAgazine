<?php

session_start();

$conn=mysqli_connect("localhost","root",""); /* used to connect php page with mysql*/

mysqli_select_db($conn,"mag_registration"); /* use to select database after connecting mysql */


$NAME=$_REQUEST["name"];
if($NAME=="")
   {
       $_SESSION['error'][0]="Please enter valid name";
       //header("location:outsider_form.php");
   }

$USER_NAME=$_REQUEST["user"];

  if($USER_NAME=="")
  {
      $_SESSION['error'][1]="Please enter user name";
      //header("location:outsider_form.php");
  }
  

$PASSWORD=$_REQUEST["password"];

//$pattern="/^[A-Z]+[a-z]+[0-9]+$/";

$length=strlen($PASSWORD);
if($length<8)
  {
      $_SESSION['error'][2]="Please enter valid password ";
      //header("location:outsider_form.php");
  }
     

$CONTACT_NO=$_REQUEST["contact" ];

  if((strlen($CONTACT_NO)>=11)||(strlen($CONTACT_NO)<10)||($CONTACT_NO==""))
    {
    $_SESSION['error'][3]="Enter correct contact number";
    //header("location:outsider_form.php");
  }
    

$pattern="/^[0-9]*$/";
    
  if(!preg_match($pattern,$CONTACT_NO))
      {
      $_SESSION['error'][3]="Enter mobile number only";
      //header("location:outsider_form.php");
      }   
    

$EMAIL_ID=$_REQUEST["email"];

$pattern="/^[A-Z]*[a-z]+[0-9]*(@).[a-z]+(.com)+$/";
if(!preg_match($pattern,$EMAIL_ID))
     
  {
      $_SESSION['error'][4]="Please enter email id";
      //header("location:outsider_form.php");
  }
  

  

$DOB=$_REQUEST["dob"];
    
   if($DOB=="")
  {
      $_SESSION['error'][5]="Please enter dob";
      //header("location:outsider_form.php");
  }
  
/* image uploading*/

$filename= $_FILES["uploadfile"]["name"];

$tempname= $_FILES["uploadfile"]["tmp_name"];

$file_size=$_FILES["uploadfile"]["size"];

$files_type=$_FILES["uploadfile"]["type"];

$file_ext=strtolower(end(explode('.',$filename)));

$expension=array("jpeg","jpg","png");

   if(in_array($file_ext,$expension)==false)
   {
     $_SESSION['error'][6]="Please insert a JPEG or PNG file";
      //header("location:outsider_form.php");  
   }

if($file_size>4194304)
{
  $_SESSION['error'][6]="File must be exactly 2 MB";
      //header("location:outsider_form.php");    
}

$folder="upload/".$filename;

move_uploaded_file($tempname,$folder);

   if($filename=="")
  {
      $_SESSION['error'][6]="Please enter image";
      //header("location:outsider_form.php");
  }

if(count($_SESSION['error'])>0)
{
    header("location:outsider_form.php");
}
else
    
$sql="insert into outsider_reg(`NAME`,`USERNAME`,`PASSWORD`,`CONTACT_NO`,`EMAIL_ID`,`DOB`,`IMAGE`)Values('".$NAME."','".$USER_NAME."','".$PASSWORD."','".$CONTACT_NO."','".$EMAIL_ID."','".$DOB."',' ".$folder."')";

if(mysqli_query($conn,$sql))
  {
     
     $_SESSION["user_name"]=$USER_NAME;
     $_SESSION["pass"]=$PASSWORD;
     header("location:home.php");
  }
  else
  {
	  if (mysqli_error($conn))
      {
      $_SESSION['error'][7]="Username or Scholar_id already exist.";
      header("location:outsider_form.php");
      }
 }
  
?>