<?php
 if(!isset($_SESSION)) 
    { 
        session_start(); 
    }if(!isset($_SESSION['cin'])){
header('Location: index.php?controller=client&action=connect');}

?>
<?php
  include_once ("{$ROOT}{$DS}view{$DS}usernavbar.php"); 
 

?>
<section class="img">
    <img class="im" onmouseover="bigger(this)" onmouseout="normal(this)" src="././images/shot1.jpg" height="38%" width="38%">
    <img class="im" onmouseover="bigger(this)" onmouseout="normal(this)" src="././images/shot2.jpg" height="38%" width="38%">
    <br>
    <img class="im" onmouseover="bigger(this)" onmouseout="normal(this)" src="././images/shot7.jpg" height="38%" width="38%">
    <img class="im" onmouseover="bigger(this)" onmouseout="normal(this)" src="././images/shot4.jpg" height="38%" width="38%">
    <br>
    <img class="im" onmouseover="bigger(this)" onmouseout="normal(this)" src="././images/shot8.jpg" height="38%" width="38%">
    <img class="im" onmouseover="bigger(this)" onmouseout="normal(this)" src="././images/shot6.jpg" height="38%" width="38%">
    <br>
    <div class="added">
        <?php 
        echo"<button class='add'><a href='index.php?controller=tasks&action=create'>Create a task</a></button>"; ?>
    </div>
</section>
