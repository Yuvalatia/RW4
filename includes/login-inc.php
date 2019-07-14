<?php
    if(isset($_POST['loginSubmit'])){

        //data Baste connect
        require ('dbh.php');

        // Vals
        $email    = mysqli_real_escape_string($conn, $_POST["loginEmail"]);
        $password = mysqli_real_escape_string($conn, $_POST["loginPass"]);

        //Empty check
        if(empty($email) || empty($password)){
            header("Location: ../index.php?Error=login");
            exit();
        }

        $sql = "SELECT * FROM users WHERE userEmail=?;";
        $stmt = mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt, $sql)){
            header("Location: ../index.php?Error=sql");
            exit();
        }else{
            mysqli_stmt_bind_param($stmt, "s", $email);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
            if($row = mysqli_fetch_assoc($result)){
                $passCheck = password_verify($password, $row['userPass']);
                if(!$passCheck){
                    header("Location: ../index.php?Error=login");
                    exit();
                }else{
                    session_start();
                    // SET USER ID
                    $_SESSION['userId'] = $row['userId'];

                    header("Location: ../base.php");
                    exit();
                }
            }else{
                header("Location: ../index.php?Error=login");
                exit();
            }
        }



    }else{
        header("Location: ../index.php?Error=login");
        exit();
    }

?>