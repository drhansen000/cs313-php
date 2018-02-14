<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="https://fonts.googleapis.com/css?family=Handlee" rel="stylesheet">
    <link rel="stylesheet" href="bootstrap-css/bootstrap.min.css" />
    <link rel="stylesheet" href="col.css" />
    <link rel="stylesheet" href="HH&N.css" />
    <link rel="stylesheet" href="previous.css" />
    <title>HH&N History</title>
</head>
<body>
    <?php include("navbar.php") ?>
    <div class="col-2">
        <img class="panel-image" src="images/side-plant.png"/>
    </div>
    <div id="description" class="col-8">
        <div class="col-12">
            <h1>Previous Appointments</h1>
            <?php 
            $i;
            for ($i = 0; $i < sizeof($_SESSION['service']); $i++)
            {
                if ($_SESSION['serviceDate'][$i] < date("Y-m-d")) {
                    echo('<div class="col-12 service">');
                    echo('<h5>Service: ' . $_SESSION['service'][$i] . '</h5>');
                    echo('Received on ' . $_SESSION['serviceDate'][$i] . ' at ' . $_SESSION['serviceTime'][$i] . '<br/>');
                    echo('Stylist ' . $_SESSION['serviceProvider'][$i] . '<br/>');
                    echo(' Cost $' . $_SESSION['serviceCost'][$i] . '</div>');
                }
            }
            ?>
        </div>
        <div class="col-12">
            <h1>Items Purchased</h1>
            <?php 
            $i;
            for ($i = 0; $i < sizeof($_SESSION['pastItemName']); $i++)
            {
                echo('<div class="col-12 product-item">');
                echo('<div class="col-3"><img class="product-image" src="' . $_SESSION['pastItemPicture'][$i] . '"></div>');
                echo('<div class="product-spec col-9 left"><h5>' . $_SESSION['pastItemName'][$i] . '</h5>');
                echo($_SESSION['pastItemSize'][$i] . " oz<br/>");
                echo('$' . $_SESSION['pastItemPrice'][$i] . '</div></div>');
            }
            ?>
        </div>
    </div>
    <div class="col-2">
        <img class="panel-image" src="images/side-plant.png"/>
    </div>
</body>
</html>
