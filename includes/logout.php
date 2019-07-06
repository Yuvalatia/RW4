<?php
//LOG OUT

session_start();
// delete all session variables
session_unset();
// kill the session
session_destroy();
header("Location: ../index.php");
exit();

?>