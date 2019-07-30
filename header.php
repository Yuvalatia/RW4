<?php
ob_start();
    session_start();

    // ALERTS INCLUDE
    require ('includes/alerts.php');
    // GAME STATS
    require ('includes/gameStats.php');

    if(isset($_SESSION['userId'])) {
    // FETCH USER DETAILS
        require('includes/userDetailsFetch.php');
    // FETCH FUNCTIONS NEEDED
        require ('includes/function-inc.php');
    }
?>
<!doctype html>
<html lang="en">
  <head>
    <title>RW4 | <?php echo $TITLE;?></title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <meta name="author" content="Yuval atia">
    <link rel="icon" href="imgs/foryuval32.ico" sizes="32x32">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="style/style.css">
  </head>
  <body>
      <nav >

      </nav>
      <!-- logo -->
      <div class="container">
      <div class="row">
          <div class="col-sm-12 text-center">
                <img src="imgs/main_logo_beta.png" alt="logo" id="logo">
          </div>
         
          </div>
      </div>
        <!-- NavBar -->

        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item <?php
                // active link
                if($TITLE == "Home"){
                    echo "active";
                }
                ?>">
                    <a class="nav-link" href="index.php"><i class="fas fa-home"></i> Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item <?php
                // active link
                if($TITLE == "Story"){
                    echo "active";
                }
                ?>">
                    <a class="nav-link" href="#"><i class="fas fa-torah"></i> The Story</a>
                </li>
                <li class="nav-item <?php
                // active link
                if($TITLE == "Guide"){
                    echo "active";
                }
                ?>">
                    <a class="nav-link" href="#"><i class="fas fa-info"></i> Guide</a>
                </li>
                <li class="nav-item <?php
                // active link
                if($TITLE == "Hall Of Fame"){
                    echo "active";
                }
                ?>">
                    <a class="nav-link" href="#"><i class="fas fa-trophy"></i> Hall Of Fame</a>
                </li>
                <li class="nav-item <?php
                // active link
                if($TITLE == "Contact"){
                    echo "active";
                }
                ?>">
                    <a class="nav-link" href="#"><i class="fas fa-envelope-open"></i> Contact</a>
                </li>
                <!--<li class="nav-item">
                    <a class="nav-link disabled" href="#">Disabled</a>
                </li>-->
            </ul>
            <ul class="navbar-nav ">
                <?php
                if(!isset($_SESSION['userId'])){
                    // IF ACCOUNT DOES NOT CONNECTED
                ?>
                    <li class="nav-item">
                        <a class="nav-link <?php
                        // active link
                        if($TITLE == "Register"){
                            echo "active";
                        }
                        ?>" href="register.php"><i class="fas fa-user"></i> Register</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="" data-toggle="modal" data-target="#modal-login"><i class="fas fa-sign-in-alt"></i> Login</a>
                    </li>
                    <?php
                }else{
                // IF ACCOUNT CONNECTED
                ?>
                    <li class="nav-item">
                       <a class="nav-link" href="base.php" id="armyNameTag" > <?php echo $userArmy; ?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="includes/logout.php" ><i class="fas fa-sign-out-alt"></i> Logout</a>
                    </li>

                <?php
                }
                ?>

            </ul>
                   
                
    </nav>
      <!-- body -->

              <div class="col-sm-12" id="realm">