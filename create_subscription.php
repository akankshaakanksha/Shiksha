<form action = "subscription_insert.php" method = "post" id ="P">
Start Date:<input type= "text" name = "startdate" ><br>
End Date:<input type= "text" name = "enddate" ><br>
Quantity:<input type= "text" name = "quantity" ><br>
Cost per Qty:<input type= "text" name ="cost" ><br>
Item: <input type= "number" name = "item" min="1" ><br>


<?php

mysql_connect('localhost', 'root', 'password');
mysql_select_db('shiksha');

$sql = "SELECT Id, First_name, Last_name FROM Customers";
$result = mysql_query($sql);

echo "Customer: <select name='Customer'>";
while ($row = mysql_fetch_array($result)) {
    echo "<option value='" . $row['Id'] . "'>" . $row['First_name'] ." ".$row['Last_name']. "</option>";
}
echo "</select><br/>";

?>

<input type="submit" value="employee">
</form>

