<?php 
@session_start(); 
$conn=mysqli_connect("localhost","root","");
mysqli_select_db($conn,"admin");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Panel</title>
    
    <!-------------------------------- STYLEcss ------------------------------------------------------>
    <link rel="stylesheet" href="css/style.css">
    
    <!-------------------------------  CSS and JS of CLOCK ---------------------------------------------------->
    <style type="text/css">
  @font-face {
    font-family: 'BebasNeueRegular';
    src: url('BebasNeue-webfont.eot');
    src: url('BebasNeue-webfont.eot?#iefix') format('embedded-opentype'),
         url('BebasNeue-webfont.woff') format('woff'),
         url('BebasNeue-webfont.ttf') format('truetype'),
         url('BebasNeue-webfont.svg#BebasNeueRegular') format('svg');
    font-weight: normal;
    font-style: normal;

}

    .container { width: 300px; margin:0; overflow: hidden; float:right; margin-top: 71px;}

.clock {background:#202020; width:300px; margin:0; padding:5px; border:1px solid #fff; color:#fff; text-align:center;}

#Date { font-family:'BebasNeueRegular', Arial, Helvetica, sans-serif; font-size:1em; text-align:center; text-shadow:0 0 5px #00c6ff; }

.time { width:300px; margin:0 auto; padding:0px; list-style:none; text-align:center; }
.time li { display:inline; font-size:3em; font-family:'BebasNeueRegular', Arial, Helvetica, sans-serif; text-shadow:0 0 5px #00c6ff; }

#point { position:relative; -moz-animation:mymove 1s ease infinite; -webkit-animation:mymove 1s ease infinite;}

@-webkit-keyframes mymove 
{
0% {opacity:1.0; text-shadow:0 0 20px #00c6ff;}
50% {opacity:0; text-shadow:none; }
100% {opacity:1.0; text-shadow:0 0 20px #00c6ff; }	
}


@-moz-keyframes mymove 
{
0% {opacity:1.0; text-shadow:0 0 20px #00c6ff;}
50% {opacity:0; text-shadow:none; }
100% {opacity:1.0; text-shadow:0 0 20px #00c6ff; }	
}

        
#clear
        {
            clear:both;
        }
</style>
<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
<script type="text/javascript" src="http://code.jquery.com/jquery-1.6.4.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
// Create two variable with the names of the months and days in an array
var monthNames = [ "January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December" ]; 
var dayNames= ["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"]

// Create a newDate() object
var newDate = new Date();
// Extract the current date from Date object
newDate.setDate(newDate.getDate());
// Output the day, date, month and year    
$('#Date').html(dayNames[newDate.getDay()] + " " + newDate.getDate() + ' ' + monthNames[newDate.getMonth()] + ' ' + newDate.getFullYear());

setInterval( function() {
	// Create a newDate() object and extract the seconds of the current time on the visitor's
	var seconds = new Date().getSeconds();
	// Add a leading zero to seconds value
	$("#sec").html(( seconds < 10 ? "0" : "" ) + seconds);
	},1000);
	
setInterval( function() {
	// Create a newDate() object and extract the minutes of the current time on the visitor's
	var minutes = new Date().getMinutes();
	// Add a leading zero to the minutes value
	$("#min").html(( minutes < 10 ? "0" : "" ) + minutes);
    },1000);
	
setInterval( function() {
	// Create a newDate() object and extract the hours of the current time on the visitor's
	var hours = new Date().getHours();
	// Add a leading zero to the hours value
	$("#hours").html(( hours < 10 ? "0" : "" ) + hours);
    }, 1000);
	
}); 
</script>

<!----------------------------------------------------- END -------------------------------------------------------------->

<!----------------------------------------------SUPERADMIN CSS ---------------------------------------------------------->
<link rel="stylesheet" href="css/superadmin1.css" type="text/css" />

<!-------------------------------------------------END ------------------------------------------------------------------->

<!-------------------------------------------------------- TODO CSS --------------------------------------------------->
 <link rel="stylesheet" href="css/todo.css" />
 
 <!--------------------------------------------------------- END -------------------------------------------------------->
 
 <!----------------------------------------------------------- view css -------------------------------------------------->
 <link rel="stylesheet" href="css/view.css" />
 
 <!--------------------------------------------------------- END -------------------------------------------------------->
 
 <!-----------------------------------------------------------CATEGORY CSS----------------------------------------------------->
 <link rel="stylesheet" href="css/category_all1.css" type="text/css" />
  
 <!-------------------------------------------------------------END--------------------------------------------------------------->
 
 <!----------------------------------------------------------- UDPATE CSS FOR ALL STUDENT,STAFF,OUTSIDER,SUB ADMIN,SUPERADMIN------------------>
 
 <link rel="stylesheet" type="text/css" href="css/update_all.css" />
 <!--------------------------------------------------------------END------------------------------------------------------------------->
 </head>
<body>
   
    <div class="wrapper">
    
        <div class="sidebar">
            <h2>Dashboard</h2>
            <ul class="main">
                 
                 <li><a href="home.php"><i class="fas fa-home"></i>&nbsp;Home</a></li>
                  <li> <a href="#"><i class="fas fa-angle-double-down"></i>&nbsp;Category</a>
                       <ul class="sub_main">
                           <li><a href="admin_technology.php"><i class="fas fa-desktop"></i>&nbsp;Technology</a></li>
                           <li><a href="admin_nature.php"><i class="fa fa-leaf"></i>&nbsp;Nature</a></li>
                           <li><a href="admin_sports.php"><i class="fas fa-table-tennis"></i>&nbsp;Sport</a></li>
                           <li><a href="admin_travel.php"><i class="fas fa-route"></i>&nbsp;Travel</a></li>
                           <li><a href="admin_cusinie.php"><i class="fas fa-coffee"></i>&nbsp;Cuisine</a></li>
                       </ul>
                </li>   
                 <?php
                 if($_SESSION['ROLE']==1)
                 {  ?>
                <li><a href="student_data.php"><i class="fas fa-user-graduate"></i>&nbsp;Student Data</a></li>
                <li><a href="staff_data.php"><i class="fas fa-user-shield"></i>&nbsp;Staff Data</a></li>
                <li><a href="outsider_data.php"><i class="fas fa-user"></i>&nbsp;Outsider Data</a></li>
                <li><a href="superadmin.php"><i class="fas fa-id-card"></i>&nbsp;Admin Profile</a></li>
                <li><a href="subadmin_data.php"><i class="fas fa-user-friends"></i>&nbsp;Sub Admins</a></li>
                <?php }?>
                <?php
                if($_SESSION['ROLE']==2)
                {?>
                   <li><a href="superadmin.php"><i class="fas fa-id-card"></i>&nbsp;Profile</a></li>
                 <?php   
                }?>
                 <li><a href="todo.php"><i class="fas fa-edit"></i>&nbsp;To-Do List</a></li>                                                               <li><a href="logout.php"><i class="fas fa-sign-out-alt"></i>&nbsp;Logout</a></li>
                
            </ul>
        </div>
               
               <div class="main_content">
                   