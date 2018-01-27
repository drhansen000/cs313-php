<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />    
    <link href="https://fonts.googleapis.com/css?family=Handlee" rel="stylesheet">
    <link rel="stylesheet" href="bootstrap-css/bootstrap.min.css" />
    <link rel="stylesheet" href="col.css" />
    <link rel="stylesheet" href="HH&N.css" />
    <link rel="stylesheet" href="cart.css"/>
    
    <title>HH&N Products</title>
</head>
<body>
    <?php include("navbar.php") ?>
    <div class="col-2">
        <img class="panel-image" src="images/side-plant.png"/>
    </div>
    <div id="description" class="col-8">
        <h1>Your Items</h1>
        <?php 
            $i;
            $total = 0;
            for ($i = 0; $i < sizeof($_SESSION['itemName']); $i++)
            {
                if ($i == 0)
                {
                    echo("<div class='nameList col-6'>Name of item(s):<br /></div>\n");
                    echo("\t<div class='priceList col-6'>Price of item:<br /></div>\n");
                    
                }
                echo("\t<div class='col-12 itemSection'>\n<div class='nameList col-6'>" . $_SESSION['itemName'][$i] . "<br />\n");
                echo("\t<button class='removeButton' onclick=removeFromCart('");
                echo($_SESSION['itemName'][$i] . "')>Remove Item</button><br /></div>\n");
                echo("\t<div class='priceList col-6'>$" . $_SESSION['itemPrice'][$i] . "<br /></div>");
                $total += $_SESSION['itemPrice'][$i];
                echo("\n</div>\n");
            }
            echo("\t<div class='nameList col-6'>Number of Item(s): $i</div>\n");
            echo("\t<div class='priceList col-6'>Total: $$total</div>\n");
            ?>
        <div class='nameList col-6'>
            <!--I don't know why I had to do this, but just surrounding the anchor tag with a button didn't work. I wasn't able 
                To access it with CSS, unless it was inline, which we were told not to use, so...I used a form-->
            <form action="products.php" method="post">
                <button class="bottomButton" type="submit">
                    Continue Browsing
                </button>
            </form>
        </div>
        <div class='priceList col-6'>
            <form action="information.php" method="post">
                <button class="bottomButton" type="submit">
                    Check Out
                </button>
            </form>
        </div>
    </div>
    <div class="col-2">
        <img class="panel-image" src="images/side-plant.png"/>
    </div>
</body>
</html>

<script>
    function removeFromCart(itemName)
    {
        var httpRequest = new XMLHttpRequest();
        httpRequest.onreadystatechange = function () 
        {
            if (this.readyState == 4 && this.status == 200)
            {
                location.reload();
            }
            else if (this.readyState == 4) 
            {
                alert("Failure trying to open file to write. Status is: " + this.statusText);
            }
        };

        httpRequest.open("POST","removeFromCart.php", true);
        httpRequest.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        httpRequest.send("itemName=" + itemName);
    }
</script>