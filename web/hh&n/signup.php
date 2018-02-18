<?php include("connect.php"); ?>
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />    
    <link href="https://fonts.googleapis.com/css?family=Handlee" rel="stylesheet">
    <link rel="stylesheet" href="bootstrap-css/bootstrap.min.css" />
    <link rel="stylesheet" href="col.css" />
    <link rel="stylesheet" href="HH&N.css" />
    <link rel="stylesheet" href="login.css"/>
    <title>HH&N Signup</title>
</head>
<body>
    <?php include("navbar.php") ?>
    <div class="col-2">
        <img class="panel-image" src="images/side-plant.png"/>
    </div>    
    <div id="description" class="col-8">
        <h1>Create your account</h1>
        <form action="accountCreated.php" method="post">
            <p>Full Name</p>
            <div class="col-12">
                <input type="text" name="userName" required/>
            </div>
            <p>Email address</p>
            <div class="col-12" >
                <input type="email" name="userEmail" required/>
            </div>
            <p>Password</p>
            <div class="col-12" >
                <input type="password" name="userPassword" required/>
            </div>
            <p>Phone (Optional)</p>
            <div class="col-12">
                <input type="tel" name="userPhone">
            </div>
            <button type="submit" >Create Account</button>
        </form>
        <p id="successMessage" ></p>
    </div>
    <div class="col-2">
        <img class="panel-image" src="images/side-plant.png"/>
    </div>
</body>
</html>