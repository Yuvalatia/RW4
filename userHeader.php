<?php
include ('header.php');

if(!isset($_SESSION['userId'])){
header("Location: index.php");
exit();
}
?>

<div class="row">
    <div class="col-md-3">
        <div class="container player-menu <?php
        // RACE MENU
        switch ($_SESSION['userRace']){
            case 1 : echo "orc"; break;
            case 2 : echo "human"; break;
            case 3 : echo "elf"; break;
            case 4 : echo "dead"; break;
        }
        ?>-menu">
            <div class="row">
                <div class="col-sm-12 race-pic">

                    <div class="<?php
                    // RACE PIC
                    switch ($_SESSION['userRace']){
                        case 1 : echo "orc"; break;
                        case 2 : echo "human"; break;
                        case 3 : echo "elf"; break;
                        case 4 : echo "dead"; break;
                    }
                    ?>-pic">

                    </div>

                </div>
                <div class="col-sm-12 <?php
                // RACE TITLE
                switch ($_SESSION['userRace']){
                    case 1 : echo "orc"; break;
                    case 2 : echo "human"; break;
                    case 3 : echo "elf"; break;
                    case 4 : echo "dead"; break;
                }
                ?>-title">
                    <?php
                    switch ($_SESSION['userRace']){
                        case 1 : echo "For The Horde !!"; break;
                        case 2 : echo "Humanity Shall Not Fall !"; break;
                        case 3 : echo "The Nature is RestLess"; break;
                        case 4 : echo "The Dead Stand Ready"; break;
                    }
                    ?>
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
