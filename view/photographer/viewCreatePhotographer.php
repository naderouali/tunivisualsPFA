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
        <form name ="photographe" onsubmit="return photogValid()" method="POST" action="index.php?controller=photographer&action=created">
            <fieldset>
                <legend>Add photographer</legend>
                <p>
                    <label for="code">Photographer code</label> :
                    <input type="text" name="code" id="code" maxlength="8" required />
                </p>
                <p>
                    <label for="cn">Photographer Name</label> :
                    <input type="text" name="cn" id="cn" required />
                </p>
                <label for="cln">Photographer last name</label> :
                <input type="text" name="cln" id="cln"  required />
                <p>
                    <label for="s">Salary</label> :
                    <input type="text" name="s" id="s" required />
                </p>
				<p>
                <label for="exp">Years of experience</label> :
                <input type="text" name="exp" id="exp" maxlength="8" required />
                </p>
				 <p>
                    <label for="cd">Code admin </label> :
                         
                    <select name="cd" id="cd">
                        <?php
								foreach($admin as $admin){
								$codeadmin=$admin->getAdmin_code();
						echo"<option value=$codeadmin->$codeadmin </option>";
								
								}
     ?>
                    </select>
                </p>
				<p>
                    <input type="submit" value="Add"/>
                    <?php  echo"<button >";
                      echo"<a href='index.php?controller=photographer&action=readAll'>clear and back </a>";
                  echo"</button>";
?>
                </p>
            </fieldset>
        </form>
    </div>
</div>
