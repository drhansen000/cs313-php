<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="https://fonts.googleapis.com/css?family=Handlee" rel="stylesheet">
    <link rel="stylesheet" href="bootstrap-css/bootstrap.min.css" />
    <link rel="stylesheet" href="col.css" />
    <link rel="stylesheet" href="HH&N.css" />
    <link rel="stylesheet" href="future.css" />
    <title>HH&N Future Appointments</title>
</head>
<body>
    <?php include("navbar.php") ?>
    <div class="col-2">
        <img class="panel-image" src="images/side-plant.png"/>
    </div>
     <div id="description" class="col-8">
        <div class="col-12">
            <h1>Future Appointments</h1>
            <?php 
            $i;
            for ($i = 0; $i < sizeof($_SESSION['service']); $i++)
            {
                if ($_SESSION['serviceDate'][$i] > date("Y-m-d")) {
                    echo('<div class="col-12 service">');
                    echo('<h5>Service: ' . $_SESSION['service'][$i] . '</h5>');
                    echo('Planned for ' . $_SESSION['serviceDate'][$i] . ' at ' . $_SESSION['serviceTime'][$i] . '<br/>');
                    echo('Stylist ' . $_SESSION['serviceProvider'][$i] . '<br/>');
                    echo('Cost $' . $_SESSION['serviceCost'][$i] . '</div>');
                }
            }
            ?>
                <button onclick="window.location.href = 'availability.php'" type="button">Create Future Appointment</button>
        </div>
    </div>
    <div class="col-2">
        <img class="panel-image" src="images/side-plant.png"/>
    </div>
</body>
</html>