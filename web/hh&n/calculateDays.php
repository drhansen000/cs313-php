<?php
    //connect to the database
    include("connect.php");

    //display errors
    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    echo("<pre>");

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
            return $this->hours . " : " . $this->minutes . " (" . $this->available . ")";
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
//    foreach($availabilities as $availability) {
//        $day = $daysOfWeek[$availability["day"]];
//        foreach($week[$day] as $timeSlot) {
//            //if indexed day's hour is taken, change that existing timeSlot's availability to false
//            if ($availability["hour"] == $timeSlot->hours && $availability["minute"] == $timeSlot->minutes) {
//                $timeSlot->available = false;
//            }
//        }
//    }


    foreach($availabilities as $availability) {
        $day = $daysOfWeek[$availability["day"]];
        for ($i = 0; $i < count($week[$day]); $i++) {
            $timeSlot = $week[$day][$i];
            var_dump($timeSlot);
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


    var_dump($week);
    echo("</pre>");
?>