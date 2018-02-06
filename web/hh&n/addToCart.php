<?php 
    session_start();

    //connect to database and insert information
$dbUrl = getenv('DATABASE_URL');

$dbopts = parse_url($dbUrl);

$dbHost = $dbopts["host"];
$dbPort = $dbopts["port"];
$dbUser = $dbopts["user"];
$dbPassword = $dbopts["pass"];
$dbName = ltrim($dbopts["path"],'/');

$db = new PDO("pgsql:host=$dbHost;port=$dbPort;dbname=$dbName", $dbUser, $dbPassword);
foreach ($db->query('SELECT stuff FROM filler') as $row)
{
  echo 'stuff: ' . $row['stuff'];
}
    
    //create variables to store posted data
    $itemName  = $_POST['itemName'];
    $itemPrice = $_POST['itemPrice']; 
    
    //if there is no array, create one
    if (!is_array($_SESSION['itemName']) && !is_array($_SESSION['itemPrice']))
    {
        $_SESSION['itemName'] = array();
        $_SESSION['itemPrice'] = array();
    }

    //add the item to array
    array_push($_SESSION['itemName'], $itemName);
    array_push($_SESSION['itemPrice'], $itemPrice);
    $_SESSION['numItems'] = sizeof($_SESSION['itemName']);

    //singular or plural tense
    if ($_SESSION['numItems'] == 1)
    {
        $_SESSION['plural'] = "item";
    }
    else
    {
        $_SESSION['plural'] = "items";
    }
    
    //return the number of items
    echo($_SESSION['numItems']);
?>
