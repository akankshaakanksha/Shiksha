<form action = "newsboy_insert.php" method = "post" id ="P">
Start Date:<input type= "text" name = "startdate" ><br>
End Date:<input type= "text" name = "enddate" ><br>
Quantity:<input type= "text" name = "quantity" ><br>
Cost per Qty:<input type= "text" name ="cost" ><br>
Item: <input type= "number" name = "item" ><br>
Supplier: <select name="supplier">
	<?php 

session_start();
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


$sql = "SELECT Id, Company_name  FROM Suppliers";
$result = $conn->query($sql);

    // output data of each row
    while($row = $result->fetch_assoc()) {?>
        <option value = <?php echo '"'. $row["Id"] . '"'?> ><?php echo $row["Company_name"] ?>"</option>;
<?php
    }
?>
</select> <br>

<input type="submit" value="employee">
</form>

