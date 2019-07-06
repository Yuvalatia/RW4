<?php
    // AFTER USER REGISTERED
    // MAKE ALL VARIABLES FOR EVERY TABLE UNIQUE ROW TO THE NEW USER


    // GET THE USER ID
    $sql = "SELECT userId FROM users WHERE userArmy='$username'";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($result);
    $userId = $row['userId'];


    //INSERT DEFAULT RESOURCES
    $sql ="INSERT INTO resources (userId, userGold, userWood, userOre, userTurns)
           VALUES ('$userId', '500', '300', '300', '100')";
    mysqli_query($conn,$sql);

    //INSERT DEFAULT UNITS
    // userUntrain	userWarriors	userWorkers	userIntlg	userSpy	userExp
    $sql ="INSERT INTO units (userId, userUntrain, userWarriors, userWorkers, userIntlg, userSpy, userExp)
           VALUES ('$userId', '120', '0', '0', '0', '0', '0')";
    mysqli_query($conn,$sql);

    //INSERT DEFAULT POWERS
    // userId	userAtt	userDef	userWizdom	userSpying	userSight
    $sql ="INSERT INTO powers (userId, userAtt, userDef, userWizdom, userSpying, userSight)
           VALUES ('$userId', '0', '0', '0', '0', '0')";
    mysqli_query($conn,$sql);

    //INSERT DEFAULT WEAPONDS
    // userId	wAtt1	wAtt2	wAtt3	wAtt4	wDef1	wDef2	wDef3	wDef4
    $sql ="INSERT INTO weaponds (userId, wAtt1, wAtt2, wAtt3, wAtt4, wDef1, wDef2, wDef3, wDef4)
               VALUES ('$userId', '0', '0', '0', '0', '0', '0', '0', '0')";
    mysqli_query($conn,$sql);




?>