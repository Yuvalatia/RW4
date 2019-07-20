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
        switch ($userRace){
            case 0 : echo "orc"; break;
            case 1 : echo "human"; break;
            case 2 : echo "elf"; break;
            case 3 : echo "dead"; break;
        }
        ?>-menu">
            <div class="row">
                <div class="col-sm-12 race-pic">

                    <div class="<?php
                    // RACE PIC
                    switch ($userRace){
                        case 0 : echo "orc"; break;
                        case 1 : echo "human"; break;
                        case 2 : echo "elf"; break;
                        case 3 : echo "dead"; break;
                    }
                    ?>-pic">

                    </div>

                </div>
                <div class="col-sm-12 <?php
                // RACE TITLE
                switch ($userRace){
                    case 0 : echo "orc"; break;
                    case 1 : echo "human"; break;
                    case 2 : echo "elf"; break;
                    case 3 : echo "dead"; break;
                }
                ?>-title">
                    <?php
                    switch ($userRace){
                        case 0 : echo "For The Horde !!"; break;
                        case 1 : echo "Humanity Shall Not Fall !"; break;
                        case 2 : echo "The Nature is RestLess"; break;
                        case 3 : echo "The Dead Stand Ready"; break;
                    }
                    ?>
                    <hr class="menu-line">
                </div>
                <div class="col-sm-12">
                    <ul class="list-group">
                        <li class="list-group-item <?php
                        // active link
                        if($TITLE == "Base"){
                            echo "actived";
                        }
                        ?>"><a href="base.php">Base</a></li>
                        <li class="list-group-item <?php
                        // active link
                        if($TITLE == "Attack"){
                            echo "actived";
                        }
                        ?>"><a href="attack.php?page=<?php echo (int)($userRank/$armysInPage); ?>">Attack</a></li>
                        <li class="list-group-item <?php
                        // active link
                        if($TITLE == "Clan"){
                            echo "actived";
                        }
                        ?>"><a href="base.php">Clan</a></li>
                        <li class="list-group-item <?php
                        // active link
                        if($TITLE == "Training"){
                            echo "actived";
                        }
                        ?>"><a href="train.php">Training</a></li>
                        <li class="list-group-item <?php
                        // active link
                        if($TITLE == "Hero"){
                            echo "actived";
                        }
                        ?>"><a href="base.php">Hero</a></li>
                        <li class="list-group-item <?php
                        // active link
                        if($TITLE == "Upgrade"){
                            echo "actived";
                        }
                        ?>"><a href="upgrade.php">Upgrade</a></li>
                        <li class="list-group-item <?php
                        // active link
                        if($TITLE == "Store"){
                            echo "actived";
                        }
                        ?>"><a href="store.php">Store</a></li>
                        <li class="list-group-item <?php
                        // active link
                        if($TITLE == "Bank"){
                            echo "actived";
                        }
                        ?>"><a href="base.php">Bank</a></li>
                        <li class="list-group-item <?php
                        // active link
                        if($TITLE == "History"){
                            echo "actived";
                        }
                        ?>"><a href="base.php">History</a></li>

                    </ul>
                </div>
            </div>
        </div>

    </div>
    <div class="col-md-9">
