<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" type="text/css" href="col.css" />
    <link rel="stylesheet" type="text/css" href="mortgage.css" />
    <title>Mortgage Calculator</title>
</head>

<body onload="setFocus()">
    <div id="mortgage-calculator" class="col-6">
        <h1>Mortgage Calculator</h1>
        <hr/>
        <div class="col-12">
            <span class="col-5 prompt">APR:</span>
            <?php 
                $apr = $_GET["apr"];
                echo $apr;
            ?>
        </div>
        <div class="col-12">
            <span class="col-5 prompt">Loan Term: </span>
            <?php 
                $term = $_GET["term"];
                echo $term;
            ?>
        </div>
        <div class="col-12">
            <span class="col-5 prompt">Loan Amount: </span>
            <?php 
                $amount = $_GET["amount"];
                echo $amount;
            ?>
        </div>
        <div class="col-12">
            <span class="col-5 prompt">Monthly Payment: </span>
            <?php 
                $apr = $_GET["apr"];
                $term = $_GET["term"];
                $amount = $_GET["amount"];
            
                $rate = ($apr / 1200); 
                $nperiods = ($term * 12);
                $base = (1 + $rate);
                $exp = ($nperiods * -1);
                $payment = (($amount * $rate) / (1 - pow($base,$exp)));
                $payment = round($payment,2);
                echo " $ $payment"; 
            ?>
        </div>
        <button type="button" onclick="window.location='mortgage.html'">
            Go Back
        </button>
    </div>
</body>

</html>
