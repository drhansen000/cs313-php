<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />    
    <link href="https://fonts.googleapis.com/css?family=Handlee" rel="stylesheet">
    <link rel="stylesheet" href="bootstrap-css/bootstrap.min.css" />
    <link rel="stylesheet" href="col.css" />
    <link rel="stylesheet" href="HH&N.css" />
    <link rel="stylesheet" href="login.css"/>
    <title>HH&N Login</title>
</head>
<body>
    <?php include("navbar.php") ?>
    <div class="col-2">
        <img class="panel-image" src="images/side-plant.png"/>
    </div>    
    <div id="description" class="col-8">
        <h1>Sign in to your account</h1>
            <div id="errorMessage">Invalid Email or Password</div>
            <div class="col-12" >Email address</div>
            <div class="col-12" >
                <input id="emailInput" type="email" required/>
            </div>
            <div class="col-12" >Password</div>
            <div class="col-12">
                <input id="passwordInput" type="password" required/>
            </div>
            <button onclick="setSessionVariables()">Sign In</button>
        <hr/>
        <div class="col-12">
        <h3>Don't have an account?</h3>
            <a id="signupLink" href="signup.php">
                Create a new account
            </a>
        </div>
    </div>
    <div class="col-2">
        <img class="panel-image" src="images/side-plant.png"/>
    </div>
</body>
</html>

<script>
    function setSessionVariables()
    {
        var httpRequest = new XMLHttpRequest();
        var email       = document.getElementById("emailInput").value;
        var password    = document.getElementById("passwordInput").value;
        
        httpRequest.onreadystatechange = function () 
        {
            if (this.readyState == 4 && this.status == 200)
            {
                if (this.responseText == true) {
                    window.location.href = "offer.php";
                } else {
                    document.getElementById("errorMessage").style.visibility = "visible";
                }
            }
            else if (this.readyState == 4) 
            {
                alert("Failure trying to open file to write. Status is: " + this.statusText);
            }
        };

        httpRequest.open("POST","setSessionVariables.php", true);
        httpRequest.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        
        httpRequest.send("email=" + email + "&password=" + password);
    }
</script>