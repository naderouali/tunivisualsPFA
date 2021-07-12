<?php
 if(!isset($_SESSION)) 
    { 
        session_start(); 
    }if(!isset($_SESSION['code'])){
header('Location: index.php?controller=admin&action=connect');}

?>
<div class="az">
    <?php
include_once ("{$ROOT}{$DS}view{$DS}adminnavbar.php"); 


?>
    <div class="ar">
        <?php
	$tasks_id=$u->gettasks_id();
    echo"<p> <span class='x'>Task code : </span> ".$u->gettasks_id();"<p/>";
    echo"<p> <span class='x'>Task created by : </span> ".$u->gettasks_client_cin();"<p/>";
    echo"<p> <span class='x'>Type of task : </span> ".$u->gettasks_type();"<p/>";
	echo"<p><span class='x'>Type of task : :</span>".$u->getTasks_number();"<p/>";
    echo"<p> <span class='x'>Date of the task :</span> ".$u->gettasks_date();"<p/>";
    echo"<p> <span class='x'>Adress of the task :</span>  ".$u->gettasks_adress();"<p/>";

                echo"</br>";
echo"<button class='delete'>";
 echo"<a href='index.php?controller=tasks&action=delete&tasks_id=$tasks_id'>   delete </a>";
  echo"</button>";
    echo"<br/>";
echo"<button class='normal' >";
 echo"<a href='index.php?controller=tasks&action=readAll'>back to tasks management</a>";
  echo"</button>";
 ?>
    </div>
</div>
