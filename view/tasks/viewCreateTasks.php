<?php
  if(!isset($_SESSION)) 
    { 
        session_start(); 
    }
if(!isset($_SESSION['cin'])){
header('Location: index.php?controller=client&action=connect');}

?>
<div class="az">
    <?php
include_once ("{$ROOT}{$DS}view{$DS}usernavbar.php"); 
   

?>
    <div class="ar">
        <form method="POST" action="index.php?controller=tasks&action=created">
            <fieldset>
                <legend>Fill in with the task details</legend>
                <p>
                    <label for="task_client">Task in the name of :</label> :<br>
                    <input type="text" name="oc" id="oc" readonly value="<?=$_SESSION['cin']?>" required />
                </p>
                <p>
                    <label for="ock">Required style</label> :
                    <select name="ock" id="ock">
                        <option value="All types">All types</option>
                        <option value="Marriage shooting">Marriage shooting</option>
                        <option value="Portraits">Portraits</option>
                        <option value="Landscape">Landscape</option>                 
                    </select>
                    <br>
                    <br>
                    <label for="od">Date</label> :
                    <input type="date" name="od" id="od" required />
                </p>
                <label for="om">Number of pictures</label> :
                <input type="number" name="om" id="om" required min="1" value="0" />
                <p>
                </p>
                <label for="add">Your adress</label> :<br>
                <input type="text" value="<?=$_SESSION['adress']?>" name="add" id="add" required />
                <p>
                    <input type="submit" value="Confirm" />

                </p>
            </fieldset>
        </form>
    </div>
</div>
