<?php
session_start();
if(!isset($_SESSION['IS_LOGIN']))
{
      header("location:login.php");
}

include('panel.php');

$conn=mysqli_connect("localhost","root","");

mysqli_select_db($conn,'admin');

$user=$_SESSION['username'];
$password=$_SESSION['password'];

$sql="select * from admin_table where uname='$user' && password='$password' ";

$run=mysqli_query($conn,$sql);

$data=mysqli_fetch_assoc($run);

?>
<div class="header">UPDATE DATA</div>
    <form method="post" action="admin_update_action.php" enctype="multipart/form-data">
       <br>
        <br>
        <center>
        <div class="table">
        <table>
            <tr><td>NAME:</td><td><input type="text" name="name" value="<?php echo $data['name']; ?>"></td></tr>
            <tr><td>USERNAME:</td><td><input readonly type="text" name="username" value="<?php echo $data['uname']; ?>"></td></tr>
            <tr><td>PASSWORD:</td><td><input type="text" name="pass" value="<?php echo $data['password']; ?>"></td></tr>
            <tr><td>EMAIL_ID:</td><td><input type="text" name="email" value="<?php echo $data['email']; ?>"></td></tr>
            <tr><td>INFO:</td><td><textarea name="info" style="margin:0px; width:199px; height:50px;"><?php echo $data['info']; ?></textarea></td></tr>
            <tr><td align="center" colspan="2"> <input id="submit" type="submit" value="UPDATE" name="submit"></td></tr> 
        </table>
        </div>
        </center>
    </form>

