<?php
session_start();
if(isset( $_SESSION["user_name"]))
{
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CollegeProject</title>
    <!---------------------------------------------to apply josfin font----------------------------------------------------------------->
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet"/>
    <!--------------------------------------------link of slice.php--------------------------------------------------------------------->
    <link rel="stylesheet" href="css/slice5.css"/>
    <!--------------------------------------------link to apply animation--------------------------------------------------------------->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css"/>
    <!--------------------------------------------link to apply icon-------------------------------------------------------------------->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" type="text/css"/>
    <!--------------------------------------------link of natureimageslider.php--------------------------------------------------------->
    <link rel="stylesheet" href="css/natureimageslider2.css"/>
    <!--------------------------------------------link of nature.php-------------------------------------------------------------------->
    <link rel="stylesheet" href="css/nature.css"/>
    <!--------------------------------------------link of post.php---------------------------------------------------------------------->
    <link rel="stylesheet" href="css/post2.css"/>
    <!--------------------------------------------link of footer.php-------------------------------------------------------------------->
    <link rel="stylesheet" href="css/footer.css"/>
    <!--------------------------------------------link to apply jquery------------------------------------------------------------------>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <!--------------------------------------------link to apply continuous marquee------------------------------------------------------>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jQuery.Marquee/1.3.94/jquery.marquee.js"></script>
    <script src="jquery.easing.min.js"></script>
    <style>
    </style>
</head>
<body class="animated slideInRight">
     <?php if(isset($_SESSION['element'])&& $_SESSION['element']!="")
			   {
		        ?>
                 <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
                 <?php echo"<script>swal('Good job!', 'Your content has been successfully uploaded....please wait for a while', 'success');</script>";
                 unset ($_SESSION['element']);
               }     
  ?>
    <?php 
    include("slice2.php");
    include("natureimageslider.php");
    include("naturecontent.php");
    ?>
    <br><br>
    <?php
    include("post.php");
    include("footer.php");
    ?>
</body>
</html>
<?php
}
else
{
  header("location:index.php");
}
?>