<?php
$TITLE = "Store";
include ('userHeader.php');

// RESOURCE TABLE ADDED
require ('includes/resTable.php');
?>

<h1 id="pageBanner">Store</h1>

<?php
    require('Storeincludes/attTable.php');
    require('Storeincludes/defTable.php');
    require('Storeincludes/spyTable.php');
    require('Storeincludes/expTable.php');
?>



<?php
include ('userFooter.php');
?>
