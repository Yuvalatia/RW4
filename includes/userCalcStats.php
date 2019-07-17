<?php

    $attPresent = $attUpgrade * 0.1;
    $defPresent = $defUpgrade * 0.1;
    $spyPresent = $spyUpgrade * 0.1;
    $expPresent = $expUpgrade * 0.1;

    $wAttPower  = ($wAtt1*$s1) + ($wAtt2*$s2) + ($wAtt3*$s3) + ($wAtt4*$s4);
    $wDefPower  = ($wDef1*$s1) + ($wDef2*$s2) + ($wDef3*$s3) + ($wDef4*$s4);
    $wSpyPower  = ($wSpy1*$s3) + ($wSpy2*$s4);
    $wExpPower  = ($wExp1*$s3) + ($wExp2*$s4);

    $Att        = $wAttPower*$userWarriors;
    $Def        = $wDefPower*$userWarriors;
    $Spy        = $wSpyPower*$userSpy;
    $Exp        = $wExpPower*$userExp;

    $newUserAtt = $Att + ($Att * $attPresent);
    $newUserDef = $Def + ($Def * $defPresent);
    $newUserSpy = $Spy + ($Spy * $spyPresent);
    $newUserExp = $Exp + ($Exp * $expPresent);

    $newUserGeneral = ($newUserAtt + $newUserDef + $newUserSpy + $newUserExp)/4;

    // SQL UPDATE
    $sql  = "UPDATE powers SET userAtt='$newUserAtt', userDef='$newUserDef', userSpying='$newUserSpy', userSight='$newUserExp',
             userGeneral='$newUserGeneral' WHERE userId='$user_id'";
    if (mysqli_query($conn, $sql)) {
        // SS
    }else{
        //BB
        badAlert("Error updating record: " . mysqli_error($conn));
    }

    // RE-FETCH
    // USER POWERS INFO
    $sql     = "SELECT * FROM powers WHERE userId = '$user_id'";
    $results = mysqli_query($conn,$sql);
    $row     = mysqli_fetch_assoc($results);

    $userAtt        = $row['userAtt'];
    $userDef        = $row['userDef'];
    $userSpying     = $row['userSpying'];
    $userSight      = $row['userSight'];
    $userGeneral    = $row['userGeneral'];
?>