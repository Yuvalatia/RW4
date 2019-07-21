<?php

// SET USER ID

// USER GLOBAL INFO
$sql     = "SELECT * FROM users WHERE userId = '$id_attacked'";
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
$sql     = "SELECT * FROM resources WHERE userId = '$id_attacked'";
$results = mysqli_query($conn,$sql);
$row     = mysqli_fetch_assoc($results);

$userGold     = $row['userGold'];
$userWood     = $row['userWood'];
$userOre      = $row['userOre'];
$userTurns    = $row['userTurns'];
$userDiamonds = $row['userDiamonds'];

// USER UNITS INFO
$sql     = "SELECT * FROM units WHERE userId = '$id_attacked'";
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
$sql     = "SELECT * FROM weaponds WHERE userId = '$id_attacked'";
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
$sql     = "SELECT * FROM powers WHERE userId = '$id_attacked'";
$results = mysqli_query($conn,$sql);
$row     = mysqli_fetch_assoc($results);

$userAtt        = $row['userAtt'];
$userDef        = $row['userDef'];
$userWizdom     = $row['userWizdom'];
$userSpying     = $row['userSpying'];
$userSight      = $row['userSight'];
$userGeneral    = $row['userGeneral'];

// USER UPGRADES INFO
$sql     = "SELECT * FROM upgrades WHERE userId = '$id_attacked'";
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
$untrainedUpgrade      = $row['untrainedUpgrade'];

// ----------------------

$attPresent = $powerLevel[$attUpgrade]['perUpdate'];
$defPresent = $powerLevel[$defUpgrade]['perUpdate'];
$spyPresent = $powerLevel[$spyUpgrade]['perUpdate'];
$expPresent = $powerLevel[$expUpgrade]['perUpdate'];

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
             userGeneral='$newUserGeneral' WHERE userId='$id_attacked'";
if (mysqli_query($conn, $sql)) {
    // SS
}else{
    //BB
    badAlert("Error updating record: " . mysqli_error($conn));
}










?>