<?php
    // DATABASE CONNECTED
    require ('dbh.php');

    // SET USER ID
    $user_id = $_SESSION['userId'];

    // USER GLOBAL INFO
    $sql     = "SELECT * FROM users WHERE userId = '$user_id'";
    $results = mysqli_query($conn,$sql);
    $row     = mysqli_fetch_assoc($results);

    $userArmy     = $row['userArmy'];
    $userRace     = $row['userRace'];
    $_userName    = $row['userName'];
    $userLastName = $row['userLastName'];
    $userEmail    = $row['userEmail'];
    $userPass     = $row['userPass'];
    $userRank     = $row['userRank'];
    $userClan     = $row['userClan'];

    // USER RESOURCES INFO
    $sql     = "SELECT * FROM resources WHERE userId = '$user_id'";
    $results = mysqli_query($conn,$sql);
    $row     = mysqli_fetch_assoc($results);

    $userGold     = $row['userGold'];
    $userWood     = $row['userWood'];
    $userOre      = $row['userOre'];
    $userTurns    = $row['userTurns'];
    $userDiamonds = $row['userDiamonds'];

    // USER UNITS INFO
    $sql     = "SELECT * FROM units WHERE userId = '$user_id'";
    $results = mysqli_query($conn,$sql);
    $row     = mysqli_fetch_assoc($results);

    $userUntrain  = $row['userUntrain'];
    $userWarriors = $row['userWarriors'];
    $userWorkers  = $row['userWorkers'];
    $userIntlg    = $row['userIntlg'];
    $userSpy      = $row['userSpy'];
    $userExp      = $row['userExp'];
    $userDragons  = $row['userDragons'];

    // USER WEAPONDS INFO
    $sql     = "SELECT * FROM weaponds WHERE userId = '$user_id'";
    $results = mysqli_query($conn,$sql);
    $row     = mysqli_fetch_assoc($results);

    $wAtt1  = $row['wAtt1'];
    $wAtt2  = $row['wAtt2'];
    $wAtt3  = $row['wAtt3'];
    $wAtt4  = $row['wAtt4'];
    $wDef1  = $row['wDef1'];
    $wDef2  = $row['wDef2'];
    $wDef3  = $row['wDef3'];
    $wDef4  = $row['wDef4'];
    $wSpy1  = $row['wSpy1'];
    $wSpy2  = $row['wSpy2'];
    $wExp1  = $row['wExp1'];
    $wExp2  = $row['wExp2'];

    // USER POWERS INFO
    $sql     = "SELECT * FROM powers WHERE userId = '$user_id'";
    $results = mysqli_query($conn,$sql);
    $row     = mysqli_fetch_assoc($results);

    $userAtt        = $row['userAtt'];
    $userDef        = $row['userDef'];
    $userWizdom     = $row['userWizdom'];
    $userSpying     = $row['userSpying'];
    $userSight      = $row['userSight'];
    $userGeneral    = $row['userGeneral'];

    // USER UPGRADES INFO
    $sql     = "SELECT * FROM upgrades WHERE userId = '$user_id'";
    $results = mysqli_query($conn,$sql);
    $row     = mysqli_fetch_assoc($results);

    $goldUpgrade           = $row['goldUpgrade'];
    $woodUpgrade           = $row['woodUpgrade'];
    $oreUpgrade            = $row['oreUpgrade'];
    $turnsUpgrade          = $row['turnsUpgrade'];
    $attUpgrade            = $row['attUpgrade'];
    $defUpgrade            = $row['defUpgrade'];
    $spyUpgrade            = $row['spyUpgrade'];
    $expUpgrade            = $row['expUpgrade'];
    $wizdomUpgrade         = $row['wizdomUpgrade'];
    $dragonsUpgrade        = $row['dragonsUpgrade'];


    // USER CALC STATS
    require ('userCalcStats.php');











?>