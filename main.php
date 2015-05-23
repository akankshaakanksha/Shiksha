<html> 
<head>
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
	
	<title>
		Shiksha Login
	</title> 
</head> 
<body>
	<div class="container theme-showcase" role="main">	
	<h2 class='page-header'>Shiksha Newspaper Delivery</h2> 
	<div class=col-sm-4>	
	<div class="panel panel-primary">
	<div class= "panel-heading">
		<h3 class="panel-title"> LOGIN </h3>
	</div>
	<div class="panel-body">
	<div class="form-group">
	<form action="login_submit.php" accept-charset='utf-8' method="post"> 
	<fieldset> 
		<p> 
			<label for="current_user">Username : </label> 
			<input type="text" id="current_user" name="current_user" value="" maxlength="20" /> 
		</p> 
		<p> 
			<label for="current_password">Password  : </label> 
			<input type="text" id="current_password" name="current_password" value="" maxlength="20" /> 
		</p>
		<p>
			<label for="type">User Type :</label> 
			<select name="type">
				<option value="Employees">Employee</option>
				<option value="Newsboys">Newsboy</option>
				<option value="Customers" selected>Customer</option>
				<option value="Suppliers">Supplier</option>	
				<option value="Admin">Admin</option>
			</select> 
		<p> 
			<input  class="btn btn-sm btn-primary" type="submit" value="Login" /> 

		</p> 
	</fieldset> 
	</form> 
	</div>
	</div>
	</div>
	</div> 	
	</div>
</body> 
</html> 
