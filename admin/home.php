<?php
session_start();
if(!isset($_SESSION['IS_LOGIN']))
{
    header("location:login.php");
}
include('panel.php');
?>
                    <div class="header">Welcome! Have a nice day</div>
                    <?php include("cuisineimageslider.php");?>
                       
<?php
include_once 'source/clock/index.html';
include('panel_footer.php');
?>