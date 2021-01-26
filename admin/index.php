<?php
session_start();
if(!isset($_SESSION['IS_LOGIN']))
{
    header("location:blank.php");
}
else
{
    

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
<?php } ?>