<?php
$TITLE = "Spy Results";
include ('userHeader.php');

if(!isset($_POST['id_attacked']) || $userSpy < 1 || $userTurns < 2){
    header("Location: attack.php");
}else{
    $id_attacked = $_POST['id_attacked'];

    // SQL DATA ATTACKED USER FETCH
    require ('attackResultsincludes/attackedFetch.php');

    // CHECKS WHO WIN
    if($userSpying > $attackedSight){
        // USER WON
        require ('attackResultsincludes/userSpy.php');
    }else{
        // USER LOST
        require ('attackResultsincludes/userSight.php');
    }
}

?>




<?php
include ('userFooter.php');
?>
