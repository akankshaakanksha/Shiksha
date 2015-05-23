
<?php

session_start();
//echo $_SESSION['user_id'];
//print_r($_SESSION);

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


$sql =" SELECT Id, First_name, Last_name, Account_number, Address, Joining_date, Salary, Phone, Email, Password FROM Employees WHERE Id= ".$_GET['id'];//"SELECT Id, First_name, Last_name FROM Employees WHERE Id =".$_GET['id'];
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "Name: " . $row["First_name"]. " " . $row["Last_name"]. "<br> Account Number : " . $row["Account_number"] . "<br> Address: " .$row["Address"] . "<br> Salary : ". $row["Salary"] . "<br> Joining Date: ". $row["Joining_date"] . "<br> Phone : ". $row["Phone"]. "<br>Email :" . $row["Email"] ;

$sqldep =" SELECT Id,First_name, Last_name FROM Dependents WHERE Employee_id= ".$_GET['id'];//"SELECT Id, First_name, Last_name FROM Employees WHERE Id =".$_GET['id'];
$resultdep = $conn->query($sqldep);
if ($resultdep->num_rows > 0) {
    // output data of each row
    while($rowdep = $resultdep->fetch_assoc()) {
        echo "Name: " . $rowdep["First_name"]. " " . $rowdep["Last_name"];

}
}

}
} else {
    echo "No such employee";

}




?>

<a href = "admin.php">Back</a>


