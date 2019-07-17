<?php

    // TRAINING CALC

if(isset($_POST['submitTrain'])){
    // FEATCH DATA FROM FORM
    $warriors = $_POST['warriorCount'];
    $workers  = $_POST['workerCount'];
    $intlgs   = $_POST['intlgCount'];
    $spies    = $_POST['spyCount'];
    $exps     = $_POST['expCount'];

    // GOLD + UNTRAINED NEEDED

    $unTrainedNeeded = $warriors + $workers + $intlgs + $spies + $exps;

    $goldNeeded      = ($warriors * $warriorPrice) + ($workers * $workerPrice) + ($intlgs * $intlgPrice)
                     + ($spies * $spyPrice) + ($exps * $expPrice);

    // Checks for resorces AVAILAVE
    if($goldNeeded > $userGold || $unTrainedNeeded > $userUntrain){
        badAlert("Not enough untrained units or gold.");
    }else{
        // Have Resources

        // CALC NEW GOLD AND UNITS
        $newUntrain = $userUntrain - $unTrainedNeeded;
        $newGold    = $userGold - $goldNeeded;

        // CALC NEW UNITS
        $newWarriors = $userWarriors + $warriors;
        $newWorkers  = $userWorkers  + $workers;
        $newIntlg    = $userIntlg    + $intlgs;
        $newSpy      = $userSpy      + $spies;
        $newExp      = $userExp      + $exps;

        // SQL UPDATE
        $sql = "UPDATE resources SET userGold='$newGold'
                    WHERE userId = '$user_id';";
        if (mysqli_query($conn, $sql)) {
            // RESOURCE UPDATED SUCSSESFULY

            // UPDATE WEAPONS
            $sql = "UPDATE units SET userUntrain='$newUntrain', userWarriors='$newWarriors', userWorkers='$newWorkers',
                    userIntlg='$newIntlg', userSpy='$newSpy', userExp='$newExp' 
                    WHERE userId = '$user_id';";
            if(mysqli_query($conn,$sql)){
                // BUYING SUCCSESS
                goodAlert("units trained successfully.");
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