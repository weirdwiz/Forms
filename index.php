<!DOCTYPE html>

<head>
	<link rel="stylesheet" href="style.css">
	<link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<title>Open Form</title>
</head>

<body>
	<div class="head" align="center">Open Form</div>
	<div class="main">
		<div class="sign" align="center">Sign in</div>
		<form class="form1" action="authenticate.php" method="post">
			<input class="username" type="text" name="username" align="center" placeholder="Username" required>
			<input class="password" type="password" name="password" align="center" placeholder="Password" required>
			<input class="submit" type="submit" value="Sign in" align="center">
			<a href="signup.php">
				<div class="register" align="center">Sign Up</div>
			</a>
		</form>
	</div>
</body>

</html>