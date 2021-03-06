<?php
$TITLE = "Attack";
include ('userHeader.php');

// ATTACK CALC
require ('attPanelincludes/attPanelCalc.php');

?>

    <h1 id="pageBanner"><?php echo $attackedArmy ?></h1>
    <div class="row">
        <div class="col-md-4 col-sm-6 col-xs-6 tStat-res">
            <table class="attPanel-table">
                <tr>
                    <td rowspan="2"><img class="icon-pic" src="icns/race.png" alt="race"></td>
                    <td class="stat-name">Race</td>
                </tr>
                <tr>
                    <td><?php echo race($attackedRace); ?></td>
                </tr>
            </table>
        </div>
        <div class="col-md-4 col-sm-6 col-xs-6 tStat-res">
            <table class="attPanel-table">
                <tr>
                    <td rowspan="2"><img class="icon-pic" src="icns/rank.png" alt="rank"></td>
                    <td class="stat-name">Rank</td>
                </tr>
                <tr>
                    <td><?php echo $attackedRank ?></td>
                </tr>
            </table>
        </div>
        <div class="col-md-4 col-sm-6 col-xs-6 tStat-res">
            <table class="attPanel-table">
                <tr>
                    <td rowspan="2"><img class="icon-pic" src="icns/gold.png" alt="gold"></td>
                    <td class="stat-name">Gold</td>
                </tr>
                <tr>
                    <td><?php echo $attackedGold; ?></td>
                </tr>
            </table>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4 tStat-res">
            <form action="attackResults.php" method="POST">
                <fieldset class="attPanel AttackPanel">
                    <legend>Attack</legend>
                    <small>* costs <?php echo $attCost; ?> turns.</small><br>
                    <?php
                        if($userTurns < 10){
                            echo "Not enough turns...";
                        }else {?>
                            <button type="submit" name="id_attacked" value="<?php echo $user_attacked_id; ?>">Attack
                            </button>
                            <?php
                        }
                            ?>
                </fieldset>
            </form>
        </div>
        <div class="col-md-4 tStat-res">
            <form action="spyResults.php" method="POST">
                <fieldset class="attPanel SpyPanel">
                    <legend>Spying</legend>
                    <small>* costs <?php echo $spyCost; ?> turns.</small><br>
                    <?php
                    if($userSpy < 1 || $userTurns < 2){
                    echo "1 spy and 2 turns required";
                    }else {?>
                    <button type="submit" name="id_attacked" value="<?php echo $user_attacked_id; ?>">Send Spy</button>
                    <?php
                        }
                            ?>

                </fieldset>
            </form>
        </div>
        <div class="col-md-4 tStat-res">
            <form>
                <fieldset class="attPanel DragonPanel">
                    <legend>Dragon Attack</legend>
                    <small>* costs <?php echo $dragonCost; ?> turns and 1 dragon.</small><br>
                    <button>Attack</button>
                </fieldset>
            </form>
        </div>
    </div>





<?php
include ('userFooter.php');
?>