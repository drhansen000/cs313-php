<?php 
    session_start();
    session_unset();
    $itemName  = $_POST['itemName'];
    $itemPrice = $_POST['itemPrice']; 
    $numItems  = $_SESSION['numItems'];
    $numItems++;
    
    echo("Item name: '$itemName' or '" . $_POST['itemName'] . "'\n");
    if (!$_SESSION['itemName'] && !$_SESSION['itemPrice'])
    {
        $_SESSION['itemName'] = array();
        $_SESSION['itemPrice'] = array();
    }
    
    $_SESSION['numItems'] = $numItems;
    array_push($_SESSION['itemName'], $itemName);
    array_push($_SESSION['itemPrice'], $itemPrice);
    var_dump($_SESSION['itemName']);
?>
