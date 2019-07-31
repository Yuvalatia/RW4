<?php
$TITLE = "Home";
include("header.php"); 
?>
<div style="text-align: center;">
    <p>Welcome to RW4 "first impression" release.</p>
    <p>Only Register and Login works :</p>
<p>In game - base,attack,upgarde,store,train,bank,history</p>
<p>Rank and resources update every 15 min for now...</p>
<p>Reports you can send here : yodaatia123@gmail.com</p>

    <h1>Have Fun</h1>
    <h3 style="color:red;">Beta v0.03</h3>
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
                <span class="badge badge-success">New</span> Bank option<br>
                <span class="badge badge-success">New</span> History option - see who attacks you<br>
                <span class="badge badge-success">New</span> Page ICON - credit: Ori Danieli<br>
                <span class="badge badge-danger">Soon</span> Timer for update & new Design<br>
            </div>
            <div class="col-md-1"></div>
        </div>

    </div>
    <div class="col-md-12">
        <hr>
        <small>*Every big update the 5 first ranked army's will get bonus for the new version.</small><br>
        <small><span style="color: limegreen">bonus : warriors and workers boosts depends on rank.</span> </small><br>
        <h4 style="color:#6869ff;">5 best Army's version 0.02:</h4>

        <span style="color:gold">1st. test</span><br>
        <span style="color:silver">2nd. NIro46</span><br>
        <span style="color:#8b642c">3rd. JKL hahahahahha</span><br>
        4th. Katana<br>
        5th. Poop<br>
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
