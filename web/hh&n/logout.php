<?php 
    session_start();

    if ($_SESSION["userName"])
    {
        session_unset();
    }

    session_start();

    if (!is_array($_SESSION['itemName']) && !is_array($_SESSION['itemPrice']))
    {
        $_SESSION['itemName']    = array();
        $_SESSION['itemPrice']   = array();
        $_SESSION['itemPicture'] = array();
        $_SESSION['itemSize']    = array();
    }

    $_SESSION['numItems'] = 0;
    $_SESSION['plural']   = 'items';

    header("Location: login.php");
?>