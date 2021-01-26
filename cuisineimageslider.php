 <div id="slider">
        <div id="box">
            <img src="../Backup1/images/cuisineslider/cusinie1-slide.jpg" width="100%" height=400px>
           
        </div>
        <!-- Button for controls slide -->
        <button class ="prew" onclick="prewImage()"><i class="fa  fa-chevron-left "></i></button>
        <button class ="next" onclick="nextImage()"><i class="fa  fa-chevron-right "></i></button>
    </div>
  <script type="text/javascript">
    var slider_content = document.getElementById('box');
    
    //contain image in an array
 
    var image=['cusinie1-slide','cusinie2-slide','cusinie8-slide','cusinie4-slide','cusinie5-slide','cusinie9-slide'];
    
    var i=image.length;
        
    //function for slide

    function nextImage()
        {
            if(i<image.length)
                {
                    i=i+1;
                }
            else
            {
                i=1;
            }
        
        slider_content.innerHTML="<img src=../Backup1/images/cuisineslider/"+image[i-1]+".jpg width=100% height=400px>";
        }
        
//function for prew slide
    
 function prewImage()
         {
            if(i<image.length+1 && i>1)
                {
                    i=i-1;
                }
            else
            {
                i=image.length;
            }
        
        slider_content.innerHTML="<img src=../Backup1/images/"+image[i-1]+".jpg width=100% height=500px>";
        }
        
        
    //script for auto image slider
        setInterval(nextImage,2000);
    </script>
      