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
echo ":P";

$sql = 'INSERT INTO Suppliers (Id, Company_name, Liasion_name, Account_number, Address, Liasion_Phone, Email, Password, Phone) VALUES("","'.$_POST["cname"].'","'. $_POST["lname"].'","'. $_POST["acc_num"].'", "'.$_POST["address"].'","'.$_POST["liasion_phone"].'","'. $_POST["email"].'","'. $_POST["password"].'","'.$_POST["phone"].'")';


if ($conn->query($sql) === TRUE) {
	echo "New record created successfully";
} else {
	echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>





