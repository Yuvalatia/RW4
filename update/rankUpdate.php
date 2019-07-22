<?php


    // Rank update
    $rank = 1;


    $sql = "SELECT * FROM powers ORDER BY userGeneral DESC;";
    $results = mysqli_query($conn,$sql) or die(mysqli_error($conn));
    while($row = $results->fetch_assoc()){
        $userIdRank = $row['userId'];

        $sql = "UPDATE users SET userRank='$rank' WHERE userId='$userIdRank'";
        if(mysqli_query($conn,$sql)){
            // SUCCSESS

        }else{
            badAlert("Error updating record: " . mysqli_error($conn));
        }
        $rank++;
    }

?>






