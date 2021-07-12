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
echo"<h5>Tasks list </h5>";
echo"<table border='1' class='op'>";
echo"<tr>";
echo"<th>tasks code</th>";
echo"<th>client</th>";
echo"<th colspan='2'>operations</th>";
echo"</tr>";

foreach ($tab_u as $u){
        	  $tasks_id=$u->getTasks_id();
echo"<tr>";
    echo"<td>".$u->getTasks_id();"</td>";
echo"<td>".$u->getTasks_client_cin();"</td>";
echo"<td class='vmore'><a href='index.php?controller=tasks&action=readbyadmin&tasks_id=$tasks_id'> view task details</a></td>";
echo"<td class ='tdel'><a href='index.php?controller=tasks&action=delete&tasks_id=$tasks_id'>   delete </a></td>";

echo"</tr>";
}
echo"</table>";
 
      ?>
    </div>
</div>
