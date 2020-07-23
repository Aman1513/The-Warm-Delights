<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Sign Up</title>
	<link rel="stylesheet" type="text/css" href="CSS\register.css">
</head>
<body>
<div class="box">
	<img src="CSS/img/user.png" class="avtar">
	<h1>Sign Up</h1>
	<form action="reg_dbms.php" method="post">
		<p class="bold">First Name</p>
		<input type="text" name="fname" placeholder="First Name" required="1">
		<p class="bold">Last Name</p>
		<input type="text" name="lname" placeholder="Last Name" required="1">
		<p class="bold">Phone Number</p>
		<input type="text" name="phone" placeholder="Phone Number" required="1">
		<p class="bold">Email</p>
		<input type="Email" name="Email" placeholder="Email" required="1">
		<p class="bold">Favorite Food</p>
		<input type="text" name="food" placeholder="It'll use for your Password Recovery" required="1">
		<p class="bold">Password</p>
		<input type="Password" name="Password" placeholder="Password" required="1">
		<p class="bold">Confirm Password</p>
		<input type="Password" name="cPassword" placeholder="Confirm Password" required="1">
		<input type="submit" name="submit" value="Sign Up">
		<p class="or">Or</p>
		<p class="dot">Already have an account</p>
		<a class="dot1" href="Login.php"><p>Log In</p></a>
	</form>
</div>
</body>
</html>