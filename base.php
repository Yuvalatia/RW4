<?php
$TITLE = "Base";
include ('userHeader.php');

// RESOURCE TABLE ADDED
require ('includes/resTable.php');
?>

<h1 id="pageBanner">Base</h1>

<div class="row info-table">
    <div class="col-md-3 tStat">
        <table>
            <tr>
                <td rowspan="2"><img class="icon-pic" src="icns/army.png" alt="army"></td>
                <td class="stat-name">Army</td>
            </tr>
            <tr>
                <td><?php echo $userArmy; ?></td>
            </tr>
        </table>
    </div>
    <div class="col-md-3 tStat">
        <table>
            <tr>
                <td rowspan="2"><img class="icon-pic" src="icns/rank.png" alt="rank"></td>
                <td class="stat-name">Rank</td>
            </tr>
            <tr>
                <td><?php if($userRank == 0){echo "-";}else{echo $userRank;}?></td>
            </tr>
        </table>
    </div>
    <div class="col-md-3 tStat">
        <table>
            <tr>
                <td rowspan="2"><img class="icon-pic" src="icns/clan.png" alt="clan"></td>
                <td class="stat-name">Clan</td>
            </tr>
            <tr>
                <td><?php if($userClan == 0){echo "-";}else{echo $userClan;}?></td>
            </tr>
        </table>
    </div>
    <div class="col-md-3 tStat">
        <table>
            <tr>
                <td rowspan="2"><img class="icon-pic" src="icns/race.png" alt="race"></td>
                <td class="stat-name">Race</td>
            </tr>
            <tr>
                <td><?php echo race($userRace); ?></td>
            </tr>
        </table>
    </div>
</div>
<hr>
<div class="row info-table2">
    <div class="col-sm-4 col-xs-6 tStat">
        <table>
            <tr>
                <td rowspan="2"><img class="icon-pic" src="icns/attPower.png" alt="attPower"></td>
                <td class="stat-name">Attack Power</td>
            </tr>
            <tr>
                <td><?php echo $userAtt; ?></td>
            </tr>
        </table>
    </div>
    <div class="col-sm-4 col-xs-6 tStat">
        <table>
            <tr>
                <td rowspan="2"><img class="icon-pic" src="icns/spyPower.png" alt="spyPower"></td>
                <td class="stat-name">Spying Power</td>
            </tr>
            <tr>
                <td><?php echo $userSpying; ?></td>
            </tr>
        </table>
    </div>
    <div class="col-sm-4 col-xs-6 tStat">
        <table>
            <tr>
                <td rowspan="2"><img class="icon-pic" src="icns/warriors.png" alt="warriors"></td>
                <td class="stat-name">Warriors</td>
            </tr>
            <tr>
                <td><?php echo $userWarriors; ?></td>
            </tr>
        </table>
    </div>
    <div class="col-sm-4 col-xs-6 tStat">
        <table>
            <tr>
                <td rowspan="2"><img class="icon-pic" src="icns/defPower.png" alt="defPower"></td>
                <td class="stat-name">Defence Power</td>
            </tr>
            <tr>
                <td><?php echo $userDef; ?></td>
            </tr>
        </table>
    </div>
    <div class="col-sm-4 col-xs-6 tStat">
        <table>
            <tr>
                <td rowspan="2"><img class="icon-pic" src="icns/expPower.png" alt="sightPower"></td>
                <td class="stat-name">Sight Power</td>
            </tr>
            <tr>
                <td><?php echo $userSight; ?></td>
            </tr>
        </table>
    </div>
    <div class="col-sm-4 col-xs-6 tStat">
        <table>
            <tr>
                <td rowspan="2"><img class="icon-pic" src="icns/workers.png" alt="workers"></td>
                <td class="stat-name">Workers</td>
            </tr>
            <tr>
                <td><?php echo $userWorkers; ?></td>
            </tr>
        </table>
    </div>
    <div class="col-sm-4 col-xs-6 tStat">
        <table>
            <tr>
                <td rowspan="2"><img class="icon-pic" src="icns/uniPower.png" alt="uniPower"></td>
                <td class="stat-name">General power</td>
            </tr>
            <tr>
                <td><?php echo $userGeneral; ?></td>
            </tr>
        </table>
    </div>
    <div class="col-sm-4 col-xs-6 tStat">
        <table>
            <tr>
                <td rowspan="2"><img class="icon-pic" src="icns/intilPower.png" alt="wisdomPoints"></td>
                <td class="stat-name">Wisdom Points</td>
            </tr>
            <tr>
                <td><?php echo $userWizdom; ?></td>
            </tr>
        </table>
    </div>
    <div class="col-sm-4 col-xs-6 tStat">
        <table>
            <tr>
                <td rowspan="2"><img class="icon-pic" src="icns/dragons.png" alt="dragons"></td>
                <td class="stat-name">Dragons</td>
            </tr>
            <tr>
                <td><?php echo $userDragons; ?></td>
            </tr>
        </table>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-sm-12 referral">
            <div class="row">
                <div class="col-sm-8">
                    <span class="ref-text">Your referral link:</span><br>
                    <small>* each referral reward you 10 turns + 10 diamonds.</small>
                    <input type="text" class="form-control" id="ref" name="ref"
                    value="http://www.rw4.com/register?refCode=<?php echo $_SESSION['userId']; ?>">
                </div>
                <div class="col-sm-4 tStat diamonds">
                    <table>
                        <tr>
                            <td rowspan="2"><img class="icon-pic" src="icns/diamonds.png" alt="diamonds"></td>
                            <td class="stat-name">Diamonds</td>
                        </tr>
                        <tr>
                            <td><?php echo $userDiamonds; ?></td>
                        </tr>
                    </table>
                    <button id="diamond-btn" class="btn btn-xs">Diamond Store</button>
                </div>
            </div>

        </div>
    </div>
</div>




<?php
include ('userFooter.php');
?>
