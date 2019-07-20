<?php

// GOLD UPDATE
if(isset($_POST['goldUpgrade']) && $goldUpgrade < sizeof($goldLevel)-1){
    // CHECKS FOR RES
    if($userGold < $goldLevel[$goldUpgrade+1]['goldCost']){
        // Dont have res
        badAlert("Not enough resources...");
    }else{
        // Have res

        // New Upgrade level
        $newGoldUpgrade = $goldUpgrade + 1;
        // New Gold
        $newGold    = $userGold - $goldLevel[$goldUpgrade+1]['goldCost'];

        // SQL UPDATE
        $sql = "UPDATE resources SET userGold='$newGold'
                    WHERE userId = '$user_id';";
        if (mysqli_query($conn, $sql)) {
            // RESOURCE UPDATED SUCSSESFULY

            // UPDATE WEAPONS
            $sql = "UPDATE upgrades SET goldUpgrade='$newGoldUpgrade'
                    WHERE userId = '$user_id';";
            if(mysqli_query($conn,$sql)){
                // BUYING SUCCSESS
                goodAlert("upgrade complete.");
            }else{
                badAlert("Error updating record: " . mysqli_error($conn));
            }
        } else {
            badAlert("Error updating record: " . mysqli_error($conn));
        }
        // REFRESH THE PAGE - DETAILS
        require ('includes/userDetailsFetch.php');
    }
}


// WOOD UPDATE
if(isset($_POST['woodUpgrade']) && $woodUpgrade < sizeof($woodLevel)-1){
    // CHECKS FOR RES
    if($userWood < $woodLevel[$woodUpgrade+1]['woodCost']){
        // Dont have res
        badAlert("Not enough resources...");
    }else{
        // Have res

        // New Upgrade level
        $newWoodUpgrade = $woodUpgrade + 1;
        // New Gold
        $newWood    = $userWood - $woodLevel[$woodUpgrade+1]['woodCost'];

        // SQL UPDATE
        $sql = "UPDATE resources SET userWood='$newWood'
                    WHERE userId = '$user_id';";
        if (mysqli_query($conn, $sql)) {
            // RESOURCE UPDATED SUCSSESFULY

            // UPDATE WEAPONS
            $sql = "UPDATE upgrades SET woodUpgrade='$newWoodUpgrade'
                    WHERE userId = '$user_id';";
            if(mysqli_query($conn,$sql)){
                // BUYING SUCCSESS
                goodAlert("upgrade complete.");
            }else{
                badAlert("Error updating record: " . mysqli_error($conn));
            }
        } else {
            badAlert("Error updating record: " . mysqli_error($conn));
        }
        // REFRESH THE PAGE - DETAILS
        require ('includes/userDetailsFetch.php');
    }
}

// ORE UPDATE
if(isset($_POST['oreUpgrade']) && $oreUpgrade < sizeof($oreLevel)-1){
    // CHECKS FOR RES
    if($userOre < $oreLevel[$oreUpgrade+1]['oreCost']){
        // Dont have res
        badAlert("Not enough resources...");
    }else{
        // Have res

        // New Upgrade level
        $newOreUpgrade = $oreUpgrade + 1;
        // New Gold
        $newOre    = $userOre - $oreLevel[$oreUpgrade+1]['oreCost'];

        // SQL UPDATE
        $sql = "UPDATE resources SET userOre='$newOre'
                    WHERE userId = '$user_id';";
        if (mysqli_query($conn, $sql)) {
            // RESOURCE UPDATED SUCSSESFULY

            // UPDATE WEAPONS
            $sql = "UPDATE upgrades SET oreUpgrade='$newOreUpgrade'
                    WHERE userId = '$user_id';";
            if(mysqli_query($conn,$sql)){
                // BUYING SUCCSESS
                goodAlert("upgrade complete.");
            }else{
                badAlert("Error updating record: " . mysqli_error($conn));
            }
        } else {
            badAlert("Error updating record: " . mysqli_error($conn));
        }
        // REFRESH THE PAGE - DETAILS
        require ('includes/userDetailsFetch.php');
    }
}

// TURNS UPDATE
if(isset($_POST['turnsUpgrade']) && $turnsUpgrade < sizeof($turnsLevel)-1){
    // CHECKS FOR RES
    if($userTurns < $turnsLevel[$turnsUpgrade+1]['turnsCost']){
        // Dont have res
        badAlert("Not enough resources...");
    }else{
        // Have res

        // New Upgrade level
        $newTurnsUpgrade = $turnsUpgrade + 1;
        // New Gold
        $newTurns    = $userTurns - $turnsLevel[$turnsUpgrade+1]['turnsCost'];

        // SQL UPDATE
        $sql = "UPDATE resources SET userTurns='$newTurns'
                    WHERE userId = '$user_id';";
        if (mysqli_query($conn, $sql)) {
            // RESOURCE UPDATED SUCSSESFULY

            // UPDATE WEAPONS
            $sql = "UPDATE upgrades SET turnsUpgrade='$newTurnsUpgrade'
                    WHERE userId = '$user_id';";
            if(mysqli_query($conn,$sql)){
                // BUYING SUCCSESS
                goodAlert("upgrade complete.");
            }else{
                badAlert("Error updating record: " . mysqli_error($conn));
            }
        } else {
            badAlert("Error updating record: " . mysqli_error($conn));
        }
        // REFRESH THE PAGE - DETAILS
        require ('includes/userDetailsFetch.php');
    }
}


