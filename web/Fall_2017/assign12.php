<?php
//php to clear cache
    session_cache_limiter('nocache');

    $fileVar = fopen("public_txt/register.json", "a+") or die("Oh noes!");

    class rStudent
    {
        public $s1First;
        public $s1Last;
        public $s1ID;
        public $s2First;
        public $s2Last;
        public $s2ID;
        public $duet;
        public $building;
        public $room;
        public $skill;
        public $stime;
        public $instrument;
    }

    $rStudent = new rStudent();
        
    $rStudent->s1First = $_GET["s1First"];
    $rStudent->s1Last  = $_GET["s1Last"];
    $rStudent->s1ID    = $_GET["s1ID"];
    $rStudent->duet    = $_GET["duet"];
    if ($rStudent->duet == "Duet")
    {
        $rStudent->s2First = $_GET["s2First"];
        $rStudent->s2Last  = $_GET["s2Last"];
        $rStudent->s2ID    = $_GET["s2ID"];
    }
    else
    {
        $rStudent->s2First = " ";
        $rStudent->s2Last  = " ";
        $rStudent->s2ID    = " ";
    }
    $rStudent->skill      = $_GET["skill"];
    $rStudent->instrument = $_GET["instrument"];
    $rStudent->stime      = $_GET["stime"];
    $rStudent->building   = $_GET["building"];
    $rStudent->room       = $_GET["room"];

    $str = json_encode($rStudent);

    if (trim(file_get_contents('public_txt/register.json')) == false)
    {
        $str = $str . "\n";
    }
    else
    {
        $str = "," . $str . "\n";
    }

    fwrite($fileVar, $str);
    
    fclose($fileVar);
?>