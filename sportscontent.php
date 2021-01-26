<?php
@session_start();
$_SESSION['category']="sports";
           

           $conn=mysqli_connect("localhost","root",""); /* used to connect php page with mysql*/

           mysqli_select_db($conn,"mag_registration");
       
           $user=$_SESSION["user_name"];

           $sql= "select * from post where category='sports'  and Status=0 ";


?>
<div id="first"> 
            <br> <br> 
            <h3></h3>
            <br><br>
            <img class="headline" src="../Backup1/images/Sports/SP2.jpg" height="360px" width="520px">
         <h2 class="heading2">Golf</h2>
       <div class="travel">
            
            <p>Golf has an estimated global following of 450 Million people, and its primary influence is in Western Europe, East Asia, and North America. Golf is played by use of different clubs to hit a ball, over a determined course, using the fewest possible amount of strokes. The modern sport was first played in Scotland from where it spread to the UK and to the rest of the world.</p>
            
            <p class="links"> <i class="fa fa-play"> <a href="#">History of Golf</a></i><br>
                 <i class="fa fa-play"> <a href="#">Variations of Golf</a></i><br>
                 <i class="fa fa-play"> <a href="#">Golf in india</a></i><br>
                 <i class="fa fa-play"> <a href="#">Rules of Golf</a></i></p>
                 
       </div>
       
                
      <div id="Watchlist">
                    
        <h4>Top Viewed</h4>
       <div class="marquee">
                    <img src="../Backup1/images/Sports/SP1.jpg"  height="200px" width="370px">
                     <br>
                    <a href="#"> GOLF</a>
                    <br><br><br><br>
                    <img src="../Backup1/images/Sports/SP2.jpg" width="370px">
                    <br>
                    <a href="#"> GOLF</a>
                    <br><br><br><br>
                    <img src="../Backup1/images/Sports/SP3.jpg" height="200px" width="370px">
                    <br>
                    <a href="#"> RUGBY</a> 
                    <br><br><br><br>
                    <img src="../Backup1/images/Sports/SP4.jpg"  height="200px" width="370px">
                    <br>
                    <a href="#"> BASEBALL</a>
                    <br><br><br><br>
                    <img src="../Backup1/images/Sports/SP5.jpg" width="370px">
                    <br>
                    <a href="#"> BASKETBALL</a>
                    <br><br><br><br>
                    <img src="../Backup1/images/Sports/SP6.jfif" height="200px" width="370px">
                    <br>
                    <a href="#"> HOCKEY</a> 
                     <br><br><br><br>
                    <img src="../Backup1/images/Sports/SP7.jpg" height="200px" width="370px">
                    <br>
                    <a href="#"> VOLLEYBALL</a> 
                     <br><br><br><br>
                    <img src="../Backup1/images/Sports/SP8.jpg" height="200px" width="370px">
                    <br>
                    <a href="#"> TENNIS</a> 
                     <br><br><br><br>
                    <img src="../Backup1/images/Sports/sport3.jpg" height="200px" width="370px">
                    <br>
                    <a href="#"> FOOTBALL</a>
                     <br><br><br><br>
                    <img src="../Backup1/images/Sports/sports4.jpg" height="200px" width="370px">
                    <br>
                    <a href="#"> BASKETBALL</a>  
        </div>
     
     </div>
             
                
         
    <div class="secondimg">  
            <h5></h5>       
            <br>
            <img  src="../Backup1/images/Sports/SP3.jpg" height="320px" width="520px">
             <h2 class="heading3">Rugby</h2>
            &nbsp;&nbsp;
            <img  src="../Backup1/images/Sports/SP4.jpg" height="320px" width="390px">
            <h2 class="heading7">Baseball</h2>
     </div>
       
        <div class="secondimg">  
             <h5></h5>       
            <br>
            <img  src="../Backup1/images/Sports/SP5.jpg" height="320px" width="520px" class="headline">
            
            <h2 class="heading4">Basketball</h2>&nbsp;&nbsp;
            
            <div class="travel">
                
                <p>Basketball boasts of having an estimated 825 million followers worldwide, and a global sphere of influence. The sport was invented by Dr. James Naismith in 1891 in Massachusetts, United States. He created it as an alternative to football since the sport could be played indoors and had less potential to cause accidents. The sport is played by two teams of five players each, where the goal is to successfully shoot the ball through a hoop elevated 10 feet from the ground.</p>
                
           </div>
     
        </div>
        
      <div class="secondimg">  
             <h5></h5>       
             <br>
             <img  src="../Backup1/images/Sports/Sports1.jpg" height="320px" width="520px" class="headline">
              <h2 class="heading5">Table Tennis</h2>&nbsp;&nbsp;
             
             <div class="travel">
                
                <p>Table Tennis enjoys a global sphere of influence and has an estimated 875 million followers worldwide. The sport began in the 19th Century in England as a miniature version of the sports lawn tennis. The sport became widely referred to as "Ping Pong". The modern sport involves two teams of between two to four players, hitting a lightweight ball over a net on a hard table, by use of rackets. Formidable global countries in the sport include South Korea, Sweden, and China.</p>
                
             </div>
     </div>    
          
      <div class="secondimg">  
            <h5></h5>       
            <br>
            <img  src="../Backup1/images/Sports/sports5.jpg" height="320px" width="520px">
            <h2 class="heading6">Football (Soccer)</h2>
            &nbsp;&nbsp;
            <img  src="../Backup1/images/sports/SP6.jfif"height="320px" width="390px">
            <h2 class="heading7">&nbsp;&nbsp; Hockey</h2>
            
      </div>
        
        
        
          <div class="secondimg">  
             <h5></h5>       
             <br>
             <img  src="../Backup1/images/Sports/Sports10.jpg" height="320px" width="520px" class="headline">
              <h2 class="heading5">Cricket</h2>&nbsp;&nbsp;
             
             <div class="travel">
                
                <p>Cricket has a 2.5 billion person estimated global following, and its primary sphere of influence is in the United Kingdom and Commonwealth countries. The cradle of the sport was the 16th Century England and it was made a national sport in the 18th Century in the country. The sport is characterized by two teams of eleven players each, where each team attempts to score the most runs. The sport is overwhelmingly popular in former British colonies such as India, Sri Lanka, Bangladesh, Pakistan, and Australia.</p>
                
             </div>
     </div>    
     <div class="secondimg">  
            <h5></h5>       
            <br>
            <img  src="../Backup1/images/sports/SP7.jpg" height="320px" width="520px">
            <h2 class="heading6"> Volleyball </h2>
            &nbsp;&nbsp;
            <img  src="../Backup1/images/sports/SP8.jpg"height="320px" width="390px">
            <h2 class="heading7">Tennis</h2>
            
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
 