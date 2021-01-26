<?php
session_start();
if(isset( $_SESSION["user_name"]))
{
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>collegeproject</title>
     <!------------------------------------------ to apple Joesfin font family ------------------------------------------------------->
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">
    <!--------------------------------------------link for slice.php------------------------------------------------------------------>
    <link rel="stylesheet" href="css/slice5.css">
    <!---------------------------------------------to apply animation----------------------------------------------------------------->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
    <!---------------------------------------------to apply icon---------------------------------------------------------------------->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" type="text/css"  />
    <!------------------------------------------- link of imageslider.php------------------------------------------------------------>
     <link rel="stylesheet" href="css/natureimageslider2.css"/>
    <!--------------------------------------------link of home.php------------------------------------------------------------------->
    <link rel="stylesheet" href="css/Home1.css" />
    <!---------------------------------------------link of footer.php---------------------------------------------------------------->
    <link rel="stylesheet" href="css/footer.css" />
    <!----------------------------------------------link of Jquery folder------------------------------------------------------------>
    <script src="jquery-3.4.1.min.js"></script>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <!--------------------------------------------link to apply continuous marquee------------------------------------------------------>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jQuery.Marquee/1.3.94/jquery.marquee.js"></script>
    <script src="jquery.easing.min.js"></script>
    
    
</head>

<body class="animated slideInRight">
      
   <button1 id="top"><i class="fa  fa-chevron-up"></i></button1>
    

    <?php 
    include("slice2.php");
    include("imageslider2.php");
    
    
    include("homecontent.php");
    include("footer.php");
    ?>
     <script type="text/javascript">
       $(window).scroll(function()
        {
            if($(window).scrollTop()>200)
               {
                 $("button1").show();
               }
            else
               {
                  $("button1").hide();
               }
       });
       
       $("button1").click(function()
                   {
                         $("html").animate({scrollTop:0},2000);
                   });
    
    </script>  
    
</body>
</html>
<?php
}
else
{
    header("location:index.php");
}