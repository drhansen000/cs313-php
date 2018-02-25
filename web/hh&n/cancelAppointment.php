<?php
    session_start();
    //connect to the database
    include("connect.php");
    $userId = $_SESSION['userId'];
    $serviceDate = $_POST['serviceDate'];
    $serviceTime = $_POST['serviceTime'];
    $statement = $db->prepare("DELETE FROM appointment WHERE customerId = :userId AND date = :serviceDate AND time = :serviceTime");
    $statement->bindValue(':userId', $userId, PDO::PARAM_INT);
    $statement->bindValue(':serviceDate', $serviceDate, PDO::PARAM_STR);
    $statement->bindValue(':serviceTime', $serviceTime, PDO::PARAM_STR);
    $statement->execute();

    include("setAppointmentVariables.php");
?>
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />    
    <link href="https://fonts.googleapis.com/css?family=Handlee" rel="stylesheet">
    <link rel="stylesheet" href="bootstrap-css/bootstrap.min.css" />
    <link rel="stylesheet" href="col.css" />
    <link rel="stylesheet" href="HH&N.css" />
    <title>HH&N Appointment Canceled</title>
</head>
<body>
    <?php include("navbar.php") ?>
    <div class="col-2">
        <img class="panel-image" src="images/side-plant.png"/>
    </div>    
    <div id="description" class="col-8">
        <h1>Appointment Canceled</h1>
        <p>We hope that you create a new appointment so that we can see you soon!</p>
        <button onclick="window.location.href = 'future.php'" type="button">
            Future Appointments
        </button>
    </div>
    <div class="col-2">
        <img class="panel-image" src="images/side-plant.png"/>
    </div>
</body>
</html>