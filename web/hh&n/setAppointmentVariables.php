<?php
    //create the session arrays for services
    $_SESSION['service']         = array();
    $_SESSION['serviceDate']     = array();
    $_SESSION['serviceTime']     = array();
    $_SESSION['serviceCost']     = array();
    $_SESSION['serviceProvider'] = array();
    $_SESSION['serviceDetails']  = array();

    //create and execute PDO for services
    $stmt2 = $db->prepare('SELECT employee.name, service, date, time, cost, details FROM service JOIN appointment ON service.id = appointment.serviceID JOIN person AS employee ON employee.id = appointment.employeeID JOIN person AS customer ON customer.id = appointment.customerID WHERE customer.id=:theid ORDER BY date');
    $stmt2->bindValue(':theid', $_SESSION['userId'], PDO::PARAM_INT);
    $stmt2->execute();
    $services = $stmt2->fetchAll(PDO::FETCH_ASSOC);

    //push in the values into service session variables
    foreach ($services as $service)
    {
        array_push($_SESSION['service'], $service['service']);
        array_push($_SESSION['serviceDate'], $service['date']);
        array_push($_SESSION['serviceTime'], $service['time']);
        array_push($_SESSION['serviceCost'], $service['cost']);
        array_push($_SESSION['serviceProvider'], $service['name']);
        array_push($_SESSION['serviceDetails'], $service['details']);
    }
?>