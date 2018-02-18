<?php
    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    include("connect.php");
    
    $serviceId = $_POST['serviceId'];

    $statement = $db->prepare("SELECT id, service, cost, duration FROM service WHERE id = :serviceId");
    $statement->bindValue(':serviceId', $serviceId, PDO::PARAM_INT);
    $statement->execute();
    $serviceInfo = $statement->fetch(PDO::FETCH_ASSOC);
    echo("<div class='col-2'></div><div class='col-4'><u>Service Name</u><br/>" . $serviceInfo['service'] . "</div>");
    echo("<div class='col-2'><u>Duration</u><br/>" . $serviceInfo['duration'] . " minutes</div>");
    echo("<div class='col-1'><u>Cost</u><br/>$" . $serviceInfo['cost'] . "</div>");
?>