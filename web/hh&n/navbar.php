<?php
    session_start();
        //This code was taken from Bro. Burton's team solution
        // From StackOverflow: http://stackoverflow.com/a/12201089/1932766
        // The second argument to pathinfo() strips the path and extension from the file name (PHP >= 5.2)
        $file = pathinfo($_SERVER['PHP_SELF'], PATHINFO_FILENAME);
        include("connect.php");
?>

<!DOCTYPE html/>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="shortcut icon" />
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
                <div class="btn-group">
                  <li class="nav-item <?php if ($file === 'products') echo 'active' ?>" >
                      <a class="nav-link" href="products.php">Product Store</a>
                  <a  class="btn dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="sr-only">Toggle Dropdown</span>
                  </a>
                  <div class="dropdown-menu">
                      <a class="dropdown-item" href="products.php#TeaTree">Tea Tree</a>
                      <a class="dropdown-item" href="products.php#MarulaOil">Marula Oil</a>
                      <a class="dropdown-item" href="products.php#Awapuhi">Awapuhi</a>
                      <a class="dropdown-item" href="products.php#Original">Original</a>
                      <a class="dropdown-item" href="products.php#Strength">Strength</a>
                      <a class="dropdown-item" href="products.php#ColorCare">Color Care</a>
                      <a class="dropdown-item" href="products.php#Moisture">Moisture</a>
                      <a class="dropdown-item" href="products.php#Kids">Kids</a>
                      <a class="dropdown-item" href="products.php#Curls">Curls</a>
                      <a class="dropdown-item" href="products.php#NeuroLiquid">Neuro Liquid</a>
                      <a class="dropdown-item" href="products.php#Invisiblewear">Invisiblewear</a>
                      <a class="dropdown-item" href="products.php#Neon">Neon</a>
                      <a class="dropdown-item" href="products.php#Smoothing">Smoothing</a>
                      <a class="dropdown-item" href="products.php#Extra-Body">Extra-Body</a>
                      <a class="dropdown-item" href="products.php#Mitch">Mitch</a>
                    <div class="dropdown-divider"></div>
                  </div>
                    </li>
                </div>
                <li class="nav-item <?php if ($file === 'previous') echo 'active' ?>" >
                        <a class="nav-link" href="previous.php">Activity History</a>                
                </li>
                <li class="nav-item <?php if ($file === 'future') echo 'active' ?>" >
                        <a class="nav-link" href="future.php">Future Appointments</a>                
                </li>
            </ul>
        </div>
        <div>
            <ul class="nav navbar-nav navbar-right">
                     <?php 
                        if (isset($_SESSION['userName'])) 
                        {
                            echo('<li id="welcome" class="nav-item" style="color: limegreen;">Welcome ' . $_SESSION['userName'] . '</li>');
                        } 
                    ?>
               <li class="nav-item <?php if ($file === 'login' || $file == 'signup') echo 'active' ?>" >
                    <?php 
                        if (isset($_SESSION['userName'])) 
                        {
                            echo('<a class="nav-link" href="logout.php">Logout</a>');
                        } else 
                        {
                            echo('<a class="nav-link" href="login.php">Login/SignUp</a>');
                        }
                    ?>
                </li>
                <li class="nav-item <?php if ($file === 'cart') echo 'active' ?>" >
                    <a id="numberInCart" class="nav-link" href="cart.php" 
                       value="<?php 
                            if ($_SESSION['numItems']) {
                                echo($_SESSION['numItems']);
                            } else {
                                $_SESSION['numItems'] = 0;
                                echo $_SESSION['numItems'];
                            }?>">
                        <?php 
                            if ($_SESSION['numItems']) {
                                echo($_SESSION['numItems']);
                            } else {
                                $_SESSION['numItems'] = 0;
                                echo $_SESSION['numItems'];
                            }
                        ?> 
                        In Cart
                    </a>
                </li>
            
            </ul>
        </div>
    </nav>
</body>
</html>