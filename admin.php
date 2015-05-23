

<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
<div class="container theme-showcase" role="main">
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
<h1 class="page-header"> Employees :</h1>
<?php
$sql = "SELECT Id, First_name, Last_name ,Phone, Email FROM Employees ";

$result = mysqli_query($conn, $sql);


if (mysqli_num_rows($result) > 0) {
        // output data of each row
/*        while($row = mysqli_fetch_assoc($result)) {


                ?><li><?php
                        echo  $row["First_name"]. " " . $row["Last_name"]. " ".$row["Email"]." " .$row["Phone"] . "<br>";

                ?></li><?php } ?>
                </ul> <?php


*/

$count = 1;

echo '<table class="table table-striped" >
    <tr>
        <th>ID</th>
        <th>Name</th>
	<th>Email</th>
	<th>Contact Number</th>
    </tr>';

while ($row = mysqli_fetch_array($result)) {
    echo '
        <tr>
	    <td>'.$count.'</td>
            <td>'.$row["First_name"]." " .$row["Last_name"].'</td>
	    <td>'.$row["Email"].'</td>
	    <td>'.$row["Phone"].'</td>

<td><a class="label label-primary" href="view_employee.php?id='.$row["Id"].'" >View</a>
    </td>   
<td><a class="label label-success" href="editform_employee.php?id='.$row["Id"].'" >Edit </a>
    </td>  

<td><a class="label label-danger" href="delete_employee.php?id='.$row["Id"].'" >Delete</a>
    </td>  
 </tr>';

	$count++;
}

echo '
</table>';



}

$conn->close();

echo "<br/><br>";

?>
<h1  class="page-header" >Transactions</h1>
<br>
<?php
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
}



$sql = "SELECT Id, Date_of_transaction, Purpose, Transaction_Type, Amount, Employee_id, Supplier_id, Newsboy_id, Customer_id, Advertiser_id FROM Accounts"; 

$result = mysqli_query($conn, $sql);


if (mysqli_num_rows($result) > 0) {
        // output data of each row
/*        while($row = mysqli_fetch_assoc($result)) {


                ?><li><?php
                        echo  $row["First_name"]. " " . $row["Last_name"]. " ".$row["Email"]." " .$row["Phone"] . "<br>";

                ?></li><?php } ?>
                </ul> <?php


*/

$count = 1;
echo '<table class="table table-striped" >
    <tr>
    <th>Id</th><th>Date_of_transaction</th> <th>Purpose</th> <th>Transaction_Type</th> <th>Amount</th> <th>Account Number</th>
	</tr>';

while ($row = mysqli_fetch_array($result)) {
 if( $row["Purpose"] == "Supplier" )
	$var = $row["Supplier_id"];

if( $row["Purpose"] == "Employee" )
	$var = $row["Employee_id"];
if( $row["Purpose"] == "Advertiser" )
	$var = $row["Advertiser_id"];
if( $row["Purpose"] == "Customer" )
	$var = $row["Customer_id"];
else $var = $row["Newsboy_id"];
   echo '
        <tr>
	    <td>'.$count.'</td>
            <td>'.$row["Date_of_transaction"].'</td>
	    <td>'.$row["Purpose"].'</td>
	    <td>'.$row["Transaction_Type"].'</td>
	    <td>'.$row["Amount"].'</td>
	    <td>'.$var.'</td>
	
<td><a href="editform_account.php?id='.$row["Id"].'" >Edit</a>
    </td>  

<td><a href="delete_account.php?id='.$row["Id"].'" >Delete</a>
    </td>  
 </tr>';

	$count++;
}

echo '
</table>';


}

$conn->close();
?>
<a href = "create_employee.php " >
<button type="button">Add Employee</button></a>

<a href = "create_asset.php">
<button type = "button" >Add new Asset</button></a>

<a href = "create_account.php">
<button type = "button" > Add New Transaction </button></a>

</div> 
