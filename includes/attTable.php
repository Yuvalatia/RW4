<!-- Att Weaponds -->
<form action="store.php" method="POST" autocomplete="off">
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
    <!-- wAtt1 -->
    <table class="store-table watt-table">
        <tr>
            <td>Iron Sword<br><img class="price-icon" src="icons/strength.png" alt="strength">10</td>
            <td><img class="weapond-pic" src="weaponds/wAtt1.png" alt="Iron Sword"></td>
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
            <td><?php echo $_SESSION['wAtt1']; ?></td>
            <td id="amountInput"><input type="text" name="wAtt1Count" class="form-control store-input" value="0"></td>
        </tr>
    </table>
    <!-- wAtt2 -->
    <table class="store-table watt-table">
        <tr>
            <td>Moonlit Sword<br><img class="price-icon" src="icons/strength.png" alt="strength">80</td>
            <td><img class="weapond-pic" src="weaponds/wAtt2.png" alt="Moonlit Sword"></td>
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
            <td><?php echo $_SESSION['wAtt2']; ?></td>
            <td id="amountInput"><input type="text" name="wAtt2Count" class="form-control store-input" value="0"></td>
        </tr>
    </table>
    <!-- wAtt3 -->
    <table class="store-table watt-table">
        <tr>
            <td>Ice Breaker<br><img class="price-icon" src="icons/strength.png" alt="strength">450</td>
            <td><img class="weapond-pic" src="weaponds/wAtt3.png" alt="Ice Breaker"></td>
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
            <td><?php echo $_SESSION['wAtt3']; ?></td>
            <td id="amountInput"><input type="text" name="wAtt3Count" class="form-control store-input" value="0"></td>
        </tr>
    </table>
    <!-- wAtt4 -->
    <table class="store-table watt-table">
        <tr>
            <td>Flaming Blade<br><img class="price-icon" src="icons/strength.png" alt="strength">2000</td>
            <td><img class="weapond-pic" src="weaponds/wAtt4.png" alt="Flaming Blade"></td>
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
            <td><?php echo $_SESSION['wAtt4']; ?></td>
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