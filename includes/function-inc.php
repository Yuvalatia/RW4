<?php

    // getArmyNameById function
    function getArmyNameById($id){
        require ('dbh.php');
        $sql = "SELECT * FROM users WHERE userId='$id'";
        $results = mysqli_query($conn,$sql) or die(mysqli_error($conn));
        $row = mysqli_fetch_assoc($results);

        return $row['userArmy'];

        }



?>