<?php
    session_start();
    //connect to the database
    include("connect.php");
    if (isset($_SESSION['userName']))
    {
        echo("<h1>See you then!</h1><p>Your appointment was created successfully!<br/></p>");
        $statement = $db->prepare("INSERT INTO appointment (date, time, history, details, serviceid, customerid, employeeid) VALUES (:date, :time, 'created', :details, :serviceid, :customerid, 7)");
        $statement->bindValue(':date', $_POST['date'], PDO::PARAM_STR);
        $statement->bindValue(':time', $_POST['time'], PDO::PARAM_STR);
        $statement->bindValue(':details', $_POST['info'], PDO::PARAM_STR);
        $statement->bindValue(':serviceid', $_POST['serviceType'], PDO::PARAM_INT);
        $statement->bindValue(':customerid', $_SESSION['userId'], PDO::PARAM_INT);
        $statement->execute();
        
        //create the session arrays for services
        $_SESSION['service']         = array();
        $_SESSION['serviceDate']     = array();
        $_SESSION['serviceTime']     = array();
        $_SESSION['serviceCost']     = array();
        $_SESSION['serviceProvider'] = array();
        
        //create and execute PDO for services
        $stmt2 = $db->prepare('SELECT employee.name, service, date, time, cost FROM service JOIN appointment ON service.id = appointment.serviceID JOIN person AS employee ON employee.id = appointment.employeeID JOIN person AS customer ON customer.id = appointment.customerID WHERE customer.id=:theid');
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
        }
    }
?>
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />    
    <link href="https://fonts.googleapis.com/css?family=Handlee" rel="stylesheet">
    <link rel="stylesheet" href="bootstrap-css/bootstrap.min.css" />
    <link rel="stylesheet" href="col.css" />
    <link rel="stylesheet" href="HH&N.css" />
    <link rel="stylesheet" href="cart.css"/> 
    <title>HH&N Appointment Created</title>
</head>
<body>
    <?php include("navbar.php") ?>
    <div class="col-2">
        <img class="panel-image" src="images/side-plant.png"/>
    </div>    
    <div id="description" class="col-8">
<?php
    if (isset($_SESSION['userName']))
    {
        echo("<h1>See you then!</h1><p>Your appointment was created successfully!<br/></p>");
    }
    else
    {
        echo("<h1>You are not logged in!</h1>");
        echo("<p>Please login before confirming you appointment.</p>");
    }
?>
    </div>
    <div class="col-2">
        <img class="panel-image" src="images/side-plant.png"/>
    </div>
</body>
</html>
