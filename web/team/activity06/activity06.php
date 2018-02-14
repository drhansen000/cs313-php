<?php include("connect.php") ?>
<!DOCTYPE html>
<html>
<head>
    <title>Scriptures</title>
</head>
<body>
    <h1>Add Scripture</h1>
    <form action="results.php" method="post">
        Book Name:
        <input type="text" name="book" />
        Chapter:
        <input type="text" name="chapter" />
        Verse:
        <input type="text" name="verse" /><br/>
        Content:<br/>
        <textarea rows="4" cols="50" name="content"></textarea><br/>
        <?php
        //create and execute PDO for services
            $stmt2 = $db->prepare('SELECT name FROM topic');
            $stmt2->execute();
            $topics = $stmt2->fetchAll(PDO::FETCH_ASSOC);

            foreach ($topics AS $topic) {
                echo('<input type="checkbox" name="topic[]" value="' . $topic['name'] . '">' . $topic['name'] . '</input><br/>');
            }
        ?>
        <input type="submit" value="search"/>
    </form>
</body>
</html>