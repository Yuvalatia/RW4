<?php

    // DEPOSIT CALC
    if(isset($_POST['depositSubmit'])){

        $depositGold = $_POST['depositInput'];

        // VALIDATION ONLY NUMBERS
        if(preg_match($numbers,$depositGold)){
            // CHECKS MAX FOR DEPOSIT
            $maxDep = (int)($userGold /2);

            if($depositGold > $maxDep || $bankTimes < $bankStatus){
                // too much gold dep
                badAlert("Error: You can deposit only half of ur gold every time and need at least 1 deposit available.");
            }else{
                // good dep
                // NEW RES
                $newUserGold = $userGold - $depositGold;
                $newBankGold = $goldBank + $depositGold;
                $newBankTimes = $bankTimes - $bankStatus;

                // DATABASE WORK
                $sql = "UPDATE resources SET userGold='$newUserGold' WHERE userId='$user_id'";
                if (mysqli_query($conn, $sql)) {
                    // cont
                    $sql = "UPDATE bank SET bankGold='$newBankGold', bankTimes='$newBankTimes' WHERE userId='$user_id'";
                    if(mysqli_query($conn,$sql)){
                        goodAlert("Deposit successes!");
                    }else{
                        badAlert("Error updating record: " . mysqli_error($conn));
                    }
                } else {
                    badAlert("Error updating record: " . mysqli_error($conn));
                }
                // REFRESH THE PAGE - DETAILS
                require('includes/userDetailsFetch.php');
            }

        }

    }


// WITHDRAW CALC
if(isset($_POST['withdrawSubmit'])){

    $withdrawGold = $_POST['withdrawInput'];

    // VALIDATION ONLY NUMBERS
    if(preg_match($numbers,$withdrawGold)){
        // CHECKS MAX FOR DEPOSIT


        if($withdrawGold > $goldBank){
            // too much gold width
            badAlert("Error: You cant withdraw more gold than u have in bank.");
        }else{
            // good width
            // NEW RES
            $newUserGold = $userGold + $withdrawGold;
            $newBankGold = $goldBank - $withdrawGold;

            // DATABASE WORK
            $sql = "UPDATE resources SET userGold='$newUserGold' WHERE userId='$user_id'";
            if (mysqli_query($conn, $sql)) {
                // cont
                $sql = "UPDATE bank SET bankGold='$newBankGold' WHERE userId='$user_id'";
                if(mysqli_query($conn,$sql)){
                    goodAlert("Withdraw successes!");
                }else{
                    badAlert("Error updating record: " . mysqli_error($conn));
                }
            } else {
                badAlert("Error updating record: " . mysqli_error($conn));
            }
            // REFRESH THE PAGE - DETAILS
            require('includes/userDetailsFetch.php');
        }

    }

}



?>