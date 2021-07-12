<?php
 if(!isset($_SESSION)) 
    { 
        session_start(); 
    }session_destroy();
?>

<div class="az">
    <div class="ar">
        <p>You have logged out</p>
        <button class='normal'><a href="index.php?controller=admin&action=connect">Re-login</a></button>
    </div>
</div>
