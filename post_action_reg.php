<?php
 
session_start();
     

$conn=mysqli_connect("localhost","root",""); /* used to connect php page with mysql*/

mysqli_select_db($conn,"mag_registration");

$connect=$_REQUEST["content"];
if($connect=="")
   {
       $_SESSION['error'][0]="please enter content";
       //header("location:post.php");
   }
     
$user=$_SESSION["user_name"];

if((@count($_SESSION['error'])>0)&&($_SESSION["category"]=="technology"))
  {
    header("location:technology.php");
  }

else if((@count($_SESSION['error'])>0)&&($_SESSION["category"]=="nature"))
  {
    header("location:nature.php");
  }
    
else if((@count($_SESSION['error'])>0)&&($_SESSION["category"]=="sports"))
  {
    header("location:sports.php");
  }
else if((@count($_SESSION['error'])>0)&&($_SESSION["category"]=="travel"))
  {
    header("location:travel.php");
  }
else if ((@count($_SESSION['error'])>0)&&($_SESSION["category"]=="cusinie"))
  {
    header("location:cusinie.php");
  }

else
{

 if(isset($_SESSION["category"]))
{
    $category=$_SESSION['category'];
    $sql="insert into post(`USERNAME`,`CONTENT`,`CATEGORY`) values('".$user."','".$connect."','".$category."')";
    if(mysqli_query($conn,$sql))
      {
         if($category=="technology") 
           {
             $_SESSION['element']=$category; 
             header("location:technology.php");
             
           }
        else if($category=="nature") 
          {
             $_SESSION['element']=$category;
             header("location:nature.php");
              
          }    
       else if($category=="travel") 
         {
            $_SESSION['element']=$category;
            header("location:travel.php");
           
         }
        else if($category=="sports") 
         {
            $_SESSION['element']=$category;
            header("location:sports.php");
            
         }
       else if($category=="cusinie") 
         {
           $_SESSION['element']=$category;
           header("location:cusinie.php");
          
         }    
     }
  else
       {
        echo(mysqli_error($conn));
       }
}
 

}
?>