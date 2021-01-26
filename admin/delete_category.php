<?php
session_start();

if(!isset($_SESSION['IS_LOGIN']))
{
    header("location:login.php");
}
$conn=mysqli_connect("localhost","root","");

mysqli_select_db($conn,'mag_registration');

$profile = $_SESSION['username'];

$password= $_SESSION['password'];

$_SESSION['id']=$_REQUEST['ID'];

$id=$_SESSION['id'];

$_SESSION['category']=$_REQUEST['CATEGORY'];

$category=$_SESSION['category'];

$sql=" delete from post where ID='$id' ";

$run=mysqli_query($conn,$sql);


if($result=mysqli_fetch_assoc($run))
   {
    ?>
       <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
             <?php echo "<script>swal('OOPS!','Something went wrong','error')</script> " ;  
   }
   else
   {
        if($category=='technology')           
          header('location:admin_technology.php');
       elseif($category=='nature')
           header('location:admin_nature.php');
       elseif($category=='sports')
           header('location:admin_sports.php');
       elseif($category=='travel')
           header('location:admin_travel.php');
       elseif($category=='cusinie')
           header('location:admin_cusinie.php');
   }
?>