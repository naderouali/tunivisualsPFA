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
        <h3>Your task has been edited</h3>
        <?php
$tasks_id= $u->getTasks_id(); 
echo"<button class='normal'><a href='index.php?controller=tasks&action=read&tasks_id=$tasks_id'>View new task details</a></button>";
?>
    </div>
</div>
