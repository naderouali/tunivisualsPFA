<?php
 if(!isset($_SESSION)) 
    { 
        session_start(); 
    }if(!isset($_SESSION['cin'])){
header('Location: index.php?controller=client&action=connect');}

?>
<div class="az">
    <?php
include_once ("{$ROOT}{$DS}view{$DS}usernavbar.php"); 
 

?>
    <div class="ar">
        <?php
$tasks_id=$up->getTasks_id();
?>
        <form method="POST" action="index.php?controller=tasks&action=updated">
            <fieldset>
                <legend>Fill in with the task's new details</legend>
                <p>
                    <label for="task_id">Task code</label> :<br>
                    <input type="text" readonly name="task_id" id="task_id" value="<?=$tasks_id?>" required />
                </p>
                <p>
                    <label for="oc">Client cin </label> :<br>
                    <input type="text" name="oc" id="oc" value="<?=$up->gettasks_client_cin()?>" required />
                </p>
                <p>
                    <label>Last style choice</label><br>
                    <input type="text" readonly value="<?=$up->gettasks_type()?>" required />

                    <label for="ock">Change the style to </label> :
                    
       <select name="ock" id="ock">
                        <option value="All types">All types</option>
                        <option value="Marriage shooting">Marriage shooting</option>
                        <option value="Portraits">Portraits</option>
                        <option value="Landscape">Landscape</option>                 
                    </select>
                    <br>
                    <br>

                    <label for="om">New number of pictures</label> :
                    <input type="number" name="om" id="om" value="1"  min="1" required />
                    <br />
                    <br>

                    <label for="od">New date</label> :
                    <input type="date" name="od" id="od" value="<?=$up->getTasks_date()?>" required />
                </p>
                <label for="add">You can change the adress</label> :<br>
                <input type="text" name="add" id="add" value="<?=$up->getTasks_adress()?>" required />
                <p>
                    <input type="submit" value="confirm" />
                </p>
            </fieldset>
        </form>
    </div>
</div>
