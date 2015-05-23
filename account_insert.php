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

//$sql = 'INSERT INTO Accounts (Id, Date_of_transaction, Purpose, Transaction_Type , Amount , Employee_id, Supplier_id, Newsboy_id , Customer_id, Advertiser_id) VALUES("","'.$_POST["date"].'","'. $_POST["purpose"].'","'. $_POST["type"].'", "'.$_POST["amount"].'","'.$_POST["employee"].'", "'.$_POST["supplier"].'","',$_POST['newsboy'].'","'.$_POST['customer'].'","'.$_POST['advertiser'].'")';


$sql = 'INSERT INTO Accounts(Id, Date_of_transaction, Purpose, Transaction_Type, Amount, Employee_id, Supplier_id, Newsboy_id, Customer_id, Advertiser_id) VALUES("","'.$_POST["date"] .'","'. $_POST["purpose"] . '","'. $_POST["type"] . '","' . $_POST["amount"].'","'. $_POST["employee"]. '","'. $_POST["supplier"] '","' . $_POST["newsboy"]. '","'. $_POST["customer"] . '","' .$_POST["advertiser"] .'")';

echo $sql;
if ($conn->query($sql) === TRUE) {
	echo "New record created successfully";
} else {
	echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
