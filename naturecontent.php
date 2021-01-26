<?php
@session_start();
$_SESSION['category']="nature";
           

           $conn=mysqli_connect("localhost","root",""); /* used to connect php page with mysql*/

           mysqli_select_db($conn,"mag_registration");
       
           $user=$_SESSION["user_name"];

           $sql= "select * from post where category='nature'  and Status=0 ";


?>
           
<div id="first"> 
            <br> <br> 
            <h3></h3>
            <br><br>
            <img class="headline" src="../Backup1/images/Nature/nature1.jpg" height="320px" width="520px">
            <h2 class="heading2">Beauty of Nature</h2>
            <div class="travel">
            <p> Nature is not only a source of joy, it is also a source of joy, it is also a source of education.  The fruitful trees teach us to be humble; the mountains teach us to be firm; the flowers teach us to smile and blossom even when we are surrounded by the thorns of life.  Wordsworth rightly said:
            <p2 style="color:purple">“One impulse from the vernal wood May teach us more of man,Of moral evil and of good Than all the sages can.”</p2>
            Nature is a source of joy to us because it reveals the oneness of life.  Nature is a manifestation of God.  Nature is permeated with the same soul that dwells in man. </p>             
            </div>
       
        <div id="Watchlist">
        <h4>Top Viewed</h4>
        <div class="marquee">
                    <img src="../Backup1/images/Nature/nature16.jpg"  height="200px" width="370px">
                    <br>
                    <a href="#">LAHAUL & SPITI: A WINTER PARADISE ON &nbsp;&nbsp;EARTH</a>
                    <br><br><br><br>
                    <img src="../Backup1/images/Nature/nature17.jpg" width="370px">
                    <br>
                    <a href="#"> ATACAMA DESERT, CHILE</a>
                    <br><br><br><br>
                    <img src="../Backup1/images/Nature/n5.jpg" height="200px" width="370px">
                    <br>
                    <a href="#">BEST HILL STATION IN NORTH INDIA</a> 
                    <br><br><br><br>
                    <img src="../Backup1/images/Nature/nature18.jpg"  height="200px" width="370px">
                    <br>
                    <a href="#">BANFF NATIONAL PARK, CANADA</a>
                    <br><br><br><br>
                    <img src="../Backup1/images/Nature/nature19.jpg" width="370px">
                    <br>
                    <a href="#">DISKO BAY, GREENLAND</a>
                    <br><br><br><br>
                    <img src="../Backup1/images/Nature/nature20.jpg" height="200px" width="370px">
                    <br>
                    <a href="#">FAROE ISLANDS</a> 
                     <br><br><br><br>
                    <img src="../Backup1/images/Nature/nature21.jpg" height="200px" width="370px">
                    <br>
                    <a href="#">VICTORIA FALLS, ZAMBIA AND ZIMBABWE</a>  
                    <br><br><br><br>
                    <img src="../Backup1/images/Nature/nature22.jpg" height="200px" width="370px">
                    <br>
                    <a href="#">ZAKYNTHOS, GREECE</a> 
                     <br><br><br><br>
                    <img src="../Backup1/images/Nature/nature23.jpg" height="200px" width="370px">
                    <br>
                    <a href="#">TROLLTUNGA, NORWAY</a> 
        </div>
        </div>
        
        <div class="secondimg">  
            <h5></h5>       
            <br>
            <img  src="../Backup1/images/Nature/nature2.jpg" height="320px" width="520px">
            <h2 class="heading3">Keep clean and green to nature</h2>
            &nbsp;&nbsp;
            <img  src="../Backup1/images/Nature/nature4.jpg" height="320px" width="390px">
            <h2 class="heading7">Go green and save nature</h2>
        </div>
       
        <div class="secondimg">  
             <h5></h5>       
             <br>
             <img  src="../Backup1/images/Nature/n6.jpg" height="400px" width="520px" class="headline">
             <h2 class="heading4"><pre>National Parks in Malaysia :
You have to visit</pre></h2>&nbsp;&nbsp;
             <div class="travel">
                 <p>There are two sides of Malaysia: Peninsular Malaysia and East Malaysia (Borneo). Both are filled with an abundance of natural wonders and government-run national parks. Malaysian forests, with some estimated to be over 130 million years old, are teeming with incredibly diverse plant and animal life that is unique to its habitat. If you’re interested in a foray into a forest, underwater or atop mountains, National Parks are a good marker of particularly great places for outdoor experiences right bam in the middle of eco-rich nature. There are several well-known national parks in Malaysia, such as Batang Ai National Park, Niah National Park, and Lambir Hills National Park. </p>
            </div>
       </div>
        
      <div class="secondimg">  
             <h5></h5>       
             <br>
             <img  src="../Backup1/images/Nature/nature2.jpg" height="320px" width="520px" class="headline">
             <h2 class="heading5">Best Places to Visit in South India</h2>&nbsp;&nbsp;
             <div class="travel">
                <p>South of India is the country’s haven of natural beauty abundant with mystical hills, intricately carved temples and quaint backwaters. Here are some of my favourite places in South India which captures the real essence of life in the south. </p>
                 <p class="links"> <i class="fa fa-play"> <a href="#">Serene Beaches of Gokarna</a></i><br>
                 <i class="fa fa-play"> <a href="#"> Backwaters of God’s Own Country</a></i><br>
                 <i class="fa fa-play"> <a href="#">Stunning Temples of South India</a></i><br>
                 <i class="fa fa-play"> <a href="#">The French colony of India</a></i>
                 <i class="fa fa-play"> <a href="#"> Mystical Munnar, Kerala</a></i></p>
             </div>
      </div>    
          
      <div class="secondimg">  
            <h5></h5>       
            <br>
            <img  src="../Backup1/images/Nature/nature15.jpg" height="320px" width="520px">
           <!-- <h2 class="heading6">Change yourself not nature</h2>-->
            &nbsp;&nbsp;
            <img  src="../Backup1/images/Nature/nature9.jpg"height="320px" width="390px">
            <h2 class="heading7">Nature is the art of god</h2>
      </div>
       
      <div class="secondimg">  
            <h5></h5>       
            <br>
            <img  src="../Backup1/images/Nature/nature12.jpg" height="320px" width="520px" class="headline">
            <h2 class="heading5"><pre>Canamia national Park:
A gateway of adventure And thrill</pre></h2>&nbsp;&nbsp;
            <div class="travel">
               <p>The Canaima National Park with its breathtaking collection of rivers, woods, and abundant savannas is a popular tourist attraction in South America. The cascading Angel Waterfalls which are the highest in the world are located here. The national park has a wide variety of fauna and flora living in the lush green rainforests and tepuis here. It is also home to the Pemon tribe which is pretty welcoming and warm and also act as guides helping with the Canaima National Park tours. The park is full of adventure and fun, making it a traveler’s paradise.</p>
           </div>
      </div> 
        
     <div class="secondimg">  
            <h5></h5>       
            <br>
            <img  src="../Backup1/images/Nature/nature11.jpg" height="320px" width="520px">
            <h2 class="heading6">Change yourself not nature</h2>
            &nbsp;&nbsp;
            <img  src="../Backup1/images/Nature/n4.jpg"height="320px" width="390px">
            <h2 class="heading7">Nature is the art of god</h2>
     </div>
    
     <div id="clear"></div> 
          
        <div class="secondimg">
           <?php    
           $data = mysqli_query($conn,$sql);
           if(mysqli_num_rows($data)>0)
                 {
                   while($result = mysqli_fetch_assoc($data))
                         {
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
    