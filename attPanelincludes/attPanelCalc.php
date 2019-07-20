<?php



if(!isset($_GET['armyId'])){
        header("Location: attack.php");
    }else{
        if($_GET['armyId'] == $user_id){
            header("Location: attack.php");
        }else{
            $user_attacked_id = $_GET['armyId'];


        }
    }


?>