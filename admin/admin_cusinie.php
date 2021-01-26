<?php
session_start();
if(!isset($_SESSION['IS_LOGIN']))
{
    header("location:login.php");
}

include('panel.php');

$conn=mysqli_connect("localhost","root","");

mysqli_select_db($conn,'mag_registration');

$sql= " select * from post where STATUS=1 and CATEGORY='cusinie' ";

$run=mysqli_query($conn,$sql);
?>
    <div class="header">Lets dicuss about Travels</div>
                    
    <?php while($data=mysqli_fetch_assoc($run))
          {
        ?>                
   <div class="cards">    
       
       <div class="title">
           <h1><?php echo $data['USERNAME'];?></h1>
       </div>
       
       <div class="desc">
           <p><?php echo $data['CONTENT'];?></p>
           <button><a href="accept_category.php?ID=<?php echo $data['ID'];?>&CATEGORY=<?php echo $data['CATEGORY']; ?>">Accept</a></button>
           <button><a href="delete_category.php?ID=<?php echo $data['ID'];?>&CATEGORY=<?php echo $data['CATEGORY']; ?>">Delete</a></button>
       </div>
       
   </div> 
 <?php } ?>                   
                   
<?php
include('panel_footer.php');
?>