// ATT UPDATE
if(isset($_POST['attUpgrade']) && $attUpgrade < sizeof($powerLevel)-1){
    // CHECKS FOR RES
    if($userGold < $powerLevel[$attUpgrade+1]['goldCost']){
        // Dont have res
        badAlert("Not enough resources...");
    }else{
        // Have res

        // New Upgrade level
        $newAttUpgrade = $attUpgrade + 1;
        // New Gold
        $newGold    = $userGold - $powerLevel[$attUpgrade+1]['goldCost'];

        // SQL UPDATE
        $sql = "UPDATE resources SET userGold='$newGold'
                    WHERE userId = '$user_id';";
        if (mysqli_query($conn, $sql)) {
            // RESOURCE UPDATED SUCSSESFULY

            // UPDATE WEAPONS
            $sql = "UPDATE upgrades SET attUpgrade='$newAttUpgrade'
                    WHERE userId = '$user_id';";
            if(mysqli_query($conn,$sql)){
                // BUYING SUCCSESS
                goodAlert("upgrade complete.");
            }else{
                badAlert("Error updating record: " . mysqli_error($conn));
            }
        } else {
            badAlert("Error updating record: " . mysqli_error($conn));
        }
        // REFRESH THE PAGE - DETAILS
        require ('includes/userDetailsFetch.php');
    }
}

// DEF UPDATE
if(isset($_POST['defUpgrade']) && $defUpgrade < sizeof($powerLevel)-1){
    // CHECKS FOR RES
    if($userGold < $powerLevel[$defUpgrade+1]['goldCost']){
        // Dont have res
        badAlert("Not enough resources...");
    }else{
        // Have res

        // New Upgrade level
        $newDefUpgrade = $defUpgrade + 1;
        // New Gold
        $newGold    = $userGold - $powerLevel[$defUpgrade+1]['goldCost'];

        // SQL UPDATE
        $sql = "UPDATE resources SET userGold='$newGold'
                    WHERE userId = '$user_id';";
        if (mysqli_query($conn, $sql)) {
            // RESOURCE UPDATED SUCSSESFULY

            // UPDATE WEAPONS
            $sql = "UPDATE upgrades SET defUpgrade='$newDefUpgrade'
                    WHERE userId = '$user_id';";
            if(mysqli_query($conn,$sql)){
                // BUYING SUCCSESS
                goodAlert("upgrade complete.");
            }else{
                badAlert("Error updating record: " . mysqli_error($conn));
            }
        } else {
            badAlert("Error updating record: " . mysqli_error($conn));
        }
        // REFRESH THE PAGE - DETAILS
        require ('includes/userDetailsFetch.php');
    }
}

//SPY UPDATE
if(isset($_POST['spyUpgrade']) && $spyUpgrade < sizeof($powerLevel)-1){
    // CHECKS FOR RES
    if($userGold < $powerLevel[$spyUpgrade+1]['goldCost']){
        // Dont have res
        badAlert("Not enough resources...");
    }else{
        // Have res

        // New Upgrade level
        $newSpyUpgrade = $spyUpgrade + 1;
        // New Gold
        $newGold    = $userGold - $powerLevel[$spyUpgrade+1]['goldCost'];

        // SQL UPDATE
        $sql = "UPDATE resources SET userGold='$newGold'
                    WHERE userId = '$user_id';";
        if (mysqli_query($conn, $sql)) {
            // RESOURCE UPDATED SUCSSESFULY

            // UPDATE WEAPONS
            $sql = "UPDATE upgrades SET spyUpgrade='$newSpyUpgrade'
                    WHERE userId = '$user_id';";
            if(mysqli_query($conn,$sql)){
                // BUYING SUCCSESS
                goodAlert("upgrade complete.");
            }else{
                badAlert("Error updating record: " . mysqli_error($conn));
            }
        } else {
            badAlert("Error updating record: " . mysqli_error($conn));
        }
        // REFRESH THE PAGE - DETAILS
        require ('includes/userDetailsFetch.php');
    }
}

