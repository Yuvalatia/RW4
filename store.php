<?php
$TITLE = "Store";
include ('userHeader.php');

// RESOURCE TABLE ADDED
require ('includes/resTable.php');

// Store Price Stat
require ('Storeincludes/priceStats.php');
?>

<?php
    if(isset($_POST['submitAtt'])){
        $wAtt1Count = $_POST['wAtt1Count'];
        $wAtt2Count = $_POST['wAtt2Count'];
        $wAtt3Count = $_POST['wAtt3Count'];
        $wAtt4Count = $_POST['wAtt4Count'];

        // Clac gold needed
        $goldNeeded = $wAtt1Count * $w1['gold'] +
                      $wAtt2Count * $w2['gold'] +
                      $wAtt3Count * $w3['gold'] +
                      $wAtt4Count * $w4['gold'];
        // Clac wood needed
        $woodNeeded = $wAtt1Count * $w1['wood'] +
                      $wAtt2Count * $w2['wood'] +
                      $wAtt3Count * $w3['wood'] +
                      $wAtt4Count * $w4['wood'];
        // Clac ore needed
        $oreNeeded  = $wAtt1Count * $w1['ore'] +
                      $wAtt2Count * $w2['ore'] +
                      $wAtt3Count * $w3['ore'] +
                      $wAtt4Count * $w4['ore'];


        if($goldNeeded > $userGold || $woodNeeded > $userWood || $oreNeeded > $userOre){
            // not Have  the resorces
             echo "Not enoth rescources";
        }else{
            // Have the resorces

            // New resorces
            $newGold = $userGold - $goldNeeded;
            $newWood = $userWood - $woodNeeded;
            $newOre  = $userOre - $oreNeeded;
            // New Weaponds
            $newW1   = $wAtt1 + $wAtt1Count;
            $newW2   = $wAtt2 + $wAtt2Count;
            $newW3   = $wAtt3 + $wAtt3Count;
            $newW4   = $wAtt4 + $wAtt4Count;

            // SQL UPDATE


        }
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
