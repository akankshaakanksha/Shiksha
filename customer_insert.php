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

$sql = 'INSERT INTO Customers (Id, First_name, Last_name, Address, Phone_number, Areacode) VALUES("","'.$_POST["fname"].'","'. $_POST["lname"].'","'.$_POST["address"].'","'.$_POST["phone"].'","'.$_POST["areacode"].'")';


if ($conn->query($sql) === TRUE) {
	echo "New record created successfully";
} else {
	echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>





