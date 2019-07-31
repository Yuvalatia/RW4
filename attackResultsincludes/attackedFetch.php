<?php
    //$id_attacked

    $sql     = "SELECT * FROM users WHERE userId = '$id_attacked'";
    $results = mysqli_query($conn,$sql);
    $row     = mysqli_fetch_assoc($results);

    $attackedArmy     = $row['userArmy'];
    $attackedRace     = $row['userRace'];

    $sql     = "SELECT * FROM resources WHERE userId = '$id_attacked'";
    $results = mysqli_query($conn,$sql);
    $row     = mysqli_fetch_assoc($results);

    $attackedGold     = $row['userGold'];
    $attackedWood     = $row['userWood'];
    $attackedOre      = $row['userOre'];

    $sql     = "SELECT * FROM units WHERE userId = '$id_attacked'";
    $results = mysqli_query($conn,$sql);
    $row     = mysqli_fetch_assoc($results);

    $attackedWarriors = $row['userWarriors'];
    $attackedUntrain  = $row['userUntrain'];
    $attackedWorkers  = $row['userWorkers'];
    $attackedIntlg    = $row['userIntlg'];
    $attackedSpy      = $row['userSpy'];
    $attackedExp      = $row['userExp'];
    $attackedDragons  = $row['userDragons'];

    $sql     = "SELECT * FROM powers WHERE userId = '$id_attacked'";
    $results = mysqli_query($conn,$sql);
    $row     = mysqli_fetch_assoc($results);

    $attackedAtt        = $row['userAtt'];
    $attackedDef        = $row['userDef'];
    $attackedWizdom     = $row['userWizdom'];
    $attackedSpying     = $row['userSpying'];
    $attackedSight      = $row['userSight'];
    $attackedGeneral    = $row['userGeneral'];

    $sql     = "SELECT * FROM bank WHERE userId = '$id_attacked'";
    $results = mysqli_query($conn,$sql);
    $row     = mysqli_fetch_assoc($results);

    $attackedGoldInBank = $row['bankGold'];


?>