<?php 
@session_start();
if(isset($_SESSION["show"]))
    
{

$conn=mysqli_connect("localhost","root","");
mysqli_select_db($conn,"mag_registration");
?>

<div class="post">
    <form method="post" action="post_action_reg.php">
    
          <textarea name="content"></textarea>
          <tr><td></td><td>
          <?php if(isset($_SESSION['error'][0])&& $_SESSION['error'][0]!="")
			   {
		         /*$error=$_SESSION['error'][0];
                 echo "<script>alert('".$error."')</script>";*/
                 ?>
                 <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
                 <?php echo"<script>swal('OOPS!', 'something went wrong!', 'error')</script>";
                  unset($_SESSION['error'][0]);
               }     
		  ?>
          </td></tr>
        <center><input type="submit" value="UPLOAD" name="submit"></center>
       
    </form>
    <script src="ckeditor/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('content',{
            filebrowserUploadUrl:'ckeditor/ck_upload.php',
            filebrowserUploadMethod:'form'
        });
    </script>
  
    </div>
    <?php
}
?>


