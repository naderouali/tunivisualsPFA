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
$code=$up->getCode();
?>
        <form method="POST" action="index.php?controller=photographer&action=updated&code=<?=$code?>">
            <fieldset>
                <legend>Change photographer's infos</legend>
                <p>
                    <label for="code">code</label> :
                    <input type="text" value="<?=$code?>" name="code" id="code" maxlength="8" required readonly />
                </p>
                <p>
                    <label for="cn">First name</label> :
                    <input type="text" value="<?=$up->getPhotographername()?>" name="cn" id="cn" required />
                </p>
                <p>
                    <label for="cln">Last name</label> :
                    <input type="text" value="<?=$up->getPhotographerlastname()?>" name="cln" id="cln" required />
                </p>
                <p>
                    <label for="s">Salary</label> :
                    <input type="text" value="<?=$up->getSalary()?>" name="s" id="s" required />
                </p>
                <p>
                    <label for="exp">Years of experience</label> :
                    <input type="text" value="<?=$up->getExpyear()?>" name="exp" id="exp" required />
                </p>
				<p>
                    <label for="cd">Code admin </label> :
                    <input type="text" name="cd" id="cd" value="<?=$up->getcodeadmin()?>" readonly required />
                </p>
                <p>
                    <input type="submit" value="Confirm" />
                    <?php  echo"<button >";
                      echo"<a href='index.php?controller=photographer&action=readAll'>clear and back </a>";
                  echo"</button>";?>
                </p>
            </fieldset>
        </form>
    </div>
</div>
