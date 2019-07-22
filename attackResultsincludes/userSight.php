<?php

$spyLost = (int)($userSpy * $spyLost);

$userNewSpy = $userSpy - $spyLost;

$userNewTurns = $userTurns - $spyCost;

// SQL UPDATE
$sql = "UPDATE resources SET  userTurns='$userNewTurns'
             WHERE userId='$user_id';";
if(mysqli_query($conn,$sql)){
    $sql = "UPDATE units SET userSpy='$userNewSpy' 
             WHERE userId='$user_id';";
    if(mysqli_query($conn,$sql)){
        // ALL SET
        ?>
        <h1 id="BannerRed">Your spy had been caught!</h1>
        <div class="row center">
            <div class="col-md-12 center">
                You lost <span class="red"><?php echo $spyLost; ?></span> Spy...
            </div>
        </div>
        <?php
        // SET CALC ATTACKED AND USER
        require ('includes/userDetailsFetch.php');
    }else{
        badAlert("Error updating record: " . mysqli_error($conn));
    }
}else{
    badAlert("Error updating record: " . mysqli_error($conn));
}

?>