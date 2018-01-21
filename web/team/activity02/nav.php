<link rel="stylesheet" type="text/css" href="../bootstrap-css/bootstrap.css">
<nav class="navbar bg-dark navbar-expand-sm navbar-dark">
    <ul class="navbar-nav">
        <li class="nav-item <?php checkFile("home.php") ?>">
            <a class="nav-link" href="home.php">Home</a>
        </li>
        <li class="nav-item <?php checkFile("login.php") ?>">
            <a class="nav-link" href="login.php">Login</a>
        </li>
        <li class="nav-item <?php checkFile("about-us.php") ?>">
            <a class="nav-link" href="about-us.php">About Us</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="logout.php">Logout</a>
        </li>
    </ul>
</nav>

<?php
    function checkFile($fileName)
    {
        if ($_SERVER["SCRIPT_FILENAME"] == "/home/drhansen000/lappstack-5.6.32-1/apache2/htdocs/cs313-php/web/team/activity02/" . $fileName) 
        {
            echo("active");
        }
    }
?>
