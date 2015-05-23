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

$sql = 'INSERT INTO Orders (Id, Ordered_Date, Start_date, End_date, Quantity, Cost_per_copy, Employee_id , Item_id , Status , Supplier_id) VALUES("","'.date("Y-m-d H:i:s"). '","'.$_POST["startdate"].'","'. $_POST["enddate"].'","'. $_POST["quantity"].'", "'.$_POST["cost"].'","'.$_SESSION['user_id'].'","'.$_POST["item"].'", "0" , "'.$_POST["Supplier"].'")';


if ($conn->query($sql) === TRUE) {
	echo "New record created successfully";
} else {
	echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>





