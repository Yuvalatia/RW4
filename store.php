<?php
$TITLE = "Store";
include ('userHeader.php');

// RESOURCE TABLE ADDED
require ('includes/resTable.php');
?>

<?php
    if(isset($_POST['submitAtt'])){
        echo "att";
    }
    if(isset($_POST['submitDef'])){
        echo "def";
    }
    if(isset($_POST['submitSpy'])){
        echo "spy";
    }
    if(isset($_POST['submitExp'])){
        echo "exp";
    }
?>

<h1 id="pageBanner">Store</h1>

<?php
    require('Storeincludes/attTable.php');
    require('Storeincludes/defTable.php');
    require('Storeincludes/spyTable.php');
    require('Storeincludes/expTable.php');
?>


<!-- Javascript for register -->
<script src="scripts/store.js"></script>

<?php
include ('userFooter.php');
?>
