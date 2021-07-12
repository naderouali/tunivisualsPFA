<?php
 if(!isset($_SESSION)) 
    { 
        session_start(); 
    }if(!isset($_SESSION['code'])){
header('Location: index.php?controller=admin&action=connect');}

?>

<!DOCTYPE html>
<head>

    <script type="text/javascript" src="././js/js.js"></script>
</head>
<body>
<div class="az">
    <?php
include_once ("{$ROOT}{$DS}view{$DS}adminnavbar.php"); 
?>
    <div class="ar">
		
        <form name="admin" onsubmit="return adminValid()" method="POST" action="index.php?controller=admin&action=created">
            <fieldset>
                <legend>Add an admin </legend>
                <p>
                    <label for="admin_code">Admin code </label> :<br>
                    <input type="text" name="admin_code" id="admin_code" required />
                </p>
                <p>
                    <label for="an">Admin name</label> :<br>
                    <input type="text" name="an" id="an" required />
                </p>
                <label for="ae">Admin email</label> :<br>
                <input type="email" name="ae" id="ae" required />
                <p>
                    <label for="apw">Admin password</label> :<br>
                    <input type="password" name="apw" id="apw" required />
                    <br>
                    <input type="submit"  value="Add" />
                    <?php  echo"<button >";
                      echo"<a href='index.php?controller=admin&action=readAll'>Clear and go back </a>";
                  echo"</button>";
?>
                </p>
            </fieldset>
        </form>
    </div>
</div>

</body>
</html>