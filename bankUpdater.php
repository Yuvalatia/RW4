
<?php

$sql = "SELECT * FROM users";
$results = mysqli_query($conn,$sql);
while($row = $results->fetch_assoc()){
    $ID = $row['userId'];

    $sql1 = "INSERT INTO bank (userId, bankGold, bankTimes, bankUpgrade)
              VALUES ('$ID', '0', '96', '0')";
    mysqli_query($conn,$sql1);
}
?>