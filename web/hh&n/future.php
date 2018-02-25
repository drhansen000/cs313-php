<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="https://fonts.googleapis.com/css?family=Handlee" rel="stylesheet">
    <link rel="stylesheet" href="bootstrap-css/bootstrap.min.css" />
    <link rel="stylesheet" href="col.css" />
    <link rel="stylesheet" href="HH&N.css" />
    <link rel="stylesheet" href="future.css" />
    <title>HH&N Future Appointments</title>
</head>
<body>
    <?php include("navbar.php") ?>
    <div class="col-2">
        <img class="panel-image" src="images/side-plant.png"/>
    </div>
     <div id="description" class="col-8">
        <div class="col-12">
            <h1>Future Appointments</h1>
            <?php 
            $i;
            for ($i = 0; $i < sizeof($_SESSION['service']); $i++)
            {
                if ($_SESSION['serviceDate'][$i] > date("Y-m-d")) 
                {
                    echo('<div class="col-12 service">');
                    echo('<form action="cancelAppointment.php" method="post">');
                    echo('<h5>Service: ' . $_SESSION['service'][$i] . '</h5>');
                    echo('<input type="hidden" name="serviceDate" value="' . $_SESSION['serviceDate'][$i] . '"/>');
                    echo('<input type="hidden" name="serviceTime" value="' . $_SESSION['serviceTime'][$i] . '"/>');
                    echo('Planned for ' . $_SESSION['serviceDate'][$i]);
                    echo(' at ' . $_SESSION['serviceTime'][$i] . '<br/>');
                    echo('Stylist ' . $_SESSION['serviceProvider'][$i] . '<br/>');
                    echo('Cost $' . $_SESSION['serviceCost'][$i] . '<br>');
                    echo("<button type='submit' class='cancelButton'>Cancel</button> / ");
                    echo("<button type='submit' formaction='editAppointment.php' class='editButton'>Edit</button></form></div>");
                }
            }
            ?>
                <button onclick="window.location.href = 'createAppointment.php'" type="button">Create Future Appointment</button>
        </div>
    </div>
    <div class="col-2">
        <img class="panel-image" src="images/side-plant.png"/>
    </div>
</body>
</html>
<script>
    function cancelAppointment()
    {
//        var httpRequest = new XMLHttpRequest();
//        httpRequest.onreadystatechange = function () 
//        {
//            if (this.readyState == 4 && this.status == 200)
//            {
//                location.reload();
//            }
//            else if (this.readyState == 4) 
//            {
//                alert("Failure trying to open file to write. Status is: " + this.statusText);
//            }
//        };
//
//        httpRequest.open("POST","cancelAppointment.php", true);
//        httpRequest.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
//        httpRequest.send("serviceDate=" + itemName + "&serviceTime=");
    }
    
    function updateAppointment()
    {
        
    }

</script>