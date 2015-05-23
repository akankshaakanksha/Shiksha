<?php

/*** begin our session ***/
session_start();

/*** check if the users is already logged in ***/
if(isset( $_SESSION['user_id'] ))
{
    $message = 'Users is already logged in';
}
/*** check that both the username, password have been submitted ***/
if(!isset( $_POST['current_user'], $_POST['current_password'],$_POST['type']))
{	//
    $message = 'Please enter a valid username and password';
}
else {

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

	if($_POST['type'] == "Admin" && $_POST['current_user'] == "Admin" && $_POST['current_password'] == "password" )
	{
		$_SESSION['type'] = 'Admin';
		echo "Hi";
		header('Location: /db/admin.php');
	}		
	else if($_POST['type'] == 'Employees')
	{	$sql = "SELECT Id, First_name, Last_name FROM Employees WHERE Email = '".$_POST['current_user']."' AND Password = '".$_POST['current_password']."'" ;
	
	$result = mysqli_query($conn, $sql);


	if (mysqli_num_rows($result) > 0) {
		// output data of each row
		while($row = mysqli_fetch_assoc($result)) {
			echo "id: " . $row["Id"]. " - Name: " . $row["First_name"]. " " . $row["Last_name"]. "<br>";
			$_SESSION['user_id'] = $row["Id"];
			$_SESSION['type'] = 'Employees';
			$message = "Logged in ";
		}		
		header('Location: /db/employee.php');

	} 
	else {
		header('Location: /db/main.php');
//			echo "0 results";
		$message = ":P";
	}
}
	$conn->close();
	echo $_SESSION['user_id'];
}


?>

<html>
<head>
<title>Login</title>
</head>
<body>
<p><?php echo $message; ?>
</body>
</html>
