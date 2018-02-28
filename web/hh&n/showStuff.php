<?php
include("connect.php");

    class Service
    {
        var $id;
        var $service;
        var $cost;
        var $duration;
//        
        function __construct($id, $service, $cost, $duration)
        {
            $this->id = $id;
            $this->service = $service;
            $this->cost = $cost;
            $this->duration = $duration;
        }
    }

    $services = array();


    $statement = $db->prepare("SELECT id, service, cost, duration FROM service");
    $statement->execute();
    $getData = $statement->fetchAll(PDO::FETCH_ASSOC);

    $i = 0;
    foreach ($getData as $service)
    {
        $services[$i] = new Service($service['id'], $service['service'], $service['cost'], $service['duration']);
        $i++;
    }
    echo(json_encode($services));

?>