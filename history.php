<?php
$TITLE = "History";
include ('userHeader.php');
?>

<h1 id="pageBanner">History</h1>

<div class="row">
    <?php
        require ('historyIncludes/yourAttacks.php');
        require ('historyIncludes/attackOnyou.php');
    ?>
</div>






<?php
include ('userFooter.php');
?>
