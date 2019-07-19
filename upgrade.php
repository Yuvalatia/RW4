<?php
$TITLE = "Upgrade";
include ('userHeader.php');

// TRAIN CALC
require ('Trainincludes/trainCalc.php');

// RESOURCE TABLE ADDED
require ('includes/resTable.php');
?>

    <h1 id="pageBanner">Upgrade</h1>

<?php
require ('Upgradeinclude/upgradeTable.php');
?>

    <!-- Javascript for train -->
    <script src="scripts/train.js"></script>

<?php
include ('userFooter.php');
?>