<?php
 if(!isset($_SESSION)) 
    { 
        session_start(); 
    }$_SESSION["code"]=$cnx-> getAdmin_code();
$_SESSION["name"]=$cnx-> getAdmin_name();

?>
<div class="ax">
    <?php
echo"<div class='ay'>";
echo"<h1>Admin main panel</h1>";

echo"<button class='main'><a href='index.php?controller=photographer&action=readAll'>photographers management</a></button>";
echo"</br>";
echo"<button class='main'><a href='index.php?controller=client&action=readAll'>clients management</a></button>";
echo"</br>";
echo"<button class='main'><a href='index.php?controller=admin&action=readAll'>admins management</a></button>";
echo"</br>";
echo"<button class='main'><a href='index.php?controller=tasks&action=readAll'>tasks management</a></button>";
echo"</br>";
echo"<button class='main'><a href='index.php?controller=feedback&action=readAll_byadmin'>feedbacks management</a></button>";
echo"</br>";
echo"</div>";
?>

</div>
