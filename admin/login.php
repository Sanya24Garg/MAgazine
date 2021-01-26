<?php
session_start();
$conn=mysqli_connect("localhost","root","");
mysqli_select_db($conn,"admin");   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link href="css/login.css" rel="stylesheet" />
</head>
<body>
   <div class="login">
       <center><h4>ADMIN LOGIN PANEL</h4></center>
    <table style="padding:30px;">
        <form action="#" method="post">
            <tr>
                <td>USERNAME:</td><td><input type="text" name="user"></td>
            </tr>
            <tr>
                <td>PASSWORD:</td><td><input type="password" name="pass"></td>
            </tr>
            <tr>
                <td colspan="2" align="center"><input type="submit" name="login" value="LOGIN"></td>
            </tr>
        </form>
    </table>
    </div>
    <?php
    if(isset($_POST['login']))
    {
        $username=$_POST['user'];
        $password=$_POST['pass'];
        
        $query="SELECT * FROM admin_table where uname='$username' and password='$password' and status=1 ";
        
        $run=mysqli_query($conn,$query);
        
        $data=mysqli_num_rows($run);
        
        if($data>0)
        {
           $row=mysqli_fetch_assoc($run);
           $_SESSION['ROLE']=$row['role'];
           $_SESSION['IS_LOGIN']='yes';
           $_SESSION['username']=$username;
           $_SESSION['password']=$password;
           if($row['role']==1)
           {
               header("location:home.php");
               
           }
           if($row['role']==2)
           {
               header("location:home.php");
               
           }    
            
        }
        else
        {
           ?>
             <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
             <?php echo "<script>swal('OOPS!','Invalid Login','error')</script> " ;  
        }        
    }
    ?>
</body>
</html>