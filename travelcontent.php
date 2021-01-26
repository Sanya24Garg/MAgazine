<?php
@session_start();
$_SESSION['category']="travel";
           

           $conn=mysqli_connect("localhost","root",""); /* used to connect php page with mysql*/

           mysqli_select_db($conn,"mag_registration");
       
           $user=$_SESSION["user_name"];

           $sql= "select * from post where category='travel'  and Status=0 ";


?>
           <div id="first"> 
            <br> <br> 
            <h3></h3>
            <br><br>
            <img class="headline" src="../Backup1/images/travel/travel1.jpeg" height="490px" width="520px">
               <h2 class="heading2"><pre>New York City, Usa  
The City that Never Sleeps</pre></h2>
            <div class="travel">
                <p>An iconic global centre of the world that has inspired the world with its brilliant architecture, movies, and art. Also known as the Big Apple, New York is well-known for its magnificent skyscrapers, Broadway shows and beautiful landmarks, making it the perfect destination for travellers from all over the world.<br>From the flashy neon lights and the hustle and bustle of Times Square to the skyscrapers of Wall Street and the verdant ways of Central Park, New York City never ceases to amaze with its energy and vibrancy.<br><br>Places to Visit In New York City:-</p>
                 <p class="links"> <i class="fa fa-play"> <a href="#">Statue of liberty</a></i><br>
                 <i class="fa fa-play"> <a href="#">Times Square</a></i><br>
                 <i class="fa fa-play"> <a href="#">Brooklyn Bridge</a></i><br>
                 <i class="fa fa-play"> <a href="#">Empire State Building</a></i></p>
                 
       </div>
       
                
      <div id="Watchlist">
                    
        <h4>Top Viewed</h4>
         <div class="marquee">
                    <img src="../Backup1/images/travel/travel12.jpg"  height="200px" width="370px">
                     <br>
                    <a href="#">COSTA RICA :- Abundance of Natural Beauty</a>
                    <br><br><br><br>
                    <img src="../Backup1/images/travel/travel13.jpg" width="370px">
                    <br>
                    <a href="#">BANGKOK, Thailand</a>
                    <br><br><br><br>
                    <img src="../Backup1/images/travel/travel14.jpg" height="200px" width="370px">
                    <br>
                    <a href="#">AMALFI, Italy</a> 
                    <br><br><br><br>
                    <img src="../Backup1/images/travel/travel15.jpg"  height="200px" width="370px">
                    <br>
                    <a href="#">LONDON, England</a>
                    <br><br><br><br>
                    <img src="../Backup1/images/travel/travel16.jpg" width="370px">
                    <br>
                    <a href="#">LEH LADAKH - India's Own Moonland</a>
                    <br><br><br><br>
                    <img src="../Backup1/images/travel/travel17.jpg" height="200px" width="370px">
                    <br>
                    <a href="#">COORG, Karnataka - The Scotland of India</a> 
                    <br><br><br><br>
                    <img src="../Backup1/images/travel/travel18.jpg"  height="200px" width="370px">
                    <br>
                    <a href="#">SHIMLA -The Hill-Station with Rich Colonial &nbsp;&nbsp;History</a>
                    <br><br><br><br>
                    <img src="../Backup1/images/travel/travel19.jpg"  height="200px" width="370px">
                    <br>
                    <a href="#">MUMBAI, Maharashtra - The City of Dreams</a>
                    <br><br><br><br>
                    <img src="../Backup1/images/travel/travel20.jpg"  height="200px" width="370px">
                    <br>
                    <a href="#">SRINAGAR - The Paradise on Earth</a>
                    <br><br><br><br>
                    <img src="../Backup1/images/travel/travel21.jpg"  height="200px" width="370px">
                    <br>
                    <a href="#">SHILONG, Meghalaya - Scotland of the East</a>
          </div>
          </div>
             
                
         
    <div class="secondimg">  
            <h5></h5>       
            <br>
            <img  src="../Backup1/images/travel/travel2.jpg" height="320px" width="520px">
        <h2 class="heading3">Amsterdam Tourism</h2>
            &nbsp;&nbsp;
            <img  src="../Backup1/images/travel/travel3.jpg" height="320px" width="400px">
            <h2 class="heading7"><pre>Maldives - 
