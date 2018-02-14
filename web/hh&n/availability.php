<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />    
    <link href="https://fonts.googleapis.com/css?family=Handlee" rel="stylesheet">
    <link rel="stylesheet" href="bootstrap-css/bootstrap.min.css" />
    <link rel="stylesheet" href="col.css" />
    <link rel="stylesheet" href="HH&N.css" />
    <link rel="stylesheet" href="login.css"/>
    <title>Login</title>
</head>
<body>
    <?php include("navbar.php") ?>
    <div class="col-2">
        <img class="panel-image" src="images/side-plant.png"/>
    </div>
    <div id="description" class="col-8">
    
     </div>
    <div class="col-2">
        <img class="panel-image" src="images/side-plant.png" />
    </div>
</body>
</html>

<script>
    function calculateDaysAvailable()
    {
        var httpRequest = new XMLHttpRequest();
        
        httpRequest.onreadystatechange = function () 
        {
            if (this.readyState == 4 && this.status == 200)
            {
            }
            else if (this.readyState == 4) 
            {
                alert("Failure trying to open file to write. Status is: " + this.statusText);
            }
        };

        httpRequest.open("POST","calculateDays.php", true);
        httpRequest.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        
        //is this secure?
        httpRequest.send();
    }
</script>