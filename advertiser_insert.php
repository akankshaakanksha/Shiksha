<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "password";
$dbname = "shiksha";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}
echo ":P";

$sql = 'INSERT INTO Advertisers (Id,Title, Account_number , Phone , Date , Employee_id ) VALUES("","'.$_POST["title"].'","'. $_POST["account_number"].'","'. $_POST["phone"].'", "'.$_POST["date"].'","'.$_SESSION['user_id'].'")';


if ($conn->query($sql) === TRUE) {
	echo "New record created successfully";
} else {
	echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>





