<?php 
    session_start(); 
    $_SESSION['numItems'] = 0;
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
    
    <title>Thank you</title>
</head>
<body>
    <?php include("navbar.php") ?>
    <div class="col-2">
        <img class="panel-image" src="images/side-plant.png"/>
    </div>
    <div id="description" class="col-8">
        <h1>Thank you <?php echo($_POST['name']); ?></h1>
        <h3>The following <?php echo($_SESSION['plural']); ?> will be shipped to your address</h3>
        <?php 
            $i;
            $total = 0;
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
            }
            echo("\t<div class='nameList col-6'>Number of " . $_SESSION['plural'] . ": $i</div>\n");
            echo("\t<div class='priceList col-6'>Total: $$total</div>\n");
            //clear the contents
            unset($_SESSION['itemName']);
            unset($_SESSION['itemPrice']);
            $_SESSION['numItems'] = 0;
            ?>
        
        <div class='col-12'>
            <div class="col-12">
                <h3>Shipping Address</h3>
                <?php echo($_POST['name']); ?><br/>
                <?php echo($_POST['street']); ?><br/>
                <?php echo($_POST['city'] . ", " . $_POST['state'] . " " . $_POST['zip']); ?><br/>
            </div>
            <!--I don't know why I had to do this, but just surrounding the anchor tag with a button didn't work. I wasn't able 
                To access it with CSS, unless it was inline, which we were told not to use, so...I used a form-->
            <form action="products.php" method="post">
                <button class="bottomButton" type="submit">
                    Back to Browsing
                </button>
            </form>
        </div>
    </div>
    <div class="col-2">
        <img class="panel-image" src="images/side-plant.png"/>
    </div>
</body>
</html>