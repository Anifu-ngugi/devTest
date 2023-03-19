<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "data";
$port = '';

try {
    $conn = new PDO("mysql:host=$servername;port=$port;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];

    $stmt = $conn->prepare("INSERT INTO trial (name, email, phone) VALUES (:name, :email, :phone)");
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':phone', $phone);

    $stmt->execute();

    echo '<script type="text/javascript">alert("Registration Successful...!");window.location=\'first.html\';</script>';

} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>
