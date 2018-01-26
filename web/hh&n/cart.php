<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />    
    <link href="https://fonts.googleapis.com/css?family=Handlee" rel="stylesheet">
    <link rel="stylesheet" href="bootstrap-css/bootstrap.min.css" />
    <link rel="stylesheet" href="col.css" />
    <link rel="stylesheet" href="HH&N.css" />
    <link rel="stylesheet" href="products.css"/>
    <title>HH&N Products</title>
</head>
<body>
    <?php include("navbar.php") ?>
    <div class="col-2">
        <img class="panel-image" src="images/side-plant.png"/>
    </div>
    <div id="description" class="col-8">
        <h1>Your Items</h1>
        <div class="col-6">
        Name of item(s):<br />
        <?php 
            $i;
            for ($i = 0; $i < sizeof($_SESSION['itemName']); $i++)
            {
                echo($_SESSION['itemName'][$i] . "<br />");
            }
            echo("Number of Items: $i");
            ?>
        </div>
        <div class="col-6">
            Price of item:<br />
            <?php
                for ($i = 0; $i < sizeof($_SESSION['itemPrice']); $i++)
                {
                    echo('$' . $_SESSION['itemPrice'][$i] . "<br />");
                    $total += $_SESSION['itemPrice'][$i];
                }
                echo("Total: $$total");
            ?>
        </div>
    </div>
    <div class="col-2">
        <img class="panel-image" src="images/side-plant.png"/>
    </div>
</body>
</html>