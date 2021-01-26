<?php
@session_start();
$_SESSION['category']="technology";
           

           $conn=mysqli_connect("localhost","root",""); /* used to connect php page with mysql*/

           mysqli_select_db($conn,"mag_registration");
       
           $user=$_SESSION["user_name"];

           $sql= "select * from post where category='technology'  and Status=0 ";


?>
 <div id="first"> 
            <br> <br> 
            <h3></h3>
            <br><br>
            <img class="headline" src="../Backup1/images/Technology/Con1.jpg" height="360px" width="520px">
            <h2 class="heading2">Hyperautomation</h2>
            <div class="travel">
            
            <p>Hyperautomation is the combination of multiple machine learning (ML), packaged software and automation tools to deliver work. Hyperautomation refers not only to the breadth of the pallet of tools, but also to all the steps of automation itself (discover, analyze, design, automate, measure, monitor and reassess). Understanding the range of automation mechanisms, how they relate to one another and how they can be combined and coordinated is a major focus for hyperautomation.<br><br>This trend was kicked off with robotic process automation (RPA).  </p>
            
            
       </div>
       
                
      <div id="Watchlist">
                    
        <h4>Top Viewed</h4>
      <div class="marquee">
                    <img src="../Backup1/images/Technology/Con1.jpg"  height="200px" width="370px">
                    <br>
                    <a href="#">HYPERAUTOMATION</a>
                    <br><br><br><br>
                    <img src="../Backup1/images/Technology/Con2.jpg" width="370px">
                    <br>
                    <a href="#">INTERNET OF THINGS (IOT)</a>
                    <br><br><br><br>
                    <img src="../Backup1/images/Technology/Con3.jpeg" height="200px" width="370px">
                    <br>
                    <a href="#"> CLOUD COMPUTING</a> 
                    <br><br><br><br>
                    <img src="../Backup1/images/Technology/Con4.jpg"  height="200px" width="370px">
                    <br>
                    <a href="#">BIG DATA</a>
                    <br><br><br><br>
                    <img src="../Backup1/images/Technology/Con5.jpg" width="370px">
                    <br>
                    <a href="#"> AI SECURITY</a>
                    <br><br><br><br>
                    <img src="../Backup1/images/Technology/Con6.jpg" height="200px" width="370px">
                    <br>
                    <a href="#"> BLOCKCHAIN</a> 
                     <img src="../Backup1/images/Technology/Con7.jpg" width="370px">
                    <br>
                    <a href="#">AUTONOMOUS THINGS</a>
                    <br><br><br><br>
                     <img src="../Backup1/images/Technology/Con8.jpg" width="370px">
                    <br>
                    <a href="#">HUMAN AUGMENTATION</a>
                    <br><br><br><br>
                     <img src="../Backup1/images/Technology/Con9.jpg" width="370px">
                    <br>
                    <a href="#">RPA(ROBOTICS PROCESS AUTOMATION)</a>
                    <br><br><br><br>
                     <img src="../Backup1/images/Technology/Con10.png" width="370px">
                    <br>
                    <a href="#">I-APPS</a>
                    <br><br><br><br>
        </div>
        </div>
             
                
         
    <div class="secondimg">  
            <h5></h5>       
            <br>
            <img  src="../Backup1/images/Technology/Con2.jpg" height="320px" width="520px">
             <h2 class="heading3">Internet of Things (IoT)</h2>
            &nbsp;&nbsp;
            <img  src="../Backup1/images/Technology/Con3.jpeg" height="320px" width="390px">
            <h2 class="heading7">Cloud computing</h2>
     </div>
       
        <div class="secondimg">  
             <h5></h5>       
            <br>
            <img  src="../Backup1/images/Technology/Con4.jpg" height="320px" width="520px" class="headline">
            
            <h2 class="heading4">Big Data</h2>&nbsp;&nbsp;
            
            <div class="travel">
                
                <p>Big data refers to problems that are associated with processing and storing different types of data. Most of the companies today, rely on big data analytics to gain huge insight about their:<br><br></p><ul><li>customer</li><li>product research,</li><li>marketing initiatives and many more.</li></ul><br>
                <p>Hadoop and Spark are the two most famous frameworks for solving Big Data problems.</p>
                
           </div>
     
        </div>
        
      <div class="secondimg">  
             <h5></h5>       
             <br>
             <img  src="../Backup1/images/Technology/Con5.jpg" height="370px" width="520px" class="headline">
              <h2 class="heading5">AI Security</h2>&nbsp;&nbsp;
             
             <div class="travel">
                
                <p>AI and ML will continue to be applied to augment human decision making across a broad set of use cases. While this creates great opportunities to enable hyperautomation and leverage autonomous things to deliver business transformation, it creates significant new challenges for the security team and risk leaders with a massive increase in potential points of attack with IoT, cloud computing, microservices and highly connected systems in smart spaces. Security and risk leaders should focus on three key areas — protecting AI-powered systems, leveraging AI to enhance security defense, and anticipating nefarious use of AI by attackers.  </p>
                
             </div>
     </div>    
          
      <div class="secondimg">  
            <h5></h5>       
            <br>
            <img  src="../Backup1/images/Technology/Con6.jpg" height="320px" width="520px">
            <h2 class="heading6">BlockChain</h2>
            &nbsp;&nbsp;
            <img  src="../Backup1/images/Technology/Con7.jpg"height="320px" width="390px">
            <h2 class="heading7">Autonomous things</h2>
            
      </div>
         <div class="secondimg">  
             <h5></h5>       
             <br>
             <img  src="../Backup1/images/Technology/Con8.jpg" height="370px" width="520px" class="headline">
              <h2 class="heading5">Human Augmentation</h2>&nbsp;&nbsp;
             
             <div class="travel">
                
                <p>Human augmentation explores how technology can be used to deliver cognitive and physical improvements as an integral part of the human experience. Physical augmentation enhances humans by changing their inherent physical capabilities by implanting or hosting a technology element on their bodies, such as a wearable device. Cognitive augmentation can occur through accessing information and exploiting applications on traditional computer systems and the emerging multiexperience interface in smart spaces.</p>
                
             </div>
     </div> 
        <div class="secondimg">  
            <h5></h5>       
            <br>
            <img  src="../Backup1/images/Technology/Con9.jpg" height="320px" width="520px">
            <h2 class="heading6">RPA(Robotic Process Automation)</h2>
            &nbsp;&nbsp;
            <img  src="../Backup1/images/Technology/Con10.png"height="320px" width="390px">
            <h2 class="heading7">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;I-Apps</h2>
            
      </div>
        
         
        
          <div id="clear"></div>  
         
           <div class="secondimg">
           
              <?php    
              
               $data = mysqli_query($conn,$sql);
           
               if(mysqli_num_rows($data)>0)
                 {
        
                  while($result = mysqli_fetch_assoc($data))
          
                    {
               
                        //echo $result["IMAGE"];
                        ?>
             
                <br>
                   <div class="travel4">
        
                   <?php echo  $result["CONTENT"]; ?><br><br>
               
                   </div>
                <?php
     
                   }
            
                }
         
            ?>
           
           </div>  
          
          
         
    <div id="clear"></div>    
             
</div>
 
<!------------------------------------------------------------------Script for continuous marquee----------------------------------------------------> 

<script>
  $(document).ready(function(){
  $('.marquee').marquee({
  //pause time before the next animation turn in milliseconds
  delayBeforeStart: 0,
  //'left', 'right', 'up' or 'down'
  direction: 'up',
  //true or false - should the marquee be duplicated to show an effect of continues flow
  duplicated: true,
  //speed in milliseconds of the marquee in milliseconds
  duration: 10000,
  //gap in pixels between the tickers
  gap: 10,
  //on cycle pause the marquee
  pauseOnCycle: true,
  //on hover pause the marquee - using jQuery plugin https://github.com/tobia/Pause
  pauseOnHover: true,
   });
});
</script>
 
 
