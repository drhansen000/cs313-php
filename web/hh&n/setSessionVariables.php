 <?php
    session_start();
    $email    = $_POST['email'];
    $userPassword = $_POST['password'];

    //connect to the database
    include("connect.php");

    //create the session arrays for purchased products
    $_SESSION['pastItemName']    = array();
    $_SESSION['pastItemPrice']   = array();
    $_SESSION['pastItemPicture'] = array();
    $_SESSION['pastItemSize']    = array();

    //create the session arrays for services
    $_SESSION['service']         = array();
    $_SESSION['serviceDate']     = array();
    $_SESSION['serviceTime']     = array();
    $_SESSION['serviceCost']     = array();
    $_SESSION['serviceProvider'] = array();

    //fill in the session variables and return true if email & password match in db, else return false
    $statement = $db->query("SELECT name, id FROM person WHERE email = '$email' AND password = '$userPassword'");
    if ($row = $statement->fetch(PDO::FETCH_ASSOC))
    {
        $_SESSION['name'] = $row['name'];
        $customerId = $row['id'];
        echo(true);
    }
    else 
    {
        echo(false);
    }

    //create and execute PDO for purchased products
    $stmt = $db->prepare('SELECT product.name, size, price, picture FROM product JOIN purchaseHistory ON product.id = purchaseHistory.productid JOIN person ON person.id = purchaseHistory.personid WHERE person.id=:theid');
    $stmt->bindValue(':theid', $customerId, PDO::PARAM_INT);
    $stmt->execute();
    $products = $stmt->fetchAll(PDO::FETCH_ASSOC);

    //push in the values into purchased products session variables
    foreach ($products as $product)
    {
        array_push($_SESSION['pastItemName'], $product['name']);
        array_push($_SESSION['pastItemPrice'], $product['price']);
        array_push($_SESSION['pastItemPicture'], $product['picture']);
        array_push($_SESSION['pastItemSize'], $product['size']);
    }

    //create and execute PDO for services
    $stmt2 = $db->prepare('SELECT service, date, time, cost FROM service JOIN appointment ON service.id = appointment.serviceID JOIN person ON person.id = appointment.customerID WHERE person.id=:theid');
    $stmt2->bindValue(':theid', $customerId, PDO::PARAM_INT);
    $stmt2->execute();
    $services = $stmt2->fetchAll(PDO::FETCH_ASSOC);
    
    //push in the values into service session variables
    foreach ($services as $service)
    {
        array_push($_SESSION['service'], $service['service']);
        array_push($_SESSION['serviceDate'], $service['date']);
        array_push($_SESSION['serviceTime'], $service['time']);
        array_push($_SESSION['serviceCost'], $service['cost']);
    }
?>