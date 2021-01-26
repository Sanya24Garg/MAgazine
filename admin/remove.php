<?php
session_start();

if(!isset($_SESSION['IS_LOGIN']))
{
    header("location:login.php");
}
$conn=mysqli_connect("localhost","root","");

mysqli_select_db($conn,'admin');

$profile = $_SESSION['username'];

$password= $_SESSION['password'];

$_SESSION['id']=$_REQUEST['id'];

$id=$_SESSION['id'];

 $sql=" delete from todo where id='$id' ";

$run=mysqli_query($conn,$sql);


if($result=mysqli_fetch_assoc($run))
   {
    ?>
       <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
             <?php echo "<script>swal('OOPS!','Something went wrong','error')</script> " ;  
   }
   else
   {
       header('location:todo.php');
   }
?>