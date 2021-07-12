<!DOCTYPE html>
<html lang="en">

<head>

    <script src="././js/js.js"></script>
</head>

<body>
    <div class="az">
        <div class="ar">
            <form name="signup" onsubmit="return clientValid()" method="POST" action="index.php?controller=client&action=created" >
                <div class="container">

                    <p>Create account as a client</p>
                    <hr>
                    <label for="cin"><b>CIN</b></label> <br>

                    <input type="text" id="cin" name="cin" required maxlength="8">
                    <span class="hidden" id="c"></span> <br>

                    <label for="qn"><b>Name</b></label> <br>
                    <input type="text" id="qn" name="qn"  required>

                    <span class="hidden" id="n"></span>
                    <br>


                    <label for="qe"><b>Email</b></label> <br>

                    <input type="email" id="qe" name="qe" required>
                    <span class="hidden" id="e"></span>
                    <br>


                    <label for="qpw"><b>Password</b></label> <br>

                    <input type="password" id="qpw" name="qpw" required>
                    <span class="hidden" id="p"> </span>
                    <br>


                    <label for="qt"><b>Phone Number</b></label> <br>

                    <input type="text" maxlength="8" id="qt" name="qt" required>
                    <span class="hidden" id="nu"></span>
                    <br>
                    <label for="qa"><b>Adress</b></label> <br>

                    <input type="text" id="qa" name="qa" required>
                    <br>
                    <input type="checkbox" name="terms" id="terms" value="terms">
                    <label for="terms">By creating an account you agree to our Terms & Privacy</label>
                    <br>
                    <button class="add"  type="submit" id="sign">Sign up</button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>
