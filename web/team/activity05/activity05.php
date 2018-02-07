<?php include("connect.php") ?>

<!DOCTYPE html>
<html>
<head>
    <title>Scriptures</title>
</head>
<body>
    <h1>Scripture Resources</h1>
    <?php
        //display the scriptures and their content
        $statement = $db->query('SELECT book, chapter, verse, content FROM scriptures');
        while ($row = $statement->fetch(PDO::FETCH_ASSOC))
        {
            echo('<p><strong>' . $row['book'] . " " . $row['chapter'] . ':' . $row['verse'] . '</strong> - ');
            echo('"' . $row['content'] . '"</p>');
        }
    ?>
    <form action="results.php" method="post">
        Book Name:
        <input type="text" name="search" />
        <input type="submit" value="search"/>
    </form>
</body>
</html>