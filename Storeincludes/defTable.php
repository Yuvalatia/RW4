<!-- Def Weaponds -->
<form name="defForm" action="store.php" method="POST" onsubmit="return defFormVal()" autocomplete="off">
    <table class="store-table">
        <tr>
            <div class="row">
                <div class="col-sm-2"><th>Name</th></div>
                <div class="col-sm-4"><th>Weapon</th></div>
                <div class="col-sm-2"><th>Price</th></div>
                <div class="col-sm-2"><th>Owned</th></div>
                <div class="col-sm-2"><th>Amount</th></div>
            </div>
        </tr>
    </table>
    <!-- wDef1 -->
    <table class="store-table wdef-table">
        <tr>
            <td>Iron Helmet<br><img class="price-icon" src="icns/strength.png" alt="strength"><?php echo $s1; ?></td>
            <td><img class="weapond-pic" src="weaponds/wDef1.png" alt="Iron Helmet"></td>
            <td>
                <table class="price-table">
                    <tr>
                        <td><img class="price-icon" src="icns/gold.png" alt="gold"></td><td><?php echo $w1['gold']; ?></td>
                    </tr>
                    <tr>
                        <td><img class="price-icon" src="icns/wood.png" alt="wood"></td><td><?php echo $w1['wood']; ?></td>
                    </tr>
                    <tr>
                        <td><img class="price-icon" src="icns/ore.png" alt="ore"></td><td><?php echo $w1['ore']; ?></td>
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
            <td>Warriors Helmet<br><img class="price-icon" src="icns/strength.png" alt="strength"><?php echo $s2; ?></td>
            <td><img class="weapond-pic" src="weaponds/wDef2.png" alt="Warriors Helmet"></td>
            <td>
                <table class="price-table">
                    <tr>
                        <td><img class="price-icon" src="icns/gold.png" alt="gold"></td><td><?php echo $w2['gold']; ?></td>
                    </tr>
                    <tr>
                        <td><img class="price-icon" src="icns/wood.png" alt="wood"></td><td><?php echo $w2['wood']; ?></td>
                    </tr>
                    <tr>
                        <td><img class="price-icon" src="icns/ore.png" alt="ore"></td><td><?php echo $w2['ore']; ?></td>
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
            <td>Iron Armor<br><img class="price-icon" src="icns/strength.png" alt="strength"><?php echo $s3; ?></td>
            <td><img class="weapond-pic" src="weaponds/wDef3.png" alt="Iron Armor"></td>
            <td>
                <table class="price-table">
                    <tr>
                        <td><img class="price-icon" src="icns/gold.png" alt="gold"></td><td><?php echo $w3['gold']; ?></td>
                    </tr>
                    <tr>
                        <td><img class="price-icon" src="icns/wood.png" alt="wood"></td><td><?php echo $w3['wood']; ?></td>
                    </tr>
                    <tr>
                        <td><img class="price-icon" src="icns/ore.png" alt="ore"></td><td><?php echo $w3['ore']; ?></td>
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
            <td>Warriors Armor<br><img class="price-icon" src="icns/strength.png" alt="strength"><?php echo $s4; ?></td>
            <td><img class="weapond-pic" src="weaponds/wDef4.png" alt="Warrior Armor"></td>
            <td>
                <table class="price-table">
                    <tr>
                        <td><img class="price-icon" src="icns/gold.png" alt="gold"></td><td><?php echo $w4['gold']; ?></td>
                    </tr>
                    <tr>
                        <td><img class="price-icon" src="icns/wood.png" alt="wood"></td><td><?php echo $w4['wood']; ?></td>
                    </tr>
                    <tr>
                        <td><img class="price-icon" src="icns/ore.png" alt="ore"></td><td><?php echo $w4['ore']; ?></td>
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