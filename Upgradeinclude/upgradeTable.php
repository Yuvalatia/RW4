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
            <td><?php echo "Level ".$goldUpgrade." : ".$goldLevel[$goldUpgrade]['perUpdate']." per worker";?> </td>
            <td>
                <table class="price-table">
                    <tr>
                        <td><img class="price-icon" src="icons/gold.png" alt="gold"></td>
                        <td>
                            <?php if($goldUpgrade < 7){
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
                <?php if($goldUpgrade < 7){ ?>
                    <button onclick="upgrade.php?up=gold" name="goldUpgrade" class="btn btn-sm upgrade-btn">Upgrade to lv<?php echo $goldUpgrade+1;?></button>
                <?php
                }else{
                    echo "MAX";
                }
                ?>
            </td>
        </tr>
    </table>
    <table class="store-table upgrade-table">
        <tr>
            <td><img class="icon-pic" src="icons/woodUpgrade.png" alt="woodUpgrade"></td>
            <td>Wood Upgrade</td>
            <td><?php echo $userWarriors; ?></td>
            <td>
                <table class="price-table">
                    <tr>
                        <td><img class="price-icon" src="icons/wood.png" alt="wood"></td><td><?php echo $warriorPrice; ?></td>
                    </tr>
                </table>
            </td>
            <td id="amountInput"><button name="woodUpgrade" class="btn btn-sm upgrade-btn">Upgrade to lv2</button></td>
        </tr>
    </table>
    <table class="store-table upgrade-table">
        <tr>
            <td><img class="icon-pic" src="icons/oreUpgrade.png" alt="oreUpgrade"></td>
            <td>Ore Upgrade</td>
            <td><?php echo $userWarriors; ?></td>
            <td>
                <table class="price-table">
                    <tr>
                        <td><img class="price-icon" src="icons/ore.png" alt="ore"></td><td><?php echo $warriorPrice; ?></td>
                    </tr>
                </table>
            </td>
            <td id="amountInput"><button name="oreUpgrade" class="btn btn-sm upgrade-btn">Upgrade to lv2</button></td>
        </tr>
    </table>
    <table class="store-table upgrade-table">
        <tr>
            <td><img class="icon-pic" src="icons/turnsUpgrade.png" alt="turnsUpgrade"></td>
            <td>Turns Upgrade</td>
            <td><?php echo $userWarriors; ?></td>
            <td>
                <table class="price-table">
                    <tr>
                        <td><img class="price-icon" src="icons/turns.png" alt="turns"></td><td><?php echo $warriorPrice; ?></td>
                    </tr>
                </table>
            </td>
            <td id="amountInput"><button name=turnsUpgrade" class="btn btn-sm upgrade-btn">Upgrade to lv2</button></td>
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
        <td><?php echo $userWarriors; ?></td>
        <td>
            <table class="price-table">
                <tr>
                    <td><img class="price-icon" src="icons/gold.png" alt="gold"></td><td><?php echo $warriorPrice; ?></td>
                </tr>
                <tr>
                    <td><img class="price-icon" src="icons/wood.png" alt="wood"></td><td><?php echo $warriorPrice; ?></td>
                </tr>
                <tr>
                    <td><img class="price-icon" src="icons/ore.png" alt="ore"></td><td><?php echo $warriorPrice; ?></td>
                </tr>
            </table>
        </td>
        <td id="amountInput"><button name="attUpgrade" class="btn btn-sm upgrade-btn">Upgrade to lv2</button></td>
    </tr>
</table>
<table class="store-table upgrade-table">
    <tr>
        <td><img class="icon-pic" src="icons/defUpgrade.png" alt="defUpgrade"></td>
        <td>Defence Power Upgrade</td>
        <td><?php echo $userWarriors; ?></td>
        <td>
            <table class="price-table">
                <tr>
                    <td><img class="price-icon" src="icons/gold.png" alt="gold"></td><td><?php echo $warriorPrice; ?></td>
                </tr>
                <tr>
                    <td><img class="price-icon" src="icons/wood.png" alt="wood"></td><td><?php echo $warriorPrice; ?></td>
                </tr>
                <tr>
                    <td><img class="price-icon" src="icons/ore.png" alt="ore"></td><td><?php echo $warriorPrice; ?></td>
                </tr>
            </table>
        </td>
        <td id="amountInput"><button name="defUpgrade" class="btn btn-sm upgrade-btn">Upgrade to lv2</button></td>
    </tr>
</table>
<table class="store-table upgrade-table">
    <tr>
        <td><img class="icon-pic" src="icons/spyUpgrade.png" alt="spyUpgrade"></td>
        <td>Spying Power Upgrade</td>
        <td><?php echo $userWarriors; ?></td>
        <td>
            <table class="price-table">
                <tr>
                    <td><img class="price-icon" src="icons/gold.png" alt="gold"></td><td><?php echo $warriorPrice; ?></td>
                </tr>
                <tr>
                    <td><img class="price-icon" src="icons/wood.png" alt="wood"></td><td><?php echo $warriorPrice; ?></td>
                </tr>
                <tr>
                    <td><img class="price-icon" src="icons/ore.png" alt="ore"></td><td><?php echo $warriorPrice; ?></td>
                </tr>
            </table>
        </td>
        <td id="amountInput"><button name="spyUpgrade" class="btn btn-sm upgrade-btn">Upgrade to lv2</button></td>
    </tr>
</table>
<table class="store-table upgrade-table">
    <tr>
        <td><img class="icon-pic" src="icons/expUpgrade.png" alt="expUpgrade"></td>
        <td>Sight Power Upgrade</td>
        <td><?php echo $userWarriors; ?></td>
        <td>
            <table class="price-table">
                <tr>
                    <td><img class="price-icon" src="icons/gold.png" alt="gold"></td><td><?php echo $warriorPrice; ?></td>
                </tr>
                <tr>
                    <td><img class="price-icon" src="icons/wood.png" alt="wood"></td><td><?php echo $warriorPrice; ?></td>
                </tr>
                <tr>
                    <td><img class="price-icon" src="icons/ore.png" alt="ore"></td><td><?php echo $warriorPrice; ?></td>
                </tr>
            </table>
        </td>
        <td id="amountInput"><button name=expUpgrade" class="btn btn-sm upgrade-btn">Upgrade to lv2</button></td>
    </tr>
</table>
<table class="store-table upgrade-table">
    <tr>
        <td><img class="icon-pic" src="icons/untrainedUpgrade.png" alt="untrainedUpgrade"></td>
        <td>Untrained units Upgrade</td>
        <td><?php echo $userWarriors; ?></td>
        <td>
            <table class="price-table">
                <tr>
                    <td><img class="price-icon" src="icons/gold.png" alt="gold"></td><td><?php echo $warriorPrice; ?></td>
                </tr>
                <tr>
                    <td><img class="price-icon" src="icons/wood.png" alt="wood"></td><td><?php echo $warriorPrice; ?></td>
                </tr>
                <tr>
                    <td><img class="price-icon" src="icons/ore.png" alt="ore"></td><td><?php echo $warriorPrice; ?></td>
                </tr>
            </table>
        </td>
        <td id="amountInput"><button name=intlgUpgrade" class="btn btn-sm upgrade-btn">Upgrade to lv2</button></td>
    </tr>
</table>
<table class="store-table upgrade-table">
    <tr>
        <td><img class="icon-pic" src="icons/intlgUpgrade.png" alt="intlgUpgrade"></td>
        <td>Wisdom Points Upgrade</td>
        <td><?php echo $userWarriors; ?></td>
        <td>
            <table class="price-table">
                <tr>
                    <td><img class="price-icon" src="icons/gold.png" alt="gold"></td><td><?php echo $warriorPrice; ?></td>
                </tr>
                <tr>
                    <td><img class="price-icon" src="icons/wood.png" alt="wood"></td><td><?php echo $warriorPrice; ?></td>
                </tr>
                <tr>
                    <td><img class="price-icon" src="icons/ore.png" alt="ore"></td><td><?php echo $warriorPrice; ?></td>
                </tr>
            </table>
        </td>
        <td id="amountInput"><button name=intlgUpgrade" class="btn btn-sm upgrade-btn">Upgrade to lv2</button></td>
    </tr>
</table>


