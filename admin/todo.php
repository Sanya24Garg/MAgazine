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
 
$sql= "select * from todo WHERE uname = '$profile'  && password = '$password'";

$data = mysqli_query($conn,$sql);

include 'panel.php';
 
?>
   <div class="header">TO-DO LIST</div>
    <form action="todo_action.php" method="post" enctype="multipart/form-data">
       <div id="container">
       <div class="controls">
           <h1>TO DO</h1>
           <input name="data" type="text" id="in" placeholder="Enter a item" ><br>
               <?php if(isset($_SESSION['error'][0])&& $_SESSION['error'][0]!="")
									   {
										   echo $_SESSION['error'][0];
										   unset($_SESSION['error'][0]);
									   }
                ?>
           <button type="submit" id="add">ADD TODO</button>
           
       </div>                                                                 
       <ul id="list">
           <?php
             while($result=mysqli_fetch_assoc($data))
             {
              ?>
               <li class="mycheck "><input type="checkbox" id="check"><label><?php echo $result['list'];?></label>
                   <a href="remove.php?id=<?php echo $result['id']; ?>"><i class="fa fa-trash" style="color:grey"></i></a></li>
             <?php
             }
           ?>     
       </ul>
       </div>
    </form>
<?php
include 'panel_footer.php';
?>