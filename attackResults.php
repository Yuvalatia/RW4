<?php
$TITLE = "Attack Results";
include ('userHeader.php');

if(!isset($_POST['id_attacked']) || $userTurns < 10){
    header("Location: attack.php");
}else{
    $id_attacked = $_POST['id_attacked'];

    // SQL DATA ATTACKED USER FETCH
    require ('attackResultsincludes/attackedFetch.php');

    // SET CurrentTime
    date_default_timezone_set("Asia/Jerusalem");
    $cuurentDate = date("Y-m-d h:i:sa");

    // CHECKS WHO WIN
    if($userAtt > $attackedDef){
        // USER WON
        require ('attackResultsincludes/userWon.php');

    }else{
        // USER LOST
        require ('attackResultsincludes/userLose.php');
    }
}

?>




<?php
include ('userFooter.php');
?>
