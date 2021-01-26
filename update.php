<?php
session_start();
$conn=mysqli_connect("localhost","root","");
mysqli_select_db($conn,"mag_registration");
$sql=" select * from student_reg where USERNAME ='".$_SESSION["user_name"]."' && PASSWORD='".$_SESSION["pass"]."' ";
$data=mysqli_query($conn,$sql);
if($result=mysqli_fetch_assoc($data))
{
     ?>
     <!DOCTYPE html>
    <html lang="en">
    <head>
    <meta charset="UTF-8">
    <title>Updation</title>
    <link rel="stylesheet" href="css/edit.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
    </head>
    <body>
    <div class="AA animated slideInUp">
    <form action="update_action.php" method="post" enctype="multipart/form-data">
    <table>
    <div class="head"> <tr><td  colspan="2" style= "font-size:30px; text-align:center; ">UPDATE</td></tr></div>
    <tr><td>NAME:</td><td><input type="text" name="name" value="<?php echo $result['NAME']; ?>"></td></tr><br>
    <tr><td></td><td>
    <?php
    if(isset($_SESSION['error'][0])&& $_SESSION['error'][0]!="")
       {
        echo $_SESSION['error'][0];
        unset($_SESSION['error'][0]);
       }
    ?>
    </td></tr>          
    <tr><td>USERNAME:</td><td><input readonly type="text" style="color:grey" name="username"  value="<?php echo $result['USERNAME']; ?>"></td></tr><br>
    <tr><td>EMAIL_ID:</td><td><input readonly type="text" style="color:grey" name="email"  value="<?php echo $result['EMAIL_ID']; ?>"></td></tr><br>
    <tr><td>CONTACT_NO:</td><td><input type="text" name="contact"  value="<?php echo $result['CONTACT_NO']; ?>"></td></tr><br>
    <tr><td></td><td>
    <?php 
    if(isset($_SESSION['error'][1])&& $_SESSION['error'][1]!="")
         {
            echo $_SESSION['error'][1];
            unset($_SESSION['error'][1]);
         }
    ?>
    </td></tr>
    <tr><td>DOB</td><td><input type="date" name="dob"  value="<?php echo $result['DOB']; ?>"></td></tr><br>
    <tr><td></td><td>
    <?php 
    if(isset($_SESSION['error'][2])&& $_SESSION['error'][2]!="")
       {
         echo $_SESSION['error'][2];
		 unset($_SESSION['error'][2]);
       }
    ?>
    </td></tr>
    <tr><td>SCHOLAR-ID</td><td><input readonly type="text" style="color:grey" name="scholar_id" style="color:grey" value="<?php echo $result['SCHOLAR_ID']; ?>"></td></tr><br>
    <tr><td>IMAGE:</td><td><input type="file" name="uploadfile" value="<?php echo $result['IMAGE']; ?>"/></td></tr>
    <tr><td colspan="2"> <input type="submit" value="UPDATE" name="submit"></td></tr> 
    </table>
    </form>
    </div>
<?php        
}

