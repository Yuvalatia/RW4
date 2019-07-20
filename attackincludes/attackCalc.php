<?php

if(!isset($_GET['page'])){
    header("Location: base.php");
}else{
    // GET ARMY GOLD FUNCTION
    function getArmyGold($id){
        require ('includes/dbh.php');
        $sql     = "SELECT userGold FROM resources WHERE userId='$id';";
        $results = mysqli_query($conn,$sql);
        $row     = mysqli_fetch_assoc($results);

        return $row['userGold'];
        mysqli_close($conn);
    }

    // MAX PAGES CALC
    $rankedUsers = 0;
    $sql = "SELECT * from users";
    $results = mysqli_query($conn,$sql);
    while($row = $results->fetch_assoc()){
        if($row['userRank'] > 0){
            $rankedUsers++;
        }
    }
    $maxPage = (int)($rankedUsers/$armysInPage);

    // SET PAGE
    $page = $_GET['page'];
}

?>