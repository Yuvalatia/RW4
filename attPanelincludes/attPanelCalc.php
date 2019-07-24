<?php

// SQL highest ID army
$sql       = "SELECT userId,userRank from users WHERE userRank != '0' ORDER BY userId DESC;";
$results1   = mysqli_query($conn,$sql);
$row1       = mysqli_fetch_assoc($results1);
$taragetId = $row1['userId'];

if(!isset($_GET['armyId']) || !preg_match($numbers,$_GET['armyId']) || $_GET['armyId'] > $taragetId){
        header("Location: attack.php");
    }else{
        if($_GET['armyId'] == $user_id){
            header("Location: attack.php");
        }else{
            $user_attacked_id = $_GET['armyId'];
            // Attacked user detail fetch
            $sql     = "SELECT * FROM users WHERE userId = '$user_attacked_id'";
            $results = mysqli_query($conn,$sql);
            $row     = mysqli_fetch_assoc($results);

            $attackedArmy      = $row['userArmy'];
            $attackedRace      = $row['userRace'];
            $attackedRank      = $row['userRank'];

            $sql     = "SELECT * FROM resources WHERE userId = '$user_attacked_id'";
            $results = mysqli_query($conn,$sql);
            $row     = mysqli_fetch_assoc($results);

            $attackedGold = $row['userGold'];


        }
    }


?>