// EXP UPDATE
if(isset($_POST['expUpgrade']) && $expUpgrade < sizeof($powerLevel)-1){
    // CHECKS FOR RES
    if($userGold < $powerLevel[$expUpgrade+1]['goldCost']){
        // Dont have res
        badAlert("Not enough resources...");
    }else{
        // Have res

        // New Upgrade level
        $newExpUpgrade = $expUpgrade + 1;
        // New Gold
        $newGold    = $userGold - $powerLevel[$expUpgrade+1]['goldCost'];

        // SQL UPDATE
        $sql = "UPDATE resources SET userGold='$newGold'
                    WHERE userId = '$user_id';";
        if (mysqli_query($conn, $sql)) {
            // RESOURCE UPDATED SUCSSESFULY

            // UPDATE WEAPONS
            $sql = "UPDATE upgrades SET expUpgrade='$newExpUpgrade'
                    WHERE userId = '$user_id';";
            if(mysqli_query($conn,$sql)){
                // BUYING SUCCSESS
                goodAlert("upgrade complete.");
            }else{
                badAlert("Error updating record: " . mysqli_error($conn));
            }
        } else {
            badAlert("Error updating record: " . mysqli_error($conn));
        }
        // REFRESH THE PAGE - DETAILS
        require ('includes/userDetailsFetch.php');
    }
}

// UNTRAINED UPDATE
if(isset($_POST['untrainedUpgrade']) && $untrainedUpgrade < sizeof($untrainedLevel)-1){
    // CHECKS FOR RES
    if($userGold < $untrainedLevel[$untrainedUpgrade+1]['goldCost']
        || $userWood < $untrainedLevel[$untrainedUpgrade+1]['woodCost']
        || $userOre < $untrainedLevel[$untrainedUpgrade+1]['oreCost']){
        // Dont have res
        badAlert("Not enough resources...");
    }else{
        // Have res

        // New Upgrade level
        $newUntrainedUpgrade = $untrainedUpgrade + 1;
        // New res
        $newGold    = $userGold - $untrainedLevel[$untrainedUpgrade+1]['goldCost'];
        $newWood    = $userWood - $untrainedLevel[$untrainedUpgrade+1]['woodCost'];
        $newOre    = $userOre - $untrainedLevel[$untrainedUpgrade+1]['oreCost'];

        // SQL UPDATE
        $sql = "UPDATE resources SET userGold='$newGold', userWood='$newWood', userOre='$newOre'
                    WHERE userId = '$user_id';";
        if (mysqli_query($conn, $sql)) {
            // RESOURCE UPDATED SUCSSESFULY

            // UPDATE WEAPONS
            $sql = "UPDATE upgrades SET untrainedUpgrade='$newUntrainedUpgrade'
                    WHERE userId = '$user_id';";
            if(mysqli_query($conn,$sql)){
                // BUYING SUCCSESS
                goodAlert("upgrade complete.");
            }else{
                badAlert("Error updating record: " . mysqli_error($conn));
            }
        } else {
            badAlert("Error updating record: " . mysqli_error($conn));
        }
        // REFRESH THE PAGE - DETAILS
        require ('includes/userDetailsFetch.php');
    }
}

// WIZDOM UPDATE
if(isset($_POST['wizdomUpgrade']) && $wizdomUpgrade < sizeof($wizdomLevel)-1){
    // CHECKS FOR RES
    if($userGold < $wizdomLevel[$wizdomUpgrade+1]['goldCost']
        || $userWood < $wizdomLevel[$wizdomUpgrade+1]['woodCost']
        || $userOre < $wizdomLevel[$wizdomUpgrade+1]['oreCost']){
        // Dont have res
        badAlert("Not enough resources...");
    }else{
        // Have res

        // New Upgrade level
        $newWizdomUpgrade = $wizdomUpgrade + 1;
        // New res
        $newGold    = $userGold - $wizdomLevel[$wizdomUpgrade+1]['goldCost'];
        $newWood    = $userWood - $wizdomLevel[$wizdomUpgrade+1]['woodCost'];
        $newOre    = $userOre - $wizdomLevel[$wizdomUpgrade+1]['oreCost'];

        // SQL UPDATE
        $sql = "UPDATE resources SET userGold='$newGold', userWood='$newWood', userOre='$newOre'
                    WHERE userId = '$user_id';";
        if (mysqli_query($conn, $sql)) {
            // RESOURCE UPDATED SUCSSESFULY

            // UPDATE WEAPONS
            $sql = "UPDATE upgrades SET wizdomUpgrade='$newWizdomUpgrade'
                    WHERE userId = '$user_id';";
            if(mysqli_query($conn,$sql)){
                // BUYING SUCCSESS
                goodAlert("upgrade complete.");
            }else{
                badAlert("Error updating record: " . mysqli_error($conn));
            }
        } else {
            badAlert("Error updating record: " . mysqli_error($conn));
        }
        // REFRESH THE PAGE - DETAILS
        require ('includes/userDetailsFetch.php');
    }
}
?>