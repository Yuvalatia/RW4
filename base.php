<?php
$TITLE = "Base";
include ('userHeader.php');
?>
            <?php


            echo $_SESSION['userId'];
            $id = $_SESSION['userId'];
            echo $_SESSION['userArmy'];

            echo "race: ".$_SESSION['userRace'];
            echo "Warriors: ".$_SESSION['userWarriors'];
            echo "Workers: ".$_SESSION['userWorkers'];
            echo "wisdom: ".$_SESSION['userWizdom'];
            echo "little sowrd 1: ". $_SESSION['wAtt1'];
            ?>




<?php
include ('userFooter.php');
?>
