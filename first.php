<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "data";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

// include('connection.php');
$name = $_POST["name"];
$email = $_POST["email"];
$phone = $_POST["phone"];

  

$sql=mysqli_query($con,"INSERT INTO trial('name','email','phone')
 values('$name','$email','$phone')");
if($sql==true){
  echo '<script type="text/javascript">alert("Registration Successful...!");window.location='first.html';</script>';
  }
  else
    { 
      echo "Registration Error:".mysqli_error();
    }


// $connection=mysqli_connect("localhost","root","") 
//    or die("couldn't connect to servers");
//  $connection= mysqli_connect('localhost','root','','mydatabase');

//  if (!$$connection) {
//  	die("Connection failed: " . mysqli_connect_error());
//  }

// if ($_SERVER["REQUEST_METHOD"] == "POST") {
// 	$name = $_POST["name"];
// 	$email = $_POST["email"];
// 	$phone = $_POST["phone"];

// 	$sql = "INSERT INTO trial (name, email, phone) VALUES ('$name', '$email', '$phone')";
// 	if (mysqli_query($connection, $sql)) {
// 		echo "Registration successful!";
// 	} else {
// 		echo "Error: " . mysqli_error($connection);
// 	}
// }

// mysqli_close($connection);
?>

