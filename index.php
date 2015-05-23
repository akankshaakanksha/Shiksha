<form action = "insert.php" method = "post">
First Name: <input type = "text" name="first">
</form>

<?php $username="root";
$password = "mementomori";
$database = "shiksha";

mysql_connect(localhost,$username,$password);
mysql_select_db($database) or die( "Unable to select database");
//$query= "INSERT INTO Customers VALUES('','Panda','bamboo','0987654321','Jungle','Bhilai')";



mysql_query($query);

 mysql_close();
?>

JEl
