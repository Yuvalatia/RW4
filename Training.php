<?php
$TITLE = "Training";
include ('userHeader.php');

// RESOURCE TABLE ADDED
require ('includes/resTable.php');
?>

<h1 id="pageBanner">Training</h1>

<form action="Training.php" method="POST" autocomplete="off">
    <table class="training-table">
        <tr>
            <td colspan="3">Untrained units: <?php echo $_SESSION['userUntrain'];?></td>
        </tr>
        <tr>
            <td>Name</td>
            <td>Weapond</td>
            <td>Price</td>
            <td>Amount</td>
        </tr>
        <tr>
            <td>Iron Sword</td>
            <td><img src="weaponds/wAtt1.png" alt="Iron Sword"></td>
            <td>
                <table>
                    <tr>
                      <td><img class="price-icon" src="icons/gold.png" alt="gold"></td><td>400</td>
                    </tr>
                    <tr>
                        <td><img class="price-icon" src="icons/wood.png" alt="wood"></td><td>200</td>
                    </tr>
                    <tr>
                        <td><img class="price-icon" src="icons/ore.png" alt="ore"></td><td>200</td>
                    </tr>
                </table>
            </td>
            <td>Amount</td>
        </tr>
    </table>
</form>

<?php
include ('userFooter.php');
?>
