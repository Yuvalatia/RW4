<?php
$TITLE = "Base";
include ('userHeader.php');
?>


    <div class="row res-table">
        <div class="col-xs-6 col-md-3  tStat-res">
            <table>
                <tr>
                    <td rowspan="2"><img class="icon-pic" src="icons/gold.png" alt="gold"></td>
                    <td class="stat-name">Gold</td>
                </tr>
                <tr>
                    <td><?php echo $_SESSION['userGold']; ?></td>
                </tr>
            </table>
        </div>
        <div class="col-xs-6 col-md-3 tStat-res">
            <table>
                <tr>
                    <td rowspan="2"><img class="icon-pic" src="icons/wood.png" alt="wood"></td>
                    <td class="stat-name">Wood</td>
                </tr>
                <tr>
                    <td><?php echo $_SESSION['userWood']; ?></td>
                </tr>
            </table>
        </div>
        <div class="col-xs-6 col-md-3 tStat-res">
            <table>
                <tr>
                    <td rowspan="2"><img class="icon-pic" src="icons/ore.png" alt="ore"></td>
                    <td class="stat-name">Ore</td>
                </tr>
                <tr>
                    <td><?php echo $_SESSION['userOre']; ?></td>
                </tr>
            </table>
        </div>
        <div class="col-xs-6 col-md-3 tStat-res">
            <table>
                <tr>
                    <td rowspan="2"><img class="icon-pic" src="icons/turns.png" alt="turns"></td>
                    <td class="stat-name">Turns</td>
                </tr>
                <tr>
                    <td><?php echo $_SESSION['userTurns']; ?></td>
                </tr>
            </table>
        </div>
    </div>
<hr>
<div class="row info-table">
    <div class="col-md-3 tStat">
        <table>
            <tr>
                <td rowspan="2"><img class="icon-pic" src="icons/army.png" alt="army"></td>
                <td class="stat-name">Army</td>
            </tr>
            <tr>
                <td><?php echo $_SESSION['userArmy']; ?></td>
            </tr>
        </table>
    </div>
    <div class="col-md-3 tStat">
        <table>
            <tr>
                <td rowspan="2"><img class="icon-pic" src="icons/rank.png" alt="rank"></td>
                <td class="stat-name">Rank</td>
            </tr>
            <tr>
                <td><?php echo "?" ?></td>
            </tr>
        </table>
    </div>
    <div class="col-md-3 tStat">
        <table>
            <tr>
                <td rowspan="2"><img class="icon-pic" src="icons/clan.png" alt="clan"></td>
                <td class="stat-name">Clan</td>
            </tr>
            <tr>
                <td><?php echo "none" ?></td>
            </tr>
        </table>
    </div>
    <div class="col-md-3 tStat">
        <table>
            <tr>
                <td rowspan="2"><img class="icon-pic" src="icons/race.png" alt="race"></td>
                <td class="stat-name">Race</td>
            </tr>
            <tr>
                <td><?php echo $_SESSION['userRace']; ?></td>
            </tr>
        </table>
    </div>
</div>
<hr>
<div class="row info-table2">
    <div class="col-sm-4 col-xs-6 tStat">
        <table>
            <tr>
                <td rowspan="2"><img class="icon-pic" src="icons/attPower.png" alt="attPower"></td>
                <td class="stat-name">Attack Power</td>
            </tr>
            <tr>
                <td><?php echo $_SESSION['userAtt']; ?></td>
            </tr>
        </table>
    </div>
    <div class="col-sm-4 col-xs-6 tStat">
        <table>
            <tr>
                <td rowspan="2"><img class="icon-pic" src="icons/spyPower.png" alt="spyPower"></td>
                <td class="stat-name">Spying Power</td>
            </tr>
            <tr>
                <td><?php echo $_SESSION['userSpying']; ?></td>
            </tr>
        </table>
    </div>
    <div class="col-sm-4 col-xs-6 tStat">
        <table>
            <tr>
                <td rowspan="2"><img class="icon-pic" src="icons/warriors.png" alt="warriors"></td>
                <td class="stat-name">Warriors</td>
            </tr>
            <tr>
                <td><?php echo $_SESSION['userWarriors']; ?></td>
            </tr>
        </table>
    </div>
    <div class="col-sm-4 col-xs-6 tStat">
        <table>
            <tr>
                <td rowspan="2"><img class="icon-pic" src="icons/defPower.png" alt="defPower"></td>
                <td class="stat-name">Defence Power</td>
            </tr>
            <tr>
                <td><?php echo $_SESSION['userDef']; ?></td>
            </tr>
        </table>
    </div>
    <div class="col-sm-4 col-xs-6 tStat">
        <table>
            <tr>
                <td rowspan="2"><img class="icon-pic" src="icons/expPower.png" alt="sightPower"></td>
                <td class="stat-name">Sight Power</td>
            </tr>
            <tr>
                <td><?php echo $_SESSION['userSight']; ?></td>
            </tr>
        </table>
    </div>
    <div class="col-sm-4 col-xs-6 tStat">
        <table>
            <tr>
                <td rowspan="2"><img class="icon-pic" src="icons/workers.png" alt="workers"></td>
                <td class="stat-name">Workers</td>
            </tr>
            <tr>
                <td><?php echo $_SESSION['userWorkers']; ?></td>
            </tr>
        </table>
    </div>
    <div class="col-sm-4 col-xs-6 tStat">
        <table>
            <tr>
                <td rowspan="2"><img class="icon-pic" src="icons/uniPower.png" alt="uniPower"></td>
                <td class="stat-name">General power</td>
            </tr>
            <tr>
                <td><?php echo $_SESSION['userGeneralPower']; ?></td>
            </tr>
        </table>
    </div>
    <div class="col-sm-4 col-xs-6 tStat">
        <table>
            <tr>
                <td rowspan="2"><img class="icon-pic" src="icons/intilPower.png" alt="wisdomPoints"></td>
                <td class="stat-name">Wisdom Points</td>
            </tr>
            <tr>
                <td><?php echo $_SESSION['userWizdom']; ?></td>
            </tr>
        </table>
    </div>
    <div class="col-sm-4 col-xs-6 tStat">
        <table>
            <tr>
                <td rowspan="2"><img class="icon-pic" src="icons/dragons.png" alt="dragons"></td>
                <td class="stat-name">Dragons</td>
            </tr>
            <tr>
                <td><?php echo "?" ?></td>
            </tr>
        </table>
    </div>
</div>




<?php
include ('userFooter.php');
?>
