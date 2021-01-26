<?php
session_start();
if(!isset($_SESSION['IS_LOGIN']))
{
        header("location:login.php");
}
include('panel.php');
$conn=mysqli_connect("localhost","root","");

mysqli_select_db($conn,'mag_registration');

$sql="select * from student_reg where ID='".$_REQUEST['ID']."' ";

$run=mysqli_query($conn,$sql);

$data=mysqli_fetch_assoc($run);

?>
   <br>
   <br>
   <br>
    <div id="gradient">  
        <div id="card"><br>
            <img src="../<?php echo $data['IMAGE']; ?> " height="160px" width="525px">
            <h2> <?php echo $data['USERNAME']; ?></h2>
            <p>Name: <?php echo $data['NAME']; ?> </p>
            <p>Dob: <?php echo $data['DOB']; ?> </p>
            <p>Course: <?php echo $data['COURSE']; ?> </p>
            <p>Email Id: <?php echo $data['EMAIL_ID']; ?> 
                     
            <br><br>
            
            <span class="social-profile">
                <a href="https://twitter.com/login" target="_blank"><i class="fab fa-twitter"></i></a>
                <a href="https://www.instagram.com/" target="_blank"><i class="fab fa-instagram"></i></a>
                <a href="https://www.facebook.com/" target="_blank"><i class="fab fa-facebook-f"></i></a>
                <a href="https://www.youtube.com/" target="_blank"><i class="fab fa-youtube"></i></a>
            </span>
            </p>
            
            <span class="left bottom">Contact_no: <?php echo $data['CONTACT_NO']; ?></span>
            
            <span class="right bottom">Scholar_id: <?php echo $data['SCHOLAR_ID']; ?></span>
        </div>
    </div>
    
   