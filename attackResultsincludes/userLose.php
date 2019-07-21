<?php

$warriorLost = (int)($userWarriors * $warriorsLost);

$userNewWarriors = $userWarriors - $warriorLost;

$userNewTurns = $userTurns - $attCost;

    // SQL UPDATE
    $sql = "UPDATE resources SET  userTurns='$userNewTurns'
             WHERE userId='$user_id';";
    if(mysqli_query($conn,$sql)){
        $sql = "UPDATE units SET userWarriors='$userNewWarriors' 
             WHERE userId='$user_id';";
        if(mysqli_query($conn,$sql)){
            // ALL SET
            ?>
            <h1 id="BannerRed">You Lose!</h1>
            <div class="row center">
                <div class="col-md-6 center">
                    Your Attack Power: <span class="green"><?php echo $userAtt; ?></span><br>
                    Your Clan Add Power: <br/>
                    Total Attack Power: <span class="green"><?php echo $userAtt; ?></span>
                </div>
                <div class="col-md-6 center">
                    <?php echo $attackedArmy; ?> Defence Power: <span class="red"><?php echo $attackedDef; ?></span> <br>
                    His Clan Add Power: <br/>
                    Total Defence Power: <span class="red"><?php echo $attackedDef; ?></span>
                </div>
                <div class="col-md-12 center">
                    Your Warriors Killed: <span class="red"><?php echo $warriorLost; ?></span><br>
                </div>
            </div>
            <?php
            // SET CALC ATTACKED AND USER
            require ('includes/userDetailsFetch.php');
        }else{
            badAlert("Error updating record: " . mysqli_error($conn));
        }
    }else{
        badAlert("Error updating record: " . mysqli_error($conn));
    }

?>