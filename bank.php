<?php
$TITLE = "Bank";
include ('userHeader.php');

// Bank Calc
require ('bankincludes/bankCalc.php');

// RESOURCE TABLE ADDED
require ('includes/resTable.php');

?>

<h1 id="pageBanner">Bank</h1>

<div class="col-sm-12 bank-div">
    <div class="row">
        <div class="col-sm-4">
            <i class="fas fa-coins"></i> Gold in Bank : <?php echo $goldBank; ?>
        </div>
        <div class="col-sm-4">
            <i class="fas fa-university"></i> Bank Level : <?php echo $bankUpgrade; ?>
        </div>
        <div class="col-sm-4">
            <i class="fas fa-hand-holding-usd"></i> Number of Deposits : <?php echo (int)($bankTimes/$bankStatus); ?>
        </div>
        <div class="col-sm-2"></div>
        <div class="col-sm-8">
            <hr>
            * You will get 2 deposits per day.<br>
            * The bank withdraws are unlimited and costless.
            <hr>
        </div>
        <div class="col-sm-2"></div>
        <div class="col-sm-6">
            <form name="depositForm" action="bank.php" method="POST" onsubmit="return depositFormVal()" autocomplete="off">
            <input type="text" name="depositInput" class="form-control" value="<?php echo (int)($userGold /2); ?>">
            <button type="submit" name="depositSubmit" value="on">Deposit</button>
            </form>
        </div>
        <div class="col-sm-6">
            <form name="withdrawForm" action="bank.php" method="POST" onsubmit="return withdrawFormVal()" autocomplete="off">
            <input type="text" name="withdrawInput" class="form-control" value="<?php echo $goldBank ; ?>">
            <button type="submit" name="withdrawSubmit" value="on">Withdraw</button>
            </form>
        </div>
    </div>
</div>







<script src="scripts/bank.js"></script>


<?php
include ('userFooter.php');
?>
