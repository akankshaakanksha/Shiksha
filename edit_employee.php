<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "mementomori";
$dbname = "shiksha";

// Create connection
echo "e:";
$id = $_POST["id"];
echo $id;
if( isset($_POST["lname"]) && $_POST["lname"]){
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
}
	$sql = 'UPDATE Employees SET Last_name="'.$_POST["lname"].'" WHERE Id='. $id;
	if (mysqli_query($conn, $sql)) {
	} else {
	    echo "Error updating record: " . mysqli_error($conn);
	}

mysqli_close($conn);

}
if( $_POST["fname"]){

$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
}

	$sql = "UPDATE Employees SET First_name='".$_POST["fname"]."' WHERE Id=". $id;

	if (mysqli_query($conn, $sql)) {
	} else {
	    echo "Error updating record: " . mysqli_error($conn);
	}

mysqli_close($conn);

}
if( $_POST["salary"]){
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
}
	$sql = "UPDATE Employees SET Salary='".$_POST["salary"]."' WHERE Id=". $id;

	if (mysqli_query($conn, $sql)) {
	} else {
	    echo "Error updating record: " . mysqli_error($conn);
	}


mysqli_close($conn);

}
if( $_POST["email"]){

$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
}

	$sql = "UPDATE Employees SET Email='".$_POST["email"]."' WHERE Id=". $id;

	if (mysqli_query($conn, $sql)) {
	} else {
	    echo "Error updating record: " . mysqli_error($conn);
	}

mysqli_close($conn);

}

if( $_POST["acc_num"]){

$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
}

	$sql = "UPDATE Employees SET Account_number='".$_POST["acc_num"]."' WHERE Id=". $id;

	if (mysqli_query($conn, $sql)) {
	} else {
	    echo "Error updating record: " . mysqli_error($conn);
	}

mysqli_close($conn);

}

if( $_POST["address"]){

$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
}

	$sql = "UPDATE Employees SET Address='".$_POST["address"]."' WHERE Id=". $id;

	if (mysqli_query($conn, $sql)) {
	} else {
	    echo "Error updating record: " . mysqli_error($conn);
	}

mysqli_close($conn);

}

if( $_POST["phone"]){

$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
}

	$sql = "UPDATE Employees SET Phone='".$_POST["phone"]."' WHERE Id=". $id;

	if (mysqli_query($conn, $sql)) {
	} else {
	    echo "Error updating record: " . mysqli_error($conn);
	}

mysqli_close($conn);

}

 header('Location: /db/admin.php');
?>




