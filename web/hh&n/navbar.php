<?php
    session_start();
        //This code was taken from Bro. Burton's team solution
        // From StackOverflow: http://stackoverflow.com/a/12201089/1932766
        // The second argument to pathinfo() strips the path and extension from the file name (PHP >= 5.2)
        $file = pathinfo($_SERVER['PHP_SELF'], PATHINFO_FILENAME);
?>

<!DOCTYPE html/>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="navbar.css"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body>
    <nav class="navbar navbar-expand-sm navbar-dark fixed-top">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav">
                <img class="navbar-brand" alt="HH&N Logo" src="images/green-black-logo.png"/>
                <li class="nav-item <?php if ($file === 'offer') echo 'active' ?>" >
                    <a class="nav-link" href="offer.php">What We Offer</a>
                </li>
                <li class="nav-item <?php if ($file === 'products') echo 'active' ?>" >
                    <a class="nav-link" href="products.php">Product Store</a>
                </li>
                <li class="nav-item <?php if ($file === 'previous') echo 'active' ?>" >
                        <a class="nav-link" href="previous.php">Previous Appointments</a>                
                </li>
                <li class="nav-item <?php if ($file === 'future') echo 'active' ?>" >
                        <a class="nav-link" href="future.php">Future Appointments</a>                
                </li>
            </ul>
        </div>
        <div>
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a id="numberInCart"class="nav-link" href="cart.php" value="<?php echo($_SESSION['numItems']); ?>">
                        <?php echo($_SESSION['numItems']); ?> In Cart
                    </a>
                </li>
            
            </ul>
        </div>
    </nav>
</body>
</html>

<?php
    function checkFile($fileName)
    {
        if ($_SERVER["SCRIPT_FILENAME"] == "/home/drhansen000/lappstack-5.6.32-1/apache2/htdocs/web/" . $fileName) 
        {
            echo("active");
        }
    }
?>