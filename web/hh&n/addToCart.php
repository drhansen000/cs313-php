<?php 
    session_start();
    
    $itemName  = $_POST['itemName'];
    $itemPrice = $_POST['itemPrice']; 
    

    if (!is_array($_SESSION['itemName']) && !is_array($_SESSION['itemPrice']))
    {
        $_SESSION['itemName'] = array();
        $_SESSION['itemPrice'] = array();
    }

    array_push($_SESSION['itemName'], $itemName);
    array_push($_SESSION['itemPrice'], $itemPrice);
    $_SESSION['numItems'] = sizeof($_SESSION['itemName']);
    echo($_SESSION['numItems']);
?>
