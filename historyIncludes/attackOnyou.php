<div class="col-md-6 center">
    <h3 style="color:darkred"><u>Last <?php echo $historyInPage; ?> Attacks on you</u></h3>
    <?php
    $hID = 0;

    $sql = "SELECT * FROM history WHERE attackedId = '$user_id' ORDER BY hId DESC";
    $results = mysqli_query($conn,$sql) or die(mysqli_error($conn));
    while($row = $results->fetch_assoc()){
        if($hID < $historyInPage) {
            // PARAMETERS
            $userAttackerId = $row['attackerId'];
            $winnerId = $row['winnerId'];
            $goldStolen = $row['goldStolen'];
            $woodStolen = $row['woodStolen'];
            $oreStolen = $row['oreStolen'];
            $warriorsDead = $row['warriorsDead'];
            $date = $row['attackDate'];

            $historyId = $hID;

            ?>
            <div class="accordion history-container" id="history">
                <div class="center" data-toggle="collapse" data-target="#Rcollapse<?php echo $historyId; ?>"
                     aria-expanded="true" aria-controls="collapseOne">
                    <table class="history-table">
                        <tr>
                            <td><i class="fas fa-history"></i></td>
                            <td><?php echo getArmyNameById($userAttackerId); ?></td>
                            <td><?php
                                if ($winnerId == $user_id) {
                                    ?>
                                    <span class="green">WIN</span>
                                    <?php
                                } else { ?>
                                    <span class="red">LOSE</span>
                                    <?php
                                }

                                ?></td>
                            <td><?php echo $date; ?></td>
                            <td></td>
                        </tr>
                    </table>
                </div>
                <div id="Rcollapse<?php echo $historyId; ?>" class="collapse" aria-labelledby="headingOne"
                     data-parent="#history">
                    <div class="card-body">
                        <u>Results:</u>
                        <table class="history-table-inner">
                            <tr>
                                <td><img class="price-icon" src="icns/gold.png" alt="gold"></td>
                                <td><?php echo $goldStolen; ?></td>
                                <td><img class="price-icon" src="icns/wood.png" alt="wood"></td>
                                <td><?php echo $woodStolen; ?></td>
                                <td><img class="price-icon" src="icns/ore.png" alt="ore"></td>
                                <td><?php echo $oreStolen; ?></td>
                                <td><img class="price-icon" src="icns/warriors.png" alt="warriors"></td>
                                <td><?php echo $warriorsDead; ?></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            <?php
            $hID++;
        }
    }
    ?>
</div>