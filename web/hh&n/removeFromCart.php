<?php
    session_start(); 
    if (($key = in_array($_POST['itemName'], $_SESSION['itemName']))) 
    {
        if (sizeof($_SESSION['itemName']) == 1)
        {
            unset($_SESSION['itemName']);
            unset($_SESSION['itemPrice']);
        }
        array_splice($_SESSION['itemName'], $key, 1);
        array_splice($_SESSION['itemPrice'], $key, 1);
        $_SESSION['numItems'] = sizeof($_SESSION['itemName']);
    }
?>