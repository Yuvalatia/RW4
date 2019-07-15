<?php
    // DATABASE CONNECTED
    require ('dbh.php');

    // SET USER ID
    $user_id = $_SESSION['userId'];

    // USER GLOBAL INFO
    $sql     = "SELECT * FROM users WHERE userId = '$user_id'";
    $results = mysqli_query($conn,$sql);
    $row     = mysqli_fetch_assoc($results);

    $_SESSION['userArmy']     = $row['userArmy'];
    $_SESSION['userRace']     = $row['userRace'];
    $_SESSION['userName']     = $row['userName'];
    $_SESSION['userLastName'] = $row['userLastName'];
    $_SESSION['userEmail']    = $row['userEmail'];
    $_SESSION['userPass']     = $row['userPass'];
    $_SESSION['userRank']     = $row['userRank'];
    $_SESSION['userClan']     = $row['userClan'];

    // USER RESOURCES INFO
    $sql     = "SELECT * FROM resources WHERE userId = '$user_id'";
    $results = mysqli_query($conn,$sql);
    $row     = mysqli_fetch_assoc($results);

    $_SESSION['userGold']     = $row['userGold'];
    $_SESSION['userWood']     = $row['userWood'];
    $_SESSION['userOre']      = $row['userOre'];
    $_SESSION['userTurns']    = $row['userTurns'];
    $_SESSION['userDiamonds'] = $row['userDiamonds'];

    // USER UNITS INFO
    $sql     = "SELECT * FROM units WHERE userId = '$user_id'";
    $results = mysqli_query($conn,$sql);
    $row     = mysqli_fetch_assoc($results);

    $_SESSION['userUntrain']  = $row['userUntrain'];
    $_SESSION['userWarriors'] = $row['userWarriors'];
    $_SESSION['userWorkers']  = $row['userWorkers'];
    $_SESSION['userIntlg']    = $row['userIntlg'];
    $_SESSION['userSpy']      = $row['userSpy'];
    $_SESSION['userExp']      = $row['userExp'];
    $_SESSION['userDragons']  = $row['userDragons'];

    // USER WEAPONDS INFO
    $sql     = "SELECT * FROM weaponds WHERE userId = '$user_id'";
    $results = mysqli_query($conn,$sql);
    $row     = mysqli_fetch_assoc($results);

    $_SESSION['wAtt1']  = $row['wAtt1'];
    $_SESSION['wAtt2']  = $row['wAtt2'];
    $_SESSION['wAtt3']  = $row['wAtt3'];
    $_SESSION['wAtt4']  = $row['wAtt4'];
    $_SESSION['wDef1']  = $row['wDef1'];
    $_SESSION['wDef2']  = $row['wDef2'];
    $_SESSION['wDef3']  = $row['wDef3'];
    $_SESSION['wDef4']  = $row['wDef4'];
    $_SESSION['wSpy1']  = $row['wSpy1'];
    $_SESSION['wSpy2']  = $row['wSpy2'];
    $_SESSION['wExp1']  = $row['wExp1'];
    $_SESSION['wExp2']  = $row['wExp2'];

    // USER POWERS INFO
    $sql     = "SELECT * FROM powers WHERE userId = '$user_id'";
    $results = mysqli_query($conn,$sql);
    $row     = mysqli_fetch_assoc($results);

    $_SESSION['userAtt']        = $row['userAtt'];
    $_SESSION['userDef']        = $row['userDef'];
    $_SESSION['userWizdom']     = $row['userWizdom'];
    $_SESSION['userSpying']     = $row['userSpying'];
    $_SESSION['userSight']      = $row['userSight'];
    $_SESSION['userGeneral']    = $row['userGeneral'];












?>