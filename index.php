<?php
$host = "localhost";
$username = "root";
$password = "";


try
{
    $conn = new PDO("mysql:host=$host;dbname=phpregister", $username, $password);

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "connected successfully";
    
}

catch(PDOException $e)
{
    echo "connection failed: " . $e->getMessage();
}
if(isset($_POST['submit']))
{
        $sql = "INSERT INTO registration(name, number, email) VALUES('".$_POST['name']."', '".$_POST['number']."', '".$_POST['email']."')";
        $conn->query($sql);
}

?>

