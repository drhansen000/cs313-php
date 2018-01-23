    <!DOCTYPE html>
    <html>
    <body>

    <form action="result.php" method="post">

      Name:<br>
      <input type="text" name="name" placeholder="Micky Smith">
      <br>
      Email:<br>
      <input type="text" name="email" placeholder="abc@gmail.com">
        <br>
      Major:<br>
        <?php 
        $myMajor = array("CS"=>"Computer Science","WDD"=>"Wed Design Development","CIT"=>"Computer Information Technology","CE"=>"Computer Engineering");
        foreach ($myMajor as $key => $value)
            echo "<input type=\"radio\" name='major' value='$key'>$value<br>"
            
        ?>
      
        
        Continents visited:<br>
      <input type="checkbox" name="visited[]" value="North America"> North America<br>
      <input type="checkbox" name="visited[]" value="South America"> South America<br>
      <input type="checkbox" name="visited[]" value="Europe"> Europe<br>
      <input type="checkbox" name="visited[]" value="Asia"> Asia<br> 
      <input type="checkbox" name="visited[]" value="Australia"> Australia<br>
      <input type="checkbox" name="visited[]" value="Africa"> Africa<br>
      <input type="checkbox" name="visited[]" value="Antarctica"> Antarctica<br>     
        
        
        <br>
      <textarea rows="4" cols="50" placeholder="Some comments" name="comment"></textarea><br>
        
        
        
        
      <input type="submit" value="Submit">
    </form> 

    <p>If you click the "Submit" button, the form-data will be sent to a page called "/action_page.php".</p>

    </body>
    </html>



