<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" type="text/css" href="col.css" />
    <link rel="stylesheet" type="text/css" href="assign10_p.css" />
    <title>Pokemon Merchandise | Response
    </title>
</head>
<body>
    <header class="col-6">
<?php
    $confirm = $_GET["confirm"];
    $cancel  = $_GET["cancel"];
    if ($confirm == "Confirm")
    {
        echo "<p class='header'>Order Confirmed</p>";
    }
    else if ($cancel == "Cancel")
    {
        echo "<p class='header'>Order Cancelled</p>";
    }
    ?>
    </header>
    <main class="col-6">
        <p class="sub-header">To go Back to the store click the button</p>
        <a id="go" href="assign10.html">Go Back</a>
    
    
    </main>
    <footer>
    
    </footer>
</body>

</html>
