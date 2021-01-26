<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CollegeProject</title>
    <!---------------------------------------------to apply animation-------------------------------------------------------------------->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
     <!---------------------------------------------to apply animation------------------------------------------------------------------->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" type="text/css"  />
    <!---------------------------------------------link of login.php-------------------------------------------------------------------->  
    <link rel="stylesheet" href="css/login1.css">
</head>

<body >
    <form method ="post" action="log_reg.php">
                        <div class="login-box animated lightSpeedIn" >
                                 <h1>Login</h1>
                            <div class="textbox">
                                  <i class="fa fa-user"></i>   <input type="text" placeholder="username" name="username"  value=""/>
                            </div>
     
                           <div class="textbox">
                                 <i class="fa fa-lock"></i>   <input type="password" placeholder="password" name="password" id="myinput" value=""/>
                                 <span class="eye" onclick="myfunction()">
                                 <i id="hide1" class="fa fa-eye"></i>
                                 <i id="hide2" class="fa fa-eye-slash"></i>
                               </span>
                           </div>   
                           
                           
                           
                            <tr><td></td><td>
                                           <?php if(isset($_SESSION['error'][0])&& $_SESSION['error'][0]!="")
									   {
										   echo $_SESSION['error'][0];
										   unset($_SESSION['error'][0]);
									   }
                                           ?>
                            </td></tr>   
                          
                          <input class="btn" type="submit" name="sumbit" value="Login" />       
                       </div>

              </form>
              
              <script>
                    function myfunction()
                  {
                      var x=document.getElementById("myinput");
                      var y=document.getElementById("hide1");
                      var z=document.getElementById("hide2");
                      
                      if(x.type === 'password')
                          {
                              x.type= "text";
                              y.style.display="block";
                              z.style.display="none";
                          }
                      else
                      {
                              x.type= "password";
                              y.style.display="none";
                              z.style.display="block";
                       }
                      
                      
                  }
    </script>
    
</body>
   
</html>