<!DOCTYPE html>
<html>
<head></head>
<body>
    <form action="result.php" method="post">
        Name:<br>
        <input type="text" name="name" placeholder="Micky Smith"><br>
        Email:<br>
        <input type="text" name="email" placeholder="abc@gmail.com"><br>
        Major:<br>
        <?php 
            $myMajor = array("CS"=>"Computer Science","WDD"=>"Wed Design and Development",
                             "CIT"=>"Computer Information Technology","CE"=>"Computer Engineering");
            foreach ($myMajor as $key => $value)
            {
                echo "<input type=\"radio\" name='major' value='$key'>$value<br>";
            }
        ?>
        Continents visited:<br>
        <input type="checkbox" name="visited[]" value="na"> North America<br>
        <input type="checkbox" name="visited[]" value="sa"> South America<br>
        <input type="checkbox" name="visited[]" value="e"> Europe<br>
        <input type="checkbox" name="visited[]" value="as"> Asia<br> 
        <input type="checkbox" name="visited[]" value="au"> Australia<br>
        <input type="checkbox" name="visited[]" value="af"> Africa<br>
        <input type="checkbox" name="visited[]" value="an"> Antarctica<br>     
        <textarea rows="4" cols="50" placeholder="Some comments" name="comment"></textarea><br>
        <input type="submit" value="Submit">
    </form> 
</body>
</html>



