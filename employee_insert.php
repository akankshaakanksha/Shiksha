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

$sql = 'INSERT INTO Employees (Id, First_name, Last_name, Account_number, Address, Joining_date, Salary, Phone, Email, Password) VALUES("","'.$_POST["fname"].'","'. $_POST["lname"].'","'. $_POST["acc_num"].'", "'.$_POST["address"].'","'.date("Y-m-d H:i:s") .'","'.$_POST["salary"].'","'.$_POST["phone"].'","'. $_POST["email"].'","'. $_POST["password"].'")';


if ($conn->query($sql) === TRUE) {
	$conn2= new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn2->connect_error) {
		die("Connection failed: " . $conn2->connect_error);
}
	$last_id = mysqli_insert_id($conn);
	$sql = 'INSERT INTO Dependents ( First_name, Last_name, Phone, Relationship, Employee_id) VALUES("'.$_POST["dfname"].'","'. $_POST["dlname"].'","'.$_POST["dphone"].'","'. $_POST["relationship"].'","'.$last_id .'")';
	if ($conn2->query($sql) === TRUE) {
		echo "New record created successfully";
	}

 else {
	echo "Error: " . $sql . "<br>" . $conn->error;
}
	}
 else {
	echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn2->close();
$conn->close();
?>





