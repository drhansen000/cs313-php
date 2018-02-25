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

    //fill in the session variables and return true if email & password match in db, else return false
    $statement = $db->prepare("SELECT name, id, password FROM person WHERE email =:theEmail");
    $statement->bindValue(':theEmail', $email, PDO::PARAM_STR);
    $statement->execute();
    $row = $statement->fetch(PDO::FETCH_ASSOC);
    if (password_verify($_POST['password'], $row['password']))
    {
        $_SESSION['userName'] = $row['name'];
        $_SESSION['userId']   = $row['id'];
        echo(true);
    }
    else 
    {
        echo(false);
    }

    //create and execute PDO for purchased products
    $stmt = $db->prepare('SELECT product.name, size, price, picture FROM product JOIN purchaseHistory ON product.id = purchaseHistory.productid JOIN person ON person.id = purchaseHistory.personid WHERE person.id=:theid');
    $stmt->bindValue(':theid', $_SESSION['userId'], PDO::PARAM_INT);
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

    include("setAppointmentVariables.php");
?>