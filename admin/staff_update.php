<?php
session_start();
if(!isset($_SESSION['IS_LOGIN']))
{
       header("location:login.php");
}
    
include('panel.php');

$conn=mysqli_connect("localhost","root","");

mysqli_select_db($conn,'mag_registration');

$sql="select * from staff_reg where ID='".$_REQUEST['ID']." ' ";

$run=mysqli_query($conn,$sql);

$data=mysqli_fetch_assoc($run);

$_SESSION['ID']=$_REQUEST['ID'];
?>
<div class="header">UPDATE DATA</div>
    <form method="post" action="admin_staff_update_action.php" enctype="multipart/form-data">
        <br>
          <br>
           <center>
           <div class="table">
           <table>
            <tr><td>NAME:</td><td><input type="text" name="name" value="<?php echo $data['NAME']; ?>"></td></tr>
            <tr><td>USERNAME:</td><td><input readonly type="text" style="color:grey" name="username" value="<?php echo $data['USERNAME']; ?>"></td></tr>
            <tr><td>PASSWORD:</td><td><input type="text" name="pass" value="<?php echo $data['PASSWORD']; ?>"></td></tr>
            <tr><td>CONTACT_NO:</td><td><input type="text" name="contact" value="<?php echo $data['CONTACT_NO']; ?>"></td></tr>
            <tr><td>EMAIL_ID:</td><td><input type="text" name="email" value="<?php echo $data['EMAIL_ID']; ?>"></td></tr>
            <tr><td>STAFF_ID:</td><td><input type="text" name="staff" value="<?php echo $data['STAFF_ID']; ?>"></td></tr>     
            <tr><td>DOB:</td><td><input type="date" name="dob" value="<?php echo $data['DOB']; ?>"></td></tr>
            <tr><td align="center" colspan="2"> <input id="submit" type="submit" value="UPDATE" name="submit"></td></tr> 
        </table>
        </div>
        </center>
    </form>