A Tropical Haven</pre></h2>
     </div>
       
        <div class="secondimg">  
             <h5></h5>       
            <br>
            <img  src="../Backup1/images/travel/tr4.jpg" height="430px" width="520px" class="headline">
            
            <h2 class="heading4">Paris, The City Of lights</h2>&nbsp;&nbsp;
            
            <div class="travel">
                
                <p>Paris needs no formal introduction - synonymous with culture, architecture, food and fashion. That je ne sais quoi of the French capital makes it the dream destination for many. So would you want to leave Paris 'Before Sunset' or would you take our word and spend a 'Midnight in Paris'?!One of the greatest art repositories in the world, harbouring artistic pedigree in the likes of Renoir, Rodin, Picasso, Monet and Van Gogh.<br><br>Places to Visit In New York City:-</p>
                 <p class="links"> <i class="fa fa-play"> <a href="#">Eiffel Tower</a></i><br>
                 <i class="fa fa-play"> <a href="#">Notre Dame</a></i><br>
                 <i class="fa fa-play"> <a href="#">Palais Garnier</a></i><br>
                 <i class="fa fa-play"> <a href="#">Moulin Rough,Paris</a></i></p>
                
           </div>
     
        </div>
        
      <div class="secondimg">  
             <h5></h5>       
             <br>
             <img  src="../Backup1/images/travel/travel5.jpg" height="310px" width="520px" class="headline">
          <h2 class="heading5"><pre>Darjeeling -
Queen of The Himalayas</pre></h2>&nbsp;&nbsp;
             
             <div class="travel">
                
                <p>Jaw-dropping locales, mesmerising sunrises, the untouched beauty of the hills, the old-world charm of the past, and the welcoming smiles of the local people all add up to make Darjeeling one of the most beautiful hill stations in Eastern part of India. Spread over a steep mountain ridge, nestled amidst acres of lush green tea plantations, Darjeeling stands at the height of 2,050 meters above sea level, thus boasting of cool climes all year round.<br>Darjeeling is a popular tourist destination in North-East India.</p>
                
             </div>
     </div>    
          
      <div class="secondimg">  
            <h5></h5>       
            <br>
            <img  src="../Backup1/images/travel/travel6.jpg" height="320px" width="520px">
            <h2 class="heading6">Dalhousie,<br>Little Switzerland of India</h2>
            &nbsp;&nbsp;
            <img  src="../Backup1/images/travel/travel8.jpg"height="320px" width="420px">
            <h2 class="heading7">Udaipur, Rajsthan<br>The city of Lakes</h2>
            
      </div>
        
    <div class="secondimg">  
             <h5></h5>       
             <br>
             <img  src="../Backup1/images/travel/travel9.jpg" height="320px" width="520px" class="headline">
              <h2 class="heading5">Jaipur,Rajsthan<br>    The Pink City</h2>&nbsp;&nbsp;
             
             <div class="travel">
                
                 <p>Jaipur is a vibrant amalgamation of the old and the new. Also called the Pink City, The capital of the royal state of Rajasthan, Jaipur has been ruled by Rajput kingdoms for many centuries and developed as a planned city in the 17th century AD. Along with Delhi and Agra, Jaipur forms the Golden Triangle, one of the most famous tourist circuits of the country.<br>With the old city surrounded by walls and gates decorated with drawings on the backdrop of a beautiful pink hue<br>Jaipur, the pink city successfully manages to retain its old world charm.</p>
             </div>
     </div>    
        
        <div class="secondimg">  
            <h5></h5>       
            <br>
            <img  src="../Backup1/images/travel/travel10.jpg" height="320px" width="520px">
            <h2 class="heading6">Amritsar, Punjab</h2>
            &nbsp;&nbsp;
            <img  src="../Backup1/images/travel/travel11.jpg"height="320px" width="390px">
            <h2 class="heading7">Nainital-<br>Misty lakes and mountains</h2>
            
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