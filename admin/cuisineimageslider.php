<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>slider</title>
     <link rel="stylesheet" href="css/cuisineimageslider2.css">
     <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" type="text/css"  />
</head>
<body>
    
</body>
</html> <div id="slider">
        <div id="box">
            <img src="upload/k-slide2.jpg" width="100%" height=380px>
           
        </div>
        <!-- Button for controls slide -->
        <button class ="prew" onclick="prewImage()"><i class="fa  fa-chevron-left "></i></button>
        <button class ="next" onclick="nextImage()"><i class="fa  fa-chevron-right "></i></button>
    </div>
  <script type="text/javascript">
    var slider_content = document.getElementById('box');
    
    //contain image in an array
 
    var image=['k-slide3','k-slide4','k-slide5'];
    
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
        
        slider_content.innerHTML="<img src=../admin/upload/"+image[i-1]+".jpg width=100% height=380px>";
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
        
        slider_content.innerHTML="<img src=../admin/upload/"+image[i-1]+".jpg width=100% height=380px>";
        }
        
        
    //script for auto image slider
        setInterval(nextImage,2000);
    </script>
      