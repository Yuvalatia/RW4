<!-- Def Weaponds -->
<form name="defForm" action="store.php" method="POST" onsubmit="return defFormVal()" autocomplete="off">
    <table class="store-table">
        <tr>
            <div class="row">
                <div class="col-sm-2"><th>Name</th></div>
                <div class="col-sm-4"><th>Weapond</th></div>
                <div class="col-sm-2"><th>Price</th></div>
                <div class="col-sm-2"><th>Owned</th></div>
                <div class="col-sm-2"><th>Amount</th></div>
            </div>
        </tr>
    </table>
    <!-- wDef1 -->
    <table class="store-table wdef-table">
        <tr>
            <td>Iron Helmet<br><img class="price-icon" src="icons/strength.png" alt="strength">10</td>
            <td><img class="weapond-pic" src="weaponds/wDef1.png" alt="Iron Helmet"></td>
            <td>
                <table class="price-table">
                    <tr>
                        <td><img class="price-icon" src="icons/gold.png" alt="gold"></td><td>500</td>
                    </tr>
                    <tr>
                        <td><img class="price-icon" src="icons/wood.png" alt="wood"></td><td>300</td>
                    </tr>
                    <tr>
                        <td><img class="price-icon" src="icons/ore.png" alt="ore"></td><td>300</td>
                    </tr>
                </table>
            </td>
            <td><?php echo $wDef1; ?></td>
            <td id="amountInput"><input type="text" name="wDef1Count" class="form-control store-input" value="0"></td>
        </tr>
    </table>
    <!-- wDef2 -->
    <table class="store-table wdef-table">
        <tr>
            <td>Warriors Helmet<br><img class="price-icon" src="icons/strength.png" alt="strength">80</td>
            <td><img class="weapond-pic" src="weaponds/wDef2.png" alt="Warriors Helmet"></td>
            <td>
                <table class="price-table">
                    <tr>
                        <td><img class="price-icon" src="icons/gold.png" alt="gold"></td><td>2500</td>
                    </tr>
                    <tr>
                        <td><img class="price-icon" src="icons/wood.png" alt="wood"></td><td>1600</td>
                    </tr>
                    <tr>
                        <td><img class="price-icon" src="icons/ore.png" alt="ore"></td><td>1600</td>
                    </tr>
                </table>
            </td>
            <td><?php echo $wDef2; ?></td>
            <td id="amountInput"><input type="text" name="wDef2Count" class="form-control store-input" value="0"></td>
        </tr>
    </table>
    <!-- wDef3 -->
    <table class="store-table wdef-table">
        <tr>
            <td>Iron Armor<br><img class="price-icon" src="icons/strength.png" alt="strength">450</td>
            <td><img class="weapond-pic" src="weaponds/wDef3.png" alt="Iron Armor"></td>
            <td>
                <table class="price-table">
                    <tr>
                        <td><img class="price-icon" src="icons/gold.png" alt="gold"></td><td>12500</td>
                    </tr>
                    <tr>
                        <td><img class="price-icon" src="icons/wood.png" alt="wood"></td><td>6800</td>
                    </tr>
                    <tr>
                        <td><img class="price-icon" src="icons/ore.png" alt="ore"></td><td>6800</td>
                    </tr>
                </table>
            </td>
            <td><?php echo $wDef3; ?></td>
            <td id="amountInput"><input type="text" name="wDef3Count" class="form-control store-input" value="0"></td>
        </tr>
    </table>
    <!-- wDef4 -->
    <table class="store-table wdef-table">
        <tr>
            <td>Warriors Armor<br><img class="price-icon" src="icons/strength.png" alt="strength">2000</td>
            <td><img class="weapond-pic" src="weaponds/wDef4.png" alt="Warrior Armor"></td>
            <td>
                <table class="price-table">
                    <tr>
                        <td><img class="price-icon" src="icons/gold.png" alt="gold"></td><td>50000</td>
                    </tr>
                    <tr>
                        <td><img class="price-icon" src="icons/wood.png" alt="wood"></td><td>26000</td>
                    </tr>
                    <tr>
                        <td><img class="price-icon" src="icons/ore.png" alt="ore"></td><td>26000</td>
                    </tr>
                </table>
            </td>
            <td><?php echo $wDef4; ?></td>
            <td id="amountInput"><input type="text" name="wDef4Count" class="form-control store-input" value="0"></td>
        </tr>
    </table>
    <table class="store-table">
        <tr>
            <td>
                <button type="submit" id="submit" name="submitDef" class="btn">Purchase</button>
                <button type="reset" id="reset" class="btn">Clear</button>
            </td>
        </tr>
    </table>

</form>