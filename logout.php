<?php
session_start();
unset($_SESSION["user_name"]);
unset( $_SESSION["pass"]);
unset($_SESSION['category']);
unset($_SESSION["show"]);
session_destroy();
header("location:index.php");
?>
