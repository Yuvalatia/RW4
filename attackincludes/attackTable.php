<table class="table table-striped table-dark att-table table-hover">
    <thead>
    <tr>
        <th scope="col"># Rank</th>
        <th scope="col"><img class="price-icon" src="icons/army.png" alt="army"> Army Name</th>
        <th scope="col"><img class="price-icon" src="icons/race.png" alt="race"> Race</th>
        <th scope="col"><img class="price-icon" src="icons/gold.png" alt="gold"> Gold</th>
    </tr>
    </thead>
    <tbody>
        <?php
            // SQL CONN
            $sql = "SELECT * FROM users ORDER BY userRank";
            $results = mysqli_query($conn,$sql);
            while($row = $results->fetch_assoc()){
                if($row['userRank'] > $page*$armysInPage && $row['userRank'] < ($page+1)*$armysInPage){ ?>
                    <tr class="<?php if($row['userId'] == $user_id) echo "myArmy"; ?>">
                        <td scope="col"><?php echo $row['userRank']; ?></td>
                        <td>
                            <?php
                                if($row['userId'] == $user_id){
                                    echo $row['userArmy'];
                                } else{ ?>
                                    <a href="attPanel.php?armyId=<?php echo $row["userId"]; ?>"><?php echo $row['userArmy']; ?></a>
                                        <?php
                                }
                            ?>
                        </td>
                        <td><?php echo race($row['userRace']); ?></td>
                        <td><?php echo getArmyGold($row['userId']); ?></td>
                    </tr>
                <?php

                }
            }
        ?>
    </tbody>
</table>
    <table class="store-table">
        <tr>
            <td>
                <?php
                    if($page != 0) { ?>
                <a href="attack.php?page=<?php echo $page-1; ?>"><i class="fas att-arrow fa-angle-double-left" ></i ></a>
                    <?php
                    }
                ?>
            </td>
            <td>Page <?php echo $page; ?> from <?php echo $maxPage; ?></td>
            <td>
                <?php
                if($page != $maxPage) { ?>
                    <a href="attack.php?page=<?php echo $page+1; ?>"><i class="fas att-arrow fa-angle-double-right" ></i ></a>
                    <?php
                }
                ?>
            </td>
        </tr>
    </table>