<?php
session_start();
if(!isset($_SESSION['IS_LOGIN']))
{
 
    header("location:login.php");
}

include('panel.php');
   
$conn=mysqli_connect("localhost","root","");

mysqli_select_db($conn,'admin');

$sql= " select * from admin_table where role=2 && status=1";

$run=mysqli_query($conn,$sql);

?>

<div class="header">Sub Admin Data</div>
                   <div class="info">
    <center>
    <table border="1">
        <tr><th>ID</th><th>NAME</th><th>USERNAME</th><th>EMAIL ID</th><th>VIEW</th><th>DELETE</th><th>UPDATE</th></tr>
        <?php while($data=mysqli_fetch_assoc($run))
          {
        ?>
        <tr><td><?php echo $data['id'];?></td>
        <td><?php echo $data['name'];?></td>
        <td><?php echo $data['uname'];?></td>
        <td><?php echo $data['email'];?></td>
            <td><a href="subadmin_view.php?id=<?php echo $data['id']; ?>" style="color:blue;">VIEW PROFILE</a></td>
            <td><a href="subadmin_delete.php?id=<?php echo $data['id']; ?>" style="color:blue;">DELETE</a></td>
            <td><a href="subadmin_update.php?id=<?php echo $data['id']; ?>" style="color:blue;">UPDATE</a></td>
        </tr>
    <?php } ?>    
    </table>
    </center>
</div>

<?php
include('panel_footer.php');

?>