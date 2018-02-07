<?php
    session_start(); 
    //search array for item and return its position
    if (($key = in_array($_POST['itemName'], $_SESSION['itemName']))) 
    {
        //if that's the last item, destroy the array
        if (sizeof($_SESSION['itemName']) == 1)
        {
            unset($_SESSION['itemName']);
            unset($_SESSION['itemPrice']);
        }
        
        //remove item from index found, 3rd parameter makes sure it only removes 1 item
        array_splice($_SESSION['itemName'], $key, 1);
        array_splice($_SESSION['itemPrice'], $key, 1);
        $_SESSION['numItems'] = sizeof($_SESSION['itemName']);
        
        //singular or plural tense
        if ($_SESSION['numItems'] == 1)
        {
            $_SESSION['plural'] = "item";
        }
        else
        {
            $_SESSION['plural'] = "items";
        }
    }
?>