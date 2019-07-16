<!-- Exp Weaponds -->
<form name="expForm" action="store.php" method="POST" onsubmit="return expFormVal()" autocomplete="off">
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
    <!-- wSpy1 -->
    <table class="store-table wexp-table">
        <tr>
            <td>Steel Lock<br><img class="price-icon" src="icons/strength.png" alt="strength"><?php echo $s3; ?></td>
            <td><img class="weapond-pic" src="weaponds/wExp1.png" alt="Steel Lock"></td>
            <td>
                <table class="price-table">
                    <tr>
                        <td><img class="price-icon" src="icons/gold.png" alt="gold"></td><td><?php echo $w3['gold']; ?></td>
                    </tr>
                    <tr>
                        <td><img class="price-icon" src="icons/wood.png" alt="wood"></td><td><?php echo $w3['wood']; ?></td>
                    </tr>
                    <tr>
                        <td><img class="price-icon" src="icons/ore.png" alt="ore"></td><td><?php echo $w3['ore']; ?></td>
                    </tr>
                </table>
            </td>
            <td><?php echo $wExp1; ?></td>
            <td id="amountInput"><input type="text" name="wExp1Count" class="form-control store-input" value="0"></td>
        </tr>
    </table>
    <!-- wExp2 -->
    <table class="store-table wexp-table">
        <tr>
            <td>Guardian Sword<br><img class="price-icon" src="icons/strength.png" alt="strength"><?php echo $s4; ?></td>
            <td><img class="weapond-pic" src="weaponds/wExp2.png" alt="Guardian Sword"></td>
            <td>
                <table class="price-table">
                    <tr>
                        <td><img class="price-icon" src="icons/gold.png" alt="gold"></td><td><?php echo $w4['gold']; ?></td>
                    </tr>
                    <tr>
                        <td><img class="price-icon" src="icons/wood.png" alt="wood"></td><td><?php echo $w4['wood']; ?></td>
                    </tr>
                    <tr>
                        <td><img class="price-icon" src="icons/ore.png" alt="ore"></td><td><?php echo $w4['ore']; ?></td>
                    </tr>
                </table>
            </td>
            <td><?php echo $wExp2; ?></td>
            <td id="amountInput"><input type="text" name="wExp2Count" class="form-control store-input" value="0"></td>
        </tr>
    </table>
    <table class="store-table">
        <tr>
            <td>
                <button type="submit" id="submit" name="submitExp" class="btn">Purchase</button>
                <button type="reset" id="reset" class="btn">Clear</button>
            </td>
        </tr>
    </table>

</form>