<?php
$TITLE = "Base";
include ('header.php');

if(!isset($_SESSION['userId'])){
    header("Location: index.php");
    exit();
}
?>

    <div class="row">
        <div class="col-md-3">
            <div class="container player-menu human-menu">
                <div class="row">
                    <div class="col-sm-12 race-pic">

                     <!--   <div class="orc-pic">

                        </div> -->
                        <div class="human-pic">

                        </div>

                    </div>
                    <!--
                    <div class="col-sm-12 orc-title">
                        For The Horde !!!
                        <hr class="menu-line">
                    </div>
                    -->
                    <div class="col-sm-12 human-title">
                        Humanity Shall Not Fall !
                        <hr class="menu-line">
                    </div>
                    <div class="col-sm-12">
                        <ul class="list-group">
                            <li class="list-group-item"><a href="base.php">Base</a></li>
                            <li class="list-group-item"><a href="base.php">Attack</a></li>
                            <li class="list-group-item"><a href="base.php">Clan</a></li>
                            <li class="list-group-item"><a href="base.php">Training</a></li>
                            <li class="list-group-item"><a href="base.php">Developing</a></li>
                            <li class="list-group-item"><a href="base.php">Store</a></li>
                            <li class="list-group-item"><a href="base.php">History</a></li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
        <div class="col-md-9">

            <?php


            echo $_SESSION['userId'];
            $id = $_SESSION['userId'];
            echo $_SESSION['userArmy'];

            echo "Untrained: ".$_SESSION['userUntrain'];
            echo "Warriors: ".$_SESSION['userWarriors'];
            echo "Workers: ".$_SESSION['userWorkers'];
            echo "wisdom: ".$_SESSION['userWizdom'];
            echo "little sowrd 1: ". $_SESSION['wAtt1'];
            ?>
        </div>
    </div>




<?php
include ('footer.php');
?>
