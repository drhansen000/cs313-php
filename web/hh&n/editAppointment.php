<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="https://fonts.googleapis.com/css?family=Handlee" rel="stylesheet">
    <link rel="stylesheet" href="bootstrap-css/bootstrap.min.css" />
    <link rel="stylesheet" href="col.css" />
    <link rel="stylesheet" href="HH&N.css" />
    <link rel="stylesheet" href="login.css" />
    <title>HH&N Edit Appointment</title>
</head>
<body>
    <?php include("navbar.php") ?>
    <div class="col-2">
        <img class="panel-image" src="images/side-plant.png"/>
    </div>
     <div id="description" class="col-8">
        <div class="col-12">
            <h1>Edit Appointment</h1>
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
        if ($_POST['serviceType'] == $service['service'])
        {
            echo("<option value='" . $service['id'] . "' selected >" .  $service['service'] . "</option>");
        }
        else
        {
            echo("<option value='" . $service['id'] . "'>" .  $service['service'] . "</option>");
        }
    }
?>
                </select>
                <div id="serviceDetails" class="col-12">
                    <div class="col-2"></div>
<?php
    $statement = $db->prepare("SELECT service, cost, duration FROM service WHERE service = :serviceType");
    $statement->bindValue(':serviceType', $_POST['serviceType'], PDO::PARAM_STR);
    $statement->execute();
    $service = $statement->fetch(PDO::FETCH_ASSOC);
    echo('<div class="col-4"><u>Service Name</u><br/>' . $service['service'] . '
    </div>');
    echo('<div class="col-2"><u>Duration</u><br/>' .  $service['duration'] . ' minutes</div>');
    echo('<div class="col-1"><u>Cost</u><br/>$' . $service['cost'] . '</div>');
?>
                </div>
                <div class="col-12">
                    <div class="col-2"></div>
                    <div class="col-4">
                        Date<br/>
                        <?php
                        echo('<input style="width: 150px;" id="appointmentDate" type="date" name="date" value="' . $_POST['serviceDate'] . '" required>')
                        ?>
                    </div>
                    <div class="col-4">
                        Time<br/>
                        <select id="selectTimeslot" name="time" required>
<?php
    for ($hours = 9; $hours < 17; $hours++)
    {
        for ($j = 0; $j <= 30; $j += 30)
        {
            if ($j == 0)
            {
                $minutes = "00";
            }
            else
            {
                $minutes = "30";
            }
            $serviceTime = $hours . ':' . $minutes . ':00';
            if ($serviceTime == $_POST['serviceTime'])
            {
                echo('<option value="' . $hours . ':' . $minutes . '" selected >');
                if ($hours > 12)
                {
                    echo(($hours % 12) . ':' . $minutes);
                }
                else
                {
                    echo($hours . ':' . $minutes);
                }
            }
            else
            {
                echo('<option value="' . $hours . ':' . $minutes . '" >');
                if ($hours > 12)
                {
                    echo(($hours % 12) . ':' . $minutes);
                }
                else
                {
                    echo($hours . ':' . $minutes);
                }
            }
            if ($hours < 12)
            {
                echo(" am");
            }
            else
            {
                echo(" pm");
            }
            echo("</option>");
        }
    }
?>
                        </select>
                    </div>
                </div>
                <div class="col-12">
                    Additional Information for Service Provider<br/>
<?php
    echo('<textarea name="info" rows="4" cols="50" maxlength="250">' . $_POST['serviceDetails'] . '</textarea>');
?>
                </div>
                <div class="col-12">
                    <button type="submit">Confirm Changes</button>
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
            alert(appointmentDate.getDay());
            alert("Can't schedule an appointment for the past!");
            return false;
        }
        else
        {
            return true;
        }
    }
</script>