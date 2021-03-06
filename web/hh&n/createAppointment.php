<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="https://fonts.googleapis.com/css?family=Handlee" rel="stylesheet">
    <link rel="stylesheet" href="bootstrap-css/bootstrap.min.css" />
    <link rel="stylesheet" href="col.css" />
    <link rel="stylesheet" href="HH&N.css" />
    <link rel="stylesheet" href="login.css" />
    <title>HH&N Create an Appointment</title>
</head>
<body>
    <?php include("navbar.php") ?>
    <div class="col-2">
        <img class="panel-image" src="images/side-plant.png"/>
    </div>
     <div id="description" class="col-8">
        <div class="col-12">
            <h1>Create an Appointment</h1>
            <form action="appointmentCreated.php" onsubmit="return validateForm()" method="post">
                <select name="serviceType" onchange="serviceDescription(this)" required>
<?php
    include("connect.php");
    $statement = $db->prepare("SELECT id, service, cost, duration FROM service");
    $statement->execute();
    $services = $statement->fetchAll(PDO::FETCH_ASSOC);

    //push in the values into purchased products session variables
    foreach ($services as $service)
    {
        echo("<option value='" . $service['id'] . "'>" .  $service['service'] . "</option>");
    }
?>
                </select>
                <div id="serviceDetails" class="col-12">
                    <div class="col-2"></div>
                    <div class="col-4"><u>Service Name</u><br/>Men's cut</div>
                    <div class="col-2"><u>Duration</u><br/>60 minutes</div>
                    <div class="col-1"><u>Cost</u><br/>$30</div>
                </div>
                <div class="col-12">
                    <div class="col-2"></div>
                    <div class="col-4">
                        Date<br/>
                        <input style="width: 150px;" id="appointmentDate" type="date" name="date" required>
                    </div>
                    <div class="col-4">
                        Time<br/>
                        <select id="selectTimeslot" name="time" required>
                            <option value="9:00">9:00 am</option>
                            <option value="9:30">9:30 am</option>
                            <option value="10:00">10:00 am</option>
                            <option value="10:30">10:30 am</option>
                            <option value="11:00">11:00 am</option>
                            <option value="11:30">11:30 am</option>
                            <option value="12:00">12:00 pm</option>
                            <option value="12:30">12:30 pm</option>
                            <option value="13:00">1:00 pm</option>
                            <option value="13:30">1:30 pm</option>
                            <option value="14:00">2:00 pm</option>
                            <option value="14:30">2:30 pm</option>
                            <option value="15:00">3:00 pm</option>
                            <option value="15:30">3:30 pm</option>
                            <option value="16:00">4:00 pm</option>
                            <option value="16:30">4:30 pm</option>
                        </select>
                    </div>
                </div>
                <div class="col-12">
                    Additional Information for Service Provider<br/>
                    <textarea name="info" rows="4" cols="50" maxlength="250"></textarea>
                </div>
                <div class="col-12">
                    <button type="submit">Confirm Appointment</button>
                </div>
            </form>
        </div>
    </div>
    <div class="col-2">
        <img class="panel-image" src="images/side-plant.png"/>
    </div>
</body>
</html>

<script>
    function serviceDescription(serviceId)
    {
        var httpRequest = new XMLHttpRequest();
        httpRequest.onreadystatechange = function () 
        {
            if (this.readyState == 4 && this.status == 200)
            {
                //change number of items in navbar
                document.getElementById("serviceDetails").innerHTML = this.responseText;
            }
            else if (this.readyState == 4) 
            {
                alert("Failure trying to open file to write. Status is: " + this.statusText);
            }
        };

        httpRequest.open("POST","displayService.php", true);
        //this is required for post method only
        httpRequest.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        httpRequest.send("serviceId=" + serviceId.value);
    }
    
    function validateForm()
    {
        var appointmentDate = new Date(document.getElementById("appointmentDate").value);
        var today = new Date();
        
        if(appointmentDate.getDay() == 6)
        {
            alert("We're not open on Sunday!");
            return false;
        }
        else if (appointmentDate < today)
        {
            alert("Can't schedule an appointment for the past!");
            return false;
        }
        else
        {
            return true;
        }
    }
</script>