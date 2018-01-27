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
    <link rel="stylesheet" href="information.css"/>
    <title>HH&N Products</title>
</head>
<body>
    <?php include("navbar.php") ?>
    <div class="col-2">
        <img class="panel-image" src="images/side-plant.png"/>
    </div>
    <div id="description" class="col-8">
        <div class="col-12">
            <h1>Checkout</h1>
            <?php 
                echo("<h3>" . $_SESSION['numItems'] . " " . $_SESSION['plural']);
            ?>
        </div>
        <div class="col-12">
            <form action="confirmation.php" method="post">
                <p>Enter Shipping Address</p>
                <div class="col-12">
                    <div class="title-sec col-4">
                        Full name:
                    </div>
                    <div class="input-sec col-8">
                        <input class="long-box" type="text" placeholder="John Steven Doe" 
                               maxlength="40" name="name" required/>
                    </div>
                </div>
                <div class="col-12">
                    <div class="title-sec col-4">
                        Street address:
                    </div>
                    <div class="input-sec col-8">
                        <input class="long-box" type="text" placeholder="2500 E 4 W Apt. 409" 
                               maxlength="40" name="street" required/>
                    </div>
                </div>
                <div class="col-12">
                    <div class="title-sec col-4">
                        City: 
                    </div>
                    <div class="input-sec col-8">
                        <input id="city-box" type="text" placeholder="Rexburg" maxlength="21" 
                               name="city" required/>
                        <span>State: </span>
                        <input id="state-box" type="text" placeholder="ID" maxlength="2" 
                               name="state" required/>
                        <span>ZIP: </span>
                        <input id="zip-box" type="text" placeholder="83440" maxlength="5" 
                               name="zip" required/>
                    </div>
                </div>
                <div class="col-12">
                    <div class="title-sec col-4">
                        Phone number:
                    </div>
                    <div class="input-sec col-8">
                        <input id="phoneNumberID" class="long-box" type="text" placeholder="XXX-XXX-XXXX" 
                               maxlength="12" onkeydown="autoCreatePhone()" name="phone" required/>
                    </div>
                </div>
                <div class='title-sec  col-6'>
                <button class="bottomButton" type="submit">
                    Complete Order
                </button>
                </div>
            </form>
            <div class='input-sec col-6'>
            <form action="cart.php" method="post">
                <button class="bottomButton" type="submit">
                    Return To Cart
                </button>
            </form>
        </div>
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
    
    function autoCreatePhone()
    {
        var phoneNumber = document.getElementById("phoneNumberID").value;
        var key = event.key;
        if (phoneNumber.match(/^\d{3}$/) && key != "Backspace" && key != "-") 
        {
            document.getElementById("phoneNumberID").value += '-';
        } 
        else if (phoneNumber.match(/^\d{3}\-\d{3}$/) && key != "Backspace" && key != "-") 
        {
            document.getElementById("phoneNumberID").value += '-';
        }
    }
</script>