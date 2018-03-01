<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" type="text/css" href="col.css" />
    <link rel="stylesheet" type="text/css" href="assign10_p.css" />
    <title>Pokemon Merchandise | Confirmation</title>
</head>

<body>
    <header class="col-6">
        <p class="header">Confirmation of Purchase</p>
    </header>
    <main class="col-6">
        <div class="col-6">
            <p class="sub-header">Ship To:</p>
            <hr/>
            <p>
                <?php
        $first = $_GET["first"];
        $last = $_GET["last"];
        echo " $first $last<br/>";
                ?></p>
                    <p>Address:<br/>
                    <?php 
        $street = $_GET["street"];
        $apt = $_GET["apt"];
        $city = $_GET["city"];
        $state = $_GET["state"];
        $zip = $_GET["zip"];
        echo "$street $apt <br/>";
        echo "$city $state $zip";
        ?>
            </p>
        </div>
        <div class="col-6">
            <p class="sub-header">Contact Info:</p>
            <hr/>
            <p>Phone Number:<br/>
                <?php
        $tel = $_GET["telephone"];
        echo $tel;
    ?>
            </p>
            <p>Email:<br/>
                <?php
        $email = $_GET["email"];
        echo "$email";
    ?>
            </p>
        </div>
        <div class="col-6">
            <p class="sub-header">Card Information:</p>
            <hr/>
            <p>
                <?php
                $cardNumber = $_GET["card"];
                $month      = $_GET["month"];
                $year       = $_GET["year"];
                switch ($month)
                {
                    case 1:
                        $month = "January";
                        break;
                    case 2:
                        $month = "February";
                        break;
                    case 3:
                        $month = "March";
                        break;
                    case 4:
                        $month = "April";
                        break;
                    case 5:
                        $month = "May";
                        break;
                    case 6:
                        $month = "June";
                        break;
                    case 7:
                        $month = "July";
                        break;
                    case 8:
                        $month = "August";
                        break;
                    case 9:
                        $month = "September";
                        break;
                    case 10:
                        $month = "October";
                        break;
                    case 11:
                        $month = "November";
                        break;
                    case 12:
                        $month = "December";
                        break;
                }
                echo "<p>Card Number:<br/>$cardNumber</p><p><br/> Expires:<br/> $month 20$year</p>";
            ?>
            </p>
            <?php
            $cardType = $_GET["cardType"];
                echo "<p>Card Type:<br/>$cardType</p>";
            ?>

        </div>
        <div class="col-6">
            <p class="sub-header">Items In Cart:</p>
            <hr/>
                <?php
        $total = 0;
        $bulb  = $_GET["bpurchase"];
        $squir = $_GET["spurchase"];
        $pik   = $_GET["ppurchase"];
        $char  = $_GET["cpurchase"];
        if ($bulb == 100)
        {
            echo "<div class='col-7'><p>Bulbasaur:</p></div><div class='col-5'><p>$$bulb.00</p></div>";
            $total += 100;
        }
        if ($squir == 100)
        {
            echo "<div class='col-7'><p>Squirtle:</p></div><div class='col-5'><p>$$squir.00</p></div>";
            $total += 100;
        }
        if ($char == 100)
        {
            echo "<div class='col-7'><p>Charmander:</p></div><div class='col-5'><p>$$char.00</p></div>";
            $total += 100;
        }
        if ($pik == 150)
        {
            echo "<div class='col-7'><p>Pikachu:</p></div><div class='col-5'><p>$$pik.00</p></div>";
            $total += 150;
        }
    ?>
            <p class="col-7">
                Total:
            </p>
            <p class="col-5">
                <?php 
        echo "$$total.00";    
        ?>
            </p>
        </div>

        <form action="assign10_C.php" method="get">
            <div class="col-12" style="text-align:center;">
            <input type="submit" name="confirm" value="Confirm" />
            <input type="submit" name="cancel" value="Cancel" />
            </div>
        </form>
    </main>
</body>

</html>
