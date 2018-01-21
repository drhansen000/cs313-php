<?php
        //This code was taken from Bro. Burton's team solution
        // From StackOverflow: http://stackoverflow.com/a/12201089/1932766
        // The second argument to pathinfo() strips the path and extension from the file name (PHP >= 5.2)
        $file = pathinfo($_SERVER['PHP_SELF'], PATHINFO_FILENAME);
?>

<!DOCTYPE html/>
<html>
<head></head>
<body>
    <nav class="navbar navbar-expand-sm navbar-dark fixed-top">
        <ul class="navbar-nav">
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