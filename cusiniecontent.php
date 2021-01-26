<?php
@session_start();
$_SESSION['category']="cusinie";
           

           $conn=mysqli_connect("localhost","root",""); /* used to connect php page with mysql*/

           mysqli_select_db($conn,"mag_registration");
       
           $user=$_SESSION["user_name"];

           $sql= "select * from post where category='cusinie' and Status=0";


?>




 <div id="first"> 
            <br> <br> 
            <h3></h3>
            <br><br>
            <img class="headline" src="../Backup1/images/Cuisine/fried_salmon-wallpaper-2880x1620.jpg" height="440px" width="520px">
         <h2 class="heading2">Fire Up The Grill!</h2>
       <div class="travel">
            
           <p>There are many things in general you can try, from salads to hot dishes, from sweets to soups. But if you want something traditional, cheap and fast – it`s definitely souvlaki. The iconic dish of Greece is a fast food that you usually can find anywhere on the streets, in the bars, in small take-out shops and cafes. You will see souvlaki over the whole country. And if you are lucky enough to be invited to a house party of Greek people – ask for mousaka. It is the best when it`s homemade.<br><br>A little glossary for a newbie:</p>
            <p class="links"> <i class="fa fa-play"> <a href="#">Greak salad </a></i><br>
                 <i class="fa fa-play"> <a href="#">Souvlaki – “Little skewers” in Greek: </a></i><br>
                 <i class="fa fa-play"> <a href="#">Mousaka –potato-based dish.</a></i><br>
                 <i class="fa fa-play"> <a href="#">Must-Drink in Greece: ouzo, tsipouro</a></i></p>
                 
       </div>
       
                
      <div id="Watchlist">
                    
        <h4>Top Viewed</h4>
       <div class="marquee">
                    <img src="../Backup1/images/Cuisine/c2.jpg"  height="200px" width="370px">
                    <br>
                    <a href="#">DELICIOUS CANDY</a>
                    <br><br><br><br>
                    <img src="../Backup1/images/Cuisine/walnut_cake-wallpaper-2560x1440.jpg" width="370px">
                    <br>
                    <a href="#">CHOCOLATE, A LITTLE TASTE OF HEAVEN</a>
                    <br><br><br><br>
                    <img src="../Backup1/images/Cuisine/delicious_sushi-wallpaper-3840x2160.jpg" height="200px" width="370px">
                    <br>
                    <a href="#">SIMPLY DELICIOUS</a> 
                    <br><br><br><br>
                    <img src="../Backup1/images/Cuisine/small_pizza-wallpaper-5120x2880.jpg"  height="200px" width="370px">
                    <br>
                    <a href="#">PIZZA: ITALY</a>
                    <br><br><br><br>
                    <img src="../Backup1/images/Cuisine/happy_thanksgiving_2015-wallpaper-5120x2880.jpg" width="370px">
                    <br>
                    <a href="#">LAND OF SWEETS GALORE!</a>
                    <br><br><br><br>
                    <img src="../Backup1/images/Cuisine/tropical_cocktail-wallpaper-1920x1080.jpg" height="200px" width="370px">
                    <br>
                    <a href="#"> SWEET SUMMER TREATS!!</a>
                     <br><br><br><br>
                      <img src="../Backup1/images/Cuisine/small_pizza-wallpaper-5120x2880.jpg"  height="200px" width="370px">
                    <br>
                    <a href="#">PIZZA: ITALY</a>
                    <br><br><br><br>
                    <img src="../Backup1/images/Cuisine/happy_thanksgiving_2015-wallpaper-5120x2880.jpg" width="370px">
                    <br>
                    <a href="#">LAND OF SWEETS GALORE!</a>
                    <br><br><br><br>
                    <img src="../Backup1/images/Cuisine/tropical_cocktail-wallpaper-1920x1080.jpg" height="200px" width="370px">
                    <br>
                    <a href="#"> SWEET SUMMER TREATS!!</a>
                     <br><br><br><br>
                      <img src="../Backup1/images/Cuisine/walnut_cake-wallpaper-2560x1440.jpg" width="370px">
                    <br>
                    <a href="#">CHOCOLATE, A LITTLE TASTE OF HEAVEN</a>
                     
                   
          </div>
     
     </div>
             
                
         
    <div class="secondimg">  
            <h5></h5>       
            <br>
            <img  src="../Backup1/images/Cuisine/strawberry_ice_cream_dessert-wallpaper-3840x2160.jpg" height="320px" width="520px">
             <h2 class="heading3">Sweet Summer Treats!</h2>
            &nbsp;&nbsp;
            <img  src="../Backup1/images/Cuisine/tropical_cocktail-wallpaper-1920x1080.jpg" height="320px" width="390px">
            <h2 class="heading7">A Sweet Taste of Summer</h2>
     </div>
       
        <div class="secondimg">  
             <h5></h5>       
            <br>
            <img  src="../Backup1/images/Cuisine/pizza.jfif" height="360px" width="520px" class="headline">
            
            <h2 class="heading4">Best Italian Food</h2>&nbsp;&nbsp;
            
            <div class="travel">
                
                <p>It’s hard to speak about Italian food, it’s better to enjoy it. The traditional colors of Italian cuisine – red, green and yellow always create a great mixture of flavor and taste. Usually all the dishes are based on tomato, bread and olive oil. The secret of the cuisine is not in a sophisticated preparation process, it is more in the freshness of the products.<br><br>A little glossary for a newbie: </p>
                 <p class="links"> <i class="fa fa-play"> <a href="#">Pizza </a></i><br>
                 <i class="fa fa-play"> <a href="#">Pasta </a></i><br>
                 <i class="fa fa-play"> <a href="#">Caprese </a></i><br>
                 <i class="fa fa-play"> <a href="#">Panna cotta</a></i></p>
   
           </div>
     
        </div>
        
      <div class="secondimg">  
             <h5></h5>       
             <br>
             <img  src="../Backup1/images/Cuisine/maxico.jfif" height="320px" width="520px" class="headline">
              <h2 class="heading5">Maxico!!!!<br>Here you will get a real taste....</h2>&nbsp;&nbsp;
             
             <div class="travel">
                
                <p>Warm, sunny, blue sea and liters of tequila – this is the ideal picture of Mexico. Actually, this is not only positive, but also true and realistic. Add to this corn, beans, tomato and chilli peppers, and you would get the real taste of the country.<br><br>A little glossary for a newbie: </p>
                <p class="links"> <i class="fa fa-play"> <a href="#">Chili con carne</a></i><br>
                 <i class="fa fa-play"> <a href="#">Tacos</a></i><br>
                 <i class="fa fa-play"> <a href="#">Quessadilla </a></i><br>
                 <i class="fa fa-play"> <a href="#">Guacamole </a></i></p>
             </div>
     </div>    
          
      <div class="secondimg">  
            <h5></h5>       
            <br>
            <img  src="../Backup1/images/Cuisine/grece.jfif" height="320px" width="520px">
            <h2 class="heading6">Explore the Grece...<br>Through its food culture</h2>
            &nbsp;&nbsp;
            <img  src="../Backup1/images/Cuisine/thailand.jfif"height="320px" width="390px">
            <h2 class="heading7">Thai Street Food</h2>
            
      </div>
         <div class="secondimg">  
             <h5></h5>       
             <br>
             <img  src="../Backup1/images/Cuisine/indian.jfif" height="320px" width="520px" class="headline">
              <h2 class="heading5">Taste of India....</h2>&nbsp;&nbsp;
             
             <div class="travel">
                
                <p>As we remember, the cow is a sacred animal here and the majority of Indians are vegetarians. Traditional Indian food uses many different spices and is slathered with  flavourful sauce. They are also big fans of Indian homemade white cheese, called Panir. Every dish is traditionally accompanied by naan bread. Of course, rice is one of the basic products of Indian cuisine as well.
                Concerning alcohol – you would not find it anywhere in India, almost nowhere. Only Goa is famous for parties and drinks, because there is no alcohol tax here, unlike all other states of India. </p>
                
             </div>
     </div>    
          
        <div class="secondimg">  
            <h5></h5>       
            <br>
            <img  src="../Backup1/images/Cuisine/south.jfif" height="320px" width="520px">
            <h2 class="heading6">South indian food :<br>Awesome,Awe-inspiring variety</h2>
            &nbsp;&nbsp;
            <img  src="../Backup1/images/Cuisine/watermelon.jfif"height="320px" width="390px">
            <h2 class="heading8">A Watermelon Eating,<br> Seed Spitting, Juicy <br>Good Time!</h2>
            
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
 