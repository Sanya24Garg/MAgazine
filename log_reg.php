<?php

session_start();

$conn=mysqli_connect("localhost","root",""); /* used to connect php page with mysql*/

mysqli_select_db($conn,"mag_registration");



$User=$_REQUEST["username"];

$Password=$_REQUEST["password"];

$sql= "select * from student_reg WHERE USERNAME = '$User' &&  PASSWORD = '$Password' && STATUS=1 ";
              

$data= mysqli_query($conn, $sql);


if(mysqli_num_rows($data)>0)
{
     $_SESSION["user_name"]=$User;
     $_SESSION["pass"]=$Password;
     $_SESSION["show"]="write";
     header("location:home.php");
}

else 
{
   
    $sql= "select * from staff_reg WHERE USERNAME = '$User' &&  PASSWORD = '$Password' && STATUS=1";
    
    $data= mysqli_query($conn, $sql);

    if(mysqli_num_rows($data)>0)
       {
    
        $_SESSION["user_name"]=$User; 
        $_SESSION["pass"]=$Password;
        $_SESSION["show"]="write";
        header("location:home.php");
       
       }

    else 
    
    {
    
        $sql= "select * from outsider_reg WHERE USERNAME = '$User' &&  PASSWORD = '$Password' && STATUS=1 ";
        $data= mysqli_query($conn, $sql);
        $total=mysqli_num_rows($data);

        if($total==1)
            {
               $_SESSION["user_name"]=$User;
               $_SESSION["pass"]=$Password;
               header("location:home.php");
            } 
        else
        {
              $_SESSION['error'][0]="Enter valid username and  password.";
              header("location:login.php");
        }
    }
}


?>