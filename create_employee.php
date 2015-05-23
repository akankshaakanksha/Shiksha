<h1>Employee Details:</h1>
<form action = "employee_insert.php" method = "post" id ="P">
First Name:<input type= "text" name = "fname" required  = true><br>
Last Name:<input type= "text" name = "lname" required = true><br>
E-mail:<input type= "email" name = "email" required = true><br>
Account Number :<input type= "text" name = "acc_num" required = true><br>
Address:<input type= "text" name = "address" required = true><br>
Salary: <select name = "salary" required = true >
<option value = "4000">4000</option>
<option value = "6000">6000</option>
<option value = "8000">8000</option>
<option value = "10000">10000</option>
<option value = "14000">14000</option>
</select>

<br>


Phone: <input type= "number" name = "phone" required = true min="9000000000" max="9999999999" ><br>
Password: <input type="text" name = "password" required = true> <br>
<br>
<h1>Dependent's Details: </h1>
First Name:<input type= "text" name = "dfname" required = true><br>
Last Name:<input type= "text" name = "dlname" required = true><br>
Phone: <input type= "number" name = "dphone" required = true min="9000000000" max="9999999999" ><br>

Relationship : <select name = "relationship"  required = true >
<option value = "Spouse">Spouse</option>
<option value = "Parent">Parent</option>
<option value = "Sibling">Sibling</option>
</select>
<br>
<input type="submit" >
</form>

