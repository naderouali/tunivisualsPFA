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
        <h3>Your task has been created</h3>
        <?php
$tasks_id = $u->getTasks_id(); 
echo"<button class='normal'>";
echo"<a href='index.php?controller=tasks&action=read&tasks_id=$tasks_id'>view your task details</a>";
echo"</button>";
echo"<h3>Did you made a mistake ?</h3>";
echo"<button class='normal'>";
echo"<a href='index.php?controller=tasks&action=update&tasks_id=$tasks_id'>edit your task details</a>";   
echo"</button>";

?>
    </div>
</div>
