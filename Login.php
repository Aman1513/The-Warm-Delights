<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="CSS\login.css">
</head>
<body>
<div class="box">
	<img src="CSS/img/user.png" class="avtar">
	<h1>Login Here</h1>
	<form action="log_dbms.php" method="post">
		<p>Email</p>
		<input type="Email" name="Email" placeholder="Email" required="1">
		<p>Password</p>
		<input type="Password" name="Password" placeholder="Password" required="1">
		<input type="submit" name="submit" value="Login">
		<a class="dot" href="forpass.php">Forget Password</a>
		<p class="or">Or</p>
		<a class="dot1" href="register.php"><p>Create New Account</p></a>
	</form>
</div>
</body>
</html>