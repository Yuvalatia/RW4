<?php
$TITLE = "Training";
include ('userHeader.php');

// TRAIN CALC
require ('Trainincludes/trainCalc.php');

// RESOURCE TABLE ADDED
require ('includes/resTable.php');
?>

<h1 id="pageBanner">Training</h1>

<?php
    require ('Trainincludes/trainTable.php');
?>

<!-- Javascript for train -->
<script src="scripts/train.js"></script>

<?php
include ('userFooter.php');
?>
