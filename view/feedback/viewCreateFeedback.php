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
        <form name ="fb" onsubmit="return fbValid()" method="POST" action="index.php?controller=feedback&action=created">
            <fieldset>
                <legend>Post your feedback</legend>

                <p>
                    <label for="fbc">Your code</label> :
                    <input type="text" readonly value="<?=$_SESSION['cin']?>" name="fbc" id="fbc" required />
                </p>
                <label for="fbs">Subject</label> :
                <select id="fbs" name="fbs">
                    <option value="quality">Quality</option>
                    <option value="photographer">Photographer</option>
                    <option value="prices">Prices</option>

                </select><br><br>
				<label for="op"> choose  photographer </label> :
                    <select name="op" id="op">
				
                       <?php
						foreach($photographer as $photographer){
							$code=$photographer->getCode();
							echo"<option value=$code>$code </option>";
						}
						?>
                    </select>
                <p>
                    <label for="fbct">Comment</label>
                    <br><br>
                    <textarea name="fbct" id="fbct" required >feel free to write anything..
                    </textarea>

                </p>

                <p>
                    <input type="submit" value="confirm" />
                </p>
            </fieldset>
        </form>
    </div>
</div>
