<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js" ></script>
<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.2/jquery-ui.min.js"></script>

<script> $('#type').on('change',function(){
     var selection = $(this).val();
	
    switch(selection){
    case "Debit":
    $("#otherType").show()
    break;
    case "Credit":
     $("#otherType").show()
   break;
    default:
    $("#otherType").hide()
    }
});
</script>

<h1>Transaction Details:</h1>
<form action = "account_insert.php" method = "post">
Date of Transaction:<input type= "text" name = "date" required = true ><br>
Purpose:<select name = "purpose"  required = true ><br>
<option value ="Customer">Customer</option>
<option value ="Advertiser">Advertiser</option>
<option value ="Newsboy">Newsboy</option>
<option value ="Supplier">Supplier</option>
<option value ="Employee">Employee</option>
</select>
Trasaction Type:<select name = "type" id = "type" required = true >
<option value = "Debit">Debit</option>
<option value = "Credit" > Credit</option>
</select>
<br>
Amount:<input type= "number" name = "amount" required = true ><br>
<?php

mysql_connect('localhost', 'root', 'password');
mysql_select_db('shiksha');

$sql = "SELECT Id, Company_name FROM Suppliers";
$result = mysql_query($sql);

echo "Supplier: <select name='supplier' required = true   >";
while ($row = mysql_fetch_array($result)) {
    echo "<option value='" . $row['Id'] . "'>" . $row['Company_name'] . "</option>";
}
echo "</select><br/>";

?>

<?php

mysql_connect('localhost', 'root', 'password');
mysql_select_db('shiksha');

$sql = "SELECT Id, First_name, Last_name FROM Customers";
$result = mysql_query($sql);

echo "Customer: <select name='customer' required = true >";
while ($row = mysql_fetch_array($result)) {
    echo "<option value='" . $row['Id'] . "'>" . $row['First_name'] ." ".$row['Last_name']. "</option>";
}
echo "</select><br/>";

?>


<?php

mysql_connect('localhost', 'root', 'password');
mysql_select_db('shiksha');

$sql = "SELECT Id, First_name, Last_name FROM Newsboys";
$result = mysql_query($sql);

echo "Newsboy: <select name='newsboy' required = true >";
while ($row = mysql_fetch_array($result)) {
    echo "<option value='" . $row['Id'] . "'>" . $row['First_name'] ." ".$row['Last_name']. "</option>";
}
echo "</select><br/>";

?>

<?php

mysql_connect('localhost', 'root', 'password');
mysql_select_db('shiksha');

$sql = "SELECT Id, First_name, Last_name FROM Employees";
$result = mysql_query($sql);

echo "Employee: <select name='employee' required = true >";
while ($row = mysql_fetch_array($result)) {
    echo "<option value='" . $row['Id'] . "'>" . $row['First_name'] ." ".$row['Last_name']. "</option>";
}
echo "</select><br/>";

?>


<?php

mysql_connect('localhost', 'root', 'password');
mysql_select_db('shiksha');

$sql = "SELECT Id, Company_name  FROM Advertisers";
$result = mysql_query($sql);

echo "Advertiser: <select name='advertiser' required = true >";
while ($row = mysql_fetch_array($result)) {
    echo "<option value='" . $row['Id'] . "'>" . $row['Company_name']. "</option>";
}
echo "</select><br/>";

?>
?******type of user to be shown only when selected """"

<br>
<br>
<input type="submit" >
</form>

