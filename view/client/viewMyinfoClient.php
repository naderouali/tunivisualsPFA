<?php
 if(!isset($_SESSION)) 
    { 
        session_start(); 
    }
if(!isset($_SESSION['cin'])){
header('Location: index.php?controller=client&action=connect');}

include_once ("{$ROOT}{$DS}view{$DS}usernavbar.php"); 
      

?>
<div class="az">
    <div class="ar">
        <?php
$cin=$_SESSION['cin'];
echo"<p><span class='x'>My CIN : </span>".$_SESSION['cin']. "<p/>";
echo"<p>  <span class ='x'>My name : </span> ".$_SESSION['name']."<p/>";
echo"<p>  <span class ='x'>My email : </span> ".$_SESSION['email']."<p/>";
echo"<p> <span class ='x'>My phone number :</span>  ".$_SESSION['tel']."<p/>";
echo"<p>  <span class='x'>My adress : </span> ".$_SESSION['adress']."<p/>";

                echo"<button class='normal'>";
                 echo '<a href="index.php?controller=client&action=update&cin='.$cin.'"> update my infos </a> ';
                 echo"</button>";


                 ?>
    </div>
</div>
