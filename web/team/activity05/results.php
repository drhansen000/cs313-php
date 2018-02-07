<?php include("connect.php") ?>

<!DOCTYPE html>
<html>
<head>
    <title>Search results</title>
</head>
<body>
    <h1>Scriptures Matching Search</h1>
    <?php
        //create the variable for the search
        $bookName = $_POST['search'];
        $i = 0;
        
        //display the scriptures and their content
        $statement = $db->query("SELECT id, book, chapter, verse FROM scriptures WHERE book = '$bookName'");
        while ($row = $statement->fetch(PDO::FETCH_ASSOC))
        {
            echo('<p><a href=details.php?id=' . $row['id'] . ' >'); 
            echo($row['book'] . " " . $row['chapter'] . ':' . $row['verse'] . '</a></p>');
        }
    ?>

</body>
</html>