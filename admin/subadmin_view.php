<?php
session_start();
if(!isset($_SESSION['IS_LOGIN']))
{
        header("location:login.php");
}

include('panel.php');

$conn=mysqli_connect("localhost","root","");

mysqli_select_db($conn,'admin');

$sql="select * from admin_table where id='".$_REQUEST['id']."' ";

$run=mysqli_query($conn,$sql);

$data=mysqli_fetch_assoc($run);

?>


<br>
   <br>
   <br>
    <div id="gradient">  
        <div id="card"><br>
            <img src="<?php echo $data['img']; ?> " height="160px" width="525px">
            <h2> <?php echo $data['uname']; ?></h2>
            <p>Name: <?php echo $data['name']; ?> </p>
            <p>Email Id: <?php echo $data['email']; ?></p>
            <p>Info.: <?php echo $data['info']; ?> 
            <br><br>
            <span class="social-profile">
                <a href="https://twitter.com/login" target="_blank"><i class="fab fa-twitter"></i></a>
                <a href="https://www.instagram.com/" target="_blank"><i class="fab fa-instagram"></i></a>
                <a href="https://www.facebook.com/" target="_blank"><i class="fab fa-facebook-f"></i></a>
                <a href="https://www.youtube.com/" target="_blank"><i class="fab fa-youtube"></i></a>
            </span>
            </p>
        </div>
    
            
