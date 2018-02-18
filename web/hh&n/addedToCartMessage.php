<?php 
    session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />    
    <link href="https://fonts.googleapis.com/css?family=Handlee" rel="stylesheet">
    <link rel="stylesheet" href="bootstrap-css/bootstrap.min.css" />
    <link rel="stylesheet" href="col.css" />
    <link rel="stylesheet" href="HH&N.css" />
    <title>HH&N Added To Cart</title>
</head>
<body>
    <?php include("navbar.php") ?>
    <div class="col-2">
        <img class="panel-image" src="images/side-plant.png"/>
    </div>    
    <div id="description" class="col-8">
        <h1>Added to Cart!</h1>
        <p><?php echo(end($_SESSION['itemName'])); ?> was successfully added to the cart.</p>
        <button onclick="window.location.href = 'products.php'" type="button">
            Back to browsing
        </button>
        <button onclick="window.location.href = 'cart.php'" type="button">
            Go to cart
        </button>
    </div>
    <div class="col-2">
        <img class="panel-image" src="images/side-plant.png"/>
    </div>
</body>
</html>