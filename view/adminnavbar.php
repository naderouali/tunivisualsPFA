<?php
echo"<div class='navbar'>";
echo"<ul>";
echo"<li><a href='index.php?controller=photographer&action=readAll'>Photographers management</a></li>";
echo"<li><a href='index.php?controller=client&action=readAll'>Clients management</a></li>";
echo"<li><a href='index.php?controller=admin&action=readAll'>Admins management</a></li>";
echo"<li><a href='index.php?controller=tasks&action=readAll'>Tasks management</a></li>";
echo"<li><a href='index.php?controller=feedback&action=readAll_byadmin'>Feedbacks management</a></li>";
echo"<li><a href='index.php?controller=admin&action=loggedout'>Log out </a></li>";
echo"</ul>";
echo"</div>";

?>
