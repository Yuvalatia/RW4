<?php
$TITLE = "Attack";
include ('userHeader.php');

// ATTACK CALC
require ('attackincludes/attackCalc.php');

// RESOURCE TABLE ADDED
require ('includes/resTable.php');
?>

    <h1 id="pageBanner">Attack</h1>

<?php
    require ('attackincludes/attackTable.php');
?>



<?php
include ('userFooter.php');
?>