<?php
session_start();
if(!isset($_SESSION['IS_LOGIN']))
{
 
    header("location:login.php");
}

include('panel.php');
   
$conn=mysqli_connect("localhost","root","");

mysqli_select_db($conn,'mag_registration');

$sql= " select * from student_reg where status=1";

$run=mysqli_query($conn,$sql);

?>

<div class="header">Student Data</div>
                   <div class="info">
    <center>               
    <table border="1">
        <tr><th>ID</th><th>NAME</th><th>CONTACT NO.</th><th>SCHOLAR ID</th><th>DOB</th><th>EMAIL ID</th><th>VIEW</th><th>DELETE</th><th>UPDATE</th></tr>
        <?php while($data=mysqli_fetch_assoc($run))
          {
        ?>
        <tr><td><?php echo $data['ID'];?></td>
        <td><?php echo $data['NAME'];?></td>
        <td><?php echo $data['CONTACT_NO'];?></td>
        <td><?php echo $data['SCHOLAR_ID'];?></td>
        <td><?php echo $data['DOB'];?></td>
        <td><?php echo $data['EMAIL_ID'];?></td>
            <td><a href="student_view.php?ID=<?php echo $data['ID']; ?>" style="color:blue;">VIEW PROFILE</a></td>
            <td><a href="student_delete.php?ID=<?php echo $data['ID']; ?>" style="color:blue;">DELETE</a></td>
            <td><a href="student_update.php?ID=<?php echo $data['ID']; ?>" style="color:blue;">UPDATE</a></td>
        </tr>
    <?php } ?>
        
    </table>
    </center>
</div>
<?php
include('panel_footer.php');

?>