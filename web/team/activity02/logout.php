<?php 
    session_start();

    if ($_SESSION["loginType"])
    {
        unset($_SESSION["loginType"]);
    }

    header("Location: login.php");
?>
