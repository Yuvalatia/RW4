<?php




$sql       = "SELECT * FROM resources ORDER BY userId DESC;";
$results   = mysqli_query($conn,$sql) or die(mysqli_error($conn));
while($row = $results->fetch_assoc()){

    $userIdRank = $row['userId'];

    $userGold   = $row['userGold'];
    $userWood   = $row['userWood'];
    $userOre    = $row['userOre'];
    $userTurns  = $row['userTurns'];

    $sql1      = "SELECT * FROM units WHERE userId='$userIdRank';";
    $results1  = mysqli_query($conn,$sql1) or die(mysqli_error($conn));
    $rowInner = mysqli_fetch_assoc($results1);

    $userWorkers  = $rowInner['userWorkers'];
    $userIntlg    = $rowInner['userIntlg'];
    $userUntrain  = $rowInner['userUntrain'];

    $sql1      = "SELECT * FROM upgrades WHERE userId='$userIdRank';";
    $results1  = mysqli_query($conn,$sql1) or die(mysqli_error($conn));
    $rowInner = mysqli_fetch_assoc($results1);

    $goldUpgrade           = $rowInner['goldUpgrade'];
    $woodUpgrade           = $rowInner['woodUpgrade'];
    $oreUpgrade            = $rowInner['oreUpgrade'];
    $turnsUpgrade          = $rowInner['turnsUpgrade'];
    $wizdomUpgrade         = $rowInner['wizdomUpgrade'];
    $untrainedUpgrade      = $rowInner['untrainedUpgrade'];

    $sql1      = "SELECT * FROM powers WHERE userId='$userIdRank';";
    $results1  = mysqli_query($conn,$sql1) or die(mysqli_error($conn));
    $rowInner = mysqli_fetch_assoc($results1);

    $userWizdom     = $rowInner['userWizdom'];

    // CALC NEW STATS
    $userNewGold  = $userGold + ($userWorkers * $goldLevel[$goldUpgrade]['perUpdate']);
    $userNewWood  = $userWood + ($userWorkers * $woodLevel[$woodUpgrade]['perUpdate']);
    $userNewOre   = $userOre + ($userWorkers * $oreLevel[$oreUpgrade]['perUpdate']);
    $userNewTurns = $userTurns + $turnsLevel[$turnsUpgrade]['perUpdate'];

    // CALC untrained
    $userNewUntrained = $userUntrain + $untrainedLevel[$untrainedUpgrade]['perUpdate'];

    // CALC wisdom points
    $userNewWizdom    = $userWizdom + ($userIntlg * $wizdomLevel[$wizdomUpgrade]['perUpdate']);

    // SQL IN NEW STATS
    $sql1 = "UPDATE resources SET userGold='$userNewGold', userWood='$userNewWood', userOre='$userNewOre', userTurns='$userNewTurns'
            WHERE userId='$userIdRank';";
    if(mysqli_query($conn,$sql1)){
        $sql1 = "UPDATE units SET userUntrain='$userNewUntrained' 
            WHERE userId='$userIdRank';";
        if(mysqli_query($conn,$sql1)){
            $sql1 = "UPDATE powers SET userWizdom='$userNewWizdom' 
            WHERE userId='$userIdRank';";
            if(mysqli_query($conn,$sql1)){

            }else{
                badAlert("Error updating record: " . mysqli_error($conn));
            }
        }else{
            badAlert("Error updating record: " . mysqli_error($conn));
        }
    }else{
        badAlert("Error updating record: " . mysqli_error($conn));
    }
}

?>