else
{
     $sql=" select * from outsider_reg where USERNAME ='".$_SESSION["user_name"]."' && PASSWORD='".$_SESSION["pass"]."' ";
     $data=mysqli_query($conn,$sql);
     if($result=mysqli_fetch_assoc($data))
     {
       ?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
        <meta charset="UTF-8">
        <title>Updation</title>
        <link rel="stylesheet" href="css/edit.css" />
        </head>
        <body>
        <div class="AA">
        <form action="update_action_outer.php" method="post" enctype="multipart/form-data">
        <table>
        <div class="head">
        <tr><td  colspan="2" style= "font-size:30px; text-align:center; ">UPDATE</td></tr>
        </div>
        <tr><td>NAME:</td><td><input type="text" name="name" value="<?php echo $result['NAME']; ?>"></td></tr><br>
        <tr><td></td><td>
        <?php
        if(isset($_SESSION['error'][0])&& $_SESSION['error'][0]!="")
           {
               echo $_SESSION['error'][0];
               unset($_SESSION['error'][0]);
           }
         ?>
        </td></tr>  
        <tr><td>USERNAME:</td><td><input readonly type="text" style="color:grey" name="username"  value="<?php echo $result['USERNAME']; ?>"></td></tr><br>
        <tr><td>EMAIL_ID:</td><td><input readonly type="text" style="color:grey" name="email"  value="<?php echo $result['EMAIL_ID']; ?>"></td></tr><br>
        <tr><td>CONTACT_NO:</td><td><input type="text" name="contact"  value="<?php echo $result['CONTACT_NO']; ?>"></td></tr><br>
        <tr><td></td><td>
        <?php if(isset($_SESSION['error'][1])&& $_SESSION['error'][1]!="")
           {
              echo $_SESSION['error'][1];
              unset($_SESSION['error'][1]);
           }
        ?>
        </td></tr>
        <tr><td>DOB</td><td><input type="date" name="dob"  value="<?php echo $result['DOB']; ?>"></td></tr><br>
        <tr><td></td><td>
        <?php if(isset($_SESSION['error'][2])&& $_SESSION['error'][2]!="")
    	   {
             echo $_SESSION['error'][2];
             unset($_SESSION['error'][2]);
           }
        ?>
        </td></tr>
        <tr><td>IMAGE:</td><td><input type="file" name="uploadfile" value="<?php echo $result['IMAGE']; ?>"/></td></tr>
        <tr><td colspan="2"> <input type="submit" value="UPDATE" name="submit"></td></tr> 
        </table>
        </form>
        </div>
        <?php    
          }
        else
          {
         $sql=" select * from staff_reg where USERNAME ='".$_SESSION["user_name"]."' && PASSWORD='".$_SESSION["pass"]."' ";
         $data=mysqli_query($conn,$sql);
         if($result=mysqli_fetch_assoc($data))
            {
         ?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
        <meta charset="UTF-8">
        <title>Updation</title>
        <link rel="stylesheet" href="css/edit.css" />
        </head>
        <body>
        <div class="AA"> 
        <form action="update_action_staff.php" method="post" enctype="multipart/form-data">
        <table>
        <div class="head">
        <tr><td  colspan="2" style= "font-size:30px; text-align:center; ">UPDATE</td></tr>
        </div>
        <tr><td>NAME:</td><td><input type="text" name="name" value="<?php echo $result['NAME']; ?>"></td></tr><br>
        <tr><td></td><td>
        <?php
        if(isset($_SESSION['error'][0])&& $_SESSION['error'][0]!="")
           {
            echo $_SESSION['error'][0];
            unset($_SESSION['error'][0]);
           }
         ?>
        </td></tr>  
        <tr><td>USERNAME:</td><td><input readonly type="text" style="color:grey" name="username"  value="<?php echo $result['USERNAME']; ?>"></td></tr><br>
        <tr><td>EMAIL_ID:</td><td><input readonly style="color:grey" type="text" name="email"  value="<?php echo $result['EMAIL_ID']; ?>"></td></tr><br>
        <tr><td>CONTACT_NO:</td><td><input type="text" name="contact"  value="<?php echo $result['CONTACT_NO']; ?>"></td></tr><br>
        <tr><td></td><td>
        <?php if(isset($_SESSION['error'][1])&& $_SESSION['error'][1]!="")
           {
             echo $_SESSION['error'][1];
             unset($_SESSION['error'][1]);
           }
         ?></td></tr>
        <tr><td>DOB</td><td><input type="date" name="dob"  value="<?php echo $result['DOB']; ?>"></td></tr><br>
        <tr><td></td><td>
        <?php if(isset($_SESSION['error'][2])&& $_SESSION['error'][2]!="")
           {
             echo $_SESSION['error'][2];
             unset($_SESSION['error'][2]);
            }
        ?>
        </td></tr>
        <tr><td>STAFF-ID</td><td><input readonly type="text" style="color:grey" name="staff_id" value="<?php echo $result['STAFF_ID']; ?>"></td></tr><br>
        <tr><td>IMAGE:</td><td><input type="file" name="uploadfile" value="<?php echo $result['IMAGE']; ?>"/></td></tr>
        <tr><td colspan="2"> <input type="submit" value="UPDATE" name="submit"></td></tr> 
        </table>
        </form>
        </div>
        <?php
             }
      
      }
}
 ?>   
</body>
</html>
