<!DOCTYPE html>

<head>
	<link rel="stylesheet" href="style.css">
	<link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<title>Open Form</title>
</head>

<body>
	<p class="head" align="center">Open Form</p>
	<div class="main">
		<p class="sign" align="center">Sign in</p>
		<form class="form1" action="authenticate.php" method="post">
			<input class="un " type="text" name="uname" align="center" placeholder="Username" required>
			<input class="pass" type="password" name="pass" align="center" placeholder="Password" required>
			<input class="submit" type="submit" value="Sign in" align="center">
			<p class="forgot" align="center"><a href="#">Forgot Password?</a></p>
			<a href="signup.php">
				<p class="register" align="center">Sign Up</p>
			</a>
		</form>
	</div>
</body>

</html>