<?php

    if(isset($_POST["submit"])){
        // if the path was from the register
    echo "hi";

    // connect to database
    include_once "dbh.php";

    // get all the elements from the from into variable
    $firstname = mysqli_real_escape_string($conn, $_POST["firstname"]);
    $lastname  = mysqli_real_escape_string($conn, $_POST["lastname"]);
    $email     = mysqli_real_escape_string($conn, $_POST["email"]);
    $password  = mysqli_real_escape_string($conn, $_POST["pass"]);
    $race      = $_POST["race"];
    $username  = mysqli_real_escape_string($conn, $_POST["username"]);


        // Empty army name check
        if(empty($username)){
            // if army name is empty return ERROR
            header("Location: ../register.php?armyNameTaken=$username");
            exit();
        }

        // army name taken check
        $sql_u   =  "SELECT * FROM users WHERE userArmy='$username'";
        $results = mysqli_query($conn,$sql_u) or die(mysqli_error($conn));
        if(mysqli_num_rows($results) > 0){
            // army name already taken
            mysqli_close($conn);
            header("Location: ../register.php?armyNameTaken=$username");
            exit();
        }

        // email taken check
        $sql_u   =  "SELECT * FROM users WHERE userEmail='$email'";
        $results = mysqli_query($conn,$sql_u) or die(mysqli_error($conn));
        if(mysqli_num_rows($results) > 0){
            // email already taken
            mysqli_close($conn);
            header("Location: ../register.php?emailTaken=$email");
            exit();
        }




        // Hashing password **
        $hashedPass = password_hash($password, PASSWORD_DEFAULT);

        // Making sql query to enter user info into dataBase
        $sql="INSERT INTO users (userArmy, userRace, userName, userLastName, userEmail, userPass)
              VALUES ('$username', '$race', '$firstname', '$lastname', '$email', '$hashedPass')";

        //
        if(mysqli_query($conn,$sql)){
            // user added to the system


            // Insert all the starting data to user
            require ('newUserBuild.php');

            mysqli_close($conn);
            header("Location: ../index.php?newUser=$username");

        }else{
            // user cannot added to the system sql error
            mysqli_close($conn);
            header("Location: ../index.php?errorNewUser=s");
        }

    }else{
        // if someone direct this page
        header("Location: ../register.php");
        exit();
    }




?>