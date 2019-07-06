<?php
$TITLE = "Register";
include("header.php");

if(isset($_SESSION['userId'])){
    header("Location: base.php");
    exit();
}
?>
<div class="container">
    <h2 id="pageBanner">Register</h2>
    <div class="container">
        <form name="register-form" action="includes/register-inc.php" method="POST" onsubmit="return valForm()" autocomplete="off">
            <div class="form-row">
                <div class="form-group col-lg-4 col-sm-12">
                    <label for="firstname">First name:</label>
                    <input type="text" class="form-control" id="firstname" name="firstname">
                    <div class="invalid-feedback">
                        * first name includes only letters.
                    </div>
                </div>
                <div class="form-group col-lg-4 col-sm-12">
                    <label for="lastname">Last name:</label>
                    <input type="text" class="form-control" id="lastname" name="lastname">
                    <div class="invalid-feedback">
                        * last name includes only letters.
                    </div>
                </div>
                <div class="form-group col-lg-4 col-sm-12">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control <?php
                    // if army name already taken
                    if(isset($_GET['emailTaken'])){
                        echo "is-invalid";
                    }
                    ?>" id="email" name="email" <?php
                    if(isset($_GET['emailTaken'])){
                        echo "value = ".$_GET['emailTaken'];
                    }
                    ?>>
                    <div class="invalid-feedback">
                        * email already in the system.
                    </div>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-lg-6 col-sm-12">
                    <label for="username">Password:</label>
                    <input type="password" class="form-control" id="pass" name="pass">
                    <div class="invalid-feedback">
                        * password must contain letters and numbers 8-16 length.
                    </div>
                </div>
                <div class="form-group col-lg-6 col-sm-12">
                    <label for="email">Re-password:</label>
                    <input type="password" class="form-control" id="repass" name="repass">
                    <div class="invalid-feedback">
                        * repassword and password dosent equals.
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-lg-4 col-sm-12">
                    <label for="username" class="text-center">Army name:</label>
                    <input type="text" class="form-control <?php
                    // if army name already taken
                    if(isset($_GET['armyNameTaken'])){
                        echo "is-invalid";
                    }
                    ?>" id="username" name="username" <?php
                    if(isset($_GET['armyNameTaken'])){
                        echo "value = ".$_GET['armyNameTaken'];
                    }
                    ?>>
                    <div class="invalid-feedback">
                            * Army Name already used try another one.
                    </div>
                </div>
                <div class="form-group col-lg-4 col-sm-12">
                    <label for="race">Your race: </label>
                    <select name="race" id="race" class="custom-select">
                        <option value="0">Orc</option>
                        <option value="1">Human</option>
                        <option value="2">Elf</option>
                        <option value="3">Undead</option>
                    </select>
                </div>
                <div class="form-group col-lg-4 col-sm-12 text-center">
                    <img src="imgs/orc.gif" height="162" alt="orcs" id="race-img">
                    <p id="bonus">Race bonus: +10% attack.</p>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-12">
                    <button type="submit" id="submit" name="submit" class="btn btn-success btn-lg btn-block">Lets Role!</button>
                </div>

            </div>


        </form>
    </div>
</div>

<!-- Javascript for register -->
    <script src="scripts/register.js"></script>
<?php
include("footer.php");             
?>