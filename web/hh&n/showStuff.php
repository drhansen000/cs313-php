<?php
include("connect.php");

    $statement = $db->prepare("SELECT id, service, cost, duration FROM service");
    $statement->execute();
    $services = $statement->fetchAll(PDO::FETCH_ASSOC);

    foreach ($services as $service)
    {
        echo("Id: " . $service['id'] . "<br/>");
        echo("Service: " . $service['service'] . "<br/>");
        echo("Cost: " . $service['cost'] . "<br/>");
        echo("Duration: " . $service['duration'] . "<br/>");
    }

?>