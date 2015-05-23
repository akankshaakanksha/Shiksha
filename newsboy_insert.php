<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "mementomori";
$dbname = "shiksha";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}
echo $_SESSION['type'];
echo $_SESSION['u)ser_id'];
if(!isset($_POST['vehicle']))
	$vechile = NULL;
else
	$vehicle = $_POST['vehicle'];
$sql = 'INSERT INTO Newsboys (Id, First_name, Last_name, Phone, Wage, Employee_id, Vehicle_id, Date_joining, Areacode) VALUES("","'.$_POST["fname"].'","'. $_POST["lname"].'","'. $_POST["phone"].'", "'.$_POST["wage"].'","'.$_SESSION['user_id'].'","'.$vehicle.'","'.date("Y-m-d H:i:s") .'","'.$_POST["areacode"].'")';


if ($conn->query($sql) === TRUE) {
	echo "New record created successfully";
} else {
	echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>





