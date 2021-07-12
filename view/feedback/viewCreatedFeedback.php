<?php
 if(!isset($_SESSION)) 
    { 
        session_start(); 
    }if(!isset($_SESSION['cin'])){
header('Location: index.php?controller=client&action=connect');}

?>
<div class="az">
    <?php
include_once ("{$ROOT}{$DS}view{$DS}usernavbar.php"); 

?>
    <div class="ar">
        <?php
$fb_id=$u->getFb_id(); 
echo "<p>Your feedback has been added</p>" ;
echo "<p>Thank you! We appreciate your feedback, we will take it into consideration</p>" ;
echo"<button class='normal'><a href='index.php?controller=feedback&action=readAll_byclient'>view other clients feedbacks</button></a>";
    
                 
?>
    </div>
</div>
