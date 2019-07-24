<!-- untrain -->
<table class="store-table">
    <tr>
        <td><strong>Untrained units: </strong></td>
        <td>
            <img class="price-icon" src="icns/untrain.png" alt="untrain"> <?php echo $userUntrain; ?>
        </td>
    </tr>
</table>

<!-- Training table -->
<form name="trainForm" action="train.php" method="POST" onsubmit="return trainFormVal()" autocomplete="off">
    <table class="store-table">
        <tr>
            <div class="row">
                <div class="col-sm-4"><th>Unit</th></div>
                <div class="col-sm-2"><th>Name</th></div>
                <div class="col-sm-2"><th>Price</th></div>
                <div class="col-sm-2"><th>Owned</th></div>
                <div class="col-sm-2"><th>Amount</th></div>
            </div>
        </tr>
    </table>
    <!-- warriors -->
    <table class="store-table train-table">
        <tr>
            <td><img class="icon-pic" src="icns/warriors.png" alt="warriors"></td>
            <td>Warriors</td>
            <td>
                <table class="price-table">
                    <tr>
                        <td><img class="price-icon" src="icns/gold.png" alt="gold"></td><td><?php echo $warriorPrice; ?></td>
                    </tr>
                </table>
            </td>
            <td><?php echo $userWarriors; ?></td>
            <td id="amountInput"><input type="text" name="warriorCount" class="form-control store-input" value="0"></td>
        </tr>
    </table>
    <!-- workers -->
    <table class="store-table train-table">
        <tr>
            <td><img class="icon-pic" src="icns/workers.png" alt="workers"></td>
            <td>Workers</td>
            <td>
                <table class="price-table">
                    <tr>
                        <td><img class="price-icon" src="icns/gold.png" alt="gold"></td><td><?php echo $workerPrice; ?></td>
                    </tr>
                </table>
            </td>
            <td><?php echo $userWorkers; ?></td>
            <td id="amountInput"><input type="text" name="workerCount" class="form-control store-input" value="0"></td>
        </tr>
    </table>
    <!-- intlg -->
    <table class="store-table train-table">
        <tr>
            <td><img class="icon-pic" src="icns/intlg.png" alt="intlg"></td>
            <td>Intelligents</td>
            <td>
                <table class="price-table">
                    <tr>
                        <td><img class="price-icon" src="icns/gold.png" alt="gold"></td><td><?php echo $intlgPrice; ?></td>
                    </tr>
                </table>
            </td>
            <td><?php echo $userIntlg; ?></td>
            <td id="amountInput"><input type="text" name="intlgCount" class="form-control store-input" value="0"></td>
        </tr>
    </table>
    <!-- spy -->
    <table class="store-table train-table">
        <tr>
            <td><img class="icon-pic" src="icns/spy.png" alt="spy"></td>
            <td>Spies</td>
            <td>
                <table class="price-table">
                    <tr>
                        <td><img class="price-icon" src="icns/gold.png" alt="gold"></td><td><?php echo $spyPrice; ?></td>
                    </tr>
                </table>
            </td>
            <td><?php echo $userSpy; ?></td>
            <td id="amountInput"><input type="text" name="spyCount" class="form-control store-input" value="0"></td>
        </tr>
    </table>
    <!-- exp -->
    <table class="store-table train-table">
        <tr>
            <td><img class="icon-pic" src="icns/exp.png" alt="exp"></td>
            <td>Explorers</td>
            <td>
                <table class="price-table">
                    <tr>
                        <td><img class="price-icon" src="icns/gold.png" alt="gold"></td><td><?php echo $expPrice; ?></td>
                    </tr>
                </table>
            </td>
            <td><?php echo $userExp; ?></td>
            <td id="amountInput"><input type="text" name="expCount" class="form-control store-input" value="0"></td>
        </tr>
    </table>
    <table class="store-table">
        <tr>
            <td>
                <button type="submit" id="submit" name="submitTrain" class="btn">Recruit</button>
                <button type="reset" id="reset" class="btn">Clear</button>
            </td>
        </tr>
    </table>

</form>