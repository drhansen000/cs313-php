<!DOCTYPE html/>
<html>
<head></head>
<body>
    <nav class="navbar navbar-expand-sm navbar-dark fixed-top">
        <ul class="navbar-nav">
            <li class="nav-item <?php checkFile("offer.php") ?>" >
                <a class="nav-link" href="offer.php">What We Offer</a>
            </li>
            <li class="nav-item <?php checkFile("products.php") ?>" >
                <a class="nav-link" href="products.php">Previous Appointments</a>
            </li>
            <li class="nav-item <?php checkFile("previous.php") ?>" >
                    <a class="nav-link" href="previous.php">Future Appointments</a>                
            </li>
            <li class="nav-item <?php checkFile("future.php") ?>" >
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