<?php

// Start Calc
if(isset($_POST['submitAtt'])){

    $wAtt1Count = $_POST['wAtt1Count'];
    $wAtt2Count = $_POST['wAtt2Count'];
    $wAtt3Count = $_POST['wAtt3Count'];
    $wAtt4Count = $_POST['wAtt4Count'];

    // PHP Validation
    if(preg_match($numbers,$wAtt1Count) && preg_match($numbers,$wAtt2Count) && preg_match($numbers,$wAtt3Count)
    && preg_match($numbers,$wAtt4Count)) {

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
        $oreNeeded = $wAtt1Count * $w1['ore'] +
            $wAtt2Count * $w2['ore'] +
            $wAtt3Count * $w3['ore'] +
            $wAtt4Count * $w4['ore'];


        if ($goldNeeded > $userGold || $woodNeeded > $userWood || $oreNeeded > $userOre) {
            // not Have  the resorces
            badAlert("Not enoth rescources");
        } else {
            // Have the resorces

            // New resorces
            $newGold = $userGold - $goldNeeded;
            $newWood = $userWood - $woodNeeded;
            $newOre = $userOre - $oreNeeded;
            // New Weaponds
            $newW1 = $wAtt1 + $wAtt1Count;
            $newW2 = $wAtt2 + $wAtt2Count;
            $newW3 = $wAtt3 + $wAtt3Count;
            $newW4 = $wAtt4 + $wAtt4Count;

            // SQL UPDATE
            $sql = "UPDATE resources SET userGold='$newGold', userWood='$newWood', userOre='$newOre'
                    WHERE userId = '$user_id';";
            if (mysqli_query($conn, $sql)) {
                // RESOURCE UPDATED SUCSSESFULY

                // UPDATE WEAPONS
                $sql = "UPDATE weaponds SET wAtt1='$newW1', wAtt2='$newW2', wAtt3='$newW3', wAtt4='$newW4'
                    WHERE userId = '$user_id';";
                if (mysqli_query($conn, $sql)) {
                    // BUYING SUCCSESS
                    goodAlert("Weapons added successfully.");
                } else {
                    badAlert("Error updating record: " . mysqli_error($conn));
                }
            } else {
                badAlert("Error updating record: " . mysqli_error($conn));
            }

            // REFRESH THE PAGE - DETAILS
            require('includes/userDetailsFetch.php');

        }
    }
}
if(isset($_POST['submitDef'])){
    $wDef1Count = $_POST['wDef1Count'];
    $wDef2Count = $_POST['wDef2Count'];
    $wDef3Count = $_POST['wDef3Count'];
    $wDef4Count = $_POST['wDef4Count'];

    // PHP Validation
    if(preg_match($numbers,$wDef1Count) && preg_match($numbers,$wDef2Count) && preg_match($numbers,$wDef3Count)
        && preg_match($numbers,$wDef4Count)) {

        // Clac gold needed
        $goldNeeded = $wDef1Count * $w1['gold'] +
            $wDef2Count * $w2['gold'] +
            $wDef3Count * $w3['gold'] +
            $wDef4Count * $w4['gold'];
        // Clac wood needed
        $woodNeeded = $wDef1Count * $w1['wood'] +
            $wDef2Count * $w2['wood'] +
            $wDef3Count * $w3['wood'] +
            $wDef4Count * $w4['wood'];
        // Clac ore needed
        $oreNeeded = $wDef1Count * $w1['ore'] +
            $wDef2Count * $w2['ore'] +
            $wDef3Count * $w3['ore'] +
            $wDef4Count * $w4['ore'];


        if ($goldNeeded > $userGold || $woodNeeded > $userWood || $oreNeeded > $userOre) {
            // not Have  the resorces
            badAlert("Not enoth rescources");
        } else {
            // Have the resorces

            // New resorces
            $newGold = $userGold - $goldNeeded;
            $newWood = $userWood - $woodNeeded;
            $newOre = $userOre - $oreNeeded;
            // New Weaponds
            $newW1 = $wDef1 + $wDef1Count;
            $newW2 = $wDef2 + $wDef2Count;
            $newW3 = $wDef3 + $wDef3Count;
            $newW4 = $wDef4 + $wDef4Count;

            // SQL UPDATE
            $sql = "UPDATE resources SET userGold='$newGold', userWood='$newWood', userOre='$newOre'
                    WHERE userId = '$user_id';";
            if (mysqli_query($conn, $sql)) {
                // RESOURCE UPDATED SUCSSESFULY

                // UPDATE WEAPONS
                $sql = "UPDATE weaponds SET wDef1='$newW1', wDef2='$newW2', wDef3='$newW3', wDef4='$newW4'
                    WHERE userId = '$user_id';";
                if (mysqli_query($conn, $sql)) {
                    // BUYING SUCCSESS
                    goodAlert("Weapons added successfully.");
                } else {
                    badAlert("Error updating record: " . mysqli_error($conn));
                }
            } else {
                badAlert("Error updating record: " . mysqli_error($conn));
            }

            // REFRESH THE PAGE - DETAILS
            require('includes/userDetailsFetch.php');

        }
    }
}
if(isset($_POST['submitSpy'])){
    $wSpy1Count = $_POST['wSpy1Count'];
    $wSpy2Count = $_POST['wSpy2Count'];

    // PHP Validation
    if(preg_match($numbers,$wSpy1Count) && preg_match($numbers,$wSpy2Count)) {

        // Clac gold needed
        $goldNeeded =
            $wSpy1Count * $w3['gold'] +
            $wSpy2Count * $w4['gold'];
        // Clac wood needed
        $woodNeeded =
            $wSpy1Count * $w3['wood'] +
            $wSpy2Count * $w4['wood'];
        // Clac ore needed
        $oreNeeded =
            $wSpy1Count * $w3['ore'] +
            $wSpy2Count * $w4['ore'];


        if ($goldNeeded > $userGold || $woodNeeded > $userWood || $oreNeeded > $userOre) {
            // not Have  the resorces
            badAlert("Not enoth rescources");
        } else {
            // Have the resorces

            // New resorces
            $newGold = $userGold - $goldNeeded;
            $newWood = $userWood - $woodNeeded;
            $newOre = $userOre - $oreNeeded;
            // New Weaponds
            $newW1 = $wSpy1 + $wSpy1Count;
            $newW2 = $wSpy2 + $wSpy2Count;

            // SQL UPDATE
            $sql = "UPDATE resources SET userGold='$newGold', userWood='$newWood', userOre='$newOre'
                    WHERE userId = '$user_id';";
            if (mysqli_query($conn, $sql)) {
                // RESOURCE UPDATED SUCSSESFULY

                // UPDATE WEAPONS
                $sql = "UPDATE weaponds SET wSpy1='$newW1', wSpy2='$newW2' 
                    WHERE userId = '$user_id';";
                if (mysqli_query($conn, $sql)) {
                    // BUYING SUCCSESS
                    goodAlert("Weapons added successfully.");
                } else {
                    badAlert("Error updating record: " . mysqli_error($conn));
                }
            } else {
                badAlert("Error updating record: " . mysqli_error($conn));
            }

            // REFRESH THE PAGE - DETAILS
            require('includes/userDetailsFetch.php');

        }
    }
}
if(isset($_POST['submitExp'])){
    $wExp1Count = $_POST['wExp1Count'];
    $wExp2Count = $_POST['wExp2Count'];

    // PHP Validation
    if(preg_match($numbers,$wExp1Count) && preg_match($numbers,$wExp2Count)) {

        // Clac gold needed
        $goldNeeded =
            $wExp1Count * $w3['gold'] +
            $wExp2Count * $w4['gold'];
        // Clac wood needed
        $woodNeeded =
            $wExp1Count * $w3['wood'] +
            $wExp2Count * $w4['wood'];
        // Clac ore needed
        $oreNeeded =
            $wExp1Count * $w3['ore'] +
            $wExp2Count * $w4['ore'];


        if ($goldNeeded > $userGold || $woodNeeded > $userWood || $oreNeeded > $userOre) {
            // not Have  the resorces
            badAlert("Not enoth rescources");
        } else {
            // Have the resorces

            // New resorces
            $newGold = $userGold - $goldNeeded;
            $newWood = $userWood - $woodNeeded;
            $newOre = $userOre - $oreNeeded;
            // New Weaponds
            $newW1 = $wExp1 + $wExp1Count;
            $newW2 = $wExp2 + $wExp2Count;

            // SQL UPDATE
            $sql = "UPDATE resources SET userGold='$newGold', userWood='$newWood', userOre='$newOre'
                    WHERE userId = '$user_id';";
            if (mysqli_query($conn, $sql)) {
                // RESOURCE UPDATED SUCSSESFULY

                // UPDATE WEAPONS
                $sql = "UPDATE weaponds SET wExp1='$newW1', wExp2='$newW2' 
                    WHERE userId = '$user_id';";
                if (mysqli_query($conn, $sql)) {
                    // BUYING SUCCSESS
                    goodAlert("Weapons added successfully.");
                } else {
                    badAlert("Error updating record: " . mysqli_error($conn));
                }
            } else {
                badAlert("Error updating record: " . mysqli_error($conn));
            }

            // REFRESH THE PAGE - DETAILS
            require('includes/userDetailsFetch.php');

        }
    }
}
?>