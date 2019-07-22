<form action="upgrade.php" method="POST">
<!-- RES UPGRADE -->

    <table class="store-table">
        <tr>
            <div class="row">
                <div class="col-sm-4"><th>Upgrade</th></div>
                <div class="col-sm-2"><th>Name</th></div>
                <div class="col-sm-2"><th>Current level</th></div>
                <div class="col-sm-2"><th>Price</th></div>
                <div class="col-sm-2"><th></th></div>
            </div>
        </tr>
    </table>
    <!-- gold upgrade -->
    <table class="store-table upgrade-table">
        <tr>
            <td><img class="icon-pic" src="icons/goldUpgrade.png" alt="goldUpgrade"></td>
            <td>Gold Upgrade</td>
            <td><?php echo "Level ".$goldUpgrade." : ".$goldLevel[$goldUpgrade]['perUpdate']." per worker at update";?> </td>
            <td>
                <table class="price-table">
                    <tr>
                        <td><img class="price-icon" src="icons/gold.png" alt="gold"></td>
                        <td>
                            <?php if($goldUpgrade < sizeof($goldLevel)-1){
                                    echo $goldLevel[$goldUpgrade+1]['goldCost'];
                            }else{
                                    echo "-";
                            }
                            ?>
                        </td>
                    </tr>
                </table>
            </td>
            <td id="amountInput">
                <?php if($goldUpgrade < sizeof($goldLevel)-1){ ?>
                    <button name="goldUpgrade" class="btn btn-sm upgrade-btn">Upgrade to lv<?php echo $goldUpgrade+1;?></button>
                <?php
                }else{
                    echo "MAX";
                }
                ?>
            </td>
        </tr>
    </table>
    <!-- wood upgrade -->
    <table class="store-table upgrade-table">
        <tr>
            <td><img class="icon-pic" src="icons/woodUpgrade.png" alt="woodUpgrade"></td>
            <td>Wood Upgrade</td>
            <td><?php echo "Level ".$woodUpgrade." : ".$woodLevel[$woodUpgrade]['perUpdate']." per worker at update";?> </td>
            <td>
                <table class="price-table">
                    <tr>
                        <td><img class="price-icon" src="icons/wood.png" alt="wood"></td>
                        <td>
                            <?php if($woodUpgrade < sizeof($woodLevel)-1){
                                echo $woodLevel[$woodUpgrade+1]['woodCost'];
                            }else{
                                echo "-";
                            }
                            ?>
                        </td>
                    </tr>
                </table>
            </td>
            <td id="amountInput">
                <?php if($woodUpgrade < sizeof($woodLevel)-1){ ?>
                    <button name="woodUpgrade" class="btn btn-sm upgrade-btn">Upgrade to lv<?php echo $woodUpgrade+1;?></button>
                    <?php
                }else{
                    echo "MAX";
                }
                ?>
            </td>
        </tr>
    </table>
    <!-- ore upgrade -->
    <table class="store-table upgrade-table">
        <tr>
            <td><img class="icon-pic" src="icons/oreUpgrade.png" alt="oreUpgrade"></td>
            <td>Ore Upgrade</td>
            <td><?php echo "Level ".$oreUpgrade." : ".$oreLevel[$oreUpgrade]['perUpdate']." per worker at update";?> </td>
            <td>
                <table class="price-table">
                    <tr>
                        <td><img class="price-icon" src="icons/ore.png" alt="ore"></td>
                        <td>
                            <?php if($oreUpgrade < sizeof($oreLevel)-1){
                                echo $oreLevel[$oreUpgrade+1]['oreCost'];
                            }else{
                                echo "-";
                            }
                            ?>
                        </td>
                    </tr>
                </table>
            </td>
            <td id="amountInput">
                <?php if($oreUpgrade < sizeof($oreLevel)-1){ ?>
                    <button name="oreUpgrade" class="btn btn-sm upgrade-btn">Upgrade to lv<?php echo $oreUpgrade+1;?></button>
                    <?php
                }else{
                    echo "MAX";
                }
                ?>
            </td>
        </tr>
    </table>
    <!-- turns upgrade -->
    <table class="store-table upgrade-table">
        <tr>
            <td><img class="icon-pic" src="icons/turnsUpgrade.png" alt="turnsUpgrade"></td>
            <td>Turns Upgrade</td>
            <td><?php echo "Level ".$turnsUpgrade." : ".$turnsLevel[$turnsUpgrade]['perUpdate']." per update";?> </td>
            <td>
                <table class="price-table">
                    <tr>
                        <td><img class="price-icon" src="icons/turns.png" alt="turns"></td>
                        <td>
                            <?php if($turnsUpgrade < sizeof($turnsLevel)-1){
                                echo $turnsLevel[$turnsUpgrade+1]['turnsCost'];
                            }else{
                                echo "-";
                            }
                            ?>
                        </td>
                    </tr>
                </table>
            </td>
            <td id="amountInput">
                <?php if($turnsUpgrade < sizeof($turnsLevel)-1){ ?>
                    <button name="turnsUpgrade" class="btn btn-sm upgrade-btn">Upgrade to lv<?php echo $turnsUpgrade+1;?></button>
                    <?php
                }else{
                    echo "MAX";
                }
                ?>
            </td>
        </tr>
    </table>



