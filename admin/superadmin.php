<?php
@session_start();
if(!isset($_SESSION['IS_LOGIN']))
{
        header("location:login.php");
}
$conn=mysqli_connect("localhost","root","");
mysqli_select_db($conn,'admin');

$user=$_SESSION['username'];
$password=$_SESSION['password'];

 $sql=" select * from admin_table where uname='$user' && password='$password' ";
$data = mysqli_query($conn,$sql);
 
$result = mysqli_fetch_assoc($data);
    
include('panel.php');
?>
   <div class="header">Welcome! Admin </div>
    <div class="card-container">
      <div class="upper-container">
          <div class="image-container">
                 <img src="<?php echo $result["img"]; ?>">
          </div>
      </div>  
      <div class="lower-container">
         <div>
             <h3><?php echo $result["uname"]; ?></h3>
             <h4><?php echo $result["name"]; ?></h4>
             <h4><?php echo $result["email"]; ?></h4>
         </div> 
         
         <div>
             <p><?php echo $result["info"]; ?></p>
         </div>
         <div>
             <a href="admin_update.php" class="btn">Update Profile</a>
         </div>
      </div>
    </div>
    
<?php
   include('panel_footer.php');
?>