<?php
  if(!isset($_SESSION)) 
    { 
        session_start(); 
    }
$_SESSION["name"]=$cnx-> getClientname();
$_SESSION["cin"]=$cnx-> getCin();
$_SESSION["email"]=$cnx->getClientemail();
$_SESSION["password"]=$cnx->getClientpw();
$_SESSION["tel"]=$cnx-> getTel();
$_SESSION["adress"]=$cnx-> getAdress();

?>
<div class="ax">
    <?php
                echo"<div class='ay'>";
echo"<h1 id='welcome'>welcome"."  ".$_SESSION['name']."<h1>";

echo"<button class='main'><a href='index.php?controller=tasks&action=create'>Create a task</a></button>";
echo"</br>";
echo"<button class='main'><a href='index.php?controller=feedback&action=create'>Rate our services</a></button>";
echo"</br>";
echo"<button class='main'><a href='index.php?controller=feedback&action=readAll_byclient'>View others clients feedbacks</a></button>";
echo"</br>";
echo"<button class='main'><a href='index.php?controller=client&action=myinfo'>My account infos</a></button>";
    echo"</br>";
echo"<button class='main'><a href='index.php?controller=staticpages&action=viewshots'> View our shots</a></button>";
echo"</br>";
        echo"</div>";
        ?>

</div>
