<?php
$TITLE = "Home";
include("header.php"); 
?>
<div style="text-align: center;">
    <p>Welcome to RW4 "first impression" release.</p>
    <p>Only Register and Login works :</p>
<p>In game - base,attack,upgarde,store,train</p>
<p>Rank and resources update every 30 min for now...</p>
<p>Reports you can send here : yodaatia123@gmail.com</p>

<h1>Have Fun</h1>
</div>

<?php
include("footer.php");
?>

<?php
    // Checks for new account added
    if(isset($_GET['newUser'])){

      // including modal for new user
      include ('modals/newUserModal.php');


    }
?>
