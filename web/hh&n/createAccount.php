<?php
    //connect to the database
    include("connect.php");
    $userName     = $_POST['userName'];
    $userEmail    = $_POST['userEmail'];
    $userPhone    = $_POST['userPhone'];
    $userPassword = $_POST['userPassword'];
    $userVerify   = $_POST['userVerify'];
    $userPasswordHash = password_hash($_POST['userPassword'], PASSWORD_DEFAULT);

    if ($userPassword !== $userVerify)
    {
        echo("Password does not match verification");
    }
    else if (strlen($userPassword) < 7)
    {
        echo("Password must be atleast 7 characters");
    }
    else
    {
        //fill in the session variables and return true if email & password match in db, else return false
        $statement = $db->prepare("INSERT INTO person (name, email, password, phone, positionid) VALUES (:userName, :userEmail, :userPassword, :userPhone, 1)");
        $statement->bindValue(':userName', $userName, PDO::PARAM_STR);
        $statement->bindValue(':userEmail', $userEmail, PDO::PARAM_STR);
        $statement->bindValue(':userPassword', $userPasswordHash, PDO::PARAM_STR);
        //there's no reason to make the phone an int vs a str and a string allows for more options
        $statement->bindValue(':userPhone', $userPhone, PDO::PARAM_STR);
        $statement->execute();
        echo(true);
    }
    

    
?>