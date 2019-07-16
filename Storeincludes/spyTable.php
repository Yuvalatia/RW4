<!-- Spy Weaponds -->
<form name="spyForm" action="store.php" method="POST" onsubmit="return spyFormVal()" autocomplete="off">
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
    <table class="store-table wspy-table">
        <tr>
            <td>Throwing Knives<br><img class="price-icon" src="icons/strength.png" alt="strength">450</td>
            <td><img class="weapond-pic" src="weaponds/wSpy1.png" alt="Throwing Knives"></td>
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
            <td><?php echo $wSpy1; ?></td>
            <td id="amountInput"><input type="text" name="wSpy1Count" class="form-control store-input" value="0"></td>
        </tr>
    </table>
    <!-- wSpy2 -->
    <table class="store-table wspy-table">
        <tr>
            <td>Ninja Knives<br><img class="price-icon" src="icons/strength.png" alt="strength">2000</td>
            <td><img class="weapond-pic" src="weaponds/wSpy2.png" alt="Ninja Knives"></td>
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