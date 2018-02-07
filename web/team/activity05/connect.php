<!DOCTYPE html>
<html>
<?php
    //display errors
    error_reporting(E_ALL);
    ini_set('display_errors', '1');

    //connect to the database via Heroku
    $dbUrl = getenv('HEROKU_POSTGRESQL_CRIMSON');

    $dbopts = parse_url($dbUrl);

    $dbHost = $dbopts["host"];
    $dbPort = $dbopts["port"];
    $dbUser = $dbopts["user"];
    $dbPassword = $dbopts["pass"];
    $dbName = ltrim($dbopts["path"],'/');

    $db = new PDO("pgsql:host=$dbHost;port=$dbPort;dbname=$dbName", $dbUser, $dbPassword);

?>
</html>