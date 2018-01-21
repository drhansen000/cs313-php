<?php session_start(); ?>
<DOCTYPE! html>
<html>
<head>
    <title>Fuchsia Gym</title>
</head>    
<body>
    <?php include('nav.php');?>
    <h1>Welcome!</h1>
    <div>
    <?php 
        if (isset($_SESSION["loginType"]))
        {
            echo($_SESSION["loginType"]);
        }
        else
        {
            echo("You are not logged in.");
        }
    ?>
    </div>
</body>
</html>    
