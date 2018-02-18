<?php 
    session_start(); 

    //connect to the database
    include("connect.php");
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
    
    <title>HH&N Cart Confirmation</title>
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
            $i;
            $total = 0;
            //display thank you message
            echo("<h1>Thank you</h1>");
            echo("<h3>The following " . $_SESSION['plural'] . " will be available for pickup in 3 days</h3>");
            
            //display all the items and information
            for ($i = 0; $i < sizeof($_SESSION['itemName']); $i++)
            {
                if ($i == 0)
                {
                    echo("<div class='nameList col-6'>Name of " . $_SESSION['plural'] .":<br /></div>\n");
                    echo("\t<div class='priceList col-6'>Price of item:<br /></div>\n");
                    
                }
                echo("\t<div class='col-12 itemSection'>\n<div class='nameList col-6'>");
                echo($_SESSION['itemName'][$i] . "<br /></div>\n");
                echo("\t<div class='priceList col-6'>$" . $_SESSION['itemPrice'][$i] . "<br /></div>");
                $total += $_SESSION['itemPrice'][$i];
                echo("\n</div>\n");
                
                //insert into database
                $statement = $db->prepare("INSERT INTO purchaseHistory (personid, productid) VALUES (:userId, (SELECT id FROM product WHERE product.name = :productName))");
                $statement->bindValue(':userId', $_SESSION['userId'], PDO::PARAM_INT);
                $statement->bindValue(':productName', $_SESSION['itemName'][$i], PDO::PARAM_STR);
                $statement->execute();
            }
            
            //display the totals
            echo("\t<div class='nameList col-6'>Number of " . $_SESSION['plural'] . ": $i</div>\n");
            echo("\t<div class='priceList col-6'>Total: $$total</div>\n");
            
            
            //clear the contents
            $_SESSION['numItems'] = 0;
            unset($_SESSION['itemName']);
            unset($_SESSION['itemPrice']);
            
            //create the session arrays for purchased products
            $_SESSION['pastItemName']    = array();
            $_SESSION['pastItemPrice']   = array();
            $_SESSION['pastItemPicture'] = array();
            $_SESSION['pastItemSize']    = array();

            //create and execute PDO for purchased products
            $stmt = $db->prepare('SELECT product.name, size, price, picture FROM product JOIN purchaseHistory ON product.id = purchaseHistory.productid JOIN person ON person.id = purchaseHistory.personid WHERE person.id=:theid');
            $stmt->bindValue(':theid', $_SESSION['userId'], PDO::PARAM_INT);
            $stmt->execute();
            $products = $stmt->fetchAll(PDO::FETCH_ASSOC);

            //push in the values into purchased products session variables
            foreach ($products as $product)
            {
                array_push($_SESSION['pastItemName'], $product['name']);
                array_push($_SESSION['pastItemPrice'], $product['price']);
                array_push($_SESSION['pastItemPicture'], $product['picture']);
                array_push($_SESSION['pastItemSize'], $product['size']);
            }
        }
        else
        {
            echo("<h1>You are not logged in!</h1>");
            echo("<p>Please login before confirming purchase.</p>");
        }
        ?>
    </div>
    <div class="col-2">
        <img class="panel-image" src="images/side-plant.png"/>
    </div>
</body>
</html>