<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CollegeProject</title>
    <link rel="stylesheet" href="css/form.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
</head>
<body>
     <div class="AA animated zoomInDown">
                           <center><h1>SIGN  IN FOR STUDENT</h1></center>
                               <table>
                                       <form method="post" action="student_reg.php" enctype="multipart/form-data">
                                
                                     
                                       <tr><td>NAME:</td><td><input name="name" type="text" /></td></tr>
                                       
                                        <tr><td></td><td>
                                           <?php if(isset($_SESSION['error'][0])&& $_SESSION['error'][0]!="")
									   {
										   echo $_SESSION['error'][0];
										   unset($_SESSION['error'][0]);
									   }
									   ?></td></tr>
                                       
                                       <tr><td>USER NAME:</td><td><input name="user" type="text" /></td></tr>
                                       
                                       <tr><td></td><td>
                                           <?php if(isset($_SESSION['error'][1])&& $_SESSION['error'][1]!="")
									   {
										   echo $_SESSION['error'][1];
										   unset($_SESSION['error'][1]);
									   }
									   ?></td></tr>
                                      
                                       <tr><td>PASSWORD:</td><td><input name="password" type="password" /></td></tr>
                                       
                                            <tr><td></td><td>
                                           <?php if(isset($_SESSION['error'][2])&& $_SESSION['error'][2]!="")
									   {
										   echo $_SESSION['error'][2];
										   unset($_SESSION['error'][2]);
									   }
									   ?></td></tr>
                                      
                                       <tr><td>CONTACT NO. :</td><td><input name="contact" type="text" /></td></tr>
                                       
                                           <tr><td></td><td>
                                           <?php if(isset($_SESSION['error'][3])&& $_SESSION['error'][3]!="")
									   {
										   echo $_SESSION['error'][3];
										   unset($_SESSION['error'][3]);
									   }
									   ?></td></tr>
									 
                                       
                                       
                                       <tr><td>EMAIL ID :</td><td><input name="email" type="text" /></td></tr>
                                           <tr><td></td><td>
                                           <?php if(isset($_SESSION['error'][4])&& $_SESSION['error'][4]!="")
									   {
										   echo $_SESSION['error'][4];
										   unset($_SESSION['error'][4]);
									   }
									   ?></td></tr>
                                       
                                            
                                       <tr><td>SCHOLAR ID:</td><td><input name="scholarid" type="text" /></td></tr>
                                       
                                            <tr><td></td><td>
                                           <?php if(isset($_SESSION['error'][5])&& $_SESSION['error'][5]!="")
									   {
										   echo $_SESSION['error'][5];
										   unset($_SESSION['error'][5]);
									   }
									   ?></td></tr>
                                          
                                       <tr><td>COURSE</td><td>
                                                      <select input name="select" type="text">
                                                         <option>SELECT</option>
                                                         <option>BSC</option>
                                                         <option>BCOM</option>
                                                         <option>BA</option>
                                                         <option>BCA</option>
                                                         <option>BBA</option>
                                                     </select>
                                     </td></tr>
                                     
                                           <tr><td></td><td>
                                           <?php if(isset($_SESSION['error'][6])&& $_SESSION['error'][6]!="")
									   {
										   echo $_SESSION['error'][6];
										   unset($_SESSION['error'][6]);
									   }
									   ?></td></tr>
                                     <tr><td>DOB:</td><td><input name="dob" type="date" /></td></tr>
                                        
                                            <tr><td></td><td>
                                           <?php if(isset($_SESSION['error'][7])&& $_SESSION['error'][7]!="")
									   {
										   echo $_SESSION['error'][7];
										   unset($_SESSION['error'][7]);
									   }
                                                
                                                
									   ?></td></tr>
                                        
                                           <tr><td>IMAGE:</td><td><input type="file" name="uploadfile" value=""/></td></tr>
                                           
                                        <tr><td></td><td>
                                           <?php if(isset($_SESSION['error'][8])&& $_SESSION['error'][8]!="")
									   {
										   echo $_SESSION['error'][8];
										   unset($_SESSION['error'][8]);
									   }
                                            ?></td></tr>    
                                            
                                           
                                             
                                           <tr><td colspan="2"> <center> <input type="submit" value="SIGN IN"> </center> </td></tr>
                                         <tr><td></td><td>
                                           <?php if(isset($_SESSION['error'][9])&& $_SESSION['error'][9]!="")
									   {
										   echo $_SESSION['error'][9];
                                           
										   unset($_SESSION['error'][9]);
									   }
                                            ?></td></tr>   
                                     
                                      </form>
                             </table>
                      </div>
                    
</body>
</html>