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
        <p>Photographer updated</p>
        <?php
$code = $u->getCode(); 
echo"<button class='normal'>";
echo " <a href='index.php?controller=photographer&action=read&code=$code'> view new infos </a> " ;
echo"</button>";
echo"<button class='normal'>";
echo"<a href='index.php?controller=photographer&action=readAll'>back to photographer management</a>";
echo"</button>";
?>
    </div>
</div>
