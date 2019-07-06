<?php
$TITLE = "Base";
include ('header.php');

if(!isset($_SESSION['userId'])){
    header("Location: index.php");
    exit();
}
?>

<?php
require ('includes/dbh.php');

    echo $_SESSION['userId'];
    $id = $_SESSION['userId'];
    echo $_SESSION['userArmy'];

    echo "Untrained: ".$_SESSION['userUntrain'];
    echo "Warriors: ".$_SESSION['userWarriors'];
    echo "Workers: ".$_SESSION['userWorkers'];
    echo "wisdom: ".$_SESSION['userWizdom'];
    echo "little sowrd 1: ". $_SESSION['wAtt1'];
?>


<?php
include ('footer.php');
?>
