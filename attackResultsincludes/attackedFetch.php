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

    $sql     = "SELECT userWarriors FROM units WHERE userId = '$id_attacked'";
    $results = mysqli_query($conn,$sql);
    $row     = mysqli_fetch_assoc($results);

    $attackedWarriors = $row['userWarriors'];

    $sql     = "SELECT userDef FROM powers WHERE userId = '$id_attacked'";
    $results = mysqli_query($conn,$sql);
    $row     = mysqli_fetch_assoc($results);

    $attackedDef        = $row['userDef'];


?>