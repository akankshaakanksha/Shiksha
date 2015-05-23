<form action = "order_insert.php" method = "post" id ="P">
::<input type= "datetime" name = "startdate" ><br>
End Date:<input type= "datetime" name = "enddate" ><br>
Quantity:<input type= "number" name = "quantity" min="1" ><br>
Cost per Qty:<input type= "text" name ="cost" ><br>
Item: <input type= "number" name = "item" min="1" ><br>


<?php

mysql_connect('localhost', 'root', 'mementomori');
mysql_select_db('shiksha');

$sql = "SELECT Id, Company_name FROM Suppliers";
$result = mysql_query($sql);

echo "Supplier: <select name='Supplier'>";
while ($row = mysql_fetch_array($result)) {
    echo "<option value='" . $row['Id'] . "'>" . $row['Company_name'] . "</option>";
}
echo "</select><br/>";

?>

<input type="submit" value="employee">
</form>

