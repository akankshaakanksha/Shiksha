<h1>Employee Details:</h1>
<form action = "edit_employee.php" method = "post" >
First Name:<input type= "text" name = "fname"    ><br>
Last Name:<input type= "text" name = "lname"   ><br>
E-mail:<input type= "email" name = "email"  ><br>
Account Number :<input type= "text" name = "acc_num"  ><br>
Address:<input type= "text" name = "address"   ><br>
Salary: <select name = "salary" >
<option value = "4000">4000</option>
<option value = "6000">6000</option>
<option value = "8000">8000</option>
<option value = "10000">10000</option>
<option value = "14000">14000</option>
</select>

<br>

<input type= "text" name = "id"  value=<?php echo  '"'.$_GET["id"].'"'; ?>><br>

Phone: <input type= "text" name = "phone" ><br>
Password: <input type="text" name = "password"   > <br>
<br>
<h1>Dependent's Details: </h1>
First Name:<input type= "text" name = "dfname"   ><br>
Last Name:<input type= "text" name = "dlname"   ><br>
Phone: <input type= "number" name = "dphone" ><br>

Relationship : <select name = "relationship"  >
<option value = "Spouse">Spouse</option>
<option value = "Parent">Parent</option>
<option value = "Sibling">Sibling</option>

</select>
<br>
<input type="submit" >
</form>

