<!-- Spy Weaponds -->
<form name="spyForm" action="store.php" method="POST" onsubmit="return spyFormVal()" autocomplete="off">
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
    <!-- wSpy1 -->
    <table class="store-table wspy-table">
        <tr>
            <td>Throwing Knives<br><img class="price-icon" src="icns/strength.png" alt="strength"><?php echo $s3; ?></td>
            <td><img class="weapond-pic" src="weaponds/wSpy1.png" alt="Throwing Knives"></td>
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
            <td><?php echo $wSpy1; ?></td>
            <td id="amountInput"><input type="text" name="wSpy1Count" class="form-control store-input" value="0"></td>
        </tr>
    </table>
    <!-- wSpy2 -->
    <table class="store-table wspy-table">
        <tr>
            <td>Ninja Knives<br><img class="price-icon" src="icns/strength.png" alt="strength"><?php echo $s4; ?></td>
            <td><img class="weapond-pic" src="weaponds/wSpy2.png" alt="Ninja Knives"></td>
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
            <td><?php echo $wSpy2; ?></td>
            <td id="amountInput"><input type="text" name="wSpy2Count" class="form-control store-input" value="0"></td>
        </tr>
    </table>
    <table class="store-table">
        <tr>
            <td>
                <button type="submit" id="submit" name="submitSpy" class="btn">Purchase</button>
                <button type="reset" id="reset" class="btn">Clear</button>
            </td>
        </tr>
    </table>

</form>