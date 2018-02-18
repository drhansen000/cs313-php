<?php
    //connect to the database
    include("connect.php");

    //display errors
    error_reporting(E_ALL);
    ini_set('display_errors', 1);


    $week = array();
    $longDays  = ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday"];
    $shortDays = ["Saturday"];

    class TimeSlot {
        public $hours;
        public $minutes;
        public $available;
        
        public function __construct($hours, $minutes, $available) {
            $this->hours = $hours;
            $this->minutes = $minutes;
            $this->available = $available;
        }
        
        public function __toString() {
            if ($this->available == true) {
                if ($this->minutes == 0) {
                    return $this->hours . " : 00 (Open)";
                } else {
                    return $this->hours . " : " . $this->minutes . " (Open)";
                }
            } else if ($this->available == false) {
                if ($this->minutes == 0) {
                    return $this->hours . " : 00 (Closed)";
                }
                else {
                    return $this->hours . " : " . $this->minutes . " (Closed)";
                }
            } else {
                return "I don't know what the chuff is going on<br/>";
            }
        }
    }

    foreach ($longDays as $day) { 
        $week[$day] = array();
        for ($i = 9; $i < 17; $i++) {
            for ($j = 0; $j < 2; $j++) {
                array_push ($week[$day], new TimeSlot($i, $j * 30, true)); 
            }
        }
    }
    foreach ($shortDays as $day) {
        $week[$day] = array();
        for ($i = 9; $i < 12; $i++) {
            for ($j = 0; $j < 2; $j++) {
                array_push ($week[$day], new TimeSlot($i, $j * 30, true)); 
            }
        }
    }

    //create and execute PDO for services
    $stmt = $db->prepare('SELECT extract(dow FROM date) AS day, extract(hour FROM time) AS hour, extract(minute FROM time) AS minute, duration FROM appointment JOIN service ON service.id = appointment.serviceid WHERE employeeID = 7');
    $stmt->execute();
    $availabilities = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    $daysOfWeek = ["Sunday","Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];

    foreach($availabilities as $availability) {
        $day = $daysOfWeek[$availability["day"]];
        for ($i = 0; $i < count($week[$day]); $i++) {
            $timeSlot = $week[$day][$i];
            $week[$day][$i]->available = true;
//            var_dump($timeSlot);
            //if indexed day's hour is taken, change that existing timeSlot's availability to false
            if ($availability["hour"] == $timeSlot->hours && $availability["minute"] == $timeSlot->minutes) {
                $timeSlot->available = false;
            }
            if ($availability["duration"] > 30 && (($i + 1) < count($week[$day]))) {
                $week[$day][$i + 1]->available = false;
            }
            if ($availability["duration"] > 60 && (($i + 2) < count($week[$day]))) {
                $week[$day][$i + 2]->available = false;
            }
            if ($availability["duration"] > 90 && (($i + 3) < count($week[$day]))) {
                $week[$day][$i + 3]->available = false;
            }
        }
    }
?>
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />    
    <link href="https://fonts.googleapis.com/css?family=Handlee" rel="stylesheet">
    <link rel="stylesheet" href="bootstrap-css/bootstrap.min.css" />
    <link rel="stylesheet" href="col.css" />
    <link rel="stylesheet" href="HH&N.css" />
<title>HH&N Availabilities</title>    
</head>
<body>
    <?php include("navbar.php") ?>
    <div class="col-2">
        <img class="panel-image" src="images/side-plant.png"/>
    </div>    
    <div id="description" class="col-8">
    <h3 class="col-2">Monday</h3>
    <h3 class="col-2">Tuesday</h3>
    <h3 class="col-2">Wednesday</h3>
    <h3 class="col-2">Thursday</h3>
    <h3 class="col-2">Friday</h3>
    <h3 class="col-2">Saturday</h3>
<?php
    for ($j = 1; $j < 7; $j++) {
        for ($i = 0; $i < count($week[$day]); $i++) {
            $timeSlot = $week[$day][$i];
    //            var_dump($timeSlot);
            //if indexed day's hour is taken, change that existing timeSlot's availability to false
            if ($timeSlot->available == true) {
                echo("<p>" . $timeSlot . "</p>");
            } else {
                echo("<p>" . $timeSlot . "</p>");
            }
            

        }
    }


//    var_dump($week);
?>
    </div>
    <div class="col-2">
        <img class="panel-image" src="images/side-plant.png"/>
    </div>    
</body>
</html>