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

?>
<h1>Employees</h1>
<ul>

<?php
$sql = "SELECT Id, First_name, Last_name ,Phone, Email FROM Employees ";

$result = mysqli_query($conn, $sql);


if (mysqli_num_rows($result) > 0) {
	// output data of each row
	while($row = mysqli_fetch_assoc($result)) {


		?><li><?php
			echo  $row["First_name"]. " " . $row["Last_name"]. " ".$row["Email"]." " .$row["Phone"] . "<br>";

		?></li><?php } ?>
		</ul> <?php
}

?>


<a href = "create_employee.php " >
<button type="button"> Add Employee</button> </a>

<a href = "create_advertiser.php " >
<button type="button"> Add Advertiser</button> </a>


<h1> Customers: </h1>
<?php 
$sql = "SELECT First_name, Last_name , Phone_number , Address FROM Customers";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo " Name: " . $row["First_name"]. " " . $row["Last_name"]. "  Address : ". $row["Address"]."<br>";

    }
} else {
    echo "No customers"."<br>";
}
?>
<a href = "create_customer.php " >
<button type="button"> Add Customer</button> </a>



<a href = "create_subscription.php" >
<button type="button"> Subscribe </button></a>


<h1> Suppliers: </h1>
<?php 
$sql = "SELECT Company_name, Email , Phone_number , Address FROM Suppliers";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo " Name: " . $row["Company_name"]. " " . $row["Email"]. "  Address : ". $row["Address"]."<br>";

    }
} else {
    echo "No suppliers"."<br>";
}
?>
<a href = "create_supplier.php " >
<button type="button"> Add Supplier</button> </a>

<a href = "create_order.php" >
<button type="button"> Order </button></a>





<h1> Newsboys: </h1>
<?php 
$sql = "SELECT Fisrt_name, Areacode ,Phone  FROM Suppliers";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo " Name: " . $row["First_name"]. " " . $row["Phone"]. "  Area : ". $row["Areacode"]."<br>";

    }
} else {
    echo "No newsboys"."<br>";
}
?>


<a href = "create_newsboy.php " >
<button type="button"> Add Newsboy</button> </a>


<a href = "create_item.php " >
<button type="button"> Add New Item</button> </a>


