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

$sql = 'INSERT INTO Items (Id, Title, Type, Language, Frequency) VALUES("","'.$_POST["title"].'","'. $_POST["type"].'","'. $_POST["language"].'", "'.$_POST["frequency"].'")';


if ($conn->query($sql) === TRUE) {
	echo "New record created successfully";
} else {
	echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>





