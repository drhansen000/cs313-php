<html>
    <body>
        Name: <?php echo $_POST["name"]; ?><br>
        Email: <a href="mailto:<?php echo $_POST["email"]; ?>"><?php echo $_POST["email"]; ?></a><br>
        Major: <?php echo $_POST["major"]; ?><br>
        Visited: <?php
        if (isset($_POST['visited']))
            echo implode(', ', $_POST['visited']);
        ?><br>
        <?php echo $_POST["comment"]; ?><br>
        
    </body>
</html>