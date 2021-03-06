<!-- Att Weaponds -->
<form name="attForm" action="store.php" method="POST" onsubmit="return attFormVal()" autocomplete="off">
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
    <!-- wAtt1 -->
    <table class="store-table watt-table">
        <tr>
            <td>Iron Sword<br><img class="price-icon" src="icns/strength.png" alt="strength"><?php echo $s1; ?></td>
            <td><img class="weapond-pic" src="weaponds/wAtt1.png" alt="Iron Sword"></td>
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
            <td><?php echo $wAtt1; ?></td>
            <td id="amountInput"><input type="text" name="wAtt1Count" class="form-control store-input" value="0"></td>
        </tr>
    </table>
    <!-- wAtt2 -->
    <table class="store-table watt-table">
        <tr>
            <td>Moonlit Sword<br><img class="price-icon" src="icns/strength.png" alt="strength"><?php echo $s2; ?></td>
            <td><img class="weapond-pic" src="weaponds/wAtt2.png" alt="Moonlit Sword"></td>
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
            <td><?php echo $wAtt2; ?></td>
            <td id="amountInput"><input type="text" name="wAtt2Count" class="form-control store-input" value="0"></td>
        </tr>
    </table>
    <!-- wAtt3 -->
    <table class="store-table watt-table">
        <tr>
            <td>Ice Breaker<br><img class="price-icon" src="icns/strength.png" alt="strength"><?php echo $s3; ?></td>
            <td><img class="weapond-pic" src="weaponds/wAtt3.png" alt="Ice Breaker"></td>
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
            <td><?php echo $wAtt3; ?></td>
            <td id="amountInput"><input type="text" name="wAtt3Count" class="form-control store-input" value="0"></td>
        </tr>
    </table>
    <!-- wAtt4 -->
    <table class="store-table watt-table">
        <tr>
            <td>Flaming Blade<br><img class="price-icon" src="icns/strength.png" alt="strength"><?php echo $s4; ?></td>
            <td><img class="weapond-pic" src="weaponds/wAtt4.png" alt="Flaming Blade"></td>
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
            <td><?php echo $wAtt4; ?></td>
            <td id="amountInput"><input type="text" name="wAtt4Count" class="form-control store-input" value="0"></td>
        </tr>
    </table>
    <table class="store-table">
        <tr>
            <td>
                <button type="submit" id="submit" name="submitAtt" class="btn">Purchase</button>
                <button type="reset" id="reset" class="btn">Clear</button>
            </td>
        </tr>
    </table>

</form>