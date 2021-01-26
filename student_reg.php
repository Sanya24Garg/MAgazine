<?php

session_start();

$conn=mysqli_connect("localhost","root",""); /* used to connect php page with mysql*/

mysqli_select_db($conn,"mag_registration"); /* use to select database after connecting mysql */


$NAME=$_REQUEST["name"];
if($NAME=="")
   {
       $_SESSION['error'][0]="please enter valid name";
       //header("location:studentform.php");
   }

$USER_NAME=$_REQUEST["user"];

  if($USER_NAME=="")
  {
      $_SESSION['error'][1]="Please enter user name";
      //header("location:studentform.php");
  }
  

$PASSWORD=$_REQUEST["password"];

//$pattern="/^[A-Z]+[a-z]+[0-9]+$/";

$length=strlen($PASSWORD);
if($length<8)
  {
      $_SESSION['error'][2]="Please enter valid password ";
      //header("location:studentform.php");
  }
     

$CONTACT_NO=$_REQUEST["contact" ];

  if((strlen($CONTACT_NO)>=11)||(strlen($CONTACT_NO)<10)||($CONTACT_NO==""))
    {
    $_SESSION['error'][3]="Enter correct contact number";
    //header("location:studentform.php");
  }
    

$pattern="/^[0-9]*$/";
    
  if(!preg_match($pattern,$CONTACT_NO))
      {
      $_SESSION['error'][3]="Enter mobile number only";
      //header("location:studentform.php");
      }   
    

$EMAIL_ID=$_REQUEST["email"];

$pattern="/^[A-Z]*[a-z]+[0-9]*(@).[a-z]+(.com)+$/";
if(!preg_match($pattern,$EMAIL_ID))
     
  {
      $_SESSION['error'][4]="Please enter email id";
      //header("location:studentform.php");
  }
  

$SCHOLAR_ID=$_REQUEST["scholarid"];


    if($SCHOLAR_ID=="")
  {
      $_SESSION['error'][5]="Please enter scholarid";
      //header("location:studentform.php");
  }
  
$COURSE=$_REQUEST["select" ];
   
  if($COURSE=="SELECT")
  {
      $_SESSION['error'][6]="Please course name";
      //header("location:studentform.php");
  }
  

$DOB=$_REQUEST["dob"];
    
   if($DOB=="")
  {
      $_SESSION['error'][7]="Please enter dob";
      //header("location:studentform.php");
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
     $_SESSION['error'][8]="Please insert a JPEG or PNG file";
     //header("location:studentform.php");
   }

if($file_size>4194304)
{
  $_SESSION['error'][8]="File mut be exactly 4 MB";
     //header("location:studentform.php");
}

$folder="upload/".$filename;

move_uploaded_file($tempname,$folder);

   if($filename=="")
  {
      $_SESSION['error'][8]="Please enter image";
      //header("location:studentform.php");
  }

if(count($_SESSION['error'])>0)
{
    header("location:studentform.php");
}
    
else
$sql="insert into student_reg(`NAME`,`USERNAME`,`PASSWORD`,`CONTACT_NO`,`EMAIL_ID`,`SCHOLAR_ID`,`COURSE`,`DOB`,`IMAGE`) values('".$NAME."','".$USER_NAME."','".$PASSWORD."','".$CONTACT_NO."','".$EMAIL_ID."','".$SCHOLAR_ID."','".$COURSE."','".$DOB."','".$folder."')";

if(mysqli_query($conn,$sql))
  {
	  
     $_SESSION["user_name"]=$USER_NAME;//to view profile
     $_SESSION["pass"]=$PASSWORD;
     $_SESSION["show"]="write";
     
     header("location:home.php");
  }
  else
  {
	  if (mysqli_error($conn))
      {
          $_SESSION['error'][9]="Username or Scholar_id already exist.";
          header("location:studentform.php");
         
      }
      
  }
  
?>