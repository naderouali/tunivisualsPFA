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

echo"<h5>Photographers list</h5>";

echo"<table  class='op' border='1'>";
echo"<tr>";
echo"<th>code</th>";
echo"<th>name</th>";
echo"<th colspan='3'>operations</th>";
echo"</tr>";

foreach ($tab_u as $u){
        	  $code=$u->getCode();
echo"<tr>";
    echo"<td>".$u->getCode();"</td>";
echo"<td>".$u->getPhotographername();"</td>";
echo"<td class='vmore'><a href='index.php?controller=photographer&action=read&code=$code'>      view more</a></td>";
echo"<td class='edit'><a href='index.php?controller=photographer&action=update&code=$code'>   edit infos</a></td>";
echo"<td class='tdel'><a href='index.php?controller=photographer&action=delete&code=$code'>   delete </a></td>";


echo"</tr>";
}
echo"</table>";
   echo"<button class='add'>";
  echo"<a href='index.php?controller=photographer&action=create'>Add a new photographer</a>";
  echo"</button>";
      ?>
    </div>
</div>
