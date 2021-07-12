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
        <h3> Photographes details</h3>
        <?php
	$code=$u->getCode();
echo"<p><span class='x'>Code : </span> ".$u->getCode();"<p/>";
echo"<p> <span class='x'>Name : </span> ".$u->getPhotographername();"<p/>";
echo"<p> <span class='x'>Last name : </span> ".$u->getPhotographerlastname();"<p/>";
echo"<p><span class='x'>Salary: </span> ".$u->getSalary();"<p/>";
echo"<p> <span class='x'>Years of experience :</span> ".$u->getExpyear();"<p/>";

                echo"<br/>";
                  echo"<button class='update'>";
                 echo '<a href="index.php?controller=photographer&action=update&code='.$code.'"> edit </a>';
                  echo"</button>";

                  echo"<button class='delete'>";
                 echo '<a href="index.php?controller=photographer&action=delete&code='.$code.'"> delete </a> ';
                  echo"</button>";

                 echo"<br/>";
                  echo"<button class='normal'>";
                 echo"<a href='index.php?controller=photographer&action=readAll'>back to photographer management</a>";
                  echo"</button>";


                 ?>
    </div>
</div>
