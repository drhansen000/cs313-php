<?php 
    session_start();
    $itemName = $_POST['itemName'];
    $itemPrice = $_POST['itemPrice']; 
    $numItems = $_SESSION['numItems'];
    $numItems++;
    
    $_SESSION['itemName'] = array();
    $_SESSION['itemPrice'] = array();
    
    $_SESSION['numItems'] = $numItems;
    array_push($_SESSION['itemName'], $itemName);
    array_push($_SESSION['itemPrice'], $itemPrice);
?>
