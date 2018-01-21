<?php 
    //always start session when utilizing SESSION
    session_start();
    
    
    $loginType = $_GET["loginType"];
    $_SESSION['loginType'] = $loginType;
?>
