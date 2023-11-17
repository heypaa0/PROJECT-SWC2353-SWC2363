<?php
//process result
$result = "";

//connect to database
$dbHost = "localhost";
$dbName = "store";
$dbChar = "utf8";
$dbUser = "root";
$dbPass = "";

try 
{
    $pdo = new PDO
    (
        "mysql:host=$dbHost;dbname=$dbName;charset=$dbChar",$dbUser,$dbPass, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]

    );
}
catch (Exception $ex) 
{
    $result = $ex->getMessage();
}

//save order to database
if ($result == "")
{
    try
    {
        $stmt = $pdo->prepare("INSERT INTO orders (name, email, qty, address) VALUES (?, ?, ?, ?,)");
        $stmt->execute([ $_POST['name'], $_POST['email'], $_POST['qty'], $_POST['address'] ]);
    }
    catch (Exception $ex) 
    {
        $result = $ex->getMessage();
    }    
}

//send order via email (optional)
if ($result == "")
{
    $to = "admin@site.com";
    $subject = "ORDER RECEIVED";
    $message = "";
    foreach ($_POST as $k=>$v)
    {
        $message .= "$k=>$v\r\n";
    }
    if (!@mail ($to, $subject, $message))
    {
        $result = "Failed to send Mail.";
    }
}
?>