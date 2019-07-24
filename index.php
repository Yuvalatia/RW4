<?php
$TITLE = "Home";
include("header.php"); 
?>
<div style="text-align: center;">
    <p>Welcome to RW4 "first impression" release.</p>
    <p>Only Register and Login works :</p>
<p>In game - base,attack,upgarde,store,train</p>
<p>Rank and resources update every 10 min for now...</p>
<p>Reports you can send here : yodaatia123@gmail.com</p>

    <h1>Have Fun</h1>
    <h3 style="color:red;">v0.02</h3>
</div>

<div class="row" style="text-align: center;">
    <div class="col-md-6">
        <b>Bugs Fixed:</b>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="bugs col-md-7" style="text-align: left;">
                <span class="badge badge-warning">Fixed</span> Turns bug.<br>
                <span class="badge badge-warning">Fixed</span> Validation bug.<br>
                <span class="badge badge-warning">Fixed</span> Spy sending bug.<br>
                <span class="badge badge-warning">Fixed</span> Attack page bug.<br>
                <span class="badge badge-warning">Fixed</span> Attack panel bug.<br>
            </div>
            <div class="col-md-1"></div>
        </div>

    </div>
    <div class="col-md-6">
        <b>News & Updates:</b>
        <div class="row">
            <div class="col-md-3"></div>
            <div class="bugs col-md-8" style="text-align: left;">
                <span class="badge badge-info">Info</span> All army's had been resets<br>
                <span class="badge badge-success">New</span> Gold ratio change a bit<br>
            </div>
            <div class="col-md-1"></div>
        </div>
        <hr>
        <small>*Every big update the 3 first ranked army's will get bonus for the new version.</small><br>
        <h4 style="color:#6869ff;">3 best Army's version 0.01:</h4>

        OriHomo<br>
        Uuuu<br>
        Night<br>
    </div>
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