<!-- POWER UPGRADE -->

   <table class="store-table">
        <tr>
            <div class="row">
                <div class="col-sm-4"><th>Upgrade</th></div>
                <div class="col-sm-2"><th>Name</th></div>
                <div class="col-sm-2"><th>Current level</th></div>
                <div class="col-sm-2"><th>Price</th></div>
                <div class="col-sm-2"><th></th></div>
            </div>
        </tr>
    </table>


    <!-- att upgrade -->
    <table class="store-table upgrade-table">
        <tr>
            <td><img class="icon-pic" src="icons/attUpgrade.png" alt="attUpgrade"></td>
            <td>Attack Power Upgrade</td>
            <td><?php echo "Level ".$attUpgrade." : ".($powerLevel[$attUpgrade]['perUpdate']*100)."% bonus power";?> </td>
            <td>
                <table class="price-table">
                    <tr>
                        <td><img class="price-icon" src="icons/gold.png" alt="gold"></td>
                        <td>
                            <?php if($attUpgrade < sizeof($powerLevel)-1){
                                echo $powerLevel[$attUpgrade+1]['goldCost'];
                            }else{
                                echo "-";
                            }
                            ?>
                        </td>
                    </tr>
                </table>
            </td>
            <td id="amountInput">
                <?php if($attUpgrade < sizeof($powerLevel)-1){ ?>
                    <button name="attUpgrade" class="btn btn-sm upgrade-btn">Upgrade to lv<?php echo $attUpgrade+1;?></button>
                    <?php
                }else{
                    echo "MAX";
                }
                ?>
            </td>
        </tr>
    </table>
    <!-- def upgrade -->
    <table class="store-table upgrade-table">
        <tr>
            <td><img class="icon-pic" src="icons/defUpgrade.png" alt="defUpgrade"></td>
            <td>Defence Power Upgrade</td>
            <td><?php echo "Level ".$defUpgrade." : ".($powerLevel[$defUpgrade]['perUpdate']*100)."% bonus power";?> </td>
            <td>
                <table class="price-table">
                    <tr>
                        <td><img class="price-icon" src="icons/gold.png" alt="gold"></td>
                        <td>
                            <?php if($defUpgrade < sizeof($powerLevel)-1){
                                echo $powerLevel[$defUpgrade+1]['goldCost'];
                            }else{
                                echo "-";
                            }
                            ?>
                        </td>
                    </tr>
                </table>
            </td>
            <td id="amountInput">
                <?php if($defUpgrade < sizeof($powerLevel)-1){ ?>
                    <button name="defUpgrade" class="btn btn-sm upgrade-btn">Upgrade to lv<?php echo $defUpgrade+1;?></button>
                    <?php
                }else{
                    echo "MAX";
                }
                ?>
            </td>
        </tr>
    </table>
    <!-- spy upgrade -->
    <table class="store-table upgrade-table">
        <tr>
            <td><img class="icon-pic" src="icons/spyUpgrade.png" alt="spyUpgrade"></td>
            <td>Spying Power Upgrade</td>
            <td><?php echo "Level ".$spyUpgrade." : ".($powerLevel[$spyUpgrade]['perUpdate']*100)."% bonus power";?> </td>
            <td>
                <table class="price-table">
                    <tr>
                        <td><img class="price-icon" src="icons/gold.png" alt="gold"></td>
                        <td>
                            <?php if($spyUpgrade < sizeof($powerLevel)-1){
                                echo $powerLevel[$spyUpgrade+1]['goldCost'];
                            }else{
                                echo "-";
                            }
                            ?>
                        </td>
                    </tr>
                </table>
            </td>
            <td id="amountInput">
                <?php if($spyUpgrade < sizeof($powerLevel)-1){ ?>
                    <button name="spyUpgrade" class="btn btn-sm upgrade-btn">Upgrade to lv<?php echo $spyUpgrade+1;?></button>
                    <?php
                }else{
                    echo "MAX";
                }
                ?>
            </td>
        </tr>
    </table>
    <!-- exp upgrade -->
    <table class="store-table upgrade-table">
        <tr>
            <td><img class="icon-pic" src="icons/expUpgrade.png" alt="expUpgrade"></td>
            <td>Sight Power Upgrade</td>
            <td><?php echo "Level ".$expUpgrade." : ".($powerLevel[$expUpgrade]['perUpdate']*100)."% bonus power";?> </td>
            <td>
                <table class="price-table">
                    <tr>
                        <td><img class="price-icon" src="icons/gold.png" alt="gold"></td>
                        <td>
                            <?php if($expUpgrade < sizeof($powerLevel)-1){
                                echo $powerLevel[$expUpgrade+1]['goldCost'];
                            }else{
                                echo "-";
                            }
                            ?>
                        </td>
                    </tr>
                </table>
            </td>
            <td id="amountInput">
                <?php if($expUpgrade < sizeof($powerLevel)-1){ ?>
                    <button name="expUpgrade" class="btn btn-sm upgrade-btn">Upgrade to lv<?php echo $expUpgrade+1;?></button>
                    <?php
                }else{
                    echo "MAX";
                }
                ?>
            </td>
        </tr>
    </table>
    <!-- untrained upgrade -->
    <table class="store-table upgrade-table">
        <tr>
            <td><img class="icon-pic" src="icons/untrainedUpgrade.png" alt="untrainedUpgrade"></td>
            <td>Untrained unit Upgrade</td>
            <td><?php echo "Level ".$untrainedUpgrade." : ".$untrainedLevel[$untrainedUpgrade]['perUpdate']." new units per update";?> </td>
            <td>
                <table class="price-table">
                    <tr>
                        <td><img class="price-icon" src="icons/gold.png" alt="gold"></td>
                        <td>
                            <?php if($untrainedUpgrade < sizeof($untrainedLevel)-1){
                                echo $untrainedLevel[$untrainedUpgrade+1]['goldCost'];
                            }else{
                                echo "-";
                            }
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <td><img class="price-icon" src="icons/wood.png" alt="wood"></td>
                        <td>
                            <?php if($untrainedUpgrade < sizeof($untrainedLevel)-1){
                                echo $untrainedLevel[$untrainedUpgrade+1]['woodCost'];
                            }else{
                                echo "-";
                            }
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <td><img class="price-icon" src="icons/ore.png" alt="ore"></td>
                        <td>
                            <?php if($untrainedUpgrade < sizeof($untrainedLevel)-1){
                                echo $untrainedLevel[$untrainedUpgrade+1]['oreCost'];
                            }else{
                                echo "-";
                            }
                            ?>
                        </td>
                    </tr>
                </table>
            </td>
            <td id="amountInput">
                <?php if($untrainedUpgrade < sizeof($untrainedLevel)-1){ ?>
                    <button name="untrainedUpgrade" class="btn btn-sm upgrade-btn">Upgrade to lv<?php echo $untrainedUpgrade+1;?></button>
                    <?php
                }else{
                    echo "MAX";
                }
                ?>
            </td>
        </tr>
    </table>
    <!-- wizdom upgrade -->
    <table class="store-table upgrade-table">
        <tr>
            <td><img class="icon-pic" src="icons/intlgUpgrade.png" alt="intlgUpgrade"></td>
            <td>Wisdom Points Upgrade</td>
            <td><?php echo "Level ".$wizdomUpgrade." : ".$wizdomLevel[$wizdomUpgrade]['perUpdate']." points per intelligent";?> </td>
            <td>
                <table class="price-table">
                    <tr>
                        <td><img class="price-icon" src="icons/gold.png" alt="gold"></td>
                        <td>
                            <?php if($wizdomUpgrade < sizeof($wizdomLevel)-1){
                                echo $wizdomLevel[$wizdomUpgrade+1]['goldCost'];
                            }else{
                                echo "-";
                            }
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <td><img class="price-icon" src="icons/wood.png" alt="wood"></td>
                        <td>
                            <?php if($wizdomUpgrade < sizeof($wizdomLevel)-1){
                                echo $wizdomLevel[$wizdomUpgrade+1]['woodCost'];
                            }else{
                                echo "-";
                            }
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <td><img class="price-icon" src="icons/ore.png" alt="ore"></td>
                        <td>
                            <?php if($wizdomUpgrade < sizeof($wizdomLevel)-1){
                                echo $wizdomLevel[$wizdomUpgrade+1]['oreCost'];
                            }else{
                                echo "-";
                            }
                            ?>
                        </td>
                    </tr>
                </table>
            </td>
            <td id="amountInput">
                <?php if($wizdomUpgrade < sizeof($wizdomLevel)-1){ ?>
                    <button name="wizdomUpgrade" class="btn btn-sm upgrade-btn">Upgrade to lv<?php echo $wizdomUpgrade+1;?></button>
                    <?php
                }else{
                    echo "MAX";
                }
                ?>
            </td>
        </tr>
    </table>
</form>

