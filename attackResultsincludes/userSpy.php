<?php

$userNewTurns = $userTurns - $spyCost;

// SQL UPDATE
    $sql = "UPDATE resources SET  userTurns='$userNewTurns'
             WHERE userId='$user_id';";
        if(mysqli_query($conn,$sql)){
            // ALL SET
            ?>
            <h1 id="Bannerpurple">Spy Results</h1>
            <div class="row center">
                <div class="col-xs-6 col-md-4  tStat-res">
                    <table>
                        <tr>
                            <td rowspan="2"><img class="icon-pic" src="icons/gold.png" alt="gold"></td>
                            <td class="stat-name">Gold</td>
                        </tr>
                        <tr>
                            <td><?php echo $attackedGold; ?></td>
                        </tr>
                    </table>
                </div>
                <div class="col-xs-6 col-md-4 tStat-res">
                    <table>
                        <tr>
                            <td rowspan="2"><img class="icon-pic" src="icons/wood.png" alt="wood"></td>
                            <td class="stat-name">Wood</td>
                        </tr>
                        <tr>
                            <td><?php echo $attackedWood; ?></td>
                        </tr>
                    </table>
                </div>
                <div class="col-xs-6 col-md-4 tStat-res">
                    <table>
                        <tr>
                            <td rowspan="2"><img class="icon-pic" src="icons/ore.png" alt="ore"></td>
                            <td class="stat-name">Ore</td>
                        </tr>
                        <tr>
                            <td><?php echo $attackedOre; ?></td>
                        </tr>
                    </table>
                </div>
                <br>
                <br>
                <div class="col-md-6 tStat">
                    <table>
                        <tr>
                            <td rowspan="2"><img class="icon-pic" src="icons/army.png" alt="army"></td>
                            <td class="stat-name">Army</td>
                        </tr>
                        <tr>
                            <td><?php echo $attackedArmy; ?></td>
                        </tr>
                    </table>
                </div>
                <div class="col-md-6 tStat">
                    <table>
                        <tr>
                            <td rowspan="2"><img class="icon-pic" src="icons/race.png" alt="race"></td>
                            <td class="stat-name">Race</td>
                        </tr>
                        <tr>
                            <td><?php echo race($attackedRace); ?></td>
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
                            <td><?php echo $attackedAtt; ?></td>
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
                            <td><?php echo $attackedDef; ?></td>
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
                            <td><?php echo $attackedSpying; ?></td>
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
                            <td><?php echo $attackedSight; ?></td>
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
                            <td><?php echo $attackedGeneral; ?></td>
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
                            <td><?php echo $attackedWizdom; ?></td>
                        </tr>
                    </table>
                </div>
                <div class="col-sm-3 col-xs-6 tStat">
                    <table>
                        <tr>
                            <td rowspan="2"><img class="icon-pic" src="icons/warriors.png" alt="warriors"></td>
                            <td class="stat-name">Warriors</td>
                        </tr>
                        <tr>
                            <td><?php echo $attackedWarriors; ?></td>
                        </tr>
                    </table>
                </div>
                <div class="col-sm-3 col-xs-6 tStat">
                    <table>
                        <tr>
                            <td rowspan="2"><img class="icon-pic" src="icons/workers.png" alt="workers"></td>
                            <td class="stat-name">Workers</td>
                        </tr>
                        <tr>
                            <td><?php echo $attackedWorkers; ?></td>
                        </tr>
                    </table>
                </div>
                <div class="col-sm-3 col-xs-6 tStat">
                    <table>
                        <tr>
                            <td rowspan="2"><img class="icon-pic" src="icons/intlg.png" alt="intlg"></td>
                            <td class="stat-name">Intelligents</td>
                        </tr>
                        <tr>
                            <td><?php echo $attackedIntlg; ?></td>
                        </tr>
                    </table>
                </div>
                <div class="col-sm-3 col-xs-6 tStat">
                    <table>
                        <tr>
                            <td rowspan="2"><img class="icon-pic" src="icons/spy.png" alt="spy"></td>
                            <td class="stat-name">Spy</td>
                        </tr>
                        <tr>
                            <td><?php echo $attackedSpy; ?></td>
                        </tr>
                    </table>
                </div>
                <div class="col-sm-6 col-xs-6 tStat">
                    <table>
                        <tr>
                            <td rowspan="2"><img class="icon-pic" src="icons/exp.png" alt="explorer"></td>
                            <td class="stat-name">Explorers</td>
                        </tr>
                        <tr>
                            <td><?php echo $attackedExp; ?></td>
                        </tr>
                    </table>
                </div>
                <div class="col-sm-6 col-xs-6 tStat">
                    <table>
                        <tr>
                            <td rowspan="2"><img class="icon-pic" src="icons/dragons.png" alt="dragons"></td>
                            <td class="stat-name">Dragons</td>
                        </tr>
                        <tr>
                            <td><?php echo $attackedDragons; ?></td>
                        </tr>
                    </table>
                </div>
            </div>
            <?php
            // SET CALC ATTACKED AND USER
            require ('includes/userDetailsFetch.php');
        }else{
            badAlert("Error updating record: " . mysqli_error($conn));
        }


?>