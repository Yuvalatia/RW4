<div class="row res-table">
    <div class="col-xs-6 col-md-3  tStat-res">
        <table>
            <tr>
                <td rowspan="2"><img class="icon-pic" src="icons/gold.png" alt="gold"></td>
                <td class="stat-name">Gold</td>
            </tr>
            <tr>
                <td><?php echo $_SESSION['userGold']; ?></td>
            </tr>
        </table>
    </div>
    <div class="col-xs-6 col-md-3 tStat-res">
        <table>
            <tr>
                <td rowspan="2"><img class="icon-pic" src="icons/wood.png" alt="wood"></td>
                <td class="stat-name">Wood</td>
            </tr>
            <tr>
                <td><?php echo $_SESSION['userWood']; ?></td>
            </tr>
        </table>
    </div>
    <div class="col-xs-6 col-md-3 tStat-res">
        <table>
            <tr>
                <td rowspan="2"><img class="icon-pic" src="icons/ore.png" alt="ore"></td>
                <td class="stat-name">Ore</td>
            </tr>
            <tr>
                <td><?php echo $_SESSION['userOre']; ?></td>
            </tr>
        </table>
    </div>
    <div class="col-xs-6 col-md-3 tStat-res">
        <table>
            <tr>
                <td rowspan="2"><img class="icon-pic" src="icons/turns.png" alt="turns"></td>
                <td class="stat-name">Turns</td>
            </tr>
            <tr>
                <td><?php echo $_SESSION['userTurns']; ?></td>
            </tr>
        </table>
    </div>
</div>
<hr>