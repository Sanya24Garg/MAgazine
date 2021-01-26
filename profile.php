<?php
session_start();
if(isset( $_SESSION["user_name"]))
{
?>
<html>
<head> 
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
<link rel="stylesheet" href="css/profile.css" />
    </head>
    <body>
   
   
<div class="AA animated zoomInUp">
<?php

           

           $conn=mysqli_connect("localhost","root",""); /* used to connect php page with mysql*/

           mysqli_select_db($conn,"mag_registration");

        

    
            echo "Welcome ". $_SESSION["user_name"];
         
             
           
           




       $profile = $_SESSION["user_name"];
    
       $password=$_SESSION["pass"];

       $sql= "select * from student_reg WHERE USERNAME = '$profile'  && PASSWORD = '$password' " ;
    
      

       $data = mysqli_query($conn,$sql);
    
      if($result = mysqli_fetch_assoc($data))
          
             {
                            
                  
                 //echo $result["IMAGE"];
          
                   
?>
                  <img src= "<?php echo $result["IMAGE"]; ?>" height="250" width="200" align='left' hspace='20'><br>
    
                  <br>
    
                  <?php echo  'NAME: '.$result["NAME"]; ?><br><br>
                  
                  <?php echo  'SCHOLAR_ID: '.$result["SCHOLAR_ID"]; ?><br><br>
                  
                  <?php echo  'CONTACT_NO: '.$result["CONTACT_NO"]; ?><br><br>
    
                  <?php echo 'DOB: '.$result["DOB"];  
     
             }

    else

             {
                  $sql= "select * from outsider_reg WHERE USERNAME = '$profile' && PASSWORD = '$password' ";            

                  $data = mysqli_query($conn,$sql);
    
                  if($result = mysqli_fetch_assoc($data))
                        
                      { 
                      
               ?>
    
               <img src= "<?php echo $result["IMAGE"]; ?>" height="250" width="200" align='left' hspace='20'><br>
                
                <br>
    
              <?php echo  'NAME: '.$result["NAME"]; ?><br><br>
    
              <?php echo  "CONTACT_NO. : ".$result["CONTACT_NO"];?><br><br> 
              
              <?php echo  "DOB: ".$result["DOB"];?><br><br> 
                     
              <?php echo  "EMAIL_ID: ".$result["EMAIL_ID"];       
                     }
            
    
                 else 
      
                    {
        
             $sql= "select * from staff_reg WHERE USERNAME = '$profile' && PASSWORD= '$password'" ;
        
             $data = mysqli_query($conn,$sql);
    
             if($result = mysqli_fetch_assoc($data))
       
                         {  
             ?>
         
                   <img src= "<?php echo $result["IMAGE"]; ?>" height="250" width="200" align='left' hspace='20'><br>
                   
                     <br>
         
                   <?php echo  'NAME: '.$result["NAME"]; ?><br><br>
                   
                  <?php echo  'STAFF_ID: '.$result["STAFF_ID"]; ?><br><br>
                  
                   <?php echo  'CONTACT_NO: '.$result["CONTACT_NO"]; ?><br><br>
                   
                   <?php echo  "DOB: ".$result["DOB"];
                         
                        }
            }
    }
    
    ?>
    <br>
<a href="update.php"><button>EDIT</button></a> &nbsp; &nbsp; <a href="home.php"><button> SAVE </button> </a>
 
   
    
    </div>
   
  
    </body>
    
</html>
<?php
}
else
    {
        header("location:index.php");
    }
    ?>