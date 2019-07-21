<?php

    $goldWon = (int)($attackedGold * $goldEarnd);
    $woodWon = (int)($attackedWood * $woodEarnd);
    $oreWon  = (int)($attackedOre * $oreEarnd);
    $warriorLost = (int)($attackedWarriors * $warriorsLost);

    $attackedNewGold     = $attackedGold - $goldWon;
    $attackedNewWood     = $attackedWood - $woodWon;
    $attackedNewOre      = $attackedOre - $oreWon;
    $attackedNewWarriors = $attackedWarriors - $warriorLost;

    $userNewGold  = $userGold + $goldWon;
    $userNewWood  = $userWood + $woodWon;
    $userNewOre   = $userOre  + $oreWon;
    $userNewTurns = $userTurns - $attCost;

    // SQL UPDATE
    $sql = "UPDATE resources SET userGold='$attackedNewGold', userWood='$attackedNewWood', userOre='$attackedNewOre'
             WHERE userId='$id_attacked';";
    if(mysqli_query($conn,$sql)){
        $sql = "UPDATE resources SET userGold='$userNewGold', userWood='$userNewWood', userOre='$userNewOre', userTurns='$userNewTurns'
             WHERE userId='$user_id';";
        if(mysqli_query($conn,$sql)){
            $sql = "UPDATE units SET userWarriors='$attackedNewWarriors' 
             WHERE userId='$id_attacked';";
            if(mysqli_query($conn,$sql)){
                // ALL SET
                ?>
                <h1 id="BannerGreen">You Won!</h1>
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
                        Gold Earned: <span class="green"><?php echo $goldWon; ?></span><br>
                        Wood Earned: <span class="green"><?php echo $woodWon; ?></span><br>
                        Ore Earned: <span class="green"><?php echo $oreWon; ?></span><br>
                        <?php echo $attackedArmy; ?> Warriors Killed: <span class="green"><?php echo $warriorLost; ?></span><br>
                    </div>
                </div>
                <?php
                // SET CALC ATTACKED AND USER
                require ('attackResultsincludes/attackedCalcStats.php');
                require ('includes/userDetailsFetch.php');
            }else{
                badAlert("Error updating record: " . mysqli_error($conn));
            }
        }else{
            badAlert("Error updating record: " . mysqli_error($conn));
        }
    }else{
        badAlert("Error updating record: " . mysqli_error($conn));
    }
?>