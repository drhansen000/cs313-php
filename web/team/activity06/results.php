<?php include("connect.php") ?>

<!DOCTYPE html>
<html>
<head>
    <title>Search results</title>
</head>
<body>
    <h1>Scripture Added</h1>
    <?php
        //create the variable for the search
        $bookName = $_POST['book'];
        $chapterName = $_POST['chapter'];
        $verseName = $_POST['verse'];
        $contentName = $_POST['content'];
        $topic_list = $_POST['topic'];

        if(empty($topic_list)) {
            echo "It's empty! </br>";
        }
        var_dump($topic_list);

        $stmt = $db->prepare('INSERT INTO scripture (book, chapter, verse, content) VALUES (:book, :chapter, :verse, :content)');
        $stmt->bindValue(':book', $bookName, PDO::PARAM_STR);
        $stmt->bindValue(':chapter', $chapterName, PDO::PARAM_INT);
        $stmt->bindValue(':verse', $verseName, PDO::PARAM_INT);
        $stmt->bindValue(':content', $contentName, PDO::PARAM_STR);
        $stmt->execute();


        foreach($topic_list as $topic) {
            $stmt2 = $db->prepare('INSERT INTO scripture_topic (scripture_id, topic_id) VALUES ((SELECT currval(\'scripture_id_seq\')), (SELECT id FROM topic WHERE name=:name))');
            $stmt2->bindValue(':name', $topic, PDO::PARAM_STR);
            $stmt2->execute();
        }

           
    ?>

</body>
</html>