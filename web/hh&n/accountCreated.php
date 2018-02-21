<?php
    //connect to the database
    include("connect.php");
    $userName     = $_POST['userName'];
    $userEmail    = $_POST['userEmail'];
    $userPhone    = $_POST['userPhone'];
    $userPassword = $_POST['userPassword'];
    $userVerify   = $_POST['userVerify'];
    $userPasswordHash = password_hash($_POST['userPassword'], PASSWORD_DEFAULT);

    //fill in the session variables and return true if email & password match in db, else return false
    $statement = $db->prepare("INSERT INTO person (name, email, password, phone, positionid) VALUES (:userName, :userEmail, :userPassword, :userPhone, 1)");
    $statement->bindValue(':userName', $userName, PDO::PARAM_STR);
    $statement->bindValue(':userEmail', $userEmail, PDO::PARAM_STR);
    $statement->bindValue(':userPassword', $userPasswordHash, PDO::PARAM_STR);
    //there's no reason to make the phone an int vs a str and a string allows for more options
    $statement->bindValue(':userPhone', $userPhone, PDO::PARAM_STR);
    $statement->execute();
?>
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />    
    <link href="https://fonts.googleapis.com/css?family=Handlee" rel="stylesheet">
    <link rel="stylesheet" href="bootstrap-css/bootstrap.min.css" />
    <link rel="stylesheet" href="col.css" />
    <link rel="stylesheet" href="HH&N.css" />
    <link rel="stylesheet" href="signup.css" />
    <title>HH&N Account Created</title>
</head>
<body>
    <?php include("navbar.php") ?>
    <div class="col-2">
        <img class="panel-image" src="images/side-plant.png"/>
    </div>    
    <div id="description" class="col-8">
        <h1>Account Created!</h1>
        <p>
            Your account was created successfully!<br/>
            Please go to the login page and submit your credentials.

        </p>
    </div>
    <div class="col-2">
        <img class="panel-image" src="images/side-plant.png"/>
    </div>
</body>
</html>