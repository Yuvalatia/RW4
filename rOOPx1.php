<?php
    require ('includes/dbh.php');

// RESET PAGE
    $sql       = "SELECT * FROM users;";
    $results   = mysqli_query($conn,$sql) or die(mysqli_error($conn));
    echo "fgfg.";
    while($row = $results->fetch_assoc()){
        $user_id = $row['userId'];

        $sql1 ="UPDATE users SET userRank='0' WHERE userId='$user_id';";
        if(mysqli_query($conn,$sql1)){
            echo "ff";
        }else{
            echo "ffdfdfs";
        }

        $sql1 ="UPDATE resources SET userGold='2500', userWood='1000', userOre='1000', userTurns='100', userDiamonds='0'
           WHERE userId='$user_id'";
        mysqli_query($conn,$sql1);

        //INSERT DEFAULT UNITS

        // userUntrain	userWarriors	userWorkers	userIntlg	userSpy	userExp
        $sql1 ="UPDATE units SET userUntrain='80', userWarriors='1', userWorkers='20', userIntlg='0', userSpy='0', userExp='0', userDragons='0'
            WHERE userId='$user_id'";
        mysqli_query($conn,$sql1) or die(mysqli_error($conn));

        //INSERT DEFAULT POWERS
        // userId	userAtt	userDef	userWizdom	userSpying	userSight
        $sql1 ="UPDATE powers SET userAtt='0', userDef='0', userWizdom='0', userSpying='0', userSight='0', userGeneral='0'
            WHERE userId='$user_id'";
        mysqli_query($conn,$sql1) or die(mysqli_error($conn));

        //INSERT DEFAULT WEAPONDS
        // userId	wAtt1	wAtt2	wAtt3	wAtt4	wDef1	wDef2	wDef3	wDef4
        $sql1 ="UPDATE weaponds SET wAtt1='0', wAtt2='0', wAtt3='0', wAtt4='0', wDef1='0', wDef2='0', wDef3='0', wDef4='0', wSpy1='0', wSpy2='0', wExp1='0', wExp2='0'
                 WHERE userId='$user_id'";
        mysqli_query($conn,$sql1) or die(mysqli_error($conn));

        //INSERT DEFAULT UPGRADES
        //userId	goldUpgrade	woodUpgrade	oreUpgrade	turnsUpgrade	attUpgrade	defUpgrade	spyUpgrade	expUpgrade	wizdomUpgrade	dragonsUpgrade
        $sql1 ="UPDATE upgrades SET goldUpgrade='0', woodUpgrade='0', oreUpgrade='0', turnsUpgrade='0', attUpgrade='0', defUpgrade='0', spyUpgrade='0', expUpgrade='0', wizdomUpgrade='0', dragonsUpgrade='0', untrainedUpgrade='0'
                  WHERE userId='$user_id'";
        mysqli_query($conn,$sql1) or die(mysqli_error($conn));

    }


?>