<?php include("connect.php"); ?>
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />    
    <link href="https://fonts.googleapis.com/css?family=Handlee" rel="stylesheet">
    <link rel="stylesheet" href="bootstrap-css/bootstrap.min.css" />
    <link rel="stylesheet" href="col.css" />
    <link rel="stylesheet" href="HH&N.css" />
    <link rel="stylesheet" href="signup.css"/>
    <title>HH&N Signup</title>
</head>
<body>
    <?php include("navbar.php") ?>
    <div class="col-2">
        <img class="panel-image" src="images/side-plant.png"/>
    </div>    
    <div id="description" class="col-8">
        <h1>Create your account</h1>
        <p id="errorMessage" ></p>
        <form action="accountCreated.php" method="post" onsubmit="return checkPasswordContent()">
            <p>Full Name</p>
            <div class="col-12">
                <input type="text" id="userName" name="userName" required/>
            </div>
            <p>Email address</p>
            <div class="col-12" >
                <input type="email" id="userEmail" name="userEmail" required/>
            </div>
            <p>Password</p>
            <div class="col-12" >
                <input type="password" id="userPassword" name="userPassword" required/><span id="errorStar1"></span>
            </div>
            <p>Password Verification</p>
            <div class="col-12" >
                <input type="password" id="userVerify" name="userVerify" required/><span id="errorStar2"></span>
            </div>
            <p>Phone (Optional)</p>
            <div class="col-12">
                <input type="tel" id="userPhone" name="userPhone">
            </div>
            <button type="submit">Create Account</button>
        </form>
    </div>
    <div class="col-2">
        <img class="panel-image" src="images/side-plant.png"/>
    </div>
</body>
</html>

<script>
    function passwordVerify()
    {
        var httpRequest = new XMLHttpRequest();
        var userName  = document.getElementById("userName").value;
        var userEmail = document.getElementById("userEmail").value;
        var userPassword = document.getElementById("userPassword").value;
        var userVerify = document.getElementById("userVerify").value;
        if (document.getElementById("userPhone").value)
        {
            var userPhone = document.getElementById("userPhone").value;
        }
        else
        {
            var userPhone = " ";
        }
        
        
        
        httpRequest.onreadystatechange = function () 
        {
            if (this.readyState == 4 && this.status == 200)
            {
                if (this.responseText == true) {
                    window.location.href = "accountCreated.php";
                } else {
                    document.getElementById("errorMessage").style.visibility = "visible";
                    document.getElementById("errorMessage").innerHTML = this.responseText;
                    document.getElementById("errorStar1").innerHTML = ' *';
                    document.getElementById("errorStar2").innerHTML = ' *';
                }
            }
            else if (this.readyState == 4) 
            {
                alert("Failure trying to open file to write. Status is: " + this.statusText);
            }
        };

        httpRequest.open("POST","createAccount.php", true);
        httpRequest.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        httpRequest.send("userName=" + encodeURIComponent(userName) + "&userEmail=" + encodeURIComponent(userEmail) + "&userPassword=" + encodeURIComponent(userPassword) + "&userVerify=" + encodeURIComponent(userVerify) + "&userPhone=" + encodeURIComponent(userPhone));
    }
    function checkPasswordContent()
    {
        var userPassword = document.getElementById("userPassword").value;
        var userVerify   = document.getElementById("userVerify").value;
        if (userPassword !== userVerify)
        {
            document.getElementById("errorMessage").innerHTML = "Password does not match verification";
            document.getElementById("errorStar1").innerHTML = ' *';
            document.getElementById("errorStar2").innerHTML = ' *';
            return false;
        }
        else if (userPassword.length < 7)
        {
            document.getElementById("errorMessage").innerHTML = "Password must be atleast 7 characters long";
            document.getElementById("errorStar1").innerHTML = ' *';
            document.getElementById("errorStar2").innerHTML = ' *';
            return false;
        }
        else
        {
            return true;
        }
    }
</script>