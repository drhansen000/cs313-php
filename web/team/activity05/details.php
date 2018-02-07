<?php include("connect.php") ?>
<!DOCTYPE html>
<html>
<head>
    <title>Scripture Details</title>
</head>
<body>
     <h1>Scripture Details</h1>
    <?php
        $scriptureID = $_GET['id'];
        //display the scriptures and their content
        $statement = $db->query('SELECT book, chapter, verse, content FROM scriptures WHERE id=' . $scriptureID);
        while ($row = $statement->fetch(PDO::FETCH_ASSOC))
        {
            echo('<p><strong>' . $row['book'] . " " . $row['chapter'] . ':' . $row['verse'] . '</strong> - ');
            echo('"' . $row['content'] . '"</p>');
        }
    ?>
</body>
</html>