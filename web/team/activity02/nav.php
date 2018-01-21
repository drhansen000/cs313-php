<?php
        //This code was taken from Bro. Burton's team solution
        // From StackOverflow: http://stackoverflow.com/a/12201089/1932766
        // The second argument to pathinfo() strips the path and extension from the file name (PHP >= 5.2)
        $file = pathinfo($_SERVER['PHP_SELF'], PATHINFO_FILENAME);
?>
<link rel="stylesheet" type="text/css" href="../bootstrap-css/bootstrap.css">
<nav class="navbar bg-dark navbar-expand-sm navbar-dark">
    <ul class="navbar-nav">
        <li class="nav-item <?php if ($file === 'home') echo 'active' ?>">
            <a class="nav-link" href="home.php">Home</a>
        </li>
        <li class="nav-item <?php if ($file === 'login') echo 'active' ?>">
            <a class="nav-link" href="login.php">Login</a>
        </li>
        <li class="nav-item <?php if ($file === 'about-us') echo 'active' ?>">
            <a class="nav-link" href="about-us.php">About Us</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="logout.php">Logout</a>
        </li>
    </ul>
</nav>
