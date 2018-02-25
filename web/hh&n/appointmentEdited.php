<?php
    session_start();
    //connect to the database
    include("connect.php");
        
        $statement = $db->prepare("UPDATE appointment SET date = :date, time = :time, details = :details, serviceid = :serviceid WHERE id = :id");
        $statement->bindValue(':date', $_POST['date'], PDO::PARAM_STR);
        $statement->bindValue(':time', $_POST['time'], PDO::PARAM_STR);
        $statement->bindValue(':details', $_POST['info'], PDO::PARAM_STR);
        $statement->bindValue(':serviceid', $_POST['serviceType'], PDO::PARAM_INT);
        $statement->bindValue(':id', $_POST['appointmentId'], PDO::PARAM_INT);
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
    <link rel="stylesheet" href="cart.css"/> 
    <title>HH&N Appointment Changed</title>
</head>
<body>
    <?php include("navbar.php") ?>
    <div class="col-2">
        <img class="panel-image" src="images/side-plant.png"/>
    </div>    
    <div id="description" class="col-8">
        <h1>Appointment Updated</h1>
        <p>Your appointment was changed successfully!<br/></p>
    </div>
    <div class="col-2">
        <img class="panel-image" src="images/side-plant.png"/>
    </div>
</body>
</html>
