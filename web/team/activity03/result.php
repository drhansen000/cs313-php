<html>
    <body>
        <p>
            Name: <?php echo $_POST["name"]; ?>
        </p>
        <p>
            Email: <a href="mailto:<?php echo $_POST["email"]; ?>"><?php echo $_POST["email"]; ?></a>
        </p>
        <p>
            Major: <?php echo(translateAbbreviation($_POST["major"])); ?>
        </p>
        <p>
            Visited: 
            <?php
                //go for as long as the array
                for ($i = 0; $i < count($_POST['visited']); $i++)
                {
                    //only a checkbox is checked
                    if (isset($_POST['visited'][$i]))
                    {
                        //handle the last comma with if statements.
                        if ($i < count($_POST['visited']) - 1)
                        {
                            echo(translateAbbreviation($_POST['visited'][$i]) . ", ");
                        }
                        else
                        {
                            echo(translateAbbreviation($_POST['visited'][$i]));
                        }
                    }
                }
            ?>
        </p>
        <p>
            Comments: 
            <?php echo $_POST["comment"]; ?>
        </p>
    </body>
</html>

<?php 
    function translateAbbreviation($abbr)
    {
        switch ($abbr)
        {
            case "na":
                return "North America";
                break;
            case "sa":
                return "South America";
                break;
            case "e":
                return "Europe";
                break;
            case "as":
                return "Asia";
                break;
            case "au":
                return "Australia";
                break;
            case "af":
                return "Africa";
                break;
            case "an":
                return "Antartica";
                break;
            case "CS":
                return "Computer Science";
                break;
            case "WDD":
                return "Web Design and Developement";
                break;
            case "CIT":
                return "Computer Information Technology";
                break;
            case "CE":
                return "Computer Engineering";
                break;
        }
    }
?>
