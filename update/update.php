<?php
    // DATABASE CONNECT
    require ('../includes/dbh.php');

    // INCLUDE gameStats
    require ('../includes/gameStats.php');

    //UPDATES
    require ('rankUpdate.php');
    require ('resUpdate.php');



    mysqli_close($conn);
?>