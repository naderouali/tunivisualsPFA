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
	$tasks_id=$u->getTasks_id();
    echo"<p> <span class='x'>Task code : </span> ".$u->getTasks_id();"<p/>";
    echo"<p><span class='x'>Task created by : </span> ".$u->getTasks_client_cin();"<p/>";
    echo"<p><span class='x'>Type of task : :</span>".$u->getTasks_type();"<p/>";
	 echo"<p><span class='x'>Type of task : :</span>".$u->getTasks_number();"<p/>";
    echo"<p> <span class='x'>Date of the task :</span> ".$u->getTasks_date();"<p/>";
    echo"<p> <span class='x'>Adress of the task :</span>  ".$u->getTasks_adress();"<p/>";

                echo"<br/>";
echo"<button class='add'><a href='index.php?controller=tasks&action=create'>pass another task</a></button>";
                echo"<button class='normal'><a href='index.php?controller=tasks&action=update&tasks_id=$tasks_id'>edit your task</a></button>";
                 ?>
    </div>
</div>
